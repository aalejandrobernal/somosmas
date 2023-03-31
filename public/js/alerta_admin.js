$('#btn1').on('click', function(e) {
    e.preventDefault();
    Swal.fire({
        title: '¿Estás seguro(a) de restablecer la contraseña?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#FE3EB2',
        cancelButtonColor: '#343a40',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            position: 'center',
            title: 'Cargando....',
            showConfirmButton: false,
            allowOutsideClick: false,
            allowEscapeKey: false,
            })
          $(this).closest('#form').submit();}
      })
});

$('#btn2').on('click', function(d) {
    d.preventDefault();
        Swal.fire({
        title: '¿Estás seguro(a) de actualizar la información ?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#FE3EB2',
        cancelButtonColor: '#343a40',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
      }).then((result) => {
        if (result.isConfirmed) {          
          Swal.fire({
            position: 'center',
            title: 'Cargando....',
            showConfirmButton: false,
            allowOutsideClick: false,
            allowEscapeKey: false,
            })
          $(this).closest('#form2').submit();      
        }
      })
});
$('#btn').on('click', function(e) {
  e.preventDefault();  
  Swal.fire({
    position: 'center',
    title: 'Cargando....',
    showConfirmButton: false,
    allowOutsideClick: false,
    allowEscapeKey: false,
    onOpen: () => {
      Swal.showLoading();
  }
    })
    $(this).closest('#form').submit();
});
