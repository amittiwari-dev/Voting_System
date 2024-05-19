<?php
include_once 'connectino.php';
include_once 'header.php';
if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $mob=$_POST['mob'];
    $aadhar=$_POST['adh'];
    $address=$_POST['address'];

    $sql="insert into voter_list values('','$name','$fname','$mob','$aadhar','$address')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("location:login.php");
    }
    else{
        header("location:register.php");
    }
}
?>
<div class="row p-5">
    <div class="col-sm-5 mx-auto p-5 border">
        <p class="h3 text-center">Register For <span class="text-primary">Voting</span></p>
        <form method="post">
            <input class="form-control mt-2" placeholder="Name.." name="name" type="text"/>
            <input class="form-control mt-2" placeholder="Father Name.." name="fname" type="text"/>
            <input class="form-control mt-2" placeholder="Mobile.." name="mob" type="tel"/>
            <input class="form-control mt-2" placeholder="Adhar Number.." name="adh" type="number"/>
            <textarea class="form-control mt-2" name="address" placeholder="Address"></textarea>
            <input class="form-control mt-2 btn btn-primary" name="save" value="Register Now" type="submit"/>
        </form>
    </div>
</div>
