/* global Chart:false */

$(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode = 'index'
  var intersect = true

  var $salesChart = $('#sales-chart')
  // eslint-disable-next-line no-unused-vars
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

              return value + ' '
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
  var $salesChart = $('#sales-chart1')
  // eslint-disable-next-line no-unused-vars
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
  var $salesChart = $('#sales-chart2')
  // eslint-disable-next-line no-unused-vars
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

  var $salesChart = $('#sales-chart3')
  // eslint-disable-next-line no-unused-vars
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

  var $visitorsChart = $('#visitors-chart')
  // eslint-disable-next-line no-unused-vars
  var visitorsChart = new Chart($visitorsChart, {
    data: {
      labels: ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
      datasets: [{
        type: 'line',
        data: [100, 120, 170, 167, 180, 177, 160],
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        pointBorderColor: '#007bff',
        pointBackgroundColor: '#007bff',
        fill: false
        // pointHoverBackgroundColor: '#007bff',
        // pointHoverBorderColor    : '#007bff'
      },
      {
        type: 'line',
        data: [60, 80, 70, 67, 80, 77, 100],
        backgroundColor: 'tansparent',
        borderColor: '#ced4da',
        pointBorderColor: '#ced4da',
        pointBackgroundColor: '#ced4da',
        fill: false
        // pointHoverBackgroundColor: '#ced4da',
        // pointHoverBorderColor    : '#ced4da'
      }]
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
            suggestedMax: 200
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

// lgtm [js/unused-local-variable]
