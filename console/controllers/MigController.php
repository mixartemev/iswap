<?php
/**
 * User: mix
 * Date: 04/08/16
 * Time: 00:27
 */

namespace console\controllers;

use yii\console\controllers\MigrateController;

class MigController extends MigrateController
{
	/**
	 * @inheritdoc
	 */
	public $templateFile = '@console/views/migration.php';
}
