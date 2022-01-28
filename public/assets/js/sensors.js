
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
