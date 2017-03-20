@extends('admin.layouts.master')

@section('content')
    <div class="rov">
        <div class="col-lg-12">
            <h3>Templates <a href="{{ route('admin.templates.create') }}" class="btn btn-link pull-right">Create new template</a></h3>
            <hr>
            @include('partials.success')
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($templates as $template)
                        <tr>
                            <td>
                                <a href="{{ route('admin.templates.show', ['template' => $template->getKey()]) }}">
                                    {{ $template->getAttribute('name') }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.templates.edit', ['template' => $template->getKey()]) }}">Edit</a>
                                <a href="{{ route('admin.templates.delete', ['template' => $template->getKey()]) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection