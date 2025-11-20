@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Welcome Section -->
    <div class="row welcome-section">
        <div class="col-12 text-center">
            <h1 class="welcome-title">🌴 Selamat Datang di BaliHaven Dashboard! 🌟</h1>
            <p class="welcome-subtitle">Kelola semua data dan fitur aplikasi dengan mudah dan efisien.</p>
        </div>
    </div>

    <!-- Statistik Section -->
    <div class="row statistics-section">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Pengguna</h5>
                    <h2 class="card-number"><i class="fas fa-users"></i> 1,230</h2>
                </div>
                <div class="card-footer">
                    <small>+150 pengguna baru bulan ini</small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tempat Wisata</h5>
                    <h2 class="card-number"><i class="fas fa-map-marker-alt"></i> 350</h2>
                </div>
                <div class="card-footer">
                    <small>5 tempat wisata baru ditambahkan</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pemesanan Aktif</h5>
                    <h2 class="card-number"><i class="fas fa-shopping-cart"></i> 89</h2>
                </div>
                <div class="card-footer">
                    <small>12 pemesanan dalam proses</small>
                </div>
            </div>
        </div>
    </div>

   

    <!-- Announcement Section -->
    <div class="row announcement-section">
        <div class="col-12">
            <h4 class="announcement-title">📢 Pengumuman</h4>
            <div class="announcement-card">
                <strong>Info terbaru:</strong> Paket Wisata Tahun Baru telah diluncurkan! Perbarui informasi untuk
                meningkatkan ketertarikan pengguna.
            </div>
        </div>
    </div>
</div>



@endsection
