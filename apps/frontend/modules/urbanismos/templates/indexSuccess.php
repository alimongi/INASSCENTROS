<h1>Listado de Nuevos Urbanismos</h1>


<table border="0" cellpadding="0" cellspacing="0">
 <caption><?php echo $resultados ?> Nuevos Urbanismos en <?php echo $paginas ?> p&aacute;gina(s)</caption>

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
    <?php foreach ($nuevosurbs as $nuevosurb): ?>
    <tr class="tabla_td">
      <td><a href="<?php echo url_for('urbanismos/show?id='.$nuevosurb->getId()) ?>"><?php echo $nuevosurb->getId() ?></a></td>
      <td><?php echo $nuevosurb->getEstado() ?></td>
      <td><?php echo $nuevosurb->getNombre() ?></td>
      <td><?php echo $nuevosurb->getResponsable() ?></td>
      <td><?php echo $nuevosurb->getAdultosM() ?></td>
      <td><?php echo $nuevosurb->getAdultosF() ?></td>
      <td><?php echo $nuevosurb->getAdultosT() ?></td>
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
  <a href="<?php echo url_for('urbanismos/new') ?>" class="link-blanco"> Nuevo </a>
</div>
