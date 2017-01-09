$(document).ready(function(){

    $(function() {
        var btn = $(".container form").find('.btn'); //btn=button //
        $(".container form").find('.rfield').addClass('empty_field');

        var sizeEmpty = $(".container form .empty_field").length; //


        function checkInput(){
            $(".container form").find('.rfield').each(function(){
                if($(this).val() != ''){
                    // Если поле не пустое удаляем класс-указание
                    $(this).removeClass('empty_field');
                } else {
                    // Если поле пустое добавляем класс-указание
                    $(this).addClass('empty_field');
                }
            });
        }

        setInterval(function(){
            // Запускаем функцию проверки полей на заполненность
            checkInput();
            // Считаем к-во незаполненных полей
            var sizeEmpty = $(".container form .empty_field").length;
            // Вешаем условие-тригер на кнопку отправки формы
            if(sizeEmpty > 0){
                if(btn.hasClass('disabled')){
                    return false
                } else {
                    btn.addClass('disabled')
                }
            } else {
                btn.removeClass('disabled')
            }
        },500);



        // Функция подсветки незаполненных полей
        function lightEmpty(){ //функция обращается к контейнеру форм и если находит пустое поле, то посвечивает его этим вот длинным текстом
            $(".container form").find('.empty_field').css({'border-color':'#df2bb7','box-shadow':'inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(229, 139, 139, 0.6)' });
            // Через полсекунды удаляем подсветку
            setTimeout(function(){ //
                $(".container form").find('.empty_field').removeAttr('style');
            },1200); //1200 это милисекунды.
        }


        btn.click(function(){
            if (!$(this).hasClass('disabled')) {
                // Все хорошо, все заполнено, отправляем форму
                var form;
                form.submit();
            } else {
                // подсвечиваем незаполненные поля и форму не отправляем, если есть незаполненные поля
                lightEmpty();
                return false
            }
        });
        $('.container').css("font-weight", 'bold'); //точка потому что класс
        //обратились к классу контейнер и через css изменили на подчеркнутый текст//
        $(btn).css('font-weight', 'bold'); //кнопка стала жирной//

    });

});