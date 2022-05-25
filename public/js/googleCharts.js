//------------------------------------------------------------------------------ pizza graph


google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['category', 'quantity'],
    ['wood',     11],
    ['metal',      2],
    ['acid',  2],
    ['cement', 2],
    ['wool',    7]
  ]);

  var options = {
    title: 'Products types',
    pieHole: 0.4,
    backgroundColor: { fill:'transparent' },
    titleTextStyle: {
        color: '#f5f5f5'
    },
    hAxis: {
        textStyle: {
            color: '#f5f5f5'
        },
        titleTextStyle: {
            color: '#f5f5f5'
        }
    },
    vAxis: {
        textStyle: {
            color: '#f5f5f5'
        },
        titleTextStyle: {
            color: '#f5f5f5'
        }
    },
    legend: {
        textStyle: {
            color: '#f5f5f5'
        }
    },
    is3D: true
  };

  var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
  chart.draw(data, options);
}




//------------------------------------------------------------------------------ line graph




google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawAreaChart);

function drawAreaChart() {
  var areadata = google.visualization.arrayToDataTable([
    ['Year', 'Sales', 'Expenses'],
    ['2013',  1000,      400],
    ['2014',  1170,      460],
    ['2015',  660,       1120],
    ['2016',  1030,      540]
  ]);

  var areaoptions = {
    title: 'Company Performance',
    hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
    vAxis: {minValue: 0},
    backgroundColor: { fill:'transparent' },
    titleTextStyle: {
        color: '#f5f5f5'
    },
    hAxis: {
        textStyle: {
            color: '#f5f5f5'
        },
        titleTextStyle: {
            color: '#f5f5f5'
        }
    },
    vAxis: {
        textStyle: {
            color: '#f5f5f5'
        },
        titleTextStyle: {
            color: '#f5f5f5'
        }
    },
    legend: {
        textStyle: {
            color: '#f5f5f5'
        }
    }
  };

  var chart = new google.visualization.AreaChart(document.getElementById('areachart'));
  chart.draw(areadata, areaoptions);
}



//



google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawColumnChart);
function drawColumnChart() {
  var data = google.visualization.arrayToDataTable([
    ["Product", "Density", { role: "style" } ],
    ["wood", 8.94, "#b87333"],
    ["metal", 21.49, "silver"],
    ["acid", 19.30, "gold"],
    ["wool", 8.45, "color: #e5e4e2"]
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);

  var columnOptions = {
    title: "price, in Dollar",
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var chart = new google.visualization.ColumnChart(document.getElementById("columnchart"));
  chart.draw(view, columnOptions);
}