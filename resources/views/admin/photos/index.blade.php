@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Photos: {{ $photos->total() }}</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Thumbnail</th>
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
                        {{ $photo->name }}
                    </td>
                    <td class="text-left">
                        {{ $photo->created_at }}
                    </td>
                    <td class="col-md-2 text-right">
                        <div class="btn-group">
                            <a href="{{ route('admin.photos.delete', $photo) }}" class="confirm" confirm-message="Are you sure you want to delete this photo?">Delete</a>
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