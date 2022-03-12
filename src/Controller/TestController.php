<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class TestController extends AbstractController
{

    protected $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    /**
     * @Route("/test", methods={"GET"})
     */
    public function test()
    {
        $this->logger->info('Je fais quelque chose');


        return new Response('Hello');


    }
}

