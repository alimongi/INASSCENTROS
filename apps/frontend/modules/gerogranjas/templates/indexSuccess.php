<h1>Listado de Gerogranjas</h1>


<table border="0" cellpadding="0" cellspacing="0">
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
    <?php foreach ($gerogranjas as $gerogranja): ?>
    <tr class="tabla_td">
      <td><a href="<?php echo url_for('gerogranjas/show?id='.$gerogranja->getId()) ?>"><?php echo $gerogranja->getId() ?></a></td>
      <td><?php echo $gerogranja->getEstado() ?></td>
      <td><?php echo $gerogranja->getNombre() ?></td>
      <td><?php echo $gerogranja->getResponsable() ?></td>
      <td><?php echo $gerogranja->getAdultosMsalud() ?></td>
      <td><?php echo $gerogranja->getAdultosFsalud() ?></td>
      <td><?php echo $gerogranja->getAdultosMsocial() ?></td>
      <td><?php echo $gerogranja->getAdultosFsocial() ?></td>
      <td><?php echo $gerogranja->getAdultosM() ?></td>
      <td><?php echo $gerogranja->getAdultosF() ?></td>
      <td><?php echo $gerogranja->getAdultosT() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="boton_fin">
  <a href="<?php echo url_for('gerogranjas/new') ?>" class="link-blanco"> Nuevo </a>
</div>
