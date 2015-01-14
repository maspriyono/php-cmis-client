<?php
namespace Dkd\PhpCmis;

/**
 * This file is part of php-cmis-lib.
 *
 * (c) Sascha Egerer <sascha.egerer@dkd.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Dkd\PhpCmis\CmisObject\CmisObjectInterface;
use Dkd\PhpCmis\Data\FileableCmisObjectInterface;
use Dkd\PhpCmis\Data\ObjectIdInterface;

/**
 * CMIS policy interface.
 */
interface PolicyInterface extends
    CmisObjectInterface,
    FileableCmisObjectInterface,
    ObjectIdInterface,
    PolicyPropertiesInterface
{

}
