<?php
    $a = array(10,20,30,50,60);
    $b = array("java", "python", "php", "html");
    echo "<br>".$a[4];
    echo "<br>".$b[2];
    
    //print whole array
    for($i=0;$i<count($b);$i++)
    {echo "<br>".$b[$i];}

    foreach ($a as $key => $value) {
        echo"<br>key is $key and value is $value";
    }
    
    //inbuilt function
    echo"<pre>";
    print_r($b);

    echo"<pre>";
    var_dump($a);

    $sum = array_sum($a);
    echo "<br>".$sum;

    $sum1 = array_product($b);
    echo"<br>".$sum1;
?>