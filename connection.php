<?php
$link = mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
mysqli_select_db($link, "dream_island_resort") or die(mysqli_error($link));
