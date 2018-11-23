
  function cargarGaleria(id) {
    $.ajax({
    type  : 'post',
    url   : 'proc/cargar_galeria.php',
    data  : {
              'data': id
            },
    success: function (res) {
      $("#gallery").fadeOut('slow').html(res).fadeIn('slow');
      baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
      
    } 
  });

}