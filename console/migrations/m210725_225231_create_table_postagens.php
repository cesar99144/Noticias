<?php

use yii\db\Migration;

/**
 * Class m210725_225231_create_table_postagens
 */
class m210725_225231_create_table_postagens extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%postagens}}', [
            'id'=> $this->primaryKey(),
            'titulo' => $this->string(70),
            'descricao' => $this->string(120),
            'idCategoria' => $this->integer(),
        ]);

         //adicionar chave estrangeira
         $this->addForeignKey(
            'fk-categoria-postagens', 
             'postagens',
             'idCategoria',
             'categorias',
             'id'
         );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210725_225231_create_table_postagens cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210725_225231_create_table_postagens cannot be reverted.\n";

        return false;
    }
    */
}
