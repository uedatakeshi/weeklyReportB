<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions'); ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Report'), ['action' => 'edit', $report->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Report'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # %s?', $report->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Reports'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Report'), ['action' => 'add']) ?> </li>
	</ul>
</div>
<div class="reports view large-10 medium-9 columns">
	<h2><?= h($report->id) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Employee') ?></h6>
			<p><?= h($report->employee) ?></p>
		</div>
		<div class="large-2 large-offset-1 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($report->id) ?></p>
		</div>
		<div class="large-2 columns dates end">
			<h6 class="subheader"><?= __('Report Date') ?></h6>
			<p><?= h($report->report_date) ?></p>
			<h6 class="subheader"><?= __('Created') ?></h6>
			<p><?= h($report->created) ?></p>
			<h6 class="subheader"><?= __('Modified') ?></h6>
			<p><?= h($report->modified) ?></p>
		</div>
	</div>
	<div class="row texts">
		<div class="columns large-9">
			<h6 class="subheader"><?= __('Activity') ?></h6>
			<?= $this->Text->autoParagraph(h($report->activity)); ?>
		</div>
	</div>
	<div class="row texts">
		<div class="columns large-9">
			<h6 class="subheader"><?= __('Comments') ?></h6>
			<?= $this->Text->autoParagraph(h($report->comments)); ?>
		</div>
	</div>
</div>
