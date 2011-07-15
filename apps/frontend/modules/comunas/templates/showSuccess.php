<head>
<script type="text/javascript" src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAAu3uVCBNwwIgRLVQOs8Uz8xSlKUFWB4K2ApdoW_qVIa3-3PXYdRQUEu-PIU8HC7DnxJ7QuqswQBhJZA">/*** EasyGoogleMap Class by: Mitchelle Pascual ***/</script>
</head>

<div id="map"></div>
<table>
  <tbody>
    <tr>
      <th>Identificador:</th>
      <td><?php echo $comunasconst->getId() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $comunasconst->getEstado() ?></td>
    </tr>
    <tr>
      <th>Municipio:</th>
      <td><?php echo $comunasconst->getMunicipio() ?></td>
    </tr>
    <tr>
      <th>Parroquia:</th>
      <td><?php echo $comunasconst->getParroquia() ?></td>
    </tr>
    <tr>
      <th>Dirección:</th>
      <td><?php echo $comunasconst->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Nombre de la Comuna:</th>
      <td><?php echo $comunasconst->getNombre() ?></td>
    </tr>
    <tr>
      <th>Nombre del Responsable de la Comuna:</th>
      <td><?php echo $comunasconst->getResponsable() ?></td>
    </tr>
    <tr>
      <th>Telefono principal:</th>
      <td><?php echo $comunasconst->getTelf1() ?></td>
    </tr>
    <tr>
      <th>Telefono opcional:</th>
      <td><?php echo $comunasconst->getTelf2() ?></td>
    </tr>
    <tr>
      <th>Email principal:</th>
      <td><?php echo $comunasconst->getMail1() ?></td>
    </tr>
    <tr>
      <th>Email opcional:</th>
      <td><?php echo $comunasconst->getMail2() ?></td>
    </tr>
    <tr>
      <th>Tipo de Centro:</th>
      <td><?php echo $comunasconst->getType() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos Salud:</th>
      <td><?php echo $comunasconst->getAdultosMsalud() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas Salud:</th>
      <td><?php echo $comunasconst->getAdultosFsalud() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos Social:</th>
      <td><?php echo $comunasconst->getAdultosMsocial() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas Social:</th>
      <td><?php echo $comunasconst->getAdultosFsocial() ?></td>
    </tr>
    <tr>
      <th>Adultos con Atención Economica:</th>
      <td><?php echo $comunasconst->getAdultosMeconomico() ?></td>
    </tr>
    <tr>
      <th>Adultas con Atención Economica:</th>
      <td><?php echo $comunasconst->getAdultosFeconomico() ?></td>
    </tr>
    <tr>
      <th>Adultos con Atención Técnica:</th>
      <td><?php echo $comunasconst->getAdultosMtecnica() ?></td>
    </tr>
    <tr>
      <th>Adultas con Atención Técnica:</th>
      <td><?php echo $comunasconst->getAdultosFtecnica() ?></td>
    </tr>
    <tr>
      <th>Adultos con Atención Productiva:</th>
      <td><?php echo $comunasconst->getAdultosMproductiva() ?></td>
    </tr>
    <tr>
      <th>Adultas con Atención Productiva:</th>
      <td><?php echo $comunasconst->getAdultosFproductiva() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos:</th>
      <td><?php echo $comunasconst->getAdultosM() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas:</th>
      <td><?php echo $comunasconst->getAdultosF() ?></td>
    </tr>
    <tr>
      <th>Total Adultos:</th>
      <td><?php echo $comunasconst->getAdultosT() ?></td>
    </tr>
    <tr>
      <th>Latitud:</th>
      <td><?php echo $comunasconst->getLatitud() ?></td>
    </tr>
    <tr>
      <th>Longitud:</th>
      <td><?php echo $comunasconst->getLongitud() ?></td>
    </tr>
  </tbody>
</table>


<?php $lat =  $comunasconst->getLatitud(); ?>
<?php $lon =  $comunasconst->getLongitud(); ?>


<script type="text/javascript">
function load() {
	if (GBrowserIsCompatible()) {

		var map = new GMap2(document.getElementById("map"));
		map.addControl(new GLargeMapControl());
		map.addControl(new GMapTypeControl());
		map.setCenter(new GLatLng(<?php echo $lat; ?>,<?php echo $lon; ?>), 12);

		//Creo y muestro una marca
		var puntoMarca1 = new GLatLng(<?php echo $lat; ?>,<?php echo $lon; ?>);
		var marca1 = new GMarker(puntoMarca1);
		map.addOverlay(marca1);
		//añado un evento a la marca para que reaccione al clic
		GEvent.addListener(marca1, "click", function (){
			//creo las pestañas
			var pestana1 = new GInfoWindowTab("Etiqueta1","<div style='width: 300px;'>Este es el texto de la etiqueta 1</div>");
			var pestana2 = new GInfoWindowTab("Etiq","<div style='width: 300px;'>Ahora estoy en la 2");
			var pestana3 = new GInfoWindowTab("Otra","<div style='width: 300px;'><b>Tercera pesta&ntilde;a:</b><br>Colocar&eacute; otros contenidos para ver lo que pasa.");
			marca1.openInfoWindowTabsHtml([pestana1, pestana2, pestana3]);

		});


		function crearMarcaPestanas(punto,arrayEtiquetas, arrayContenidos) {
			var marca = new GMarker(punto);
			var arrayPestanas = new Array();
			var anchuraPestanas = arrayEtiquetas.length * 90;
			for (i=0; i < arrayEtiquetas.length; i++){
				arrayPestanas[i] = new GInfoWindowTab(arrayEtiquetas[i], "<div style='width: " + anchuraPestanas + "px;'>" + arrayContenidos[i] + "</div>");
			}
			GEvent.addListener(marca, "click", function() {
				marca.openInfoWindowTabsHtml(arrayPestanas);
			});
			return marca;
		}

	}
}
window.onload=load
//]]>
</script>


<hr />
<div class="boton_fin">
<a class="link-blanco" href="<?php echo url_for('comunas/edit?id='.$comunasconst->getId()) ?>">Editar</a>
&nbsp;
</div>
<div class="boton_fin">
<a class="link-blanco" href="<?php echo url_for('comunas/index') ?>">Volver</a>
</div>