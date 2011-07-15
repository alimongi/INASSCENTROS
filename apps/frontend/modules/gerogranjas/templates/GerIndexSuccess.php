<?php use_javascript('highcharts')?>
<h1>Listado de Gerogranjas</h1>

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
    <?php  $pormgerogranjaS = 0; ?>
    <?php  $porfgerogranjaS = 0; ?>
    <?php  $contgerogranja = 0; ?>
    <?php  $totabuelosgerogranjaS = 0; ?>
    <?php  $totabuelasgerogranjaS = 0; ?>
    <?php  $totglogerogranjaS = 0; ?>
    <?php foreach ($gerogranjas as $gerogranja): ?>
    <?php ++$contgerogranja; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $gerogranja->getId() ?></a></td>-->
      <td><?php echo $gerogranja->getEstado() ?></td>
      <td><?php echo $gerogranja->getNombre() ?></td>
<!--      <td><?php echo $gerogranja->getResponsable() ?></td>-->
      <td><?php echo $gerogranja->getAdultosMsalud() ?></td>
      <td><?php echo $gerogranja->getAdultosFsalud() ?></td>
    </tr>
    <?php $totabuelosgerogranjaS = $totabuelosgerogranjaS + $gerogranja->getAdultosMsalud(); ?>
    <?php $totabuelasgerogranjaS = $totabuelasgerogranjaS + $gerogranja->getAdultosFsalud(); ?>
    <?php endforeach; ?>
    <?php $totglogerogranjaS = $totabuelasgerogranjaS + $totabuelosgerogranjaS; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total gerogranjas:", " ", $contgerogranja; ?></td>
    <?php $pormgerogranjaS = ($totabuelosgerogranjaS * 100) / $totglogerogranjaS; ?>
    <td><?php echo "Total abuelos Atención Salud:", " ", $totabuelosgerogranjaS, " -- ", number_format($pormgerogranjaS, 2), "%"; ?></td>
    <?php $porfgerogranjaS = ($totabuelasgerogranjaS * 100) / $totglogerogranjaS; ?>
    <td><?php echo "Total abuelas Atención Salud:", " ", $totabuelasgerogranjaS, " -- ", number_format($porfgerogranjaS, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Salud:", " ", $totglogerogranjaS; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasgerogranjaS.','.$totabuelosgerogranjaS.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormgerogranjaSo = 0; ?>
    <?php  $porfgerogranjaSo = 0; ?>
    <?php  $contgerogranja = 0; ?>
    <?php  $totabuelosgerogranjaSo = 0; ?>
    <?php  $totabuelasgerogranjaSo = 0; ?>
    <?php  $totglogerogranjaSo = 0; ?>
    <?php foreach ($gerogranjas as $gerogranja): ?>
    <?php ++$contgerogranja; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $gerogranja->getId() ?></a></td>-->
      <td><?php echo $gerogranja->getEstado() ?></td>
      <td><?php echo $gerogranja->getNombre() ?></td>
<!--      <td><?php echo $gerogranja->getResponsable() ?></td>-->
      <td><?php echo $gerogranja->getAdultosMsocial() ?></td>
      <td><?php echo $gerogranja->getAdultosFsocial() ?></td>
    </tr>
    <?php $totabuelosgerogranjaSo = $totabuelosgerogranjaSo + $gerogranja->getAdultosMsocial(); ?>
    <?php $totabuelasgerogranjaSo = $totabuelasgerogranjaSo + $gerogranja->getAdultosFsocial(); ?>
    <?php endforeach; ?>
    <?php $totglogerogranjaSo = $totabuelasgerogranjaSo + $totabuelosgerogranjaSo; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total gerogranjas:", " ", $contgerogranja; ?></td>
    <?php $pormgerogranjaSo = ($totabuelosgerogranjaSo * 100) / $totglogerogranjaSo; ?>
    <td><?php echo "Total abuelos Atención Social:", " ", $totabuelosgerogranjaSo, " -- ", number_format($pormgerogranjaSo, 2), "%"; ?></td>
    <?php $porfgerogranjaSo = ($totabuelasgerogranjaSo * 100) / $totglogerogranjaSo; ?>
    <td><?php echo "Total abuelas Atención Social:", " ", $totabuelasgerogranjaSo, " -- ", number_format($porfgerogranjaSo, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Social:", " ", $totglogerogranjaSo; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasgerogranjaSo.','.$totabuelosgerogranjaSo.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormgerogranjaE = 0; ?>
    <?php  $porfgerogranjaE = 0; ?>
    <?php  $contgerogranja = 0; ?>
    <?php  $totabuelosgerogranjaE = 0; ?>
    <?php  $totabuelasgerogranjaE = 0; ?>
    <?php  $totglogerogranjaE = 0; ?>
    <?php foreach ($gerogranjas as $gerogranja): ?>
    <?php ++$contgerogranja; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $gerogranja->getId() ?></a></td>-->
      <td><?php echo $gerogranja->getEstado() ?></td>
      <td><?php echo $gerogranja->getNombre() ?></td>
<!--      <td><?php echo $gerogranja->getResponsable() ?></td>-->
      <td><?php echo $gerogranja->getAdultosMeconomico() ?></td>
      <td><?php echo $gerogranja->getAdultosFeconomico() ?></td>
    </tr>
    <?php $totabuelosgerogranjaE = $totabuelosgerogranjaE + $gerogranja->getAdultosMeconomico(); ?>
    <?php $totabuelasgerogranjaE = $totabuelasgerogranjaE + $gerogranja->getAdultosFeconomico(); ?>
    <?php endforeach; ?>
    <?php $totglogerogranjaE = $totabuelasgerogranjaE + $totabuelosgerogranjaE; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total gerogranjas:", " ", $contgerogranja; ?></td>
    <?php $pormgerogranjaE = ($totabuelosgerogranjaE * 100) / $totglogerogranjaE; ?>
    <td><?php echo "Total Abuelos Atención Económica:", " ", $totabuelosgerogranjaE, " -- ", number_format($pormgerogranjaE, 2), "%"; ?></td>
    <?php $porfgerogranjaS = ($totabuelasgerogranjaE * 100) / $totglogerogranjaE; ?>
    <td><?php echo "Total Abuelas Atención Económica:", " ", $totabuelasgerogranjaE, " -- ", number_format($porfgerogranjaS, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Económica:", " ", $totglogerogranjaE; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasgerogranjaE.','.$totabuelosgerogranjaE.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormgerogranjaT = 0; ?>
    <?php  $porfgerogranjaT = 0; ?>
    <?php  $contgerogranja = 0; ?>
    <?php  $totabuelosgerogranjaT = 0; ?>
    <?php  $totabuelasgerogranjaT = 0; ?>
    <?php  $totglogerogranjaT = 0; ?>
    <?php foreach ($gerogranjas as $gerogranja): ?>
    <?php ++$contgerogranja; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $gerogranja->getId() ?></a></td>-->
      <td><?php echo $gerogranja->getEstado() ?></td>
      <td><?php echo $gerogranja->getNombre() ?></td>
<!--      <td><?php echo $gerogranja->getResponsable() ?></td>-->
      <td><?php echo $gerogranja->getAdultosMtecnica() ?></td>
      <td><?php echo $gerogranja->getAdultosFtecnica() ?></td>
    </tr>
    <?php $totabuelosgerogranjaT = $totabuelosgerogranjaT + $gerogranja->getAdultosMtecnica(); ?>
    <?php $totabuelasgerogranjaT = $totabuelasgerogranjaT + $gerogranja->getAdultosFtecnica(); ?>
    <?php endforeach; ?>
    <?php $totglogerogranjaT = $totabuelasgerogranjaT + $totabuelosgerogranjaT; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total gerogranjas:", " ", $contgerogranja; ?></td>
    <?php $pormgerogranjaT = ($totabuelosgerogranjaT * 100) / $totglogerogranjaT; ?>
    <td><?php echo "Total Abuelos Atención Técnica:", " ", $totabuelosgerogranjaT, " -- ", number_format($pormgerogranjaT, 2), "%"; ?></td>
    <?php $porfgerogranjaT = ($totabuelasgerogranjaT * 100) / $totglogerogranjaT; ?>
    <td><?php echo "Total Abuelas Atención Técnica:", " ", $totabuelasgerogranjaT, " -- ", number_format($porfgerogranjaT, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Técnica:", " ", $totglogerogranjaT; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasgerogranjaT.','.$totabuelosgerogranjaT.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormgerogranjaP = 0; ?>
    <?php  $porfgerogranjaP = 0; ?>
    <?php  $contgerogranja = 0; ?>
    <?php  $totabuelosgerogranjaP = 0; ?>
    <?php  $totabuelasgerogranjaP = 0; ?>
    <?php  $totglogerogranjaP = 0; ?>
    <?php foreach ($gerogranjas as $gerogranja): ?>
    <?php ++$contgerogranja; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $gerogranja->getId() ?></a></td>-->
      <td><?php echo $gerogranja->getEstado() ?></td>
      <td><?php echo $gerogranja->getNombre() ?></td>
<!--      <td><?php echo $gerogranja->getResponsable() ?></td>-->
      <td><?php echo $gerogranja->getAdultosMproductiva() ?></td>
      <td><?php echo $gerogranja->getAdultosFproductiva() ?></td>
    </tr>
    <?php $totabuelosgerogranjaP = $totabuelosgerogranjaP + $gerogranja->getAdultosMproductiva(); ?>
    <?php $totabuelasgerogranjaP = $totabuelasgerogranjaP + $gerogranja->getAdultosFproductiva(); ?>
    <?php endforeach; ?>
    <?php $totglogerogranjaP = $totabuelasgerogranjaP + $totabuelosgerogranjaP; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total gerogranjas:", " ", $contgerogranja; ?></td>
    <?php $pormgerogranjaP = ($totabuelosgerogranjaP * 100) / $totglogerogranjaP; ?>
    <td><?php echo "Total Abuelos Atención Productiva:", " ", $totabuelosgerogranjaP, " -- ", number_format($pormgerogranjaP, 2), "%"; ?></td>
    <?php $porfgerogranjaP = ($totabuelasgerogranjaP * 100) / $totglogerogranjaP; ?>
    <td><?php echo "Total Abuelas Atención Productiva:", " ", $totabuelasgerogranjaP, " -- ", number_format($porfgerogranjaP, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Productiva:", " ", $totglogerogranjaP; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasgerogranjaP.','.$totabuelosgerogranjaP.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormgerogranja = 0; ?>
    <?php  $porfgerogranja = 0; ?>
    <?php  $contgerogranja = 0; ?>
    <?php  $totabuelosgerogranja = 0; ?>
    <?php  $totabuelasgerogranja = 0; ?>
    <?php  $totglogerogranja = 0; ?>
    <?php foreach ($gerogranjas as $gerogranja): ?>
    <?php ++$contgerogranja; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $gerogranja->getId() ?></a></td>-->
      <td><?php echo $gerogranja->getEstado() ?></td>
      <td><?php echo $gerogranja->getNombre() ?></td>
<!--      <td><?php echo $gerogranja->getResponsable() ?></td>-->
      <td><?php echo $gerogranja->getAdultosM() ?></td>
      <td><?php echo $gerogranja->getAdultosF() ?></td>
      <td><?php echo $gerogranja->getAdultosT() ?></td>
    </tr>
    <?php $totabuelosgerogranja = $totabuelosgerogranja + $gerogranja->getAdultosM(); ?>
    <?php $totabuelasgerogranja = $totabuelasgerogranja + $gerogranja->getAdultosF(); ?>
    <?php endforeach; ?>
    <?php $totglogerogranja = $totabuelasgerogranja + $totabuelosgerogranja; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total gerogranjas:", " ", $contgerogranja; ?></td>
    <?php $pormgerogranja = ($totabuelosgerogranja * 100) / $totglogerogranja; ?>
    <td><?php echo "Total abuelos en gerogranjas:", " ", $totabuelosgerogranja, " -- ", number_format($pormgerogranja, 2), "%"; ?></td>
    <?php $porfgerogranja = ($totabuelasgerogranja * 100) / $totglogerogranja; ?>
    <td><?php echo "Total abuelas en gerogranjas:", " ", $totabuelasgerogranja, " -- ", number_format($porfgerogranja, 2), "%"; ?></td>
    <td><?php echo "Total Global abuelos en gerogranjas:", " ", $totglogerogranja; ?></td>
</tr>
</table>

<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasgerogranja.','.$totabuelosgerogranja.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>

<?php $datos = implode(',', array($totabuelosgerogranjaS, $totabuelasgerogranjaS, $totabuelosgerogranjaSo, $totabuelasgerogranjaSo, $totabuelosgerogranjaE, $totabuelasgerogranjaE, $totabuelosgerogranjaT, $totabuelasgerogranjaT, $totabuelosgerogranjaP, $totabuelasgerogranjaP)); ?>
<?php $average = ($totabuelosgerogranjaS + $totabuelasgerogranjaS + $totabuelosgerogranjaSo + $totabuelasgerogranjaSo + $totabuelosgerogranjaE + $totabuelasgerogranjaE + $totabuelosgerogranjaT + $totabuelasgerogranjaT + $totabuelosgerogranjaP + $totabuelasgerogranjaP) / 10; ?>

<script type="text/javascript">
    var chart

    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container'
            },
            title: {
                text: 'Atención en gerogranjas'
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
                    name: 'gerogranjas',
                    data: [<?php echo $datos; ?>]
                }, {
                    type: 'pie',
                    name: 'Total consumption',
                    data: [{
                            name: 'gerogranjas',
                            y: <?php echo $totglogerogranja; ?>/*,
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
