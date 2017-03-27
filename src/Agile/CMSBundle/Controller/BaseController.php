<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/7
 * Time: 14:18
 */

namespace Agile\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class BaseController extends Controller{
      public function setGzip(){
          ob_start('ob_gzhandler');
      }
}