<?php if ( ! defined('ABSPATH')) exit; ?>

<?php
// Carrega todos os métodos do modelo
$modelo->lista_incidentes();
?>

<div class="wrap">
    
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Atendente</th>
          <th scope="col">Cliente</th>
          <th scope="col">Descri&ccedil;&atilde;o</th>
          <th scope="col">Status</th>
          <th scope="col">Data de Cria&ccedil;&atilde;o</th>
        </tr>
      </thead>
      <tbody>
    <?php
            $incidentes = $modelo->lista_incidentes();
            for($i = 0; $i < sizeof($incidentes);$i++){
                ?> 
          <tr>
                <th scope="row"><?php echo $incidentes[$i][0]; ?></th>
                <td><?php echo $modelo->retorna_atendente($incidentes[$i][1]) ?></td>
                <td><?php echo $modelo->retorna_cliente($incidentes[$i][2]) ?></td>
                <td><?php echo $incidentes[$i][3]; ?></td>
                <td><?php echo $incidentes[$i][4]; ?></td>
                <td><?php echo $incidentes[$i][5]; ?></td>
          </tr>  
    <?php } ?>
      </tbody>
</table>

</div> <!-- .wrap -->