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
        <div class="card mt-5" id="card{{ $candidate->id }}">
            <img class="card-image" src="{{ asset('assets/img/'. $candidate->foto) }}">
            <div class="card-section-hasil">
                <p class="card-kandidat">KANDIDAT {{ $candidate->id }}</p>
                <h1 class="presentase">{{ number_format($candidate->user->count()/$jumlah * 100) }}%</h1>
                <div class="down__card" id="down-text{{ $candidate->id }}">
                    <div class="down-card-text" id="text{{ $candidate->id }}">
                        <span class="number-vote"><strong>{{ $candidate->user->count() }}</strong></span>
                        SUARA
                    </div>
                </div>
                <span class="link-dropdown-icon" id="down-icon{{ $candidate->id }}">
                    <i class="fas fa-caret-down" id="down-icon{{ $candidate->id }}"></i>
                </span>
            </div>
        </div>
        @endforeach
    </div>

    <script src="../js/collapse.js" type="text/javascript"></script>
    <script src="../js/navscript.js" type="text/javascript"></script>

</main>
@endsection
@endif
