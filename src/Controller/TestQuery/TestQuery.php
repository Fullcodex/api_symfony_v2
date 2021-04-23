<?php

namespace App\Controller\TestQuery;

use App\Entity\Personnage;
use Doctrine\ORM\EntityManagerInterface;

class TestQuery {
    private $em;
    public function __construct(RegistryInterface $doctrine)
    {
        $this->bookPublishingHandler = $doctrine->getEntityManager();
    }
    
    public function __invoke(Personnage $data): Personnage {
        $this->bookPublishingHandler->handle($data);
        return $data;
    }

}
