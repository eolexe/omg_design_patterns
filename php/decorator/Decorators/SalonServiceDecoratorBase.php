<?php
require_once dirname(__FILE__) . '/../ISalonService.php';

abstract class SalonServiceDecoratorBase implements ISalonService
{
    protected $_decoratedSalonService;

    public function __construct(ISalonService $salonService)
    {
        $this->_decoratedSalonService = $salonService;
    }
}