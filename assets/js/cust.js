
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
function del(id_ima, img){
    $("#id_img").val(id_ima);
    $("#img_rut").val(img);
    $("#img_prev").attr("src", "../"+img);
     $("#delete").modal("show");
}
function mod(id_ima, img){
    $("#id_img2").val(id_ima);
    $("#img_rut2").val(img);
     $("#modificar").modal("show");
}

function list(id, cont){
    $("#id_cat").val(id);
    $("#cat").val(cont);
    $("#del").attr("href", "procedimientos/categories.php?opt=2&id_cat="+id);
     $("#lista").modal("show");
}
