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
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Navigation CSS -->
        <link href="{{ asset('css/navigation.css?v=50') }}" rel="stylesheet">
        <!-- Single Job CSS -->
        <link href="{{ asset('css/single-job.css?v=75') }}" rel="stylesheet">
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

            <div class="row mt-5">

                <div class="col-12 col-md-8">
                    <div class="job pr-md-4">
                        <div class="header">
                            <h1>{{$job->title}}</h1>
                            <div class="meta">
                                <span class="company-name">{{$job->company->name}}</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                    {{$job->city->name}}
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg>
                                    {{$job->type->name}}
                                </span>
                            </div>
                        </div>
                        <div id="content">{!! $job->text !!}</div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="company-info">
                        <div class="header border-bottom pb-4">
                            <div class="d-flex">
                                <figure><img alt="jobhub" class="" src="{{asset('storage/'.$job->company->logo_path)}}" alt="{{$job->company->name}}"></figure>
                                <div class="ml-3">
                                    <span class="d-block company-name">{{$job->company->name}}</span>
                                    <a href="{{$job->company->website}}" target="_blank" class="website">{{$job->company->name}}</a>
                                </div>
                            </div>
                            <div>
                                <p>Kompanija {{$job->company->name}} širi svoj tim i traži nove članove.</p>
                            </div>
                            <div>
                                <a href="{{$job->application_link}}" class="btn btn-primary w-100">Apliciraj</a>
                            </div>
                           
                        </div>
                        <div class="body border-bottom py-4">
                            <ul>
                                <li>
                                    <div class="icon float-left mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                          </svg>
                                    </div>
                                    <div class="sidebar-text-info float-left">
                                        <span class="text-description">Tip posla</span>
                                        <strong class="small-heading">{{$job->type->name}}</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon float-left mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                    </div>
                                    <div class="sidebar-text-info float-left">
                                        <span class="text-description">Lokacija</span>
                                        <strong class="small-heading">{{$job->city->name}}</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon float-left mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                                            <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                          </svg>
                                    </div>
                                    <div class="sidebar-text-info float-left">
                                        <span class="text-description">Nivo</span>
                                        <strong class="small-heading">{{$job->level->name}}</strong>
                                    </div>
                                <li>
                                    <div class="icon float-left mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                          </svg>
                                    </div>
                                    <div class="sidebar-text-info float-left">
                                        <span class="text-description">Datum isteka</span>
                                        <strong class="small-heading">{{$job->expired_at->format('d-m-Y')}}</strong>
                                    </div>
                                </li>
                            </ul>
                        
                        </div>
                        <div class="footer pt-4">
                            <div>
                                <h6 class="small-heading">Kontakt Info</h6>
                                <div class="address pt-2">
                                    <span class="d-block pb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#88929b" class="bi bi-geo-alt mr-2" viewBox="0 0 16 16">
                                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                        <span>{{$job->company->address}}</span>
                                    </span>
                                    <span class="d-block pb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#88929b" class="bi bi-telephone mr-2" viewBox="0 0 16 16">
                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                          </svg> 
                                        <span>{{$job->company->phone}}</span>
                                    </span>
                                    <span class="d-block pb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#88929b" class="bi bi-envelope mr-2" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                          </svg>
                                        <span>{{$job->company->email}}</span>
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <!-- ISTAKNUTI POSLOVI -->
                    <div id="featured-jobs" class="">
                        
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

