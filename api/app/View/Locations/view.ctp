<div class="locations view">
<h2><?php echo __('Location'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($location['Location']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($location['Location']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Location'), array('action' => 'edit', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Location'), array('action' => 'delete', $location['Location']['id']), null, __('Are you sure you want to delete # %s?', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groceries'), array('controller' => 'groceries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grocery'), array('controller' => 'groceries', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Groceries'); ?></h3>
	<?php if (!empty($location['Grocery'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Expiration'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Unit Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($location['Grocery'] as $grocery): ?>
		<tr>
			<td><?php echo $grocery['id']; ?></td>
			<td><?php echo $grocery['name']; ?></td>
			<td><?php echo $grocery['qty']; ?></td>
			<td><?php echo $grocery['expiration']; ?></td>
			<td><?php echo $grocery['location_id']; ?></td>
			<td><?php echo $grocery['unit_id']; ?></td>
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
