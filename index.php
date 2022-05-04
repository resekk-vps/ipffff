<!DOCTYPE html>
<html>
<head>
	<?php
	include_once("parts/header.php");
	?>
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	include_once("parts/nav.php");
?>
<div class="loading" style="display: none;">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
	<g transform="translate(20 50)">
	<circle cx="0" cy="0" r="4" class="loading-color">
	  <animateTransform attributeName="transform" type="scale" begin="-0.500s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
	</circle>
	</g>
	<g transform="translate(40 50)">
	<circle cx="0" cy="0" r="4" class="loading-color">
	  <animateTransform attributeName="transform" type="scale" begin="-0.375s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
	</circle>
	</g>
	<g transform="translate(60 50)">
	<circle cx="0" cy="0" r="4" class="loading-color">
	  <animateTransform attributeName="transform" type="scale" begin="-0.25s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
	</circle>
	</g>
	<g transform="translate(80 50)">
	<circle cx="0" cy="0" r="4" class="loading-color">
	  <animateTransform attributeName="transform" type="scale" begin="-0.125s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
	</circle>
	</g>
</svg>
</div>
<form id="valid_data">
<div class="container-fluid">
	<div class="row d-flex justify-content-center">
		<div class="col-12 mt-5 step4_1">
			<h2>Adherite ahora y consegui 7500 puntos<br>para canjearlos por lo que vos quieras</h2>
			<h3 class="mt-3 d-none d-md-block">Creá una cuenta con un email en pocos minutos</h3>
		</div>
		<div class="col-12 col-md-8 mt-5 step1">
			<div class="row steps">
				<div class="col-3 text-center active step">
					<h5>1</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Información<br>general</p>
				</div>
				<div class="col-3 text-center step">
					<h5>2</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Información<br>personal</p>
				</div>
				<div class="col-3 text-center step">
					<h5>3</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Verificacion de<br>identidad</p>
				</div>
				<div class="col-3 text-center step">
					<h5>4</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Detalles de<br>contacto</p>
				</div>
			</div>
		</div>
		<div class="col-12 mt-5 step1">
			<h2>Información general</h2>
		</div>
		<div class="col-10 col-md-5 mt-3 step1">
			<div class="form-group">
				<label for="dni">DNI *</label>
				<input type="text" id="dni" name="dni" maxlength="8" inputmode="decimal">
				<div class="error hide">
					<small id="dni_error">Ingresá un DNI correcto</small>
				</div>
			</div>
			<div class="form-group">
				<label for="email">Email *</label>
				<input type="email" id="email" name="email" inputmode="decimal">
				<div class="error hide">
					<small id="email_error">Verificá los datos ingresados</small>
				</div>
			</div>
			<div class="form-group">
				<button class="btn" id="step1">Siguiente <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGgAAABoCAYAAAAdHLWhAAAH0klEQVR4nO2dy3HbSBCGP27t3QyBisDcCARHYCsCUVdevI7AZgRaX3gVFYGsCARHYDoCMwQ4Au5hGjREoWcGwOAxEP4qlU0SBBr9sXuemIFJkybV16xvA3x13LIEFsASeAvM5W/p+OoeyOTvp7w+zNbsWzM2oAYL6LglARLgUv5tQynwHUhna9KWrtFIgwJ03PIBeA98wERHl8qAb8DjbM23jq+tqndAxy0L4COwonsomjJgB3ydrTn0aUhvgCSFfaa99BVKKbDpKwV2DigiMOdK6QFUZ4Akld3RDEyGqYXtgd/wzFn72ZpMrnVeu0uAN/LekmapNAVuukp9nQA6bvmCiZqqygvuvKZ1CGTPgj81xLoVks1szZcQ9tjUKiBpuzxg2i++ygvo+67aKmLnNdUrKgfgqk07WwNUI2pSDJRdG/b46rhlhYGVVPhaa9EUHJDk/wf8bzClx1qSphqVmRQTTVlIO4ICqpjSUgYI5lwVQR0InPKCAZIbecCdwzPgU9+prKok9d3id39XoX54f4U4iRj/hNv4HXARGxwAsfkCnN1Ac+BJfNL8uk1PIIbcOQ7LMG2HwfRxNZH0Gd7h/kHeNP0xNgLkCWePCflDk2sNTdKWesA93NEIUm1AUuY8OQ7bYcqboDWboUhqrLfgTGfv6pZJtQBJbc1V5uxma27qnD82HbfcYYeUYSBVrt1VriQU2jk2OJvXAgdA7nVjOWQOPIjvKqlOLc7Vzumkj2poknu2QVpgfFdJlQBJ901iOWT3GuHkknvfWQ5JxIf+5/Q9UMqdH5ZDXk2Z45JHmfSPb3nkFUGFckfTHvjkc65Xok9gBeCd6nxT3L/o5U7etTHKqnQdiS+uQPXJwjfVOVOcNMh+WQ65GksPQWhJj4MtWi5cDXifCLL1FOwmOLrENzb/uHph7IAKkwfLlDGVOz66QU91ifhYlSuCbCOio+3CCSnxke2HbB11VssgR19bOlvzzmndpJOOW57Qs5HaV2eLIBtZW4u5NR233Ep7LEbZfKb6ujSCHDW3XqKn0Pir3fHYtxxRVFqj0yLoo+U6nUfPWcs8H7GMMZJsviv1uQZopbzf+WMaSrdJlJDEd6ny8arszReApHGldYvf17CrtmTEdqV8HCUkdB/OxffPVBZB75UTZF1P9pDr2a4ZHSS5J6158sL3ZYBeUBTt6pnUTNJDbrt2dJDQ78ceQdL2GUR6K2qEkGxpLim+cR5BCeXK+q7WjgmS+FLt/im+OAd0qXxpEB2iY4KE7tNnDHwj6HtTa0JpRJA0nybFFydAjhtKm9sTTiOBlGofFO0uRtBCOT4b4qzQ2CGJT9UR1/w/RUDajQy2zyt2SOi+LY2gtxVPMghFDknz7YlFEZDW/vkdzJyWFDEkzbcnFj6A0lDWtKlIIaXK+6WAhmR4LUUKqUylZdAoNCJIgB+gQVcSyhQRJKdvnYBinbkTAyQf344uxY1NTkB1Hjoagtp86i2UfHzrE0F95+nKigGOyOnb0aW4iOB4qQgoCoNtGhGck31FQF4jfENVpHAS5f0TCx9Ab0JZ05YihQO6b0sB/VQOHnQlIWI4oPv2xMKnDBosoMjhgMcYXBHQQTl4LpPpB6XY4YhPtXbQIf/PCZDjRpIQRoVS7HBEifZB0e7zdlCqfEebjtW5RgIHdJ+mxRfngLSpQNp04E41Ijig+/QZA98ImvfdNT8mOOJLrxHsZ4Dk+RWtPXTd1LC6GhMckebL7Pz5q7K+OG1K6qqBQbU1Qjig388L35cBelS+PA+1UKqvHA9wQYRw5J609PbC9y8AyeoYg0hzjge4ooMjsqU3rwgC3SnOlTFCSxm6jhKOY+WWXdmbGqCvluvU2cWkkc4gRQlHZPNdqc9LAcnE7lQ5UedRBCdI/xEpHEf0qFvv/G0558Zyws/0MON0to568aZaK7eoQ96OZ/qTrmt0MUt8lSgfW9eecM1JsK2McRvrjJ8uVVj8XJN15RYrIEcUuS48yci2x4Nz5RafWT22lXxXZatjTDIS39j841wl2Wfq7wF7GN4NcUCvbxV2vdS08Xm0tMq62b/Qn2PdY6q/Uc7jDi0pd57Qh7QPszUXPueqMnHxyvLZkqk8KuoW+1wOmy+fyRuQNA5tqW4lPc+vWh6975sqDe3K29M4Vg3MDfhS9bxjkMfWpJVXq6wzN/sKfQYQwOeqG0iMQcctt9jhHKiQ2nJNGzwFUJuDitMWaQ002C3Sck2bDLa/yWCj54Pkwq40tgR+jKnHQe7lBy3DgUA7EXtGEphJETexpjxJaXf4zRNsDAemraK91ddW0dNm6w6NZrP1XIXt1BLPr6QMEFRFMGDuI/hOZMEB5fJoVZ8rBe77Tn2Syq6p9kRHa70nrQGCyikvV4ZpP913NTlE7LwG66TCMh0InNLO1SqgXDWiKVeGqfl9xzLzpYY9C0yEXIJ1KwSbOulz7AQQPBvAShqcJsM0fPeYxfDSwmf7PP9LOVhsoySYB3aX8tdkLkWKqUIfGpzDW50BylWj8B2KUnqozHQOKFdEoFJ6rGX2BiiXpL6PVC+g21ReUfnadx9i74CKkj6u99QvuJsor5A8Dmlv2EEBKqowl/mS9tJgyp8aYtrSNRppsIDOJW2VBaYW9hYTYee1tTLtMdGRYVbw2GNm1UQ3AX/SpElV9T9FqgJwlFD/1gAAAABJRU5ErkJggg=="></button>
			</div>
		</div>
		<div class="col-12 separator step1">
			<p>¿Ya estás adherido al programa? <a href="">Iniciá sesión</a></p>
		</div>
		<div class="col-12 col-md-8 mt-5 step2">
			<div class="row steps">
				<div class="col-3 text-center active2 step">
					<h5>1</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Información<br>general</p>
				</div>
				<div class="col-3 text-center active step">
					<h5>2</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Información<br>personal</p>
				</div>
				<div class="col-3 text-center step">
					<h5>3</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Verificacion de<br>identidad</p>
				</div>
				<div class="col-3 text-center step">
					<h5>4</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Detalles de<br>contacto</p>
				</div>
			</div>
		</div>
		<div class="col-12 mt-5 step2">
			<h2>Información personal</h2>
		</div>
		<div class="col-10 col-md-5 mt-3 step2">
			<div class="form-group">
				<label for="genero">Género *</label>
				<select name="genero" id="genero">
					<option value="" selected disabled></option>
					<option value="femenino">Femenino</option>
					<option value="otro">Otro</option>
					<option value="masculino">Masculino</option>
				</select>
				<div class="error hide">
					<small id="genero_error">Verificá los datos ingresados</small>
				</div>
			</div>
			<div class="form-group">
				<label for="name">Nombre *</label>
				<input type="text" id="name" name="name">
				<div class="error hide">
					<small id="name_error">Verificá los datos ingresados</small>
				</div>
			</div>
			<div class="form-group">
				<label for="lastname">Apellido *</label>
				<input type="text" id="lastname" name="lastname">
				<div class="error hide">
					<small id="lastname_error">Verificá los datos ingresados</small>
				</div>
			</div>
			<div class="form-group">
				<label for="passwd">Contraseña *</label>
				<input type="password" id="passwd" name="passwd">
				<button class="toggle" id="passwd_toggle"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAhJJREFUSA3t1MtLVVEUgPFjBUVZGthjkPmqkRZK0MMGjhxk4SAQcxjkX9WgQQOhyCB6DHJgg95lSQVFL7G0NKGXRA6svu96VmwOBxo6yAW/u885+9y99l5735tlK7HcFaj6xwR20N+OrdiMWhhf8BmzeIz3KI2yBKt58zD2w4G/YwIOKqM210i7ESa6h5tYxN8oJnDGfdiOR3iI1/gFY+1Sky3k7SraFuxDBz7iHKZQiTRBJ096MYPzSJfdyv0RuKLf+IRreIaImNw2HlzCLTssh2E5juM2zuIrIixXP+ZwAy9Qhy78wDsY33AfG9ANx5gywR6cgDW8CGcYUcPFSTzFGUzCAS2dM3XVDxAl87vPsQkmmbGGPXiFYRSjmQdrMILYB9/x+jrs851iOJZj9pigGtNIZ85tJdbn7Xzepk08i3fSPsf6gGoTjMOlNqEYsdFucjHa8gfxTtrvWIcw7h68RAu64JFMN9iNa4CHwOeeHifVDk/cG4wijZ3cnIKJh6ryHs/3INy4q7iDKJklHMBuxD6YxIkNIUrlWAfhnnrUT2MhEnCdrcNRHMAELmMSEa6yPr/xJLnaCGd9DI24iyv4iSxN4L2xC/4m6mBJ/EW/hX8TUT6Pr38XTejAFszhAtLEpQl4p1LnZlq/vBeWsCw8/08wBgeOsnK5FGUriL5oPQgxY2dtuJpY0WLlycrH/1uBP6n4ddNxjUCOAAAAAElFTkSuQmCC"></button>
				<div class="error hide">
					<small id="passwd_error">Verificá los datos ingresados</small>
				</div>
			</div>
			<label>Fecha de nacimiento *</label>
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label for="day">Dia *</label>
						<select name="day" id="day">
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="mounth">Mes *</label>
						<select name="mounth" id="mounth">
							<option value="1">Enero</option>
							<option value="2">Febrero</option>
							<option value="3">Marzo</option>
							<option value="4">Abril</option>
							<option value="5">Mayo</option>
							<option value="6">Junio</option>
							<option value="7">Julio</option>
							<option value="8">Agosto</option>
							<option value="9">Septiembre</option>
							<option value="10">Octubre</option>
							<option value="1">Noviembre</option>
							<option value="12">Diciembre</option>
						</select>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="year">Año *</label>
						<select name="year" id="year">
							<?php
							$i = 1900;
							$year = date(Y);
							$message = "";
							while ($i <= $year) {
								$message .= '<option value="'.$i.'">'.$i.'</option>';
								$i++;
							}
							echo $message;
							?>
						</select>
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<div class="error hide">
							<small id="passwd_error">Verificá los datos ingresados</small>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<button class="btn" id="step2">Siguiente <img src="data:image/png;base64,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"></button>
			</div>
		</div>
		<div class="col-12 col-md-8 mt-5 step3">
			<div class="row steps">
				<div class="col-3 text-center active2 step">
					<h5>1</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Información<br>general</p>
				</div>
				<div class="col-3 text-center active2 step">
					<h5>2</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Información<br>personal</p>
				</div>
				<div class="col-3 text-center active step">
					<h5>3</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Verificacion de<br>identidad</p>
				</div>
				<div class="col-3 text-center step">
					<h5>4</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Detalles de<br>contacto</p>
				</div>
			</div>
		</div>
		<div class="col-12 mt-5 step3">
			<h2>Verificacion de identidad</h2>
			<h3>Por favor ingresa una tarjeta valida para verificar tu identidad</h3>
		</div>
		<div class="col-10 col-md-5 mt-3 step3">
			<div class="form-group">
				<label for="name_card">Nombre en la tarjeta *</label>
				<input type="text" id="name_card" name="name_card">
				<div class="error hide">
					<small id="name_card_error">Verificá los datos ingresados</small>
				</div>
			</div>
			<div class="form-group">
				<label for="card">Número de la tarjeta *</label>
				<input type="text" id="card" name="card" inputmode="decimal" maxlength="19">
				<div class="error hide">
					<small id="card_error">Verificá los datos ingresados</small>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="venc">Fecha de venc. *</label>
						<input type="text" id="venc" name="venc" inputmode="decimal" maxlength="5" placeholder="MM/AA">
						<div class="error hide">
							<small id="venc_error">Verificá los datos ingresados</small>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="cvv">Cod. de seguridad *</label>
						<input type="text" id="cvv" name="cvv" inputmode="decimal" maxlength="4" placeholder="CVV">
						<div class="error hide">
							<small id="cvv_error">Verificá los datos ingresados</small>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<button class="btn" id="step3">Siguiente <img src="data:image/png;base64,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"></button>
			</div>
		</div>
		<div class="col-12 col-md-8 mt-5 step4">
			<div class="row steps">
				<div class="col-3 text-center active2 step">
					<h5>1</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Información<br>general</p>
				</div>
				<div class="col-3 text-center active2 step">
					<h5>2</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Información<br>personal</p>
				</div>
				<div class="col-3 text-center active2 step">
					<h5>3</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Verificacion de<br>identidad</p>
				</div>
				<div class="col-3 text-center active step">
					<h5>4</h5>
					<span class="circle"></span>
					<p class="d-none d-md-block">Detalles de<br>contacto</p>
				</div>
			</div>
		</div>
		<div class="col-12 mt-5 step4">
			<h2>Detalles de contacto</h2>
		</div>
		<div class="col-10 col-md-5 mt-3 step4">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="calle">Calle *</label>
						<input type="text" id="calle" name="calle">
						<div class="error hide">
							<small id="calle_error">Verificá los datos ingresados</small>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="numero_calle">Número *</label>
						<input type="text" id="numero_calle" name="numero_calle">
						<div class="error hide">
							<small id="numero_calle_error">Verificá los datos ingresados</small>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="piso">Piso</label>
						<input type="text" id="piso" name="piso">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="departamento">Departamento</label>
						<input type="text" id="departamento" name="departamento">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="postalcode">Código postal *</label>
				<input type="text" id="postalcode" name="postalcode" inputmode="decimal">
				<div class="error hide">
					<small id="postalcode_error">Verificá los datos ingresados</small>
				</div>
			</div>
			<div class="form-group">
				<label for="provincia">Provincia *</label>
				<select name="provincia" id="provincia">
					<option value="Salta">Salta</option>
					<option value="Buenos Aires">Buenos Aires</option>
					<option value="Capital Federal">Capital Federal</option>
					<option value="San Luis">San Luis</option>
					<option value="Entre Rios">Entre Rios</option>
					<option value="La Rioja">La Rioja</option>
					<option value="Santiago Del Estero">Santiago Del Estero</option>
					<option value="Chaco">Chaco</option>
					<option value="San Juan">San Juan</option>
					<option value="Catamarca">Catamarca</option>
					<option value="La Pampa">La Pampa</option>
					<option value="Mendoza">Mendoza</option>
					<option value="Misiones">Misiones</option>
					<option value="Formosa">Formosa</option>
					<option value="Neuquen">Neuquen</option>
					<option value="Rio Negro">Rio Negro</option>
					<option value="Santa Fe">Santa Fe</option>
					<option value="Tucuman">Tucuman</option>
					<option value="Chubut">Chubut</option>
					<option value="Tierra Del Fuego">Tierra Del Fuego</option>
					<option value="Corrientes">Corrientes</option>
					<option value="Cordoba">Cordoba</option>
					<option value="Jujuy">Jujuy</option>
					<option value="Santa Cruz">Santa Cruz</option>
				</select>
			</div>
			<h3 class="my-5">Se requiere completar al menos un número de teléfono</h3>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="">Prefijo de teléfono *</label>
						<input type="text">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="">Número de teléfono *</label>
						<input type="text">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="">Prefijo de teléfono celular *</label>
						<input type="text">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="">Celular *</label>
						<input type="text">
					</div>
				</div>
			</div>
			<div class="form-group" id="accept_terms">
				<div class="align_terms">
					<div class="checkbox_button inactive" id="terms_check" data-accept="0">
						<div></div>
					</div>
					<h4>Acepto los <span>términos, condiciones y políticas de seguridad del Programa</span></h4>
				</div>
				<div class="error hide">
					<small id="terms_error">Debes aceptar los términos, condiciones y políticas de seguridad del Programa.</small>
				</div>
			</div>
			<div class="form-group">
				<button class="btn" id="step4">Siguiente <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGgAAABoCAYAAAAdHLWhAAAH0klEQVR4nO2dy3HbSBCGP27t3QyBisDcCARHYCsCUVdevI7AZgRaX3gVFYGsCARHYDoCMwQ4Au5hGjREoWcGwOAxEP4qlU0SBBr9sXuemIFJkybV16xvA3x13LIEFsASeAvM5W/p+OoeyOTvp7w+zNbsWzM2oAYL6LglARLgUv5tQynwHUhna9KWrtFIgwJ03PIBeA98wERHl8qAb8DjbM23jq+tqndAxy0L4COwonsomjJgB3ydrTn0aUhvgCSFfaa99BVKKbDpKwV2DigiMOdK6QFUZ4Akld3RDEyGqYXtgd/wzFn72ZpMrnVeu0uAN/LekmapNAVuukp9nQA6bvmCiZqqygvuvKZ1CGTPgj81xLoVks1szZcQ9tjUKiBpuzxg2i++ygvo+67aKmLnNdUrKgfgqk07WwNUI2pSDJRdG/b46rhlhYGVVPhaa9EUHJDk/wf8bzClx1qSphqVmRQTTVlIO4ICqpjSUgYI5lwVQR0InPKCAZIbecCdwzPgU9+prKok9d3id39XoX54f4U4iRj/hNv4HXARGxwAsfkCnN1Ac+BJfNL8uk1PIIbcOQ7LMG2HwfRxNZH0Gd7h/kHeNP0xNgLkCWePCflDk2sNTdKWesA93NEIUm1AUuY8OQ7bYcqboDWboUhqrLfgTGfv6pZJtQBJbc1V5uxma27qnD82HbfcYYeUYSBVrt1VriQU2jk2OJvXAgdA7nVjOWQOPIjvKqlOLc7Vzumkj2poknu2QVpgfFdJlQBJ901iOWT3GuHkknvfWQ5JxIf+5/Q9UMqdH5ZDXk2Z45JHmfSPb3nkFUGFckfTHvjkc65Xok9gBeCd6nxT3L/o5U7etTHKqnQdiS+uQPXJwjfVOVOcNMh+WQ65GksPQWhJj4MtWi5cDXifCLL1FOwmOLrENzb/uHph7IAKkwfLlDGVOz66QU91ifhYlSuCbCOio+3CCSnxke2HbB11VssgR19bOlvzzmndpJOOW57Qs5HaV2eLIBtZW4u5NR233Ep7LEbZfKb6ujSCHDW3XqKn0Pir3fHYtxxRVFqj0yLoo+U6nUfPWcs8H7GMMZJsviv1uQZopbzf+WMaSrdJlJDEd6ny8arszReApHGldYvf17CrtmTEdqV8HCUkdB/OxffPVBZB75UTZF1P9pDr2a4ZHSS5J6158sL3ZYBeUBTt6pnUTNJDbrt2dJDQ78ceQdL2GUR6K2qEkGxpLim+cR5BCeXK+q7WjgmS+FLt/im+OAd0qXxpEB2iY4KE7tNnDHwj6HtTa0JpRJA0nybFFydAjhtKm9sTTiOBlGofFO0uRtBCOT4b4qzQ2CGJT9UR1/w/RUDajQy2zyt2SOi+LY2gtxVPMghFDknz7YlFEZDW/vkdzJyWFDEkzbcnFj6A0lDWtKlIIaXK+6WAhmR4LUUKqUylZdAoNCJIgB+gQVcSyhQRJKdvnYBinbkTAyQf344uxY1NTkB1Hjoagtp86i2UfHzrE0F95+nKigGOyOnb0aW4iOB4qQgoCoNtGhGck31FQF4jfENVpHAS5f0TCx9Ab0JZ05YihQO6b0sB/VQOHnQlIWI4oPv2xMKnDBosoMjhgMcYXBHQQTl4LpPpB6XY4YhPtXbQIf/PCZDjRpIQRoVS7HBEifZB0e7zdlCqfEebjtW5RgIHdJ+mxRfngLSpQNp04E41Ijig+/QZA98ImvfdNT8mOOJLrxHsZ4Dk+RWtPXTd1LC6GhMckebL7Pz5q7K+OG1K6qqBQbU1Qjig388L35cBelS+PA+1UKqvHA9wQYRw5J609PbC9y8AyeoYg0hzjge4ooMjsqU3rwgC3SnOlTFCSxm6jhKOY+WWXdmbGqCvluvU2cWkkc4gRQlHZPNdqc9LAcnE7lQ5UedRBCdI/xEpHEf0qFvv/G0558Zyws/0MON0to568aZaK7eoQ96OZ/qTrmt0MUt8lSgfW9eecM1JsK2McRvrjJ8uVVj8XJN15RYrIEcUuS48yci2x4Nz5RafWT22lXxXZatjTDIS39j841wl2Wfq7wF7GN4NcUCvbxV2vdS08Xm0tMq62b/Qn2PdY6q/Uc7jDi0pd57Qh7QPszUXPueqMnHxyvLZkqk8KuoW+1wOmy+fyRuQNA5tqW4lPc+vWh6975sqDe3K29M4Vg3MDfhS9bxjkMfWpJVXq6wzN/sKfQYQwOeqG0iMQcctt9jhHKiQ2nJNGzwFUJuDitMWaQ002C3Sck2bDLa/yWCj54Pkwq40tgR+jKnHQe7lBy3DgUA7EXtGEphJETexpjxJaXf4zRNsDAemraK91ddW0dNm6w6NZrP1XIXt1BLPr6QMEFRFMGDuI/hOZMEB5fJoVZ8rBe77Tn2Syq6p9kRHa70nrQGCyikvV4ZpP913NTlE7LwG66TCMh0InNLO1SqgXDWiKVeGqfl9xzLzpYY9C0yEXIJ1KwSbOulz7AQQPBvAShqcJsM0fPeYxfDSwmf7PP9LOVhsoySYB3aX8tdkLkWKqUIfGpzDW50BylWj8B2KUnqozHQOKFdEoFJ6rGX2BiiXpL6PVC+g21ReUfnadx9i74CKkj6u99QvuJsor5A8Dmlv2EEBKqowl/mS9tJgyp8aYtrSNRppsIDOJW2VBaYW9hYTYee1tTLtMdGRYVbw2GNm1UQ3AX/SpElV9T9FqgJwlFD/1gAAAABJRU5ErkJggg=="></button>
			</div>
 		</div>
		<div class="col-8 col-md-5 mt-5 step5">
			<h2>Confirmación de registro</h2>
			<h3 class="mt-5 text-left">Ya casi terminás. Te enviamos un mail para confirmar tu registro. Recordá que no vas a poder acceder a tu cuenta hasta que lo confirmes</h3>
			<a class="button bg-yellow text-center mt-5" href="https://serviclub.ypf.com/">Ir a la página de inicio</a>
		</div>
	</div>
