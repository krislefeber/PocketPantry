<div class="groceriesNeeds view">
<h2><?php echo __('Groceries Need'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($groceriesNeed['GroceriesNeed']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($groceriesNeed['GroceriesNeed']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($groceriesNeed['GroceriesNeed']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($groceriesNeed['Unit']['name'], array('controller' => 'units', 'action' => 'view', $groceriesNeed['Unit']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Groceries Need'), array('action' => 'edit', $groceriesNeed['GroceriesNeed']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Groceries Need'), array('action' => 'delete', $groceriesNeed['GroceriesNeed']['id']), null, __('Are you sure you want to delete # %s?', $groceriesNeed['GroceriesNeed']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groceries Needs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groceries Need'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
	</ul>
</div>
