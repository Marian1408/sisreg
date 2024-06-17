$(function () {

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode = 'index'
  var intersect = true

  var $salesChart = $('#events-total1')
  var salesChart = new Chart($salesChart, {
    type: 'bar',
    data: {
      labels: ['Hecmar Montero', 'Michell Luna Linares', 'Macario robles Jimenes', 'Dr.Lauro San Angel ', 'Carolina Fuentes Castro', 'José Hernández Hernández', 'Mariana Castilla flores', 'Maria Vázquez Hernández'],
      datasets: [
        {
          backgroundColor: '#3d9970',
          borderColor: '#3d9970',
          data: [1, 2, 2, 2, 9, 2, 3, 2]
        },

        {
          backgroundColor: '#ced4da',
          borderColor: '#ced4da',
          data: [1, 4, 2, 2, 8, 4, 1, 2]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,

            // Include a dollar sign in the ticks
            callback: function (value) {
              if (value >= 1000) {

                value += ' eventos '
              }

              return value + ' -'
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  })

  var $salesChart = $('#events-total2')
  var salesChart = new Chart($salesChart, {
    type: 'bar',
    data: {
      labels: ['Alejandro Rivera Montero', 'Michell Luna Linares', 'Macario robles Jimenes', 'Dr.Lauro San Angel ', 'Carolina Fuentes Castro', 'José Hernández Hernández', 'Mariana Castilla flores', 'Maria Vázquez Hernández'],
      datasets: [
        {
          backgroundColor: '#ff851b',
          borderColor: '#ff851b',
          data: [1, 2, 5, 6, 2, 7, 3, 10]
        },
        {
          backgroundColor: '#ced4da',
          borderColor: '#ced4da',
          data: [6, 4, 2, 9, 8, 4, 1, 0]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,

            // Include a dollar sign in the ticks
            callback: function (value) {
              if (value >= 1000) {

                value += ' eventos '
              }

              return value + ' -'
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  })

  var $salesChart = $('#events-total3')
  var salesChart = new Chart($salesChart, {
    type: 'bar',
    data: {
      labels: ['Alejandro Rivera Montero', 'Michell Luna Linares', 'Macario robles Jimenes', 'Dr.Lauro San Angel ', 'Carolina Fuentes Castro', 'José Hernández Hernández', 'Mariana Castilla flores', 'Maria Vázquez Hernández'],
      datasets: [
        {
          backgroundColor: '#3c8dbc',
          borderColor: '#3c8dbc',
          data: [6, 4, 5, 6, 8, 7, 8, 10]
        },
        {
          backgroundColor: '#ced4da',
          borderColor: '#ced4da',
          data: [6, 4, 2, 9, 8, 4, 8, 7]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,

            // Include a dollar sign in the ticks
            callback: function (value) {
              if (value >= 1000) {

                value += ' eventos '
              }

              return value + ' -'
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  })

  var $salesChart = $('#events-total4')
  var salesChart = new Chart($salesChart, {
    type: 'bar',
    data: {
      labels: ['Carlos Rivas', 'Michell Luna Linares', 'Macario robles Jimenes', 'Bruno San Angel ', 'Carolina Fuentes Castro', 'Carlos Hernández Hernández', 'Mariana Castilla flores', 'Maria Vázquez Hernández'],
      datasets: [
        {
          backgroundColor: '#ffc107',
          borderColor: '#ffc107',
          data: [1, 2, 5, 6, 2, 5, 5, 5]
        },
        {
          backgroundColor: '#ced4da',
          borderColor: '#ced4da',
          data: [6, 4, 2, 9, 8, 4, 9, 5]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,

            // Include a dollar sign in the ticks
            callback: function (value) {
              if (value >= 1000) {

                value += ' eventos '
              }

              return value + ' -'
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  })

})