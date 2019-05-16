<?php 
// Ques 3: Find the position where equilibrium first occurs in the array
function equilibrium($arr)
{
    $i; $j;
    $leftsum;
    $rightsum;
    $n = sizeof($arr);

    if($n < 3){
      echo "\nArray must have atleast 3 values";
      echo "\n============================================\n";
	return;
    }

    for ($i = 0; $i < $n; ++$i)
    {
        $leftsum = 0;
        for ($j = 0; $j < $i; $j++){
            $leftsum += $arr[$j];
  	}
	//echo "\n left sum = $leftsum";

        $rightsum = 0;
        for ($j = $i + 1; $j < $n; $j++){
            $rightsum += $arr[$j];
	}
	//echo "\n right sum = $rightsum";

        if ($leftsum == $rightsum){
            echo "\nEquilibrium found and its position is = $i";
            echo "\n=============================================\n";
		return;
	}
    }

    echo "\nEquilibrium index not found";
    echo "\n============================================\n";
}

// Positive Test Case
$arr = array(2,3,5,4,14,3,6,5);
echo "\n\nPositive Test Case\n";
print_r($arr);
equilibrium($arr);

// Negative Test Case 1
$arr1 = array();
echo "\n\nNegative Test Case 1\n";
print_r($arr1);
equilibrium($arr1);

//Negative Test Case 2
$arr2 = array(3, 5, 6, 4, 7);
echo "\n\nNegative Test Case 2\n";
print_r($arr2);
equilibrium($arr2);
?>
