// perkembangan
import Chart from "chart.js/auto";
var ctxL = document.getElementById("anak").getContext("2d");
var myLineChart = new Chart(ctxL, {
    type: "line",
    data: {
        labels: ["3", "4", "5", "6", "7", "8", "9"],
        datasets: [
            {
                label: "Umur Anak",
                data: [5, 20, 10, 12, 5, 11, 7],
                backgroundColor: ["rgba(105, 0, 132, .2)"],
                borderColor: ["rgba(0, 10, 130, .7)"],
                borderWidth: 2,
            },
        ],
    },
    options: {
        responsive: true,
    },
});
