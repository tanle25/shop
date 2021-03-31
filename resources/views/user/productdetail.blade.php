@extends('master')
@section('content')

    <section class="content">
        <div class="row detail">
            <div class="col-6">
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">

                        @foreach (json_decode($data['images'])  as $product )

                        <div class="swiper-slide">
                            <div class="swiper-slide-container"><img src="{{ asset('image/'.$product) }}"/></div>
                        </div>


                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        @foreach (json_decode($data['images'])  as $product )
                        <div class="swiper-slide">
                            <div class="swiper-slide-container"><img src="{{ asset('image/'.$product) }}"/></div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-6">
                <h5>{{ $data->name }}</h5>
                <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                <ul class="rating">
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary"></i>
                    </li>
                </ul>
                <p><span class="mr-1"><strong>{{ number_format($data->promotion_price) }}</strong></span></p>
                <p>{!! $data->description !!}</p>
                <div class="table-responsive">
                    <table class="table table-sm table-borderless mb-0">
                        <tbody>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Model</strong></th>
                                <td>Shirt 5407X</td>
                            </tr>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
                                <td>Black</td>
                            </tr>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
                                <td>USA, Europe</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>

                <form>
                    <div class="form-row">
                        <div class="col-6">
                            <label>Size</label>
                            <div>
                                @foreach (json_decode($data['size']) as $key=> $size )
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="{{ 'sizeid'.++$key }}">
                                    <label for="{{ 'sizeid'.$key }}">
                                        {{ $size }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-6">
                            <label>Color</label>
                            <div>
                                @foreach (json_decode($data['color']) as $key=>$value )
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="colorid{{ $key }}">
                                    <label for="colorid{{ $key }}">
                                        {{ $value }}
                                    </label>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <hr>
                    <label>Quantity</label>
                    <div class="form-row">
                        <div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" id="stepdown" type="button"><i class="fa fa-minus"
                                            aria-hidden="true"></i></button>
                                </div>
                                <input id="qty" type="number" value="1" min="0" class="form-control" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="stepup"><i class="fa fa-plus"
                                            aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-row align-middle">
                        <button type="submit" class="btn btn-primary">Add to card</button>
                    </div>
                </form>

            </div>
    </section>

@endsection
