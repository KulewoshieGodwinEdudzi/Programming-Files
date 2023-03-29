<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- using for loop to print multiples of two-->
  <h1>CODE CAMP PROJECT !</h1> 
  <?php
                //using for loop to print multiples of 2
                echo "multiples of 2 from 1 to 100";
                echo "<br/>";
    for($i=1;$i<=100;$i++){
        $multiples=2*$i;
        echo "2"."*".$i."=".$multiples;
        echo "<br/>";
                //end of for loop

    }
               //using the do-while loop to print the multiples of 5 
                echo "<br/>";
                echo "<br/>";
                echo "Multiples of 5 to 12 using the dowhile loop";
                echo "<br/>";
        do{                                                 
            for($m=1;$m<=12;$m++){
                $multiples_2=5*$m;
                echo "5"."*".$m."=".$multiples_2;
                echo "<br/>";
            }
            
        }while($m<13);
                //end of do while loop
                echo "<br/>";
                echo "<br/>";
                echo "<br/>";
               

                //using the while loop to print the multiples of 5
                echo "Using the while loop to print the multiples of 5";
                echo "<br/>";
            $K=0;
        while($K<13){
            $multiples_3 =5*$K;
            $K++;
            echo "5"."*".$K."=".$multiples_3;
            echo "<br/>";
                //end of while loop
        }
  ?>
</body>

</html>