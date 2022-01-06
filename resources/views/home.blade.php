<x-home-layout>
        <!-- NAVIGATION -->
        @include('navigation')

        <!-- JUMBOTRON -->
        <div class="hero pt-0 pt-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mt-4 mt-sm-5">

                        <div class="row">

                            <div class="col-md-12">
                                <div class="hero-body pt-5 pb-3 py-md-0 mt-0 mt-sm-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>Pronađi savršen <span style="color:#04D223;">IT</span> posao koji zaslužuješ.</h1>
                                            <p>Prvi portal za IT poslove u Crnoj Gori.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 mt-0 mt-md-3">
                                <form id="search-form-home" action="{{ route('job.search') }}" method="get">                                    
                                    <div class="row">
                                        <div class="col-9 col-md-8 pr-0">
                                            <div class="search_input_home">
                                                <span class="search_icon">
                                                    <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-search" fill="#00b074" xmlns="http://www.w3.org/2000/svg">
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
                                        </div>

                                        <div class="col-3 col-md-4 px-sm-0">
                                            <button class="d-none d-sm-block btn btn-zeleni btn-search-home line-height-reset h-100 btn-submit w-100 text-uppercase">TRAŽI
                                            </button>
                                            <button class="d-sm-none btn btn-zeleni btn-search-home line-height-reset h-100 btn-submit w-100 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-12 mt-5 popular-tags">
                                <div class="label py-1 mb-2">Popularne vještine</div>
                                <div class="d-flex flex-wrap">
                                @foreach ($popular_tags->take(4) as $tag)
                                    <a href="{{ route('job.search', ['tag_id' => $tag->id]) }}" class="px-3 mr-2 mb-2 py-2 d-inline-flex">
                                        @if ($tag->icon)
                                            <img src="{{asset('storage/tags/'.$tag->icon)}}" class="mr-2" height="25px" alt="{{ $tag->name }}">
                                        @endif
                                        {{ $tag->name }}</a>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-5 mt-5">
                        <img src="{{asset('storage/img/hero.png')}}" class="m-md-0" alt="logo it poslovi crna gora me" width="100%">
                    </div>
                </div>
            </div>
        </div>

        <!-- POPULARNE KOMPANIJE -->
        <div id="top-companies" class="mt-4 py-2 py-5">
            <div class="container">
                <!-- Naslov -->
                <div class="row" style="padding-bottom: 3.4375rem;">
                    <div class="col-12 col-lg-12">
                        <div class="header" >
                            <h2>Istaknute <span style="color:#04D223;">IT</span> kompanije</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($top_companies as $company)
                    <div class="col-6 col-md-2 mb-4">
                        <div class="company-card p-2">
                            <div class="company-logo mb-2">
                                <img src="{{asset('storage/'.$company->logo_path)}}" alt="{{$company->name}} logo" width="100%">
                            </div>
                            <div class="description">
                                <h3>{{ $company->name }}</h3>
                                <span>{{ $company->jobs_count }} pozicije</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- POPULARNE KATEGORIJE -->
        <div class="py-2 py-md-5">
            <div class="container">

                <div class="row">
                    <div class="col-12 col-lg-6 py-4 py-sm-0 pb-sm-5">
                        <div class="header">
                            <h2 class="">Popularne kategorije</h2>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 pb-5 pt-3 pt-sm-0 pb-sm-5">
                        <div class="header-button">
                            <a class="btn" href="{{ route('job.search')}}">ISTRAŽI SVE</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Programiranje -->
                    <div class="col-6 col-md-3">
                        <div class="cat-banner mb-5 mb-md-0">
                            <a href="/oglasi-za-posao?cat_id=1">
                                <div class="cat-banner-icon mx-auto mx-md-0" style="background-color: rgba(138,63,252,.1)">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-code-square" fill="#8a3ffc" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path fill-rule="evenodd" d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z"/>
                                    </svg>
                                </div>
                                <div class="cat-banner-body text-center text-md-left">
                                    <h5>Programiranje</h5>
                                    <p class="d-none d-sm-block">{{$programming_count}} Poslova</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- QA -->
                    <div class="col-6 col-md-3">
                        <div class="cat-banner mb-5 mb-md-0">
                            <a href="/oglasi-za-posao?cat_id=5">
                                <div class="cat-banner-icon mx-auto mx-md-0" style="background-color:rgba(35,220,245,.1)">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools" fill="#23dcf5" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
                                    <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                                    </svg>
                                </div>
                                <div class="cat-banner-body text-center text-md-left">
                                    <h5>QA</h5>
                                    <p class="d-none d-sm-block">{{$qa_count}} Poslova</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Dizajn -->
                    <div class="col-6 col-md-3">
                        <div class="cat-banner mb-5 mb-md-0">
                            <a href="/oglasi-za-posao?cat_id=2">
                                <div class="cat-banner-icon mx-auto mx-md-0" style="background-color: rgba(56,97,251,.1)">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="#3861fb" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                  </svg>
                                </div>
                                <div class="cat-banner-body text-center text-md-left">
                                    <h5>Dizajn</h5>
                                    <p class="d-none d-sm-block">{{$design_count}} Poslova</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Praksa -->
                    <div class="col-6 col-md-3">
                        <div class="cat-banner mb-5 mb-md-0">
                            <a href="/oglasi-za-posao?cat_id=8">
                                <div class="cat-banner-icon mx-auto mx-md-0" style="background-color:rgba(35,245,195,.1)">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="#23f5c3" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                </div>
                                <div class="cat-banner-body text-center text-md-left">
                                    <h5>Prakse</h5>
                                    <p class="d-none d-sm-block">{{$intership_count}} Poslova</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ISTAKNUTI POSLOVI -->
        <div id="featured-jobs" class="py-2 py-md-5">
            <div class="container">
                <!-- Naslov -->
                <div class="row" style="padding-bottom: 3.4375rem;">
                    <div class="col-12 col-lg-12">
                        <div class="header" >
                            <h2>Istaknuti <span style="color:#04D223;">IT</span> poslovi</h2>
                        </div>
                    </div>
                </div>

                <!-- Home posao list -->
                <div class="row">
                    @foreach ($jobs as $job)
                    <!-- List item -->
                    <div class="col-12 col-md-4">
                        <div class="job-card px-4 py-4">
                            <div class="row float-left float-sm-none">
                                <div class="col mb-md-3">
                                    <div class="media">
                                        <div class="square72">
                                            <img src="{{asset('storage/'.$job->company->logo_path)}}" alt="{{$job->company->name}} logo" width="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-md-4">
                                    <div class="job-card-body">
                                        <a class="company-name">{{$job->company->name}}</a>
                                        <h3><a href="/posao/{{$job->id}}/{{$job->slug}}" class="job-name">{{$job->title}}</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-none d-sm-block">
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
                                            <span>{{$job->expired_at->format('d-m-Y')}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- EVENTS -->
        <div id="events" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <h2><span style="color:#04D223;">IT</span> događaji</h2>
                    </div>
                </div>
                <div class="row">
                @foreach ($it_events as $it_event)
                    <div class="col-12 col-sm-4 my-3 my-md-5">
                        <a href="/it-dogadjaji/{{$it_event->id}}/{{$it_event->slug}}" style="text-decoration: none;">
                            <div class="timeline-item">

                                <div class="description p-5">
                                    <div class="calendar mb-3">
                                        <span>{{$it_event->article_event_date->format('d')}}</span>
                                        {{$meseci[$it_event->article_event_date->format('n')]}}
                                    </div>

                                    <h5>{{$it_event->title}}</h5>
                                    
                                    {{-- <div> --}}
                                            {{-- <span class="date-dot"></span> --}}
                                            {{-- <span class="location">{{$it_event->location}}</span> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        </div>

        <!-- IT VESTI I PRIČE -->
        <div id="articles" class="py-2 py-md-5">
            <div class="container">
               
                <div class="row">
                    <div class="col-12 col-lg-6 py-4 py-sm-0 pb-sm-5">
                        <div class="header">
                            <h2><span style="color:#04D223;">IT</span> vijesti i priče</h2>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 pb-5 pt-3 pt-sm-0 pb-sm-5">
                        <div class="header-button">
                            <a class="btn" href="{{ route('articles.index')}}">PROČITAJ SVE</a>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                        @foreach ($articles as $article)
                            <div class="col mb-5">
                                <a href="{{ route('articles.single', ['id' => $article->id, 'slug' => $article->slug]) }}" class="text-decoration-none">
                                    <div class="article-card sub-articles ">
                                        <div class="d-block position-relative">
                                            {{-- <img src="https://itposlovi.me/storage/articles/thumbnails/1637224861.jpg" alt="{{$article->title}} slika"> --}}
                                            
                                            <img src="{{asset('storage/articles/thumbnails/'.$article->image_url)}}" alt="{{$article->title}} slika">
                                        </div>
                                        

                                        <div class="description px-5 py-4">
                                            <h3>{{$article->title}}</h3>
                                            <p>{{$article->description}}</p>        
                                        </div>
                                    </div>
                                </a>
                            </div>                                       
                        @endforeach
                </div>
            </div>
        </div>

        <!-- FOR COMPANIES - NEW JOB ACTION -->
        <div class="container d-none d-sm-block">
            <div id="add-job" class="p-5 my-5">
                <h4><span>Zapošljavate <span style="color:#04D223;">?</span></span></h4>
                <a href="mailto:itposlovi.me@gmail.com" class="px-5 py-3 float-right">
                    Pošalji oglas 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-forward-fill" viewBox="0 0 16 16">
                      <path d="m9.77 12.11 4.012-2.953a.647.647 0 0 0 0-1.114L9.771 5.09a.644.644 0 0 0-.971.557V6.65H2v3.9h6.8v1.003c0 .505.545.808.97.557z"/>
                    </svg>
                </a>
            </div>
        </div>


        <x-about/>

        <x-footer/>


</x-home-layout>

