<?php
// Created By @hoaaah * Copyright (c) 2020 belajararief.com

use yii\db\Migration;


class m141022_115823_create_user_table extends Migration
{
    public function up()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'password_hash' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'account_activation_token' => $this->string()->unique(),          
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->insert('{{%user}}', [
            'id' => 1,
            'username' => 'autoAPI',
            'email' => 'autoAPI@test.com',
            'password_hash' => '$2y$13$xXy0IcQPYMYWO9AfhCs9Yebyv8eWxguMyJsN/o82Tx6XPnt5JljY.',
            'status' => 10,
            'auth_key' => 'njjdrtUWd-hD-Ayb5o5Lz5GP8T5aWSzC',        
            'created_at' => 1665629749,
            'updated_at' => 1665629749,
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
