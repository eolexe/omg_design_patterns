<?php
require_once dirname(__FILE__) . '/SalonServiceDecoratorBase.php';

class StylingDecorator extends SalonServiceDecoratorBase
{
    public function getDescription()
    {
        return $this->_decoratedSalonService->getDescription() . 'Styling ';
    }
}