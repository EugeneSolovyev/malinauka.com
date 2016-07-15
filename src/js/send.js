$(document).ready(function () {
    $("#formMain").submit(function () {
        /* Получение ID формы */
        var formID = $(this).attr('id');
        /* Добавление решётки к имени ID */
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST"
            , url: 'send.php'
            , data: formNm.serialize()
        });
        return false;
    });
});