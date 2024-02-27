@extends('layouts.default')

@section('content')
<section class="policies container">
    <h1 class="title">
        Data Catalog
    </h1>

    <hr class="my-2" />

    <div class="policies-wrapper">
        <a href="{{ url('/data-catalog') }}">
            <div class="policy">
                <h3>Data Catalog</h3>
                <span><i class="fas fa-angle-down"></i></span>
            </div>
        </a>
    </div>
</section>
@endsection