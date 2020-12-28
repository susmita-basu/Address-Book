
<!DOCTYPE html>
<html>
<head>
<title>Address Book</title>
<style>
th{
    padding: 15px;
}
td{
    text-align:center;
}
</style>
</head>
<body>

<h1>Records</h1>
<table>

    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Street Address</th>
        <th>City</th>
        <th>PinCode</th>
        <th>Address Type</th>
        <th>Telephone Number</th>
        <th>Telephone Type</th>
        <th>Email Address</th>
        <th>email_type</th>
        <th>Personal Note</th>
        <th>Update</th>
        
    </tr>

    <?php 
    
    require_once('db.php');
    $sql = "SELECT * FROM `information`";
    $query =mysqli_query($con,$sql);
    while($res=mysqli_fetch_array($query)){
    ?>

<tr>
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['firstname'];?></td>
        <td><?php echo $res['lastname'];?></td>
        <td><?php echo $res['s_address'];?></td>
        <td><?php echo $res['city'];?></td>
        <td><?php echo $res['pincode'];?></td>
        <td><?php echo $res['address_type'];?></td>
        <td><?php echo $res['telephone'];?></td>
        <td><?php echo $res['telephone_type'];?></td>
        <td><?php echo $res['email'];?></td>
        <td><?php echo $res['email_type'];?></td>
        <td><?php echo $res['note'];?></td>       
        <td> <button class="btn"> <a href="update_entry.php?id=<?php echo $res['id']; ?>"> Update </a> </button> </td>
        <!-- <th>Delete</th> -->
    </tr>
  
    
    <?php
    }
    ?>
    <tr>


</table>




</body>
</html>