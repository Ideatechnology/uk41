		<?php foreach ($meta_fields as $field):?>
			<?php if ((isset($field['admin_only']) && $field['admin_only'] === TRUE && isset($current_user) && $current_user->role_id == 1)
						|| !isset($field['admin_only']) || $field['admin_only'] === FALSE): ?>
			<?php
			if (!isset($frontend_only) || ($frontend_only === TRUE && (!isset($field['frontend']) || $field['frontend'] === TRUE))):

				if ($field['form_detail']['type'] == 'dropdown'):
			
					echo form_dropdown($field['form_detail']['settings'], $field['form_detail']['options'], set_value($field['name'], isset($user->$field['name']) ? $user->$field['name'] : ''), $field['label']);


			elseif ($field['form_detail']['type'] == 'checkbox'): ?>

	
					<div class="form-group <?php echo iif( form_error($field['name']) , 'error'); ?>">
					<label class="col-xs-2 control-label" for="<?php echo $field['name'] ?>"><?php echo $field['label'];?></label>
					<div class="col-xs-5">
						<?php
						$form_method = 'form_' . $field['form_detail']['type'];
						$checked = (isset($user->$field['name']) && $field['form_detail']['value'] == set_value($field['name'], isset($user->$field['name']) ? $user->$field['name'] : '')) ? TRUE : FALSE;
						echo form_checkbox($field['form_detail']['settings'], $field['form_detail']['value'], $checked);
						?>
					</div>
				</div>


			<?php elseif ($field['form_detail']['type'] == 'state_select' && is_callable('state_select')) : ?>

				

				<?php elseif ($field['form_detail']['type'] == 'country_select' && is_callable('country_select')) : ?>

					
				
				<?php else:


					$form_method = 'form_' . $field['form_detail']['type'];
					if (is_callable($form_method))
					{
						echo $form_method($field['form_detail']['settings'], set_value($field['name'], isset($user->$field['name']) ? $user->$field['name'] : ''), $field['label']);
					}


				endif;
			endif;
			?>
			<?php endif;?>
		<?php endforeach; ?>
<input type="hidden" name="country" value="ID">
                    	<input type="hidden" name="state" value="AK">
                    



<div class="form-group <?php echo iif( form_error('universitas') , 'error'); ?>">

<?php echo unversitas_select(set_value("universitas", isset($user) ?$user->universitas : ''), set_value('universitas', isset($user) ? $user->universitas : ''), 'universitas', 'form-control chzn-select'); ?>
<span class="hash-error"><?php echo form_error('universitas'); ?></span>
</div>
