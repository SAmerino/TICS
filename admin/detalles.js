document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/api/data')
        .then(response => response.json())
        .then(sensorData => {
            var ctx = document.getElementById('sensorChart').getContext('2d');
            var sensorChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: sensorData.map(data => new Date(data.timestamp)),
                    datasets: [
                        {
                            label: 'Temperatura (°C)',
                            data: sensorData.map(data => data.temp),
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 2,
                            fill: false,
                            pointRadius: 3,
                            pointBackgroundColor: 'rgba(255, 99, 132, 1)'
                        },
                        {
                            label: 'Humedad del Suelo (%)',
                            data: sensorData.map(data => data.hum_gnd),
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 2,
                            fill: false,
                            pointRadius: 3,
                            pointBackgroundColor: 'rgba(54, 162, 235, 1)'
                        },
                        {
                            label: 'Humedad del Aire (%)',
                            data: sensorData.map(data => data.hum_air),
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 2,
                            fill: false,
                            pointRadius: 3,
                            pointBackgroundColor: 'rgba(75, 192, 192, 1)'
                        },
                        {
                            label: 'Luz (lux)',
                            data: sensorData.map(data => data.luz),
                            borderColor: 'rgba(255, 206, 86, 1)',
                            borderWidth: 2,
                            fill: false,
                            pointRadius: 3,
                            pointBackgroundColor: 'rgba(255, 206, 86, 1)'
                        }
                    ]
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
                            title: {
                                display: true,
                                text: 'Mediciones'
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
                                        label += context.parsed.y.toFixed(2);
                                        label += context.dataset.label.includes('Temperatura') ? '°C' : context.dataset.label.includes('Luz') ? ' lux' : '%';
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