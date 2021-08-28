@if ($jumlah == 0)

    <div class="container align-items-center">
        <div class="center">
            <h1>Belum Ada Voting</h1>
        </div>
    </div>
    
@else
@extends('admin.template')
@section('template-admin')
<main class="main-admin">
    <div class="card-row card-row-admin">
        @foreach ($candidates as $candidate)
        <div class="card" id="card{{ $candidate->id }}">
            
            <img class="card-image" src="{{ asset('assets/img/'. $candidate->foto) }}">
            
            <div class="card-section-hasil">
                
                <p class="card-kandidat">KANDIDAT {{ $candidate->id }}</p>
                
                <h1 class="presentase">{{ number_format($candidate->user->count()/$jumlah * 100) }}%</h1>
               
                {{-- {{ $candidate->user->count() }} suara --}}

                <div class="down__card" id="down-text{{ $candidate->id }}">
                    <div class="down-card-text" id="text{{ $candidate->id }}">
                        <span class="number-vote">{{ $candidate->user->count() }}</span>
                        SUARA
                    </div>
                </div>

                <span class="link-dropdown-icon" id="down-icon{{ $candidate->id }}">
                    <i class="fas fa-caret-down" id="down-icon{{ $candidate->id }}"></i>
                </span>

            </div>

        </div>
        
        @endforeach
    </div>

    <script>

            let showDownCard = (iconId,cardId) => {

                const icon = document.getElementById(iconId),
                card = document.getElementById(cardId)

                if(icon && card){
                    icon.addEventListener('click', ()=>{
                        card.classList.toggle('card-hasil')
                        })
                    }
            }

            let showDownText = (iconId,textId) => {

                const icon = document.getElementById(iconId),
                text = document.getElementById(textId)

                if(icon && text){
                    icon.addEventListener('click', ()=>{
                        text.classList.toggle('text-show')
                    })
                }
            }

            let showText = (iconId,showId) => {
                const icon = document.getElementById(iconId),
                show = document.getElementById(showId)

                if(icon && show){
                    icon.addEventListener('click', ()=>{
                        show.classList.toggle('text')
                    })
                }
            }

            for(let i=1; i < 4; ++i){
                showDownCard('down-icon'+i,'card'+i)
                showDownText('down-icon'+i,'down-text'+i)
                showText('down-icon'+i,'text'+i)
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
    
</main>
@endsection
@endif
