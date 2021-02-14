<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class RecipeSummaryForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text')
            ->add('description', 'textarea', ['attr' => ['size' => '30x5']])
            ->add('total_energy', 'text')
            ->add('comment', 'textarea', ['attr' => ['size' => '30x5']]);
    }
}
