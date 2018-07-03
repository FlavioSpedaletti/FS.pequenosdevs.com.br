// $("form").on("submit", function(){
//     setTimeout(function() { 
//                 $('input[type=email]').val('');
//             }, 200);
// })

//sem jquery
document.getElementById('mc-embedded-subscribe-form').onsubmit = function(){
    setTimeout(function() {
        document.getElementById('mce-email').value = '';
    }, 200);
}