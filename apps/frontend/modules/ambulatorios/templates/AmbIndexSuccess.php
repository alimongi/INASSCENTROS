<?php use_javascript('highcharts')?>
<h1>Listado de Centros</h1>

<h2>Atención por Salud</h2>
<table border="0" cellpadding="0" cellspacing="0">
  <thead>
    <tr class="tabla_th">
<!--      <th> Identificador </th>-->
      <th> Estado </th>
      <th> Nombre </th>
<!--      <th> Responsable </th>-->
      <th> Adultos Atención Salud </th>
      <th> Adultas Atención Salud </th>
    </tr>
  </thead>

  <tbody>
    <?php  $pormambulatorioS = 0; ?>
    <?php  $porfambulatorioS = 0; ?>
    <?php  $contambulatorio = 0; ?>
    <?php  $totabuelosambulatorioS = 0; ?>
    <?php  $totabuelasambulatorioS = 0; ?>
    <?php  $totgloambulatorioS = 0; ?>
    <?php foreach ($ambulatorios as $ambulatorio): ?>
    <tr class="tabla_td">
    <?php ++$contambulatorio; ?>
<!--      <td><a><?php echo $ambulatorio->getId() ?></a></td>-->
      <td><?php echo $ambulatorio->getEstado() ?></td>
      <td><?php echo $ambulatorio->getNombre() ?></td>
