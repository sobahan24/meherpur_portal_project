-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2023 at 04:09 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meherpur_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `chairmen`
--

CREATE TABLE `chairmen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `padobi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `union` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upzila` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chairmen`
--

INSERT INTO `chairmen` (`id`, `name`, `padobi`, `union`, `upzila`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'মোঃ সেলিম রেজা', 'চেয়ারম্যান', 'কুতুবপুর', 'মুজিবনগর', '01733539275', 1, '2023-05-18 09:01:00', '2023-05-18 09:01:54'),
(2, 'মোঃ শাহ্ জামান', 'চেয়ারম্যান', 'বুড়িপোতা', 'মেহেরপুর সদর', '0179223865052', 1, '2023-05-18 09:01:37', '2023-05-18 09:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `famous_people`
--

CREATE TABLE `famous_people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dieDay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `famous_people`
--

INSERT INTO `famous_people` (`id`, `name`, `birthday`, `dieDay`, `details`, `status`, `created_at`, `updated_at`) VALUES
(4, 'মোহাম্মদ ছহিউদ্দিন বিশ্বাস', '১৯২৬খ্রিঃ', '২১মার্চ, ১৯৯০', 'তিনি ১৯২৬খ্রি. নদিয়া জেলার অন্তর্গত মেহেরপুর মহকুমার লালবাজার গ্রামে জন্মগ্রহণ করেন। তাঁর পিতার নাম মোহাম্মদ ইয়াকুব হোসেন বিশ্বাস এবং মাতার নাম মোছাম্মাৎ ছামছুন নেছা। তিনি চুয়াডাঙ্গা ভি.জে. হাইস্কুল থেকে ম্যাট্রিকুলেশন পাশ করেন। এরপর কৃষ্ণনগর ও রাজশাহী সরকারি কলেজে পড়াশুনা করেন। ১৯৫০খ্রি. পর্যন্ত তিনি ছাত্রলীগের সঙ্গে যুক্ত ছিলেন। তিনি ১৯৫১খ্রি. তদানীন্তন মেহেরপুর মহকুমা আওয়ামী লীগ প্রতিষ্ঠা করেন। ১৯৫১-৫৮খ্রি. ও ১৯৬৪-৬৮খ্রি. তিনি মহকুমা আওয়ামী লীগের সাধারন সম্পাদক এবং কুষ্টিয়া জেলা আওয়ামী লীগের সহ-সম্পাদক এবং পরে সহ-সভাপতি ছিলেন। ১৯৬৯খ্রি.- ১৯৯০খ্রি.(মৃত্যু) পর্যন্ত জনাব ছহিউদ্দিন মেহেরপুর আওয়ামী লীগের সভাপতি ছিলেন। ১৯৫২ সালের ভাষা আন্দোলন এবং পরবর্তীকালে অন্যান্য গণ-আন্দোলনে তিনি সক্রিয় অংশগ্রহণ করেন। ১৯৭০খ্রি. তিনি তৎকালীন জাতীয় পরিষদের সদস্য নির্বাচিত হন। স্বাধীনতা সংগ্রামে তিনি বিশেষ সক্রিয় ভূমিকা নেন। তিনি মুজিবনগরে অভ্যর্থনা শিবির এবং গেরিলা শিবির প্রতিষ্ঠা ও পরিচালনা করেন। তিনি ৮নম্বর সেক্টরে “৩” সি কোম্পানীর রাজনৈতিক উপদেষ্টা ছিলেন। ১৯৭২-৭৩খ্রি. জনাব ছহিউদ্দিন মেহেরপুর মহকুমা সাহায্য ও পূনর্বাসন কমিটি এবং রেডক্রসের চেয়ারম্যান ছিলেন। ১৯৭২খ্রি থেকে ১৯৭৫খ্রি. মে মাস পর্যন্ত তিনি মেহেরপুর মহাবিদ্যালয় গভর্নিং বডির চেয়ারম্যান ছিলেন। তিনি বহুদিন মেহেরপুর মহকুমা প্রাথমিক শিক্ষক সমিতির সভাপতি এবং ১৯৫৮-৬৫ খ্রি. মেহেরপুর পৌরসভার চেয়ারম্যান ও কমিশনার ছিলেন। তিনি দীর্ঘদিন মেহেরপুর ব্যবসায়ী সমিতির সম্পাদক ও বড়বাজার মসজিদ কমিটির চেয়াম্যান ছিলেন। এছাড়া বিভিন্ন সমাজকল্যাণ প্রতিষ্ঠানের সাথেও যুক্ত ছিলেন। তিনি ১৯৭০খ্রি. , ১৯৭৩ খ্রি., ও ১৯৮৬খ্রি. নৌকা প্রতীকে আওয়ামী লীগের মনোনীত প্রার্থী হিসাবে জাতীয় নির্বাচনে জয়লাভ করেন এবং আমৃত্যু আওয়ামী লীগের সক্রিয় রাজনীতির সাথে যুক্ত ছিলেন। তিনি ১৯৭৫খ্রি. বঙ্গবন্ধু ঘোষিত মহেরপুর জেলার গভর্ণর মনোনীত হন। তিনি ২১মার্চ ১৯৯০খ্রি. মেহেরপুর নিজ বাসভবনে মৃত্যুবরণ করেন।', 1, '2023-05-18 08:43:14', '2023-05-18 08:43:41'),
(5, 'আ.ক.ম. ইদ্রীস আলী', '-', '২৮ মার্চ, ২০০০', '১৯৭১ সালে স্বাধীনতা আন্দোলনের অন্যতম নেতা ও মুজিবনগর ডিগ্রী কলেজের প্রতিষ্ঠাতা ছিলেন।', 1, '2023-05-18 08:44:24', '2023-05-18 08:44:42'),
(6, 'সাধক আতাহার সাহ', '১৯৪৬খ্রিঃ', '১৯৯৯খ্রিঃ', 'তিনি একজন মরমী সাধক এবং পেশাগত জীবনে তিনি একজন মাদ্রাসার শিক্ষক ছিলেন।', 0, '2023-05-18 08:45:51', '2023-05-18 08:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `hat_bazars`
--

CREATE TABLE `hat_bazars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayoton` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chandinaViti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijara` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biboron` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hat_bazars`
--

INSERT INTO `hat_bazars` (`id`, `name`, `ayoton`, `chandinaViti`, `ijara`, `address`, `biboron`, `status`, `created_at`, `updated_at`) VALUES
(1, 'পৌর পশু হাট', '1000', '2', '৫৫,৫২,০০০/-', 'বড়বাজার,মেহেরপুর।', 'বড়বাজার,মেহেরপুর। বড়বাজার,মেহেরপুর।বড়বাজার,মেহেরপুর।বড়বাজার,মেহেরপুর।বড়বাজার,মেহেরপুর।', 1, '2023-05-18 08:55:52', '2023-05-18 08:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_abashans`
--

CREATE TABLE `hotel_abashans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownerName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abashanDharon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biboron` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_abashans`
--

INSERT INTO `hotel_abashans` (`id`, `name`, `ownerName`, `address`, `mobile`, `abashanDharon`, `biboron`, `status`, `created_at`, `updated_at`) VALUES
(3, 'জেলা পরিষদ ডাকবাংলো', 'জেলা পরিষদ, মেহেরপুর', 'মেহেরপুর সদর, মেহেরপুর।', '০১৭০৮ ৪১০০০৫', 'সরকারী', 'জেলা পরিষদ ডাকবাংলো জেলা পরিষদ ডাকবাংলো জেলা পরিষদ ডাকবাংলো', 1, '2023-05-18 08:53:04', '2023-05-18 08:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_14_073015_alter_users_table', 2),
(6, '2023_05_15_050600_create_tourist_spots_table', 3),
(7, '2023_05_16_050852_create_famous_people_table', 4),
(8, '2023_05_16_094917_create_muktizoddhas_table', 4),
(9, '2023_05_17_064611_create_hotel_abashans_table', 5),
(10, '2023_05_17_102102_create_hat_bazars_table', 5),
(11, '2023_05_17_152854_create_protinidhis_table', 6),
(12, '2023_05_17_162905_create_chairmen_table', 7),
(13, '2023_05_17_174202_create_up_sashibs_table', 8),
(14, '2023_05_18_045633_create_uddoktas_table', 9),
(15, '2023_05_18_071503_create_zila_prosasoks_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `muktizoddhas`
--

CREATE TABLE `muktizoddhas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fatherName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motherName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upozila` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zila` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Meherpur',
  `biboron` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `muktizoddhas`
--

INSERT INTO `muktizoddhas` (`id`, `name`, `fatherName`, `motherName`, `gram`, `upozila`, `zila`, `biboron`, `status`, `created_at`, `updated_at`) VALUES
(1, 'খোন্দকার আবদুর রশিদ', 'পিতা: ড. আবদুর রহমান খন্দকার', 'মোছাঃ রহিমা বেগম', 'বামনপাড়া', 'মুজিবনগর', 'মেহেরপুর', 'মেহেরপুরের মহকুমা প্রশাসকের কার্যালয়ে প্রথম কন্ট্রোলরুম স্থাপন করা হয়।', 1, '2023-05-18 08:49:12', '2023-05-18 08:49:47'),
(2, 'মোঃ ফজলুর রহমান', 'পিতা: নাসির উদ্দিন', 'মোছাঃ রহিমা বেগম', 'স্টেডিয়ামপাড়া', 'গাংনী', 'মেহেরপুর', '১০ই এপ্রিল গণপ্রজাতন্ত্রী বাংলাদেশ সরকার গঠনের পর কলকাতায় প্রবাসী সরকার ভারতীয় সরকারের সহযোগিতায় সিদ্ধান্ত গ্রহণ করেন যে', 1, '2023-05-18 08:51:02', '2023-05-18 08:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `protinidhis`
--

CREATE TABLE `protinidhis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `padobi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `protinidhis`
--

INSERT INTO `protinidhis` (`id`, `name`, `padobi`, `email`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'অধ্যাপক ফরহাদ হোসেন', 'সংসদ সদস্য(মেহেরপুর সদর ও মুজিবনগর) এবং মাননীয় জনপ্রশাসন প্রতিমন্ত্রী', 'Meherpur.1@parliament.gov.bd', '017938650352', 1, '2023-05-18 08:58:22', '2023-05-18 08:59:43'),
(2, 'মোঃ সাহিদুজ্জামান খোকন', 'সংসদ সদস্য(গাংনী)', 'Meherpur.2@parliament.gov.b', '017938605052', 1, '2023-05-18 08:59:26', '2023-05-18 08:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `tourist_spots`
--

CREATE TABLE `tourist_spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biboron` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `abashan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thikana` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tourist_spots`
--

INSERT INTO `tourist_spots` (`id`, `name`, `image`, `biboron`, `abashan`, `thikana`, `status`, `created_at`, `updated_at`) VALUES
(3, 'মুজিবনগর মুক্তিযুদ্ধ স্মৃতি কমপ্লেক্স এবং আম্রকানন', '1684420665.jpg', 'বাংলাদেশের প্রথম অস্থায়ী সরকার এর শপথ গ্রহণের স্থান হিসেবে মুজিবনগর ঐতিহাসিকভাবে অত্যান্ত গুরুত্বপূর্ণ স্থান। শপথ গ্রহণের  স্মৃতিকে অম্লান করে ধরে রাখার উদ্দেশ্যে শপথগ্রহণের স্থানে একটি স্মৃতিসৌধ নির্মাণ করা হয়েছে। ঐতিহাসিকভাবে গুরুত্বপূর্ণ এ স্থানের আরও তাৎপর্যপূর্ণ করে তোলার লক্ষ্যে উক্ত কমপ্লেক্সে একটি মানচিত্রের মাধ্যমে মুক্তিযুদ্ধের বিভিন্ন সেক্টরকে দেখানো  হয়েছে। এই কমপ্লেক্স মুক্তিযুদ্ধের ঘটনাবলীর স্মারক ম্যূরাল স্থাপন করা হয়েছে। সার্বিকভাবে মুজিবনগর স্মৃতিসৌধ, মুক্তিযুদ্ধ স্মৃতি কমপ্লেক্স, ঐতিহাসিক  আম্রকানন, ঐতিহাসিক ছয় দফার রূপক উপস্থাপনকারী ছয় ধাপের গোলাপ বাগান বাংলাদেশের মুক্তিযুদ্ধের এক জীবন্ত প্রদর্শন হিসাবে বিবেচিত হবার দাবী  রাখে। মুক্তিযুদ্ধ স্মৃতি কমপ্লেক্সের ভিতরের অংশে মুক্তিযুদ্ধকালীন কিছু ঐতিহাসিক ঘটনার ভাস্কর্য স্থাপন করা হয়েছে। স্মৃতি কমপ্লেক্সের বাইরের অংশে বঙ্গবন্ধুর  ঐতিহাসিক ৭ই মার্চের ভাষণ, মুজিবনগর সরকারের শপথ গ্রহণ এবং পাকিস্থানি বাহিনীর আত্নসমর্পণ এর দৃশ্যসহ আরও ঐতিহাসিক ঘটনার ভাস্কর্য স্থাপন করা  হয়েছে। উক্ত ভাস্কর্যগুলির কয়েকটি এখানে দেওয়া হলো। মুক্তিযুদ্ধের স্মৃতিবিজড়িত উক্ত ভাস্কর্যগুলি যেকোন বিদগ্ধ পর্যটককে আকর্ষণ করবে। মুক্তিযুদ্ধকালীন বিভিন্ন সেক্টরের অবস্থান বাংলাদেশের মানচিত্রে প্রদর্শন করে মানচিত্রটি মুক্তিযুদ্ধ স্মৃতি কমপ্লেক্সের অভ্যন্তরস্থ মূল আঙ্গিনায় স্থাপন করা হয়েছে।  সুদৃশ্য এ মানচিত্রটি মুক্তযুদ্ধকালীন বিভিন্ন সেক্টরের অবস্থান ও উল্লেখযোগ্য ঘটনাবলী সম্পর্কিত এক প্রমাণ্যচিত্র।', 'মুজিবনগর মুক্তিযুদ্ধ স্মৃতি কমপ্লেক্সে বাংলাদেশ পর্যটন করপোর্রেশনের হোটেলে আবাসনের সুব্যবস্থা আছে। এ ছাড়া জেলা পরিষদের স্থাপিত  ডাকবাংলোয় ৩টি ভিআই পি কক্ষে আবাসনের ব্যবস্থা আছে। মেহেরপুর জেলা সদরে সার্কিট হাউজ, পৌর হল এবং ফিনটাওয়ারসহ অন্যান্য আবাসিক হোটেলে  আবাসনের সুব্যবস্থা রয়েছে।', 'মেহেরপুর জেলা সদর থেকে সড়ক পথে আম্রকাননের দূরত্ব ১৮ কি: মি:। বাস, স্থানীয় যান টেম্পু/লছিমন/করিমন এর সাহায্যে ৩০ মি: সময়ে ঐতিহাসিক আম্রকাননে পৌছানো যায়। যাতায়াত ভাড়া : মেহেরপুর সদর হতে বাস ভাড়া ২৫-৩০ টাকা ।', 1, '2023-05-18 08:37:46', '2023-05-18 08:39:56'),
(4, 'মেহেরপুর শহীদ স্মৃতিসৌধ', '1684420750.jpg', '১৯৭১ সালে যে সব বীর মুক্তিযোদ্ধা এবং যাঁরা পাকিস্থানি সৈনিদের হাতে নির্মমভাবে নিহত হয়েছে তাঁদের স্মৃতি রক্ষার্থে মেহেরপুর পৌর কবরস্থানের পাশে একটি স্মৃতিসৌধ নির্মাণ করা হয়েছে। এখানে প্রতি বছর মহান স্বাধীনতা ও বিজয় দিবসে মাল্যদান করে তাঁদের শ্রদ্ধা ভরে স্মরণ করা হয়ে থাকে।', 'মেহেরপুর জেলা সদরে সার্কিট হাউজ, পৌর হল, ফিনটাওয়ার আবাসিক হোটেল, মিতা আবাসিক হোটেল, কামাল আবাসিক হোটেলে আবাসন ব্যবস্থা রয়েছে।', 'মেহেরপুর জেলা সদরে এটি অবস্থিত। বাস টার্মিনাল হতে রিক্সা/ভানে পৌঁছানো যায়', 1, '2023-05-18 08:39:10', '2023-05-18 08:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `uddoktas`
--

CREATE TABLE `uddoktas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `padobi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `union` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upzila` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uddoktas`
--

INSERT INTO `uddoktas` (`id`, `name`, `padobi`, `union`, `upzila`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'জনাব মিনারুল ইসলাম', 'উদ্যোক্তা', 'মহাজনপুর ইউনিয়ন ডিজিটাল সেণ্টার', 'মুজিবনগর', '0179386522052', 1, '2023-05-18 09:05:33', '2023-05-18 09:05:54'),
(2, 'জনাব মোঃ আশরাফুল ইসলাম', 'উদ্যোক্তা', 'দারিয়াপুর ইউনিয়ন ডিজিটাল সেণ্টার', 'মেহেরপুর সদর', '0179386335052', 1, '2023-05-18 09:09:40', '2023-05-18 09:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `up_sashibs`
--

CREATE TABLE `up_sashibs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `padobi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `union` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upzila` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `up_sashibs`
--

INSERT INTO `up_sashibs` (`id`, `name`, `padobi`, `union`, `upzila`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'শেখ আঃ হামিদ', 'সচিব', 'কুতুবপুর', 'মেহেরপুর সদর', '0179386505211', 1, '2023-05-18 09:03:08', '2023-05-18 09:03:25'),
(2, 'মোঃ সানোয়ার হোসেন', 'সচিব', 'বুড়িপোতা', 'মেহেরপুর সদর', '01793833365052', 1, '2023-05-18 09:04:03', '2023-05-18 09:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `email`, `phone`, `email_verified_at`, `password`, `role_as`, `remember_token`, `created_at`, `updated_at`, `address1`, `address2`, `city`, `state`, `country`, `zip`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, NULL, '$2y$10$0qhI.gK52S.W6/BEhvPH6uCWxrzk69uDYja/Wtz9FW9YJJaTKNhru', 1, NULL, '2023-05-13 14:01:18', '2023-05-14 10:45:50', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'user1', NULL, 'user1@gmail.com', NULL, NULL, '$2y$10$8v5iINes7TM9cS3BQuLAPe01pq4XbdpyFVWyAVLDQFZfW.dYtZB1S', 0, NULL, '2023-05-13 14:02:11', '2023-05-14 11:23:26', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zila_prosasoks`
--

CREATE TABLE `zila_prosasoks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `padobi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faxOffice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faxHome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kormokal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barta` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zila_prosasoks`
--

INSERT INTO `zila_prosasoks` (`id`, `name`, `padobi`, `image`, `mobile`, `phone`, `email`, `faxOffice`, `faxHome`, `batch`, `kormokal`, `barta`, `status`, `created_at`, `updated_at`) VALUES
(2, 'মোহাম্মদ আনোয়ার হোসেন', 'জেলা প্রশাসক', '1684422735.png', '01793865052', '01793865052', 'guest@gmail.com', '11111', '11222', '22', '২০/০৫/২০১৮ হতে০৯/১০/২০১৮', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, '2023-05-18 09:12:15', '2023-05-18 09:12:33'),
(3, 'জনাব মোহাম্মদ আজিজুল ইসলাম', 'জেলা প্রশাসক', '1684422912.png', '0179386505222', '11111111111', 'guest@gmail.com', '222222222222', '333333333', '12', '2023-04-03 --', 'হাজার বছর ধরে বাঙ্গালী স্বপ্ন দেখেছে সুখী, সমৃদ্ধ সোনার বাংলার। শত বছরের বিজাতি বিভাষীর শাসন শোষণে, বাঙ্গালীর সেই স্বপ্ন অধরা থেকে গেছে যুগের পর যুগ। সোনার বাংলার সেই স্বপ্ন পূরণে পরাধীনতার শৃংখল ভেঙ্গে বীর বাঙ্গালী একাত্তরে স্বাধীন বাংলাদেশের প্রথম সরকার গঠন করেছিল মেহেরপুরের ঐতিহাহিসক মুজিবনগরের আম্রকাননে।‘মুজিবনগর সরকার’-এর স্মৃতিধন্য মেহেরপুর জেলার ইতিহাস, ঐতিহ্য, সংস্কৃতি, মাটি ও মানুষের তথ্য ‘জেলা তথ্য বাতায়ন’-এ উপস্থাপন করা হয়েছে। সহস্রাব্দের উন্নয়ন লক্ষ্যমাত্রা অর্জন, রূপকল্প-২০২১ বাস্তবায়নে জেলা  তথ্য বাতায়নের মাধ্যমে সমগ্র জেলার তথ্যকে ডিজিটাল পদ্ধতিতে প্রকাশ করার সুযোগ গ্রহণ করা হয়েছে।প্রাচীনকাল থেকেই ইতিহাসের নানা ঘটনাবলীর সাক্ষী মেহেরপুর তার স্বাতন্ত্র ও ঐতিহ্যকে লালন করে মেহেরপুরের আজকের অবয়ব গড়ে তুলেছে।মেহেরপুরের সমৃদ্ধ কৃষিজাত দ্রব্য মেহেরপুরের মানুষকে পুষ্ট করার পাশাপাশি দেশের বিভিন্ন অঞ্চলে কাঁচামালের যোগান দিচ্ছে। এখানকার দিগন্ত বিস্তৃত সবুজের সমারোহ, ‘মুজিবনগর কমপ্লেক্স’-এ ইতিহাসের বর্ণাঢ্য উপস্থাপন, নীলকুঠীর স্থাপত্য পর্যটকদের কাছে টানার ক্ষমতা রাখে। স্বাধীনতার স্মৃতি জাগানিয়া মুজিবনগর কমপ্লেক্স নব প্রজন্মকে মুক্তিযুদ্ধের চেতনায় ঋদ্ধ করায় অবশ্য দ্রষ্টব্য একটি নির্মাণ।যে কোন উন্নয়ন পরিকল্পনায় প্রয়োজন তথ্যের সঠিক সরবরাহ। ‘জেলা তথ্য বাতায়ন’ মেহেরপুরের তথ্য সরবরাহের পাশাপাশি মেহেরপুরের মাটি-মানুষ, ইতিহাস-ঐতিহ্য, ভাষা-সংস্কৃতি সম্পর্কে ধারণা দেবে, সোনার বাংলার স্বপ্ন বাস্তবায়নে ধর্মবর্ণ শ্রেণী নির্বিশেষে সকলকে আত্মবিশ্বাসী করবে । ডিজিটাল বাংলাদেশ গড়ার যাত্রাপথে ‘জেলা তথ্য বাতায়ন’ আমাদের এগিয়ে যাবার অনুপ্রেরণা যোগাবে বলে আমার বিশ্বাস।', 1, '2023-05-18 09:15:12', '2023-05-18 09:15:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chairmen`
--
ALTER TABLE `chairmen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `famous_people`
--
ALTER TABLE `famous_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hat_bazars`
--
ALTER TABLE `hat_bazars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_abashans`
--
ALTER TABLE `hotel_abashans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muktizoddhas`
--
ALTER TABLE `muktizoddhas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `protinidhis`
--
ALTER TABLE `protinidhis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uddoktas`
--
ALTER TABLE `uddoktas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `up_sashibs`
--
ALTER TABLE `up_sashibs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zila_prosasoks`
--
ALTER TABLE `zila_prosasoks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chairmen`
--
ALTER TABLE `chairmen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `famous_people`
--
ALTER TABLE `famous_people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hat_bazars`
--
ALTER TABLE `hat_bazars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel_abashans`
--
ALTER TABLE `hotel_abashans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `muktizoddhas`
--
ALTER TABLE `muktizoddhas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `protinidhis`
--
ALTER TABLE `protinidhis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uddoktas`
--
ALTER TABLE `uddoktas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `up_sashibs`
--
ALTER TABLE `up_sashibs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zila_prosasoks`
--
ALTER TABLE `zila_prosasoks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
