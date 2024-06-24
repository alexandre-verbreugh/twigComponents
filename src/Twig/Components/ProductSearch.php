<?php

namespace App\Twig\Components;

use App\Repository\BlogRepository;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;

#[AsLiveComponent('product_search')]
class ProductSearch
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public string $query = '';

    public function __construct(private BlogRepository $blogRepository)
    {
    }

    public function getProducts(): array
    {
        return $this->blogRepository->search($this->query);
    }
}
