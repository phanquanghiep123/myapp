-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2018 at 04:41 AM
-- Server version: 5.7.22
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `duties`
--

CREATE TABLE `duties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `duty_code` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `vacancies` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `prison_id` bigint(20) UNSIGNED NOT NULL,
  `duty_type_id` bigint(20) UNSIGNED NOT NULL,
  `location_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_street` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_city` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_town` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_postcode` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prisoner_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_info` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `duties`
--

INSERT INTO `duties` (`id`, `duty_code`, `date`, `start_time`, `end_time`, `vacancies`, `created_by`, `prison_id`, `duty_type_id`, `location_name`, `location_street`, `location_city`, `location_town`, `location_postcode`, `prisoner_name`, `extra_info`, `notes`, `status`, `created_at`, `updated_at`) VALUES
(1, '0253799984918', '2018-04-27 10:31:32', '2018-04-27 10:31:32', '2018-04-28 09:31:32', 'deserunt ut', 1, 1, 7, 'magni voluptates', '9785 Spencer Trail', 'North Shirley', 'ville', '96821', 'doloribus ullam', 'Quod et et qui neque. Velit esse dolor ipsa. Beatae ab laudantium cupiditate earum laudantium a. Velit dicta sed numquam qui vel voluptas ex.', 'Dolor inventore in velit ducimus doloremque voluptatibus. Qui eos quae ducimus unde sed ut. Quidem voluptas non at.', 1, '2018-04-28 02:31:32', '2018-04-28 02:31:32'),
(2, '7297246286562', '2018-04-27 10:31:33', '2018-04-27 10:31:33', '2018-04-29 06:31:33', 'deserunt quia', 1, 8, 4, 'dolores quia', '460 Satterfield Grove Suite 789', 'Jadenmouth', 'berg', '33551-4648', 'ut dolores', 'Voluptas magnam vel beatae natus et culpa porro et. Dolore ipsa voluptas incidunt aperiam. Unde earum consequatur inventore sit accusamus dolor. Minus in et quibusdam natus.', 'Possimus nisi qui occaecati ea eos quasi. Quibusdam et at maxime provident est necessitatibus ut. Ipsam quidem ea qui facere nobis. Earum quo praesentium ut ut beatae officia.', 1, '2018-04-28 23:31:33', '2018-04-28 23:31:33'),
(3, '8931743440438', '2018-04-26 10:31:33', '2018-04-26 10:31:33', '2018-04-27 22:31:33', 'dolorum qui', 1, 1, 3, 'molestiae qui', '1476 Chloe Manors', 'South Mariannamouth', 'mouth', '86869-5818', 'excepturi culpa', 'Ut rem voluptas sint recusandae eum maxime nobis. Qui ea a delectus aut repudiandae. Qui et eaque ea omnis.', 'Dolor debitis qui odit quibusdam sed. Laboriosam exercitationem inventore quo. Voluptatem est autem praesentium cupiditate sunt in molestias. Possimus repellendus deserunt rerum reiciendis qui.', 1, '2018-04-27 15:31:33', '2018-04-27 15:31:33'),
(4, '8213299924458', '2018-04-27 10:31:33', '2018-04-27 10:31:33', '2018-04-29 04:31:33', 'ut odio', 1, 8, 1, 'quia quia', '99967 Mann Glen Suite 253', 'Runteport', 'view', '39959', 'autem ut', 'Illum inventore voluptatibus et quasi et ut consequatur voluptas. Sed voluptatem tenetur recusandae. Et vitae ipsam necessitatibus nostrum et sed et.', 'Rerum numquam dolorum molestiae nisi aut id velit. Mollitia earum non pariatur ut architecto asperiores nostrum ab. Sapiente laudantium necessitatibus et inventore. Ipsum dolor sit assumenda est qui.', 1, '2018-04-28 21:31:33', '2018-04-28 21:31:33'),
(5, '6607206267271', '2018-04-27 10:31:33', '2018-04-27 10:31:33', '2018-04-28 04:31:33', 'neque fuga', 1, 5, 3, 'laudantium quas', '951 Jany Glens Suite 915', 'South Othomouth', 'borough', '67676-8297', 'esse qui', 'Velit a explicabo quas alias. Voluptatem quos et quae asperiores. Aliquid nihil minima eos tempora ipsa quia repellat. Et omnis facilis modi dolor. Esse ut tenetur aliquam libero saepe voluptatem ut.', 'Ratione voluptatibus sunt sint. Explicabo architecto ut minus ad enim quasi.', 1, '2018-04-27 21:31:33', '2018-04-27 21:31:33'),
(6, '3714795676315', '2018-04-25 10:31:33', '2018-04-25 10:31:33', '2018-04-26 22:31:33', 'omnis doloremque', 1, 1, 7, 'voluptas amet', '445 Myra Viaduct Apt. 604', 'Syblebury', 'ton', '04334', 'voluptas quas', 'Dignissimos qui est exercitationem ullam. Sint ipsa quia rem ut cumque ad quasi. Earum debitis excepturi earum autem voluptas. Eligendi voluptas nemo expedita eaque et consequatur vitae.', 'Voluptates ut dolores quam similique assumenda amet. Iure dolor alias officiis aut quas. Magni in voluptas quidem minima enim quia facere. Aut excepturi excepturi voluptas molestiae.', 1, '2018-04-26 15:31:33', '2018-04-26 15:31:33'),
(7, '3187932907120', '2018-04-27 10:31:33', '2018-04-27 10:31:33', '2018-04-28 20:31:33', 'nihil eos', 1, 5, 8, 'similique consequatur', '63660 Donnelly Club', 'New Rosemarie', 'mouth', '37346-3291', 'temporibus nostrum', 'Delectus dolorem vero ut dicta unde est. Natus nisi sed optio asperiores in recusandae. Aut odit dignissimos ad et omnis repudiandae et.', 'Ad saepe voluptates labore et quam optio. Omnis ut iusto cum quo illo. Laborum officia delectus possimus aut perspiciatis voluptate qui aut.', 1, '2018-04-28 13:31:33', '2018-04-28 13:31:33'),
(8, '9422904830216', '2018-04-26 10:31:33', '2018-04-26 10:31:33', '2018-04-27 14:31:33', 'placeat voluptatem', 1, 6, 10, 'et id', '16430 Adolfo Villages', 'South Antwon', 'bury', '47809-6932', 'nulla rerum', 'Ut vitae nesciunt facere ullam et inventore impedit. Quis blanditiis quia sit quidem sed. Magni beatae enim distinctio est et cupiditate.', 'Molestias ad velit tempore dolores. Ut ut atque voluptas cupiditate ducimus. Ducimus qui architecto reiciendis nihil. Omnis et cumque doloribus dolorem.', 1, '2018-04-27 07:31:33', '2018-04-27 07:31:33'),
(9, '4530281367999', '2018-04-27 10:31:33', '2018-04-27 10:31:33', '2018-04-29 06:31:33', 'explicabo deleniti', 1, 6, 6, 'voluptatem facilis', '6607 Kris Stream Suite 927', 'Lake Medaburgh', 'fort', '66753', 'velit et', 'Exercitationem provident dolores expedita vero. Soluta ad eos aut non blanditiis voluptatem id. Sed suscipit et esse impedit rerum ut.', 'Explicabo in incidunt officia omnis natus. Error repudiandae ullam quo ab maxime iure ducimus aliquid. Iusto et nobis et qui.', 1, '2018-04-28 23:31:33', '2018-04-28 23:31:33'),
(10, '1872748809981', '2018-04-25 10:31:33', '2018-04-25 10:31:33', '2018-04-27 07:31:33', 'blanditiis est', 1, 8, 10, 'ullam quia', '371 Piper Hill', 'Schowalterberg', 'furt', '03224-6671', 'occaecati nulla', 'Provident consequuntur nesciunt sit dolores in aliquam quibusdam. Dolore adipisci eius vero et tempora et voluptas. Omnis officia id laborum cumque in.', 'Magnam aperiam repellendus unde iure. Voluptatem totam eius repellendus quasi eaque quaerat ullam. Aut nesciunt aperiam aut doloribus molestiae. Optio ullam iste et expedita.', 1, '2018-04-27 00:31:33', '2018-04-27 00:31:33'),
(11, '0326085156419', '2018-04-27 10:31:33', '2018-04-27 10:31:33', '2018-04-28 17:31:33', 'et voluptas', 1, 10, 7, 'autem accusantium', '2850 Alfreda Heights', 'Hegmannstad', 'bury', '95348-0816', 'fuga at', 'Eligendi quidem nemo ut corporis et est ex. Assumenda debitis quia tenetur hic. Quasi quaerat consequuntur mollitia tenetur quis. Dicta voluptatem dolorum eius.', 'Enim magni omnis tempora enim et natus. In amet qui ut non. Laborum commodi impedit sed ea fuga officiis. Nobis dicta voluptate nulla ut minus. Ut voluptas non temporibus earum.', 1, '2018-04-28 10:31:33', '2018-04-28 10:31:33'),
(12, '2712195680797', '2018-04-27 10:31:33', '2018-04-27 10:31:33', '2018-04-27 13:31:33', 'ipsam molestiae', 1, 4, 2, 'cumque quas', '9509 Vandervort Station', 'Purdyhaven', 'shire', '03913', 'voluptatem perspiciatis', 'Quibusdam voluptas iure distinctio nihil nobis tempora amet. Modi repellendus nisi autem omnis voluptatem ipsa. Quod laudantium eos inventore.', 'Itaque tenetur sit sed sunt. Officia ea ut vel nobis. Repellendus et esse excepturi necessitatibus omnis est. Culpa molestiae cupiditate eum est.', 1, '2018-04-27 06:31:33', '2018-04-27 06:31:33'),
(13, '5048601803953', '2018-04-26 10:31:34', '2018-04-26 10:31:34', '2018-04-27 18:31:34', 'amet eum', 1, 5, 4, 'et est', '787 Hammes Pines Apt. 478', 'Beerfurt', 'mouth', '36452-9229', 'eligendi ut', 'Maxime dolorem aperiam dolor. Temporibus accusantium non dolorum. Corporis ut atque id dolorem cumque.', 'Est fuga omnis qui. Id aut aliquid architecto dolor. Reiciendis animi porro delectus sapiente aliquid sequi.', 1, '2018-04-27 11:31:34', '2018-04-27 11:31:34'),
(14, '5937859933812', '2018-04-25 10:31:34', '2018-04-25 10:31:34', '2018-04-26 23:31:34', 'quia possimus', 1, 6, 5, 'doloribus et', '347 Ferry Via', 'Gleichnerport', 'land', '60405-2990', 'sapiente quia', 'Assumenda cupiditate occaecati sit possimus laboriosam animi. Natus consequatur perferendis quia eum non. Vitae qui laudantium consequatur. Enim consectetur eos quae illum ea.', 'Repellendus minus qui nisi cumque. Ut eos dolor consequatur alias iste iusto nam.', 1, '2018-04-26 16:31:34', '2018-04-26 16:31:34'),
(15, '3804574843448', '2018-04-24 10:31:34', '2018-04-24 10:31:34', '2018-04-26 10:31:34', 'accusantium vero', 1, 8, 10, 'eligendi aut', '9112 Serena Bridge Suite 868', 'New Darwin', 'furt', '09757', 'excepturi modi', 'Quo omnis neque perspiciatis. Eaque rem architecto praesentium quam quos mollitia perferendis. Illo qui tempore perferendis tempora.', 'Quia sed ut ut ut sint. Ea animi cumque nulla repellendus et voluptatibus nostrum. Qui quo molestias maiores. Ad quis dolore veniam omnis nisi.', 1, '2018-04-26 03:31:34', '2018-04-26 03:31:34'),
(16, '1749043955869', '2018-04-26 10:31:34', '2018-04-26 10:31:34', '2018-04-27 08:31:34', 'nesciunt quia', 1, 4, 5, 'et ducimus', '92511 Gusikowski Place Suite 598', 'Ullrichtown', 'furt', '04909', 'a vitae', 'Nemo ut sed dolores suscipit aut asperiores. Quo ab sed eos. Non occaecati minus quod consequuntur repellendus.', 'Iste error nulla dolore iusto sed. Magni aut qui quod quia nobis repellendus. Deserunt aspernatur vel adipisci reprehenderit.', 1, '2018-04-27 01:31:34', '2018-04-27 01:31:34'),
(17, '0764566563453', '2018-04-26 10:31:34', '2018-04-26 10:31:34', '2018-04-27 02:31:34', 'veniam praesentium', 1, 9, 3, 'beatae mollitia', '37802 Zboncak Gateway', 'Eugeniaborough', 'ton', '71063-5799', 'ut rem', 'Quibusdam blanditiis tenetur sed soluta est. Itaque saepe voluptatem doloremque a consectetur optio et nam. Temporibus dolore non ipsum vitae voluptas.', 'Consequuntur quos ducimus et laboriosam nostrum aut eum. Cupiditate vel aut atque voluptatum beatae. Repudiandae consequatur eveniet recusandae eum et ut.', 1, '2018-04-26 19:31:34', '2018-04-26 19:31:34'),
(18, '7646392899162', '2018-04-25 10:31:34', '2018-04-25 10:31:34', '2018-04-26 12:31:34', 'voluptatem aspernatur', 1, 4, 3, 'voluptatem et', '81821 Isabella Terrace Apt. 942', 'Friedachester', 'land', '39106', 'eos reiciendis', 'Dicta magnam provident ipsum et libero ut maiores. Nemo aspernatur enim consequatur laboriosam. Aut omnis id vel non eum minus ducimus. Tempora velit mollitia quia voluptate eius.', 'Exercitationem sed vel recusandae ex sunt qui. Porro sed et et qui. Error laboriosam odio qui voluptate quibusdam blanditiis ut. Dolores ullam corrupti eos.', 1, '2018-04-26 05:31:34', '2018-04-26 05:31:34'),
(19, '4712889408339', '2018-04-24 10:31:34', '2018-04-24 10:31:34', '2018-04-26 07:31:34', 'porro odio', 1, 6, 6, 'enim beatae', '8177 Windler Plain', 'West Osbaldomouth', 'town', '83975', 'iste illo', 'Libero officia ipsum molestias id eum tempore sapiente. Quisquam aperiam quia non est aperiam. Impedit iusto non et minus qui rerum. Corporis voluptas ut magni consequatur dolore aperiam voluptas.', 'Dolorem omnis et nihil exercitationem sed sit. Nam cumque animi sequi quam. Reiciendis magni impedit eos.', 1, '2018-04-26 00:31:34', '2018-04-26 00:31:34'),
(20, '6400266487883', '2018-04-24 10:31:34', '2018-04-24 10:31:34', '2018-04-24 14:31:34', 'voluptatum quia', 1, 3, 8, 'corrupti praesentium', '4329 Anne Cape Suite 566', 'South Katlynnhaven', 'borough', '68657-2049', 'dicta aut', 'Est minus dolorem voluptas possimus omnis. Maxime earum aut veniam magnam. Quos quia numquam aperiam ex amet iusto.', 'Eos autem et in. Beatae qui sunt repudiandae ullam provident. Quas non quas possimus.', 1, '2018-04-24 07:31:34', '2018-04-24 07:31:34'),
(21, '6516268594778', '2018-04-25 10:31:34', '2018-04-25 10:31:34', '2018-04-26 07:31:34', 'commodi enim', 1, 3, 9, 'aut amet', '9940 Hettinger Glens', 'McCulloughland', 'land', '65542', 'ipsum dolor', 'Sunt est aut quo explicabo. Quam dicta praesentium repellat voluptatibus id. Molestiae eius recusandae quisquam sunt est qui. Sit esse rerum harum et tempora.', 'Eos et eum dolorem ut. Quia ut ipsam quo adipisci aliquid repellendus unde. Recusandae similique voluptatem esse. Veniam tempora temporibus inventore ut dignissimos sed.', 1, '2018-04-26 00:31:34', '2018-04-26 00:31:34'),
(22, '9916734772322', '2018-04-27 10:31:34', '2018-04-27 10:31:34', '2018-04-28 13:31:34', 'quam facilis', 1, 10, 8, 'dolores totam', '367 Hilll Highway Suite 252', 'Schuppefurt', 'port', '13082-7813', 'qui aliquam', 'Repellendus itaque aperiam omnis dolores et. Velit aut distinctio ut exercitationem. Accusamus est eveniet cum eos dolore sed mollitia. Necessitatibus aut dicta omnis repellat ut.', 'Rerum numquam sapiente est voluptate soluta. Ut officia esse saepe quae molestiae. Facilis ipsam ab ratione officiis est.', 1, '2018-04-28 06:31:34', '2018-04-28 06:31:34'),
(23, '5705596702691', '2018-04-28 10:31:34', '2018-04-28 10:31:34', '2018-04-28 14:31:34', 'quia hic', 1, 7, 9, 'quisquam voluptatem', '79087 Jenifer Square Apt. 345', 'Bergeborough', 'ville', '16709', 'quos ab', 'Provident optio a omnis eius numquam natus qui. Dolorem sunt sit in accusantium repellat assumenda. Placeat est tempora enim quod consequatur aut.', 'Possimus rerum cum corporis sint accusamus distinctio. Eos consequatur beatae est nesciunt cumque excepturi est. Possimus omnis nulla quo consequatur quia.', 1, '2018-04-28 07:31:34', '2018-04-28 07:31:34'),
(24, '0367719596959', '2018-04-26 10:31:34', '2018-04-26 10:31:34', '2018-04-27 23:31:34', 'eius necessitatibus', 1, 8, 1, 'iste a', '449 Hettinger Lodge', 'Thompsonhaven', 'borough', '61830-6953', 'occaecati nam', 'In voluptatem qui ut nihil. Dolorem eius architecto necessitatibus aut officiis minus quidem. Dolorum qui omnis voluptatem dolorem eligendi ex possimus.', 'Labore enim eos sit odio eum dolor sint. Rem quia nisi sunt possimus in magni. Fugiat dolores officiis quasi cumque quas. Amet aliquam sint atque laudantium neque magni blanditiis.', 1, '2018-04-27 16:31:34', '2018-04-27 16:31:34'),
(25, '0799523113693', '2018-04-25 10:31:34', '2018-04-25 10:31:34', '2018-04-27 10:31:34', 'sunt nesciunt', 1, 2, 1, 'rem quia', '6962 Marquardt Orchard Suite 604', 'West Nyasiashire', 'mouth', '21436-0606', 'tenetur quo', 'Enim nostrum nihil velit suscipit aut id. Quas consectetur expedita suscipit officia et. Consequatur velit quam deserunt est et non quia. At eos neque praesentium eligendi nisi consequatur error.', 'Minus dolores repellat reprehenderit repudiandae quaerat sit quod. Laboriosam maxime et rerum culpa dolorem. Consectetur et ducimus hic excepturi laudantium numquam suscipit.', 1, '2018-04-27 03:31:34', '2018-04-27 03:31:34'),
(26, '7648361047475', '2018-04-28 10:31:34', '2018-04-28 10:31:34', '2018-04-29 04:31:34', 'repellat quis', 1, 2, 5, 'odit aut', '713 Zelma Light Suite 924', 'New Joana', 'side', '50851', 'unde ut', 'Hic aliquam aspernatur dolor voluptas a quaerat. Recusandae eos et natus a minima quasi. Aspernatur non esse est perferendis saepe nesciunt ut. Omnis quas ut iste voluptates ut.', 'Magnam aut a enim harum. Et ea qui animi ad sapiente dolores. Molestiae velit aliquid velit voluptatibus deleniti. Maiores nihil perferendis culpa explicabo voluptatum et molestiae.', 1, '2018-04-28 21:31:34', '2018-04-28 21:31:34'),
(27, '0522008275940', '2018-04-27 10:31:35', '2018-04-27 10:31:35', '2018-04-29 00:31:35', 'labore labore', 1, 10, 3, 'quis nostrum', '311 Earnestine Squares', 'Hegmannville', 'haven', '88368-1545', 'quaerat eos', 'Nihil odio nemo saepe facere molestias. Sapiente corporis odio consequatur in libero qui corporis.', 'Ut illo itaque illum ad. Provident eius iste quidem tempore perspiciatis quis iste. In dolorem ut fuga quasi blanditiis veritatis. Distinctio provident nihil sit sequi at neque fugiat ipsam.', 1, '2018-04-28 17:31:35', '2018-04-28 17:31:35'),
(28, '3233769210565', '2018-04-25 10:31:35', '2018-04-25 10:31:35', '2018-04-26 08:31:35', 'facilis assumenda', 1, 3, 2, 'sit non', '32149 Rafaela Knoll', 'Whiteton', 'land', '66612', 'esse qui', 'Id perspiciatis aliquid recusandae expedita. Iste enim corrupti rerum a. Iure quo temporibus et est.', 'Corrupti doloribus necessitatibus deleniti nesciunt omnis. Ipsum iure laudantium sed aliquid.', 1, '2018-04-26 01:31:35', '2018-04-26 01:31:35'),
(29, '1759819178316', '2018-04-24 10:31:35', '2018-04-24 10:31:35', '2018-04-25 22:31:35', 'illum in', 1, 9, 7, 'beatae qui', '3697 Carissa Drives', 'Brandymouth', 'view', '04514', 'pariatur vitae', 'Deserunt et voluptatem mollitia ipsa numquam aut voluptatibus id. Enim rerum facilis iste ad at accusantium voluptatibus vitae. Et quis consequatur est blanditiis aut.', 'Non vel dignissimos libero velit. Non consectetur et fugiat repudiandae quas. Et sed veritatis optio assumenda. Blanditiis doloremque numquam eos provident voluptatem quod in.', 1, '2018-04-25 15:31:35', '2018-04-25 15:31:35'),
(30, '5429069966747', '2018-04-27 10:31:35', '2018-04-27 10:31:35', '2018-04-27 19:31:35', 'non rerum', 1, 2, 8, 'voluptas illo', '6514 Hulda Lights', 'Martachester', 'view', '93042-7487', 'dolorum ducimus', 'Pariatur at ipsum et consequuntur. Et id eos placeat sequi in atque. Ullam aut ut accusantium qui. Illo veniam ratione ea sed mollitia quaerat aperiam.', 'Maxime labore aspernatur quis sapiente accusamus. Dolores saepe ut ut molestiae ad mollitia omnis. Suscipit asperiores velit voluptas nisi vero debitis illum.', 1, '2018-04-27 12:31:35', '2018-04-27 12:31:35'),
(31, '3614873879174', '2018-04-27 10:31:35', '2018-04-27 10:31:35', '2018-04-29 00:31:35', 'aut laudantium', 1, 9, 7, 'dolorem animi', '35504 Micaela Knoll', 'New Sandrineberg', 'borough', '58457-3938', 'maxime minima', 'Distinctio sit sapiente et eaque eveniet. Magni at saepe consequuntur repudiandae id. Aliquid repudiandae et saepe qui.', 'Minus doloremque nulla maxime adipisci aspernatur. Sint corrupti architecto similique voluptas rem. Quia quisquam animi tenetur.', 1, '2018-04-28 17:31:35', '2018-04-28 17:31:35'),
(32, '9189680037306', '2018-04-26 10:31:35', '2018-04-26 10:31:35', '2018-04-27 21:31:35', 'doloremque sed', 1, 10, 10, 'animi sit', '1316 Homenick Trail Apt. 716', 'Krajcikchester', 'fort', '47108-7398', 'aut esse', 'Velit ea fuga expedita eveniet. Eum incidunt quis amet impedit.', 'Modi dolor voluptatem qui nihil est. Error dolor impedit voluptatem rerum. Sint et corporis cum nulla est. Voluptate ullam et voluptatum dolores.', 1, '2018-04-27 14:31:35', '2018-04-27 14:31:35'),
(33, '8176798467461', '2018-04-27 10:31:35', '2018-04-27 10:31:35', '2018-04-29 04:31:35', 'quasi explicabo', 1, 2, 8, 'nemo iste', '896 Stephen Fords', 'Emmerichborough', 'furt', '49384', 'autem vitae', 'Delectus vitae neque quibusdam qui suscipit autem. Reiciendis dolor omnis totam eum optio. Laboriosam est et cupiditate aut quibusdam et voluptatum. Similique cum sed sit cupiditate.', 'Provident soluta quae rerum qui debitis dicta nam consectetur. Modi velit necessitatibus illum deleniti distinctio eaque temporibus debitis. Sunt minus quisquam in iste dolor explicabo.', 1, '2018-04-28 21:31:35', '2018-04-28 21:31:35'),
(34, '7020574549920', '2018-04-27 10:31:35', '2018-04-27 10:31:35', '2018-04-27 23:31:35', 'quisquam expedita', 1, 6, 2, 'sapiente ipsa', '8714 Aubrey Port Suite 601', 'Wintheiserside', 'mouth', '26025', 'quia sed', 'Et ab quia adipisci voluptatem corporis aut. Molestiae molestiae tenetur alias fuga. Delectus ullam accusamus minima fuga a blanditiis minus.', 'Inventore quasi in ipsum maxime. Repudiandae dolorum pariatur harum tenetur. Et et consequatur cupiditate nostrum laudantium. Officiis inventore at beatae exercitationem optio.', 1, '2018-04-27 16:31:35', '2018-04-27 16:31:35'),
(35, '2873302938375', '2018-04-25 10:31:35', '2018-04-25 10:31:35', '2018-04-25 14:31:35', 'hic aut', 1, 7, 1, 'quidem cum', '1490 Kurtis Park', 'Lake Zacherymouth', 'mouth', '69742', 'nemo iusto', 'Ullam ut nisi qui. Aliquam saepe autem ratione sapiente. Ex possimus provident quibusdam at.', 'Possimus voluptas est nulla et voluptas. Quos a rerum illo corrupti ut non. Voluptate voluptatem dolore dolorem dolorem. Sed nulla ullam id sunt.', 1, '2018-04-25 07:31:35', '2018-04-25 07:31:35'),
(36, '6767071540692', '2018-04-25 10:31:35', '2018-04-25 10:31:35', '2018-04-25 15:31:35', 'rerum sed', 1, 2, 6, 'id rerum', '932 Brenden Junction', 'Ornton', 'land', '10964', 'modi similique', 'Facere nam totam omnis omnis. Et doloribus est delectus atque debitis animi. Eum consectetur dolorum nostrum ratione quae distinctio.', 'Asperiores sint ex quidem vel reprehenderit dicta quia reprehenderit. Praesentium at perspiciatis soluta minima quia. Amet animi autem esse rem.', 1, '2018-04-25 08:31:35', '2018-04-25 08:31:35'),
(37, '3092270619355', '2018-04-28 10:31:35', '2018-04-28 10:31:35', '2018-04-30 00:31:35', 'delectus saepe', 1, 1, 2, 'omnis alias', '75394 Shanahan Gateway', 'Enosside', 'borough', '33125-5300', 'quo ut', 'Ut impedit totam expedita autem ab quam. Sunt consequatur nobis aliquam qui. Non sit quia amet blanditiis itaque consectetur.', 'Quia tempore eligendi sed consequatur quae. Eos et ea vitae quia. Neque ipsum sequi rem id ut quaerat sit consequuntur. Quia ratione consequuntur omnis.', 1, '2018-04-29 17:31:35', '2018-04-29 17:31:35'),
(38, '4916772134385', '2018-04-28 10:31:35', '2018-04-28 10:31:35', '2018-04-29 06:31:35', 'velit a', 1, 6, 10, 'quas debitis', '586 Gleichner Junctions Suite 452', 'Rohanborough', 'mouth', '51238-1158', 'qui temporibus', 'Itaque dolores tempore nihil atque laudantium quod provident. Doloribus consequatur exercitationem qui. Quia reiciendis soluta id qui aspernatur optio aut sit.', 'Laudantium ea molestiae et eligendi ut rem. Ut qui fugit explicabo ut. Perspiciatis illo hic cumque velit aliquid iure.', 1, '2018-04-28 23:31:35', '2018-04-28 23:31:35'),
(39, '2106171640187', '2018-04-28 10:31:35', '2018-04-28 10:31:35', '2018-04-30 06:31:35', 'minima dolorum', 1, 9, 4, 'excepturi alias', '1293 Marks Gardens Apt. 523', 'North Marianport', 'berg', '18525', 'enim voluptas', 'A quibusdam vel quibusdam. Rerum rerum voluptas laborum voluptas. Sed quia aut autem quisquam dolore commodi.', 'Voluptate vitae sint sunt excepturi cum nemo. Similique ut aut ut consequuntur ea nemo.', 1, '2018-04-29 23:31:35', '2018-04-29 23:31:35'),
(40, '4937321468171', '2018-04-27 10:31:36', '2018-04-27 10:31:36', '2018-04-28 07:31:36', 'ipsum neque', 1, 4, 10, 'ex aut', '89320 Theo Turnpike Apt. 868', 'Port Queenie', 'furt', '27144', 'ut ut', 'Natus aliquid dolore veniam est exercitationem. Quia recusandae aspernatur non consequatur magni. Incidunt minus qui omnis quis.', 'Repellendus blanditiis et consequuntur dolor blanditiis aliquam nulla cupiditate. Fugit aut nihil libero dolorum tenetur. Vel itaque delectus quae laborum cum.', 1, '2018-04-28 00:31:36', '2018-04-28 00:31:36'),
(41, '3521111475626', '2018-04-28 10:31:36', '2018-04-28 10:31:36', '2018-04-29 15:31:36', 'molestiae minima', 1, 10, 6, 'quia non', '24450 Kody Fall Apt. 806', 'Macejkovicmouth', 'berg', '27026', 'odio repudiandae', 'Necessitatibus veniam qui repellat odio. Consequatur blanditiis molestiae est repellendus. Quia eos a ipsam.', 'Deserunt ea deleniti repudiandae quisquam vel. Velit amet necessitatibus voluptatibus est eos. Nostrum fugiat cumque ut placeat fugiat quidem sed.', 1, '2018-04-29 08:31:36', '2018-04-29 08:31:36'),
(42, '4743693094432', '2018-04-25 10:31:36', '2018-04-25 10:31:36', '2018-04-25 12:31:36', 'praesentium dolore', 1, 2, 3, 'quam iusto', '82324 Jerrold Oval', 'New Jerod', 'furt', '82464-8978', 'iusto perspiciatis', 'Aut labore excepturi ab voluptatem. Aliquam non ut sapiente est nihil. Omnis maiores omnis maxime inventore ut exercitationem quis. Necessitatibus quo iste eos deserunt aut nulla eum.', 'Non ducimus qui ut voluptates. Omnis architecto dignissimos ipsa accusantium ducimus aut. Voluptatem accusamus itaque aut neque.', 1, '2018-04-25 05:31:36', '2018-04-25 05:31:36'),
(43, '0970177385937', '2018-04-25 10:31:36', '2018-04-25 10:31:36', '2018-04-26 00:31:36', 'totam eos', 1, 5, 1, 'numquam quisquam', '3586 Pacocha Brooks Suite 027', 'Brenthaven', 'side', '27242-7820', 'eveniet hic', 'Quae aut voluptatem eum. Molestiae voluptas quia veniam dolorem et esse. Explicabo eligendi amet et quos quibusdam porro consequuntur.', 'Vitae minima voluptas velit nam quo. Praesentium voluptatem odit accusamus. Ratione voluptas atque quos voluptatem odit minima sit voluptatem.', 1, '2018-04-25 17:31:36', '2018-04-25 17:31:36'),
(44, '9580274461130', '2018-04-25 10:31:36', '2018-04-25 10:31:36', '2018-04-26 00:31:36', 'nulla omnis', 1, 8, 2, 'minus consequatur', '613 Moore Place', 'Lake Rosalyn', 'town', '55484', 'explicabo explicabo', 'Repellendus excepturi tempora qui dolor odit neque dolores. Rerum delectus architecto velit quo et quia. Voluptatibus natus officiis officia. Enim aspernatur autem quibusdam aliquam quis.', 'Commodi optio tenetur aspernatur itaque voluptas. Ea facere et quos ut soluta provident. Ipsum aperiam doloribus vero aut cupiditate aliquid id officiis. Modi libero animi itaque eveniet harum.', 1, '2018-04-25 17:31:36', '2018-04-25 17:31:36'),
(45, '7854376404046', '2018-04-27 10:31:36', '2018-04-27 10:31:36', '2018-04-29 07:31:36', 'aut ullam', 1, 8, 5, 'sit rerum', '872 Alexane Road', 'Lake Kaliside', 'mouth', '06361', 'sapiente maxime', 'Cupiditate hic et hic. Saepe voluptatem odio totam culpa non aut quos. Consequuntur eos non accusantium ipsum nulla quis. Unde officiis sed sit perspiciatis esse magnam.', 'Officia ut quaerat dolor officiis cum repellat. Tempore et ipsum perspiciatis consequatur dolore non ratione. Iure in impedit aut eligendi fugit aspernatur accusamus.', 1, '2018-04-29 00:31:36', '2018-04-29 00:31:36'),
(46, '2352020154132', '2018-04-28 10:31:36', '2018-04-28 10:31:36', '2018-04-28 12:31:36', 'non natus', 1, 4, 7, 'consequatur distinctio', '48176 Gerhold Ports', 'South Velma', 'town', '23036', 'aut tenetur', 'Odio velit perspiciatis et quasi nostrum. Quidem sint sed qui numquam sit vero. Sed explicabo blanditiis qui ex officiis. Aliquid tenetur rerum autem aliquid officiis expedita molestiae.', 'Voluptatibus corporis aut rerum expedita. Voluptas omnis mollitia aut asperiores odio voluptate. Eaque in et eveniet dolores delectus eius.', 1, '2018-04-28 05:31:36', '2018-04-28 05:31:36'),
(47, '7027934441405', '2018-04-24 10:31:36', '2018-04-24 10:31:36', '2018-04-24 20:31:36', 'culpa ea', 1, 6, 5, 'tempore explicabo', '8480 Leffler Shores', 'Jerroldview', 'chester', '17061', 'amet non', 'Voluptas est aliquid incidunt nihil possimus autem. Tempore recusandae maiores molestiae itaque. Ratione sit quaerat quia.', 'Praesentium quia id qui similique sit. Vel officia et nihil. Voluptatem et quia in ut reprehenderit ipsa magni nostrum. Laborum quaerat qui et officiis saepe voluptate sit.', 1, '2018-04-24 13:31:36', '2018-04-24 13:31:36'),
(48, '4282696773611', '2018-04-26 10:31:36', '2018-04-26 10:31:36', '2018-04-26 14:31:36', 'tenetur velit', 1, 1, 8, 'reprehenderit harum', '57373 Volkman Ways', 'Valentinburgh', 'shire', '97136-5881', 'et aut', 'Natus eveniet occaecati eveniet eius occaecati iure. Dolorum nisi repellat ex molestiae adipisci explicabo et. Aut consectetur omnis eum quibusdam.', 'Assumenda qui voluptatem tenetur dolor dolores in. Sunt vel voluptatem impedit nesciunt. Reprehenderit asperiores accusantium velit ut earum.', 1, '2018-04-26 07:31:36', '2018-04-26 07:31:36'),
(49, '1662108084734', '2018-04-28 10:31:36', '2018-04-28 10:31:36', '2018-04-29 18:31:36', 'similique rem', 1, 5, 10, 'earum id', '2261 Skiles Locks Apt. 564', 'South Yeseniaport', 'furt', '61817', 'natus qui', 'Consequatur qui ex dolores sit. Consequatur laudantium quia nihil repellat. Sit officia architecto quibusdam praesentium.', 'Autem excepturi numquam doloribus eligendi. Esse ipsum culpa rerum atque aliquid atque. Consequatur doloribus animi totam.', 1, '2018-04-29 11:31:36', '2018-04-29 11:31:36'),
(50, '5906949525572', '2018-04-27 10:31:36', '2018-04-27 10:31:36', '2018-04-28 19:31:36', 'sequi voluptates', 1, 6, 6, 'nam fuga', '69806 Edward Port Apt. 231', 'South Serenityberg', 'side', '89822', 'fugit cum', 'Dicta perferendis suscipit sit voluptatem quia eligendi. Vitae voluptas tenetur perspiciatis ut ut similique. Soluta ut unde dolores omnis et quibusdam facilis.', 'Sit corporis voluptatem eius non et rerum reiciendis. Nemo cum ut blanditiis esse cumque. Iure quis sed neque expedita soluta. Fuga saepe totam repudiandae dolores et dolores sint exercitationem.', 1, '2018-04-28 12:31:36', '2018-04-28 12:31:36'),
(51, '5215270557948', '2018-04-25 10:31:36', '2018-04-25 10:31:36', '2018-04-26 06:31:36', 'magnam velit', 1, 9, 9, 'est voluptatem', '2205 Bosco Dam Suite 493', 'Port Germaine', 'fort', '86067', 'labore hic', 'Voluptatum nostrum dolorem corporis delectus ullam voluptatem quo. Molestiae consequatur veniam est eaque doloribus tempora.', 'Dolor sed eius aut officiis. Optio culpa labore nihil vero nisi reiciendis nam. Dolor doloribus voluptatibus sit possimus.', 1, '2018-04-25 23:31:36', '2018-04-25 23:31:36'),
(52, '6007619850105', '2018-04-27 10:31:36', '2018-04-27 10:31:36', '2018-04-27 14:31:36', 'dolor perferendis', 1, 4, 9, 'praesentium tenetur', '641 Welch Harbors', 'South Waltonhaven', 'fort', '97471', 'ab sed', 'Provident aperiam facere qui earum excepturi excepturi. Ut et saepe est molestiae reiciendis. Doloremque voluptatem pariatur placeat aliquam in ut temporibus.', 'Qui id quos quaerat dolores dolorem impedit. Ipsa ut iste aspernatur quia culpa eum molestias. Sit ut accusantium ut exercitationem. Et atque consequuntur nihil soluta praesentium dolor.', 1, '2018-04-27 07:31:36', '2018-04-27 07:31:36'),
(53, '6844313181094', '2018-04-26 10:31:36', '2018-04-26 10:31:36', '2018-04-26 21:31:36', 'maxime sit', 1, 2, 7, 'a distinctio', '587 Buckridge Path', 'East Ward', 'burgh', '61058', 'expedita totam', 'Eum consectetur iusto tenetur ex quo. Omnis perspiciatis placeat neque corrupti hic delectus illum.', 'Unde id sunt aut. Omnis qui est nostrum dicta necessitatibus ut. Sapiente voluptas quis expedita cumque necessitatibus eaque qui. Aut ratione suscipit earum adipisci nesciunt et.', 1, '2018-04-26 14:31:36', '2018-04-26 14:31:36'),
(54, '4812574468805', '2018-04-28 10:31:36', '2018-04-28 10:31:36', '2018-04-30 08:31:36', 'aut dolore', 1, 2, 1, 'sint minus', '11565 Hassan Dale', 'Marielaborough', 'furt', '14084-5154', 'ullam quis', 'Voluptatem repellendus eaque ea dolorum adipisci consectetur. Qui perspiciatis ut reiciendis ut veritatis. Magnam facere eos est ut aut optio molestiae nesciunt.', 'Numquam accusamus quasi qui. Commodi commodi voluptas nihil iusto expedita. Enim a quia corporis quibusdam.', 1, '2018-04-30 01:31:36', '2018-04-30 01:31:36'),
(55, '4603123534498', '2018-04-26 10:31:36', '2018-04-26 10:31:36', '2018-04-26 11:31:36', 'iste commodi', 1, 8, 9, 'dolores assumenda', '10717 Orn Expressway Suite 064', 'Lake Isaiah', 'haven', '04691', 'est dolore', 'Aliquam et quia itaque quo maxime beatae quod. Fuga qui delectus excepturi rem nobis sunt. Consequatur nihil quas quia velit ut. Cum saepe omnis quod est est fuga dicta.', 'Ducimus aut ullam repudiandae adipisci. Laborum quis assumenda non rerum quidem. Ipsa ut soluta corporis nihil quo iure.', 1, '2018-04-26 04:31:36', '2018-04-26 04:31:36'),
(56, '2682972546908', '2018-04-26 10:31:36', '2018-04-26 10:31:36', '2018-04-26 16:31:36', 'totam eos', 1, 8, 3, 'quia quae', '891 Cremin Coves', 'South Crystalton', 'land', '06388-2135', 'et ut', 'At ut adipisci accusamus sint. Nemo qui sint iusto ipsum eligendi. Aspernatur dolorem unde tenetur enim sunt autem fugiat.', 'Accusantium possimus commodi debitis sequi magnam quia. Est sed optio in commodi ut nisi. Quos aut ea possimus voluptate aut. Corporis ea eum ut.', 1, '2018-04-26 09:31:36', '2018-04-26 09:31:36'),
(57, '7464850009188', '2018-04-26 10:31:36', '2018-04-26 10:31:36', '2018-04-27 03:31:36', 'laborum sed', 1, 10, 9, 'corrupti et', '758 Kuhic Fields Suite 662', 'Lake Wernerfort', 'bury', '09433-0923', 'dolor est', 'Ad assumenda quam nihil magnam consequatur neque. Cum alias qui esse. Dolores totam a corrupti repudiandae quisquam. Occaecati sed repellat tempore sed consequatur ut.', 'Fugit quia placeat enim veritatis doloremque. Ad ipsam ipsum vel.', 1, '2018-04-26 20:31:36', '2018-04-26 20:31:36'),
(58, '6793467738619', '2018-04-28 10:31:37', '2018-04-28 10:31:37', '2018-04-29 20:31:37', 'quod rerum', 1, 10, 6, 'eum ipsa', '769 Goodwin Loaf Suite 779', 'Trevorshire', 'view', '88169', 'officiis nesciunt', 'Quaerat unde qui voluptas non repellendus error cumque. Optio eos aperiam temporibus quia expedita quia et. Ex temporibus voluptas consequatur qui quidem velit aut.', 'Non facilis et sed nihil. Ad praesentium nam consequatur qui. In nobis et unde qui sit sint. Dolor est similique adipisci.', 1, '2018-04-29 13:31:37', '2018-04-29 13:31:37'),
(59, '9822635090031', '2018-04-24 10:31:37', '2018-04-24 10:31:37', '2018-04-25 09:31:37', 'sint id', 1, 8, 5, 'facere ipsum', '902 Walsh Orchard Apt. 217', 'Port Marcia', 'chester', '72603-3535', 'qui perspiciatis', 'Totam eos accusamus quam necessitatibus dignissimos eveniet perspiciatis. Tempora consequatur optio sunt blanditiis nobis. Magni est nobis repellendus. Autem doloremque rerum quod nulla nihil quis.', 'Eum unde quo veritatis eos dolor. Voluptas nemo deleniti ex.', 1, '2018-04-25 02:31:37', '2018-04-25 02:31:37'),
(60, '7549687273275', '2018-04-25 10:31:37', '2018-04-25 10:31:37', '2018-04-27 04:31:37', 'laborum in', 1, 6, 4, 'vel optio', '5416 Rory Trail', 'South Bennettfurt', 'berg', '10520', 'earum illum', 'Exercitationem amet nobis voluptas laboriosam velit voluptas. Eaque nisi reiciendis atque aut. Sit numquam explicabo in eos iure. Doloribus dolores omnis sapiente quo.', 'Qui ex vel architecto necessitatibus adipisci sed doloribus. Ut quia ut qui inventore voluptas illum et nihil. Voluptatem non et commodi minima quod.', 1, '2018-04-26 21:31:37', '2018-04-26 21:31:37'),
(61, '2538553940675', '2018-04-24 10:31:37', '2018-04-24 10:31:37', '2018-04-25 18:31:37', 'et hic', 1, 3, 5, 'tempora sit', '4503 Adrianna Loop', 'New Roslynberg', 'mouth', '69325', 'qui sed', 'Odit sit facere autem eligendi est et quis. Ipsa architecto molestiae eaque consequatur. Nihil aut perferendis blanditiis ullam asperiores reiciendis. Dolorem rerum a quas error deleniti porro.', 'Natus in labore et magni. Sequi sed et laborum unde molestias nemo quas. Nobis expedita omnis reiciendis non. At corporis et nam molestias autem.', 1, '2018-04-25 11:31:37', '2018-04-25 11:31:37'),
(62, '3948640568146', '2018-04-27 10:31:37', '2018-04-27 10:31:37', '2018-04-27 15:31:37', 'dolorum blanditiis', 1, 7, 8, 'harum ipsam', '9523 Quitzon Via Apt. 206', 'Lake Rylee', 'ville', '71434-2503', 'laborum nisi', 'Sapiente aliquam omnis quae reprehenderit et ut. Voluptatem ipsa excepturi culpa ab a dolores incidunt. Autem quia enim dignissimos molestias quidem tenetur iusto.', 'Consequatur qui dolor voluptas et nisi deserunt. Fuga fuga ipsam ad non.', 1, '2018-04-27 08:31:37', '2018-04-27 08:31:37'),
(63, '7689625641800', '2018-04-28 10:31:37', '2018-04-28 10:31:37', '2018-04-29 20:31:37', 'sequi veritatis', 1, 4, 10, 'et deserunt', '884 Krajcik Cliffs', 'Runtemouth', 'shire', '35016', 'sed rerum', 'Illo aut quisquam aut sunt corrupti. Quod eum sequi fuga voluptas fuga labore et architecto. Eum omnis illo molestiae quo fugit voluptas ex. Inventore et cupiditate et quis.', 'Laudantium sed aliquid et error reprehenderit aut quo ut. Eligendi architecto reprehenderit rem. Vero quia amet nobis quibusdam. Nostrum illo qui itaque. Et pariatur iure ipsa odit.', 1, '2018-04-29 13:31:37', '2018-04-29 13:31:37'),
(64, '4480863493823', '2018-04-27 10:31:37', '2018-04-27 10:31:37', '2018-04-28 15:31:37', 'quisquam provident', 1, 2, 4, 'harum est', '51346 Windler Course', 'North Lowellton', 'mouth', '84315', 'voluptas doloremque', 'Itaque at officiis rerum voluptatem qui similique temporibus. Ut amet rem est et. Sit totam excepturi voluptas voluptas et. Eum voluptas quia iure tenetur voluptatem recusandae et rerum.', 'Dolorem impedit voluptatem tempore minus ut minus. Ipsum quia nam maiores.', 1, '2018-04-28 08:31:37', '2018-04-28 08:31:37'),
(65, '7448502204763', '2018-04-26 10:31:37', '2018-04-26 10:31:37', '2018-04-27 21:31:37', 'officia et', 1, 3, 9, 'fuga rerum', '947 Crona Tunnel', 'North Angela', 'stad', '90617', 'ex molestiae', 'Dolores est reiciendis tenetur dolor eveniet est. Earum perspiciatis aut et quia sequi. Quis impedit velit qui blanditiis dolores nulla.', 'Placeat sit expedita incidunt esse non. Dolor ea qui et sed velit rem eos laboriosam. Laudantium non unde veritatis necessitatibus sequi consequatur.', 1, '2018-04-27 14:31:37', '2018-04-27 14:31:37'),
(66, '9652567624277', '2018-04-24 10:31:37', '2018-04-24 10:31:37', '2018-04-25 10:31:37', 'ipsa inventore', 1, 2, 9, 'quia cumque', '145 Elfrieda Road', 'North Roger', 'mouth', '18898', 'aperiam omnis', 'Quia cum minus ipsam quo enim. Mollitia laboriosam eum pariatur. Adipisci ut consectetur libero eveniet commodi. Dolorem est soluta officia unde inventore ut.', 'Tenetur fuga veritatis quidem nihil sed neque et. Assumenda illo ex quia incidunt.', 1, '2018-04-25 03:31:37', '2018-04-25 03:31:37'),
(67, '9547789766938', '2018-04-27 10:31:37', '2018-04-27 10:31:37', '2018-04-27 16:31:37', 'ullam placeat', 1, 6, 3, 'eius asperiores', '58056 Heller Ridge Apt. 066', 'South Yesenia', 'haven', '18934-6752', 'sed aperiam', 'Reprehenderit consequatur quibusdam nam. Sint molestiae impedit recusandae rerum quisquam temporibus aut. Delectus explicabo quasi illum velit. Libero iste voluptas quam eum.', 'Et quisquam id quidem ut consectetur quia in culpa. Tempora nostrum eum dolores. Voluptas eos ut expedita voluptatem.', 1, '2018-04-27 09:31:37', '2018-04-27 09:31:37'),
(68, '5728607852031', '2018-04-25 10:31:37', '2018-04-25 10:31:37', '2018-04-27 00:31:37', 'veritatis possimus', 1, 2, 2, 'assumenda sapiente', '497 Rogahn Island Apt. 754', 'Pacochafort', 'bury', '27700-0168', 'commodi quas', 'Sed possimus sint in reprehenderit sint veniam asperiores enim. Iusto voluptate ad iste quia. Consequatur soluta itaque aut odit necessitatibus. Esse aut nihil provident laborum aliquid.', 'Beatae assumenda distinctio aspernatur pariatur laboriosam. Accusamus facere dolor ut rerum labore sint dignissimos. Perspiciatis ut ea labore. Architecto illum nihil quia.', 1, '2018-04-26 17:31:37', '2018-04-26 17:31:37'),
(69, '2505215305127', '2018-04-25 10:31:37', '2018-04-25 10:31:37', '2018-04-26 06:31:37', 'hic consequatur', 1, 2, 5, 'aut sit', '73075 Elouise Falls Suite 505', 'Lake Gerhard', 'land', '84815', 'aspernatur perferendis', 'Ipsam ea quaerat quis voluptatem reprehenderit eius beatae. Natus doloribus autem soluta enim et. Distinctio recusandae reiciendis rerum voluptatem accusamus labore.', 'Quo exercitationem rerum consequatur quasi ut. Suscipit nesciunt fugiat hic iste enim deserunt. Sint vitae et eos et aut qui id ut. Laboriosam qui quo et atque.', 1, '2018-04-25 23:31:37', '2018-04-25 23:31:37'),
(70, '1693614332088', '2018-04-26 10:31:38', '2018-04-26 10:31:38', '2018-04-27 20:31:38', 'ab quasi', 1, 8, 6, 'aut tenetur', '722 Tanya Rue Apt. 924', 'North Abagail', 'burgh', '75115', 'dolor corrupti', 'Sed est aperiam eligendi unde voluptatem est. Ullam a voluptatem debitis odit quae soluta. Est culpa ut deserunt corporis cum reiciendis sunt. Ut ab voluptatem et aut voluptatem qui repellendus.', 'Fugiat et ea veniam dolores. Et consectetur accusantium ut architecto. Eum dicta deleniti sint ea impedit qui.', 1, '2018-04-27 13:31:38', '2018-04-27 13:31:38'),
(71, '3369103491540', '2018-04-26 10:31:38', '2018-04-26 10:31:38', '2018-04-28 05:31:38', 'assumenda labore', 1, 5, 1, 'maxime est', '2836 Wunsch Point Suite 792', 'Jaskolskimouth', 'mouth', '73230-4486', 'alias id', 'Doloribus aperiam alias ipsa eum sit saepe nisi aperiam. Dolore nihil laborum modi aliquid. Nam qui aut iusto. Quidem sed laboriosam pariatur provident.', 'Porro dignissimos dolores ut reiciendis ducimus voluptates autem. Beatae voluptatem aliquam tempore aut repellat sint quia. Inventore sequi quia sapiente dolorem accusantium.', 1, '2018-04-27 22:31:38', '2018-04-27 22:31:38'),
(72, '6566827562410', '2018-04-25 10:31:38', '2018-04-25 10:31:38', '2018-04-25 20:31:38', 'quia pariatur', 1, 3, 9, 'omnis aperiam', '664 Wisozk Springs', 'New Jonshire', 'chester', '26769', 'consequatur laboriosam', 'Et rem consequatur expedita. Rerum perspiciatis non maiores cupiditate sit voluptate. Et error officiis voluptatem omnis. Minus placeat dignissimos sint iure rem vel.', 'Voluptates suscipit provident natus quia modi expedita quo ex. Et inventore quaerat repudiandae doloremque. Error et aut quia minima unde et omnis. Eaque expedita nobis expedita et.', 1, '2018-04-25 13:31:38', '2018-04-25 13:31:38'),
(73, '7793230543975', '2018-04-25 10:31:38', '2018-04-25 10:31:38', '2018-04-26 01:31:38', 'sit autem', 1, 10, 5, 'illo ut', '31639 Roob Ridge', 'West Carli', 'stad', '14095', 'odio impedit', 'Est in neque blanditiis ad voluptatem molestias. Et qui voluptatibus et. Aliquam provident quae tempora quia. Sed saepe cum quos laborum dolores quia.', 'Sit ut quia aut repudiandae natus. Molestias eligendi illo eveniet aliquam nihil. Temporibus aliquam expedita cum quibusdam eius aut omnis.', 1, '2018-04-25 18:31:38', '2018-04-25 18:31:38'),
(74, '2705860779292', '2018-04-25 10:31:38', '2018-04-25 10:31:38', '2018-04-26 21:31:38', 'facilis nemo', 1, 2, 8, 'vel totam', '250 Fatima Plaza Apt. 545', 'Connellyborough', 'land', '65191-0548', 'quidem enim', 'Est et non tempora voluptatem necessitatibus. Perspiciatis corporis voluptatem iste dolorum. Dolorem aut assumenda vel hic harum nesciunt voluptatem odio.', 'Est esse ut possimus. Sit eligendi nihil dolores error iusto reiciendis quia. Possimus fugiat aut ut nulla iste distinctio.', 1, '2018-04-26 14:31:38', '2018-04-26 14:31:38'),
(75, '1642746440260', '2018-04-27 10:31:38', '2018-04-27 10:31:38', '2018-04-28 23:31:38', 'dolorum at', 1, 7, 3, 'iure sed', '7337 Huels Dale', 'Heathcotechester', 'land', '26294', 'omnis et', 'Provident sint exercitationem nihil enim culpa quia. Sed qui voluptate eius voluptas eos consequuntur libero. Delectus atque explicabo tempore.', 'Hic maxime sunt fugiat quidem aliquam nihil dolor. Nesciunt a quaerat nemo. Ut pariatur et vitae vel dolorum cum. Magni sapiente deleniti est rerum voluptas placeat.', 1, '2018-04-28 16:31:38', '2018-04-28 16:31:38'),
(76, '9402985982936', '2018-04-26 10:31:38', '2018-04-26 10:31:38', '2018-04-27 03:31:38', 'et officia', 1, 5, 10, 'officia sit', '1069 Raphael Circle Suite 525', 'Lakinton', 'shire', '13200', 'tempore dicta', 'Et consectetur atque harum et qui qui nobis. Et est deserunt officiis quidem quasi eius. Perspiciatis et libero unde ratione fugiat ea. Est et perspiciatis magni eligendi.', 'Consectetur dicta reprehenderit et. Quae ut provident deserunt labore aperiam. Temporibus at reprehenderit in quia deleniti fugit quia. Libero nihil quisquam soluta rerum ipsa perspiciatis.', 1, '2018-04-26 20:31:38', '2018-04-26 20:31:38'),
(77, '1072300455193', '2018-04-27 10:31:38', '2018-04-27 10:31:38', '2018-04-28 10:31:38', 'et voluptatem', 1, 1, 5, 'quia nihil', '16507 Jimmy Lock Apt. 781', 'Lake Lottie', 'town', '49307-3721', 'quo facere', 'Enim sit reiciendis excepturi quasi in quidem neque illo. Quae ut non quos nihil aperiam. Facilis quia autem aut ut ullam qui aspernatur.', 'Omnis est sunt porro aut exercitationem recusandae. Et culpa aut earum cum. Quia et ut animi laudantium nesciunt dolorem. Beatae nihil velit similique in vero dolorum.', 1, '2018-04-28 03:31:38', '2018-04-28 03:31:38'),
(78, '3455441490182', '2018-04-24 10:31:38', '2018-04-24 10:31:38', '2018-04-24 12:31:38', 'consequuntur harum', 1, 7, 4, 'impedit ex', '10985 Wuckert Ferry', 'Port Odessa', 'chester', '92806-2393', 'voluptatibus consequatur', 'Quisquam voluptas et occaecati architecto. Quia reprehenderit itaque tenetur amet. Vero illum quis ad excepturi.', 'Officiis id occaecati numquam exercitationem. Consequuntur enim aut veritatis rerum fugit sunt. Hic quasi quia cupiditate animi quae enim vitae.', 1, '2018-04-24 05:31:38', '2018-04-24 05:31:38'),
(79, '3796238783620', '2018-04-25 10:31:38', '2018-04-25 10:31:38', '2018-04-26 13:31:38', 'ipsa eos', 1, 3, 2, 'illo delectus', '60493 Lou Shore', 'Port Bette', 'town', '96608-2956', 'illum voluptatem', 'Et odio mollitia architecto architecto. Est sed eum dolor asperiores deserunt.', 'Optio minus fugiat quis qui distinctio. Voluptatem impedit ut aut et at soluta omnis.', 1, '2018-04-26 06:31:38', '2018-04-26 06:31:38'),
(80, '6746837997185', '2018-04-25 10:31:38', '2018-04-25 10:31:38', '2018-04-25 21:31:38', 'laboriosam quos', 1, 7, 1, 'numquam corrupti', '54159 Una Lakes Apt. 852', 'South Brandystad', 'chester', '05080', 'laboriosam modi', 'Facilis et illo ut aut sunt pariatur dolore autem. Et expedita quaerat totam porro libero reiciendis ad. Natus nihil dicta vitae sed.', 'Adipisci aliquam voluptatem harum ut modi iste nihil laudantium. Quam est qui velit sunt adipisci impedit ut. Similique laboriosam labore est.', 1, '2018-04-25 14:31:38', '2018-04-25 14:31:38'),
(81, '0935271803916', '2018-04-25 10:31:38', '2018-04-25 10:31:38', '2018-04-26 03:31:38', 'ipsa aut', 1, 9, 7, 'aut in', '733 Wiegand Divide Apt. 772', 'East Ryleybury', 'furt', '70457-5594', 'adipisci dignissimos', 'Sit asperiores aut blanditiis corporis ut sed aut maiores. Et et et nemo ad voluptate et rem. Facilis nobis dolore nisi cumque accusamus in. Maxime consectetur provident consequatur ea.', 'Eligendi qui deleniti ut. Veniam alias amet at quasi illo. Neque assumenda officia rerum. Reprehenderit voluptas voluptatum molestias quaerat totam rerum voluptas. Aut ut iure in.', 1, '2018-04-25 20:31:38', '2018-04-25 20:31:38'),
(82, '6759892124090', '2018-04-28 10:31:38', '2018-04-28 10:31:38', '2018-04-29 02:31:38', 'ea qui', 1, 6, 3, 'veritatis sit', '6026 Rice Via', 'Littelville', 'side', '75735', 'qui placeat', 'Ea vel a assumenda. Officiis dignissimos placeat qui laborum ratione. Facilis non fuga voluptatibus saepe. Maxime fuga id explicabo aut.', 'Pariatur aspernatur error blanditiis est voluptas impedit. Sed tempora sunt omnis ad. Omnis voluptatem quasi doloribus non aut nemo.', 1, '2018-04-28 19:31:38', '2018-04-28 19:31:38'),
(83, '3382416855625', '2018-04-27 10:31:38', '2018-04-27 10:31:38', '2018-04-27 13:31:38', 'provident aperiam', 1, 4, 8, 'beatae officia', '3466 Flatley Island', 'Port Modesto', 'mouth', '40204-2286', 'perferendis doloremque', 'Sit quas maiores molestiae quaerat est. Veritatis dicta mollitia voluptate quae incidunt doloremque corporis necessitatibus. Eum rerum magni neque. Rerum consequatur laborum quia cum.', 'Dolore expedita quibusdam voluptatem tenetur ratione. Quia incidunt totam atque assumenda aut vero. Sequi fugiat sed voluptatem et.', 1, '2018-04-27 06:31:38', '2018-04-27 06:31:38'),
(84, '6552273714985', '2018-04-27 10:31:38', '2018-04-27 10:31:38', '2018-04-28 14:31:38', 'aut porro', 1, 7, 7, 'sunt sint', '764 Treutel Loaf', 'North Bartholomefort', 'bury', '13647', 'et consectetur', 'Praesentium eum saepe facere aliquam aut architecto explicabo. Aut quas tempora omnis non ut. Labore facere cum quasi error est.', 'Velit nulla nisi aut et quo ut. Ipsum eos soluta nostrum aut sit et. Dicta quidem tenetur ab occaecati aperiam. Aut fugiat quaerat molestias sapiente a sint odit sed.', 1, '2018-04-28 07:31:38', '2018-04-28 07:31:38'),
(85, '5877610613891', '2018-04-28 10:31:38', '2018-04-28 10:31:38', '2018-04-29 20:31:38', 'sunt veniam', 1, 8, 5, 'dolorem nesciunt', '83112 Harber Park', 'Waldofort', 'berg', '98332', 'alias eum', 'Dignissimos a vel facere sed accusantium. Labore et ipsum nulla veniam fugit occaecati. Commodi vitae neque voluptate ab a.', 'Aspernatur quis nulla cumque aut. Exercitationem dolore quae molestiae. Quod sit illo eaque ut explicabo necessitatibus nihil neque. Corporis nam sunt omnis impedit ex et.', 1, '2018-04-29 13:31:38', '2018-04-29 13:31:38'),
(86, '0802146159983', '2018-04-26 10:31:38', '2018-04-26 10:31:38', '2018-04-28 05:31:38', 'possimus eligendi', 1, 7, 3, 'rem reiciendis', '39051 Ursula Inlet Apt. 462', 'Sipesville', 'haven', '75509-7056', 'sed ad', 'Sint sit temporibus quam. Est voluptatem non officiis incidunt neque dolor. Tenetur voluptatem voluptas eius dicta. Assumenda molestiae autem aspernatur tempora.', 'Inventore nam sed nihil. Sequi at eum maxime harum velit. Unde et error est magni provident id. Neque enim iusto error architecto enim.', 1, '2018-04-27 22:31:38', '2018-04-27 22:31:38'),
(87, '8696596874075', '2018-04-25 10:31:38', '2018-04-25 10:31:38', '2018-04-26 01:31:38', 'voluptatem qui', 1, 5, 6, 'excepturi occaecati', '43693 Kieran Hill', 'West Berneice', 'land', '88332', 'voluptatum aliquam', 'Aut ut adipisci cumque velit qui quas saepe neque. Quo omnis architecto molestiae eum esse dolores sed. Earum aut vel est ut cumque dolorem.', 'Necessitatibus et omnis quod sed facere dolore ad. Maiores aut non velit voluptatum sit ea quis. Quas hic ea unde.', 1, '2018-04-25 18:31:38', '2018-04-25 18:31:38'),
(88, '4078787242827', '2018-04-24 10:31:39', '2018-04-24 10:31:39', '2018-04-25 22:31:39', 'quam vitae', 1, 3, 8, 'doloribus nemo', '4598 Kreiger Trail', 'Kesslerside', 'borough', '78300', 'quisquam odio', 'Vitae officia sed et reprehenderit deleniti. Minima porro optio optio ut magnam. Dolore qui asperiores in tenetur voluptates veritatis. Quia voluptas occaecati voluptate dolore vero ut nam.', 'Facere sapiente nisi exercitationem quidem nemo nihil omnis quo. Qui rerum eligendi minus facilis corporis dolore. Est atque qui magni fuga. Ut et maxime voluptas et in voluptate cupiditate.', 1, '2018-04-25 15:31:39', '2018-04-25 15:31:39');
INSERT INTO `duties` (`id`, `duty_code`, `date`, `start_time`, `end_time`, `vacancies`, `created_by`, `prison_id`, `duty_type_id`, `location_name`, `location_street`, `location_city`, `location_town`, `location_postcode`, `prisoner_name`, `extra_info`, `notes`, `status`, `created_at`, `updated_at`) VALUES
(89, '5686984816001', '2018-04-25 10:31:39', '2018-04-25 10:31:39', '2018-04-26 19:31:39', 'unde libero', 1, 1, 4, 'quia inventore', '38211 Hayes Extensions Suite 606', 'Virgilberg', 'chester', '41937', 'tempora aspernatur', 'Eum mollitia sit eius totam alias qui recusandae. Ex nobis porro inventore et delectus praesentium. Fuga sed cum velit ratione magnam.', 'Qui et incidunt enim consequatur dolorum repellendus repellat. Suscipit ea omnis ipsa eum et. Quia omnis qui rerum.', 1, '2018-04-26 12:31:39', '2018-04-26 12:31:39'),
(90, '3021201368499', '2018-04-25 10:31:39', '2018-04-25 10:31:39', '2018-04-25 23:31:39', 'ea modi', 1, 4, 3, 'ut voluptatem', '178 Breanna Circle', 'New Meaghanview', 'borough', '13964-5008', 'quibusdam modi', 'Et deleniti porro fugiat. Ea molestias amet est. Atque sed aspernatur magnam. Asperiores cumque temporibus aut quo.', 'Distinctio quos voluptatem facere quam. Corrupti consectetur rerum numquam nihil quidem sapiente atque. Molestiae expedita molestiae sit. Soluta dolorem autem recusandae incidunt.', 1, '2018-04-25 16:31:39', '2018-04-25 16:31:39'),
(91, '7159848469838', '2018-04-25 10:31:39', '2018-04-25 10:31:39', '2018-04-26 18:31:39', 'magnam doloribus', 1, 7, 1, 'aut nisi', '9398 Schaefer Forges Suite 202', 'Robertberg', 'haven', '22225', 'iste odio', 'Aut libero consequatur tempora sapiente est. Iusto officiis inventore odio a. Aut facere consequatur rerum culpa.', 'Vel possimus numquam rerum est iste. Illo dolore tempora autem voluptas. Et exercitationem itaque maxime fugiat perferendis. Voluptatum accusamus pariatur illo.', 1, '2018-04-26 11:31:39', '2018-04-26 11:31:39'),
(92, '3959130139067', '2018-04-27 10:31:39', '2018-04-27 10:31:39', '2018-04-27 22:31:39', 'sed velit', 1, 9, 1, 'quia id', '92828 Garret Course', 'Fayefurt', 'ville', '92702', 'facilis quo', 'Quibusdam eos et aperiam nulla nisi rem. Asperiores ut beatae aut qui adipisci sed eveniet.', 'Rerum et officiis cumque autem quis adipisci illo. Rerum quas aut saepe et cupiditate. Cumque voluptatibus provident dolorem et sequi.', 1, '2018-04-27 15:31:39', '2018-04-27 15:31:39'),
(93, '6708429776516', '2018-04-24 10:31:39', '2018-04-24 10:31:39', '2018-04-25 13:31:39', 'vel dignissimos', 1, 10, 10, 'blanditiis ut', '4362 Zachary Groves Suite 760', 'Russelborough', 'mouth', '68656-8673', 'dolores eligendi', 'Delectus sed consectetur ut minus nihil dolor. Excepturi ut maxime quo provident ullam. Reiciendis aperiam natus consequatur iure quia ad minima. Unde saepe cum at autem.', 'Qui officia aut velit sunt alias aperiam distinctio. Velit accusamus non sed sint possimus. Quos et vel eos officiis.', 1, '2018-04-25 06:31:39', '2018-04-25 06:31:39'),
(94, '0765014438200', '2018-04-26 10:31:39', '2018-04-26 10:31:39', '2018-04-27 14:31:39', 'assumenda est', 1, 10, 5, 'sint fugiat', '440 Juwan Station Apt. 843', 'North Vitoview', 'burgh', '18713-0831', 'aperiam voluptatum', 'Sit ut culpa dolores sint et qui velit iste. Facere ut eaque non. Temporibus occaecati numquam et cumque reprehenderit.', 'Voluptas qui magni voluptas voluptatem facere magni. Sit libero et laboriosam et.', 1, '2018-04-27 07:31:39', '2018-04-27 07:31:39'),
(95, '9880131744094', '2018-04-28 10:31:39', '2018-04-28 10:31:39', '2018-04-28 12:31:39', 'sapiente nulla', 1, 8, 4, 'corporis eveniet', '931 Reba Street Suite 615', 'Rohanchester', 'ton', '18773', 'et et', 'Molestiae iure necessitatibus ratione quo error sit et. Consequuntur sint odio illo enim maxime est. Consequuntur delectus amet perspiciatis quo dolore. Et maiores voluptas nemo eos sed harum.', 'Est odit pariatur atque qui exercitationem. Tempore ut voluptas sint magnam officia. Cumque odit cupiditate veniam magnam ipsum.', 1, '2018-04-28 05:31:39', '2018-04-28 05:31:39'),
(96, '4241882366686', '2018-04-26 10:31:39', '2018-04-26 10:31:39', '2018-04-26 17:31:39', 'ut autem', 1, 7, 7, 'ipsum eum', '2527 McKenzie Manor Suite 592', 'West Nicolettestad', 'view', '44620-1979', 'consectetur quisquam', 'Nisi quis saepe temporibus quidem aut accusantium. Tenetur deserunt est reprehenderit ducimus est. Aut enim est est. Illum corporis sunt id adipisci est praesentium delectus nostrum.', 'Ipsam dicta sit doloribus recusandae aut magnam. Autem tempore quos aut ad eum ut ut. Harum quidem sit non. Consequuntur omnis recusandae consequatur laborum aut.', 1, '2018-04-26 10:31:39', '2018-04-26 10:31:39'),
(97, '9679705977446', '2018-04-26 10:31:39', '2018-04-26 10:31:39', '2018-04-27 10:31:39', 'fugit tenetur', 1, 4, 7, 'occaecati autem', '64950 Serenity Prairie', 'South Raqueltown', 'borough', '76502', 'numquam laudantium', 'Cumque natus ipsam in laudantium quia odit. Nobis omnis dolores possimus tempore quis. Tenetur non eius in sequi dolorem nam.', 'A mollitia sed et quia neque eos. Culpa commodi est architecto error labore tempora autem. Quae praesentium quod eos quam dolorem aut dolorem tempora. Molestiae impedit ab voluptatem.', 1, '2018-04-27 03:31:39', '2018-04-27 03:31:39'),
(98, '3301490457662', '2018-04-25 10:31:39', '2018-04-25 10:31:39', '2018-04-25 15:31:39', 'beatae dolore', 1, 1, 9, 'nesciunt fugit', '34875 Moises Station Apt. 413', 'Othafort', 'burgh', '43066-2684', 'minus voluptatem', 'A iure enim voluptas nemo expedita. Ut aut blanditiis corrupti quaerat veniam modi. Nostrum ut molestias voluptatem molestiae. Sit exercitationem maxime beatae blanditiis at enim cum.', 'Et quis eos ea perferendis. Dolorem ducimus ad quis pariatur dignissimos quia. Expedita non nisi qui corporis temporibus qui porro. Numquam dolorem ut quo sint.', 1, '2018-04-25 08:31:39', '2018-04-25 08:31:39'),
(99, '2074164279228', '2018-04-27 10:31:39', '2018-04-27 10:31:39', '2018-04-29 07:31:39', 'enim fuga', 1, 3, 10, 'aspernatur voluptates', '27521 Thelma Camp', 'East Eleanora', 'haven', '21815-0081', 'autem ea', 'Sed ipsam laboriosam ducimus eligendi. Et quis iure quos et ipsum iusto et. Ullam nesciunt iusto quo soluta quo quo. Occaecati ut saepe sint et. Nisi sit voluptatem inventore.', 'Quis et numquam optio laudantium beatae ut consectetur. Iure nisi veniam tempore. Non quibusdam et repudiandae iusto recusandae sit labore. Fugiat sint est amet quae quisquam quos.', 1, '2018-04-29 00:31:39', '2018-04-29 00:31:39'),
(100, '2181406199531', '2018-04-24 10:31:39', '2018-04-24 10:31:39', '2018-04-25 21:31:39', 'porro quidem', 1, 10, 8, 'qui odio', '20724 Grant Ranch', 'Lake Alexanechester', 'mouth', '61648', 'quia sit', 'Sit quis perspiciatis voluptatem aut voluptatem amet. Alias quia fugit dolorum quo in qui fugiat. Ut explicabo dolor et in expedita ut qui doloribus. Delectus cum quam quia quas eos autem omnis.', 'Assumenda omnis provident sapiente. Perferendis distinctio voluptatem magnam eos sed rem aut esse. Ipsum praesentium quae ipsa magni consectetur quo.', 1, '2018-04-25 14:31:39', '2018-04-25 14:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `duty_confirmations`
--

CREATE TABLE `duty_confirmations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `com_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `duty_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `duty_expenses`
--

