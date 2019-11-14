<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191017130849 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY FK_5FC0A6A76760FECA');
        $this->addSql('DROP INDEX IDX_5FC0A6A76760FECA ON fiche_frais');
        $this->addSql('ALTER TABLE fiche_frais CHANGE id_visiteur_id id_comptable_id INT NOT NULL');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT FK_5FC0A6A79993D43B FOREIGN KEY (id_comptable_id) REFERENCES comptable (id)');
        $this->addSql('CREATE INDEX IDX_5FC0A6A79993D43B ON fiche_frais (id_comptable_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY FK_5FC0A6A79993D43B');
        $this->addSql('DROP INDEX IDX_5FC0A6A79993D43B ON fiche_frais');
        $this->addSql('ALTER TABLE fiche_frais CHANGE id_comptable_id id_visiteur_id INT NOT NULL');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT FK_5FC0A6A76760FECA FOREIGN KEY (id_visiteur_id) REFERENCES comptable (id)');
        $this->addSql('CREATE INDEX IDX_5FC0A6A76760FECA ON fiche_frais (id_visiteur_id)');
    }
}
