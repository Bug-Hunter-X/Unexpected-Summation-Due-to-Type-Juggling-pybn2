```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_int($number)) {
      $sum += $number;
    } else {
      //Handle non-integer values appropriately, throw exception, use 0, etc.
      trigger_error('Non-integer value encountered in array', E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //Output: Sum: 6 + warning
```