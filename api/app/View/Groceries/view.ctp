<div class="groceries view">
<h2><?php echo __('Grocery'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grocery['Grocery']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($grocery['Grocery']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($grocery['Grocery']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expiration'); ?></dt>
		<dd>
			<?php echo h($grocery['Grocery']['expiration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grocery['Location']['name'], array('controller' => 'locations', 'action' => 'view', $grocery['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grocery['Unit']['name'], array('controller' => 'units', 'action' => 'view', $grocery['Unit']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grocery'), array('action' => 'edit', $grocery['Grocery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grocery'), array('action' => 'delete', $grocery['Grocery']['id']), null, __('Are you sure you want to delete # %s?', $grocery['Grocery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groceries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grocery'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
	</ul>
</div>
