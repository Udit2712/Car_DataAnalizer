<?php
$title = "Car Data Visualizer";
$bk_amt = "./";
require_once 'includes/header.php';
?>

<div>
    <div class="container">
        <div class="row row-cols-auto">
            <div class="col">
                <div>
                    <canvas id="pnt_pricewise" style="height:600px;width:100%;max-width:600px"></canvas>
                    <script>
                        var xValues = ["1 Lakh - 5 Lakhs",
                            "5 Lakhs - 10 Lakhs",
                            "10 Lakhs - 15 Lakhs",
                            "15 Lakhs - 20 Lakhs",
                            "20 Lakhs - 25 Lakhs",
                            "25 Lakhs - 30 Lakhs",
                            "30 Lakhs - 50 Lakhs",
                            "50 Lakhs - Crore",
                            "1 Crore"
                        ];
                        var yValues = [51.94, 63.23, 69.86, 75.41, 78.75, 79, 81.37, 86.90, 93.24];
                        var barColors = ["blue", "red", "green", "pink", "yellow", "brown", "cyan", "orange", "purple"];
                        Chart.defaults.global.defaultFontColor = "#fff";

                        new Chart("pnt_pricewise", {
                            type: "bar",
                            data: {
                                labels: xValues,
                                datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                }]
                            },
                            options: {
                                scales: {
                                    xAxes: [{
                                        gridLines: {
                                            display: false
                                        }
                                    }],
                                    yAxes: [{
                                        gridLines: {
                                            display: false
                                        }
                                    }]
                                },
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: "Average Points Pricewise"
                                }
                            }
                        });
                    </script>
                </div>
            </div>
            <div class="col">
                <div>
                    <canvas id="avg_pnt_bodytype" style="height:600px;width:100%;max-width:600px"></canvas>
                    <script>
                        var xValues = ["Hatchback", "MPV", "MUV", "SUV",
                            "Sedan", "Crossover", "Coupe", "Convertible",
                            "Sports + Hatchback"
                        ];

                        var yValues = [51.94, 63.23, 69.86, 75.41, 78.75, 79, 81.37, 86.9, 93.2];
                        var barColors = ["blue", "red", "green", "pink", "yellow", "brown", "cyan", "orange", "purple"];
                        Chart.defaults.global.defaultFontColor = "#f00";

                        new Chart("avg_pnt_bodytype", {
                            type: "bar",
                            data: {
                                labels: xValues,
                                datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                }]
                            },
                            options: {
                                scales: {
                                    xAxes: [{
                                        gridLines: {
                                            display: false
                                        }
                                    }],
                                    yAxes: [{
                                        gridLines: {
                                            display: false
                                        }
                                    }]
                                },
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: "Average points of cars per price range"
                                }
                            }
                        });
                    </script>
                </div>
            </div>

            <div class="col">
                <div>
                    <canvas id="bodytype_count" style="height:650px;width:100%;max-width:900px"></canvas>
                    <script>
                        var xValues = ["Hatchback", "MPV", "MUV", "SUV",
                            "Sedan", "Crossover", "Coupe", "Convertible",
                            "Sports + Hatchback", "Sedan + Coupe", "Sports",
                            "SUV + Crossover", "Sedan + Crossover", "Sports + Convertible",
                            "pick-up", "Coupe + Convertible"
                        ];
                        var yValues = [315, 39, 39, 448, 336, 18, 43, 20, 1, 2, 3, 4, 1, 2, 3, 1];
                        var barColors = ["yellow", "cyan", "green", "red", "brown", "pink", "orange", "grey", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"];
                        Chart.defaults.global.defaultFontColor = "#fff";

                        new Chart("bodytype_count", {
                            type: "bar",
                            data: {
                                labels: xValues,
                                datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                }]
                            },
                            options: {
                                scales: {
                                    xAxes: [{
                                        gridLines: {
                                            display: false
                                        }
                                    }],
                                    yAxes: [{
                                        gridLines: {
                                            display: false
                                        }
                                    }]
                                },
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: "No. of Cars per body type"
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="row row-cols-auto">
            <div class="col">
                <div>
                    <canvas id="torque_pricewise" style="height:600px;width:100%;max-width:600px"></canvas>
                    <script>
                        var xValues = ["1 Lakh - 5 Lakhs",
                            "5 Lakhs - 10 Lakhs",
                            "10 Lakhs - 15 Lakhs",
                            "15 Lakhs - 20 Lakhs",
                            "20 Lakhs - 25 Lakhs",
                            "25 Lakhs - 30 Lakhs",
                            "30 Lakhs - 50 Lakhs",
                            "50 Lakhs - Crore",
                            "1 Crore"
                        ];
                        var yValues = [83.23, 156.73, 228.45, 296.21, 305.84, 322.74, 342.31, 439.77, 651.67];
                        var barColors = ["red", "blue", "green", "yellow", "brown", "pink", "orange", "grey", "cyan"];
                        Chart.defaults.global.defaultFontColor = "#fff";

                        new Chart("torque_pricewise", {
                            type: "bar",
                            data: {
                                labels: xValues,
                                datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                }]
                            },
                            options: {
                                scales: {
                                    xAxes: [{
                                        gridLines: {
                                            display: false
                                        }
                                    }],
                                    yAxes: [{
                                        gridLines: {
                                            display: false
                                        }
                                    }]
                                },
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: "Average Torque Pricewise"
                                }
                            }
                        });
                    </script>
                </div>
            </div>
            <div class="col">
                <div>
                    <canvas id="power_pricewise" style="height:600px;width:100%;max-width:600px"></canvas>
                    <script>
                        var xValues = ["1 Lakh - 5 Lakhs",
                            "5 Lakhs - 10 Lakhs",
                            "10 Lakhs - 15 Lakhs",
                            "15 Lakhs - 20 Lakhs",
                            "20 Lakhs - 25 Lakhs",
                            "25 Lakhs - 30 Lakhs",
                            "30 Lakhs - 50 Lakhs",
                            "50 Lakhs - Crore",
                            "1 Crore"
                        ];
                        var yValues = [60.77, 87.18, 113.27, 149.73, 159.98, 166.92, 174.76, 255.62, 476.59];
                        var barColors = ["red", "blue", "green", "yellow", "brown", "pink", "orange", "grey", "cyan"];
                        Chart.defaults.global.defaultFontColor = "#fff";


                        new Chart("power_pricewise", {
                            type: "pie",
                            data: {
                                labels: xValues,
                                datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                }]
                            },
                            options: {
                                scales: {
                                    xAxes: [{
                                        gridLines: {
                                            display: false,
                                            drawBorder: false,
                                        }
                                    }],
                                    yAxes: [{
                                        gridLines: {
                                            drawBorder: false,
                                            display: false
                                        }
                                    }]
                                },
                                legend: {
                                    display: true
                                },
                                title: {
                                    display: true,
                                    text: "Average Power Pricewise"
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="row row-cols-auto">
            <div class="col">
                <div>
                    <canvas id="mileage_petrol" style="height:600px;width:100%;max-width:600px"></canvas>
                    <script>
                        var xValues = ["1 Lakh - 5 Lakhs",
                            "5 Lakhs - 10 Lakhs",
                            "10 Lakhs - 15 Lakhs",
                            "15 Lakhs - 20 Lakhs",
                            "20 Lakhs - 25 Lakhs",
                            "25 Lakhs - 30 Lakhs",
                            "30 Lakhs - 50 Lakhs",
                            "50 Lakhs - Crore",
                            "1 Crore"
                        ];
                        var yValues = [21.8, 19.2, 16.17, 15.8, 16.12, 14.26, 16.36, 14.15, 11.41];
                        var barColors = ["blue", "red", "green", "pink", "yellow", "brown", "cyan", "orange", "purple"];
                        Chart.defaults.global.defaultFontColor = "#fff";

                        new Chart("mileage_petrol", {
                            type: "bar",
                            data: {
                                labels: xValues,
                                datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                }]
                            },
                            options: {
                                scales: {
                                    xAxes: [{
                                        gridLines: {
                                            display: false
                                        }
                                    }],
                                    yAxes: [{
                                        gridLines: {
                                            display: false
                                        }
                                    }]
                                },
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: "Average mileage of petrol/diesel per price range"
                                }
                            }
                        });
                    </script>
                </div>
            </div>
            <div class="col"><canvas id="count_per_price" style="height:600px;width:100%;max-width:600px"></canvas>
                <script>
                    var xValues = ["1 Lakh - 5 Lakhs",
                        "5 Lakhs - 10 Lakhs",
                        "10 Lakhs - 15 Lakhs",
                        "15 Lakhs - 20 Lakhs",
                        "20 Lakhs - 25 Lakhs",
                        "25 Lakhs - 30 Lakhs",
                        "30 Lakhs - 50 Lakhs",
                        "50 Lakhs - Crore",
                        "1 Crore"
                    ];
                    var yValues = [85, 523, 196, 84, 37, 35, 79, 107, 129];
                    var barColors = ["blue", "red", "green", "pink", "yellow", "brown", "cyan", "orange", "purple"];
                    Chart.defaults.global.defaultFontColor = "#fff";

                    new Chart("count_per_price", {
                        type: "bar",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                        options: {
                            scales: {
                                xAxes: [{
                                    gridLines: {
                                        display: false
                                    }
                                }],
                                yAxes: [{
                                    gridLines: {
                                        display: false
                                    }
                                }]
                            },
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "No. of Cars Per Price Range"
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>

</div>



<?php
require_once 'includes/footer.php';
?>