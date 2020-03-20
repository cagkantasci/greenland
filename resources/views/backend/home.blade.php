@extends('front/layouts/master')
@section('content')


    <section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix" style="height: 550px;" data-loop="true">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('{{asset('front')}}/demos/construction/images/slider/2.jpg'); background-position: center top;">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2>Greenland'a Hoşgeldiniz</h2>
                            <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores enim reprehenderit illum voluptas sit sed molestias temporibus hic, eligendi officiis nulla esse labore id tempore porro veniam, eaque, placeat suscipit.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-right">
                            <h2>Rulman Çözümlerimiz</h2>
                            <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dolorem molestiae dignissimos doloremque alias dolores quis eaque, modi ipsum. Alias neque quae excepturi odio qui voluptatum. Quidem porro assumenda sed?</p>
                        </div>
                    </div>
                    <div class="video-wrap">
                        <video id="slide-video" poster="{{asset('front')}}/demos/construction/images/videos/1.jpg" preload="auto" loop autoplay muted>
                            <source src='{{asset('front')}}/demos/construction/images/videos/1.webm' type='video/webm' />
                            <source src='{{asset('front')}}/demos/construction/images/videos/1.mp4' type='video/mp4' />
                        </video>
                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('{{asset('front')}}/demos/construction/images/slider/1.jpg'); background-position: center bottom;">
                    <div class="container clearfix">
                        <div  class="slider-caption">
                            <h2>Kaliteli Malzemeler</h2>
                            <p class="d-none d-sm-block">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi facere amet modi libero magnam illum, maxime expedita unde facilis ut quibusdam ipsa, debitis dolore commodi similique! Omnis cumque voluptas in?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
        </div>

    </section>

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="promo promo-light promo-full uppercase bottommargin-lg header-stick">
                <div class="container clearfix">
                    <h3 style="letter-spacing: 2px;">Tüm Rulman, Pnomatik, Zincir ihtiyaçlarınız için</h3>
                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt natus qui explicabo amet rem? </span>
                    <a href="#" class="button button-large button-border button-rounded">İletişime geç</a>
                </div>
            </div>

            <div class="container clearfix">

                <div class="col_one_third nobottommargin">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img style="border-radius: 2px;" src="{{asset('front')}}/demos/construction/images/services/1.jpg" alt="Why choose Us?">
                        </div>
                        <div class="fbox-desc">
                            <h3>Uzun ömürlü donanım.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                        </div>
                    </div>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img style="border-radius: 2px;" src="{{asset('front')}}/images/services/1.jpg" alt="Effective Planning">
                        </div>
                        <div class="fbox-desc">
                            <h3>Dayanıklı ve Kaliteli.</h3>
                            <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse.</p>
                        </div>
                    </div>
                </div>

                <div class="col_one_third nobottommargin col_last">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img style="border-radius: 2px;" src="{{asset('front')}}/demos/construction/images/services/2.jpg" alt="Why choose Us?">
                        </div>
                        <div class="fbox-desc">
                            <h3>Tam Destek.</h3>
                            <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum quo.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- <div class="section parallax dark" style="background-image: url('{{asset('front')}}/demos/construction/{{asset('front')}}/images/slider/1.jpg'); padding: 120px 0;"  data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

                <div class="fslider testimonial testimonial-full" data-arrows="false" style="z-index: 2;">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="{{asset('front')}}/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Similique fugit repellendus expedita excepturi iure provident quia eaque. Repellendus, vero numquam?</p>
                                    <div class="testi-meta">
                                        Steve Jobs
                                        <span>Apple Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="{{asset('front')}}/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Collis Ta'eed
                                        <span>Envato Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="{{asset('front')}}/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                    <div class="testi-meta">
                                        John Doe
                                        <span>XYZ Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="video-wrap" style="z-index: 1;">
                    <div class="video-overlay" style="background: rgba(241,128,82,0.9);"></div>
                </div>

            </div> -->


            <div class="section bottommargin-lg">
                <h2 class="center nobottommargin ls1">Hizmetlerimizden Bazıları</h2>
            </div>


            <div class="container clearfix">

                <div class="clear-bottommargin">
                    <div class="row align-items-stretch clearfix">
                        <div class="col-lg-4 col-md-6 bottommargin">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><img src="{{asset('front')}}/demos/construction/images/icons/building.png" alt="Concrete Developments"></a>
                                </div>
                                <h3>Hizmet Başlığı</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 bottommargin">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><img src="{{asset('front')}}/demos/construction/images/icons/bank.png" alt="Finance Assistance"></a>
                                </div>
                                <h3>Hizmet Başlığı</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 bottommargin">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><img src="{{asset('front')}}/demos/construction/images/icons/drawer.png" alt="Interiorly Designed"></a>
                                </div>
                                <h3>Hizmet Başlığı</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 bottommargin">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><img src="{{asset('front')}}/demos/construction/images/icons/paper-money.png" alt="Cost Effective Solutions"></a>
                                </div>
                                <h3>Hizmet Başlığı</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 bottommargin">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><img src="{{asset('front')}}/demos/construction/images/icons/traffic-cone.png" alt="Smart Builders"></a>
                                </div>
                                <h3>Hizmet Başlığı</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 bottommargin">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><img src="{{asset('front')}}/demos/construction/images/icons/paint-brush.png" alt="Quality Infrastructure"></a>
                                </div>
                                <h3>Hizmet Başlığı</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="section nobottommargin">
                <h2 class="center nobottommargin ls1">Kullanım Alanları</h2>
            </div>
            <div id="portfolio" class="portfolio grid-container portfolio-full clearfix">

                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-image">
                        <img src="{{asset('front')}}/demos/construction/images/projects/1.jpg" alt="The Atmosphere">
                        <div class="portfolio-overlay">
                            <!-- <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a> -->
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="#">Sağlık Sektörü</a></h3>
                        <!-- <span>Chicago, USA</span> -->
                    </div>
                </article>

                <article class="portfolio-item pf-illustrations">
                    <div class="portfolio-image">
                        <img src="{{asset('front')}}/demos/construction/images/projects/2.jpg" alt="Wavelength Structure">
                        <div class="portfolio-overlay">
                            <!-- <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a> -->
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Oyun Sektörü</h3>
                        <!-- <span>Madrid, Spain</span> -->
                    </div>
                </article>

                <article class="portfolio-item pf-graphics pf-uielements">
                    <div class="portfolio-image">
                        <img src="{{asset('front')}}/demos/construction/images/projects/3.jpg" alt="Greenhouse Garden">
                        <div class="portfolio-overlay">
                            <!-- <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a> -->
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Uzay Sektörü</h3>
                        <!-- <span>Bali, Indonesia</span> -->
                    </div>
                </article>

                <article class="portfolio-item pf-icons pf-illustrations">
                    <div class="portfolio-image">
                        <img src="{{asset('front')}}/demos/construction/images/projects/4.jpg" alt="Industrial Hub">
                        <div class="portfolio-overlay">
                            <!-- <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a> -->
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>İnşaat Sektörü</h3>
                        <!-- <span>Beijing, China</span> -->
                    </div>
                </article>

                <article class="portfolio-item pf-uielements pf-media">
                    <div class="portfolio-image">
                        <img src="{{asset('front')}}/demos/construction/images/projects/5.jpg" alt="Corporate Headquarters">
                        <div class="portfolio-overlay">
                            <!-- <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a> -->
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Eğitim Sektörü</h3>
                        <!-- <span>California, USA</span> -->
                    </div>
                </article>

                <article class="portfolio-item pf-graphics pf-illustrations">
                    <div class="portfolio-image">
                        <img src="{{asset('front')}}/demos/construction/images/projects/6.jpg" alt="Space Station">
                        <div class="portfolio-overlay" data-lightbox="gallery">
                            <!-- <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a> -->
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>Otomotiv Sektörü</h3>
                        <!-- <span>Moscow, Russia</span> -->
                    </div>
                </article>

                <article class="portfolio-item pf-uielements pf-icons">
                    <div class="portfolio-image">
                        <img src="{{asset('front')}}/demos/construction/images/projects/7.jpg" alt="Bent Architecture">
                        <div class="portfolio-overlay">
                            <!-- <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a> -->
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>X Sektörü</h3>
                        <!-- <span>Melbourne, Australia</span> -->
                    </div>
                </article>

                <article class="portfolio-item pf-graphics">
                    <div class="portfolio-image">
                        <img src="{{asset('front')}}/demos/construction/images/projects/8.jpg" alt="Lakeview Center">
                        <div class="portfolio-overlay">
                            <!-- <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a> -->
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3>X Sektörü</h3>
                        <!-- <span>Auckland, New Zealand</span> -->
                    </div>
                </article>

            </div>


            <a href="#" class="button button-3d nobottomborder button-full center tright bottommargin-lg t300 font-primary" style="font-size: 26px;">
                <div class="container clearfix">
                    Tüm bu çözümlerimiz ile tanışmaya hazır mısınız?<strong>Hemen Arayın</strong> <i class="icon-angle-right" style="top:3px;"></i>
                </div>
            </a>

            <div class="container topmargin-lg cleafix">

                <div class="col_three_fourth">

                    <div class="tabs tabs-justify nobottommargin clearfix" id="construction-tabs">

                        <ul class="tab-nav clearfix">
                            <li><a href="#construction-tab-1">Neden Biz?</a></li>
                            <li><a href="#construction-tab-2">Takımımız</a></li>
                            <li><a href="#construction-tab-3">Çalışma Etiği</a></li>
                            <li><a href="#construction-tab-4">İletişim</a></li>
                        </ul>

                        <div class="tab-container">

                            <div class="tab-content clearfix" id="construction-tab-1">
                                <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.
                                <div class="col_one_fourth nobottommargin center">
                                    <div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="964" data-refresh-interval="50" data-speed="2000"></span></div>
                                    <h5>Rulman Satışı</h5>
                                </div>

                                <div class="col_one_fourth nobottommargin center">
                                    <div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="8514" data-refresh-interval="50" data-speed="2500"></span></div>
                                    <h5>Mutlu Müşteri</h5>
                                </div>

                                <div class="col_one_fourth nobottommargin center">
                                    <div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="458" data-refresh-interval="50" data-speed="3500"></span></div>
                                    <h5>Sipariş Formu</h5>
                                </div>

                                <div class="col_one_fourth nobottommargin center col_last">
                                    <div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="14" data-to="159" data-refresh-interval="15" data-speed="2700"></span></div>
                                    <h5>Hizmet Noktası</h5>
                                </div>
                            </div>
                            <div class="tab-content clearfix" id="construction-tab-2">
                                <img src="{{asset('front')}}/demos/construction/images/projects/3.jpg" width="260" alt="Image" class="img-thumbnail alignleft">
                                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                            </div>
                            <div class="tab-content clearfix" id="construction-tab-3">
                                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <ul class="iconlist nobottommargin">
                                            <li><i class="icon-ok"></i> 100% Assurance</li>
                                            <li><i class="icon-ok"></i> Hard Working</li>
                                            <li><i class="icon-ok"></i> Trustworthy</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="iconlist nobottommargin">
                                            <li><i class="icon-ok"></i> Intelligent</li>
                                            <li><i class="icon-ok"></i> Always Curious</li>
                                            <li><i class="icon-ok"></i> Perfectionists</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="iconlist nobottommargin">
                                            <li><i class="icon-ok"></i> Friendly &amp; Helpful</li>
                                            <li><i class="icon-ok"></i> Accomodating Nature</li>
                                            <li><i class="icon-ok"></i> Available 24x7</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content clearfix" id="construction-tab-4">

                                <div class="clear-bottommargin-sm">
                                    <div class="row clearfix">
                                        <div class="col-md-7 bottommargin-sm">
                                            <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
                                            <div class="clear-bottommargin-sm">
                                                <div class="row clearfix">
                                                    <div class="col-md-6 bottommargin-sm">
                                                        <address>
                                                            <strong>Merkez Ofis:</strong><br>
                                                            Adres Satırı<br>
                                                            Eskişehir Türkiye<br>
                                                        </address>
                                                    </div>
                                                    <div class="col-md-6 bottommargin-sm">
                                                        <abbr title="Phone Number"><i class="icon-phone"></i> <strong>Telefon: </strong></abbr> (91) 8547 632521<br>
                                                        <abbr title="Fax"><i class="icon-fax"></i> <strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                                        <abbr title="Email Address"><i class="icon-mail"></i> <strong>Email:</strong></abbr> info@canvas.com
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 bottommargin-sm">
                                            <img src="https://maps.googleapis.com/maps/api/staticmap?center=-37.814107,144.963280&zoom=12&markers=-37.814107,144.963280&size=300x180&key=AIzaSyCzkxzbEni5vR_Ugt1De8gBzrLX3236bnA" alt="Google Map" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col_one_fourth col_last">

                    <div class="widget quick-contact-widget form-widget clearfix">
                        <h4>Hızlı İletişim Formu</h4>
                        <div class="form-result"></div>
                        <form id="quick-contact-form" name="quick-contact-form" action="{{asset('front')}}/include/form.php" method="post" class="quick-contact-form nobottommargin">
                            <div class="form-process"></div>
                            <input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Adınız" />
                            <input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Adresi" />
                            <textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Mesajınız"></textarea>
                            <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                            <input type="hidden" name="prefix" value="quick-contact-form-">
                            <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Gönder</button>
                        </form>

                    </div>

                </div>

            </div>

            <div class="clearfix"></div>
            <div class="section bottommargin-lg">
                <h2 class="center nobottommargin ls1">Hizmetlerimizden Bazıları</h2>
            </div>

            <div class="container topmargin-lg cleafix">
                <div class="col_full">
                    <ul class="clients-grid grid-3 nobottommargin clearfix">
                        <li style="padding: 20px;"><a href="#"><img src="{{asset('front')}}/images/clients/1.png" alt="Clients"></a></li>
                        <li style="padding: 20px;"><a href="#"><img src="{{asset('front')}}/images/clients/2.png" alt="Clients"></a></li>
                        <li style="padding: 20px;"><a href="#"><img src="{{asset('front')}}/images/clients/3.png" alt="Clients"></a></li>
                        <li style="padding: 20px;"><a href="#"><img src="{{asset('front')}}/images/clients/4.png" alt="Clients"></a></li>
                        <li style="padding: 20px;"><a href="#"><img src="{{asset('front')}}/images/clients/5.png" alt="Clients"></a></li>
                        <li style="padding: 20px;"><a href="#"><img src="{{asset('front')}}/images/clients/6.png" alt="Clients"></a></li>
                    </ul>
                </div>



                <div class="line topmargin-sm"></div>


            </div>

    </section><!-- #content end -->

    @endsection

