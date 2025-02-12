@extends('client/layout/layout')
@section('content')
<main>
@if (isset($user))  
        <input type="hidden" name="user_id" id = "user_id" value="{{$user->user_id}}">
        <!-- page-banner-area-start -->
        <div class="page-banner-area page-banner-height-2" data-background="{{asset('images/page-banner-4.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-banner-content text-center">
                            <h4 class="breadcrumb-title">Lịch sử mua hàng</h4>
                            <div class="breadcrumb-two">
                                <nav>
                                   <nav class="breadcrumb-trail breadcrumbs">
                                      <ul class="breadcrumb-menu">
                                         <li class="breadcrumb-trail">
                                            <a href="index.html"><span>Trang Chủ</span></a>
                                         </li>
                                         <li class="trail-item">
                                            <span>Lịch sử mua hàng</span>
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
                                          <th class="product-thumbnail">Thời Gian</th>
                                          <th class="cart-product-name">Trạng Thái</th>
                                          <th class="product-price">email</th>
                                          <th>phone</th>
                                          <th>địa điểm</th>
                                          <th>tên sản phẩm</th>
                                          <th>số lượng</th>
                                          <th>Tiền</th>
                                          
                                       </tr>
                                    </thead>
                                    <tbody id ="history_content">
                         

                                    <tr>
                                        <td>thuyen</td>
                                        <td>thuyen</td>
     
                                        <td>
                                           
                                    </td>
                                    </tr>
                                     
                                      
                                    </tbody>
                              </table>
                           </div>
                         
                           
                        </form>
                  </div>
               </div>
            </div>
         </section>
         <!-- cart-area-end -->
         @else
            <div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true" style="padding-right: 0px; display: block;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bạn chưa đăng nhập. Vui lòng đăng nhập để tiếp tục.
                        </div>
                        <div class="modal-footer">
                            <a href="/index" class="btn btn-secondary" data-dismiss="modal">Đóng</a>
                            <a href="{{ route('client.get_login') }}" class="btn btn-primary">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>      
            
            @endif
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
    

    <script src="{{ asset('client/thaotac/history.js') }}"></script>

@endsection