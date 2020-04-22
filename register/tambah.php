<title>register</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="icon" href="logo.png" />
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<style media="screen">
body{
  background-image: url("background.png");
}
.card{
    margin-top: 10px ;
    margin-left: 325px ;
    width: 25%;
}
</style>

<div class="container">
   <div class="row mt-4">
           <div class="card col-md-5">
               <div class="card-header bg-primary">
                 <h2 align = "center">REGISTER</h2>
               </div>
               <div class="card-body">
                 <form method="post" action="proses.php">
                     <div class="form-group">
                         <label for="anggota">Nama</label>
                         <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" autocomplete="off">
                     </div>
                     <div class="form-group">
                         <label for="kelas">Email</label>
                         <input type="text" class="form-control" name="email" placeholder="Masukkan email" autocomplete="off">
                     </div>
                     <div class="form-group">
                         <label for="telp">username</label>
                         <input type="text" class="form-control" name="username"placeholder="Masukkan username" autocomplete="off">
                     </div>
                     <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Masukkan password" autocomplete="off">
                     </div>

                     <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                 </form>

               </div>
       </div>
   </div>
</div>
