<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160408112012 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE counter CHANGE page page VARCHAR(200) NOT NULL');
        $this->addSql('ALTER TABLE tbl_comunicatistampa_setup CHANGE id id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_notizie_setup CHANGE id id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_page DROP custom_field');
        $this->addSql('ALTER TABLE tbl_photo_import CHANGE id id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_pratiche CHANGE id id TINYINT(1) NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE counter CHANGE page page VARCHAR(200) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE tbl_comunicatistampa_setup CHANGE id id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_notizie_setup CHANGE id id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_page ADD custom_field INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tbl_photo_import CHANGE id id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tbl_pratiche CHANGE id id TINYINT(1) NOT NULL');
    }
}
