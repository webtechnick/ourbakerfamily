@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center mb20">
            <a name="rsvp"></a>
            <div class="col-md-6">
                <div class="card" id="RSVP">
                    <div class="card-header">Wedding RSVP (October 28th, 2018)</div>
                    <div class="card-body">
                        @include('elements.rsvp')
                    </div>
                </div>
            </div>

            <a name="registry"></a>
            <div class="col-md-6">
                <div class="card" id="Registry">
                    <div class="card-header">Registry</div>
                    <div class="card-body">
                        <p>The most important thing is having you with us on our special day.  No gifts are needed or expected, however, we have been asked what we need or would like.  Our reply is, to build memories.</p>

                        <p>In lieu of a honeymoon, we have decided to make memories as a family.  This December, we will be taking the family to Disney World and Universal.  If you would like to contribute to our experience, please donate to our Wishing Well!</p>

                        <div class="list-group">
                            <a href="https://paypal.me/WebTechNick" class="list-group-item list-group-item-action" target="_blank">Disney World Wishing Well</a>
                            <a href="https://www.amazon.com/wedding/share/tildeathdouspart" class="list-group-item list-group-item-action" target="_blank">Amazon Registry</a>
                            <a href="https://www.bedbathandbeyond.com/store/gift-registry-search?_requestid=736396#searchKeywordByName=546421921" class="list-group-item list-group-item-action" target="_blank">Bed Bath & Beyond</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a name="gallery"></a>
        <div class="row justify-content-center mb20">
            <div class="col-md-12">
                <div class="card" id="Gallery">
                    <div class="card-header">Photo Gallery</div>
                    <div class="card-body">
                        Wedding Photo Gallery coming soon.
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection