<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('websiteassets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('websiteassets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('websiteassets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('websiteassets/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('websiteassets/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('websiteassets/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('websiteassets/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('websiteassets/css/style.css')}}">
    <title>Orbit Free HTML Template by Colorlib</title>
    <script nonce="0873f2ae-fa7a-4aab-a9e8-d0249c0c8070">
        (function(w,d){!function(dK,dL,dM,dN){dK[dM]=dK[dM]||{};dK[dM].executed=[];dK.zaraz={deferred:[],listeners:[]};dK.zaraz.q=[];dK.zaraz._f=function(dO){return function(){var dP=Array.prototype.slice.call(arguments);dK.zaraz.q.push({m:dO,a:dP})}};for(const dQ of["track","set","debug"])dK.zaraz[dQ]=dK.zaraz._f(dQ);dK.zaraz.init=()=>{var dR=dL.getElementsByTagName(dN)[0],dS=dL.createElement(dN),dT=dL.getElementsByTagName("title")[0];dT&&(dK[dM].t=dL.getElementsByTagName("title")[0].text);dK[dM].x=Math.random();dK[dM].w=dK.screen.width;dK[dM].h=dK.screen.height;dK[dM].j=dK.innerHeight;dK[dM].e=dK.innerWidth;dK[dM].l=dK.location.href;dK[dM].r=dL.referrer;dK[dM].k=dK.screen.colorDepth;dK[dM].n=dL.characterSet;dK[dM].o=(new Date).getTimezoneOffset();if(dK.dataLayer)for(const dX of Object.entries(Object.entries(dataLayer).reduce(((dY,dZ)=>({...dY[1],...dZ[1]})),{})))zaraz.set(dX[0],dX[1],{scope:"page"});dK[dM].q=[];for(;dK.zaraz.q.length;){const d_=dK.zaraz.q.shift();dK[dM].q.push(d_)}dS.defer=!0;for(const ea of[localStorage,sessionStorage])Object.keys(ea||{}).filter((ec=>ec.startsWith("_zaraz_"))).forEach((eb=>{try{dK[dM]["z_"+eb.slice(7)]=JSON.parse(ea.getItem(eb))}catch{dK[dM]["z_"+eb.slice(7)]=ea.getItem(eb)}}));dS.referrerPolicy="origin";dS.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(dK[dM])));dR.parentNode.insertBefore(dS,dR)};["complete","interactive"].includes(dL.readyState)?zaraz.init():dK.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
    </script>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav js-site-navbar mb-5 site-navbar-target">
        <div class="container">
            <div class="site-navigation text-center">
                <a href="index-2.html" class="d-block text-center float-left logo">JA</a>
                <ul class="js-clone-nav ml-0 pl-0 d-none d-lg-inline-block site-menu mx-auto text-center">
                    <li class="active"><a href="#home-section" class="nav-link">Home</a></li>
                    <li><a href="#about-section" class="nav-link">About</a></li>
                    <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
                    <li><a href="#services-section" class="nav-link">Services</a></li>
                    <li><a href="#resume-section" class="nav-link">Resume</a></li>
                    <li><a href="#blog-section" class="nav-link">Blog</a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                </ul>
                <a href="#"
                    class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block light d-lg-none"
                    data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </nav>
    <div class="site-blocks-cover overlay" style="background-image: url({{asset($image)}});" data-aos="fade"
        data-stellar-background-ratio="0.5" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="0">I'm {{auth()->user()->name}} <br>{{$introduction_description}}</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="site-section" id="about-section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                    <div class="img-wrap">
                        <img src="{{asset($image)}}" alt="Image placeholder" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="section-heading">
                        <h2>My Bio</h2>
                    </div>
                    <p>{{$bio_info}}</p>
                    <div class="my-5">
                        <div class="skill">
                            @foreach($skills as $skill)
                            <h3>{{$skill->skill}}</h3>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <span>{{$skill->percentage_prowess}}%</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                    <p>
                        <a href="#contact-section" class="btn btn-primary smoothscroll">Hire Me</a>
                        <a href="#" class="btn btn-secondary">Download CV</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="untree_co-section" id="portfolio-section">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center col-md-12" data-aos="fade-up" data-aos-delay="0">
                    <h2>My Portfolio</h2>
                </div>
            </div>
            
            <div class="filters-content mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="grid">
                    @foreach($portfolios as $portfolio)
                    <div class="single-portfolio col-sm-4 all mockup">
                        <a href="{{asset($portfolio->image)}}" data-fancybox="gal">
                            <img src="{{asset($portfolio->image)}}" alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>{{$portfolio->project_name}}</h3>
                                
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="untree_co-section" id="services-section">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center col-md-12 mb-5" data-aos="fade-up" data-aos-delay="0">
                    <h2>Services</h2>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-md-6 col-lg-4 text-center mb-5" data-aos="fade-up" data-aos-delay="100">  
                    <div class="site-service-item" data-animate-effect="fadeIn">
                        <span class="icon">
                            <img src="{{asset($service->image)}}"  alt="Image" class="img-fluid">
                        </span>
                        <h3 class="mb-4">{{$service->service_name}}</h3>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="untree_co-section" id="resume-section">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center col-md-12 mb-5" data-aos="fade-up" data-aos-delay="0">
                    <h2>Resume</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{asset($image)}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="mb-5">Work Experience</h3>
                    @foreach($experience as $experience)
                    <div class="resume-item d-flex work">
                        <div>
                            <h4>{{$experience->role}}</h4>
                            <div class="d-flex">
                                <div class="d-flex resume-meta">
                                    <span class="mr-3">
                                        <span class="icon">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-building"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                                <path
                                                    d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                            </svg>
                                        </span>
                                        <span>{{$experience->company_name}}</span>
                                    </span>
                                    <span class="icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg>
                                    </span>
                                    <span>{{$experience->location}}</span>
                                </div>
                                <div></div>
                            </div>
                        </div>
                        <div class="ml-auto resume-meta">
                            <div class="clearfix">
                                <span class="period d-block float-right"><span>{{$experience->employment_type}}</span></span>
                            </div>
                            <span class="icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-event"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
                                    <path fill-rule="evenodd"
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z" />
                                    <rect width="2" height="2" x="11" y="6" rx=".5" />
                                </svg>
                            </span>
                            <span>{{$experience->start_date}}</span> -->  <span>{{$experience->end_date}}</span>
                        </div>
                    </div>
                    @endforeach
                    <h3 class="mt-5 mb-3">Education</h3>
                    <div class="resume-item d-flex work">
                        @foreach($education as $education)
                        <div>
                            <h4>{{$education->education_level}}</h4>
                            <div class="d-flex">
                                <div class="d-flex resume-meta">
                                    <span class="mr-3">
                                        <span class="icon">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi bi-calendar-event" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
                                                <path fill-rule="evenodd"
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z" />
                                                <rect width="2" height="2" x="11" y="6" rx=".5" />
                                            </svg>
                                        </span>
                                        <span>{{$education->institution_name}}</span>
                                    </span>
                                </div>
                                <div></div>
                            </div>
                        </div>
                        <div class="ml-auto resume-meta">
                            <span class="icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-event"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
                                    <path fill-rule="evenodd"
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z" />
                                    <rect width="2" height="2" x="11" y="6" rx=".5" />
                                </svg>
                            </span>
                            <span>{{$education->start_date}} - {{$education->end_date}} </span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section bg-light" id="testimonials-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="0">
                    <div class="section-heading text-center">
                        <h2>Happy Clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="block-47 d-flex mb-5">
                        <div class="block-47-image">
                            <img src="{{asset('websiteassets/images/person_1.jpg')}}" alt="Image placeholder" class="img-fluid">
                        </div>
                        <blockquote class="block-47-quote">
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                                the coast of the Semantics, a large language ocean.&rdquo;</p>
                            <cite class="block-47-quote-author">&mdash; Jeremy Winston, CEO <a href="#">XYZ
                                    Inc.</a></cite>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="block-47 d-flex mb-5">
                        <div class="block-47-image">
                            <img src="{{asset('websiteassets/images/person_2.jpg')}}" alt="Image placeholder" class="img-fluid">
                        </div>
                        <blockquote class="block-47-quote">
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                                the coast of the Semantics, a large language ocean.&rdquo;</p>
                            <cite class="block-47-quote-author">&mdash; Richard Atkinson, CEO <a href="#">XYZ
                                    Inc.</a></cite>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="block-47 d-flex mb-5">
                        <div class="block-47-image">
                            <img src="{{asset('websiteassets/images/person_3.jpg')}}" alt="Image placeholder" class="img-fluid">
                        </div>
                        <blockquote class="block-47-quote">
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                                the coast of the Semantics, a large language ocean.&rdquo;</p>
                            <cite class="block-47-quote-author">&mdash; Jeremy Winston, CEO <a href="#">XYZ
                                    Inc.</a></cite>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="block-47 d-flex mb-5">
                        <div class="block-47-image">
                            <img src="{{asset('websiteassets/images/person_4.jpg')}}" alt="Image placeholder" class="img-fluid">
                        </div>
                        <blockquote class="block-47-quote">
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                                the coast of the Semantics, a large language ocean.&rdquo;</p>
                            <cite class="block-47-quote-author">&mdash; Richard Atkinson, CEO <a href="#">XYZ
                                    Inc.</a></cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section" id="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5" data-aos="fade-up" data-aos-delay="0">
                    <div class="section-heading text-center">
                        <h2>Read on Medium</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <ul class="list-unstyled blog-entries">
                        <li data-aos="fade-up" data-aos-delay="100">
                            <a href="#" class="d-block d-md-flex justify-content-between align-items-center">
                                <div>
                                    <span class="d-block date">Jun 28, 2020</span>
                                    <h3>Front-end Developer Demands today</h3>
                                </div>
                                <span class="read">
                                    2 mins read
                                </span>
                            </a>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <a href="#" class="d-block d-md-flex justify-content-between align-items-center">
                                <div>
                                    <span class="d-block date">Jun 28, 2020</span>
                                    <h3>I Used React JS</h3>
                                </div>
                                <span class="read">
                                    2 mins read
                                </span>
                            </a>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            <a href="#" class="d-block d-md-flex justify-content-between align-items-center">
                                <div>
                                    <span class="d-block date">Jun 28, 2020</span>
                                    <h3>Why Front-end Developer So Important</h3>
                                </div>
                                <span class="read">
                                    2 mins read
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section" id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5" data-aos="fade-up" data-aos-delay="0">
                    <div class="section-heading text-center">
                        <h2>Contact Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <form class="contact-form" data-aos="fade-up" data-aos-delay="100">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="" for="fname">First name</label>
                                    <input type="text" class="form-control" id="fname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="" for="lname">Last name</label>
                                    <input type="text" class="form-control" id="lname">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="" for="email">Email address</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label class="" for="message">Message</label>
                            <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="h5 mb-4">Contact Info</h3>
                    <address class="text-black d-flex"><span class="mt-1 icon-room mr-2"></span><span>43 Raymouth Rd.
                            Baltemoer, London 3910</span></address>
                    <ul class="list-unstyled ul-links mb-4">
                        <li class="mb-3"><a href="tel://11234567890" class="d-flex"><span
                                    class="mt-1 icon-phone mr-2"></span><span>+1(123)-456-7890</span></a></li>
                        <li class="mb-3"><a href="tel://11234567890" class="d-flex"><span
                                    class="mt-1 icon-phone mr-2"></span><span>+1(123)-456-7890</span></a></li>
                        <li class="mb-3"><a
                                href="https://preview.colorlib.com/cdn-cgi/l/email-protection#7a13141c153a17031e15171b131454191517"
                                class="d-flex"><span class="mt-1 icon-envelope mr-2"></span><span><span
                                        class="__cf_email__"
                                        data-cfemail="50393e363f103d29343f3d31393e7e333f3d">[email&#160;protected]</span></span></a>
                        </li>
                        <li class="mb-3"><a href="https://colorlib/" target="_blank" class="d-flex"><span
                                    class="mt-1 icon-globe mr-2"></span><span>https://Colorlib/</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer">
        <div class="footer-dots"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>About Orbit<span class="text-primary">.</span> </h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                    <div class="widget">
                        <h3>Connect</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 ml-auto">
                    <div class="widget">
                        <h3>Navagation</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS3</a></li>
                            <li><a href="#">jQuery</a></li>
                            <li><a href="#">Bootstrap</a></li>
                            <li><a href="#">Javascript</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget">
                        <h3>Services</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">eCommerce</a></li>
                            <li><a href="#">WordPress</a></li>
                            <li><a href="#">Frontend</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a
                                    href="https://preview.colorlib.com/cdn-cgi/l/email-protection#177e797178577a6e73787a767e793974787a"><span
                                        class="__cf_email__"
                                        data-cfemail="cea7a0a8a18ea3b7aaa1a3afa7a0e0ada1a3">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>

                        Copyright &copy;<script data-cfasync="false"
                            src="{{asset('websiteassets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart text-danger"
                            aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <script src="{{asset('websiteassets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('websiteassets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('websiteassets/js/popper.min.js')}}"></script>
    <script src="{{asset('websiteassets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('websiteassets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('websiteassets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('websiteassets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('websiteassets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('websiteassets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('websiteassets/js/aos.js')}}"></script>
    <script src="{{asset('websiteassets/js/imagesloaded.pkgd.js')}}"></script>
    <script src="{{asset('websiteassets/js/custom.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
          window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7d93ce6118c69cfd","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>
</html>