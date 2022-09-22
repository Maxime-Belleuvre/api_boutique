<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'title' => 'Item 1',
            'description' => 'Item 1 description',
            'price' => 0.98,
            'image_url' => 'https://images.unsplash.com/flagged/1/apple-gear-looking-pretty.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
        ]);

        Item::create([
            'title' => 'Item 2',
            'description' => 'Item 2 description',
            'price' => 1.08,
            'image_url' => 'https://images.unsplash.com/1/type-away-numero-dos.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80',
        ]);

        Item::create([
            'title' => 'Item 3',
            'description' => 'Item 3 description',
            'price' => 0.78,
            'image_url' => 'https://i.picsum.photos/id/10/2500/1667.jpg?hmac=J04WWC_ebchx3WwzbM-Z4_KC_LeLBWr5LZMaAkWkF68',
        ]);

        Item::create([
            'title' => 'Item 4',
            'description' => 'Item 4 description',
            'price' => 0.88,
            'image_url' => 'https://i.picsum.photos/id/100/2500/1656.jpg?hmac=gWyN-7ZB32rkAjMhKXQgdHOIBRHyTSgzuOK6U0vXb1w',

        ]);

        Item::create([
            'title' => 'Item 5',
            'description' => 'Item 5 description',
            'price' => 1.04,
            'image_url' => 'https://i.picsum.photos/id/1000/5626/3635.jpg?hmac=qWh065Fr_M8Oa3sNsdDL8ngWXv2Jb-EE49ZIn6c0P-g',
        ]);

        Item::create([
            'title' => 'Item 6',
            'description' => 'Item 6 description',
            'price' => 0.91,
            'image_url' => 'https://i.picsum.photos/id/1002/4312/2868.jpg?hmac=5LlLE-NY9oMnmIQp7ms6IfdvSUQOzP_O3DPMWmyNxwo',

        ]);

        Item::create([
            'title' => 'Item 7',
            'description' => 'Item 7 description',
            'price' => 0.99,
            'image_url' => 'https://i.picsum.photos/id/1008/5616/3744.jpg?hmac=906z84ml4jhqPMsm4ObF9aZhCRC-t2S_Sy0RLvYWZwY',
        ]);

        Item::create([
            'title' => 'Item 8',
            'description' => 'Item 8 description',
            'price' => 1.09,
            'image_url' => 'https://i.picsum.photos/id/1018/3914/2935.jpg?hmac=3N43cQcvTE8NItexePvXvYBrAoGbRssNMpuvuWlwMKg',
        ]);

        Item::create([
            'title' => 'Item 9',
            'description' => 'Item 9 description',
            'price' => 0.84,
            'image_url' => 'https://i.picsum.photos/id/1016/3844/2563.jpg?hmac=WEryKFRvTdeae2aUrY-DHscSmZuyYI9jd_-p94stBvc',
        ]);

        Item::create([
            'title' => 'Item 10',
            'description' => 'Item 10 description',
            'price' => 0.94,
            'image_url' => 'https://i.picsum.photos/id/1020/4288/2848.jpg?hmac=Jo3ofatg0fee3HGOliAIIkcg4KGXC8UOTO1dm5qIIPc',
        ]);




        
    }
}
