
// generate datatable
function generateDatatable(id, tableColumns, url, sortBy, sortOrder) {
    var columns = eval(tableColumns);

    $('#'+id).DataTable({
        dom: 'rt<"row"<"col-md-4 col-sm-4"l><"col-md-4 col-sm-4 text-center"i><"col-md-4 col-sm-4"p>>',
        language: {
            search: "",
            searchPlaceholder: "Search",
        },
        lengthMenu: [
            [10, 20, 50, 100, 150, 200, -1],
            [10, 20, 50, 100, 150, 200, "All"]
        ],
        pagingType: "full_numbers",
        order: [
            [0, "desc"]
        ],
        processing: true,
        serverSide: true,
        fnRowCallback : function(nRow, aData, iDisplayIndex){
            $("td:first", nRow).html(iDisplayIndex +1);
            return nRow;
        },
        ajax: {
            url: url,
        },
        columns: columns,
        //destroy datatable when change tab
        /*stateSave: true,
        "bDestroy": true*/
    });
}

function generateCurrentMonthOrganizationPostsLineChart(organizations, postCounts){
    Highcharts.chart('current-month-post-count', {
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Current Month Organization Posts'
        },
        /*subtitle: {
            text: 'Source: WorldClimate.com'
        },*/
        xAxis: {
            categories: organizations
        },
        yAxis: {
            title: {
                text: 'Post'
            },
            labels: {
                formatter: function () {
                    return this.value;
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: [{
            name: 'Organization',
            marker: {
                symbol: 'square'
            },
            data: postCounts

        }]
    });
}

function generateMonthlyPostCountBarChart(monthNames, monthlyPostCounts){
    Highcharts.chart('monthly-post-count', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Post Count'
        },
        subtitle: {
            text: 'Shows monthly post count for all organization'
        },
        xAxis: {
            categories: monthNames,
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Post'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Months',
            data: monthlyPostCounts

        }]
    });
}

function generateTotalPostForEveryOrganizationLineChart(organizations, postCounts){
    Highcharts.chart('organization-wise-post-count', {
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Total Post for Every Organization'
        },
        /* subtitle: {
             text: 'Source: WorldClimate.com'
         },*/
        xAxis: {
            categories: organizations
        },
        yAxis: {
            title: {
                text: 'Post'
            },
            labels: {
                formatter: function () {
                    return this.value;
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: [ {
            name: 'Organization',
            marker: {
                symbol: 'diamond'
            },
            data: postCounts
        }]
    });
}

function generatePostStatusOfAllOrganizationPieChart(activePost, inactivePost){
    Highcharts.setOptions({
        colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
            return {
                radialGradient: {
                    cx: 0.5,
                    cy: 0.3,
                    r: 0.7
                },
                stops: [
                    [0, color],
                    [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
                ]
            };
        })
    });

    Highcharts.chart('post-status', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Posts status of all organizations'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Share',
            data: [
                { name: 'Active', y: activePost },
                { name: 'Inactive', y: inactivePost },
            ]
        }]
    });
}

// Moderator dashboard

function generateOrganizationWisePostActiveAndInactiveLineChart(organizations, activePost, inactivePost){
    Highcharts.chart('organization-wise-post', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Organization wise post info'
        },
        subtitle: {
            text: 'Show active and pending post'
        },
        xAxis: {
            categories: organizations
        },
        yAxis: {
            title: {
                text: 'Post'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Active',
            data: activePost
        }, {
            name: 'Inactive',
            data: inactivePost
        }]
    });
}

function generateCommentStatusOfAllOrganizationPieChart(){

    Highcharts.chart('container-pie-comment', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Post comments status of all organizations'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Comment',
            data: [
                { name: 'Approved', y: 35 },
                { name: 'Inactive', y: 65 },
                //{ name: 'Pending', y: 10.85 },
                //{ name: 'Edge', y: 4.67 },
                //{ name: 'Safari', y: 4.18 },
                //{ name: 'Other', y: 7.05 }
            ]
        }]
    });
}


// organization dashboard

function generateMonthWisePostActiveAndInactiveLineChart(monthNames, activePost, inactivePost){
    Highcharts.chart('container-post', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Month wise active and pending post'
        },
        subtitle: {
            text: 'Post info for last 1 year'
        },
        xAxis: {
            categories: monthNames
        },
        yAxis: {
            title: {
                text: 'Post'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Active',
            data: activePost
        }, {
            name: 'Inactive',
            data: inactivePost
        }]
    });
}

function showProjectsInMap(projects){
    var KTLeaflet = function () {

        // Private functions
        var demo3 = function () {
            // define leaflet
            var leaflet = L.map('kt_leaflet_3', {
                center: [24.1940001360792, 90.38606076278585],
                zoom: 7
            })

            // set leaflet tile layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(leaflet);


            // set custom SVG icon marker
            var leafletIcon1 = L.divIcon({
                html: `<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>`,
                bgPos: [10, 10],
                iconAnchor: [20, 37],
                popupAnchor: [0, -37],
                className: 'leaflet-marker'
            });

            var leafletIcon2 = L.divIcon({
                html: `<span class="svg-icon svg-icon-primary svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>`,
                bgPos: [10, 10],
                iconAnchor: [20, 37],
                popupAnchor: [0, -37],
                className: 'leaflet-marker'
            });

            var leafletIcon3 = L.divIcon({
                html: `<span class="svg-icon svg-icon-warning svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>`,
                bgPos: [10, 10],
                iconAnchor: [20, 37],
                popupAnchor: [0, -37],
                className: 'leaflet-marker'
            });

            var leafletIcon4 = L.divIcon({
                html: `<span class="svg-icon svg-icon-success svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>`,
                bgPos: [10, 10],
                iconAnchor: [20, 37],
                popupAnchor: [0, -37],
                className: 'leaflet-marker'
            });

            // bind markers with popup

            for (var i = 0; i < projects.length; i++) {
                var lat = '';
                var lng = '';
                var upazila;
                var upazilas = projects[i].upazilas
                for (var j = 0; j < upazilas.length; j++){
                    upazila = upazilas[j];
                    console.log('upazila-'+upazila)
                     lat = upazila.lat;
                     lng = upazila.lng;
                     L.marker([lat, lng], { icon: leafletIcon1 }).addTo(leaflet);
                     L.marker([lat, lng], { icon: leafletIcon1 }).addTo(leaflet).bindPopup('<b>Project: </b> '+projects[i].en_name + '.<br/> <b> District:</b> ' + upazila.district.name + '' +'. <br/> <b> Upazila:</b> ' + upazila.name, { closeButton: false });
                }
            }
            L.control.scale().addTo(leaflet);
        }

        return {
            // public functions
            init: function () {
                // default charts
                demo3();
            }
        };
    }();

    jQuery(document).ready(function () {
        KTLeaflet.init();
    });
}
