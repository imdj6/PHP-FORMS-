<?php
require 'db_connect.php';
$sql="CREATE TABLE `example`.`example` ( `sno` INT(50) NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `concern` TEXT NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sno`)) ENGINE = InnoDB";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("unable to make tables as-->".mysqli_error($conn));
}
else{
    echo "created the required table";
}

?>