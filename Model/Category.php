<?php

declare(strict_types=1);

namespace Chuazinerd\CodingJumpstart\Model;

use Chuazinerd\CodingJumpstart\Api\CategoryInterface;


class Category implements CategoryInterface
{

    public function getName(): string
    {
        return 'Category Name';
    }
}