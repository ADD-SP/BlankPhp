<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/27
 * Time: 17:37
 */

namespace Blankphp\Database\Grammar;


use Blankphp\Database\Query\Builder;

class MysqlGrammar extends Grammar
{

    public function generateSelect(Builder $sql,$parameter=[]){
        //拼装语句
        $sqlString='';
        //终极大拼装
        $sqlString.='select '.implode(',',$sql->select).' from '.$sql->table;
        if (!is_null($sql->wheres))
            $sqlString.=' where '.implode(',',$sql->wheres);
        return $sqlString;
    }

    public function generateUpdate(Builder $sql,$parameter=[]){

    }

    public function generateDelete(Builder $sql,$parameter=[]){

    }

    public function generateAlter(Builder $sql,$parameter=[]){

    }

    public  function generateInsert(Builder $sql,$parameter=[]){

    }

}