<?php if ( ! defined('ABSPATH')) exit; ?>

<?php
// Carrega todos os métodos do modelo
$modelo->lista_atendentes();
$modelo->lista_clientes();
?>

<div class="wrap">

    <form method="post" action="" autocomplete="off">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Atendente</label>
            <select class="form-control" id="id_atendente" name="id_atendente">
            <?php
                $atendendes = $modelo->lista_atendentes();
                for($i = 0; $i < sizeof($atendendes);$i++){
                    ?> <option value="<?php echo $atendendes[$i][0]; ?>"><?php echo $atendendes[$i][1]; ?> </option>
            <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Cliente</label>
            <select class="form-control" id="id_cliente" name="id_cliente">
              <?php
                $clientes = $modelo->lista_clientes();
                for($i = 0; $i < sizeof($clientes);$i++){
                    ?> <option value="<?php echo $clientes[$i][0]; ?>"><?php echo $clientes[$i][2]; ?> </option>
            <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Descri&ccedil;&atilde;o</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
          </div>
        
        <div><?php echo $modelo->form_msg;?></div>
        <button type="submit" class="btn btn-primary">Abrir Incidente</button>
        
    </form>

</div> <!-- .wrap -->