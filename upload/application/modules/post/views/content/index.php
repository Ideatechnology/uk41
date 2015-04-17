
<?php

Assets::add_js("
	$('.tooltips').tooltip();
	","inline");

$num_columns	=9;
$can_delete	= $this->auth->has_permission('Post.Content.Delete');
$can_edit		= $this->auth->has_permission('Post.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>

<div class="admin-box">
	 <?php echo form_open($this->uri->uri_string(),array("id"=>"formfilter","name"=>"formfilter","class"=>"form-search form-inline","method"=>"get")); ?>    	
     <div class="form-group">
	 <select name="kategori" class="form-control" onchange="document.getElementById('formfilter').submit();">
    <option value=""><?php echo lang("select_kategori");?></option>
    <?php foreach($kategori as $row_kategori): ?>
    <option value="<?php echo $row_kategori->id;?>" 
    <?php echo ($row_kategori->id==@$_GET["kategori"])?"selected":"";?>>
    <?php echo $row_kategori->kategori;?>
    </option>
    <?php endforeach; ?>
    </select>
	</div>
<div class="form-group">
    <input type="text" class="form-control search-query" name="keyword" value="<?php echo isset($_GET["keyword"])?$_GET["keyword"]:"";?>">
    <button type="submit" class="btn">Search</button>
  </div>

	<?php echo form_close(); ?>
        <hr />
		
		   <?php echo form_open($this->uri->uri_string()); ?>            
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th><?php e(lang("post_form_judul"));?></th>
					<th><?php e(lang("post_form_category"));?></th>
					<th><?php e(lang("post_form_slug_author"));?></th>
					<th><?php e(lang("post_form_status"));?></th>
                    <th><?php e(lang("post_form_comment"));?></th>
					<th><?php e(lang("post_form_modified"));?></th>
					<th><?php e(lang("post_form_created"));?></th>
                    <th><?php e(lang("post_form_headline"));?></th>
					</tr>
			</thead>
			
			<tbody>
				<?php
				if ($has_records) :
					foreach ($records as $record) :
					
					
					$inlinejs =" var image = '".img($path_image.image_thumb($record->image_data))."';
        						$('#popover".$record->id."').popover({placement: 'right', content: image, html: true});";
					Assets::add_js($inlinejs, 'inline');
				
				?>
				<tr>
					<?php if ($can_delete) : ?>
					<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->id; ?>" /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo anchor(SITE_AREA . '/content/post/edit/' . $record->id, '<span class="icon-pencil"></span>' .  word_limiter($record->judul,5)); ?>
                    
                    <?php if ($record->image_data!="") : ?>
                    <a id="popover<?php echo $record->id;?>" data-placement="right" rel="popover" data-content="" title="Gambar Berita"><span class="glyphicon glyphicon-picture"></span></a>
                    <?php endif; ?>
                    </td>
				<?php else : ?>
					<td><?php echo word_limiter($record->judul,3); ?>
					<?php if ($record->image_data!="") : ?>                   
                    <a id="popover<?php echo $record->id;?>" data-placement="right" rel="popover" data-content="" title="Gambar Berita"><span class="glyphicon glyphicon-picture"></span></a>
                    <?php endif; ?>
                    </td>
				<?php endif; ?>
					<td><?php e($this->kategori_model->find_by('id', $record->post_category)->kategori) ?>
                    
                    
                    </td>
					
					<td><?php e($record->author) ?></td>
					<td><?php e(($record->status_tampil==1)?"Draft":"Publish") ?></td>
                    <td class="text-center">
                    <?php echo anchor(SITE_AREA . '/content/post/comment/'.$record->id,
					jumlah_komentar($record->id)); ?>
                    </td>
					<td><?php e($record->modified_on) ?></td>
					<td><?php e($record->created_on) ?></td>
                    <td><?php e($record->headline) ?></td>
						</tr>
			<?php
				endforeach;
				else:
				?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
				</tr>
				<?php endif; ?>
				
			</tbody>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger tooltips" data-toggle="tooltip" title="Digunakan untuk menghapus post" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('post_delete_confirm'))); ?>')" />
					     <input type="submit" name="headline" id="headline" class="btn btn-success tooltips" data-toggle="tooltip" title="Digunakan untuk set status headline" value="<?php echo lang('post_action_headline'); ?>" />
					      <input type="submit" name="unheadline" id="unheadline" class="btn btn-danger tooltips" data-toggle="tooltip" title="Digunakan untuk menghapus status headline" value="<?php echo lang('post_action_unheadline'); ?>" />
					                
                    </td>
				</tr>
				<?php endif; ?>
			</tfoot>
			<?php endif; ?>
			
			</table>
			
		<?php
	
	echo $this->pagination->create_links();
	 echo form_close(); ?>
  </div>		