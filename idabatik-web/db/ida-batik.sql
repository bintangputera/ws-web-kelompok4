-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 08:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ida-batik`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `konten_blog` text NOT NULL,
  `created_at` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `id_kategori`, `judul`, `slug`, `thumbnail`, `konten_blog`, `created_at`) VALUES
(40, 7, 'Batik di Mata Internasional', 'batik-di-mata-internasional', 'Batik-1132x509.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dolor eros, convallis at odio quis, varius bibendum lectus. Nullam non diam ut ipsum tristique venenatis quis a justo. In consequat vulputate erat, sit amet rhoncus nibh mattis vel. Donec cursus aliquam elit. Integer vitae scelerisque libero. Aenean quis justo augue. Nulla placerat tellus nisl, id pellentesque diam luctus lobortis. Donec condimentum leo euismod, blandit dolor vel, consectetur magna.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Nunc imperdiet quam quis justo semper, et maximus tellus tempor. Donec non ultricies nisi. Maecenas eleifend vulputate urna vel tristique. Fusce nunc mauris, consectetur id molestie non, facilisis vel tellus. Donec sit amet urna feugiat, commodo diam varius, tristique metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec egestas lacinia arcu sed sagittis. Duis hendrerit lorem et mauris eleifend varius. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent magna libero, lobortis vel libero sollicitudin, vestibulum viverra elit. Integer aliquet erat orci, facilisis porta felis lacinia sed. Aliquam fringilla ultricies magna sit amet sagittis. Vivamus elementum pharetra leo suscipit accumsan. Praesent facilisis orci id felis semper, luctus vestibulum nunc laoreet.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Fusce id orci eu arcu consectetur pellentesque. Pellentesque placerat libero nulla, id laoreet lacus vestibulum ut. Sed fringilla facilisis vehicula. Ut at leo quam. Curabitur fringilla, ante vel placerat placerat, purus felis tempor libero, at placerat orci arcu vel metus. Duis non ante mi. Duis ligula odio, auctor in venenatis dignissim, eleifend eu nisl. Ut magna sem, tempor id dolor et, tincidunt eleifend orci. Aliquam erat volutpat. Integer vel purus et erat semper congue non mattis odio. Donec rutrum fermentum egestas. Phasellus ac nisi a lorem interdum sagittis. Maecenas congue posuere ornare. Nunc sit amet vehicula tortor. Maecenas condimentum tristique pellentesque.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><img src=\"data:image/jpeg;base64,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\" style=\"width: 50%; float: left;\" class=\"note-float-left\"></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Duis sagittis et justo nec accumsan. Ut metus mauris, molestie a magna a, pretium viverra tellus. Duis non neque auctor mi gravida condimentum. Pellentesque tincidunt eget mi nec ornare. Nam vitae lectus ut orci pharetra commodo. Morbi in scelerisque velit. Aliquam ex erat, fermentum sed odio sed, mattis varius erat. Pellentesque gravida ex pulvinar arcu fringilla commodo. Vestibulum pretium elit a purus commodo, vitae cursus magna faucibus. Sed tincidunt viverra faucibus. Morbi quis arcu maximus, posuere nunc nec, gravida nisi.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Nulla tristique ullamcorper risus at ultrices. In posuere, leo in dapibus viverra, lorem erat convallis orci, id finibus nulla nisi ac magna. Nulla euismod iaculis sodales. Curabitur venenatis nunc vestibulum enim pellentesque rhoncus. Maecenas ultricies dignissim dui in pulvinar. Aenean vel interdum orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut aliquet ante, nec blandit massa.</p>', '0000-00-00'),
(41, 5, 'The Beatles', 'the-beatles', '20121115-the-beatles-x600-1352990279.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dolor eros, convallis at odio quis, varius bibendum lectus. Nullam non diam ut ipsum tristique venenatis quis a justo. In consequat vulputate erat, sit amet rhoncus nibh mattis vel. Donec cursus aliquam elit. Integer vitae scelerisque libero. Aenean quis justo augue. Nulla placerat tellus nisl, id pellentesque diam luctus lobortis. Donec condimentum leo euismod, blandit dolor vel, consectetur magna.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Nunc imperdiet quam quis justo semper, et maximus tellus tempor. Donec non ultricies nisi. Maecenas eleifend vulputate urna vel tristique. Fusce nunc mauris, consectetur id molestie non, facilisis vel tellus. Donec sit amet urna feugiat, commodo diam varius, tristique metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec egestas lacinia arcu sed sagittis. Duis hendrerit lorem et mauris eleifend varius. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent magna libero, lobortis vel libero sollicitudin, vestibulum viverra elit. Integer aliquet erat orci, facilisis porta felis lacinia sed. Aliquam fringilla ultricies magna sit amet sagittis. Vivamus elementum pharetra leo suscipit accumsan. Praesent facilisis orci id felis semper, luctus vestibulum nunc laoreet.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Fusce id orci eu arcu consectetur pellentesque. Pellentesque placerat libero nulla, id laoreet lacus vestibulum ut. Sed fringilla facilisis vehicula. Ut at leo quam. Curabitur fringilla, ante vel placerat placerat, purus felis tempor libero, at placerat orci arcu vel metus. Duis non ante mi. Duis ligula odio, auctor in venenatis dignissim, eleifend eu nisl. Ut magna sem, tempor id dolor et, tincidunt eleifend orci. Aliquam erat volutpat. Integer vel purus et erat semper congue non mattis odio. Donec rutrum fermentum egestas. Phasellus ac nisi a lorem interdum sagittis. Maecenas congue posuere ornare. Nunc sit amet vehicula tortor. Maecenas condimentum tristique pellentesque.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Duis sagittis et justo nec accumsan. Ut metus mauris, molestie a magna a, pretium viverra tellus. Duis non neque auctor mi gravida condimentum. Pellentesque tincidunt eget mi nec ornare. Nam vitae lectus ut orci pharetra commodo. Morbi in scelerisque velit. Aliquam ex erat, fermentum sed odio sed, mattis varius erat. Pellentesque gravida ex pulvinar arcu fringilla commodo. Vestibulum pretium elit a purus commodo, vitae cursus magna faucibus. Sed tincidunt viverra faucibus. Morbi quis arcu maximus, posuere nunc nec, gravida nisi.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Nulla tristique ullamcorper risus at ultrices. In posuere, leo in dapibus viverra, lorem erat convallis orci, id finibus nulla nisi ac magna. Nulla euismod iaculis sodales. Curabitur venenatis nunc vestibulum enim pellentesque rhoncus. Maecenas ultricies dignissim dui in pulvinar. Aenean vel interdum orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut aliquet ante, nec blandit massa.</p>', '0000-00-00'),
(42, 2, 'Hidupku Tak Jauh dari Masak dan Anak', 'hidupku-tak-jauh-dari-masak-dan-anak', '192-watch-desk-stopwatch-wallpaper-preview.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dolor eros, convallis at odio quis, varius bibendum lectus. Nullam non diam ut ipsum tristique venenatis quis a justo. In consequat vulputate erat, sit amet rhoncus nibh mattis vel. Donec cursus aliquam elit. Integer vitae scelerisque libero. Aenean quis justo augue. Nulla placerat tellus nisl, id pellentesque diam luctus lobortis. Donec condimentum leo euismod, blandit dolor vel, consectetur magna.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Nunc imperdiet quam quis justo semper, et maximus tellus tempor. Donec non ultricies nisi. Maecenas eleifend vulputate urna vel tristique. Fusce nunc mauris, consectetur id molestie non, facilisis vel tellus. Donec sit amet urna feugiat, commodo diam varius, tristique metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec egestas lacinia arcu sed sagittis. Duis hendrerit lorem et mauris eleifend varius. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent magna libero, lobortis vel libero sollicitudin, vestibulum viverra elit. Integer aliquet erat orci, facilisis porta felis lacinia sed. Aliquam fringilla ultricies magna sit amet sagittis. Vivamus elementum pharetra leo suscipit accumsan. Praesent facilisis orci id felis semper, luctus vestibulum nunc laoreet.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Fusce id orci eu arcu consectetur pellentesque. Pellentesque placerat libero nulla, id laoreet lacus vestibulum ut. Sed fringilla facilisis vehicula. Ut at leo quam. Curabitur fringilla, ante vel placerat placerat, purus felis tempor libero, at placerat orci arcu vel metus. Duis non ante mi. Duis ligula odio, auctor in venenatis dignissim, eleifend eu nisl. Ut magna sem, tempor id dolor et, tincidunt eleifend orci. Aliquam erat volutpat. Integer vel purus et erat semper congue non mattis odio. Donec rutrum fermentum egestas. Phasellus ac nisi a lorem interdum sagittis. Maecenas congue posuere ornare. Nunc sit amet vehicula tortor. Maecenas condimentum tristique pellentesque.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Duis sagittis et justo nec accumsan. Ut metus mauris, molestie a magna a, pretium viverra tellus. Duis non neque auctor mi gravida condimentum. Pellentesque tincidunt eget mi nec ornare. Nam vitae lectus ut orci pharetra commodo. Morbi in scelerisque velit. Aliquam ex erat, fermentum sed odio sed, mattis varius erat. Pellentesque gravida ex pulvinar arcu fringilla commodo. Vestibulum pretium elit a purus commodo, vitae cursus magna faucibus. Sed tincidunt viverra faucibus. Morbi quis arcu maximus, posuere nunc nec, gravida nisi.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Nulla tristique ullamcorper risus at ultrices. In posuere, leo in dapibus viverra, lorem erat convallis orci, id finibus nulla nisi ac magna. Nulla euismod iaculis sodales. Curabitur venenatis nunc vestibulum enim pellentesque rhoncus. Maecenas ultricies dignissim dui in pulvinar. Aenean vel interdum orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut aliquet ante, nec blandit massa.</p>', '0000-00-00'),
(43, 5, 'Merawat Ibu Pertiwi', 'merawat-ibu-pertiwi', '34-ibu-dan-anak-ilustrasi-_120215101320-141.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dolor eros, convallis at odio quis, varius bibendum lectus. Nullam non diam ut ipsum tristique venenatis quis a justo. In consequat vulputate erat, sit amet rhoncus nibh mattis vel. Donec cursus aliquam elit. Integer vitae scelerisque libero. Aenean quis justo augue. Nulla placerat tellus nisl, id pellentesque diam luctus lobortis. Donec condimentum leo euismod, blandit dolor vel, consectetur magna.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Nunc imperdiet quam quis justo semper, et maximus tellus tempor. Donec non ultricies nisi. Maecenas eleifend vulputate urna vel tristique. Fusce nunc mauris, consectetur id molestie non, facilisis vel tellus. Donec sit amet urna feugiat, commodo diam varius, tristique metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec egestas lacinia arcu sed sagittis. Duis hendrerit lorem et mauris eleifend varius. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent magna libero, lobortis vel libero sollicitudin, vestibulum viverra elit. Integer aliquet erat orci, facilisis porta felis lacinia sed. Aliquam fringilla ultricies magna sit amet sagittis. Vivamus elementum pharetra leo suscipit accumsan. Praesent facilisis orci id felis semper, luctus vestibulum nunc laoreet.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Fusce id orci eu arcu consectetur pellentesque. Pellentesque placerat libero nulla, id laoreet lacus vestibulum ut. Sed fringilla facilisis vehicula. Ut at leo quam. Curabitur fringilla, ante vel placerat placerat, purus felis tempor libero, at placerat orci arcu vel metus. Duis non ante mi. Duis ligula odio, auctor in venenatis dignissim, eleifend eu nisl. Ut magna sem, tempor id dolor et, tincidunt eleifend orci. Aliquam erat volutpat. Integer vel purus et erat semper congue non mattis odio. Donec rutrum fermentum egestas. Phasellus ac nisi a lorem interdum sagittis. Maecenas congue posuere ornare. Nunc sit amet vehicula tortor. Maecenas condimentum tristique pellentesque.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Duis sagittis et justo nec accumsan. Ut metus mauris, molestie a magna a, pretium viverra tellus. Duis non neque auctor mi gravida condimentum. Pellentesque tincidunt eget mi nec ornare. Nam vitae lectus ut orci pharetra commodo. Morbi in scelerisque velit. Aliquam ex erat, fermentum sed odio sed, mattis varius erat. Pellentesque gravida ex pulvinar arcu fringilla commodo. Vestibulum pretium elit a purus commodo, vitae cursus magna faucibus. Sed tincidunt viverra faucibus. Morbi quis arcu maximus, posuere nunc nec, gravida nisi.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Nulla tristique ullamcorper risus at ultrices. In posuere, leo in dapibus viverra, lorem erat convallis orci, id finibus nulla nisi ac magna. Nulla euismod iaculis sodales. Curabitur venenatis nunc vestibulum enim pellentesque rhoncus. Maecenas ultricies dignissim dui in pulvinar. Aenean vel interdum orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut aliquet ante, nec blandit massa.</p>', '0000-00-00'),
(44, 7, 'Budidaya Ikan Cupang', 'budidaya-ikan-cupang', '641-84619747_2878528285570520_1873601318770180096_n.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dolor eros, convallis at odio quis, varius bibendum lectus. Nullam non diam ut ipsum tristique venenatis quis a justo. In consequat vulputate erat, sit amet rhoncus nibh mattis vel. Donec cursus aliquam elit. Integer vitae scelerisque libero. Aenean quis justo augue. Nulla placerat tellus nisl, id pellentesque diam luctus lobortis. Donec condimentum leo euismod, blandit dolor vel, consectetur magna.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Nunc imperdiet quam quis justo semper, et maximus tellus tempor. Donec non ultricies nisi. Maecenas eleifend vulputate urna vel tristique. Fusce nunc mauris, consectetur id molestie non, facilisis vel tellus. Donec sit amet urna feugiat, commodo diam varius, tristique metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec egestas lacinia arcu sed sagittis. Duis hendrerit lorem et mauris eleifend varius. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent magna libero, lobortis vel libero sollicitudin, vestibulum viverra elit. Integer aliquet erat orci, facilisis porta felis lacinia sed. Aliquam fringilla ultricies magna sit amet sagittis. Vivamus elementum pharetra leo suscipit accumsan. Praesent facilisis orci id felis semper, luctus vestibulum nunc laoreet.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Fusce id orci eu arcu consectetur pellentesque. Pellentesque placerat libero nulla, id laoreet lacus vestibulum ut. Sed fringilla facilisis vehicula. Ut at leo quam. Curabitur fringilla, ante vel placerat placerat, purus felis tempor libero, at placerat orci arcu vel metus. Duis non ante mi. Duis ligula odio, auctor in venenatis dignissim, eleifend eu nisl. Ut magna sem, tempor id dolor et, tincidunt eleifend orci. Aliquam erat volutpat. Integer vel purus et erat semper congue non mattis odio. Donec rutrum fermentum egestas. Phasellus ac nisi a lorem interdum sagittis. Maecenas congue posuere ornare. Nunc sit amet vehicula tortor. Maecenas condimentum tristique pellentesque.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Duis sagittis et justo nec accumsan. Ut metus mauris, molestie a magna a, pretium viverra tellus. Duis non neque auctor mi gravida condimentum. Pellentesque tincidunt eget mi nec ornare. Nam vitae lectus ut orci pharetra commodo. Morbi in scelerisque velit. Aliquam ex erat, fermentum sed odio sed, mattis varius erat. Pellentesque gravida ex pulvinar arcu fringilla commodo. Vestibulum pretium elit a purus commodo, vitae cursus magna faucibus. Sed tincidunt viverra faucibus. Morbi quis arcu maximus, posuere nunc nec, gravida nisi.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Nulla tristique ullamcorper risus at ultrices. In posuere, leo in dapibus viverra, lorem erat convallis orci, id finibus nulla nisi ac magna. Nulla euismod iaculis sodales. Curabitur venenatis nunc vestibulum enim pellentesque rhoncus. Maecenas ultricies dignissim dui in pulvinar. Aenean vel interdum orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut aliquet ante, nec blandit massa.</p>', '0000-00-00');
INSERT INTO `blog` (`id_blog`, `id_kategori`, `judul`, `slug`, `thumbnail`, `konten_blog`, `created_at`) VALUES
(45, 3, '3 Kunci Agar Developer Dilamar Kerja saat Masih Kuliah', '3-kunci-agar-developer-dilamar-kerja-saat-masih-kuliah', '478-Android_logo_stacked__RGB_.5.jpg', '<p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\"><em><b style=\"font-weight: bold;\">3 Kunci Agar Developer Dilamar Kerja saat Masih Kuliah</b></em></p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\"><a href=\"https://www.dicoding.com/users/ahmad_suyadi/\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(217, 83, 79); transition: all 0.2s linear 0s;\">Ahmad Suyadi</a>&nbsp;(23 thn), developer asal Semarang, boleh bangga. Meski masih semester 7 di kampus Udinus, Ahmad telah mendapat tawaran kerja di salah satu BUMN di Indonesia, yaitu PT Perkebunan Nusantara IX. Seperti apa kisahnya? Mari kita simak</p><h3 style=\"font-family: &quot;Source Sans Pro&quot;, Georgia, &quot;Times New Roman&quot;, serif; font-weight: 600; line-height: 1.5em; color: rgb(85, 85, 85); margin-bottom: 16px; font-size: 24px;\"><b style=\"font-weight: bold;\">Saatnya Developer Dilamar Kerja Perusahaan: 3 Kunci</b></h3><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Suka ngoding sejak dunia SMA, Ahmad&nbsp; bertekad ingin jadi seorang developer. Untuk meraih mimpinya , Ahmad kuliah di jurusan Teknik Informatika, Universitas Dian Nuswantoro, Semarang. Menurutnya, profesi programmer itu sangat menantang sekaligus menghasilkan.&nbsp; Lewat&nbsp;<i>ngulik</i>&nbsp;blog, mahasiswa rajin ini juga sempat mencetak penghasilan perdananya sendiri, tepatnya dari absen Admob dan blog.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Berkaca pada pengalamannya selama ini, 3 (tiga) faktor inilah yang menurut Ahmad berhasil membawanya jadi developer dilamar kerja Badan Usaha Milik Negara tersebut.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\"><b style=\"font-weight: bold;\">#1 Miliki Portofolio Karya Perdana</b></p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Portofolio developer adalah kumpulan hasil karya digital. Inilah produk riil yang telah digunakan sepenuhnya untuk user. Bukanlah skripsi, tesis, atau&nbsp;<i>dummy</i>/purwarupa /<i>prototype.&nbsp;</i>Karya ini membuktikan bahwa kamu tak hanya punya skill, melainkan juga pengalaman teruji. Semakin tinggi kualitas dan kuantitas karya dalam portofoliomu, semakin besar kesempatanmu berkarir di perusahaan ternama.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Awalnya Ahmad tak punya portofolio sendiri. Untuk itulah Ahmad ikuti&nbsp;<a href=\"https://www.dicoding.com/academies/51\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(217, 83, 79); transition: all 0.2s linear 0s;\">kelas Belajar Membuat Aplikasi Android untuk Pemula&nbsp;</a>di Dicoding. Di&nbsp;<em>submission</em>/tugas akhir kelas tsb, ia belajar membuat portofolio perdananya, yaitu “Udinus Mobile,” sebuah aplikasi untuk kampusnya sendiri.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Aplikasi tersebut merupakan&nbsp;<em>one stop solution</em>&nbsp;bagi Kartu Rencana Studi (KRS) siswa, transkrip nilai, hingga pembayaran biaya kuliah. Karena tak ada database, ia menggunakan teknik&nbsp;<i>scrapping</i>&nbsp;untuk membuat app tsb. Ternyata berhasil! “Senang banget saat tahu karya saya diapresiasi, terutama sama teman-teman sendiri yang merasa&nbsp; terbaru!” seru Ahmad yang kala itu masih duduk di semester 5.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\"><b style=\"font-weight: bold;\">#2 Ikuti Program Magang</b></p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Belakangan, portofolio perdananya mengantarkannya pada kesempatan&nbsp;<a href=\"https://pintek.id/blog/program-magang-mahasiswa-bersertifikat/\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(217, 83, 79); transition: all 0.2s linear 0s;\">Program Magang Mahasiswa Bersertifikat</a>. PMMB merupakan inisiatif forum Human Capital Indonesia (FHCI) guna mencetak SDM yang memiliki daya saing secara global.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Sebagai&nbsp;<i>link &amp; match&nbsp;</i>antara perguruan tinggi dan sektor industri, magang menjadi bekal berharga agar mahasiswa siap hadapi tantangan kerja di dunia industri yang sebenarnya.&nbsp;Untuk mendapatkan slot dalam program PMMB, Ahmad mengikuti tes rekrutmen yang terkenal sulit. Ia senang akhirnya bisa lolos kesempatan magang bersertifikat industri selama 6 (enam) bulan.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Selama Februari – Agustus 2020 Ahmad pun menjalani program magang penuh waktunya di PTPN IX sebagai mobile developer. Ia ditantang membuat sebuah aplikasi presensi dengan facial recognition dan GPS untuk absen para planter alias pegawai perkebunan milik perusahaan. App ini unik karena didesain untuk bisa berfungsi pada kondisi offline. Ahmad mendesainnya agar cocok digunakan para pegawai perkebunan yang bertugas di lapangan dan minim internet stabil.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Setelah 1&nbsp; bulan proyek dan pengujian lapangan, akhirnya PTPN IX memutuskan menggunakan app in-house baru buatan Ahmad. Perusahaan jadi hemat 22 juta rupiah per bulan karena tak perlu lagi app dari vendor software house alias pihak ketiga.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Di akhir masa magang 6 bulannya pada Agustus 2020, tak hanya app tersebut yang ia hasilkan, melainkan juga sistem report (flutter), sistem manajemen risiko, aplikasi pencatatan sistem tebang – muat – angkut komoditi perkebunan, serta dashboard online.<br></p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Tak heran, ketekunan Ahmad berbuah manis. Ia diganjar dengan pinangan 2 perusahaan padanya sebagai developer. Ahmad yang kini masih mengerjakan skripsi pun memilih tawaran kerja dari PTPN IX.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Menyambi antara kuliah dan magang full time total 14 jam per hari, Ahmad mengaku kekuatan terbesar bersumber dari orang tua dan istrinya yang selalu mendukungnya. Meski letih, kehadiran putra 6 bulannya selalu jadi penyemangat.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\"><b style=\"font-weight: bold;\">#3 Belajar Programming yang Cepat dan Terstuktur</b></p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Melihat ke belakang, tak mungkin ia meraih ini semua tanpa meningkatkan skill diri sebagai developer. Member Dicoding sejak Februari 2017 ini terbukti seorang pembelajar cepat di&nbsp;<a href=\"https://www.dicoding.com/learningpaths\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(217, 83, 79); transition: all 0.2s linear 0s;\">Dicoding Academy.</a>&nbsp;Dalam 2 bulan berlangganan, ia telah meluluskan belasan kelas di alur belajar Android, iOS, dan Flutter. “Pengalaman magang saya di BUMN menuntut saya untuk bisa banyak hal,” ujar Ahmad.</p>', '0000-00-00'),
(46, 3, 'Pengumuman Beasiswa LINE Developer Academy 2020', 'pengumuman-beasiswa-line-developer-academy-2020', '846-instagram_post___1.png', '<p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Dengan bangga berikut ini kami umumkan nama-nama penerima Beasiswa LINE Developer Academy 2020. Cek tautan berikut ini:&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\"><a href=\"http://bit.ly/PenerimaBeasiswaLINEAcademy\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(217, 83, 79); transition: all 0.2s linear 0s;\">bit.ly/PenerimaBeasiswaLINEAcademy</a></p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Selamat kepada peserta terpilih! Manfaatkan kesempatan ini sebaik-baiknya untuk membuat portofolio-mu untuk karir masa depan.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Program Beasiswa LINE Developer Academy 2020 merupakan kelanjutan dari program sama tahun lalu di mana LINE&nbsp; bekerja sama dengan Dicoding untuk memberikan beasiswa kelas LINE Front-end Framework (LIFF) dan LINE Chatbot untuk developer di Indonesia.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">LINE Developer Academy adalah program pengembangan talenta digital Indonesia yang hadir sejak 2019. Program ini menitikberatkan pada developer yang aktif mengembangkan platform LINE yang duduk di urutan ke-5 media sosial yang paling sering digunakan masyarakat Indonesia (laporan&nbsp;<i>We Are Social</i>, Februari 2020).</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Jika kamu belum beruntung mendapatkan beasiswa ini, jangan berkecil hati ya! Nantikan program menarik lainnya dari Dicoding dan mitra kami.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Untukmu yang terpilih, manfaatkan kesempatan belajar senilai jutaan rupiah ini dengan sebaik-baiknya.&nbsp;</p>', '0000-00-00'),
(47, 3, 'Pengumuman Beasiswa LINE Developer Academy 2022', 'pengumuman-beasiswa-line-developer-academy-2022', '183-instagram_post___1.png', '<p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Dengan bangga berikut ini kami umumkan nama-nama penerima Beasiswa LINE Developer Academy 2020. Cek tautan berikut ini:&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\"><a href=\"http://bit.ly/PenerimaBeasiswaLINEAcademy\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(217, 83, 79); transition: all 0.2s linear 0s;\">bit.ly/PenerimaBeasiswaLINEAcademy</a></p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Selamat kepada peserta terpilih! Manfaatkan kesempatan ini sebaik-baiknya untuk membuat portofolio-mu untuk karir masa depan.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Program Beasiswa LINE Developer Academy 2020 merupakan kelanjutan dari program sama tahun lalu di mana LINE&nbsp; bekerja sama dengan Dicoding untuk memberikan beasiswa kelas LINE Front-end Framework (LIFF) dan LINE Chatbot untuk developer di Indonesia.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">LINE Developer Academy adalah program pengembangan talenta digital Indonesia yang hadir sejak 2019. Program ini menitikberatkan pada developer yang aktif mengembangkan platform LINE yang duduk di urutan ke-5 media sosial yang paling sering digunakan masyarakat Indonesia (laporan&nbsp;<i>We Are Social</i>, Februari 2020).</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Jika kamu belum beruntung mendapatkan beasiswa ini, jangan berkecil hati ya! Nantikan program menarik lainnya dari Dicoding dan mitra kami.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Untukmu yang terpilih, manfaatkan kesempatan belajar senilai jutaan rupiah ini dengan sebaik-baiknya.&nbsp;</p>', '0000-00-00'),
(48, 3, 'Pengumuman Beasiswa LINE Developer Academy 2030', 'pengumuman-beasiswa-line-developer-academy-2030', '315-instagram_post___1.png', '<p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Dengan bangga berikut ini kami umumkan nama-nama penerima Beasiswa LINE Developer Academy 2020. Cek tautan berikut ini:&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\"><a href=\"http://bit.ly/PenerimaBeasiswaLINEAcademy\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(217, 83, 79); transition: all 0.2s linear 0s;\">bit.ly/PenerimaBeasiswaLINEAcademy</a></p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Selamat kepada peserta terpilih! Manfaatkan kesempatan ini sebaik-baiknya untuk membuat portofolio-mu untuk karir masa depan.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Program Beasiswa LINE Developer Academy 2020 merupakan kelanjutan dari program sama tahun lalu di mana LINE&nbsp; bekerja sama dengan Dicoding untuk memberikan beasiswa kelas LINE Front-end Framework (LIFF) dan LINE Chatbot untuk developer di Indonesia.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">LINE Developer Academy adalah program pengembangan talenta digital Indonesia yang hadir sejak 2019. Program ini menitikberatkan pada developer yang aktif mengembangkan platform LINE yang duduk di urutan ke-5 media sosial yang paling sering digunakan masyarakat Indonesia (laporan&nbsp;<i>We Are Social</i>, Februari 2020).</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Jika kamu belum beruntung mendapatkan beasiswa ini, jangan berkecil hati ya! Nantikan program menarik lainnya dari Dicoding dan mitra kami.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; line-height: 1.6em; color: rgb(85, 85, 85); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px;\">Untukmu yang terpilih, manfaatkan kesempatan belajar senilai jutaan rupiah ini dengan sebaik-baiknya.&nbsp;</p>', '12-12-2020'),
(49, 3, 'Bisnis di Era 4.0', 'bisnis-di-era-4.0', '488-35663.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis varius nibh. Sed eget rutrum ex. Maecenas sit amet pretium mi. Maecenas consequat, odio sit amet varius finibus, eros libero vestibulum elit, at interdum dolor mi id turpis. Mauris a sem placerat, pretium mi sit amet, rhoncus mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris fringilla, neque sit amet bibendum egestas, ipsum ex ullamcorper lectus, ut pulvinar ex ligula sagittis nulla. Cras varius porta arcu quis auctor. Suspendisse a sodales sapien. Donec sit amet bibendum lorem. Mauris auctor turpis nibh, ac vestibulum enim dapibus at. Cras ut sapien tristique, elementum justo ut, tincidunt leo. Duis dapibus lacus justo, sit amet sagittis lorem vehicula in. Sed ultrices non purus vel viverra. Praesent id massa turpis.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">In rutrum at lorem ullamcorper posuere. Pellentesque in urna et ligula eleifend imperdiet. Praesent nec ligula bibendum velit pulvinar ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam venenatis et dolor consequat rutrum. Phasellus eu augue vel sapien laoreet pulvinar sit amet et dui. Donec fringilla nulla non sem viverra, eu rhoncus felis euismod. Phasellus congue quis orci eu auctor. Duis eget nibh eget nunc facilisis cursus nec vitae sapien. Integer sed elit ut elit vulputate posuere nec et libero. Maecenas eu diam quam. Maecenas interdum metus justo, vitae sodales lacus pharetra sit amet. Cras accumsan porttitor nibh, ac iaculis nulla dictum in. Aliquam vel pellentesque velit, a ornare magna. Duis commodo neque ut blandit volutpat.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Nam viverra mauris in turpis dapibus, rhoncus euismod diam suscipit. Vivamus a nibh ex. Mauris quis nisl metus. Praesent sit amet viverra tortor. Suspendisse purus nisi, ornare placerat maximus ut, scelerisque eget felis. Aliquam ut pretium odio, sed vehicula sapien. Etiam eu tincidunt ipsum. Curabitur pellentesque placerat libero, vitae sodales augue accumsan eu. Phasellus varius nisl eget mi viverra, sit amet pulvinar lectus vehicula. Sed leo orci, semper eu gravida eu, porttitor et dolor. Aliquam vehicula non ex ac feugiat. In aliquam convallis ligula sit amet imperdiet.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Cras molestie justo et lorem gravida, et facilisis quam lacinia. Cras augue massa, interdum id mi aliquet, elementum sollicitudin nisl. Nunc feugiat ante sem, a sollicitudin orci ullamcorper et. Donec commodo, est sodales fermentum auctor, erat turpis tincidunt tellus, vel pretium sapien felis sit amet tortor. Donec at mattis erat. Ut nec congue nisl. Pellentesque nec justo luctus, laoreet dui cursus, finibus ex. Praesent non sollicitudin nunc. Nullam eu malesuada ante, at congue urna. Phasellus vitae eros nec nisi fringilla volutpat. Morbi vitae risus diam. Vestibulum aliquet ultrices magna, vitae molestie mi aliquet et.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque interdum, arcu ut feugiat egestas, nisi ipsum maximus nisi, non auctor nisl ante vitae nibh. Quisque semper suscipit sem, vitae pellentesque justo ullamcorper ut. Quisque aliquam lacus nisi, vitae sollicitudin ipsum placerat ultrices. Fusce nibh nibh, pharetra ac auctor at, eleifend quis nisl. Vestibulum euismod interdum magna, ut hendrerit lorem auctor in. Vivamus at tortor at velit egestas posuere. Quisque tincidunt cursus sem vitae interdum. Aliquam sit amet lectus elit. Aliquam pharetra neque vel quam porta fermentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>', '13-12-2020'),
(50, 5, 'PMII JAYA', 'pmii-jaya', '283-sid-meier-s-civilization-vi-fantasy-art-artwork-statue-wallpaper-preview.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at facilisis arcu. Nam eleifend, massa id rutrum commodo, quam eros semper dui, id tincidunt ipsum urna et risus. Phasellus ex lorem, vehicula efficitur mauris non, vulputate maximus magna. Quisque in elementum est. Quisque facilisis enim in odio venenatis, sit amet consectetur est tempor. Phasellus rutrum venenatis varius. Integer aliquet, ex non maximus imperdiet, mi dolor volutpat purus, id dictum magna massa et risus. Proin egestas at lacus efficitur vulputate. Vestibulum aliquam, purus at auctor tempus, est nisi dignissim augue, sit amet bibendum enim massa sed lectus. Morbi egestas arcu ac massa volutpat, sed imperdiet nisl euismod. In viverra nibh eu purus posuere, ut sollicitudin tellus finibus. Nullam condimentum enim eu lacus bibendum, blandit laoreet sem mattis.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">In quis posuere leo. Morbi in diam nec ligula rutrum commodo ut ac velit. Sed facilisis, est vitae congue venenatis, purus mi aliquet orci, ut suscipit lectus justo tincidunt augue. Integer dictum viverra massa vel pulvinar. Aliquam ac accumsan neque, in vulputate turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer nec metus non arcu dapibus pharetra. Curabitur vitae placerat odio, ut pharetra mi. Etiam sagittis pharetra purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam tincidunt velit eget hendrerit blandit. Phasellus magna massa, gravida nec dolor non, sagittis hendrerit massa. Cras in elit a risus volutpat tempor. Donec commodo rhoncus faucibus. Maecenas vitae varius leo.</p>', '13-12-2020'),
(52, 3, 'Lukisan', 'lukisan', '179-35663.jpg', '<p><img src=\"https://asset-a.grid.id/crop/50x267:604x652/360x240/photo/2020/05/16/3552978988.jpg\" style=\"width: 360px;\"></p><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat lectus ac tempor. Integer tellus nunc, mollis eget nulla non, suscipit ultricies orci. Suspendisse iaculis purus enim, at consectetur quam bibendum eget. Sed nec tortor ac lacus sollicitudin ornare. Nullam vestibulum feugiat libero. In et ipsum sed diam facilisis finibus. Donec sit amet eros augue. In blandit mattis nisl, in tincidunt justo pellentesque ac. Nulla posuere rhoncus nisl, at porta lorem fermentum sit amet. Duis facilisis ut felis sed hendrerit. Vivamus id elit augue. Mauris ac faucibus nisi.</b></span></p><p><img src=\"https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/09/02/2571363274.jpg\" style=\"width: 700px;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></p><h1><b>WAW</b></h1>', '13-12-2020');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `file`) VALUES
(1, 'gambar-1.jpg'),
(2, 'gallery-2.jpg'),
(3, 'gallery-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kain`
--

