@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Promoties:</h1>
            <hr>
            <form method="POST" action="{{ route('admin.promoties.update', ['id' => 1]) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PATCH">
                 <div class="form-group">
                    <input name="titel" value="@foreach ($promoties as $promotie){{$promotie->titel}}@endforeach" size="100">
                </div>
                <div class="form-group">
                    <textarea name="body">@foreach ($promoties as $promotie) {{$promotie->body}}   @endforeach</textarea>
                </div>
                @include('partials.errors')
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea',plugins: [
            'image imagetools code textcolor'
        ],
        toolbar1: 'styleselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code',
        relative_urls: false,
        file_browser_callback: function(field_name, url, type, win) {
            // trigger file upload form
            if (type == 'image') $('#formUpload input').click();
        } });</script>
@endsection