<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tai.le
 * Date: 9/15/14
 * Time: 2:48 PM
 * To change this template use File | Settings | File Templates.
 */
class DbTest extends CTestCase
{
    public function testConnection()
    {
        $this->assertNotNull(Yii::app()->db->connectionString);
    }
}