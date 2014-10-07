<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions'); ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # %s?', $employee->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
	</ul>
</div>
<div class="employees view large-10 medium-9 columns">
	<h2><?= h($employee->name) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Employee Number') ?></h6>
			<p><?= h($employee->employee_number) ?></p>
			<h6 class="subheader"><?= __('Name') ?></h6>
			<p><?= h($employee->name) ?></p>
		</div>
		<div class="large-2 large-offset-1 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($employee->id) ?></p>
		</div>
		<div class="large-2 columns dates end">
			<h6 class="subheader"><?= __('Created') ?></h6>
			<p><?= h($employee->created) ?></p>
			<h6 class="subheader"><?= __('Modified') ?></h6>
			<p><?= h($employee->modified) ?></p>
		</div>
	</div>
</div>
