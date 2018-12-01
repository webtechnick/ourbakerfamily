@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center mb20">
            <a name="photos"></a>
            <div class="col-md-12">
                <div class="card" id="Photos">
                    <div class="card-header">Photos</div>
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

                            <div class="container">
                                <div class="row center mt20">
                                    {{ $photos->links() }}
                                </div>
                            </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb20">
            {{-- @include('elements.rsvp') --}}
            @include('elements.gallery')

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
                            <a href="https://www.bedbathandbeyond.com/store/giftregistry/view_registry_guest.jsp?pwsToken=&eventType=Wedding&inventoryCallEnabled=true&registryId=546421921&pwsurl=&searchParam=546421921" class="list-group-item list-group-item-action" target="_blank">Bed Bath & Beyond</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection