const groupBy = (array, key) => {
    // Return the end result
    return array.reduce((result, currentValue) => {
        // If an array already present for key, push it to the array. Else create an array and push the object
        (result[currentValue[key]] = result[currentValue[key]] || []).push(currentValue);
        // Return the current iteration `result` value, this will be taken as next iteration `result` value and accumulate
        return result;
    }, {}); // empty object is the initial value for result object
};

$.get('/api/casino/getlist', {}, function(result){
    var content = '';
    for(index in result){
        // console.log(result[index]);
        if(result[index].Desktop != 1) {
            continue;
        }
        content += `<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
            <div class="gallery-single-img">
                <a href="javascript:void(0);"><img src="` + result[index].Button_Image_Path + `" class="img-fluid" alt="Gallery Image"></a>
                <a href="javascript:void(0);">` + result[index].Description + `</a>
                <div class="hover-efect">
                    <a href="javascript:void(0);" onclick="executeGame('` + result[index].Name + `', '` + result[index].Brand + `', '` + result[index].Mobile + `')">Run</a>
                </div>
            </div>
        </div>`
    }
    $('#GameContainer').append(content);
    console.log(groupBy(result, "Filter"));
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
