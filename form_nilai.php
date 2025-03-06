<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">form nilai mahasiswa </h5>
            <form method="get"></form> 
        </div>
    </div>
    <form method="post" action="nilai_siswa.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">nama lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book-o"></i>
          </div>
        </div> 
        <input id="text" name="nama_lengkap" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">mata kuliah</label> 
    <div class="col-8">
      <select id="select" name="mata_kuliah" class="custom-select">
        <option value="jaringan_komputer">jaringan komputer</option>
        <option value="sistem_informasi">sistem informasi</option>
        <option value="pemrograman_web2>pemrograman web 2</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">nilai uts</label> 
    <div class="col-8">
      <input id="" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">nilai uas</label> 
    <div class="col-8">
      <input id="text1" name="nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">nilai tugas/praktikum</label> 
    <div class="col-8">
      <input id="text2" name="nilai_tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
    
    <?php

    if (isset($_POST['submit'])) {
    $nama = $_GET['nama'];
    $mata_kuliah = $_GET['mata_kuliah'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];

    echo "<p>nama : $nama</p>";
    echo "<p>mata kuliah : $mata_kuliah</p>";
    echo "<p>nilai uts : $nilai_uts</p>";
    echo "<p>nilai uas : $nilai_uas</p>";
    echo "<p>nilai tugas/praktikum : $nilai_tugas</p>";
    }

    ?>


</form>

</body>
</html>



