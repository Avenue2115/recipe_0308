<?php

namespace App\models\classes;

use Kris\LaravelFormBuilder\Form;
use App\Forms\FoodForm;

class ModalDetail
{
    /** @var string */
    public $modalId;
    /** @var string */
    public $title;
    /** @var Form */
    public $body;
    /** @var string */
    public $formId;

    /**
     * ModalDetail constructor.
     * Formを受け取ってそのまま渡す。
     * @param string $modalId
     * @param string $title
     * @param Form $body
     * @param string $formId
     */
    public function __construct(
        string $modalId,
        string $title,
        Form $body,
        string $formId)
    {
        $this->modalId= $modalId;
        $this->title= $title;
        $this->body= $body;
        $this->formId= $formId;
    }
}
