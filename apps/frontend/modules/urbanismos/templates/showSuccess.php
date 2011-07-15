<head>
<script type="text/javascript" src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAAu3uVCBNwwIgRLVQOs8Uz8xSlKUFWB4K2ApdoW_qVIa3-3PXYdRQUEu-PIU8HC7DnxJ7QuqswQBhJZA">/*** EasyGoogleMap Class by: Mitchelle Pascual ***/</script>
</head>

<div id="map"></div>
<table>
  <tbody>
    <tr>
      <th>Identificador:</th>
      <td><?php echo $nuevosurb->getId() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $nuevosurb->getEstado() ?></td>
    </tr>
    <tr>
      <th>Municipio:</th>
      <td><?php echo $nuevosurb->getMunicipio() ?></td>
    </tr>
    <tr>
      <th>Parroquia:</th>
      <td><?php echo $nuevosurb->getParroquia() ?></td>
    </tr>
    <tr>
      <th>Dirección:</th>
      <td><?php echo $nuevosurb->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Nombre del Nuevo Urbanismo:</th>
      <td><?php echo $nuevosurb->getNombre() ?></td>
    </tr>
    <tr>
      <th>Nombre del Responsable de la nuevosurb:</th>
      <td><?php echo $nuevosurb->getResponsable() ?></td>
    </tr>
    <tr>
      <th>Telefono principal:</th>
      <td><?php echo $nuevosurb->getTelf1() ?></td>
    </tr>
    <tr>
      <th>Telefono opcional:</th>
      <td><?php echo $nuevosurb->getTelf2() ?></td>
    </tr>
    <tr>
      <th>Email principal:</th>
      <td><?php echo $nuevosurb->getMail1() ?></td>
    </tr>
    <tr>
      <th>Email opcional:</th>
      <td><?php echo $nuevosurb->getMail2() ?></td>
    </tr>
    <tr>
      <th>Tipo de Centro:</th>
      <td><?php echo $nuevosurb->getType() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos Salud:</th>
      <td><?php echo $nuevosurb->getAdultosMsalud() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas Salud:</th>
      <td><?php echo $nuevosurb->getAdultosFsalud() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos Social:</th>
      <td><?php echo $nuevosurb->getAdultosMsocial() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas Social:</th>
      <td><?php echo $nuevosurb->getAdultosFsocial() ?></td>
    </tr>
    <tr>
      <th>Adultos con Atención Economica:</th>
      <td><?php echo $nuevosurb->getAdultosMeconomico() ?></td>
    </tr>
    <tr>
      <th>Adultas con Atención Economica:</th>
      <td><?php echo $nuevosurb->getAdultosFeconomico() ?></td>
    </tr>
    <tr>
      <th>Adultos con Atención Técnica:</th>
      <td><?php echo $nuevosurb->getAdultosMtecnica() ?></td>
    </tr>
    <tr>
      <th>Adultas con Atención Técnica:</th>
      <td><?php echo $nuevosurb->getAdultosFtecnica() ?></td>
    </tr>
    <tr>
      <th>Adultos con Atención Productiva:</th>
      <td><?php echo $nuevosurb->getAdultosMproductiva() ?></td>
    </tr>
    <tr>
      <th>Adultas con Atención Productiva:</th>
      <td><?php echo $nuevosurb->getAdultosFproductiva() ?></td>
    </tr>
    <tr>
      <th>Adultos Atendidos:</th>
      <td><?php echo $nuevosurb->getAdultosM() ?></td>
    </tr>
    <tr>
      <th>Adultas Atendidas:</th>
      <td><?php echo $nuevosurb->getAdultosF() ?></td>
    </tr>
    <tr>
      <th>Total Adultos:</th>
      <td><?php echo $nuevosurb->getAdultosT() ?></td>
    </tr>
    <tr>
      <th>Latitud:</th>
      <td><?php echo $nuevosurb->getLatitud() ?></td>
    </tr>
    <tr>
      <th>Longitud:</th>
      <td><?php echo $nuevosurb->getLongitud() ?></td>
    </tr>
  </tbody>
</table>


<?php $lat =  $nuevosurb->getLatitud(); ?>
<?php $lon =  $nuevosurb->getLongitud(); ?>


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
<a class="link-blanco" href="<?php echo url_for('urbanismos/edit?id='.$nuevosurb->getId()) ?>">Editar</a>
&nbsp;
</div>
<div class="boton_fin">
<a class="link-blanco" href="<?php echo url_for('urbanismos/index') ?>">Volver</a>
</div>