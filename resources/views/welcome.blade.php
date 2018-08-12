@extends('layouts.app')

@section('content')
    <div class="container">

        <a name="rsvp"></a>
        <div class="row justify-content-center mb20">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Wedding RSVP (October 28th, 2018)</div>
                    <div class="card-body">
                        @include('elements.rsvp')
                    </div>
                </div>
            </div>
        </div>

        <a name="registry"></a>
        <div class="row justify-content-center mb20">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registry</div>
                    <div class="card-body">
                        Nick and Mandi are not currently registered. The registry information will be here once they are registered.
                    </div>
                </div>
            </div>
        </div>

        <a name="galley"></a>
        <div class="row justify-content-center mb20">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Photo Gallery</div>
                    <div class="card-body">
                        Wedding Photo Gallery coming soon.
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection