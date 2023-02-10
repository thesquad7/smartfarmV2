<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Home - SmartFarm</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.min.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-light opacity-85" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="/"><img class="d-inline-block img-fluid" src="images/logo.png" alt="" width="150" /></a><button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="#header">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#Opportuanities">Opportuanities</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#testimonial">Testimonial</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#invest">Invest</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#contact">Contact </a></li>
            </ul>
            <div class="d-flex">
                @auth
                <a href="{{ route('home') }}">
                    <button class="btn btn-lg btn-dark bg-gradient order-0">Dashboard</button>
                </a>
                @else
                <a href="{{ route('auth.login') }}">
                    <button class="btn btn-lg btn-dark bg-gradient order-0">Masuk</button>
                </a>
                @endauth
            </div>
          </div>
        </div>
      </nav>
      <section class="py-0" id="header">
        <div class="bg-holder d-none d-md-block" style="background-image:url(assets/img/illustrations/hero-header.png);background-position:right top;background-size:contain;"></div>
        <!--/.bg-holder-->
        <div class="bg-holder d-md-none" style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row align-items-center min-vh-75 min-vh-lg-100">
            <div class="col-md-7 col-lg-6 col-xxl-5 py-6 text-sm-start text-center">
              <h1 class="mt-6 mb-sm-4 fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Cara Modern <br class="d-block d-lg-block" />Bertani</h1>
              <p class="mb-4 fs-1">SmartFarm menyediakan platform bagi petani untuk mengelola dan memonitoring lahan berbasis Internet of Things.</p><a class="btn btn-lg btn-success" href="{{ route('auth.register') }}" role="button">Daftar</a>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5" id="Opportuanities">
        <div class="bg-holder d-none d-sm-block" style="background-image:url(assets/img/illustrations/bg.png);background-position:top left;background-size:225px 755px;margin-top:-17.5rem;"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row">
            <div class="col-lg-9 mx-auto text-center mb-3">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">New Opportunities</h5>
              <p class="mb-5">We are the first and the only crowdfunding platform enabling you to help finance our farmers.</p>
            </div>
          </div>
          <div class="row flex-center h-100">
            <div class="col-xl-9">
              <div class="row">
                <div class="col-md-4 mb-5">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/farmer.svg" height="60" alt="" />
                      <div class="card-body">
                        <h6 class="fw-bold fs-1 heading-color">Connect with our farmers</h6>
                        <p class="mt-3 mb-md-0 mb-lg-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-5">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/growth.svg" height="60" alt="" />
                      <div class="card-body">
                        <h6 class="fw-bold fs-1 heading-color">Grow your business</h6>
                        <p class="mt-3 mb-md-0 mb-lg-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-5">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/planting.svg" height="60" alt="" />
                      <div class="card-body">
                        <h6 class="fw-bold fs-1 heading-color">Social Impact Invesment</h6>
                        <p class="mt-3 mb-md-0 mb-lg-2">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="invest">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-9 mb-3">
              <div class="row">
                <div class="col-lg-9 mb-3">
                  <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Invest on your convenience</h5>
                  <p class="mb-5">Autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla</p>
                </div>
                <div class="col-md-6 mb-5">
                  <div class="card text-white"><img class="card-img" src="assets/img/gallery/short-terms.png" alt="..." />
                    <div class="card-img-overlay d-flex flex-column justify-content-center px-5 px-md-3 px-lg-5 bg-dark-gradient">
                      <h6 class="text-success pt-2">NEW FARM TODAY</h6>
                      <hr class="text-white" style="height:0.12rem;width:2.813rem" />
                      <div class="pt-lg-3">
                        <h6 class="fw-bold text-white fs-1 fs-md-2 fs-lg-3 w-xxl-50">Short terms investment</h6>
                        <p class="w-xxl-75">Invest in farms that will be ready for harvest in 3-18 months</p><button class="btn btn-lg btn-light text-success" type="button">Browse Farm</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-5">
                  <div class="card text-white"><img class="card-img" src="assets/img/gallery/fully-funded.png" alt="..." />
                    <div class="card-img-overlay d-flex flex-column justify-content-center px-5 px-md-3 px-lg-5 bg-light-gradient">
                      <h6 class="text-success pt-2">FULLY FUNDED</h6>
                      <hr class="text-white" style="height:0.12rem;width:2.813rem" />
                      <div class="pt-lg-3">
                        <h6 class="fw-bold text-white fs-1 fs-md-2 fs-lg-3 w-xxl-50">Long terms investment</h6>
                        <p class="w-xxl-75">Consider farms that have long term investment program.</p><button class="btn btn-lg btn-light text-success" type="button">Learn More</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <section class="py-0">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/how-it-works.png);background-position:center bottom;background-size:cover;"></div>
        <!--/.bg-holder-->
        <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-sm-8 col-md-9 col-xl-5 text-center pt-8">
              <h5 class="fw-bold fs-3 fs-xxl-5 lh-sm mb-3 text-white">Cara Kerja</h5>
              <p class="mb-5 text-white">Berikut merupakan alur singkat pada aplikasi.</p>
            </div>
            <div class="col-sm-9 col-md-12 col-xxl-9">
              <div class="theme-tab">
                <ul class="nav justify-content-between">
                  <li class="nav-item" role="presentation"><a class="nav-link active fw-semi-bold" href="#bootstrap-tab1" data-bs-toggle="tab" data-bs-target="#tab1" id="tab-1"><span class="nav-item-circle-parent"><span class="nav-item-circle">01</span></span></a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link fw-semi-bold" href="#bootstrap-tab2" data-bs-toggle="tab" data-bs-target="#tab2" id="tab-2"><span class="nav-item-circle-parent"><span class="nav-item-circle">02</span></span></a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link fw-semi-bold" href="#bootstrap-tab3" data-bs-toggle="tab" data-bs-target="#tab3" id="tab-3"><span class="nav-item-circle-parent"><span class="nav-item-circle">03</span></span></a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link fw-semi-bold" href="#bootstrap-tab4" data-bs-toggle="tab" data-bs-target="#tab4" id="tab-4"><span class="nav-item-circle-parent"><span class="nav-item-circle">04</span></span></a></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                    <div class="row align-items-center my-6 mx-auto">
                      <div class="col-md-6 col-lg-5 offset-md-1">
                        <h3 class="fw-bold lh-base text-white">Persiapkan perangkat IoT.</h3>
                      </div>
                      <div class="col-md-5 text-white offset-lg-1">
                        <p class="mb-0">Persiapkan perangkat-perangkat yang dibutuhkan seperti sensor, lora, dll.</p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                    <div class="row align-items-center my-6 mx-auto">
                      <div class="col-md-6 col-lg-5 offset-md-1">
                        <h3 class="fw-bold lh-base text-white">Registrasi di platform ini</h3>
                      </div>
                      <div class="col-md-5 text-white offset-lg-1">
                        <p class="mb-0">Buatlah akun pada situs web ini.</p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-3">
                    <div class="row align-items-center my-6 mx-auto">
                      <div class="col-md-6 col-lg-5 offset-md-1">
                        <h3 class="fw-bold lh-base text-white">Tambahkan Lahan dan Device</h3>
                      </div>
                      <div class="col-md-5 text-white offset-lg-1">
                        <p class="mb-0">Tambahkan lahan dan Device yang anda punya dan lengkapi datanya.</p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab-4">
                    <div class="row align-items-center my-6 mx-auto">
                      <div class="col-md-6 col-lg-5 offset-md-1">
                        <h3 class="fw-bold lh-base text-white">Aplikasi siap digunakan</h3>
                      </div>
                      <div class="col-md-5 text-white offset-lg-1">
                        <p class="mb-0">Anda sudah dapat menggunakan seluruh fitur aplikasi, selamat bergabung dengan kami.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-8" id="testimonial">
        <div class="container-lg">
          <div class="row flex-center">
            <div class="col-12 col-lg-10 col-xl-12">
              <div class="bg-holder" style="background-image:url(assets/img/illustrations/testimonial-bg.png);background-position:top left;background-size:120px 83px;"></div>
              <!--/.bg-holder-->
              <h6 class="fs-3 fs-lg-4 fw-bold lh-sm">What investors like you <br />are saying about Zou</h6>
            </div>
            <div class="carousel slide pt-3" id="carouselExampleDark" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100 mx-3 mx-sm-5 mx-md-4 my-md-7 m-lg-7 mt-7">
                    <div class="col-md-4 mb-5 mb-md-0">
                      <div class="card h-100 shadow">
                        <div class="card-body my-3">
                          <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/user-1.png" width="50" alt="" />
                            <div class="flex-1 align-items-center pt-2">
                              <h5 class="mb-0 fw-bold text-success">Fernando Soler</h5>
                              <p class="fw-normal text-black">Telecommunication Engineer</p>
                            </div>
                          </div>
                          <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0">
                      <div class="card h-100 shadow">
                        <div class="card-body my-3">
                          <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/user-2.png" width="50" alt="" />
                            <div class="flex-1 align-items-center pt-2">
                              <h5 class="mb-0 fw-bold text-success">Ilone Pickford</h5>
                              <p class="fw-normal text-black">Head of Agrogofund </p>
                            </div>
                          </div>
                          <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0">
                      <div class="card h-100 shadow">
                        <div class="card-body my-3">
                          <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/user-3.png" width="50" alt="" />
                            <div class="flex-1 align-items-center pt-2">
                              <h5 class="mb-0 fw-bold text-success">Ed O’Brien</h5>
                              <p class="fw-normal text-black">Herbalist</p>
                            </div>
                          </div>
                          <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="row h-100 mx-3 mx-sm-5 mx-md-4 my-md-7 m-lg-7 mt-7">
                    <div class="col-md-4 mb-5 mb-md-0">
                      <div class="card h-100 shadow">
                        <div class="card-body my-3">
                          <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/user-1.png" width="50" alt="" />
                            <div class="flex-1 align-items-center pt-2">
                              <h5 class="mb-0 fw-bold text-success">Fernando Soler</h5>
                              <p class="fw-normal text-black">Telecommunication Engineer</p>
                            </div>
                          </div>
                          <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0">
                      <div class="card h-100 shadow">
                        <div class="card-body my-3">
                          <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/user-2.png" width="50" alt="" />
                            <div class="flex-1 align-items-center pt-2">
                              <h5 class="mb-0 fw-bold text-success">Ilone Pickford</h5>
                              <p class="fw-normal text-black">Head of Agrogofund Groups </p>
                            </div>
                          </div>
                          <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0">
                      <div class="card h-100 shadow">
                        <div class="card-body my-3">
                          <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/user-3.png" width="50" alt="" />
                            <div class="flex-1 align-items-center pt-2">
                              <h5 class="mb-0 fw-bold text-success">Ed O’Brien</h5>
                              <p class="fw-normal text-black">Herbalist</p>
                            </div>
                          </div>
                          <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;Ui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row h-100 mx-3 mx-sm-5 mx-md-4 my-md-7 m-lg-7 mt-7">
                    <div class="col-md-4 mb-5 mb-md-0">
                      <div class="card h-100 shadow">
                        <div class="card-body my-3">
                          <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/user-1.png" width="50" alt="" />
                            <div class="flex-1 align-items-center pt-2">
                              <h5 class="mb-0 fw-bold text-success">Fernando Soler</h5>
                              <p class="fw-normal text-black">Telecommunication Engineer</p>
                            </div>
                          </div>
                          <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0">
                      <div class="card h-100 shadow">
                        <div class="card-body my-3">
                          <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/user-2.png" width="50" alt="" />
                            <div class="flex-1 align-items-center pt-2">
                              <h5 class="mb-0 fw-bold text-success">Ilone Pickford</h5>
                              <p class="fw-normal text-black">Head of Agrogofund Groups </p>
                            </div>
                          </div>
                          <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0">
                      <div class="card h-100 shadow">
                        <div class="card-body my-3">
                          <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/user-3.png" width="50" alt="" />
                            <div class="flex-1 align-items-center pt-2">
                              <h5 class="mb-0 fw-bold text-success">Ed O’Brien</h5>
                              <p class="fw-normal text-black">Herbalist</p>
                            </div>
                          </div>
                          <p class="mb-0 px-3 px-md-2 px-xxl-3">&quot;Ui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row px-3 px-sm-6 px-md-0 px-lg-5 px-xl-4">
                <div class="col-12 position-relative"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="z-index-1 cta">
        <div class="container">
          <div class="row flex-center">
            <div class="col-12">
              <div class="card shadow h-100 py-5">
                <div class="card-body text-center">
                  <h1 class="fw-semi-bold mb-4">The future of &nbsp;<span class="text-success">Smart Farming</span></h1><a class="btn btn-lg btn-success px-6" href="{{ route('auth.register')}}" role="button">Daftar</a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <section class="py-0" id="contact">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/footer-bg.png);background-position:center;background-size:cover;"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row justify-content-lg-between min-vh-75" style="padding-top:21rem">
            <div class="col-6 col-sm-4 col-lg-auto mb-3">
              <h6 class="mb-3 text-1000 fw-semi-bold">COMPANY </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">About Us</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Team</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Careers</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Contact</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-auto mb-3">
              <h6 class="mb-3 text-1000 fw-semi-bold">INVEST </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Features</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">How it works</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Pricing</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Login</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-auto mb-3">
              <h6 class="mb-3 text-1000 fw-semi-bold">LEGAL </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Privacy</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Terms</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Security</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-auto mb-3">
              <div class="card bg-success">
                <div class="card-body p-sm-4">
                  <h5 class="text-white">SmartFarm</h5>
                  <p class="mb-0 text-white">write email to us <span class="text-white fs--1 fs-sm-1">smartfarm@polindra.ac.id</span></p>
                  {{-- <button class="btn btn-light text-success" type="button"> <svg class="bi bi-person me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#76C279" viewBox="0 0 16 16">
                      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                    </svg>Sing In</button> --}}
                </div>
              </div>
            </div>
          </div>
          <hr class="text-300 mb-0" />
          <div class="row flex-center py-5">
            <div class="col-12 col-sm-8 col-md-6 text-center text-md-start"> <a class="text-decoration-none" href="#"><img class="d-inline-block align-top img-fluid" src="images/logo.png" alt="" width="150" /></a></div>
            <div class="col-12 col-sm-8 col-md-6">
              <p class="fs--1 text-dark my-2 text-center text-md-end">&copy; 2022</p>
            </div>
          </div>
        </div>
      </section>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>
