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
        newUrl = strUri.replace(new RegExp(checkLang,'g'), lang);
        window.location = newUrl;
    }else{
        newUrl = strUri+lang+'/';
        window.location = newUrl;
    }
}
/* ********************************************************************************************************************/
/* ***************************** Метод обработки и отправки данных обратной связи *************************************/
function feedback(){
    var email = $('#email').val();
    var comment = $('#comment').val();
    var valid = true;
    if(email.length < 4){
        $('.alert-danger').html(' Поле ( email ) пусто, или не корректно заполнено! ').slideDown();
        setTimeout(function() { $('.alert-danger').slideUp('slow') }, 3000);
        $('#email').focus();

        return valid = false;
    }
    alert(comment);
}
/* ********************************************************************************************************************/
