<?php

declare(strict_types=1);

namespace Chuazinerd\CodingJumpstart\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class WelcomeMessage implements ArgumentInterface
{
		public function getWelcomeMessage()
    {
        $hour = date('G');

        if ($hour < 12) {
            return __('Good morning!');
        } elseif ($hour < 17) {
            return __('Good afternoon!');
        } else {
            return __('Good night!');
        }
    }
}