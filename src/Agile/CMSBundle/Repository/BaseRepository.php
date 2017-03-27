<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 14:05
 */

namespace Agile\CMSBundle\Repository;
use Doctrine\Common\Collections\Criteria;
class BaseRepository {
    /**
     * @param $arrWhere
     * @param $arrOrder
     * @param $page
     * @param $limit
     * @return Criteria
     */
    public function setWhere($arrWhere,$arrOrder,$page,$limit){
        $criteria = new Criteria(null,$arrOrder,($page-1)*$limit,$limit);
        foreach($arrWhere as $v){
            if($v['symbol']){
                $criteria->andWhere(Criteria::expr()->$v['symbol']($v['name'],$v['keyword']));
            }
        }
        return $criteria;
    }
}