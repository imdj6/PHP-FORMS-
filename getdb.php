<?php
require 'db_connect.php';
$sql="SELECT * FROM example";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
echo "the number of form filled is--> ".$num;
echo "<br>";
if($num>0)
{

    while($row=mysqli_fetch_assoc($result))
    {
        echo "Your Name is:- ".$row['name']." "."Your concern is:- ".$row['concern']." "."Time:--> ".$row['date'];
        echo "<br>";
    }

}
?>