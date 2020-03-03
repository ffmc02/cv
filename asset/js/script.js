$(document).ready(function () {
//je cache les messages d'errur au chargement de la pages '

    $('#firstname1').hide();
    $('#firstname2').hide();
    $('#lastname1').hide();
    $('#lastname2').hide();
    $('#email1').hide();
    $('#phoneNumber1').hide();
    $('#phoneNumber2').hide();
    $('#succesForm').hide();
    $('#topic1').hide();
    $('#topic2').hide();
});

function test() {
    var regexTexte = '/^[a-zA-ZÃ€-Ã–Ã˜-Ã¶Ã¸-Ã¿ \-\']+$/';
    var regexPhoneNumber = '/^[0][1-79]([0-9]){8}$/';
    var envoi = true;
    var firstname = $('#firstname');
    var lastname = $('#lastname');
    var email = $('#email');
    var phoneNumber = $('#phoneNumber');
    var topic = $('#topic');
    var text = $('#text');
    if (firstname = '') {
        envoi = false;
        $('#firstname1').show();
    }
    if (regexTexte.test(firstname)) {
        envoi = false;
        $('#firstname2').show();
    }
    if (lastname = '') {
        envoi = false;
        $('#lastname1').show();
    }
    if (regexTexte.test(firstname)) {
        envoi = false;
        $('#lastname2').show();
    }
    if (email1 = '') {
        envoi = false;
        $('#email1').show();
    }
    if (regexTexte.test(topic)) {
        envoi = false;
        $('#topic2').show();
    }
    if (topic = '') {
        envoi = false;
        $('#topic1').show();
    }
    if(regexPhoneNumber.test(phoneNumber)){
         envoi = false;
        $('#phoneNumber2').show();
    }
    if (phoneNumber = '') {
        envoi = false;
        $('#phoneNumber1').show();
    }
    if (topic = '') {
        envoi = false;
        $('#topic1').show();
    }
    if (text = '') {
        envoi = false;
        $('#text1').show();
    }
    if (envoi == true)
    {
        $('#succesForm').show();
        document.forms[0].submit();
        alert('votre formulaire a été envoyer avec succés');
    } else {
        return false;
    }
}
;
