<?php declare(strict_types=1);

namespace Andreas\ProduktLieferinformation\Extension\Content\Product;

use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class CustomExtension extends EntityExtension
{
    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            new OneToOneAssociationField('exampleExtension', 'id', 'product_id', ExampleExtensionDefinition::class, true)
            //(new StringField('custom_string', 'customString'))->addFlags(new Runtime()) // without database
        );
    }

    public function getDefinitionClass(): string
    {
        return ProductDefinition::class;
    }
}
