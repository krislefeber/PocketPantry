<div class="groceries form">
<?php echo $this->Form->create('Grocery'); ?>
	<fieldset>
		<legend><?php echo __('Add Grocery'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('qty');
		echo $this->Form->input('expiration');
		echo $this->Form->input('store_id');
		echo $this->Form->input('location_id');
		echo $this->Form->input('Need');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Groceries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Needs'), array('controller' => 'needs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Need'), array('controller' => 'needs', 'action' => 'add')); ?> </li>
	</ul>
</div>