<!--      <td><?php echo $ambulatorio->getResponsable() ?></td>-->
      <td><?php echo $ambulatorio->getAdultosMsalud() ?></td>
      <td><?php echo $ambulatorio->getAdultosFsalud() ?></td>
    </tr>
    <?php $totabuelosambulatorioS = $totabuelosambulatorioS + $ambulatorio->getAdultosMsalud(); ?>
    <?php $totabuelasambulatorioS = $totabuelasambulatorioS + $ambulatorio->getAdultosFsalud(); ?>
    <?php endforeach; ?>
    <?php $totgloambulatorioS = $totabuelasambulatorioS + $totabuelosambulatorioS; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Centros Ambulatorios:", " ", $contambulatorio; ?></td>
    <?php $pormambulatorioS = ($totabuelosambulatorioS * 100) / $totgloambulatorioS; ?>
    <td><?php echo "Total abuelos Atención Salud:", " ", $totabuelosambulatorioS, " -- ", number_format($pormambulatorioS, 2), "%"; ?></td>
    <?php $porfambulatorioS = ($totabuelasambulatorioS * 100) / $totgloambulatorioS; ?>
    <td><?php echo "Total abuelas Atención Salud:", " ", $totabuelasambulatorioS, " -- ", number_format($porfambulatorioS, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Salud:", " ", $totgloambulatorioS; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasambulatorioS.','.$totabuelosambulatorioS.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>

<h2>Atención por Social</h2>
<table border="0" cellpadding="0" cellspacing="0">
  <thead>
    <tr class="tabla_th">
<!--      <th> Identificador </th>-->
      <th> Estado </th>
      <th> Nombre </th>
<!--      <th> Responsable </th>-->
      <th> Adultos Atención Social </th>
      <th> Adultas Atención Social </th>
    </tr>
  </thead>

  <tbody>
    <?php  $pormambulatorioSo = 0; ?>
    <?php  $porfambulatorioSo = 0; ?>
    <?php  $contambulatorio = 0; ?>
    <?php  $totabuelosambulatorioSo = 0; ?>
    <?php  $totabuelasambulatorioSo = 0; ?>
    <?php  $totgloambulatorioSo = 0; ?>
    <?php foreach ($ambulatorios as $ambulatorio): ?>
    <tr class="tabla_td">
    <?php ++$contambulatorio; ?>
<!--      <td><a><?php echo $ambulatorio->getId() ?></a></td>-->
      <td><?php echo $ambulatorio->getEstado() ?></td>
      <td><?php echo $ambulatorio->getNombre() ?></td>
<!--      <td><?php echo $ambulatorio->getResponsable() ?></td>-->
      <td><?php echo $ambulatorio->getAdultosMsocial() ?></td>
      <td><?php echo $ambulatorio->getAdultosFsocial() ?></td>
    </tr>
    <?php $totabuelosambulatorioSo = $totabuelosambulatorioSo + $ambulatorio->getAdultosMsocial(); ?>
    <?php $totabuelasambulatorioSo = $totabuelasambulatorioSo + $ambulatorio->getAdultosFsocial(); ?>
    <?php endforeach; ?>
    <?php $totgloambulatorioSo = $totabuelasambulatorioSo + $totabuelosambulatorioSo; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Centros Ambulatorios:", " ", $contambulatorio; ?></td>
    <?php $pormambulatorioSo = ($totabuelosambulatorioSo * 100) / $totgloambulatorioSo; ?>
    <td><?php echo "Total abuelos Atención Social:", " ", $totabuelosambulatorioSo, " -- ", number_format($pormambulatorioSo, 2), "%"; ?></td>
    <?php $porfambulatorioSo = ($totabuelasambulatorioSo * 100) / $totgloambulatorioSo; ?>
    <td><?php echo "Total abuelas Atención Social:", " ", $totabuelasambulatorioSo, " -- ", number_format($porfambulatorioSo, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Social:", " ", $totgloambulatorioSo; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasambulatorioSo.','.$totabuelosambulatorioSo.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormambulatorio = 0; ?>
    <?php  $porfambulatorio = 0; ?>
    <?php  $contambulatorio = 0; ?>
    <?php  $totabuelosambulatorio = 0; ?>
    <?php  $totabuelasambulatorio = 0; ?>
    <?php  $totgloambulatorio = 0; ?>
    <?php foreach ($ambulatorios as $ambulatorio): ?>
    <tr class="tabla_td">
    <?php ++$contambulatorio; ?>
<!--      <td><a><?php echo $ambulatorio->getId() ?></a></td>-->
      <td><?php echo $ambulatorio->getEstado() ?></td>
      <td><?php echo $ambulatorio->getNombre() ?></td>
<!--      <td><?php echo $ambulatorio->getResponsable() ?></td>-->
      <td><?php echo $ambulatorio->getAdultosM() ?></td>
      <td><?php echo $ambulatorio->getAdultosF() ?></td>
      <td><?php echo $ambulatorio->getAdultosT() ?></td>
    </tr>
    <?php $totabuelosambulatorio = $totabuelosambulatorio + $ambulatorio->getAdultosM(); ?>
    <?php $totabuelasambulatorio = $totabuelasambulatorio + $ambulatorio->getAdultosF(); ?>
    <?php endforeach; ?>
    <?php $totgloambulatorio = $totabuelasambulatorio + $totabuelosambulatorio; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Centros Ambulatorios:", " ", $contambulatorio; ?></td>
    <?php $pormambulatorio = ($totabuelosambulatorio * 100) / $totgloambulatorio; ?>
    <td><?php echo "Total abuelos en Centros Ambulatorios:", " ", $totabuelosambulatorio, " -- ", number_format($pormambulatorio, 2), "%"; ?></td>
    <?php $porfambulatorio = ($totabuelasambulatorio * 100) / $totgloambulatorio; ?>
    <td><?php echo "Total abuelas en Centros Ambulatorios:", " ", $totabuelasambulatorio, " -- ", number_format($porfambulatorio, 2), "%"; ?></td>
    <td><?php echo "Total Global abuelos en Centros Ambulatorios:", " ", $totgloambulatorio; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasambulatorio.','.$totabuelosambulatorio.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>

<?php $datos = implode(',', array($totabuelosambulatorioS, $totabuelasambulatorioS, $totabuelosambulatorioSo, $totabuelasambulatorioSo)); ?>

<script type="text/javascript">
    var chart

    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container'
            },
            title: {
                text: 'Atención en Ambulatorios'
            },
            xAxis: {
                categories: ['Adultos en Salud', 'Adultas en Salud', 'Adultos en Social', 'Adultas en Social']
            },
            tooltip: {
                formatter: function() {
                    var s;
                    if (this.point.name) { // the pie chart
                        s = ''+
                            this.point.name +': '+ this.y +' Adultos(as)';
                    } else {
                        s = ''+
                            this.x  +': '+ this.y;
                    }
                    return s;
                }
            },
            labels: {
                items: [{
                        html: 'Total en Atenciones',
                        style: {
                            left: '40px',
                            top: '8px',
                            color: 'black'
                        }
                    }]
            },
            series: [{
                    type: 'column',
                    name: 'Ambulatorios',
                    data: [<?php echo $datos; ?>]
                }, {
                    type: 'pie',
                    name: 'Total consumption',
                    data: [{
                            name: 'Ambulatorios',
                            y: <?php echo $totgloambulatorio; ?>/*,
                            color: highchartsOptions.colors[0]*/ // Jane's color
                        }],
                    center: [100, 80],
                    size: 100,
                    showInLegend: false,
                    dataLabels: {
                        enabled: false
                    }
                }]
        });


    });
</script>

<div id="container" style="width: 100%; height: 400px"></div>