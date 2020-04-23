<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self check up</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="reza.css" />
    <link rel="icon" href="fav.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <style media="screen">
    body{
      background : #4b4bff;
    }
    .card{
        margin-top: 10px ;
        margin-left: 350px ;
      }
      </style>
  </head>
  <body>
    <div class="menu">
      <img src="Logo putih.png" align="left">
      <ul>
        <li><a href="http://localhost/tugasA/index.php">Beranda</a></li>
        <li><a href="http://localhost/tugasA/profilsudah/index.php">Profil</a></li>
        <li><a href="http://localhost/tugasA/login/index.php">logout</a></li>
      </ul>
    </div>

    <div class="header">
      <div class="bayangan">
      </div>
      <h1>
        SELF CHECK UP
      </h1>
    </div>
    <div class="about">
      <img src="shield.jpg" width = 400px height = auto hspace = "400" vspace = "20">
      <div class="container">
          <div class="left">
            <p>
              <?php
              include '../koneksi.php';

              if(isset($_POST['Submit']))
              {
                $nama = $_POST['nama'];
                $umur = $_POST['umur'];
                $gejala = $_POST['gejala'];
                $suhu = $_POST['suhu'];
                $sql = "INSERT INTO daftar (nama,umur,gejala,suhu)
                        Values ('$nama','$umur','$gejala','$suhu')";
                $res = mysqli_query($koneksi, $sql);


                if(isset($_POST['suhu'])) {
                  $suhu = $_POST['suhu'];
                  if ($suhu >37 ){
                    echo "<font color = 'white'>Anda memiliki kemungkinan positif corona, suhu tubuh Anda tinggi segera periksakan diri Anda</font>";
                  }else{
                    echo "<font color = 'white'>Anda kemungkinan besar negatif corona, suhu tubuh Anda normal</font>";
                  }
                }
              }
                ?>
            </p>
          </div>

        </div>
      </div>
  </body>
</html>
