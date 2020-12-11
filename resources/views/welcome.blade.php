<!DOCTYPE html>
<html lang="me">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>IT POSLOVI.me</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!-- Select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <!-- Styles -->
        <style>

            body{
                font-family: 'Inter', sans-serif;

            }
            .btn-zeleni{
                background-color: #04D223;
                color: white;
                border: #04D223;
                text-transform: uppercase;
                letter-spacing: .26px;
                font-weight: 600;
                font-size: 13px;
            }
            .btn-zeleni:hover{
                transition: .2s cubic-bezier(.39,.575,.565,1);
                opacity: 0.8;
                color: white;
            }
            .navbar{
                padding: 0;
                box-shadow: 0 12px 34px -11px rgba(65,62,101,.1);
            }
            .navbar-logo{
                padding-top: 15px;
                width: 120px;
            }
            .navbar-logo img{
                width: 100%;
            }
            .nav-link{
                padding: 25px 0 25px;
                margin-left: 18px;
                margin-right: 18px;
                color: #2b3940;
                font-size: 13px;
                font-weight: 700;
                text-transform: uppercase;
                position: relative;
            }
            .nav-auth a{
                border-radius: 3px;
                font-size: 13px;
                font-weight: 700;
                height: 40px;
                min-width: 130px;
                line-height: 29px;
                padding: 5px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                color: #00b074;
                border-color: #00b074;
            }
            .nav-auth .singin{
                border:0;
                border-radius: 0;
                color: #2b3940;
                border-left: 2px solid #e5e5e5;
            }
            .singin, .singup{
                text-transform: uppercase;
                letter-spacing: .26px;
            }
            .singin:focus, .singup:focus{
                box-shadow: none;
            }
            .singin:hover{
                transition: .3s cubic-bezier(.39,.575,.565,1);
                color:#0062cc;
            }
           
            .nav-auth .singup{
                color: #fff;
                background-color: #00b074;
                border-color: #00b074;
            }
            .nav-auth .logout{
                color: #fff;
                background-color: red;
                border-color: #00b074;
            }

            .hero{
                background-color: #f7f8fc;
            }
            .hero img{
                margin-top: -40px;
            }
            .hero-body h1{
                font-weight: 700;
                font-size: 3.75rem;
                line-height: 1.2;
                letter-spacing: -.9px;
                color: #2b3940;
                margin-bottom: 1.2rem
            }
            .hero-body p{
                font-size: 1.125rem;
                line-height: 1.66;
                letter-spacing: -.09px;
                color: #6b6e6f;
            }
            .job-card{
                background: #fff;
                padding: 2.1rem;
                border-radius: .6rem;
                display: table;
                width: 100%;
                margin-bottom: 30px;
                box-shadow: 0 0 20px 0 rgba(62,28,131,0.1);
                -webkit-box-shadow: 0 0 20px 0 rgba(62,28,131,0.1);
                transition: .4s;
            }
            .job-card:hover{
                box-shadow: 0 40px 60px rgba(0,0,0,.08);
            }
            .job-card a{
                text-decoration: none;
            }

            .job-card-body h3{
                margin-bottom: 0px;
            }
            .job-name{
                font-weight: 700;
                color: #2b3940;
                font-size: 1.4rem;
                line-height: 1.62;
                letter-spacing: -.25px;
            }
            a.company-name{
                color: #6b6e6f !important;
                font-weight: 400;
                font-size: 13px;
                line-height: 2;
                letter-spacing: .26px;
            }
            .job-card .square72{
                max-width: 72px;
                min-width: 72px;
                max-height: 72px;
                min-height: 72px;
                margin-right: 1.5625rem!important;
            }
            .job-card .square72 img{
                border-radius:5px;
            }

            .job-card .media{
                display: flex;
                align-content: center;
            }
            .job-card-body{
                padding-top: 5px;
            }
            
            .job-card-info{
                text-align: right;
                list-style: none;
                padding-left: 0px;
                margin: 0px;
                margin-top: 2px;
            }
            .job-card-info li{
                display: inline;
                margin-right: 1.5rem;
            }
            .job-card-info span{
                color: #2b3940;
                font-weight:600;
                font-size: 13px; 
            }
            .job-card-info svg{
                color: #2b3940;
                margin-right:.2rem;
                font-size: 19px;
                margin-top: -3px; 
            }
            ul.tags{
                margin: 0px;
                list-style: none;
                padding: 0px;
            }
            ul.tags li{
                display: inline;
            }
            ul.tags li a{
                color: #2b3940;
                display: inline-block;
                text-align: center;
                margin-right: .4rem;
                margin-top: .375rem;
                font-size: 14px;
                min-width: 96px;
                padding: .25rem 1rem;
                border-radius: 3px;
                background-color: rgba(176,213,232,.15);
                line-height: 2;
                letter-spacing: .26px;
            }
            .header h2{
                font-size: 2.5rem;
                line-height: 1.375;
                letter-spacing: -.4px;
                font-weight: 700;
                color: #2b3940;
            }
            .header-button{
                padding-top: 15px;
                text-align: right;
            }
            .header-button a{
                border-radius: 3px;
                font-size: 13px;
                font-weight: 700;
                height: 40px;
                min-width: 130px;
                line-height: 29px;
                padding: 5px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                color: #00b074;
                border-color: #00b074;
            }
            .header-button a:hover{
                color: #fff;
                background-color: #00b074;
                border-color: #00b074;
            }
            .cat-banner{
                border: 1px solid #e5e5e5;
                padding: 30px 33px 10px;
                background-color: white;
                max-height: 210px;
                border-radius: 10px;       
            }
            .cat-banner:hover{
                transition: .4s;
                box-shadow: 20px 20px 40px hsla(0,0%,68.6%,.16);
            }
            .cat-banner a{
                text-decoration: none;
            }
            .cat-banner-icon{
                text-align: center;
                font-size: 2rem;
                border-radius: 10px;
                max-width: 70px;
                min-width: 70px;
                max-height: 70px;
                min-height: 70px;
                margin-bottom: 1.25rem;
                display: flex;
                justify-content: center;
                background-color: rgba(71,67,219,.1);
                height: 100%;
                align-items: center;
            }
            .cat-banner-body h5{
                font-weight: 600;
                font-size: 1.23rem;
                line-height: 1.6;
                letter-spacing: -.09px;
                color: #2b3940!important;
            }
            .cat-banner-body p{
                font-weight: 400;
                font-size: 1rem;
                line-height: 1.6;
                letter-spacing: -.08px;
                color: #6b6e6f!important;
                font-family: Inter,sans-serif;
            }
            footer{
                padding:  120px 0 85px 0;
            }
            footer .jobletter{
                text-align: center;
            }
            footer svg{
                margin-top: 7px;
                float: right;
                font-size: 60px;
                color: #e5e5e5;
            }
            .jobletter-mail{
                height: 50px;
                border-radius: 8px;
                border: 1px solid #eaeced;
                padding: 15px;
                transition: .3s;
                /* width: 100%; */
                font-size: 15px;
                letter-spacing: -.1px;
            }
            .jobletter h4{
                font-weight: 700;
                font-size: 2.5rem;
                line-height: 1.2;
                letter-spacing: -.7px;
                color: #2b3940;
                margin-bottom: 1.875rem;
            }
            .jobletter p{
                color: #6b6e6f;
                font-weight: 400;
                font-size: 1rem;
                line-height: 1.625;
                letter-spacing: -.08px;
                margin-bottom: 30px;
            }
           
            .select2-container--default .select2-selection--multiple {
                border:0;
            }
            .select2-results__option.select2-results__message:empty {
                display: none;
            }
            .select2-container--default.select2-container--focus .select2-selection--multiple {
                border:none;
            }
            .search-bar-home{
                -webkit-box-shadow:rgba(36, 37, 38, 0.08) 4px 4px 15px 0;
                box-shadow:rgba(36, 37, 38, 0.08) 4px 4px 15px 0;
                border-radius: 6px;
                background-color: white;
            }
            .search-bar-home button{
                border-radius: 0 6px 6px 0;
            }
            .search-bar-home .search_icon{
                margin-right: 15px;
                margin-left: 5px;
                display: flex;
                align-items: center;
            }
            .search-bar-home .search_padding{
                padding:10px;
                display:flex;
                align-content: center;
            }
            select2-selection { 
                overflow: hidden;
            }
            .select2-selection__rendered { 
                white-space: normal; word-break: break-all; 
            }
            #features h2{
                font-size: 2.2rem;
                line-height: 1.375;
                letter-spacing: -0.4px;
                margin: 3.8rem 0;
                font-weight: 700;
                color: #2b3940;
            }
            #features img{
                width: 100%;
                border-radius: 10px;
            }
            #features h5{
                font-weight: 700;
                font-size: 1.35rem;
                line-height: 1.2;
                color: #2b3940;
                margin-bottom: 0.75rem;
            }
            #features .features-icon{
                font-size:19px;
                width: 48px;
                height: 48px;
                background: red;
                border-radius: 5px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            #features p{
                font-size: 1rem;
                line-height: 1.625;
                letter-spacing: -0.08px;
                color: #6b6e6f;
                margin-bottom:0;
                font-weight: 400;
            }
            @media (max-width: 1200px){
                #features h2{
                    font-size: 1.8rem;
                }
                .hero-body h1{
                    font-size: 2.3rem;
                }
                .header-button a {
                    width: 100%;
                }
                .header h2{
                    text-align: center;
                    font-size: 1.8rem;
                }
                .search-bar-home button {
                    border-radius: 0 0 6px 6px;
                    padding: 15px;
                }
            }

        </style>
        
                                                               
        
    </head>
    <body>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-logo navbar-logo px-3 px-sm-2 pt-3 pb-1" href="{{ url('/') }}">
                    <img src="{{asset('storage/img/logo.png')}}" alt="logo it poslovi crna gora me">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/oglasi-za-posao">Poslovi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Edukacija</a>
                        </li>
                        
                    <!-- @guest -->
                   <!--  </ul>
                    <div class="nav-auth float-right">
                        <a class="btn singin" href="{{ route('login') }}">Prijava</a>
                        <a class="btn singup" href="{{ route('register') }}">Registruj se</a>
                    </div> -->
                    <!-- @else -->




                      <!--   <li class=" nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color: #4c83ff;">Moj nalog</a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/admin">Moj Panel</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Log out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul> -->
                    <!-- @endguest -->
                </div>  
            </div>
        </nav>
       



