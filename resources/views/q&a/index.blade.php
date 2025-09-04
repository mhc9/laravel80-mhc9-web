@extends('layouts.default')

@section('content')
<section class="about container">
    <h1 class="title">Q & A</h1>

    <hr class="my-2" />

    <div class="about-wrapper">
        <div class="row">
            <div class="col-md-12 px-4">

                <div class="flex justify-between items-center my-3">
                    <h2 class="text-xl font-bold">คำถามทั้งหมด</h2>

                    <a href="{{ url('q&a/question') }}" class="btn btn-primary">ตั้งคำถามใหม่</a>
                </div>

                @if(Session::has('success'))
                    <div class="alert alert-success flex items-center gap-2 alert-dismissible fade show" role="alert">
                        <i class="fas fa-check"></i>
                        <div>{{ Session::get('success') }}</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <ul class="px-0">
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