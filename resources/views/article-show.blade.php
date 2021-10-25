<!DOCTYPE html>
<html lang="me">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="{{asset('storage/img/favicon.png')}}" />
        <title>{{$article->title}} | ITPoslovi.me</title>
        <meta name="description" content="{{$article->description}}">
        <link rel="canonical" href="{{url()->current()}}"/>

        <meta property="og:url" content="{{url()->current()}}" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{$article->title}}" />
        <meta property="og:description" content="{{$article->description}}" />
        <meta property="og:image" content="{{asset('storage/articles/'.$article->image_url)}}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Navigation CSS -->
        <link href="{{ asset('css/navigation.css?v=50') }}" rel="stylesheet">
        <!-- Single Job CSS -->
        <link href="{{ asset('css/single-article.css?v=60') }}" rel="stylesheet">
        <!-- Footer CSS -->
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
        <!-- Adsense -->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1424446387057620"
     crossorigin="anonymous"></script>
     
    </head>
    <body>
        <!-- NAVIGATION -->
        @include('navigation')

        <div class="container">
            @if(empty($article->article_event_date))
                <div id="heading">
                    <div class="row">
                        <div class="col-12 col-sm-8 offset-md-2">
                            <h1>{{$article->title}}</h1>
                            <p class="description">{{$article->description}}</p>
                            <img src="{{ asset('storage/articles/'.$article->image_url) }}" alt="{{$article->title}} slika">
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
                                    <img src="{{asset('storage/articles/'.$article->image_url)}}" alt="{{$article->title}} slika">
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

