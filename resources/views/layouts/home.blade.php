<!DOCTYPE html>
<html lang="me">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="{{asset('storage/img/favicon.png')}}" />
        <title>ITPoslovi.me | Svi IT poslovi u Crnoj Gori, kompanije i poslodavci na jednom mestu</title>
        <meta name="description" content="IT Poslovi, konkursi i slobodna radna mesta! Poslodavci i firme u Crnoj Gori na jednom mestu. Programeri Crna Gora - Oglasi za programiranje, dizajn, administraciju, web poslove i drugo">
        <link rel="canonical" href="https://itposlovi.me"/>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- Select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet">
        <!-- Home CSS -->
        <link href="{{ asset('css/home.css?v=343') }}" rel="stylesheet">
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1424446387057620" crossorigin="anonymous"></script><script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-TETF7GV131');
        </script>   
        <script data-ad-client="ca-pub-5138244234973689" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    </head>
    <body>
        
        {{ $slot }}
        
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Select2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script type="text/javascript">
            $('.search_tags').select2({
                width: '100%',
                maximumSelectionLength:1,
                placeholder:'Java',
                minimumInputLength: 2,
                language: {
                    inputTooShort: function () { return ''; }
                }
            });
        </script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    </body>
</html>