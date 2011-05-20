<table>
  <tbody>
    <tr>
      <th>Identificador:</th>
      <td><?php echo $residencial->getId() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $residencial->getEstado() ?></td>
    </tr>
    <tr>
      <th>Municipio:</th>
      <td><?php echo $residencial->getMunicipio() ?></td>
    </tr>
    <tr>
      <th>Parroquia:</th>
      <td><?php echo $residencial->getParroquia() ?></td>
    </tr>
    <tr>
      <th>Dirección:</th>
      <td><?php echo $residencial->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Nombre del Centro:</th>
      <td><?php echo $residencial->getNombre() ?></td>
    </tr>
    <tr>
      <th>Nombre del Responsable del Centro:</th>
      <td><?php echo $residencial->getResponsable() ?></td>
    </tr>
    <tr>
      <th>Telefono principal:</th>
      <td><?php echo $residencial->getTelf1() ?></td>
    </tr>
    <tr>
      <th>Telefono opcional:</th>
      <td><?php echo $residencial->getTelf2() ?></td>
    </tr>
    <tr>
      <th>Email principal:</th>
      <td><?php echo $residencial->getMail1() ?></td>
    </tr>
    <tr>
      <th>Email opcional:</th>
      <td><?php echo $residencial->getMail2() ?></td>
    </tr>
    <tr>
      <th>Tipo de Centro:</th>
      <td><?php echo $residencial->getType() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos Salud:</th>
      <td><?php echo $residencial->getAdultosMsalud() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas Salud:</th>
      <td><?php echo $residencial->getAdultosFsalud() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos Social:</th>
      <td><?php echo $residencial->getAdultosMsocial() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas Social:</th>
      <td><?php echo $residencial->getAdultosFsocial() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos:</th>
      <td><?php echo $residencial->getAdultosM() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas:</th>
      <td><?php echo $residencial->getAdultosF() ?></td>
    </tr>
    <tr>
      <th>Total Adultos:</th>
      <td><?php echo $residencial->getAdultosT() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $residencial->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $residencial->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />
<div class="boton_fin">
<a class="link-blanco" href="<?php echo url_for('residenciales/edit?id='.$residencial->getId()) ?>">Editar</a>
&nbsp;
</div>
<div class="boton_fin">
<a class="link-blanco" href="<?php echo url_for('residenciales/index') ?>">Volver</a>
</div>