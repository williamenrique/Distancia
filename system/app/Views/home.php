<?php 
head($data);
getModal('modals',$data);
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-8 col-lg-9">
			<div id='calendario'></div>
		</div>

		<div class="col-sm-12 col-md-4 col-lg-3">
				<div class="list-group  mt-4">
					<a href="#" class="list-group-item list-group-item-action active text-center" aria-current="true">
						<p class="mb-1 ">Lista de eventos</p>
					</a>
					<ul id="list" class="listEvent list-group"></ul>
					
				</div>
		</div>
		</div>
	</div>
</div>
<?php footer($data) ?>