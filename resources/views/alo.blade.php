@extends('master')

@section('content')


<style media="screen">
body.rtl .tp-mask-wrap {
 direction: rtl !important;
}
.featured-thumbnail{
    text-align: center;
}
/** DarkGrey-bg-color **/
.ttm-bgcolor-darkgrey,
.ttm-bgcolor-darkgrey > .ttm-bg-layer,
.ttm-bgcolor-darkgrey > .ttm-bg-layer > .ttm-bg-layer-inner,
.ttm-btn-bgcolor-darkgrey,
.ttm-btn-color-darkgrey:hover,
.ttm-header-icons .ttm-header-cart-link a:hover,
.ttm-icon_element-bgcolor-darkgrey,
.ttm-btn-bgcolor-white:hover,
.ttm-btn-bgcolor-skincolor:hover,
.widget.widget-nav-menu ul li:hover a:before, .widget.widget-nav-menu ul li.active a:before,
.ttm-btn.ttm-btn-bgcolor-darkgrey,
.ttm-btn.ttm-btn-color-darkgrey.ttm-btn-style-border:hover,
.ttm-header-icons .ttm-header-cart-link a,
.progress-bar-color-bar_darkgrey,
.progress-bar-color-bar_darkgrey.progress-bar:before,
.featured-imagebox-portfolio.style1 .featured-content,
.featured-imagebox-blog .ttm-box-view-overlay:before,
.featured-imagebox-blog .ttm-box-view-overlay:after,
.featured-icon-box.without-icon .featured-title h5:before,
.ttm-bgcolor-skincolor .tooltip:after,
.ttm-bgcolor-skincolor [data-tooltip]:after,
.comment-list a.comment-reply-link,
.ttm-shop-icon .product-btn,
div.product ul.tabs li a,
.ttm-tabs.ttm-tab-style-horizontal ul.tabs li a{
  background-color: #c61313!important;
}

/** Skin-bg-color **/
.ttm-bgcolor-skincolor,
.ttm-bgcolor-skincolor > .ttm-bg-layer,
.ttm-bgcolor-skincolor > .ttm-bg-layer > .ttm-bg-layer-inner,
.tp-shapewrapper, .ttm-bg-highlight-skin,
.tp-caption.skin-flatborder-button:hover,
.top-contact.ttm-highlight-left:after,
.top-contact.ttm-highlight-right:after,
.ttm-header-icons .ttm-header-cart-link span.number-cart,
.ttm-header-icons .ttm-header-search-link a:hover,
#site-navigation .menu ul.dropdown > li > a:before,
#site-header-menu #site-navigation .menu ul li a span,
.ttm-icon_element-bgcolor-skincolor,
.ttm-btn-bgcolor-skincolor,
.ttm-tabs ul.tabs li.active a ,
.widget .widget-title:after,
.ttm-btn-bgcolor-darkgrey:hover,
.ttm-btn.ttm-btn-color-skincolor.ttm-btn-style-border:hover,
.ttm-btn.ttm-btn-bgcolor-darkgrey:hover,
#totop.top-visible,
.ttm-processbox-wrapper .ttm-processbox:hover .process-num,
.ttm-tabs.ttm-tab-style-horizontal ul.tabs li.active a,
.widget.widget-nav-menu ul li a:after,
.mailchimp-inputbox button[type="submit"],
a.checkout-button:hover, .coupon button:hover, .ttm-cart-form button:hover, .place-order button:hover,
.ttm-btn-play:after, .ttm-btn-play:before,
.tp-caption.skin-flat-button, .skin-flat-button,
.ttm-video-play-btn,
.ttm-video-btn .ttm-video-btn-play,
.ttm-video-btn .ttm-video-btn-play:before,
.ttm-video-btn .ttm-video-btn-play:after,
.ttm-tabs.ttm-tab-style-classic ul.tabs li.active:after,
.ttm-search-overlay .ttm-site-searchform button,
.ttm-rt-contact .ttm-custombutton,
.sidebar .widget .tagcloud a:hover,
.color-trigger,
.ttm-header-icons .ttm-header-search-link a,
.tooltip:after, [data-tooltip]:after,
.newsletter-form input[type="submit"],
.footer .social-icons li>a:hover,
.about-overlay-01,
.ttm-history-box-wrapper:hover .ttm-history-box-details,
.featured-imagebox-team .social-icons,
.progress-bar-color-bar_skincolor,
.progress-bar-color-bar_skincolor.progress-bar:before,
.featured-imagebox-portfolio .ttm-media-link a,
.featured-imagebox-blog .ttm-box-post-date,
.featured-icon-box.style5:before,
.ttm-tabs.ttm-tab-style-classic.style1 ul.tabs li.active a:before,
.ttm-tabs.ttm-tab-style-classic.style1 ul.tabs li.active a,
.testimonial-slide.owl-theme.ttm-bgcolor-white .owl-dots .owl-dot span,
.featured-imagebox-portfolio.style2 .featured-content,
.featured-icon-box.style6:hover,
.about-overlay-02,
.about-overlay-03,
.ttm-btn-bgcolor-grey:hover,
.featured-imagebox-services:hover .featured-content,
.accordion .toggle-title a.active,
.sidebar .widget .widget-title:before,
.widget.widget-search .form-group i,
.ttm-pagination .page-numbers.current,
.ttm-pagination .page-numbers:hover,
.ttm-box-view-left-image .featured-content .category> a:hover,
.ttm-blog-single .ttm-blog-single-content blockquote:before,
.ttm-tag-list span a:hover,
.ttm-blog-single-content .social-icons li>a:hover,
.comment-list a.comment-reply-link:hover,
.ttm-shop-icon .product-btn:hover,
.widget-top-rated-products ins,
div.product ul.tabs li a:before {
  background-color: #c61313!important ;
}

