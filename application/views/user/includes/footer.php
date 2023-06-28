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
                <?php foreach($contact_get_list as $contact_get_list_item){ ?>

                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span style="color: #D7B56D !important" class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span><?php echo $contact_get_list_item['contact_Number']; ?></span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span style="color: #D7B56D !important" class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span><?php echo $contact_get_list_item['contact_Email']; ?></span>
                    </div>
                    
                <?php } ?>
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