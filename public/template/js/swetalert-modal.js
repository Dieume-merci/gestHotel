window.addEventListener('success',event => {
    $('#'+ event.detail.modal).modal('hide');
    var message="L'operation a Reussi";
    if (event.detail.message) {
        message=event.detail.message;
    }
    swal("Success",message, "success");
});
window.addEventListener('erreur',event => {
    var message="Une Erreur s'est Produite";
    if (event.detail.message) {
        message=event.detail.message;
    }
    swal("Erreur",message , "error");
});
window.addEventListener('openModal',event => {
    $('#'+ event.detail.modal).modal('show');
});
window.addEventListener('closeModal',event => {
    $('#'+ event.detail.modal).modal('hide');
});
function logout(){
      swal({
        title: "Se Deconnecter ?",
        type: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true
      }, function (isConfirm) {
          if (isConfirm){
            swal("Deconnexion!", "Vous Vous etes deconnectés.", "success");
            event.preventDefault();
            document.getElementById('logout-form').submit();
          }
      });
}

