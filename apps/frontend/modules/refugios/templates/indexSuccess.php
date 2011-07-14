<h1>Listado de Refugios</h1>

<table border="0" cellpadding="0" cellspacing="0">
    <caption><?php echo $resultados ?> Refugios en <?php echo $paginas ?> p&aacute;gina(s)</caption>
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
    <?php foreach ($refugios as $refugio): ?>
    <tr class="tabla_td" >
      <td><a href="<?php echo url_for('refugios/show?id='.$refugio->getId()) ?>"><?php echo $refugio->getId() ?></a></td>
      <td><?php echo $refugio->getEstado() ?></td>
      <td><?php echo $refugio->getNombre() ?></td>
      <td><?php echo $refugio->getResponsable() ?></td>
      <td><?php echo $refugio->getAdultosM() ?></td>
      <td><?php echo $refugio->getAdultosF() ?></td>
      <td><?php echo $refugio->getAdultosT() ?></td>
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
  <a href="<?php echo url_for('refugios/new') ?>" class="link-blanco" > Nuevo </a>
</div>