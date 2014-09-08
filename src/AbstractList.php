<?php
namespace GdproList;

use Zend\Mvc\I18n\Translator;

class AbstractList implements ListInterface
{
    protected $list;

    /**
     * Translator
     * @var \Zend\I18n\Translator\Translator
     */
    protected $translator;

    /**
     * Constructor
     * @param Translator $translator
     */
    public function __construct(Translator $translator)
    {
        $this->translator = $translator;
    }

    /**
     * Get List
     * @return array
     */
    public function getList()
    {
        $translatedList = [];
        foreach($this->list as $key => $value) {
            $translatedList[$key] = $this->translator->translate($value, 'GdproList');
        }

        return $translatedList;
    }
}