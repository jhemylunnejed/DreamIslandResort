<?php
include "connection.php";
if ($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
    // Run the Query
    // Fetch Records
    // Echo the data you want to show in modal
    echo $id;
    $res = mysqli_query($link, "select * from table1 where Id=$id");
    while ($row = mysqli_fetch_array($res)) {
        $firstname = $row["first_name"];
        $lastname = $row["last_name"];
        $email = $row["email"];
        $contact = $row["contact"];
        $date = $row["date"];
        $stay_type = $row["stay_type"];
        $room = $row["room"];
        $status = $row["status"];
    }
}

?>

<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h3>Reservor Details</h3>

        <h4>Full name</h4>
        <p><?php echo $firstname . " " . $lastname; ?> </p>

        <h4>Contact#</h4>
        <p><?php echo $contact; ?> </p>


        <h4>Email</h4>
        <p><?php echo $email; ?> </p>

        <h3>Room Details</h3>

        <h3>Reservation Details</h3>
        <h4>Check-in Date</h4>
        <p><?php echo $date; ?> </p>
        <h4>Room</h4>
        <p><?php echo $room; ?> </p>
        <h4>Status</h4>



        <form action="edit.php" name="form1" method="post" enctype="multipart/form-data">

            <div class="col-3">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <select name="status" class="forms form-select" aria-label="Default select example">
                    <option value="0" <?php if ($status == 0) echo "selected"; ?>>Pending</option>
                    <option value="1" <?php if ($status == 1) echo "selected"; ?>>Confirmed</option>
                    <option value="2" <?php if ($status == 2) echo "selected"; ?>>Cancelled</option>
                    <option value="3" <?php if ($status == 3) echo "selected"; ?>>Completed</option>
                </select>
            </div>



            <a href="edit.php?id=<?php echo $id; ?>">
                <button type="submit" name="update" class="btn btn-default">Update</button>
            </a>
            <?php echo "</td>";
            echo "<td>"; ?>
            <a href="delete.php?id=<?php echo $id; ?>">
                <button type="button" class="btn-danger">Delete</button>
            </a> <?php echo "</td>";
                    echo "</tr>";

                    ?>




        </form>



        <?php

        echo "test";
        if (isset($_POST["update"])) {



            mysqli_query($link, "UPDATE `table1` SET `first_name` = 'Day' WHERE `table1`.`id` = $id");

        ?>
            <!-- <script type="text/javascript">
        window.location = "admin.php";
    </script> -->
        <?php
        }
        ?>
    </div>
    </div>
</body>



</html>