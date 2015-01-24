<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 1/24/15
 * Time: 8:44 AM
 */
class User{
   public $name=null;
}

$rini=new User();
$fatima=new User();

var_dump($rini);
var_dump($fatima);

?>

<br>


<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 1/24/15
 * Time: 8:44 AM
 */
class User{
    public $name=null;
    function__construct($name){

    $this->name=$name;
}
f  unction__destruct(){
    echo "Hello";
echo"<br/>";
}
}

$rini=new User('Rini');


var_dump($rini);

?>