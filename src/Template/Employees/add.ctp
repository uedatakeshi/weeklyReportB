<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?></li>
	</ul>
</div>
<div class="employees form large-10 medium-9 columns">
<?= $this->Form->create($employee) ?>
	<fieldset>
		<legend><?= __('Add Employee'); ?></legend>
	<?php
		echo $this->Form->input('employee_number');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
