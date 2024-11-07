@extends('admin.app')
@section('title','Daftar Courses Sections | IdeaThings E-Learning')
{{-- @section('js')
    <script src="sweetalert2.min.js"></script>

    <script>
        $(function() {
            $(document).on('click', '.delete-button', function(e) {
                e.preventDefault();
                var form = $(this).closest('form');

                Swal.fire({
                    title: "Apakah anda yakin menghapus data ini?",
                    text: "Anda tidak akan dapat mengembalikan data ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Saya Yakin!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            })
        })
    </script>
@endsection --}}
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Content</h5>
                <a href="{{ url('tambahcontent') }}" class="ti ti-plus">Tambah Content</a>
                <div class="card">
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Kursus</th>
                                        <th>Kategori</th>
                                        <th>Section</th>
                                        <th>Judul Pembahasan</th>
                                        <th>URL</th>
                                        <th>Durasi (menit)</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @forelse ($content as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->course_title }}</td>
                                            <td>{{ $data->category_name }}</td>
                                            <td>{{ $data->section }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td><a href="{{ $data->url }}" target="_blank">{{ $data->url }}</a></td>
                                            <td>{{ $data->duration }}</td>
                                            <td>
                                                <a href="{{ url('edit/' . $data->id) }}">Edit</a>
                                                <a href="{{ url('deleteuser/' . $data->id) }}" class="ti ti-trash" id="delete"></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">Data content tidak tersedia.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection