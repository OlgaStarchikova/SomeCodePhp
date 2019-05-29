<!DOCTYPE html>
<html>
<head><title></title>
<style>
.red
{
border:red solid 1px;
}

</style>
</head>
<body>
<center><h1>Library 1</h1></center>
<big><b><i>Enter you credentials</i></b></big><br><br>
<form action="" method=get>
Name: <input type="text" name="username" id="username" ><br><br>
Surname: <input type=text name="surname" id="surname" ><br><br>
Adress: <input type=text name="adress" id="adress" ><br><br>
Email:  <input type=text name="email" id="email"><br><br>
Password: <input type=password name="password" id="password" ><br><br>
Age: <br> 6-12 <input type=radio id="agebutton"  name="agebutton" value="6-12"><br>
13-18 <input type=radio name="agebutton" value="13-18" ><br>
19-25 <input type=radio name="agebutton" value="19-25"><br>
26+  <input type=radio name="agebutton" value="26+"> <br> <br><br>
Phone: <select name="selectph">
<option value="+7"> +7 RUS </option>
<option value="+375"> +375 BLR </option>
<option value="+380"> +380 UKR </option>
<option value="+420"> +420 CZE </option>
<option value="+994"> +994 AZE </option>
<option value="+374"> +374 ARM </option>
<option value="+995"> +995 GEO </option>
</select>
<input type=text name="ph" id="ph" ><br><br>
Where do you want to get news about <b> Library 1</b>? <br>
<input type=checkbox name="chek1" value="Email"> Email <br>
<input type=checkbox name="chek2" value="SMS"> SMS <br>
<textarea name="comments"> Here you can ask some questions or write your comment</textarea><br><br>
<input type=submit value="Submit" onclick="document.getElementById('username').style.visability='hidden'" ><br><br>
</form>
<script>


function null()
{
document.getElementById('username').style.display='none';
var elements=tableElem.getElementsByTagName('input');
for (var i = 0; i<elements.length; i++)
{

 if(elements[i].value=none)
   {
      
      elements[i].classname=red;
   }
}

}

</script>


<hr>


<?php
$o = false;
foreach ($_GET as $key=>$value)
{ 
   if ($value == "")
  {
    $o = true;
  }
}

if ($o == false)
{
$f = fopen("text.txt", "w");
$f1 = fopen("text1.txt","a+");
     if ($f === false)
     {
      echo "Unable to open the file<br>";
      exit(0);
     }
     if ($f1===false)
     {
      echo "Unable to open the file<br>";
      exit(0);
     }
$i=1;
foreach ( $_GET as $kk=>$value)
{
 fwrite($f, $i.". ".$value."\n");
 $i = $i + 1;
  if($kk=="email")
  {
    fwrite($f1,$value.";");
  }
  if($kk == "password")
  {
     fwrite($f1,$value."\n");
  }
}
fclose($f);
fclose($f1);
if ($i==11)
{
header("Location: HW13(1).php");
exit;
}

}
  else
 {
    echo "Заполните все поля для записи аккаунта";
 }
?>
</body>
</html>