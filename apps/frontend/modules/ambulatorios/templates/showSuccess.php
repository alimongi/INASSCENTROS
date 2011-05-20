<table>
  <tbody>
    <tr>
      <th>Identificador:</th>
      <td><?php echo $ambulatorio->getId() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $ambulatorio->getEstado() ?></td>
    </tr>
    <tr>
      <th>Municipio:</th>
      <td><?php echo $ambulatorio->getMunicipio() ?></td>
    </tr>
    <tr>
      <th>Parroquia:</th>
      <td><?php echo $ambulatorio->getParroquia() ?></td>
    </tr>
    <tr>
      <th>Dirección:</th>
      <td><?php echo $ambulatorio->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Nombre del Centro:</th>
      <td><?php echo $ambulatorio->getNombre() ?></td>
    </tr>
    <tr>
      <th>Nombre del Responsable del Centro:</th>
      <td><?php echo $ambulatorio->getResponsable() ?></td>
    </tr>
    <tr>
      <th>Telefono principal:</th>
      <td><?php echo $ambulatorio->getTelf1() ?></td>
    </tr>
    <tr>
      <th>Telefono opcional:</th>
      <td><?php echo $ambulatorio->getTelf2() ?></td>
    </tr>
    <tr>
      <th>Email principal:</th>
      <td><?php echo $ambulatorio->getMail1() ?></td>
    </tr>
    <tr>
      <th>Email opcional:</th>
      <td><?php echo $ambulatorio->getMail2() ?></td>
    </tr>
    <tr>
      <th>Tipo de Centro:</th>
      <td><?php echo $ambulatorio->getType() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos Salud:</th>
      <td><?php echo $ambulatorio->getAdultosMsalud() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas Salud:</th>
      <td><?php echo $ambulatorio->getAdultosFsalud() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos Social:</th>
      <td><?php echo $ambulatorio->getAdultosMsocial() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas Social:</th>
      <td><?php echo $ambulatorio->getAdultosFsocial() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos:</th>
      <td><?php echo $ambulatorio->getAdultosM() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas:</th>
      <td><?php echo $ambulatorio->getAdultosF() ?></td>
    </tr>
    <tr>
      <th>Total Adultos:</th>
      <td><?php echo $ambulatorio->getAdultosT() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $ambulatorio->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $ambulatorio->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />
<div class="boton_fin">
<a class="link-blanco" href="<?php echo url_for('ambulatorios/edit?id='.$ambulatorio->getId()) ?>">Editar</a>
&nbsp;
</div>
<div class="boton_fin">
<a class="link-blanco" href="<?php echo url_for('ambulatorios/index') ?>">Volver</a>
</div>