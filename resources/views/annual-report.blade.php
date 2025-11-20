@extends('layouts.default')

@section('content')
<article class="container">
    <h1 class="title">รายงานประจำปี</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen p-4">
            <div class="row">
                @foreach($reports as $report)
                    <dvi class="col-md-4">
                        <div class="card">
                            <div class="card-img-top overflow-hidden">
                                <img src="{{ url('/' . $report['featured']) }}" alt="report-cover" />
                            </div>
                            <div class="card-body">
                                <div class="card-text text-xl font-bold mb-1">{{$report['title']}}</div>
                                <div class="text-muted text-xs font-thin flex items-center gap-2 mb-2">
                                    <span><i class="fas fa-calendar-alt"></i> 2024-01-22 16.30 น.</span>
                                    <span><i class="fas fa-user-alt"></i> Administrator</span>
                                    <span><i class="fas fa-eye"></i> 0</span>
                                    <span><i class="fas fa-download"></i> 0</span>
                                </div>
                                <div class="flex justify-center pt-2">
                                    <a href="{{$report['urls']}}" target="_blank" class="btn btn-light">
                                        <i class="fas fa-download"></i> ดาวน์โหลด
                                    </a>
                                </div>
                            </div>
                        </div>
                    </dvi>
                @endforeach
            </div>
        </div>
    </div>
</article>
@endsection