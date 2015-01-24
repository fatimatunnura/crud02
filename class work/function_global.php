
<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 1/23/15
 * Time: 8:55 AM
 */

$a=5;
function myfunction(){



    global $a;
    $a=6;
    return $a;



}
echo $a;

echo "<br>";
echo myfunction();
echo "<br>";
echo $a;

?>