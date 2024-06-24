<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('Alert')]
class Alert
{
    public string $message;
    public string $type = "success";
}