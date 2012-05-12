<?php
require_once dirname(__FILE__) . '/ISalonService.php';

class FemaleSalonService implements ISalonService
{
    public function getDescription()
    {
        return 'Salon service for Women';
    }
}