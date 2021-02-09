<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Classes\ModalDetail;
use Illuminate\View\View;
use Kris\LaravelFormBuilder\Form;

class ModalForm extends Component
{
    /** @var string */
    public $id;
    /** @var string */
    public $title;
    /** @var Form */
    public $body;
    /** @var string */
    public $postUrl;

    /**
     * Create a new component instance.
     *
     * @param ModalDetail $modalDetail
     */
    public function __construct(ModalDetail $modalDetail)
    {
        $this->id = $modalDetail->id;
        $this->title = $modalDetail->title;
        $this->body = $modalDetail->body;
        $this->postUrl = $modalDetail->postUrl;
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