.bg-blue{
    background-color: #2d4a8a!important;
}

.tp-rightarrow{
  display: none!important;
}
.tp-leftarrow{
  display: none!important;
}
</style>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

       <!-- START homeclassicmain REVOLUTION SLIDER 6.0.1 -->
              <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery">
                  <rs-module id="rev_slider_1_1" style="" data-version="6.0.1" class="rev_slider_1_1_height">
                      <rs-slides>
                          <!-- rs-slide -->
                          <rs-slide class="tasis-ltr" data-key="rs-3" data-title="Slide" data-thumb="images/slides/11.jpg" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;">
                              <img src="images/slides/12.jpg" title="tassis21" width="1920" height="790" class="rev-slidebg" data-no-retina>
                              <rs-layer
                                  id="slider-2-slide-1-layer-0"
                                  data-type="text"
                                  data-color="#2d4a8a"
                                  data-rsp_ch="on"
                                  data-xy="xo:50px,50px,40px,-164px;yo:326px,196px,94px,61px;"
                                  data-text="w:normal;s:18,18,15,10;l:25,25,15,9;fw:500;"
                                  data-vbility="t,t,t,f"
                                  data-frame_0="x:-50,-50,-31,-19;"
                                  data-frame_1="e:Linear.easeNone;st:120;sp:400;sR:120;"
                                  data-frame_999="o:0;st:w;sR:8480;"
                                  >
                              </rs-layer>
                              <rs-layer
                                  id="slider-2-slide-1-layer-1"
                                  class="ttm-bgcolor-skincolor"
                                  data-type="shape"
                                  data-rsp_ch="on"
                                  data-xy="xo:274px,274px,-119px,-73px;yo:339px,209px,136px,83px;"
                                  data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                                  data-dim="w:36px,36px,22px,13px;h:2px,2px,1px,1px;"
                                  data-vbility="t,t,f,f"
                                  data-frame_0="x:50,50,31,19;"
                                  data-frame_1="e:Linear.easeNone;st:190;sp:200;sR:190;"
                                  data-frame_999="o:0;st:w;sR:8610;"
                                  >
                              </rs-layer>

                              <rs-layer class="tasis-rezvan"
                                  id="slider-2-slide-1-layer-3"
                                  data-type="text"
                                  data-color="#c61313"
                                  data-rsp_ch="on"
                                  data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:363px,233px,124px,59px;"
                                  data-text="w:normal;s:62,52,45,37;l:70,60,50,60;fw:600;"
                                  data-frame_0="x:-50,-50,-31,-19;"
                                  data-frame_1="e:Linear.easeNone;st:260;sp:800;sR:260;"
                                  data-frame_999="o:0;st:w;sR:7940;"
                                  >الو تسیس
                              </rs-layer>
                              <rs-layer class="tasis-byekan" style="margin-left:-55px;"
                                  id="slider-2-slide-1-layer-4"
                                  data-type="text"
                                  data-color="#c61313"
                                  data-rsp_ch="on"
                                  data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:436px,294px,173px,104px;"
                                  data-text="w:normal;s:62,52,45,37;l:75,65,60,60;fw:600;"
                                  data-frame_0="x:-50,-50,-31,-19;"
                                  data-frame_1="st:410;sp:800;sR:410;"
                                  data-frame_999="o:0;st:w;sR:7790;"
                                  > 2470 <strong class="ttm-textcolor-skincolor tasis-rezvan">اورژانس  تأسیسات</strong>
                              </rs-layer>




                              <rs-layer
                                  id="slider-2-slide-1-layer-8"
                                  class="ttm-bgcolor-darkgrey"
                                  data-type="shape"
                                  data-rsp_ch="on"
                                  data-xy="x:r;xo:65px,65px,-165px,-101px;yo:670px,540px,301px,185px;"
                                  data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                                  data-dim="w:26px,26px,15px,9px;h:26px,26px,15px,9px;"
                                  data-vbility="t,t,f,f"
                                  data-border="bor:50px,50px,50px,50px;"
                                  data-frame_0="y:bottom;"
                                  data-frame_1="st:200;sp:1000;sR:200;"
                                  data-frame_999="o:1;st:w;sp:1200;sR:7800;"
                                  data-frame_999_chars="e:Power4.easeInOut;d:10;x:-105%;o:0;rZ:-90deg;"
                                  data-frame_999_mask="u:t;"
                                  >
                              </rs-layer>

                              <rs-layerz
                                  id="slider-2-slide-1-layer-10"
                                  data-type="text"
                                  data-color="#40444e"
                                  data-rsp_ch="on"
                                  data-xy="x:l,l,l,c;xo:50px,50px,40px,-409px;yo:519px,380px,237px,132px;"
                                  data-text="w:normal;s:16,16,12,7;l:27,27,23,14;fw:400,400,500,500;"
                                  data-vbility="t,t,t,f"
                                  data-frame_0="y:50,50,31,19;"
                                  data-frame_1="e:Linear.easeNone;st:630;sp:500;sR:630;"
                                  data-frame_999="o:0;st:w;sR:7870;"
                                  >شرکت تاسیسات ساختمان ایران"تسیس"در سال 1347 تاسیس شده است <br> واینک با قدمت  بیش از نیم قرن با سابقه ترین وبزرگترین شرکت تخصصی تاسیسات کشور می باشد
                              </rs-layer>

                          </rs-slide>
                          <!-- rs-slide -->
                          <!-- rs-slide -->

                          <!-- rs-slide -->
                      </rs-slides>
                  </rs-module><!-- rs-module -->
              </rs-module-wrap>
              <!-- END REVOLUTION SLIDER -->

              <!-- service-section -->
              <section class="ttm-row zero-padding-section position-relative z-1 clearfix">
            <div class="container">
                <div class="row no-gutters ttm-bgcolor-darkgrey featured-icon-box-style1-row">
                    <div class="col-md-4">
                        <!--  featured-icon-box -->
                        <div class="featured-icon-box left-icon style1 bg-blue">
                            <div class="featured-icon"><!--  featured-icon -->
                                <div class="ttm-icon ttm-icon_element-bgcolor-darkgrey ttm-icon_element-size-md">
                                    <i class="flaticon flaticon-system"></i><!--  ttm-icon -->
                                </div>
                            </div>
                            <div class="featured-content"><!--  featured-content -->
                                <div class="featured-title"><!--  featured-title -->
                                    <h5>سرعت</h5>
                                </div>
                                <div class="featured-desc"><!--  featured-desc -->
                                    <p>خدمت رسانی در کمترین زمان</p>
                                </div>
                            </div>
                        </div><!--  featured-icon-box END -->
                    </div>
                    <div class="col-md-4">
                        <!--  featured-icon-box -->
                        <div class="featured-icon-box left-icon style1 ttm-bgcolor-darkgrey">
                            <div class="featured-icon"><!--  featured-icon -->
                                <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md bg-blue">
                                    <i class="flaticon flaticon-clock"></i><!--  ttm-icon -->
                                </div>
                            </div>
                            <div class="featured-content"><!--  featured-content -->
                                <div class="featured-title"><!--  featured-title -->
                                    <h5 class="tasis-byekan">24/7</h5>
                                </div>
                                <div class="featured-desc"><!--  featured-desc -->
                                    <p>خدمات شبانه روزی</p>
                                </div>
                            </div>
                        </div><!--  featured-icon-box END -->
                    </div>
                    <div class="col-md-4">
                        <!--  featured-icon-box -->
                        <div class="featured-icon-box left-icon style1 bg-blue">
                            <div class="featured-icon"><!--  featured-icon -->
                                <div class="ttm-icon ttm-icon_element-bgcolor-darkgrey ttm-icon_element-size-md">
                                    <i class="flaticon flaticon-developer"></i><!--  ttm-icon -->
                                </div>
                            </div>
                            <div class="featured-content"><!--  featured-content -->
                                <div class="featured-title"><!--  featured-title -->
                                    <h5>تخصص </h5>
                                </div>
                                <div class="featured-desc"><!--  featured-desc -->
                                    <p>بکار گیری نیروهای متخصص</p>
                                </div>
                            </div>
                        </div><!--  featured-icon-box END -->
                    </div>
                </div>
            </div>
        </section>
                  <!-- service-section end -->

           <!-- aboutus-section -->
           <section class="ttm-row aboutus-section clearfix tasis-ltr">
               <div class="container">
                   <div class="row"><!-- row -->

                       <div style="display: none" class="col-lg-4">
                           <div class="position-relative res-991-mt-30">
                               <!-- ttm_single_image-wrapper -->
                               <div class="ttm_single_image-wrapper">
                                   <img class="img-fluid lazyload card" data-src="images/tassis3.jpg" title="single-img-one" alt="single-img-one">
                               </div><!-- ttm_single_image-wrapper end -->
                               <!--featured-icon-box-->

                               <!-- featured-icon-box end-->
                           </div>
                       </div>


                       <div class="col-lg-12">
                           <!-- section title -->
                           <div class="section-title with-desc clearfix">
                               <div class="title-header">
                                   <h2 class="title" style="font-family:Rezvan!important;">درباره <span style="font-family:Rezvan!important;">الوتسیس</span></h2>
                               </div>
                               <div style="direction: rtl" class="title-desc">
                                   <b class="title">اورژانس تاسیسات :</b>
                                   فوریت ها یا اوژانس تاسیسات یک خدمت شبکه ای گسترده وحرفه ای و کاملا جدید وبه روز است . <br>
                                   <br>این خدمت حرفه ای، امروزه ضروری ترین نیاز مالکان وساکنین ساختمان های مسکونی ،خدماتی ،فرهنگی وورزشی ،اداری وتجاری است که برای نگهداری تاسیسات خود شرکت ویا شخصی فنی و خاصی را به صورت ثابت در اختیار ندارند واین ضرورت ونیاز اجتناب ناپذیر است.

                                   دلایل ۱۳ گانه ما برای اینکه از شما بخواهیم که  مشتری ومشترک اورژانس تاسیسات "الو تسیس" باشید :<br><br>
                                   ۱ - دسترسی آسان ومحلی وفوریت در اعزام <br>
                                   ۲ - دارای بودن گواهی حرفه ای ومهارت هریک از  تکنسین ها<br>
                                   ۳ - کنترل ونظارت بهداشتی هر یک از تکنسین ها<br>
                                   ۴ - کنترل ونظارت بر  روی عملکرد تکنسین ها<br>
                                   ۵ - استفاده از لباس متحد الشکل وکدشناسائی ثبت شده<br>
                                   ۶ - چارچوب تعرفه ای برای هزینه ها وصدور فاکتور شرکت<br>
                                   ۷ - نظارت شرکت برروی هزینه های دریافتی براساس تعرفه<br>
                                   ۸ - بهره مندی از چک لیست کنترلی<br>
                                   ۹ - در صورت لزوم مشورت تکنسین با سوپروایزرومهندس استادکار<br>
                                   ۱۰ - ثبت تعمیرات در سوابق پرونده مشترک<br>
                                   ۱۱ - تخفیف مشترکان دائمی<br>
                                   ۱۲ - بهره مندی از اجناس ولوازم با کیفیت وبا قیمت مناسب تر که به صورت متمرکز از تولید کننده یافروشگاه های عمده فروشی خریداری می شود<br>
                                   ۱۳ - ونهایتا احساس امنیت واطمینان<br><br>
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

           <!-- services-slide-section -->
                       <section class="ttm-row grid-section clearfix img-wh"style="background-color:#edf1fd">
                           <div class="container">
                               <div class="row"><!-- row -->
                                   <div class="col-lg-12 offset-lg-2">
                                       <!-- section-title -->
                                       <div class="section-title with-desc text-center clearfix">
                                           <div class="title-header">
                                               <h2 class="title" style="font-family:Rezvan!important;"> خدمات  <span style="font-family:Rezvan!important;">الو تسیس</span></h2>
                                           </div>
                                       </div><!-- section-title end -->
                                   </div>
                               </div>
                               <!-- row end -->
                               <!-- row -->
                               <div class="row">
                                   <div class="col-md-4 col-lg-4">
                                       <!-- featured-imagebox-services -->
                                       <div class="featured-imagebox featured-imagebox-services style1 mb-30">
                                           <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                               <img class="img-fluid tasis-w" src="images/services/kooler.jpg" alt="image">
                                           </div>
                                           <div class="featured-content box-shadow">
                                               <div class="featured-title"><!-- featured-title -->
                                                   <h5><a href="">
                                                           <span style="font-size: 14px">تعمیر</span>
                                                           کولر آبی</a></h5>
                                               </div>

                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-4 col-lg-4">
                                       <!-- featured-imagebox-services -->
                                       <!-- featured-imagebox-services -->
                                       <div class="featured-imagebox featured-imagebox-services style1 mb-30">
                                           <div class="featured-thum tasis-wbnail"><!-- featured-thumbnail -->
                                               <img class="img-fluid" src="images/services/mashal.jpg" alt="image">
                                           </div>
                                           <div class="featured-content box-shadow">
                                               <div class="featured-title"><!-- featured-title -->
                                                   <h5><a href="">
                                                           <span style="font-size: 14px">تعمیر</span>
                                                           مشعل گازی و گازوئیلی
                                                       </a></h5>
                                               </div>

                                           </div>
                                       </div>
                                       <!-- featured-imagebox-services -->
                                   </div>
                                   <div class="col-md-4 col-lg-4">
                                       <!-- featured-imagebox-services -->
                                       <div class="featured-imagebox featured-imagebox-services style1 mb-30">
                                           <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                               <img class="img-fluid tasis-w" src="images/services/boster.jpg" alt="image">
                                           </div>
                                           <div class="featured-content box-shadow">
                                               <div class="featured-title"><!-- featured-title -->
                                                   <h5><a href="">
                                                       <span style="font-size: 14px">تعمیر</span>
                                                           بوستر پمپ آبرسانی
                                                       </a></h5>
                                               </div>

                                           </div>
                                       </div>
                                       <!-- featured-imagebox-services -->
                                   </div>
                                   <div class="col-md-4 col-lg-4">
                                       <!-- featured-imagebox-services -->
                                       <div class="featured-imagebox featured-imagebox-services style1 mb-30">
                                           <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                               <img class="img-fluid tasis-w" src="images/services/pomp.jpg" alt="image">
                                           </div>
                                           <div class="featured-content box-shadow">
                                               <div class="featured-title"><!-- featured-title -->
                                                   <h5><a href="">
                                                           <span style="font-size: 14px">تعمیر</span>
                                                           پمپ های سیرکوله</a></h5>
                                               </div>

                                           </div>
                                       </div>
                                       <!-- featured-imagebox-services -->
                                   </div>
                                   <div class="col-md-4 col-lg-4">
                                       <!-- featured-imagebox-services -->
                                       <div class="featured-imagebox featured-imagebox-services style1 mb-30">
                                           <div class="featured-thumbnail box-shadow"><!-- featured-thumbnail -->
                                               <img class="img-fluid tasis-w" src="images/services/folad.jpeg" alt="image">
                                           </div>
                                           <div class="featured-content box-shadow">
                                               <div class="featured-title"><!-- featured-title -->
                                                   <h6><a href=""><span style="font-size: 14px">تعمیر</span>
                                                           دیگ های چدنی و فولادی کوچک</a></h6>
                                               </div>

                                           </div>
                                       </div>
                                       <!-- featured-imagebox-services -->
                                   </div>
                                   <div class="col-md-4 col-lg-4">
                                       <!-- featured-imagebox-services -->
                                       <div class="featured-imagebox featured-imagebox-services style1 mb-30">
                                           <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                               <img class="img-fluid tasis-w" src="images/services/shir.jpg" alt="image">
                                           </div>
                                           <div class="featured-content box-shadow">
                                               <div class="featured-title"><!-- featured-title -->
                                                   <h6><a href="">
                                                           <span style="font-size: 14px">تعمیر</span>
                                                           شیر آلات و
