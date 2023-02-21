
<?php
 function sortStringsByLength($array) {
   
     function compareLength($a, $b) {
         return strlen($a) - strlen($b);
//     //   if (strlen($a) == strlen($b)) {
//     //   return 0;
//     //   } 
//     //   elseif (strlen($a) < strlen($b)) {
//     //    return -1;
//     //   }
//     //    else {
//     //      return 1;
//     //   }
     }
    
     usort($array, "compareLength");
    
    return $array;
  }
  $array = array("apple", "banana", "pear", "orange", "kiwi","hsjhjshjhdj");
$sorted_array = sortStringsByLength($array);
print_r($sorted_array);

echo PHP_EOL;
echo PHP_EOL;



//2.Write a PHP function to concatenate two strings,
// but with the second string starting from the end of the first string.


$str1 = "I Love";
$str2 = "Bangladesh";


function addTwoString($srt1, $srt2){
    $result = $srt1 . $srt2;
    return $result;
}
echo addTwoString($str1, $str2);

echo PHP_EOL;
echo PHP_EOL;

//3.Write a PHP function to remove the first and last element 
//from an array and return the remaining elements as a new array.

 $Name = ["Tusher","kibriya","jakir","Soniya","zerin"];

function removeFirstandLastElement($arr){
    if(count($arr)<3){
        return "Need atleast three element to remove first and last element of array";
    }
    array_shift($arr);
    array_pop($arr);
    return $arr;
}

print_r(removeFirstandLastElement($Name));

echo PHP_EOL;
echo PHP_EOL;

// 4.Write a PHP function to check if a string 
// contains only letters and whitespace.

function check_string($str_value){
    return preg_match('/^[a-zA-Z\s]+$/', $str_value);
}

$str_contains = "a quick brown fox jumped over the lazy dog";
if(check_string($str_contains)==0|false){
echo "the string contains numbers";
}else{
    echo "the string contains letters and whitespace";
}

echo PHP_EOL;
echo PHP_EOL;


//5.Write a PHP function to find the second largest number in an array of numbers.

function find_second_largest($arr) {
   
    $largest = $arr[0];
    $second_largest = $arr[0];
  
   
    foreach ($arr as $num) {
      if ($num > $largest) {
        $second_largest = $largest;
        $largest = $num;
      } elseif ($num > $second_largest && $num != $largest) {
        $second_largest = $num;
      }
    }
  
    return $second_largest;
  }
 $name = [1,2,3,4,5,6,7,8,10] ;
 echo "The second leargest number is ".find_second_largest($name); 
  