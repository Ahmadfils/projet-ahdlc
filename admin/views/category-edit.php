
<section class="content-header">
	<div class="content-header-left">
		<h1>Modification de la Categorie </h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo adminUrl('category'); ?>" class="btn btn-primary btn-sm">Voir Tous</a>
	</div>
</section>
 
<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if(isset($data['error_message']) && !empty($data['error_message'])): ?>
			<div class="callout callout-danger">
			<p>
			<?php echo $data['error_message']; ?>
			</p>
			</div>
			<?php endif; ?>

			<?php if(isset($data['success_message']) && !empty($data['success_message'])): ?>
			<div class="callout callout-success">
			
			<p><?php echo $data['success_message']; ?></p>
			</div>
			<?php endif; ?>

			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                <?php foreach ($data['category'] as $row) {
                	$nom_categorie = $row->cat_name;
                	$nom_dom = $row->cat_domain;
                	$image = $row->image;
                }  ?>

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Nom de la categorie <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" name="nom_cat" value="<?php echo $nom_categorie; ?>" class="form-control">
							</div>
						</div>	

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Domaine de la categorie <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" name="cat_dom" value="<?php echo $nom_dom; ?>" class="form-control">
							</div>
						</div>
				        
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Image <span>*</span></label>
							<div class="col-sm-4" style="padding-top:4px;">
								<input type="file" name="image_dom">
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Image existing</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?php echo url('public/images/'.$image); ?>" alt="Categorie Photo" style="width:400px; height: 300px;">
							</div>
				        </div>
                     
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="edit_category">Confirmer</button>
							</div>
						</div>	
					</div>
				</div>

			</form>

		</div>
	</div>

</section>
