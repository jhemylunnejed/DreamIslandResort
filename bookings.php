<?php
include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-12">
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


    <div class="container mt-5 mb-5">
        <form action="" name="form1" method="post" enctype="multipart/form-data">
            <div class="row justify-content-between">
                <div class="col-md-7 col-lg-6">
                    <div class="row">

                        <h2>Bookings</h2>

                        <!-- PERSONAL INFO -->
                        <div class="col-md-12 glass  p-3">
                            <p class="text-decoration-underline">Personal Information</p>
                            <!-- Arrival Row     -->
                            <div class="row justify-content-around">
                                <div class="col-md-6">

                                    <h6>First name</h6>

                                    <input name="first_name" class="mt-0 pt-0 forms form-control-sm" type="text">
                                </div>

                                <div class="col-md-6">

                                    <h6>Last name</h6>

                                    <input name="last_name" class="mt-0 pt-0 forms form-control-sm" type="text">
                                </div>
                            </div>
                            <!-- Adult Row -->
                            <div class="row justify-content-around">
                                <div class="col-md-6 pt-3">

                                    <h6>Email</h6>

                                    <input name="email" class="mt-0 pt-0 forms form-control-sm" type="email">
                                </div>

                                <div class="col-md-6 pt-3">

                                    <h6>Phone</h6>

                                    <input name="contact" class="mt-0 pt-0 forms form-control-sm" type="number">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-center">

                        <!-- BOOKINGS FORM -->
                        <div class="col-md-12 glass mt-5 m-md-5 justify-content-center p-3">
                            <!-- Arrival Row     -->
                            <div class="row justify-content-around">
                                <div class="col-md-6 pt-3">

                                    <h6>Arrival</h6>

                                    <input min="<?php echo date("Y-m-d"); ?>" id="arrival_date" name="arrival_date" class="mt-0 pt-0 forms form-control-sm" type="date" onChange="getResult()">
                                </div>

                                <div class="col-md-6 pt-3">

                                    <h6>Type</h6>

                                    <select name="stay_type" class="forms form-select" aria-label="Default select example">
                                        <option value="Day Time" selected>Day Time</option>
                                        <option value="Overnight">Overnight</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Adult Row -->
                            <div class="row justify-content-around">
                                <div class="col-md-3 pt-3">

                                    <h6>Adult</h6>

                                    <input id="adults_count" name="adults_count" class="forms form-control-sm" type="number" onChange="getResult()">
                                </div>

                                <div class="col-md-3 pt-3">

                                    <h6>Kid</h6>

                                    <input id="kids_count" name="kids_count" class="forms form-control-sm" type="number" onChange="getResult()">
                                </div>
                                <div class="col-md-6 pt-3">
                                    <h6>Promo Code</h6>
                                    <input class="forms form-control-sm" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pt-3">
                                    <h6>Accommodation</h6>
                                    <!-- <input class="forms form-control-sm" type="text"> -->
                                    <select id="room_id" name="room_id" class="forms form-select" aria-label="Default select example" onChange="getResult()">
                                        <option value="0" selected>Open Cottage (Small)</option>
                                        <option value="1">Open Cottage (Big)</option>
                                        <option value="2">Kubo (Small)</option>
                                        <option value="3">Kubo (Big)</option>
                                        <option value="4">Kubo w Room</option>
                                        <option value="5">Teepee House</option>
                                    </select>



                                    <div class="pt-3">
                                        <h6>Ameneties</h6>

                                        <div class="pt-1 form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Locker
                                            </label>
                                        </div>

                                        <div class="pt-1 form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Videoke
                                            </label>
                                        </div>

                                        <div class="pt-1 form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Fishing
                                            </label>

                                        </div>
                                    </div>

                                    <label id="mylabel"></label>



                                </div>

                                <script type="text/javascript">
                                    var roomPrice = 0;

                                    var num = document.getElementById('room_id').value;

                                    <?php $res = mysqli_query($link, "select * from room");
                                    while ($row = mysqli_fetch_array($res)) {
                                    ?>
                                        if (num == <?php echo $row["room_id"] ?>) {

                                            roomPrice = <?php echo $row["price"]; ?>;

                                        }
                                    <?php
                                    }
                                    ?>

                                    var kidEntrance = document.getElementById('kids_count').value * (100);
                                    var adultEntrance = document.getElementById('adults_count').value * 100;
                                    var totalPrice = roomPrice + kidEntrance + adultEntrance;
                                    document.getElementById('mylabel').innerHTML = totalPrice;


                                    var date = document.getElementById('arrival_date').value;
                                    alert(date);

                                    function isWeekend(date = new Date()) {
                                        return date.getDay() === 6 || date.getDay() === 0;
                                    }

                                    function getResult() {

                                        var num = document.getElementById('room_id').value;

                                        <?php $res = mysqli_query($link, "select * from table1 join room on table1.room_id=room.room_id");
                                        while ($row = mysqli_fetch_array($res)) {
                                        ?>
                                            if (num == <?php echo $row["room_id"] ?>) {

                                                roomPrice = <?php echo $row["price"]; ?>;



                                                document.getElementById('mylabel').innerHTML = <?php echo $row["price"]; ?>;
                                            }
                                        <?php



                                        }

                                        ?>

                                        date = document.getElementById('arrival_date').value;
                                        alert(date);
                                        var d1 = new Date(date);
                                        alert(isWeekend(d1));


                                        if (isWeekend(d1)) {
                                            adultEntrance = document.getElementById('adults_count').value*200;
                                            kidEntrance = document.getElementById('kids_count').value;
                                        } else {
                                            adultEntrance = document.getElementById('adults_count').value;
                                            kidEntrance = document.getElementById('kids_count').value;

                                        }

                                        totalPrice = roomPrice + kidEntrance + adultEntrance;

                                        document.getElementById('mylabel').innerHTML = totalPrice;



                                    }
                                </script>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">

                        <h5>Accommodation</h5>

                        <!-- PERSONAL INFO -->
                        <div class="col-md-12 glass">
                            <div class="row ">
                                <img class="img-t img-fluid" src="assets/open-cottage-small.jpg">

                            </div>
                            <div class="row p-3">
                                <h5>Open Cottage (small)</h5>
                            </div>
                            <div class="row justify-content-center text-center pl-1 pr-1 pb-3">
                                <div class="col-4">
                                    <span><i class="color-y fas fa-door-open"></i>20 units</span>
                                </div>
                                <div class="col-4">

                                    <span><i class="color-y fas fa-users"></i>10-15 PAX</span>
                                </div>
                                <div class="col-4">
                                    <span><span class="color-y">&#8369;</span>
                                        1500</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <button type="submit" name="insert" class="pre-book-online">
                    BOOK ONLINE
                </button>
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST["insert"])) {

        mysqli_query($link, "insert into `table1` (`id`, `first_name`, `last_name`, `email`, `contact`, `date`, `stay_type`, `room_id`, `adults_count`, `kids_count`)
        values(NULL,
                '$_POST[first_name]',
                '$_POST[last_name]',
                '$_POST[email]',
                '$_POST[contact]',
                '$_POST[arrival_date]',
                '$_POST[stay_type]',
                '$_POST[room_id]',
                '$_POST[adults_count]',
                '$_POST[kids_count]'
                 )");
    ?>
        <script type="text/javascript">
            window.location.href = window.location.href;
        </script>
    <?php }  ?>
    </div>












    <main-footer></main-footer>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>