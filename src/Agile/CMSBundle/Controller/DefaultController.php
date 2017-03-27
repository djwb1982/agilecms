<?php

namespace Agile\CMSBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends BaseController
{
    public function indexAction(Request $request)
    {
        //$catalog=$this->get("cms_catalog");
//        $where =array(
//            array('name'=>'id','keyword'=>'3','symbol'=>'eq')
//        );
//        $order =array('id'=>'ASC');
//        $arrCatalog = $catalog->findbyList($where,$order,1,10);
      //  $arrCatalog = $catalog->update(array('id'=>'3'),array('name'=>'888888','absolute'=>'666'));
        //var_dump($arrCatalog);
/*        $infoclass=$this->get("cms_infoclass");
        $arrQuery=array(
            'id'=>'3'
        );
        $arrParam=array(
            'name'=>'1111',
            'bigclassid'=>'11',
            'bigclassname'=>'1',
            'catalog'=>'2222552',
            'catalogid'=>'1222'
        );
        var_dump($infoclass->delete($arrQuery))*/ ;
        echo json_encode(array('ddd'=>$request));
        die;
        return $this->render('AgileCMSBundle:Default:index.html.twig');
    }
}
