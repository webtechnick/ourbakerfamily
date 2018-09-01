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
                        <p>The most important thing is having you with us on our special day.  No gifts are needed or expected, however, we have been asked what we need or would like.  Our reply is, to build memories.</p>

                        <p>In lieu of a honeymoon, we have decided to make memories as a family.  This December, we will be taking Skyler and Dean to DisneyWorld and Universal Orlando.  If you would like to contribute to our experience, <a href="https://paypal.me/WebTechNick" target="_blank">please donate to our Wishing Well!</a></p>

                        <p>If you’re interested in a more traditional gift, we are also registered at <a href="https://www.amazon.com/wedding/share/tildeathdouspart" target="_blank">Amazon</a> and <a href="https://www.bedbathandbeyond.com/store/gift-registry-search?_requestid=736396#searchKeywordByName=546421921" target="_blank">Bed Bath & Beyond.</a></p>
                    </div>
                </div>
            </div>
        </div>

        <a name="gallery"></a>
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