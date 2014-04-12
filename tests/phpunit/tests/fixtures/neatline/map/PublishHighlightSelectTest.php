<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 cc=80: */

/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

class FixturesTest_NeatlineMapPublishHighlightSelect extends Neatline_Case_Fixture
{


    public function testRecords()
    {

        $record  = $this->_record($this->exhibit);
        $record->coverage = 'POINT(1 2)';
        $record->save();

        $this->_writeRecordsApiFixture($this->exhibit,
            'NeatlineMapPublishHighlightSelect.json'
        );

    }


}
