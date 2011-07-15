<?php use_javascript('highcharts')?>
<h1>Listado de Nuevos Urbanismos</h1>

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
    <?php  $pormnuevosurbS = 0; ?>
    <?php  $porfnuevosurbS = 0; ?>
    <?php  $contnuevosurb = 0; ?>
    <?php  $totabuelosnuevosurbS = 0; ?>
    <?php  $totabuelasnuevosurbS = 0; ?>
    <?php  $totglonuevosurbS = 0; ?>
    <?php foreach ($nuevosurbs as $nuevosurb): ?>
    <?php ++$contnuevosurb; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $nuevosurb->getId() ?></a></td>-->
      <td><?php echo $nuevosurb->getEstado() ?></td>
      <td><?php echo $nuevosurb->getNombre() ?></td>
<!--      <td><?php echo $nuevosurb->getResponsable() ?></td>-->
      <td><?php echo $nuevosurb->getAdultosMsalud() ?></td>
      <td><?php echo $nuevosurb->getAdultosFsalud() ?></td>
    </tr>
    <?php $totabuelosnuevosurbS = $totabuelosnuevosurbS + $nuevosurb->getAdultosMsalud(); ?>
    <?php $totabuelasnuevosurbS = $totabuelasnuevosurbS + $nuevosurb->getAdultosFsalud(); ?>
    <?php endforeach; ?>
    <?php $totglonuevosurbS = $totabuelasnuevosurbS + $totabuelosnuevosurbS; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Nuevos Urbanismos:", " ", $contnuevosurb; ?></td>
    <?php $pormnuevosurbS = ($totabuelosnuevosurbS * 100) / $totglonuevosurbS; ?>
    <td><?php echo "Total abuelos Atención Salud:", " ", $totabuelosnuevosurbS, " -- ", number_format($pormnuevosurbS, 2), "%"; ?></td>
    <?php $porfnuevosurbS = ($totabuelasnuevosurbS * 100) / $totglonuevosurbS; ?>
    <td><?php echo "Total abuelas Atención Salud:", " ", $totabuelasnuevosurbS, " -- ", number_format($porfnuevosurbS, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Salud:", " ", $totglonuevosurbS; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasnuevosurbS.','.$totabuelosnuevosurbS.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormnuevosurbSo = 0; ?>
    <?php  $porfnuevosurbSo = 0; ?>
    <?php  $contnuevosurb = 0; ?>
    <?php  $totabuelosnuevosurbSo = 0; ?>
    <?php  $totabuelasnuevosurbSo = 0; ?>
    <?php  $totglonuevosurbSo = 0; ?>
    <?php foreach ($nuevosurbs as $nuevosurb): ?>
    <?php ++$contnuevosurb; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $nuevosurb->getId() ?></a></td>-->
      <td><?php echo $nuevosurb->getEstado() ?></td>
      <td><?php echo $nuevosurb->getNombre() ?></td>
<!--      <td><?php echo $nuevosurb->getResponsable() ?></td>-->
      <td><?php echo $nuevosurb->getAdultosMsocial() ?></td>
      <td><?php echo $nuevosurb->getAdultosFsocial() ?></td>
    </tr>
    <?php $totabuelosnuevosurbSo = $totabuelosnuevosurbSo + $nuevosurb->getAdultosMsocial(); ?>
    <?php $totabuelasnuevosurbSo = $totabuelasnuevosurbSo + $nuevosurb->getAdultosFsocial(); ?>
    <?php endforeach; ?>
    <?php $totglonuevosurbSo = $totabuelasnuevosurbSo + $totabuelosnuevosurbSo; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Nuevos Urbanismos:", " ", $contnuevosurb; ?></td>
    <?php $pormnuevosurbSo = ($totabuelosnuevosurbSo * 100) / $totglonuevosurbSo; ?>
    <td><?php echo "Total abuelos Atención Social:", " ", $totabuelosnuevosurbSo, " -- ", number_format($pormnuevosurbSo, 2), "%"; ?></td>
    <?php $porfnuevosurbSo = ($totabuelasnuevosurbSo * 100) / $totglonuevosurbSo; ?>
    <td><?php echo "Total abuelas Atención Social:", " ", $totabuelasnuevosurbSo, " -- ", number_format($porfnuevosurbSo, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Social:", " ", $totglonuevosurbSo; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasnuevosurbSo.','.$totabuelosnuevosurbSo.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>


<h2>Atención Económica</h2>
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
    <?php  $pormnuevosurbE = 0; ?>
    <?php  $porfnuevosurbE = 0; ?>
    <?php  $contnuevosurb = 0; ?>
    <?php  $totabuelosnuevosurbE = 0; ?>
    <?php  $totabuelasnuevosurbE = 0; ?>
    <?php  $totglonuevosurbE = 0; ?>
    <?php foreach ($nuevosurbs as $nuevosurb): ?>
    <?php ++$contnuevosurb; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $nuevosurb->getId() ?></a></td>-->
      <td><?php echo $nuevosurb->getEstado() ?></td>
      <td><?php echo $nuevosurb->getNombre() ?></td>
<!--      <td><?php echo $nuevosurb->getResponsable() ?></td>-->
      <td><?php echo $nuevosurb->getAdultosMeconomico() ?></td>
      <td><?php echo $nuevosurb->getAdultosFeconomico() ?></td>
    </tr>
    <?php $totabuelosnuevosurbE = $totabuelosnuevosurbE + $nuevosurb->getAdultosMeconomico(); ?>
    <?php $totabuelasnuevosurbE = $totabuelasnuevosurbE + $nuevosurb->getAdultosFeconomico(); ?>
    <?php endforeach; ?>
    <?php $totglonuevosurbE = $totabuelasnuevosurbE + $totabuelosnuevosurbE; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Nuevos Urbanismos:", " ", $contnuevosurb; ?></td>
    <?php $pormnuevosurbE = ($totabuelosnuevosurbE * 100) / $totglonuevosurbE; ?>
    <td><?php echo "Total Abuelos Atención Económica:", " ", $totabuelosnuevosurbE, " -- ", number_format($pormnuevosurbE, 2), "%"; ?></td>
    <?php $porfnuevosurbS = ($totabuelasnuevosurbE * 100) / $totglonuevosurbE; ?>
    <td><?php echo "Total Abuelas Atención Económica:", " ", $totabuelasnuevosurbE, " -- ", number_format($porfnuevosurbS, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Económica:", " ", $totglonuevosurbE; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasnuevosurbE.','.$totabuelosnuevosurbE.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormnuevosurbT = 0; ?>
    <?php  $porfnuevosurbT = 0; ?>
    <?php  $contnuevosurb = 0; ?>
    <?php  $totabuelosnuevosurbT = 0; ?>
    <?php  $totabuelasnuevosurbT = 0; ?>
    <?php  $totglonuevosurbT = 0; ?>
    <?php foreach ($nuevosurbs as $nuevosurb): ?>
    <?php ++$contnuevosurb; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $nuevosurb->getId() ?></a></td>-->
      <td><?php echo $nuevosurb->getEstado() ?></td>
      <td><?php echo $nuevosurb->getNombre() ?></td>
<!--      <td><?php echo $nuevosurb->getResponsable() ?></td>-->
      <td><?php echo $nuevosurb->getAdultosMtecnica() ?></td>
      <td><?php echo $nuevosurb->getAdultosFtecnica() ?></td>
    </tr>
    <?php $totabuelosnuevosurbT = $totabuelosnuevosurbT + $nuevosurb->getAdultosMtecnica(); ?>
    <?php $totabuelasnuevosurbT = $totabuelasnuevosurbT + $nuevosurb->getAdultosFtecnica(); ?>
    <?php endforeach; ?>
    <?php $totglonuevosurbT = $totabuelasnuevosurbT + $totabuelosnuevosurbT; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Nuevos Urbanismos:", " ", $contnuevosurb; ?></td>
    <?php $pormnuevosurbT = ($totabuelosnuevosurbT * 100) / $totglonuevosurbT; ?>
    <td><?php echo "Total Abuelos Atención Técnica:", " ", $totabuelosnuevosurbT, " -- ", number_format($pormnuevosurbT, 2), "%"; ?></td>
    <?php $porfnuevosurbT = ($totabuelasnuevosurbT * 100) / $totglonuevosurbT; ?>
    <td><?php echo "Total Abuelas Atención Técnica:", " ", $totabuelasnuevosurbT, " -- ", number_format($porfnuevosurbT, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Técnica:", " ", $totglonuevosurbT; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasnuevosurbT.','.$totabuelosnuevosurbT.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormnuevosurbP = 0; ?>
    <?php  $porfnuevosurbP = 0; ?>
    <?php  $contnuevosurb = 0; ?>
    <?php  $totabuelosnuevosurbP = 0; ?>
    <?php  $totabuelasnuevosurbP = 0; ?>
    <?php  $totglonuevosurbP = 0; ?>
    <?php foreach ($nuevosurbs as $nuevosurb): ?>
    <?php ++$contnuevosurb; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $nuevosurb->getId() ?></a></td>-->
      <td><?php echo $nuevosurb->getEstado() ?></td>
      <td><?php echo $nuevosurb->getNombre() ?></td>
<!--      <td><?php echo $nuevosurb->getResponsable() ?></td>-->
      <td><?php echo $nuevosurb->getAdultosMproductiva() ?></td>
      <td><?php echo $nuevosurb->getAdultosFproductiva() ?></td>
    </tr>
    <?php $totabuelosnuevosurbP = $totabuelosnuevosurbP + $nuevosurb->getAdultosMproductiva(); ?>
    <?php $totabuelasnuevosurbP = $totabuelasnuevosurbP + $nuevosurb->getAdultosFproductiva(); ?>
    <?php endforeach; ?>
    <?php $totglonuevosurbP = $totabuelasnuevosurbP + $totabuelosnuevosurbP; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Nuevos Urbanismos:", " ", $contnuevosurb; ?></td>
    <?php $pormnuevosurbP = ($totabuelosnuevosurbP * 100) / $totglonuevosurbP; ?>
    <td><?php echo "Total Abuelos Atención Productiva:", " ", $totabuelosnuevosurbP, " -- ", number_format($pormnuevosurbP, 2), "%"; ?></td>
    <?php $porfnuevosurbP = ($totabuelasnuevosurbP * 100) / $totglonuevosurbP; ?>
    <td><?php echo "Total Abuelas Atención Productiva:", " ", $totabuelasnuevosurbP, " -- ", number_format($porfnuevosurbP, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Productiva:", " ", $totglonuevosurbP; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasnuevosurbP.','.$totabuelosnuevosurbP.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormnuevosurb = 0; ?>
    <?php  $porfnuevosurb = 0; ?>
    <?php  $contnuevosurb = 0; ?>
    <?php  $totabuelosnuevosurb = 0; ?>
    <?php  $totabuelasnuevosurb = 0; ?>
    <?php  $totglonuevosurb = 0; ?>
    <?php foreach ($nuevosurbs as $nuevosurb): ?>
    <?php ++$contnuevosurb; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $nuevosurb->getId() ?></a></td>-->
      <td><?php echo $nuevosurb->getEstado() ?></td>
      <td><?php echo $nuevosurb->getNombre() ?></td>
<!--      <td><?php echo $nuevosurb->getResponsable() ?></td>-->
      <td><?php echo $nuevosurb->getAdultosM() ?></td>
      <td><?php echo $nuevosurb->getAdultosF() ?></td>
      <td><?php echo $nuevosurb->getAdultosT() ?></td>
    </tr>
    <?php $totabuelosnuevosurb = $totabuelosnuevosurb + $nuevosurb->getAdultosM(); ?>
    <?php $totabuelasnuevosurb = $totabuelasnuevosurb + $nuevosurb->getAdultosF(); ?>
    <?php endforeach; ?>
    <?php $totglonuevosurb = $totabuelasnuevosurb + $totabuelosnuevosurb; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Nuevos Urbanismos:", " ", $contnuevosurb; ?></td>
    <?php $pormnuevosurb = ($totabuelosnuevosurb * 100) / $totglonuevosurb; ?>
    <td><?php echo "Total abuelos en nuevosurbs:", " ", $totabuelosnuevosurb, " -- ", number_format($pormnuevosurb, 2), "%"; ?></td>
    <?php $porfnuevosurb = ($totabuelasnuevosurb * 100) / $totglonuevosurb; ?>
    <td><?php echo "Total abuelas en nuevosurbs:", " ", $totabuelasnuevosurb, " -- ", number_format($porfnuevosurb, 2), "%"; ?></td>
    <td><?php echo "Total Global abuelos en nuevosurbs:", " ", $totglonuevosurb; ?></td>
</tr>
</table>

<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasnuevosurb.','.$totabuelosnuevosurb.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>

<?php $datos = implode(',', array($totabuelosnuevosurbS, $totabuelasnuevosurbS, $totabuelosnuevosurbSo, $totabuelasnuevosurbSo, $totabuelosnuevosurbE, $totabuelasnuevosurbE, $totabuelosnuevosurbT, $totabuelasnuevosurbT, $totabuelosnuevosurbP, $totabuelasnuevosurbP)); ?>
<?php $average = ($totabuelosnuevosurbS + $totabuelasnuevosurbS + $totabuelosnuevosurbSo + $totabuelasnuevosurbSo + $totabuelosnuevosurbE + $totabuelasnuevosurbE + $totabuelosnuevosurbT + $totabuelasnuevosurbT + $totabuelosnuevosurbP + $totabuelasnuevosurbP) / 10; ?>

<script type="text/javascript">
    var chart

    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container'
            },
            title: {
                text: 'Atención en Nuevos Urbanismos'
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
                    name: 'Nuevos Urbanismos',
                    data: [<?php echo $datos; ?>]
                }, {
                    type: 'pie',
                    name: 'Total consumption',
                    data: [{
                            name: 'Nuevos Urbanismos',
                            y: <?php echo $totglonuevosurb; ?>/*,
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


