<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cz"><head>
<?php
error_reporting(1);
 include("index1.php");
?>
<title>Company name - title</title>

<meta http-equiv="Content-language" content="cs">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta name="author" content="Smart Coders, Verizon">
<meta name="Copyright" content="Smart Coders @ 2015">
<meta name="design" content="webdesign - http://www.sunlight.cz, info@sunlight.cz">
<link rel="stylesheet" type="text/css" href="default.css" title="default">

</head>


<body>
<div id="WholePage">
<div id="Inner">
<div id="Container" style="border:groove;border-color:#00CCFF">
<div id="Head">
<div id="Head_left">
<div id="Leaf_top"><img src="img/custsideimg.jpg" width="324" /></div>
<div id="Leaf_bottom"> 
<a class="registration" href="index.php?con=11">REGISTRATION</a> 
<!--a class="registration" href="">REGISTRATION</a--> 
<a class="log-in" href="index.php?con=12">LOG IN</a> </div>
</div>
<div id="Head_right">
<div id="Logo">
<div id="Name">
<span class="blue">V</span><span>erizon</span>&nbsp;<span class="blue">B</span><span>illing</span>&nbsp;
<span class="blue">O</span><span>perations</span>&nbsp;
<span class="blue">S</span><span>ervices &</span> &nbsp;<span class="blue">S</span><span>upport</span> &nbsp;
</div>
<div id="Informations">Billing solutions real time</div>
</div>
<div id="Top_menu"> 
<a class="kart" href="?page=home"><span>   </span></a> 
<a class="orders" href="index.php?con=3"><span>Team</span></a>
<a class="contact" href="index.php?con=1"><span>Contact</span></a>
<a class="help" href="index.php?con=2"><span>About Us</span></a>
<a class="home" href="?page=home"><span>Home</span></a>
</div>
</div>
</div>
<div id="CentralPart">
<div id="LeftPart">
<div id="Menu">
<div id="Menu_header">
<!--div class="menu_header_left"> <span class="menu_text"><font face="Georgia, Times New Roman, Times, serif">Search</font></span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> <!--<a class="menu_item" href="?page=home"><span>-->
<!-- Start of Page Search -->

		
		    <!--h5>&nbsp;</h5>
			<form method="post">
		    <input type="text" name="t1" value="search" onfocus="if(this.value=='search'){this.value='';}"onBlur="if(this.value==''){this.value='search';}"/>
            <input name="sear" type="submit" class="button" id="sub" value="Go" />
</form-->
<?php
	if($_REQUEST['sear'])
	  {
	   $se=$_REQUEST['t1'];
	   if($se!=NULL)
	   {
	   echo "<script>location.href='index.php?se=$se'</script>";
	   }
        }
		?>
		

		  <!--h5>&nbsp;</h5>
		  <!--</form>-->
		

		<!-- End of Page Search --></span></a><br>
</div-->
<div class="menu_header_left"> 
<span class="menu_text">DEVELOPMENT</span>
</div>
<div class="menu_header_right"> </div>
</div>
<div id="Menu_content"> 
<a class="menu_item" href="index.php?catg=1 & subcatg=Billing Rules"><span>Define Billing Rules</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=Rules"><span>View Billing Rules</span></a><br>
<a class="menu_item" href=""><span>Simulate Data</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=BillRun"><span>Test Bills</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=Shorts"><span>Ticket Management</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=Releasing"><span>Release</span></a><br>

</div>

<div class="menu_header_left"> <span class="menu_text">BQA</span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> <a class="menu_item" href=""><span>Raise Ticket</span></a><br>
<a class="menu_item" href=""><span>Finalize Release</span></a><br>
<a class="menu_item" href="index.php?catg= 2 & subcatg=Compare"><span>Compare Bills</span></a><br>
<!--a class="menu_item" href=""><span>Upload Test Data</span></a><br>
<a class="menu_item" href=""><span>Release Summary</span></a><br>
<a class="menu_item" href=""><span>View Billing Rules</span></a><br-->
</div>

<div class="menu_header_left"> <span class="menu_text">USER</span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> <a class="menu_item" href=""><span>Development</span></a><br>
<a class="menu_item" href=""><span>Tester</span></a><br>
<a class="menu_item" href=""><span>BQA</span></a><br>
<!--a class="menu_item" href="index.php?catg=3 & subcatg=Kids Toys"><span>Kids Toys</span></a><br>
<!--<a class="menu_item" href="?page=home"><span>Office Wear</span></a><br>
<a class="menu_item" href="?page=home"><span>Artificial Jewellery</span></a><br>-->
</div>
</div>
<img src="usepics/4.jpg" width="228" height="183" /></div>

<div id="RightPart">
<?php
  if($_REQUEST['se'])
	    {
		include("search.php");
		}
if($_REQUEST['con']==1)
{
include("contact.php");
}
if($_REQUEST['con']==2)
{
include("about.php");
}
if($_REQUEST['con']==3)
{
include("gallery.php");
}
if($_REQUEST['con']==11)
 {
	include("register.php");
	 }
	if($_REQUEST['con']==12)
 {
	include("login.php");
	 }
	
		if($_REQUEST['con']==13)
 {
	include("welcome.php");
	 }
		if($_REQUEST['con']==14)
 {
	include("viewitem.php");
	 }

if(!($_REQUEST['catg'])and !($_REQUEST['con'])and !($_REQUEST['se']))
{
include("home.php");
}

if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='Billing Rules')
{
include("loadrules.php"); //billing rules crap
}

if($_REQUEST['subcatg']=='BillRun')
{
include("billrun.php"); //billing rules crap
}
}
if($_REQUEST['catg']==1)
{
	if($_REQUEST['subcatg']=='Rules')
	{
	include("viewrules.php"); //view rules crap
	}
}

if($_REQUEST['catg']==2)
{
if($_REQUEST['subcatg']=='Compare')
{
include("compare.php");
}
}

?>

</div>
<div class="cleaner"></div>
</div>
<div id="Bottom">
<p class="down"><b>Copyright &copy; Billing Services, Smart Coders</b></p>

</div>
</div>
</div>
</div>
</div>

</body></html>