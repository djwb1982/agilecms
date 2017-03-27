<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/7
 * Time: 10:17
 */

namespace Agile\CMSBundle\Repository;

use Doctrine\Common\Util\Debug;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\Collections\Criteria;
use Agile\CMSBundle\Entity\File;
class FileRepository extends BaseRepository{
    protected $em;
    protected $repository;
    public function __construct(EntityManager $em, ContainerInterface $container)
    {
        $this->em = $em;
        $this->repository = $this->em->getRepository('AgileCMSBundle:File');
        $this->container = $container;
    }

    /**添加
     * @param $param
     */
    public function insert($param){
        $file = new File();
        $file->setFilename($param['filename']);
        $file->setFilepath($param['filepath']);
        $file->setSize($param['size']);
        $file->setSuffix($param['suffix']);
        $file->setAddtime(time());
        $this->em->persist($file);
        $this->em->flush();
        return $file->getId();
    }

    /**更新
     * @param $param
     */
    public function update($arrParam){
        $file = $this->repository->findOneBy($arrParam);
        if(!$file){
            return false;
        }
        $file->setFilename($arrParam['filename']);
        $file->setFilepath($arrParam['filepath']);
        $file->setSuffix($arrParam['suffix']);
        $file->setSize('size');
        $this->em->flush();
        return $file->getId();
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