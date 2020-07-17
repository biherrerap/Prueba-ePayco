<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends ApiController
{
    /**
    * @Route("/users")
    */
    public function userAction()
    {
        return $this->respond([
            [
                'document' => '1012441850',
                'name' => 'Iván Herrera',
                'email' => 'brehynnermraz@gmail.com',
                'phone' => '3212641516',
            ]
        ]);
    }
}