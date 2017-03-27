<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/3
 * Time: 18:21
 */

namespace Agile\CMSBundle\Repository;
use Doctrine\Common\Util\Debug;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;
use Agile\CMSBundle\Entity\Catalog;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\Collections\Criteria;
class CatalogRepository extends BaseRepository {
    protected $em;
    protected $repository;

    public function __construct(EntityManager $em, ContainerInterface $container)
    {
        $this->em = $em;
        $this->repository = $this->em->getRepository('AgileCMSBundle:Catalog');
        $this->container = $container;
    }

    /**插入数据
     * @param $param
     * @return int
     */
    public function insert($param){
      $CataLog = new Catalog();
      $CataLog->setName($param['name']);
      $CataLog->setAbsolute($param['absolute']);
      $CataLog->setAddtime(time());
      $this->em->persist($CataLog);
      $this->em->flush();
      return $CataLog->getId();
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

    /**更新
     * @param $param
     * @return bool
     */
    public function update($arrQuery,$arrUpdate){
        $catalog = $this->repository->findOneBy($arrQuery);
        if(!$catalog){
            return false;
        }
        $catalog->setName($arrUpdate['name']);
        $catalog->setAbsolute($arrUpdate['absolute']);
        $this->em->flush();
        return true;
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