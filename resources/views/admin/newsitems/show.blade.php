@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h3>Toon nieuwitem <a href="{{ route('admin.newsitems.index') }}" class="btn btn-link pull-right">Keer terug</a></h3>
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $newsitem->getAttribute('name') }}
                </div>
                <div class="panel-body">
                    {!! $newsitem->getAttribute('body') !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@endsection