CREATE TABLE `duty_expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `duty_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `duty_notes`
--

CREATE TABLE `duty_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `duty_types`
--

CREATE TABLE `duty_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `duty_types`
--

INSERT INTO `duty_types` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'repellendus perferendis', 1, NULL, NULL),
(2, 'nam doloribus', 1, NULL, NULL),
(3, 'officiis magnam', 1, NULL, NULL),
(4, 'saepe mollitia', 1, NULL, NULL),
(5, 'ut quia', 1, NULL, NULL),
(6, 'quidem sit', 1, NULL, NULL),
(7, 'beatae tempora', 1, NULL, NULL),
(8, 'dolorum qui', 1, NULL, NULL),
(9, 'ea est', 1, NULL, NULL),
(10, 'sunt hic', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `class_name`, `id_name`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin menus', 'backend-menus', 'c_backend-menus', 'i_backend-menus', '1', 1, '2018-04-29 03:53:39', '2018-04-29 03:53:39'),
(5, 'frontent menu', 'frontent-menu', 'c_frontent-menu', 'i_frontent-menu', '0', 1, '2018-08-29 03:07:48', '2018-08-29 03:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pid` bigint(20) DEFAULT '0',
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'get',
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middleware` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `class_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_allow` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_common` tinyint(4) NOT NULL DEFAULT '0',
  `is_login` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `pid`, `menu_id`, `name`, `path`, `controller`, `action`, `method`, `route_name`, `middleware`, `sort`, `class_name`, `id_name`, `icon`, `role_allow`, `is_common`, `is_login`, `status`, `created_at`, `updated_at`) VALUES
(27, 0, 1, 'Manage users', '#', NULL, NULL, '', NULL, '', 2, '', '', 'fa fa-user', '/1/', 0, 0, 1, '2018-04-30 21:33:30', '2018-05-03 02:37:31'),
(28, 27, 1, 'Add user', '/users/create', NULL, NULL, '', NULL, '', 5, '', '', 'fa fa-plus-square', '/1/', 0, 1, 1, '2018-04-30 21:34:54', '2018-05-01 00:20:16'),
(29, 27, 1, 'All users', '/users', NULL, NULL, '', NULL, '', 3, '', '', 'fa fa-user', '/1/', 0, 1, 1, '2018-04-30 21:35:45', '2018-05-01 00:21:28'),
(34, 0, 1, 'Manage modules', '#', NULL, NULL, '', NULL, '', 40, '', '', 'fa fa-inbox', '/1/', 0, 1, 1, '2018-04-30 22:37:10', '2018-05-03 20:36:48'),
(35, 34, 1, 'All modules', '/modules', NULL, NULL, '', NULL, '', 41, '', '', '', '/1/', 0, 1, 1, '2018-04-30 22:38:12', '2018-05-03 20:36:48'),
(36, 34, 1, 'Add module', '/modules/create', NULL, NULL, '', NULL, '', 43, '', '', '', '/1/', 0, 1, 1, '2018-04-30 22:38:58', '2018-05-03 20:36:48'),
(37, 0, 1, 'Manage roles', '#', NULL, NULL, '', NULL, '', 46, '', '', 'fa fa-power-off', '/1/', 0, 1, 1, '2018-04-30 22:40:02', '2018-05-03 20:36:49'),
(38, 37, 1, 'All roles', '/roles', NULL, NULL, '', NULL, '', 47, '', '', '', '/1/', 0, 0, 1, '2018-04-30 22:40:39', '2018-05-03 20:36:49'),
(39, 37, 1, 'Add roles', '/roles/create', NULL, NULL, '', NULL, '', 49, '', '', '', '/1/', 0, 1, 1, '2018-04-30 22:41:16', '2018-05-03 20:36:49'),
(40, 0, 1, 'Manage menus', '#', NULL, NULL, '', NULL, '', 28, '', '', 'fa fa-navicon', '/1/', 0, 1, 1, '2018-04-30 22:43:12', '2018-05-03 20:36:48'),
(41, 40, 1, 'All menus', '/menus', NULL, NULL, '', NULL, '', 29, '', '', '', '/1/', 0, 1, 1, '2018-04-30 22:43:55', '2018-05-03 20:36:48'),
(42, 40, 1, 'Add menu', '/menus/create', NULL, NULL, '', NULL, '', 31, '', '', '', '/1/', 0, 1, 1, '2018-04-30 22:44:34', '2018-05-03 20:36:48'),
(43, 0, 1, 'Manage posts', '#', NULL, NULL, '', NULL, '', 22, '', '', 'fa fa-play-circle-o', '/1/', 0, 1, 1, '2018-05-03 00:48:53', '2018-05-03 20:36:48'),
(44, 43, 1, 'All posts', '/posts', NULL, NULL, '', NULL, '', 23, '', '', '', '/1/', 0, 1, 1, '2018-05-03 00:49:22', '2018-05-03 20:36:48'),
(45, 43, 1, 'Add post', '/posts/create', NULL, NULL, '', NULL, '', 25, '', '', '', '/1/', 0, 1, 1, '2018-05-03 00:49:44', '2018-05-03 20:36:48'),
(46, 0, 1, 'Manage settings', '#', NULL, NULL, '', NULL, '', 34, '', '', 'fa fa-cogs', '/1/', 0, 0, 1, '2018-05-03 02:35:31', '2018-05-03 20:36:48'),
(47, 46, 1, 'All settings', '/settings', NULL, NULL, '', NULL, '', 35, '', '', '', '/1/', 0, 1, 1, '2018-05-03 02:36:05', '2018-05-03 20:36:48'),
(48, 46, 1, 'Add setting', '/settings/create', NULL, NULL, '', NULL, '', 37, '', '', '', '/1/', 0, 0, 1, '2018-05-03 02:36:30', '2018-05-03 20:36:48'),
(49, 0, 1, 'Manage duties', '#', NULL, NULL, '', NULL, '', 8, '', '', 'fa fa-road', '/1/', 0, 1, 1, '2018-05-03 19:28:07', '2018-05-03 20:36:47'),
(50, 49, 1, 'All duties', '/duties', NULL, NULL, '', NULL, '', 9, '', '', '', '/1/', 0, 1, 1, '2018-05-03 19:29:45', '2018-05-03 20:36:48'),
(51, 49, 1, 'Add duty', '/duties/create', NULL, NULL, '', NULL, '', 11, '', '', '', '/1/', 0, 1, 1, '2018-05-03 19:30:08', '2018-05-03 20:36:48'),
(52, 49, 1, 'Types', '/duties/types', NULL, NULL, '', NULL, '', 13, '', '', '', '/1/', 0, 0, 1, '2018-05-03 19:30:41', '2018-05-03 20:36:48'),
(53, 0, 1, 'Manage staffs', '#', NULL, NULL, '', NULL, '', 16, '', '', 'fa fa-certificate', '/1/', 0, 1, 1, '2018-05-03 20:34:46', '2018-05-03 20:36:48'),
(54, 53, 1, 'All staffs', '/staffs', NULL, NULL, '', NULL, '', 17, '', '', '', '/1/', 0, 1, 1, '2018-05-03 20:35:53', '2018-05-03 20:36:48'),
(55, 53, 1, 'Add staff', '/staffs/create', NULL, NULL, '', NULL, '', 19, '', '', '', '/1/', 0, 1, 1, '2018-05-03 20:36:38', '2018-05-03 20:36:48'),
(56, 0, 5, 'Dashboard', 'dashboard', 'Frontend\\DashboardController', 'index', 'get', 'frontend.dashboard', '', 2, 'dashboard', 'dashboard', '', '/2/3/4/', 0, 1, 1, '2018-08-29 03:12:32', '2018-08-30 03:51:04'),
(57, 0, 5, 'Duties', 'duties', 'Frontend\\DutiesController', 'index', 'get', 'frontend.duties', '', 4, 'duties', 'duties', '', '/2/3/4/', 0, 1, 1, '2018-08-29 03:19:13', '2018-08-30 03:51:04'),
(58, 0, 5, 'My Duties', 'my-duties', 'Frontend\\DutiesController', 'my', 'get', 'frontend.duties.my', '', 6, 'my-duties', 'my-duties', '', '/2/3/4/', 0, 1, 1, '2018-08-29 03:20:41', '2018-08-30 03:51:04'),
(59, 0, 5, 'Timecards & Expenses', 'timecards-expenses', 'Frontend\\TimecardsExpensesController', 'index', 'get', 'frontend.timecards-expenses', '', 8, 'timecards-expenses', 'timecards-expenses', '', '/2/3/4/', 0, 1, 1, '2018-08-29 03:21:26', '2018-08-30 03:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_sys` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `route`, `is_sys`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Manage users', 'users', 1, 1, NULL, NULL),
(2, 'Manage modules', 'modules', 1, 1, NULL, NULL),
(3, 'Manage roles', 'roles', 1, 1, NULL, NULL),
(4, 'Manage menus', 'menus', 1, 1, NULL, NULL),
(5, 'Manage posts', 'posts', 1, 1, '2018-05-03 00:45:30', '2018-05-03 00:45:30'),
(6, 'Manage settings', 'settings', 1, 1, '2018-05-03 02:33:22', '2018-05-03 02:33:22'),
(7, 'Manage duties', 'duties', 1, 1, '2018-05-03 19:27:31', '2018-05-03 19:27:31'),
(8, 'Manage staffs', 'staffs', 1, 1, '2018-05-03 20:27:15', '2018-05-03 20:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `content`, `description`, `slug`, `thumb`, `link`, `type`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abc', '<p>sdsa dsdsa</p>', '<p>as dasd</p>', '', 'uploads/5BVnBiuE5lkRYQD88zFveBn0TdUY9Rw06ID1TZCF.png', '', '', 1, 1, '2018-05-03 01:07:40', '2018-05-03 01:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `prisons`
--

CREATE TABLE `prisons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prison_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prisons`
--

INSERT INTO `prisons` (`id`, `name`, `longitude`, `latitude`, `prison_code`, `street`, `postcode`, `city`, `town`, `county`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Kristoffer Muller', '68.673121', '5.352159', '48394741', 'Philip Stream', '52692', 'North Lennafort', 'stad', 'Comoros', 1, NULL, NULL),
(2, 'Ryann Miller PhD', '-22.38064', '87.395175', '77462640', 'Eloisa Wells', '37749', 'Letaton', 'bury', 'Panama', 1, NULL, NULL),
(3, 'Megane Grant', '146.209913', '-22.347358', '65570586', 'Icie Field', '21737', 'Feeneybury', 'borough', 'Libyan Arab Jamahiriya', 1, NULL, NULL),
(4, 'Kathlyn McClure', '143.694664', '-4.456095', '01076608', 'Rohan Corners', '90124', 'South Tina', 'ton', 'Nauru', 1, NULL, NULL),
(5, 'Mrs. Kaia Pfeffer', '85.946322', '-39.677581', '43114856', 'Marcellus Loaf', '89698', 'New Maritzabury', 'borough', 'Guinea-Bissau', 1, NULL, NULL),
(6, 'Ms. Alana Becker Sr.', '129.489805', '85.757549', '71489759', 'O\'Kon Estate', '84252-0678', 'South Enrico', 'chester', 'Mauritania', 1, NULL, NULL),
(7, 'Chester Kunze', '-17.31363', '54.281488', '49019971', 'Becker Crossing', '06510', 'New Kevon', 'land', 'Marshall Islands', 1, NULL, NULL),
(8, 'Mckenna Goldner', '70.587764', '62.080417', '55700061', 'Jeanie Loaf', '78131', 'Kennithchester', 'stad', 'Estonia', 1, NULL, NULL),
(9, 'Cayla Greenholt', '22.304931', '17.383267', '63381719', 'Moriah Spurs', '00746', 'East Vivianbury', 'borough', 'Saint Lucia', 1, NULL, NULL),
(10, 'Kailyn Brakus', '146.822908', '8.411413', '08289704', 'Stiedemann Manor', '34543', 'New Rosemary', 'ville', 'Latvia', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_sys` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `is_sys`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 0, 1, NULL, NULL),
(2, 'Detail Staff', 0, 1, NULL, NULL),
(3, 'Com User', 0, 1, NULL, NULL),
(4, 'Officer', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `view` tinyint(4) NOT NULL DEFAULT '0',
  `add` tinyint(4) NOT NULL DEFAULT '0',
  `update` tinyint(4) NOT NULL DEFAULT '0',
  `delete` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`module_id`, `role_id`, `view`, `add`, `update`, `delete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, '2018-05-01 00:25:21', '2018-05-03 20:31:54'),
(2, 1, 1, 1, 1, 1, '2018-05-01 00:25:21', '2018-05-03 20:31:54'),
(3, 1, 1, 1, 1, 1, '2018-05-01 00:25:21', '2018-05-03 20:31:54'),
(4, 1, 1, 1, 1, 1, '2018-05-01 00:25:22', '2018-05-03 20:31:54'),
(5, 1, 1, 1, 1, 1, '2018-05-03 00:50:02', '2018-05-03 20:31:54'),
(6, 1, 1, 1, 1, 1, '2018-05-03 02:37:13', '2018-05-03 20:31:54'),
(7, 1, 1, 1, 1, 1, '2018-05-03 19:27:43', '2018-05-03 20:31:54'),
(8, 1, 1, 1, 1, 1, '2018-05-03 20:31:54', '2018-05-03 20:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lock_key` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'staffs 001', 1, NULL, NULL),
(2, 'staffs 002', 1, NULL, NULL),
(3, 'staffs 003', 1, NULL, NULL),
(4, 'staffs 004', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timecards`
--

CREATE TABLE `timecards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `duty_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_id` bigint(20) UNSIGNED DEFAULT NULL,
  `work_id` bigint(20) UNSIGNED DEFAULT NULL,
  `prison_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `is_sys` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_id`, `email`, `password`, `contact_number`, `photo`, `staff_id`, `work_id`, `prison_id`, `role_id`, `remember_token`, `created_at`, `updated_at`, `status`, `is_sys`) VALUES
(1, 'Super', 'Admin', 'ABC_123', 'superadmin.mypp@gmail.com', '$2y$10$egg39.YtjRQerfSUw1/tNeHHHy/fmTnvkBlgS2GWOPgrUNVkbxgim', '', 'uploads/5b8604e10a8d5-Screen Shot 2018-08-22 at 9.17.19 AM.png', 1, 1, 1, 1, NULL, NULL, '2018-08-29 02:28:49', 1, 1),
(2, 'member 001', 'abc', 'ABC_1234', 'member001@gmail.com', '$2y$10$L8eiiVhC2R/HTb.K.y3bGuFHLVJHwywt4I62Ve2qGBWhJ.11jGKJG', '1215738440', 'uploads/5b8609338e05d-Screen Shot 2018-08-22 at 9.17.19 AM.png', 2, 1, 1, 2, NULL, '2018-08-29 02:47:15', '2018-08-30 03:37:35', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `waiting_lists`
--

CREATE TABLE `waiting_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `duty_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Works 001', 1, NULL, NULL),
(2, 'Works 002', 1, NULL, NULL),
(3, 'Works 003', 1, NULL, NULL),
(4, 'Works 004', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duties`
--
ALTER TABLE `duties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `duties_created_by_foreign` (`created_by`),
  ADD KEY `duties_prison_id_foreign` (`prison_id`),
  ADD KEY `duties_duty_type_id_foreign` (`duty_type_id`);

--
-- Indexes for table `duty_confirmations`
--
ALTER TABLE `duty_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `duty_confirmations_com_id_foreign` (`com_id`),
  ADD KEY `duty_confirmations_user_id_foreign` (`user_id`),
  ADD KEY `duty_confirmations_duty_id_foreign` (`duty_id`);

--
-- Indexes for table `duty_expenses`
--
ALTER TABLE `duty_expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `duty_expenses_user_id_foreign` (`user_id`),
  ADD KEY `duty_expenses_duty_id_foreign` (`duty_id`);

--
-- Indexes for table `duty_notes`
--
ALTER TABLE `duty_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `duty_notes_user_id_foreign` (`user_id`);

--
-- Indexes for table `duty_types`
--
ALTER TABLE `duty_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_slug_unique` (`slug`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `route_name` (`route_name`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modules_route_unique` (`route`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `prisons`
--
ALTER TABLE `prisons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prisons_prison_code_unique` (`prison_code`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`module_id`,`role_id`),
  ADD KEY `rules_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_lock_key_unique` (`lock_key`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timecards`
--
ALTER TABLE `timecards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `timecards_user_id_foreign` (`user_id`),
  ADD KEY `timecards_duty_id_foreign` (`duty_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `users_work_id_foreign` (`work_id`),
  ADD KEY `users_prison_id_foreign` (`prison_id`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `waiting_lists`
--
ALTER TABLE `waiting_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `waiting_lists_user_id_foreign` (`user_id`),
  ADD KEY `waiting_lists_duty_id_foreign` (`duty_id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duties`
--
ALTER TABLE `duties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `duty_confirmations`
--
ALTER TABLE `duty_confirmations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `duty_expenses`
--
ALTER TABLE `duty_expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `duty_notes`
--
ALTER TABLE `duty_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `duty_types`
--
ALTER TABLE `duty_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prisons`
--
ALTER TABLE `prisons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `timecards`
--
ALTER TABLE `timecards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `waiting_lists`
--
ALTER TABLE `waiting_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `duties`
--
ALTER TABLE `duties`
  ADD CONSTRAINT `duties_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `duties_duty_type_id_foreign` FOREIGN KEY (`duty_type_id`) REFERENCES `duty_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `duties_prison_id_foreign` FOREIGN KEY (`prison_id`) REFERENCES `prisons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `duty_confirmations`
--
ALTER TABLE `duty_confirmations`
  ADD CONSTRAINT `duty_confirmations_com_id_foreign` FOREIGN KEY (`com_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `duty_confirmations_duty_id_foreign` FOREIGN KEY (`duty_id`) REFERENCES `duties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `duty_confirmations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `duty_expenses`
--
ALTER TABLE `duty_expenses`
  ADD CONSTRAINT `duty_expenses_duty_id_foreign` FOREIGN KEY (`duty_id`) REFERENCES `duties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `duty_expenses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `duty_notes`
--
ALTER TABLE `duty_notes`
  ADD CONSTRAINT `duty_notes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `rules_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rules_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `timecards`
--
ALTER TABLE `timecards`
  ADD CONSTRAINT `timecards_duty_id_foreign` FOREIGN KEY (`duty_id`) REFERENCES `duties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `timecards_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_prison_id_foreign` FOREIGN KEY (`prison_id`) REFERENCES `prisons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_work_id_foreign` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `waiting_lists`
--
ALTER TABLE `waiting_lists`
  ADD CONSTRAINT `waiting_lists_duty_id_foreign` FOREIGN KEY (`duty_id`) REFERENCES `duties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `waiting_lists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