CREATE TABLE `jenis_kain` (
  `id_jenis_kain` int(11) NOT NULL,
  `jenis_kain` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kain`
--

INSERT INTO `jenis_kain` (`id_jenis_kain`, `jenis_kain`) VALUES
(1, 'Kain Sutra'),
(2, 'Kain Katun'),
(3, 'Kain Mori'),
(4, 'Kain Paris'),
(5, 'Kain Flanel'),
(9, 'Kain Jeans');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id_jenis` int(11) NOT NULL,
  `jenis_produk` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis`, `jenis_produk`) VALUES
(1, 'Sepatu'),
(2, 'Batik Cap'),
(3, 'Batik Tulis'),
(4, 'Dompet Batik'),
(5, 'Batik Kain'),
(6, 'Kerajinan Tangan'),
(7, 'Kerajinan Tangan'),
(8, 'Kain Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_blog`
--

CREATE TABLE `kategori_blog` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_blog`
--

INSERT INTO `kategori_blog` (`id_kategori`, `kategori`) VALUES
(1, 'Tips & Trik'),
(2, 'Kesehatan'),
(3, 'Teknologi'),
(4, 'Agama'),
(5, 'Sosial'),
(6, 'Politik'),
(7, 'Budaya'),
(8, 'Olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `pesan`) VALUES
(1, 'Bintang Putera ', 'sangbintang917@gmail.com', 'EPICCC SEKALI'),
(2, 'Bintang Putera ', 'sangbintang917@gmail.com', 'EPICCC SEKALI'),
(3, 'Sang Bintang', 'sangbintang917@gmail.com', 'Websitenya bagus, informatif, dan sangat memudahkan sekali saat ingin memesan produk');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `ket_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `ket_level`) VALUES
(1, 'Admin'),
(2, 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `judul_portofolio` varchar(64) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `judul_portofolio`, `slug`, `thumbnail`, `deskripsi`, `created_at`) VALUES
(1, 'Sertifikat ', 'sertifikat-', '840-99caf340-7c25-4fad-8a09-b8ece9de9dfa.jpg', '<p>BAGUS</p>', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_jenis_kain` int(11) NOT NULL,
  `nama_produk` varchar(32) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_jenis`, `id_jenis_kain`, `nama_produk`, `slug`, `harga`, `deskripsi`, `thumbnail`) VALUES
