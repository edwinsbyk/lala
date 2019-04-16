<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>
  <div class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
  <a class="navbar-brand" href="#">MySite >>></a>
</div>
    <ul class="nav navbar-nav">
      <li><a href="index.php?page=home">Home</a></li>
      <li><a href="index.php?halaman=berita">Berita</a></li>
      <li><a href="index.php?halaman=tentang">Tentang Kami</a></li>
    </ul>
  </div>
  
  <div id="content">
    <?php include "config.php";?>
  </div> 
  <footer class="footer">
  <div class="container">
    <p>2019 SMK Telkom Medan</p>
  </div>
  </footer>
</body>
</html>