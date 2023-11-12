<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM cv_data WHERE id=1"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <title>Curriculum Vitae</title>
</head>

<body class="p-3">
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-gradient" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <h1 style="color: #363062">Curriculum Vitae</h1>
      <a class="navbar-brand" href="edit.php" style="color: #BE3144">Update</a>
    </div>
  </nav>
  <div class="container">
    <div class="row pt-5">
      <div class="col-md-3 text-left text-md-center mb-3">
        <img class="rounded-circle img-fluid" src="<?php echo $data['foto_path']; ?>" alt="Foto Profil">
      </div>
      <div class="col-md-9">
        <h1 class="card-title"><?php echo $data['nama']; ?></h1>
          <p class="card-text"><?php echo $data['alamat']; ?></p>
        <div class="row pt-3">
          <div class="col-md mb-1">
            <p class="card-text"><?php echo $data['telepon']; ?></p>
          </div>
          <div class="col-md mb-1">
            <p class="card-text"><?php echo $data['email']; ?></p>
          </div>
          <div class="col-md mb-1">
            <p class="card-text"><?php echo $data['web']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row border-top pt-3">
      <div class="col-md mb-5">
        <h2>Pendidikan</h2>
        <p class="card-text"><?php echo $data['pendidikan']; ?></p>
      </div>
      <div class="col-md mb-5">
        <h2>Pengalaman Kerja</h2>
        <p class="card-text"><?php echo $data['pengalaman_kerja']; ?></p>
      </div>     
    </div>    
    <div class="row">
      <div class="col-md mb-5">
        <h2>Keterampilan</h2>
        <p class="card-text"><?php echo $data['keterampilan']; ?></p>
      </div>
    </div>
  </div>
</body>