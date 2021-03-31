@extends('dashboard')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">

@endsection
@section('content')

<section class="content">
    <div class="container-fluid">
        <h2 class="text-center display-4">Enhanced Search</h2>
        <form action="enhanced-results.html">
            <div class="row">
                <div class="btn-catalog col-10"><a>
                    <button id="btn_test" type="button" class="skewBtn purple">Hello!</button></a>
                    </div>
                    <div class="form-group col-12">
                        <div class="range-slider">
                            <label>X pos</label>
                            <input id="righ"  class="range-slider__range col-10" type="range" value="0" min="0" max="90">
                            <span id="xp" class="range-slider__value">0</span>
                          </div>

                          <div class="range-slider">
                            <label>Y pos</label>
                            <input id="bot" class="range-slider__range col-10" type="range" value="0" min="0" max="90">
                            <span class="range-slider__value">0</span>
                          </div>
                          {{-- <a id="btn_test" type="button" class="btn btn-primary">button</a> --}}

                    </div>
                    </div>
                </div>
        </form>
    </div>
</section>
@endsection
