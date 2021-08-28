@extends('admin.template')
@section('template-admin')

    <main class="main-admin">
        <div class="content-wrapper wrapper-daftar">

            <section class="content-header">
                <div id="main-search" class="d-flex flex-column align-items-center justify-content-center main-search">
                    <form action="/daftar" method="get">
                        <div id="content-search">
                            <input type="text" name="search" placeholder="Search for anything"  class="type-box">
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
                                        <th class="table-header" scope="col">Memilih</th>
                                        <th class="table-header" scope="col">Status Vote</th>
                                        
                                        <th class="table-header" scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($daftar as $d)
                                        <tr>

                                                <td class="table-row">{{  $d->id }}</td>
                                                <td class="table-row">{{ $d->nis }}</td>
                                                <td class="table-row">{{ $d->nama }}</td>
                                                <td class="table-row">{{ $d->kelas }}</td>
                                                <td class="table-row">
                                                    @if ($d->candidate_id == true)
                                                        <button type="button" class="btn-info btn-sm" disabled>{{ $d->candidate_id }}</button>
                                                    @else
                                                        <button type="button" class="btn-warning btn-sm" disabled>Belum</button>
                                                    @endif
                                                </td>
                                                <td class="table-row">
                                                    @if ($d->status == "sudah")
                                                    <button type="submit" class="btn-success btn-sm" disabled> Sudah </button>
                                                    @else
                                                    <button type="submit" class="btn-warning btn-sm" disabled> Belum </button>
                                                    @endif
                                                </td>
                                                
                                                <td class="table-row">
                                                    <form action="{{ route('daftar.destroy', $d->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">☠️</button>
                                                    </form>
                                                </td>
                                        </tr>
                                        @endforeach 
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                {{ $daftar->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script>
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
    </main>
    


@endsection
