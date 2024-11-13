@extends('customer.index')

@section('content')
<section id="course-detail" class="my-5">
    <div class="container">
        <h2 class="mb-4">{{ $course->title }}</h2>
        
        <!-- Tambahkan foto di bawah judul course -->
        <div class="course-image mb-4" align="center">
            <img width="150" height="150" src="{{ url('storage/course/' . $course->foto) }}">
        </div>

        <div class="row">
            <!-- Bagian kiri untuk deskripsi kursus -->
            <div class="col-md-8">
                <div class="course-description p-4 bg-light rounded mb-4">
                    <p>{{ $course->description }}</p>
                </div>

                <div class="course-info p-3 bg-white rounded shadow-sm">
                    <p><strong>Instructor:</strong> {{ $course->instructor->user->name ?? 'N/A' }}</p>
                    <p><strong>Price:</strong> {{ $course->price > 0 ? 'Rp. ' . number_format($course->price, 0, ',', '.') : 'Free' }}</p>

                    <!-- Tombol Beli Sekarang atau Claim Sekarang -->
                    @if ($course->price > 0)
                        <a href="{{ route('pembayaran', ['id' => $course->id]) }}" class="btn btn-primary mt-3">Beli Sekarang</a>
                    @else
                        <a href="{{ route('courses.course', ['id' => $course->id]) }}" class="btn btn-success mt-3">Claim Sekarang</a>
                    @endif
                </div>
            </div>

            <!-- Bagian kanan untuk menampilkan Course Contents -->
            <div class="col-md-4">
                <div class="course-contents p-4 bg-light rounded shadow-sm">
                    <h3 class="mb-3">Course Contents</h3>
                    <!-- Looping berdasarkan section dari course_content -->
                    @foreach ($course->contents->groupBy('section.name') as $sectionName => $contents)
                        <div class="course-section mb-4">
                            <h4 class="font-weight-bold text-primary">{{ $sectionName ?? 'Uncategorized' }}</h4>
                            <div class="list-group">
                                @foreach ($contents as $index => $content)
                                    <div class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            @if ($course->is_locked == 1 && $index > 0)
                                                <!-- Materi terkunci -->
                                                <h5 class="mb-1 text-muted">
                                                    <i class="fa fa-lock"></i> {{ $content->title }}
                                                </h5>
                                                <small class="text-muted">Locked</small>
                                            @else
                                                <!-- Materi terbuka -->
                                                <h5 class="mb-1">
                                                    <a href="{{ $content->url }}" target="_blank" class="text-decoration-none">
                                                        {{ $content->title }}
                                                    </a>
                                                </h5>
                                            @endif
                                        </div>
                                        <!-- Menampilkan deskripsi, kategori, dan nama section dari setiap content -->
                                        <p class="mb-1">{{ $content->description }}</p>
                                        <small><strong>Category:</strong> {{ $content->category->category_name ?? 'N/A' }}</small><br>
                                        <small><strong>Section:</strong> {{ $content->section->section ?? 'Uncategorized' }}</small><br>
                                        <small><strong>Duration:</strong> {{ $content->duration }} Minutes</small>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
