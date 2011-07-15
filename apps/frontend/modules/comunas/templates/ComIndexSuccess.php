<?php use_javascript('highcharts')?>
<h1>Listado de Comunas en Construcción</h1>

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
    <?php  $pormcomunasS = 0; ?>
    <?php  $porfcomunasS = 0; ?>
    <?php  $contcomunasconst = 0; ?>
    <?php  $totabueloscomunasS = 0; ?>
    <?php  $totabuelascomunasS = 0; ?>
    <?php  $totglocomunasS = 0; ?>
    <?php foreach ($comunasconsts as $comunasconst): ?>
    <?php ++$contcomunasconst; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $comunasconst->getId() ?></a></td>-->
      <td><?php echo $comunasconst->getEstado() ?></td>
      <td><?php echo $comunasconst->getNombre() ?></td>
<!--      <td><?php echo $comunasconst->getResponsable() ?></td>-->
      <td><?php echo $comunasconst->getAdultosMsalud() ?></td>
      <td><?php echo $comunasconst->getAdultosFsalud() ?></td>
    </tr>
    <?php $totabueloscomunasS = $totabueloscomunasS + $comunasconst->getAdultosMsalud(); ?>
    <?php $totabuelascomunasS = $totabuelascomunasS + $comunasconst->getAdultosFsalud(); ?>
    <?php endforeach; ?>
    <?php $totglocomunasS = $totabuelascomunasS + $totabueloscomunasS; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Comunas:", " ", $contcomunasconst; ?></td>
    <?php $pormcomunas = ($totabueloscomunasS * 100) / $totglocomunasS; ?>
    <td><?php echo "Total abuelos Atención Salud:", " ", $totabueloscomunasS, " -- ", number_format($pormcomunasS, 2), "%"; ?></td>
    <?php $porfcomunasS = ($totabuelascomunasS * 100) / $totglocomunasS; ?>
    <td><?php echo "Total abuelas Atención Salud:", " ", $totabuelascomunasS, " -- ", number_format($porfcomunasS, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Salud:", " ", $totglocomunasS; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelascomunasS.','.$totabueloscomunasS.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormcomunasSo = 0; ?>
    <?php  $porfcomunasSo = 0; ?>
    <?php  $contcomunasconst = 0; ?>
    <?php  $totabueloscomunasSo = 0; ?>
    <?php  $totabuelascomunasSo = 0; ?>
    <?php  $totglocomunasSo = 0; ?>
    <?php foreach ($comunasconsts as $comunasconst): ?>
    <?php ++$contcomunasconst; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $comunasconst->getId() ?></a></td>-->
      <td><?php echo $comunasconst->getEstado() ?></td>
      <td><?php echo $comunasconst->getNombre() ?></td>
<!--      <td><?php echo $comunasconst->getResponsable() ?></td>-->
      <td><?php echo $comunasconst->getAdultosMsocial() ?></td>
      <td><?php echo $comunasconst->getAdultosFsocial() ?></td>
    </tr>
    <?php $totabueloscomunasSo = $totabueloscomunasSo + $comunasconst->getAdultosMsocial(); ?>
    <?php $totabuelascomunasSo = $totabuelascomunasSo + $comunasconst->getAdultosFsocial(); ?>
    <?php endforeach; ?>
    <?php $totglocomunasSo = $totabuelascomunasSo + $totabueloscomunasSo; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Comunas:", " ", $contcomunasconst; ?></td>
    <?php $pormcomunaso = ($totabueloscomunasSo * 100) / $totglocomunasSo; ?>
    <td><?php echo "Total abuelos Atención Social:", " ", $totabueloscomunasSo, " -- ", number_format($pormcomunasSo, 2), "%"; ?></td>
    <?php $porfcomunasSo = ($totabuelascomunasSo * 100) / $totglocomunasSo; ?>
    <td><?php echo "Total abuelas Atención Social:", " ", $totabuelascomunasSo, " -- ", number_format($porfcomunasSo, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Social:", " ", $totglocomunasSo; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelascomunasSo.','.$totabueloscomunasSo.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormcomunasconstE = 0; ?>
    <?php  $porfcomunasconstE = 0; ?>
    <?php  $contcomunasconst = 0; ?>
    <?php  $totabueloscomunasconstE = 0; ?>
    <?php  $totabuelascomunasconstE = 0; ?>
    <?php  $totglocomunasconstE = 0; ?>
    <?php foreach ($comunasconsts as $comunasconst): ?>
    <?php ++$contcomunasconst; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $comunasconst->getId() ?></a></td>-->
      <td><?php echo $comunasconst->getEstado() ?></td>
      <td><?php echo $comunasconst->getNombre() ?></td>
<!--      <td><?php echo $comunasconst->getResponsable() ?></td>-->
      <td><?php echo $comunasconst->getAdultosMeconomico() ?></td>
      <td><?php echo $comunasconst->getAdultosFeconomico() ?></td>
    </tr>
    <?php $totabueloscomunasconstE = $totabueloscomunasconstE + $comunasconst->getAdultosMeconomico(); ?>
    <?php $totabuelascomunasconstE = $totabuelascomunasconstE + $comunasconst->getAdultosFeconomico(); ?>
    <?php endforeach; ?>
    <?php $totglocomunasconstE = $totabuelascomunasconstE + $totabueloscomunasconstE; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total comunas:", " ", $contcomunasconst; ?></td>
    <?php $pormcomunasconstE = ($totabueloscomunasconstE * 100) / $totglocomunasconstE; ?>
    <td><?php echo "Total Abuelos Atención Económica:", " ", $totabueloscomunasconstE, " -- ", number_format($pormcomunasconstE, 2), "%"; ?></td>
    <?php $porfcomunas = ($totabuelascomunasconstE * 100) / $totglocomunasconstE; ?>
    <td><?php echo "Total Abuelas Atención Económica:", " ", $totabuelascomunasconstE, " -- ", number_format($porfcomunas, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Económica:", " ", $totglocomunasconstE; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelascomunasconstE.','.$totabueloscomunasconstE.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormcomunasconstT = 0; ?>
    <?php  $porfcomunasconstT = 0; ?>
    <?php  $contcomunasconst = 0; ?>
    <?php  $totabueloscomunasconstT = 0; ?>
    <?php  $totabuelascomunasconstT = 0; ?>
    <?php  $totglocomunasconstT = 0; ?>
    <?php foreach ($comunasconsts as $comunasconst): ?>
    <?php ++$contcomunasconst; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $comunasconst->getId() ?></a></td>-->
      <td><?php echo $comunasconst->getEstado() ?></td>
      <td><?php echo $comunasconst->getNombre() ?></td>
<!--      <td><?php echo $comunasconst->getResponsable() ?></td>-->
      <td><?php echo $comunasconst->getAdultosMtecnica() ?></td>
      <td><?php echo $comunasconst->getAdultosFtecnica() ?></td>
    </tr>
    <?php $totabueloscomunasconstT = $totabueloscomunasconstT + $comunasconst->getAdultosMtecnica(); ?>
    <?php $totabuelascomunasconstT = $totabuelascomunasconstT + $comunasconst->getAdultosFtecnica(); ?>
    <?php endforeach; ?>
    <?php $totglocomunasconstT = $totabuelascomunasconstT + $totabueloscomunasconstT; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total comunas:", " ", $contcomunasconst; ?></td>
    <?php $pormcomunasconstT = ($totabueloscomunasconstT * 100) / $totglocomunasconstT; ?>
    <td><?php echo "Total Abuelos Atención Técnica:", " ", $totabueloscomunasconstT, " -- ", number_format($pormcomunasconstT, 2), "%"; ?></td>
    <?php $porfcomunasconstT = ($totabuelascomunasconstT * 100) / $totglocomunasconstT; ?>
    <td><?php echo "Total Abuelas Atención Técnica:", " ", $totabuelascomunasconstT, " -- ", number_format($porfcomunasconstT, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Técnica:", " ", $totglocomunasconstT; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelascomunasconstT.','.$totabueloscomunasconstT.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormcomunasconstP = 0; ?>
    <?php  $porfcomunasconstP = 0; ?>
    <?php  $contcomunasconst = 0; ?>
    <?php  $totabueloscomunasconstP = 0; ?>
    <?php  $totabuelascomunasconstP = 0; ?>
    <?php  $totglocomunasconstP = 0; ?>
    <?php foreach ($comunasconsts as $comunasconst): ?>
    <?php ++$contcomunasconst; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $comunasconst->getId() ?></a></td>-->
      <td><?php echo $comunasconst->getEstado() ?></td>
      <td><?php echo $comunasconst->getNombre() ?></td>
<!--      <td><?php echo $comunasconst->getResponsable() ?></td>-->
      <td><?php echo $comunasconst->getAdultosMproductiva() ?></td>
      <td><?php echo $comunasconst->getAdultosFproductiva() ?></td>
    </tr>
    <?php $totabueloscomunasconstP = $totabueloscomunasconstP + $comunasconst->getAdultosMproductiva(); ?>
    <?php $totabuelascomunasconstP = $totabuelascomunasconstP + $comunasconst->getAdultosFproductiva(); ?>
    <?php endforeach; ?>
    <?php $totglocomunasconstP = $totabuelascomunasconstP + $totabueloscomunasconstP; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total comunas:", " ", $contcomunasconst; ?></td>
    <?php $pormcomunasconstP = ($totabueloscomunasconstP * 100) / $totglocomunasconstP; ?>
    <td><?php echo "Total Abuelos Atención Productiva:", " ", $totabueloscomunasconstP, " -- ", number_format($pormcomunasconstP, 2), "%"; ?></td>
    <?php $porfcomunasconstP = ($totabuelascomunasconstP * 100) / $totglocomunasconstP; ?>
    <td><?php echo "Total Abuelas Atención Productiva:", " ", $totabuelascomunasconstP, " -- ", number_format($porfcomunasconstP, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Productiva:", " ", $totglocomunasconstP; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelascomunasconstP.','.$totabueloscomunasconstP.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormcomunasconst = 0; ?>
    <?php  $porfcomunasconst = 0; ?>
    <?php  $contcomunasconst = 0; ?>
    <?php  $totabueloscomunasconst = 0; ?>
    <?php  $totabuelascomunasconst = 0; ?>
    <?php  $totglocomunasconst = 0; ?>
    <?php foreach ($comunasconsts as $comunasconst): ?>
    <?php ++$contcomunasconst; ?>
    <tr class="tabla_td">
<!--      <td><a><?php echo $comunasconst->getId() ?></a></td>-->
      <td><?php echo $comunasconst->getEstado() ?></td>
      <td><?php echo $comunasconst->getNombre() ?></td>
<!--      <td><?php echo $comunasconst->getResponsable() ?></td>-->
      <td><?php echo $comunasconst->getAdultosM() ?></td>
      <td><?php echo $comunasconst->getAdultosF() ?></td>
      <td><?php echo $comunasconst->getAdultosT() ?></td>
    </tr>
    <?php $totabueloscomunasconst = $totabueloscomunasconst + $comunasconst->getAdultosM(); ?>
    <?php $totabuelascomunasconst = $totabuelascomunasconst + $comunasconst->getAdultosF(); ?>
    <?php endforeach; ?>
    <?php $totglocomunasconst = $totabuelascomunasconst + $totabueloscomunasconst; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total comunas:", " ", $contcomunasconst; ?></td>
    <?php $pormcomunasconst = ($totabueloscomunasconst * 100) / $totglocomunasconst; ?>
    <td><?php echo "Total abuelos en comunas:", " ", $totabueloscomunasconst, " -- ", number_format($pormcomunasconst, 2), "%"; ?></td>
    <?php $porfcomunasconst = ($totabuelascomunasconst * 100) / $totglocomunasconst; ?>
    <td><?php echo "Total abuelas en comunas:", " ", $totabuelascomunasconst, " -- ", number_format($porfcomunasconst, 2), "%"; ?></td>
    <td><?php echo "Total Global abuelos en comunas:", " ", $totglocomunasconst; ?></td>
</tr>
</table>

<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelascomunasconst.','.$totabueloscomunasconst.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>

<?php $datos = implode(',', array($totabueloscomunasS, $totabuelascomunasS, $totabueloscomunasSo, $totabuelascomunasSo, $totabueloscomunasconstE, $totabuelascomunasconstE, $totabueloscomunasconstT, $totabuelascomunasconstT, $totabueloscomunasconstP, $totabuelascomunasconstP)); ?>
<?php $average = ($totabueloscomunasS + $totabuelascomunasS + $totabueloscomunasSo + $totabuelascomunasSo + $totabueloscomunasconstE + $totabuelascomunasconstE + $totabueloscomunasconstT + $totabuelascomunasconstT + $totabueloscomunasconstP + $totabuelascomunasconstP) / 10; ?>

<script type="text/javascript">
    var chart

    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container'
            },
            title: {
                text: 'Atención en Comunas'
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
                    name: 'Comunas',
                    data: [<?php echo $datos; ?>]
                }, {
                    type: 'pie',
                    name: 'Total consumption',
                    data: [{
                            name: 'Comunas',
                            y: <?php echo $totglocomunasconst; ?>/*,
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


