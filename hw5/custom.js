

var none = $('.none');
var regBoolean = false;

$('#registration').click(function () {
    none.toggleClass("none");
    if (none.hasClass("none")) {
        changeRegBtnVal('Вход', 'Регистрация', 'login.php');
    }else {
        changeRegBtnVal('Регистрация', 'Назад', 'register.php');
    }
});

function changeRegBtnVal(header_text, btn_text, action) {
    $('h1').text(header_text);
    $('#registration').text(btn_text);
    $('#myForm').attr("action", action);
}

$('#myForm').validate({
    rules: {
        email: {
            required: true,
            email: true
        },
        second_name: {
            required: none.hasClass("none"),
            minlength: 2
        },
        first_name: {
            required: none.hasClass("none"),
            minlength: 2
        },
        pass: {
            required: true,
            minlength: 5
        }
    },
    messages: {
        email: {
            required: "Поле должно быть заполнено"
        },
        second_name: {
            required: "Поле должно быть заполнено",
            minlength: "длина менее 3-х символов"
        },
        first_name: {
            required: "Поле должно быть заполнено",
            minlength: "длина менее 3-х символов"
        },
        pass: {
            required: "Поле должно быть заполнено",
            minlength: "длина менее 3-х символов"
        }
    },
    submitHandler: function () {
        $.ajax({
            url: none.hasClass("none") ? 'login.php' : 'register.php',
            type: 'POST',
            data: getFormData(),
            success: function (data) {
                processingData(data);
            }
        });
    }
});

function getFormData() {
    return none.hasClass('none')
        ? {
            email: $('input[type=email]').val(),
            pass: $('input[type=password]').val()
        } : {
            second_name: $('#second-name').val(),
            first_name: $('#first-name').val(),
            email: $('input[type=email]').val(),
            pass: $('input[type=password]').val()
        }
}

function processingData(data) {
    if(data) {
        console.log(data);
        $('.container').html("<div class='row text-center'>" +
            "Здравствуйте, " + data +" </div>");
        // $('.view').css('display', 'block');
    }
    else {
        alert('user not found');
    }
}

// $('.view').click(function() {
//     $.ajax({
//         url:
//     })
// });
