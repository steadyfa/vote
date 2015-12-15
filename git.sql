-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 15, 2015 at 02:12 AM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `git`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `cand`
-- 

CREATE TABLE `cand` (
  `faith` int(100) NOT NULL,
  `jus` int(100) NOT NULL,
  `slau` int(100) NOT NULL,
  PRIMARY KEY  (`faith`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `cand`
-- 

INSERT INTO `cand` (`faith`, `jus`, `slau`) VALUES 
(1, 2, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `reg`
-- 

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `reg`
-- 

INSERT INTO `reg` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES 
(0, 's', 's', 's@gmail.com', '03c7c0ace395d80182db07ae2c30f034'),
(0, 'f', 'a', 'fa@gmail.com', '89e6d2b383471fc370d828e552c19e65');
