<?php

use GetCandy\Api\Customers\Models\CustomerGroup;
use Illuminate\Database\Seeder;
use Faker\Factory;
use GetCandy\Api\Products\Models\Product;
use GetCandy\Api\Products\Models\ProductFamily;
use GetCandy\Api\Attributes\Models\Attribute;
use GetCandy\Api\Products\Models\ProductVariant;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $language = \GetCandy\Api\Languages\Models\Language::first()->id;

        $basic = \GetCandy\Api\Layouts\Models\Layout::create([
            'name' => 'Basic product',
            'handle' => 'basic-product'
        ])->id;

        $featured = \GetCandy\Api\Layouts\Models\Layout::create([
            'name' => 'Featured product',
            'handle' => 'featured-product'
        ])->id;


        $products = [
            // Boots
            'Shoes' => [
                [
                    'layout' => $basic,
                    'option_data' => [
                        'size' => [
                            'position' => 2,
                            'label' => [
                                'en' => 'Size',
                                'sv' => 'Storlek'
                            ],
                            'options' => [
                                '12' => [
                                    'position' => 2,
                                    'values' => [
                                        'en' => '12',
                                        'sv' => '13',
                                    ]
                                ],
                                '10' => [
                                    'position' => 1,
                                    'values' => [
                                        'en' => '10',
                                        'sv' => '11'
                                    ]
                                ]
                            ]
                        ],
                        'colour' => [
                            'position' => 1,
                            'label' => [
                                'en' => 'Colour',
                                'sv' => 'Färg'
                            ],
                            'options' => [
                                'black' => [
                                    'position' => 1,
                                    'values' => [
                                        'en' => 'Black',
                                        'sv' => 'Svart'
                                    ]
                                ],
                                'brown' => [
                                    'position' => 2,
                                    'values' => [
                                        'en' => 'Brown',
                                        'sv' => 'Brun'
                                    ]
                                ],

                            ]
                        ]
                    ],
                    'variants' => [
                        [
                            'sku' => '123-12',
                            'price' => 50,
                            'stock' => 1,
                            'options' => [
                                'size' => '12',
                                'colour' => 'brown'
                            ]
                        ],
                        [
                            'sku' => '123-10',
                            'price' => 50,
                            'stock' => 1,
                            'options' => [
                                'size' => '10',
                                'colour' => 'brown'
                            ]
                        ],
                        [
                            'sku' => '456-12',
                            'price' => 50,
                            'stock' => 1,
                            'options' => [
                                'size' => '12',
                                'colour' => 'black'
                            ]
                        ],
                        [
                            'sku' => '456-10',
                            'price' => 50,
                            'stock' => 1,
                            'options' => [
                                'size' => '10',
                                'colour' => 'black'
                            ]
                        ]
                    ],
                    'attribute_data' => [
                        'name' => [
                            'ecommerce' => [
                                'en' => 'Blundstone boots',
                                'sv' => 'Blundstone stövlar'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ],
                        'material' => [
                            'ecommerce' => [
                                'en' => 'Leather',
                                'sv' => 'Läder'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ],
                        'description' => [
                            'ecommerce' => [
                                'en' => 'Legendary lightweight boots made by Blundstone in Tasmania since 1932. Their iconic soles have been engineered for optimum comfort, shock absorption and all-weathers.',
                                'sv' => 'Legendariska lätta stövlar gjorda av Blundstone i Tasmanien sedan 1932. Deras ikoniska sålar har konstruerats för optimal komfort, stötdämpning och alla väder.'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ]
                    ]
                ],
                [
                    'layout' => $featured,
                    'attribute_data' => [
                        'name' => [
                            'ecommerce' => [
                                'en' => 'Hoxton Socks',
                                'sv' => 'Hoxton sockor',
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ],
                        'material' => [
                            'ecommerce' => [
                                'en' => 'Wool',
                                'sv' => 'Ull'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ],
                        'description' => [
                            'ecommerce' => [
                                'en' => 'Rainbow-striped woollen house socks. Handknitted in Nepal.  Fairtrade. Wool.',
                                'sv' => 'Rainbow-randiga ull hus strumpor. Handknitted i Nepal. Rättvis handel. Ull.'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ]
                    ]
                ],
                [
                    'layout' => $basic,
                    'attribute_data' => [
                        'name' => [
                            'ecommerce' => [
                                'en' => 'Sofa socks - Oatmeal',
                                'sv' => 'Soffa strumpor - Havregryn'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ],
                        'material' => [
                            'ecommerce' => [
                                'en' => 'Wool',
                                'sv' => 'Ull'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ],
                        'description' => [
                            'ecommerce' => [
                                'en' => 'Warm cable-knit house socks handknitted in Nepal from pure wool.Fairtrade',
                                'sv' => 'Varm kabelstickade husstrumpor handknitted i Nepal från ren ull.Fairtrade'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ]
                    ]
                ]
            ],
            'Bags' => [
                // Bags
                [
                    'layout' => $basic,
                    'attribute_data' => [
                        'name' => [
                            'ecommerce' => [
                                'en' => 'Boat tote',
                                'sv' => 'Båt tote'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ],
                        'material' => [
                            'ecommerce' => [
                                'en' => 'Cotton',
                                'sv' => 'Bomull'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ],
                        'description' => [
                            'ecommerce' => [
                                'en' => 'A classic American tote crafted from durable 24oz cotton-canvas with steel hardware and sturdy leather handles. An adjustable long belt-like strap makes it extremely versatile. Joshu&Vela. Made in San Francisco. W55cm H30cm D21cm.',
                                'sv' => null
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ]
                    ]
                ],
                [
                    'layout' => $featured,
                    'attribute_data' => [
                        'name' => [
                            'ecommerce' => [
                                'en' => 'Check bag',
                                'sv' => 'Rutig väska'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ],
                        'material' => [
                            'ecommerce' => [
                                'en' => 'Cotton',
                                'sv' => 'Bomull'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ],
                        'description' => [
                            'ecommerce' => [
                                'en' => 'Artisanal checked cotton tote with recycled, wipeable plastic interior and studded leather handles. Interior zip pocket.',
                                'sv' => null
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ]
                    ]
                ],
                [
                    'layout' => $basic,
                    'attribute_data' => [
                        'name' => [
                            'ecommerce' => [
                                'en' => 'Heda Bag',
                                'sv' => 'Heda väska'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ],
                        'material' => [
                            'ecommerce' => [
                                'en' => 'Leather',
                                'sv' => 'Läder'
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ],
                        'description' => [
                            'ecommerce' => [
                                'en' => 'Tan leather bag with handy shoulder or longer cross body strap. Lined in cotton twill with interior pockets.',
                                'sv' => null
                            ],
                            'mobile' => [
                                'en' => null,
                                'sv' => null
                            ],
                            'print' => [
                                'en' => null,
                                'sv' => null
                            ]
                        ]
                    ]
                ]
            ],
            // 'Jewellery' => [
            //     [
            //         'name' => ['gb' => 'Mesh watch', 'sv' => 'Mesh klocka'],
            //         'layout' => $basic,
            //         'attribute_data' => ['material' => ['gb' => 'Stainless Steel']]
            //     ],
            //     [
            //         'name' => ['gb' => '3 Square earrings', 'sv' => '3 kvadratiska örhängen'],
            //         'layout' => $featured,
            //         'attribute_data' => ['material' => ['gb' => 'Silver']]
            //     ],
            //     [
            //         'name' => ['gb' => 'Bird Brooch', 'sv' => 'Fågelbrosch'],
            //         'layout' => $basic,
            //         'attribute_data' => ['material' => ['gb' => 'Silver']]
            //     ]
            // ],
            // 'House items' => [
            //     [
            //         'name' => ['gb' => 'Feather dreamcatcher', 'sv' => 'Fjäderdrömskådare'],
            //         'layout' => $basic,
            //         'attribute_data' => ['material' => ['gb' => 'Leather, Feathers, Wool']]
            //     ],
            //     [
            //         'name' => ['gb' => 'Driftwood fish', 'sv' => 'Driftwood fisk'],
            //         'layout' => $featured,
            //         'attribute_data' => ['material' => ['gb' => 'Wood']]
            //     ],
            //     [
            //         'name' => ['gb' => 'Mirror Candleholder', 'sv' => 'Spegel ljushållare'],
            //         'layout' => $basic,
            //         'attribute_data' => ['material' => ['gb' => 'Glass, Metal']]
            //     ]
            // ]
        ];
        $i = 1;
        $attributes = Attribute::get();
        foreach ($products as $family => $products) {
            $family = ProductFamily::find($i);
            foreach ($products as $data) {
                $product = Product::create([
                    'attribute_data' => $data['attribute_data'],
                    'option_data' => (!empty($data['option_data']) ? $data['option_data'] : [])
                ]);

                $product->customerGroups()->sync([
                    1 => ['visible' => true, 'purchasable' => true]
                ]);

                foreach ($attributes as $att) {
                    $product->attributes()->attach($att);
                }

                $product->layout()->associate($data['layout']);
                $product->family()->associate($family);
                foreach ($product->attribute_data['name'] as $channel => $attr_data) {
                    if ($channel == 'ecommerce') {
                        $product->route()->create([
                            'default' => true,
                            'slug' => str_slug($attr_data['en']),
                            'locale' => 'en'
                        ]);
                    }
                }
                $product->save();

                if (!empty($data['variants'])) {
                    foreach ($data['variants'] as $variant) {
                        $product->variants()->create($variant);
                    }
                } else {
                    $product->variants()->create([
                        'options' => [],
                        'sku' => str_random(8),
                        'stock' => 1,
                        'price' => 40
                    ]);
                }
            }
            $i++;
        }
    }
}
