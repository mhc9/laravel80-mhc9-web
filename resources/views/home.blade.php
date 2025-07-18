@extends('layouts.default')

@section('content')
<div>
    <section class="hero max-md:hidden">
        <!-- Hero -->
        <div class="slide-hero">
            <div class="swiper" id="hero">
                <div class="swiper-wrapper">
                    <!-- Director-General's Policy -->
                    <div class="swiper-slide">
                        <div class="slide-wrapper">
                            <img
                                class="object-cover w-full h-96"
                                src="{{ asset('/img/20241001090037.png') }}"
                                alt="image"
                            />
                        </div>
                    </div>
                    <!-- ศูนย์บริการให้การปรึกษา -->
                    <div class="swiper-slide">
                        <div class="slide-wrapper">
                            <img
                                class="object-cover w-full h-96"
                                src="{{ asset('/img/banner-02.png') }}"
                                alt="image"
                            />
                        </div>
                    </div>
                    <!-- DMH E-Learning -->
                    <div class="swiper-slide">
                        <div class="slide-wrapper">
                            <img
                                class="object-cover w-full h-96"
                                src="{{ asset('/img/QedmTbSsLorfSsZydiTFVflvu5dty1kA3Qd7itev.png') }}"
                                alt="image"
                            />
                        </div>
                    </div>
                    <!-- No Gift Policy -->
                    <div class="swiper-slide">
                        <div class="slide-wrapper">
                            <img
                                class="object-cover w-full h-96"
                                src="https://dmh.go.th/images/slides/NoGift1.jpg"
                                alt="image"
                            />
                        </div>
                    </div>
                    <!-- PDPA -->
                    <div class="swiper-slide">
                        <div class="slide-wrapper">
                            <img
                                class="object-cover w-full h-96"
                                src="{{ asset('/img/thumbnail_c550f9c85b119149e89b2ada124649b8.png') }}"
                                alt="image"
                            />
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Options Menu -->
        <div class="option-menus w-full">
            <div class="container">
                <div class="contents">
                    <a href="{{ url('/newses/category/3') }}" class="content">
                        <div class="wrapper">
                            <div class="text-container">
                                <h6 class="ellipsis-1">จัดซื้อจัดจ้าง</h6>
                            </div>
                            <!-- {/* <div class="banner">
                                <FaAddressCard />
                            </div> */} -->
                            <div class="order">01</div>
                        </div>
                    </a>
                    <a href="{{ url('/newses/category/4') }}" class="content">
                        <div class="wrapper">
                            <div class="text-container">
                                <h6 class="ellipsis-1">ร่วมงานกับเรา</h6>
                            </div>
                            <!-- {/* <div class="banner">
                                <i class="icon fa-address-card"></i>
                            </div> */} -->
                            <div class="order">02</div>
                        </div>
                    </a>                    
                    <a href="https://mhc9.dmh.go.th/oldweb/ParticipateList.aspx" target="_blank" class="content">
                        <div class="wrapper">
                            <div class="text-container">
                                <h6 class="ellipsis-1">ตอบรับเข้าร่วมโครงการ</h6>
                            </div>
                            <!-- {/* <div class="banner">
                                <i class="icon fas fa-address-card"></i>
                            </div> */} -->
                            <div class="order">03</div>
                        </div>
                    </a>
                    <a href="https://secret.dmh.go.th/main" target="_blank" class="content">
                        <div class="wrapper">
                            <div class="text-container">
                                <h6 class="ellipsis-1">แจ้งเรื่องร้องเรียน</h6>
                            </div>
                            <!-- {/* <div class="banner">
                                <i class="icon fas fa-address-card"></i>
                            </div> */} -->
                            <div class="order">04</div>
                        </div>
                    </a>
                    <a href="{{ url('/downloads') }}" class="content">
                        <div class="wrapper">
                            <div class="text-container">
                                <h6 class="ellipsis-1">ดาวน์โหลด</h6>
                            </div>
                            <!-- {/* <div class="banner">
                                <i class="icon fas fa-address-card"></i>
                            </div> */} -->
                            <div class="order">05</div>
                        </div>
                    </a>
                    <a href="{{ url('/faq') }}" class="content">
                        <div class="wrapper">
                            <div class="text-container">
                                <h6 class="ellipsis-1">คำถามที่ถามบ่อย</h6>
                            </div>
                            <!-- {/* <div class="banner">
                                <i class="icon fas fa-address-card"></i>
                            </div> */} -->
                            <div class="order">06</div>
                        </div>
                    </a>
                    <a href="{{ url('/annual-reports') }}" class="content">
                        <div class="wrapper">
                            <div class="text-container">
                                <h6 class="ellipsis-1">รายงานประจำปี</h6>
                            </div>
                            <!-- {/* <div class="banner">
                                <i class="icon fas fa-address-card"></i>
                            </div> */} -->
                            <div class="order">07</div>
                        </div>
                    </a>
                    <a href="{{ url('/e-services') }}" class="content">
                        <div class="wrapper">
                            <div class="text-container">
                                <h6 class="ellipsis-1">E-Service</h6>
                            </div>
                            <!-- {/* <div class="banner">
                                <FaGavel />
                            </div> */} -->
                            <div class="order">08</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="home">
        <div class="home-contents">
            <!-- Headlines and Director -->
            <div>
                <div class="container">
                    <div class="row">
                        <!-- Headline -->
                        <div class="col-md-12 col-lg-9">
                            <div class="post-box">
                                <h1 class="title">
                                    <i class="fas fa-bullhorn"></i>
                                    ข่าวประชาสัมพันธ์ <i class="fas fa-angle-right"></i>ข่าวกิจกรรม
                                </h1>

                                <hr class="my-2" />

                                <div class="post-list">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-7">
                                            <div class="post-headline">
                                                <div class="headline-img">
                                                    <img src="{{ url('/'.$headline->featured) }}" alt="headline-pic" />
                                                </div>
                                                <div class="headline-text">
                                                    <h4 class="text-xl">{{$headline->title}}</h4>

                                                    @include('components.page-subtitle', [
                                                        'textSize'  => "xs",
                                                        'author'    => $headline->author,
                                                        'publishUp' => $headline->publish_up
                                                    ])

                                                    <p class="my-2">
                                                        <span>{{$headline->intro_text}}</span>
                                                        <span class="readmore">
                                                            <a href="{{ url('/posts/' . $headline->id) }}">อ่านเพิ่มเติม</a>
                                                        </span>
                                                    </p>
                                                    <!-- {headline?.tags && (
                                                        <div class="mb-2">
                                                            {headline?.tags.split(',').map((tag, index) => (
                                                                <div class="badge rounded-pill bg-secondary me-1" key={index}>{tag}</div>
                                                            ))}
                                                        </div>
                                                    )} -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-5">
                                            <ul class="post-secondary">
                                                @foreach($posts as $post)
                                                    <li>
                                                        <div class="post__secondary-img">
                                                            <img src="{{ url('/' . $post->featured) }}" class="lg:h-[100px] max-lg:h-[120px]" alt="post-pic" />
                                                        </div>
                                                        <div class="post__secondary-text">
                                                            <a href="{{ url('/posts/' . $post->id) }}"><h4>{{$post->title}}</h4></a>

                                                            @include('components.page-subtitle', [
                                                                'textSize'  => "xs",
                                                                'author'    => $post->author,
                                                                'publishUp' => $post->publish_up
                                                            ])

                                                            <span class="publish-time">{{facebookTimeAgo($post->publish_up)}}</span>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>

                                            <div class="post-btn mt-2">
                                                <a href="{{ url('/posts') }}" class="all-news">ข่าวทั้งหมด</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Director -->
                        <div class="col-md-12 col-lg-3">
                            <div class="director-box">
                                <h1 class="title">
                                    <i class="fas fa-user-md"></i>
                                    ผู้อำนวยการ
                                </h1>

                                <hr class="my-2" />

                                <div class="director-info">
                                    <div>
                                        <img src="https://www.mhc9dmh.com/data/photo/boss67.jpg" alt="director-image" />
                                    </div>
                                    <h2>นายนิตย์ ทองเพชรศรี</h2>
                                    <h4>ผู้อำนวยการศูนย์สุขภาพจิตที่ 9</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Videos and Service -->
            <div  style="background: #F2F2F2">
                <div class="container">
                    <div class="row">
                        <!-- Videos -->
                        <div class="col-md-8 col-lg-9">
                            <div class="video-box">
                                <h1 class="title">
                                    <i class="fas fa-video"></i>
                                    สื่อสุขภาพจิต <i class="fas fa-angle-right"></i>วีดิโอสุขภาพจิต
                                </h1>

                                <hr class="my-2" />

                                <div class="row video-list">
                                    @foreach($videos as $video)
                                        <div class="col-md-12 col-lg-6">
                                            <div class="video-item">
                                                <iframe
                                                    width="100%"
                                                    height="100%"
                                                    src="{{$video->urls}}"
                                                    title="{{$video->title}}"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowFullScreen
                                                ></iframe>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="video-btn">
                                    <a href="{{ url('/videos') }}" class="all-news">วีดิโอทั้งหมด</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Services -->
                        <div class="col-md-4 col-lg-3" style="background: #ffffff">
                        <div class="officer-box">
                            <h1 class="title">
                                <i class="fas fa-stethoscope"></i>
                                สำหรับเจ้าหน้าที่
                            </h1>

                            <hr class="my-2" />

                            <div class="officer-items"></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News -->
            <div style="background: #f3e2a9">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="news-box">
                                <h1 class="title">
                                    <i class="fas fa-rss"></i>
                                    ข่าวประชาสัมพันธ์ <i class="fas fa-angle-right"></i>อื่นๆ
                                </h1>

                                <hr class="my-2" />

                                <div class="row">
                                    <div class="col-lg-4 col-md-12 news-wrapper">
                                        <h4>ข่าวจัดซื้อจัดจ้าง</h4>

                                        <div class="news-list">
                                            <ul>
                                                @foreach($procures as $item)
                                                    <li>
                                                        <div>
                                                            <img src="{{ asset('img/logo_dmh.png') }}" alt="logo-pic" />
                                                        </div>
                                                        <p>
                                                            <a href="{{ url('/posts/' . $item->id) }}">{{$item->title}}</a>
                                                            <span class="text-gray-500 font-thin">{{facebookTimeAgo($item->publish_up)}}</span>
                                                        </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <a href="./newses/category/3" class="all-news">ข่าวทั้งหมด</a>
                                    </div>
                                    <div class="col-lg-4 col-md-12 news-wrapper">
                                        <h4>ข่าวรับสมัครงาน</h4>

                                        <div class="news-list">
                                            <ul id="jobNews">
                                                @foreach($jobs as $item)
                                                    <li>
                                                        <div>
                                                            <img src="{{ asset('img/logo_dmh.png') }}" alt="logo-pic" />
                                                        </div>
                                                        <p>
                                                            <a href="{{ url('/posts/' . $item->id) }}">{{$item->title}}</a>
                                                            <span class="text-gray-500 font-thin">{{facebookTimeAgo($item->publish_up)}}</span>
                                                        </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        
                                        <a href="./newses/category/4" class="all-news">ข่าวทั้งหมด</a>
                                    </div>
                                    <div class="col-lg-4 col-md-12 news-wrapper">
                                        <h4>ประกาศ</h4>

                                        <div class="news-list">
                                            <ul id="noticeNews">
                                                @foreach($notices as $item)
                                                    <li>
                                                        <div>
                                                            <img src="{{ asset('img/logo_dmh.png') }}" alt="logo-pic" />
                                                        </div>
                                                        <p>
                                                            <a href="{{ url('/posts/' . $item->id) }}">{{$item->title}}</a>
                                                            <span class="text-gray-500 font-thin">{{facebookTimeAgo($item->publish_up)}}</span>
                                                        </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <a href="./newses/category/5" class="all-news">ประกาศทั้งหมด</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Onepages -->
            <div style="background: #F2F2F2">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="info-box">
                                <h1 class="title">
                                    <i class="fas fa-images"></i>
                                    ข่าวประชาสัมพันธ์ <i class="fas fa-angle-right"></i>MHC9 News
                                </h1>

                                <hr class="my-2" />

                                <div class="row">
                                    <div class="swiper" id="partner">
                                        <div class="swiper-wrapper">
                                            @foreach($onepages as $onepage)
                                                <div class="swiper-slide">
                                                    <a href="{{ url('/posts/' . $onepage->id) }}" class="p-2">
                                                        <img
                                                            class="object-contain w-full h-96"
                                                            src="{{ url('/' . $onepage->featured) }}"
                                                            alt="logo-pic"
                                                        />
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center m-1">
                                    <a href="{{ url('/onepages') }}" class="all-news">ข่าวทั้งหมด</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social media content -->
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="news-box">
                                <h1 class="title">
                                </i><i class="fas fa-share-alt-square"></i>
                                ข่าวประชาสัมพันธ์ <i class="fas fa-angle-right"></i>Social Network
                                </h1>

                                <hr class="my-2" />

                                <div class="row py-2">
                                    <div class="col-md-6 col-lg-4 flex justify-center py-2 px-0">
                                        <div
                                            class="fb-post" 
                                            data-href="https://www.facebook.com/20531316728/posts/1170459215119028/"
                                            data-width="100%"></div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 flex justify-center py-2 px-0">
                                        <div
                                            class="fb-post" 
                                            data-href="https://www.facebook.com/20531316728/posts/1168097345355215/"
                                            data-width="100%"></div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 flex justify-center py-2 px-0">
                                        <div
                                            class="fb-post" 
                                            data-href="https://www.facebook.com/20531316728/posts/1168066772024939/"
                                            data-width="100%"></div>
                                    </div>                                    
                                    <div class="col-md-6 col-lg-4 flex justify-center py-2 px-0">
                                        <div
                                            class="fb-post" 
                                            data-href="https://www.facebook.com/20531316728/posts/1165439678954315/"
                                            data-width="100%"></div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 flex justify-center py-2 px-0">
                                        <div
                                            class="fb-post" 
                                            data-href="https://www.facebook.com/20531316728/posts/1049210387243912/"
                                            data-width="100%"></div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 flex justify-center py-2 px-0">
                                        <div
                                            class="fb-post" 
                                            data-href="https://www.facebook.com/20531316728/posts/1047059660792318/"
                                            data-width="100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Articles -->
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="article-box">
                                <h1 class="title">
                                    <i class="fas fa-file-medical-alt"></i>
                                    สื่อสุขภาพจิต <i class="fas fa-angle-right"></i>บทความสุขภาพจิต
                                </h1>

                                <hr class="my-2" />

                                <div class="row article-list px-4 py-2">
                                    @foreach($articles as $article)
                                        <div class="col-sm-12 col-md-6 col-lg-4">

                                            @include('components.article-card', ['article'  => $article])

                                        </div>
                                    @endforeach

                                    <div class="post-btn">
                                        <a href="{{ url('/articles') }}" class="all-news">บทความทั้งหมด</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- E-Services -->
            <div style="background: #F2F2F2">
                <div class="container">
                    <div class="service-box">
                        <h1 class="title">
                            <i class="fas fa-poll"></i>
                            ระบบสารสนเทศ (E-Service)
                        </h1>

                        <hr class="my-2" />

                        <div class="service-wrapper">
                            <div class="row service-list"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Logo --> 
    <div class="slide-logos">
        <div class="swiper" id="partner">
            <div class="swiper-wrapper">
                <!-- กระทรวง -->
                <div class="swiper-slide">
                    <div class="slide-logo">
                        <img
                            class="object-cover w-full h-96"
                            src="https://upload.wikimedia.org/wikipedia/commons/f/f9/%E0%B8%95%E0%B8%A3%E0%B8%B2%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%A3%E0%B8%A7%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%98%E0%B8%B2%E0%B8%A3%E0%B8%93%E0%B8%AA%E0%B8%B8%E0%B8%82%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88.png"
                            alt="logo-pic"
                        />
                    </div>
                </div>
                <!-- กรมสุขภาพจิต -->
                <div class="swiper-slide">
                    <div class="slide-logo">
                        <img
                            class="object-cover w-full h-96"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Seal_of_the_Department_of_Mental_health.svg/1200px-Seal_of_the_Department_of_Mental_health.svg.png"
                            alt="logo-pic"
                        />
                    </div>
                </div>
                <!-- เขตสุขภาพที่ 9 -->
                <div class="swiper-slide">
                    <div class="slide-logo">
                        <img
                            class="object-cover w-full h-96"
                            src="data:image/jpeg;base64,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"
                            alt="logo-pic"
                        />
                    </div>
                </div>
                <!-- รพ.จิตเวชนครราชสีมาฯ -->
                <div class="swiper-slide">
                    <div class="slide-logo">
                        <img
                            class="object-cover w-full h-96"
                            src="data:image/jpeg;base64,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"
                            alt="logo-pic"
                        />
                    </div>
                </div>
                <!-- รพ.มหาราชฯ -->
                <div class="swiper-slide">
                    <div class="slide-logo">
                        <img
                            class="object-cover w-full h-96"
                            src="https://www.jobbkk.com/upload/variety/goverment/20160401_3104.png"
                            alt="logo-pic"
                        />
                    </div>
                </div>
                <!-- จังหวัดนครราชสีมา -->
                <div class="swiper-slide">
                    <div class="slide-logo">
                        <img
                            class="object-cover w-full h-96"
                            src="https://www2.nakhonratchasima.go.th/images/content/logo-102-1/pic.png"
                            alt="logo-pic"
                        />
                    </div>
                </div>
                <!-- สพฐ -->
                <div class="swiper-slide">
                    <div class="slide-logo">
                        <img
                            class="object-cover w-full h-96"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Thai_OBEC_emblem.svg/800px-Thai_OBEC_emblem.svg.png"
                            alt="logo-pic"
                        />
                    </div>
                </div>
                <!-- สสส -->
                <div class="swiper-slide">
                    <div class="slide-logo">
                        <img
                            class="object-cover w-full h-96"
                            src="https://upload.wikimedia.org/wikipedia/th/7/7c/Logo-thaihealth_Thai_with_Text.png"
                            alt="logo-pic"
                        />
                    </div>
                </div>
                <!-- กพร -->
                <div class="swiper-slide">
                    <div class="slide-logo">
                        <img
                            class="object-cover w-full h-96"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTf0PtUH5sGFD7_JdmL2EEOxoyl6G7TqvW6NQ&s"
                            alt="logo-pic"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal go to old or new site -->
    <div id="goToSite" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ config('app.name', 'Laravel') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>เนื่องจาก ศูนย์สุขภาพจิตที่ 9 กรมสุขภาพจิต ได้จัดทำเว็บไซต์ใหม่ให้มีรูปแบบที่ทันสมัยและตอบสนองความต้องการของผู้ใช้งาน โดยผู้ใช้งานสามารถเข้าถึงเว็บไซต์เดิมได้โดยคลิกปุ่ม เว็บไซต์เดิม</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">เว็บไซต์รูปแบบใหม่</button>
                <a href="https://www.mhc9dmh.com/oldweb" class="btn btn-secondary">เว็บไซต์เดิม</a>
            </div>
            </div>
        </div>
    </div>
    <!-- Modal go to old or new site -->