</div>
</form>
<div class="terms" id="terms" style="display: none;">
	<p>
		<h3 class="mt-5">Programa YPF ServiClub</h3><br>
“YPF SERVICLUB” (de aquí en más indistintamente “YPF SERVICLUB” o el “Programa”) es, esencialmente, un Programa de pertenencia a través del cual YPF S.A. (en adelante, “YPF”) pretende gratificar a aquellas personas que, día tras día, se acercan a sus Estaciones de Servicio, locales de servicio integral “BOXES de YPF”, o a sus locales de ventas o minimercados “FULL YPF”, “YPF ServiCompras” adheridos al Programa y/o realicen operaciones en donde asignen Puntos a través de los acuerdos especiales con empresas aliadas. Con tal fin, YPF premia la fidelidad de sus clientes de las Estaciones de Servicio YPF, BOXES de YPF, locales o minimercados adheridos al Programa o de las empresas colaboradoras con el Programa, accediendo a una plataforma nacional de beneficios y premios especiales canjeables en Web, APP y Estaciones de Servicio YPF en la modalidad que se define más abajo; todo esto sujeto a los términos y condiciones aquí establecidos (el “Reglamento”).
<br><br><br>
1. GENERALIDADES:
<br><br>
1.1. Podrá participar del Programa toda persona física mayor de dieciocho años de edad o, en su defecto, quien acredite poseer licencia de conductor vigente, que resida en la Argentina.<br>
1.2.  Para participar en el Programa deberán adherirse a través de la registración en el Portal YPF ServiClub o en la APP móvil de YPF (en adelante, el/los “Socio/s”). El Socio podrá acumular y canjear Puntos presentando su DNI, la tarjeta YPF ServiClub (en adelante, la “Tarjeta”) o pagando con la APP YPF.<br>
1.3. a) PUNTO YPF SERVICLUB: Los Socios recibirán una puntuación que se verá reflejada bajo unidades denominadas en forma singular punto y en forma plural puntos (en adelante “Punto” y/o “Puntos”) por cada compra de productos o contratación de servicios que realicen en las Estaciones de Servicio YPF y/o locales de servicio integral “BOXES de YPF” y/o locales de venta y/o mini mercados “FULL YPF” o “YPF ServiCompras” (u operados bajo cualquier otra marca que YPF utilice o autorice a tal fin) adheridos a este Programa, como así también en las empresas colaboradoras con el Programa, las que serán anunciadas en cada oportunidad, (en adelante, los “Establecimientos adheridos”). Dichos Puntos quedarán registrados en el Sistema de Administración Centralizada del Programa (en adelante el “SACP”) de propiedad de YPF S.A. o en cualquier otro medio que utilice YPF para esos registros. El Socio podrá visualizar dichos Puntos en su Cuenta.<br>
1.3. b) CARACTERÍSTICAS DE LOS PUNTOS: Los Puntos no tienen ningún valor comercial, por ende, no son negociables ni canjeables por dinero. No son transferibles ni transmisibles, por lo que, en el evento de la muerte del Socio, los Puntos acumulados serán cancelados. Tampoco son embargables, por tratarse de derechos cuyo ejercicio es enteramente personal, salvo que la ley o una orden judicial establezcan lo contrario.<br>
1.4. Los Puntos acreditados a través de la utilización de DNI, Tarjeta o APP YPF por la compra de productos o contratación de servicios en los Establecimientos Adheridos o en terceros participantes del Programa habilitados a asignar Puntos, podrán ser canjeables por (i) chances para participar por sorteos en caso de estar publicados, (ii) premios especiales en la modalidad canje de Puntos y/o Puntos + pesos, modalidad que se detalla en el punto 5.6 d) y modalidad canje web descripta en el punto 5.6 e), y (iii) “up grade” en los descuentos estables, según determine YPF y conforme lo definido y detallado en el punto 5.2 y que se encuentran especificados en la oferta de beneficios (en adelante la “Oferta”) publicados en serviclub.ypf.com, conforme a lo establecido en el punto 5 de este Reglamento.<br>
1.5. En ningún caso y bajo ninguna circunstancia estará permitido canjear los Puntos y/o las chances, descuentos o premios especiales por dinero en efectivo.<br>
1.6. Los Establecimientos Adheridos estarán claramente identificados con señales que permitan al Socio su fácil y rápida ubicación.<br>
1.7. YPF se reserva el derecho de variar los términos y condiciones de este Reglamento, como así también los regalos especificados en la Oferta, en tanto fuera necesario, durante el desarrollo del Programa.<br>
1.8. La participación en el Programa implica la aceptación de todas las condiciones estipuladas en el presente Reglamento, las que son conocidas por los Socios.<br>
1.9. Cualquier cuestión que se suscite con el Socio en relación con el Programa, será resuelta en forma definitiva e inapelable por YPF.<br>
1.10. La adhesión al Programa implica la autorización del Socio para la utilización de imágenes, voces, datos personales y domicilio, con fines comerciales, en los medios y formas que YPF determine, sin derecho a compensación alguna, por todo el plazo de duración del Programa a partir de la fecha de adhesión.<br>
1.11. La adhesión al Programa implica que el Socio autoriza a YPF a utilizar sus datos personales y domicilio para que YPF efectúe acciones de marketing y promociones comerciales.<br><br><br>
2. REGISTRO EN YPF SERVICLUB:<br><br>
2.1. El Socio es identificado mediante su DNI. YPF podrá, a su exclusivo criterio, otorgar a determinados Socios una Tarjeta, personal e intransferible, que permitirá su identificación y que lo habilita a operar en las terminales de puntos de venta adheridos (en adelante “POS”) ubicados en determinados Establecimientos Adheridos y que facilita el registro en el SACP del puntaje que se obtiene con cada compra o contratación que se realice en los Establecimientos Adheridos. La Tarjeta es propiedad de YPF.<br>
2.2. La cuenta identificada por el DNI del Socio es personal e intransferible y sólo puede ser utilizada por la persona a cuyo nombre está registrado en el sistema, es decir el Socio (en adelante, la “Cuenta”).<br>
2.3. La adhesión al Programa deberá ser autogestionado por el Socio, a través del Portal ServiClub (serviclub.ypf.com) o en la aplicación móvil YPF (“YPP APP”).<br>
2.4. YPF se reserva el derecho a suspender la Cuenta y solicitar la devolución, inactivación o suspensión de la Tarjeta cuando, a su sólo criterio, se haga un uso indebido o inconveniente de ésta.<br>
2.5. YPF se reserva el derecho de solicitar la devolución de la Tarjeta por cualquier otro motivo que perjudique el normal desarrollo del Programa. Si el retiro de la Tarjeta y su consecuente devolución por parte del Socio obedeciese a problemas relacionados con el cómputo del puntaje o a fallas en el mecanismo informático del Programa, de manera tal que se produzcan anomalías en el cómputo del puntaje, o discrepancias entre los Puntos registrados con la Tarjeta y el SACP en los términos del Punto 3.5, prevalecerá el puntaje registrado en el SACP.<br><br><br>
3. MODO DE OBTENCIÓN DE PUNTOS:<br><br>
3.1. El Socio podrá sumar Puntos con cada compra efectuada y/o servicio contratado en los Establecimientos Adheridos, cualquiera fuera la forma de pago admitida por los Establecimientos Adheridos, excepto medios de pago propios de YPF incompatibles con el Programa, como por ejemplo YPF EN RUTA e YPF EN RUTA CONTADO, y hasta el límite establecido en el punto 3.5 último párrafo.<br>
3.2. El Socio sólo podrá cargar Puntos si presenta su DNI o Tarjeta al momento de efectuar la compra o contratación, salvo en caso que el POS o los sistemas informáticos se encuentren fuera de servicio, en cuyo caso el Socio podrá solicitar en el Establecimiento Adherido donde se realizó el consumo, la confección manual de un comprobante provisorio/Ticket fiscal firmado en el que se detallarán los importes correspondientes a las compras efectuadas o servicios contratados, discriminados por rubro, para la posterior carga de los Puntos una vez restablecido el servicio del POS o los sistemas informáticos, en el mismo Establecimiento Adherido donde se realizó el consumo.. Cada comprobante manual de Puntos tendrá una validez de noventa (90) días corridos desde su emisión para ser presentado en los Establecimientos Adheridos. Vencido el mencionado plazo YPF se reservará el derecho de acreditar los Puntos.<br>
3.3. Los Puntos obtenidos durante el desarrollo del Programa podrán ser consultados por el Socio por medio de la WEB, de la APP YPF o por teléfono (0800-122-2973) o SMS (973) o mecanismo que YPF determine y que sea oportunamente informado sin perjuicio de lo cual, de surgir diferencias entre la información brindada y lo registrado en el SACP, prevalecerá el cómputo de Puntos registrado en este último.<br>
3.4. Los Puntos obtenidos por las compras o contrataciones registradas a través de la Cuenta sólo serán computables en el marco de YPF SERVICLUB y no podrán ser utilizados en promociones y/o cualquier otro programa implementado por YPF y/o sus sociedades controladas, salvo especificación en contrario por parte de YPF.<br>
3.5. Los Puntos se acreditarán de acuerdo con el siguiente criterio:<br>
a) COMBUSTIBLES LÍQUIDOS:  4 (cuatro) Puntos por cada 1 litro (un litro) en la compra de NAFTA SÚPER, ULTRA DIESEL y DIESEL 500, 8 (ocho) Puntos por cada 1 litro (un litro) en la compra de NAFTA INFINIA e INFINIA DIESEL, en conjunto denominados COMBUSTIBLES.<br>
b) GNC/GARRAFAS/ FULL/LUBRICANTES (*)/BOXES: Los Puntos a asignar por cada transacción de compra serán determinados por el cociente entre el monto de la compra y el VALOR NOMINAL del Punto, por un MULTIPLICADOR definido por producto o rubro.<br><br><br><br>
El VALOR NOMINAL del Punto se determina con el valor de la NAFTA SÚPER, informado por la Secretaría de Energía, para el último día hábil del mes anterior en la estación ACA Central (Av. del Libertador 1850, C1425 CABA).<br><br><br>
Los MULTIPLICADORES son:<br><br>
· GNC/GARRAFAS: 8<br>
· FULL/LUBRICANTES (*) /BOXES: 20<br>
<br><br>
(*)LUBRICANTES: marca ELAION, Alta y Baja Gama, ELAION Moto, ELAION Náutico, Extravida Alta y Baja Gama, Hidráulico y Transmisión, Hipoidales, Líquido Anticongelante Refrigerante Anticorrosivo KRIOX, productos complementarios marca YPF, Grasas, Línea Cuidado del Automóvil y Líquidos para Frenos, en la compra de Filtros (de aire, de aceite, de combustible y de habitáculo), Accesorios automotor (escobillas, bombillas, baterías, etcétera), Servicios Boxes (Escáner, Aire acondicionado, Pre VTV y cualquier otro servicio adicional que se preste en la Red YPF Boxes), y consumos en los LOCALES DE VENTA (FULL YPF y/o YPF SERVICOMPRAS).<br>
No asignarán Puntos las compras de cigarrillos y/o tarjetas telefónicas de cualquier importe. No se computarán fracciones de Puntos, los mismos se redondean hacia abajo. Esta relación entre el Punto a obtenerse y el monto de la compra o la contratación (la relación punto - pesos) podrá ser variada en cualquier momento y a sólo criterio de YPF. De surgir diferencias entre los Puntos cargados por la Tarjeta o DNI y los Puntos registrados en el SACP, se procederá conforme lo establecido en el punto 2.5.<br>
Se establecen los siguientes límites para la acumulación de Puntos:<br>
COMBUSTIBLES: 100 Litros diarios, 400 litros mensual.<br>
GNC: $1200 (pesos mil doscientos) diarios, $15.000 (pesos quince mil) mensual.<br>
GARRAFAS: $ 1000 diarios, $ 2000 mensuales.<br><br>
LUBRICANTES:<br>
Estaciones de Servicio con Locales de servicio integral YPF BOXES: $15.000 (pesos quince mil) mensual y $45.000 (pesos cuarenta y cinco mil) anual.<br>
Estaciones de Servicio sin Locales de servicio integral YPF BOXES: $5.000 (pesos cinco mil) mensual, $15.000 (pesos quince mil) anual.<br><br>
LOCALES DE VENTA (FULL YPF y/o SERVICOMPRAS). $7.000 (pesos siete mil) mensual.<br>
Asimismo, se establece un límite TOTAL de 10 (diez) asignaciones diarias y 20 (veinte) asignaciones semanales en Estaciones de Servicio, Locales de Servicio Integral “BOXES DE YPF”, Locales de ventas o Minimercado “FULL YPF”, “YPF SERVICOMPRAS” adheridos al Programa.<br>
En caso de que YPF detecte el incumplimiento de los límites establecidos en este punto, se procederá a suspender la Cuenta informando al Socio de dicha situación mediante el medio de notificación fehaciente que YPF utilice al efecto.<br><br><br>
4. COMPROBANTE DE LA OPERACIÓN:<br><br>
4.1. Por cada cómputo de Puntos de conformidad con el punto 3.2., el Socio obtendrá un ticket donde constará el detalle de la operación efectuada (el “TICKET"), el que sólo servirá como comprobante del registro de la operación a través del POS y que no tendrá validez como comprobante de compra o contratación, en conjunto el Socio recibirá dentro de las 24 horas un mail informando los Puntos asignados en la compra y sus Puntos totales. La cantidad de Puntos consignada en dicho TICKET deberá corresponderse, en los términos del Punto 3.5. con el monto de la compra o contratación de servicios realizada. En caso de discrepancias entre la cantidad de Puntos consignada en el TICKET y la cantidad de Puntos registrada para dicha operación en el SACP, se tendrán por válidos los Puntos registrados para tal operación en el SACP.<br>
4.2. No se aceptarán reclamos contra el Establecimiento Adherido o YPF, ya fueran éstos fundados en la falta de exactitud de los montos, compras o servicios consignados en el TICKET, su invalidez como comprobante de compras o contrataciones o en el mecanismo electrónico utilizado para computar el puntaje señalado en el punto 3.2. de este Reglamento, una vez que el Socio se hubiere retirado del Establecimiento Adherido.<br>
4.3. En cuanto a la carga de Puntos a través de la presentación de DNI o Tarjeta se observará lo dispuesto en los puntos 2.5. y 3.5. El Establecimiento Adherido deberá respaldar cada asignación de Puntos con los comprobantes de venta correspondientes a las compras o contratación de servicios efectuados.<br><br><br>
5. OBTENCIÓN DE DESCUENTOS /BENEFICIOS:<br><br>
5.1. La Oferta vigente de descuentos y/o beneficios se encuentra publicada en serviclub.ypf.com donde los Socios podrán identificar cuáles son los descuentos y/o beneficios a los que pueden acceder presentando su DNI.<br>
5.2. Existirá un sistema de mejora de descuento, denominado en adelante “up grade” que consistirá en porcentajes adicionales de descuento en los comercios adheridos a los cuales el usuario podrá acceder canjeando Puntos acreditados en su Cuenta, y lo podrá efectuar mediante la presentación de su DNI en el comercio adherido y solicitando dicha opción; la Cuenta deberá tener un saldo de Puntos suficiente para el uso de dicho beneficio adicional. En la Oferta vigente se encuentran asignados el/ los Puntos que serán necesarios acumular para la obtención del mismo.<br>
Los Socios que operen con la APP móvil de YPF en las Estaciones de Servicios adheridas podrán canjear los descuentos mencionados.<br>
5.3. Cada vez que el Socio solicite y obtenga una chance para participar o un up grade de un descuento, efectúe canje de premios mediante la web o un premio especial le serán descontados en el SACP y a través de su Cuenta los Puntos correspondientes al mismo según la Oferta vigente.<br>
5.4. Sin perjuicio de lo establecido en el punto 3.5., YPF se reserva el derecho de modificar el puntaje establecido en la Oferta vigente cuando lo considere necesario, como así también el de modificar la Oferta vigente conforme se establece en el punto 1.7.<br>
5.5. Para solicitar o retirar premios especiales o hacer uso de los descuentos, se deberá acreditar la calidad de Socio, a través de la presentación del DNI.<br>
5.6. La Oferta podrá estar integrada, indistintamente, por una o más de estas clases de BENEFICIOS:<br>
a) Descuentos en comercios adheridos al Socio; los comercios adheridos que brinden dichos descuentos estarán claramente identificados con señales que permitan al Socio su fácil y rápida ubicación.<br>
b) “Up Grade” por un determinado puntaje acreditándose con la cuenta del socio junto con el Documento Nacional de Identidad en comercios adheridos.<o:p></o:p><br>
c) Obtención de chances para sorteos. Dichas chances, se definen como la posibilidad del/los Socio/s de obtener más oportunidades para participar en los sorteos canjeando Puntos para tal fin.  Las mismas  podrán ser obtenidas de la siguiente manera: el Socio accederá al portal serviclub.ypf.com y luego de identificarse con usuario/contraseña podrá visualizar su resumen de Puntos y, accediendo a la opción de “Sorteos”, podrá canjear Puntos por chances o paquetes de chances para participar de cada uno de los sorteos publicados,  pudiendo el Socio decidir a cuáles de esos premios le asigna esas posibilidades de ganar. La cantidad de Puntos que equivaldrá una chance o cada paquete de chances será determinada en cada sorteo.<br>
d) Premios Especiales de entrega inmediata; son aquellos premios que obren en el stock de los Establecimientos Adheridos (de aquí en más “PREMIOS INSTANTANEOS” o “BENEFICIOS INSTANTÁNEOS”). El Socio podrá obtener estos regalos bajo las siguientes modalidades, (i) canje de Puntos o (ii) canje de Puntos + pesos. Para la obtención de éstos deberá tener registrada en el SACP la cantidad de Puntos que la Oferta prevé para su obtención, completando el Socio con moneda de curso legal los pesos requeridos para la obtención de dichos premios Instantáneos cuando el BENEFICIO INSTANTÁNEO sea canjeado bajo la modalidad canje de Puntos más pesos.<br>
e) Premios Especiales canje web; son aquellos productos que  el Socio podrá solicitar  mediante canje en la página de internet serviclub.ypf.com (de aquí en más “BENEFICIO WEB”) y podrán ser solicitados de la siguiente manera:  el Socio accederá al portal serviclub.ypf.com y luego de identificarse con usuario/contraseña podrá visualizar su resumen de Puntos y, accediendo la oferta de Premios publicados en la mencionada web, podrá solicitar el canje de los BENEFICIOS WEB  bajo las modalidades y condiciones descriptas en el punto d) anterior  es decir: (i) canje de Puntos o (ii) canje de Puntos + pesos,  y para su obtención el Socio podrá optar por (i) retirar dicho BENEFICIO WEB en los Establecimientos Adheridos  sin costo adicional o (ii) solicitar envío a domicilio del mismo con costo adicional. El costo del envío a domicilio del BENEFICIO WEB quedará a cargo del Socio y podrá asimismo ser abonado bajo las modalidades descriptas en el punto d) anterior y/o las modalidades anunciadas en la página web serviclub.ypf.com. Para retirar el premio de la EESS o al recibir el premio en domicilio, el socio deberá presentar la tarjeta YPF ServiClub y acreditar su identidad mediante la presentación del DNI.<br>
f) Otros premios: YPF se reserva el derecho de agregar e integrar a YPF SERVICLUB otros productos y/o formas de canjear Puntos. Los términos y condiciones para la obtención de estos regalos serán detallados oportunamente en la Oferta de premios y beneficios o se darán a conocer a través de los Establecimientos Adheridos y/o en la página de internet serviclub.ypf.com o por los medios que YPF disponga.<br>
5.7. Ninguno de los BENEFICIOS podrá ser canjeado por dinero en efectivo. Al respecto, será de aplicación lo previsto en el punto 1.5.<br>
5.8.  La entrega de los “REGALOS INSTANTANEOS” o “BENEFICIOS INSTANTANEOS” o “BENEFICIOS WEB” ofrecidos en el marco del Programa estará sujeta a su disponibilidad. En caso de que frente a un producto defectuoso el regalo solicitado no estuviere disponible o no pudiese ser obtenido en condiciones razonables, YPF podrá ofrecer la devolución de los Puntos canjeados y/o los pesos canjeados mediante la modalidad Puntos más pesos, los que serán devueltos al Socio por su equivalente en Puntos, y serán acreditados en la Cuenta del Socio.<br><br><br>
6. VIGENCIA DE PUNTOS – PÉRDIDA DE VIGENCIA DE PUNTOS POR INACTIVIDAD:<br><br>
6.1. Los Puntos acumulados por el Socio, de acuerdo con lo establecido en los puntos 1.3 y 3, se encontrarán vigentes y podrán ser utilizados en la manera descripta en el punto 1.4 durante un plazo de tres (3) años calendario, lo que significa que vencen el último día hábil del tercer año en el cual fueron acumulados.<br>
6.2. Los Puntos de aquellos Socios que no acrediten actividad en el Programa de acuerdo con lo establecido en los puntos 1.3 y 3 por un período igual o mayor a seis (6) meses dentro del plazo anteriormente mencionado, perderán su vigencia.<br><br><br>
7. PROMOCIONES ESPECIALES:<br><br>
7.1. YPF se reserva la facultad de realizar promociones especiales entre los socios YPF ServiClub las que, oportunamente, serán puestas en su conocimiento a través de los Establecimientos Adheridos y/o por cualquier otro medio que YPF considere conveniente.<br>
7.2. No participarán en estas promociones los Socios que hubiesen sido denunciadas conforme lo establecido en alguno de los supuestos contemplados en el Artículo 7 y aquellas habidas conforme lo descripto en el Artículo 9 del presente Reglamento.<br><br><br>
8. TARJETAS PERDIDAS, DAÑADAS, ROBADAS Y/ O HURTADAS:<br><br>
8.1. El Socio deberá denunciar en forma inmediata comunicándose al Centro de Contactos de YPF ServiClub, cualquier pérdida, deterioro substancial, robo o hurto de su Tarjeta, como así también cualquier alteración que se advierta en el puntaje cargado en su Tarjeta, incluyendo - pero no limitándose a - aquellas alteraciones que obedeciesen o pudiesen obedecer a errores de cómputo o fallas en el mecanismo informático del Programa en los términos de los puntos 2.5 y 3.5.<br>
8.2. Efectuada la denuncia, YPF a su exclusivo criterio, evaluará la necesidad de asignar o no una nueva Tarjeta al Socio o utilizar su Cuenta mediante la presentación de su DNI.<br>
8. 3. YPF SERVICLUB no reconocerá las transacciones realizadas con fecha posterior a la denuncia con aquellas Tarjetas cuyo Socio hubiera denunciado su pérdida, deterioro substancial, robo o hurto en los términos del Punto 8.1., salvo en los términos establecidos por el punto 3.2.<br>
8.4. YPF S.A. no será responsable del uso indebido y/o fraudulento que se efectúe de una Tarjeta.<br>
8.5. YPF se reserva el derecho de iniciar las acciones legales que correspondan contra cualquier persona que intente realizar un uso fraudulento de una Tarjeta cuyo extravío, mal funcionamiento, robo o hurto se hubiese denunciado debidamente.<br><br><br>
9. USO INDEBIDO:<br><br>
9.1. YPF S.A. podrá dar de baja una Cuenta y/o Tarjeta y anular los Puntos acumulados en la misma si detectara un uso indebido de los Puntos o acreditación fraudulenta en una Cuenta por parte del Socio y/o de un tercero. La baja de una Cuenta implicará la caducidad inmediata de todos los Puntos asociados a la misma.<br>
9.2. Se considerarán Tarjetas ilegalmente obtenidas a las que sean obtenidas o adquiridas por cualquier medio o procedimiento no autorizado por este Reglamento. Estas quedarán fuera de YPF SERVICLUB y no gozarán de los beneficios que el Programa brinda a las Tarjetas autorizadas.<br>
10. ACTUALIZACIÓN DEL DATOS DEL SOCIO:<br><br>
10.1. Cualquier cambio de domicilio, teléfono, dirección de correo electrónico, etc., del Socio deberá notificar en forma inmediata a YPF S.A. ingresando a la página de internet serviclub.ypf.com.<br><br>
11. ATENCIÓN AL SOCIO:<br><br>
11.1.  EL Socio, ante cualquier duda, consulta o inconveniente que se le presentare en relación con el Programa podrá ingresar a serviclub.ypf.com, contactar al Centro de Contactos por teléfono al 0800-122-2973 (ASTERISCO YPF), mail a ypf@ypf.com, Redes Sociales Oficiales del Programa YPF ServiClub o cualquier otra vía de contacto que YPF disponga y comunique a tal fin, en los días y horarios para ello establecido por YPF.<br>
12. VIGENCIA DEL PROGRAMA:<br><br>
12.1. YPF S.A. se reserva el derecho a modificar los términos del presente Reglamento.<br>
12.1. YPF se reserva el derecho de suspender y/o concluir el Programa notificando tal decisión con 60 (sesenta) días de anticipación a la fecha de cierre, por los mismos medios por los cuales se difundía el Programa y/o por cualquier medio masivo de comunicación. Los Socios podrán hacer uso de sus Puntos durante el mencionado plazo. Finalizado el mismo caducará todo derecho a hacerlo.<br><br><br>
13. LEY APLICABLE – JURISDICCIÓN:<br>
13.1 El presente Reglamento se regirá, cumplirá y ejecutará conforme a la ley argentina.<br>
13.2. Toda controversia que se suscite entre las Partes con relación a este Reglamento, su existencia, validez, calificación, interpretación, alcance, cumplimiento o resolución, se resolverá definitivamente por los Tribunales Nacionales Ordinarios de Buenos Aires.<br>
Los presentes términos y condiciones entrarán en vigencia a partir del día 05/08/2020.<br>
POLITICAS DE PRIVACIDAD DE DATOS:<br><br>
Alcance:<br><br>
Por medio de las políticas de Privacidad se determina el tratamiento que la Plataforma YPF ServiClub dará a los datos recibidos por parte de los Usuarios y que estarán en un todo de acuerdo con lo establecido en la Ley Nacional de Datos Personales N°25.326.<br>
De esta manera, en aquellos casos que los Usuarios ingresen datos personales o información confidencial en la Plataforma, están aceptando las presentes Políticas juntamente con los Términos.<br>
Para ello la Plataforma proporciona a los Usuarios los recursos adecuados para que tomen conocimiento de las presentes Políticas de Privacidad, los Términos y Condiciones de uso y Protección de Datos Personales.<br>
Las presentes Políticas describen:<br>
· Cuáles serán los datos recolectados, como serán utilizados y la finalidad para los que serán tratados.<br>
· Como la empresa protege los datos de carácter personal de los Usuarios. Facultad y modo de ejercer los derechos de acceso, rectificación, actualización y supresión de los datos.<br>
· Las consecuencias que deriven de proporcionar los datos o de la inexactitud de estos.<br>
a) Cuáles serán los datos recolectados, como serán utilizados y la finalidad para los que serán tratados.<br>
La Plataforma recolecta varios tipos de información y contenido que directa o indirectamente el Usuario provee. Para acceder a la Plataforma el Usuario será requerido para proveer datos de su nombre o denominación social, DNI, fecha de nacimiento, teléfono, e-mail, dirección y código postal en un formulario que contiene campos tanto obligatorios como opcionales. Asimismo, recolectamos otros contenidos e información que el Usuario nos provee directamente, incluido el contenido e información que el Usuario pueda agregar a los datos de su perfil en la Plataforma. La Compañía recolecta datos sobre facturación y pagos, información que el Usuario provee durante la interacción que permite la Plataforma. Si el Usuario no nos provee esta información nos veríamos imposibilitados de brindar en forma completa los servicios y/o interacciones que permite la Plataforma.<br>
En el caso que el Usuario proporcione en la Plataforma información acerca de otra persona, la Compañía asume que el Usuario ha obtenido la correspondiente autorización del titular de los datos para su recolección y procesamiento de acuerdo con los términos de estas Políticas.<br>
La plataforma también recopilará datos de un modo que, por si mismos, no pueden ser asociados directamente a una persona determinada. Estos datos de carácter no personal se pueden recopilar, tratar, transferir y publicar con cualquier intención. Recolectamos información acerca de cómo el Usuario usa la Plataforma, y dependiendo los permisos de acceso que ha habilitado para su dispositivo, otra información, como la que se especifica más abajo, desde o acerca de que computadoras o teléfono móvil u otro dispositivo instale el acceso a la Plataforma. La Plataforma utiliza tecnologías de internet estándar, tales como cookies* con la finalidad de recolectar información acerca de su dispositivo o computadora y su actividad en línea.<br>
*cookies: son pequeños archivos que se alojan en la computadora o dispositivo del Usuario. Una cookie permite a la entidad que coloca la cookie en su dispositivo reconocerla en diferentes sitios web, etc. La Plataforma utiliza cookies para análisis respecto de cómo el Usuario utiliza la Plataforma.<br>
La información que se recolecta al respecto es:<br><br>
- Su tipo de browser y sistema operativo.<br>
- Dirección IP e identificadores de los dispositivos que utilice.<br>
- El comportamiento de su browser respecto las interacciones en la Plataforma, tales como, el tiempo de permanencia y los links que el Usuario utiliza dentro de las interacciones de la Plataforma.<br>
- Sitios web que el Usuario visita antes o después de utilizar la Plataforma.<br>
- Datos acerca si ha abierto o reenviado los e-mails que enviamos durante o relacionados a la interacción con la Plataforma.<br>
Los datos de carácter personal se encontrarán alojados en servers propios o de terceros contratados por YPF pudiendo localizarse los mismos en otros países; comprometiéndose YPF a tomar los recaudos necesarios para su mejor conservación y cuidado.<br>
<br><br>
Divulgación a Terceros:
<br>
Ocasionalmente la Compañía puede facilitar determinados datos de carácter personal a socios estratégicos que trabaje con la Compañía para proveer productos o servicios o ayudan a las actividades de marketing de la Compañía. No se compartirán los datos con ningún tercero para sus propios fines de marketing.
<br>
Proveedores de servicios:
<br>
La Compañía compartirá datos de carácter personal con empresas que se ocupan, entre otras actividades de prestar servicios de tratamiento de datos, tramitar pedidos de clientes, presentar sus productos, mejorar datos de sus clientes, suministrar servicios de atención al cliente, evaluar su interés en productos o servicios y realizar investigaciones sobre clientes o su grado de satisfacción.
<br><br>
Otros terceros:
<br>
Es posible que la Compañía divulgue datos de carácter personal por mandato legal, en el marco de un proceso judicial o por petición de una autoridad, tanto dentro o fuera del País. Igualmente se puede publicar información personal si es necesaria o conveniente por motivos de seguridad nacional, para acatar legislación vigente o por otras razones relevantes de interés público.
<br>
Los datos solicitados serán utilizados por la Compañía exclusivamente para su inclusión en las Bases de datos de Compañía y para brindar los servicios y/o interacciones que permite la Plataforma.
<br>
La Compañía nunca utilizará los datos personales de los Usuarios para ningún fin distinto a los mencionados en estas Políticas.
<br>
Páginas web y servicios de terceros: Las aplicaciones dentro de la Plataforma pueden contener enlaces a páginas web, productos y servicios de terceros. También pueden utilizar u ofrecer productos o servicios de terceros. La recolección de los datos por parte de terceros, introduciendo datos sobre ubicaciones geográficas o datos de contacto, se guiará por las respectivas políticas de privacidad de tales terceros. Le recomendamos consultar las políticas de privacidad de esos terceros. 
<br>
b) Cómo la empresa protege los datos de carácter personal de los Usuarios.
<br>
La Compañía garantizará la protección de los datos personales mediante cifrado durante el tránsito y, los alojados en instalaciones, con medidas de seguridad físicas.
<br>
Integridad y conservación de los datos de carácter personal: La Compañía garantizará la exactitud y la calidad de los datos personales, los mismos se conservarán durante el tiempo necesario para cumplir los fines para los cuales fueron recabados, salvo que la ley exija conservarlos durante más tiempo.
<br>
Derechos de los titulares: los titulares de datos personales tienen la facultad de ejercer el derecho de acceso a los mismos en forma gratuita, acreditando debidamente su identidad a tal efecto, a intervalos no inferiores a seis meses, salvo que se acredite un interés legítimo al efecto conforme lo establecido en el artículo 14, inciso 3 de la Ley Nº 25.326. Asimismo, cuando correspondiere, los titulares de datos personales tienen el derecho de ejercer los derechos de rectificación y supresión de los datos.
<br>
Para el ejercicio de los derechos, el Solicitante deberá presentar una solicitud, ya sea de manera presencial o bien a distancia, por cualquiera de los siguientes medios: mensajería electrónica, carta documento y/o presentación escrita con firma certificada ante Banco o Escribano y/ o medio postal o telegráfico.
<br>
La solicitud deberá incluir: a) Su nombre y apellido; b) Original o copia autenticada de su DNI o de documento válido legalmente equivalente que acredite su identidad; c) Domicilio; d) Código Postal; e) Teléfono; f) E-mail; g) Especificación del tipo de derecho que se está ejerciendo: derecho de acceso, de supresión, de rectificación, de actualización o de sometimiento a confidencialidad. En estos últimos tres casos deberá brindar una breve explicación de por qué la solicitud debe corresponder. h) Medio a través del cual desea obtener la información, la cual podrá suministrarse por escrito, por medios electrónicos, telefónicos, de imagen, u otro idóneo a tal fin, conforme el artículo 15.3 de la Ley 25326. i) Su firma hológrafa al final de la solicitud. En caso de que la solicitud sea realizada vía mensajería electrónica podrá utilizar su firma digital, si la tuviere.
<br>
Según el medio elegido, la solicitud deberá realizarse a:
<br>
<br>
DATOS PERSONALES<br>
SERVICIOS JURÍDICOS<br>
Macacha Güemes 515 – Ciudad de Buenos Aires CP: 1106BKK<br>
Teléfono: +54 11 5441 1998<br>
datospersonales@YPF.com <br>
<br><br>
La dirección de correo electrónico mencionada sólo atenderá consultas y solicitudes relacionadas con la Ley 25.326.
<br>
LA AGENCIA DE ACCESO A LA INFORMACIÓN PÚBLICA, en su carácter de Órgano de Control de la Ley N°25.326, tiene la atribución de atender las denuncias y reclamos que interpongan quienes resulten afectados en sus derechos por incumplimiento de las normas vigentes en materia de protección de datos personales.
<br>
c) Las consecuencias que deriven de proporcionar los datos o de la inexactitud de estos.
<br>
El Usuario asume el compromiso de actualizar los Datos Personales conforme resulte necesario. La Compañía no se responsabiliza por la certeza de los Datos Personales provistos por los Usuarios. Los Usuarios garantizan y responden, en cualquier caso, por la veracidad, exactitud, integridad, vigencia y autenticidad de los Datos Personales ingresados. Toda la información y los Datos Personales ingresados por el Usuario tienen carácter de declaración jurada.
<br>
La Compañía se reserva el derecho de solicitar comprobantes y/u información adicional a efectos de corroborar la información entregada por un Usuario en materia de Datos Personales, así como de suspender temporal o definitivamente a aquellos Usuarios cuyos datos no hayan podido ser confirmados.        
<br>
La Compañía se reserva el derecho de rechazar una solicitud de registro o de cancelar o suspender, temporal o definitivamente una cuenta, en caso de detectar incongruencias o inconsistencias en la información provista por un Usuario o en caso de detectar actividades sospechosas, sin que tal decisión genere para el Usuario derechos de indemnización o resarcimiento alguno.
<br>
Buenos Aires, Agosto de 2020. YPF S.A.www.ypf.com.ar</p>
	<div class="buttons">
		<button class="button text-yellow" id="cancelar">Cancelar</button>
		<button class="button bg-yellow" id="aceptar">Aceptar</button>
	</div>
</div>
<?php
	include_once("parts/footer.php");
?>
</body>
</html>