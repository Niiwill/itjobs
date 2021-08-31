<!DOCTYPE html>
<html lang="me">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="{{asset('storage/img/favicon.png')}}" />
        <title>IT Priče i Vijesti | ITPoslovi.me</title>
        <meta name="description" content="IT Priče i vijesti u Crnoj Gori na jendom mestu.">
        <link rel="canonical" href="https://itposlovi.me"/>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
                padding: 0;
                box-shadow: 0 12px 34px -11px rgba(65,62,101,.1);
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
                border:0;
                border-radius: 0;
                color: #2b3940;
                border-left: 2px solid #e5e5e5;
            }
            .singin, .singup{
                text-transform: uppercase;
                letter-spacing: .26px;
            }
            .singin:focus, .singup:focus{
                box-shadow: none;
            }
            .singin:hover{
                transition: .3s cubic-bezier(.39,.575,.565,1);
                color:#0062cc;
            }
           
            .nav-auth .singup{
                color: #fff;
                background-color: #00b074;
                border-color: #00b074;
            }
            .nav-auth .logout{
                color: #fff;
                background-color: red;
                border-color: #00b074;
            }
            .card img{
                max-height: 230px;
                height: 100%;
                width: 100%;
                object-fit: cover;
                border-radius: 8px;
            }
            .card{
                border:none;
            }
            .card-title{
                font-size: 1.5rem;
                line-height: 1.5;
                letter-spacing: -0.24px;
                color: #2b3940;
                font-weight: 700;
            }
            .card-body p{
                font-size: 1rem;
                letter-spacing: -0.08px;
                color: #6b6e6f;
                font-weight: 400;
            }
            .badge-blue {
                font-size: 13px;
                line-height: 2;
                letter-spacing: 0.26px;
                color: #fff;
                background-color: #336ef7;
            }
        </style> 
        <!-- Footer CSS -->
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
  
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
                        <li class="nav-item active">
                            <a class="nav-link" href="/it-price">IT Priče i Vijesti</a>
                        </li>
                    </ul>
                </div>  
            </div>
        </nav>
       

        <div class="container">
            <div class="row mt-5">
                @foreach ($articles as $article)
                <div class="col-12 col-md-4 mt-5">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('storage/articles/thumbnails/'.$article->image_url)}}" alt="{{$article->title}} slika">
                        <div class="card-body pt-4 px-0 pb-0">
                            <span class="badge badge-blue text-uppercase font-size-3 font-weight-bold px-3 py-1">{{$article->created_at->format('j M, Y')}}</span>
                            <h5><a href="/it-price/{{$article->id}}/{{$article->slug}}" class="card-title text-decoration-none mt-4 mb-3 d-inline-block">{{$article->title}}</a></h5>
                            <p>{{$article->description}}</p>
                        </div>
                    </div>
                </div> 
                @endforeach
            </div>
            <div class="row">
                @if($articles->lastPage() > 1 )
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    @if($articles->currentPage() != 1)
                        <li class="page-item"><a class="page-link" href="{{$articles->previousPageUrl()}}">Prethodni</a></li>
                    @endif
                    @for ($i = 1; $i <= $articles->lastPage(); $i++)
                        @if($articles->currentPage() == $i)
                        <li class="page-item active"><a class="page-link" href="{{$articles->url($i)}}">{{ $i }}</a></li>
                        @else
                        <li class="page-item"><a class="page-link" href="{{$articles->url($i)}}">{{ $i }}</a></li>
                        @endif
                    @endfor
                    @if($articles->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{$articles->nextPageUrl() }}">Sledeći</a></li>
                    @endif
                  </ul>
                </nav>
                @endif
            </div>
        </div>

        <!-- FOOTER -->
        @include('footer')

    </body>
</html>

