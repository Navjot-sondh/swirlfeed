<?php
include("conn.php");

$fname="";
$lname="";
$em="";
$em2="";
$password="";
$password2="";
$date="";
$error_array="";
if(isset($_POST['register_button']))
{
    $fname=strip_tags($_POST['reg_fname']);
    $fname=str_replace(' ','',$fname);
    $fname=ucfirst(strtolower($fname));

    $lname=strip_tags($_POST['reg_lname']);
    $lname=str_replace(' ','',$lname);
    $lname=ucfirst(strtolower($lname));

    $fname=strip_tags($_POST['reg_email']);
    $fname=str_replace(' ','',$fname);
    $fname=ucfirst(strtolower($fname));

    $fname=strip_tags($_POST['reg_email2']);
    $fname=str_replace(' ','',$fname);
    $fname=ucfirst(strtolower($fname));

    $password=strip_tags($_POST['reg_password']);
    $password=str_replace(' ','',$password);
    $password=ucfirst(strtolower($password));

    $password2=strip_tags($_POST['reg_password2']);
    $password2=str_replace(' ','',$password2);
    $password2=ucfirst(strtolower($password2));

    $date=date("Y-m-d");

    if($em==$em2)
    {
        if(filter_var($em,FILTER_VALIDATE_EMAIL))
        {
            //Store the validated version of Email 
            $em=filter_var($em,FILTER_VALIDATE_EMAIL);
        }
        else
        {
            echo "Invalid format";
        }
    }
    else
    {
        echo "Email don't match";
    }

}
else
{

}

?>
<!doctype html>
<html>
    <head>
        <title> Welcome to Swirlfeed</title>
    </head>
    <body>
        <form action="register.php" method="post">

            <input type="text" name="reg_fname" placeholder="first name" required/>
            <br />
            <input type="text" name="reg_lname" placeholder="last name" required />
            <br />
            <input type="text" name="reg_email" placeholder="Email" required />
            <br />
            <input type="text" name="reg_email2" placeholder="Confirm Email" required />
            <br />
            <input type="password" name="reg_password" placeholder="Password" required />
            <br />
            <input type="password" name="reg_password2" placeholder="Confirm Password" required />
            <br />
            <input type="submit" name="register_button" value="Register" />

        </form>
    </body>
</html>