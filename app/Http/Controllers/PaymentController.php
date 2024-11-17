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
        // Validasi metode pembayaran
        $request->validate([
            'payment_method' => 'required',
        ]);

        // Ambil kursus berdasarkan ID
        $course = Course::findOrFail($id);
        $discountAmount = 0;
        $couponId = null;
        $udemyCoupon = 0;

        // Periksa apakah kupon disertakan
        if ($request->filled('coupon_id')) {
            $coupon = Cupon::find($request->id);

            // Terapkan kupon jika ada
            if ($coupon) {
                $couponId = $coupon->id;
                $udemyCoupon = 1;

                // Hitung diskon berdasarkan tipe
                if ($coupon->discount_type === 'percentage') {
                    $discountAmount = ($course->price * $coupon->discount_value) / 100;
                } else if ($coupon->discount_type === 'nominal') {
                    $discountAmount = $coupon->discount_value;
                }
            }
        }

        // Hitung harga total setelah diskon
        $totalPrice = max($course->price - $discountAmount, 0);

        // Simpan data pendaftaran
        $enrollment = Enrollments::create([
            'user_id' => auth()->id(),
            'course_id' => $course->id,
            'coupon_id' => $couponId,
            'enrollment_date' => now(),
            'discount_amount' => $discountAmount,
            'total_price' => $totalPrice,
            'udemy_coupon' => $udemyCoupon,
        ]);

        // Proses pembayaran (simulasikan berhasil untuk sekarang)
        $paymentSuccess = true;

        if ($paymentSuccess) {
            // Update status kursus menjadi tidak terkunci
            $course->is_locked = 0;
            $course->save();

            // Redirect kembali ke halaman kursus dengan pesan sukses
            return redirect()->route('detail', ['id' => $course->id])
                ->with('success', 'Pembayaran berhasil, akses materi telah dibuka.');
        }

        // Jika pembayaran gagal, redirect kembali dengan pesan error
        return back()->with('error', 'Pembayaran gagal, silakan coba lagi.');
    }
}
