-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2016 at 03:36 PM
-- Server version: 5.7.10-log
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `localizacion`
--

-- --------------------------------------------------------

--
-- Table structure for table `jornadas`
--

CREATE TABLE `jornadas` (
  `numjornada` decimal(3,0) NOT NULL,
  `fechajornada` date DEFAULT NULL,
  `numparroquia` decimal(3,0) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `tlfcontacto` varchar(11) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `numjornal` decimal(3,0) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `cedula` decimal(8,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jornaleros`
--

CREATE TABLE `jornaleros` (
  `numjornal` decimal(3,0) NOT NULL,
  `nombrejornal` varchar(20) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `cedula` decimal(8,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parroquia`
--

CREATE TABLE `parroquia` (
  `numparroquia` decimal(3,0) NOT NULL,
  `nombreparro` varchar(20) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `cedula` decimal(8,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `cedula` decimal(8,0) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `contrasena` varchar(15) DEFAULT NULL,
  `perfil` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jornadas`
--
ALTER TABLE `jornadas`
  ADD PRIMARY KEY (`numjornada`);

--
-- Indexes for table `jornaleros`
--
ALTER TABLE `jornaleros`
  ADD PRIMARY KEY (`numjornal`);

--
-- Indexes for table `parroquia`
--
ALTER TABLE `parroquia`
  ADD PRIMARY KEY (`numparroquia`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula`);