سرویس بهداشتی</a></h6>
                                               </div>
                                           </div>
                                       </div>
                                       <!-- featured-imagebox-services -->
                                   </div>
                                   <div class="col-md-4 col-lg-4">
                                       <!-- featured-imagebox-services -->
                                       <div class="featured-imagebox featured-imagebox-services style1 mb-30">
                                           <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                               <img class="img-fluid tasis-w" src="images/services/radiator.jpg" alt="image">
                                           </div>
                                           <div class="featured-content box-shadow">
                                               <div class="featured-title"><!-- featured-title -->
                                                   <h5><a href="">
                                                           <span style="font-size: 14px">تعمیر</span>
                                                           انواع رادیاتور</a></h5>
                                               </div>

                                           </div>
                                       </div>
                                       <!-- featured-imagebox-services -->
                                   </div>
                                   <div class="col-md-4 col-lg-4">
                                       <!-- featured-imagebox-services -->
                                       <div class="featured-imagebox featured-imagebox-services style1 mb-30">
                                           <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                               <img class="img-fluid tasis-w" src="images/services/lole.jpg" alt="image">
                                           </div>
                                           <div class="featured-content box-shadow">
                                               <div class="featured-title"><!-- featured-title -->
                                                   <h5><a href="">
                                                           <span style="font-size: 14px">تعمیر</span>
                                                           ترکیدگی لوله</a></h5>
                                               </div>

                                           </div>
                                       </div>
                                       <!-- featured-imagebox-services -->
                                   </div>
                                   <div class="col-md-4 col-lg-4">
                                       <!-- featured-imagebox-services -->
                                       <div class="featured-imagebox featured-imagebox-services style1 mb-30">
                                           <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                               <img class="img-fluid tasis-w" src="images/services/gazi.jpg" alt="image">
                                           </div>
                                           <div class="featured-content box-shadow">
                                               <div class="featured-title"><!-- featured-title -->
                                                   <h6><a href="">
                                                           کولر گازی و اسپلیت و داکت اسپلیت</a></h6>
                                               </div>

                                           </div>
                                       </div>
                                       <!-- featured-imagebox-services -->
                                   </div>
                                   <div class="col-md-4 col-lg-4">
                                       <!-- featured-imagebox-services -->
                                       <div class="featured-imagebox featured-imagebox-services style1 mb-30">
                                           <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                               <img class="img-fluid tasis-w" src="images/services/cheraq.jpg" alt="image">
                                           </div>
                                           <div class="featured-content box-shadow">
                                               <div class="featured-title"><!-- featured-title -->
                                                   <h5><a href="">
                                                           نصب روشنایی چراغ دیواری</a></h5>
                                               </div>


                                           </div>
                                       </div>
                                       <!-- featured-imagebox-services -->
                                   </div>
                                   <div class="col-md-4 col-lg-4">
                                       <!-- featured-imagebox-services -->
                                       <div class="featured-imagebox featured-imagebox-services style1 mb-30">
                                           <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                               <img class="img-fluid tasis-w" src="images/services/pak.jpg" alt="image">
                                           </div>
                                           <div class="featured-content box-shadow">
                                               <div class="featured-title"><!-- featured-title -->
                                                   <h5><a href="">
                                                           <span style="font-size: 14px">تعمیر</span>
                                                           پکیج و آبگرمکن</a></h5>
                                               </div>
                                           </div>
                                       </div>
                                       <!-- featured-imagebox-services -->
                                   </div>
                                   <div class="col-md-4 col-lg-4">
                                       <!-- featured-imagebox-services -->
                                       <div class="featured-imagebox featured-imagebox-services style1 mb-30">
                                           <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                               <img class="img-fluid tasis-w" src="images/services/barq.jpg" alt="image">
                                           </div>
                                           <div class="featured-content box-shadow">
                                               <div class="featured-title"><!-- featured-title -->
                                                   <h5><a href="">
                                                           سیم کشی و تابلو برق</a></h5>
                                               </div>

                                           </div>
                                       </div>
                                       <!-- featured-imagebox-services -->
                                   </div>
                               </div>
                               <!-- row end-->
                           </div>
                       </section>


           <!-- team-section -->
           <section class="ttm-row team-section clearfix">
               <div class="container">
                   <div class="row"><!-- row -->
                       <div class="col-lg-12 col-xl-12 col-md-12">
                           <!-- section-title -->
                           <div class="section-title style2 clearfix">
                               <div class="title-header">

                                   <h2 class="title">تکنسین های  <span>برتر</span></h2>
                               </div>
                               <div class="title-desc">مسئولیت تکنسین برق انجام کلیه امور مربوط به سیم‌کشی و برق منازل، ادارات، مراکز صنعتی و ... است.</div>
                           </div><!-- section-title end -->
                       </div>

                   </div>
                   <!-- row end -->
                   <!-- row -->
                   <div class="row">
                       <div class="team-slide owl-carousel" data-item="3" data-nav="false" data-dots="false" data-auto="false">
                           <!-- featured-imagebox-team -->
                           <div class="featured-imagebox featured-imagebox-team style1">
                               <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                   <img class="img-fluid lazyload " style="border: 2px solid #2252bb;"  data-src="images/tassis7.jpg" alt="image" style="height:360px;">
                                   <div class="ttm-social-links-wrapper">
                                       <ul class="social-icons list-inline"><!-- social-icons -->
                                           <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                           <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                           <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                           <li class="social-googleplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="featured-content box-shadow">
                                   <div class="featured-title"><!-- featured-title -->
                                       <h5><a href="">رضا رضایی</a></h5>
                                   </div>
                                   <p class="category">تکنسین لوله کشی</p><!-- category -->
                               </div>
                           </div><!-- featured-imagebox-team end-->
                           <!-- featured-imagebox-team -->
                           <div class="featured-imagebox featured-imagebox-team style1">
                               <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                   <img class="img-fluid lazyload" style="border: 2px solid #2252bb;" data-src="images/tassis4.jpg" alt="image" style="height:360px;">
                                   <div class="ttm-social-links-wrapper">
                                       <ul class="social-icons list-inline"><!-- social-icons -->
                                           <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                           <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                           <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                           <li class="social-googleplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="featured-content box-shadow">
                                   <div class="featured-title"><!-- featured-title -->
                                       <h5><a href="">رضا رضایی</a></h5>
                                   </div>
                                   <p class="category">تکنسین لوله کشی</p><!-- category -->
                               </div>
                           </div><!-- featured-imagebox-team end-->
                           <!-- featured-imagebox-team -->
                           <div class="featured-imagebox featured-imagebox-team style1">
                               <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                   <img class="img-fluid lazyload" style="border: 2px solid #2252bb;"  data-src="images/tassis12.jpg" alt="image" style="height:360px;">
                                   <div class="ttm-social-links-wrapper">
                                       <ul class="social-icons list-inline"><!-- social-icons -->
                                           <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                           <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                           <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                           <li class="social-googleplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="featured-content box-shadow">
                                   <div class="featured-title"><!-- featured-title -->
                                       <h5><a href="">رضا رضایی</a></h5>
                                   </div>
                                   <p class="category">تکنسین لوله کشی</p><!-- category -->
                               </div>
                           </div><!-- featured-imagebox-team end-->
                           <!-- featured-imagebox-team -->
                           <div class="featured-imagebox featured-imagebox-team style1">
                               <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                   <img class="img-fluid lazyload" style="border: 2px solid #2252bb;"  data-src="images/tassis5.jpg" alt="image" style="height:360px;">
                                   <div class="ttm-social-links-wrapper">
                                       <ul class="social-icons list-inline"><!-- social-icons -->
                                           <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                           <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                           <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                           <li class="social-googleplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="featured-content box-shadow">
                                   <div class="featured-title"><!-- featured-title -->
                                       <h5><a href="">رضا رضایی</a></h5>
                                   </div>
                                   <p class="category">تکنسین لوله کشی</p><!-- category -->
                               </div>
                           </div><!-- featured-imagebox-team end-->
                       </div>
                   </div><!-- row end-->
               </div>
           </section>


                                             <!-- services-slide-section -->
                                             <section class="ttm-row zero-padding-section clearfix">
                                                 <div class="container">
                                                     <div class="row no-gutters tasis-ltr"><!-- row -->
                                                         <div class="col-lg-5">
                                                             <div class="spacing-9 tasis-rtl">
                                                                 <!-- section title -->
                                                                 <div class="section-title with-desc clearfix">
                                                                     <div class="title-header">
                                                                         <h5>انتخاب موقعیت در نقشه </h5>
                                                                     </div>
                                                                 </div><!-- section title end -->
                                                                 <div class="row">
                                                                     <div class="col-12">
                                                                         <!-- featured-icon-box -->


                                                                         <div id="map"></div>
                                                                         <input name="lat" value="35.6969331" type="hidden" id="lat"><br>
                                                                         <input name="lng" value="51.2796073" type="hidden" id="lng">



                                                                     </div>
                                                                 </div>
                                                                 <div class="col-md-12">
                                                                     <div class="text-left">
                                                                         <button type="submit" id="submit" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor" value="">
                                                                             ارسال درخواست
                                                                         </button>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="col-lg-7">
                                                             <div class="spacing-10 ttm-bgcolor-grey ttm-bg ttm-col-bgcolor-yes ttm-right-span tasis-rtl">
                                                                 <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                                                     <div class="ttm-bg-layer-inner"></div>
                                                                 </div>
                                                                 <!-- section title -->
                                                                 <div class="section-title with-desc clearfix">
                                                                     <div class="title-header">
                                                                         <h5>فرم درخواست خدمت</h5>
                                                                         <h2 class="title">درخواست خدمت</h2>
                                                                     </div>
                                                                 </div><!-- section title end -->
                                                                 <form id="ttm-quote-form" class="row ttm-quote-form clearfix" method="post" action="#">
                                                                     <div class="col-sm-6 col-md-6">
                                                                         <div class="form-group">
                                                                             <input name="name" type="text" class="form-control bg-white" placeholder="نام و نام خانوادگی*" required="required">
                                                                         </div>
                                                                     </div>
                                                                     <div class="col-sm-6 col-md-6">
                                                                         <div class="form-group">
                                                                             <input name="phone" type="text" placeholder="شماره تماس*" required="required" class="form-control bg-white">
                                                                         </div>
                                                                     </div>
                                                                     <div class="col-sm-6 col-md-6">
                                                                         <div class="form-group">
                                                                             <input name="address" type="text" placeholder=" ایمیل*" required="required" class="form-control bg-white">
                                                                         </div>
                                                                     </div>
                                                                     <div class="col-sm-6 col-md-6">
                                                                         <div class="form-group">
                                                                             <input name="subject" type="text" placeholder="موضوع" required="required" class="form-control bg-white">
                                                                         </div>
                                                                     </div>
                                                                     <div class="col-sm-12 col-md-12">
                                                                         <div class="form-group">
                                                                             <textarea name="Massage" rows="5" placeholder="درخواست خود را وارد کنید..." required="required" class="form-control bg-white"></textarea>
                                                                         </div>
                                                                     </div>

                                                                 </form>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <!-- row end -->
                                                     <!-- row -->
                                                     <div class="row">

                                                     </div><!-- row end-->
                                                 </div>
                                             </section>
                                             <!-- services-slide-section end -->




           <section class="ttm-row process-section clearfix">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12">
                           <!-- section title -->
                           <div class="section-title text-center with-desc clearfix">
                               <div class="title-header">
                                   <h2 class="title" style="font-family:Rezvan!important;"> الو تسیس <span style="font-family:Rezvan!important;"> چگونه کار می کند؟ </span></h2>
                               </div>
                           </div><!-- section title end -->
                       </div>
                   </div>
                   <!-- row -->
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="ttm-processbox-wrapper">
                               <div class="ttm-processbox text-center">
                                   <div class="ttm-box-image">
                                       <img class="img-fluid lazyload" data-src="images/call.png" alt="step-one" title="step-one">
                                       <div class="process-num">
                                           <span class="number">1</span>
                                       </div>
                                   </div>
                                   <div class="featured-content">
                                         <div class="featured-title"><h5 class="tasis-byekan">تماس با  2470</h5><h4 class="tasis-byekan"></h4></div>
                                       <div class="ttm-box-description">جهت ثبت درخواست و دریافت اطلاعات تماس توسط الوتسیس </div>
                                   </div>
                               </div>
                               <div class="ttm-processbox text-center">
                                   <div class="ttm-box-image">
                                       <img class="img-fluid lazyload" data-src="images/choose.jpg" alt="step-two" title="step-two">
                                       <div class="process-num">
                                           <span class="number">2</span>
                                       </div>
                                   </div>
                                   <div class="featured-content">
                                       <div class="featured-title"><h5>تعیین و اعزام تکنسین</h5></div>
                                       <div class="ttm-box-description">الوتسیس، نزدیک ترین تکنسین خودرا به سمت شما اعزام میکند.</div>
                                   </div>
                               </div>
                               <div class="ttm-processbox text-center">
                                   <div class="ttm-box-image">
                                       <img class="img-fluid lazyload" data-src="images/ezambg.jpg" alt="step-three" title="step-three">
                                       <div class="process-num">
                                           <span class="number">3</span>
                                       </div>
                                   </div>
                                   <div class="featured-content">
                                       <div class="featured-title"><h5>انجام کار</h5></div>
                                       <div class="ttm-box-description"> تکنسین هر گونه خرابی را تشخیص و در زمان کوتاه رفع میکند.</div>
                                   </div>
                               </div>
                               <div class="ttm-processbox text-center">
                                   <div class="ttm-box-image">
                                       <img class="img-fluid lazyload card" data-src="images/like.jpg" alt="step-four" title="step-four">
                                       <div class="process-num">
                                           <span class="number">4</span>
                                       </div>
                                   </div>
                                   <div class="featured-content">
                                       <div class="featured-title"><h5>کار تمام شد</h5></div>
                                       <div class="ttm-box-description">از سایر خدمات الوتسیس لذت ببرید.</div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div><!-- row end -->
               </div>
           </section>

       </div><!--site-main end-->

