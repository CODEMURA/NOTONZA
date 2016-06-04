$(function () {

    var date = new Date();
    var y = date.getFullYear();
    var m = date.getMonth() + 1;

    var hideMonthBefore = function () {
        if($('[name=year_to]').val() == y){

            for(i = 0; i < m; i++){
                $('[name=month_to] option').eq(i).hide();
            }
        }else{
            for(i = 0; i < m; i++){
                $('[name=month_to] option').eq(i).show();
            }
        }
    };

    hideMonthBefore();
    $('[name=year_to]').change(function(){
        hideMonthBefore();
    });
});