<?php

namespace ShoppinPal\Vend\DataObject\Entity\V1;

class Product extends ProductSubEntity
{
    protected $subEntities = [
        'productType' => [
            self::SUB_ENTITY_KEY_TYPE => self::SUB_ENTITY_TYPE_SINGLE,
            self::SUB_ENTITY_KEY_CLASS => ProductTypeSubEntity::class,
        ],
        'supplier' => [
            self::SUB_ENTITY_KEY_TYPE => self::SUB_ENTITY_TYPE_SINGLE,
            self::SUB_ENTITY_KEY_CLASS => SupplierSubEntity::class,
        ],
        'brand' => [
            self::SUB_ENTITY_KEY_TYPE => self::SUB_ENTITY_TYPE_SINGLE,
            self::SUB_ENTITY_KEY_CLASS => BrandSubEntity::class,
        ],
        'inventory' => [
            self::SUB_ENTITY_KEY_TYPE => self::SUB_ENTITY_TYPE_COLLECTION,
            self::SUB_ENTITY_KEY_CLASS => InventorySubEntity::class,
        ],
        'priceBookEntries' => [
            self::SUB_ENTITY_KEY_TYPE => self::SUB_ENTITY_TYPE_COLLECTION,
            self::SUB_ENTITY_KEY_CLASS => PriceBookEntrySubEntity::class,
        ],
    ];

    public $retailerId;

    public $productType;

    public $supplier;

    public $brand;

    public $inventory = [];

    public $priceBookEntries = [];
}
