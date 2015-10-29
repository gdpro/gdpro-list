<?php
namespace Gdpro\Listing;

/**
 * Class TaxableHorsePowerListing
 * @package Gdpro\Listing
 */
class TaxableHorsePowerListing extends AbstractListing
{
    protected $defaultMinValue = 4;

    protected $defaultMaxValue = 12;

    protected $suffix = 'taxable HP';

    /**
     * @param null $min
     * @param null $max
     * @return array
     */
    public function getList($min = null, $max = null)
    {
        if(!isset($min)) {
            $min = $this->defaultMinValue;
        }

        if(!isset($max)) {
            $max = $this->defaultMaxValue;
        }

        $translatedSuffix = $this->translator->translate('Taxable HP', 'GdproList');

        $list = [];
        for($i = $min; $i <= $max; $i++) {
            $list[$i] = $i.' '.$translatedSuffix;
        }

        if($min <= 1 && $max >= 1) {
            $list[1] = $this->translator->translate('1 taxable HP', 'GdproList');
        }

        return $list;
    }

    public function getElementById($id)
    {
        $element = $this->list[$id];
        $element .= ' '.$this->translator->translate('Taxable HP', 'Gdpro\Listing');

        if($id == 1) {
            $element = $this->translator->translate('1 taxable HP', 'Gdpro\Listing');
        }

        return $element;
    }
}
