<?php
$array = [1, 1, 2, 3, 3, 4, 5, 5, 6, 7]; 
$result = removeduplicate ($array); 
function removeduplicate($array) {
return array_values(array_unique ($array));
}
echo "Given array is:";
print_r($array);
echo "<br> unique array is:";
print_r($result);
?>