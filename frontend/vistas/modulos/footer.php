<!--=====================================
FOOTER
======================================-->

<footer class="container-fluid">

	<div class="container">

		<div class="row">

			<!--=====================================
			CATEGORÍAS Y SUBCATEGORÍAS FOOTER
			======================================-->

			<div class="col-lg-5 col-md-6 col-xs-12 footerCategorias">

				<?php

				$url = Ruta::ctrRuta();

				$item = null;
				$valor = null;

				$categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

				foreach ($categorias as $key => $value) {

					echo '<div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">

						<h4><a href="'.$url.$value["ruta"].'" class="pixelCategorias" titulo="'.$value["categoria"].'">'.$value["categoria"].'</a></h4>

						<hr>

						<ul>';

						$item = "id_categoria";

						$valor = $value["id"];

						$subcategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
						
						foreach ($subcategorias as $key => $value) {
						
							echo '<li><a href="'.$url.$value["ruta"].'" class="pixelSubCategorias" titulo="'.$value["subcategoria"].'">'.$value["subcategoria"].'</a></li>';

						}

						echo '</ul>

					</div>';

				}

			?>

			</div>

			<!--=====================================
			DATOS CONTACTO
			======================================-->

			<div class="col-md-3 col-sm-6 col-xs-12 text-left infoContacto">

				<h5>Dudas e inquietudes, contáctenos en:</h5>

				<br>

				<h5>

					<i class="fa fa-phone-square" aria-hidden="true"></i> (555) 555-55-55

					<br><br>

					<i class="fa fa-envelope" aria-hidden="true"></i> soporte@tiendavirtual.com

					<br><br>

					<i class="fa fa-map-marker" aria-hidden="true"></i> Sierra de banderas #569

					<br><br>
					Torreón Coahuila | México

				</h5>

				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.461104772374!2d-103.3584094846398!3d25.556321683730474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fc4d2934346a3%3A0xf8a5e9a340a7573d!2sSierra%20de%20Banderas%20569%2C%20Cd%20Nazas%20Pol%C3%ADgono%2024%2C%20Torre%C3%B3n%2C%20Coah!5e0!3m2!1ses-419!2smx!4v1592030275554!5m2!1ses-419!2smx"
					width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<!--=====================================
			FORMULARIO CONTÁCTENOS
			======================================-->

			<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 formContacto">

				<h4>Contactanos si tienes alguna duda</h4>

				<form role="form" method="post" onsubmit="return validarContactenos()">

					<input type="text" id="nombreContactenos" name="nombreContactenos" class="form-control"
						placeholder="Escriba su nombre" required>

					<br>

					<input type="email" id="emailContactenos" name="emailContactenos" class="	form-control"
						placeholder="Escriba su correo electrónico" required>

					<br>

					<textarea id="mensajeContactenos" name="mensajeContactenos" class="form-control"
						placeholder="Escriba su mensaje" rows="5" required></textarea>

					<br>

					<input type="submit" value="Enviar" class="btn btn-default backColor pull-right" id="enviar">

				</form>

				<?php 

					$contactenos = new ControladorUsuarios();
					$contactenos -> ctrFormularioContactenos();

				?>

			</div>

		</div>

	</div>

</footer>


<!--=====================================
FINAL
======================================-->

<div class="container-fluid final">

	<div class="container">

		<div class="row">

			<div class="col-sm-6 col-xs-12 text-left text-muted">

				<h5>&copy; 2020 Todos los derechos reservados. Ingeniería Digital</h5>

			</div>

			<div class="col-sm-6 col-xs-12 text-right social">

				<ul>

					<?php
				
			$social = ControladorPlantilla::ctrEstiloPlantilla();

				$jsonRedesSociales = json_decode($social["redesSociales"],true);		

				foreach ($jsonRedesSociales as $key => $value) {

					echo '<li>
							<a href="'.$value["url"].'" target="_blank">
								<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
							</a>
						</li>';
				}

			?>

				</ul>

			</div>

		</div>

	</div>

</div>