<?php use_javascript('highcharts')?>
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
    <tr class="tabla_td">
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
    <td><?php echo "Total refugios:", " ", $contrefugio; ?></td>
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
      <th> Adultos Atención Social</th>
      <th> Adultas Atención Social</th>
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
    <tr class="tabla_td">
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
    <td><?php echo "Total refugios:", " ", $contrefugio; ?></td>
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


<h2>Atención Economica</h2>
<table border="0" cellpadding="0" cellspacing="0">
  <thead>
    <tr class="tabla_th">
<!--      <th> Identificador </th>-->
      <th> Estado </th>
      <th> Nombre </th>
<!--      <th> Responsable </th>-->
      <th> Adultos Atención Económica</th>
      <th> Adultas Atención Económica</th>
    </tr>
  </thead>

  <tbody>
    <?php  $pormrefugioE = 0; ?>
    <?php  $porfrefugioE = 0; ?>
    <?php  $contrefugio = 0; ?>
    <?php  $totabuelosrefugioE = 0; ?>
    <?php  $totabuelasrefugioE = 0; ?>
    <?php  $totglorefugioE = 0; ?>
    <?php foreach ($refugios as $refugio): ?>
    <?php ++$contrefugio; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $refugio->getId() ?></a></td>-->
      <td><?php echo $refugio->getEstado() ?></td>
      <td><?php echo $refugio->getNombre() ?></td>
