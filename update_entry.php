<?php
   require_once('db.php');
if(isset($_POST['sub']) and $_POST['sub']){


        $id = $_GET['id'];
		$fname = mysqli_real_escape_string($con,$_POST['fname']);
		$lname = mysqli_real_escape_string($con,$_POST['lname']);
        $street = mysqli_real_escape_string($con,$_POST['street']);
        $city = mysqli_real_escape_string($con,$_POST['city']);
		$pin = mysqli_real_escape_string($con,$_POST['pin']);
        $address_type = mysqli_real_escape_string($con,$_POST['address_type']);
        $telephone = mysqli_real_escape_string($con,$_POST['telephone']);
		$telephone_type = mysqli_real_escape_string($con,$_POST['telephone_type']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $email_type = mysqli_real_escape_string($con,$_POST['email_type']);
		$note = mysqli_real_escape_string($con,$_POST['note']);
        $sql = "UPDATE `information` SET `id`=$id,`firstname`='$fname',`lastname`='$lname',`s_address`= '$street',`city`='$city',`pincode`=$pin,`address_type`='$address_type',`telephone`='$telephone',`telephone_type`='$telephone_type',`email`='$email',`email_type`='$email_type',`note`='$note' WHERE `id`= $id";
        $res = mysqli_query($con,$sql);
        header('location:add_entry.php');
}

?>



<!DOCTYPE html>
<html>
<head>
<title>Address Book</title>
</head>
<body>
    <h1>Add an Entry</h1>
    <form method="post">
        <label for="fname">First Name</label><br>
        <input type="text" id="fname" name="fname" value=""><br><br>
        <label for="lname">Last Name</label><br>
        <input type="text" id="lname" name="lname" value=""><br><br>
        <label for="street">Street Address</label><br>
        <input type="text" id="street" name="street" value=""><br><br>
        <label for="city">City</label><br>
        <input type="text" id="city" name="city" value=""><br><br>
        <label for="pin">PinCode</label><br>
        <input type="value" id="pin" name="pin" value=""><br><br>
        <label for="address_type">Address Type</label><br>
        <input type="radio" id="home" name="address_type" value="home">
        <label for="home">Home</label>
        <input type="radio" id="work" name="address_type" value="work">
        <label for="work">Work</label>
        <input type="radio" id="other" name="address_type" value="other">
        <label for="other">Other</label><br><br>
        <label for="telephone">Telephone Number</label><br>
        <input type="value" id="telephone" name="telephone" value="">
        <input type="radio" id="thome" name="telephone_type" value="home">
        <label for="thome">Home</label>
        <input type="radio" id="twork" name="telephone_type" value="work">
        <label for="twork">Work</label>
        <input type="radio" id="tother" name="telephone_type" value="other">
        <label for="tother">Other</label><br><br>
        <label for="email">Email Address</label><br>
        <input type="email" id="email" name="email" value="">
        <input type="radio" id="ehome" name="email_type" value="home">
        <label for="ehome">Home</label>
        <input type="radio" id="ework" name="email_type" value="work">
        <label for="ework">Work</label>
        <input type="radio" id="eother" name="email_type" value="other">
        <label for="eother">Other</label><br><br>
        <label for="note">Personal Note</label><br>
        <textarea id="note" name="note" rows="4" cols="50"></textarea><br><br>
        <input type="submit" name="sub" value="Add Entry">

    </form>



</body>
</html>