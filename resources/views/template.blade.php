<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/icon/travello.png">
    <title>Travello.</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travello template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css"> 
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">   
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
                            <div class="logo"><a href="index.html">Travello.</a></div>
                            <nav class="main_nav">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li class="active"><a href="#">Beranda</a></li>
                                    <li><a href="#rekomendasi">Rekomendasi</a></li>
                                    <li><a href="#review">Review</a></li>
                                    <li><a href="#tips">table</a></li>
                                    <li><a href="#testimoni">Testimoni</a></li>
                                    <li><a href="#">Tentang</a></li>
                                </ul>
                            </nav>

                            <!-- Hamburger -->

                            <div class="hamburger ml-auto">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu">
        <div class="menu_header d-flex flex-row align-items-center justify-content-start">
            <div class="menu_logo"><a href="index.html">Travello.</a></div>
            <div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
        </div>
        <div class="menu_content">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#rekomendasi">Rekomendasi</a></li>
                <li><a href="#review">Review</a></li>
                <li><a href="#tips">Tips</a></li>
                <li><a href="#testimoni">Testimoni</a></li>
                <li><a href="#">Tentang</a></li>
            </ul>
        </div>
    </div>
    
    <!-- Home -->

    <div class="home">
        
        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                
                <!-- Slide Pantai -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/Slider1.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content">
                                        <div class="home_title"><h2>Mari Kita Menikmati Indahnya Pantai</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Gunung -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/Slider2.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content">
                                        <div class="home_title"><h2>Mari Kita Menjelajah Gunung</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Air Terjun -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/Slider3.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content">
                                        <div class="home_title"><h2>Banyak Air Terjun Yang Indah</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Sejarah -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/Slider4.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content">
                                        <div class="home_title"><h2 style="text-shadow: 2px 3px 1px black;">Berbagai Tempat Bersejarah Yang Menjadi Saksi</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Kategori -->

    <div class="kategori">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="kategori_container">
                        <div class="judul_kategori">Tentukan Destinasi Wisatamu</div>
                        <div class="content_kategori">
                            <form action="#" class="home_search_form" id="home_search_form">
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <a href="#"><div class="kategori_button" style="text-align: center; padding: 14px;">PANTAI</div></a>
                                    <a href="#"><div class="kategori_button" style="text-align: center; padding: 14px;">GUNUNG</div></a>
                                    <a href="#"><div class="kategori_button" style="text-align: center; padding: 14px;">AIR TERJUN</div></a>
                                    <a href="#"><div class="kategori_button" style="text-align: center; padding: 14px;">TEMPAT BERSEJARAH</div></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rekomendasi -->

    <div class="rekomendasi" id="rekomendasi">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="judul_rekomendasi"><h2>Rekomendasi Dari Kami</h2></div>
                </div>
            </div>
            <div class="row rekomendasi_row">
                <div class="col">
                    <div class="container_rekomendasi item_grid">

                        <!-- Rekomendasi 1 -->
                        <div class="destination item">
                            <div class="rekomendasi_image">
                                <img src="images/Pantai/Ngliyep.jpg" alt="">
                            </div>
                            <div>
                                <div class="destination_title" align="center"><a href="Pantai/ngliyep.html">Pantai Ngliyep</a></div>
                                <div class="destination_subtitle" align="center"><p>Pantai Indah Di Malang Selatan</p></div>
                            </div>
                        </div>

                        <!-- Rekomendasi 2 -->
                        <div class="destination item">
                            <div class="rekomendasi_image">
                                <img src="images/Gunung/semeru.jpg" alt="">
                            </div>
                            <div>
                                <div class="destination_title" align="center"><a href="Gunung/semeru.html">Gunung Semeru</a></div>
                                <div class="destination_subtitle" align="center"><p>Gunung Tertinggi Di Pulau Jawa</p></div>
                            </div>
                        </div>

                        <!-- Rekomendasi 3 -->
                        <div class="destination item">
                            <div class="rekomendasi_image">
                                <img src="images/Gunung/bromo.jpg" alt="">
                            </div>
                            <div>
                                <div class="destination_title" align="center"><a href="Gunung/bromo.html">Gunung Bromo</a></div>
                                <div class="destination_subtitle" align="center"><p>Gunung yang mempunyai Lautan Pasir</p></div>
                            </div>
                        </div>

                        <!-- Rekomendasi 4 -->
                        <div class="destination item">
                            <div class="rekomendasi_image">
                                <img src="images/Coban/rais.jpg" alt="">
                            </div>
                            <div>
                                <div class="destination_title" align="center"><a href="Coban/rais.html">Air Terjun Coban Rais</a></div>
                                <div class="destination_subtitle" align="center"><p>Air terjun eksotis yang masih terjaga keasriannya</p></div>
                            </div>
                        </div>

                        <!-- Rekomendasi 5 -->
                        <div class="destination item">
                            <div class="rekomendasi_image">
                                <img src="images/Sejarah/jago.jpg" alt="">
                            </div>
                            <div>
                                <div class="destination_title" align="center"><a href="Sejarah/jago.html">Candi Jago</a></div>
                                <div class="destination_subtitle" align="center"><p>Candi yang mengisahkan tentang Perpisahan</p></div>
                            </div>
                        </div>

                        <!-- Rekomendasi 6 -->
                        <div class="destination item">
                            <div class="rekomendasi_image">
                                <img src="images/Pantai/balekambang.jpg" alt="">
                            </div>
                            <div>
                                <div class="destination_title" align="center"><a href="Pantai/balekambang.html">Pantai Balekambang</a></div>
                                <div class="destination_subtitle" align="center"><p>Dengan Adanya Pura Amerta Jati, Pantai ini semakin Memanjakan Mata</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Review -->

    <div class="testimonials" id="review">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.5"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title"><h2>Review</h2></div>
                    <div class="section_subtitle">Review yang kami dapatkan dari beberapa akun Instagram</div>
                </div>
            </div>
            <div class="row testimonials_row">
                <div class="col">

                    <!-- Testimonials Slider -->
                    <div class="testimonials_slider_container">
                        <div class="owl-carousel owl-theme testimonials_slider">
                            
                            <!-- Slide -->
                            <div class="owl-item text-center">
                                <div class="testimonial">Pantai Goa Pathuk</div>
                                <div class="testimonial_author">
                                    <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BwijiOgFJbR/" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/BwijiOgFJbR/" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BwijiOgFJbR/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh Malang (@amazingmalang)</a> pada <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2019-04-22T01:47:51+00:00">21 Apr 2019 jam 6:47 PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item text-center">
                                <div class="testimonial">Gunung Bromo</div>
                                <div class="testimonial_author">
                                    <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BuuqULKFuVq/" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/BuuqULKFuVq/" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BuuqULKFuVq/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh Malang (@amazingmalang)</a> pada <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2019-03-08T01:35:12+00:00">7 Mar 2019 jam 5:35 PST</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item text-center">
                                <div class="testimonial">Air Terjun Tumpak Sewu</div>
                                <div class="testimonial_author">
                                    <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BwfU2P6gGR_/" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/BwfU2P6gGR_/" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BwfU2P6gGR_/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh Jose Mostajo (@josemostajo)</a> pada <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2019-04-20T19:41:47+00:00">20 Apr 2019 jam 12:41 PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item text-center">
                                <div class="testimonial">Pantai Regent</div>
                                <div class="testimonial_author">
                                    <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BwlQKtWl0nv/" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/BwlQKtWl0nv/" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BwlQKtWl0nv/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh Malang (@amazingmalang)</a> pada <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2019-04-23T03:02:02+00:00">22 Apr 2019 jam 8:02 PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item text-center">
                                <div class="testimonial">Air Terjun Coban Jodo</div>
                                <div class="testimonial_author">
                                    <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BrB6CtAFbpy/" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/BrB6CtAFbpy/" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BrB6CtAFbpy/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh Malang (@amazingmalang)</a> pada <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-12-06T02:52:37+00:00">5 Des 2018 jam 6:52 PST</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News -->

    <div class="news" id="tips">
        <div class="container">
            <div class="row">
                


