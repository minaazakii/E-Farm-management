function showmenu(){
    var menu = document.getElementById("sidemenu");
    var content = document.getElementById("content");
    if (menu.classList.contains("active")){
      menu.style.left = "-900px"
      menu.classList.remove("active");
      

      
    }
    else{
      menu.style.left = "0px";
      menu.classList.add("active");
      
    }
    console.log(menu);
}
    
function togglesearch(){
var search = document.getElementById("search");
    var content = document.getElementById("content");
    if (search.classList.contains("active")){
      search.style.top = "-60px"
      search.classList.remove("active");
      

      
    }
    else{
      search.style.top = "50px";
      search.classList.add("active");
      
    }
    console.log(search);
}