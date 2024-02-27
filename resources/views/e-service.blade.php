@extends('layouts.default')

@section('content')
<section class="about container">
    <h1 class="title">ระบบสารสนเทศ (E-Service)</h1>

    <hr class="my-2" />

    <div class="service-wrapper p-4">
        <div class="row service-list"></div>
    </div>
</section>
<script>
    $(document).ready(function () {
        eservices.forEach(service => {
            $('.service-list').append(`
                <div class="col-lg-3 col-6 flex justify-center text-center">
                    <a href="${service.link}" target="${service.target}">
                        <div class="service-item">
                            <img src="${service.img_url}" alt="${service.name}" />
                            <h4>${service.name}</h4>
                        </div>
                    </a>
                </div>
            `)
        });
    });
</script>
@endsection