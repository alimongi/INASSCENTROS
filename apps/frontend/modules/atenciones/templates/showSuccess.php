<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $atencion->getId() ?></td>
    </tr>
    <tr>
      <th>Beneficiario:</th>
      <td><?php echo $atencion->getBeneficiario() ?></td>
    </tr>
    <tr>
      <th>Centro:</th>
      <td><?php echo $atencion->getCentro() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $atencion->getEstado() ?></td>
    </tr>
    <tr>
      <th>Social:</th>
      <td><?php echo $atencion->getSocial() ?></td>
    </tr>
    <tr>
      <th>Salud:</th>
      <td><?php echo $atencion->getSalud() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $atencion->getUserId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('atenciones/edit?id='.$atencion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('atenciones/index') ?>">List</a>
