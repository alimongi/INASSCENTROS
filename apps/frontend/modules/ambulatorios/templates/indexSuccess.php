<h1>Listado de Centros Ambulatorios</h1>


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
    <?php foreach ($ambulatorios as $ambulatorio): ?>
    <tr class="tabla_td">
      <td><a href="<?php echo url_for('ambulatorios/show?id='.$ambulatorio->getId()) ?>"><?php echo $ambulatorio->getId() ?></a></td>
      <td><?php echo $ambulatorio->getEstado() ?></td>
      <td><?php echo $ambulatorio->getNombre() ?></td>
      <td><?php echo $ambulatorio->getResponsable() ?></td>
      <td><?php echo $ambulatorio->getAdultosMsalud() ?></td>
      <td><?php echo $ambulatorio->getAdultosFsalud() ?></td>
      <td><?php echo $ambulatorio->getAdultosMsocial() ?></td>
      <td><?php echo $ambulatorio->getAdultosFsocial() ?></td>
      <td><?php echo $ambulatorio->getAdultosM() ?></td>
      <td><?php echo $ambulatorio->getAdultosF() ?></td>
      <td><?php echo $ambulatorio->getAdultosT() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="boton_fin">
  <a href="<?php echo url_for('ambulatorios/new') ?>" class="link-blanco"> Nuevo </a>
</div>
