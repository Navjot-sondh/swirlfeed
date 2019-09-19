<?php
/**
 * Created by PhpStorm.
 * User: Waheguru
 * Date: 9/9/2019
 * Time: 10:51 PM
 */
$numbers=array(1,7,8,7,10,6,7,8,3);
$max=$numbers[0];
for($i=0;$i<count($numbers);$i++)
{
    if($numbers[$i]>$max)
    {
        $max=$numbers[$i];
    }
}
echo "Largest number is ".$max;