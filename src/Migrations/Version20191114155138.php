<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191114155138 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fiche_frais ADD situation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT FK_5FC0A6A73408E8AF FOREIGN KEY (situation_id) REFERENCES etat (id)');
        $this->addSql('CREATE INDEX IDX_5FC0A6A73408E8AF ON fiche_frais (situation_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY FK_5FC0A6A73408E8AF');
        $this->addSql('DROP INDEX IDX_5FC0A6A73408E8AF ON fiche_frais');
        $this->addSql('ALTER TABLE fiche_frais DROP situation_id');
    }
}
