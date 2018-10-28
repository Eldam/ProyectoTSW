		<nav id="mainnavigation" class="col-md-3 col-lg-3">

			<a href="../Controllers/crear_evento.php" class="btn btn-info" role="button"><?php echo $lang["create"] ?></a>

		</nav>

			
			<article id="maincontent" class="col-md-6 col-lg-6">

				<h2>
					<?php
						echo $lang["seeEvents"];
					?>
				</h2>

				<table class="table table-condensed">
						<thead>
							<tr>
								<th>Fecha</th>
								<th>Descripcion</th>
								<th>Creado</th>
							</tr>
						</thead>
						<tbody>
						  <tr class="info">
							<td>21/10/2018</i></td>
							<td>Quedar para ver una peli.</td>
							<td>john@example.com</td>
						  </tr>
						  <tr class="Success">
							<td>29/10/2018</td>
							<td>Partido de futbol</td>
							<td>mary@example.com</td>
						  </tr>
						</tbody>
					</table>

			</article>
		</div>	
