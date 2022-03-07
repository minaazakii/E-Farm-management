var xValues = [10,20, 30 ,40, 50 ,60, 70, 80, 90 ];
var yValues = [90, 30,70 ,20, 50, 40, 80 ,20,10];
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

var value1 = document.getElementsByClassName("value-container")[0].innerText.split("%")[0];
var value2 = document.getElementsByClassName("value-container")[1].innerText.split("%")[0];
var value3 = document.getElementsByClassName("value-container")[2].innerText.split("%")[0];
var v1 = 0;
var v2 = 0;
var v3 = 0;
var run1 = setInterval(function(){
  v1++;
  document.getElementsByClassName("circular-progress")[0].style.backgroundImage= "conic-gradient(#D6EFC7,#184D47 " + v1 * 3.6 +"deg,#fff " + v1 * 3.6 +"deg)";
  if(v1 == value1){
    clearInterval(run1);

  }
},10);
var run2 = setInterval(function(){
  v2++;
  document.getElementsByClassName("circular-progress")[1].style.backgroundImage= "conic-gradient(#D6EFC7,#184D47 " + v2 * 3.6 +"deg,#fff " + v2 * 3.6 +"deg)";
  if(v2 == value2){
    clearInterval(run2);

  }
},10);
var run3 = setInterval(function(){
  v3++;
  document.getElementsByClassName("circular-progress")[2].style.backgroundImage= "conic-gradient(#D6EFC7,#184D47 " + v3 * 3.6 +"deg,#fff " + v3 * 3.6 +"deg)";
  if(v3 == value3){
    clearInterval(run3);

  }
},10);
