<?php
include_once 'connectino.php';
include_once 'header.php';



if(isset($_POST['Save']))
{
    $mobile=$_POST['mob'];
    $aadhar=$_POST['adh'];
    $sql="select * from voter_list where mobile='$mobile' and adhar_number='$aadhar' ";
    $login=mysqli_query($conn,$sql);
    $NoRows=mysqli_num_rows($login);
    
    if($NoRows ==1){
        $_SESSION['user']=$mobile;
        header("Location:vote.php");
    }
    else
    {
        echo "<script>alert('Mobile or Aadhar Number is  Invaild.....')</script>";
    }
}
?>


<div class="row p-5">
    <div class="col-sm-5 mx-auto p-5 border">
        <p class="h3 text-center">Login For <span class="text-primary">Voting</span></p>
        <form method="post">
            
            <input class="form-control mt-2" placeholder="Mobile.." name="mob" type="tel"/>
            <input class="form-control mt-2" placeholder="Adhar Number.." name="adh" type="number"/>
           
            <input class="form-control mt-2 btn btn-warning" name="Save" value="Login Now" type="submit"/>
        </form>
    </div>
</div>
