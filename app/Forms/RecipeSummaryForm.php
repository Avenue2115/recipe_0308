<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class RecipeSummaryForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text')
            ->add('description', 'textarea')
            ->add('total_energy', 'text')
            ->add('comment', 'textarea');
    }
}
