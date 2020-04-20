@extends('master')

@section('content')



        <!-- page-title -->
        <div class="ttm-page-title-row" style="background-image: url(../images/00.jpg)!important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-box text-center">
                            <div class="page-title-heading">
                                <h1 class="title text-light">تماس باما</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                    <span class="text-light">تماس باما</span>
                                <span class="ttm-bread-sep text-light">&nbsp; / &nbsp;</span>
                                <a class="text-light" title="Homepage" href="index.html"><i class="ti ti-home"></i>&nbsp;&nbsp;صفحه اصلی</a>
                            </span>

                            </div>
                        </div>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- page-title end-->

        <!-- services-slide-section -->
              <section class="ttm-row contact-section clearfix">
                  <div class="container">
                      <div class="row"><!-- row -->
                          <div class="col-lg-8 offset-lg-2">
                              <!-- section-title -->
                              <div class="section-title with-desc text-center clearfix">
                                  <div class="title-header">
                                      <h5>باما در تماس باشید</h5>
                                      <h2 class="title">فرم تماس</h2>
                                  </div>
                              </div><!-- section-title end -->
                          </div>
                      </div>
                      <!-- row end -->
                      <!-- row -->
                      <form id="ttm-quote-form" class="row ttm-quote-form clearfix" method="post" action="#">
                          <div class="col-sm-6 col-md-4">
                              <div class="form-group">
                                  <input name="name" type="text" class="form-control bg-white border" placeholder="نام و نام خانوادگی*" required="required">
                              </div>
                          </div>
                          <div class="col-sm-6 col-md-4">
                              <div class="form-group">
                                  <input name="phone" type="text" placeholder="شماره تماس*" required="required" class="form-control bg-white border">
                              </div>
                          </div>
                          <div class="col-sm-12 col-md-4">
                              <div class="form-group">
                                  <input name="address" type="text" placeholder="ایمیل*" required="required" class="form-control bg-white border">
                              </div>
                          </div>
                          <div class="col-sm-12 col-md-12">
                              <div class="form-group">
                                  <textarea name="Massage" rows="5" placeholder="پیام خود را وارد کنید..." required="required" class="form-control bg-white border"></textarea>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="text-center">
                                  <button type="submit" id="submit" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor mt-20" value="">
                                    ارسال پیام
                                  </button>
                              </div>
                          </div>
                      </form>
                      <!-- row end-->
                  </div>
              </section>
              <!-- services-slide-section end -->

              <!-- map-section -->
              <div class="ttm-row contact-box-section ttm-bgcolor-grey clearfix">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-4">
                              <!-- featured-icon-box -->
                              <div class="featured-icon-box style8 text-center box-shadow">
                                  <div class="featured-icon"><!-- featured-icon-->
                                      <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-bgcolor-white ttm-icon_element-size-md ttm-icon_element-style-round">
                                          <i class="fa fa-envelope-o"></i>
                                      </div>
                                  </div><!-- featured-icon -->
                                  <div class="featured-content"><!-- featured-content -->
                                      <div class="featured-title">
                                          <h5>ایمیل</h5><!-- featured-title -->
                                      </div>
                                      <div class="featured-desc"><!-- featured-description -->
                                          <p>
                                              <a href="mailto:Info@Tassis.Ir">Info@Tassis.Ir</a><br>
                                          </p>
                                      </div>
                                  </div><!-- featured-content END-->
                              </div><!-- featured-icon-box -->
                          </div>
                          <div class="col-lg-4">
                              <!-- featured-icon-box -->
                              <div class="featured-icon-box style8 text-center box-shadow">
                                  <div class="featured-icon"><!-- featured-icon-->
                                      <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-bgcolor-white ttm-icon_element-size-md ttm-icon_element-style-round">
                                          <i class="ti ti-target"></i>
                                      </div>
                                  </div><!-- featured-icon -->
                                  <div class="featured-content"><!-- featured-content -->
                                      <div class="featured-title">
                                          <h5>نشانی</h5><!-- featured-title -->
                                      </div>
                                      <div class="featured-desc"><!-- featured-description -->
                                          <p>
                                              آدرس: تهران، ملاصدرا، ابتدای شیراز ، نبش بن بست کاج
                                          </p>
                                      </div>
                                  </div><!-- featured-content END-->
                              </div><!-- featured-icon-box -->
                          </div>
                          <div class="col-lg-4">
                              <!-- featured-icon-box -->
                              <div class="featured-icon-box style8 text-center box-shadow">
                                  <div class="featured-icon"><!-- featured-icon-->
                                      <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-bgcolor-white ttm-icon_element-size-md ttm-icon_element-style-round">
                                          <i class="fa fa-phone"></i>
                                      </div>
                                  </div><!-- featured-icon -->
                                  <div class="featured-content"><!-- featured-content -->
                                      <div class="featured-title">
                                          <h5>شماره تماس</h5><!-- featured-title -->
                                      </div>
                                      <div class="featured-desc"><!-- featured-description -->
                                          <p>
                                               88030042/88060324
                                          </p>
                                      </div>
                                  </div><!-- featured-content END-->
                              </div><!-- featured-icon-box -->
                          </div>

                      </div>
                  </div>
              </div>
              <!-- map-section end -->

              <!-- map-section -->
              <div class="ttm-row map-section clearfix">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-md-12">
                              <!--map-start-->
                              <div class="map-wrapper">
                                  <div id="map_canvas"></div>
                              </div>
                              <!--map-end-->
                          </div>
                      </div>
                  </div>
              </div>
              <!-- map-section end -->
            <!-- services-slide-section end -->

        </div><!--site-main end-->
        @endsection
