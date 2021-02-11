<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Classes\ModalDetail;
use Illuminate\View\View;
use Kris\LaravelFormBuilder\Form;

class ModalForm extends Component
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
     * Create a new component instance.
     *
     * @param ModalDetail $modalDetail
     */
    public function __construct(ModalDetail $modalDetail)
    {
        $this->modalId = $modalDetail->modalId;
        $this->title = $modalDetail->title;
        $this->body = $modalDetail->body;
        $this->formId = $modalDetail->formId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.modal-form');
    }
}
