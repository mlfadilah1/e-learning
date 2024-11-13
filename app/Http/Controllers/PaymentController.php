<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\cupon;
use App\Models\Enrollments;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index($id)
    {
        $course = course::findOrFail($id);
        $coupons = Cupon::all();
        return view('customer.payment.index', compact('course', 'coupons'));
    }

    public function submit(Request $request, $id)
    {
        // Validate the payment method
        $request->validate([
            'payment_method' => 'required',
        ]);

        // Retrieve the course based on the ID
        $course = Course::findOrFail($id);
        $discountAmount = 0;
        $couponId = null;

        // Check if a coupon code is provided
        if ($request->filled('cupon_code')) {
            $coupon = cupon::where('code', $request->coupon_code)->first();

            // Apply the coupon if it's valid
            if ($coupon) {
                $discountAmount = $coupon->discount_amount;  // Get the discount amount
                $couponId = $coupon->id;  // Store the coupon ID
                $udemyCoupon = 1;
            }
        }

        // Calculate the total price after applying any discounts
        $totalPrice = $course->price - $discountAmount;

        // Save the enrollment data
        $enrollment = Enrollments::create([
            'user_id' => auth()->id(),
            'course_id' => $course->id,
            'coupon_id' => $couponId,
            'enrollment_date' => now(),
            'discount_amount' => $discountAmount,
            'total_price' => $totalPrice,
            'udemy_coupon' => $udemyCoupon, // 'udemy_coupon' => $coupon ? 1 : 0,  // Set to 1 if a coupon is used
        ]);

        // Here you can process the payment through a gateway
        // In this example, we assume the payment is successful
        $paymentSuccess = true;

        if ($paymentSuccess) {
            // Update the course status to unlocked
            $course->is_locked = 0;
            $course->save();

            // Redirect back to the course page with a success message
            return redirect()->route('course.show', ['id' => $course->id])
                ->with('success', 'Pembayaran berhasil, akses materi telah dibuka.');
        }

        // If payment failed, redirect back with an error message
        return back()->with('error', 'Pembayaran gagal, silakan coba lagi.');
    }
}
