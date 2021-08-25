@extends('admin.template')
@section('template-admin')
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
                            <div class="box-body box-input-body" style="overflow-x:auto">
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
</body>
@endsection

