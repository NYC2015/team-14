// Morris.js Charts sample data for SB Admin template

$(function() {

    // Area Chart
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            d: '2015-10-01',
            fruits: 21,
            diary: null,
            grains: 15
        }, {
            d: '2015-10-02',
            fruits: 31,
            diary: 5,
            grains: 8
        },  {
            d: '2015-10-03',
            fruits: 54,
            diary: 30,
            grains: 44
        },  {
            d: '2015-10-04',
            fruits: 32,
            diary: 13,
            grains: 91
        },  {
            d: '2015-10-05',
            fruits: 43,
            diary: 5,
            grains: 11
        },  {
            d: '2015-10-06',
            fruits: 84,
            diary: 57,
            grains: 79
        },  {
            d: '2015-10-07',
            fruits: 54,
            diary: 34,
            grains: 73
        },  {
            d: '2015-10-08',
            fruits: 23,
            diary: 14,
            grains: 23
        },  {
            d: '2015-10-09',
            fruits: 76,
            diary: 55,
            grains: 34
        },  {
            d: '2015-10-10',
            fruits: 48,
            diary: 32,
            grains: 35
        },  {
            d: '2015-10-11',
            fruits: 15,
            diary: 14,
            grains: 13
        },  {
            d: '2015-10-12',
            fruits: 12,
            diary: 5,
            grains: 7
        },  {
            d: '2015-10-13',
            fruits: 35,
            diary: 42,
            grains: 32
        },  {
            d: '2015-10-14',
            fruits: 82,
            diary: 51,
            grains: 61
        },  {
            d: '2015-10-15',
            fruits: 76,
            diary: 43,
            grains: 23
        },  {
            d: '2015-10-16',
            fruits: 89,
            diary: 53,
            grains: 21
        }],
        xkey: 'd',
        ykeys: ['fruits', 'diary', 'grains'],
        labels: ['Fruits', 'Diary', 'Grains'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [{
            d: '2012-10-01',
            visits: 802
        }, {
            d: '2012-10-02',
            visits: 783
        }, {
            d: '2012-10-03',
            visits: 820
        }, {
            d: '2012-10-04',
            visits: 839
        }, {
            d: '2012-10-05',
            visits: 792
        }, {
            d: '2012-10-06',
            visits: 859
        }, {
            d: '2012-10-07',
            visits: 790
        }, {
            d: '2012-10-08',
            visits: 1680
        }, {
            d: '2012-10-09',
            visits: 1592
        }, {
            d: '2012-10-10',
            visits: 1420
        }, {
            d: '2012-10-11',
            visits: 882
        }, {
            d: '2012-10-12',
            visits: 889
        }, {
            d: '2012-10-13',
            visits: 819
        }, {
            d: '2012-10-14',
            visits: 849
        }, {
            d: '2012-10-15',
            visits: 870
        }, {
            d: '2012-10-16',
            visits: 1063
        }, {
            d: '2012-10-17',
            visits: 1192
        }, {
            d: '2012-10-18',
            visits: 1224
        }, {
            d: '2012-10-19',
            visits: 1329
        }, {
            d: '2012-10-20',
            visits: 1329
        }, {
            d: '2012-10-21',
            visits: 1239
        }, {
            d: '2012-10-22',
            visits: 1190
        }, {
            d: '2012-10-23',
            visits: 1312
        }, {
            d: '2012-10-24',
            visits: 1293
        }, {
            d: '2012-10-25',
            visits: 1283
        }, {
            d: '2012-10-26',
            visits: 1248
        }, {
            d: '2012-10-27',
            visits: 1323
        }, {
            d: '2012-10-28',
            visits: 1390
        }, {
            d: '2012-10-29',
            visits: 1420
        }, {
            d: '2012-10-30',
            visits: 1529
        }, {
            d: '2012-10-31',
            visits: 1892
        }, ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'd',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['visits'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Visits'],
        // Disables line smoothing
        smooth: false,
        resize: true
    });

    // Bar Chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            device: 'iPhone',
            geekbench: 136
        }, {
            device: 'iPhone 3G',
            geekbench: 137
        }, {
            device: 'iPhone 3GS',
            geekbench: 275
        }, {
            device: 'iPhone 4',
            geekbench: 380
        }, {
            device: 'iPhone 4S',
            geekbench: 655
        }, {
            device: 'iPhone 5',
            geekbench: 1571
        }],
        xkey: 'device',
        ykeys: ['geekbench'],
        labels: ['Geekbench'],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        resize: true
    });


});
