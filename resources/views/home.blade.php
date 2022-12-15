@extends('layouts.app')


@section('main')

    <div class="my-container">

        <div class="row">
            @foreach ($fumetti as $item)
                <div class="col-2">

                   <div class="container-img">
                        <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                   </div>

                    <div class="text-white">{{$item['title']}}</div>

                </div>
            @endforeach


        </div>

    </div>

@endsection