(19, 1, 1, 'Sepatu Batik', 'sepatu-batik', 150000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum urna nisi, vestibulum at nunc vel, cursus consectetur lorem. Nullam vel massa eu ex fringilla vestibulum. Sed non neque non sapien ultricies fermentum et in nulla. Vestibulum pretium commodo orci, non ultricies est. Curabitur quis pellentesque ante, mattis vehicula sapien. Etiam vitae finibus risus, id ullamcorper arcu. Nam ex mauris, maximus vel elementum eget, mattis ut turpis. Donec sollicitudin erat in semper pretium. Suspendisse aliquet vel metus et vestibulum. Morbi vulputate non lacus ut tristique. Sed molestie nisl vel ex rhoncus ultricies. Mauris ut augue ut orci ultrices imperdiet in ut mauris. Donec quis fringilla dolor, sed imperdiet justo. Proin sodales, turpis a tempor fermentum, nisl dui fringilla justo, non pretium velit orci non nisl.', '874-3e2a8d29878e5e57215658768bb480b9.jpg'),
(20, 4, 1, 'Dompet Batik', 'dompet-batik', 50000, 'Dompet Apik', '305-f0588ff8600843a4695d40a88420c4eb.jpg'),
(21, 3, 1, 'Baju Batik Motif Kembang', 'baju-batik-motif-kembang', 150000, 'Baju batik bagus sekali', '263-50051952_312764266248007_8512068997220069830_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider_gallery`
--

CREATE TABLE `slider_gallery` (
  `id_slider_gallery` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `title` varchar(24) NOT NULL,
  `sub_title` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_gallery`
--

INSERT INTO `slider_gallery` (`id_slider_gallery`, `file`, `title`, `sub_title`) VALUES
(1, '615-slide1.jpg', 'Ida Batik ', 'Sanggar  yang berdomisili di Bondowoso'),
(2, '198-thumbnail_2.jpg', 'Judul Hal 2', 'Sub Judul hal 2'),
(3, '564-slide3.jpg', 'Judul Hal 3', 'Sub Judul hal 3');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(1) NOT NULL,
  `tentang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `tentang`) VALUES
(1, '<p><span style=\"color: rgb(99, 99, 99); font-family: Muli, sans-serif;\">Ida Batik Bondowoso adalah sanggar batik bagus yang berdiri pada tahun 2013. Sanggar Ida Batik pertama dikelola secara berkelompok yang beranggotakan 4 orang, tetapi ibu Ida mengundurkan diri dan memutuskan untuk mengembangkan usaha sanggar batik sendiri. Saat ini sanggar ida batik memiliki 8 karyawan.&nbsp;</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_level`, `username`, `password`) VALUES
(1, 1, 'bintangpoetra', 'bintang123'),
(2, 2, 'Ida Batik', 'idabatik123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `jenis_kain`
--
ALTER TABLE `jenis_kain`
  ADD PRIMARY KEY (`id_jenis_kain`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori_blog`
--
ALTER TABLE `kategori_blog`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `slider_gallery`
--
ALTER TABLE `slider_gallery`
  ADD PRIMARY KEY (`id_slider_gallery`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_kain`
--
ALTER TABLE `jenis_kain`
  MODIFY `id_jenis_kain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori_blog`
--
ALTER TABLE `kategori_blog`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `slider_gallery`
--
ALTER TABLE `slider_gallery`
  MODIFY `id_slider_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_blog` (`id_kategori`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_produk` (`id_jenis`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
