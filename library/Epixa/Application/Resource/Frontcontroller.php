<?php
/**
 * Epixa Library
 */

namespace Epixa\Application\Resource;

use Epixa\Controller\Dispatcher;

/**
 * Extension of Zend_Application_Resource_Frontcontroller that changes a few
 * defaults.
 *
 * @category  Epixa
 * @package   Application
 * @copyright 2010 epixa.com - Court Ewing
 * @license   http://github.com/epixa/Epixa/blob/master/LICENSE New BSD
 * @author    Court Ewing (court@epixa.com)
 */
class Frontcontroller extends \Zend_Application_Resource_Frontcontroller
{
    /**
     * Disable view renderering, change the module controller directory name,
     * and pass in our own dispatcher.
     *
     * @return \Zend_Controller_Front
     */
    public function init()
    {
        $dispatcher = new Dispatcher();
        $this->getFrontController()
            ->setDispatcher($dispatcher)
            ->setParam('prefixDefaultModule', true)
            ->setModuleControllerDirectoryName('src/Controller');

        return parent::init();
    }
}