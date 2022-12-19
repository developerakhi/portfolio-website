<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="background-image:url(<?php echo $main->bc_img; ?>)">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <div class="text-white font-style">{{$main->sub_title}}</div>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <h1 class="text-white-75 mb-5 font-weight-bold">{{$main->title}}</h1>
                        <a class="btn btn-primary btn-xl" href="{{url($main->resume)}}">Resume</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="section-heading text-uppercase text-center">Service</h2>
                <h3 class="section-subheading text-muted text-center">Lorem ipsum dolor sit amet consectetur.</h3>
                <hr class="divider" />
                <div class="row text-center">
                    @if (count($services) > 0)
                        @foreach ($services as $service)
                            <div class="col-md-4">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="<?php echo $service->icon;?> fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="my-3">{{$service->title}}</h4>
                                <p class="text-muted">{{$service->description}}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    @if (count($portfolios) > 0)
                        @foreach ($portfolios as $portfolio)
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?php echo $portfolio->id?>">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="{{url($portfolio->small_img)}}" alt="" />
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">{{$portfolio->client}}</div>
                                        <div class="portfolio-caption-subheading text-muted">{{$portfolio->category}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    @if (count($abouts) > 0)
                        @foreach ($abouts as $about)
                            <li>
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url($about->img)}}" alt="" /></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>{{$about->title1}}</h4>
                                        <h4 class="subheading">{{$about->title2}}</h4>
                                    </div>
                                    <div class="timeline-body"><p class="text-muted">{{$about->description}}</p></div>
                                </div>
                            </li>
                        @endforeach
                    @endif
                    <li>
                        <div class="timeline-image">
                            <h4>
                                Learning
                                <br />
                                Akhis
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5" style="background-color: #f1f1f1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
         <!-- Contact-->
         <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Let's Get In Touch!</h2>
                    <hr class="divider" />
                    <p class="text-white mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                </div>
                <form id="contactForm" action="{{route('contact.store')}}" method="POST">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success">@include('alert.messages')</div>
                        <button class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Company Name</div></div>
        </footer>

         <!-- Portfolio Modals-->
        <!-- Modal 1-->
        @if (count($portfolios) > 0)
        @foreach ($portfolios as $porfolio)
            <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $portfolio->id?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">{{$portfolio->title}}</h2>
                                        <p class="item-intro text-muted">{{$portfolio->sub_title}}</p>
                                        <img class="img-fluid d-block mx-auto" src="{{url($portfolio->big_img)}}" alt="" />
                                        <p>{{$portfolio->description}}</p>
                                        <ul class="list-inline">
                                            <li>Date: {{$portfolio->created_at->toDateString()}}</li>
                                            <li>Client: {{$portfolio->client}}</li>
                                            <li>Category: {{$portfolio->category}}</li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @endif
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
