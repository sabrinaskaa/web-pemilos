@extends('admin.template')
@section('template-admin')

    <main class="main-admin mt-5 mb-auto">
        <div class="content-wrapper">
            <section>
                <div class="d-flex flex-column align-items-center justify-content-center row-daftar-siswa">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                            <table class="table table-hover table-bordered table-responsive-sm shadow-soft rounded"  id="tabel_">
                                <thead class="thead">
                                    <tr class="table-tr">
                                        <th class="table-header" scope="col">No</th>
                                        <th class="table-header" scope="col">NIS</th>
                                        <th class="table-header" scope="col">Nama</th>
                                        <th class="table-header" scope="col">Kelas</th>
                                        <th class="table-header" scope="col">Memilih</th>
                                        <th class="table-header" scope="col">Status Vote</th>
                                        <th class="table-header" scope="col">Delete</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script src="../js/navscript.js" type="text/javascript"></script>
        @push('script')
            
            <script>
                $('#tabel_').DataTable({
                    serverSide: true,
                    ajax: "{{ route('daftar.index') }}",
                    columns: [
                        {data: 'id', name: 'id', className: 'dt-body-center'},
                        {data: 'nis', name: 'nis', className: 'dt-body-center'},
                        {data: 'nama', name: 'nama'},
                        {data: 'kelas', name: 'kelas', className: 'dt-body-center'},
                        {data: 'candidate_id', name: 'candidate_id', className: 'dt-body-center',
                            render: function(data, type, row){
                                return (typeof row.candidate_id === 'number') ? '<button type="button" class="btn-info btn-sm" disabled>'+row.candidate_id+'</button>' : '<button type="button" class="btn-warning btn-sm" disabled>Belum</button>'
                            }
                        },
                        {data: 'status', name: 'status', className: 'dt-body-center',
                            render: function(data,type ,row){
                                return (row.status == 'belum') ? '<button type="submit" class="btn-warning btn-sm" disabled> Belum </button>' : '<button type="submit" class="btn-success btn-sm" disabled> Sudah </button>'
                            }                
                        },
                        {data: 'action', className: 'dt-body-center'},
                    ], 
                });
            </script>
        @endpush
    </main>


@endsection