<!-- JUMBOTRON -->
        <div class="hero pt-0 pt-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mt-5">

                        <div class="row">

                            <div class="col-md-12">
                                <div class="hero-body py-5 py-md-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>Pronađi savršen <span style="color:#04D223;">IT</span> posao koji zaslužuješ.</h1>
                                            <p>Prvi portal za IT poslove u Crnoj Gori.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <form action="/oglasi-za-posao" method="get">
                                <div class="row no-gutters search-bar-home">                                    
                                    <div class="search_padding col-md-8">
                                        <span class="search_icon">
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-search" fill="#00b074" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                        </svg>
                                    </span>                                       
                                        <select class="search_tags" name="tag_id" multiple="multiple">
                                            @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <button class="btn btn-zeleni line-height-reset h-100 btn-submit w-100 text-uppercase">TRAŽI
                                        </button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-5 mt-5">
                        <img class="d-none d-md-block" src="{{asset('storage/img/hero.png')}}" class="m-4 m-md-0" alt="logo it poslovi crna gora me" width="100%">

                    </div>
                </div>
            </div>
        </div>
                  


    

<!-- POPULARNE KATEGORIJE -->
<div class="my-0 my-sm-4 py-5">
    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-6 py-4 py-sm-0 pb-sm-5">
                <div class="header">
                    <h2 class="">Popularne kategorije</h2>
                </div>
            </div>

            <div class="col-12 col-lg-6 pb-5 pt-3 pt-sm-0 pb-sm-5">
                <div class="header-button">
                    <a class="btn" href="/oglasi-za-posao">ISTRAŽI SVE</a>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Programiranje -->
            <div class="col-6 col-md-3">
                <div class="cat-banner mb-5 mb-md-0">
                    <a href="/oglasi-za-posao?cat_id=1">
                        <div class="cat-banner-icon mx-auto mx-md-0" style="background-color: rgba(71,67,219,.1)">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-code-square" fill="#4743db" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path fill-rule="evenodd" d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z"/>
                            </svg>
                        </div>
                        <div class="cat-banner-body text-center text-md-left">
                            <h5>Programiranje</h5>
                            <p>12 Poslova</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- QA -->
            <div class="col-6 col-md-3">
                <div class="cat-banner mb-5 mb-md-0">
                    <a href="/oglasi-za-posao?cat_id=5">
                        <div class="cat-banner-icon mx-auto mx-md-0" style="background-color:rgba(255,179,0,.1)">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools" fill="#ffb300" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
                            <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                            </svg>
                        </div>
                        <div class="cat-banner-body text-center text-md-left">
                            <h5>QA</h5>
                            <p>7 Poslova</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Dizajn -->
            <div class="col-6 col-md-3">
                <div class="cat-banner mb-5 mb-md-0">
                    <a href="/oglasi-za-posao?cat_id=2">
                        <div class="cat-banner-icon mx-auto mx-md-0" style="background-color: rgba(247,30,63,.1)">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="#f71e3f" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                          </svg>
                        </div>
                        <div class="cat-banner-body text-center text-md-left">
                            <h5>Dizajn</h5>
                            <p>5 Poslova</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Praksa -->
            <div class="col-6 col-md-3">
                <div class="cat-banner mb-5 mb-md-0">
                    <a href="/oglasi-za-posao?cat_id=8">
                        <div class="cat-banner-icon mx-auto mx-md-0" style="background-color:rgba(0,176,116,.1)">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="#00b074" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </div>
                        <div class="cat-banner-body text-center text-md-left">
                            <h5>Prakse</h5>
                            <p>5 Poslova</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="features" class="my-0 my-sm-5 py-0 py-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pb-4 pb-sm-0">
                <div class="p-2 p-sm-0 pr-sm-5">
                    <img  src="{{asset('storage/img/features.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-5 offset-md-1">
                <h2>Pomažemo ti da pronađeš posao po tvojoj mjeri</h2>
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <div class="row">
                            <div class="col-2 col-md-2">
                                <div class="features-icon" style="background-color: rgba(0, 176, 116, 0.2);">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="#00b074" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
                                </div>
                            </div>
                            <div class="col-10 col-md-10">
                                <h5>#1 Sajt za IT poslove u CG</h5>
                                <p>Najveća baza IT poslova i proverenih poslodavaca u Crnoj Gori.</p>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-md-12 mb-5">
                        <div class="row">
                            <div class="col-2 col-md-2">
                                <div class="features-icon" style="background-color:rgba(250, 207, 50, 0.2);">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="#facf32" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-10 col-md-10">
                                <h5>Napredna pretraga</h5>
                                <p>Pretraga je kreirana da lako dođete do oglasa koji su kompatabilni vašim vještinama.</p>
                            </div>
                        </div>
                    </div>  


                    <div class="col-md-12 mb-5">
                        <div class="row">
                            <div class="col-2 col-md-2">
                                <div class="features-icon" style="background-color:rgba(247, 30, 63, 0.2);">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="#f71e3f" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                                      <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-10 col-md-10">
                                <h5>Poslovi u top kompanijama</h5>
                                <p>Trudićemo se da na našoj platformi nađete poslove istaknutih kompanija koje nude i najbolje uslove zapošljavanja.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- NAJNOVIJI POSLOVI -->
