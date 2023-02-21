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

    <title>jhemylunnejed</title>
</head>

<body>
    <script src="https://use.fontawesome.com/7285f03539.js"></script>
    <main-header></main-header>


    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 pt-5 text-center section-title">
                <h1>Accommodation</h1>
            </div>
        </div>

        <div class="row justify-content-center gx-5">
            <div class="col-md-5 col-lg-5 glass m-3">
                <div class="row justify-content-center ">
                    <img class="img-t img-fluid" src="assets/open-cottage-small.jpg">
                    <h5 class="pt-3">Open Cottage (small)</h5>
                </div>
                <div class="d-flex justify-content-around text-center  p-3">
                    <div class="">
                        <i class="color-y fas fa-door-open"></i>
                        20 units
                    </div>
                    <div class="">
                        <i class="color-y fas fa-users"></i>
                        1-5 PAX
                    </div>
                    <div class="">
                        <span class="color-y">&#8369;</span>
                        500
                    </div>
                </div>

            </div>

            <div class="col-md-5 col-lg-5 glass m-3">
                <div class="row justify-content-around ">
                    <img class="img-t img-fluid" src="assets/open-cottage-big.jpg">
                    <h5 class="pt-3">Open Cottage (big)</h5>
                </div>
                <div class="d-flex justify-content-around text-center  p-3">
                    <div class="">
                        <i class="color-y fas fa-door-open"></i>
                        20 units
                    </div>
                    <div class="">
                        <i class="color-y fas fa-users"></i>
                        6-10 PAX
                    </div>
                    <div class="">
                        <span class="color-y">&#8369;</span>
                        800
                    </div>
                </div>

            </div>


        </div>

        <div class="row justify-content-center text-center">
            <div class=" col-md-12 col-lg-8 mt-3 mb-3">
                <h2 class="second-font">Cottages</h2>
                All open cottages are located at the side of the main adult pool, guests can enjoy their day tour by just renting open cottages while enjoying the sunset.
            </div>
        </div>

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

    </div>

    <div class="blue"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-5 glass m-3">
                <div class="row justify-content-center ">
                    <img class="img-t img-fluid" src="assets/kubo-small.JPG">
                    <h5 class="pt-3">Kubo (small)</h5>
                </div>
                <div class="row justify-content-center text-center  p-3">
                    <div class="col-4 col-md-6">
                        <i class="color-y fas fa-door-open"></i>
                        20 units
                    </div>
                    <div class="col-4 col-md-6">
                        <i class="color-y fas fa-users"></i>
                        6-10 PAX
                    </div>
                    <div class="col-4 col-md-6">
                        <span class="color-y">&#8369;</span>
                        1000
                    </div>
                </div>

            </div>

            <div class="col-md-5 col-lg-5 glass m-3">
                <div class="row justify-content-center ">
                    <img class="img-t img-fluid" src="assets/kubo-large.JPG">
                    <h5 class="pt-3">Kubo (big)</h5>
                </div>
                <div class="row justify-content-center text-center  p-3">
                    <div class="col-4 col-md-6">
                        <i class="color-y fas fa-door-open"></i>
                        20 units
                    </div>
                    <div class="col-4 col-md-6">
                        <i class="color-y fas fa-users"></i>
                        10-15 PAX
                    </div>
                    <div class="col-4 col-md-6">
                        <span class="color-y">&#8369;</span>
                        1500
                    </div>
                </div>

            </div>


        </div>

        <div class="row justify-content-center text-center">
            <div class="col-md-12 col-lg-8 mt-5">
                <h2 class="second-font">Kubo</h2>
                For those who want more privacy our Kubo is available, it is located in front of the fishing pond. It has easy access to the pool side and guests can easily lock their rooms for their own safety.
            </div>
        </div>

    </div>



    <div class="container ">
        <div class="row  no-gutters justify-content-center pt-5">
            <div class="glass col-md-12 col-lg-10 ">
                <div class="row ">
                    <div class="col-md-5">
                        <img class="img-fluid explore-img-r" src="assets/kubo-wroom.jpg">
                    </div>

                    <div class="col-md-7 mx-auto pool-text pool-text">
                        <h5 class="pt-3">Kubo w Room</h5>

                        <i class="color-y fas fa-door-open"></i>
                        30 units

                        <i class="color-y fas fa-users pl-4"></i>
                        4-6 PAX

                        <span class="color-y pl-4">&#8369;</span>
                        1800

                        <p class="pr-3">Our Kubo with room is designed for those groups of friends or families that want to spend the night in the resort, it has two divisions one is for the living room and one for the bedroom, the bedroom has a double deck bed that is suitable for 4-6 people.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container mb-5">
        <div class="row  no-gutters justify-content-center pt-5">
            <div class="glass col-md-12 col-lg-10 ">
                <div class="row ">
                    <div class="col-md-5">
                        <img class="img-fluid explore-img-r" src="assets/teepee-house.JPG">
                    </div>

                    <div class="col-md-7 mx-auto pool-text pool-text">
                        <h5 class="pt-3">Teepee House</h5>

                        <i class="color-y fas fa-door-open"></i>
                        30 units

                        <i class="color-y fas fa-users pl-4"></i>
                        1-2 PAX

                        <span class="color-y pl-4">&#8369;</span>
                        1000(day) 1500(night)


                        <p class="pr-3">Our Teepee house is made for couples that want a special date. It is located at the Chinese garden and near the mountains. Every couple can enjoy the view of the mountains and trees while staying at the Teepee house.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>









    <main-footer></main-footer>


    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>