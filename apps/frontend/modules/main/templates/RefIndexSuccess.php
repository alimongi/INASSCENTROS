<h1>Listado de Refugios</h1>

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
    <?php  $pormrefugioS = 0; ?>
    <?php  $porfrefugioS = 0; ?>
    <?php  $contrefugio = 0; ?>
    <?php  $totabuelosrefugioS = 0; ?>
    <?php  $totabuelasrefugioS = 0; ?>
    <?php  $totglorefugioS = 0; ?>
    <?php foreach ($refugios as $refugio): ?>
    <?php ++$contrefugio; ?>
    <tr class="tabla_td" >
<!--      <td><a><?php echo $refugio->getId() ?></a></td>-->
      <td><?php echo $refugio->getEstado() ?></td>
      <td><?php echo $refugio->getNombre() ?></td>
<!--      <td><?php echo $refugio->getResponsable() ?></td>-->
      <td><?php echo $refugio->getAdultosMsalud() ?></td>
      <td><?php echo $refugio->getAdultosFsalud() ?></td>
    </tr>
    <?php $totabuelosrefugioS = $totabuelosrefugioS + $refugio->getAdultosMsalud(); ?>
    <?php $totabuelasrefugioS = $totabuelasrefugioS + $refugio->getAdultosFsalud(); ?>
    <?php endforeach; ?>
    <?php $totglorefugioS = $totabuelasrefugioS + $totabuelosrefugioS; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Refugios:", " ", $contrefugio; ?></td>
    <?php $pormrefugioS = ($totabuelosrefugioS * 100) / $totglorefugioS; ?>
    <td><?php echo "Total abuelos Atención Salud:", " ", $totabuelosrefugioS, " -- ", number_format($pormrefugioS, 2), "%"; ?></td>
    <?php $porfrefugioS = ($totabuelasrefugioS * 100) / $totglorefugioS; ?>
    <td><?php echo "Total abuelas Atención Salud:", " ", $totabuelasrefugioS, " -- ", number_format($porfrefugioS, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Salud:", " ", $totglorefugioS; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasrefugioS.','.$totabuelosrefugioS.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>

<h2>Atención por Social</h2>
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
    <?php  $pormrefugioSo = 0; ?>
    <?php  $porfrefugioSo = 0; ?>
    <?php  $contrefugio = 0; ?>
    <?php  $totabuelosrefugioSo = 0; ?>
    <?php  $totabuelasrefugioSo = 0; ?>
    <?php  $totglorefugioSo = 0; ?>
    <?php foreach ($refugios as $refugio): ?>
    <?php ++$contrefugio; ?>
    <tr class="tabla_td" >
<!--      <td><a><?php echo $refugio->getId() ?></a></td>-->
      <td><?php echo $refugio->getEstado() ?></td>
      <td><?php echo $refugio->getNombre() ?></td>
<!--      <td><?php echo $refugio->getResponsable() ?></td>-->
      <td><?php echo $refugio->getAdultosMsocial() ?></td>
      <td><?php echo $refugio->getAdultosFsocial() ?></td>
    </tr>
    <?php $totabuelosrefugioSo = $totabuelosrefugioSo + $refugio->getAdultosMsocial(); ?>
    <?php $totabuelasrefugioSo = $totabuelasrefugioSo + $refugio->getAdultosFsocial(); ?>
    <?php endforeach; ?>
    <?php $totglorefugioSo = $totabuelasrefugioSo + $totabuelosrefugioSo; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Refugios:", " ", $contrefugio; ?></td>
    <?php $pormrefugioSo = ($totabuelosrefugioSo * 100) / $totglorefugioSo; ?>
    <td><?php echo "Total abuelos Atención Social:", " ", $totabuelosrefugioSo, " -- ", number_format($pormrefugioSo, 2), "%"; ?></td>
    <?php $porfrefugioSo = ($totabuelasrefugioSo * 100) / $totglorefugioSo; ?>
    <td><?php echo "Total abuelas Atención Social:", " ", $totabuelasrefugioSo, " -- ", number_format($porfrefugioSo, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Social:", " ", $totglorefugioSo; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasrefugioSo.','.$totabuelosrefugioSo.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormrefugio = 0; ?>
    <?php  $porfrefugio = 0; ?>
    <?php  $contrefugio = 0; ?>
    <?php  $totabuelosrefugio = 0; ?>
    <?php  $totabuelasrefugio = 0; ?>
    <?php  $totglorefugio = 0; ?>
    <?php foreach ($refugios as $refugio): ?>
    <?php ++$contrefugio; ?>
    <tr class="tabla_td" >
<!--      <td><a><?php echo $refugio->getId() ?></a></td>-->
      <td><?php echo $refugio->getEstado() ?></td>
      <td><?php echo $refugio->getNombre() ?></td>
<!--      <td><?php echo $refugio->getResponsable() ?></td>-->
      <td><?php echo $refugio->getAdultosM() ?></td>
      <td><?php echo $refugio->getAdultosF() ?></td>
      <td><?php echo $refugio->getAdultosT() ?></td>
    </tr>
    <?php $totabuelosrefugio = $totabuelosrefugio + $refugio->getAdultosM(); ?>
    <?php $totabuelasrefugio = $totabuelasrefugio + $refugio->getAdultosF(); ?>
    <?php endforeach; ?>
    <?php $totglorefugio = $totabuelasrefugio + $totabuelosrefugio; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Refugios:", " ", $contrefugio; ?></td>
    <?php $pormrefugio = ($totabuelosrefugio * 100) / $totglorefugio; ?>
    <td><?php echo "Total abuelos en Refugios:", " ", $totabuelosrefugio, " -- ", number_format($pormrefugio, 2), "%"; ?></td>
    <?php $porfrefugio = ($totabuelasrefugio * 100) / $totglorefugio; ?>
    <td><?php echo "Total abuelas en Refugios:", " ", $totabuelasrefugio, " -- ", number_format($porfrefugio, 2), "%"; ?></td>
    <td><?php echo "Total Global abuelos en Refugios:", " ", $totglorefugio; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasrefugio.','.$totabuelosrefugio.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>