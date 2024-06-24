<?php

namespace App\Twig\Components;

use App\Repository\BlogRepository;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('feature_products')]
class FeatureProducts
{
    private BlogRepository $blogRepository;
    
    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function getProducts(): array
    {
        return $this->blogRepository->findAll();
    }
}