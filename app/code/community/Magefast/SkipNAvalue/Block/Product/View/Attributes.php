<?php

class Magefast_SkipNAvalue_Block_Product_View_Attributes extends Mage_Catalog_Block_Product_View_Attributes
{
    /**
     * Remove value as - N/A
     *
     * @param array $excludeAttr
     * @return array
     */
    public function getAdditionalData(array $excludeAttr = array())
    {
        $data = parent::getAdditionalData($excludeAttr);

        $naTextValue = Mage::helper('catalog')->__('N/A');

        foreach ($data as $key => $value) {
            if ($value['value'] == $naTextValue) {
                unset($data[$key]);
            }
        }

        return $data;
    }
}