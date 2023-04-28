<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="utf-8">
    <title>xl-barbershop</title>
    <link rel="shortcut icon" href="img/image-07-08-22-10-34.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="xl-barbershop.az">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('/public/assets/'); ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

        <style>
            .btn:focus{
            outline: none!important;
            border:none!important;
            box-shadow: none!important;}
        </style>



<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div style="color: #D7B56D !important"  class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Yüklənir...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <!-- <h1 class="mb-0 text-primary text-uppercase">XL-BARBERSHOP</h1> -->
            <img style="width: 90px; height: 90px !important" src="img/image-07-08-22-10-34.png">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Ana səhifə</a>
                <a href="about.html" class="nav-item nav-link">Haqqımızda</a>
                <a href="service.html" class="nav-item nav-link">Xidmətlər</a>
              <!--   <a href="price.html" class="nav-item nav-link">Qiymətlər</a> -->
                <!-- <a href="team.html" class="nav-item nav-link">Ustalar</a> -->
                <a href="gallery.html" class="nav-item nav-link">Qalereya</a>
                <a href="contact.html" class="nav-item nav-link">Əlaqə</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                   <video autoplay muted loop id="myVideo">
                        <source src="video/video.mp4" type="video/mp4">
                    </video>
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 style="color: #D7B56D !important" class="mb-3">Peşəkar xidmətin tək ünvanı!</h1><br><br><br><br>
                            <h3 style="font-size: 17px !important" class="text-white  mb-4 animated slideInDown"><i style="color: #D7B56D !important" class="fa fa-map-marker-alt text-primary me-3"></i>Bakı şəh., Nizami ray., M. Muxtarova küç 145, Nizami M/S arxası</h3>
                            <h3 style="font-size: 17px !important" class="text-white mb-4 animated slideInDown"><i style="color: #D7B56D !important" class="fa fa-phone-alt text-primary me-3"></i>+99455/70 329 47 37</h3>
                        </div>
                    </div>
                </div>
                
            </div>
           
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid w-75 align-self-end" src="img/about.jpg" alt="">
                        <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                            <center><h1 style="color: #D7B56D !important;" class="text-primary mb-3">VIP</h1>
                            <h2 class="mb-0">Xidmət</h2></center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Haqqımızda</p>
                    <h2 class="mb-4">Bizimlə bağlı ətraflı məlumat əldə edin!</h2>
                    <p>XL Barbershop yeni açılmasına baxmayaraq uzun illərdir bu sahədə fəaliyyət görsədən ustaların möhtəşəm əl qabiliyyətləri sayəsində sizləri məmnun etməkdədir.</p>
                    <p class="mb-4">Bir çox sahə üzrə xidmət göstərməyimiz, müasir avadanlıqlarımız, müştərilərimizin rahatlığı üçün təqdim edilən şərait bizi bir çox kişi salonundan fərqləndirən faktorlardır.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h3 class="mb-3">Əziz müştərilər!</h3>
                            <p class="mb-0">Əl çatmayan arzular, çin olmayan röyalara siz də çatmaq istəyirsinizsə bizə etibar edin! Limitsiz çay/qəhvə xidmətimiz və avtomobiliniz üçün pulsuz dayanacaq imkanlarından istifadə edə bilərsiniz.</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-3">Əziz valideynlər!</h3>
                            <p class="mb-0">Övladlarınızı bizim zalımıza etibar edərək həm ximdətlərimizdən istifadə edə biləcəksiniz həm də övladınızın necə əyləncəli vaxt keçirdərək yeni saç stilinə malik olacağına şahid olacaqsınız.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Xidmətlərimiz</p>
                <h2>Biz nələr edirik?</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <!-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img  class="img-fluid" src="img/haircut.png" alt="">
                        </div> -->
                        <div class="ps-4">
                            <h3 style="color: #D7B56D !important" class="mb-3">Saç kəsimi</h3>
                            <p>Hər üz quruluşuna uyğun xüsusi saç kəsim formaları. Həmçinin anatomik saç kəsimi.</p>
                        </div>
                        <!-- <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <!-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/beard-trim.png" alt="">
                        </div> -->
                        <div class="ps-4">
                            <h3 style="color: #D7B56D !important" class="mb-3">Saqqal kəsimi</h3>
                            <p>Seyrək saqqallara forma verilməsi. Özəl buxar vasitəsiylə saqqalın ülgüc ilə təraş edilməsi.</p>
                        </div>
                        <!-- <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <!-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/mans-shave.png" alt="">
                        </div> -->
                        <div class="ps-4">
                            <h3 style="color: #D7B56D !important" class="mb-3">Saç darama</h3>
                            <p>Gedəcəyiniz tədbirə uyğun saçların daranması. Seyrək saçların topik vasitəsylə örtülməsi.</p>
                        </div>
                        <!-- <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="ps-4">
                            <h3 style="color: #D7B56D !important" class="mb-3">Saç boyama</h3>
                            <p>Hər növ saçların peşəkar boyanması. Ağ saçların mikro boya ilə örtünməsi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="ps-4">
                            <h3 style="color: #D7B56D !important" class="mb-3">Keratin + Perma</h3>
                            <p>Orijinal schwarzkopf məhsulları ilə saçların düzləşdirilməsi və həmçinin burulması</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="ps-4">
                            <h3 style="color: #D7B56D !important" class="mb-3">Üz təmizlənməsi</h3>
                            <p>Hydrafacial aparatında, xüsusi serumlar, birdəfəlik başlıqlar və pilinqlərdən istifadə edilməklə üzün təmizlənməsi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Price Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p style="color: #D7B56D !important" class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Qiymətlər</p>
                        <h2 class="mb-4">Qiymətlərimizlə tanış olun</h2>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Saç kəsimi</h6>
                                <span style="color: #D7B56D !important" class="text-primary">20 AZN</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Saqqal kəsimi</h6>
                                <span style="color: #D7B56D !important" class="text-primary">5-15 AZN</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Təraş</h6>
                                <span style="color: #D7B56D !important" class="text-primary">10-20 AZN</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Saç boyama</h6>
                                <span style="color: #D7B56D !important" class="text-primary">15-30 AZN</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Keratin + Perma</h6>
                                <span style="color: #D7B56D !important" class="text-primary">30-150 AZN</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Saç darama</h6>
                                <span style="color: #D7B56D !important" class="text-primary">5-15 AZN</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="mb-0">VİP saç kəsimi</h6>
                                <span style="color: #D7B56D !important" class="text-primary">30-50 AZN</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="img/price.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Ustalarımız</p>
                <h2>Ustalarımızla tanış olun:</h2>
            </div>
            <div class="row g-4">
                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i style="color: #D7B56D !important" class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.youtube.com/channel/UCI2uZseSfDPpzY2N5Pi1DeA"><i style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/xl.barbershop/?hl=de"><i style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5>Rəsul</h5>
                            <span style="color: #D7B56D !important" class="text-primary">Usta</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i style="color: #D7B56D !important" class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.youtube.com/channel/UCI2uZseSfDPpzY2N5Pi1DeA"><i style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/xl.barbershop/?hl=de"><i style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5>İbrahim</h5>
                            <span style="color: #D7B56D !important" class="text-primary">Usta</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i style="color: #D7B56D !important" class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.youtube.com/channel/UCI2uZseSfDPpzY2N5Pi1DeA"><i style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/xl.barbershop/?hl=de"><i style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5>Cəlal</h5>
                            <span style="color: #D7B56D !important" class="text-primary">Usta</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Working Hours Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="img/open.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p style="color: #D7B56D !important" class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">İş saatlarımız</p>
                        <h2 class="mb-4">Ödənişsiz dayanacağımız mövcuddur</h2>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Bazar ertəsi</h6>
                                <span>10:00-21:00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Çərşəmbə axşamı</h6>
                                <span>10:00-21:00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Çərşəmbə</h6>
                                <span>10:00-21:00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Cümə axşamı</h6>
                                <span>10:00-21:00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0">Cümə</h6>
                                <span>10:00-21:00</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="mb-0">Şənbə / Bazar</h6>
                                <span>10:00-20:00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Working Hours End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Rəylər</p>
                <h1>Müştərilərimiz nə düşünür?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                    <h4>Nail bəy</h4>
                    <p style="color: #D7B56D !important" class="text-primary">Mühasib</p>
                    <span class="fs-5">Bizə doğma insan, mehriban, pozitiv bərbərimiz İbrahim usta, əlləriniz var olsun, dəyərli sənətkar!</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                    <h4>Fərid bəy</h4>
                    <p style="color: #D7B56D !important" class="text-primary">Pediatr</p>
                    <span class="fs-5">Öz dərin təşəkkürümü bildirirəm ki, ailəvi olaraq bizə layiqli xidmət göstərirsiniz və biz də daima sizə sadiq qalırıq.</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                    <h4>Ayaz bəy</h4>
                    <p style="color: #D7B56D !important" class="text-primary">Zərgər</p>
                    <span class="fs-5">Peşəkar bərbərlikdən savayı, əsl dost, sevimli, pozitiv və gülərüz insan, sənə ən əsası can sağlığı, uzun ömür və gələcək işlərində hər zaman uğur əldə etməyi arzulayıram. </span>
                </div>
            </div>      
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="mb-4">Əlaqə saxlayın</h4>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span style="color: #D7B56D !important" class="fa fa-map-marker-alt text-primary"></span>
                        </div>
                        <span>Bakı şəh.,, Nizami ray., M. Muxtarova küç 145, Nizami M/S arxası</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span style="color: #D7B56D !important" class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span>+99455 329 47 37</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span style="color: #D7B56D !important" class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span>ibrahimagaaliyev@gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="mb-4">Sürətli bağlantılar</h4>
                    <a class="btn btn-link" href="about.html">Haqqında</a>
                    <a class="btn btn-link" href="contact.html">Əlaqə</a>
                    <a class="btn btn-link" href="service.html">Xidmətlər</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="mb-4">Xəbər bülleteni</h4>
                    <div class="position-relative mb-4">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button  type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Qeydiyyatdan keçmək</button>
                    </div>
                    <div class="d-flex pt-1 m-n1">
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i style="color: #D7B56D !important" class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i style="color: #D7B56D !important" class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href="https://www.youtube.com/channel/UCI2uZseSfDPpzY2N5Pi1DeA"><i style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href="https://www.instagram.com/xl.barbershop/?hl=de"><i style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center text-md-center mb-3 mb-md-0">
                        &copy; XL Barbershop 2022
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i style="color: black !important;" class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>