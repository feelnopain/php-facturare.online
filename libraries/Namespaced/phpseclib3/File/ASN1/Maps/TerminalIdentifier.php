<?php

/**
 * TerminalIdentifier
 *
 * PHP version 5
 *
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */

namespace FacturareOnline\phpseclib3\File\ASN1\Maps;

use FacturareOnline\phpseclib3\File\ASN1;

/**
 * TerminalIdentifier
 *
 * @author  Jim Wigginton <terrafrost@php.net>
 */
abstract class TerminalIdentifier
{
    const MAP = ['type' => ASN1::TYPE_PRINTABLE_STRING];
}
