<h1>Atencions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Beneficiario</th>
      <th>Centro</th>
      <th>Estado</th>
      <th>Social</th>
      <th>Salud</th>
      <th>User</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($atencions as $atencion): ?>
    <tr>
      <td><a href="<?php echo url_for('atenciones/show?id='.$atencion->getId()) ?>"><?php echo $atencion->getId() ?></a></td>
      <td><?php echo $atencion->getBeneficiario() ?></td>
      <td><?php echo $atencion->getCentro() ?></td>
      <td><?php echo $atencion->getEstado() ?></td>
      <td><?php echo $atencion->getSocial() ?></td>
      <td><?php echo $atencion->getSalud() ?></td>
      <td><?php echo $atencion->getUserId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('atenciones/new') ?>">New</a>
