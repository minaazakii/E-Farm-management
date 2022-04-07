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

function togglemessage(){
  var m = document.getElementById("messages");

  console.log(m);
  if (m.classList.contains("active")){
    m.classList.remove("active");
    m.style.display = "none";
  }
  else{
    document.getElementById("notifcations").style.display = "none";
    document.getElementById("notifcations").classList.remove("active");

    m.classList.add("active");
    m.style.display = "block";
  }
}

function togglenotfs(){
  var m = document.getElementById("notifcations");

  console.log(m);
  if (m.classList.contains("active")){
    m.classList.remove("active");
    m.style.display = "none";
  }
  else{
    document.getElementById("messages").style.display = "none";
    document.getElementById("messages").classList.remove("active");

    m.classList.add("active");
    m.style.display = "block";
  }
}
