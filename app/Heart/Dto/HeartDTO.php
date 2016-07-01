<?php

namespace App\Http\Dto;

/**
 * HeartController 渲染JSON
 */
class HeartDTO
{
    public $id;
    public $url;
    public $description;
    public $createdAt;
    /**
     * @var boolean $exists 保存Heart时如果对象已经在数据库中存在。
     */
    public $exists;

    public function __construct($id, $url, $description, $createdAt, $exists)
    {
        $this->id = $id;
        $this->url = $url;
        $this->description = $description;
        $this->createdAt = $createdAt;
        $this->exists = $exists;
    }
}
