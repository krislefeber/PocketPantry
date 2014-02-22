<div class="plans form">
<?php echo $this->Form->create('Plan'); ?>
	<fieldset>
		<legend><?php echo __('Edit Plan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('multiplier');
		echo $this->Form->input('recipe');
		echo $this->Form->input('Name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Plan.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Plan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Plans'), array('action' => 'index')); ?></li>
	</ul>
</div>
