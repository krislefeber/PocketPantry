<div class="units view">
<h2><?php echo __('Unit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Unit'), array('action' => 'edit', $unit['Unit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Unit'), array('action' => 'delete', $unit['Unit']['id']), null, __('Are you sure you want to delete # %s?', $unit['Unit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groceries Needs'), array('controller' => 'groceries_needs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groceries Need'), array('controller' => 'groceries_needs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Groceries Needs'); ?></h3>
	<?php if (!empty($unit['GroceriesNeed'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Unit Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($unit['GroceriesNeed'] as $groceriesNeed): ?>
		<tr>
			<td><?php echo $groceriesNeed['id']; ?></td>
			<td><?php echo $groceriesNeed['name']; ?></td>
			<td><?php echo $groceriesNeed['qty']; ?></td>
			<td><?php echo $groceriesNeed['unit_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'groceries_needs', 'action' => 'view', $groceriesNeed['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'groceries_needs', 'action' => 'edit', $groceriesNeed['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'groceries_needs', 'action' => 'delete', $groceriesNeed['id']), null, __('Are you sure you want to delete # %s?', $groceriesNeed['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Groceries Need'), array('controller' => 'groceries_needs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
