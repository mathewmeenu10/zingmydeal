<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'litepci',

    /*
     * Package.
     */
    'package'   => 'product',

    /*
     * Modules.
     */
    'modules'   => ['product', 
'brand', 
'category', 
'listing', 
'tag', 'review'],

    'product'       => [
        'model' => [
            'model'                 => \Litepci\Product\Models\Product::class,
            'table'                 => 'products',
            'presenter'             => \Litepci\Product\Repositories\Presenter\ProductPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'category_id',  'subcategory_id',  'brand_id',  'name',  'description',  'description1',  'model',  'features',  'images',  'rating',  'status',  'offer',  'slug',  'featured',  'meta_title',  'meta_description',  'meta_keywords', 'meta_tags',  'amazone_link',  'user_id',  'user_type',  'created_at',  'updated_at',  'deleted_at', 'specification', 'view_count', 'price_zone', 'price', 'offer_price'],
            'translatables'         => [],
            'upload_folder'         => 'product/product',
            'uploads'               => [
            
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            
            ],

            'casts'                 => [
            
                'images'    => 'array',
                'file'      => 'array',
                'specification' => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'brand_id' => 'in',
                'price_zone' => 'in',
                'category_id' => '=',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litepci',
            'package'   => 'Product',
            'module'    => 'Product',
        ],

    ],

    'brand'       => [
        'model' => [
            'model'                 => \Litepci\Product\Models\Brand::class,
            'table'                 => 'brands',
            'presenter'             => \Litepci\Product\Repositories\Presenter\BrandPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'name',  'description',  'image',  'status',  'slug',  'user_id',  'user_type',  'created_at',  'updated_at',  'deleted_at', 'category_id'],
            'translatables'         => [],
            'upload_folder'         => 'product/brand',
            'uploads'               => [
            
                    'image' => [
                        'count' => 1,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            
            ],

            'casts'                 => [
            
                'image'    => 'array',
                'file'      => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litepci',
            'package'   => 'Product',
            'module'    => 'Brand',
        ],

    ],

    'category'       => [
        'model' => [
            'model'                 => \Litepci\Product\Models\Category::class,
            'table'                 => 'categories',
            'presenter'             => \Litepci\Product\Repositories\Presenter\CategoryPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'parent_id',  'name',  'description',  'meta_title',  'meta_description',  'meta_keywords', 'meta_tags',  'image',  'slug',  'status',  'user_id',  'user_type',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'product/category',
            'uploads'               => [
            
                    'image' => [
                        'count' => 1,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            
            ],

            'casts'                 => [
            
                'image'    => 'array',
                'file'      => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litepci',
            'package'   => 'Product',
            'module'    => 'Category',
        ],

    ],

    'listing'       => [
        'model' => [
            'model'                 => \Litepci\Product\Models\Listing::class,
            'table'                 => 'lists',
            'presenter'             => \Litepci\Product\Repositories\Presenter\ListingPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'title'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'title',  'subtitle',  'description',  'image',  'slug',  'status',  'meta_title',  'meta_description',  'meta_keywords',  'user_id',  'user_type',  'created_at',  'updated_at',  'deleted_at', 'category_id', 'subcategory_id', 'product_id', 'tags', 'price_zone'],
            'translatables'         => [],
            'upload_folder'         => 'product/listing',
            'uploads'               => [
            
                    'image' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            
            ],

            'casts'                 => [
            
                'image'    => 'array',
                'product_id'      => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'category_id'  => '=',
                'price_zone'  => 'in',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litepci',
            'package'   => 'Product',
            'module'    => 'Listing',
        ],

    ],

    'tag'       => [
        'model' => [
            'model'                 => \Litepci\Product\Models\Tag::class,
            'table'                 => 'tags',
            'presenter'             => \Litepci\Product\Repositories\Presenter\TagPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'name',  'slug',  'user_id',  'user_type',  'status',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'product/tag',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litepci',
            'package'   => 'Product',
            'module'    => 'Tag',
        ],

    ],

       'review'       => [
        'model' => [
            'model'                 => \Litepci\Product\Models\Review::class,
            'table'                 => 'reviews',
            'presenter'             => \Litepci\Product\Repositories\Presenter\ReviewPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => [],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'review',  'name',  'rating', 'status', 'created_at', 'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'product/review',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litepci',
            'package'   => 'Product',
            'module'    => 'Review',
        ],

    ],
];
