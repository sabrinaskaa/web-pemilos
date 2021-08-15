@extends('admin.template')
@section('template-admin')

    <header class="l-header scroll-header" id="header">
        <nav class="d-flex flex-column align-items-center justify-content-center nav bd-container nav-visi-misi">
            <div class="custom-select-wrapper">
                <div class="header-content">
                    <div class="title-daftar"><span>HASIL VOTING</span></div>
                    <div class="btn-group btn-group-daftar">
                        <button type="button" class="btn-hasil-kiri-daftar">DAFTAR SISWA</button>
                        <button type="button" class="btn-hasil-kanan-daftar dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/hasil">PEROLEHAN SUARA</a>
                            <a class="dropdown-item" href="#">DAFTAR SISWA</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav> 
    </header>

    <main class="main-admin">
        <div class="content-wrapper">

            <section class="content-header">
                <div id="main-search" class="d-flex flex-column align-items-center justify-content-center main-search">
                    <form action="/daftar" method="get">
                        <div id="content-search">
                            <input type="text" name="search" placeholder="Search"  class="type-box">
                            <button class="search-box" type="submit" value="search">Search</button>
                        </div>
                    </form>
                </div>
            </section>

            <section class="">
                <div class="d-flex flex-column align-items-center justify-content-center row-daftar-siswa">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                            <table class="table table-hover table-bordered table-responsive-sm shadow-soft rounded">
                                <thead class="thead">
                                    <tr class="table-tr">
                                        <th class="table-header" scope="col">No</th>
                                        <th class="table-header" scope="col">NIS</th>
                                        <th class="table-header" scope="col">Nama</th>
                                        <th class="table-header" scope="col">Kelas</th>
                                        <th class="table-header" scope="col">Status Vote</th>
                                        <th class="table-header" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($daftar as $d)
                                        <tr>

                                                <td class="table-row">{{  ++$i }}</td>
                                                <td class="table-row">{{ $d->nis }}</td>
                                                <td class="table-row">{{ $d->nama }}</td>
                                                <td class="table-row">{{ $d->kelas }}</td>
                                                <td class="table-row">{{ $d->status }}</td>
                                                <td class="table-row">
                                                    <form action="{{ route('daftar.destroy', $d->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                                    </form>
                                                </td>
                                        </tr>
                                        @endforeach 
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {!! $daftar->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    


@endsection