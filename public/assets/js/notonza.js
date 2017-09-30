$(function () {

    initMonthOptionTags();
    delimiteDigit();

});

function initMonthOptionTags(){

    var date = new Date();
    var y = date.getFullYear();
    var m = date.getMonth() + 1;

    var isFutureYear = function(){
        return Number($('[name=year_to]').val()) !== y;
    };

    var hidePassedMonths = function () {
        for(i = 0; i < m; i++){
            $('[name=month_to] option').eq(i).toggle(isFutureYear());
        }
    };

    hidePassedMonths();
    $('[name=year_to]').change(function(){
        hidePassedMonths();
    });
}

function delimiteDigit(){

    $('[name=target]').keyup(function(){
        console.log($(this).val());

        var num = $(this).val();
        num = String(num).replace( /(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');

        $(this).val(num)
    })
}