<?php

$num_columns	= 19;
$can_delete	= $this->auth->has_permission('Sosmed.Content.Delete');
$can_edit		= $this->auth->has_permission('Sosmed.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">
	<h3>sosmed</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Username Twitter</th>
					<th>Name Twitter</th>
					<th>Password Twitter</th>
					<th>Url Twitter</th>
					<th>Username Fb</th>
					<th>Name Fb</th>
					<th>Password Fb</th>
					<th>Url Fb</th>
					<th>Nama Perusahaan</th>
					<th>Alamat</th>
					<th>Telp</th>
					<th>Pin Bb</th>
					<th>Whatapps</th>
					<th>Logo</th>
					<th>Fax</th>
					<th>Google Map</th>
					<th>Token Twitter</th>
					<th>Token Fb</th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			
			<?php endif; ?>
			<tbody>
				<?php
				if ($has_records) :
					foreach ($records as $record) :
				?>
				<tr>
					<?php if ($can_delete) : ?>
					<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->id; ?>" /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo anchor(SITE_AREA . '/content/sosmed/edit/' . $record->id, '<span class="icon-pencil"></span>' .  $record->username_twitter); ?></td>
				<?php else : ?>
					<td><?php e($record->username_twitter); ?></td>
				<?php endif; ?>
					<td><?php e($record->name_twitter) ?></td>
					<td><?php e($record->password_twitter) ?></td>
					<td><?php e($record->url_twitter) ?></td>
					<td><?php e($record->username_fb) ?></td>
					<td><?php e($record->name_fb) ?></td>
					<td><?php e($record->password_fb) ?></td>
					<td><?php e($record->url_fb) ?></td>
					<td><?php e($record->nama_perusahaan) ?></td>
					<td><?php e($record->alamat) ?></td>
					<td><?php e($record->telp) ?></td>
					<td><?php e($record->pin_bb) ?></td>
					<td><?php e($record->whatapps) ?></td>
					<td><?php e($record->logo) ?></td>
					<td><?php e($record->fax) ?></td>
					<td><?php e($record->google_map) ?></td>
					<td><?php e($record->token_twitter) ?></td>
					<td><?php e($record->token_fb) ?></td>
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">No records found that match your selection.</td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>