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
        <li><a href="http://localhost/tugasA/websudah/logout.php">logout</a></li>
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
        <form action="" method="POST">
        <div class="col-10 label">
          <label for=""><font color = "white">1. Apakah Anda Kesulitan bernafas ,Nyeri dada yang parah,Sulit untuk bangun,Merasa kebingungan,Penurunan kesadaran</font></label>
          <select class="form-control" name="">
            <option value="1">>>Pilih Jawaban<<</option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "white">2. Apakah Anda mengalami Nafas yang pendek saat istirahat, Ketidakmampuan untuk berbaring karena kesulitan bernafas,Kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan bernapas</font></label>
          <select class="form-control" name="">
            <option value="1">>>Pilih Jawaban<<</option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "white">3. Apakah Anda mengalami Demam , Batuk , Bersin , Sakit Tenggorokan , Sulit Bernafas</font></label>
          <select class="form-control" name="">
            <option value="1">>>Pilih Jawaban<<</option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "white">4. Apakah anda pernah muncul gejala sekitar 14 hari setelah travelling ke luar negeri? (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA) atau ke kota terjangkit (Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll)?</font></label>
          <select class="form-control" name="">
            <option value="1">>>Pilih Jawaban<<</option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "white">5. Apakah Anda memberikan perawatan atau melakukan kontak dekat dengan seseorang dengan COVID-19 (kemungkinan atau dikonfirmasi) saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)?</font></label>
          <select class="form-control" name="">
            <option value="1">>>Pilih Jawaban<<</option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "white">6. Apakah Anda memiliki kontak dekat dengan seseorang yang bepergian ke luar Negeri dalam 14 hari terakhir yang menjadi sakit (batuk, demam, bersin, atau sakit tenggorokan)?</font></label>
          <select class="form-control" name="">
            <option value="1">>>Pilih Jawaban<<</option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "white">7. Suhu Tubuh :</font></label>
          <br><input type="text" name="suhu" placeholder="derajat"> <br>
        </div>
        <div id="Submit">
          <br>
        <textarea name="pesan" rows="1" cols="110" placeholder="pesan anda" >
          <?php
            if(isset($_POST['suhu'])) {
              $suhu = $_POST['suhu'];
              if ($suhu >37 ){
                echo "Anda memiliki kemungkinan positif corona, suhu tubuh Anda tinggi segera periksakan diri Anda";
              }else{
                echo "Anda negatif corona, suhu tubuh Anda normal";
              }
            }

            ?>
            </textarea>
          </div>
        <div class="col-10 label">
          <label>
          <br><input type="submit" name="Submit" value="Submit" class = "btn btn-primary"><br>
           </label>
        </div>
        </form>

              </div>
        </div>
    </div>
  </body>
</html>
