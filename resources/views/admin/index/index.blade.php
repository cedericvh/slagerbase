@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
          
          Welkom op de administratieve zijde van de website van Slagerij De Smedt.
          
          <ul>
            
                <li class="{{ isset($active) && $active == 'index' ? ' active' : '' }}"><a href="{{ route('admin.index.index') }}">Index</a></li>
                <li class="{{ isset($active) && $active == 'promoties' ? ' active' : '' }}"><a href="{{ route('admin.promoties.index') }}">Promoties</a></li>
                <!--<li class="{{ isset($active) && $active == 'newsletter' ? ' active' : '' }}"><a href="{{ route('admin.newsletter.index') }}">Newsletter</a></li>-->
                <li class="{{ isset($active) && $active == 'templates' ? ' active' : '' }}"><a href="{{ route('admin.templates.index') }}">Templates</a></li>
                <li class="{{ isset($active) && $active == 'orders' ? ' active' : '' }}"><a href="{{ route('admin.orders.index') }}">Orders</a></li>

            
            
          </ul>

        </div>
    </div>
@endsection