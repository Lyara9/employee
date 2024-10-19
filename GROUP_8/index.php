<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>EMPLOYEE SYSTEM</h1>
  <?php
    include_once("Classes.php");

    $manager = new Manager("Ken", 123, "IT");
    $department =  new Developer("Chelsea", 20000, "Python");
  
    $manager->display();

    
   
  ?>

  <br>

  <?php
    $department->display();
  ?>
</body>
</html>