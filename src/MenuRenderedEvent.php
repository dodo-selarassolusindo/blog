<?php

namespace PHPMaker2024\prj_membership;

use Symfony\Component\EventDispatcher\GenericEvent;

/**
 * Menu Rendered Event
 */
class MenuRenderedEvent extends GenericEvent
{
    public const NAME = "menu.rendered";

    public function getMenu(): Menu
    {
        return $this->subject;
    }
}
