<?php
include_once 'connectino.php';
include_once 'header.php';
$sql="SELECT count(vote) as num,vote FROM vote group by vote ";
$resultData=mysqli_query($conn,$sql);

?>

<div class="row">
<div class="col-sm-5 mx-auto"> 

    <table  class="border table">
        
        <tr>
            <th>Sr No</th>
            <th>Party Name</th>
            <th>Total Votes</th>
        </tr>
        <?php
        $num1=1;
        while($data=$resultData->fetch_assoc())
        {?>
        <tr>
            <th><?php echo $num1?></th>
            <th><?php echo $data['vote']?></th>
            <th><?php echo $data['num']?></th>
        </tr>

      <?php  $num1++;}

        ?>
    </table>

</div>
</div>