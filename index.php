<?php
    include ('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <title>Buka Puasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>   
  <body>
    
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <?php 
          
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-primary" role="alert">Data Buka Puasa berhasil di-update</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Buka Puasa gagal di-update</div>';
              }

            }
           ?>    

    <h1 style="text-align:center;">BUKA PUASA</h1>
    <a class="btn btn-success decoration-none" href="/CRUD/form.php">Isi data</a>
        <br>
      <table border='1' width="100%" style='border-collapse:collapse' class="table table-success table-striped">
              <thead>
                <tr style="background-color: blue; color: black;">
                  <th>Tanggal</th>
                  <th>Menu Takjil</th>
                  <th>Menu Berbuka</th>
                  <th>Tempat</th>
                  <th>Action</th>
              </thead>
              <tbody>
                <?php 
                  
                  $query = "SELECT * FROM dt_bukapuasa";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                    <?php $brs=1; ?>
                    
                    <td><?php echo $data['Tanggal'];  ?></td>
                    <td><?php echo $data['Menu_Takjil'];  ?></td>
                    <td><?php echo $data['Menu_Berbuka'];  ?></td>
                    <td><?php echo $data['Tempat'];  ?></td>
                    <td>
                    <a href="<?php echo "update.php?Tanggal=".$data['Tanggal']; ?>" class="btn btn-primary btn-sm"> Update</a>
                      &nbsp;&nbsp;
                      <a href="<?php echo "delete.php?Tanggal=".$data['Tanggal']; ?>" class="btn btn-danger btn-sm"> Delete</a>
                    </td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
      </table>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>