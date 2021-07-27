<!DOCTYPE html>
<html>
<body>

<?php
class Chair {
  function Chair() {
    $this->model = "Wheels";
  }
}
// create an object
$object1 = new Chair();

// show object properties
echo $object1->model;
?>

</body>
</html>
