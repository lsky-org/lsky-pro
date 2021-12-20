<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemActionSet File
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
* ItemActionSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemActionSet extends Entity
{

    /**
    * Gets the comment
    * A comment was added to the item.
    *
    * @return CommentAction The comment
    */
    public function getComment()
    {
        if (array_key_exists("comment", $this->_propDict)) {
            if (is_a($this->_propDict["comment"], "\Beta\Microsoft\Graph\Model\CommentAction")) {
                return $this->_propDict["comment"];
            } else {
                $this->_propDict["comment"] = new CommentAction($this->_propDict["comment"]);
                return $this->_propDict["comment"];
            }
        }
        return null;
    }

    /**
    * Sets the comment
    * A comment was added to the item.
    *
    * @param CommentAction $val The value to assign to the comment
    *
    * @return ItemActionSet The ItemActionSet
    */
    public function setComment($val)
    {
        $this->_propDict["comment"] = $val;
         return $this;
    }

    /**
    * Gets the create
    * An item was created.
    *
    * @return CreateAction The create
    */
    public function getCreate()
    {
        if (array_key_exists("create", $this->_propDict)) {
            if (is_a($this->_propDict["create"], "\Beta\Microsoft\Graph\Model\CreateAction")) {
                return $this->_propDict["create"];
            } else {
                $this->_propDict["create"] = new CreateAction($this->_propDict["create"]);
                return $this->_propDict["create"];
            }
        }
        return null;
    }

    /**
    * Sets the create
    * An item was created.
    *
    * @param CreateAction $val The value to assign to the create
    *
    * @return ItemActionSet The ItemActionSet
    */
    public function setCreate($val)
    {
        $this->_propDict["create"] = $val;
         return $this;
    }

    /**
    * Gets the delete
    * An item was deleted.
    *
    * @return DeleteAction The delete
    */
    public function getDelete()
    {
        if (array_key_exists("delete", $this->_propDict)) {
            if (is_a($this->_propDict["delete"], "\Beta\Microsoft\Graph\Model\DeleteAction")) {
                return $this->_propDict["delete"];
            } else {
                $this->_propDict["delete"] = new DeleteAction($this->_propDict["delete"]);
                return $this->_propDict["delete"];
            }
        }
        return null;
    }

    /**
    * Sets the delete
    * An item was deleted.
    *
    * @param DeleteAction $val The value to assign to the delete
    *
    * @return ItemActionSet The ItemActionSet
    */
    public function setDelete($val)
    {
        $this->_propDict["delete"] = $val;
         return $this;
    }

    /**
    * Gets the edit
    * An item was edited.
    *
    * @return EditAction The edit
    */
    public function getEdit()
    {
        if (array_key_exists("edit", $this->_propDict)) {
            if (is_a($this->_propDict["edit"], "\Beta\Microsoft\Graph\Model\EditAction")) {
                return $this->_propDict["edit"];
            } else {
                $this->_propDict["edit"] = new EditAction($this->_propDict["edit"]);
                return $this->_propDict["edit"];
            }
        }
        return null;
    }

    /**
    * Sets the edit
    * An item was edited.
    *
    * @param EditAction $val The value to assign to the edit
    *
    * @return ItemActionSet The ItemActionSet
    */
    public function setEdit($val)
    {
        $this->_propDict["edit"] = $val;
         return $this;
    }

    /**
    * Gets the mention
    * A user was mentioned in the item.
    *
    * @return MentionAction The mention
    */
    public function getMention()
    {
        if (array_key_exists("mention", $this->_propDict)) {
            if (is_a($this->_propDict["mention"], "\Beta\Microsoft\Graph\Model\MentionAction")) {
                return $this->_propDict["mention"];
            } else {
                $this->_propDict["mention"] = new MentionAction($this->_propDict["mention"]);
                return $this->_propDict["mention"];
            }
        }
        return null;
    }

    /**
    * Sets the mention
    * A user was mentioned in the item.
    *
    * @param MentionAction $val The value to assign to the mention
    *
    * @return ItemActionSet The ItemActionSet
    */
    public function setMention($val)
    {
        $this->_propDict["mention"] = $val;
         return $this;
    }

    /**
    * Gets the move
    * An item was moved.
    *
    * @return MoveAction The move
    */
    public function getMove()
    {
        if (array_key_exists("move", $this->_propDict)) {
            if (is_a($this->_propDict["move"], "\Beta\Microsoft\Graph\Model\MoveAction")) {
                return $this->_propDict["move"];
            } else {
                $this->_propDict["move"] = new MoveAction($this->_propDict["move"]);
                return $this->_propDict["move"];
            }
        }
        return null;
    }

    /**
    * Sets the move
    * An item was moved.
    *
    * @param MoveAction $val The value to assign to the move
    *
    * @return ItemActionSet The ItemActionSet
    */
    public function setMove($val)
    {
        $this->_propDict["move"] = $val;
         return $this;
    }

    /**
    * Gets the rename
    * An item was renamed.
    *
    * @return RenameAction The rename
    */
    public function getRename()
    {
        if (array_key_exists("rename", $this->_propDict)) {
            if (is_a($this->_propDict["rename"], "\Beta\Microsoft\Graph\Model\RenameAction")) {
                return $this->_propDict["rename"];
            } else {
                $this->_propDict["rename"] = new RenameAction($this->_propDict["rename"]);
                return $this->_propDict["rename"];
            }
        }
        return null;
    }

    /**
    * Sets the rename
    * An item was renamed.
    *
    * @param RenameAction $val The value to assign to the rename
    *
    * @return ItemActionSet The ItemActionSet
    */
    public function setRename($val)
    {
        $this->_propDict["rename"] = $val;
         return $this;
    }

    /**
    * Gets the restore
    * An item was restored.
    *
    * @return RestoreAction The restore
    */
    public function getRestore()
    {
        if (array_key_exists("restore", $this->_propDict)) {
            if (is_a($this->_propDict["restore"], "\Beta\Microsoft\Graph\Model\RestoreAction")) {
                return $this->_propDict["restore"];
            } else {
                $this->_propDict["restore"] = new RestoreAction($this->_propDict["restore"]);
                return $this->_propDict["restore"];
            }
        }
        return null;
    }

    /**
    * Sets the restore
    * An item was restored.
    *
    * @param RestoreAction $val The value to assign to the restore
    *
    * @return ItemActionSet The ItemActionSet
    */
    public function setRestore($val)
    {
        $this->_propDict["restore"] = $val;
         return $this;
    }

    /**
    * Gets the share
    * An item was shared.
    *
    * @return ShareAction The share
    */
    public function getShare()
    {
        if (array_key_exists("share", $this->_propDict)) {
            if (is_a($this->_propDict["share"], "\Beta\Microsoft\Graph\Model\ShareAction")) {
                return $this->_propDict["share"];
            } else {
                $this->_propDict["share"] = new ShareAction($this->_propDict["share"]);
                return $this->_propDict["share"];
            }
        }
        return null;
    }

    /**
    * Sets the share
    * An item was shared.
    *
    * @param ShareAction $val The value to assign to the share
    *
    * @return ItemActionSet The ItemActionSet
    */
    public function setShare($val)
    {
        $this->_propDict["share"] = $val;
         return $this;
    }

    /**
    * Gets the version
    * An item was versioned.
    *
    * @return VersionAction The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            if (is_a($this->_propDict["version"], "\Beta\Microsoft\Graph\Model\VersionAction")) {
                return $this->_propDict["version"];
            } else {
                $this->_propDict["version"] = new VersionAction($this->_propDict["version"]);
                return $this->_propDict["version"];
            }
        }
        return null;
    }

    /**
    * Sets the version
    * An item was versioned.
    *
    * @param VersionAction $val The value to assign to the version
    *
    * @return ItemActionSet The ItemActionSet
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
         return $this;
    }
}
