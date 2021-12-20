@extends('layout.app')

@section('page-title', 'Comics')

@section('content')

<div class="jumbo"></div>

<div class="blue_bg_long">
    <div class="container px-5">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
</div>

<div class="info_buy py-5">
    <div class="container px-5 d-flex">
        <div class="col-8">
            <div class="title_comic">
                <h1>
                    {{ $comic['title'] }}
                </h1>
            </div>
            <div class="price d-flex ">
                <div class="available d-flex justify-content-between align-items-center">
                    <p class="px-4">
                        U.S. Price: <span>
                            {{ $comic['price'] }}
                        </span>
                    </p>
                    <p class="px-4">
                        AVAILABLE
                    </p>
                </div>
                <div class="check d-flex justify-content-center align-items-center">
                    <p>
                        Check Availability
                    </p>
                </div>
            </div>
            <div class="info_text">
                <p>
                    {{ $comic['description'] }}
                </p>
            </div>
        </div>
        <div class="col-4">
            <p class="text-end">
                ADVERTISEMENT
            </p>
            <div class="img_wrapper">
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="gray_bg">
    <div class="container px-5">
        <div class="details row gx-5">
            <div class="col-6">
                <h4>
                    Talent
                </h4>
                <div class="det d-flex">
                    <p>
                        Art by:
                    </p>
                    <div class="author">
                        @foreach($comic['artists'] as $artist)

                            <span class="blue_text">
                            {{$artist}}
                            </span>

                        @endforeach
                    </div>
                </div>
                <div class="det d-flex">
                    <p>
                        Written by:
                    </p>
                    <div class="author">
                        @foreach($comic['writers'] as $writer)

                            <span class="blue_text">
                                {{$writer}}
                            </span>

                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h4>
                    Specs
                </h4>
                <div class="det d-flex">
                    <p>
                        Series:
                    </p>
                    <span class="blue_text">
                        {{ $comic['series'] }}
                    </span>
                </div>
                <div class="det d-flex">
                    <p>
                        U.S. Price:
                    </p>
                    <span>
                        {{ $comic['price'] }}
                    </span>
                </div>
                <div class="det d-flex">
                    <p>
                        On Sale Date:
                    </p>
                    <span>
                        {{ $comic['sale_date'] }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
