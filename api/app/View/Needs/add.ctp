<div class="needs form">
<?php echo $this->Form->create('Need'); ?>
	<fieldset>
		<legend><?php echo __('Add Need'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Grocery');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Needs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groceries'), array('controller' => 'groceries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grocery'), array('controller' => 'groceries', 'action' => 'add')); ?> </li>
	</ul>
</div>
