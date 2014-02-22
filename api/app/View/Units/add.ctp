<div class="units form">
<?php echo $this->Form->create('Unit'); ?>
	<fieldset>
		<legend><?php echo __('Add Unit'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groceries Needs'), array('controller' => 'groceries_needs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groceries Need'), array('controller' => 'groceries_needs', 'action' => 'add')); ?> </li>
	</ul>
</div>
