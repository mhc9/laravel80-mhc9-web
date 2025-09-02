@extends('layouts.default')

@section('content')
<section class="about container">
    <h1 class="title">Q & A</h1>

    <hr class="my-2" />

    <div class="about-wrapper">
        <div class="row">
            <div class="col-md-12">

                <div class="flex justify-between items-center mb-3 px-2">
                    <h2 class="text-xl font-bold">คำถามทั้งหมด</h2>

                    <a href="{{ url('q&a/question') }}" class="btn btn-primary">ตั้งคำถามใหม่</a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection