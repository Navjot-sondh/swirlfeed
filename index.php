<?php
/**
 * Created by PhpStorm.
 * User: Waheguru
 * Date: 9/4/2019
 * Time: 10:06 AM
 */
$con=mysqli_connect("localhost","root","","social");
if(mysqli_connect_errno())
{
    echo "Error occured".mysqli_connect_error();
}
$query="insert into test values ('1','Navjot')";
echo $query;
mysqli_query($con,$query);

