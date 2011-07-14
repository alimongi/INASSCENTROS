<?php use_javascript('highcharts')?>
<div id="container2" style="width: 100%; height: 100px"></div>

<?php  $MSald = 0; ?>
<?php  $MSamb = 0; ?>
<?php  $MSres = 0; ?>
<?php  $MSref = 0; ?>
<?php  $MSger = 0; ?>
<?php  $FSald = 0; ?>
<?php  $FSamb = 0; ?>
<?php  $FSres = 0; ?>
<?php  $FSref = 0; ?>
<?php  $FSger = 0; ?>
<?php  $MSoald = 0; ?>
<?php  $MSoamb = 0; ?>
<?php  $MSores = 0; ?>
<?php  $MSoref = 0; ?>
<?php  $MSoger = 0; ?>
<?php  $FSoald = 0; ?>
<?php  $FSoamb = 0; ?>
<?php  $FSores = 0; ?>
<?php  $FSoref = 0; ?>
<?php  $FSoger = 0; ?>
<?php  $MEald = 0; ?>
<?php  $MEamb = 0; ?>
<?php  $MEres = 0; ?>
<?php  $MEref = 0; ?>
<?php  $MEger = 0; ?>
<?php  $FEald = 0; ?>
<?php  $FEamb = 0; ?>
<?php  $FEres = 0; ?>
<?php  $FEref = 0; ?>
<?php  $FEger = 0; ?>
<?php  $MTald = 0; ?>
<?php  $MTamb = 0; ?>
<?php  $MTres = 0; ?>
<?php  $MTref = 0; ?>
<?php  $MTger = 0; ?>
<?php  $FTald = 0; ?>
<?php  $FTamb = 0; ?>
<?php  $FTres = 0; ?>
<?php  $FTref = 0; ?>
<?php  $FTger = 0; ?>
<?php  $MPald = 0; ?>
<?php  $MPamb = 0; ?>
<?php  $MPres = 0; ?>
<?php  $MPref = 0; ?>
<?php  $MPger = 0; ?>
<?php  $FPald = 0; ?>
<?php  $FPamb = 0; ?>
<?php  $FPres = 0; ?>
<?php  $FPref = 0; ?>
<?php  $FPger = 0; ?>
<?php  $aveMs = 0; ?>
<?php  $aveFs = 0; ?>
<?php  $aveMso = 0; ?>
<?php  $aveFso = 0; ?>
<?php  $aveME = 0; ?>
<?php  $aveFE = 0; ?>
<?php  $aveMT = 0; ?>
<?php  $aveFT = 0; ?>
<?php  $aveMP = 0; ?>
<?php  $aveFP = 0; ?>
<?php  $Totalald = 0; ?>
<?php  $Totalamb = 0; ?>
<?php  $Totalres = 0; ?>
<?php  $Totalref = 0; ?>
<?php  $Totalger = 0; ?>

<?php foreach ($centros as $centro): ?>
 
<?php $centro->getType() ?>
<?php $centro->getAdultosMsalud() ?>
<?php $centro->getAdultosFsalud() ?>
<?php $centro->getAdultosMsocial() ?>
<?php $centro->getAdultosFsocial() ?>
<?php $centro->getAdultosMeconomico() ?>
<?php $centro->getAdultosFeconomico() ?>
<?php $centro->getAdultosMtecnica() ?>
<?php $centro->getAdultosFtecnica() ?>
<?php $centro->getAdultosMproductiva() ?>
<?php $centro->getAdultosFproductiva() ?>
<?php $centro->getAdultosT() ?>

