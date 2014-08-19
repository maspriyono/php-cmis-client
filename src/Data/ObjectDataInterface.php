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

use Dkd\PhpCmis\AclInterface;
use Dkd\PhpCmis\Enum\BaseTypeId;

/**
 * Base object for CMIS documents, folders, relationships, policies, and items.
 */
interface ObjectDataInterface extends ExtensionsDataInterface
{

    /**
     * Returns the access control list.
     *
     * @return AclInterface|null the access control list or null if the access control list is unknown
     */
    public function getAcl();

    /**
     * Returns the allowable actions.
     *
     * @return AllowableActionsInterface|null the allowable actions or null if the allowable actions are unknown
     */
    public function getAllowableActions();

    /**
     * Returns the base object type.
     *
     * @return BaseTypeId|null the base object type or null if the base object type is unknown
     */
    public function getBaseTypeId();

    /**
     * Returns the change event infos.
     *
     * @return ChangeEventInfoInterface|null the change event infos or null if the infos are unknown
     */
    public function getChangeEventInfo();

    /**
     * Returns the object ID.
     *
     * @return string|null the object ID or null if the object ID is unknown
     */
    public function getId();

    /**
     * Returns the IDs of the applied policies.
     *
     * @return string[]|null the policy IDs or null if no policies are applied or the IDs are unknown
     */
    public function getPolicyIds();

    /**
     * Returns the object properties.
     * The properties can be incomplete if a property filter was used.
     *
     * @return PropertiesInterface the properties or null if no properties are known
     */
    public function getProperties();

    /**
     * Returns the relationships from and to this object.
     *
     * @return ObjectDataInterface[] the list of relationship objects, not null
     */
    public function getRelationships();

    /**
     * Returns the renditions of this object.
     *
     * @return RenditionDataInterface[] the list of renditions, not null
     */
    public function getRenditions();

    /**
     * Returns if the access control list reflects the exact permission set in the repository.
     *
     * @return boolean|null true - exact; false - not exact, other permission constraints exist; null - unknown
     */
    public function isExactAcl();
}
