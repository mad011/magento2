<?php
namespace W2\Content\Block;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\UrlInterface ;
class Exits extends \Magento\Framework\View\Element\Template
{
    protected $_urlInterface;
    public function __construct(Context $context,urlInterface $urlInterface)
    {

        parent::__construct($context);
        $this->_urlInterface = $urlInterface;
    }

    public function sayHello()
    {

        return __('Hello World');
    }

    public function getUrlInterfaceData()
    {
        echo $this->_urlInterface->getCurrentUrl();

        echo $this->_urlInterface->getUrl();

        echo $this->_urlInterface->getUrl('test/test2');

        echo $this->_urlInterface->getBaseUrl();
    }








}