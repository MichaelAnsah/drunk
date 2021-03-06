<?php

/**
 * BaseSelectedCompositeDisplayField
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $compositeDisplayFieldId
 * @property integer $reportId
 * @property Report $Report
 * @property CompositeDisplayField $CompositeDisplayField
 * 
 * @method integer                       getId()                      Returns the current record's "id" value
 * @method integer                       getCompositeDisplayFieldId() Returns the current record's "compositeDisplayFieldId" value
 * @method integer                       getReportId()                Returns the current record's "reportId" value
 * @method Report                        getReport()                  Returns the current record's "Report" value
 * @method CompositeDisplayField         getCompositeDisplayField()   Returns the current record's "CompositeDisplayField" value
 * @method SelectedCompositeDisplayField setId()                      Sets the current record's "id" value
 * @method SelectedCompositeDisplayField setCompositeDisplayFieldId() Sets the current record's "compositeDisplayFieldId" value
 * @method SelectedCompositeDisplayField setReportId()                Sets the current record's "reportId" value
 * @method SelectedCompositeDisplayField setReport()                  Sets the current record's "Report" value
 * @method SelectedCompositeDisplayField setCompositeDisplayField()   Sets the current record's "CompositeDisplayField" value
 * 
 * @package    orangehrm
 * @subpackage model\core\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSelectedCompositeDisplayField extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_selected_composite_display_field');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('composite_display_field_id as compositeDisplayFieldId', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('report_id as reportId', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Report', array(
             'local' => 'report_id',
             'foreign' => 'reportId',
             'onDelete' => 'cascade'));

        $this->hasOne('CompositeDisplayField', array(
             'local' => 'composite_display_field_id',
             'foreign' => 'compositeDisplayFieldId',
             'onDelete' => 'cascade'));
    }
}