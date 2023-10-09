tippy("#anadirCurso", {
  content: "Anadir Curso",
  placement: "bottom",
  animation: "scale",
});

tippy("#rutPro", {
  content: "Por ejemplo de Rut: 2xx32xxxk no punto ni guion",
  placement: "bottom",
  animation: "scale",
});

//subirSql/sqlProfesor.php?ajuste=anadir

function crearProfesor() {
  //* Datos personales
  var nomPro = document.forms["formPro"]["nomPro"].value;

  var nacePro = document.forms["formPro"]["fechaPro"].value;

  var rutPro = document.forms["formPro"]["rutPro"].value;
  var telPro = document.forms["formPro"]["telefonoPro"].value;
  var correoPro = document.forms["formPro"]["mailPro"].value;
  var dirPro = document.forms["formPro"]["direccionPro"].value;
  var areaPro = document.forms["formPro"]["areaPro"].value;

  if (nomPro == "" || nomPro == null) {
    $(document).ready(function () {
      $(".errorNomPro").toast("show");
    });
    return false;
  }

  if (nacePro == "" || nacePro == null) {
    $(document).ready(function () {
      $(".errorNacePro").toast("show");
    });
    return false;
  }

  if (rutPro == "" || rutPro == null) {
    $(document).ready(function () {
      $(".errorRutPro").toast("show");
    });
    return false;
  }

  if (telPro == "" || telPro == null) {
    $(document).ready(function () {
      $(".errorTelPro").toast("show");
    });
    return false;
  }

  if (correoPro == "" || correoPro == null) {
    $(document).ready(function () {
      $(".errorCorreoPro").toast("show");
    });
    return false;
  }

  if (dirPro == "" || dirPro == null) {
    $(document).ready(function () {
      $(".errorDirPro").toast("show");
    });
    return false;
  }

  if (areaPro == "" || areaPro == null) {
    $(document).ready(function () {
      $(".errorAreaPro").toast("show");
    });
    return false;
  }


  //* Cuenta
  var userPro = document.forms["formPro"]["userPro"].value;
  var passPro = document.forms["formPro"]["contrPro"].value;

  if (userPro == "" || userPro == null) {
    $(document).ready(function () {
      $(".errorUserPro").toast("show");
    });
    return false;
  }

  if (passPro == "" || passPro == null) {
    $(document).ready(function () {
      $(".errorPassPro").toast("show");
    });
    return false;
  }

  return true;
}
