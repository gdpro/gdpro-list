<?php
namespace GdproList;

class MonthList extends AbstractList
{
    /**
     * Get List
     * @return array
     */
    public function getList()
    {
        $translatedList = [];

        for($id=1;$id<=12;$id++) {
            $translatedList[$id] = $this->getElementById($id);
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
        $element = date('F', mktime(0, 0, 0, $id, 1, date('Y')));
        $translatedElement = $this->translator->translate($element, 'GdproList');

        return $translatedElement;
    }
}
