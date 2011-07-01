<h1>Listado de Aldeas</h1>


<table border="0" cellpadding="0" cellspacing="0">
 <caption><?php echo $resultados ?> Aldeas en <?php echo $paginas ?> p&aacute;gina(s)</caption>
  <thead>
    <tr class="tabla_th">
      <th> Identificador </th>
      <th> Estado </th>
      <th> Nombre </th>
      <th> Responsable </th>
      <th> Adultos Atendidos Salud </th>
      <th> Adultas Atendidas Salud </th>
      <th> Adultos Atendidos Social </th>
      <th> Adultas Atendidas Social </th>
      <th> Adultos Atendidos </th>
      <th> Adultas Atendidas </th>
      <th> Total Adultos </th>
    </tr>
  </thead>
  
  <tbody>
    <?php foreach ($aldeas as $aldea): ?>
    <tr class="tabla_td">
      <td><a href="<?php echo url_for('aldeas/show?id='.$aldea->getId()) ?>"><?php echo $aldea->getId() ?></a></td>
      <td><?php echo $aldea->getEstado() ?></td>
      <td><?php echo $aldea->getNombre() ?></td>
      <td><?php echo $aldea->getResponsable() ?></td>
      <td><?php echo $aldea->getAdultosMsalud() ?></td>
      <td><?php echo $aldea->getAdultosFsalud() ?></td>
      <td><?php echo $aldea->getAdultosMsocial() ?></td>
      <td><?php echo $aldea->getAdultosFsocial() ?></td>
      <td><?php echo $aldea->getAdultosM() ?></td>
      <td><?php echo $aldea->getAdultosF() ?></td>
      <td><?php echo $aldea->getAdultosT() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php if($haveToPaginate): ?>
<?php echo html_entity_decode($menu) ?>
<?php endif;?>

<div class="boton_fin">
  <a href="<?php echo url_for('aldeas/new') ?>" class="link-blanco"> Nuevo </a>
</div>
