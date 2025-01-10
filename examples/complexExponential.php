<?php 
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ************************************************************************************
 * @ASCOOS-NAME        	: ASCOOS CMS 25'                                            *
 * @ASCOOS-VERSION     	: 25.0.0                                                    *
 * @ASCOOS-CATEGORY    	: Framework (Frontend and Administrator Side)               *
 * @ASCOOS-CREATOR     	: Drogidis Christos                                         *
 * @ASCOOS-SITE        	: www.ascoos.com                                            *
 * @ASCOOS-LICENSE     	: [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   	: Copyright (c) 2007 - 2025, AlexSoft Software.             *
 ************************************************************************************
 *
 * @package            	: ASCOOS FRAMEWORK - TMathsHandler Examples
 * @subpackage         	: Calculate the exponential of a complex number.
 * @source             	: examples/complexExponential.php
 * @fileNo             	: 
 * @version            	: 25.0.0
 * @build               : 10845
 * @created            	: 2025-01-09 07:00:00 UTC+2
 * @updated            	: 
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2
 */

// REQUIRE ASCOOS FRAMEWORK
require_once '[ASCOOS FRAMEWORK PATH]/autoload.php';
require_once '../class/coreMaths.php';


use ASCOOS\FRAMEWORK\Kernel\Maths\TMathsHandler;

$mathsHandler = new TMathsHandler();


$complexNumber = [1, M_PI]; // Complex number: 1 + πi

$exp = $mathsHandler->complexExponential($complexNumber);

echo "Exponential of the complex number: ";
print_r($exp);
