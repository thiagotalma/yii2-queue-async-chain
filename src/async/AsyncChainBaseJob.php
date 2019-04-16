<?php


namespace koma136\queue\async_chain;


use yii\queue\JobInterface;

/**
 * Class AsyncChainBaseJob
 * @package koma136\queue\async_chain
 */
class AsyncChainBaseJob
{
    /**
     * результат выполнения предыдущей задачи
     * @var mixed
     */
    public $rezultPrevJob;
    /**
     * Уникальный идентификатор группы последовательных задачь
     * @var string
     */
    public $groupId;

    /**
     * @param string $groupId
     */
    public function setGroupId(string $groupId){
        $this->groupId = $groupId;
    }

    /**
     * @return string
     */
    public function getGroupId(): string
    {
        return $this->groupId;
    }

    /**
     * @param $rezult
     */
    public function setRezultPrevJob($rezult)
    {
       $this->rezultPrevJob = $rezult;
    }
}