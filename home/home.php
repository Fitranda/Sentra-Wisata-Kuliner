<nav class="navbar navbar-expand-sm navbar-dark position-fixed" style="background-color: #EFEFEF; color: #4773B8; z-index: 200; top: 0; left: 0; right: 0; ">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="assets/logo.svg" style="height: 40px;" alt="logo">
            <p class="mb-0 main-text">Sentra Wisata Kuliner</p>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active align-self-center">
                    <a class="nav-link main-text" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link main-text" href="#">Destination</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link main-text" href="#">Blog</a>
                </li>
                <li class="nav-item align-self-center d-flex align-items-center ml-4">
                    <img src="assets/icons/indonesia.svg" style="height: 20px;" alt="" srcset="">
                    <a class="nav-link main-text" href="#">ID</a>
                </li>

                <button class="btn btn-login ml-4">Login</button>
                <button class="btn btn-signup ml-4">Sign Up</button>

            
            </ul>
        
        </div>
    </nav>

    <div class="fluid-container " style="margin-top: 70px;">
        <div id="carouselId" class="carousel slide position-relative" data-ride="carousel">
            <div class="position-absolute" style="top:50px; right:100px; z-index: 100;">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="search...">
                  <button type="button" class="btn btn-primary">cari</button>
                </div>
            </div>
            <div class="linedots w-50"></div>
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active position-relative">
                    <img src="assets/img/Bukit Jaddih - Bangkalan-1.jpg" class="w-100 img-carousel" alt="First slide">
                    <div class="carousel-caption position-absoulute">
                        <h1>Find Your Suitable Destination</h1>
                        <p style="font-size: 20px;">Explore incredible things to do around Madura</p>
                    </div>
                    <div class="gradient-main1"></div>
                </div>
                <div class="carousel-item position-relative">
                    <img src="assets/img/Air Terjun Toroan - Sampang-3.jpg" class="w-100 img-carousel" alt="First slide">
                    <div class="carousel-caption position-absoulute">
                        <h1>Find Your Suitable Destination</h1>
                        <p style="font-size: 20px;">Explore incredible things to do around Madura</p>
                    </div>
                    <div class="gradient-main1"></div>
                </div>
                <div class="carousel-item position-relative">
                    <img src="assets/img/Bukit Waru - Pamekasan-1.jpg" class="w-100 img-carousel" alt="First slide">
                    <div class="carousel-caption position-absoulute">
                        <h1>Find Your Suitable Destination</h1>
                        <p style="font-size: 20px;">Explore incredible things to do around Madura</p>
                    </div>
                    <div class="gradient-main1"></div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container-fluid" style="padding:30px 50px; background: #EFEFEF;">
        <h2>Trending Tours</h2>
        <div class="line-main"></div>
        <div class="row mx-auto">
            <div class="col-md-3 col-sm-6 position-relative p-0">
                <img src="assets/img/Gili Iyang - Sumenep-1.jpg" class="img-trend my-2" alt="img-madura">
                <div class="gradient-main2 py-2"></div>
                <h5 class="position-absolute" style="bottom:10px; left:10px; color:white">Gili Iyang Sumenep</h5>
            </div>
            <div class="col-md-3 col-sm-6 position-relative p-0">
                <img src="assets/img/Air Terjun Toroan - Sampang-1.jpg" class="img-trend my-2" alt="img-madura">
                <div class="gradient-main2 py-2"></div>
                <h5 class="position-absolute" style="bottom:10px; left:10px; color:white">Air Terjun Toroan Sampang</h5>
            </div>
            <div class="col-md-3 col-sm-6 position-relative p-0">
                <img src="assets/img/Bukit Waru - Pamekasan-1.jpg" class="img-trend my-2" alt="img-madura">
                <div class="gradient-main2 py-2"></div>
                <h5 class="position-absolute" style="bottom:10px; left:10px; color:white">Bukit Waru Pamekasan</h5>
            </div>
            <div class="col-md-3 col-sm-6 position-relative p-0 ">
                <img src="assets/img/Gili Labak - Sumenep-1.jpg" class="img-trend my-2" alt="img-madura">
                <div class="gradient-main2 py-2"></div>
                <h5 class="position-absolute" style="bottom:10px; left:10px; color:white">Gili Labak Sumenep</h5>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 menu menu-show" style="background-color: #4773B8; padding: 20px 20px;">
                <h3 style="color: white;">Filter daerah</h3>
                <button type="button" class="btn btn-primary d-block d-md-none menuToggle">close</button>
                
                <div class="pl-4 py-2 daerah">
                    <h5 style="color: white;">Sampang</h5>
                </div>

                <div class="pl-4 py-2 daerah">
                    <h5 style="color: white;">Bangkalan</h5>
                </div>

                <div class="pl-4 py-2 daerah">
                    <h5 style="color: white;">Pamekasan</h5>
                </div>

                <div class="pl-4 py-2 daerah">
                    <h5 style="color: white;">Sumenep</h5>
                </div>
            </div>
            <div class="col-md-9" style="background-color: white; padding: 20px 20px;">

                <h2>Top Destination</h2>
                <div class="line-main"></div>

                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary d-block d-md-none menuToggle">filter</button>
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="search...">
                            <button type="button" class="btn btn-primary">cari</button>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 p-4 card-top">
                        <img src="assets/img/Gili Labak - Sumenep-1.jpg" class="w-100 img-top-des" alt="">
                        <div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">Gili Labak</p>
                                <p class="mb-0" style="color: #4773B8;">rate 4.6</p>
                            </div>
                            <p>Sumenep</p>
                        </div>
                    </div>
                    <div class="col-md-4 p-4 card-top">
                        <img src="assets/img/Air Terjun Toroan - Sampang-1.jpg" class="w-100 img-top-des" alt="">
                        <div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">Air Terjun Toroan</p>
                                <p class="mb-0" style="color: #4773B8;">rate 4.6</p>
                            </div>
                            <p>Sampang</p>
                        </div>
                    </div>
                    <div class="col-md-4 p-4 card-top">
                        <img src="assets/img/Bukit Arosbaya - Bangkalan-1.jpeg" class="w-100 img-top-des" alt="">
                        <div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">Bukit Arosbaya</p>
                                <p class="mb-0" style="color: #4773B8;">rate 4.6</p>
                            </div>
                            <p>Bangkalan</p>
                        </div>
                    </div>
                    <div class="col-md-4 p-4 card-top">
                        <img src="assets/img/Gili Labak - Sumenep-1.jpg" class="w-100 img-top-des" alt="">
                        <div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">Gili Labak</p>
                                <p class="mb-0" style="color: #4773B8;">rate 4.6</p>
                            </div>
                            <p>Sumenep</p>
                        </div>
                    </div>
                    <div class="col-md-4 p-4 card-top">
                        <img src="assets/img/Air Terjun Toroan - Sampang-1.jpg" class="w-100 img-top-des" alt="">
                        <div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">Air Terjun Toroan</p>
                                <p class="mb-0" style="color: #4773B8;">rate 4.6</p>
                            </div>
                            <p>Sampang</p>
                        </div>
                    </div>
                    <div class="col-md-4 p-4 card-top">
                        <img src="assets/img/Bukit Arosbaya - Bangkalan-1.jpeg" class="w-100 img-top-des" alt="">
                        <div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">Bukit Arosbaya</p>
                                <p class="mb-0" style="color: #4773B8;">rate 4.6</p>
                            </div>
                            <p>Bangkalan</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="" style="height: 300px; background: #EFEFEF;">
        <div class="row">
            <div class="col-md-8 offset-md-2" style="margin-top: 150px;">
                <div class="form-group d-flex">
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Insert your email her to subscribe...">
                    <button type="button" class="btn btn-primary">Subscribe</button>
                  </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-4" style="background-color: #303030;">
        <div class="d-flex justify-content-between">
            <div class="">
                <p style="color: white;">email : maduradestinasi@gmail.com</p>
                <p style="color: white;">phone : 0898237498</p>
            </div>

            <div class="">
                <ul class=" mt-2 mt-lg-0 d-flex">
                    <li class="nav-item active align-self-center">
                        <a class="nav-link main-text" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link main-text" href="#">Destination</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link main-text" href="#">Blog</a>
                    </li>
                    <li class="nav-item d-flex align-items-center ml-4">
                        <img src="assets/icons/indonesia.svg" style="height: 20px;" alt="" srcset="">
                        <a class="nav-link main-text" href="#">ID</a>
                    </li>
    
                    <button class="btn btn-login ml-4">Login</button>
                    <button class="btn btn-signup ml-4">Sign Up</button>
    
                    
                </ul>
            </div>


        </div>
        <div class="d-flex justify-content-center mt-5">
            <a class="navbar-brand mx-auto d-flex align-items-center" href="#">
                <p class="mb-0 mr-2 main-text">copyright 2022 by</p>
                <img src="assets/logo.svg" style="height: 40px;" alt="logo">
                <p class="mb-0 main-text">maduradestinasi.com</p>
            </a>

        </div>

    </div>

<script type="text/javascript">
    // Add an event listener to the login button
    $('.btn-login').on('click', function() {
    console.log('Login button clicked!');
    // You can also redirect to a login page or perform an AJAX request here
    window.location.href = 'http://sentra-wisata-kuliner.test/?f=home&m=login';
    });

    // Add an event listener to the signup button
    $('.btn-signup').on('click', function() {
    console.log('Signup button clicked!');
    // You can also redirect to a signup page or perform an AJAX request here
    window.location.href = 'http://sentra-wisata-kuliner.test/?f=home&m=register';
    });
</script>