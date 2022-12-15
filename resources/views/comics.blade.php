@extends('layouts.app')


@section('main')

    <div class="mybtn-jumbo text-uppercase">current series</div>

    <div class="my-container">

        <div class="row">
            @foreach ($fumetti as $item)
                <div class="col-2">

                   <div class="container-img">
                        <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                   </div>

                    <div class="text-white py-2">{{$item['series']}}</div>

                </div>
            @endforeach

            <div class="btn-main text-uppercase">load more</div>

        </div>

    </div>

        {{-- MERCHANDISING --}}

        <div class="container-merch">
            <div class="product my-container row ">
                <div class="col d-flex align-items-center py-3">
                    <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="image product">
                    <div class="text-uppercase px-2">digital comics</div>
                </div>

                <div class="col d-flex align-items-center py-3">
                    <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="image product">
                    <div class="text-uppercase px-2">dc merchandise</div>
                </div>

                <div class="col d-flex align-items-center py-3">
                    <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="image product">
                    <div class="text-uppercase px-2">subscription</div>
                </div>

                <div class="col d-flex align-items-center py-3>
                    <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="image product">
                    <div class="text-uppercase px-2">comic shop location</div>
                </div>

                <div class="col d-flex align-items-center py-3">
                    <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="image product">
                    <div class="text-uppercase px-2">dc power visa</div>
                </div>

            </div>
        </div>

@endsection
