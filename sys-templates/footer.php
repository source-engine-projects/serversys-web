	<hr />
	<div class="container">
		<footer>
			<div class="row">
				<div class="pull-right">
					<p>
						<a href="https://github.com/whocodes/serversys">Server-Sys</a> and
						<a href="https://github.com/whocodes/serversys-web">Server-Sys Web</a> by
						<a href="https://whocodes.pw">whocodes</a>.
					</p>
				</div>
			</div>
		</footer>
	</div>

	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>

	<?php if($Page['Server_List']){ ?>

	<script src="/lib/js/serverlist-bs.js"></script>

	<?php }
		if((((int)(date('n'))) == 12) && ($Page['Thank_You'] == false)){ ?>

	<script src="/lib/js/snow.js"></script>

	<?php } ?>
