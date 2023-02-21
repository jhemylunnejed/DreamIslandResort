<?php
include "connection.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>jhemylunnejed</title>
</head>





<body>

    <div class="fixed-top">
        <div class="logo-container-h justify-content-center justify-items-center pt-3 navbar-fixed-top">
            <a class="navbar-logo justify-content-center">
                <img class="navbar-logo img-fluid" src="assets/logo.png" width="132">
            </a>
        </div>

        <nav class="navbar-fixed-top navbar navbar-h navbar-expand-sm p-0 navbar-light ">

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto">
                    <li class=" nav-item pl-3">
                        <a id="text-white" class="navbar-fixed-top text-white  font-weight-bold nav-link links" href="index.php">Home</a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="navbar-fixed-top text-white nav-link font-weight-bold" href="explore.php">Explore</a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="navbar-fixed-top text-white nav-link font-weight-bold" href="accommodation.php">Accommodation</a>
                    </li>
                    <li class="nav-item pl-3 ">
                        <a class="navbar-fixed-top text-white nav-link font-weight-bold" href="promos.php">Promos</a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="navbar-fixed-top text-white nav-link font-weight-bold" href="rates.php">Rates</a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="navbar-fixed-top text-white nav-link font-weight-bold" href="bookings.php">Bookings</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

    <script src="https://use.fontawesome.com/7285f03539.js"></script>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <video class="d-block video-banner" autoplay muted loop>
                    <source src="assets/Dream Island Promo Vid.mov">
                </video>

            </div>
            <div class="carousel-item">
                <img class="d-block video-banner" src="./assets/pool-mickey.jpg" alt="Second slide">
                <div class="carousel-caption ">
                    <h5>Mickey Mouse Wave Pool</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block video-banner" src="./assets/pool-umbrella.jpg" alt="Second slide">
                <div class="carousel-caption">
                    <h5>Umbrella Private Pool</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block video-banner" src="./assets/pool-mountain.jpg" alt="Second slide">
                <div class="carousel-caption">
                    <h5>Mountain Infinity Pool</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block video-banner" src="./assets/pool-mickey.jpg" alt="Second slide">
                <div class="carousel-caption">
                    <h5>Cottages & Kubo</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block video-banner" src="./assets/teepee-house.JPG" alt="Second slide">
                <div class="carousel-caption">
                    <h5>Teepee House</h5>
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






    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 mt-5 section-title text-center">
                <h1 class="pointer-cursor" data-target="#carouselExampleIndicators" data-slide-to="0">Discover Dream Island Resort</h1>
            </div>



        </div>
        <div class="d-flex justify-content-center">


            <div class="pointer-cursor icons col-md-3 col-lg-2 text-center" data-target="#carouselExampleIndicators" data-slide-to="1">
                <div class="row">
                    <img class="image-hover img-fluid p-3" src="assets/wave-icon.png">

                </div>



                <!-- <div class="row">
                    <h6>Mickey Mouse Wavepool</h6>
                </div> -->

            </div>
            <div class="pointer-cursor col-md-3 col-lg-2 text-center" data-target="#carouselExampleIndicators" data-slide-to="2">
                <div class="row">
                    <img class="image-hover img-fluid p-3" src="assets/umbrella-icon.png">

                </div>
                <!-- <div class="row">
                    <h6>Umbrella Private Pool</h6>
                </div> -->


            </div>
            <div class="pointer-cursor icons  col-md-3 col-lg-2 text-center" data-target="#carouselExampleIndicators" data-slide-to="3">
                <div class="row">
                    <img class="img-fluid p-3" src="assets/mountain-icon.png">
                </div>
                <!-- <div class="row">
                    <h6>Mountain Infinity Pool</h6>
                </div> -->


            </div>
        </div>
        <div class="d-flex justify-content-center">


            <div class="pointer-cursor icons  col-4 col-md-3 col-lg-2  offset-lg-0 text-center" data-target="#carouselExampleIndicators" data-slide-to="4">
                <img class="img-fluid mb-2" src="assets/kubo-icon.png">
                <!-- <h6>Cottages & Kubo</h6> -->
            </div>
            <div class="pointer-cursor icons col-4 col-md-3 col-lg-2 text-center" data-target="#carouselExampleIndicators" data-slide-to="5">
                <img class="img-fluid mb-2" src="assets/teepee-icon.png">
                <!-- <h6>Teepee House</h6> -->
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a>SEE MORE</a>
        </div>
    </div>





    <!-- <form action="" name="form1" method="post" enctype="multipart/form-data">

        <input name="arrivaldate" class="mt-0 pt-0  " type="date">

        <button type="submit" name="insert" class=" ">Insert</button>
        <button type="submit" name="update" class="">Update</button>
        <button type="submit" name="delete" class="">Delete</button>

    </form> -->







    <section id="rates" class="rates-section">
        <div class="container">
            <form action="" name="form1" method="post" enctype="multipart/form-data">
                <div class="row mt-5 justify-content-between">



                    <div class="col-md-4">

                        <p>Arrival</p>

                        <input name="arrival_date" class="mt-0 pt-0 forms form-control-sm" type="date">
                    </div>

                    <div class="col-md-4">

                        <p>Room</p>

                        <input name="room" class="forms form-control-sm" type="text">
                    </div>
                    <div class="align-self-end">

                        <button type="submit" name="insert" class="pre-book-online">
                            BOOK ONLINE
                        </button>



                    </div>




                </div>
            </form>
        </div>
        <div class="container mt-5 mb-5">

            <div class="row">
                <div class="col-md-12 mt-3">
                    <h5>Entrance Fee</h5>
                </div>
            </div>







            <div class="entrance-fee col-md-12 pb-3">
                <div class="row justify-content-center">

                    <div class="col-md-5  justify-content-center text-center pt-3">
                        <h6>Day Rate</h6>
                        <div class="hr-yellow"></div>
                        <table>
                            <tr>
                                <td></td>
                                <td>Weekday</td>
                                <td>Weekend/<br>Holiday</td>
                            </tr>
                            <tr>
                                <td>Adult</td>
                                <td>200</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>Kids</td>
                                <td>170</td>
                                <td>170</td>
                            </tr>
                            <tr>
                                <td>Senior</td>
                                <td>190</td>
                                <td>190</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-5  justify-content-center text-center pt-3">

                        <h6>Night Rate</h6>
                        <div class="hr-gray"></div>
                        <table>
                            <tr>
                                <td></td>
                                <td>Weekday</td>
                                <td>Weekend/<br>Holiday</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Adult</td>
                                <td>230</td>
                                <td>260</td>
                            </tr>
                            <tr>
                                <td>Kids</td>
                                <td>200</td>
                                <td>230</td>
                            </tr>
                            <tr>
                                <td>Senior</td>
                                <td>220</td>
                                <td>250</td>
                            </tr>
                        </table>
                    </div>

                </div>
                <img class="em-flamingo" src="assets/em-flamingo-float.png">
            </div>








        </div>


    </section>

    <footer id="contact-section" class="contact-section">
        <div class="container-fluid pt-5 pb-5">
            <div class="row justify-content-between">
                <div class="col-12  justify-content-center">
                    <img class="img-fluid" src="assets/logo.png">
                    <ul class="list-unstyled">
                        <li>
                            <a target="_blank" href="https://www.facebook.com/dreamislandresortdrt/" class="text-dark font-weight-bold"><i class="pl-lg-5 fa fa-facebook" aria-hidden="true"></i>
                                Dream-Island Resort</a>
                        </li>
                        <li>
                            <a href="" class="text-dark font-weight-bold"><i class="pl-lg-5 fa fa-instagram" aria-hidden="true"></i>
                                Dream-Islandresort</a>
                        </li>
                        <li>
                            <p class="font-weight-bold"><i class="pl-lg-5 fa fa-phone" aria-hidden="true"></i>
                                09776206943</p>
                        </li>
                    </ul>




                </div>

                <div class="rounded-yellow col-md-8 col-lg-6 text-center">
                    <img class="pt-3 img-fluid" src="./assets/di_map.png">
                    <span class="pt-1 pb-3"><i class="fa-solid fa-location-dot"></i>
                        53WX+8VM, Doña Remedios Trinidad, Bulacan
                    </span>
                </div>
            </div>



        </div>




    </footer>












    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>





</html>