<h1>Listado de Comunas en Construcción</h1>


<table border="0" cellpadding="0" cellspacing="0">
 <caption><?php echo $resultados ?> Comunas en <?php echo $paginas ?> p&aacute;gina(s)</caption>

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
    <?php foreach ($comunasconsts as $comunasconst): ?>
    <tr class="tabla_td">
      <td><a href="<?php echo url_for('comunas/show?id='.$comunasconst->getId()) ?>"><?php echo $comunasconst->getId() ?></a></td>
      <td><?php echo $comunasconst->getEstado() ?></td>
      <td><?php echo $comunasconst->getNombre() ?></td>
      <td><?php echo $comunasconst->getResponsable() ?></td>
      <td><?php echo $comunasconst->getAdultosM() ?></td>
      <td><?php echo $comunasconst->getAdultosF() ?></td>
      <td><?php echo $comunasconst->getAdultosT() ?></td>
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
  <a href="<?php echo url_for('comunas/new') ?>" class="link-blanco"> Nuevo </a>
</div>
