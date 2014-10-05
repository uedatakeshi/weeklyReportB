<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('New Report'), ['action' => 'add']) ?></li>
	</ul>
</div>
<div class="reports index large-10 medium-9 columns">
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th><?= $this->Paginator->sort('id') ?></th>
			<th><?= $this->Paginator->sort('report_date') ?></th>
			<th><?= $this->Paginator->sort('employee') ?></th>
			<th><?= $this->Paginator->sort('created') ?></th>
			<th><?= $this->Paginator->sort('modified') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($reports as $report): ?>
		<tr>
			<td><?= $this->Number->format($report->id) ?></td>
			<td><?= h($report->report_date) ?></td>
			<td><?= h($report->employee) ?></td>
			<td><?= h($report->created) ?></td>
			<td><?= h($report->modified) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['action' => 'view', $report->id]) ?>
				<?= $this->Html->link(__('Edit'), ['action' => 'edit', $report->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
	<div class="paginator">
		<ul class="pagination">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'));
			echo $this->Paginator->numbers();
			echo $this->Paginator->next(__('next') . ' >');
		?>
		</ul>
		<p><?= $this->Paginator->counter() ?></p>
	</div>
</div>
