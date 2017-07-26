<?php
/**
 * @file Shibboleth.config.php
 *
 * Plugin configuration template.
 *
 * Usage:
 * Adjust values as applicable.
 */

// the key of the external user's identity. mandatory.
$conf['settings']['shibboleth.username'] = 'REMOTE_USER';
// the key of the external user's email address. mandatory.
$conf['settings']['shibboleth.email'] = 'mail';
// the key of the external user's first name. optional.
$conf['settings']['shibboleth.firstname'] = 'givenName';
// the key of the external user's last name. optional.
$conf['settings']['shibboleth.lastname'] = 'sn';
// the key of the external user's phone number. optional.
$conf['settings']['shibboleth.phone'] = 'telephone';
