<html>
<?php
session_start();
$a=0;
$con=mysqli_connect("localhost","root","","player");
$sql="UPDATE position SET x='1'";
if(mysqli_query($con,$sql));
$con=mysqli_connect("localhost","root","","player");
$sql="UPDATE position SET y='4'";
if(mysqli_query($con,$sql));
if(isset($_POST["sub"])){
if($_POST["ans"]=="fenrir greyback"){
$a=1;
}}
?>
<style>
body{
background-color:black;
}
img#w{
margin-top:-40%;
}
img#f{
margin-top:-40%;
opacity:0.5;
}
p{
position:absolute;
font-family:chiller,Helvetica,Ariel,sans-seriff;
left:40%;
z-index:100;
color:red;
font-size:25px;
font-weight:15px;
}
img{
z-index:-10;
}
#back{
background-color:black;
color:red;
font-family:chiller,Helvetica,Ariel,sans-seriff;
font-size:30px;
font-weight:20px;
width:100px;
height:40px;
border:0;
position:absolute;
top:2%;
}
h3{
position:relative;
font-family:chiller,Helvetica,Ariel,sans-seriff;
font-size:35px;
text-align:left;
padding-left:20%;
top:-150%;
color:red;
width:30%;
}
#c{
visibility:hidden;
}
#clue
{font-weight:900;
 font-size:50px;
 font-color:red;
 background-position:right bottom;
 background-image:url(halloween1.jpg);
 background-repeat:no-repeat;
 background-color:red;
 height:60%;
 width:60%;
 position:relative;
 left:30%;
 top:-80%;
 visibility:hidden;
 
}
input{
border-radius:5px;
}
</style>
<body>
<audio id="au1">
<source src="wolf12.wav" type="audio/wav">
</audio>
<audio id="au2">
<source src="wolf11.wav" type="audio/wav">
</audio>
<canvas id="canv" width="1334px" height="720px"></canvas>
<div id="clue" style="border-style:double;color:red;border-width:5px;"><pre>WHO AM I?
     Rhiqeq oqhlacnd</br></br>
	 <form name="form1" method="post" action="t11.php">
 <input type="text" style="height:40px;width:200px;font-size:30px;position:absolute;top:70%;" name="ans" /> 
 <input type="submit" style="height:40px;width:200px;font-size:30px;position:absolute;top:85%;" name="sub" value="Submit"/></form>
 <input type="button" style="height:40px;width:200px;font-size:30px;left:70%;position:absolute;top:85%" value="back" onclick="change()"/>
 </pre>
  </div>
<div>
<img id="w" src="wood.jpg" alt="wood" width="100%" height="25%">
<img id="f" src="frame.jpg" alt="frame" width="100%" height="25%">
</div>
<p  id="a" style="top:90%;" >Tell me about werewolves.</p>
<p  id="b" style="top:95%;" >Can you give me some Info about the Thief.</p>
<p  id="c" style="top:99%;" >yes.</p>
<h3 id="msg"></h3>
<form name="form2" action="fmaze2.php" method="post">
<input id="back" type="submit" value="back" name="back">
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script type="text/javascript">
var cluehnd=document.getElementById("clue");
var msghnd=document.getElementById("msg");


var w="<?php echo $a; ?>"; 

if(w=="1"){
alert("yes!!");
}
        var ind=0,ctr=0,s,q;
        var canvas = document.getElementById('canv');
        var ctx = canvas.getContext('2d');

		var myimage = new Image();
myimage.src = 'wolfs.png';
myimage.onload = function() {
                     ctx.drawImage(myimage, 0, 0,1334,560);
                 }
				 var imageone = new Image();
				 var show=function(t,m,ind,i){
if(ind<m.length){
$(t).append(m[ind++]);
ctr=1;
}
else{if(i==0){
clearInterval(s);}
else{
clearInterval(q);}}
}
$( "#a" ).click(function(){s
cluehnd.style.zIndex=50;
if(ctr==1){
clearInterval(q);
clearInterval(s);
ind=0;
ctr=0;}
var m=document.getElementById("au1");
m.autoplay=false;
m.load();
var m=document.getElementById("au2");
m.autoplay=true;
m.load();
msghnd.innerHTML="";
s=setInterval(function(){show("#msg","A werewolf, also known as a lycanthrope, is a mythological human with the ability to shapeshift into a wolf-like creature",ind++,0)},90);
});
$( "#b" ).click(function(){
cluehnd.style.zIndex=50;
if(ctr==1){
clearInterval(s);
clearInterval(q);
ind=0;
ctr=0;}
var m=document.getElementById("au2");
m.autoplay=false;
m.load();
var m=document.getElementById("au1");
m.autoplay=true;
m.load();
msghnd.innerHTML="";
q=setInterval(function(){show("#msg","Help shall be given to those who earn it.Are you ready to Trick or Treat?!!",ind++,1)},70);
document.getElementById("c").style.visibility="visible";
});
function change(){
cluehnd.style.visibility="hidden";
cluehnd.style.zIndex=-50;
}
$( "#c" ).click(function(){
if(ctr==1){
clearInterval(s);
clearInterval(q);
ind=0;
ctr=0;}
var m=document.getElementById("au2");
m.autoplay=false;
m.load();
var m=document.getElementById("au1");
m.autoplay=false;
m.load();
msghnd.innerHTML="";
cluehnd.style.visibility="visible";
cluehnd.style.zIndex=50;
});

</script>
</body>
</html>
