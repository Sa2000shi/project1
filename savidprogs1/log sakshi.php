<?php
$pass= $_POST["txt4"];
$us= $_POST["txt1"];

$conn=mysqli_connect("localhost","root","","sigevn");

$cmd=" SELECT pass,usnm FROM  signi ";
$qry=mysqli_query($conn,$cmd);

$ischeck="no";

while ($rec=mysqli_fetch_assoc($qry))
{
  if (($rec['pass'] == $pass) && ($rec['usnm']== $us))
   {
    $ischeck="yes";
    break;
   }
}
if ($ischeck=="yes")
{

?>
<SCRIPT language=javascript>
window.location="book.html"
alert("WELCOME TO OUR BOOKING WEBSITE");
</SCRIPT>
<?php
}
else
{
 ?>
<SCRIPT language=javascript>
window.location="log.html"
alert("PLZ ENTER CORRECT USER NAME AND PASS")
</SCRIPT>
<?PHP
}
 
?>


