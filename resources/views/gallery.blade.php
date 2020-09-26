@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center mb20">
            <a name="photos"></a>
            <div class="col-md-12">
                <div class="card" id="Photos">
                    <div class="card-header">Gallery</div>
                    <div class="card-body">
                        @if ($photos->isEmpty())
                            No approved photos.
                        @else

                            @foreach($photos->chunk(5) as $set)
                                <div class="container">
                                    <div class="row center">
                                        @foreach($set as $photo)
                                            <div class="col-md m5">
                                                <a href="{!! $photo->path !!}" target="_blank">{!! $photo->pic(200) !!}</a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach

                            <div class="mt20">
                                {{ $photos->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb20">
            @include('elements.upload')
        </div>

    </div>
@endsection