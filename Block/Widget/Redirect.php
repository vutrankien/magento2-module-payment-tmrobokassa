<?php

namespace Magento\TMRobokassa\Block\Widget;

/**
 * Abstract class for Cash On Delivery and Bank Transfer payment method form
 */
use \Magento\Framework\View\Element\Template;


class Redirect extends Template
{
    protected $Config;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\TMRobokassa\Model\TMRobokassa $paymentConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->Config = $paymentConfig;
    }


    protected $_template = 'html/rk.phtml';

    /**
     * Get instructions text from config
     *
     * @return null|string
     */
    public function getGateUrl(){
        return $this->Config->getGateUrl();
    }

    public function getAmount()
    {
        return $this->Config->getAmount();
    }
    
    // public function getChildHtml($name = '', $useCache = true){
    //     return "";
    // }
    // public function getChildHtml($name = '', $useCache = true)
    // {
    //     $payment = $this->getRequest()->getPost('payment');
    //     $result = "";
    //     $deviceData = $this->getRequest()->getPost('device_data');

    //     if (isset($payment["cc_token"]) && $payment["cc_token"]) {
    //         $ccToken = $payment["cc_token"];
    //         $result .= "<input type='hidden' name='payment[cc_token]' value='$ccToken'>";
    //     }
    //     if (isset($payment['store_in_vault']) && $payment['store_in_vault']) {
    //         $storeInVault = $payment['store_in_vault'];
    //         $result .= "<input type='hidden' name='payment[store_in_vault]' value='$storeInVault'>";
    //     }
    //     if ($deviceData) {
    //         $result .= "<input type='hidden' name='device_data' value='$deviceData'>";
    //     }
    //     return $result;
    // }
}
