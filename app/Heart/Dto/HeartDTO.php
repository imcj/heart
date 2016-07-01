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
     * @var boolean $isNew
     */
    public $isNew;

    public function __construct($id, $url, $description, $createdAt, $isNew)
    {
        $this->id = $id;
        $this->url = $url;
        $this->description = $description;
        $this->createdAt = $createdAt;
        $this->isNew = $isNew;
    }
}
