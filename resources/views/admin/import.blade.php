<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ==========     Bootstrap CDN     ========== -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- ==========     Owl-carousel CDN     ========== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ==========     Font awesome icons     ========== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- ==========     CSS File     ========== -->
    <link href="../css/mainstyle.css" rel="stylesheet" type="text/css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/navbar.css" rel="stylesheet" type="text/css" />
    <link href="../css/responsive-style.css" rel="stylesheet" type="text/css" />

    <title>INPUT DATA SISWA</title>
</head>
<header class="l-header scroll-header" id="header">
        <nav class="d-flex flex-column align-items-center justify-content-center nav bd-container nav-visi-misi">
            <div class="custom-select-wrapper">
                <div class="header-content">
                    <div class="title-daftar"><span>INPUTAN SISWA</span></div>
                    <div class="btn-group btn-group-daftar">
                        <button type="button" class="btn-hasil-kiri-daftar">DAFTAR SISWA</button>
                        <button type="button" class="btn-hasil-kanan-daftar dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/hasil">PEROLEHAN SUARA</a>
                            <a class="dropdown-item" href="/daftar">DAFTAR SISWA</a>
                            <a class="dropdown-item" href="#">INPUT SISWA</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav> 
    </header>
<body>
    

    <main class="main-input">
        <div class="content-wrapper">
            <section class="input-content">
                <div class="d-flex flex-column align-items-center justify-content-center row-daftar-siswa">
                    <div class="col-xs-12">

                        {{-- notifikasi form validasi --}}
		                @if ($errors->has('file'))
                        <div class="d-block container justify-content-center align-items-center">
                            <div class="alert alert-danger alert-dismissible fade show alert-card invalid-feedback" role="alert">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>{{ $errors->first('file') }}</strong>
                            </div>
                        </div>
                        @endif
						
                        {{-- notifikasi sukses --}}
		                @if ($sukses = Session::get('sukses'))
                        <div class="d-block container justify-content-center align-items-center">
                            <div class="alert alert-success alert-dismissible fade show alert-card alert-block">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>{{ $sukses }}</strong>
                            </div>
                        </div>
                        @endif

                        <div class="d-block container btn-container">
                            <div class="btn-row">
                                <div class="row-left">
                                    <button type="button" class="btn btn-primary btn-import" data-toggle="modal" data-target="#importExcel">IMPORT EXCEL</button>
                                </div>
                                
                                <!-- Import Excel -->
                                <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form method="post" action="{{ route('import.siswa') }}" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                                </div>
                                                <div class="modal-body">
                        
                                                    {{ csrf_field() }}
                        
                                                    <label>Pilih file excel</label>
                                                    <div class="form-group">
                                                        <input type="file" name="file" required="required">
                                                    </div>
                        
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Import</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> 

                                <div class="row-left">
                                    <a href="{{ route('export') }}" target="_blank">
                                        <button type="button" class="btn btn-success btn-export">EXPORT EXCEL</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box d-flex flex-column align-items-center justify-content-center row-daftar-siswa">
                            <div class="box-body box-input-body">
                            <table class="table table-hover table-bordered table-responsive-sm shadow-soft rounded">
                                <thead class="thead">
                                    <tr class="table-tr">
                                        <th class="table-header" scope="col">No</th>
                                        <th class="table-header" scope="col">NIS</th>
                                        <th class="table-header" scope="col">Nama</th>
                                        <th class="table-header" scope="col">Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
				                    @foreach($daftar as $d)
                                    <tr>
                                        <td class="table-row">{{ $i++ }}</td>
                                        <td class="table-row">{{$d->nis}}</td>
                                        <td class="table-row">{{$d->nama}}</td>
                                        <td class="table-row">{{$d->kelas}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
