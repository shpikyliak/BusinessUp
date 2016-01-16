$(document).ready(function () {
    $('button').click(function () {
        var form = $('#add_student');
        $('.has-error').removeClass('has-error');
        var success = true;
        form.find('input').each(function () { // прoбeжим пo кaждoму пoлю в фoрмe
            if ($(this).val() == '') {
                error(this);
                success = false;
            }
        });
        if (success){
            $.ajax({
                url: "../php/add_student.php",
                data: form.serialize(),
                // dataType: "json",
                type: "POST",
                success: function (data) {
                    console.log(data);
                    showMessage(data, form);

                }
            });
        }
        return false;
    });
});

function error(elem) {
    $(elem).parent().addClass('has-error');

}

function showMessage(data, form) {
    $("#message").removeAttr('class').find('span').text('');
    if (data['error']) {
        var text = '<span>' + data['error'] + '</span>';
        $('#message').text(text);
    } else {
        var text = '<span>Студент(ка) ' + form.find('#name').val() + ' ' + form.find('#sername').val() + ' успешно добавлен</span>';
        $('#message').addClass('alert-success').append(text);
    }
}