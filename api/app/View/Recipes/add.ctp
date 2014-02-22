<div class="recipes form">
<?php echo $this->Form->create('Recipe'); ?>
	<fieldset>
		<legend><?php echo __('Add Recipe'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('recipe');
		echo $this->Form->input('multiplier');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Recipes'), array('action' => 'index')); ?></li>
	</ul>
</div>
