<?php 
// Força a tipagem forte
declare(strict_types=1);

namespace Chuazinerd\CodingJumpstart\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    public function execute ()
    {
        die('CodingJumpstart');
    }
}