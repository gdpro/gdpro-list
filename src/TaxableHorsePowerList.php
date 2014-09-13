<?php
namespace GdproList;

class TaxableHorsePowerList extends AbstractList
{
    const FOUR_TAXABLE_HORSEPOWER = 4;
    const FIVE_TAXABLE_HORSEPOWER = 5;
    const SIX_TAXABLE_HORSEPOWER = 6;
    const SEVEN_TAXABLE_HORSEPOWER = 7;

    protected $list = [
        self::FOUR_TAXABLE_HORSEPOWER => '4',
        self::FIVE_TAXABLE_HORSEPOWER => '5',
        self::SIX_TAXABLE_HORSEPOWER => '6',
        self::SEVEN_TAXABLE_HORSEPOWER => '7',
    ];

    protected $suffix = 'taxable HP';

    /**
     * Get List
     * @return array
     */
    public function getList()
    {
        $translatedSuffix = $this->translator->translate('taxable HP', 'GdproList');

        $translatedList = [];
        foreach($this->list as $key => $value) {
            $translatedList[$key] = $value.' '.$translatedSuffix;
        }

        return $translatedList;
    }

    public function getElementById($id)
    {
        $element = $this->list[$id];
        $translatedSuffix = $this->translator->translate('taxable HP', 'GdproList');

        $element .= ' '.$translatedSuffix;

        return $element;
    }
}
