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
                                    <button type="button" class="btn btn-primary btn-import" data-toggle="modal" data-target="#importExcel">IMPORT SISWA</button>
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
                                        <button type="button" class="btn btn-success btn-export">EXPORT SISWA</button>
                                    </a>
                                </div>
                                <button type="button" class="btn btn-success btn-export" onclick="MyF()">asdasdS</button>
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
                                <tbody id="import">
                                    @php $i=1 @endphp
				                    @foreach($daftar as $d)
                                    <tr >
                                        <td class="table-row">{{$d->id }}</td>
                                        <td class="table-row">{{$d->nis}}</td>
                                        <td class="table-row">{{$d->nama}}</td>
                                        <td class="table-row">{{$d->kelas}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $daftar->links() }}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script>
        
        function MyF(){
            const tampil = document.querySelector('#import')
            // tampil.innerHTML = ' @php $i=1 @endphp @foreach($daftar as $d)  <tr><td class="table-row">{{ $i++ }}</td><td class="table-row">{{$d->nis}}</td><td class="table-row">{{$d->nama}}</td><td class="table-row">{{$d->kelas}}</td></tr>@endforeach'
            const restart = setTimeout(() => location.reload(), 10000);  
    
            if (restart){
                tampil.innerHTML = 'asd'
            } 
        }

        window.onscroll = function() {myFunction()};

                var navbar = document.getElementById("header-admin");
                var sticky = navbar.offsetTop;

                function myFunction() {
                if (window.pageYOffset > sticky) {
                    navbar.classList.add("sticky")
                } else {
                    navbar.classList.remove("sticky");
                }
                }

                /*====== MENU =====*/
                const showMenu = (toggleId,navId) =>{
                const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId)

                if(toggle && nav){
                    toggle.addEventListener('click', ()=>{
                        nav.classList.toggle('show-menu')
                    })
                }
                }
                showMenu('nav-toggle','nav-menu')

                /* ==========   SHOW LIST   ========== */
                const showList = (toggleId,navId) =>{
                const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId)

                if(toggle && nav){
                    toggle.addEventListener('click', ()=>{
                        nav.classList.toggle('show-list')
                    })
                }
                }

                showList('nav-toggle','nav-list')

                /* ==========   ANIMATION TOGGLE    ========== */
                const hambToggle = (toggleId,navhomeId,navaboutId) =>{
                const toggle = document.getElementById(toggleId),
                home = document.getElementById(navhomeId),
                about = document.getElementById(navaboutId)

                if(toggle && home && about){
                    toggle.addEventListener('click', ()=>{
                        toggle.classList.toggle('active')
                        toggle.classList.toggle('not-active')
                    })
                    home.addEventListener('click', ()=>{
                        toggle.classList.toggle('active')
                        toggle.classList.toggle('not-active')
                    })
                    about.addEventListener('click', ()=>{
                        toggle.classList.toggle('active')
                        toggle.classList.toggle('not-active')
                    })
                }
                }

                hambToggle('nav-toggle', 'link-home', 'link-about')


                /* ==========   REMOVE MENU   ========== */
                const navLink = document.querySelectorAll('.nav__link')

                function linkAction(){
                const navMenu = document.getElementById('nav-menu')
                navMenu.classList.remove('show-menu')

                const navList = document.getElementById('nav-list')
                navList.classList.remove('show-list')
                }

                navLink.forEach(n => n.addEventListener('click', linkAction))

                const currentLocation = location.href;
                const menuItem = document.querySelectorAll('.nav__link');
                const menuLength = menuItem.length
                    for (let i = 0; i<menuLength; i++){
                        if(menuItem[i].href === currentLocation){
                            menuItem[i].className = "active-link"
                        }
                    }

    </script>
</body>
@endsection

