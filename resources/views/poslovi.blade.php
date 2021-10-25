
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

            $(function () {
                $('select#order_select').on("change", function () {

                        var a = $(this).attr("name"),
                            b = $(this).val(),
                            c = $("#poslovi-form");
                            
                        c.find("input[name="+a+"]").prop("disabled",!1)
                        c.find("input[name=" + a + "]").val(b);
                        c.submit();
                });
            });
        </script>
     
        <!-- Navigation CSS -->
        <link href="{{ asset('css/navigation.css?v=15') }}" rel="stylesheet">
        <!-- Search CSS -->
        <link href="{{ asset('css/search.css?v=20') }}" rel="stylesheet">
        <!-- Footer CSS -->
        <link href="{{ asset('css/footer.css?v=15') }}" rel="stylesheet">   

    </head>
    <body>
        <!-- NAVIGATION -->
        @include('navigation')
  

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
                                        <input type="hidden" name="order_id" value="{{ request()->get('order_id')}}" {{ (request()->get('order_id')) ? "":"disabled"}}>

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


                        <div class="row">

                            <div class="col-12 col-md-6 mt-5 mb-3">
                                <span style="color:#6b6e6f;font-weight: 400;font-size: 1.1rem;line-height: 1.625;letter-spacing: -.08px;">
                                        Prikazano 
                                        <span style="color:#2b3940;">{{$jobsCount}}</span> 
                                        od 
                                        <span style="color:#2b3940;">{{$jobsTotal}}</span> 
                                        oglasa
                                </span>
                            </div>

                            <div class="col-12 col-md-3 offset-md-3 mt-md-5 mb-3 ">
                                <select class="form-control" id="order_select" name="order_id" style="border:0px!important;" >

                                    <option value="latest" {{ request()->get('order_id') == 'latest' ? "selected":""}}>Najnovije</option>
                                    <option value="expiration" {{ request()->get('order_id') == 'expiration' ? "selected":""}}>Uskoro ističe</option>                                                                                    
                                 </select>
                            </div>
 
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
                                            <h3>
                                                @if($job->expired_at->isPast())
                                                    <del><a href="/posao/{{$job->id}}/{{$job->slug}}" class="job-name">{{$job->title}}</a></del>
                                                @else
                                                    <a href="/posao/{{$job->id}}/{{$job->slug}}" class="job-name">{{$job->title}}</a>
                                                @endif
                                            </h3>
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
                                            
                                            @if ($job->expired_at->isPast())
                                                <span class="expired">Istekao</span>
                                            @else
                                                <span>{{$job->expired_at->format('d-m-Y')}}</span>
                                            @endif
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
                                <li class="page-item"><a class="page-link" href="{{$jobs->appends($_GET)->previousPageUrl()}}">Prethodni</a></li>
                            @endif
                            
                            @if($jobs->currentPage() == 1)
                            <li class="page-item active"><a class="page-link" href="{{$jobs->appends($_GET)->url('1')}}">1</a></li>
                            @endif

                            @if($jobs->currentPage() != 1)
                            <li class="page-item"><a class="page-link" href="{{$jobs->appends($_GET)->url('1')}}">1</a></li>
                            <li class="page-item active"><a class="page-link" href="{{$jobs->appends($_GET)->url($jobs->currentPage())}}">{{$jobs->currentPage()}}</a></li>
                            @endif

                            @if($jobs->hasMorePages())
                                <li class="page-item"><a class="page-link" href="{{$jobs->appends($_GET)->url($jobs->lastPage())}}">{{ $jobs->lastPage() }}</a></li>
                                <li class="page-item"><a class="page-link" href="{{$jobs->appends($_GET)->nextPageUrl() }}">Sledeći</a></li>
                            @endif
                          </ul>
                        </nav>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        @include('footer')

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