@yield('main')


                <!-- News Sidebar -->
                <div class="col-xl-4">
                    <div class="travello">
                        <div class="background_image" style="background-image:url(images/sidebar.jpg)"></div>
                        <div class="travello_content">
                            <div class="travello_content_inner">
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="travello_container">
                            <div class="d-flex flex-column align-items-center justify-content-end">
                                <span class="travello_title" style="border: 3px solid black; padding: 3%; margin-top: 117%;">Libur Tenang, Hatipun Senang</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->

    <div class="testimonials" id="testimoni">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.5"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title"><h2>Testimonials</h2></div>
                    <div class="section_subtitle"></div>
                </div>
            </div>
            <div class="row testimonials_row">
                <div class="col">

                    <!-- Testimonials Slider -->
                    <div class="testimonials_slider_container">
                        <div class="owl-carousel owl-theme testimonials_slider">
                            
                            <!-- Slide -->
                            <div class="owl-item text-center">
                                <div class="testimonial"><p align="justify" style="border: 1px solid white; font-size: 16px; padding: 1%; color: white;">Seneng kalau mantai... tapi lelah diperjalanan.. jauh sekali dari rumah. Kalau jauh mending nginep saja dipenginapan. Hrganya juga gak mahal. Ada satu tanjakan yg bikin deg2 ser.. namanya jurang mayit. Sekarang lebih bagus dari pada dulu.. sekarang ada beberapa spot selfi yg boleh dicoba. Soal makanan bnyak menu, rasa dan hrga juga gak mahal. Paling enak minum kelapa mudanya disini. 👍👍👍</p></div>
                                <div class="testimonial_author">
                                    <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                        ARISTA FITRIA, 15 Maret 2019
                                    </div>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item text-center">
                                <div class="testimonial"><p align="justify" style="border: 1px solid white; font-size: 16px; padding: 1%; color: white;">Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru. Kita dapat menuju akses ke Bukit Cinta maupun Bukit Kingkong dengan menggunakan sewa jeep Hardtop, dan di bukit disediakan amphiteater agar dapat menikmati sunrise, untuk melihat sunrise kita harus berangkat dari hotel jam 02.00 dan sunrise terbit mulai jam 04.30. Harus memakai jaket tebal, syal dan topi wol yg tebal karena suhu udara mencapai 12°C. Setelah dari Bukit Cinta/Kingkong kita menuju ke padang savana dimana di padang savana disewakan kuda (ongkos Rp.150 rb, PP) untuk menuju kawah Bromo yang berada diatas puncak Gunung Bromo. Kita dapat mengabadikan moment dengan latar belakang Kuda, Jeep Hardtop, padang pasir dan alam gunung bromo yang sangat indah.</p></div>
                                <div class="testimonial_author">
                                    <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                        Hanggoro Laras Sakti, 29 Maret 2019
                                    </div>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="owl-item text-center">
                                <div class="testimonial"><p align="justify" style="border: 1px solid white; font-size: 16px; padding: 1%; color: white;">Menantang,  air terjun cukup tinggi... Trek pejalan kaki memicu adrenalin saat musim penghujan..sangat licin krn sebagian jalur sdh dipaving tanpa trap sebagian msh tanah dan enak n nggak nya ada ojek mtr yg bs mengantar ke lokasi pp.. Otomatis bagi pejalan kaki saat ke lokasi air terjun n plgnya bs berpapasan dg mereka..  Siapkan fisik, pakai sepatu kets bertali /slip on sol karet dan kembangan dalam.. Hati hati selalu & Semoga selamat dn sukses..😊</p></div>
                                <div class="testimonial_author">
                                    <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                        Florensius Sukmowibowo, 29 Maret 2019
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer_1.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row footer_contact_row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="row">

                        <!-- Footer Contact Item -->
                        <div class="col-xl-4 footer_contact_col">
                            <div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                <div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
                                <div class="footer_contact_title">Hubungi Kami</div>
                                <div class="footer_contact_list">
                                    <ul>
                                        <li>Telepon: (0341) 6599990</li>
                                        <li>HP: +62 8961 2625 259</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Contact Item -->
                        <div class="col-xl-4 footer_contact_col">
                            <div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                <div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
                                <div class="footer_contact_title">Alamat</div>
                                <div class="footer_contact_list">
                                    <ul style="max-width:190px">
                                        <li>Jalan Veteran 17, Lowokwaru, ID 32771</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Contact Item -->
                        <div class="col-xl-4 footer_contact_col">
                            <div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                <div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
                                <div class="footer_contact_title">Email </div>
                                <div class="footer_contact_list">
                                    <ul>
                                        <li>bagasfa110@gmail.com</li>
                                        <li>office@travello.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
        </div>
    </footer>
</div>

<a href="#" title="Back To Top"><div class="float-up">^</div></a>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>