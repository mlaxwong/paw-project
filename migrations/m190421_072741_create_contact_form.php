<?php

use paw\db\Migration;

class m190421_072741_create_contact_form extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%contact_form}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string()->defaultValue(null),
            'email' => $this->string()->defaultValue(null),
            'contact' => $this->string()->defaultValue(null),
            'location' => $this->string()->defaultValue(null),
            'interest' => $this->string()->defaultValue(null),
            'message' => $this->string()->defaultValue(null),
            'created_ip' => $this->string(36)->defaultValue(null),
            'updated_ip' => $this->string(36)->defaultValue(null),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%contact_form}}');
    }

    /*
// Use up()/down() to run migration code without a transaction.
public function up()
{

}

public function down()
{
echo "m190421_072741_create_contact_form cannot be reverted.\n";

return false;
}
 */
}
