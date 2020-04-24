$(function () {
    "use strict";



    /**peity**/
    $(".dsb-bar").peity("bar", {
        fill: ["#0084ff", "#d9fff8"],
        height: 130,
        width: 150
    });
    /**chartist**/
    var data = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        series: [
            [125, 214, 545, 243, 176, 347, 154, 432, 344, 224, 534, 694],
            [43, 76, 154, 96, 67, 123, 56, 176, 75, 75, 138, 296]
        ],
        plugins: [
            Chartist.plugins.tooltip()
        ]
    };

    var options = {
        seriesBarDistance: 12,
        height: "250px",
        fullWidth: true
    };

    var responsiveOptions = [
        ['screen and (min-width: 641px) and (max-width: 1024px)', {
                seriesBarDistance: 10,
                axisX: {
                    labelInterpolationFnc: function (value) {
                        return value;
                    }
                }
            }],
        ['screen and (max-width: 640px)', {
                seriesBarDistance: 2,
                axisX: {
                    labelInterpolationFnc: function (value) {
                        return value[0];
                    }
                }
            }]
    ];

    new Chartist.Bar('.ct-chart', data, options, responsiveOptions);

});
/* VectorMap*/

!function ($) {
    "use strict";

    var VectorMap = function () {
    };

    VectorMap.prototype.init = function () {
        //various examples
        $('#world-map-markers').vectorMap({
            map: 'world_mill_en',
            normalizeFunction: 'polynomial',
            hoverOpacity: 0.7,
            hoverColor: false,
            regionStyle: {
                initial: {
                    fill: '#0084ff',
                    'font-family': 'Verdana',
                    'font-size': '12',
                    'font-weight': 'bold',
                    cursor: 'default'
                }
            },
            markerStyle: {
                initial: {
                    r: 9,
                    'fill': '#fa625e',
                    'fill-opacity': 1,
                    'stroke': '#e7f3fe',
                    'stroke-width': 5,
                    'stroke-opacity': 0.96,
                    'font-family': 'Segoe',
                    'font-size': '12',
                    'font-weight': 'normal',
                    cursor: 'default'
                },
                hover: {
                    'stroke': '#fa625e',
                    'fill-opacity': 1,
                    'stroke-width': 5
                }
            },
            markerLabelStyle: {
                initial: {
                    'font-family': 'Segoe UI',
                    'font-size': '12',
                    'font-weight': 'bold',
                    cursor: 'default',
                    fill: '#0084ff'
                },
                hover: {
                    cursor: 'pointer'
                }
            },
            hover: {
                cursor: 'pointer'
            },
            backgroundColor: 'transparent',
            markers: [{
                    latLng: [41.90, 12.45],
                    name: 'Vatican City'
                }, {
                    latLng: [0.33, 6.73],
                    name: 'SÃƒÂ£o TomÃƒÂ© and PrÃƒÂ­ncipe'
                }, {
                    latLng: [1.3, 103.8],
                    name: 'Singapore'
                }]
        });
    },
            //init
            $.VectorMap = new VectorMap, $.VectorMap.Constructor =
            VectorMap
}(window.jQuery),
//initializing
        function ($) {
            "use strict";
            $.VectorMap.init();
        }(window.jQuery);