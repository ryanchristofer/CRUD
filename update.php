<?php

  include ('conn.php');

  $status = '';
  $result = '';
  
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['Tanggal'])) {
          echo $_GET['Tanggal'];
          $Tanggal_upd = $_GET['Tanggal'];
          $query = "SELECT * FROM dt_bukapuasa WHERE Tanggal = '$Tanggal_upd'";

          
          $result = mysqli_query(connection(),$query);
      }
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $Tanggal = $_POST['Tanggal'];
      $Menu_Takjil = $_POST['Menu_Takjil'];
      $Menu_Berbuka = $_POST['Menu_Berbuka'];
      $Tempat = $_POST['Tempat'];
      
      $sql = "UPDATE dt_bukapuasa SET Menu_Takjil='$Menu_Takjil', Menu_Berbuka='$Menu_Berbuka', Tempat='$Tempat' WHERE Tanggal='$Tanggal'";

      $result = mysqli_query(connection(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      header('Location: index.php?status='.$status);
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Buka Puasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>

  <body>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


          <h2 style="margin: 30px 0 30px 0;">Update Data Menu Berbuka</h2>
          <form action="update.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" placeholder="Tanggal" name="Tanggal" value="<?php echo $data['Tanggal'];  ?>" required="required" readonly>
            </div>
            <div class="form-group">
              <label>Menu_Takjil</label>
              <input type="text" class="form-control" placeholder="contoh: Sup Buah" name="Menu_Takjil" value="<?php echo $data['Menu_Takjil'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Menu_Berbuka</label>
              <input type="text" class="form-control" placeholder="contoh: Nasi Goreng Telur" name="Menu_Berbuka" value="<?php echo $data['Menu_Berbuka'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Tempat</label>
              <input type="text" class="form-control" placeholder="contoh: Rumah" name="Tempat" value="<?php echo $data['Tempat'];  ?>" required="required">
            </div>

            <?php endwhile; ?>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>