<?php  
echo "Hello World";
/*multiple
line
comment*/

//single line comment


$x=4243;
$y="wwefwef";
$z=true;

$car1name = "Honda";
$car1year = 2034;
$car1owned = true;

echo $x,$y,$z;
$result = print($x.$y.$z);

$car1 = ["Honda",2034,true];
echo $car1[0];

$car2 = ['name'=>"Honda","year"=>2034,"owned"=>true];
echo $car2['name'];

$a=30;$b=14;

echo "<br>";
echo $a+$b."<br>";
echo $a-$b."<br>";
echo $a*$b."<br>";
echo $a/$b."<br>";
echo $a%$b."<br>";

echo $a++."<br>";
echo ++$a."<br>";

echo $a--."<br>";
echo --$a."<br>";

$a>$b;
$a<$b;
$a<=$b;
$a>=$b;
$a==$b;
$a===$b;
$a!=$b;
$a!==$b;



$m=34;
$n="34";

if($m!=$n) {
    echo "Equal";
}

$age=34;
$license=true;
$llicense=false;

if($age>=18 && $license==true) {
    echo "he can drive";
}

if($age>=18 or $llicense==true) {
    echo "he can learn to drive";
}

$v=30;
$v=$v+10 OR $v+=10;
$v=$v-10 OR $v-=10;
$v=$v*10 OR $v*=10;
$v=$v/10 OR $v/=10;
$v=$v%10 OR $v%=10;

$age=17;
$eligible = $age>=18 ? true : false ;

print $age>=18 ? "eligible to drive" : "not eligible" ;

$t = 7;
if ($t>4 && $t < 12 ) {
  	echo "Have a good morning!";
} 
elseif ($t < 15) {
    echo "Have a good afternoon!";
}
elseif ($t < 20) {
    echo "Have a good evening!";
}
else {
    echo "Have a good night!";
} 

$favcolor = "red";
switch($favcolor) {
  		case "red":
    			echo "Your favorite color is red!";
    			break;
  		case "blue":
    			echo "Your favorite color is blue!";
    			break;
    		default:
    			echo "Your favorite color is neither";
}


$x=0;
while($x<=50) {
    print $x%2==0 ? $x." is an even number<br>" : $x." is an odd number<br>" ;
    $x+=2;
}

for($x=0;$x<=50;$x+=3) {
    print $x%2==0 ? $x." is an even number<br>" : $x." is an odd number<br>" ;
}

$x=2943;
do {
    print $x%2==0 ? $x." is an even number<br>" : $x." is an odd number<br>" ;
    $x++;
}
while($x<=50);



$car1 = ["Honda",2034,true];

$car2 = ['name'=>"Honda","year"=>2034,"owned"=>true];

foreach($car2 as $value) {
    echo $value;
}

function myfunc($name) {
    static $s=1;
    print("Hello World. My name is ".$name);
    echo '<br>$s='.$s;
    $s++;
}

myfunc("Akash");
myfunc("Akash");
myfunc("Akash");
myfunc("Akash");

if(isset($_POST['email'])) {
    echo $_POST["email"];
}


$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); // 86400 = 1 day


If ( !isset ($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

session_start();

$_SESSION['username'] = "Akash Soni"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hi
</body>
</html>