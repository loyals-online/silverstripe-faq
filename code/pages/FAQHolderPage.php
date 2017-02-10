<?php


/**
 * Class FAQHolderPage
 *
 * @method DataList|FAQ[] FAQs()
 */
class FAQHolderPage extends Page
{
    /**
     * @inheritdoc
     */
    private static $defaults = [
        "CanViewType"  => "Inherit",
        "CanEditType"  => "Inherit",
        "ShowInHeader" => 0,
        "ShowInFooter" => 0,
    ];

    /**
     * @inheritdoc
     */
    private static $has_many = [
        'FAQs' => 'FAQ',
    ];

    /**
     * @inheritdoc
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $config = GridFieldConfig_RecordEditor::create()
            ->removeComponentsByType('GridFieldDeleteAction')
            ->addComponent(new GridFieldDeleteAction(false))
            ->addComponent(new GridFieldOrderableRows('SortOrder'));

        $fields->addFieldsToTab("Root.FAQs", [
            GridField::create('FAQs', _t('FAQ.FAQs', 'FAQs'), $this->FAQs()->sort('SortOrder ASC'), $config),
        ]);

        return $fields;
    }
}

/**
 * Class FAQHolderPage_Controller
 *
 * @property FAQHolderPage dataRecord
 * @method FAQHolderPage data()
 * @mixin FAQHolderPage dataRecord
 */
class FAQHolderPage_Controller extends Page_Controller
{

}