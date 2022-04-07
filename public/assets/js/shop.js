
const element = document.getElementById("like");
const elements = document.getElementById("unlike");
document.getElementById("like").style.display=("none")
element.addEventListener("click", myFunction1);
elements.addEventListener("click", myFunction2);

function myFunction1() {
    document.getElementById("like").style.display=("block")
  }
  
  function myFunction2() {

    document.getElementById("ulike").style.display=("block") 
 }