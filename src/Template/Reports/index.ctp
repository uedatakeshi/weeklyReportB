<div class="actions columns large-2 medium-3">
	<h3><?= __('操作') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('新規登録'), ['action' => 'add']) ?></li>
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
			<th class="actions"><?= __('操作') ?></th>
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
				<?= $this->Html->link(__('search'), ['action' => 'search', '2014-10-07']) ?>
				<?= $this->Html->link(__('参照'), ['action' => 'view', $report->id]) ?>
				<?= $this->Html->link(__('編集'), ['action' => 'edit', $report->id]) ?>
				<?= $this->Form->postLink(__('削除'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
	<div class="paginator">
		<ul class="pagination">
		<?php
			echo $this->Paginator->prev('< ' . __('前へ'));
			echo $this->Paginator->numbers();
			echo $this->Paginator->next(__('次へ') . ' >');
		?>
		</ul>
		<p><?= $this->Paginator->counter() ?></p>
	</div>
</div>
