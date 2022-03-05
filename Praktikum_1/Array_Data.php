<?php
    $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>90];
    $ns2 = ['id'=>1,'nim'=>'01111','uts'=>95,'uas'=>98,'tugas'=>95];
    $ns3 = ['id'=>1,'nim'=>'01105','uts'=>78,'uas'=>80,'tugas'=>75];
    $ns4 = ['id'=>1,'nim'=>'01103','uts'=>85,'uas'=>83,'tugas'=>90];

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $nomor = 1;
      foreach ($ar_nilai as $ns) {
    ?>
    <tr>
      <td><?= $nomor; ?></td>
      <td><?= $ns["nim"]; ?></td>
      <td><?= $ns["uts"]; ?></td>
      <td><?= $ns["uas"]; ?></td>
      <td><?= $ns["tugas"]; ?></td>
    </tr>
    <?php
    $nomor++;
      }
    ?>
  </tbody>
</table>
</body>
</html>
