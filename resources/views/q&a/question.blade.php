@extends('layouts.default')

@section('content')
<section class="about container">
    <h1 class="title">Q & A <i class="fas fa-angle-right text-gray-500"></i>ตั้งคำถาม</h1>

    <hr class="my-2" />

    <div class="about-wrapper">
        <div class="row">
            <div class="col-md-12">

                {!! Captcha::display($attributes) !!}

            </div>
        </div>
    </div>
</section>
@endsection