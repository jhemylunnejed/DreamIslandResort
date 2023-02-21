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
    <title>jhemylunnejed</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="blue-bg">
    <script src="https://use.fontawesome.com/7285f03539.js"></script>

    <div class="sticky-top">
        <div class="logo-container justify-content-center justify-items-center pt-3">
            <a class="navbar-logo justify-content-center">
                <img class="navbar-logo img-fluid" src="assets/logo.png" width="132">
            </a>
        </div>


    </div>



    <section class="blue-bg pt-5 pb-5">
        <div class="container justify-content-center ">

            <?php
            $pendingCount = 0;
            $confirmedCount = 0;
            $cancelledCount = 0;

            $res = mysqli_query($link, "select * from table1");
            while ($row = mysqli_fetch_array($res)) {

                if ($row["status"] == 0) {
                    $pendingCount++;
                } else if ($row["status"] == 1) {
                    $confirmedCount++;
                } else if ($row["status"] == 2) {
                    $cancelledCount++;
                } else if ($row["status"] == 3) {
                    echo "completed";
                }
            }




            ?>

            <div class="row">
                <div class="glass col-md-9 justify-content-center m-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <img class="img-fluid w-50 p-3" src="assets/icon-pending.png">
                                <div class="w-50">
                                    <h6 class="pt-3">Pending Reservations</h6>
                                    <h1 class=""><?php echo $pendingCount; ?></h1>
                                </div>


                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <img class="img-fluid w-50 p-3" src="assets/icon-confirmed.png">
                                <div class="w-50">
                                    <h6 class="pt-3">Confirmed Reservations</h6>
                                    <h1 class=""><?php echo $confirmedCount; ?></h1>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <img class="img-fluid w-50 p-3" src="assets/icon-cancelled.png">
                                <div class="w-50">
                                    <h6 class="pt-3">Cancelled Reservations</h6>
                                    <h1 class=""><?php echo $cancelledCount; ?></h1>
                                </div>


                            </div>
                        </div>

                    </div>


                </div>
            </div>

            <div class="row justify-content-between">

                <div class="glass  col-md-12   justify-content-center text-center pt-3 pb-3">
                    <table>
                        <thead>
                            <tr>
                                <th>Ref.</th>
                                <th>Costumer Name</th>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Room</th>
                                <th>Contact</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $res = mysqli_query($link, "SELECT * from room");
                            while ($row = mysqli_fetch_array($res)) {
                                echo $row["room_id"];
                                echo "<br>";
                            }
                            ?>
                            <?php
                            $res = mysqli_query($link, "select * from table1 join room on table1.room_id=room.room_id");
                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";

                                echo "<td>";
                                echo $row["id"];
                                echo "</td>";


                                echo "<td>";
                                echo $row["first_name"];
                                echo " ";
                                echo $row["last_name"];
                                echo "</td>";

                                echo "<td>";
                                echo $row["date"];
                                echo "</td>";

                                echo "<td>";
                                echo $row["stay_type"];
                                echo "</td>";

                                echo "<td>";
                                echo $row["room_name"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["contact"];
                                echo "</td>";
                                echo "<td>";
                                if ($row["status"] == 0) {
                                    echo "pending";
                                    $pendingCount++;
                                } else if ($row["status"] == 1) {
                                    echo "confirmed";
                                    $confirmedCount++;
                                } else if ($row["status"] == 2) {
                                    echo "cancelled";
                                    $cancelledCount++;
                                } else if ($row["status"] == 3) {
                                    echo "completed";
                                }
                                echo "</td>";
                                echo "<td>";
                                // echo $row["status"] + 1;
                                echo "</td>";




                            ?>
                                <td>
                                    <a href="#myModal" class="btn btn-default btn-small" id="custId" data-toggle="modal" data-id="<?php echo $row['id']; ?>">Edit</a>
                                </td>

                                <script>
                                    $(document).ready(function() {
                                        $('#myModal').on('show.bs.modal', function(e) {
                                            var rowid = $(e.relatedTarget).data('id');

                                            $.ajax({
                                                type: 'post',
                                                url: 'fetch_record.php', //Here you will fetch records 
                                                data: 'rowid=' + rowid, //Pass $id
                                                success: function(data) {
                                                    $('.fetched-data').html(data); //Show fetched data from database
                                                }
                                            });
                                        });
                                        $('#myModal').on('hide.bs.modal', function(e) {
                                            $(".modal-fade").modal("hide");
                                            $(".modal-backdrop").remove();
                                        });
                                    });
                                </script>


                            <?php
                            }
                            ?>


                        </tbody>
                    </table>
                </div>

            </div>



        </div>




        </div>
    </section>

    <div class="modal fade" id="myModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modassl title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div> <?php echo $id ?>
                </div>
                <div class="modal-footer">
                    <a href="admin.php"><button type="button" class="btn btn-secondary">Close</button></a>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>











    <script src="script.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>