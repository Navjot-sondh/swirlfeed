<?php
/**
 * Created by PhpStorm.
 * User: Waheguru
 * Date: 9/4/2019
 * Time: 10:06 AM
 */
$conn=mysqli_connect("localhost","root","","social");
if(mysqli_connect_error())
{
    echo "Error occured".mysqli_connect_error();
}
