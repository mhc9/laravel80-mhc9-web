@extends('layouts.app')

@section('content')
<section class="annual__report container">
    <h1 class="title">รายงานประจำปี</h1>

    <hr class="my-2" />

    <div class="annual__report-wrapper px-4 pt-2 pb-4">
        <div class="row">
            @foreach($reports as $report)
                <dvi class="col-md-3">
                    <div class="card">
                        <img src="./{{$report['featured']}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <div class="card-text text-xl font-bold mb-1">{{$report['title']}}</div>
                            <div class="text-muted text-xs font-thin flex items-center gap-2 mb-2">
                                <span><i class="fas fa-calendar-alt"></i> {'2024-01-22 16.30'} น.</span>
                                <span><i class="fas fa-user-alt"></i> {'Administrator'}</span>
                                <span><i class="fas fa-eye"></i> {'0'}</span>
                                <span><i class="fas fa-download"></i> {'0'}</span>
                            </div>
                            <div class="flex justify-center pt-4">
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
</section>
@endsection