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