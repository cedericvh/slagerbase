@extends('admin.layouts.master')

@section('content')
    <div class="rov">
        <div class="col-lg-12">
            <h3>Nieuwsitems <a href="{{ route('admin.newsitems.create') }}" class="btn btn-link pull-right">Nieuwsbericht aanmaken</a></h3>
            <hr>
            @include('partials.success')
            <table class="table">
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($newsitems as $newsitem)
                        <tr>
                            <td>
                                <a href="{{ route('admin.newsitems.show', ['newsitem' => $newsitem->getKey()]) }}">
                                    {{ $newsitem->getAttribute('name') }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.newsitems.edit', ['newsitem' => $newsitem->getKey()]) }}">Edit</a>
                                <a href="{{ route('admin.newsitems.delete', ['newsitem' => $newsitem->getKey()]) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection