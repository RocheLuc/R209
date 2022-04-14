<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220414085420 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE note (id INT AUTO_INCREMENT NOT NULL, id_projet_id INT NOT NULL, note VARCHAR(255) NOT NULL, created_at VARCHAR(255) NOT NULL, etat_note VARCHAR(255) NOT NULL, INDEX IDX_CFBDFA1480F43E55 (id_projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA1480F43E55 FOREIGN KEY (id_projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE projet ADD etat_projet_id INT NOT NULL, ADD description VARCHAR(255) NOT NULL, ADD validated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE projet ADD CONSTRAINT FK_50159CA9F053C49E FOREIGN KEY (etat_projet_id) REFERENCES etat_projet (id)');
        $this->addSql('CREATE INDEX IDX_50159CA9F053C49E ON projet (etat_projet_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE note');
        $this->addSql('ALTER TABLE projet DROP FOREIGN KEY FK_50159CA9F053C49E');
        $this->addSql('DROP INDEX IDX_50159CA9F053C49E ON projet');
        $this->addSql('ALTER TABLE projet DROP etat_projet_id, DROP description, DROP validated_at');
    }
}
