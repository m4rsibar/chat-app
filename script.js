$("#register").on('submit', e => {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "register.php",
        data: {
            username: $('#register-username').val(),
            password: $('#register-password').val()
        },
        success: (data) => {
            if (data) {
                location.reload();
            }
            console.log(data)
        }
    })
})

$("#login").on('submit', e => {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "login.php",
        data: {
            username: $('#login-username').val(),
            password: $('#login-password').val()
        },
        success: (data) => {
            console.log(data == true)
        }
    })
})