<script>
    //map//Set up some of our variables.
    var map; //Will contain map object.
    var marker = false; ////Has the user plotted their location marker?

    //Function called to initialize / create the map.
    //This is called when the page has loaded.
    function initMap() {

        //The center location of our map.
        var centerOfMap = new google.maps.LatLng('35.6969331', '51.2796073');

        //Map options.
        var options = {
            center: centerOfMap, //Set center.
            zoom: 15 //The zoom value.
        };

        //Create the map object.
        map = new google.maps.Map(document.getElementById('map'), options);

        //Listen for any clicks on the map.
        google.maps.event.addListener(map, 'click', function(event) {
            //Get the location that the user clicked.
            var clickedLocation = event.latLng;
            //If the marker hasn't been added.
            if(marker === false){
                //Create the marker.
                marker = new google.maps.Marker({
                    position: clickedLocation,
                    map: map,
                    draggable: true //make it draggable
                });
                //Listen for drag events!
                google.maps.event.addListener(marker, 'dragend', function(event){
                    markerLocation();
                });
            } else{
                //Marker has already been added, so just change its location.
                marker.setPosition(clickedLocation);
            }
            //Get the marker's location.
            markerLocation();
        });
    }

    //This function will get the marker's current location and then add the lat/long
    //values to our textfields so that we can save the location.
    function markerLocation(){
        //Get location.
        var currentLocation = marker.getPosition();
        //Add lat and lng values to a field that we can save.
        document.getElementById('lat').value = currentLocation.lat(); //latitude
        document.getElementById('lng').value = currentLocation.lng(); //longitude
    }


    //Load the map when the page has finished loading.
    google.maps.event.addDomListener(window, 'load', initMap);

</script>
       @endsection
