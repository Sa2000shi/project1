<?php
$venu= $_POST["txt2"];
$pla= $_POST["txt3"];
$nog=$_POST["txt4"];
$dat= $_POST["txt5"];
$fod= $_POST["txt6"];
$sea= $_POST["txt7"];
$deco= $_POST["txt9"];
$equi= $_POST["txt10"];

if (($venu!="") && ($pla!="") && ($nog!="") && ($dat!="")&& ($fod!="")&& ($sea!="")&& ($deco!="")&& ($equi!="")  )
{
$conn=mysqli_connect("localhost","root","","events");

$cmd=" INSERT INTO booking (venue ,place,guest,date,food,seats,decorate,equipment) VALUES ('$venu','$pla','$nog','$dat','$fod','$sea','$deco','$equi') ";
$qry=mysqli_query($conn,$cmd);
if($qry)
{
print("YOUR ORDER IS PLACED SUCCESSFULL");
?>
<SCRIPT language=javascript>
window.location="thank.html"
alert("THANKS FOR ENTERED OUR WEBSITE");
</SCRIPT>
<?php
}
else
{
print("PLEASE ORDER AN EVENT  ");
}}
?>