
<section class="content-header">
	<div class="content-header-left">
		<h1>Vue FAQs</h1>
	</div>
	<div class="content-header-right">
		<a href="" class="btn btn-primary btn-sm">Ajouter un nouveau FAQ</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th width="20">#</th>
								<th width="150">Questions</th>
								<th width="200">Reponses</th>
								<th width="30">Ordre d'affichage</th>
								<th width="50">Action</th>
							</tr>
						</thead>
						<tbody>
							    <?php foreach ($data['faq'] as $row): ?>
								<tr>
									<td> <?php echo $row->id; ?></td>
									<td> <?php echo $row->reponse; ?></td>
									<td> <?php echo $row->question; ?></td>
									<td> <?php echo $row->ordre_affichage; ?></td>
									<td>										
										<a href="" class="btn btn-primary btn-xs">Editer</a>
										<a href="#" class="btn btn-danger btn-xs" data-href="" data-toggle="modal" data-target="#confirm-delete">Supprimer</a>  
									</td>
								</tr>
								<?php endforeach; ?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Confirmation de la suppression</h4>
            </div>
            <div class="modal-body">
                <p>Etes-vous sure de supprimer cet element</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>
