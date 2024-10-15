window.addEventListener('DOMContentLoaded', function() {

    const email= localStorage.getItem('email');
    const username = localStorage.getItem('username');
 document.getElementById("email").value=email;
 document.getElementById("username").value=username;});

 
$(document).ready(function() {
    $('#updateForm').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
alert("details updated successfully...!")
        var formData = {
            email:$('#email').val(),
            dob: $('#dob').val(),
        age: $('#age').val(),
            contact: $('#contact').val(),
        };
    

        $.ajax({
            url: 'php/profile.php', // The correct path from guvi/register.html
            type: 'POST',
            data: formData
           
           
        });
    });
});





