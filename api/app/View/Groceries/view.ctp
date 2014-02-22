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
		<dt><?php echo __('Store'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grocery['Store']['name'], array('controller' => 'stores', 'action' => 'view', $grocery['Store']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grocery['Location']['name'], array('controller' => 'locations', 'action' => 'view', $grocery['Location']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Needs'), array('controller' => 'needs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Need'), array('controller' => 'needs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Needs'); ?></h3>
	<?php if (!empty($grocery['Need'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grocery['Need'] as $need): ?>
		<tr>
			<td><?php echo $need['id']; ?></td>
			<td><?php echo $need['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'needs', 'action' => 'view', $need['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'needs', 'action' => 'edit', $need['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'needs', 'action' => 'delete', $need['id']), null, __('Are you sure you want to delete # %s?', $need['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Need'), array('controller' => 'needs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
