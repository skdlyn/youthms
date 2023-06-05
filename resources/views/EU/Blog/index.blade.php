@extends('layout-landing2.body')
@section('content')
    <section class="trending" id="trending">
        <div class="container" data-aos="fade-up">
            <div class="trending-area fix">
                <div class="trending-main">
                    <div class="row mt-40">
                        <div class="col-lg-9">
                            <!-- Trending Top -->

                            {{-- @foreach ($blog as $b) --}}
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    {{-- <img src="{{ asset('blog/' . $b->foto) }}" alt="" width="100%"
                                                height="100%" style="border-radius: 20px"> --}}
                                    <img src="{{ asset('illustration/il1.jpg') }}" alt="" width="100%"
                                        height="100%">

                                    <div class="trend-top-cap">
                                        {{-- <span>Pemrograman 5</span> --}}
                                        <h2><a href="/blog-detail">ealah <br> consectetur
                                                adipiscing elit.</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            {{-- @endforeach --}}
                            <!-- Trending Bottom -->

                            <div class="trending-bottom">
                                <div class="row">
                                    @foreach ($recently_uploaded as $ru)
                                        <div class="col-lg-4" style="margin-top: 50px">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <img src="{{ asset('illustration/il1.jpg') }}" alt=""
                                                        width="100%" height="100%">
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <span class="color1">Design</span>
                                                    <h4><a href="/blog-detail">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit. </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row">
                                    @foreach ($recently_lastweek as $rl)
                                        <div class="col-lg-3" style="margin-top: 50px">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <img src="{{ asset('illustration/il1.jpg') }}" alt=""
                                                        width="100%" height="100%">
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <span class="color1">Design</span>
                                                    <h4><a href="/blog-detail">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit. </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Right content -->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <!-- tombol kategori jasa -->
                                    <div class="header container mb-2 mt-3">
                                        <div class="d-flex flex-row text-center gap-3" style="justify-content: center">
                                            <form action="{{ route('blogs.type', ['type' => 'populer']) }}" method="get">
                                                @csrf
                                                <input type="hidden" name="get" value="populer">
                                                <button type="submit" href="" class="btn-populer rounded-5"
                                                    style="width:70px; height:100%"><i
                                                        class="fa-solid fa-star"></i></button>
                                            </form>
                                            <form action="{{ route('blogs.type', ['type' => 'weekly']) }}" method="get">
                                                @csrf
                                                <input type="hidden" name="get" value="weekly">
                                                <button type="submit" class="btn-terkini rounded-5"
                                                    style="width:70px; height:100%"><i
                                                        class="fa-solid fa-chart-simple"></i></button>
                                            </form>
                                            <form action="{{ route('blogs.type', ['type' => 'terpilih']) }}" method="get">
                                                @csrf
                                                <input type="hidden" name="get" value="terpilih">
                                                <button type="submit" class="btn-terpilih rounded-5"
                                                    style="width:70px; height:100%"><i
                                                        class="fa-regular fa-hand-pointer"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="overflow-auto" style="max-width: 100%; max-height: 575px;">
                                        <div class="col-lg-12">
                                            @if ($get == 'populer')
                                                @foreach ($populer as $p)
                                                    <div class="trand-right-single d-flex">
                                                        <div class="trand-right-img">
                                                            <img src="{{ asset('illustration/il1.jpg') }}" alt=""
                                                                width="100px" height="100px">
                                                        </div>
                                                        <div class="trand-right-cap">
                                                            <span class="color1">populer</span>
                                                            <h4><a href="/blog-detail">Lorem ipsum dolor sit amet,
                                                                    consectetur
                                                                    adipiscing elit. </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @elseif($get == 'weekly')
                                                @foreach ($weekly as $w)
                                                    <div class="trand-right-single d-flex">
                                                        <div class="trand-right-img">
                                                            <img src="{{ asset('illustration/il1.jpg') }}" alt=""
                                                                width="100px" height="100px">
                                                            </div>
                                                        <div class="trand-right-cap">
                                                            <span class="color3">{{ $w->segmen->segmen }}</span>
                                                            <h4><a href="/blog-detail">Lorem ipsum dolor sit amet,
                                                                    consectetur
                                                                    adipiscing elit. </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @elseif($get == 'terpilih')
                                                <div class="trand-right-single d-flex">
                                                    <div class="trand-right-img">
                                                        <img src="{{ asset('illustration/il1.jpg') }}" alt=""
                                                            width="100px" height="100px">
                                                    </div>
                                                    <div class="trand-right-cap">
                                                        <span class="color1">Pemrograman 2</span>
                                                        <h4><a href="/blog-detail">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            @endif
                                            {{-- <div class="trand-right-single d-flex">
                                                <div class="trand-right-img">
                                                    <img src="assets/img/images/course-11.jpg" alt="" width="100%" height="100%">
                                                </div>
                                                <div class="trand-right-cap">
                                                    <span class="color1">Skeping</span>
                                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
    </section>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection
