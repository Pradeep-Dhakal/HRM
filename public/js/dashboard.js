$(document).ready(function() {

    donutChart();

    $(window).resize(function() {
      window.donutChart.redraw();
    });
  });


  function donutChart() {
    window.donutChart = Morris.Donut({
    element: 'donut-chart',
    data: [
      {label: "Download Sales", value: 50},
      {label: "In-Store Sales", value: 25},

    ],
    resize: true,
    redraw: true
  });
  }


