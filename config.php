  <?php
$page = (isset($_GET['halaman']))? $_GET['halaman'] : '';

switch($page){
  case 'home': // $page == home (jika isi dari $page adalah home)
  include "home.php"; // load file home.php yang ada di folder views
  break;
  
  case 'berita': // $page == berita (jika isi dari $page adalah berita)
  include "berita.php"; // load file berita.php yang ada di folder views
  break;
  
  case 'tentang': // $page == tentang (jika isi dari $page adalah tentang)
  include "tentang.php"; // load file tentang.php yang ada di folder views
  break;
  
  // case 'case_selanjutnya':
  // include "case_selanjut
  
  // case 'case_selanjutnya':
  // include "case_selanjutnya.php";
  // break;
  
  // case 'case_selanjutnya':
  // include "case_selanjutnya.php";
  // break;
  
  default: // Ini untuk set default jika isi dari $page tidak ada pada 3 kondisi diatas
  include "home.php";
}
?>