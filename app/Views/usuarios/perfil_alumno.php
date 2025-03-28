<?= $this->extend('layoutStudent')?>

<?=$this->section('contenido');?>   

<!-- Page Content -->

    <div class="page-section bg-primary border-bottom-white">
        <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
            <img src="<?=base_url('images/illustration/student/128/white.svg')?>"
                    width="104"
                    class="mr-md-32pt mb-32pt mb-md-0"
                    alt="student">
            <div class="flex mb-32pt mb-md-0">
                <h2 class="text-white mb-0">Laza Bogdan</h2>
                <p class="lead text-white-50 d-flex align-items-center">Student <span class="ml-16pt d-flex align-items-center"><i class="material-icons icon-16pt mr-4pt">opacity</i> 2,300 IQ</span></p>
            </div>
            <a href=""
                class="btn btn-outline-white">Follow</a>
        </div>
    </div>

    <div class="page-section bg-primary">
        <div class="container page__container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card border-0 mb-lg-0">
                        <div class="card-header d-flex align-items-center">
                            <div class="h2 mb-0 mr-3">116</div>
                            <div class="flex">
                                <p class="card-title">Angular</p>
                                <p class="card-subtitle text-50">Best score</p>
                            </div>
                            <div class="dropdown">
                                <a href="#"
                                    class="btn btn-sm btn-outline-secondary dropdown-toggle"
                                    data-toggle="dropdown">Popular Topics</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href=""
                                        class="dropdown-item">Popular Topics</a>
                                    <a href=""
                                        class="dropdown-item">Web Design</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-24pt">
                            <div class="chart"
                                    style="height: 344px;">
                                <canvas id="topicIqChart"
                                        class="chart-canvas js-update-chart-line"
                                        data-chart-hide-axes="true"
                                        data-chart-points="true"
                                        data-chart-suffix=" points"
                                        data-chart-line-border-color="primary"
                                        data-chart-dark-mode="false"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div id="carouselExampleFade"
                            class="carousel carousel-card slide mb-24pt">
                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <a class="card border-0 mb-0"
                                    href="">
                                    <img src="<?=base_url('images/achievements/flinto.png')?>"
                                            alt="Flinto"
                                            class="card-img"
                                            style="max-height: 100%; width: initial;">
                                    <div class="fullbleed bg-primary"
                                            style="opacity: .5;"></div>
                                    <span class="card-body d-flex flex-column align-items-center justify-content-center fullbleed">
                                        <span class="row flex-nowrap">
                                            <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                                                <span class="h5 text-white text-uppercase font-weight-normal m-0 d-block">Achievement</span>
                                                <span class="text-white-60 d-block mb-24pt">Jun 5, 2018</span>
                                            </span>
                                            <span class="col d-flex flex-column">
                                                <span class="text-right flex mb-16pt">
                                                    <img src="<?=base_url('images/paths/flinto_40x40@2x.png')?>"
                                                            width="64"
                                                            alt="Flinto"
                                                            class="rounded">
                                                </span>
                                            </span>
                                        </span>
                                        <span class="row flex-nowrap">
                                            <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                                                <img src="<?=base_url('images/illustration/achievement/128/white.png')?>"
                                                        width="64"
                                                        alt="achievement">
                                            </span>
                                            <span class="col d-flex flex-column">
                                                <span>
                                                    <span class="card-title text-white mb-4pt d-block">Flinto</span>
                                                    <span class="text-white-60">Introduction to The App Design Application</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </a>

                            </div>

                            <div class="carousel-item">

                                <a class="card border-0 mb-0"
                                    href="">
                                    <img src="<?=base_url('images/achievements/angular.png')?>"
                                            alt="Angular fundamentals"
                                            class="card-img"
                                            style="max-height: 100%; width: initial;">
                                    <div class="fullbleed bg-primary"
                                            style="opacity: .5;"></div>
                                    <span class="card-body d-flex flex-column align-items-center justify-content-center fullbleed">
                                        <span class="row flex-nowrap">
                                            <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                                                <span class="h5 text-white text-uppercase font-weight-normal m-0 d-block">Achievement</span>
                                                <span class="text-white-60 d-block mb-24pt">Jun 5, 2018</span>
                                            </span>
                                            <span class="col d-flex flex-column">
                                                <span class="text-right flex mb-16pt">
                                                    <img src="<?=base_url('images/paths/angular_64x64.png')?>"
                                                            width="64"
                                                            alt="Angular fundamentals"
                                                            class="rounded">
                                                </span>
                                            </span>
                                        </span>
                                        <span class="row flex-nowrap">
                                            <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                                                <img src="<?=base_url('images/illustration/achievement/128/white.png')?>"
                                                        width="64"
                                                        alt="achievement">
                                            </span>
                                            <span class="col d-flex flex-column">
                                                <span>
                                                    <span class="card-title text-white mb-4pt d-block">Angular fundamentals</span>
                                                    <span class="text-white-60">Creating and Communicating Between Angular Components</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </a>

                            </div>

                        </div>
             
                        <a class="carousel-control-next"
                            href="#carouselExampleFade"
                            role="button"
                            data-slide="next">
                            <span class="carousel-control-icon material-icons"
                                    aria-hidden="true">keyboard_arrow_right</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <div class="card border-0 mb-lg-0">
                        <div class="card-header d-flex align-items-center border-0">
                            <div class="h2 mb-0 mr-3">432</div>
                            <div class="flex">
                                <p class="card-title">Experience IQ</p>
                                <p class="card-subtitle text-50">4 days streak this week</p>
                            </div>
                            <i class="material-icons text-muted ml-2">trending_up</i>
                        </div>
                        <div class="card-body pt-0">
                            <div class="chart"
                                    style="height: 128px;">
                                <canvas id="iqChart"
                                        class="chart-canvas js-update-chart-line"
                                        data-chart-hide-axes="false"
                                        data-chart-points="true"
                                        data-chart-suffix="pt"
                                        data-chart-line-border-color="primary"
                                        data-chart-dark-mode="false"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section bg-white border-bottom-2">
        <div class="container page__container">
            <div class="row">
                <div class="col-md-6">
                    <h4>About me</h4>
                    <p class="text-70">Fueled by my passion for understanding the nuances of cross-cultural advertising, I consider myself a forever student, eager to both build on my academic foundations in psychology and sociology and stay in tune with the latest digital marketing strategies through continued coursework.</p>
                </div>
                <div class="col-md-6">
                    <h4>Connect</h4>
                    <p class="text-70">I’m currently working as a freelance marketing director and always interested in a challenge. Here’s how to reach out and connect.</p>
                    <div class="d-flex align-items-center">
                        <a href=""
                            class="text-accent fab fa-facebook-square font-size-24pt mr-8pt"></a>
                        <a href=""
                            class="text-accent fab fa-twitter-square font-size-24pt"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section">
        <div class="container page__container">

            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-1">
                        <div class="avatar avatar-sm mr-3">
                            <!-- <img src="../../public/images/people/50/guy-2.jpg" alt="Avatar" class="avatar-img rounded-circle"> -->
                            <span class="avatar-title rounded-circle">LB</span>
                        </div>
                        <div class="flex">
                            <div class="d-flex align-items-center mb-1">
                                <strong class="card-title">Laza Bogdan</strong>
                                <small class="ml-auto text-muted">3 days ago</small>
                            </div>
                            <div>
                                <p class="measure-lead">Thanks for contributing to the release of LearnPlus - Learning Management Template <a href="">https://www.frontendmatter.com/themes/learnpl...</a> 🔥</p>
                                <p><a href="">#themeforest</a> <a href="">#EnvatoMarket</a></p>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href=""
                            class="text-muted d-flex align-items-center text-decoration-0"><i class="material-icons mr-1"
                                style="font-size: inherit;">favorite_border</i> 26</a>
                        <a href=""
                            class="text-muted d-flex align-items-center text-decoration-0 ml-3"><i class="material-icons mr-1"
                                style="font-size: inherit;">thumb_up</i> 123</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-1">
                        <div class="avatar avatar-sm mr-3">
                            <!-- <img src="../../public/images/people/50/woman-5.jpg" alt="Avatar" class="avatar-img rounded-circle"> -->
                            <span class="avatar-title rounded-circle">LB</span>
                        </div>
                        <div class="flex">
                            <div class="d-flex align-items-center mb-1">
                                <strong class="card-title">Laza Bogdan</strong>
                                <small class="ml-auto text-muted">4 days ago</small>
                            </div>
                            <div>
                                <p class="measure-lead">Checkout our new JVC camera course on <a href="">https://t.co/Wh7jE0yz4h</a> 😉
                            </div>

                            <a href=""
                                class="card my-3 text-body text-decoration-0 measure-lead">
                                <img src="<?=base_url('images/stories/256_rsz_phil-hearing-769014-unsplash.jpg')?>"
                                        alt="image"
                                        class="card-img-top">
                                <span class="card-footer d-flex flex-column">
                                    <strong>Learn How To Operate a JVC Camera</strong>
                                    <span class="text-70">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                    <span class="text-muted">frontendmatter.com</span>
                                </span>
                            </a>

                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href=""
                            class="text-muted d-flex align-items-center text-decoration-0"><i class="material-icons mr-1"
                                style="font-size: inherit;">favorite_border</i> 156</a>
                        <a href=""
                            class="text-muted d-flex align-items-center text-decoration-0 ml-3"><i class="material-icons mr-1"
                                style="font-size: inherit;">thumb_up</i> 351</a>
                    </div>
                </div>
            </div>

            <a href=""
                class="btn btn-block btn-light mb-32pt">Load more ...</a>
        </div>
    </div>

    <!-- // END Page Content -->

<?= $this->endSection()?>     