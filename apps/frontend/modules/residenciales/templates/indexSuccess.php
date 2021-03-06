<h1>Listado de Centros Residenciales</h1>


<table border="0" cellpadding="0" cellspacing="0">
 <caption><?php echo $resultados ?> Centros Residenciales en <?php echo $paginas ?> p&aacute;gina(s)</caption>
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
    <?php foreach ($residencials as $residencial): ?>
    <tr class="tabla_td">
      <td><a href="<?php echo url_for('residenciales/show?id='.$residencial->getId()) ?>"><?php echo $residencial->getId() ?></a></td>
      <td><?php echo $residencial->getEstado() ?></td>
      <td><?php echo $residencial->getNombre() ?></td>
      <td><?php echo $residencial->getResponsable() ?></td>
      <td><?php echo $residencial->getAdultosM() ?></td>
      <td><?php echo $residencial->getAdultosF() ?></td>
      <td><?php echo $residencial->getAdultosT() ?></td>
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
  <a href="<?php echo url_for('residenciales/new') ?>" class="link-blanco"> Nuevo </a>
</div>
