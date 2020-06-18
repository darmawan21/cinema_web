<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/style.css">

    <title>Hello, world!</title>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">NETTER.CO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto  ">
                    <a class="nav-item nav-link" href="#">Now Playing</a>
                    <a class="nav-item nav-link" href="#">Upcoming</a>
                    <a class="nav-item nav-link" href="#">Theaters</a>
                    <a class="nav-item nav-link" href="#">Promotions</a>
                    <a class="nav-item nav-link" href="#">News & Event</a>
                    <a class="nav-item btn btn-danger tombol" href="#">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- jumbotron with carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url(asset/images/golira.png);">
                <div class="carousel-caption">
                    <div class="durasi">Duration: 1h 47m</div>
                    <div class="genre">Action | Adventure | Fantasy</div>
                    <div class="iconn"><i class="fa fa-star"></i> 6.5 </div>
                    <h1>Rampage</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                        diam voluptua. At vero eos et Lorem ipsum dolor sit </p>
                    <div class="tml">
                        <a class="btn btn-danger tombol" href="#">Book Now</a>
                    </div>
                    <div class="details">
                        <a href="#">See Details</a>
                        <i class="fa fa-chevron-circle-right"></i>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image:url(asset/images/golira.png);">
                <div class="carousel-caption">
                    <div class="durasi">Duration: 1h 47m</div>
                    <div class="genre">Action | Adventure | Fantasy</div>
                    <div class="iconn"><i class="fa fa-star"></i> 6.5 </div>
                    <h1>Rampage</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                        diam voluptua. At vero eos et Lorem ipsum dolor sit </p>
                    <div class="tml">
                        <a class="btn btn-danger tombol" href="#">Book Now</a>
                    </div>
                    <div class="details">
                        <a href="#">See Details</a>
                        <i class="fa fa-chevron-circle-right"></i>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end jumbotron with carousel -->


    <!-- Now Playing -->
    <!--Carousel Wrapper-->
    <div class="geser">
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <h2 class=" judul">Now Playing</h2>
                    </div>
                </div>
                <!--Indicators-->

                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                        <div class="row">
                            <div class="col-2">
                                <a href="">
                                    <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                                </a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="font-rating">8.1</span>
                                <p class="poster-title">Avengers: Endgame</p>
                                <p class="poster-genre">Action, Adventure, Fantasy</p>
                                <p class="poster-duration">Duration: 3h 1m</p>
                                <a class="btn btn-danger tombol poster-tombol" href="#">Book Now</a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                    <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                                </a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="font-rating">8.1</span>
                                <p class="poster-title">Avengers: Endgame</p>
                                <p class="poster-genre">Action, Adventure, Fantasy</p>
                                <p class="poster-duration">Duration: 3h 1m</p>
                                <a class="btn btn-danger tombol poster-tombol" href="#">Book Now</a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                    <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                                </a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="font-rating">8.1</span>
                                <p class="poster-title">Avengers: Endgame</p>
                                <p class="poster-genre">Action, Adventure, Fantasy</p>
                                <p class="poster-duration">Duration: 3h 1m</p>
                                <a class="btn btn-danger tombol poster-tombol" href="#">Book Now</a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                    <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                                </a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="font-rating">8.1</span>
                                <p class="poster-title">Avengers: Endgame</p>
                                <p class="poster-genre">Action, Adventure, Fantasy</p>
                                <p class="poster-duration">Duration: 3h 1m</p>
                                <a class="btn btn-danger tombol poster-tombol" href="#">Book Now</a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                    <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                                </a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="font-rating">8.1</span>
                                <p class="poster-title">Avengers: Endgame</p>
                                <p class="poster-genre">Action, Adventure, Fantasy</p>
                                <p class="poster-duration">Duration: 3h 1m</p>
                                <a class="btn btn-danger tombol poster-tombol" href="#">Book Now</a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                    <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                                </a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="font-rating">8.1</span>
                                <p class="poster-title">Avengers: Endgame</p>
                                <p class="poster-genre">Action, Adventure, Fantasy</p>
                                <p class="poster-duration">Duration: 3h 1m</p>
                                <a class="btn btn-danger tombol poster-tombol" href="#">Book Now</a>
                            </div>
                        </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">

                        <div class="row">
                            <div class="col-2">
                                <a href="">
                                    <img class="img-fluid" src="asset/upcoming/2.png" alt="">
                                </a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="font-rating">8.1</span>
                                <p class="poster-title">Avengers: Endgame</p>
                                <p class="poster-genre">Action, Adventure, Fantasy</p>
                                <p class="poster-duration">Duration: 3h 1m</p>
                                <a class="btn btn-danger tombol poster-tombol" href="#">Book Now</a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                    <img class="img-fluid" src="asset/upcoming/2.png" alt="">
                                </a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="font-rating">8.1</span>
                                <p class="poster-title">Avengers: Endgame</p>
                                <p class="poster-genre">Action, Adventure, Fantasy</p>
                                <p class="poster-duration">Duration: 3h 1m</p>
                                <a class="btn btn-danger tombol poster-tombol" href="#">Book Now</a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                    <img class="img-fluid" src="asset/upcoming/2.png" alt="">
                                </a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="font-rating">8.1</span>
                                <p class="poster-title">Avengers: Endgame</p>
                                <p class="poster-genre">Action, Adventure, Fantasy</p>
                                <p class="poster-duration">Duration: 3h 1m</p>
                                <a class="btn btn-danger tombol poster-tombol" href="#">Book Now</a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                    <img class="img-fluid" src="asset/upcoming/2.png" alt="">
                                </a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="font-rating">8.1</span>
                                <p class="poster-title">Avengers: Endgame</p>
                                <p class="poster-genre">Action, Adventure, Fantasy</p>
                                <p class="poster-duration">Duration: 3h 1m</p>
                                <a class="btn btn-danger tombol poster-tombol" href="#">Book Now</a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                    <img class="img-fluid" src="asset/upcoming/2.png" alt="">
                                </a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="font-rating">8.1</span>
                                <p class="poster-title">Avengers: Endgame</p>
                                <p class="poster-genre">Action, Adventure, Fantasy</p>
                                <p class="poster-duration">Duration: 3h 1m</p>
                                <a class="btn btn-danger tombol poster-tombol" href="#">Book Now</a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                    <img class="img-fluid" src="asset/upcoming/2.png" alt="">
                                </a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="font-rating">8.1</span>
                                <p class="poster-title">Avengers: Endgame</p>
                                <p class="poster-genre">Action, Adventure, Fantasy</p>
                                <p class="poster-duration">Duration: 3h 1m</p>
                                <a class="btn btn-danger tombol poster-tombol" href="#">Book Now</a>
                            </div>
                        </div>

                    </div>
                    <!--/.Second slide-->
                    <!--Third slide-->
                    <!--/.Third slide-->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev poster-prev" href="#multi-item-example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next poster-next" href="#multi-item-example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!-- end controls -->
            </div>
        </div>
    </div>
    <!--/.Carousel Wrapper-->
    <!-- End Now Playing -->

    <!-- The Most Popular Upcoming -->
    <div class="vthumbnail">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <h2 class=" judul">The Most Popular Upcoming</h2>
                </div>
            </div>
            <div class="row popular">
                <div class="col">
                    <img src="asset/popular/video/workingspace.jpg" alt="">
                </div>
                <div class="col popular-all">
                    <p class="popular-genre">Thriller/Sci-Fi</p>
                    <h1>The Meg (2018)</h1>
                    <p class="popular-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                        diam voluptua. At vero eos et Lorem ipsum dolor sit </p>
                    <a class="btn btn-danger tombol " href="#">Book Now</a>
                    <div class="popular-details"><a href="#">See Details</a><i class="fa fa-chevron-circle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End The Most Popular Upcoming -->


    <!-- Upcoming -->

    <div class="upcoming" id="upcoming">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <h2 class=" judul">Upcoming</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-2 ">
                    <a href="">
                        <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                    </a>
                    <p class="text-center upcoming-title">Avengers: Endgame</p>
                    <p class="text-center upcoming-genre">Action, Adventure, Fantasy</p>
                </div>

                <div class="col-2 ">
                    <a href="">
                        <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                    </a>
                    <p class="text-center upcoming-title">Avengers: Endgame</p>
                    <p class="text-center upcoming-genre">Action, Adventure, Fantasy</p>
                </div>

                <div class="col-2 ">
                    <a href="">
                        <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                    </a>
                    <p class="text-center upcoming-title">Avengers: Endgame</p>
                    <p class="text-center upcoming-genre">Action, Adventure, Fantasy</p>
                </div>

                <div class="col-2 ">
                    <a href="">
                        <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                    </a>
                    <p class="text-center upcoming-title">Avengers: Endgame</p>
                    <p class="text-center upcoming-genre">Action, Adventure, Fantasy</p>
                </div>

                <div class="col-2 ">
                    <a href="">
                        <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                    </a>
                    <p class="text-center upcoming-title">Avengers: Endgame</p>
                    <p class="text-center upcoming-genre">Action, Adventure, Fantasy</p>
                </div>

                <div class="col-2 ">
                    <a href="">
                        <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                    </a>
                    <p class="text-center upcoming-title">Avengers: Endgame</p>
                    <p class="text-center upcoming-genre">Action, Adventure, Fantasy</p>
                </div>

                <div class="col-2 ">
                    <a href="">
                        <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                    </a>
                    <p class="text-center upcoming-title">Avengers: Endgame</p>
                    <p class="text-center upcoming-genre">Action, Adventure, Fantasy</p>
                </div>

                <div class="col-2 ">
                    <a href="">
                        <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                    </a>
                    <p class="text-center upcoming-title">Avengers: Endgame</p>
                    <p class="text-center upcoming-genre">Action, Adventure, Fantasy</p>
                </div>

                <div class="col-2 ">
                    <a href="">
                        <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                    </a>
                    <p class="text-center upcoming-title">Avengers: Endgame</p>
                    <p class="text-center upcoming-genre">Action, Adventure, Fantasy</p>
                </div>

                <div class="col-2 ">
                    <a href="">
                        <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                    </a>
                    <p class="text-center upcoming-title">Avengers: Endgame</p>
                    <p class="text-center upcoming-genre">Action, Adventure, Fantasy</p>
                </div>

                <div class="col-2 ">
                    <a href="">
                        <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                    </a>
                    <p class="text-center upcoming-title">Avengers: Endgame</p>
                    <p class="text-center upcoming-genre">Action, Adventure, Fantasy</p>
                </div>

                <div class="col-2 ">
                    <a href="">
                        <img class="img-fluid" src="asset/upcoming/1.png" alt="">
                    </a>
                    <p class="text-center upcoming-title">Avengers: Endgame</p>
                    <p class="text-center upcoming-genre">Action, Adventure, Fantasy</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg upcoming-details">
                    <a href="#">See Details</a><i class="fa fa-chevron-circle-right"></i>
                </div>
            </div>

        </div>
    </div>
    </section>

    <!-- end Upcoming -->

    <!-- News & Event -->

    <section class="newevent">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <h2 class=" judul">New & Event</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-6 newevent-img">
                    <img src="asset/popular/video/workingspace.jpg" alt="">
                    <a href="" class="newevent-caption0">Ini Dia Durasi Film Terbaru Garapan Sutradara Hereditary!</a>
                </div>
                <div class="col-3 newevent-layout ">
                    <img src="asset/popular/video/workingspace.jpg" alt="">
                </div>
                <div class="col-3">
                    <h3 class="newevent-caption1">Yuk Intip Sinopsis Godzilla Vs Kong!</h3>
                </div>
                <div class="col-3 newevent-layout offset-6 newevent-grid1 ">
                    <img src="asset/popular/video/workingspace.jpg" alt="">
                </div>
                <div class="col-3 ">
                    <h3 class="newevent-caption2 newevent-grid1">Yuk Intip Sinopsis Godzilla Vs Kong!</h3>
                </div>
                <div class="col-3 newevent-layout offset-6 newevent-grid2">
                    <img src="asset/popular/video/workingspace.jpg" alt="">
                </div>
                <div class="col-3 ">
                    <h3 class="newevent-caption3 newevent-grid2">Yuk Intip Sinopsis Godzilla Vs Kong!</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- End News  -->

    <!-- Footer -->
    <!-- Footer -->
    <footer class="page-footer font-small indigo">

        <!-- Footer Links -->
        <div class="container">


            <!-- Grid row-->
            <div class="">
                <h1 class="footer-title">NETTER.CO</h1>
            </div>


            <!-- Grid row-->
            <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

                <!-- Grid column -->
                <div class="col-md-6 col-12 mt-5">
                    <p class="footer-caption">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                </div>
                <!-- Grid column -->

            </div>


            <!-- Grid row-->
            <div class="footer-link row text-center d-flex justify-content-center pt-5 mb-3">

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class=" font-weight-bold">
                        <a class="footer-color" href="#!">Contact Us</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class=" font-weight-bold">
                        <a class="footer-color" href="#!">Privacy Policy</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class=" font-weight-bold">
                        <a class="footer-color" href="#!">Terms of Usage</a>
                    </h6>
                </div>
                <!-- Grid column -->

            </div>

            <!-- Grid row-->
            <hr class="footer-line rgba-white-light" style="margin-top: -10px; color:white;">

            <!-- Grid row-->
            <hr class="clearfix d-md-none rgba-white-light" style="margin-top: -20px;">

            <!-- Grid row-->
            <div class="row pb-3 footer-sosmed">

                <!-- Grid column -->
                <div class="col-md-12">

                    <div class="col text-center">

                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fa fa-facebook-f fa-lg white-text mr-3"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fa fa-twitter fa-lg white-text mr-1"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fa fa-linkedin-in fa-lg white-text mr-1"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fa fa-instagram fa-lg white-text mr-3"> </i>
                        </a>
                        <!--Pinterest-->
                        <a class="pin-ic">
                            <i class="fa fa-pinterest fa-lg white-text"> </i>
                        </a>

                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://darmawan21.github.io/netter.github.io/"> Netter.co</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <!-- End Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>