<?php

namespace Netsmartz\Redirectcustomer\Plugin;
 
class RedirectCustomUrl
{
 
    public function afterExecute(
        \Magento\Customer\Controller\Account\LoginPost $subject,
        $result)
    {
        $customUrl = '';  //add customurl here eg, $customUrl = 'category.html'; // leave blank for redirection to home page
        $result->setPath($customUrl);
        return $result;
    }
 
}