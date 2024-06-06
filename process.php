<!DOCTYPE html>
<html>
<head>
  <title>Результат</title>
</head>
<body>
  <?php
    if(isset($_POST['e']) && isset($_POST['f'])) {
      $e = $_POST['e'];
      $f = $_POST['f'];

      echo "Результат:<br><br>";
      
      echo "а) $e $f<br>";
      
      echo "б) $f $e<br>";
    }
    else {
      echo "Помилка: Передані дані відсутні.";
    }
  ?>
</body>
</html>