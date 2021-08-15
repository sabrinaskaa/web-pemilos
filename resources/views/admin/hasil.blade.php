@extends('admin.template')
@section('template-admin')
    
    <header class="l-header scroll-header" id="header">
        <nav class="d-flex flex-column align-items-center justify-content-center nav bd-container nav-visi-misi">
            <div class="custom-select-wrapper">
                <div class="header-content">
                    <div class="title-hasil"><span>{{ $title }}</span></div>
                    <div class="btn-group btn-group-hasil">
                        <button type="button" class="btn-hasil-kiri">{{ $name }}</button>
                        <button type="button" class="btn-hasil-kanan dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">{{ $name }}</a>
                            <a class="dropdown-item" href="/daftar">DAFTAR SISWA</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav> 
    </header>

    <main class="main-admin">
        <div class="card-row">
            @foreach ($candidates as $candidate)
            <div class="card card-1">
                
                <img class="card-image" src="{{ asset('assets/img/'. $candidate->foto) }}">
                
                <div class="card-section-hasil">
                    <p class="card-kandidat">KANDIDAT {{ $candidate->id }}</p>
                    
                    <h1 class="presentase">{{ number_format($candidate->user->count()/$jumlah * 100) }}%</h1>
                </div>
            </div>
            @endforeach
        </div>
    </main>

@endsection