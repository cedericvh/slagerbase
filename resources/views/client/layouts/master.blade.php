<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ url('/') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="slagerij, barbecue, beveren, feestdagen, vlees, charcuterie, bestelling" />
    <meta name="author" content="Matica Support" />
    <meta name="description" content="Slagerij De Smedt, Slagerij en traiteur De Smedt in Beveren" />
    <title>{{ isset($title) ? $title : 'Home' }}</title>
    <link href="{{ asset('/img/favicon.ico') }}" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <script src="{{ asset('jquery.min/index.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/jquery-noconflict.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/caption.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(window).on('load',  function() {
            new JCaption('img.caption');
        });
    </script>

    <link href='http://fonts.googleapis.com/css?family=Slabo+27px&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style_nonsass.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('head')
</head>
<body id="home">
    <div class="before-header">
    </div>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo-cont clearfix">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('/templates/slagerijdesmedt/img/logo.png') }}" alt="Slagerij DE SMEDT">
                    </a>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav menu nav navbar-nav">
                    <li class="item-101 {{ isset($active) && $active == 'index' ? 'current active' : '' }}">
                        <a href="{{ route('client.index.index') }}">Home</a>
                    </li>
                    <li class="item-106 {{ isset($active) && $active == 'orders' ? 'current active' : '' }}">
                        <a href="{{ route('client.orders.index') }}">Bestel on-line</a>
                    </li>                  
                    <li class="item-102 {{ isset($active) && $active == 'ambacht' ? 'current active' : '' }}">
                        <a href="{{ route('client.ambacht.index') }}">Ambacht</a>
                    </li>
                    <li class="item-103 {{ isset($active) && $active == 'specialties' ? 'current active' : '' }}">
                        <a href="{{ route('client.specialiteiten.index') }}">Specialiteiten</a>
                    </li>
                    <li class="item-104 {{ isset($active) && $active == 'folders' ? 'current active' : '' }}">
                        <a href="{{ route('client.folders.index') }}">Folders</a>
                    </li>
                    <li class="item-105 {{ isset($active) && $active == 'contact' ? 'current active' : '' }}">
                        <a href="{{ route('client.contact.index') }}">Contact</a>
                    </li>
                </ul>

            </div><!--/.nav-collapse -->
        </div>
    </nav>
    @yield('content')
    <footer>
        <div class="container">
            <ul>
                <li><strong>Slagerij De Smedt</strong></li>
                <li>Leurshoek 2, 9120 Beveren</li>
                <li>03 775 71 41</li>
            </ul>
            <ul>
                <li>openingsuren: ma - vrij: 8.00 u - 12.30 u en 13.30 u - 18.00 u</li>
                <li>zat: 7.30 u - 12.30 u en 13.30 u - 17.00 u</li>
                <li>zon: 7.30 u - 12.00 u</li>
                <li>dinsdag gesloten</li>
            </ul>
            <ul>
                <li><a href="http://www.matica.be">Matica</a></li>
            </ul>
        </div> <!-- end container -->
    </footer>
    <div class="after-footer">

    </div>

<script src="{{ asset('jquery.min/index.js') }}"></script>
<script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/manage-sliders.js') }}"></script>
<script src="{{ asset('/js/bxslider.js') }}"></script>

<script>
    $(document).ready(function(){
        $('.bxslider').bxSlider();
       
    });
</script>
  
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91067214-1', 'auto');
  ga('send', 'pageview');

</script>  
  
@yield('scripts')
</body>
</html>
