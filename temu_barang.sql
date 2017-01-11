{\rtf1\ansi\ansicpg1252\cocoartf1404\cocoasubrtf470
{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 -- phpMyAdmin SQL Dump\
-- version 4.4.10\
-- http://www.phpmyadmin.net\
--\
-- Host: localhost\
-- Generation Time: Jan 11, 2017 at 03:55 PM\
-- Server version: 5.5.42\
-- PHP Version: 7.0.8\
\
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";\
SET time_zone = "+00:00";\
\
--\
-- Database: `temubarang`\
--\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `ambil`\
--\
\
CREATE TABLE `ambil` (\
  `id_pengambilan` varchar(10) NOT NULL,\
  `id_barang` varchar(10) NOT NULL,\
  `nama_pengambilan` varchar(40) NOT NULL,\
  `notelp_pengambilan` varchar(13) NOT NULL,\
  `kelas_pengambilan` varchar(10) NOT NULL,\
  `tanggal pengambilan` date NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=latin1;\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `barang`\
--\
\
CREATE TABLE `barang` (\
  `id_barang` varchar(20) NOT NULL,\
  `nama_barang` varchar(30) NOT NULL,\
  `ket_barang` text NOT NULL,\
  `jenis_barang` varchar(10) NOT NULL,\
  `lokasi_barang` text NOT NULL,\
  `foto_barang` text NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=latin1;\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `chat`\
--\
\
CREATE TABLE `chat` (\
  `id_chat` varchar(10) NOT NULL,\
  `isi_chat` text NOT NULL,\
  `tanggal_chat` date NOT NULL,\
  `status_chat` int(11) NOT NULL,\
  `id_chatlist` varchar(10) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=latin1;\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `chatlist`\
--\
\
CREATE TABLE `chatlist` (\
  `id_chatlist` varchar(10) NOT NULL,\
  `name_chatlist` text NOT NULL,\
  `date_chatlist` date NOT NULL,\
  `priority_chatlist` int(5) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=latin1;\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `log`\
--\
\
CREATE TABLE `log` (\
  `id_log` varchar(10) NOT NULL,\
  `aksi_log` varchar(15) NOT NULL,\
  `detail_log` text NOT NULL,\
  `tanggal_log` date NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=latin1;\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `login`\
--\
\
CREATE TABLE `login` (\
  `id_user` varchar(10) NOT NULL,\
  `nama_user` varchar(40) NOT NULL,\
  `password_user` varchar(30) NOT NULL,\
  `type_user` int(11) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=latin1;\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `online`\
--\
\
CREATE TABLE `online` (\
  `id_online` varchar(10) NOT NULL,\
  `session_online` text NOT NULL,\
  `status_online` varchar(20) NOT NULL,\
  `id_user` varchar(10) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=latin1;\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `profile`\
--\
\
CREATE TABLE `profile` (\
  `id_profile` varchar(10) NOT NULL,\
  `nama_user` varchar(40) NOT NULL,\
  `username_user` varchar(20) NOT NULL,\
  `notelp_user` varchar(13) NOT NULL,\
  `foto_user` text NOT NULL,\
  `kelas_user` varchar(10) NOT NULL,\
  `noabsen_user` varchar(3) NOT NULL,\
  `id_user` varchar(10) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=latin1;\
\
--\
-- Indexes for dumped tables\
--\
\
--\
-- Indexes for table `ambil`\
--\
ALTER TABLE `ambil`\
  ADD PRIMARY KEY (`id_pengambilan`);\
\
--\
-- Indexes for table `barang`\
--\
ALTER TABLE `barang`\
  ADD PRIMARY KEY (`id_barang`);\
\
--\
-- Indexes for table `chat`\
--\
ALTER TABLE `chat`\
  ADD PRIMARY KEY (`id_chat`);\
\
--\
-- Indexes for table `chatlist`\
--\
ALTER TABLE `chatlist`\
  ADD PRIMARY KEY (`id_chatlist`);\
\
--\
-- Indexes for table `login`\
--\
ALTER TABLE `login`\
  ADD PRIMARY KEY (`id_user`);\
\
--\
-- Indexes for table `online`\
--\
ALTER TABLE `online`\
  ADD PRIMARY KEY (`id_online`);\
\
--\
-- Indexes for table `profile`\
--\
ALTER TABLE `profile`\
  ADD PRIMARY KEY (`id_profile`);\
}