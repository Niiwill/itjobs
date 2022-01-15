<!DOCTYPE html>
<html lang="me">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="{{asset('storage/img/favicon.png')}}" />
        <title>{{$company->name}} | ITPoslovi.me</title>
        <meta name="description" content="{{$company->description}}">
        <link rel="canonical" href="{{url()->current()}}"/>

        <meta property="og:url" content="{{url()->current()}}" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{$company->name}}" />
        <meta property="og:description" content="{{$company->description}}" />
        <meta property="og:image" content="{{asset('storage/articles/'.$company->logo_path)}}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Navigation CSS -->
        <link href="{{ asset('css/navigation.css?v=51') }}" rel="stylesheet">
        <!-- Single Job CSS -->
        <link href="{{ asset('css/company-profile.css?v=2') }}" rel="stylesheet">
        <!-- Footer CSS -->
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
     
    </head>
    <body>
        <!-- NAVIGATION -->
        @include('navigation')
        
        <section id="company-hero">
            <div class="hero-opacity">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-caption position-relative">
                                <div class="position-absolute content">
                                    <div>
                                        <img src="{{asset('storage/'.$company->logo_path)}}" alt=" it kompanija {{$company->name}} Crna Gora Itposlovi.me">
                                    </div>
                                    <div class="ml-3">
                                        <h1>{{$company->name}}</h1>
                                        <div class="location">
                                            <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                              </svg></span>
                                              {{$company->address}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>  
            </div>    
        </section>
        
        <section id="company-body">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-8">
                        <h2 class="mb-4">{{$company->name}}</h2>
                        <p>{{$company->description}}</p>
                    </div>
                    <div class="col-4">
                        <div class="single-company-side-panel p-4 ">
                            <div class="mt-4">
                                <div class="label">Industrija</div>
                                <div class="data">Software</div>
                            </div>
                            <div class="mt-4">
                                <div class="label ">Broj zapolenih</div>
                                <div class="data">/</div>
                            </div>
                            <div class="mt-4">
                                <div class="label">Osnovana</div>
                                <div class="data">/</div>
                            </div>
                            <div class="mt-4">
                                <div class="label">Telefon</div>
                                <div class="data">{{$company->phone}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="label">Email</div>
                                <div class="data">{{$company->email}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="label">Adresa</div>
                                <div class="data">{{$company->address}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="label">Web-sajt</div>
                                <div class="data"><a href="{{$company->website}}" target="_blank">{{$company->website}}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="related-jobs">
            <div class="container">
                <div class="row mt-5">
                    <div id="header" class="col-12">
                        <h2>Poslovi</h2>          
                        <p>Lista poslijednjih poslova kompanije {{$company->name}}</p>  
                    </div>    
                </div>
                <div class="row mt-3">
                    @foreach ($related_jobs as $job)
                    <div class="col-6 mt-4">
                        <a href="{{ route('job.single', ['id' => $job->id, 'slug' => $job->slug]) }}">
                            <div class="job-card p-4">
                                <div class="top">
                                    <img src="{{asset('storage/'.$company->logo_path)}}" class="company-logo" alt=" it kompanija logo {{$company->name}} Crna Gora Itposlovi.me">
                                    <div class="info ml-3">
                                        <h3>{{ $job->title}}</h3>
                                        <div class="details">
                                            <div class="location">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                  </svg>
                                                  {{ $job->city->name }}</div>
                                            <div class="type ml-4">{{ $job->type->name }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom mt-3">
                                    <div class="category">Kategorija: {{ $job->category->name }}</div>
                                    <div class="created">prije 4 dana od <span>{{$company->name}}</span></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

         <!-- FOOTER -->
        @include('footer')

    </body>
</html>

