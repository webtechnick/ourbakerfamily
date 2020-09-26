@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <a name="shower"></a>
            <div class="col-md-6">
                <div class="card" id="Shower">
                    <div class="card-header">Shower</div>
                    <div class="card-body">
                        <h1>Zoey Baker's Baby Shower!</h1>

                        <p>Time: Oct 18, 2020 07:00 PM Mountain Time (US and Canada)</p>
                        <p>Password: <em>Provided to you in invitation</em></p>

                        <a href="https://lacallegroup.zoom.us/j/96823521423?pwd=VEI2bHlVU0FaUVVLR1kyUFFYbFJDQT09" class="btn btn-lg btn-primary btn-block mt40"><i class="fa fa-fw fa-video mr10"></i> Join Baby Shower</a>
                    </div>
                </div>
            </div>
            <a name="registry"></a>
            <div class="col-md-6">
                <div class="card" id="Registry">
                    <div class="card-header">Registry</div>
                    <div class="card-body">
                        <p>The most important thing is having you with us to celebrate Zoey Baker.  No gifts are needed or expected, however, we have been asked what we need or would like. We are currently registered on Amazon.</p>

                        <div class="list-group mt40">
                            {{-- <a href="https://paypal.me/WebTechNick" class="list-group-item list-group-item-action" target="_blank"><i class="fa fa-fw fa-graduation-cap mr10"></i> Zoey Baker's College Fund</a> --}}
                            <a href="https://www.amazon.com/baby-reg/amanda-baker-january-2021-riorancho/2T33I98NWCRT6" class="list-group-item list-group-item-action" target="_blank"><i class="fas fa-fw fa-gifts mr10"></i>Amazon Baby Registry</a>
                            {{-- <a href="https://www.bedbathandbeyond.com/store/giftregistry/view_registry_guest.jsp?pwsToken=&eventType=Wedding&inventoryCallEnabled=true&registryId=546421921&pwsurl=&searchParam=546421921" class="list-group-item list-group-item-action" target="_blank">Bed Bath & Beyond</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection