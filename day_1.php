<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example</title>
</head>
<body>
    <h1> <?php echo "Hello, PHP!"; ?> </h1>
    <hr>
    <h2><?php echo "This is the frist attempt to learn PHP!"; ?></h2>
    <!-- i am writing my name -->
    <p>
        <?php
            // echo "I am Mr. Shakhwat Hossen"; <br>;
            // $student = "johnny";
            // echo "My name is ".$student.". I am from Dhaka."."<br>";
            
            // function localE(){
            //     $loacalV = "I am a local variable";
            //     echo "$loacalV"."."."<br>";
            // }
            // localE();

            // $glob = "I am a global variable";
            // echo "$glob";
//problem1:
            // $a = 10;
            // $b = 20;
            // $a = $a + $b;
            // $b = $a - $b;
            // $a = $b 
            
            // echo "The value of 'a' is: ".$a."<br>";
            // echo "The value of 'b' is: ".$b."<br>";
           
            
// problem2:
            // $num1 = 10;
            // $num2 = 20;
            // $sum = $num1 + $num2;
            // echo "The sum of two is: ".$sum;


            // $name = "Shakhwat johnny";
            // var_dump($name. "<br>");
            // $name = 200;
            // var_dump($name);

            // $ar = array("Rohllo","Brjon","Tally");
            // var_dump($ar."<br>");

            // $firstName = "Md Shakhwat";
            // $secondName = "Hossain";
            // echo $firstName." ".$secondName

        // $isPassed = true;
        // if ($isPassed){
        //     echo "you have passed the exam"."<br>";
        // }
        // else{
        //     echo"fail"  ;     
        //  }
        //  $isPassed = true;
        // if (!$isPassed){
        //     echo "you have failed the exam"."<br>";
        // }
        // else{
        //     echo"Pass"."<br>";     
        //  }

/////////////////////////////////
        // $age =10;
        // $status = ($age >= 18) ? "Adult":"Minor";
        // echo "$status"."<br>";
////////////////////////////////////  
//         $num1 = 20;
//         $num2 = 26;
//         $status = ($num1 > $num2) ? "num1 is bigger":"num2 is bigger";
//         echo "$status"."<br>";



// $value = 20;
// if ($value < 10){
//     echo"The value is less than 10";
// }
// elseif($value < 20){
//     echo "The value is under 20";
// }     
//  else{
//     echo "The value is more than 20"."<br>";
//  }
//  $temperature = 25;
//  $status = ($temperature >= 25) ? "Hot":"Cold";
//  echo "$status"."<br>"; 

///////turnery operator//////////
//  $temp = 24;
//  $sta = ($temp > 25)? "It's a hot day !":"It's a cold day !";
//  echo "$sta";

/////////nested if///////
// $result = 98;
// if ($result >= 90){
//     echo "A";}
// elseif ($result >=80){
//     echo "B";
//     if ($result >= 85){
//         echo"+";
//     }
// }
// else {
//     echo "C";
// }

/////////switch case////////
// $day = "Monday";

// switch($day){
//     case "Sunday";
//     echo "It's a Sunday";
//     break;
//     case "Monday";
//     echo "It's a Monday";
//     break;
//     default:
//     echo "It's a regular day";
// }

// $grade = "h";
// switch($grade){
//     case "A":
//     case "B":
//     case "C":
//     case "D":
//         echo "Pass";
//         break;
//     case "E":
//     case "F":
//         echo "Fail";
//         break;
//     default:
//     echo "invalid grade";
            
    
    
// }
////////problem2////////
    
// $value = 8;
// if ($value > 0){
//     echo"The value is positive";
// }
// elseif($value < 0){
//     echo "The value is negetive";
// }     
// else{
//     echo "The value is zero"."<br>";
//  }
/////////problem3///////////////////


// $value = 56;
// if ($value > 0 && $value < 12){
//     echo"The person is child"."<br>";
// }
// elseif($value < 19 && $value > 13){
//     echo "The person is teeneger"."<br>";
// }    

// elseif($value > 19 && $value < 69){
//     echo "The person is adult"."<br>";
// }  
// else{
//     echo "The person is old"."<br>";
//  }

///////looops//////////////
//for looop/////
// for ($i = 1; $i < 21; $i++){
//     echo $i."<br>";
// }


// for ($i = 1; $i < 21; $i+=2){
//     echo $i."<br>";
// }

////while loop///////
// $counter = 1;
// while($counter < 21){
//     echo $counter."<br>";
//     $counter++;
// }

//////do while////////
// $counter = 1;
// do{
//     echo $counter."<br>";
//     $counter+=2;
// }
// while($counter < 21);
///////foreach loop//////
//1st///
// $data = array(1,2,3,4,5,6,7);
// foreach ($data as $value){
//     echo "$value"."<br>";
// }

//2nd//
// $data = array("johnny","ronty",3,4,5,6,7);
// foreach ($data as $value){
//     echo "$value".","."<br>";
// }
//3rd////
// $data = array("johnny","ronty",3,4,5,6,7);
// foreach ($data as $d=>$value){
//     echo $d.".".$value."<br>";
// }
///4rth/////
// $data = array("johnny","ronty",3,4,5,6,7);
// foreach ($data as $d=>$value){
//     echo ++$d.".".$value."<br>";
// }


//home-work////
// problem2


for ($i = 1; $i < 10; $i++){
    echo $i."<br>";
}
for ($i = 10; $i > 0; $i--){
    echo $i."<br>";
}


 ?>

</p>

</body>
</html>