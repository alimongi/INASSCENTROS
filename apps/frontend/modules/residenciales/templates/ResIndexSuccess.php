<?php use_javascript('highcharts')?>
<h1>Listado de Centros</h1>
<!--<a href="<?php echo url_for('main/ResIndex?formato=excel') ?>">Excel</a>-->
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
    <?php  $pormresidencialS = 0; ?>
    <?php  $porfresidencialS = 0; ?>
    <?php $contresidencial = 0; ?>
    <?php  $totabuelosresidencialS = 0; ?>
    <?php  $totabuelasresidencialS = 0; ?>
    <?php  $totgloresidencialS = 0; ?>
    <?php foreach ($residenciales as $residencial): ?>
    <?php ++$contresidencial; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $residencial->getId() ?></a></td>-->
      <td><?php echo $residencial->getEstado() ?></td>
      <td><?php echo $residencial->getNombre() ?></td>
<!--      <td><?php echo $residencial->getResponsable() ?></td>-->
      <td><?php echo $residencial->getAdultosMsalud() ?></td>
      <td><?php echo $residencial->getAdultosFsalud() ?></td>
     </tr>
    <?php $totabuelosresidencialS = $totabuelosresidencialS + $residencial->getAdultosMsalud(); ?>
    <?php $totabuelasresidencialS = $totabuelasresidencialS + $residencial->getAdultosFsalud(); ?>
    <?php endforeach; ?>
    <?php $totgloresidencialS = $totabuelasresidencialS + $totabuelosresidencialS; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Centros Residenciales:", " ", $contresidencial; ?></td>
    <?php $pormresidencialS = ($totabuelosresidencialS * 100) / $totgloresidencialS; ?>
    <td><?php echo "Total abuelos Atención Salud:", " ", $totabuelosresidencialS, " -- ", number_format($pormresidencialS, 2), "%"; ?></td>
    <?php $porfresidencialS = ($totabuelasresidencialS * 100) / $totgloresidencialS; ?>
    <td><?php echo "Total abuelas Atención Salud:", " ", $totabuelasresidencialS, " -- ", number_format($porfresidencialS, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Salud:", " ", $totgloresidencialS; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasresidencialS.','.$totabuelosresidencialS.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormresidencialSo = 0; ?>
    <?php  $porfresidencialSo = 0; ?>
    <?php $contresidencial = 0; ?>
    <?php  $totabuelosresidencialSo = 0; ?>
    <?php  $totabuelasresidencialSo = 0; ?>
    <?php  $totgloresidencialSo = 0; ?>
    <?php foreach ($residenciales as $residencial): ?>
    <?php ++$contresidencial; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $residencial->getId() ?></a></td>-->
      <td><?php echo $residencial->getEstado() ?></td>
      <td><?php echo $residencial->getNombre() ?></td>
<!--      <td><?php echo $residencial->getResponsable() ?></td>-->
      <td><?php echo $residencial->getAdultosMsocial() ?></td>
      <td><?php echo $residencial->getAdultosFsocial() ?></td>
     </tr>
    <?php $totabuelosresidencialSo = $totabuelosresidencialSo + $residencial->getAdultosMsocial(); ?>
    <?php $totabuelasresidencialSo = $totabuelasresidencialSo + $residencial->getAdultosFsocial(); ?>
    <?php endforeach; ?>
    <?php $totgloresidencialSo = $totabuelasresidencialSo + $totabuelosresidencialSo; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Centros Residenciales:", " ", $contresidencial; ?></td>
    <?php $pormresidencialSo = ($totabuelosresidencialSo * 100) / $totgloresidencialSo; ?>
    <td><?php echo "Total abuelos Atención Social:", " ", $totabuelosresidencialSo, " -- ", number_format($pormresidencialSo, 2), "%"; ?></td>
    <?php $porfresidencialSo = ($totabuelasresidencialSo * 100) / $totgloresidencialSo; ?>
    <td><?php echo "Total abuelas Atención Social:", " ", $totabuelasresidencialSo, " -- ", number_format($porfresidencialSo, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Social:", " ", $totgloresidencialSo; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasresidencialSo.','.$totabuelosresidencialSo.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormresidencial = 0; ?>
    <?php  $porfresidencial = 0; ?>
    <?php $contresidencial = 0; ?>
    <?php  $totabuelosresidencial = 0; ?>
    <?php  $totabuelasresidencial = 0; ?>
    <?php  $totgloresidencial = 0; ?>
    <?php foreach ($residenciales as $residencial): ?>
    <?php ++$contresidencial; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $residencial->getId() ?></a></td>-->
      <td><?php echo $residencial->getEstado() ?></td>
      <td><?php echo $residencial->getNombre() ?></td>
<!--      <td><?php echo $residencial->getResponsable() ?></td>-->
      <td><?php echo $residencial->getAdultosM() ?></td>
      <td><?php echo $residencial->getAdultosF() ?></td>
      <td><?php echo $residencial->getAdultosT() ?></td>
    </tr>
    <?php $totabuelosresidencial = $totabuelosresidencial + $residencial->getAdultosM(); ?>
    <?php $totabuelasresidencial = $totabuelasresidencial + $residencial->getAdultosF(); ?>
    <?php endforeach; ?>
    <?php $totgloresidencial = $totabuelasresidencial + $totabuelosresidencial; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Centros Residenciales:", " ", $contresidencial; ?></td>
    <?php $pormresidencial = ($totabuelosresidencial * 100) / $totgloresidencial; ?>
    <td><?php echo "Total abuelos en Centros Residenciales:", " ", $totabuelosresidencial, " -- ", number_format($pormresidencial, 2), "%"; ?></td>
    <?php $porfresidencial = ($totabuelasresidencial * 100) / $totgloresidencial; ?>
    <td><?php echo "Total abuelas en Centros Residenciales:", " ", $totabuelasresidencial, " -- ", number_format($porfresidencial, 2), "%"; ?></td>
    <td><?php echo "Total Global abuelos en Centros Residenciales:", " ", $totgloresidencial; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasresidencial.','.$totabuelosresidencial.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>

<?php $datos = implode(',', array($totabuelosresidencialS, $totabuelasresidencialS, $totabuelosresidencialSo, $totabuelasresidencialSo)); ?>
<?php $average = ($totabuelosresidencialS + $totabuelasresidencialS + $totabuelosresidencialSo + $totabuelasresidencialSo) / 4; ?>

<script type="text/javascript">
    var chart
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container'
            },
            title: {
                text: 'Atención en Residenciales'
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
                    name: 'Residenciales',
                    data: [<?php echo $datos; ?>]
                }, {
                    type: 'pie',
                    name: 'Total consumption',
                    data: [{
                            name: 'Residenciales',
                            y: <?php echo $totgloresidencial; ?>/*,
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