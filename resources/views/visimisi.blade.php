<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <link href="css/mainstyle.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/navbar.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive-style.css" rel="stylesheet" type="text/css" />

    <title>Pemilihan Ketua Osis</title>
</head>
<body>

    @if (Auth::user()->status == "belum")
        <nav class="nav-visi-misi bd-container ml-3">
            <div class="justify-content-between">
                <a href="/voting" class="nav-back text-decoration-none"">
                    <i class="fas fa-chevron-left nav-back"></i>
                </a>
                <a href="/voting" class="ml-0 nav-back text-decoration-none"">
                    Kembali
                </a>
            <div>
        </nav> 

        <div class="d-flex align-items-center justify-content-center">
            <h2 class="nav_title_2">PEMILIHAN CAKETOS</h2>
        </div>

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
    <div class="text-center">
    </div>
    <h1 class="mt-5 text-center">You've Already Chosen</h1>        
    @endif

</body>
