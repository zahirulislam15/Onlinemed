(function ($) {
    "use strict";
    var primarycolor = getComputedStyle(document.body).getPropertyValue('--primarycolor');


    var day_data = [
        {"period": "2019-09-15", "licensed": 3000},
        {"period": "2019-09-14", "licensed": 2357},
        {"period": "2019-09-13", "licensed": 2748},
        {"period": "2019-09-12", "licensed": 2471},
        {"period": "2019-09-11", "licensed": 2371},
        {"period": "2019-09-10", "licensed": 2201},
        {"period": "2019-09-09", "licensed": 1215}
    ];
    var week_statistics = document.getElementById("week_statistics");
    if (week_statistics) {
        var weekstats = Morris.Line({
            element: 'week_statistics',
            data: day_data,
            xkey: 'period',
            preUnits: '$',
            resize: true,
            lineColors: [primarycolor, '#7A92A3', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed'],
            ykeys: ['licensed'],
            labels: ['Sale']
        });
    }


    day_data = [
        {"period": "2019 W48", "licensed": 15407, "sorned": 660},
        {"period": "2019 W47", "licensed": 11407, "sorned": 660},
        {"period": "2019 W46", "licensed": 15407, "sorned": 660},
        {"period": "2019 W45", "licensed": 18407, "sorned": 660},
        {"period": "2019 W44", "licensed": 15407, "sorned": 660},
        {"period": "2019 W43", "licensed": 12407, "sorned": 660},
        {"period": "2019 W42", "licensed": 11407, "sorned": 660},
        {"period": "2019 W41", "licensed": 10407, "sorned": 660},
        {"period": "2019 W40", "licensed": 9407, "sorned": 660},
        {"period": "2019 W39", "licensed": 10407, "sorned": 660},
        {"period": "2019 W38", "licensed": 12407, "sorned": 660},
        {"period": "2019 W37", "licensed": 11407, "sorned": 660},
        {"period": "2019 W36", "licensed": 9407, "sorned": 660},
        {"period": "2019 W35", "licensed": 7407, "sorned": 660},
        {"period": "2019 W34", "licensed": 8407, "sorned": 660},
        {"period": "2019 W33", "licensed": 9407, "sorned": 660},
        {"period": "2019 W32", "licensed": 8407, "sorned": 660},
        {"period": "2019 W31", "licensed": 7407, "sorned": 660},
        {"period": "2019 W30", "licensed": 6407, "sorned": 660},
        {"period": "2019 W29", "licensed": 5407, "sorned": 660},
        {"period": "2019 W28", "licensed": 4407, "sorned": 660},
        {"period": "2019 W27", "licensed": 3407, "sorned": 660},
        {"period": "2019 W26", "licensed": 3351, "sorned": 629},
        {"period": "2019 W25", "licensed": 3269, "sorned": 618},
        {"period": "2019 W24", "licensed": 3246, "sorned": 661},
        {"period": "2019 W23", "licensed": 3257, "sorned": 667},
        {"period": "2019 W22", "licensed": 3248, "sorned": 627},
        {"period": "2019 W21", "licensed": 3171, "sorned": 660},
        {"period": "2019 W20", "licensed": 3171, "sorned": 676},
        {"period": "2019 W19", "licensed": 3201, "sorned": 656},
        {"period": "2019 W18", "licensed": 3215, "sorned": 622},
        {"period": "2019 W17", "licensed": 3148, "sorned": 632},
        {"period": "2019 W16", "licensed": 3155, "sorned": 681},
        {"period": "2019 W15", "licensed": 3190, "sorned": 667},
        {"period": "2019 W14", "licensed": 3226, "sorned": 620},
        {"period": "2019 W13", "licensed": 3245, "sorned": null},
        {"period": "2019 W12", "licensed": 3289, "sorned": null},
        {"period": "2019 W11", "licensed": 3263, "sorned": null},
        {"period": "2019 W10", "licensed": 3189, "sorned": null},
        {"period": "2019 W09", "licensed": 3079, "sorned": null},
        {"period": "2019 W08", "licensed": 3085, "sorned": null},
        {"period": "2019 W07", "licensed": 3055, "sorned": null},
        {"period": "2019 W06", "licensed": 3063, "sorned": null},
        {"period": "2019 W05", "licensed": 2943, "sorned": null},
        {"period": "2019 W04", "licensed": 2806, "sorned": null},
        {"period": "2019 W03", "licensed": 2674, "sorned": null},
        {"period": "2019 W02", "licensed": 1702, "sorned": null},
        {"period": "2019 W01", "licensed": 1732, "sorned": null}
    ];
    var month_statistics = document.getElementById("month_statistics");
    if (month_statistics) {
        var monthstats = Morris.Line({
            element: 'month_statistics',
            data: day_data,
            xkey: 'period',
            resize: true,
            padding: 15,
            preUnits: '$',
            lineColors: [primarycolor, '#7A92A3', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed'],
            ykeys: ['licensed'],
            labels: ['Sale']
        });
    }
    day_data = [
        {"period": "2019", "licensed": 14246},
        {"period": "2018", "licensed": 11257},
        {"period": "2017", "licensed": 12248},
        {"period": "2016", "licensed": 9171},
        {"period": "2015", "licensed": 7171},
        {"period": "2014", "licensed": 5201},
        {"period": "2013", "licensed": 3215}
    ];
    var year_statistics = document.getElementById("year_statistics");
    if (year_statistics) {
        var yearstats = Morris.Line({
            element: 'year_statistics',
            data: day_data,
            xkey: 'period',
            resize: true,
            padding: 15,
            preUnits: '$',
            lineColors: [primarycolor, '#7A92A3', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed'],
            ykeys: ['licensed'],
            labels: ['Sale']
        });
    }
    $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("href") // activated tab

        switch (target) {
            case "#pills-week":
                if (week_statistics) {
                    weekstats.redraw();
                }
                $(window).trigger('resize');
                break;
            case "#pills-month":
                if (month_statistics) {
                    monthstats.redraw();
                }
                $(window).trigger('resize');
                break;
            case "#pills-year":
                if (year_statistics) {
                    yearstats.redraw();
                }
                $(window).trigger('resize');
                break;
        }
    });


    /*================================== Weather Chart =====================*/
    var t = document.getElementById("js-chart-weather");
    if (t)
        new Chart(t, {
            type: "line",
            data: {
                labels: ["January 1", "January 5", "January 10", "January 15", "January 20", "January 25"],
                datasets: [{
                        label: "Sold",
                        fill: !0,
                        lineTension: 0,
                        backgroundColor: "#d8d4f1",
                        borderWidth: 2,
                        borderColor: primarycolor,
                        borderCapStyle: "butt",
                        borderDash: [],
                        borderDashOffset: 0,
                        borderJoinStyle: "miter",
                        pointRadius: 0,
                        pointBorderColor: "#fff",
                        pointBackgroundColor: "#2a2f37",
                        pointBorderWidth: 2,
                        pointHoverRadius: 6,
                        pointHoverBackgroundColor: "#FC2055",
                        pointHoverBorderColor: "#fff",
                        pointHoverBorderWidth: 2,
                        data: [40, 32, 42, 28, 53, 34],
                        spanGaps: !1
                    }]
            },
            options: {
                legend: {
                    display: !1
                },
                scales: {
                    xAxes: [{
                            display: !1,
                            ticks: {
                                fontSize: "11",
                                fontColor: "#969da5"
                            },
                            gridLines: {
                                color: "rgba(0,0,0,0.0)",
                                zeroLineColor: "rgba(0,0,0,0.0)"
                            }
                        }],
                    yAxes: [{
                            display: !1,
                            ticks: {
                                beginAtZero: !0,
                                max: 55
                            }
                        }]
                }
            }
        });

    /************************* Rating *****************************/

    if ($('.starrr').length > 0) {
        $('.starrr').starrr({
            rating: 4,
            readOnly: true
        })
    }


    /************************************* Social Chart ************************/
    var social_chart = document.getElementById("social-chart");
    if (social_chart) {
        $.plot("#social-chart", [{
                data: [[1, 60], [2, 90], [3, 35], [4, 70], [5, 40]], canvasRender: !0, showLabels: !0, label: "Google ads", labelPlacement: "below"
            }
            , {
                data: [[1, 0], [2, 30], [3, 80], [4, 30], [5, 65]], canvasRender: !0, showLabels: !0, label: "Facebook", labelPlacement: "below"
            },
            {
                data: [[1, 0], [2, 40], [3, 30], [4, 20], [5, 65]], canvasRender: !0, showLabels: !0, label: "Twitter", labelPlacement: "below"
            }
        ], {
            series: {
                lines: {
                    show: !0, lineWidth: 0, fill: !0, fillColor: {
                        colors: [{
                                opacity: 1
                            }
                            , {
                                opacity: 1
                            }
                        ]
                    }
                }
                , fillColor: "rgba(0, 0, 0, 1)", shadowSize: 0, curvedLines: {
                    apply: !0, active: !0, monotonicFit: !0
                }
            }

            , grid: {
                show: !1, hoverable: !0, clickable: !0
            }
            , tooltip: {
                show: !0, cssClass: "tooltip-chart", content: "<div class='content-chart'> <span> %s </span> <div class='label'> <div class='label-x'> %x.0 </div> - <div class='label-y'> %y.0 </div> </div></div>", defaultTheme: !1
            }
            , colors: ['#dd4b39', '#3b5999', '#55acee'], xaxis: {
                autoscaleMargin: 0, ticks: 11, tickDecimals: 0
            }
            , yaxis: {
                autoscaleMargin: .5, ticks: 5, tickDecimals: 0
            }
        }
        );
    }


    /********************************** Tours *************************/
    // Instance the tour
    var tour = new Tour({
        steps: [
            {
                placement: "bottom",
                element: "#tourfirst",
                title: "Title of my step",
                content: "Content of my step"
            },
            {
                placement: "bottom",
                element: "#options",
                title: "Title of my step",
                content: "Content of my step"
            },
            {
                placement: "left",
                element: "#settingbutton",
                title: "Title of my step",
                content: "Content of my step"
            }
        ],
        template: "<div class='popover tour bg-primary border-0'>" +
                "<div class='arrow'></div>" +
                "<h3 class='popover-title text-white bg-primary border-0'></h3>" +
                " <div class='popover-content text-white'></div>" +
                " <div class='popover-navigation d-flex'>" +
                "   <button class='btn btn-primary' data-role='prev'>&laquo; Prev</button>" +
                "<button class='btn btn-primary mx-1' data-role='end'>End tour</button>" +
                "  <button class='btn btn-primary' data-role='next'>Next &raquo;</button>" +
                "</div>" +
                " </div>"});

// Initialize the tour
    tour.init();

// Start the tour
    tour.start();

})(jQuery);
