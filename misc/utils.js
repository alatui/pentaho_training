
(function($4IT) {

    $4IT.loadDrill = function(access_id,cb,params) {
        var data = {
            "path": Dashboards.context.path.replace('.wcdf','.cda'),
            "dataAccessId":access_id,
            "outputIndexId":"1",
            "pageSize":"0",
            "pageStart":"0",
            "sortBy":"",
        };
        jQuery.extend(data, params);

        $.ajax({
            method: "POST",
            url:'/pentaho/plugin/cda/api/doQuery?',
            data: data
        })
        .always(function(data) {
            if(data.hasOwnProperty('resultset')) {
                cb(data.resultset);
            } else {
                cb([]);
            }
        });
    }//loadDrill

    $4IT.formatYName = function(data,options) {
        var objects = [];
        for (i = 0; i < data.length; i++) {
            var obj = {
                name: data[i][0],
                y:data[i][1]
            };
            jQuery.extend(obj, options);
            objects.push(obj);
        }
        return objects;
    }//formatYName

})(window.$4IT={});