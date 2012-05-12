<?php
require_once dirname(__FILE__) . '/Decorators/ColoringDecorator.php';
require_once dirname(__FILE__) . '/Decorators/HaircutDecorator.php';
require_once dirname(__FILE__) . '/Decorators/StylingDecorator.php';
require_once dirname(__FILE__) . '/MaleSalonService.php';
require_once dirname(__FILE__) . '/FemaleSalonService.php';

class Salon
{
    function provideService()
    {
        $maleSalonService = new MaleSalonService();
        $maleSalonService = new HaircutDecorator($maleSalonService);
        $maleSalonService = new StylingDecorator($maleSalonService);
        $maleSalonService = new ColoringDecorator($maleSalonService);

        return $maleSalonService->getDescription();
    }
}



