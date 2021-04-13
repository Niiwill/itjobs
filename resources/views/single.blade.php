<!DOCTYPE html>
<html lang="me">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="{{asset('storage/img/favicon.png')}}" />
        <title>{{$job->title}} | {{$job->company->name}} | {{$job->city->name}} | ITPoslovi.me</title>
        <meta name="description" content="Oglas: {{$job->title}} - Crna Gora / Montenegro - Svi It poslovi na jednom mjestu. Pronađite software kompanije u Crnoj Gori ili posao za programere i druge IT pozicije">
        <link rel="canonical" href="{{url()->current()}}"/>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Navigation CSS -->
        <link href="{{ asset('css/navigation.css?v=50') }}" rel="stylesheet">
        <!-- Single Job CSS -->
        <link href="{{ asset('css/single-job.css?v=65') }}" rel="stylesheet">
        <!-- Footer CSS -->
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TETF7GV131"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-TETF7GV131');
        </script>
    </head>
    <body>
	   	<!-- NAVIGATION -->
        @include('navigation')

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
                        @isset($related_jobs)
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
                        @endisset
                    </div>
                <!-- Kraj featured jobsa section -->
                </div> 
            </div>
        </div>

        <!-- FOOTER -->
        @include('footer')

    </body>
</html>

