
	<?php $numero_paginas = numero_paginas($noticias_config['post_por_pagina'], $conexion); ?>

		<div class="text-center">
			<ul class="pagination-custom list-unstyled list-inline">
				<?php if(pagina_actual() === 1):?>
					<li class="btn btn-sm btn-default disabled">Anterior</li>
				<?php else: ?>
					<li><a href="noticias.php?p=<?php echo pagina_actual() - 1 ?>" class="btn btn-sm btn-primary">Anterior</a></li>
				<?php endif; ?>

				 <?php for($i = 1 ; $i <= $numero_paginas; $i++): ?>
				 	<?php if(pagina_actual() === $i): ?>
				 		<li class="btn btn-sm btn-default active"><?php echo $i; ?></li>
				 	<?php else: ?>
				 		<li><a href="noticias.php?p=<?php echo $i; ?>" class="btn btn-sm btn-primary"><?php echo $i; ?></a></li>
				 	<?php endif; ?>

				 <?php endfor; ?>

				 <?php if(pagina_actual() === $numero_paginas):  ?>
				 	<li class="btn btn-sm btn-default disabled">Siguiente</li>
				 <?php else: ?>
				 	<li><a href="noticias.php?p=<?php echo pagina_actual() + 1; ?>" class="btn btn-sm btn-default">Siguiente</a></li>
				<?php endif; ?>
			</ul>
		</div>