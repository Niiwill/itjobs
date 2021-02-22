<!DOCTYPE html>
<html lang="me">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="{{asset('storage/img/favicon.png')}}" />
        <title>Oglasi za posao i konkursi | ITPoslovi.me - Crna gora</title>
        <meta name="description" content="IT Poslovi, konkursi i slobodna radna mesta! ITPoslovi.me - Crna gora Programeri, dizajneri, QA testeri, Sitemski administratori u  Crnoj Gori.">
        <link rel="canonical" href="https://itposlovi.me/oglasi-za-posao"/>

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
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TETF7GV131"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-TETF7GV131');
        </script>

        <!-- Skripta za filter -->

        <script type="text/javascript">
        	$(function(){$("input[type=\"checkbox\"]").on("change",function(){$("input[name=\""+this.name+"\"]").not(this).prop("checked",!1)}),$("input[type=checkbox]").change(function(){var a=$(this).attr("name"),b=$(this).val(),c=$("#poslovi-form");$(this).prop("checked")?(c.find("input[name="+a+"]").prop("disabled",!1),c.find("input[name="+a+"]").val(b)):c.find("input[name="+a+"]").prop("disabled",!0),c.submit()})});

            $(document).ready(function () {
                $('#filter-button').click(function () {
                    // Animate the div element. A duration is set to 500 milliseconds.
                    // $("#filter").hide("slide", { direction: "down" }, 1000);
                    $("#filter").slideToggle('slow');


                });
            });
        </script>
     
        <!-- Styles -->
        <style>
        	.select2-container--default .select2-selection--multiple {
        		border:0px!important;
        	}
        	body{
        		background-color: #f5f7fa;
        		font-family: 'Inter', sans-serif;
        	}
        	.navbar{
        		padding: 0px;
                background-color: white;
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
        	#filter h4{
        		font-weight: 600;
        		font-size: 1.31rem;
        		line-height: 1.62;
        		letter-spacing: -.21px;
        		margin-bottom: 1rem!important;
        		color: #2b3940;
        		color: #1f0404;
        	}
        	#filter label{
        		font-weight: 400;
        		line-height: 1.5;
        		color: #2b3940;
        		font-size: 16px;
        		margin-bottom:.375rem!important;
        	}
        	#filter .filter-group{
        		margin-bottom: 2.5rem;
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
                font-size: 1.3rem;
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
                display: block;
                max-width: 72px;
                min-width: 72px;
                max-height: 72px;
                min-height: 72px;
                margin-right: 1.5625rem;
                display: flex;
                align-items: center;
                justify-items: center;
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
                color: #2b3940;
                margin-right:.2rem;
                font-size: 16px;
                margin-top: -3px; 
            }
            ul.tags{
                margin: 0px;
                list-style: none;
                padding: 0px;
                display: flex;
                flex-wrap: wrap;
            }
            ul.tags li{
                display: inline;
            }
            ul.tags li a{
                color: #2b3940;
                display: inline-block;
                text-align: center;
                margin-right: .5rem;
                margin-top: .375rem;
                font-size: 13px;
                min-width: 96px;
                padding: .25rem 1rem;
                border-radius: 3px;
                background-color: rgba(176,213,232,.15);
                line-height: 2;
                letter-spacing: .26px;
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
                background-color:#0fbc49;
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

        	input[type=checkbox] + label {
        		display: block;
        		margin: 0.2em;
        		cursor: pointer;
        		padding: 0.2em;
        	}

        	input[type=checkbox] {
        		display: none;
        	}

        	#filter input[type=checkbox] + label:before {
        		content: "\2714";
        		border: 0.15em solid rgb(126 137 137);
        		border-radius: 0.15em;
        		display: inline-block;
        		width: 14px;
        		height: 14px;
        		margin-right: 11px;
        		vertical-align: middle;
        		color: transparent;
        		transition: .2s;
        	}
            
        	#filter input[type=checkbox]:checked + label{
        		font-weight: 600;
        	}

        	#filter input[type=checkbox]:checked + label:before {
        		background-color: MediumSeaGreen;
        		border-color: MediumSeaGreen;
        		color: transparent;
        	}

        	input[type=checkbox]:checked:disabled + label:before {
        		/*transform: scale(1);*/
        		background-color: #bfb;
        		border-color: #bfb;
        	}
            #search-bar{
                border-radius: .6rem;
                background: white;
                padding: 1rem;
                box-shadow: 0 29px 75px rgba(156, 156, 156, 0.16);
            }
        	#search-bar input, #search-bar select{
        		border-radius: 0px;
        		border: 0;
        		height: 40px;
        		color: #6b6e6f;
        	}
        	#search-bar .btn{
        		width:100%;
        		color: #fff;
        		background-color: #00b074;
                background-image: linear-gradient(-180deg,#34b859,#2ea44f);
        		border-color: #00b074;
        		height: 60px;
        		font-weight: 700;
        		font-size: 13px;
                text-transform: uppercase;
        	}
        	#search-bar input:focus, #search-bar select:focus, #search-bar .btn:focus{
        		border: none;
        		box-shadow: none;
        		outline: none;
        	}
        	#search-bar .btn:focus{
        		color: #fff;
        		background-color: #008a5b;
        		border-color: #007d52;
        	}
        	#search-bar .icon {
        		align-items: center;
        		font-size: 20px;
        		display: flex;
        		justify-content: center;
        	}
            select2-selection { overflow: hidden; }
            .select2-selection__rendered { white-space: normal; word-break: break-all; }

            @media (max-width: 576px){
                #filter{
                    display: none;
                }
                #filter-button{
                    background-color: transparent;
                    border: 1px solid #00b074;
                    border-radius: .4rem;
                    text-transform: uppercase;
                    letter-spacing: .26px;
                    font-weight: 600;
                    font-size: 12px;
                    color: #00b074;
                
                }
                .job-card{
                    padding:1.875rem 1.25rem 1.25rem 1.25rem;
                }
                .job-card-info svg {
                    font-size: 15px;
                }
                .cat-banner{
                    padding: 20px 10px 15px;
                }
                ul.tags li a {
                    margin-right: .4rem;
                    min-width:auto; 
                    padding: .25rem 0.6rem;
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
                        
                   <!--  @guest
                    </ul> -->
                   <!--  <div class="nav-auth float-right">
                        <a class="btn singin" href="{{ route('login') }}">Prijava</a>
                        <a class="btn singup" href="{{ route('register') }}">Registruj se</a>
                    </div> -->
                    <!-- @else -->
<!-- 



                        <li class=" nav-item dropdown">
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
  

<!-- NAJNOVIJI POSLOVI -->
<div  class="py-0 py-sm-5">
    <div class="container">

        <!-- Home posao list -->
        <div class="row">
            <div class="col-sm-3 pt-2 pt-sm-5">
                <button id="filter-button" class="btn d-block d-sm-none w-100 my-4 py-3">Napredni Filteri</button>
            	<div id="filter">
            		<div class="filter-group">
	            		<h4>Kategorije</h4>

	  					<input type="checkbox" form="poslovi" id="cat1" name="cat_id" value="1" {{ request()->get('cat_id') == 1 ? "checked":""}}>
					  	<label for="cat1">Programiranje</label>

					  	<input type="checkbox" form="poslovi" id="cat2" name="cat_id" value="2" {{ request()->get('cat_id') == 2 ? "checked":""}}>
					  	<label for="cat2">Dizajn </label>

					  	<input type="checkbox" form="poslovi" id="cat3" name="cat_id" value="3" {{ request()->get('cat_id') == 3 ? "checked":""}}>
					  	<label for="cat3">Menadžment</label>
				  
	  					<input type="checkbox" form="poslovi" id="cat4" name="cat_id" value="4" {{ request()->get('cat_id') == 4 ? "checked":""}}>
					  	<label for="cat4">Sistemska administracija</label>

					  	<input type="checkbox" form="poslovi" id="cat5" name="cat_id" value="5" {{ request()->get('cat_id') == 5 ? "checked":""}}>
					  	<label for="cat5">QA</label>

					  	<input type="checkbox" form="poslovi" id="cat6" name="cat_id" value="6" {{ request()->get('cat_id') == 6 ? "checked":""}}>
					  	<label for="cat6">Prodaja / konsultanti</label>

	  					<input type="checkbox" form="poslovi" id="cat7" name="cat_id" value="7" {{ request()->get('cat_id') == 7 ? "checked":""}}>
					  	<label for="cat7">Podrška</label>

					  	<input type="checkbox" form="poslovi" id="cat8" name="cat_id" value="8" {{ request()->get('cat_id') == 8 ? "checked":""}}>
					  	<label for="cat8">Prakse </label>

					  	<input type="checkbox" form="poslovi" id="cat9" name="cat_id" value="9" {{ request()->get('cat_id') == 9 ? "checked":""}}>
					  	<label for="cat9">Ostalo</label>
				  	</div>

            		<div class="filter-group">
	            		<h4>Tip Posla</h4>
	  					<input type="checkbox" form="poslovi" id="type1" name="type_id" value="1" {{ request()->get('type_id') == 1 ? "checked":""}}>
					  	<label for="type1">Stalni</label>
					  	<input type="checkbox" form="poslovi" id="type2" name="type_id" value="2" {{ request()->get('type_id') == 2 ? "checked":""}}>
					  	<label for="type2">Honorarni </label>
					  	<input type="checkbox" form="poslovi" id="type3" name="type_id" value="3" {{ request()->get('type_id') == 3 ? "checked":""}}>
					  	<label for="type3">Freelance</label>
				  	</div>

				  	<div class="filter-group">
	            		<h4>Senioritet</h4>
	  					<input type="checkbox" form="poslovi" id="level1" name="level_id" value="1" {{ request()->get('level_id') == 1 ? "checked":""}}>
					  	<label for="level1"> Junior</label>
					  	<input type="checkbox" form="poslovi" id="level2" name="level_id" value="2" {{ request()->get('level_id') == 2 ? "checked":""}}>
					  	<label for="level2"> Intermediater</label>
					  	<input type="checkbox" form="poslovi" id="level3" name="level_id" value="3" {{ request()->get('level_id') == 3 ? "checked":""}}>
					  	<label for="level3"> Senior</label>
				  	</div>
				  	
                </div>
            </div>

            <div class="col-sm-9 pt-0 pt-sm-5">
                <div class="row">
                    <div class="col-12">
                        <div id="search-bar">
                            <form id="poslovi-form" action="/oglasi-za-posao" method="get">
                                <input type="hidden" name="cat_id" value="{{ request()->get('cat_id')}}" {{ (request()->get('cat_id')) ? "":"disabled"}}>
                                <input type="hidden" name="type_id" value="{{ request()->get('type_id')}}" {{ (request()->get('type_id')) ? "":"disabled"}}>
                                <input type="hidden" name="level_id" value="{{ request()->get('level_id')}}" {{ (request()->get('level_id')) ? "":"disabled"}}>
                              <div class="form-row align-items-center">

                                <div class="col-12 col-sm-5 my-1 pl-1 pl-sm-3">
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend mr-2 icon">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="#00b074" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                        </svg>
                                        </div>
                                        
                                        <select class="search_tags form-control" data-placeholder="Tehnologija" name="tag_id" multiple="multiple">
                                            @foreach ($tags as $tag)
                                                <option value="{{$tag->id}}" {{ request()->get('tag_id') == $tag->id ? "selected":""}}>{{$tag->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4 my-1 pr-0 pr-sm-3">
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend icon">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="#00b074" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                                <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            </svg>
                                        </div>
                                        <select class="form-control" name="city_id" style="border:0px!important;" >
                                            <option value="" selected disabled>Lokacija</option>
                                            @foreach ($cities as $city)
                                            <option value="{{$city->id}}" {{ request()->get('city_id') == $city->id ? "selected":""}}>{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-3 my-1">
                                  <button type="submit" class="btn btn-primary w-100">Traži</button>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>






            	<div style="padding-top:2.8125rem;margin-bottom:1.5rem;">
            		<span style="color:#6b6e6f;font-weight: 400;font-size: 1.1rem;line-height: 1.625;letter-spacing: -.08px;">
            			<span style="color:#2b3940;">{{$jobsCount}}</span> oglasa
            		</span>
            	</div>
                @foreach ($jobs as $job)
            	<!-- List item -->
                  <div class="job-card">
                    <div class="row">
                        <div class="col-12 col-md-10">
                            <div class="media">
                                <div class="square72">
                                    <img src="{{asset('storage/'.$job->company->logo_path)}}" alt="{{$job->company->name}} logo" width="100%">
                                </div>
                                <div class="job-card-body">
                                    <h3><a href="/posao/{{$job->id}}/{{$job->slug}}" class="job-name">{{$job->title}}</a></h3>
                                    <a class="company-name">{{$job->company->name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-12 col-md-7">
                            <ul class="tags">
                                @foreach($job->tags as $tag)
                                <li><a href="/oglasi-za-posao?tag_id={{$tag->id}}">{{$tag->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-12 col-md-5 col-12 col-md-5 my-2 my-sm-0" style="padding-top:3px;">
                            <ul class="job-card-info text-left text-sm-right">
                                <li>
                                    <span>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="#828282" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                            <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                    </span>
                                    <span>{{$job->city->name}}</span>
                                </li>
                                <li>
                                    <span>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="#828282" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
                                            <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                        </svg>
                                    </span>
                                    <span>{{$job->expired_at}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

                
                @if($jobs->lastPage() > 1 )
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    @if($jobs->currentPage() != 1)
                        <li class="page-item"><a class="page-link" href="{{$jobs->previousPageUrl()}}">Prethodni</a></li>
                    @endif
                    @for ($i = 1; $i <= $jobs->lastPage(); $i++)
                        @if($jobs->currentPage() == $i)
                        <li class="page-item active"><a class="page-link" href="{{$jobs->url($i)}}">{{ $i }}</a></li>
                        @else
                        <li class="page-item"><a class="page-link" href="{{$jobs->url($i)}}">{{ $i }}</a></li>
                        @endif
                    @endfor
                    @if($jobs->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{$jobs->nextPageUrl() }}">Sledeći</a></li>
                    @endif
                  </ul>
                </nav>
                @endif


               

                

                

                

              

            </div>

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


<script type="text/javascript">
$('.search_tags').select2({
    width: 'resolve',
    maximumSelectionLength:1,
    placeholder:'Java',
    minimumInputLength: 1,
    language: {
        inputTooShort: function () { return ''; }
    }
});
</script> 





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

