<?php

namespace App\models\classes;


class ModalDetail
{
    /** @var string */
    public $id;
    /** @var string */
    public $title;
    /** @var string */
    public $body;
    /** @var string */
    public $postUrl;

    /**
     * ModalDetail constructor.
     * @param string $id
     * @param string $title
     * @param string $body
     * @param string $postUrl
     */
    public function __construct(
        string $id,
        string $title,
        string $body,
        string $postUrl)
    {
        $this->id= $id;
        $this->title= $title;
        $this->body= $body;
        $this->postUrl= $postUrl;
    }

    /**
     * @param string ...$properties
     */
    public function makeBody(string ...$properties){
        //TODO:modal画面のボディ部分を作成するための関数を作りたい。
        $htmlTag = '';
        foreach ($properties as $property){
            $htmlTag = $htmlTag.$property;
        }
        $this->body = $htmlTag;
    }
}
