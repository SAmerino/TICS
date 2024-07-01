<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gráfico de Temperatura vs. Tiempo</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns"></script>
</head>
<body>
    <canvas id="temperatureChart" width="800" height="400"></canvas>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('http://localhost:3000/api/data')
                .then(response => response.json())
                .then(sensorData => {
                    var ctx = document.getElementById('temperatureChart').getContext('2d');
                    var temperatureChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: sensorData.map(data => new Date(data.time)),
                            datasets: [{
                                label: 'Temperatura (°C)',
                                data: sensorData.map(data => data.temperature),
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 2,
                                fill: false,
                                pointRadius: 3,
                                pointBackgroundColor: 'rgba(255, 99, 132, 1)'
                            }]
                        },
                        options: {
                            scales: {
                                x: {
                                    type: 'time',
                                    time: {
                                        unit: 'minute',
                                        displayFormats: {
                                            minute: 'HH:mm'
                                        }
                                    },
                                    title: {
                                        display: true,
                                        text: 'Hora del día'
                                    }
                                },
                                y: {
                                    beginAtZero: false,
                                    suggestedMin: 20,
                                    suggestedMax: 30,
                                    title: {
                                        display: true,
                                        text: 'Temperatura (°C)'
                                    }
                                }
                            },
                            plugins: {
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            var label = context.dataset.label || '';
                                            if (label) {
                                                label += ': ';
                                            }
                                            if (context.parsed.y !== null) {
                                                label += context.parsed.y.toFixed(2) + '°C';
                                            }
                                            return label;
                                        }
                                    }
                                }
                            }
                        }
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        });
    </script>
</body>
</html>
