<!DOCTYPE html>
<html lang="me">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="{{asset('storage/img/favicon.png')}}" />
        <title>IT Priče i Vijesti | ITPoslovi.me</title>
        <meta name="description" content="IT Priče i vijesti u Crnoj Gori na jendom mestu. Digitalna Crna Gora na jednom mjestu">
        <link rel="canonical" href="https://itposlovi.me/it-price"/>
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
                background-color: rgb(29, 29, 29);
            }
            .navbar{
                background-color: white;
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
            #heading h1{
                color: white;
                font-size: clamp(16px,calc(1rem + 2vw), 42px);
                display: inline-block;
                font-family: 'Inter', sans-serif;
                font-weight: 700;
                background-image: linear-gradient(to right, #177afa 20%, #03f0d1);
                -webkit-background-clip: text;
                -moz-background-clip: text;
                -webkit-text-fill-color: transparent;
                -moz-text-fill-color: transparent;
            }
            .timeline-item{
                background-color:rgb(53, 53, 53);
                overflow: hidden;
                /*max-height: 270px;*/
                box-shadow: 0px 0px 0px 0px rgb(0 0 0 / 80%);
                position: relative;
                color: #ffffff;
                border-radius: 20px;
            }
            .timeline-item .description{
                border-top: 3px solid #20DEB0;
            }
            .timeline-item img{
                display: block;
                width: 100%;
                max-height: 150px;
                object-fit: cover;
            }
            .timeline-item .calendar {
                text-transform: uppercase;
                margin-left: -5px;
                display: inline-block;
                color: #20DEB0;
                font-size: 12px;
                text-align: center;
                font-weight: 600;
                box-shadow: rgb(0 0 0 / 8%) 0px 0px 38px 0px;
                letter-spacing: .12rem;
                background:#2a2a2a;
                border-radius:6px;
                padding: 7px 12px;
            }
            .timeline-item h5 {
                margin-bottom: 10px;
                font-size: 20px;
                line-height: 32px;
                font-weight: 600;
                color: #ffffff;
                text-decoration: none;
                overflow: hidden!important;
                text-overflow: ellipsis!important;
                display: -webkit-box!important;
                -webkit-line-clamp: 2!important;
                -webkit-box-orient: vertical;
            }
            .timeline-item p {
                color: white;
                opacity: 0.4;
                font-size: 16px;
                font-weight: 400;
                line-height: 1.2em;
                width: 100%;
                margin-bottom:0;
                overflow: hidden;
                height: 3.6em;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
            }
            .timeline-item .location{
                padding-left: 6px;
                opacity: 40%;
                font-size:.9rem;
            }
        </style> 
        <!-- Footer CSS -->
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
  
    </head>
    <body>
      <!-- NAVIGATION -->
      @include('navigation')
       

        <div class="container">
            <div class="row">
                <div class="col mt-5 mb-3">
                    <div id="heading" class="pt-5">
                        <h1>IT Vijesti | Priče</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($articles as $article)
                <div class="col-12 col-md-4 mb-5">
                    <a href="/it-price/{{$article->id}}/{{$article->slug}}" class="card-title text-decoration-none mt-4 mb-3 d-inline-block">
                        <div class="timeline-item">

                            <div class="position-relative">
                               
                                <img src="{{asset('storage/articles/'.$article->image_url)}}" alt="{{$article->title}} slika">

                            </div>

                            <div class="description p-5">
                                <span class="calendar mb-2">{{$article->created_at->format('d')}} {{$meseci[$article->created_at->format('n')]}}</span>
                                <h5>{{$article->title}}</h5>
                                <p>{{$article->description}}</p>
                            </div>
                        </div>
                    </a>
                </div> 
                @endforeach
            </div>
            <div class="row">
                @if($articles->lastPage() > 1 )
                <nav aria-label="Page navigation" class="mx-auto py-5">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

        <!-- FOOTER -->
        @include('footer')

    </body>
</html>

