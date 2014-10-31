<?php
namespace GdproList;

class TaxableHorsePowerList
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

        $translatedSuffix = $this->translator->translate('taxable HP', 'GdproList');

        $list = [];
        for($i = $min; $i <= $max; $i++) {
            $list[$i] = $i.' '.$translatedSuffix;
        }

        return $list;
    }

    public function getElementById($id)
    {
        $element = $this->list[$id];
        $translatedSuffix = $this->translator->translate('taxable HP', 'GdproList');

        $element .= ' '.$translatedSuffix;

        return $element;
    }
}