<?php
if($centro->getType() == "Residencial"):
   $Totalres = $Totalres + $centro->getAdultosT();
   $MSres =  $MSres + $centro->getAdultosMsalud();
   $FSres = $FSres + $centro->getAdultosFsalud();
   $MSores = $MSores + $centro->getAdultosMsocial();
   $FSores = $FSores + $centro->getAdultosFsocial();
   $MEres =  $MEres + $centro->getAdultosMeconomico();
   $FEres = $FEres + $centro->getAdultosFeconomico();
   $MTres = $MTres + $centro->getAdultosMtecnica();
   $FTres = $FTres + $centro->getAdultosFtecnica();
   $MPres = $MPres + $centro->getAdultosMproductiva();
   $FPres = $FPres + $centro->getAdultosFproductiva();
endif;
?>

<?php
if($centro->getType() == "Ambulatorio"):
   $Totalamb = $Totalamb + $centro->getAdultosT();
   $MSamb =  $MSamb + $centro->getAdultosMsalud();
   $FSamb = $FSamb + $centro->getAdultosFsalud();
   $MSoamb = $MSoamb + $centro->getAdultosMsocial();
   $FSoamb = $FSoamb + $centro->getAdultosFsocial();
   $MEamb =  $MEamb + $centro->getAdultosMeconomico();
   $FEamb = $FEamb + $centro->getAdultosFeconomico();
   $MTamb = $MTamb + $centro->getAdultosMtecnica();
   $FTamb = $FTamb + $centro->getAdultosFtecnica();
   $MPamb = $MPamb + $centro->getAdultosMproductiva();
   $FPamb = $FPamb + $centro->getAdultosFproductiva();
endif;
?>

<?php
if($centro->getType() == "Gerogranja"):
   $Totalger = $Totalger + $centro->getAdultosT();
   $MSger =  $MSger + $centro->getAdultosMsalud();
   $FSger = $FSger + $centro->getAdultosFsalud();
   $MSoger = $MSoger + $centro->getAdultosMsocial();
   $FSoger = $FSoger + $centro->getAdultosFsocial();
   $MEger =  $MEger + $centro->getAdultosMeconomico();
   $FEger = $FEger + $centro->getAdultosFeconomico();
   $MTger = $MTger + $centro->getAdultosMtecnica();
   $FTger = $FTger + $centro->getAdultosFtecnica();
   $MPger = $MPger + $centro->getAdultosMproductiva();
   $FPger = $FPger + $centro->getAdultosFproductiva();
endif;
?>

<?php
if($centro->getType() == "Aldea"):
   $Totalald = $Totalald + $centro->getAdultosT();
   $MSald =  $MSald + $centro->getAdultosMsalud();
   $FSald = $FSald + $centro->getAdultosFsalud();
   $MSoald = $MSoald + $centro->getAdultosMsocial();
   $FSoald = $FSoald + $centro->getAdultosFsocial();
   $MEald =  $MEald + $centro->getAdultosMeconomico();
   $FEald = $FEald + $centro->getAdultosFeconomico();
   $MTald = $MTald + $centro->getAdultosMtecnica();
   $FTald = $FTald + $centro->getAdultosFtecnica();
   $MPald = $MPald + $centro->getAdultosMproductiva();
   $FPald = $FPald + $centro->getAdultosFproductiva();
endif;
?>

<?php
if($centro->getType() == "Refugio"):
   $Totalref = $Totalref + $centro->getAdultosT();
   $MSref =  $MSref + $centro->getAdultosMsalud();
   $FSref = $FSref + $centro->getAdultosFsalud();
   $MSoref = $MSoref + $centro->getAdultosMsocial();
   $FSoref = $FSoref + $centro->getAdultosFsocial();
   $MEref =  $MEref + $centro->getAdultosMeconomico();
   $FEref = $FEref + $centro->getAdultosFeconomico();
   $MTref = $MTref + $centro->getAdultosMtecnica();
   $FTref = $FTref + $centro->getAdultosFtecnica();
   $MPref = $MPref + $centro->getAdultosMproductiva();
   $FPref = $FPref + $centro->getAdultosFproductiva();
endif;
?>

    <?php endforeach; ?>

