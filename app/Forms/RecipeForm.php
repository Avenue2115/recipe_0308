<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\MasterFood;

class RecipeForm extends Form
{
    public function buildForm()
    {
        $foods = MasterFood::all();
        $foodsArray = $foods->mapWithKeys(function ($item) {
            $id = $item["id"];
            $food = $item["food_name"];
            return [$id => $food];
        })->toArray();

        $this
            ->add('title', 'text')
            ->add('description', 'textarea', ['attr' => ['size' => '30x5']])
            ->add('total_energy', 'text')
            ->add('food', 'select', ['choices' => $foodsArray])
            ->add('amount_to_use', 'text')
            ->add('unit', 'select')
            ->add('addFood', 'button', ['attr' => ['onclick' => 'addFood()']])
            ->add('step', 'textarea', ['attr' => ['size' => '30x5']])
            ->add('addStep', 'button', ['attr' => ['onclick' => 'addStep();']])
            ->add('comment', 'textarea', ['attr' => ['size' => '30x5']]);
    }

    /**
     * @param String $food
     * @param String $amount_to_use
     * @param String $unit
     */
    public function addFood(String $food, String $amount_to_use, String $unit)
    {
        $this
            ->addBefore('step', $food, 'select')
            ->addBefore('amount_to_use', $amount_to_use, 'text')
            ->addBefore('unit', $unit, 'select');
    }

    /**
     * @param $step
     */
    public function addStep($step)
    {
        $this->addBefore('step', $step, 'textarea');
    }
}
