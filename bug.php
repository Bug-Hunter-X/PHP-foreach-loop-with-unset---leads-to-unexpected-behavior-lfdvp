```php
function my_function($array) {
  foreach ($array as $key => $value) {
    if ($value === 'something') {
      unset($array[$key]);
    }
  }
  return $array;
}

$myArray = ['a', 'something', 'b', 'something', 'c'];
$newArray = my_function($myArray);
print_r($newArray); // Output: Array ( [0] => a [2] => b [4] => c )

//The issue:
$myArray = ['a' => 'something', 'b' => 'something', 'c' => 'something'];
$newArray = my_function($myArray); //This will not work as expected
print_r($newArray); // Output: Array ( [a] => something [b] => something [c] => something ) 
```