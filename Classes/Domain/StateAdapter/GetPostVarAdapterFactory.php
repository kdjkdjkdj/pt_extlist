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
 * Class implements a factory for GET/POST Var Adapter.
 * 
 * Class is an adapter for pt_extbase's gpvarsAdapter. Sets extension namespace of pt_extlist on generic factory method.
 *
 * @package Domain
 * @subpackage StateAdapter
 */
class Tx_PtExtlist_Domain_StateAdapter_GetPostVarAdapterFactory implements \TYPO3\CMS\Core\SingletonInterface
{
    /**
     * @var Tx_PtExtbase_State_GpVars_GpVarsAdapterFactory
     */
    protected $gpVarsAdapterFactory;



    /**
     * @var Tx_PtExtlist_Extbase_ExtbaseContext
     */
    protected $extbaseContext;


    /**
     * @param Tx_PtExtbase_State_GpVars_GpVarsAdapterFactory $gpVarsAdapterFactory
     */
    public function injectGpVarsAdapterFactory(Tx_PtExtbase_State_GpVars_GpVarsAdapterFactory $gpVarsAdapterFactory)
    {
        $this->gpVarsAdapterFactory = $gpVarsAdapterFactory;
    }



    /**
     * @param Tx_PtExtlist_Extbase_ExtbaseContext $extbaseContext
     */
    public function injectExtbaseContext(Tx_PtExtlist_Extbase_ExtbaseContext $extbaseContext)
    {
        $this->extbaseContext = $extbaseContext;
    }


    /**
     * Factory method for GET/POST Var Adapter.
     * 
     * @return Tx_PtExtbase_State_GpVars_GpVarsAdapter Singleton instance of GET/POST Var Adapter.
     */
    public function getInstance()
    {
        return  $this->gpVarsAdapterFactory->getInstance($this->extbaseContext->getExtensionNamespace());
    }
}
