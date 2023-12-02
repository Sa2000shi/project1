<?php
$email= $_POST["txtemail"];
$pass= $_POST["txtpass"];

 $conn=mysqli_connect("localhost","root","","anchal");


   $cmd=" SELECT email,pass FROM signup";
    $qry=mysqli_query($conn,$cmd);

$ischeck="no";

while ($rec=mysqli_fetch_assoc($qry))
{
  if (($rec['email'] == $email) && ($rec['pass']== $pass))
   {
    $ischeck="yes";
    break;
   }
}

if ($ischeck=="yes")
{
    ?>
   <SCRIPT language=javascript>
    window.location="welcome.html"
   alert("WELCOME ")
   </SCRIPT>
   <?PHP
  }
  else
  {
  ?>
<SCRIPT language=javascript>
window.location="login.html"
alert("PLZ ENTER CORRECT EMAIL AND PASS")
</SCRIPT>
<?PHP
}
 
?>