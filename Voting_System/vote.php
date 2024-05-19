<?php
include_once 'connectino.php';
include_once 'header.php';
if($_SESSION['user'] == "")
{
    header("location:login.php");
}
if(isset($_GET['vote']))
{

    $vote=$_GET['vote'];
    $voter_id=$_SESSION['user'];
    $sqls="select * from vote where voter_id='$voter_id'";
    $dataVote=mysqli_query($conn,$sqls);
    $no=mysqli_num_rows($dataVote);
    if($no==1)
    {
        echo "<script>alert('Your are already Vote....');location.href='vote.php'</script>";
    }
else{
    $sql1="insert into vote values('','$voter_id','$vote')";
    $result=mysqli_query($conn,$sql1);
    if($result)
    {
        header("location:logout.php");
    }
}
   
}

?>
<div class="row">
<div class="col-sm-5 mx-auto"> 

    <table class="border table">
        
        <tr>
            <th>Sr No</th>
            <th>Party Name</th>
            <th>Vote</th>
        </tr>
        <tr>
            <td>1</td>
            <td>BJP</td>
            <td><a href="vote.php?vote=BJP"><button name="vote">Vote</button></a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>SP</td>
            <td><a href="vote.php?vote=SP"><button name="vote">Vote</button></a></td>
        </tr>
    </table>

</div>
</div>