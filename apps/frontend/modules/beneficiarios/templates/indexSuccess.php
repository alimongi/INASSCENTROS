<h1>Lista de Beneficiarios</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Cedula</th>
      <th>Nombres</th>
      <th>Apellidoa</th>
      <th>Sexo</th>
      <th>Estado</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($beneficiarios as $beneficiario): ?>
    <tr>
      <td><a href="<?php echo url_for('beneficiarios/show?id='.$beneficiario->getId()) ?>"><?php echo $beneficiario->getId() ?></a></td>
      <td><?php echo $beneficiario->getCi() ?></td>
      <td><?php echo $beneficiario->getNombre() ?></td>
      <td><?php echo $beneficiario->getApellido() ?></td>
      <td><?php echo $beneficiario->getSexo() ?></td>
      <td><?php echo $beneficiario->getEstado() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<div class="boton_fin">
  <a href="<?php echo url_for('beneficiarios/new') ?> "class="link-blanco"> Nuevo </a>
</div>