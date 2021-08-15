<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="css/mainstyle.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/navbar.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive-style.css?" rel="stylesheet" type="text/css" />

    <title>{{ $title }}</title>
</head>
<body>
    
    <header class="l-header scroll-header" id="header">
        <nav class="nav bd-container">
            <div class="nav_menu">
                <ul class="nav_list">
                    <li class="nav_item"><img src="assets/img/logo-smkn-7-semarang.png" alt=""></li>
                    <li class="nav_item2"><img src="assets/img/LOGO OSIS.png" alt=""></li>
                </ul>
            </div>
            
            <div class="nav_logo">
                <img src="assets/img/MPK STEMBA.png" alt="">
            </div>
        </nav> 
    </header>

    <main>
        
        <section class="form_section">
                @if(session('error'))
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif
            

            <div class="container a-container d-flex align-items-center" id="a-container">
                
                <form action="{{ route('process_login') }}" method="post" class="form d-flex flex-column" id="a-form">
                    {{ csrf_field() }}
                    <h1 class="form_title title">PEMILOS</h1>
                    <h1 class="form_sub-title sub-title">2021</h1>
                    <input class="form_input" type="text" placeholder="NIS" required name="nis">
                    <input class="form_input" type="password" placeholder="Password" required name="password">
                    <button class="form_button button submit" type="submit">Login</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>