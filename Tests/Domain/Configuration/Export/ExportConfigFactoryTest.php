<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2011 punkt.de GmbH - Karlsruhe, Germany - http://www.punkt.de
 *  Authors: Daniel Lienert, Michael Knoll, Christoph Ehscheidt
 *  All rights reserved
 *
 *  For further information: http://extlist.punkt.de <extlist@punkt.de>
 *
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Class implements testcase for export configuration factory
 *
 * @package Tests
 * @subpackage Domain\Configuration\Export
 * @author Daniel Lienert
 * @see Tx_PtExtlist_Domain_Configuration_Export_ExportConfigFactory
 */
class Tx_PtExtlist_Tests_Domain_Configuration_Export_ExportConfigFactoryTest extends Tx_PtExtlist_Tests_BaseTestcase
{
    public function setup()
    {
        $this->initDefaultConfigurationBuilderMock();
    }
        
    
    
    public function testSetup()
    {
        $this->assertClassExists('Tx_PtExtlist_Domain_Configuration_Export_ExportConfigFactory');
    }
    
    
    public function testGetInstance()
    {
        $exportConfigInstance = Tx_PtExtlist_Domain_Configuration_Export_ExportConfigFactory::getInstance($this->configurationBuilderMock);
        $this->assertIsA($exportConfigInstance, 'Tx_PtExtlist_Domain_Configuration_Export_ExportConfig');
    }
}
