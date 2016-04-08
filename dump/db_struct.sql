-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generato il: Apr 08, 2016 alle 11:33
-- Versione del server: 5.6.29-log
-- Versione PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `isideimm_dba`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `page` varchar(200) NOT NULL DEFAULT '0',
  `hit` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`page`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `cross_tbl_catalogue_category_x_tbl_catalogue_category`
--

CREATE TABLE IF NOT EXISTS `cross_tbl_catalogue_category_x_tbl_catalogue_category` (
  `id_item` bigint(20) NOT NULL,
  `id_parent` bigint(20) NOT NULL,
  PRIMARY KEY (`id_item`,`id_parent`),
  KEY `IDX_9C339AF943B391C` (`id_item`),
  KEY `IDX_9C339AF1BB9D5A2` (`id_parent`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `cross_tbl_catalogue_category_x_tbl_catalogue_feature`
--

CREATE TABLE IF NOT EXISTS `cross_tbl_catalogue_category_x_tbl_catalogue_feature` (
  `id_item` int(11) NOT NULL,
  `id_parent` bigint(20) NOT NULL,
  PRIMARY KEY (`id_item`,`id_parent`),
  KEY `IDX_900E2F2F1BB9D5A2` (`id_parent`),
  KEY `IDX_900E2F2F943B391C` (`id_item`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `cross_tbl_catalogue_category_x_tbl_catalogue_product`
--

CREATE TABLE IF NOT EXISTS `cross_tbl_catalogue_category_x_tbl_catalogue_product` (
  `id_item` bigint(20) NOT NULL,
  `id_parent` bigint(20) NOT NULL,
  PRIMARY KEY (`id_item`,`id_parent`),
  KEY `IDX_5C935EE4943B391C` (`id_item`),
  KEY `IDX_5C935EE41BB9D5A2` (`id_parent`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `cross_tbl_catalogue_feature_x_tbl_catalogue_featurevalue`
--

CREATE TABLE IF NOT EXISTS `cross_tbl_catalogue_feature_x_tbl_catalogue_featurevalue` (
  `id_item` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL,
  PRIMARY KEY (`id_item`,`id_parent`),
  KEY `IDX_466C262A943B391C` (`id_item`),
  KEY `IDX_466C262A1BB9D5A2` (`id_parent`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `cross_tbl_catalogue_product_x_tbl_catalogue_featurevalue`
--

CREATE TABLE IF NOT EXISTS `cross_tbl_catalogue_product_x_tbl_catalogue_featurevalue` (
  `id_item` int(11) NOT NULL,
  `id_parent` bigint(20) NOT NULL,
  PRIMARY KEY (`id_item`,`id_parent`),
  KEY `IDX_73EE4A461BB9D5A2` (`id_parent`),
  KEY `IDX_73EE4A46943B391C` (`id_item`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `migration_versions`
--

CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_agenda`
--

CREATE TABLE IF NOT EXISTS `tbl_agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `sottotitolo` varchar(200) DEFAULT 'sottotitolo',
  `listadata` varchar(200) DEFAULT NULL,
  `id_tbl_cat_agenda` int(11) DEFAULT NULL,
  `link` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_aree`
--

CREATE TABLE IF NOT EXISTS `tbl_aree` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_aree` int(11) NOT NULL DEFAULT '0',
  `id_tbl_lingua` int(11) unsigned DEFAULT '4',
  `nome` varchar(50) DEFAULT 'nome tradotto',
  `id_tbl_menu` int(11) unsigned DEFAULT '1',
  `smarty_template` varchar(100) DEFAULT NULL,
  `accesskey` char(2) DEFAULT NULL,
  `checkbox_tbl_gruppi` varchar(200) DEFAULT ',,',
  `checkbox_tbl_service` varchar(200) DEFAULT ',,',
  `checkbox_tbl_banner` varchar(200) DEFAULT NULL,
  `posizione` int(11) DEFAULT '0',
  `template_home` varchar(100) DEFAULT NULL,
  `dropdown` int(1) NOT NULL DEFAULT '0',
  `img` varchar(100) DEFAULT '.gif',
  `visible` int(1) DEFAULT NULL,
  `img1` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_atti_cat`
--

CREATE TABLE IF NOT EXISTS `tbl_atti_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `descr` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_catalogue_category`
--

CREATE TABLE IF NOT EXISTS `tbl_catalogue_category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_tbl_catalogue_category` bigint(20) NOT NULL,
  `id_tbl_lingua` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `pub` tinyint(1) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_catalogue_category_metatag`
--

CREATE TABLE IF NOT EXISTS `tbl_catalogue_category_metatag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tbl_catalogue_category` bigint(20) DEFAULT NULL,
  `id_tbl_lingua` int(11) DEFAULT NULL,
  `meta_tag_title` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_tag_charset` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_tag_generator` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_tag_author` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_tag_description` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_tag_keywords` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_tbl_cataloguefip_category` (`id_tbl_catalogue_category`,`id_tbl_lingua`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='tbl_catalogue_category_metatag' AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_catalogue_feature`
--

CREATE TABLE IF NOT EXISTS `tbl_catalogue_feature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tbl_catalogue_feature` int(11) NOT NULL,
  `id_tbl_lingua` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `type_input` varchar(255) NOT NULL,
  `compulsory` int(11) NOT NULL,
  `display` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `inherit_from` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E2032C015ABD5BDD` (`inherit_from`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_catalogue_featurevalue`
--

CREATE TABLE IF NOT EXISTS `tbl_catalogue_featurevalue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tbl_catalogue_featurevalue` int(11) NOT NULL,
  `id_tbl_lingua` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_catalogue_featurevalue_inherit`
--

CREATE TABLE IF NOT EXISTS `tbl_catalogue_featurevalue_inherit` (
  `id_catalogue_featurevalue` int(11) NOT NULL,
  `id_catalogue_featurevalue_father` int(11) NOT NULL,
  PRIMARY KEY (`id_catalogue_featurevalue`,`id_catalogue_featurevalue_father`),
  KEY `IDX_21DEDBFBE2FCFDE6` (`id_catalogue_featurevalue`),
  KEY `IDX_21DEDBFBED87B3E` (`id_catalogue_featurevalue_father`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_catalogue_fieldsearch`
--

CREATE TABLE IF NOT EXISTS `tbl_catalogue_fieldsearch` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_tbl_catalogue_fieldsearch` bigint(20) NOT NULL,
  `id_tbl_lingua` tinyint(1) NOT NULL,
  `id_tbl_catalogue_category` varchar(255) DEFAULT NULL,
  `getname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `typeinput` varchar(255) NOT NULL,
  `compulsory` tinyint(1) NOT NULL,
  `showOnlyValued` tinyint(1) NOT NULL,
  `typesearch` varchar(255) NOT NULL,
  `tablerif` varchar(255) NOT NULL,
  `elementrif` varchar(255) NOT NULL,
  `findin` varchar(255) NOT NULL,
  `conditionBetweenField` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `inherit_from` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `getname` (`getname`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_catalogue_import_log`
--

CREATE TABLE IF NOT EXISTS `tbl_catalogue_import_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tablerif` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idrif` bigint(20) DEFAULT NULL,
  `act` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `result` tinyint(1) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `date_import` datetime NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `ip_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_catalogue_product`
--

CREATE TABLE IF NOT EXISTS `tbl_catalogue_product` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_tbl_catalogue_product` bigint(20) NOT NULL,
  `id_tbl_lingua` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `description_notag` text,
  `short_description` varchar(255) DEFAULT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `id_tbl_photo_cat` int(11) NOT NULL,
  `template` varchar(255) DEFAULT NULL,
  `pub` tinyint(1) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `position` int(11) DEFAULT NULL,
  `coordinate` varchar(255) DEFAULT NULL,
  `indirizzo` varchar(255) DEFAULT NULL,
  `prezzo` varchar(255) DEFAULT NULL,
  `download` varchar(255) DEFAULT NULL,
  `offerta` tinyint(1) NOT NULL,
  `venduto` tinyint(1) NOT NULL,
  `bagni` varchar(255) DEFAULT NULL,
  `metri_quadri` varchar(255) DEFAULT NULL,
  `anno_costruzione` varchar(255) DEFAULT NULL,
  `spese_condominiali` varchar(255) DEFAULT NULL,
  `unita_immobiliare` varchar(255) DEFAULT NULL,
  `totale_piani` varchar(255) DEFAULT NULL,
  `ipe` varchar(255) DEFAULT NULL,
  `metri_quadri_giardino` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_catalogue_product_metatag`
--

CREATE TABLE IF NOT EXISTS `tbl_catalogue_product_metatag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tbl_catalogue_product` bigint(20) NOT NULL,
  `id_tbl_lingua` int(11) DEFAULT NULL,
  `meta_tag_title` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_tag_charset` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_tag_generator` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_tag_author` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_tag_description` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `meta_tag_keywords` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_tbl_cataloguefip_product` (`id_tbl_catalogue_product`,`id_tbl_lingua`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=251 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_cat_agenda`
--

CREATE TABLE IF NOT EXISTS `tbl_cat_agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL,
  `icona` varchar(80) DEFAULT '.gif',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_cat_link`
--

CREATE TABLE IF NOT EXISTS `tbl_cat_link` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_cat_link` int(10) unsigned NOT NULL,
  `id_tbl_lingua` int(10) unsigned NOT NULL DEFAULT '4',
  `nome` varchar(100) NOT NULL DEFAULT 'nome categoria',
  `descrizione` longtext,
  `master_link` varchar(255) DEFAULT NULL,
  `smarty_template` varchar(200) NOT NULL DEFAULT 'link.tpl',
  `posizione` int(11) unsigned DEFAULT '11',
  `id_padre` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_cat_modelli`
--

CREATE TABLE IF NOT EXISTS `tbl_cat_modelli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL DEFAULT 'nome categoria modello di pagina',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_comunicatistampa`
--

CREATE TABLE IF NOT EXISTS `tbl_comunicatistampa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_comunicatistampa` int(11) DEFAULT '0',
  `id_tbl_lingua` int(11) unsigned DEFAULT '4',
  `cod` varchar(255) DEFAULT NULL,
  `titolo` varchar(255) NOT NULL,
  `sottotitolo` varchar(255) DEFAULT NULL,
  `comunicato` longtext,
  `searchable` longtext,
  `link` varchar(100) DEFAULT NULL,
  `id_tbl_page` varchar(255) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `pub` tinyint(1) unsigned DEFAULT NULL,
  `data_inizio_pub` date NOT NULL DEFAULT '0000-00-00',
  `data_fine_pub` date DEFAULT NULL,
  `data_fine_pub_preview` date DEFAULT NULL,
  `data_comunicato` date DEFAULT '0000-00-00',
  `id_tbl_comunicatistampa_cat` int(11) unsigned DEFAULT '0',
  `in_preview` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tbl_comunicatistampa` (`id_tbl_comunicatistampa`,`id_tbl_lingua`),
  KEY `id_tbl_comunicatistampa_cat` (`id_tbl_comunicatistampa_cat`,`id_tbl_lingua`),
  KEY `data_comunicato` (`data_comunicato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_comunicatistampa_cat`
--

CREATE TABLE IF NOT EXISTS `tbl_comunicatistampa_cat` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_comunicatistampa_cat` int(11) DEFAULT '0',
  `id_tbl_lingua` int(11) unsigned DEFAULT '4',
  `nome` varchar(50) DEFAULT 'nome tradotto',
  `posizione` int(11) unsigned DEFAULT '11',
  `template_list_preview` varchar(255) DEFAULT NULL,
  `template_list` varchar(255) DEFAULT NULL,
  `template` varchar(255) DEFAULT NULL,
  `template_search` varchar(255) DEFAULT NULL,
  `n_days` smallint(5) unsigned DEFAULT NULL,
  `n_visible_preview` tinyint(3) unsigned DEFAULT NULL,
  `n_item_x_page_active` smallint(5) unsigned DEFAULT NULL,
  `n_item_x_page_archive` smallint(5) unsigned DEFAULT NULL,
  `n_item_x_page_search` smallint(5) unsigned DEFAULT NULL,
  `format_date_list` varchar(255) DEFAULT NULL,
  `format_date_page` varchar(255) DEFAULT NULL,
  `format_date_preview` varchar(255) DEFAULT NULL,
  `page_list_active` varchar(255) DEFAULT NULL,
  `page_view_active` varchar(255) DEFAULT NULL,
  `page_list_archive` varchar(255) DEFAULT NULL,
  `page_view_archive` varchar(255) DEFAULT NULL,
  `page_search` varchar(255) DEFAULT NULL,
  `page_search_list` varchar(255) DEFAULT NULL,
  `page_search_view` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_comunicatistampa_setup`
--

CREATE TABLE IF NOT EXISTS `tbl_comunicatistampa_setup` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_comunicatistampa_setup` tinyint(3) unsigned DEFAULT NULL,
  `id_tbl_lingua` tinyint(4) NOT NULL DEFAULT '4',
  `n_days` smallint(5) unsigned NOT NULL DEFAULT '30',
  `n_visible_preview` tinyint(3) unsigned NOT NULL DEFAULT '5',
  `n_item_x_page_active` smallint(5) unsigned NOT NULL DEFAULT '10',
  `n_item_x_page_archive` smallint(5) unsigned NOT NULL DEFAULT '10',
  `n_item_x_page_search` smallint(5) unsigned NOT NULL DEFAULT '10',
  `max_n_page` smallint(5) unsigned NOT NULL DEFAULT '10',
  `template_list_preview` varchar(255) NOT NULL DEFAULT 'comunicatistampa_preview.tpl',
  `template_list` varchar(255) NOT NULL DEFAULT 'comunicatistampa_paginato.tpl',
  `template` varchar(255) NOT NULL DEFAULT 'comunicato.tpl',
  `template_search` varchar(255) NOT NULL DEFAULT 'comunicatistampa_ricerca.tpl',
  `setlocale` varchar(255) NOT NULL DEFAULT 'it_IT',
  `format_date_list` varchar(255) NOT NULL DEFAULT '%d %B %Y',
  `format_date_page` varchar(255) NOT NULL DEFAULT '%d %B %Y',
  `format_date_preview` varchar(255) NOT NULL DEFAULT '%d %B %Y',
  `page_list_active` varchar(255) DEFAULT NULL,
  `page_view_active` varchar(255) DEFAULT NULL,
  `page_list_archive` varchar(255) DEFAULT NULL,
  `page_view_archive` varchar(255) DEFAULT NULL,
  `page_search` varchar(255) DEFAULT NULL,
  `page_search_list` varchar(255) DEFAULT NULL,
  `page_search_view` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_datimoduli`
--

CREATE TABLE IF NOT EXISTS `tbl_datimoduli` (
  `id_session` varchar(50) NOT NULL DEFAULT '',
  `last_ping` int(11) NOT NULL DEFAULT '0',
  `id_tbl_form` int(11) NOT NULL DEFAULT '1',
  `serialize` text,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_doc`
--

CREATE TABLE IF NOT EXISTS `tbl_doc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_doc` int(10) unsigned NOT NULL DEFAULT '0',
  `id_tbl_lingua` int(10) unsigned NOT NULL DEFAULT '4',
  `id_tbl_doc_cat` int(10) unsigned NOT NULL DEFAULT '0',
  `filesource` varchar(255) NOT NULL DEFAULT '',
  `mimetype` set('xxx','doc','xls','pdf','pps','txt','zip') NOT NULL DEFAULT 'xxx',
  `save_as_zip` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `filesize` int(10) unsigned DEFAULT NULL,
  `img_preview` varchar(255) DEFAULT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` tinytext,
  `keywords` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `data_publication` date DEFAULT NULL,
  `num_times_downloaded` bigint(20) unsigned DEFAULT NULL,
  `pub` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `pos` int(11) NOT NULL DEFAULT '1',
  `tag_associated` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id_tbl_doc` (`id_tbl_doc`,`id_tbl_lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_doc_cat`
--

CREATE TABLE IF NOT EXISTS `tbl_doc_cat` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_doc_cat` int(11) DEFAULT '0',
  `id_tbl_lingua` int(11) unsigned DEFAULT '4',
  `title` varchar(50) DEFAULT 'nome tradotto',
  `pos` int(11) unsigned DEFAULT '11',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_doc_classificator`
--

CREATE TABLE IF NOT EXISTS `tbl_doc_classificator` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_lingua` int(10) unsigned NOT NULL DEFAULT '4',
  `id_tbl_doc` int(10) unsigned NOT NULL DEFAULT '0',
  `id_tbl_doc_properties` int(10) unsigned NOT NULL DEFAULT '0',
  `property_values_tbl_doc` varchar(255) DEFAULT NULL,
  `property_value_reference` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_tbl_catalue_doc` (`id_tbl_lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_doc_properties`
--

CREATE TABLE IF NOT EXISTS `tbl_doc_properties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_doc_properties` int(10) unsigned NOT NULL DEFAULT '0',
  `id_tbl_lingua` int(10) unsigned NOT NULL DEFAULT '4',
  `property` varchar(255) NOT NULL DEFAULT '',
  `type_property` set('insieme di valori a selezione singola','insieme di valori con multipla selezione') NOT NULL DEFAULT 'insieme di valori a selezione singola',
  `compulsory` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `id_padre` int(10) unsigned DEFAULT NULL,
  `type_use` set('Ricerca Documenti','Documenti Correlate') NOT NULL DEFAULT '',
  `pos` int(10) unsigned DEFAULT NULL,
  `admin_type_order` set('per posizione','per posizione (inverso)','alfabetico A-Z','alfabetico Z-A') NOT NULL DEFAULT 'per posizione',
  `visible` int(1) unsigned NOT NULL DEFAULT '0',
  `compulsory_web` int(1) unsigned DEFAULT NULL,
  `type_property_web` set('insieme di valori a selezione singola','insieme di valori con multipla selezione','insieme di valori a selezione singola (radio)') DEFAULT NULL,
  `tag_associated` varchar(255) NOT NULL DEFAULT '',
  `web_type_order` set('per posizione','per posizione (inverso)','alfabetico A-Z','alfabetico Z-A') NOT NULL DEFAULT 'per posizione',
  PRIMARY KEY (`id`),
  KEY `id_tbl_properties_doc` (`id_tbl_doc_properties`,`id_tbl_lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_doc_property_values`
--

CREATE TABLE IF NOT EXISTS `tbl_doc_property_values` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_doc_property_values` int(10) unsigned NOT NULL DEFAULT '0',
  `id_tbl_lingua` int(10) unsigned NOT NULL DEFAULT '4',
  `id_tbl_doc_properties` int(10) unsigned NOT NULL DEFAULT '0',
  `property_value` varchar(255) NOT NULL DEFAULT '',
  `id_padre` int(10) unsigned DEFAULT NULL,
  `pos` int(10) unsigned NOT NULL DEFAULT '0',
  `id_tbl_menu` int(10) unsigned DEFAULT NULL,
  `tag_associated` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id_tbl_property_value_doc` (`id_tbl_doc_property_values`,`id_tbl_lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_form`
--

CREATE TABLE IF NOT EXISTS `tbl_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT 'nome form',
  `lista_input` varchar(255) DEFAULT NULL,
  `posizione` int(11) DEFAULT '1',
  `predefiniti` text,
  `action` varchar(200) DEFAULT NULL,
  `smarty` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_gestore_risorse`
--

CREATE TABLE IF NOT EXISTS `tbl_gestore_risorse` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_utente` int(10) unsigned NOT NULL,
  `azione` varchar(255) NOT NULL,
  `risorsa` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_utente__session_id` (`id_utente`,`session_id`),
  KEY `risorsa` (`risorsa`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=797 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_gruppi`
--

CREATE TABLE IF NOT EXISTS `tbl_gruppi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT 'nome',
  `descr` varchar(70) NOT NULL DEFAULT 'desc',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_history_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_history_admin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `resource` varchar(255) NOT NULL,
  `string_editor` varchar(255) NOT NULL,
  `time_editor` timestamp NULL DEFAULT NULL,
  `ip_editor` varchar(15) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `type_action` set('insert','edit','delete') NOT NULL DEFAULT 'edit',
  `field_editing` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=323 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_input`
--

CREATE TABLE IF NOT EXISTS `tbl_input` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT 'nome input',
  `tipo` varchar(50) DEFAULT 'tipo input',
  `posizione` int(11) DEFAULT '1',
  `label` varchar(100) DEFAULT 'label input',
  `attrs` text,
  `filter` varchar(200) DEFAULT NULL,
  `errmsg` varchar(200) DEFAULT NULL,
  `ruleext` varchar(200) DEFAULT NULL,
  `typectrl` varchar(200) DEFAULT NULL,
  `attrs1` text,
  `attrs2` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=174 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_lingua`
--

CREATE TABLE IF NOT EXISTS `tbl_lingua` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT '.gif',
  `pub` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_link`
--

CREATE TABLE IF NOT EXISTS `tbl_link` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_link` int(10) unsigned NOT NULL,
  `id_tbl_lingua` int(10) unsigned NOT NULL DEFAULT '4',
  `nome` varchar(255) NOT NULL DEFAULT 'nome link',
  `link` varchar(150) DEFAULT 'http://',
  `descrizione` text,
  `img` varchar(150) DEFAULT '.gif',
  `id_tbl_cat_link` int(11) unsigned NOT NULL DEFAULT '1',
  `id_tbl_target` int(11) unsigned DEFAULT '0',
  `link_video` varchar(255) DEFAULT NULL,
  `posizione` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tbl_lingua` int(11) unsigned DEFAULT '2',
  `nome` varchar(100) DEFAULT 'nome',
  `id_tbl_menu` int(11) unsigned DEFAULT '0',
  `pub` tinyint(1) unsigned DEFAULT '1',
  `id_padre` int(11) unsigned DEFAULT '0',
  `checkbox_intention` varchar(100) DEFAULT '1,2,3,4,5,6',
  `posizione` int(11) DEFAULT '0',
  `checkbox_tbl_gruppi` varchar(200) DEFAULT ',,',
  `checkbox_tbl_service` varchar(200) DEFAULT ',,',
  `img` varchar(100) DEFAULT '.gif',
  `extra_link` varchar(200) DEFAULT NULL,
  `tipo_menu` varchar(100) DEFAULT NULL,
  `img2` varchar(200) DEFAULT NULL,
  `img1` varchar(200) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `id_tbl_photo_cat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_messaggi`
--

CREATE TABLE IF NOT EXISTS `tbl_messaggi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_messaggi` int(11) unsigned NOT NULL,
  `id_tbl_lingua` int(10) unsigned NOT NULL DEFAULT '4',
  `mittente` varchar(200) DEFAULT NULL,
  `destinatari` varchar(200) DEFAULT NULL,
  `oggetto` varchar(80) DEFAULT 'oggetto della mail',
  `messaggio` text,
  `Stato` int(11) NOT NULL DEFAULT '0',
  `id_tbl_page` int(11) unsigned NOT NULL DEFAULT '1',
  `datamod` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_modelli`
--

CREATE TABLE IF NOT EXISTS `tbl_modelli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT 'nome modello di pagina',
  `modello` blob,
  `id_tbl_cat_modelli` int(11) DEFAULT '1',
  `img` varchar(100) DEFAULT '.gif',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_notizie`
--

CREATE TABLE IF NOT EXISTS `tbl_notizie` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_notizie` int(11) DEFAULT '0',
  `id_tbl_lingua` int(11) unsigned DEFAULT '4',
  `cod` varchar(255) DEFAULT NULL,
  `titolo` varchar(255) NOT NULL DEFAULT '',
  `sottotitolo` varchar(255) NOT NULL DEFAULT '',
  `notizia` longtext,
  `searchable` longtext,
  `link` varchar(100) DEFAULT NULL,
  `id_tbl_page` varchar(255) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `pub` tinyint(1) unsigned DEFAULT NULL,
  `data_inizio_pub` date DEFAULT NULL,
  `data_fine_pub` date DEFAULT NULL,
  `data_fine_pub_preview` date DEFAULT NULL,
  `data_notizia` date DEFAULT NULL,
  `id_tbl_notizie_cat` int(11) unsigned DEFAULT NULL,
  `in_preview` tinyint(1) unsigned DEFAULT NULL,
  `in_preview_where` set('area1','area2','area3','area4','area5') DEFAULT NULL,
  `id_tbl_agenda` int(11) DEFAULT NULL,
  `have_agenda` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_tbl_comunicatistampa` (`id_tbl_notizie`,`id_tbl_lingua`),
  KEY `id_tbl_comunicatistampa_cat` (`id_tbl_notizie_cat`,`id_tbl_lingua`),
  KEY `data_comunicato` (`data_notizia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_notizie_cat`
--

CREATE TABLE IF NOT EXISTS `tbl_notizie_cat` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_notizie_cat` int(11) DEFAULT '0',
  `id_tbl_lingua` int(11) unsigned DEFAULT '4',
  `nome` varchar(100) DEFAULT 'nome tradotto',
  `img` varchar(255) DEFAULT NULL,
  `posizione` int(11) unsigned DEFAULT '11',
  `template_list_preview` varchar(255) DEFAULT NULL,
  `template_list` varchar(255) DEFAULT NULL,
  `template` varchar(255) DEFAULT NULL,
  `template_search` varchar(255) DEFAULT NULL,
  `n_visible_preview` tinyint(3) unsigned DEFAULT NULL,
  `n_item_x_page_active` smallint(5) unsigned DEFAULT NULL,
  `n_item_x_page_archive` smallint(5) unsigned DEFAULT NULL,
  `n_item_x_page_search` smallint(5) unsigned DEFAULT NULL,
  `format_date_list` varchar(255) DEFAULT NULL,
  `format_date_page` varchar(255) DEFAULT NULL,
  `format_date_preview` varchar(255) DEFAULT NULL,
  `page_list_active` varchar(255) DEFAULT NULL,
  `page_view_active` varchar(255) DEFAULT NULL,
  `page_list_archive` varchar(255) DEFAULT NULL,
  `page_view_archive` varchar(255) DEFAULT NULL,
  `page_search` varchar(255) DEFAULT NULL,
  `page_search_list` varchar(255) DEFAULT NULL,
  `page_search_view` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2004 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_notizie_setup`
--

CREATE TABLE IF NOT EXISTS `tbl_notizie_setup` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_notizie_setup` tinyint(3) unsigned DEFAULT NULL,
  `id_tbl_lingua` tinyint(4) NOT NULL DEFAULT '4',
  `n_days` smallint(5) unsigned NOT NULL DEFAULT '30',
  `n_visible_preview` tinyint(3) unsigned NOT NULL DEFAULT '5',
  `n_item_x_page_active` smallint(5) unsigned NOT NULL DEFAULT '10',
  `n_item_x_page_archive` smallint(5) unsigned NOT NULL DEFAULT '10',
  `n_item_x_page_search` smallint(5) unsigned NOT NULL DEFAULT '10',
  `max_n_page` smallint(5) unsigned NOT NULL DEFAULT '10',
  `template_list_preview` varchar(255) NOT NULL DEFAULT 'notizie_preview.tpl',
  `template_list` varchar(255) NOT NULL DEFAULT 'notizie_paginato.tpl',
  `template` varchar(255) NOT NULL DEFAULT 'notizie.tpl',
  `template_search` varchar(255) NOT NULL DEFAULT 'notizie_ricerca.tpl',
  `setlocale` varchar(255) NOT NULL DEFAULT 'it_IT',
  `format_date_list` varchar(255) NOT NULL DEFAULT '%d %B %Y',
  `format_date_page` varchar(255) NOT NULL DEFAULT '%d %B %Y',
  `format_date_preview` varchar(255) NOT NULL DEFAULT '%d %B %Y',
  `page_list_active` varchar(255) DEFAULT NULL,
  `page_view_active` varchar(255) DEFAULT NULL,
  `page_list_archive` varchar(255) DEFAULT NULL,
  `page_view_archive` varchar(255) DEFAULT NULL,
  `page_search` varchar(255) DEFAULT NULL,
  `page_search_list` varchar(255) DEFAULT NULL,
  `page_search_view` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_page`
--

CREATE TABLE IF NOT EXISTS `tbl_page` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_page` int(11) DEFAULT '0',
  `id_tbl_lingua` int(11) unsigned DEFAULT '4',
  `nome` varchar(250) DEFAULT 'nome tradotto',
  `sottotitolo` varchar(255) DEFAULT NULL,
  `id_tbl_menu` int(11) unsigned DEFAULT '1',
  `posizione` int(11) unsigned DEFAULT '0',
  `checkbox_tbl_gruppi` varchar(200) DEFAULT ',,',
  `checkbox_tbl_service` varchar(200) DEFAULT ',,',
  `id_tbl_tipo_pagina` int(11) DEFAULT '1',
  `id_tbl_photo` int(11) DEFAULT '0',
  `id_tbl_link` int(11) DEFAULT NULL,
  `abs` longtext,
  `info_req` int(1) NOT NULL DEFAULT '0',
  `title_req` varchar(110) DEFAULT NULL,
  `pub` int(1) DEFAULT '1',
  `utentemod` varchar(100) DEFAULT 'pippo (182.1.1.1)',
  `template` varchar(255) DEFAULT NULL,
  `id_tbl_photo_cat` int(11) DEFAULT '1',
  `meta_tag_title` varchar(255) DEFAULT NULL,
  `meta_tag_charset` varchar(30) DEFAULT NULL,
  `meta_tag_generator` varchar(255) DEFAULT NULL,
  `meta_tag_author` varchar(255) DEFAULT NULL,
  `meta_tag_description` varchar(255) DEFAULT NULL,
  `meta_tag_keywords` varchar(255) DEFAULT NULL,
  `redirect` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `nome` (`nome`,`abs`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=138 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_page_classificator`
--

CREATE TABLE IF NOT EXISTS `tbl_page_classificator` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_lingua` int(10) unsigned NOT NULL DEFAULT '4',
  `id_tbl_page` int(10) unsigned NOT NULL,
  `id_tbl_page_properties` int(10) unsigned NOT NULL,
  `property_values_tbl_page` varchar(255) DEFAULT NULL,
  `property_value_reference` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_tbl_catalue_doc` (`id_tbl_lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_page_properties`
--

CREATE TABLE IF NOT EXISTS `tbl_page_properties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_page_properties` int(10) unsigned NOT NULL,
  `id_tbl_lingua` int(10) unsigned NOT NULL DEFAULT '4',
  `property` varchar(255) NOT NULL,
  `type_property` set('insieme di valori a selezione singola','insieme di valori con multipla selezione') NOT NULL DEFAULT 'insieme di valori a selezione singola',
  `compulsory` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `id_padre` int(10) unsigned DEFAULT NULL,
  `type_use` set('Ricerca Pagine','Pagine Correlate') NOT NULL,
  `pos` int(10) unsigned DEFAULT NULL,
  `admin_type_order` set('per posizione','per posizione (inverso)','alfabetico A-Z','alfabetico Z-A') NOT NULL DEFAULT 'per posizione',
  `visible` int(1) unsigned NOT NULL,
  `compulsory_web` int(1) unsigned DEFAULT NULL,
  `type_property_web` set('insieme di valori a selezione singola','insieme di valori con multipla selezione') DEFAULT NULL,
  `tag_associated` varchar(255) NOT NULL,
  `web_type_order` set('per posizione','per posizione (inverso)','alfabetico A-Z','alfabetico Z-A') NOT NULL DEFAULT 'per posizione',
  PRIMARY KEY (`id`),
  KEY `id_tbl_properties_doc` (`id_tbl_page_properties`,`id_tbl_lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_page_property_values`
--

CREATE TABLE IF NOT EXISTS `tbl_page_property_values` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_page_property_values` int(10) unsigned NOT NULL,
  `id_tbl_lingua` int(10) unsigned NOT NULL DEFAULT '4',
  `id_tbl_page_properties` int(10) unsigned NOT NULL,
  `property_value` varchar(255) NOT NULL,
  `id_padre` int(10) unsigned DEFAULT NULL,
  `pos` int(10) unsigned NOT NULL,
  `id_tbl_menu` int(10) unsigned DEFAULT NULL,
  `tag_associated` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tbl_property_value_doc` (`id_tbl_page_property_values`,`id_tbl_lingua`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_photo`
--

CREATE TABLE IF NOT EXISTS `tbl_photo` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_tbl_photo` bigint(20) NOT NULL,
  `id_tbl_lingua` bigint(20) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `img_big` varchar(255) DEFAULT NULL,
  `thumbnail_x` bigint(20) NOT NULL,
  `thumbnail_y` bigint(20) NOT NULL,
  `id_tbl_photo_cat` bigint(20) NOT NULL,
  `posizione` bigint(20) NOT NULL,
  `pub` bigint(20) NOT NULL,
  `didascalia` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_photo_cat`
--

CREATE TABLE IF NOT EXISTS `tbl_photo_cat` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_padre` bigint(20) NOT NULL,
  `id_tbl_photo_cat` int(11) NOT NULL,
  `id_tbl_lingua` bigint(20) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `num` int(11) NOT NULL,
  `smarty_template` varchar(255) NOT NULL,
  `foto_big` varchar(255) NOT NULL,
  `posizione` int(11) NOT NULL,
  `smarty_template_alternativo` varchar(255) DEFAULT NULL,
  `set_loop` tinyint(1) DEFAULT NULL,
  `set_random` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_photo_import`
--

CREATE TABLE IF NOT EXISTS `tbl_photo_import` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_tbl_photo_import` int(10) unsigned NOT NULL,
  `id_tbl_lingua` int(10) unsigned NOT NULL,
  `id_tbl_photo_cat` int(10) unsigned DEFAULT NULL,
  `id_tbl_photo_cat_added` int(10) unsigned DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `store_directory` varchar(255) DEFAULT NULL,
  `path_store_directory` varchar(255) DEFAULT NULL,
  `new_store_directory` varchar(255) DEFAULT NULL,
  `quality` tinyint(3) unsigned NOT NULL,
  `automatic_pub` tinyint(1) DEFAULT NULL,
  `filesource` varchar(255) NOT NULL,
  `delete_filesource` tinyint(1) DEFAULT NULL,
  `dimx` int(10) unsigned DEFAULT NULL,
  `dimy` int(10) unsigned DEFAULT NULL,
  `thumbnail_dimx` int(10) unsigned DEFAULT NULL,
  `thumbnail_dimy` int(10) unsigned DEFAULT NULL,
  `watermark_filesource` varchar(255) DEFAULT NULL,
  `watermark_xposition` set('LEFT','CENTER','RIGHT') DEFAULT NULL,
  `watermark_yposition` set('TOP','CENTER','BOTTOM') DEFAULT NULL,
  `watermark_text` varchar(255) DEFAULT NULL,
  `watermark_textsize` tinyint(3) unsigned DEFAULT NULL,
  `watermark_textcolor` varchar(7) DEFAULT NULL,
  `watermark_textxposition` set('LEFT','CENTER','RIGHT') DEFAULT NULL,
  `watermark_textyposition` set('TOP','CENTER','BOTTOM') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_phpmailer_log`
--

CREATE TABLE IF NOT EXISTS `tbl_phpmailer_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `environment` set('frontend','backend') NOT NULL,
  `id_user` int(10) unsigned DEFAULT NULL,
  `ip_user` varchar(15) NOT NULL,
  `mail_script` varchar(255) NOT NULL,
  `mail_smtp` varchar(255) NOT NULL,
  `mail_auth` set('Yes','No') NOT NULL,
  `mail_from` varchar(255) NOT NULL,
  `mail_fromname` varchar(255) DEFAULT NULL,
  `mail_to` varchar(255) NOT NULL,
  `mail_cc` varchar(255) DEFAULT NULL,
  `mail_bcc` varchar(255) DEFAULT NULL,
  `mail_subject` varchar(255) NOT NULL,
  `mail_html` set('Yes','No') NOT NULL,
  `mail_body` longtext,
  `mail_altbody` longtext,
  `mail_body_inline` longtext,
  `mail_log` text NOT NULL,
  `mail_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `mail_date` (`mail_date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_pratiche`
--

CREATE TABLE IF NOT EXISTS `tbl_pratiche` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `cognome` varchar(100) DEFAULT NULL,
  `pratica` int(11) unsigned DEFAULT NULL,
  `datains` date DEFAULT NULL,
  `id_tbl_img_stato_pratiche` int(11) unsigned NOT NULL DEFAULT '0',
  `id_tbl_tipo_mutuo` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_qtool`
--

CREATE TABLE IF NOT EXISTS `tbl_qtool` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT 'nome',
  `checkbox_tbl_gruppi` varchar(150) DEFAULT ',,',
  `plugin` varchar(200) DEFAULT NULL,
  `posizione` int(11) unsigned DEFAULT '10',
  `template` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_service`
--

CREATE TABLE IF NOT EXISTS `tbl_service` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT 'nome',
  `descr` varchar(80) DEFAULT 'descrizione servizio',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_target`
--

CREATE TABLE IF NOT EXISTS `tbl_target` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL DEFAULT '_self',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `cognome` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `checkbox_tbl_gruppi` varchar(200) NOT NULL,
  `checkbox1_tbl_gruppi` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_user_service`
--

CREATE TABLE IF NOT EXISTS `tbl_user_service` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT 'nome',
  `cognome` varchar(30) DEFAULT 'cognome',
  `email` varchar(50) DEFAULT 'email',
  `login` varchar(50) NOT NULL DEFAULT 'login',
  `password` varchar(50) DEFAULT NULL,
  `checkbox_tbl_service` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `useronline`
--

CREATE TABLE IF NOT EXISTS `useronline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zeit` int(15) NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL,
  `file` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `ip` (`ip`,`file`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
