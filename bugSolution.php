```php
function my_function($array) {
  $keysToRemove = [];
  foreach ($array as $key => $value) {
    if ($value === 'something') {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
    unset($array[$key]);
  }
  return $array;
}

$myArray = ['a' => 'something', 'b' => 'something', 'c' => 'something'];
$newArray = my_function($myArray);
print_r($newArray); // Output: Array ( )

//Another solution using array_filter
$newArray = array_filter($myArray, function($value){ return $value !== 'something';});
print_r($newArray); // Output: Array ( )
```