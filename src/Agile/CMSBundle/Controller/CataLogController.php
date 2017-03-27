<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/7
 * Time: 13:52
 */

namespace Agile\CMSBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CataLogController extends BaseController
{

    /**新增
     * @param Request $request
     * @return Response
     */
    public function AdminInsertAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (!empty($data)) {
            if (!empty($data['name']) || !empty($data['absolute'])) {
                $catalog = $this->get("cms_catalog");
                $data=$catalog->insert($data);
                $result = array('code'=>'00','msg'=>'SUCCESS','data'=>array('id'=>$data));
            } else {
                $result = array('code'=>'-11','msg'=>'参数错误！','data'=>'');
            }
        } else {
            $result = array('code'=>'-12','msg'=>'请求有误!','data'=>'');
        }
        $this->setGzip();
        //输出结果
        $response = new Response();
        $response->setContent(json_encode($result));
        $response->setMaxAge(20);
        $response->setSharedMaxAge(20);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->headers->set('Access-Control-Allow-Origin', $this->container->getParameter('access_url'));
        $response->headers->set('Content-type', 'application/json');
        $response->setCharset('UTF-8');
        return $response;
    }

    /**更新
     * @param Request $request
     * @return Response
     */
    public function AdminUpdateAction(Request $request){
        $data = json_decode($request->getContent(), true);
        if (!empty($data)) {
            if (!empty($data['name']) || !empty($data['absolute']) || !empty($data['id'])) {
                $catalog = $this->get("cms_catalog");
                $arrQuery=array('id'=>$data['id']);
                $data=$catalog->update($arrQuery,$data);
                $result = array('code'=>'00','msg'=>'SUCCESS','data'=>array($data));
            } else {
                $result = array('code'=>'-11','msg'=>'参数错误！','data'=>'');
            }
        } else {
            $result = array('code'=>'-12','msg'=>'请求有误!','data'=>'');
        }
        $this->setGzip();
        //输出结果
        $response = new Response();
        $response->setContent(json_encode($result));
        $response->setMaxAge(20);
        $response->setSharedMaxAge(20);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->headers->set('Access-Control-Allow-Origin', $this->container->getParameter('access_url'));
        $response->headers->set('Content-type', 'application/json');
        $response->setCharset('UTF-8');
        return $response;
    }

    /**列表
     * @param Request $request
     * @return Response
     */
    public function AdminListAction(Request $request){
        $page = $request->query->get('page');
        if (!empty($page)) {
                $catalog = $this->get("cms_catalog");
                $arrWhere=array();
                $arrOrder=array('id'=>'desc');
                $data=$catalog->findbyList($arrWhere,$arrOrder,$page,10);
                $result = array('code'=>'00','msg'=>'SUCCESS','data'=>array('id'=>$data));
        } else {
            $result = array('code'=>'-12','msg'=>'请求有误!','data'=>'');
        }
        $this->setGzip();
        //输出结果
        $response = new Response();
        $response->setContent(json_encode($result));
        $response->setMaxAge(20);
        $response->setSharedMaxAge(20);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->headers->set('Access-Control-Allow-Origin', $this->container->getParameter('access_url'));
        $response->headers->set('Content-type', 'application/json');
        $response->setCharset('UTF-8');
        return $response;
    }


    /**删除
     * @param Request $request
     * @return Response
     */
    public function AdminDeleteAction(Request $request){
        $data = json_decode($request->getContent(), true);
        if (!empty($data)) {
            if (!empty($data['id'])) {
                $catalog = $this->get("cms_catalog");
                $arrQuery=array('id'=>$data['id']);
                $data=$catalog->delete($arrQuery);
                $result = array('code'=>'00','msg'=>'SUCCESS','data'=>array('id'=>$data));
            } else {
                $result = array('code'=>'-11','msg'=>'参数错误！','data'=>'');
            }
        } else {
            $result = array('code'=>'-12','msg'=>'请求有误!','data'=>'');
        }
        $this->setGzip();
        //输出结果
        $response = new Response();
        $response->setContent(json_encode($result));
        $response->setMaxAge(20);
        $response->setSharedMaxAge(20);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->headers->set('Access-Control-Allow-Origin', $this->container->getParameter('access_url'));
        $response->headers->set('Content-type', 'application/json');
        $response->setCharset('UTF-8');
        return $response;
    }
}