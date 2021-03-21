<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210314144030 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carte ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE carte ADD CONSTRAINT FK_BAD4FFFDA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_BAD4FFFDA76ED395 ON carte (user_id)');
        $this->addSql('ALTER TABLE ordre ADD user_ordre_id INT NOT NULL');
        $this->addSql('ALTER TABLE ordre ADD CONSTRAINT FK_737992C9721CAD8C FOREIGN KEY (user_ordre_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_737992C9721CAD8C ON ordre (user_ordre_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carte DROP FOREIGN KEY FK_BAD4FFFDA76ED395');
        $this->addSql('DROP INDEX IDX_BAD4FFFDA76ED395 ON carte');
        $this->addSql('ALTER TABLE carte DROP user_id');
        $this->addSql('ALTER TABLE ordre DROP FOREIGN KEY FK_737992C9721CAD8C');
        $this->addSql('DROP INDEX IDX_737992C9721CAD8C ON ordre');
        $this->addSql('ALTER TABLE ordre DROP user_ordre_id');
    }
}
