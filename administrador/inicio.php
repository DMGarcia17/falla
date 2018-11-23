   <div style="margin: 30px;">
    <h3>Imagenes del Carrusel (Slider)</h3>
    <table class="table-hover mx-auto">
        <?php
        require_once('../core/proc.php');
        $db = new procedimientos();
        $res = $db->blankect_query("img_sli", "*");
        foreach($res as $r){
            echo "<tr>
                            <td><img src='../{$r['img']}' style='max-width: 400px;' class='img-fluid'></td>
                            <td><button class='btn btn-primary' onclick='mod({$r['id_ima']})'  data-toggle='modal' data-target='#modificar'><i class='fas fa-cog'></i></button></td>
                            <td><button class='btn btn-danger' onclick='del({$r['id_ima']})'><i class='far fa-trash-alt'></i></button></td>
                        </tr>";
        }
        ?>
    </table>
    <?php
       if(isset($_GET['err'])){
           switch($_GET['err']){
               case 0:
                   echo "<div class=\"alert alert-success\" role=\"alert\">
                                            Acci&oacute;n realizada con exito
                                </div>";
                   break;
                   case 1:
                   echo "<div class=\"alert alert-danger\" role=\"alert\">
                                            Elija una imagen con una extensi&oacute;n valida. La extensi&oacute;n requerida es JPG.
                                </div>";
                   break;
                   case 2:
                   echo "<div class=\"alert alert-danger\" role=\"alert\">
                                            Acci&oacute;n no realizada. Intente de nuevo.
                                </div>";
                   break;
           }
       }
       ?>
</div>
<div style="">
    <div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Subir nueva imagen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="procedimientos/slider.php?opt=1" method="post" enctype="multipart/form-data">
            <label for="slider"><input type="file" id="slider" name="slider" class="form-control"></label>
            <button class="btn btn-primary" type="submit">Guardar nueva fotografía</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</div>