<?php
require_once dirname(__FILE__) . '/SalonServiceDecoratorBase.php';

class ColoringDecorator extends SalonServiceDecoratorBase
{
    public function getDescription()
    {
        return $this->_decoratedSalonService->getDescription() . 'Coloring ';
    }
}