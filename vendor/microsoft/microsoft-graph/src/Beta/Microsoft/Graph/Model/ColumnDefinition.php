<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ColumnDefinition File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* ColumnDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ColumnDefinition extends Entity
{
    /**
    * Gets the boolean
    * This column stores boolean values.
    *
    * @return BooleanColumn The boolean
    */
    public function getBoolean()
    {
        if (array_key_exists("boolean", $this->_propDict)) {
            if (is_a($this->_propDict["boolean"], "\Beta\Microsoft\Graph\Model\BooleanColumn")) {
                return $this->_propDict["boolean"];
            } else {
                $this->_propDict["boolean"] = new BooleanColumn($this->_propDict["boolean"]);
                return $this->_propDict["boolean"];
            }
        }
        return null;
    }
    
    /**
    * Sets the boolean
    * This column stores boolean values.
    *
    * @param BooleanColumn $val The boolean
    *
    * @return ColumnDefinition
    */
    public function setBoolean($val)
    {
        $this->_propDict["boolean"] = $val;
        return $this;
    }
    
    /**
    * Gets the calculated
    * This column's data is calculated based on other columns.
    *
    * @return CalculatedColumn The calculated
    */
    public function getCalculated()
    {
        if (array_key_exists("calculated", $this->_propDict)) {
            if (is_a($this->_propDict["calculated"], "\Beta\Microsoft\Graph\Model\CalculatedColumn")) {
                return $this->_propDict["calculated"];
            } else {
                $this->_propDict["calculated"] = new CalculatedColumn($this->_propDict["calculated"]);
                return $this->_propDict["calculated"];
            }
        }
        return null;
    }
    
    /**
    * Sets the calculated
    * This column's data is calculated based on other columns.
    *
    * @param CalculatedColumn $val The calculated
    *
    * @return ColumnDefinition
    */
    public function setCalculated($val)
    {
        $this->_propDict["calculated"] = $val;
        return $this;
    }
    
    /**
    * Gets the choice
    * This column stores data from a list of choices.
    *
    * @return ChoiceColumn The choice
    */
    public function getChoice()
    {
        if (array_key_exists("choice", $this->_propDict)) {
            if (is_a($this->_propDict["choice"], "\Beta\Microsoft\Graph\Model\ChoiceColumn")) {
                return $this->_propDict["choice"];
            } else {
                $this->_propDict["choice"] = new ChoiceColumn($this->_propDict["choice"]);
                return $this->_propDict["choice"];
            }
        }
        return null;
    }
    
    /**
    * Sets the choice
    * This column stores data from a list of choices.
    *
    * @param ChoiceColumn $val The choice
    *
    * @return ColumnDefinition
    */
    public function setChoice($val)
    {
        $this->_propDict["choice"] = $val;
        return $this;
    }
    
    /**
    * Gets the columnGroup
    * For site columns, the name of the group this column belongs to. Helps organize related columns.
    *
    * @return string The columnGroup
    */
    public function getColumnGroup()
    {
        if (array_key_exists("columnGroup", $this->_propDict)) {
            return $this->_propDict["columnGroup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the columnGroup
    * For site columns, the name of the group this column belongs to. Helps organize related columns.
    *
    * @param string $val The columnGroup
    *
    * @return ColumnDefinition
    */
    public function setColumnGroup($val)
    {
        $this->_propDict["columnGroup"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentApprovalStatus
    * This column stores content approval status.
    *
    * @return ContentApprovalStatusColumn The contentApprovalStatus
    */
    public function getContentApprovalStatus()
    {
        if (array_key_exists("contentApprovalStatus", $this->_propDict)) {
            if (is_a($this->_propDict["contentApprovalStatus"], "\Beta\Microsoft\Graph\Model\ContentApprovalStatusColumn")) {
                return $this->_propDict["contentApprovalStatus"];
            } else {
                $this->_propDict["contentApprovalStatus"] = new ContentApprovalStatusColumn($this->_propDict["contentApprovalStatus"]);
                return $this->_propDict["contentApprovalStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contentApprovalStatus
    * This column stores content approval status.
    *
    * @param ContentApprovalStatusColumn $val The contentApprovalStatus
    *
    * @return ColumnDefinition
    */
    public function setContentApprovalStatus($val)
    {
        $this->_propDict["contentApprovalStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the currency
    * This column stores currency values.
    *
    * @return CurrencyColumn The currency
    */
    public function getCurrency()
    {
        if (array_key_exists("currency", $this->_propDict)) {
            if (is_a($this->_propDict["currency"], "\Beta\Microsoft\Graph\Model\CurrencyColumn")) {
                return $this->_propDict["currency"];
            } else {
                $this->_propDict["currency"] = new CurrencyColumn($this->_propDict["currency"]);
                return $this->_propDict["currency"];
            }
        }
        return null;
    }
    
    /**
    * Sets the currency
    * This column stores currency values.
    *
    * @param CurrencyColumn $val The currency
    *
    * @return ColumnDefinition
    */
    public function setCurrency($val)
    {
        $this->_propDict["currency"] = $val;
        return $this;
    }
    
    /**
    * Gets the dateTime
    * This column stores DateTime values.
    *
    * @return DateTimeColumn The dateTime
    */
    public function getDateTime()
    {
        if (array_key_exists("dateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dateTime"], "\Beta\Microsoft\Graph\Model\DateTimeColumn")) {
                return $this->_propDict["dateTime"];
            } else {
                $this->_propDict["dateTime"] = new DateTimeColumn($this->_propDict["dateTime"]);
                return $this->_propDict["dateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dateTime
    * This column stores DateTime values.
    *
    * @param DateTimeColumn $val The dateTime
    *
    * @return ColumnDefinition
    */
    public function setDateTime($val)
    {
        $this->_propDict["dateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultValue
    * The default value for this column.
    *
    * @return DefaultColumnValue The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict)) {
            if (is_a($this->_propDict["defaultValue"], "\Beta\Microsoft\Graph\Model\DefaultColumnValue")) {
                return $this->_propDict["defaultValue"];
            } else {
                $this->_propDict["defaultValue"] = new DefaultColumnValue($this->_propDict["defaultValue"]);
                return $this->_propDict["defaultValue"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultValue
    * The default value for this column.
    *
    * @param DefaultColumnValue $val The defaultValue
    *
    * @return ColumnDefinition
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The user-facing description of the column.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * The user-facing description of the column.
    *
    * @param string $val The description
    *
    * @return ColumnDefinition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The user-facing name of the column.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The user-facing name of the column.
    *
    * @param string $val The displayName
    *
    * @return ColumnDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the enforceUniqueValues
    * If true, no two list items may have the same value for this column.
    *
    * @return bool The enforceUniqueValues
    */
    public function getEnforceUniqueValues()
    {
        if (array_key_exists("enforceUniqueValues", $this->_propDict)) {
            return $this->_propDict["enforceUniqueValues"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enforceUniqueValues
    * If true, no two list items may have the same value for this column.
    *
    * @param bool $val The enforceUniqueValues
    *
    * @return ColumnDefinition
    */
    public function setEnforceUniqueValues($val)
    {
        $this->_propDict["enforceUniqueValues"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the geolocation
    * This column stores a geolocation.
    *
    * @return GeolocationColumn The geolocation
    */
    public function getGeolocation()
    {
        if (array_key_exists("geolocation", $this->_propDict)) {
            if (is_a($this->_propDict["geolocation"], "\Beta\Microsoft\Graph\Model\GeolocationColumn")) {
                return $this->_propDict["geolocation"];
            } else {
                $this->_propDict["geolocation"] = new GeolocationColumn($this->_propDict["geolocation"]);
                return $this->_propDict["geolocation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the geolocation
    * This column stores a geolocation.
    *
    * @param GeolocationColumn $val The geolocation
    *
    * @return ColumnDefinition
    */
    public function setGeolocation($val)
    {
        $this->_propDict["geolocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the hidden
    * Specifies whether the column is displayed in the user interface.
    *
    * @return bool The hidden
    */
    public function getHidden()
    {
        if (array_key_exists("hidden", $this->_propDict)) {
            return $this->_propDict["hidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hidden
    * Specifies whether the column is displayed in the user interface.
    *
    * @param bool $val The hidden
    *
    * @return ColumnDefinition
    */
    public function setHidden($val)
    {
        $this->_propDict["hidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hyperlinkOrPicture
    * This column stores hyperlink or picture values.
    *
    * @return HyperlinkOrPictureColumn The hyperlinkOrPicture
    */
    public function getHyperlinkOrPicture()
    {
        if (array_key_exists("hyperlinkOrPicture", $this->_propDict)) {
            if (is_a($this->_propDict["hyperlinkOrPicture"], "\Beta\Microsoft\Graph\Model\HyperlinkOrPictureColumn")) {
                return $this->_propDict["hyperlinkOrPicture"];
            } else {
                $this->_propDict["hyperlinkOrPicture"] = new HyperlinkOrPictureColumn($this->_propDict["hyperlinkOrPicture"]);
                return $this->_propDict["hyperlinkOrPicture"];
            }
        }
        return null;
    }
    
    /**
    * Sets the hyperlinkOrPicture
    * This column stores hyperlink or picture values.
    *
    * @param HyperlinkOrPictureColumn $val The hyperlinkOrPicture
    *
    * @return ColumnDefinition
    */
    public function setHyperlinkOrPicture($val)
    {
        $this->_propDict["hyperlinkOrPicture"] = $val;
        return $this;
    }
    
    /**
    * Gets the indexed
    * Specifies whether the column values can used for sorting and searching.
    *
    * @return bool The indexed
    */
    public function getIndexed()
    {
        if (array_key_exists("indexed", $this->_propDict)) {
            return $this->_propDict["indexed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the indexed
    * Specifies whether the column values can used for sorting and searching.
    *
    * @param bool $val The indexed
    *
    * @return ColumnDefinition
    */
    public function setIndexed($val)
    {
        $this->_propDict["indexed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isDeletable
    * Indicates whether this column can be deleted.
    *
    * @return bool The isDeletable
    */
    public function getIsDeletable()
    {
        if (array_key_exists("isDeletable", $this->_propDict)) {
            return $this->_propDict["isDeletable"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeletable
    * Indicates whether this column can be deleted.
    *
    * @param bool $val The isDeletable
    *
    * @return ColumnDefinition
    */
    public function setIsDeletable($val)
    {
        $this->_propDict["isDeletable"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isReorderable
    * Indicates whether values in the column can be reordered. Read-only.
    *
    * @return bool The isReorderable
    */
    public function getIsReorderable()
    {
        if (array_key_exists("isReorderable", $this->_propDict)) {
            return $this->_propDict["isReorderable"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isReorderable
    * Indicates whether values in the column can be reordered. Read-only.
    *
    * @param bool $val The isReorderable
    *
    * @return ColumnDefinition
    */
    public function setIsReorderable($val)
    {
        $this->_propDict["isReorderable"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isSealed
    * Specifies whether column can be changed.
    *
    * @return bool The isSealed
    */
    public function getIsSealed()
    {
        if (array_key_exists("isSealed", $this->_propDict)) {
            return $this->_propDict["isSealed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSealed
    * Specifies whether column can be changed.
    *
    * @param bool $val The isSealed
    *
    * @return ColumnDefinition
    */
    public function setIsSealed($val)
    {
        $this->_propDict["isSealed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lookup
    * This column's data is looked up from another source in the site.
    *
    * @return LookupColumn The lookup
    */
    public function getLookup()
    {
        if (array_key_exists("lookup", $this->_propDict)) {
            if (is_a($this->_propDict["lookup"], "\Beta\Microsoft\Graph\Model\LookupColumn")) {
                return $this->_propDict["lookup"];
            } else {
                $this->_propDict["lookup"] = new LookupColumn($this->_propDict["lookup"]);
                return $this->_propDict["lookup"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lookup
    * This column's data is looked up from another source in the site.
    *
    * @param LookupColumn $val The lookup
    *
    * @return ColumnDefinition
    */
    public function setLookup($val)
    {
        $this->_propDict["lookup"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * The API-facing name of the column as it appears in the [fields][] on a [listItem][]. For the user-facing name, see displayName.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    * The API-facing name of the column as it appears in the [fields][] on a [listItem][]. For the user-facing name, see displayName.
    *
    * @param string $val The name
    *
    * @return ColumnDefinition
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the number
    * This column stores number values.
    *
    * @return NumberColumn The number
    */
    public function getNumber()
    {
        if (array_key_exists("number", $this->_propDict)) {
            if (is_a($this->_propDict["number"], "\Beta\Microsoft\Graph\Model\NumberColumn")) {
                return $this->_propDict["number"];
            } else {
                $this->_propDict["number"] = new NumberColumn($this->_propDict["number"]);
                return $this->_propDict["number"];
            }
        }
        return null;
    }
    
    /**
    * Sets the number
    * This column stores number values.
    *
    * @param NumberColumn $val The number
    *
    * @return ColumnDefinition
    */
    public function setNumber($val)
    {
        $this->_propDict["number"] = $val;
        return $this;
    }
    
    /**
    * Gets the personOrGroup
    * This column stores Person or Group values.
    *
    * @return PersonOrGroupColumn The personOrGroup
    */
    public function getPersonOrGroup()
    {
        if (array_key_exists("personOrGroup", $this->_propDict)) {
            if (is_a($this->_propDict["personOrGroup"], "\Beta\Microsoft\Graph\Model\PersonOrGroupColumn")) {
                return $this->_propDict["personOrGroup"];
            } else {
                $this->_propDict["personOrGroup"] = new PersonOrGroupColumn($this->_propDict["personOrGroup"]);
                return $this->_propDict["personOrGroup"];
            }
        }
        return null;
    }
    
    /**
    * Sets the personOrGroup
    * This column stores Person or Group values.
    *
    * @param PersonOrGroupColumn $val The personOrGroup
    *
    * @return ColumnDefinition
    */
    public function setPersonOrGroup($val)
    {
        $this->_propDict["personOrGroup"] = $val;
        return $this;
    }
    
    /**
    * Gets the propagateChanges
    * If 'True' changes to this column will be propagated to lists that implement the column.
    *
    * @return bool The propagateChanges
    */
    public function getPropagateChanges()
    {
        if (array_key_exists("propagateChanges", $this->_propDict)) {
            return $this->_propDict["propagateChanges"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the propagateChanges
    * If 'True' changes to this column will be propagated to lists that implement the column.
    *
    * @param bool $val The propagateChanges
    *
    * @return ColumnDefinition
    */
    public function setPropagateChanges($val)
    {
        $this->_propDict["propagateChanges"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the readOnly
    * Specifies whether the column values can be modified.
    *
    * @return bool The readOnly
    */
    public function getReadOnly()
    {
        if (array_key_exists("readOnly", $this->_propDict)) {
            return $this->_propDict["readOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the readOnly
    * Specifies whether the column values can be modified.
    *
    * @param bool $val The readOnly
    *
    * @return ColumnDefinition
    */
    public function setReadOnly($val)
    {
        $this->_propDict["readOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the required
    * Specifies whether the column value is not optional.
    *
    * @return bool The required
    */
    public function getRequired()
    {
        if (array_key_exists("required", $this->_propDict)) {
            return $this->_propDict["required"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the required
    * Specifies whether the column value is not optional.
    *
    * @param bool $val The required
    *
    * @return ColumnDefinition
    */
    public function setRequired($val)
    {
        $this->_propDict["required"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the term
    * This column stores taxonomy terms.
    *
    * @return TermColumn The term
    */
    public function getTerm()
    {
        if (array_key_exists("term", $this->_propDict)) {
            if (is_a($this->_propDict["term"], "\Beta\Microsoft\Graph\Model\TermColumn")) {
                return $this->_propDict["term"];
            } else {
                $this->_propDict["term"] = new TermColumn($this->_propDict["term"]);
                return $this->_propDict["term"];
            }
        }
        return null;
    }
    
    /**
    * Sets the term
    * This column stores taxonomy terms.
    *
    * @param TermColumn $val The term
    *
    * @return ColumnDefinition
    */
    public function setTerm($val)
    {
        $this->_propDict["term"] = $val;
        return $this;
    }
    
    /**
    * Gets the text
    * This column stores text values.
    *
    * @return TextColumn The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            if (is_a($this->_propDict["text"], "\Beta\Microsoft\Graph\Model\TextColumn")) {
                return $this->_propDict["text"];
            } else {
                $this->_propDict["text"] = new TextColumn($this->_propDict["text"]);
                return $this->_propDict["text"];
            }
        }
        return null;
    }
    
    /**
    * Sets the text
    * This column stores text values.
    *
    * @param TextColumn $val The text
    *
    * @return ColumnDefinition
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    
    /**
    * Gets the thumbnail
    * This column stores thumbnail values.
    *
    * @return ThumbnailColumn The thumbnail
    */
    public function getThumbnail()
    {
        if (array_key_exists("thumbnail", $this->_propDict)) {
            if (is_a($this->_propDict["thumbnail"], "\Beta\Microsoft\Graph\Model\ThumbnailColumn")) {
                return $this->_propDict["thumbnail"];
            } else {
                $this->_propDict["thumbnail"] = new ThumbnailColumn($this->_propDict["thumbnail"]);
                return $this->_propDict["thumbnail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the thumbnail
    * This column stores thumbnail values.
    *
    * @param ThumbnailColumn $val The thumbnail
    *
    * @return ColumnDefinition
    */
    public function setThumbnail($val)
    {
        $this->_propDict["thumbnail"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    * For site columns, the type of column. Read-only
    *
    * @return ColumnTypes The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\ColumnTypes")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new ColumnTypes($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }
    
    /**
    * Sets the type
    * For site columns, the type of column. Read-only
    *
    * @param ColumnTypes $val The type
    *
    * @return ColumnDefinition
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
    /**
    * Gets the validation
    * This column stores validation formula and message for the column.
    *
    * @return ColumnValidation The validation
    */
    public function getValidation()
    {
        if (array_key_exists("validation", $this->_propDict)) {
            if (is_a($this->_propDict["validation"], "\Beta\Microsoft\Graph\Model\ColumnValidation")) {
                return $this->_propDict["validation"];
            } else {
                $this->_propDict["validation"] = new ColumnValidation($this->_propDict["validation"]);
                return $this->_propDict["validation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the validation
    * This column stores validation formula and message for the column.
    *
    * @param ColumnValidation $val The validation
    *
    * @return ColumnDefinition
    */
    public function setValidation($val)
    {
        $this->_propDict["validation"] = $val;
        return $this;
    }
    
    /**
    * Gets the sourceColumn
    * The source column for content type column.
    *
    * @return ColumnDefinition The sourceColumn
    */
    public function getSourceColumn()
    {
        if (array_key_exists("sourceColumn", $this->_propDict)) {
            if (is_a($this->_propDict["sourceColumn"], "\Beta\Microsoft\Graph\Model\ColumnDefinition")) {
                return $this->_propDict["sourceColumn"];
            } else {
                $this->_propDict["sourceColumn"] = new ColumnDefinition($this->_propDict["sourceColumn"]);
                return $this->_propDict["sourceColumn"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sourceColumn
    * The source column for content type column.
    *
    * @param ColumnDefinition $val The sourceColumn
    *
    * @return ColumnDefinition
    */
    public function setSourceColumn($val)
    {
        $this->_propDict["sourceColumn"] = $val;
        return $this;
    }
    
}
