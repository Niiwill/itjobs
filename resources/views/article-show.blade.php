<!DOCTYPE html>
<html lang="me">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="{{asset('storage/img/favicon.png')}}" />
        <title>{{$article->title}} | ITPoslovi.me</title>
        <meta name="description" content="">
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
        	
        	body{
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
            #heading, #event-heading{
            	margin-top: 100px;
            }
            #heading img,#event-heading img{
                width: 100%;
                object-fit: contain;
                margin: 2.2rem 0;
                max-height: 400px;
            }
            #heading h1,#event-heading h1{
                text-align: center;
            	font-weight: 700;
    			color:#000;
    			margin-bottom: 1.9rem;
    			font-size: 3.3rem;
			    line-height: 1.35;
			    letter-spacing: -0.4px;
            }
            #event-heading h1{
                color: #39374d;
                text-align: left;
                font-size: 2.5rem;
                border-right: 1px solid #e1e2eb;
            }
            #heading p, #body p{
            	font-family: 'Inter', sans-serif;
			    color: #6e727d;
			    font-weight: 500;
			    margin-bottom:0;
                line-height: 1.7;
                letter-spacing: -.2px;
                font-size: 17px;        
			}
			#body p{
			    margin-bottom: 35px;
			}
            .heading-date{
                box-shadow: rgba(36, 37, 38, 0.04) 4px 4px 15px 0px;
                height: 200px;
                background: linear-gradient(180deg,#21c8f6,#637bff);
                border-radius: 20px;
                color: white;
                padding: 10px 25px;
                text-align: center;
            }
            .heading-date span{
                font-weight: 600;
                font-size: 70px;
            }
            .heading-date #month{
                text-transform: uppercase;
                margin-top: -12px;
                margin-bottom: 0px;
            }
            .heading-date #time{
                font-size: 34px;
            }

            
     
            @media (max-width: 576px){
                #heading{
                	margin-top:50px;
                }
                #heading h1{
                	font-size: 2.2rem;
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
        @if(empty($article->article_event_date))
            <div id="heading">
            <div class="row">
                <div class="col-12 col-sm-8 offset-md-2">
                    <h1>{{$article->title}}</h1>
                    <p class="description">{{$article->description}}</p>
                    <img src="{{asset('storage/'.$article->image_url)}}" alt="{{$article->title}} slika">
                </div>
            </div>
        </div>
        @else
        <div id="event-heading">
            <div class="row no-gutters">
                <div class="col-12 col-sm-8 offset-md-2">
                    <div class="row">
                        <div class="col-8 mb-5">
                            <span style="text-transform:uppercase;color:#adadb2;font-size:14px;letter-spacing:3px;font-weight:600;">DOGAĐAJ</span>
                            <h1>{{$article->title}}</h1>
                        </div>
                        <div class="col-4 mb-5">
                            <div class="heading-date">
                                <span>{{$article->article_event_date->format('d')}}</span>
                                <p id="month">{{$meseci[$article->article_event_date->format('n')]}}</p>
                                <p id="time">{{date('H:i', strtotime($article->article_event_time))}}</p>
                                
                            </div>
                           
                        </div>

                        <p class="description">{{$article->description}}</p>
                        <img src="{{asset('storage/'.$article->image_url)}}" alt="{{$article->title}} slika">

                    </div>
                    
                </div>
               
            </div>
        </div>
        @endif
    	
        

        <div class="row">
        	<div id="body">
	        	<div class="col-12 col-sm-8 offset-md-2">
	        		 {!! $article->text !!}	
	        	</div>
        	</div>
        </div>
  
    </div>
  



<!-- FOOTER -->
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

