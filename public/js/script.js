$(document).ready(function() {

    $('.category__inner').on('click', function() {
        // $('.category__list').slideToggle(500);
        $(this).next().fadeToggle();

    });
    $('li.category__elem').on('click', function() {
        $(this).toggleClass('category__elem__select');
    });
    // Add MarkBook
    $('button#add__markbook').on('click', function() {
        $('#save__markbook').toggle();
        $('#add__window__markbook').slideToggle(400);
        $('#category__markbook__select').toggle();
        $(this).toggleClass('select__button').toggleText('Скасувати','Додати');
        $('.add_category').slideUp(400);
    });
    // Add Plan
    $('button#plan__button__inner').on('click', function() {
        $('#save__plan').toggle();
        $('#add__window__planning').slideToggle(400);
        $('#category__plan__select').toggle();
        $(this).toggleClass('select__button').toggleText('Скасувати','Додати');
        $('.add_category').slideUp(400);
    });
    // Add Record Day
    $('button#record__button__inner').on('click', function() {
        $('#save__record').toggle();
        $('#add__window__record').slideToggle(400);
        $('#category__record__select').toggle();
        $(this).toggleClass('select__button').toggleText('Скасувати','Додати');
        $('.add_category').slideUp(400);
        $('.date__filter__first').fadeToggle(400);
    });


    //
    $('button#right__add__markbook__button').on('click', function() {
        $('.add_category').slideDown(400);
    });
    /* Priority */
    $('.priority__list__markbook').on('click', function() {
        $(this).next().slideToggle(400);
    });
    $('.priority__list__planning').on('click', function() {
        $(this).next().slideToggle(400);
    });


});

jQuery.fn.extend({
    toggleText: function (a, b){
        var that = this;
        if (that.text() != a && that.text() != b){
            that.text(a);
        }
        else
        if (that.text() == a){
            that.text(b);
        }
        else
        if (that.text() == b){
            that.text(a);
        }
        return this;
    }
});

$.ajaxSetup({

    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }

});

$('#save__markbook').on('click',function (e) {
    e.preventDefault();
    let title = $('#markbook_title');

    $('.elem_record_error').hide();
    if(title == '')return $('#markbook_title').before('<h4 style="color: red; margin-left: 20px; margin-bottom: 20px;" class="elem_record_error">Заповніть поле</h4>');

    $.ajax({
        type:'POST',
        url:'/ajaxAddCategory',
        data: {

        },
        // data:{name:name, password:password, email:email},

        success:function(data){
            console.log(data);
        }
    });
});

$("#save__record").click(function(e){
    e.preventDefault();
    let about = $("input[name=about_record]").val();
    let data = $("input[name=data_record]").val();
    let fromFirst = $("input[name=firstTime_from]").val();
    let toFirst = $("input[name=firstTime_to]").val();
    let fromSecond = $("input[name=SecondTime_from]").val();
    let toSecond = $("input[name=SecondTime_to]").val();
    let effective = $("input[name=record_effective]").val();
    let fullAbout = $("input[name=add__markboob__textarea]").val();
    let fromTime = fromFirst + ":" + toFirst;
    let toTime = fromSecond + ":" + toSecond;
    console.log(fromTime);
    $('.elem_record_error').hide();
    if(about == '') return $("input[name=about_record]").before('<h4 style="color: red; margin-left: 20px; margin-bottom: 20px;" class="elem_record_error">Заповніть поле</h4>');
    if(fromTime == ':') { fromTime = 0; }
    if(toTime == ':') { toTime = 0; }
    if(effective == '') { effective = 0; }
    $.ajax({
        type:'POST',
        url:'/ajaxRequest',
        data: {
            about: about,
            data: data,
            fromTime: fromTime,
            toTime: toTime,
            effective: effective,
            fullAbout: fullAbout
        },
        // data:{name:name, password:password, email:email},

        success:function(data){
            console.log(data);
        }
    });
});

function GetTodayDate() {
    let tdate = new Date();
    let dd = tdate.getDate(); //yields day
    let MM = tdate.getMonth(); //yields month
    let yyyy = tdate.getFullYear(); //yields year
    currentDate = yyyy + "-" + ( MM+1) + "-" +dd;
    return currentDate;
}
