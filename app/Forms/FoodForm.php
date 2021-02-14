<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class FoodForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text')
            ->add('energy', 'text')
            ->add('protein', 'text')
            ->add('lipid', 'text')
            ->add('carbohydrate', 'text')
            ->add('salt_equivalent', 'text')
            ;
    }
}
