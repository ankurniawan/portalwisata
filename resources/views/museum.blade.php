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
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="/sejarak">Sejarah</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/kuliner">Kuliner</a>
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
    <div class="breadcumb-area" style="background-image: url(image/museum.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Destinasi Sejarah</h2>
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
                            <li class="breadcrumb-item"><a href="#">Archive</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Destinasi Sejarah</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->

    <!-- ****** Single Blog Area Start ****** -->
    <section class="single_blog_area section_padding_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row no-gutters">

                        <!-- Single Post Share Info -->
                        <div class="col-2 col-sm-1">
                            <div class="single-post-share-info mt-100">
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="googleplus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-10 col-sm-11">
                            <div class="single-post">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="image/museum.jpg" alt="">
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
                                                <a href="#">May 19, 2017</a>
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
                                        <h2 class="post-headline">Museum Merapi</h2>
                                    </a>
                                    <p>Berdiri artistik dengan latar agungnya Gunung Merapi, museum 2 lantai yang diresmikan tahun 2010 silam ini menjadi salah satu tempat wisata menarik di daerah Hargobinangun, Sleman. Bentuk bangunannya unik, berbentuk trapesium dengan salah satu sisi puncaknya mengerucut membentuk segitiga. Ketika hari cerah dan Gunung Merapi tak tertutup awan, maka keduanya tampak begitu gagah. </p>

                                    <blockquote class="firewall-blockquote mt-30 mb-30">
                                        <h5 class="mb-30">“Technology is nothing. What's important is that you have a faith in people, that they're basically good and smart, and if you give them tools, they'll do wonderful things with them.”</h5>
                                        <h6 class="text-muted">Steven Jobs</h6>
                                    </blockquote>

                                    
                                    <p>Memasuki museum, sebuah replika sebaran awan panas dari tiga buah letusan Gunung Merapi, yakni pada tahun 1969, 1994 dan 2006 akan menyambut para pengunjung. Alat inilah yang membuat seluruh ruangan bergemuruh. Tekan saja salah satu tombolnya, maka sebaran awan panas dan aliran lava pijar akan terlihat menyerupai kejadian waktu itu. Terbayang betapa dahsyatnya gejolak gunung api ini tiap kali meletus. Ratusan rumah tertimbun material vulkanik, ribuan ternak mati dan warga harus dievakuasi. Kehidupan di sekitar Merapi tandas ditelan wedhus gembel. Peristiwa tersebut bagai rajah yang tak akan hilang dari ingatan siapa saja yang menjadi korban. </p>
                                    <p>Menjelajahi ruangan lain kita akan menemukan display tipe letusan gunung api, batuan dari Gunung Merapi sejak tahun 1930, koleksi benda-benda sisa letusan tahun 2006 hingga koleksi foto-foto Gunung Merapi dari zaman ke zaman yang dipajang sedemikian rupa sehingga mudah diamati. Panel-panel ilustrasi dengan gambar kartun pun dapat dijumpai dan tentunya ramah bagi anak-anak.</p>
                                    <p>Dari sekian banyak koleksi benda yang ada, salah satu yang menarik adalah batu bom (volcanic bomb). Batu ini sepintas terlihat seperti batu biasa dengan bentuk yang tak beraturan. Tapi siapa sangka, batu ini adalah rupa lain lava pijar bersuhu 700 - 1.200 derajat celcius yang kemudian terlempar ke udara dan mengalami proses pendinginan cepat sebelum sampai ke permukaan bumi.

