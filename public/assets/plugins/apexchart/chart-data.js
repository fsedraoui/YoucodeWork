'use strict';

$(document).ready(function() {

	function generateData(baseval, count, yrange) {
		var i = 0;
		var series = [];
		while (i < count) {
			var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
			var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
			var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;

			series.push([x, y, z]);
			baseval += 86400000;
			i++;
		}
		return series;
	}

	var options = {
          series: [85, 75, 60, 40],
          chart: {		  
		  toolbar: {
			show: false
		  },
          height: 250,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            offsetY: 0,
            startAngle: 0,
            endAngle: 270,
            hollow: {
              margin: 5,
              size: '50%',
              background: 'transparent',
              image: undefined,
            },
            dataLabels: {
              name: {
                show: false,
              },
              value: {
                show: false,
              }
            }
          }
        },
        colors: ['#7B46BE', '#FA6CA4', '#FACD3A', '#24C0DC'],
        labels: ['Applied Jobs', 'Messenger', 'Facebook', 'LinkedIn'],
        legend: {
          show: false,
          floating: true,
          fontSize: '16px',
          position: 'bottom',
          offsetX: 160,
          offsetY: 15,
          labels: {
            useSeriesColors: true,
          },
          markers: {
            size: 0
          },
          formatter: function(seriesName, opts) {
            return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
          },
          itemMargin: {
            vertical: 3
          }
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
                show: false
            }
          }
        }]
        };

      
        var chart = new ApexCharts(document.querySelector("#chartradial"), options);
        chart.render();
		
		  var options = {
          series: [{
            name: "profile view",
            data: [100, 150, 200, 250, 200, 250, 200, 200, 200, 200, 300, 350]
        }],
        chart: {
          height: 360,
          type: 'line',		  
		  toolbar: {
			show: false
		  },
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
		colors: ["#FF5B37"],
        stroke: {
          curve: 'straight',
		  width: [1]
        },
		markers: {
          size: 4,
          colors: ["#FF5B37"],
          strokeColors: "#FF5B37",
          strokeWidth: 1,
          hover: {
            size: 7,
          }
        },
        grid: {
			position: 'front',
			borderColor: '#ddd',
			strokeDashArray: 7,
			xaxis: {
				lines: {
				  show: true
				}
			}
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		  lines: {
			show: false,
		  }
        },
		yaxis: {
		  lines: {
			show: true,
		  }
		}
        };

        var chart = new ApexCharts(document.querySelector("#chartprofile"), options);
        chart.render();
  
});