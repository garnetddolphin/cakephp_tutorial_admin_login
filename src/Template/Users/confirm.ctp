<div class="User form">
	<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo "入力内容をご確認ください"; ?></legend>
		<dl>
			<dt><?php echo __("Subject"); ?>&nbsp;</dt>
			<dt><?php echo $this->Form->value('subject'); ?>&nbsp;</dt>
		</dl>
		<?php
		echo $this->Form->hidden('subject', array('value' => $this->Form->value("subject")))."\n";?>
	</fieldset>
	<?php echo $this->Form->end(__('Finish')); ?>
</div>