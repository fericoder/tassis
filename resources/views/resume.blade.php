@extends('master')

@section('content')

    <link type="text/css" rel="stylesheet" href="/slider/css/lightGallery.css" />


        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-box text-center">
                            <div class="page-title-heading">
                                <h1 class="title text-black">رزومه</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                    <span class="text-black">رزومه</span>
                                <span class="ttm-bread-sep text-black">&nbsp; / &nbsp;</span>
                                <a class="text-black "title="Homepage" href="index.html"><i class="ti ti-home"></i>&nbsp;&nbsp;صفحه اصلی</a>
                            </span>

                            </div>
                        </div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">

            <!-- services-slide-section -->
            <section class="ttm-row grid-section clearfix">
                <div class="container">
                    <!-- row -->

                    <div class="row">
                        <ul id="imageGallery">
                            <li data-thumb="/slider/img/1.jpeg" data-src="/slider/img/1.jpeg"><img src="/slider/img/1.jpeg" /></li>
                            <li data-thumb="/slider/img/2.jpeg" data-src="/slider/img/2.jpeg"><img src="/slider/img/2.jpeg" /></li>
                            <li data-thumb="/slider/img/3.jpeg" data-src="/slider/img/3.jpeg"><img src="/slider/img/3.jpeg" /></li>
                            <li data-thumb="/slider/img/4.jpeg" data-src="/slider/img/4.jpeg"><img src="/slider/img/4.jpeg" /></li>
                            <li data-thumb="/slider/img/6.jpeg" data-src="/slider/img/6.jpeg"><img src="/slider/img/6.jpeg" /></li>
                            <li data-thumb="/slider/img/7.jpeg" data-src="/slider/img/7.jpeg"><img src="/slider/img/7.jpeg" /></li>
                            <li data-thumb="/slider/img/8.jpeg" data-src="/slider/img/8.jpeg"><img src="/slider/img/8.jpeg" /></li>
                            <li data-thumb="/slider/img/9.jpeg" data-src="/slider/img/9.jpeg"><img src="/slider/img/9.jpeg" /></li>
                            <li data-thumb="/slider/img/10.jpeg" data-src="/slider/img/10.jpeg"><img src="/slider/img/10.jpeg" /></li>
                            <li data-thumb="/slider/img/11.jpeg" data-src="/slider/img/11.jpeg"><img src="/slider/img/11.jpeg" /></li>
                            <li data-thumb="/slider/img/12.jpeg" data-src="/slider/img/12.jpeg"><img src="/slider/img/12.jpeg" /></li>
                            <li data-thumb="/slider/img/13.jpeg" data-src="/slider/img/13.jpeg"><img src="/slider/img/13.jpeg" /></li>
                            <li data-thumb="/slider/img/14.jpeg" data-src="/slider/img/14.jpeg"><img src="/slider/img/14.jpeg" /></li>
                            <li data-thumb="/slider/img/15.jpeg" data-src="/slider/img/15.jpeg"><img src="/slider/img/15.jpeg" /></li>
                            <li data-thumb="/slider/img/16.jpeg" data-src="/slider/img/16.jpeg"><img src="/slider/img/16.jpeg" /></li>
                            <li data-thumb="/slider/img/17.jpeg" data-src="/slider/img/17.jpeg"><img src="/slider/img/17.jpeg" /></li>
                        </ul>
                    </div>

                </div>
            </section>
            <!-- services-slide-section end -->

        </div><!--site-main end-->


@endsection

@section('scripts')
@endsection