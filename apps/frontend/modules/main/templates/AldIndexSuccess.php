<h1>Listado de Aldeas</h1>

<h2>Atención por Salud</h2>
<table border="0" cellpadding="0" cellspacing="0">
  <thead>
    <tr class="tabla_th">
<!--      <th> Identificador </th>-->
      <th> Estado </th>
      <th> Nombre </th>
<!--      <th> Responsable </th>-->
      <th> Adultos Atención Salud</th>
      <th> Adultas Atención Salud</th>
    </tr>
  </thead>

  <tbody>
    <?php  $pormaldeaS = 0; ?>
    <?php  $porfaldeaS = 0; ?>
    <?php  $contaldea = 0; ?>
    <?php  $totabuelosaldeaS = 0; ?>
    <?php  $totabuelasaldeaS = 0; ?>
    <?php  $totgloaldeaS = 0; ?>
    <?php foreach ($aldeas as $aldea): ?>
    <?php ++$contaldea; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $aldea->getId() ?></a></td>-->
      <td><?php echo $aldea->getEstado() ?></td>
      <td><?php echo $aldea->getNombre() ?></td>
<!--      <td><?php echo $aldea->getResponsable() ?></td>-->
      <td><?php echo $aldea->getAdultosMsalud() ?></td>
      <td><?php echo $aldea->getAdultosFsalud() ?></td>
    </tr>
    <?php $totabuelosaldeaS = $totabuelosaldeaS + $aldea->getAdultosMsalud(); ?>
    <?php $totabuelasaldeaS = $totabuelasaldeaS + $aldea->getAdultosFsalud(); ?>
    <?php endforeach; ?>
    <?php $totgloaldeaS = $totabuelasaldeaS + $totabuelosaldeaS; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Aldeas:", " ", $contaldea; ?></td>
    <?php $pormaldeaS = ($totabuelosaldeaS * 100) / $totgloaldeaS; ?>
    <td><?php echo "Total abuelos Atención Salud:", " ", $totabuelosaldeaS, " -- ", number_format($pormaldeaS, 2), "%"; ?></td>
    <?php $porfaldeaS = ($totabuelasaldeaS * 100) / $totgloaldeaS; ?>
    <td><?php echo "Total abuelas Atención Salud:", " ", $totabuelasaldeaS, " -- ", number_format($porfaldeaS, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Salud:", " ", $totgloaldeaS; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasaldeaS.','.$totabuelosaldeaS.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>


<h2>Atención por Social</h2>
<table border="0" cellpadding="0" cellspacing="0">
  <thead>
    <tr class="tabla_th">
<!--      <th> Identificador </th>-->
      <th> Estado </th>
      <th> Nombre </th>
<!--      <th> Responsable </th>-->
      <th> Adultos Atención Social</th>
      <th> Adultas Atención Social</th>
    </tr>
  </thead>

  <tbody>
    <?php  $pormaldeaSo = 0; ?>
    <?php  $porfaldeaSo = 0; ?>
    <?php  $contaldea = 0; ?>
    <?php  $totabuelosaldeaSo = 0; ?>
    <?php  $totabuelasaldeaSo = 0; ?>
    <?php  $totgloaldeaSo = 0; ?>
    <?php foreach ($aldeas as $aldea): ?>
    <?php ++$contaldea; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $aldea->getId() ?></a></td>-->
      <td><?php echo $aldea->getEstado() ?></td>
      <td><?php echo $aldea->getNombre() ?></td>
<!--      <td><?php echo $aldea->getResponsable() ?></td>-->
      <td><?php echo $aldea->getAdultosMsocial() ?></td>
      <td><?php echo $aldea->getAdultosFsocial() ?></td>
    </tr>
    <?php $totabuelosaldeaSo = $totabuelosaldeaSo + $aldea->getAdultosMsocial(); ?>
    <?php $totabuelasaldeaSo = $totabuelasaldeaSo + $aldea->getAdultosFsocial(); ?>
    <?php endforeach; ?>
    <?php $totgloaldeaSo = $totabuelasaldeaSo + $totabuelosaldeaSo; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Aldeas:", " ", $contaldea; ?></td>
    <?php $pormaldeaSo = ($totabuelosaldeaSo * 100) / $totgloaldeaSo; ?>
    <td><?php echo "Total abuelos Atención Social:", " ", $totabuelosaldeaSo, " -- ", number_format($pormaldeaSo, 2), "%"; ?></td>
    <?php $porfaldeaSo = ($totabuelasaldeaSo * 100) / $totgloaldeaSo; ?>
    <td><?php echo "Total abuelas Atención Social:", " ", $totabuelasaldeaSo, " -- ", number_format($porfaldeaSo, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Social:", " ", $totgloaldeaSo; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasaldeaSo.','.$totabuelosaldeaSo.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>


<h2>Atención Total</h2>
<table border="0" cellpadding="0" cellspacing="0">
  <thead>
    <tr class="tabla_th">
<!--      <th> Identificador </th>-->
      <th> Estado </th>
      <th> Nombre </th>
<!--      <th> Responsable </th>-->
      <th> Adultos Atendidos </th>
      <th> Adultas Atendidas </th>
      <th> Total Adultos </th>
    </tr>
  </thead>

  <tbody>
    <?php  $pormaldea = 0; ?>
    <?php  $porfaldea = 0; ?>
    <?php  $contaldea = 0; ?>
    <?php  $totabuelosaldea = 0; ?>
    <?php  $totabuelasaldea = 0; ?>
    <?php  $totgloaldea = 0; ?>
    <?php foreach ($aldeas as $aldea): ?>
    <?php ++$contaldea; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $aldea->getId() ?></a></td>-->
      <td><?php echo $aldea->getEstado() ?></td>
      <td><?php echo $aldea->getNombre() ?></td>
<!--      <td><?php echo $aldea->getResponsable() ?></td>-->
      <td><?php echo $aldea->getAdultosM() ?></td>
      <td><?php echo $aldea->getAdultosF() ?></td>
      <td><?php echo $aldea->getAdultosT() ?></td>
    </tr>
    <?php $totabuelosaldea = $totabuelosaldea + $aldea->getAdultosM(); ?>
    <?php $totabuelasaldea = $totabuelasaldea + $aldea->getAdultosF(); ?>
    <?php endforeach; ?>
    <?php $totgloaldea = $totabuelasaldea + $totabuelosaldea; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Aldeas:", " ", $contaldea; ?></td>
    <?php $pormaldea = ($totabuelosaldea * 100) / $totgloaldea; ?>
    <td><?php echo "Total abuelos en Aldeas:", " ", $totabuelosaldea, " -- ", number_format($pormaldea, 2), "%"; ?></td>
    <?php $porfaldea = ($totabuelasaldea * 100) / $totgloaldea; ?>
    <td><?php echo "Total abuelas en Aldeas:", " ", $totabuelasaldea, " -- ", number_format($porfaldea, 2), "%"; ?></td>
    <td><?php echo "Total Global abuelos en Aldeas:", " ", $totgloaldea; ?></td>
</tr>
</table>

<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasaldea.','.$totabuelosaldea.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>
