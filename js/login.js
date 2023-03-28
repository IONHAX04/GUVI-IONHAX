$(document).ready(function(){
    $('form').on('submit',function(event){
        event.preventDefault();
        var formData = {
            email:$('#email').val(),
            password:$('#password').val()
        };
        $.ajax({
            url:'./php/login.php',
            method:'POST',
            data: formData,
            success:function(response){
                document.location.replace("./profile.html");
            }
        })
    })
})

