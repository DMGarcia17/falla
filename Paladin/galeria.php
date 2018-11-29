<?php
        require_once('../core/proc.php');
        $db = new procedimientos();
if($_SERVER['REQUEST_URI'] == '/carrusel/administrador/galeria.php'){
    header('location: ../');
}
?>
<div class="container">
    <h1>Galer&iacute;a de proyectos</h1>
    <table class="table-hover table-bordered">
        <tr>
            <th class="col">Nombre del proyecto</th>
            <th class="col" colspan="3">Opciones</th>
        </tr>

        <?php
            $res = $db->blankect_query("proyectos", "*");
            foreach($res as $r){
                echo "<tr>
                                <td>{$r['n_proy']} <i class=\"far fa-edit\"></i></td>
                                <td class=\"text-center\">
                                    <button class=\"btn btn-primary\" onclick='$(\"#id_proy\").val(\"{$r['id_proyecto']}\")' data-toggle=\"modal\" data-target=\"#cover\" title=\"Subir foto de portada de la galeria\">
                                        <i class=\"fas fa-tablet\"></i>
                                    </button></td>
                                <td class=\"text-center\">
                                    <button class=\"btn btn-primary\" onclick='$(\"#id_proy\").val(\"{$r['id_proyecto']}\")'  data-toggle=\"modal\" data-target=\"#sran\" title=\"Subir rango de imagenes de la galeria\">
                                        <i class=\"far fa-images\"></i>
                                    </button></td>
                                <td class=\"text-center\">
                                    <button class=\"btn btn-danger\" onclick='$(\"#id_proy\").val(\"{$r['id_proyecto']}\")'  data-toggle=\"modal\" data-target=\"#cover\" title=\"Eliminar proyecto\">
                                        <i class=\"far fa-trash-alt\"></i>
                                    </button></td>
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

<div class="modal fade" id="cover" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Cambiar imagen de portada de proyecto.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="procedimientos/gal.php?opt=1" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id_proy" id="id_proy" value="">
                    <label for="coverp"><input type="file" id="coverp" name="coverp" class="form-control" accept="image/jpeg" required></label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-success" type="submit">Guardar nueva fotograf&iacute;a</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="sran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Subir rango de imagenes de la galer&iacute;a</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="procedimientos/gal.php?opt=2" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <small>Recuerde que las imagenes seleccionadas deben ser estar en formato JPG. En el siguiente bot&oacute;n puede seleccionar una o m&aacute;s imagenes</small><br><br>
                    <input type="hidden" name="id_proy" id="id_proy" value="">
                    <label for="range">
                        <input type="file" id="range" name="range" class="form-control" accept="image/jpeg" required multiple>
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-success" type="submit">Guardar nuevo rango de imagenes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/tooltipster@4.2.6/dist/js/tooltipster.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('.tooltip').tooltipster();
    });

</script>