</div>
<script>
    $(document).ready(async function () {
        var swiperHero = new Swiper("#hero", {
            modules: [Navigation, Pagination],
            autoplay: {
                delay: 4000,
            },
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
            loop: true,
        });

        var swiperOnepage = new Swiper("#onepage", {
            autoplay: {
                delay: 4000,
            },
            slidesPerView: 4,
            spaceBetween: 30,
            cssMode: true,
            mousewheel: true,
            keyboard: true,
            loop: true,
            breakpoints: {
                375: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                430: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                // 1024: {
                //     slidesPerView: 5,
                //     spaceBetween: 50,
                // },
            },
        });

        var swiperPartner = new Swiper("#partner", {
            autoplay: {
                delay: 4000,
            },
            slidesPerView: 4,
            spaceBetween: 30,
            cssMode: true,
            mousewheel: true,
            keyboard: true,
            loop: true,
            breakpoints: {
                375: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                430: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                // 1024: {
                //     slidesPerView: 5,
                //     spaceBetween: 50,
                // },
            },
        });

        services.forEach(service => {
            $('.officer-items').append(`
                <a href="${service.link}" target="_blank">
                    <i class="fas ${service.icon}"></i><h4>${service.name}</h4>
                </a>
            `);
        });

        eservices.forEach(service => {
            $('.service-list').append(`
                <div class="col-md-3 col-6">
                    <a href="${service.link}" target="${service.target}">
                        <div class="service-item">
                            <img src="${service.img_url}" alt="${service.name}" />
                            <h4>${service.name}</h4>
                        </div>
                    </a>
                </div>
            `);
        });

        /** show modal go to old or new site */
        //$('#goToSite').modal('show');
    });
</script>
@endsection
