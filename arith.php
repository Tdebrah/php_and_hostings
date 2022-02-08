<?php

$num1=20;
$num2=1;
$num3=8;
$sum=$num1 + $num2+$num3;
echo"Below is the sum <br>";

echo"The sum of $num1 and $num2 and $num3 is $sum <br>";

echo"The sum is " .$sum;

$num=0;
if($num%2==1){
    echo"The number is odd number";
}else{
    echo"The number is an even <br><br>";
}


$mark=47;
if($mark>=80){
    echo"Your grade is an A \n";
}elseif($mark>=70){
    echo"Your grade is a B";
}elseif($mark>=60){
    echo"Your grade is a C";
}else{
    echo"You deserve a retake <br><br>";
}

$today=date("D");
switch($today){
    case "Mon":
        echo "Today its a monday. Prepare for your lectures";
        break;
    case "Tue":
        echo "Today is a tuesday. Go and learn coding";
        break;
    case "Wed":
        echo "Today is a wednesday. Its a day for fasting";
        break;
    case "Thu":
        echo "Today is a thursday. You must cook:";
        break;
    case "Fri":
        echo "Today its a friday. We have a movie night";
        break;
    case "Sat":
        echo "Today is a saturday. Its a weekend";
        break;
    case "Sun":
        echo "Today is a sunday. The weekend ends today";
        break;
    default:
        echo "Its invalid";
    
}

$age = 1;
while($age<=10){
    $age++;
    echo " The age is  $age <br>";
}

for($i=1;$i<=9;$i++){
    echo "The number is $i <br><br>";
}

function getSum($a,$b){
    $sum = $a+$b;
    echo "The sum of the numbers is $sum <br>";
}
getSum(3,8);

if (isset($_REQUEST["name"])){
    echo "Hello  ".$_REQUEST["name"];
}

?>

<!-- testing the POST method -->
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <label for="input_name">User name</label>
    <input type="text" name="name" id="input_name"><br>
    <input type="submit" name="submit">
</form>

<html>

</html>
