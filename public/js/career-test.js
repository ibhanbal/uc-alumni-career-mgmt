$(document).ready(function() {
    // Polar Area Chart
    var polarDataCurrent = [
      {
        value: careerTestScores.extroversion,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Extroversion Score"
      },
      {
        value: careerTestScores.agreeableness,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Agreeableness Score"
      },
      {
        value: careerTestScores.conscientiousness,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Conscientiousness Score"
      },
      {
        value: careerTestScores.neuroticism,
        color: "#949FB1",
        highlight: "#A8B3C5",
        label: "Neuroticism Score"
      },
      {
        value: careerTestScores.openness,
        color: "#4D5360",
        highlight: "#616774",
        label: "Openness Score"
      }
    ];

    var polarDataAverage = [
      {
        value: careerTestAverage.extroversion,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Average Extroversion Score"
      },
      {
        value: careerTestAverage.agreeableness,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Average Agreeableness Score"
      },
      {
        value: careerTestAverage.conscientiousness,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Average Conscientiousness Score"
      },
      {
        value: careerTestAverage.neuroticism,
        color: "#949FB1",
        highlight: "#A8B3C5",
        label: "Average Neuroticism Score"
      },
      {
        value: careerTestAverage.openness,
        color: "#4D5360",
        highlight: "#616774",
        label: "Average Openness Score"
      }
    ];

    var radarChartData = {
      labels: ["Extroversion", "Agreeableness", "Conscientiousness", "Neuroticism", "Openness"],
      datasets: [
        {
          label: "Current Scores",
          fillColor: "rgba(220,220,220,0.2)",
          strokeColor: "rgba(220,220,220,1)",
          pointColor: "rgba(220,220,220,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [careerTestScores.extroversion,careerTestScores.agreeableness,careerTestScores.conscientiousness,careerTestScores.neuroticism,careerTestScores.openness]
        },
        {
          label: "Average Scores",
          fillColor: "rgba(151,187,205,0.2)",
          strokeColor: "rgba(151,187,205,1)",
          pointColor: "rgba(151,187,205,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [careerTestAverage.extroversion,careerTestAverage.agreeableness,careerTestAverage.conscientiousness,careerTestAverage.neuroticism,careerTestAverage.openness]
        }
      ]
    };

  window.onload = function(){
    var pda = document.getElementById("average_career_test_polar").getContext("2d");
    window.myPolarArea = new Chart(pda).PolarArea(polarDataAverage, {
      responsive:true
    });

    var pdc = document.getElementById("current_career_test_polar").getContext("2d");
    window.myPolarArea = new Chart(pdc).PolarArea(polarDataCurrent, {
      responsive:true
    });

    var rcd = document.getElementById("comparison_career_test_radar").getContext("2d");
      window.myRadar = new Chart(rcd).Radar(radarChartData, {
        responsive: true
      });
  };
});

// $(document).ready(function() {
//     // Polar Area Chart
//     var polarDataAverage = [
//       {
//         value: careerTestAverage.extroversion,
//         color:"#F7464A",
//         highlight: "#FF5A5E",
//         label: "Average Extroversion Score"
//       },
//       {
//         value: careerTestAverage.agreeableness,
//         color: "#46BFBD",
//         highlight: "#5AD3D1",
//         label: "Average Agreeableness Score"
//       },
//       {
//         value: careerTestAverage.conscientiousness,
//         color: "#FDB45C",
//         highlight: "#FFC870",
//         label: "Average Conscientiousness Score"
//       },
//       {
//         value: careerTestAverage.neuroticism,
//         color: "#949FB1",
//         highlight: "#A8B3C5",
//         label: "Average Neuroticism Score"
//       },
//       {
//         value: careerTestAverage.openness,
//         color: "#4D5360",
//         highlight: "#616774",
//         label: "Average Openness Score"
//       }
//     ];
//
//   window.onload = function(){
//     var ctx = document.getElementById("average_career_test_polar").getContext("2d");
//     window.myPolarArea = new Chart(ctx).PolarArea(polarDataAverage, {
//       responsive:true
//     });
//   };
// });
