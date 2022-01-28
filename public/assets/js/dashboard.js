/* Dashboard page */

var barColors = [
  "rgb(59, 81, 47)",
  "rgb(81, 113, 65)",
  "rgb(93, 130, 74)",
  "rgb(102, 146, 84) ",
 " rgb(113, 162, 93)",
 "rgb(127, 171, 109)",
 "rgb(141, 181, 125)",
 "rgb(155, 190, 142)",
 "rgb(169, 199, 158)"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }],
    }
  }
});


var oValues = [humidity,humidityRemain];
var barColors = [
  "rgb(59, 81, 47)",
 ];

new Chart("Chart", {
  type: "doughnut",
  data: {

    datasets: [{
      backgroundColor: barColors,
      data: oValues
    }]
  },

});

var bValues = [soil,soilRemain];
var barColors = [
  "rgb(59, 81, 47)",

];

new Chart("secondchart", {
  type: "doughnut",
  data: {

    datasets: [{
      backgroundColor: barColors,
      data: bValues
    }]
  },

})

var MonthName = ["January" , "February " ,"March" , "April " , "May" , "June" , "July" , "August" , "Septemper" , "October" , "November" , "December"];

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



function nextmonth(){
    var mnth = document.getElementById("mnth").innerHTML;
    for (var i =0 ; i< MonthName.length; i++){

        if (mnth == MonthName[i]){

            if (i ==11){
                year++;
                showdate(0,year,MonthName[0]);

                break;

            }

            if (i+1 == month){
                showdate(i+1,year,MonthName[i+1],dayname);

            }
            else {
                showdate(i+1,year,MonthName[i+1]);

            }
            break;
        }
    }
}
function pervmonth(){
    var mnth = document.getElementById("mnth").innerHTML;

    for (var i =0 ; i< MonthName.length; i++){
        if (mnth == MonthName[i]){
            if (i ==0){
                year--;
                showdate(11,year,MonthName[11]);

                break;

            }

            if (i-1 == month){
                showdate(i-1,year,MonthName[i-1],dayname);

            }
            else {
                showdate(i-1,year,MonthName[i-1]);

            }
            break;
        }
    }


}

function yieldprogress(){

    var pre = document.getElementsByClassName("yieldprog");
    var prog = document.getElementsByClassName("progresbar");
    for (var i =0 ; i< pre.length; i++){
        var p = pre[i].innerHTML.trim();
        prog[i].style.width = p;
        var con = p.split('%');
        if(parseInt(con) <=30){

            prog[i].style.backgroundColor = "#D6EFC7";

        }
        else if(parseInt(con)  <=60){
            prog[i].style.backgroundColor = "#96BB7C";
        }
        else if (parseInt(con) <= 80){
            prog[i].style.backgroundColor = "#3FA94A";

        }
        else if (parseInt(con) == 100){
            prog[i].style.backgroundColor = "#184D47";

        }
        else {
            prog[i].style.backgroundColor = "#F62222";

        }

    }

}

function daysInMonth (month, year) {
    return new Date(year, month, 0).getDate();
}
function firstday (month, year){
    return new Date(year, month, 1).getDay();
}
function loaddate(){
    var cal = new Date();
    var day = cal.getDay();
    var dayname = cal.getDate();
    var MonthName = ["January" , "February " ,"March" , "April " , "May" , "June" , "July" , "August" , "Septemper" , "October" , "November" , "December"];

    var year = cal.getFullYear();
    var month = cal.getMonth();
    day = (day == 0) ? "Sun" : (day == 1) ? "Mon" : (day == 2) ? "Tues" : (day == 3) ? "Wed" : (day == 4) ? "Thu" : (day == 5) ? "Fri" :  "Sat" ;




    showdate(month, year ,MonthName[month] ,dayname);
    yieldprogress();




}
function showdate(month, year ,MonthName,dayname){
    var daysnum = daysInMonth(month+1,year);
    var daysfirst = firstday(month,year);
    var lastmonth = daysInMonth(month,year);
    console.log(dayname);
    var allcell = 42 - daysnum;
    var upcell = allcell - daysfirst;

    for (var i = 0; i<42;i++){
        document.getElementsByTagName("td")[i].innerHTML = "";
        document.getElementsByTagName("td")[i].style.backgroundColor = "#ffffff";
        document.getElementsByTagName("td")[i].style.opacity = "65%";

    }

    console.log(month +" "+ year + " " +  MonthName);

    var row = document.getElementById("firstrow");
    var day1 = row.getElementsByTagName("td")[daysfirst];
    day1.innerHTML="1";
    day1.style.opacity = "100%"

    document.getElementById("mnth").innerHTML = MonthName;
    document.getElementById("year").innerHTML = year;



    for (var i = 1; i<daysnum;i++){
        document.getElementsByTagName("td")[daysfirst+i].innerHTML = i+1;
        document.getElementsByTagName("td")[daysfirst+i].style.opacity = "100%"
        if (document.getElementsByTagName("td")[daysfirst+i].innerHTML== dayname ){
            document.getElementsByTagName("td")[daysfirst+i].style.backgroundColor = "#FAD586"
        }
    }
    for (var i = 1 ; i <= upcell;i++){
        document.getElementsByTagName("td")[daysfirst+daysnum+i -1].innerHTML = i;

    }
    for (var i=1 , j =0; i<=  allcell - upcell  ;i++,j++ ){
        row.getElementsByTagName("td")[daysfirst-i].innerHTML= lastmonth -j ;
    }


}


/*  */
/* Sensors page */

for (var i =0 ; i<=2;i++){
  var progress = document.getElementsByClassName("value-container")[i].innerHTML;
  progress = progress.split("%")[0];
  console.log(progress);
  var progressValue = 0;
  var progressEndValue = progress;
  while(progressValue < progress){
      progressValue++;
      console.log(progressValue)
      document.getElementsByClassName("circular-progress")[i].style.backgroundImage= "conic-gradient(#D6EFC7,#184D47 " + progressValue * 3.6 +"deg,#fff " + progressValue * 3.6 +"deg)";
  }


}
