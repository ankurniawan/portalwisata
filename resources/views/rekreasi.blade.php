@extends('layout/main')

@section('title','Portal Wisata Sleman by Firewall.Co')

@section('container')
<div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#firewallfood-nav" aria-controls="firewallfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="firewallfood-nav">
                            <ul class="navbar-nav" id="firewall-nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="/">Home  </a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="/sejarah">Sejarah</a>
                                </li>
                                <li class="nav-item  ">
                                    <a class="nav-link" href="/kuliner">Kuliner </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/rekreasi">Rekreasi <span class="sr-only">(current)</span></a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="/maps">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    <!-- ****** Breadcumb Area Start ****** -->
    <div class="breadcumb-area" style="background-image: url(image/bg2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Rekreasi</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rekreasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->

    <!-- ****** Archive Area Start ****** -->
    <section class="archive-area section_padding_80">
        <div class="container">
            <div class="row">


                

                <!-- Single Post -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="image/sidebar/sindukusuma.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-meta d-flex">
                                <div class="post-author-date-area d-flex">
                                    <!-- Post Author -->
                                    <div class="post-author">
                                        <a href="#">By Marian</a>
                                    </div>
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">May 19, 2019</a>
                                    </div>
                                </div>
                                <!-- Post Comment & Share Area -->
                                <div class="post-comment-share-area d-flex">
                                    <!-- Post Favourite -->
                                    <div class="post-favourite">
                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                    </div>
                                    <!-- Post Comments -->
                                    <div class="post-comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                    </div>
                                    <!-- Post Share -->
                                    <div class="post-share">
                                        <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="/sindukusuma">
                                <h4 class="post-headline">Menikmati weekend bersama keluarga di Sindukusuma </h4>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Post -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="image/kembangarum.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-meta d-flex">
                                <div class="post-author-date-area d-flex">
                                    <!-- Post Author -->
                                    <div class="post-author">
                                        <a href="#">By Marian</a>
                                    </div>
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">May 19, 2019</a>
                                    </div>
                                </div>
                                <!-- Post Comment & Share Area -->
                                <div class="post-comment-share-area d-flex">
                                    <!-- Post Favourite -->
                                    <div class="post-favourite">
                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                    </div>
                                    <!-- Post Comments -->
                                    <div class="post-comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                    </div>
                                    <!-- Post Share -->
                                    <div class="post-share">
                                        <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="/kembang">
                                <h4 class="post-headline">melihat keindahan alam di kembang arum</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Post -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="image/jogjabay.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-meta d-flex">
                                <div class="post-author-date-area d-flex">
                                    <!-- Post Author -->
                                    <div class="post-author">
                                        <a href="#">By umar</a>
                                    </div>
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">november 1, 2019</a>
                                    </div>
                                </div>
                                <!-- Post Comment & Share Area -->
                                <div class="post-comment-share-area d-flex">
                                    <!-- Post Favourite -->
                                    <div class="post-favourite">
                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                    </div>
                                    <!-- Post Comments -->
                                    <div class="post-comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                    </div>
                                    <!-- Post Share -->
                                    <div class="post-share">
                                        <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="/jogjabay">
                                <h4 class="post-headline">pengan seru seruan bermain air, Jogjabay</h4>
                            </a>
                        </div>
                    </div>
                </div>

                
                <!-- Single Post -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post wow fadeInUp" data-wow-delay="0.7s">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="image/blue.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-meta d-flex">
                                <div class="post-author-date-area d-flex">
                                    <!-- Post Author -->
                                    <div class="post-author">
                                        <a href="#">By anto</a>
                                    </div>
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">oktober 19, 2019</a>
                                    </div>
                                </div>
                                <!-- Post Comment & Share Area -->
                                <div class="post-comment-share-area d-flex">
                                    <!-- Post Favourite -->
                                    <div class="post-favourite">
                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                    </div>
                                    <!-- Post Comments -->
                                    <div class="post-comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                    </div>
                                    <!-- Post Share -->
                                    <div class="post-share">
                                        <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="/bluelagoon">
                                <h4 class="post-headline">Blue Lagoon</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Post -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="image/kedungkuning.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-meta d-flex">
                                <div class="post-author-date-area d-flex">
                                    <!-- Post Author -->
                                    <div class="post-author">
                                        <a href="#">By alex</a>
                                    </div>
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">oktober 19, 2019</a>
                                    </div>
                                </div>
                                <!-- Post Comment & Share Area -->
                                <div class="post-comment-share-area d-flex">
                                    <!-- Post Favourite -->
                                    <div class="post-favourite">
                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                    </div>
                                    <!-- Post Comments -->
                                    <div class="post-comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                    </div>
                                    <!-- Post Share -->
                                    <div class="post-share">
                                        <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <h4 class="post-headline">wisata kedung kuning</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Post -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post wow fadeInUp" data-wow-delay="0.9s">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="image/desa1.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-meta d-flex">
                                <div class="post-author-date-area d-flex">
                                    <!-- Post Author -->
                                    <div class="post-author">
                                        <a href="#">By vany</a>
                                    </div>
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">september 31, 2019</a>
                                    </div>
                                </div>
                                <!-- Post Comment & Share Area -->
                                <div class="post-comment-share-area d-flex">
                                    <!-- Post Favourite -->
                                    <div class="post-favourite">
                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                    </div>
                                    <!-- Post Comments -->
                                    <div class="post-comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                    </div>
                                    <!-- Post Share -->
                                    <div class="post-share">
                                        <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <h4 class="post-headline">Desa Sleman</h4>
                            </a>
                        </div>
                    </div>
                </div>

               

               

               

                

            </div>
        </div>
    </section>
    <!-- ****** Archive Area End ****** -->

    <!-- ****** Instagram Area Start ****** -->
    <div class="instargram_area owl-carousel section_padding_100_0 clearfix" id="portfolio">

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- bottom image -->
    <img src="image/instagram/2.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- bottom image -->
    <img src="image/instagram/walpaper.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- bottom image -->
    <img src="image/instagram/prambanan.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- bottom image-->
    <img src="image/instagram/rosella.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- buttom image -->
    <img src="image/instagram/walpaper.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- bottom image -->
    <img src="image/instagram/2.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- bottom image -->
    <img src="image/instagram/walpaper.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom image -->
<div class="instagram_gallery_item">
    <!-- bottom image -->
    <img src="image/instagram/prambanan.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

   
    <!-- ****** Footer Social Icon Area End ****** -->

    <!-- ****** Footer Menu Area Start ****** -->
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content">
                        <!-- Logo Area Start -->
                        <div class="footer-logo-area text-center">
                            <a href="index.html" class="firewall-logo">Portal Wisata Sleman</a>
                        </div>
                        <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#firewallfood-nav" aria-controls="firewallfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="firewallfood-nav">
                            <ul class="navbar-nav" id="firewall-nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="/">Home  </a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="/sejarah">Sejarah</a>
                                </li>
                                <li class="nav-item  ">
                                    <a class="nav-link" href="/kuliner">Kuliner </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/rekreasi">Rekreasi <span class="sr-only">(current)</span></a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="/maps">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
                        <!-- Menu Area Start -->
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#firewallfood-footer-nav" aria-controls="firewallfood-footer-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                          <!-- Menu Area Start -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copy_right_text text-center">
                        <p>Copyright @2018 All rights reserved<i class="fa fa-heart-o" aria-hidden="true"></i>  <a href="#" target="_blank"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Menu Area End ****** -->
@endsection


