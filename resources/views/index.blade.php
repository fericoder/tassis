@extends('master')

@section('content')


    <style media="screen">
        body.rtl .tp-mask-wrap {
            direction: rtl !important;
        }

        .tp-rightarrow {
            display: none !important;
        }

        .tp-leftarrow {
            display: none !important;
        }

    </style>

    <!-- START homeclassicmain REVOLUTION SLIDER 6.0.1 -->

    <link rel="stylesheet" href="/indexSlider/css/my-slider.css"/>
    <script src="/indexSlider/js/ism-2.2.min.js"></script>

    <!-- END REVOLUTION SLIDER -->


    <div class="row">
        <div class="col-md-12">
                <div style="direction: ltr; height: 550px" data-play_type="loop" data-interval="4000" data-image_fx="zoomrotate"   class="ism-slider" id="my-slider">
                    <ol>
                        <li>
                            <img src="/indexSlider/image/slides/_u/1.jpeg">
                        </li>
                        <li>
                            <img src="/indexSlider/image/slides/_u/2.jpeg">
                        </li>
                        <li>
                            <img src="/indexSlider/image/slides/_u/3.jpeg">
                        </li>
                        <li>
                            <img src="/indexSlider/image/slides/_u/4.jpeg">
                        </li>
                        <li>
                            <img src="/indexSlider/image/slides/_u/5.jpeg">
                        </li>
                    </ol>

                </div>
        </div>
    </div>


    <!-- service-section -->
    <section style="    padding: 20px 0!important;" id="services"
             class="ttm-row service-section-style2 ttm-bgcolor-grey clearfix ">
        <div class="container">
            <div class="row"><!-- row -->
                <div class="col-lg-12">
                    <!-- section title -->
                    <div style="    margin-top: 80px;" class="section-title with-desc text-center clearfix">
                        <div class="title-header">

                            <h2 class="title" style="font-family:Rezvan!important;"> خدمات <span style="font-family:Rezvan!important; font-size:40px;" class="text-danger">" تسیس " </span></h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
            <div class="row no-gutters"><!-- row -->


                <div class="col-md-6 col-lg-4">
                    <!--  featured-icon-box -->
                    <div style="height: 88%!important; background-color: #D62828!important" class="featured-icon-box style6">
                        <div class="featured-content"><!--  featured-content -->
                            <div class="featured-title"><!--  featured-title -->
                                <h5 class="mb-10 tasis-center text-white">الو تسیس</h5>
                            </div>
                            <div class="featured-desc"><!--  featured-desc -->
                                <p class="mb-1 text-white">• بکار گیری نیروهای متخصص
                                    <br>•خدمت رسانی در کمترین زمان
                                    <br>• ارایه خدمات بصورت  شبانه روزی
                                </p>
                            </div>
                        </div>

                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline style2 mt-15 text-white" href="/alo">
                            مشاهده بیشتر </a>
                    </div><!--  featured-icon-box END -->
                </div>


                <div class="col-md-6 col-lg-4">
                    <!--  featured-icon-box -->
                    <div style="height: 88%!important; background-color: #003049!important" class="featured-icon-box style6">
                      <a href="/SettingUp">
                        <div class="featured-content"><!--  featured-content -->
                            <div class="featured-title"><!--  featured-title -->
                                <h5 class="mb-10 tasis-center text-white">راه‌اندازی،تاسیسات،تجهیزات</h5>
                            </div>
                            <div class="featured-desc"><!--  featured-desc -->
                                <p class="mb-1 text-white">• تعمیر و نگهداری سیستم MEP
                                    <br>• آسانسور
                                    <br>
                                    • نصب و نگهداری سیستم اطفاء و اعلام حریق،سونا، استخر و جکوزی

                                </p>
                            </div>
                        </div>
</a>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline style2 mt-15 text-white" href="#">مشاهده
                            بیشتر</a>
                    </div><!--  featured-icon-box END -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <!--  featured-icon-box -->
                    <div style="height: 88%!important; background-color: #FEC601!important" class="featured-icon-box style6">
                        <a href="/Technology">
                        <div class="featured-content"><!--  featured-content -->
                            <div class="featured-title"><!--  featured-title -->
                                <h5 class="mb-10 tasis-center text-white">فناوری‌های نوین و انرژی پاک</h5>
                            </div>
                            <div class="featured-desc"><!--  featured-desc -->
                                <p class="mb-1 text-white">• ممیزی مصرف انرژی
                                    <br>• هوشمندسازی
                                    <br>• خدمات هشدارهای امنیتی
                                </p>
                            </div>
                        </div>
