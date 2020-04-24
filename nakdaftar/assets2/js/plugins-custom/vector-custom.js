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
            $.VectorMap = new VectorMap, $.VectorMap.Constructor = VectorMap;
}(window.jQuery),
//initializing
        function ($) {
            "use strict";
            $.VectorMap.init();
        }(window.jQuery);