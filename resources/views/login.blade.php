@extends('layout.main')
@section('container')
    <header class="l-header scroll-header" id="header">
        <nav class="nav bd-container">
            <div class="nav_menu">
                <ul class="nav_list">
                    <li class="nav_item"><img src="assets/img/logo-smkn-7-semarang.png" alt=""></li>
                    <li class="nav_item2"><img src="assets/img/LOGO OSIS.png" alt=""></li>
                </ul>
            </div>
            
            <div class="nav_logo">
                <img src="assets/img/MPK STEMBA.png" alt="">
            </div>
        </nav> 
    </header>
    <main>
        <section class="form_section mt-5">

            @if($error = Session::get('error'))
                <div class="d-flex align-items-center justify-content-center" >
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>
                            {{ $error }}
                        </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>    
                </div>
            @endif
            
            <div class="container a-container d-flex align-items-center" id="a-container">
                <form action="{{ route('process_login') }}" method="post" class="form d-flex flex-column" id="a-form">
                    
                    @csrf

                    <h1 class="form_title title">PEMILOS</h1>
                    <h1 class="form_sub-title sub-title">2021</h1>

                    @if ($errors->has('nis'))
                        {!! $errors->first('nis') !!}
                    @endif
                    <input class="mb-1 form_input @error('nis') is-invalid @enderror" type="text" placeholder="NIS" required name="nis">   

                    <input class=" mt-1 form_input @error('password') is-invalid @enderror" type="password" placeholder="Password" required name="password">
                    
                        <button class="form_button button submit" type="submit">
                            Login
                        </button>
                    
                </form>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
@endsection