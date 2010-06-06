-- phpMyAdmin SQL Dump
-- version 2.11.3deb1ubuntu1.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Banco de Dados: `billing`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `id` int(11) NOT NULL auto_increment,
  `id_company` int(11) NOT NULL,
  `id_services` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  `nf` int(11) NOT NULL,
  `quantity` int(11) NOT NULL default '1',
  `date` date NOT NULL,
  `venc` date NOT NULL,
  `pago` date NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `notes` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `companys`
--

CREATE TABLE IF NOT EXISTS `companys` (
  `id` int(11) NOT NULL auto_increment,
  `name` text collate utf8_unicode_ci NOT NULL,
  `address` text collate utf8_unicode_ci NOT NULL,
  `tel` text collate utf8_unicode_ci NOT NULL,
  `email` text collate utf8_unicode_ci NOT NULL,
  `notes` mediumtext collate utf8_unicode_ci NOT NULL,
  `crm` text collate utf8_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `id` int(11) NOT NULL auto_increment,
  `username` text collate utf8_unicode_ci NOT NULL,
  `password` text collate utf8_unicode_ci NOT NULL,
  `ugroup` int(11) NOT NULL default '2',
  `name` text character set latin1 NOT NULL,
  `notes` text character set latin1 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL auto_increment,
  `name` text collate utf8_unicode_ci NOT NULL,
  `freq` int(11) NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `notes` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

