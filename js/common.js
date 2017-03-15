$(document).ready(function(){
    
    $('#form').submit(function(){
        $.ajax({
            type: "POST",
            url:  "../php/mail.php",
            data: $(this).serialize()
            
        }).done(function(){
            alert("Дякую! Ваше повідомлення успішно відправлено!");
        });
        return false;
    });
    
});