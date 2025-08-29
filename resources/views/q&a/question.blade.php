@extends('layouts.default')

@section('content')
<section class="about container">
    <h1 class="title">Q & A <i class="fas fa-angle-right text-gray-500"></i>ตั้งคำถาม</h1>

    <hr class="my-2" />

    <div class="about-wrapper">
        <div class="row">
            <div class="col-md-12">

                <!-- FORM -->
                <div class="flex justify-center">
                    <form action="{{ url('/q&a/question') }}" class="form-horizontal mt-4 w-3/5 needs-validation" novalidate method="post" enctype="multipart/form-data" id="form1">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <div class="alert-title">
                                    <h4 class="text-lg font-bold">กรุณาตรวจสอบข้อมูลอีกครั้ง</h4>
                                </div>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>- {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">ประเภทคำถาม</label>
                            <div class="col-sm-8">
                                <select id="question_type_id" name="question_type_id" class="form-control @error('question_type_id') is-invalid @enderror" required>
                                    <option value="" {{ old('question_type_id') == '' ? 'selected' : '' }}>-- เลือก --</option>
                                    <option value="1" {{ old('question_type_id') == 1 ? 'selected' : '' }}>ทั่วไป</option>
                                    <option value="2" {{ old('question_type_id') == 2 ? 'selected' : '' }}>ปัญหาสุขภาพจิต</option>
                                    <option value="3" {{ old('question_type_id') == 3 ? 'selected' : '' }}>กฎหมาย/ระเบียบ</option>
                                    <option value="4" {{ old('question_type_id') == 4 ? 'selected' : '' }}>ติดต่อหน่วยงานภายใน</option>
                                    <option value="9" {{ old('question_type_id') == 9 ? 'selected' : '' }}>อื่นๆ</option>
                                </select>
                                <span class="invalid-feedback">
                                    {{ $errors->first('question_type_id') }}
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">คำถาม</label>
                            <div class="col-sm-8">
                                <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" />
                                <span class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">ชื่อ-นามสกุล</label>
                            <div class="col-sm-8">
                                <input type="text" id="full_name" name="full_name" value="{{ old('full_name') }}" class="form-control @error('full_name') is-invalid @enderror" />
                                <span class="invalid-feedback">
                                    {{ $errors->first('full_name') }}
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" />
                                <span class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">รายละเอียด</label>
                            <div class="col-sm-8">
                                <textarea id="description" name="description" rows="3" cols="20" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                <span class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-8">
                                <div class="alert alert-info mb-2" role="alert">
                                    เอกสารแนบ (ขนาดของไฟล์ไม่เกิน 1 MB และรองรับไฟล์ jpg, gif, png, และ pdf เท่านั้น)
                                </div>
                                <div class="mb-3">
                                    <input type="file" id="upload" name="upload" accept=".jpg,.gif,.png,.pdf" />
                                </div>
                                <div class="captcha mb-3">
                                    {!! Captcha::display($attributes) !!}
                                    @if ($errors->first('g-recaptcha-response'))
                                        <p class="text-danger mt-2">{{ $errors->first('g-recaptcha-response') }}</p>
                                    @endif
                                </div>
                                <div class="layout-btn-center btn-left">
                                    <button type="submit" class="btn btn-success">ยืนยัน</button>
                                    <button class="btn btn-secondary">ยกเลิก</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- FORM -->

            </div>
        </div>
    </div>
</section>
@endsection