</a>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline style2 mt-15 text-white" href="#">
                            مشاهده بیشتر </a>
                    </div><!--  featured-icon-box END -->
                </div>
                <div class="col-md-6 col-lg-6">
                    <!--  featured-icon-box -->
                    <div style="height: 88%!important; background-color: #245501!important" class="featured-icon-box style6">
                        <a href="/Live">
                        <div class="featured-content"><!--  featured-content -->
                            <div class="featured-title"><!--  featured-title -->
                                <h5 class="mb-10 tasis-center text-white">خدمات محیط زیست</h5>
                            </div>
                            <div class="featured-desc"><!--  featured-desc -->
                                <p class="mb-1 text-white">• طراحی نظام فضای سبز
                                    <br>• بررسی منابع آب مصرفی
                                    <br>• خدمات ضدعفونی
                                    <br>• تصفیه فاضلاب
                                </p>
                            </div>
                        </div>
</a>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline style2 mt-15 text-white" href="#">
                            مشاهده بیشتر </a>
                    </div><!--  featured-icon-box END -->
                </div>
                <div class="col-md-6 col-lg-6">
                    <!--  featured-icon-box -->
                    <div style="height: 88%!important; background-color: #177E89!important" class="featured-icon-box style6">
                        <a href="/General">
                        <div class="featured-content"><!--  featured-content -->
                            <div class="featured-title"><!--  featured-title -->
                                <h5 class="mb-10 tasis-center text-white">خدمات عمومی</h5>
                            </div>
                            <div class="featured-desc"><!--  featured-desc -->
                                <p class="mb-1 text-white">• خدمات پارکینگ ها
                                    <br>•خدمات خودرویی
                                    <br>• خدمات ورزشی
                                    <br>• خدمات بسته بندی، حمل و نقل
                                </p>
                            </div>
                        </div>
</a>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline style2 mt-15 text-white" href="#">
                            مشاهده بیشتر </a>
                    </div><!--  featured-icon-box END -->
                </div>

            </div>
            <!-- row end -->
        </div>
    </section>
    <!-- service-section end -->

    <!-- aboutus-section -->
    <section class="ttm-row aboutus-section clearfix tasis-ltr">
        <div class="container">
            <div class="row"><!-- row -->

                <div class="col-lg-6">
                    <div class="position-relative res-991-mt-30">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper">
                            <img style="margin-right: 55px; width: 90%" class="img-fluid lazyload" data-src="images/about.jpg" title="single-img-one"
                                 alt="single-img-one">
                        </div><!-- ttm_single_image-wrapper end -->
                        <!--featured-icon-box-->

                        <!-- featured-icon-box end-->
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- section title -->
                    <div class="section-title with-desc clearfix">
                        <div class="title-header">
                            <h2 style="text-align: center; font-family: Rezvan!important;" class="title"> <span style=" font-family: Rezvan!important;"> درباره شرکت سهامی تاسیسات ساختمان ایران </span><span  font-family: Rezvan!important;
                                                                                                                                                                                                               class="text-danger">