<!--      <td><?php echo $refugio->getResponsable() ?></td>-->
      <td><?php echo $refugio->getAdultosMeconomico() ?></td>
      <td><?php echo $refugio->getAdultosFeconomico() ?></td>
    </tr>
    <?php $totabuelosrefugioE = $totabuelosrefugioE + $refugio->getAdultosMeconomico(); ?>
    <?php $totabuelasrefugioE = $totabuelasrefugioE + $refugio->getAdultosFeconomico(); ?>
    <?php endforeach; ?>
    <?php $totglorefugioE = $totabuelasrefugioE + $totabuelosrefugioE; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total refugios:", " ", $contrefugio; ?></td>
    <?php $pormrefugioE = ($totabuelosrefugioE * 100) / $totglorefugioE; ?>
    <td><?php echo "Total Abuelos Atención Económica:", " ", $totabuelosrefugioE, " -- ", number_format($pormrefugioE, 2), "%"; ?></td>
    <?php $porfrefugioS = ($totabuelasrefugioE * 100) / $totglorefugioE; ?>
    <td><?php echo "Total Abuelas Atención Económica:", " ", $totabuelasrefugioE, " -- ", number_format($porfrefugioS, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Económica:", " ", $totglorefugioE; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasrefugioE.','.$totabuelosrefugioE.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>


<h2>Atención Técnica</h2>
<table border="0" cellpadding="0" cellspacing="0">
  <thead>
    <tr class="tabla_th">
<!--      <th> Identificador </th>-->
      <th> Estado </th>
      <th> Nombre </th>
<!--      <th> Responsable </th>-->
      <th> Adultos Atención Técnica</th>
      <th> Adultas Atención Técnica</th>
    </tr>
  </thead>

  <tbody>
    <?php  $pormrefugioT = 0; ?>
    <?php  $porfrefugioT = 0; ?>
    <?php  $contrefugio = 0; ?>
    <?php  $totabuelosrefugioT = 0; ?>
    <?php  $totabuelasrefugioT = 0; ?>
    <?php  $totglorefugioT = 0; ?>
    <?php foreach ($refugios as $refugio): ?>
    <?php ++$contrefugio; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $refugio->getId() ?></a></td>-->
      <td><?php echo $refugio->getEstado() ?></td>
      <td><?php echo $refugio->getNombre() ?></td>
<!--      <td><?php echo $refugio->getResponsable() ?></td>-->
      <td><?php echo $refugio->getAdultosMtecnica() ?></td>
      <td><?php echo $refugio->getAdultosFtecnica() ?></td>
    </tr>
    <?php $totabuelosrefugioT = $totabuelosrefugioT + $refugio->getAdultosMtecnica(); ?>
    <?php $totabuelasrefugioT = $totabuelasrefugioT + $refugio->getAdultosFtecnica(); ?>
    <?php endforeach; ?>
    <?php $totglorefugioT = $totabuelasrefugioT + $totabuelosrefugioT; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total refugios:", " ", $contrefugio; ?></td>
    <?php $pormrefugioT = ($totabuelosrefugioT * 100) / $totglorefugioT; ?>
    <td><?php echo "Total Abuelos Atención Técnica:", " ", $totabuelosrefugioT, " -- ", number_format($pormrefugioT, 2), "%"; ?></td>
    <?php $porfrefugioT = ($totabuelasrefugioT * 100) / $totglorefugioT; ?>
    <td><?php echo "Total Abuelas Atención Técnica:", " ", $totabuelasrefugioT, " -- ", number_format($porfrefugioT, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Técnica:", " ", $totglorefugioT; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasrefugioT.','.$totabuelosrefugioT.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>


<h2>Atención Productiva</h2>
<table border="0" cellpadding="0" cellspacing="0">
  <thead>
    <tr class="tabla_th">
<!--      <th> Identificador </th>-->
      <th> Estado </th>
      <th> Nombre </th>
<!--      <th> Responsable </th>-->
      <th> Adultos Atención Productiva</th>
      <th> Adultas Atención Productiva</th>
    </tr>
  </thead>

  <tbody>
    <?php  $pormrefugioP = 0; ?>
    <?php  $porfrefugioP = 0; ?>
    <?php  $contrefugio = 0; ?>
    <?php  $totabuelosrefugioP = 0; ?>
    <?php  $totabuelasrefugioP = 0; ?>
    <?php  $totglorefugioP = 0; ?>
    <?php foreach ($refugios as $refugio): ?>
    <?php ++$contrefugio; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $refugio->getId() ?></a></td>-->
      <td><?php echo $refugio->getEstado() ?></td>
      <td><?php echo $refugio->getNombre() ?></td>
<!--      <td><?php echo $refugio->getResponsable() ?></td>-->
      <td><?php echo $refugio->getAdultosMproductiva() ?></td>
      <td><?php echo $refugio->getAdultosFproductiva() ?></td>
    </tr>
    <?php $totabuelosrefugioP = $totabuelosrefugioP + $refugio->getAdultosMproductiva(); ?>
    <?php $totabuelasrefugioP = $totabuelasrefugioP + $refugio->getAdultosFproductiva(); ?>
    <?php endforeach; ?>
    <?php $totglorefugioP = $totabuelasrefugioP + $totabuelosrefugioP; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total refugios:", " ", $contrefugio; ?></td>
    <?php $pormrefugioP = ($totabuelosrefugioP * 100) / $totglorefugioP; ?>
    <td><?php echo "Total Abuelos Atención Productiva:", " ", $totabuelosrefugioP, " -- ", number_format($pormrefugioP, 2), "%"; ?></td>
    <?php $porfrefugioP = ($totabuelasrefugioP * 100) / $totglorefugioP; ?>
    <td><?php echo "Total Abuelas Atención Productiva:", " ", $totabuelasrefugioP, " -- ", number_format($porfrefugioP, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Productiva:", " ", $totglorefugioP; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasrefugioP.','.$totabuelosrefugioP.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <tr class="tabla_td">
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
    <td><?php echo "Total refugios:", " ", $contrefugio; ?></td>
    <?php $pormrefugio = ($totabuelosrefugio * 100) / $totglorefugio; ?>
    <td><?php echo "Total abuelos en refugios:", " ", $totabuelosrefugio, " -- ", number_format($pormrefugio, 2), "%"; ?></td>
    <?php $porfrefugio = ($totabuelasrefugio * 100) / $totglorefugio; ?>
    <td><?php echo "Total abuelas en refugios:", " ", $totabuelasrefugio, " -- ", number_format($porfrefugio, 2), "%"; ?></td>
    <td><?php echo "Total Global abuelos en refugios:", " ", $totglorefugio; ?></td>
</tr>
</table>

<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasrefugio.','.$totabuelosrefugio.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>

<?php $datos = implode(',', array($totabuelosrefugioS, $totabuelasrefugioS, $totabuelosrefugioSo, $totabuelasrefugioSo, $totabuelosrefugioE, $totabuelasrefugioE, $totabuelosrefugioT, $totabuelasrefugioT, $totabuelosrefugioP, $totabuelasrefugioP)); ?>
<?php $average = ($totabuelosrefugioS + $totabuelasrefugioS + $totabuelosrefugioSo + $totabuelasrefugioSo + $totabuelosrefugioE + $totabuelasrefugioE + $totabuelosrefugioT + $totabuelasrefugioT + $totabuelosrefugioP + $totabuelasrefugioP) / 10; ?>

<script type="text/javascript">
    var chart

    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container'
            },
            title: {
                text: 'Atención en refugios'
            },
            xAxis: {
                categories: ['Adultos en Salud', 'Adultas en Salud', 'Adultos en Social', 'Adultas en Social', 'Adultos en Económico', 'Adultas en Económico', 'Adultos en Técnica', 'Adultas en Técnica', 'Adultos en Productivo', 'Adultas en Productivo']
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
                    name: 'refugios',
                    data: [<?php echo $datos; ?>]
                }, {
                    type: 'pie',
                    name: 'Total consumption',
                    data: [{
                            name: 'refugios',
                            y: <?php echo $totglorefugio; ?>/*,
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

<div id="container" style="width: 95%; height: 400px"></div>