<?php  $aveMs = ($MSres + $MSamb + $MSger + $MSald + $MSref) / 5; ?>
<?php  $aveFs = ($FSres + $FSamb + $FSger + $FSald + $FSref) / 5; ?>
<?php  $aveMso = ($MSores + $MSoamb + $MSoger + $MSoald + $MSoref) / 5; ?>
<?php  $aveFso = ($FSores + $FSoamb + $FSoger + $FSoald + $FSoref) / 5; ?>
<?php  $aveME = ($MEres + $MEamb + $MEger + $MEald + $MEref) / 5; ?>
<?php  $aveFE = ($FEres + $FEamb + $FEger + $FEald + $FEref) / 5; ?>
<?php  $aveMT = ($MTres + $MTamb + $MTger + $MTald + $MTref) / 5; ?>
<?php  $aveFT = ($FTres + $FTamb + $FTger + $FTald + $FTref) / 5; ?>
<?php  $aveMP = ($MPres + $MPamb + $MPger + $MPald + $MPref) / 5; ?>
<?php  $aveFP = ($FPres + $FPamb + $FPger + $FPald + $FPref) / 5; ?>

<?php $datosres = implode(',', array($MSres, $FSres, $MSores, $FSores, $MEres, $FEres, $MTres, $FTres, $MPres, $FPres)); ?>
<?php $datosamb = implode(',', array($MSamb, $FSamb, $MSoamb, $FSoamb, $MEamb, $FEamb, $MTamb, $FTamb, $MPamb, $FPamb)); ?>
<?php $datosger = implode(',', array($MSger, $FSger, $MSoger, $FSoger, $MEger, $FEger, $MTger, $FTger, $MPger, $FPger)); ?>
<?php $datosald = implode(',', array($MSald, $FSald, $MSoald, $FSoald, $MEald, $FEald, $MTald, $FTald, $MPald, $FPald)); ?>
<?php $datosref = implode(',', array($MSref, $FSref, $MSoref, $FSoref, $MEref, $FEref, $MTref, $FTref, $MPref, $FPref)); ?>
<?php $datosave = implode(',', array($aveMs, $aveFs, $aveMso, $aveFso, $aveME, $aveFE, $aveMT, $aveFT, $aveMP, $aveFP)); ?>

<script type="text/javascript">
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container'
            },
            title: {
                text: 'Atención Adultos y Adultas Mayor'
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
                    name: 'Residencial',
                    data: [<?php echo $datosres; ?>]
                }, {
                    type: 'column',
                    name: 'Ambulatorio',
                    data: [<?php echo $datosamb; ?>]
                }, {
                    type: 'column',
                    name: 'Geogranja',
                    data: [<?php echo $datosger; ?>]
                }, {
                    type: 'column',
                    name: 'Aldea',
                    data: [<?php echo $datosald; ?>]
                }, {
                    type: 'column',
                    name: 'Refugio',
                    data: [<?php echo $datosref; ?>]
                }, {
                    type: 'spline',
                    name: 'Promedio',
                    data: [<?php echo $datosave; ?>]
                }, {
                    type: 'pie',
                    name: 'Total consumption',
                    data: [{
                            name: 'Residencial',
                            y: <?php echo $Totalres; ?>/*,
                            color: highchartsOptions.colors[0]*/ // Jane's color
                        }, {
                            name: 'Ambulatorio',
                            y: <?php echo $Totalamb; ?>/*,
                            color: highchartsOptions.colors[1]*/ // John's color
                        }, {
                            name: 'Gerogranja',
                            y: <?php echo $Totalger; ?>/*,
                            color: highchartsOptions.colors[2]*/ // John's color
                        }, {
                            name: 'Aldea',
                            y: <?php echo $Totalald; ?>/*,
                            color: highchartsOptions.colors[1]*/ // John's color
                        }, {
                            name: 'Refugio',
                            y: <?php echo $Totalref; ?>/*,
                            color: highchartsOptions.colors[2]*/ // Joe's color
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