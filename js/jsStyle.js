/**************** Метод обработки выпадающего меню **********************/
$(document).ready(function(){
    $('#ddmenu li').hover(function () {
        clearTimeout($.data(this,'timer'));
        $('ul',this).first().slideDown(200);
    }, function () {
        $.data(this,'timer', setTimeout($.proxy(function() {
            $('ul',this).first().slideUp(200);
        }, this), 100));
    });
});
/*************************************************************************/
/* **************************************** AVTO-START SLAYD-SHOW *****************************************************/
$('.carousel').carousel({
    interval: 3000,
    pause: 'hover',
    wrap: true
});
/* ********************************************************************************************************************/
/* ************************************ Метод перегрузки страницы под язык ********************************************/
function switchLang(lang){
    var arrLang = location.href.split('/')
    var strUri = location.href;
    var newUrl;
    var checkLang = arrLang[3];
    if(checkLang != ""){
        //TODO: доработать алгаритм. Нужно вставлять значение языка по умолчанию в УРЛ
        newUrl = strUri.replace(new RegExp(checkLang,'g'), lang);
        window.location = newUrl;
        /*if(checkLang != 'ru' || checkLang != 'en' || checkLang != 'ua'){

        }else{
            newUrl = strUri.replace(new RegExp(checkLang,'g'), lang);
            window.location = newUrl;
        }*/
    }else{
        newUrl = strUri+lang+'/';
        window.location = newUrl;
    }
}
/* ********************************************************************************************************************/
/* ***************************** Метод обработки и отправки данных обратной связи *************************************/
function feedback(lang){
    var email = $('#email').val();
    var comment = $('#comment').val();
    var valid = true;
    if(email.length < 4){
        $('.alert-danger').html(' Поле ( email ) пусто, или не корректно заполнено! ').slideDown();
        setTimeout(function() { $('.alert-danger').slideUp('slow') }, 3000);
        $('#email').focus();
        return valid = false;
    }
    if(comment.length < 3){
        $('.alert-danger').html(' Поле ( Сообщение ) пусто, или не корректно заполнено! ').slideDown();
        setTimeout(function() { $('.alert-danger').slideUp('slow') }, 3000);
        $('#comment').focus();
        return valid = false;
    }
    // отправляем AJAX запрос
    $.ajax({
        type: "POST",
        url: "http://fin/"+lang+"/index/mail/",
        dataType:"text",
        data:{
              mail:email,
              comment:comment
        }, success: function(response){
            if(response == ""){
                $('.alert-success').html("Сообщение отправлено!").slideDown();
                setTimeout(function(){
                    $('.alert-success').slideUp('slow')
                }, 3000);
                //location.reload();
            }else{
                alert("Ошибка в запросе! Сервер вернул вот что: " + response);
            }
        },error:function (xhr, ajaxOptions, thrownError){
            alert(thrownError); //выводим ошибку
        }
    });
}
/* ********************************************************************************************************************/
