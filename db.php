<?php

        $con = mysqli_connect("localhost","root","") or die("DB not connected");
        mysqli_select_db($con,"address_book") or die("DB not found");


 ?>