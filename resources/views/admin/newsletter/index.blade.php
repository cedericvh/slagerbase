@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Newsletter</h1>
            <hr>
            <form method="POST" action="{{ route('admin.newsletter.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" cols="30" rows="10" name="body" id="body">{{ old('message') }}</textarea>
                </div>
                @include('partials.errors')
                @include('partials.success')
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Send emails</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@endsection