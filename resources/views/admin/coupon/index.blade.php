@extends('admin.index')

@section('content')
    <br><br><br><br><br>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Kupon Diskon</h5>
                <a href="{{ url('tambahcoupon') }}" class="ti ti-plus">Tambah Koupon</a>
                <div class="card">
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kupon</th>
                                        <th>Deskripsi</th>
                                        <th>Tipe Diskon</th>
                                        <th>Nilai Diskon</th>
                                        <th>Berlaku Dari</th>
                                        <th>Berlaku Hingga</th>
                                        <th>Batas Penggunaan</th>
                                        <th>Total Penggunaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coupons as $coupon)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $coupon->cupon_code }}</td>
                                            <td>{{ $coupon->description }}</td>
                                            <td>{{ ucfirst($coupon->discount_type) }}</td>
                                            <td>{{ $coupon->discount_value }}</td>
                                            <td>{{ $coupon->valid_form->format('d-m-Y') }}</td>
                                            <td>{{ $coupon->valid_until->format('d-m-Y') }}</td>
                                            <td>{{ $coupon->usage_limit }}</td>
                                            <td>{{ $coupon->total_usage }}</td>
                                            <td>
                                                <form action="{{ route('deletecoupon', $coupon->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
