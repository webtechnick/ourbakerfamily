@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Photos: {{ $photos->total() }}</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Thumbnail</th>
                    <th class="text-left" scope="col">Active</th>
                    <th class="text-left" scope="col">Name</th>
                    <th class="text-lef" scope="col">Date</th>
                    <th class="text-right" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($photos as $photo)
                <tr>
                    <td class="text-center"> <a href="{!! $photo->path !!}">{!! $photo->pic(200) !!}</a> </td>
                    <td class="text-left">
                        {!! $photo->activeIcon() !!}
                    </td>
                    <td class="text-left">
                        {{ $photo->name }}
                    </td>
                    <td class="text-left">
                        {{ $photo->created_at }}
                    </td>
                    <td class="col-md-2 text-right">
                        <div class="btn-group">
                            <a href="{{ route('admin.photos.toggle', $photo) }}" class="btn btn-info confirm" confirm-message="Are you sure you want toggle active state of photo?">Toggle Active</a>
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a href="{{ route('admin.photos.delete', $photo) }}" class="dropdown-item confirm" confirm-message="Are you sure you want to delete this photo?">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @unless($photos->isEmpty())
            <div class="text-center">{{ $photos->links() }}</div>
        @endunless
    </div>
@endsection