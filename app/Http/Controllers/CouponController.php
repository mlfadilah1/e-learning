<?php

namespace App\Http\Controllers;

use App\Models\cupon;
use App\Models\Enrollments;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Cupon::all(); // Mengambil semua data kupon dari database
        return view('admin.coupon.index', compact('coupons'));
    }
    public function tambah()
    {
        return view('admin.coupon.tambah'); // Halaman form tambah coupon
    }

    // Menyimpan data coupon ke database
    public function submit(Request $request)
    {
        // Validasi input dari user
        $request->validate([
            'cupon_code' => 'required|string|max:255|unique:cupons,cupon_code', // Memastikan kode kupon unik
            'description' => 'required|string|max:500',
            'discount_type' => 'required|in:percentage,flat',
            'discount_value' => 'required|numeric|min:0',
            'valid_form' => 'required|date',
            'valid_until' => 'required|date|after:valid_form',
            'usage_limit' => 'required|integer|min:1',
            'total_usage' => 'required|integer|min:0',
        ]);

        // Membuat data coupon baru
        $coupon = new Cupon();
        $coupon->coupon_code = $request->coupon_code;
        $coupon->description = $request->description;
        $coupon->discount_type = $request->discount_type;
        $coupon->discount_value = $request->discount_value;
        $coupon->valid_form = $request->valid_form;
        $coupon->valid_until = $request->valid_until;
        $coupon->usage_limit = $request->usage_limit;
        $coupon->total_usage = $request->total_usage;
        $coupon->save(); // Menyimpan coupon baru ke database

        // Redirect ke halaman daftar coupon dengan pesan sukses
        return redirect()->route('coupon.index')->with('success', 'Kupon berhasil ditambahkan.');
    }

}