Puas mengamati setiap koleksi di lantai satu, saatnya menilik apa yang ada di lantai dua museum. Setidaknya ada sembilan tipe benda koleksi dan alat peraga yang tersimpan di sana, mulai dari display letusan dan erupsi Merapi, lorong peraga simulasi LCD, peraga simulasi tsunami hingga peraga simulasi gempa. Masing-masing koleksi tersebut berhasil menarik perhatian tiap pengunjung, apalagi koleksi alat peraga yang ada masih berfungsi dengan baik. Jadi jangan heran bila tiap pengunjung dapat melihat tsunami dan gempa bumi mini yang dahsyat namun tak membahayakan.</p>
<p>Ketika semua sisi museum telah dijelajahi, masuk ke dalam teater mini museum ini adalah pilihan yang tepat. Sembari beristirahat, pengunjung akan disuguhi sebuah film pendek berdurasi 24 menit berjudul Mahaguru Merapi. Film ini menunjukkan dua sisi Merapi yang begitu berbeda. Merapi memberi kesuburan dan kehidupan bagi tiap makhluk di sekitarnya, tapi ada kalanya ia juga meluluhlantakkan semuanya tanpa tersisa.</p>
<p>Sungai-sungai yang mengalir dari lerengnya memenuhi kebutuhan warga akan air, tapi ada saatnya sungai tersebut berubah jadi ancaman kehidupan karena lahar dingin yang mengalir di dalamnya. Melalui film ini, sekali lagi, Merapi berhasil mengundang decak kagum, membawa tiap pengunjung mengenal lebih dekat sosoknya yang mengagumkan. Kehadirannya adalah pengingat akan keagungan Sang Pencipta, ketika semua yang sudah ada kapan pun bisa hilang dan kehidupan berulang dari awal.</p>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">

 <!-- Single Widget Area -->
 <div class="single-widget-area popular-post-widget">
                            <div class="widget-title text-center">
                                <h6>Populer Post</h6>
                            </div>
                            <!-- Single Popular Post -->
                            <div class="single-populer-post d-flex">
                                <img src="image/sidebar/2.jpg" alt="">
                                <div class="post-content">
                                    <a href="/ratuboko">
                                        <h6>Melihat Keindahan Candi Ratu Boko</h6>
                                    </a>
                                    <p>Tuesday, October 3, 2019</p>
                                </div>
                            </div>
                            
                            <!-- Single Popular Post -->
                            <div class="single-populer-post d-flex">
                                <img src="image/sidebar/walpaper.jpg" alt="">
                                <div class="post-content">
                                    <a href="#">
                                        <h6>Keindahan Budaya dan Suasana Kota Sleman</h6>
                                    </a>
                                    <p>Tuesday, October 3, 2019</p>
                                </div>
                            </div>
                            <!-- Single Popular Post -->
                            <div class="single-populer-post d-flex">
                                <img src="image/sidebar/prambanan.jpg" alt="">
                                <div class="post-content">
                                    <a href="/prambanan">
                                        <h6>Ini Dia, Candi Terindah di Prambanan</h6>
                                    </a>
                                    <p>Tuesday, October 3, 2019</p>
                                </div>
                            </div>
                            <!-- Single Popular Post -->
                            <div class="single-populer-post d-flex">
                                <img src="image/sidebar/jogjabay.jpg" alt="">
                                <div class="post-content">
                                    <a href="/sindukusuma">
                                        <h6>Inilah Salah Satu Waterpark Terbesar di Sleman</h6>
                                    </a>
                                    <p>Tuesday, October 3, 2017</p>
                                </div>
                            </div>
                        </div>


                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Single Blog Area End ****** -->

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
<!-- ****** Our Creative Portfolio Area End ****** -->

<!-- ****** Footer Social Icon Area Start ****** -->
<div class="social_icon_area clearfix">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="footer-social-area d-flex">
                <div class="single-icon">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>facebook</span></a>
                </div>
                <div class="single-icon">
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>
                </div>
                <div class="single-icon">
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span>GOOGLE+</span></a>
                </div>
                <div class="single-icon">
                    <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i><span>linkedin</span></a>
                </div>
                <div class="single-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
                </div>
                <div class="single-icon">
                    <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i><span>VIMEO</span></a>
                </div>
                <div class="single-icon">
                    <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i><span>YOUTUBE</span></a>
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
                <!-- Menu Area Start -->
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#firewallfood-footer-nav" aria-controls="firewallfood-footer-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                    
                  <!-- Menu Area Start -->
                  <div class="collapse navbar-collapse justify-content-center" id="firewallfood-nav">
                            <ul class="navbar-nav" id="firewall-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="/sejarak">Sejarah</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/kuliner">Kuliner</a>
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
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Copywrite Text -->
            <div class="copy_right_text text-center">
                <p>Copyright @2018 All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i></p>
            </div>
        </div>
    </div>
</div>
</footer>

<!-- ****** Footer Menu Area End ****** -->

@endsection