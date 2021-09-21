@extends('admin.template')
@section('template-admin')
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
                            <div class="btn-row justify-content-between">
                                <div class="row-left">
                                    <button type="button" class="btn btn-primary btn-import" data-toggle="modal" data-target="#importExcel">IMPORT SISWA</button>
                                </div>
                                <!-- Import Excel -->
                                <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form method="post" action="{{ route('import.siswa') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                                </div>
                                                <div class="modal-body">
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
                                        <button type="button" class="btn btn-success btn-export">EXPORT SISWA</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box d-flex flex-column align-items-center justify-content-center row-daftar-siswa">
                            <div class="box-body box-input-body" style="overflow-x:auto">
                                <table class="table table-hover table-bordered table-responsive-sm shadow-soft rounded" id="table_">
                                    <thead class="thead">
                                        <tr class="table-tr">
                                            <th class="table-header" scope="col">No</th>
                                            <th class="table-header" scope="col">NIS</th>
                                            <th class="table-header" scope="col">Nama</th>
                                            <th class="table-header" scope="col">Kelas</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src="../js/navscript.js" type="text/javascript"></script>
    @push('script')
        <script type="text/javascript">
            $('#table_').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('importExportView') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'id', orderable: false, searchable:false},
                    {data: 'nis', name: 'nis'},
                    {data: 'nama', name: 'nama'},
                    {data: 'kelas', name: 'kelas'}
                ],
            });
        </script>
    @endpush
@endsection
