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
    <?php  $pormgerogS = 0; ?>
    <?php  $porfgerogS = 0; ?>
    <?php  $contgerog = 0; ?>
    <?php  $totabuelosgerogS = 0; ?>
    <?php  $totabuelasgerogS = 0; ?>
    <?php  $totglogerogS = 0; ?>
    <?php foreach ($gerogranjas as $gerogranja): ?>
    <tr class="tabla_td">
    <?php ++$contgerog; ?>
<!--      <td><a><?php echo $gerogranja->getId() ?></a></td>-->
      <td><?php echo $gerogranja->getEstado() ?></td>
      <td><?php echo $gerogranja->getNombre() ?></td>
<!--      <td><?php echo $gerogranja->getResponsable() ?></td>-->
      <td><?php echo $gerogranja->getAdultosMsalud() ?></td>
      <td><?php echo $gerogranja->getAdultosFsalud() ?></td>
    </tr>
    <?php $totabuelosgerogS = $totabuelosgerogS + $gerogranja->getAdultosMsalud(); ?>
    <?php $totabuelasgerogS = $totabuelasgerogS + $gerogranja->getAdultosFsalud(); ?>
    <?php endforeach; ?>
    <?php $totglogerogS = $totabuelasgerogS + $totabuelosgerogS; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Gereogranjas:", " ", $contgerog; ?></td>
    <?php $pormgerogS = ($totabuelosgerogS * 100) / $totglogerogS; ?>
    <td><?php echo "Total abuelos Atención Salud:", " ", $totabuelosgerogS, " -- ", number_format($pormgerogS, 2), "%"; ?></td>
    <?php $porfgerogS = ($totabuelasgerogS * 100) / $totglogerogS; ?>
    <td><?php echo "Total abuelas Atención Salud:", " ", $totabuelasgerogS, " -- ", number_format($porfgerogS, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Salud:", " ", $totglogerogS; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasgerogS.','.$totabuelosgerogS.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormgerogSo = 0; ?>
    <?php  $porfgerogSo = 0; ?>
    <?php  $contgerog = 0; ?>
    <?php  $totabuelosgerogSo = 0; ?>
    <?php  $totabuelasgerogSo = 0; ?>
    <?php  $totglogerogSo = 0; ?>
    <?php foreach ($gerogranjas as $gerogranja): ?>
    <tr class="tabla_td">
    <?php ++$contgerog; ?>
<!--      <td><a><?php echo $gerogranja->getId() ?></a></td>-->
      <td><?php echo $gerogranja->getEstado() ?></td>
      <td><?php echo $gerogranja->getNombre() ?></td>
<!--      <td><?php echo $gerogranja->getResponsable() ?></td>-->
      <td><?php echo $gerogranja->getAdultosMsocial() ?></td>
      <td><?php echo $gerogranja->getAdultosFsocial() ?></td>
    </tr>
    <?php $totabuelosgerogSo = $totabuelosgerogSo + $gerogranja->getAdultosMsocial(); ?>
    <?php $totabuelasgerogSo = $totabuelasgerogSo + $gerogranja->getAdultosFsocial(); ?>
    <?php endforeach; ?>
    <?php $totglogerogSo = $totabuelasgerogSo + $totabuelosgerogSo; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Gereogranjas:", " ", $contgerog; ?></td>
    <?php $pormgerogSo = ($totabuelosgerogSo * 100) / $totglogerogSo; ?>
    <td><?php echo "Total abuelos Atención Social:", " ", $totabuelosgerogSo, " -- ", number_format($pormgerogSo, 2), "%"; ?></td>
    <?php $porfgerogSo = ($totabuelasgerogSo * 100) / $totglogerogSo; ?>
    <td><?php echo "Total abuelas Atención Social:", " ", $totabuelasgerogSo, " -- ", number_format($porfgerogSo, 2), "%"; ?></td>
    <td><?php echo "Total Global Atención Social:", " ", $totglogerogSo; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasgerogSo.','.$totabuelosgerogSo.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
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
    <?php  $pormgerog = 0; ?>
    <?php  $porfgerog = 0; ?>
    <?php  $contgerog = 0; ?>
    <?php  $totabuelosgerog = 0; ?>
    <?php  $totabuelasgerog = 0; ?>
    <?php  $totglogerog = 0; ?>
    <?php foreach ($gerogranjas as $gerogranja): ?>
    <tr class="tabla_td">
    <?php ++$contgerog; ?>
<!--      <td><a><?php echo $gerogranja->getId() ?></a></td>-->
      <td><?php echo $gerogranja->getEstado() ?></td>
      <td><?php echo $gerogranja->getNombre() ?></td>
<!--      <td><?php echo $gerogranja->getResponsable() ?></td>-->
      <td><?php echo $gerogranja->getAdultosM() ?></td>
      <td><?php echo $gerogranja->getAdultosF() ?></td>
      <td><?php echo $gerogranja->getAdultosT() ?></td>
    </tr>
    <?php $totabuelosgerog = $totabuelosgerog + $gerogranja->getAdultosM(); ?>
    <?php $totabuelasgerog = $totabuelasgerog + $gerogranja->getAdultosF(); ?>
    <?php endforeach; ?>
    <?php $totglogerog = $totabuelasgerog + $totabuelosgerog; ?>
  </tbody>
</table>
<table class="tableform">
<tr>
    <td><?php echo "Total Gereogranjas:", " ", $contgerog; ?></td>
    <?php $pormgerog = ($totabuelosgerog * 100) / $totglogerog; ?>
    <td><?php echo "Total abuelos en Gereogranjas:", " ", $totabuelosgerog, " -- ", number_format($pormgerog, 2), "%"; ?></td>
    <?php $porfgerog = ($totabuelasgerog * 100) / $totglogerog; ?>
    <td><?php echo "Total abuelas en Gereogranjas:", " ", $totabuelasgerog, " -- ", number_format($porfgerog, 2), "%"; ?></td>
    <td><?php echo "Total Global abuelos en Gereogranjas:", " ", $totglogerog; ?></td>
</tr>
</table>
<div>
<?php echo image_tag('graphpico/graphpastel.php?dat='.$totabuelasgerog.','.$totabuelosgerog.'&bkg=E6E6E6&wdt=200&hgt=100') ?>
</div>

<?php $datos = implode(',', array($totabuelosgerogS, $totabuelasgerogS, $totabuelosgerogSo, $totabuelasgerogSo)); ?>
<?php $average = ($totabuelosgerogS + $totabuelasgerogS + $totabuelosgerogSo + $totabuelasgerogSo) / 4; ?>

<script type="text/javascript">
    var chart

    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container'
            },
            title: {
                text: 'Atención en Gerogranjas'
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
                    name: 'Gerogranjas',
                    data: [<?php echo $datos; ?>]
                }, {
                    type: 'pie',
                    name: 'Total consumption',
                    data: [{
                            name: 'Gerogranjas',
                            y: <?php echo $totglogerog; ?>/*,
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