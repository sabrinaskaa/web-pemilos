@extends('layout.main')
@section('container')
    @if (Auth::user()->status == "belum")

        <nav class="nav-visi-misi bd-container ml-3">
            <div class="justify-content-between">
                <a href="/voting" class="nav-back text-decoration-none">
                    <i class="fas fa-chevron-left nav-back"></i>
                </a>
                <a href="/voting" class="ml-0 nav-back text-decoration-none">
                    Kembali
                </a>
            <div>
        </nav> 

        @include('partial.nav')

        <div class="visi-misi-row d-flex align-items-center mb-5">
        
            <div class="visi-misi-card left-card">
                <img src="assets/img/{{ $visimisi->foto }}" alt="" class="left-side">
            </div>

            <div class="visi-misi-card right-card">
                <div class="right-side">

                    <span class="kandidat-title">Kandidat {{ $visimisi->id }}</span>
                    <ul class="list-nama" style="list-style: disc;">
                        <li class="nama-p">
                            Ketua : {{ $visimisi->ketua }}
                        </li>
                        <li class="nama-p">
                            Wakil : {{ $visimisi->wakil }}
                        </li>
                    </ul>

                    <span class="visi-title">Visi</span>
                    
                    {!! $visimisi->visi !!}

                    <span class="misi-title">Misi</span>

                    {!! $visimisi->misi !!}

                    <form enctype="multipart/form-data" action="{{route('pilih',['id'=>Auth::user()->id])}}" method="POST" class="form-group">
                        @csrf
                        <input type="hidden" name="_method" value="PUT" class="form-control">
                        <button name="candidate_id" value="{{ $visimisi->id }}" class="vote-button">Pilih</button>
                    </form>
                </div>
            </div>
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
@endsection

