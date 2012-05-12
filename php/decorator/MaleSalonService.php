<?php
require_once dirname(__FILE__) . '/ISalonService.php';

class MaleSalonService implements ISalonService
{
    public function getDescription()
    {
        return 'Salon service for Men: ';
    }
}