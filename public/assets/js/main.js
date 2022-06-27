var menu = document.getElementById("sidemenu");

function showmenu(){
    var sidebutton = document.querySelector("#toggleside").getElementsByTagName("button")[0];
    var content = document.getElementById("content");
    

    if (menu.classList.contains("active")){
      menu.classList.remove("active");
      sidebutton.classList.remove("active");
      document.getElementById("search").classList.remove("active");
      sidebutton.innerHTML = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#184D47' class='bi bi-list' viewBox='0 0 16 16'><path d='M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z'/></svg>";
    }
    else{
      menu.classList.add("active");
      sidebutton.classList.add("active");
      document.getElementById("search").classList.remove("active");

      sidebutton.innerHTML = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-lg' viewBox='0 0 16 16'><path d='M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z'/></svg>";
    }
}


var search = document.getElementById("search");
window.addEventListener("scroll",function(){
  var top = document.documentElement.scrollTop;
  menu.style.top = top + "px";

})

window.addEventListener("click",function(e){
  console.log(e.target);
  if (e.target.id == "search"){
    console.log(e.target);
  }


  else if (search.classList.contains("active") && e.target.id != "search"){
    search.classList.remove("active");
  }
  else if(e.target.classList.contains("input-group-text") || e.target.classList.contains("bi-search")  && !search.classList.contains("active"))
  {
    search.classList.add("active");
  }
  
  else{
    search.classList.remove("active");
  }
});






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
