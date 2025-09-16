<?php

declare(strict_types=1);

namespace Chuazinerd\CodingJumpstart\Model;

use Chuazinerd\CodingJumpstart\Api\CategoryInterface;

class Product
{
    function __construct (
        private CategoryInterface $category,
    ) {}

    function getCategoryName() : string
    {
        return $this->category->getName();
    }
}