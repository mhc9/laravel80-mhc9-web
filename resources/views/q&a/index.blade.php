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

                <ul class="px-4">
                    @foreach ($questions as $question)
                        <li class="border rounded-xl mb-2 hover:bg-gray-100">
                            <a href="{{ url('q&a/question/'.$question->id) }}" class="flex justify-between items-center p-3">
                                <span>{{ $question->title }}</span>
                                <span class="text-sm text-gray-500">{{ $question->created_at->format('d M Y') }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</section>
@endsection