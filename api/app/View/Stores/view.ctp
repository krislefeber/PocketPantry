<div class="stores view">
<h2><?php echo __('Store'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($store['Store']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($store['Store']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store'), array('action' => 'edit', $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store'), array('action' => 'delete', $store['Store']['id']), null, __('Are you sure you want to delete # %s?', $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groceries'), array('controller' => 'groceries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grocery'), array('controller' => 'groceries', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Groceries'); ?></h3>
	<?php if (!empty($store['Grocery'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Expiration'); ?></th>
		<th><?php echo __('Store Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($store['Grocery'] as $grocery): ?>
		<tr>
			<td><?php echo $grocery['id']; ?></td>
			<td><?php echo $grocery['name']; ?></td>
			<td><?php echo $grocery['qty']; ?></td>
			<td><?php echo $grocery['expiration']; ?></td>
			<td><?php echo $grocery['store_id']; ?></td>
			<td><?php echo $grocery['location_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'groceries', 'action' => 'view', $grocery['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'groceries', 'action' => 'edit', $grocery['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'groceries', 'action' => 'delete', $grocery['id']), null, __('Are you sure you want to delete # %s?', $grocery['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grocery'), array('controller' => 'groceries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
