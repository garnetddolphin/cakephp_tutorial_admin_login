<div class="User form">
	<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo "入力内容をご確認ください"; ?></legend>
		<dl>
			<dt><?php echo __("Email"); ?>&nbsp;</dt>
			<dt><?php echo $this->Form->value('email'); ?>&nbsp;</dt>
			<dt><?php echo __("Password"); ?>&nbsp;</dt>
			<dt><?php echo $this->Form->value('password'); ?>&nbsp;</dt>
		</dl>
		<?php
		?>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?php echo $this->Form->end(); ?>
</div>