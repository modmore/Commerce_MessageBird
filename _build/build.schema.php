<?php
/**
 * Commerce
 *
 * Copyright 2012-2013 by Mark Hamstra <hello@markhamstra.com>
 *
 * This file is part of Commerce, and proprietary to Mark Hamstra Web Development.
 *
*/
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);

/* define package name */
define('PKG_NAME','Commerce_MessageBird');
define('PKG_NAME_LOWER',strtolower(PKG_NAME));

require_once dirname(dirname(__FILE__)) . '/config.core.php';
include_once MODX_CORE_PATH . 'model/modx/modx.class.php';
$modx= new modX();
$modx->initialize('mgr');
$modx->loadClass('transport.modPackageBuilder','',false, true);
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget(XPDO_CLI_MODE ? 'ECHO' : 'HTML');

$root = dirname(dirname(__FILE__)).'/';
$sources = array(
    'root' => $root,
    'core' => $root.'core/components/commerce_messagebird/',
    'model' => $root.'core/components/commerce_messagebird/model/',
    'assets' => $root.'assets/components/commerce_messagebird/',
    'schema' => $root.'core/components/commerce_messagebird/model/schema/',
);
$manager= $modx->getManager();
$generator= $manager->getGenerator();
$generator->classTemplate= <<<EOD
<?php
/**
 * MessageBird extension for Commerce, allowing text messages to be sent.
 *
 * Copyright 2017 by Mark Hamstra <mark@modmore.com>
 *
 * This file is meant to be used with Commerce by modmore. A valid Commerce license is required.
 *
 * @package commerce_messagebird
 * @author Mark Hamstra <mark@modmore.com>
 * @license See core/components/commerce_messagebird/docs/license.txt
 */
class [+class+] extends [+extends+]
{

}

EOD;
    $generator->platformTemplate= <<<EOD
<?php
require_once strtr(realpath(dirname(dirname(__FILE__))), '\\\\', '/') . '/[+class-lowercase+].class.php';
/**
 * MessageBird extension for Commerce, allowing text messages to be sent.
 *
 * Copyright 2017 by Mark Hamstra <mark@modmore.com>
 *
 * This file is meant to be used with Commerce by modmore. A valid Commerce license is required.
 *
 * @package commerce_messagebird
 * @author Mark Hamstra <mark@modmore.com>
 * @license See core/components/commerce_messagebird/docs/license.txt
 */
class [+class+]_[+platform+] extends [+class+]
{

}

EOD;
    $generator->mapHeader= <<<EOD
<?php
/**
 * MessageBird extension for Commerce, allowing text messages to be sent.
 *
 * Copyright 2017 by Mark Hamstra <mark@modmore.com>
 *
 * This file is meant to be used with Commerce by modmore. A valid Commerce license is required.
 *
 * @package commerce_messagebird
 * @author Mark Hamstra <mark@modmore.com>
 * @license See core/components/commerce_messagebird/docs/license.txt
 */

EOD;

$generator->parseSchema($sources['schema'] . 'commerce_messagebird.mysql.schema.xml', $sources['model']);


$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

echo "\nExecution time: {$totalTime}\n";

exit ();
