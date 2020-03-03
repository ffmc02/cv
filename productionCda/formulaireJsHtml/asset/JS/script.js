$(document).ready(function () {
//je cache les messages d'errur au chargement de la pages '

    $('#society1').hide();
    $('#society2').hide();
    $('#contactPerson1').hide();
    $('#contactPerson2').hide();
    $('#businessAdress1').hide();
    $('#zipCode1').hide();
    $('#zipCode2').hide();
    $('#city1').hide();
    $('#email1').hide();
    $('#phoneNumber1').hide();
    $('#phoneNumber2').hide();
    $('#succesForm').hide();

});

function test() {
    var regexTexte = /[^ \w]$/;
    var envoi = true;
    var societe = $('#society').val();
    var contact = $('#contactPerson').val();
    var businessAdress = $('#businessAdress').val();
    var zipCode = $('#zipCode').val();
    var city = $('#city').val();
    var phoneNumber = $('#phoneNumber').val();
    var email = $('#email').val();
//    teste nom de la soiciété si il est vide
    if (societe == '') {
        $('#society1').show();
//        si l'input sociéter est vide alors je bloque l'envoie du formulaire
        envoi = false;
    }
//    regex de texte du nom de la société
    if (regexTexte.test(societe)) {
        $('#society2').show();
        envoi = false;
    }
//    teste si le champs contact est vide
    if (contact == '') {
        envoi = false;
        $('#contactPerson1').show();
    }
//    regex de texte sur le champs contact
    if (regexTexte.test(contact)) {
        $('#contactPerson2').show();
        envoi = false;
    }
    if (businessAdress == '') {
        envoi = false;
        $('#businessAdress1').show();
    }
    if (zipCode == '') {
        envoi = false;
        $('#zipCOde1').show();
    }
//    vérification de la longueur du champs code postal
    if (zipCode.length != 5) {
        envoi = false;
        $('#zipcode2').show();
    }
    if (city == '') {
        envoi = false;
        $('#city1').show();
    }
    if (email == '') {
        envoi = false;
        $('#email1').show();
    }
//    teste si le champs téléphone n'est pas vide'
    if (phoneNumber == '') {
        envoi = false;
        $('#phoneNumber1').show();
    }
//    Si aucune erreur d'input est présent alors j'affiche un message de succées et une alert si non je bloque l'envoie du formulaire'.
    if (envoi == true)
    {
        $('#succesForm').show();
        document.forms[0].submit();
        alert('votre formulaire a été envoyer avec succés')
    } else {
        return false;
    }
}
;
