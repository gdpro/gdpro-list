<?php
namespace GdproList;

class HonorificList extends AbstractList
{
    /**
     * (Mister) for men, regardless of marital status.
     */
    const MR = 1;

    /**
     * for young men and boys, especially in the UK.
     */
    const MASTER = 2;

    /**
     * for women, regardless of marital status.
     */
    const MS = 3;

    /**
     * usually for unmarried women, though also used by married female entertainers (e.g. actresses).
     */
    const MISS = 4;

    /**
     * for married women.
     */
    const MRS = 5;

    /**
     * List of honorific
     * @var array
     */
    protected $list = [
        self::MR => 'Mr',
        self::MASTER => 'Master',
        self::MS => 'Ms',
        self::MISS => 'Miss',
        self::MRS => 'Mrs'
    ];

    public function getList()
    {
        $locale = $this->translator->getTranslator()->getLocale();
        $list = $this->list;

        if($locale == 'fr_FR') {
            unset($list[self::MS], $list[self::MASTER]);
        }

        $translatedList = [];
        foreach($list as $key => $value) {
            $translatedList[$key] = $this->translator->translate($value, 'GdproList');
        }

        return $translatedList;
    }
}
