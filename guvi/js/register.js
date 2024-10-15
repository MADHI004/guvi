
$(document).ready(function() {
    $('#signInForm').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        var formData = {
            email: $('#email').val(),
            password: $('#password').val(),
            username: $('#username').val(),
        };
        window.location.href="login.html";
    
        localStorage.setItem('email', $('#email').val());
        localStorage.setItem('password', $('#password').val());
        localStorage.setItem('username', $('#username').val());

        $.ajax({
            url: 'php/register.php', // The correct path from guvi/register.html
            type: 'POST',
            data: formData
           
           
        });
    });
});