<br>
                                    "  تسیس

                                    "</span>
                        </div>
                        </h2>
                        <div class="title-desc">
                            <p style="direction: rtl; text-align: justify">
                                شرکت تاسیسات ساختمان ایران "تسیس"در سال 1347 تاسیس شده است واینک با قدمت بیش از نیم قرن
                                با سابقه ترین وبزرگترین شرکت تخصصی تاسیسات کشور می باشد.
                                عمده اهداف شرکت تسیس عبارت است از :<br>
                                ۱) طرح ریزی، آموزش، تهیه، نصب ونگهداری، بهسازی وبازسازی تاسیسات ساختمانی شامل تاسیسات
                                مکانیکی والکتریکال وآسانسور وطرح های مربوط به به تاسیسات گاز وآب وفاضلاب وبرق وبهینه
                                سازی مصرف انرژی وپایداری محیط زیست
                                ۲) اعطای نمایندگی حرفه ای در سراسر کشور (Franchise)وشبکه گسترده وکنترل شده ویکپارچه کسب
                                وکار
                                ۳) اورژانس شبانه روزی وسیار تاسیسات(الو تسیس)
                                ۴) تحصیل نمایندگی از سازندگان وفروشندگان لواز مصرفی داخلی وخارجی در زمینه موضوع فعالیت
                                ۵) مدیریت آکادمی حرفه ای تاسیسات
                                شرکت تسیس در طی بیش از 50 سال سابقه درخشان خود بزرگترین قرار دادها وتوفقات را در زمینه
                                موضوع فعالیت خود را با وزارتخانه ها وسازمانهای دولتی وارتش وبخش خصوصی وسازندگان شهرک های
                                بزرگ داشته است، بطوریکه در دو ده اول عمر خود بیش از 90درصد آسانسور برج های مرتفع وبیش از
                                50درصد تاسیسات مکانیکی والکتریکی پروژهای عظیم را اجرا نموده است ونمونه های نیز در همین
                                سایت معرفی شده است.
                            </p>

                            <a class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-icon-btn-left ttm-btn-color-primary" target="_blank" href="/tassis.pdf" title=""><i class="fa fa-file-pdf-o"></i><span class="tasis-byekan">دریافت فایل رزومه تسیس</span></a>


                        </div>
                    </div><!-- section title end -->

                    <!-- separator -->
                    <div class="separator">
                        <div class="sep-line mt-25 mb-30"></div>
                    </div>
                    <!-- separator -->

                </div>
            </div>
            <!-- row end -->
            <!-- row -->
            <div class="row">

            </div><!-- row end-->
        </div>
    </section>
    <!-- aboutus-section end -->

    <!-- history-section -->
    <section style="display:none"
             class="ttm-row history-section bg-img3 ttm-bgcolor-grey ttm-bg ttm-bgimage-yes clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row"><!-- row -->
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title with-desc text-center clearfix">
                        <div class="title-header">
                            <h2>خدمات تسیس</h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
            <!-- row end -->
            <!-- row -->
            <div class="row">
                <div class="history-slide owl-carousel" data-item="4" data-nav="false" data-dots="false"
                     data-auto="true">
                    <div class="ttm-history-box-wrapper"><!-- ttm-history-box-wrapper  -->
                        <div class="ttm-history-box-icon-wrapper"><!-- ttm-history-box-icon-wrapper  -->
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box">
                                <div class="featured-icon"><!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-bgcolor-white ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-business-and-finance"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ttm-history-box-border"></div><!-- ttm-history-box-border  -->
                        <div class="ttm-history-box-details">
                            <div class="ttm-historybox-title"><h5>خدمات عمرانی</h5></div><!-- historybox-title  -->
                            <div class="ttm-historybox-description tasis-byekan"><!-- description  -->
                                1- طراحی داخلی<br>2- تعمیر، ترمیم، بازسازی، بهسازی و پاکسازی<br>3- ارزیابی و ممیزی وضعیت
                                موجود ساختمان و درصورت نیاز طراحی مقاوم
                            </div>

                        </div>
                    </div><!-- ttm-history-box-wrapper  END-->
                    <div class="ttm-history-box-wrapper"><!-- ttm-history-box-wrapper  -->
                        <div class="ttm-history-box-icon-wrapper"><!-- ttm-history-box-icon-wrapper  -->
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box">
                                <div class="featured-icon"><!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-bgcolor-white ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-computer"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ttm-history-box-border"></div><!-- ttm-history-box-border  -->
                        <div class="ttm-history-box-details ">
                            <div class="ttm-historybox-title"><h5>مدیریت راه اندازی </h5></div>
                            <!-- historybox-title  -->
                            <div class="ttm-historybox-description tasis-byekan"><!-- description  -->
                                1- آسانسور<br>2- تعمیر، نگهداری، بازسازی و بهسازی سیستم MEP (تاسیسات مکانیکی و الکتریکی)<br>3-
                                نصب و نگهداری سیستم اطفاء و اعلام حریق
                            </div>

                        </div>
                    </div><!-- ttm-history-box-wrapper  END-->
                    <div class="ttm-history-box-wrapper"><!-- ttm-history-box-wrapper  -->
                        <div class="ttm-history-box-icon-wrapper "><!-- ttm-history-box-icon-wrapper  -->
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box">
                                <div class="featured-icon"><!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-bgcolor-white ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-data"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ttm-history-box-border "></div><!-- ttm-history-box-border  -->
                        <div class="ttm-history-box-details ">
                            <div class="ttm-historybox-title"><h5>خدمات محیط زیست</h5></div><!-- historybox-title  -->
                            <div class="ttm-historybox-description tasis-byekan"><!-- description  -->
                                1- طراحی نظام فضای سبز – طراحی نظام آبیاری بهینه باغچه ها – گلدان ها – گلخانه ها <br>2-
                                بررسی منابع آب مصرفی – تامین و بهینه سازی – آب باران (آب آشامیدنی و غیرآشامیدنی)<br>3-
                                تصفیه فاضلاب
                            </div>

                        </div>
                    </div><!-- ttm-history-box-wrapper  END-->
                    <div class="ttm-history-box-wrapper"><!-- ttm-history-box-wrapper  -->
                        <div class="ttm-history-box-icon-wrapper"><!-- ttm-history-box-icon-wrapper  -->
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box">
                                <div class="featured-icon"><!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-bgcolor-white ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-global-1"></i><!--  ttm-icon -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ttm-history-box-border"></div><!-- ttm-history-box-border  -->
                        <div class="ttm-history-box-details">
                            <div class="ttm-historybox-title"><h5>خدمات عمومی</h5></div><!-- historybox-title  -->
                            <div class="ttm-historybox-description tasis-byekan"><!-- description  -->
                                1- خدمات پارکینگ ها - خدمات خودرویی تعمیر در محل و شستشوی در محل<br>2- خدمات بسته بندی و
                                حمل و نقل اثاثیه<br>3- خدمات ورزشی
                            </div>

                        </div>
                    </div><!-- ttm-history-box-wrapper  END-->
                </div>
            </div><!-- row end-->

        </div>
    </section>
    <!-- history-section end -->

    <!-- topzero-padding-section -->

    <!-- topzero-padding-section -->

    <!-- team-section -->

    <!-- our-partner-section -->
    <div class="ttm-row our-client-section  ttm-bgcolor-skincolor ttm-bg ttm-bgimage-yes bg-img13 clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- ttm-client -->
                    <div class="clients-slide owl-carousel owl-theme owl-loaded" data-item="5" data-nav="false"
                         data-dots="false" data-auto="true">
                        <div class="client-box ttm-box-view-boxed-logo">
                            <div class="client">
                                <a href="/partners">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="شرکت شاهد">
                                        <img class="img-fluid" src="images/team-member/shahed.png" alt="image"
                                             style="height:100px; width: 125px;">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="client-box ttm-box-view-boxed-logo">
                            <div class="client">
                                <a href="/partners">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="شرکت فرآوری و توسعه ابنیه شاهد">
                                        <img class="img-fluid" src="images/team-member/abnieh.jpg" alt="image"
                                             style="height:100px; width: 125px;">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="client-box ttm-box-view-boxed-logo">
                            <div class="client">
                                <a href="/partners">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="شرکت ارکان گستر یوتاب">
                                        <img class="img-fluid" src="images/team-member/utobco.jpg" alt="image"
                                             style="height:100px;">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="client-box ttm-box-view-boxed-logo">
                            <div class="client">
                                <a href="/partners">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="شركت CCL IRAN">
                                        <img class="img-fluid" src="images/team-member/client-04.jpeg" alt="image"
                                             style="height:100px;">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="client-box ttm-box-view-boxed-logo">
                            <div class="client">
                                <a href="/partners">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="مهندسين مشاور اركان پويش">
                                        <img class="img-fluid" src="images/team-member/client-05.jpeg" alt="image"
                                             style="height:100px;">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="client-box ttm-box-view-boxed-logo">
                            <div class="client">
                                <a href="/partners">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="شرکت ساختماني کندوان تونل">
                                        <img class="img-fluid" src="images/team-member/client-02.jpeg" alt="image"
                                             style="height:100px;">
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="client-box ttm-box-view-boxed-logo">
                            <div class="client">
                                <a href="/partners">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="شرکت باتیس گروه">
                                        <img class="img-fluid" src="images/team-member/client-03.jpeg" alt="image"
                                             style="height:100px;">
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="client-box ttm-box-view-boxed-logo">
                            <div class="client">
                                <a href="/partners">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="هونامیک سازه">
                                        <img class="img-fluid" src="images/team-member/client-01.jpeg" alt="image"
                                             style="height:100px;">
                                    </div>
                                </a>
                            </div>
                        </div>


                    </div><!-- ttm-client end -->
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- our-partner-section END-->




    <!-- blog-section end -->
    <section style="display: none" class="ttm-row blog-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section title -->
                    <div class="section-title text-center with-desc clearfix">
                        <div class="title-header">

                            <h2 class="title"> مقالات <span></span></h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <!-- blog-slide -->
                <div class="blog-slide owl-carousel owl-theme owl-loaded " data-item="3" data-nav="false"
                     data-dots="false" data-auto="false">
                    <!-- featured-imagebox-blog -->
                    <div class="featured-imagebox featured-imagebox-blog">
                        <div class="featured-thumbnail"><!-- featured-thumbnail -->
                            <img class="img-fluid lazyload" data-src="images/blog/mk.jpg" alt="" style="height:225px;">
                            <div class="ttm-blog-overlay-iconbox">
                                <a href=""><i class="ti ti-plus"></i></a>
                            </div>
                            <div class="ttm-box-view-overlay"></div>
                        </div>
                        <div class="featured-content"><!-- featured-content -->
                            <div class="ttm-box-post-date"><!-- ttm-box-post-date -->
                                <span class="ttm-entry-date">
                                           <time class="entry-date" datetime="2019-01-16T07:07:55+00:00"><span
                                                       class="tasis-byekan">17</span><span
                                                       class="entry-month entry-year">دی</span></time>
                                       </span>
                            </div>
                            <div class="featured-title"><!-- featured-title -->
                                <h5><a href="">محل قرار گیری موتورخانه ها </a></h5>
                            </div>
                            <div class="post-meta"><!-- post-meta -->
                                <span class="ttm-meta-line tasis-byekan"><i
                                            class="fa fa-comments"></i> 2 گفت و گو</span>
                                <span class="ttm-meta-line" style="padding-right: 5px;"><i class="fa fa-user ml-1"></i>رضایی</span>

                            </div>
                            <div class="featured-desc" style="text-align:justify;"><!-- featured-description -->
                                <p>این اتاق معمولا به دستگاه های مکانیکی و کنترل کننده های الکتریکی ، اختصاص داده می
                                    شود. معمولا محل قرار گیری موتورخانه ها در زیر زمین خانه است و در محل ها و ساختمان
                                    های بزرگ تر معمولا...</p>
                            </div>
                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20"
                               href="#"><i class="ti ti-angle-double-left"></i>مشاهده بیشتر </a>
                        </div>
                    </div><!-- featured-imagebox-blog end -->
                    <!-- featured-imagebox-blog -->
                    <div class="featured-imagebox featured-imagebox-blog">
                        <div class="featured-thumbnail"><!-- featured-thumbnail -->
                            <img class="img-fluid lazyload" data-src="images/blog/azja.jpg" alt=""
                                 style="height:225px;">
                            <div class="ttm-blog-overlay-iconbox">
                                <a href=""><i class="ti ti-plus"></i></a>
                            </div>
                            <div class="ttm-box-view-overlay"></div>
                        </div>
                        <div class="featured-content"><!-- featured-content -->
                            <div class="ttm-box-post-date"><!-- ttm-box-post-date -->
                                <span class="ttm-entry-date">
                                           <time class="entry-date" datetime="2019-01-16T07:07:55+00:00"><span
                                                       class="tasis-byekan">12</span><span
                                                       class="entry-month entry-year">بهمن</span></time>
                                       </span>
                            </div>
                            <div class="featured-title"><!-- featured-title -->
                                <h5><a href="">اجزای موجود در موتورخانه </a></h5>
                            </div>
                            <div class="post-meta"><!-- post-meta -->
                                <span class="ttm-meta-line tasis-byekan"><i
                                            class="fa fa-comments"></i> 2 گفت و گو</span>
                                <span class="ttm-meta-line" style="padding-right: 5px;"><i class="fa fa-user ml-1"></i>رضایی</span>

                            </div>
                            <div class="featured-desc" style="text-align:justify;"><!-- featured-description -->
                                <p>معمولا هدف تجهیزاتی که در موتورخانه هستند ، تهویه مطبوع و گرمایش ساختمان است. در
                                    سیستم های تهویه مطبوع و گرمایش ، روش های متتعددی به کار گرفته می شود و بنا بر هر
                                    کدام...</p>
                            </div>
                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20"
                               href="#"><i class="ti ti-angle-double-left"></i>مشاهده بیشتر </a>
                        </div>
                    </div><!-- featured-imagebox-blog end -->
                    <!-- featured-imagebox-blog -->
                    <div class="featured-imagebox featured-imagebox-blog">
                        <div class="featured-thumbnail"><!-- featured-thumbnail -->
                            <img class="img-fluid lazyload" data-src="images/blog/t.jpg" alt="" style="height:225px;">
                            <div class="ttm-blog-overlay-iconbox">
                                <a href=""><i class="ti ti-plus"></i></a>
                            </div>
                            <div class="ttm-box-view-overlay"></div>
                        </div>
                        <div class="featured-content"><!-- featured-content -->
                            <div class="ttm-box-post-date"><!-- ttm-box-post-date -->
                                <span class="ttm-entry-date">
                                           <time class="entry-date" datetime="2019-01-16T07:07:55+00:00"><span
                                                       class="tasis-byekan">4</span><span
                                                       class="entry-month entry-year">اسفند</span></time>
                                       </span>
                            </div>
                            <div class="featured-title"><!-- featured-title -->
                                <h5><a href="">برخی تجهیزات موتور خانه ها </a></h5>
                            </div>
                            <div class="post-meta"><!-- post-meta -->
                                <span class="ttm-meta-line tasis-byekan"><i
                                            class="fa fa-comments"></i> 2 گفت و گو</span>
                                <span class="ttm-meta-line" style="padding-right: 5px;"><i class="fa fa-user ml-1"></i>رضایی</span>

                            </div>
                            <div class="featured-desc" style="text-align:justify;"><!-- featured-description -->
                                <p>در موتور خانه ها اجزای زیادی از قبیل وسائل تولید حرارت مثل دیگ ها، چیلرها، مشعل، لوله
                                    ها انتقال و غیره وجود دارند که در اینجا به معرفی برخی از آن ها می پردازیم...</p>
                            </div>
                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20"
                               href="#"><i class="ti ti-angle-double-left"></i>مشاهده بیشتر </a>
                        </div>
                    </div><!-- featured-imagebox-blog end -->
                    <!-- featured-imagebox-blog -->
                    <div class="featured-imagebox featured-imagebox-blog">
                        <div class="featured-thumbnail"><!-- featured-thumbnail -->
                            <img class="img-fluid lazyload" data-src="images/blog/tassis1.jpg" alt=""
                                 style="height:225px;">
                            <div class="ttm-blog-overlay-iconbox">
                                <a href=""><i class="ti ti-plus"></i></a>
                            </div>
                            <div class="ttm-box-view-overlay"></div>
                        </div>
                        <div class="featured-content"><!-- featured-content -->
                            <div class="ttm-box-post-date"><!-- ttm-box-post-date -->
                                <span class="ttm-entry-date">
                                           <time class="entry-date" datetime="2019-01-16T07:07:55+00:00"><span
                                                       class="tasis-byekan">26</span><span
                                                       class="entry-month entry-year">فروردین</span></time>
                                       </span>
                            </div>
                            <div class="featured-title"><!-- featured-title -->
                                <h5><a href="">دیگ ها در موتور خانه </a></h5>
                            </div>
                            <div class="post-meta"><!-- post-meta -->
                                <span class="ttm-meta-line tasis-byekan"><i
                                            class="fa fa-comments"></i> 2 گفت و گو</span>
                                <span class="ttm-meta-line" style="padding-right: 5px;"><i class="fa fa-user ml-1"></i>رضایی</span>

                            </div>
                            <div class="featured-desc" style="text-align:justify;"><!-- featured-description -->
                                <p>از معمول ترین مولد های گرمایی،دیگ های حرارت مرکزی می باشند . در دیگ ها انرژی حرارتی
                                    از سوخت (که توسط مشعل تولید حرارت می نماید ) گرفته شده و به آن داده می شود . بسته به
                                    نوع مصرف...</p>
                            </div>
                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20"
                               href="#"><i class="ti ti-angle-double-left"></i>مشاهده بیشتر </a>
                        </div>
                    </div><!-- featured-imagebox-blog end -->
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- process-section end -->

    </div><!--site-main end-->



@endsection
