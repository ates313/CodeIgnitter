<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/navbarStyle'); ?>


<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video autoplay muted loop id="myVideo">
                    <source src="<?php echo base_url('/public/assets/'); ?>video/video.mp4" type="video/mp4">
                </video>
                <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                    <div class="mx-sm-5 px-5" style="max-width: 900px;">
                        <h1 style="color: #D7B56D !important" class="mb-3">Peşəkar xidmətin tək ünvanı!</h1>
                        <br><br><br><br>
                        <h3 style="font-size: 17px !important" class="text-white  mb-4 animated slideInDown"><i
                                style="color: #D7B56D !important"
                                class="fa fa-map-marker-alt text-primary me-3"></i>Bakı şəh., Nizami ray., M. Muxtarova
                            küç 145, Nizami M/S arxası</h3>
                        <h3 style="font-size: 17px !important" class="text-white mb-4 animated slideInDown"><i
                                style="color: #D7B56D !important"
                                class="fa fa-phone-alt text-primary me-3"></i>+99455/70 329 47 37</h3>
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
                    <img class="img-fluid w-75 align-self-end" src="<?php echo base_url('/public/assets/'); ?>img/about.jpg" alt="">
                    <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                        <center>
                            <h1 style="color: #D7B56D !important;" class="text-primary mb-3">VIP</h1>
                            <h2 class="mb-0">Xidmət</h2>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="row g-4">
                <?php foreach($about_get_list as $about_get_item){ ?>
                    <div class="col-md-6">
                        <h3 class="mb-3"><?php echo $about_get_item['about_Heading'] ?></h3>
                        <p class="mb-0 wdt" ><?php echo $about_get_item['about_about'] ?></p>
                    </div>
                    <?php } ?>
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
            <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">
                Xidmətlərimiz</p>
            <h2>Biz nələr edirik?</h2>
        </div>
        <div class="row g-4">
            <?php foreach ($service_get_list as $service_get_list_item) { ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                    <div class="ps-4">
                        <h3 style="color: #D7B56D !important" class="mb-3">
                            <?php echo $service_get_list_item['service_Heading']; ?>
                        </h3>
                        <p>
                            <?php echo $service_get_list_item['service_Paragraph']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
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
                    <p style="color: #D7B56D !important" class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">
                        Qiymətlər</p>
                    <h2 class="mb-4">
                        Qiymətlərimizlə tanış olun
                    </h2>
                    <div>
                        <?php foreach($price_get_list as $price_get_list_item){?>
                    
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="mb-0">
                            <?php echo $price_get_list_item['price_Heading'] ?>
                            </h6>
                            <span style="color: #D7B56D !important" class="text-primary"><?php echo $price_get_list_item['price_price'] ?></span>
                        </div>
                        <?php  } ?>    
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100">
                    <img class="img-fluid h-100" src="<?php echo base_url('/public/assets/'); ?>img/price.jpg" alt="">
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
            <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Ustalarımız
            </p>
            <h2>Ustalarımızla tanış olun:</h2>
        </div>
        <div class="row g-4">

            <?php foreach($staff as $item){ ?>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" src="<?php echo base_url('upload/'.$item['s_image']); ?>" alt="">
                        <div class="team-social">

                            <?php if($item['s_Facebook']){ ?>
                            <a target="_blank" class="btn btn-square" href="https://www.facebook.com/"><i
                                    style="color: #D7B56D !important" class="fab fa-facebook-f"></i></a>
                            <?php } ?>


                            <?php if($item['s_Telegram']){ ?>
                            <a target="_blank" class="btn btn-square" href=" https://web.telegram.org/k/"><i
                                    style="color: #D7B56D !important" class="fab fa-telegram-plane"></i></a>
                            <?php } ?>


                            <?php if($item['s_Youtube']){ ?>
                            <a target="_blank" class="btn btn-square"
                                href="https://www.youtube.com/channel/UCI2uZseSfDPpzY2N5Pi1DeA"><i
                                    style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                            <?php } ?>


                            <?php if($item['s_Instagram']){ ?>
                            <a target="_blank" class="btn btn-square"
                                href="https://www.instagram.com/xl.barbershop/?hl=de"><i
                                    style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                            <?php } ?>


                            <?php if($item['s_Email']){ ?>
                            <a target="_blank" class="btn btn-square"
                                href="https://www.google.com/intl/tr/gmail/about/"><i style="color: #D7B56D !important"
                                    class="fa fa-envelope"></i></a>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h5>
                            <?php echo $item['s_FirstName_az']; ?>
                        </h5>
                        <span style="color: #D7B56D !important" class="text-primary">
                            <?php echo $item['s_Position']; ?>
                        </span>
                    </div>
                </div>
            </div>

            <?php } ?>

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
                    <img class="img-fluid h-100" src="<?php echo base_url('/public/assets/'); ?>img/open.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                    <p style="color: #D7B56D !important" class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">İş
                        saatlarımız</p>
                    <h2 class="mb-4">Ödənişsiz dayanacağımız mövcuddur</h2>
                    <div>
                        <?php foreach($time_get_list as $time_get_list_item){ ?>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0"><?php echo $time_get_list_item['time_Week'] ?></h6>
                                <span><?php echo $time_get_list_item['time_Time'] ?></span>
                            </div>
                        <?php } ?>
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
            <div class="testimonial-item text-center"
                data-dot="<img class='img-fluid' src='<?php echo base_url('/public/assets/'); ?>img/testimonial-1.jpg' alt=''>">
                <h4>Nail bəy</h4>
                <p style="color: #D7B56D !important" class="text-primary">Mühasib</p>
                <span class="fs-5">Bizə doğma insan, mehriban, pozitiv bərbərimiz İbrahim usta, əlləriniz var olsun,
                    dəyərli sənətkar!</span>
            </div>
            <div class="testimonial-item text-center"
                data-dot="<img class='img-fluid' src='<?php echo base_url('/public/assets/'); ?>img/testimonial-2.jpg' alt=''>">
                <h4>Fərid bəy</h4>
                <p style="color: #D7B56D !important" class="text-primary">Pediatr</p>
                <span class="fs-5">Öz dərin təşəkkürümü bildirirəm ki, ailəvi olaraq bizə layiqli xidmət göstərirsiniz
                    və biz də daima sizə sadiq qalırıq.</span>
            </div>
            <div class="testimonial-item text-center" data-dot="">
                <h4>Ayaz bəy</h4>
                <p style="color: #D7B56D !important" class="text-primary">Zərgər</p>
                <span class="fs-5">Peşəkar bərbərlikdən savayı, əsl dost, sevimli, pozitiv və gülərüz insan, sənə ən
                    əsası can sağlığı, uzun ömür və gələcək işlərində hər zaman uğur əldə etməyi arzulayıram. </span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>