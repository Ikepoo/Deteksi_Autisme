// perkembangan
import Chart from "chart.js/auto";
var ctxL = document.getElementById("perkembangan").getContext("2d");
var myLineChart = new Chart(ctxL, {
    type: "line",
    data: {
        labels: ["", "", "", "", "", "", ""],
        datasets: [
            {
                label: "Gejala",
                data: [2, 5, 4, 3, 5, 6, 7],
                backgroundColor: ["rgba(105, 0, 132, .2)"],
                borderColor: ["rgba(200, 99, 132, .7)"],
                borderWidth: 2,
            },
        ],
    },
    options: {
        responsive: true,
    },
});
