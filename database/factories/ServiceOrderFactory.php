<?php

namespace Database\Factories;

use App\Models\ServiceOrder;
use GSManager\Database\Eloquent\Factories\Factory;

class ServiceOrderFactory extends Factory
{
    protected $model = ServiceOrder::class;

    public function definition(): array
    {
        return [
            'game' => 'minecraft',
            'type' => 'slot',
            'slots' => 20,
            'tariff_id' => null,
            'cores' => null,
            'ram' => null,
            'disk' => null,
            'period' => 30,
            'promo' => null,
            'price' => 1000,
        ];
    }
}
