<table>
  <tbody>
    <tr>
      <th>Identificador:</th>
      <td><?php echo $aldea->getId() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $aldea->getEstado() ?></td>
    </tr>
    <tr>
      <th>Municipio:</th>
      <td><?php echo $aldea->getMunicipio() ?></td>
    </tr>
    <tr>
      <th>Parroquia:</th>
      <td><?php echo $aldea->getParroquia() ?></td>
    </tr>
    <tr>
      <th>Dirección:</th>
      <td><?php echo $aldea->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Nombre de la Aldea:</th>
      <td><?php echo $aldea->getNombre() ?></td>
    </tr>
    <tr>
      <th>Nombre del Responsable de la Aldea:</th>
      <td><?php echo $aldea->getResponsable() ?></td>
    </tr>
    <tr>
      <th>Telefono principal:</th>
      <td><?php echo $aldea->getTelf1() ?></td>
    </tr>
    <tr>
      <th>Telefono opcional:</th>
      <td><?php echo $aldea->getTelf2() ?></td>
    </tr>
    <tr>
      <th>Email principal:</th>
      <td><?php echo $aldea->getMail1() ?></td>
    </tr>
    <tr>
      <th>Email opcional:</th>
      <td><?php echo $aldea->getMail2() ?></td>
    </tr>
    <tr>
      <th>Tipo de Centro:</th>
      <td><?php echo $aldea->getType() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos Salud:</th>
      <td><?php echo $aldea->getAdultosMsalud() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas Salud:</th>
      <td><?php echo $aldea->getAdultosFsalud() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos Social:</th>
      <td><?php echo $aldea->getAdultosMsocial() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas Social:</th>
      <td><?php echo $aldea->getAdultosFsocial() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos:</th>
      <td><?php echo $aldea->getAdultosM() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas:</th>
      <td><?php echo $aldea->getAdultosF() ?></td>
    </tr>
    <tr>
      <th>Total Adultos:</th>
      <td><?php echo $aldea->getAdultosT() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $aldea->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $aldea->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />
<div class="boton_fin">
<a class="link-blanco" href="<?php echo url_for('aldeas/edit?id='.$aldea->getId()) ?>">Editar</a>
&nbsp;
</div>
<div class="boton_fin">
<a class="link-blanco" href="<?php echo url_for('aldeas/index') ?>">Volver</a>
</div>