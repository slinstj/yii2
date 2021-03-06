<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

return <<<CODE
<?php

use yii\db\Migration;

/**
 * Handles adding field_1, field_2 to table `{{%{table}}}`.
 */
class {$class} extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        \$this->addColumn('{{%{table}}}', 'field_1', \$this->string(10)->notNull());
        \$this->addColumn('{{%{table}}}', 'field_2', \$this->text()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        \$this->dropColumn('{{%{table}}}', 'field_1');
        \$this->dropColumn('{{%{table}}}', 'field_2');
    }
}

CODE;
