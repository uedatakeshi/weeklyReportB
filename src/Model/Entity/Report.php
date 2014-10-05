<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Report Entity.
 */
class Report extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'report_date' => true,
		'employee' => true,
		'activity' => true,
		'comments' => true,
	];

}
