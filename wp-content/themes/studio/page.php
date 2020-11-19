<?php get_header(); ?>

    <!-- Slider Section-->
    <section class="page-section mb-0" id="slider">
        <div class="container px-0">
            <h2 class="page-section-heading text-center text-uppercase text-dark mb-5">Slider</h2>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active slider-img">
                        <img class="d-block w-100"
                             src="<?php echo get_field('img_slider1'); ?>"
                             alt="Первый слайд">
                    </div>
                    <div class="carousel-item slider-img">
                        <img class="d-block w-100" src="<?php echo get_field('img_slider2'); ?>"
                             alt="Второй слайд">
                    </div>
                    <div class="carousel-item slider-img">
                        <img class="d-block w-100" src="<?php echo get_field('img_slider3'); ?>"
                             alt="Третий слайд">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>


    <!-- Card Section-->
    <section class="page-section mb-0" id="card">
        <div class="container">
            <!-- Card Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-dark mb-5">Card</h2>
            <!-- Card Section Content-->
            <div class="row">
                <div class="card-deck text-light">
                    <div class="card service-card">
                        <?php
                        $card_1 = get_field('card_1');
                        if ($card_1): ?>

                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $card_1['service_name']; ?></h5>
                            </div>
                            <div class="test text-center">
                                <img class="card-img-top rounded-circle" src="<?php echo $card_1['card_img']; ?>"
                                     alt="Card image cap">
                            </div>
                            <div class="card-body text-center">
                                <a href="#" class="btn btn-dark" data-toggle="modal"
                                   data-target="#exampleModal">Модалка</a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card service-card">
                        <?php
                        $card_2 = get_field('card_2');
                        if ($card_2): ?>

                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $card_2['service_name']; ?></h5>
                            </div>
                            <div class="test text-center">
                                <img class="card-img-top rounded-circle" src="<?php echo $card_2['card_img']; ?>"
                                     alt="Card image cap">
                            </div>
                            <div class="card-body text-center">
                                <a href="#" class="btn btn-dark" data-toggle="modal"
                                   data-target="#exampleModal">Модалка</a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card service-card">
                        <?php
                        $card_3 = get_field('card_3');
                        if ($card_3): ?>

                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $card_3['service_name']; ?></h5>
                            </div>
                            <div class="test text-center">
                                <img class="card-img-top rounded-circle" src="<?php echo $card_3['card_img']; ?>"
                                     alt="Card image cap">
                            </div>
                            <div class="card-body text-center">
                                <a href="#" class="btn btn-dark" data-toggle="modal"
                                   data-target="#exampleModal">Модалка</a>
                            </div>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-light mb-5">Contact Me</h2>
            <!-- Contact Section Form-->

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="control-group">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                        <input class="form-control" id="name" type="text" placeholder="Ваше имя"
                                               required="required"
                                               data-validation-required-message="Please enter your name."/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                        <input class="form-control" id="phone" type="tel"
                                               placeholder="Ваш номер телефона"
                                               required="required"
                                               data-validation-required-message="Please enter your phone number."/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <textarea class="form-control" id="message" rows="5" placeholder="Сообщение"
                                      required="required"
                                      data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br/>
                        <div id="success"></div>
                        <div class="form-group">
                            <button class="btn text-light" id="sendMessageButton" type="submit">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- List Section-->
    <section class="page-section text-dark mb-0" id="list">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase mb-5">List</h2>
            <!-- About Section Content-->
            <div id="accordion">
                <div class="card text-light mb-4">
                    <?php
                    $paragraph_1 = get_field('paragraph_1');
                    if ($paragraph_1): ?>
                        <div class="card-header" id="headingOne">
                            <div class="row">
                                <div class="col-6 mt-2">
                                    <div><?php echo $paragraph_1['header_list']; ?></div>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-link float-right text-light" data-toggle="collapse"
                                            data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                        +
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body text-dark">
                                <?php echo $paragraph_1['text_list']; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card text-light mb-4">
                    <?php
                    $paragraph_2 = get_field('paragraph_2');
                    if ($paragraph_2): ?>
                        <div class="card-header" id="headingTwo">
                            <div class="row">
                                <div class="col-6 mt-2">
                                    <div><?php echo $paragraph_2['header_list']; ?></div>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-link collapsed float-right text-light" data-toggle="collapse"
                                            data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                        +
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body text-dark">
                                <?php echo $paragraph_2['text_list']; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card text-light">
                    <?php
                    $paragraph_3 = get_field('paragraph_3');
                    if ($paragraph_3): ?>
                        <div class="card-header" id="headingThree">
                            <div class="row">
                                <div class="col-6 mt-2">
                                    <div><?php echo $paragraph_3['header_list']; ?></div>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-link collapsed float-right text-light" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                        +
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordion">
                            <div class="card-body text-dark">
                                <?php echo $paragraph_3['text_list']; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>