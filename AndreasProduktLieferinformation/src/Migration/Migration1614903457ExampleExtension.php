<?php declare(strict_types=1);

namespace Andreas\ProduktLieferinformation\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1614903457ExampleExtension extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1614903457;
    }

    public function update(Connection $connection): void
    {
        $sql = <<<SQL
CREATE TABLE IF NOT EXISTS `swag_example_extension` (
    `id` BINARY(16) NOT NULL,
    `product_id` BINARY(16) NULL,
    `custom_string` VARCHAR(255) NULL,
    `created_at` DATETIME(3) NOT NULL,
    `updated_at` DATETIME(3) NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
SQL;
        $connection->executeStatement($sql);
    }

    public function updateDestructive(Connection $connection): void
    {
    }
}