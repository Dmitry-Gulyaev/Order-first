<?php

use yii\db\Schema;
use yii\db\Migration;

class m141108_082131_create_tables extends Migration
{

	public function safeUp()
    {
        $tableOptions = null;
        if($this->db->driverName == "mysql") {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{user}}',[
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . '(20) NOT NULL',
            'password_hash' => Schema::TYPE_STRING . ' NOT NULL',

        ],$tableOptions);
    }
    public function up()
    {
		
    }

    public function down()
    {
        echo "m141108_082131_create_tables cannot be reverted.\n";

        return false;
    }
}
