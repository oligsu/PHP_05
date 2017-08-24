<?php
$jsonString=file_get_contents('telefon.json');
$data=json_decode($jsonString,true);
?>
<html>
<head>
  <title>telephone directory</title>
</head>
<body>
<table>
    <tr>
      <td>firstName</td>
      <td>lastName</td>
      <td>address</td>
      <td>phoneNumber</td>
    </tr>
    <?php foreach ($data as $datum) : ?>
    <tr>
      <td><?=$datum['firstName'] ?></td>
      <td><?=$datum['lastName'] ?></td>
      <td><?=$datum['address'] ?></td>
      <td><?=$datum['phoneNumber'] ?></td>
    <?php endforeach; ?>
  </tr>
</body>
</html>
