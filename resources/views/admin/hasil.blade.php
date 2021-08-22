@if ($jumlah == 0)

    <div class="container align-items-center">
        <div class="center">
            <h1>Belum Ada Voting</h1>
        </div>
    </div>
    
@else
@extends('admin.template')
@section('template-admin')
<main class="main-admin">
    <div class="card-row card-row-admin">
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
@endif
