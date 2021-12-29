// var xValues = [10,20, 30 ,40, 50 ,60, 70, 80, 90 ];
// var yValues = [90, 30,70 ,20, 50, 40, 80 ,20,10];
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
      data: yValues,
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
        }
      }],
    }
  }
});


var iValues = [10];
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

var aValues = ["1", "2", "3", "4"];
var bValues = [55, 49, 44, 24];
var barColors = [
  "rgb(59, 81, 47)",
  "rgb(93, 130, 74)",

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
