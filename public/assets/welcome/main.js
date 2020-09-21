const groupBy = (array, key) => {
    // Return the end result
    return array.reduce((result, currentValue) => {
        // If an array already present for key, push it to the array. Else create an array and push the object
        (result[currentValue[key]] = result[currentValue[key]] || []).push(currentValue);
        // Return the current iteration `result` value, this will be taken as next iteration `result` value and accumulate
        return result;
    }, {}); // empty object is the initial value for result object
};

function getGamelist(getData) {
    $.get('/api/casino/getlist', {}, function(result){
        getData(result);
    });
}

getGamelist(function(result){
    var content = '';
    for(index in result){
        if(result[index].Desktop != 1) {
            continue;
        }
        content += `<div class="gamelogo col-lg-2 col-md-4 col-sm-6 col-xs-6" brand="` + result[index].Brand + `" description="` + result[index].Description + `">
            <div class="gallery-single-img">
                <a href="javascript:void(0);"><img src="` + result[index].Button_Image_Path + `" class="img-fluid" alt="Gallery Image"></a>
                <a href="javascript:void(0);">` + result[index].Description + `</a>
                <div class="hover-efect">
                    <a href="javascript:void(0);" onclick="executeGame('` + result[index].Name + `', '` + result[index].Brand + `', '` + result[index].Mobile + `')">Run</a>
                </div>
            </div>
        </div>`
    }
    $('#GameContainer').empty();
    $('#GameContainer').append(content);
    gresult = groupBy(result, "Brand");
    content = '';
    for(company in gresult){
        content += `<div class="col-2 p-1" onclick = "showCompanyFilter('` + company + `')">
            <div class="p-1" style='background-color: #00004d'>
                <a href="javascript:void(0);"><img src="assets/welcome/logo/` + company + `_white.svg" width="110px" alt=""></a>
            </div>
        </div>`
    }
    $('#companies').empty();
    $('#companies').append(content);
});

function executeGame(gname, brand, mobile) {
    $.get('/api/casino/executegame', {
        Name: gname,
        Brand: brand,
        Mobile: mobile
    }, function(result){
        // console.log(result.URL);
        window.open(result.URL);
    });
}

function showCompanyFilter(brand) {
    $('.gamelogo').hide();

    jQuery.expr[':'].contains = function(a, i, m) {
        return jQuery(a).attr('brand').indexOf(m[3]) >= 0;
    };

    $('.gamelogo:contains("'+brand+'")').show();
}

function showSearchFilter() {
    $('.gamelogo').hide();

    jQuery.expr[':'].contains = function(a, i, m) {
        return jQuery(a).attr('description').toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
    };

    $('.gamelogo:contains("' + $('#searchField').val() + '")').show();
}
