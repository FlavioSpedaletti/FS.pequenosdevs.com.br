document.getElementById('mc-embedded-subscribe-form').onsubmit = function(){
    setTimeout(function() {
        document.getElementById('mce-email').value = '';
    }, 200);
}
