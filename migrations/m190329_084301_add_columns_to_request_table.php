<?php

use yii\db\Migration;

/**
 * Class m190329_084301_add_columns_to_request_table
 */
class m190329_084301_add_columns_to_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('request', 'city', $this->string()->notNull());
        $this->addColumn('request', 'subscription', $this->boolean()->defaultValue(1)->notNull());
        $this->addColumn('request', 'accept_conditions', $this->boolean()->defaultValue(0)->notNull());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('request', 'city');
        $this->dropColumn('request', 'subscription');
        $this->dropColumn('request', 'accept_conditions');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190329_084301_add_columns_to_request_table cannot be reverted.\n";

        return false;
    }
    */
}
