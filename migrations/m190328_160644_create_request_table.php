<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%request}}`.
 */
class m190328_160644_create_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%request}}', [
            'id' => $this->primaryKey(),
            'second_name' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'patronymic' => $this->string(),
            'birthday' => $this->date(),
            'phone' => $this->string()->notNull(),
            'email' => $this->string(),
            'date_request' => $this->dateTime()->notNull(),
            'ip' => $this->string()->notNull(),
            'headers'=> $this->text()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%request}}');
    }
}
