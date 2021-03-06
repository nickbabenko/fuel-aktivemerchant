<?php

/**
 * FuelPHP AktiveMerchant Package
 *
 * @package Aktive Merchant
 * @author  Andreas Kollaros
 * @license http://www.opensource.org/licenses/mit-license.php
 */


Autoloader::add_classes(array(
    'Merchant_Billing_AvsResult' => __DIR__ . '/classes/merchant/billing/AvsResult.php',
    'Merchant_Billing_CreditCard' => __DIR__ . '/classes/merchant/billing/CreditCard.php',
    'Merchant_Billing_CreditCardMethods' => __DIR__ . '/classes/merchant/billing/CreditCardMethods.php',
    'Merchant_Billing_CvvResult' => __DIR__ . '/classes/merchant/billing/CvvResult.php',
    'Merchant_Billing_ExpiryDate' => __DIR__ . '/classes/merchant/billing/ExpiryDate.php',
    'Merchant_Billing_Expect' => __DIR__ . '/classes/merchant/billing/Expect.php',
    'Merchant_Billing_Gateway' => __DIR__ . '/classes/merchant/billing/Gateway.php',
    'Merchant_Billing_Base' => __DIR__ . '/classes/merchant/billing/Base.php',
    'Merchant_Billing_Response' => __DIR__ . '/classes/merchant/billing/Response.php',

    'Merchant_Billing_AuthorizeNet' => __DIR__ . '/classes/merchant/billing/gateways/AuthorizeNet.php',
    'Merchant_Billing_Bogus' => __DIR__ . '/classes/merchant/billing/gateways/Bogus.php',
    'Merchant_Billing_Cardstream' => __DIR__ . '/classes/merchant/billing/gateways/Cardstream.php',

    'Merchant_Billing_CentinelResponse' => __DIR__ . '/classes/merchant/billing/gateways/centinel/CentinelResponse.php',
    'Merchant_Billing_Centinel' => __DIR__ . '/classes/merchant/billing/gateways/Centinel.php',

    'Merchant_Billing_Eurobank' => __DIR__ . '/classes/merchant/billing/gateways/Eurobank.php',
    'Merchant_Billing_HsbcSecureEpayments' => __DIR__ . '/classes/merchant/billing/gateways/HsbcSecureEpayments.php',

    'Merchant_Billing_PayflowCommon' => __DIR__ . '/classes/merchant/billing/gateways/payflow/PayflowCommon.php',
    'Merchant_Billing_PayflowResponse' => __DIR__ . '/classes/merchant/billing/gateways/payflow/PayflowResponse.php',
    'Merchant_Billing_Payflow' => __DIR__ . '/classes/merchant/billing/gateways/Payflow.php',
    'Merchant_Billing_PayflowUk' => __DIR__ . '/classes/merchant/billing/gateways/PayflowUk.php',

    'Merchant_Billing_PaypalCommon' => __DIR__ . '/classes/merchant/billing/gateways/paypal/PaypalCommon.php',
    'Merchant_Billing_PaypalExpressResponse' => __DIR__ . '/classes/merchant/billing/gateways/paypal/PaypalExpressResponse.php',
    'Merchant_Billing_Paypal' => __DIR__ . '/classes/merchant/billing/gateways/Paypal.php',
    'Merchant_Billing_PaypalExpress' => __DIR__ . '/classes/merchant/billing/gateways/PaypalExpress.php',

    'Merchant_Billing_PiraeusPaycenter' => __DIR__ . '/classes/merchant/billing/gateways/PiraeusPaycenter.php',
    'Merchant_Billing_Realex' => __DIR__ . '/classes/merchant/billing/gateways/Realex.php',
    'Merchant_Billing_ePDQ' => __DIR__ . '/classes/merchant/billing/gateways/ePDQ.php',

    'Merchant_Billing_Integration' => __DIR__ . '/classes/merchant/billing/integrations/Integration.php',
    'Merchant_Billing_Integration_Eurobank' => __DIR__ . '/classes/merchant/billing/integrations/Eurobank.php',
    'Merchant_Billing_FormHelper' => __DIR__ . '/classes/merchant/billing/integrations/FormHelper.php',
    'Merchant_Billing_Helper' => __DIR__ . '/classes/merchant/billing/integrations/Helper.php',

    'Merchant_Connection' => __DIR__ . '/classes/merchant/common/Connection.php',
    'Merchant_Country' => __DIR__ . '/classes/merchant/common/Country.php',
    'Merchant_Error' => __DIR__ . '/classes/merchant/common/Error.php',
    'Inflect' => __DIR__ . '/classes/merchant/common/Inflect.php',
    'Merchant_Logger' => __DIR__ . '/classes/merchant/common/Logger.php',
    
    'GatewaySupport' => __DIR__ . '/classes/support/GatewaySupport.php',
));

/* End of file bootstrap.php */
