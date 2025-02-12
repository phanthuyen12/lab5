@extends('client/layout/layout')
@section('content')
<main>
        <!-- page-banner-area-start -->
        <div class="page-banner-area page-banner-height-2" data-background="{{asset('images/page-banner-4.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-banner-content text-center">
                            <h4 class="breadcrumb-title">Giỏ Hàng</h4>
                            <div class="breadcrumb-two">
                                <nav>
                                   <nav class="breadcrumb-trail breadcrumbs">
                                      <ul class="breadcrumb-menu">
                                         <li class="breadcrumb-trail">
                                            <a href="index.html"><span>Trang Chủ</span></a>
                                         </li>
                                         <li class="trail-item">
                                            <span>Giỏ Hàng</span>
                                         </li>
                                      </ul>
                                   </nav> 
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-banner-area-end -->

        <!-- cart-area-start -->
        <section class="cart-area pt-120 pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                        <form action="#">
                           <div class="table-content table-responsive">
                              <table class="table">
                                    <thead>
                                       <tr>
                                          <th class="product-thumbnail">Hình</th>
                                          <th class="cart-product-name">Tên Sản Phẩm</th>
                                          <th class="product-price">Giá Sản Phẩm</th>
                                          <th class="product-quantity">Số Lượng</th>
                                          <th class="product-subtotal">Tổng Tiền</th>
                                          <th class="product-remove">Thao Tác</th>
                                       </tr>
                                    </thead>
                                    <tbody id ="cart_content">
                         


                                     
                                      
                                    </tbody>
                              </table>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                    <div class="coupon-all">
                                       <div class="coupon">
                                          <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                          <button class="tp-btn-h1" name="apply_coupon" type="submit">Apply
                                                coupon</button>
                                       </div>
                                       <div class="coupon2">
                                          <button class="tp-btn-h1" name="update_cart" id = "update_cart" type="submit">Cập Nhật Giỏ Hàng</button>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="row justify-content-end">
                              <div class="col-md-5">
                                    <div class="cart-page-total">
                                       <h2>Tổng Tiền</h2>
                                       <ul class="mb-20">
                                          <li>Tổng tiền <span id ="subtotal_product">0</span></li>
                                       </ul>
                                       <a class="tp-btn-h1" href="/checkout">Thanh Toán</a>
                                    </div>
                              </div>
                           </div>
                        </form>
                  </div>
               </div>
            </div>
         </section>
         <!-- cart-area-end -->

        <!-- cta-area-start -->
        <section class="cta-area d-ldark-bg pt-55 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="cta-item cta-item-d mb-30">
                            <h5 class="cta-title">Follow Us</h5>
                            <p>We make consolidating, marketing and tracking your social media website easy.</p>
                            <div class="cta-social">
                                <div class="social-icon">
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                                    <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="rss"><i class="fas fa-rss"></i></a>
                                    <a href="#" class="dribbble"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cta-item mb-30">
                            <h5 class="cta-title">Sign Up To Newsletter</h5>
                            <p>Join 60.000+ subscribers and get a new discount coupon  on every Saturday.</p>
                            <div class="subscribe__form">
                                <form action="#">
                                    <input type="email" placeholder="Enter your email here...">
                                    <button>subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cta-item mb-30">
                            <h5 class="cta-title">Download App</h5>
                            <p>DukaMarket App is now available on App Store & Google Play. Get it now.</p>
                            <div class="cta-apps">
                                <div class="apps-store">
                                    <a href="#"><img src="assets/img/brand/app_ios.png" alt=""></a>
                                    <a href="#"><img src="assets/img/brand/app_android.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- cta-area-end -->

    </main>
    

    <script src="{{ asset('client/thaotac/cart.js') }}"></script>

@endsection