<div style="background-color: #2b3940!important;padding-top: 6rem;padding-bottom:7.5rem; color: white;">
    <div class="container">
        <!-- Naslov -->
        <div class="row" style="padding-bottom: 3.4375rem;">
            <div class="col-12 col-lg-12">
                <div class="header text-center">
                    <h2 style="color: white;">Istaknuti <span style="color:#04D223;">IT</span> poslovi</h2>
                </div>
            </div>
           <!--  <div class="col-12 col-lg-6">
                <div class="header-button">
                    <a class="btn" href="/oglasi-za-posao">ISTRAŽI SVE</a>
                </div>
            </div> -->
        </div>

        <!-- Home posao list -->
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <!-- List item -->
                <div class="job-card">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="media">
                                <div class="square72">
                                    <img src="http://www.lifeisone.net/site/wp-content/uploads/airbnb-logo.png" width="100%">
                                </div>
                                <div class="job-card-body">
                                    <h3><a href="" class="job-name">Product Designer</a></h3>
                                    <a class="company-name">AirBnb</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top:1.6rem;">
                        <div class="col-md-7">
                            <ul class="tags">
                                <li><a href="">Agile</a></li>
                                <li><a href="">Wireframing</a></li>
                                <li><a href="">Prototyping</a></li>
                            </ul>
                        </div>
                        <div class="col-md-5" style="padding-top:3px;padding-left:0;">
                            <ul class="job-card-info">
                                <li>
                                    <span>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="#6b6e6f" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                            <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                    </span>
                                    <span>Podgorica</span>
                                </li>
                                <li>
                                    <span>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="#6b6e6f" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
                                            <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                        </svg>
                                    </span>
                                    <span>12-01-2021</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="col-sm-3" style="background-color: white;">col-sm-4</div> -->
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">
          <div class="col-md-6 jobletter offset-md-3">
            <h4>Budi  <span style="color:#04D223;font-size:4rem;">prvi</span> obavješten</h4>
            <p>Prijavi se i budi obavješten o najnovjim poslovima i vijestima sa IT scene u Crnoj Gori ali i u svijetu. </p> 
          </div>
          <div class="col-md-4 offset-md-4">
               <form>
                <div class="input-group">
                    <input type="email" class="form-control jobletter-mail" placeholder="Mejl adresa" aria-label="Mejl adresa" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-zeleni" type="button">Prijavi se</button>
                    </div>
                </div>
            </form>
          </div>

          </div>
          <div class="row" style="padding: 140px 0px 60px;">
          <div class="col-md-6" style="border-right: 1px solid #e5e5e5">
            <div style="text-align:center;">
                <img src="{{asset('storage/img/logo.png')}}" alt="logo it poslovi crna gora me" width="150px">
            <small class="d-block mb-3 text-muted">© 2020</small>
    
            </div>
          </div>
          <div class="col-md-6" >
            <div class="row">
                <div class="col-md-4 d-none d-sm-block">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-right-dots-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                </div>
                <div class="col-md-8 text-center text-sm-left">
                    <h5 style="font-weight: 400;font-size: 1.2rem;line-height: 1.625;letter-spacing: -.08px;">Konktarijate nas</h5>
                <span style="color: #04D223;font-weight: 700;font-size: 1.2rem;line-height: 1.625;letter-spacing: -.08px;">itposlovi.me@gmail.com</span>
                </div>
            </div>
          </div>
          </div>
        </div>
</footer>

<script type="text/javascript">
$('.search_tags').select2({
    width: '100%',
    maximumSelectionLength:1,
    placeholder:'Java',
    minimumInputLength: 2,
    language: {
        inputTooShort: function () { return ''; }
    }
});
</script> 






        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

