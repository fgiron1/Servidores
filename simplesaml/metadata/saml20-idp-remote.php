<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://idpserver.westeurope.cloudapp.azure.com'] = [
    'SingleSignOnService'  => 'https://idpserver.westeurope.cloudapp.azure.com/simplesaml/saml2/idp/SSOService.php',
    'SingleLogoutService'  => 'https://idpserver.westeurope.cloudapp.azure.com/simplesaml/saml2/idp/SingleLogoutService.php',
    'certificate'          => 'idp.pem',
];
