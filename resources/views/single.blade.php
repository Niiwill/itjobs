<!DOCTYPE html>
<html lang="me">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="{{asset('storage/img/favicon.png')}}" />
        <title>{{$job->title}} | {{$job->company->name}} | {{$job->city->name}} | ITPoslovi.me</title>
        <meta name="description" content="Oglas: {{$job->title}} - Crna Gora / Montenegro - Svi It poslovi na jednom mjestu. Pronađite software kompanije u Crnoj Gori i biraj posao koji voliš.">
        <link rel="canonical" href="{{url()->current()}}"/>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Jquery -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
        <!-- Select2 -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TETF7GV131"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-TETF7GV131');
        </script>
        
        <!-- Styles -->
        <style>
            :root {
                --blue-color:#3861fb;
            }
            .color-blue {
                color: var(--blue-color)!important;
            }
        	body{
        		background-color: #f5f7fa;
        		font-family: 'Inter', sans-serif;
        	}
        	.navbar{
                background-color: white;
        		padding: 0px;
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
        		border:0px;
        		border-radius: 0px;
        		color: #2b3940;
        		border-left: 2px solid #e5e5e5;
        	}
        	.singin, .singup{
        		text-transform: uppercase;
        		letter-spacing: .26px;
        	}
        	.nav-auth .singup{
        		color: #fff;
        		background-color: #00b074;
        		border-color: #00b074;
        	}
            footer{
                background-color: white;
                padding:  105px 0 88px 0;
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
            footer input{
                border:0!important;
            }
            footer .input-group{
                box-shadow: 4px 4px 15px 0 rgba(36,37,38,.08);
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
            #job-panel{
                background-color: white;
                border-radius: .9rem;
                box-shadow: rgba(36, 37, 38, 0.04) 4px 4px 15px 0px;
            }
            #job-header, #job-details{
                padding: 1.9rem;
                border-bottom:1px solid #e5e5e5;
                padding-bottom:1.5rem;
            }
             #job-header .media{
                display: flex;
                align-items: center;
            }
            #job-header .square-72 {
                display: block;
                max-width: 80px;
                min-width: 80px;
                max-height: 80px;
                min-height: 80px;
                margin-right: 1.5625rem;
                display: flex;
                align-items: center;
                justify-items: center;
            }
            #job-header .square-72 img{
                border-radius: 6px;
            }
            #job-header h1{
                font-size: 1.3rem;
                line-height: 1.62;
                letter-spacing: -.21px;
                font-weight: 700;
                color: #2b3940;
                font-family: : Inter,sans-serif;
                margin-bottom: 0;
            }
             #job-header a{
                font-size: 13px;
                line-height: 2;
                letter-spacing: .26px;
                color: #6b6e6f;
            }
            .btn-single{
                height: 48px;
                border-radius: 3px;
                text-transform: uppercase;
                letter-spacing: .26px;
                font-weight: 700;
                font-size: 13px;
                padding: 0 22px;
                margin-right: .5rem;
                margin-bottom: .75rem;
            }
            .btn-zeleni{
                background-color: #04D223;
                color: white;
                border: #04D223;
            }
            .btn-white{
                color: #2b3940;
                border:1px solid #e5e5e5;
            }
            .btn-zeleni:hover{
                transition: .2s cubic-bezier(.39,.575,.565,1);
                opacity: 0.8;
                color: white;
            }
            .job-info{
                display: flex;
                align-content: center;
                align-items: center;
            }
            .job-info p{
                font-weight: 600;
                font-size: 1rem;
                line-height: 1.66;
                margin-bottom: 0;
                letter-spacing: -.09px;
            }
            .job-info .icon{
                vertical-align: middle;
                font-size: 20px;
                margin-right: .75rem;
            }
            .job-info svg{
                color: #00b074;
            }
            .job-body{
                padding: 3rem 7rem 5rem 4rem;
            }

            .job-body h3, .job-body p{
                color: #2b3940;
                font-weight: 400;
                font-size: 15px;
                line-height: 1.625;
                letter-spacing: -.08px;
                margin-bottom: 1.25rem;
            }
            .job-body h3{
                font-weight: 700;
                font-size: 1.3rem;
              
            }
            .job-body ul{
                color: #2b3940;
                font-size: 15px;
            }
            .job-body ul li{
                margin-bottom: 1rem;
            }
            #back{
                margin-bottom: 1.875rem;
            }
            #back a{
                display: flex;
                align-items: center;
                align-content: center;
                list-style: none;
                text-decoration: none;
            }
            
            #back-icon{
                display: flex;
                justify-content: center;
                text-align: center;
                align-items: center;
            }
            #back-icon{
                margin-right: .75rem;
                display: flex;
                text-align: center;
                align-content: center;
                background: white;
                max-width: 40px;
                min-width: 40px;
                max-height: 40px;
                min-height: 40px;
                border-radius: 50%;
                box-shadow: 2px 2px 4px hsla(0,0%,51%,.16);
            }
            #back span{
                font-size: 13px;
                line-height: 2;
                letter-spacing: .26px;
                font-weight: 600;
                color: #6b6e6f;
            }

            /*RELATED JOBS  ////////////////////////////////////////////////////*/
            
            #featured-jobs a{
                text-decoration: none;
            }
            #featured-jobs .header{
                text-align: center;
            }
            #featured-jobs .header h2{
                margin: 25px 0px;
                font-size: 1.5rem;
                font-weight: 700;
                color: #000;
            }
            .job-card{
                padding: 1.7rem;
                display: table;
                width: 100%;
                transition: .4s;
                border-radius: 16px;
                background-color: #fff;
                box-shadow: 1px 1px 2px 0 rgb(88 102 126 / 12%), 1px 1px 40px 0 rgb(88 102 126 / 12%);
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
                color: #000;
                font-size: 1.3rem;
                line-height: 1.62;
                letter-spacing: -.25px;
            }
            .company-name{
                color: #808a9d !important;
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
                display: flex;
                align-items: center;
                justify-content: center;
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
                margin-right: 1rem;
            }
            .job-card-info span{
                color: #2b3940;
                font-weight:600;
                font-size: 13px; 
            }
            .job-card-info svg{
                color: #000;
                margin-right:.2rem;
                font-size: 16px;
                margin-top: -3px; 
            }
            ul.tags{
                margin: 0px;
                list-style: none;
                padding: 0px;
            }
            ul.tags li{
                display: inline;
                color: #000;
                display: inline-block;
                text-align: center;
                font-size: 13px;
                min-width: 96px;
                padding: .25rem 1rem;
                border-radius: 6px;
                background-color: rgba(176,213,232,.15);
                line-height: 2;
                letter-spacing: .26px;
            }
            .color-orange{
                color: #fa5f1c !important;
            }
            @media (max-width: 576px){
                .job-body {
                    padding: 3rem 2rem 5rem 2rem;
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
                            <a class="nav-link" href="/it-price">IT Priče i Vijesti</a>
                        </li>
                    </ul>
                </div>  
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 mt-5">
                    <div id="back">
                        <a href="{{ URL::previous() }}">
                            <div id="back-icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="#000" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                </svg>
                            </div>
                            <span>NAZAD</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 offset-md-1 my-5">
                    <div id="job-panel">

                        <div id="job-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="media">
                                        <div class="square-72">
                                            <img src="{{asset('storage/'.$job->company->logo_path)}}" alt="{{$job->company->name}} logo" width="100%">
                                        </div>
                                        <div>
                                            <h1>{{$job->title}}</h1>
                                            <a href="//{{$job->company->website}}" target="_blank">{{$job->company->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="job-details">
                            <div class="row">

                                <div class="col-6 col-md-3 mb-4 mb-sm-0">
                                    <div class="job-info">
                                        <div class="icon">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lightning-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                                            </svg>
                                        </div>
                                        <p>{{$job->level->name}}</p>
                                    </div>
                                </div>  

                                <div class="col-6 col-md-3 mb-4 mb-sm-0">
                                    <div class="job-info">
                                        <div class="icon">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-briefcase-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                                                <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v1.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z"/>
                                            </svg>
                                        </div>
                                        <p>{{$job->type->name}}</p>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3 mb-4 mb-sm-0">
                                    <div class="job-info">
                                        <div class="icon">
                                           <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            </svg>
                                        </div>
                                        <p>{{$job->expired_at}}</p>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3 mb-4 mb-sm-0">
                                    <div class="job-info">
                                        <div class="icon">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            </svg>
                                        </div>
                                        <p>{{$job->city->name}}</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="job-body">
                            {!! $job->text !!}
                        </div>


                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <!-- ISTAKNUTI POSLOVI -->
                    <div id="featured-jobs" class="">
                        <!-- Naslov -->
                        <div class="row">
                            <div class="col-12 col-lg-12 py-2 py-md-3">
                                <div class="header">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" fill="#00b074" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
                                      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                    <h2>Slični poslovi</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Home posao list -->
                        <div class="row">
                            @foreach ($related_jobs as $job)
                            <!-- List item -->
                                <div class="col-12 col-md-6  py-2 py-md-4">
                                    <a href="/posao/{{$job->id}}/{{$job->slug}}">
                                    <div class="job-card px-4 py-4">
                                        <div class="row">
                                            <div class="col mb-2">
                                                <div class="media">
                                                    <div class="square72">
                                                        <img src="{{asset('storage/'.$job->company->logo_path)}}" alt="{{$job->company->name}} logo" width="100%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-4">
                                                <div class="job-card-body">
                                                    <span class="company-name">{{$job->company->name}}</span>
                                                    <h3 class="job-name">{{$job->title}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <ul class="tags">
                                                    <li class="mr-1 color-blue">
                                                        <span class="mr-1">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                                                <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                            </svg>
                                                        </span>
                                                        <span>{{$job->city->name}}</span>
                                                    </li>
                                                    <li class="mr-1 color-orange">
                                                        <span class="mr-1 color-orange">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                                            </svg>
                                                        </span>
                                                        <span>{{$job->expired_at}}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                <!-- Kraj featured jobsa section -->
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
                    <button class="btn btn-zeleni px-3" type="button">Prijavi se</button>
                </div>
            </div>
        </form>
    </div>

</div>
<div class="row" style="padding: 140px 0px 60px;">
  <div class="col-md-6" style="border-right: 1px solid #e5e5e5">
    <div style="text-align:center;">
        <img src="{{asset('storage/img/logo.png')}}" alt="logo it poslovi crna gora me mali oglasi karijera it programiranje" width="150px">
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





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    </body>
</html>

