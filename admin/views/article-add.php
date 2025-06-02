
<section class="content-header">
	<div class="content-header-left">
		<h1>Ajouter un nouveau Article</h1>
	</div>
	<div class="content-header-right">
		<a href="product.php" class="btn btn-primary btn-sm">Voir Tous</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<!--<?php if($error_message): ?>
			<div class="callout callout-danger">
			
			<p>
			<?php echo $error_message; ?>
			</p>
			</div>
			<?php endif; ?>

			<?php if($success_message): ?>
			<div class="callout callout-success">
			
			<p><?php echo $success_message; ?></p>
			</div>
			<?php endif; ?>-->

			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Titre de l'article <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" name="titre" class="form-control">
							</div>
						</div>	
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Categorie <span>*</span></label>
							<div class="col-sm-4">
								<select name="categorie" class="form-control select2 end-cat">
								<option value="0">Selectionner une Categorie</option>
								<?php foreach ($data['category'] as $row): ?>
									<option value="<?php echo $row->id; ?>"><?php echo $row->cat_name; ?></option>
								<?php endforeach; ?>
								</select>
							</div>
						</div>
				        
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Image principale <span>*</span></label>
							<div class="col-sm-4" style="padding-top:4px;">
								<input type="file" name="image_principale">
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Autres Images</label>
							<div class="col-sm-4" style="padding-top:4px;">
								<table id="ProductTable" style="width:100%;">
			                        <tbody>
			                            <tr>
			                                <td>
			                                    <div class="upload-btn">
			                                        <input type="file" name="photo[]" style="margin-bottom:5px;">
			                                    </div>
			                                </td>
			                                <td style="width:28px;"><a href="javascript:void()" class="Delete btn btn-danger btn-xs">X</a></td>
			                            </tr>
			                        </tbody>
			                    </table>
							</div>
							<div class="col-sm-2">
			                    <input type="button" id="btnAddNew" value="Add Item" style="margin-top: 5px;margin-bottom:10px;border:0;color: #fff;font-size: 14px;border-radius:3px;" class="btn btn-warning btn-xs">
			                </div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Intro <span>*</span></label>
							<div class="col-sm-8">
								<textarea name="intro" class="form-control" cols="30" rows="6" id="editor2"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Contenus <span>*</span></label>
							<div class="col-sm-8">
								<textarea name="intro" class="form-control" cols="30" rows="10" id="editor1"></textarea>
							</div>
						</div>
				
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="ajouter_article">Ajouter l'Article</button>
							</div>
						</div>
					</div>
				</div>

			</form>


		</div>
	</div>

</section>
