<?php
namespace Dkd\PhpCmis\Data;

/**
 * This file is part of php-cmis-lib.
 *
 * (c) Sascha Egerer <sascha.egerer@dkd.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Represents an object in a folder.
 */
interface ObjectInFolderDataInterface extends ExtensionsDataInterface
{
    /**
     * Returns the object at this level.
     *
     * @return ObjectDataInterface the object, not null
     */
    public function getObject();

    /**
     * Returns the path segment of the object in the folder.
     *
     * @return string|null the path segment or null if the path segment has not been requested
     */
    public function getPathSegment();
}
