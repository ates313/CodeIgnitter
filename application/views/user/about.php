<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/navbarStyle'); ?>


<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="mb-3">Haqqımızda</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="index.html">Ana səhifə</a></li>
                <li style="color: #D7B56D !important;" class="breadcrumb-item text-primary active" aria-current="page">
                    Haqqımızda</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
    <!-- <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Xidmətlərimiz</p> -->
    <h2 style="color: #D7B56D !important">İşimiz iş, sözümüz söz!</h2>
</div>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <img class="img-fluid w-75 align-self-end" src="img/about.jpg" alt="">
                    <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                        <center>
                            <h1 style="color: #D7B56D !important;" class="text-primary mb-3">VIP</h1>
                            <h2 class="mb-0">Xidmət</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <!-- <p style="color: #D7B56D !important;" class="d-inline-block bg-secondary text-primary py-1 px-4">Haqqımızda</p> -->
                <h2 class="mb-4">Bizimlə bağlı ətraflı məlumat əldə edin!</h2>
                <p>XL Barbershop yeni açılmasına baxmayaraq uzun illərdir bu sahədə fəaliyyət görsədən ustaların
                    möhtəşəm əl qabiliyyətləri sayəsində sizləri məmnun etməkdədir.</p>
                <p class="mb-4">Bir çox sahə üzrə xidmət göstərməyimiz, müasir avadanlıqlarımız, müştərilərin rahatlığı
                    üçün təqdim edilən şərait bizləri bir çox kişi salonundan fərqləndirən faktorlardır.</p>
                <div class="row g-4">
                    <div class="col-md-6">
                        <h3 class="mb-3">Əziz müştərilər!</h3>
                        <p class="mb-0">Əl çatmayan arzular, çin olmayan röyalara siz də çatmaq istəyirsinizsə bizə
                            etibar edin! Limitsiz çay/qəhvə xidmətimiz və avtomobiliniz üçün pulsuz dayanacaq
                            imkanlarından istifadə edə bilərsiniz.</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="mb-3">Əziz valideynlər!</h3>
                        <p class="mb-0">Övladlarınızı bizim zalımıza etibar edərək həm ximdətlərimizdən istifadə edə
                            biləcəksiniz həm də övladınızın necə əyləncəli vaxt keçirdərək yeni saç stilinə malik
                            olacağına şahid olacaqsınız.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Ustalarımız
            </p>
            <h2>Ustalarımızla tanış olun:</h2>
        </div>
        <div class="row g-4">

            <?php s($staff as $item){ ?>

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
            s
        </div>
    </div>
</div>
<!-- Team End -->

<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>