@php
    use Carbon\Carbon;
@endphp
@extends('client.layout.index')
@section('client')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <body>
        <div class="home-banner margin-bottom-0" style="background:#00ab46 url(assets/img/banner-5.jpg) no-repeat;"
            data-overlay="5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="banner_caption text-center mb-5">
                            <h1 class="banner_title ft-bold mb-1">Khám phá hơn 10k+ việc làm</h1>
                            <p class="fs-md ft-medium">Xin chào các bạn, Công việc mơ ước của bạn đang chờ đợi ở thành phố
                                địa phương của bạn</p>
                        </div>

                        <div class="container">
                            <form action="{{ route('home.search') }}" method="GET">
                                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 p-3">
                                    <div class="col test">
                                        <div class="p-1">
                                            <input type="text" class="form-control input-custom" name="key"
                                                id="" placeholder="Tìm kiếm....">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="p-1"><select class="form-select" name="lever"
                                                aria-label="Default select example">
                                                <option selected disabled>Trình độ</option>
                                                @foreach ($lever as $item)
                                                    <option value="{{ $item->id }}">{{ $item->label }}
                                                    </option>
                                                @endforeach
                                            </select></div>
                                    </div>
                                    <div class="col">
                                        <div class="p-1"><select class="form-select" name="experience"
                                                aria-label="Default select example">
                                                <option selected disabled>Kinh nghiệm</option>
                                                @foreach ($experience as $item)
                                                    <option value="{{ $item->id }}">{{ $item->label }}
                                                    </option>
                                                @endforeach
                                            </select></div>
                                    </div>
                                    <div class="col">
                                        <div class="p-1"><select class="form-select" name="majors"
                                                aria-label="Default select example">
                                                <option selected disabled>Mức lương</option>
                                                @foreach ($majors as $item)
                                                    <option value="{{ $item->id }}">{{ $item->label }}
                                                    </option>
                                                @endforeach
                                            </select></div>
                                    </div>
                                    <div class="col">
                                        <div class="p-1"><select class="form-select" name="timework"
                                                aria-label="Default select example">
                                                <option selected disabled>Thời gian làm việc</option>
                                                @foreach ($timework as $item)
                                                    <option value="{{ $item->id }}">{{ $item->label }}
                                                    </option>
                                                @endforeach
                                            </select></div>
                                    </div>
                                    <div class="col">
                                        <div class="p-1"><select class="form-select" name="profession"
                                                aria-label="Default select example">
                                                <option selected disabled>Vị trí ứng tuyển</option>
                                                @foreach ($profession as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->label }}</option>
                                                @endforeach
                                            </select></div>
                                    </div>
                                    <div class="col">
                                        <div class="p-1"><select class="form-select select2" name="skill[]"
                                                aria-label="Default select example">
                                                @foreach ($skill as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->label }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="p-1"><select class="form-select select2-location" name="location"
                                                aria-label="Default select example">
                                                <option selected disabled>Địa chỉ</option>
                                                @foreach ($location as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->label }}</option>
                                                @endforeach
                                            </select></div>
                                    </div>
                                    <div class="col">
                                        <div class="p-1"><select class="form-select" name="workingform"
                                                aria-label="Default select example">
                                                <option selected disabled>Hình thức làm việc</option>
                                                @foreach ($workingform as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->label }}</option>
                                                @endforeach
                                            </select></div>
                                    </div>
                                    <div class="col">
                                        <div class="p-1"><button type="submit"
                                                class="btn theme-bg text-light">Lọc</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="imployer-explore">
            <div class="impl-thumb">
                <img src="assets/img/microsoft-home.png" class="" alt="" />
            </div>
            <div class="impl-thumb">
                <img src="assets/img/paypal-home.png" class="" alt="" />
            </div>
            <div class="impl-thumb">
                <img src="assets/img/serv-home.png" class="" alt="" />
            </div>
            <div class="impl-thumb">
                <img src="assets/img/mothercare-home.png" class="" alt="" />
            </div>
            <div class="impl-thumb">
                <img src="assets/img/xerox-home.png" class="" alt="" />
            </div>
            <div class="impl-thumb">
                <img src="assets/img/yahoo-home.png" class="" alt="" />
            </div>
            <div class="impl-thumb">
                <img src="assets/img/serv-home.png" class="" alt="" />
            </div>
            <div class="impl-thumb">
                <img src="assets/img/mothercare-home.png" class="" alt="" />
            </div>
            <div class="impl-thumb">
                <img src="assets/img/xerox-home.png" class="" alt="" />
            </div>
            <div class="impl-thumb">
                <img src="assets/img/yahoo-home.png" class="" alt="" />
            </div>
        </div>
        <!-- ======================= Home Banner ======================== -->

        <!-- ======================= Job List ======================== -->
        <section class="middle space gray">
            <div class="container border" style="background: #ffff">
                <div class="container container-header-box border ">
                    <h1 class="header-box">Tìm việc làm nhanh 24h, việc làm mới nhất trên toàn quốc</h1>
                    <p class="header-box-description">Tiếp cận 30,000+ tin tuyển dụng việc làm mới mỗi ngày từ hàng nghìn
                        doanh nghiệp uy tín tại Việt Nam</p>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Hệ thống mong muốn bạn đăng nhập để có thể
                        hiển thị các việc làm phù hợp nhất!, <strong><a href="{{ route('home.index') }}"
                                class="show-turn-on-location">Đăng
                                nhập tại đây!</a></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        Hãy báo cáo cho tôi nếu bạn gặp phải sự cố hoặc bạn phát hiện ai đó có hành vi lừa đảo!, <strong><a
                                href="{{ route('home.index') }}" class="show-turn-on-location">Liên hệ!</a></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                </div>
                <!-- row -->

                {{-- <show-new
                    :data="{{ json_encode([
                        'url' => 'http://127.0.0.1:8000/',
                        'locations' => $location,
                        'checkLogin' => Auth::guard('user')->check(),
                    ]) }}">
                </show-new> --}}
                <div class="search-book">
                    <h2 class="ft-bold">Tin tuyển dụng, việc làm tốt nhất</h2>

                </div>
                <div class="row justify-content-center">
                    <div class="container p-3">

                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3" id="paginated-list">
                            @foreach ($job as $value)
                                <div class="col render-job-search">

                                    <div class="p-3 border bg-light box-showdow">
                                        <div class="position-absolute ab-right">
                                            <a type="button"
                                                class="
                                            p-3
                                            border
                                            circle
                                            d-flex
                                            align-items-center
                                            justify-content-center
                                            bg-white
                                            text-gray
                                            ">
                                                <i
                                                    class="
                                            lni lni-heart-filled
                                            position-absolute
                                            snackbar-wishlist
                                        "></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <div class="job_grid_thumb mb-3 title-name px-3 col-4">
                                                <a href="home/detail/{{ $value->title . '-' . $value->id }}"
                                                    class="d-block m-auto"><img src="{{ $value->logo }}"
                                                        class="img-fluid" alt="" /></a>
                                            </div>
                                            <div class="job_grid_caption title-name px-3 col-8 g-1">
                                                <h4 class="mb-0 ft-medium medium ml-20">
                                                    <a href="home/detail/{{ $value->title . '-' . $value->id }}"
                                                        class="text-dark fs-md" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Tooltip on top">
                                                        <p
                                                            style="width: 200px !important;overflow: hidden !important;text-overflow: ellipsis !important;white-space: nowrap">
                                                            {{ $value->title }}
                                                        </p>
                                                    </a>
                                                </h4>

                                                <div class="jbl_location ml-20" style="margin-top: -10px">
                                                    <a href="" class="text-dark fs-md"> {{ $value->nameCompany }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="job_grid_footer d-flex align-items-center justify-content-between text-mute-footer">
                                            <div class="df-1 text-muted">
                                                <i class="lni lni-wallet mr-1"></i> {{ $value->getwage->name }}
                                            </div>
                                            <div class="df-1 text-muted ml-2">
                                                <i class="lni lni-timer mr-1"></i>{{ $value->end_job_time }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <br>
                                <br>
                                <br>
                                <br>
                                <span class="page-item text-center pagination-container">
                                    <div id="pagination-numbers">
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end -->
            </div>
        </section>
        <section class="bg-light">
            <div class="container">

                <!-- Item Wrap Start -->
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <!-- row -->
                    <div class="text-interesting border">
                        <h2 class="ft-bold">Việc làm hấp dẫn</h2>
                    </div>
                    <div class="row align-items-center">

                        <!-- Single -->

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left">
                                    <button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                        <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i>
                                    </button>
                                </div>
                                <div class="position-absolute ab-right"><span
                                        class="medium bg-light-danger text-danger px-2 py-1 rounded">Enternship</span>
                                </div>
                                <div class="job_grid_thumb mb-2 pt-5 px-3">
                                    <a href="job-detail.html" class="d-block text-center m-auto"><img
                                            src="assets/img/c-7.png" class="img-fluid" width="70"
                                            alt=""></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="job-detail.html"
                                            class="text-dark fs-md">UI/UX Web Designer</a>
                                    </h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Javascript</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium theme-bg rounded text-light">+3 More</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left">
                                    <button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                        <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i>
                                    </button>
                                </div>
                                <div class="position-absolute ab-right"><span
                                        class="medium bg-light-warning text-warning px-2 py-1 rounded">Part Time</span>
                                </div>
                                <div class="job_grid_thumb mb-2 pt-5 px-3">
                                    <a href="job-detail.html" class="d-block text-center m-auto"><img
                                            src="assets/img/c-8.png" class="img-fluid" width="70"
                                            alt=""></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="job-detail.html"
                                            class="text-dark fs-md">UI/UX Web Designer</a>
                                    </h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Javascript</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium theme-bg rounded text-light">+3 More</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left">
                                    <button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                        <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i>
                                    </button>
                                </div>
                                <div class="position-absolute ab-right"><span
                                        class="medium bg-light-purple text-purple px-2 py-1 rounded">Contract</span>
                                </div>
                                <div class="job_grid_thumb mb-2 pt-5 px-3">
                                    <a href="job-detail.html" class="d-block text-center m-auto"><img
                                            src="assets/img/c-9.png" class="img-fluid" width="70"
                                            alt=""></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="job-detail.html"
                                            class="text-dark fs-md">UI/UX Web Designer</a>
                                    </h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Javascript</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium theme-bg rounded text-light">+3 More</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left">
                                    <button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                        <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i>
                                    </button>
                                </div>
                                <div class="position-absolute ab-right"><span
                                        class="medium theme-cl theme-bg-light px-2 py-1 rounded">Full Time</span></div>
                                <div class="job_grid_thumb mb-2 pt-5 px-3">
                                    <a href="job-detail.html" class="d-block text-center m-auto"><img
                                            src="assets/img/c-11.png" class="img-fluid" width="70"
                                            alt=""></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="job-detail.html"
                                            class="text-dark fs-md">UI/UX Web Designer</a>
                                    </h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Javascript</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium theme-bg rounded text-light">+3 More</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left">
                                    <button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                        <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i>
                                    </button>
                                </div>
                                <div class="position-absolute ab-right"><span
                                        class="medium bg-light-danger text-danger px-2 py-1 rounded">Enternship</span>
                                </div>
                                <div class="job_grid_thumb mb-2 pt-5 px-3">
                                    <a href="job-detail.html" class="d-block text-center m-auto"><img
                                            src="assets/img/c-10.png" class="img-fluid" width="70"
                                            alt=""></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="job-detail.html"
                                            class="text-dark fs-md">UI/UX Web Designer</a>
                                    </h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Javascript</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium theme-bg rounded text-light">+3 More</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Single -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="job_grid border rounded ">
                                <div class="position-absolute ab-left">
                                    <button type="button"
                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                        <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i>
                                    </button>
                                </div>
                                <div class="position-absolute ab-right"><span
                                        class="medium bg-light-warning text-warning px-2 py-1 rounded">Part Time</span>
                                </div>
                                <div class="job_grid_thumb mb-2 pt-5 px-3">
                                    <a href="job-detail.html" class="d-block text-center m-auto"><img
                                            src="assets/img/c-12.png" class="img-fluid" width="70"
                                            alt=""></a>
                                </div>
                                <div class="job_grid_caption text-center pb-3 px-3">
                                    <h4 class="mb-0 ft-medium medium"><a href="job-detail.html"
                                            class="text-dark fs-md">UI/UX Web Designer</a>
                                    </h4>
                                    <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San
                                            Francisco</span></div>
                                </div>
                                <div class="job_grid_footer pb-4 px-3">
                                    <ul class="p-0 skills_tag text-center">
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Javascript</span>
                                        </li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                        <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                        <li><span class="px-2 py-1 medium theme-bg rounded text-light">+3 More</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- row -->
                </div>
            </div>
        </section>
        <!-- ======================= Job List ======================== -->

        <!-- ======================= All category ======================== -->
        <section class="space gray">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <!-- <h6 class="text-muted mb-0">Popular Categories</h6> -->
                            <h2 class="ft-bold">Top Ngành Nghề nổi Bật</h2>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="review-slide px-3">

                            <!-- single review -->
                            <div class="single_review px-2">
                                <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                    <div class="rw-header d-flex align-items-center justify-content-start">
                                        <div class="rv-110-thumb position-relative verified-author"><img
                                                src="assets/img/team-3.jpg" class="img-fluid circle" width="70"
                                                alt="" />
                                        </div>
                                        <div class="rv-110-caption pl-3">
                                            <h4 class="ft-medium fs-md mb-0 lh-1">Alvin B. Washington</h4>
                                            <!-- <p class="p-0 m-0">Co Founder</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single review -->
                            <div class="single_review px-2">
                                <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                    <div class="rw-header d-flex align-items-center justify-content-start">
                                        <div class="rv-110-thumb"><img src="assets/img/team-4.jpg"
                                                class="img-fluid circle" width="70" alt="" /></div>
                                        <div class="rv-110-caption pl-3">
                                            <h4 class="ft-medium fs-md mb-0 lh-1">Lavera C. Clifford</h4>
                                            <p class="p-0 m-0">Team Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single review -->
                            <div class="single_review px-2">
                                <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                    <div class="rw-header d-flex align-items-center justify-content-start">
                                        <div class="rv-110-thumb position-relative verified-author"><img
                                                src="assets/img/team-2.jpg" class="img-fluid circle" width="70"
                                                alt="" />
                                        </div>
                                        <div class="rv-110-caption pl-3">
                                            <h4 class="ft-medium fs-md mb-0 lh-1">Linda S. Riggs</h4>
                                            <p class="p-0 m-0">Project Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single review -->
                            <div class="single_review px-2">
                                <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                    <div class="rw-header d-flex align-items-center justify-content-start">
                                        <div class="rv-110-thumb"><img src="assets/img/team-5.jpg"
                                                class="img-fluid circle" width="70" alt="" /></div>
                                        <div class="rv-110-caption pl-3">
                                            <h4 class="ft-medium fs-md mb-0 lh-1">Chris L. Hazel</h4>
                                            <p class="p-0 m-0">Web Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single review -->
                            <div class="single_review px-2">
                                <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                    <div class="rw-header d-flex align-items-center justify-content-start">
                                        <div class="rv-110-thumb position-relative verified-author"><img
                                                src="assets/img/team-1.jpg" class="img-fluid circle" width="70"
                                                alt="" />
                                        </div>
                                        <div class="rv-110-caption pl-3">
                                            <h4 class="ft-medium fs-md mb-0 lh-1">Mark Jukerberg</h4>
                                            <p class="p-0 m-0">PHP Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /row -->


            </div>
        </section>
        <!-- ======================= All category ======================== -->

        <!-- ======================= About Start ============================ -->
        <!-- việc làm mới nhất -->

        <!-- end -->
        <!-- ======================= About Start ============================ -->

        <!-- ======================= Our Partner Start ============================ -->
        <section class="p-0">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="text-muted mb-0">Our Partners</h6>
                            <h2 class="ft-bold">We Have Worked with <span class="theme-cl">10,000+</span> Trusted
                                Companies</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="empl-thumb text-center px-3 py-4">
                            <img src="assets/img/l-1.png" class="img-fluid mx-auto" alt="" />
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="empl-thumb text-center px-3 py-4">
                            <img src="assets/img/l-2.png" class="img-fluid mx-auto" alt="" />
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="empl-thumb text-center px-3 py-4">
                            <img src="assets/img/l-3.png" class="img-fluid mx-auto" alt="" />
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="empl-thumb text-center px-3 py-4">
                            <img src="assets/img/l-4.png" class="img-fluid mx-auto" alt="" />
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="empl-thumb text-center px-3 py-4">
                            <img src="assets/img/l-5.png" class="img-fluid mx-auto" alt="" />
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="empl-thumb text-center px-3 py-4">
                            <img src="assets/img/l-6.png" class="img-fluid mx-auto" alt="" />
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="empl-thumb text-center px-3 py-4">
                            <img src="assets/img/l-7.png" class="img-fluid mx-auto" alt="" />
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="empl-thumb text-center px-3 py-4">
                            <img src="assets/img/l-8.png" class="img-fluid mx-auto" alt="" />
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="empl-thumb text-center px-3 py-4">
                            <img src="assets/img/l-9.png" class="img-fluid mx-auto" alt="" />
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="empl-thumb text-center px-3 py-4">
                            <img src="assets/img/l-10.png" class="img-fluid mx-auto" alt="" />
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- ======================= Our Partner Start ============================ -->

        <!-- ============================ Pricing Start ==================================== -->
        <section class="space min">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="text-muted mb-0">Our Pricing</h6>
                            <h2 class="ft-bold">Choose Your Package</h2>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">

                    <!-- Single Package -->
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing_wrap">
                            <div class="prt_head">
                                <h4 class="ft-medium">Basic</h4>
                            </div>
                            <div class="prt_price">
                                <h2 class="ft-bold"><span>$</span>29</h2>
                                <span class="fs-md">per user, per month</span>
                            </div>
                            <div class="prt_body">
                                <ul>
                                    <li>99.5% Uptime Guarantee</li>
                                    <li>120GB CDN Bandwidth</li>
                                    <li>5GB Cloud Storage</li>
                                    <li class="none">Personal Help Support</li>
                                    <li class="none">Enterprise SLA</li>
                                </ul>
                            </div>
                            <div class="prt_footer">
                                <a href="#" class="btn choose_package">Start Basic</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Package -->
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing_wrap">
                            <div class="prt_head">
                                <div class="recommended">Best Value</div>
                                <h4 class="ft-medium">Standard</h4>
                            </div>
                            <div class="prt_price">
                                <h2 class="ft-bold"><span>$</span>49</h2>
                                <span class="fs-md">per user, per month</span>
                            </div>
                            <div class="prt_body">
                                <ul>
                                    <li>99.5% Uptime Guarantee</li>
                                    <li>150GB CDN Bandwidth</li>
                                    <li>10GB Cloud Storage</li>
                                    <li>Personal Help Support</li>
                                    <li class="none">Enterprise SLA</li>
                                </ul>
                            </div>
                            <div class="prt_footer">
                                <a href="#" class="btn choose_package active">Start Standard</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Package -->
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing_wrap">
                            <div class="prt_head">
                                <h4 class="ft-medium">Platinum</h4>
                            </div>
                            <div class="prt_price">
                                <h2 class="ft-bold"><span>$</span>79</h2>
                                <span class="fs-md">2 user, per month</span>
                            </div>
                            <div class="prt_body">
                                <ul>
                                    <li>100% Uptime Guarantee</li>
                                    <li>200GB CDN Bandwidth</li>
                                    <li>20GB Cloud Storage</li>
                                    <li>Personal Help Support</li>
                                    <li>Enterprise SLA</li>
                                </ul>
                            </div>
                            <div class="prt_footer">
                                <a href="#" class="btn choose_package">Start Platinum</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- ============================ Pricing End ==================================== -->

        <!-- ======================= Blog Start ============================ -->
        <section class="space min gray">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-4">
                            {{-- <h6 class="text-muted mb-0">Latest News</h6> --}}
                            <h2 class="ft-bold">Tin Tức</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <!-- Single Item -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="blg_grid_box">
                            <div class="blg_grid_thumb">
                                <a href="blog-detail.html"><img src="assets/img/b-4.jpg" class="img-fluid"
                                        alt=""></a>
                            </div>
                            <div class="blg_grid_caption">
                                <div class="blg_tag"><span>Marketing</span></div>
                                <div class="blg_title">
                                    <h4><a href="blog-detail.html">How To Register &amp; Enrolled on SkillUp Step by
                                            Step?</a></h4>
                                </div>
                                <div class="blg_desc">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum</p>
                                </div>
                            </div>
                            <div class="crs_grid_foot">
                                <div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">
                                    <div class="crs_fl_first">
                                        <div class="crs_tutor">
                                            <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img
                                                        src="assets/img/team-2.jpg" class="img-fluid circle"
                                                        width="35" alt=""></a></div>
                                        </div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="foot_list_info">
                                            <ul>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-eye text-success"></i></div>
                                                    <div class="elsio_tx">10k Views</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-clock text-warning"></i>
                                                    </div>
                                                    <div class="elsio_tx">10 July 2021</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="blg_grid_box">
                            <div class="blg_grid_thumb">
                                <a href="blog-detail.html"><img src="assets/img/b-5.jpg" class="img-fluid"
                                        alt=""></a>
                            </div>
                            <div class="blg_grid_caption">
                                <div class="blg_tag"><span>Business</span></div>
                                <div class="blg_title">
                                    <h4><a href="blog-detail.html">Let's Know How Skillup Work Fast and Secure?</a>
                                    </h4>
                                </div>
                                <div class="blg_desc">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum</p>
                                </div>
                            </div>
                            <div class="crs_grid_foot">
                                <div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">
                                    <div class="crs_fl_first">
                                        <div class="crs_tutor">
                                            <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img
                                                        src="assets/img/team-3.jpg" class="img-fluid circle"
                                                        width="35" alt=""></a></div>
                                        </div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="foot_list_info">
                                            <ul>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-eye text-success"></i></div>
                                                    <div class="elsio_tx">10k Views</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-clock text-warning"></i>
                                                    </div>
                                                    <div class="elsio_tx">10 July 2021</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="blg_grid_box">
                            <div class="blg_grid_thumb">
                                <a href="blog-detail.html"><img src="assets/img/b-6.jpg" class="img-fluid"
                                        alt=""></a>
                            </div>
                            <div class="blg_grid_caption">
                                <div class="blg_tag"><span>Accounting</span></div>
                                <div class="blg_title">
                                    <h4><a href="blog-detail.html">How To Improove Digital Marketing for Fast SEO</a>
                                    </h4>
                                </div>
                                <div class="blg_desc">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum</p>
                                </div>
                            </div>
                            <div class="crs_grid_foot">
                                <div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">
                                    <div class="crs_fl_first">
                                        <div class="crs_tutor">
                                            <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img
                                                        src="assets/img/team-5.jpg" class="img-fluid circle"
                                                        width="35" alt=""></a></div>
                                        </div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="foot_list_info">
                                            <ul>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-eye text-success"></i></div>
                                                    <div class="elsio_tx">10k Views</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-clock text-warning"></i>
                                                    </div>
                                                    <div class="elsio_tx">10 July 2021</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- ======================= Blog Start ============================ -->

        <!-- ========================== Download App Section =============================== -->
        <section>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_2 pr-3 py-4">
                            <div class="content-box">
                                <div class="sec-title light">
                                    <p class="theme-cl px-3 py-1 rounded bg-light-success d-inline-flex">Download apps
                                    </p>
                                    <h2 class="ft-bold">Get the Workplex Job<br>Search App</h2>
                                </div>
                                <div class="text">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto accusantium.</p>
                                </div>
                                <div class="btn-box clearfix mt-5">
                                    <a href="index.html" class="download-btn play-store mb-1 d-inline-flex"><img
                                            src="assets/img/ios.png" width="200" alt="" /></a>
                                    <a href="index.html" class="download-btn play-store ml-2 mb-1 d-inline-flex"><img
                                            src="assets/img/and.png" width="200" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="assets/img/app.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================== Download App Section =============================== -->

        <!-- ======================= Newsletter Start ============================ -->
        <section class="space bg-cover" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;">
            <div class="container py-5">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="text-light mb-0">Subscribr Now</h6>
                            <h2 class="ft-bold text-light">Get All New Job Notification</h2>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                        <form class="bg-white rounded p-1">
                            <div class="row no-gutters">
                                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                    <div class="form-group mb-0 position-relative">
                                        <input type="text" class="form-control lg left-ico"
                                            placeholder="Enter Your Email Address">
                                        <i class="bnc-ico lni lni-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                    <div class="form-group mb-0 position-relative">
                                        <button class="btn full-width custom-height-lg theme-bg text-light fs-md"
                                            type="button">Subscribe
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
        <!-- Button trigger modal -->
        <!-- Modal login -->
        <div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <client-login
                            :data="{{ json_encode([
                                'urlStore' => route('owner.store'),
                                'message' => $message ?? '',
                            ]) }}">
                            <client-login>
                    </div>
                </div>
            </div>
        </div>
    </body>
    @if (Auth::guard('user')->check())
        @if (!$user->getProfileUse == null)
            <div class="loading-div">
                <div class="loader-img"></div>
            </div>
            <div class="modal fade" id="checkmodalProfile" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <user-profile
                                :data="{{ json_encode([
                                    'lever' => $lever,
                                    'experience' => $experience,
                                    'wage' => $wage,
                                    'skill' => $skill,
                                    'timework' => $timework,
                                    'profession' => $profession,
                                    // 'majors' => $majors,
                                    'location' => $location,
                                    'workingform' => $workingform,
                                    'user' => $user,
                                    'urlStore' => route('profile.store'),
                                    'urlBack' => route('profile.index'),
                                    'getskill' => $getskill,
                                ]) }}">
                            </user-profile>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#checkmodalProfile").modal('show');
                });
            </script>
        @endif
    @endif


    </html>
@endsection
