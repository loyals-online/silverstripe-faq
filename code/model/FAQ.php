<?php

/**
 * Class FAQ
 *
 * @property string $Question
 * @property string $Content
 * @property int $SortOrder
 * @property int $ParentID
 * @method FAQHolderPage Parent()
 */
class FAQ extends DataObject
{
    /**
     * @inheritdoc
     */
    private static $db = [
        'Question'  => 'Text',
        'Content'   => 'CustomHTMLText',
        'SortOrder' => 'Int',
    ];

    /**
     * @inheritdoc
     */
    private static $has_one = [
        'Parent' => 'FAQHolderPage',
    ];

    /**
     * @inheritdoc
     */
    private static $summary_fields = [
        'Question',
    ];

    /**
     * @inheritdoc
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->removeByName([ 'SortOrder', 'ParentID' ]);

        return $fields;
    }

    /**
     * @inheritdoc
     */
    public function Link()
    {
        return $this->Parent()->Link() . '#FAQ' . $this->ID;
    }

    /**
     * @inheritdoc
     */
    public function getTitle()
    {
        return $this->Question;
    }
}