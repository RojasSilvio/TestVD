$(document).ready(function () {
  //AGREGAMOS LA CLASE 'ACTIVE' AL PRIMER ENLACE
  /*$('.tipo-soft .soft[category="desarrolloMovil"]').addClass('active');*/

  $('.soft').click(function () {
    var opcion = $(this).attr('category');

    //AGREGAMOS CLASE 'ACTIVE' AL ENLACE SELECCIONADO
    $('.soft').removeClass('active');
    $(this).addClass('active');

    //ACULTANDO imgens
    $('.item').hide();

    //MOSTRANDO imagens
    $('.item[category="' + opcion + '"]').show();
  });

});
/**-------------------------------------------------------------------------------------- */
function validar() {
  var email = document.getElementById("email").value
  var pass = document.getElementById("password").value
  var parrafo = document.getElementById("error")
  /**/
  var expresion = /\w+@\w+\.+[a-z]/
  var error = ""
  var entra = false

  if (!expresion.test(email)) {
    error = error + "El EMAIL no es valido <br>"
    entra = true

  }
  if (pass.length < 8) {
    error = error + "La CONTRASEÑA no es valida <br>"
    entra = true

  }
  if (entra) {
    parrafo.innerHTML = error
    return false
  } else {
    alert("Inicio de sesion Exitosa!")
  }
}
