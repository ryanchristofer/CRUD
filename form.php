<?php

    include ('conn.php');

    $status = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $Tanggal = $_POST['Tanggal'];
        $Menu_Takjil = $_POST['Menu_Takjil'];
        $Menu_Berbuka = $_POST['Menu_Berbuka'];
        $Tempat = $_POST['Tempat'];

        $query = "INSERT INTO dt_bukapuasa (Tanggal, Menu_Takjil, Menu_Berbuka, Tempat) VALUES ('$Tanggal','$Menu_Takjil','$Menu_Berbuka','$Tempat')";

        $result = mysqli_query(connection(),$query);
        if ($result) {
          $status = 'ok';
        }
        else{
          $status = 'err';
        }
    }
    
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Buka Puasa</title>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>

  <body>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Buka Puasa berhasil disimpan</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Buka Puasa gagal disimpan</div>';
              }
           ?>

          <h2 style="margin: 30px 0 30px 0;">Form Takjil</h2>
          <form action="form.php" method="POST">
            
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" placeholder="Tanggal" name="Tanggal" required="required">
            </div>
            <div class="form-group">
              <label>Menu Takjil</label>
              <input type="text" class="form-control" placeholder="contoh: Sup Buah" name="Menu_Takjil" required="required">
            </div>
            <div class="form-group">
              <label>Menu Berbuka</label>
              <input type="text" class="form-control" placeholder="contoh: Nasi Goreng Telur" name="Menu_Berbuka" required="required">
            </div>
            <div class="form-group">
              <label>Tempat</label>
              <input type="text" class="form-control" placeholder="contoh: Rumah" name="Tempat" required="required">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>