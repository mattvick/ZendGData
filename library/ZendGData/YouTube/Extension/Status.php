<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_GData
 */

namespace ZendGData\YouTube\Extension;

/**
 * Represents the yt:status element
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage YouTube
 */
class Status extends \ZendGData\Extension
{

    protected $_rootElement = 'status';
    protected $_rootNamespace = 'yt';

    public function __construct($text = null)
    {
        $this->registerAllNamespaces(\ZendGData\YouTube::$namespaces);
        parent::__construct();
        $this->_text = $text;
    }

}
