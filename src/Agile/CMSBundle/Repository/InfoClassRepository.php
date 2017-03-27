<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 18:33
 */

namespace Agile\CMSBundle\Repository;

use Doctrine\Common\Util\Debug;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Agile\CMSBundle\Entity\Infoclass;
use Doctrine\Common\Collections\Criteria;
class InfoClassRepository extends BaseRepository{
    protected $em;
    protected $repository;

    public function __construct(EntityManager $em, ContainerInterface $container)
    {
        $this->em = $em;
        $this->repository = $this->em->getRepository('AgileCMSBundle:Infoclass');
        $this->container = $container;
    }

    /**添加
     * @param $param
     * @return int
     */
    public function insert($param){
         $infoClass = new Infoclass();
         $infoClass->setName($param['name']);
         $infoClass->setBigclassid($param['bigclassid']);
         $infoClass->setBigclassname($param['bigclassname']);
         $infoClass->setCatalogid($param['catalogid']);
         $infoClass->setCatalog($param['catalog']);
         $infoClass->setAddupdate(time());
         $this->em->persist($infoClass);
         $this->em->flush();
         return $infoClass->getId();
    }

    /**更新
     * @param $arrQuery
     * @param $arrUpdate
     * @return int
     */
    public function update($arrQuery,$arrUpdate){
        $infoClass=$this->repository->findOneBy($arrQuery);
        $infoClass->setName($arrUpdate['name']);
        $infoClass->setBigclassid($arrUpdate['bigclassid']);
        $infoClass->setBigclassname($arrUpdate['bigclassname']);
        $infoClass->setCatalog($arrUpdate['catalog']);
        $infoClass->setCatalogid($arrUpdate['catalogid']);
        $infoClass->setAddupdate(time());
        $this->em->flush();
        return $infoClass->getId();
    }

    /**条件查询
     * @param $where 条件
     * @param $order 索引
     * @param $page  第几页
     * @param $limit 每页多少条
     * @return array
     */
    public function findbyList($where,$order,$page,$limit){
        $setWhere=$this->setWhere($where,$order,$page,$limit);
        $result = $this->repository->matching($setWhere)->toArray();
        return $result;
    }

    /**删除
     * @param $arrParam
     * @return bool
     */
    public function delete($arrParam){
        $catalog = $this->repository->findOneBy($arrParam);
        if(!$catalog){
            return false;
        }
        $this->em->remove($catalog);
        $this->em->flush();
        return true;
    }
}