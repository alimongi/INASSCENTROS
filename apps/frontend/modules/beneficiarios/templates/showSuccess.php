<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $beneficiario->getId() ?></td>
    </tr>
    <tr>
      <th>Cedula:</th>
      <td><?php echo $beneficiario->getCi() ?></td>
    </tr>
    <tr>
      <th>Nombres:</th>
      <td><?php echo $beneficiario->getNombre() ?></td>
    </tr>
    <tr>
      <th>Apellidos:</th>
      <td><?php echo $beneficiario->getApellido() ?></td>
    </tr>
    <tr>
      <th>Fecha de Nacimiento:</th>
      <td><?php echo $beneficiario->getFnacimiento() ?></td>
    </tr>
    <tr>
      <th>Sexo:</th>
      <td><?php echo $beneficiario->getSexo() ?></td>
    </tr>
    <tr>
      <th>Estado Civil:</th>
      <td><?php echo $beneficiario->getEstadoCiv() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $beneficiario->getEstado() ?></td>
    </tr>
    <tr>
      <th>Municipio:</th>
      <td><?php echo $beneficiario->getMunicipio() ?></td>
    </tr>
    <tr>
      <th>Parroquia:</th>
      <td><?php echo $beneficiario->getParroquia() ?></td>
    </tr>
    <tr>
      <th>Dirección:</th>
      <td><?php echo $beneficiario->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Telefono Principal:</th>
      <td><?php echo $beneficiario->getTelf1() ?></td>
    </tr>
    <tr>
      <th>Telefono Opcional:</th>
      <td><?php echo $beneficiario->getTelf2() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $beneficiario->getMail1() ?></td>
    </tr>
    <tr>
      <th>Familiar:</th>
      <td><?php echo $beneficiario->getFamiliar() ?></td>
    </tr>
    <tr>
      <th>Telefono Familiar:</th>
      <td><?php echo $beneficiario->getTelfFam() ?></td>
    </tr>
    <tr>
      <th>Fallecido:</th>
      <td><?php echo $beneficiario->getFallecido() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $beneficiario->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $beneficiario->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />
<div class="boton_fin">
<a class="link-blanco" href="<?php echo url_for('beneficiarios/edit?id='.$beneficiario->getId()) ?>">Editar</a>
&nbsp;
</div>
<div class="boton_fin">
<a class="link-blanco" href="<?php echo url_for('beneficiarios/index') ?>">Volver</a>
</div>