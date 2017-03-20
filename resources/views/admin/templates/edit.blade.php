@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit template
                    <a href="{{ route('admin.templates.index') }}" class="btn btn-link pull-right">Return back</a>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('admin.templates.update', ['template' => $template->getKey()]) }}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="name">Template name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $template->getAttribute('name')) }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{!! old('body', $template->getAttribute('body')) !!}</textarea>
                        </div>
                        @include('partials.errors')
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@endsection