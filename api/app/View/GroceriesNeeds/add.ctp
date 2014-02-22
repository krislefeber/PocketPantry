<div class="groceriesNeeds form">
<?php echo $this->Form->create('GroceriesNeed'); ?>
	<fieldset>
		<legend><?php echo __('Add Groceries Need'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('qty');
		echo $this->Form->input('unit_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Groceries Needs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
	</ul>
</div>
