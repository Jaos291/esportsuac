/*$('#email').focusout(function() {
    //var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
    //var regex = /[\w-\.]{2,}@(uac|autonoma)\.edu.co(\W|$)/;
    var regex = /^[a-zA-Z0-9.+_-]+@(uac|autonoma)\.edu.co(\W|$)/;
    if (regex.test($('#email').val().trim())) {
        $('.input-email').addClass('icon-valid');
    } else {
        alert('La direccón de correo no es válida');
        $('.input-email').removeClass('icon-valid');
    }
});
*/
function validEmail(){
    if(document.querySelector('#email') != null){
        var emailInput = document.querySelector('#email');
        var regex = /^[a-zA-Z0-9.+_-]+@(uac|autonoma)\.edu.co(\W|$)/;
            regex.test(emailInput.value)
                ? (emailInput.parentElement.classList.add('icon-valid'))
                : (emailInput.parentElement.classList.remove('icon-valid'));
        }
}
function validateEmail(){
    if(document.querySelector('#email') != null){
        const emailInput = document.querySelector('#email');
        emailInput.addEventListener('click',function(){
            validEmail();
        })
        emailInput.addEventListener('input', validEmail, false);
        }
}validateEmail();
