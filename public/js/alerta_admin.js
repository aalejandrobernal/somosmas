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
          // Swal.fire(
          //   'Contraseña restablecida!',
          //   'La contraseña ha sido restablcida exitosamente.',
          //   'success'
          // )
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
          // Swal.fire(
          //   'Informacion Actualizada!',
          //   'La información ha sido actulizada exitosamente.',
          //   'success'
          // )
          $(this).closest('#form2').submit();}
      })
});
