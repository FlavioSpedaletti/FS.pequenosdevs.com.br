$("form").on("submit", function(){
    setTimeout(function() { 
                $('input[type=email]').val('');
            }, 200);
})