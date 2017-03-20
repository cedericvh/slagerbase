<!doctype html>
<html lang="en" ng-app="admin">
<head>
    <meta charset="UTF-8">
    <title>Admin panel</title>
    <link href="{{ asset('/img/favicon.ico') }}" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
      .bgspecial {

        background-color:rgba(255, 102, 0, 0.1);
      }
      
      
      .hideorder {
        background-color:rgba(255, 0, 0, 0.5);
        /*visibility:hidden;*/
        height:0px;
        transition: visibility 0s 2s, opacity 2s linear, height 2s;        
        
        
      }
      

  
    </style>
    @yield('head')
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('admin.newsitems.index') }}">Admin page</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            @if(auth()->check() && auth()->user()->isAdmin())
            <ul class="nav navbar-nav">
                <li class="{{ isset($active) && $active == 'index' ? ' active' : '' }}"><a href="{{ route('admin.newsitems.index') }}">Index</a></li>
                <li class="{{ isset($active) && $active == 'promoties' ? ' active' : '' }}"><a href="{{ route('admin.promoties.index') }}">Promoties</a></li>
                <!--<li class="{{ isset($active) && $active == 'newsletter' ? ' active' : '' }}"><a href="{{ route('admin.newsletter.index') }}">Newsletter</a></li>-->
                <li class="{{ isset($active) && $active == 'templates' ? ' active' : '' }}"><a href="{{ route('admin.templates.index') }}">Templates</a></li>
                <li class="{{ isset($active) && $active == 'orders' ? ' active' : '' }}"><a href="{{ route('admin.orders.index') }}">Orders</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('admin.auth.getLogout') }}">Logout</a></li>
            </ul>
            @endif
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{ asset('js/angular/angular.min.js') }}"></script>
<script src="{{ asset('js/angular/app/angular-pusher.js') }}"></script>
<script src="{{ asset('js/angular/app/admin/app.js') }}"></script>
@yield('scripts')
@include('mceImageUpload::upload_form')
</body>
</html>