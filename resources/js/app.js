// tooltip bootstrap
import "./bootstrap";
(() => {
    const tooltipTriggerList = document.querySelectorAll(
        '[data-bs-toggle="tooltip"]'
    );
    const tooltipList = [...tooltipTriggerList].map(
        (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
    );
})();

//line
import Chart from "chart.js/auto";
var ctxL = document.getElementById("lineChart").getContext("2d");
var myLineChart = new Chart(ctxL, {
    type: "bar",
    data: {
        labels: ["Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
        datasets: [
            {
                label: "Pakar 1",
                data: [10, 11, 14, 15, 17],
                backgroundColor: ["rgba(105, 0, 132, .2)"],
                borderColor: ["rgba(200, 99, 132, .7)"],
                borderWidth: 2,
            },
            {
                label: "Pakar 2",
                data: [9, 11, 9, 13, 10],
                backgroundColor: ["rgba(0, 137, 132, .2)"],
                borderColor: ["rgba(0, 10, 130, .7)"],
                borderWidth: 2,
            },
            {
                label: "Pakar 3",
                data: [12, 13, 12, 14, 16],
                backgroundColor: ["rgba(133, 255, 210, .4)"],
                borderColor: ["rgba(0, 206, 130, .6)"],
                borderWidth: 2,
            },
        ],
    },
    options: {
        responsive: true,
    },
});
