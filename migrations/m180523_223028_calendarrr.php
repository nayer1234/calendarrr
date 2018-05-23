<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180523_223028_calendarrr
 */
class m180523_223028_calendarrr extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('calendarrr', array(
            'id' => 'pk',
			'day' => 'DATE',
            'month' => 'DATETIME',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('calendarrr');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180523_223028_calendarrr cannot be reverted.\n";

        return false;
    }
    */
}
