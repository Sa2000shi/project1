<?php
$us= $_POST["txt1"];
$vid= $_POST["txt2"];
$pass= $_POST["txt3"];
$add= $_POST["txt4"];



if (($us!="") && ($vid!="") && ($pass!="") && ($add!="")  )
{

$conn=mysqli_connect("localhost","root","","sigevn");

$cmd=" INSERT INTO signi (usnm,vid,pass,address) VALUES('$us','$vid','$pass','$add') ";

$qry=mysqli_query($conn,$cmd);


if($qry)
{
print("<br>YOUR ID IS CREATED SUCCESFULLY ");


?>

<SCRIPT language=javascript>
window.location="log.html"
alert("UR NEW ID IS CREATED SUCCEFULLY PLZ LOGIN");
</SCRIPT>

<?PHP
}
else
{
print("<br>YOUR ID DOES NOT CREATE  ");
}
}

else
{
print("<br>PLEASE ENTER VALUE FIRST");
}

?>