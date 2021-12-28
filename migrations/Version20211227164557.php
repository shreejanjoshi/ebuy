<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211227164557 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADDF4C85EA');
        $this->addSql('DROP INDEX IDX_D34A04ADDF4C85EA ON product');
        $this->addSql('ALTER TABLE product CHANGE seller_id_id seller_id INT NOT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD8DE820D9 FOREIGN KEY (seller_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D34A04AD8DE820D9 ON product (seller_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD8DE820D9');
        $this->addSql('DROP INDEX IDX_D34A04AD8DE820D9 ON product');
        $this->addSql('ALTER TABLE product CHANGE seller_id seller_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADDF4C85EA FOREIGN KEY (seller_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D34A04ADDF4C85EA ON product (seller_id_id)');
    }
}
