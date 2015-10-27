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

    /**
     * Get One Element By Id
     * @param $id
     * @return string
     */
    public function getElementById($id)
    {
        if(!isset($this->list[$id])) {
            return null;
        }

        $element = $this->list[$id];
        $translatedElement = $this->translator->translate($element, 'GdproList');

        return $translatedElement;
    }
}