function myFunction() {

    var x = document.getElementById("myinput");
    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");
    if (x.type === "password") {
      x.type = "text" ;
      y.style.display= "none";
      z.style.display= "block";

    } else {
      x.type = "password";
      y.style.display= "block";
      z.style.display= "none";
    }
  }
  function myFunctionn() {

var xx = document.getElementById("myinputt2");
var yy = document.getElementById("hide11");
var zz = document.getElementById("hide22");
if (xx.type === "password") {
xx.type = "text" ;
yy.style.display= "none";
zz.style.display= "block";

} else {
xx.type = "password";
yy.style.display= "block";
zz.style.display= "none";
}
}
function myFunctionnn() {

var xxx = document.getElementById("myinputtt");
var yyy = document.getElementById("hide111");
var zzz = document.getElementById("hide222");
if (xxx.type === "password") {
xxx.type = "text" ;
yyy.style.display= "block";
zzz.style.display= "none";

} else {
xxx.type = "password";
yyy.style.display= "none";
zzz.style.display= "block";
}
}
function insing(){
document.getElementById("mydiv2").style.display="none";
document.getElementById("mydiv1").style.display="block";
document.getElementById("cli1").style.backgroundColor="#FAD5861"


}
function upsing(){

document.getElementById("mydiv2").style.display="block";

document.getElementById("mydiv1").style.display="none";
document.getElementById("clickbtn").style.backgroundColor="#FAD5861";


}
