<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\RejectedPromise;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
       echo $this->aaa(7);
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }


    function aaa($n){
        $promise = new Promise();
        $promise->then(function($v) use (&$k){
            $k = '1111';
        },
        function ($reason) use (&$k){
            $k='2';
        });
        if($k=='2'){
           $promise->reject('foo'); 
        }else{
           $promise->resolve('error');
        }
        
        echo $promise->getState();
    }

    public function bbb($m){
     return $m-2;
    }
}
