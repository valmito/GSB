<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191128160050 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ligne_frais_hors_forfait (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, montant INT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE ligne_fais');
        $this->addSql('ALTER TABLE fiche_frais CHANGE mois mois INT NOT NULL');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD quantite INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ligne_fais (id INT AUTO_INCREMENT NOT NULL, id_visiteur VARCHAR(4) NOT NULL COLLATE utf8mb4_unicode_ci, mois VARCHAR(6) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE ligne_frais_hors_forfait');
        $this->addSql('ALTER TABLE fiche_frais CHANGE mois mois VARCHAR(6) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP quantite');
    }
}
