<head>
<script>
function abc()
{
var arr=new Array("usepics/run1.jpg","usepics/run2.jpg","usepics/run3.jpg","usepics/run4.jpg","usepics/run5.jpg");
var ind=eval(document.f1.h1.value);
document.img.src=arr[ind];
document.f1.h1.value=ind+1;
if(document.f1.h1.value==5)
{
document.f1.h1.value=0;
}
}
setInterval("abc()",3000);
</script>
</head>
<body>
<div id="RightPart">
  <div id="Page"><img src="usepics/run2.jpg" alt="" width="669" height="210" name="img"/>
  <form name="f1">
  <input type="hidden" name="h1" value="0" />
  </form>
  <div><br/><center><h2><font face="Lucida Handwriting"  color="#00CCFF">Latest Billing News</font></h2></center></div>
 <table border="0">
 <tr><td> 
<img src="usepics/p4.jpg" width="150" height="180"/>
</td>
<td colspan="2">
<font face="Lucida Handwriting" size="+1" color="#99CC33">
Spped Billing during Server slowdown</font><br>
<font face="Comic Sans MS"><strong>A new broom swept through Christian Dior on Monday afternoon, July 4, a modernist gale and a witty architectural take on fashion, in the first show for the celebrated French label by its de facto new couturier, British-born Bill Gaytten.
Angular, rippling with Pop Culture colors and cut in the twisting metallic shapes of architectural great Frank Gehry, this was a brand new Dior couture, but with a collection that powerfully worked the house's legendary atelier, while keeping enough of the inspired mania of its sacked designer, John Galliano.</strong></font></td>
</tr>
<tr>
<td>
<br>
<img src="usepics/p6.jpg" /><br>
<font  color="#FF66CC" face="Lucida Handwriting">Image Processing</font><br>
<font face="Comic Sans MS"><strong>Dec 18, 2009<br>
Gone are the gathered umbrella ghagras and cholis and in their place a new fusion look for wedding wear has emerged. ...</strong></font></td>

<td>
<img src="usepics/p7.jpg" /><br>
<font  color="#FF66CC" face="Lucida Handwriting">Run Time usage </font><br>

<font face="Comic Sans MS"><strong>Jun 15, 2011<br>
The Tarun Tahiliani Bridal Couture Exposition is back with its third season of luxurious exposition, scheduled across July and August, 2011...</strong></font></td>
<td>
<img src="usepics/p5.jpg" /><br>
<font  color="#FF66CC" face="Lucida Handwriting">Call Forwarding </font><br>

<font face="Comic Sans MS"><strong>Mar 30, 2011<br>
For the Grand Opening of WLIFW Fall/Winter 2011, Neeru Kumar has chosen to pay homage to the best of Indian fabric traditions. ...</strong></font></td>
</tr>
</table>
  </div>
  </div>
  </body>