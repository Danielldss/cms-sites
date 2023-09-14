var EcommerceIndex = function () {

    function showTooltip(x, y, labelX, labelY) {
        $('<div id="tooltip" class="chart-tooltip">' + (labelY.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')) + '<\/div>').css({
            position: 'absolute',
            display: 'none',
            top: y - 40,
            left: x - 60,
            border: '0px solid #ccc',
            padding: '2px 6px',
            'background-color': '#fff'
        }).appendTo("body").fadeIn(200);
    }

    var initChart1 = function (ano, url) {

    	$.getJSON( url+"ecommerce/qtdPedidos/", function( txt ) {

    		var data = [
	           ['01/'+ano, txt.mes_01], 
	           ['02/'+ano, txt.mes_02], 
	           ['03/'+ano, txt.mes_03], 
	           ['04/'+ano, txt.mes_04], 
	           ['05/'+ano, txt.mes_05], 
	           ['06/'+ano, txt.mes_06], 
	           ['07/'+ano, txt.mes_07], 
	           ['08/'+ano, txt.mes_08], 
	           ['09/'+ano, txt.mes_09], 
	           ['10/'+ano, txt.mes_10], 
	           ['11/'+ano, txt.mes_11], 
	           ['12/'+ano, txt.mes_12]
	       ];

    		var plot_statistics = $.plot(
                    $("#statistics_1"), 
                    [
                        {
                            data:data,
                            lines: {
                                fill: 0.6,
                                lineWidth: 0
                            },
                            color: ['#f89f9f']
                        },
                        {
                            data: data,
                            points: {
                                show: true,
                                fill: true,
                                radius: 5,
                                fillColor: "#f89f9f",
                                lineWidth: 3
                            },
                            color: '#fff',
                            shadowSize: 0
                        }
                    ], 
                    {

                        xaxis: {
                            tickLength: 0,
                            tickDecimals: 0,                        
                            mode: "categories",
                            min: 2,
                            font: {
                                lineHeight: 15,
                                style: "normal",
                                variant: "small-caps",
                                color: "#6F7B8A"
                            }
                        },
                        yaxis: {
                            ticks: 3,
                            tickDecimals: 0,
                            tickColor: "#f0f0f0",
                            font: {
                                lineHeight: 15,
                                style: "normal",
                                variant: "small-caps",
                                color: "#6F7B8A"
                            }
                        },
                        grid: {
                            backgroundColor: {
                                colors: ["#fff", "#fff"]
                            },
                            borderWidth: 1,
                            borderColor: "#f0f0f0",
                            margin: 0,
                            minBorderMargin: 0,
                            labelMargin: 20,
                            hoverable: true,
                            clickable: true,
                            mouseActiveRadius: 6
                        },
                        legend: {
                            show: false
                        }
                    }
                );

    		 var previousPoint = null;

             $("#statistics_1").bind("plothover", function (event, pos, item) {
                 $("#x").text(pos.x.toFixed(2));
                 $("#y").text(pos.y.toFixed(2));
                 if (item) {
                     if (previousPoint != item.dataIndex) {
                         previousPoint = item.dataIndex;

                         $("#tooltip").remove();
                         var x = item.datapoint[0].toFixed(2),
                             y = item.datapoint[1].toFixed(2);

                         showTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1]);
                     }
                 } else {
                     $("#tooltip").remove();
                     previousPoint = null;
                 }
             });
	    });
    	
    }

    var initChart2 = function(ano, url) {

    	$.getJSON( url+"ecommerce/valPedidos/", function( txt ) {
    		
    		var data = [
	           ['01/'+ano, txt.mes_01 / 100], 
	           ['02/'+ano, txt.mes_02 / 100], 
	           ['03/'+ano, txt.mes_03 / 100], 
	           ['04/'+ano, txt.mes_04 / 100], 
	           ['05/'+ano, txt.mes_05 / 100], 
	           ['06/'+ano, txt.mes_06 / 100], 
	           ['07/'+ano, txt.mes_07 / 100], 
	           ['08/'+ano, txt.mes_08 / 100], 
	           ['09/'+ano, txt.mes_09 / 100], 
	           ['10/'+ano, txt.mes_10 / 100], 
	           ['11/'+ano, txt.mes_11 / 100], 
	           ['12/'+ano, txt.mes_12 / 100]
	       ];

            var plot_statistics = $.plot(
                $("#statistics_2"), 
                [
                    {
                        data:data,
                        lines: {
                            fill: 0.6,
                            lineWidth: 0
                        },
                        color: ['#BAD9F5']
                    },
                    {
                        data: data,
                        points: {
                            show: true,
                            fill: true,
                            radius: 5,
                            fillColor: "#BAD9F5",
                            lineWidth: 3
                        },
                        color: '#fff',
                        shadowSize: 0
                    }
                ], 
                {

                    xaxis: {
                        tickLength: 0,
                        tickDecimals: 0,                        
                        mode: "categories",
                        min: 2,
                        font: {
                            lineHeight: 14,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    yaxis: {
                        ticks: 3,
                        tickDecimals: 0,
                        tickColor: "#f0f0f0",
                        font: {
                            lineHeight: 14,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    grid: {
                        backgroundColor: {
                            colors: ["#fff", "#fff"]
                        },
                        borderWidth: 1,
                        borderColor: "#f0f0f0",
                        margin: 0,
                        minBorderMargin: 0,
                        labelMargin: 20,
                        hoverable: true,
                        clickable: true,
                        mouseActiveRadius: 6
                    },
                    legend: {
                        show: false
                    }
                }
            );

            var previousPoint = null;

            $("#statistics_2").bind("plothover", function (event, pos, item) {
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                       showTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1]);
                    }
                } else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });
    	});
    }

    return {

        //main function
        init: function (ano, url) {
            initChart1(ano, url);

            $('#statistics_amounts_tab').on('shown.bs.tab', function (e) {
                initChart2(ano, url);
            });
        }

    };

}();