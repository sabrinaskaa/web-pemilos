@extends('layout.main')
@section('container')
    @if (Auth::user()->status == "belum")
        @include('partial.nav')
        <div class="card-row d-flex align-items-center">
            @foreach ($voting as $v)
            <div class="card card-1">
                <img class="card-image" src="assets/img/{{ $v->foto }}">
                <div class="card-section">
                    <p class="card-text">KANDIDAT {{ $v->id }}</p>
                    <a href="{{ $v->slug }}">
                        <button class="visi-misi_button">Visi dan Misi</button>
                    </a>
                    <form enctype="multipart/form-data" action="{{route('pilih',['id'=>Auth::user()->id])}}" method="POST" class="form-group">
                        @csrf
                        <input type="hidden" name="_method" value="PUT" class="form-control">
                        <button name="candidate_id" value="{{ $v->id }}" class="vote_button">Pilih</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    @else
    <section class="form_section pt-5">
        <div class="container a-container d-flex align-items-center">
            <div class="form d-flex flex-column">
                <h1 class="text-md-center text-uppercase font-weight-bold">you've already chosen</h1>    
            </div>
        </div>
    </section>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection


