
<section class="content-header">
	<div class="content-header-left">
		<h1>Modification de l'Article</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo adminUrl('articles') ?>" class="btn btn-primary btn-sm">Voir Tous</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if($data['error_message']): ?>
			<div class="callout callout-danger">
			
			<p>
			<?php echo $data['error_message']; ?>
			</p>
			</div>
			<?php endif; ?>

			<?php if($data['success_message']): ?>
			<div class="callout callout-success">
			
			<p><?php echo $data['success_message']; ?></p>
			</div>
			<?php endif; ?>

			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <?php  foreach ($data['articles'] as $row) {
                	$cat_id = $row->cat_id;
                	$titre = $row->titre;
                	$intro = $row->intro;
                	$content  = $row->content;
                	$image = $row->image_banner;
                	$auteur = $row->auteur;
                } ?>

                
				<div class="box box-info">
					<div class="box-body">
                         
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Titre de l'article <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" name="titre" value="<?php echo $titre; ?>"class="form-control">
								<input type="text" name="auteur" value="<?php echo $auteur; ?>" hidden>
							</div>
						</div>	
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Categorie <span>*</span></label>
							<div class="col-sm-4">
								<select name="categorie" class="form-control select2 end-cat">
								<option value="0">Selectionner une Categorie</option>
								<?php foreach ($data['category'] as $row): ?>
									<option <?php  if($cat_id == $row->id) echo "selected"; ?>
									  value="<?php echo $row->id; ?>">
									  <?php echo $row->cat_name; ?>
								    </option>
								<?php endforeach; ?>
								</select>
							</div>
						</div>
				        
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Image principale <span>*</span></label>
							<div class="col-sm-4" style="padding-top:4px;">
								<input type="text" name="existing_image" 
								value="<?php echo url('public/images/'.$image); ?>" hidden>
								<input type="file" name="image_principale">
							</div>
						</div>
                            
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Existing Photo</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?php echo url('public/images/'.$image); ?>" alt="Article Photo" style="width:400px; height: 300px;">
							</div>
				        </div>
			
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Intro <span>*</span></label>
							<div class="col-sm-8">
								<textarea name="intro" class="form-control" cols="30" rows="6" id="editor2">
									<?php echo $intro; ?>
								</textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Contenus <span>*</span></label>
							<div class="col-sm-8">
								<textarea name="contenus" class="form-control" cols="30" rows="10" id="editor1">
									<?php  echo $content; ?>
								</textarea>
							</div>
						</div>
				
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="edit_article">Confirmer</button>
							</div>
						</div>
					</div>
				</div>

			</form>


		</div>
	</div>

</section>
