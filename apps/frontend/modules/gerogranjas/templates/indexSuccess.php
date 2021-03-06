<h1>Listado de Gerogranjas</h1>


<table border="0" cellpadding="0" cellspacing="0">
    <caption><?php echo $resultados ?> Gerogranjas en <?php echo $paginas ?> p&aacute;gina(s)</caption>
  <thead>
    <tr class="tabla_th">
      <th> Identificador </th>
      <th> Estado </th>
      <th> Nombre </th>
      <th> Responsable </th>
      <th> Adultos Atendidos </th>
      <th> Adultas Atendidas </th>
      <th> Total Adultos </th>
    </tr>
  </thead>
  
<?php if($haveToPaginate): ?>
<div class="onlycssmenu-paging">
<?php echo html_entity_decode($menu) ?>
</div>
<?php endif;?>

  <tbody>
    <?php foreach ($gerogranjas as $gerogranja): ?>
    <tr class="tabla_td">
      <td><a href="<?php echo url_for('gerogranjas/show?id='.$gerogranja->getId()) ?>"><?php echo $gerogranja->getId() ?></a></td>
      <td><?php echo $gerogranja->getEstado() ?></td>
      <td><?php echo $gerogranja->getNombre() ?></td>
      <td><?php echo $gerogranja->getResponsable() ?></td>
      <td><?php echo $gerogranja->getAdultosM() ?></td>
      <td><?php echo $gerogranja->getAdultosF() ?></td>
      <td><?php echo $gerogranja->getAdultosT() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php if($haveToPaginate): ?>
<div class="onlycssmenu-paging">
<?php echo html_entity_decode($menu) ?>
</div>
<?php endif;?>
<div class="boton_fin">
  <a href="<?php echo url_for('gerogranjas/new') ?>" class="link-blanco"> Nuevo </a>
</div>
