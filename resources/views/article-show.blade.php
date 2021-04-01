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
        <!-- Footer CSS -->
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

    </head>
    <body>
        <!-- navigation -->
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
                    <div class="row">
                        <div class="col-12 col-sm-8 offset-md-2">
                            <div class="row">
                                <div class="col-12 col-md-8 mb-">
                                    <span style="text-transform:uppercase;color:#adadb2;font-size:14px;letter-spacing:3px;font-weight:600;">DOGAĐAJ</span>
                                    <h1>{{$article->title}}</h1>
                                </div>
                                <div class="col-12 col-md-4 mb-4">
                                    <div class="heading-date">
                                        <span>{{$article->article_event_date->format('d')}}</span>
                                        <p id="month">{{$meseci[$article->article_event_date->format('n')]}}</p>
                                        <p id="time">{{date('H:i', strtotime($article->article_event_time))}}</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="description">{{$article->description}}</p>
                                    <img src="{{asset('storage/'.$article->image_url)}}" alt="{{$article->title}} slika">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
    	
            <div class="row">
    	        <div class="col-12 col-sm-8 offset-md-2">
    	        	{!! $article->text !!}	
    	        </div>
            </div>
        </div>

         <!-- FOOTER -->
        @include('footer')

    </body>
</html>

