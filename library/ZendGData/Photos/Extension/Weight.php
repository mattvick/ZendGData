<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_GData
 */

namespace ZendGData\Photos\Extension;

/**
 * Represents the gphoto:weight element used by the API.
 * This indicates the weight of a tag, based on the number of times
 * it appears in photos under the current element.
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage Photos
 */
class Weight extends \ZendGData\Extension
{

    protected $_rootNamespace = 'gphoto';
    protected $_rootElement = 'weight';

    /**
     * Constructs a new Zend_Gdata_Photos_Extension_Weight object.
     *
     * @param string $text (optional) The value to represent.
     */
    public function __construct($text = null)
    {
        $this->registerAllNamespaces(\ZendGData\Photos::$namespaces);
        parent::__construct();
        $this->setText($text);
    }

}
