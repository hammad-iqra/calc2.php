<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple calculator by php</title>
</head>
<body>
    <?php
if (isset($_POST['submit'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];


  if ($operator == 'add') {
    $result = $num1 + $num2;
  } elseif ($operator == 'subtract') {
    $result = $num1 - $num2;
  } elseif ($operator == 'multiply') {
    $result = $num1 * $num2;
  } elseif ($operator == 'divide') {
    $result = $num1 / $num2;
  } elseif ($operator == 'exponent'){
    $result = $num1 ** $num2;
  }
} ?>

<form action="calc2.php" method="post">
    <label for="num1">Number 1</label>
  <input type="text" name="num1">
  <select name="operator">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
    <option value="exponent">^</option>
  </select>
  <label for="num2">Number 2</label>
  <input type="text" name="num2">
  <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($result)) {
  echo "<script>alert('Result: $result')</script>";
}
?>
</body>
</html>