-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 28, 2022 at 01:10 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bakaumu`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile` text COLLATE utf8mb4_unicode_ci,
  `letter` text COLLATE utf8mb4_unicode_ci,
  `vission` text COLLATE utf8mb4_unicode_ci,
  `mission` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `mobile` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `fax` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `profile`, `letter`, `vission`, `mission`, `address`, `phone`, `mobile`, `email`, `fax`, `facebook`, `instagram`, `youtube`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, '<p>Yayasan Bakau Manfaat Universal ialah Yayasan yang fokus pada pengelolaan lingkungan, utamanya pada ekosistem bakau/mangrove.<br>Pendekatan dengan melakukan pendampingan kepada daerah-daerah yang memiliki ekosistem mangrove.</p><p>Mengajak berbagai elemen untuk memahami dan bekerja bersama dalam pengelolaan dan pemanfaatan mangrove.</p><p>&nbsp;</p><p>Yayasan Bakau Manfaat Universal didirikan atas dasar kesadaran bersama untuk menyelamatkan lingkugan,<br>utamanya hutan bakau. Berdiri pada 12 Juni 2017 di Jakarta melalui Notaris Ir. H. Irfan Mediawan, M.SH, M.Kn.</p>', '<p>Salam sejahtera bagi kita semua.</p><p>Tahun 2022 akan berusaha kita lalui dengan agenda kolaborasi bersama untuk menjawab berbagai tantangan dan permasalahan yang terjadi di sekeliling kita. Bumi sedang sakit, dilanda berbagai situasi yang hampir semua manusia tidak mampu menjawabnya. Covid-19 masih menjadi tantangan untuk harus kita lalui, pada saat yang sama kondisi alam akibat pemanasan global dan perubahan iklim telah mengakibatkan begitu banyak korban di berbagai belahan bumi di seluruh dunia. Di Indonesia sendiri hampir setiap hari kita melihat dan mendengar berbagai kejadian alam yang memberikan dampak negatif bagi kehidupan manusia di mana kita kesulitan untuk melakukan antisipasi.</p><p>&nbsp;</p><p>Kondisi hari ini terjadi akibat ketidakmampuan manusia melakukan pengaturan, pengelolaan dan penyesuaian terhadap berbagai tanda-tanda alam yang telah ada jauh hari sebelumnya. Kita terlihat seperti terlambat melakukan berbagai aksi nyata dalam upaya menghadapi tantangan situasi saat ini.</p><p>Indonesia telah berkomitmen pada dunia untuk memberikan kontribusi besar dengan mempertahankan dan menambah luasan mangrove sebagai ekosistem penyerap karbon terbesar dunia, hal ini perlu kolaborasi dan dukungan berbagai pihak untuk bersama-sama mengambil peran serta dalam realisasi komitmen tersebut.</p><p>&nbsp;</p><p>Kami Yayasan Bakau Manfaat Universal, juga telah menyusun berbagai agenda untuk mengambil bagian dalam pencapaian komitmen tersebut, semoga agenda tersebut dapat berkolaborasi dengan berbagai pihak untuk memastikan seluruh kegiatan memberikan manfaat dan berguna bagi kehidupan.</p><p>Hormat kami,</p><p>&nbsp;</p><p><strong>Muhammad Nasir</strong><br><strong>Ketua Umum</strong></p>', 'Yayasan Bakau Manfaat Universal berusaha menjadi yayasan yang memiliki standar kelas dunia yang diakui atas profesionalisme dan integritas yang didedikasikan untuk memajukan, menerapkan dan mengembangkan instrumen pembangunan dan menjaga kesetimbangan lingkungan hidup.', '<ol><li>Belajar dan berbagi <strong>pengetahuan, informasi</strong> <strong>dan</strong> <strong>teknologi</strong> kepada masyarakat untuk peningkatkan kualitas individu dan kelompok</li><li><strong>Bekerja</strong> dan <strong>berkolaborasi</strong> dengan berbagai lembaga baik pemerintah maupun swasta, NGO, lembaga riset dan komunitas masyarakat dalam penyelamatan lingkungan dan mengembangkan pembangunan berkelanjutan</li><li>Melakukan penanaman dan pengembangan ekosistem bakau guna mewujudkan rehabilitasi, konservasi, dan restorasi bakau di Indonesia</li><li>Pendampingan aktifitas ekonomi yang bersifat <strong>inklusif</strong> yang akan membuka kesempatan yang lebih luas bagi pencapaian kemakmuran bersama.</li><li>Melakukan <strong>advokasi</strong> dan menyediakan solusi bagi setiap pemangku kepentingan untuk menyelenggarakan pembangunan yang tetap bersandar pada kesetimbangan lingkungan hidup dan ekologi.</li></ol>', 'Gedung Tetra Pak\r\nJl. Buncit Raya Kav. 99-100\r\nPejaten Barat. Jakarta 12510 – Indonesia', '62217986660', '622179160087', 'halo@bakaumu.org', '622179197879', '@robikurniawan', '@robikurnwn', 'Bakaumu', 'bakaumu', 'bakaumu.id', NULL, '2022-04-24 05:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `category_infos`
--

CREATE TABLE `category_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_infos`
--

INSERT INTO `category_infos` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Regulation', '2022-04-21 12:47:58', '2022-04-21 12:48:27'),
(2, 'Journal', '2022-04-21 12:48:08', '2022-04-21 12:48:19'),
(3, 'Reference', '2022-04-21 12:48:35', '2022-04-21 12:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `category_news`
--

CREATE TABLE `category_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_news`
--

INSERT INTO `category_news` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'News', '2022-04-21 15:58:07', '2022-04-21 15:58:07'),
(2, 'Press Room', '2022-04-21 15:58:15', '2022-04-21 15:58:15'),
(3, 'Story From The Field', '2022-04-21 15:58:46', '2022-04-21 15:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `response` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `questions`, `response`, `created_at`, `updated_at`) VALUES
(1, 'Kenapa dinamakan Hutan Biru? Bukankah hutan berwarna hijau?', 'Kami percaya pada keseimbangan dan siklus. Jika hutannya hijau maka air laut dan langit akan biru. Kami melakukan kegiatan konservasi lingkungan dan penting untuk berpikir panjang dari hulu ke hilir dan berpikir secara holistik.\r\n\r\nPendiri kami berasal dari latar belakang budaya dan disiplin yang berbeda. Yayasan Hutan Biru merupakan metamorfosis dari Yayasan Akar Rumput Laut (YARL) dengan proses belajar mengaplikasikan partisipasi riset aksi atau yang disebut dengan participatory action research dan beberapa metode community development. YARL lalu menjadi Mangrove Action Project (MAP Indonesia) yang banyak bekerja di kawasan mangrove, sebuah ekosistem penting di Indonesia tetapi kurang diperhatikan sehingga rusak dan beralih fungsi secara cepat.\r\n\r\nSeiring berjalannya waktu, MAP berubah visi dan misinya dan mensasar daerah aliran sungai, lalu menjadi Yayasan Hutan Biru karena kami bermimpi ingin membirukan langit dan laut dan juga menghijaukan hutan.', '2022-04-21 19:03:54', '2022-04-21 19:04:38'),
(3, 'How to be a volunteer in the Blue Forests Foundation?', 'Most of our team starts with voluntary participation. We are very happy if many people have a high desire for volunteerism and want to study at our organization. We open the door as wide as possible to accept the desire. Stay tuned for more information on our website and social media', '2022-04-24 06:22:02', '2022-04-24 06:22:02'),
(4, 'What do I do if I want to join and work at Blue Forests Foundation?', 'We will publish job vacancies through our website or our social media. We will explain in as much detail as possible our human resource needs and opportunities to join our organization. Stay tune!', '2022-04-24 06:22:19', '2022-04-24 06:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_info_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `attach` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `category_info_id`, `title`, `desc`, `attach`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'Analysing Carbon Stock Data in Particular Mangroves Spesies in Indonesia 123', '<p>Author&nbsp;: Muhammad Arifuddin, Co-Author : Muhammad Nasir, Muslim Andri Setiadi</p><p>&nbsp;</p><p><strong>ABSTRACT</strong></p><p>&nbsp;</p><p><strong>Aim</strong> Our scientific understanding of the ability of various types of mangrove in absorbing carbon is inadequate. Carbon sequestration data on available mangrove species in Indonesia needs to be improved. Here, we map the data of various types of mangroves in terms of its ability to absorb carbon per hectare using previously published research data, so that it will look at the characteristics of the data available today.</p><p>&nbsp;</p><p><strong>Methods</strong> We collect and interpret 48 data scattered in 10 locations in Indonesia from various research results. The data then standardized based on the units that have been determined, so have an equivalent value. Furthermore, the data will be classified and analyzed according to the type of mangrove, so that the characteristics of the data can be seen.</p><p>&nbsp;</p><p><strong>Results</strong> These data are grouped into 21 species: <i>Aegicera corniculatum, Avicenia lanata, Avicenia marina, Avicennia alba, Avicennia marina, Avicennia officinalis, Bruguiera cylindrica, Bruguiera gymnhoriza, Bruguiera parviflora, Ceriops decandra , Ceriops tagal, Lumnitzera, Lumnitzera littoreae, Rhizophora apiculata, Rhizophora mucronata, Rhizophora stylosa, Scyphiphora hydrophyllacea, Sonneratia alba, Sonneratia caseolaris, Xylocarpus granatum and Xylocarpus moluccensis</i>. These data, showing significant differences in values ​​of the same species, eg <i>Sonneratia caseolaris</i> has the largest range of values, ie 15 – 654 tC/ha followed by <i>Avicennia marina</i> 5 – 437 tC/ha and <i>Rhizophora apiculata</i> 0.5 – 108 tC/ha.</p><p>&nbsp;</p><p><strong>Main Conclusions</strong> We report that each type of mangrove has different carbon store values. From these data, there is a very significant difference in values ​​on the same type. The largest range occurred in <i>Sonneratia caseolaris</i> 15-654 tC / ha, whereas the carbon calculation method used was in accordance with existing standards. This indicates that there are variables that have not been taken into account in the method of calculating carbon in mangrove that has been standard now, such as the variable of environmental characteristics and age. In addition, it also indicates that research on blue carbon is still not well consolidated.</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>Keywords:</strong> <i>Mangrove, Carbon Sequestration, Blue Carbon, Indonesia.</i></p>', '21042022212305-attach.pdf', 1, '2022-04-21 13:23:05', '2022-04-21 14:05:28'),
(2, 3, 'Rencana Strategis Direktorat Jenderal Pengendalian Daerah Aliran Sungai dan Hutan Lindung Tahun 2015-2019', '<p><strong>RINGKASAN EKSEKUTIF</strong></p><p>&nbsp;</p><p>Perencanaan pembangunan jangka menengah Direktorat Jenderal Pengendalian Daerah Aliran Sungai dan Hutan Lindung&nbsp;(Ditjen PDASHL) yang dituangkan dalam Rencana Strategis Tahun 2015-2019 ini merupakan penjabaran dari Rencana&nbsp;Pembangunan Jangka Menengah Nasional dan Rencana Strategis Kementerian Lingkungan Hidup dan Kehutanan tahun 2015-2019,&nbsp;yang memuat capaian kinerja selama periode renstra sebelumnya serta target pada periode tahun 2015-2019.</p><p>Berbeda dengan Renstra tahun 2010-2014 dimana Direktorat Jenderal memiliki visi dan misi sendiri, maka pada Rencana&nbsp;Strategis 2015-2019 visi dan misi pembangunan ditetapkan secara nasional dan dituangkan pada RPJMN, sedangkan untuk tingkat&nbsp;Kementerian/ Lembaga dan Direktorat Jenderal menjabarkan visi dan misi pembangunan nasional dengan kebijakan-kebijakan&nbsp;stretegis masing-masing bidang.</p><p>&nbsp;</p><p>Berdasarkan Peraturan Presiden nomor 16 tahun 2015 tentang Kementerian Lingkungan Hidup dan Kehutanan terjadi&nbsp;penggabungan 2 (dua) kementerian yaitu Kementerian Kehutanan dan Kementerian Lingkungan Hidup. Penggabungan ini&nbsp;berdampak pada tugas dan fungsi dari organisasi tidak hanya pada tingkat kementerian tetapi juga pada tingkat dibawahnya. Tugas&nbsp;dan fungsi Ditjen PDASHL yaitu (1) merumuskan kebijakan; (2) melaksanakan kebijakan; (3) menyusunan norma, standar,&nbsp;prosedur, dan kriteria; (4) melakukan koordinasi dan sinkronisasi pelaksanaan kebijakan; (5) melaksanakan bimbingan teknis dan&nbsp;supervisi; (6) melaksanakan evaluasi dan pelaporan penyelenggaraan pengelolaan daerah aliran sungai, pembinaan kesatuan&nbsp;pengelolaan hutan lindung, perbenihan tanaman hutan, penanaman dan pemeliharaan tanaman hutan, pemulihan kerusakan&nbsp;ekosistem perairan darat, rehabilitasi hutan dan lahan, serta konservasi tanah dan air.</p><p>Program yang terkait dengan pembangunan kehutanan di bidang PDASHL yaitu Program Pengendalian DAS dan Hutan&nbsp;Lindung. Program ini bertujuan untuk meningkatkan fungsi DAS dan daya dukung DAS pada kawasan hutan lindung dan luar&nbsp;kawasan hutan melalui pengelolaan DAS secara lebih efisien, optimal, adil dan berkelanjutan untuk dapat mengelola sumber daya&nbsp;hutan dan lahan dengan tetap memenuhi kaidah sustainable forest management (SFM). Hasil (outcome) yang diharapkan adalah&nbsp;berkurangnya lahan kritis pada DAS Prioritas dan Hutan Lindung sehingga dapat mengurangi resiko bencana alam, dan&nbsp;meningkatkan kesejahteraan masyarakat dalam usaha komoditas kehutanan.</p>', '21042022220742-attach.pdf', 1, '2022-04-21 14:07:42', '2022-04-21 14:08:12'),
(3, 1, 'Inpres No 5 Tahun 2019 Tentang Penghentian Pemberian Izin Baru Dan Penyempurnaan Tata Kelola Hutan Alam Primer Dan Lahan Gambut', '<p>Awal Agustus 2019 tepatnya pada tanggal tujuh, Presiden Joko Widodo menandatangani <a href=\"https://drive.google.com/open?id=128DlSSMWvJ7YbB7oTIhrneRxD5FzRYnn\">Instruksi Presiden Republik Indonesia Nomor 5 Tahun 2019 </a>Tentang Penghentian Pemberian Izin Baru Dan Penyempurnaan Tata Kelola Hutan Alam Primer Dan Lahan Gambut, hal ini membuktikan bahwa keinginan dalam melakukan penataan terhadap hutan dan lahan gambut sangatlah serius. Terbitnya Inpres tersebut dapat dipastikan didasari oleh masih banyaknya tantangan dalam impelementasi kebijakan yang telah diterbitkan sebelumnya.</p>', '', 1, '2022-04-21 14:10:48', '2022-04-24 06:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_04_20_164000_create_teams_table', 2),
(6, '2022_04_20_192845_create_services_table', 3),
(7, '2022_04_20_195722_create_category_infos_table', 4),
(8, '2022_04_21_205037_create_infos_table', 5),
(9, '2022_04_21_221809_create_projects_table', 6),
(10, '2022_04_21_222332_create_partnerts_table', 6),
(11, '2022_04_21_232517_create_category_news_table', 7),
(12, '2022_04_21_232533_create_news_table', 7),
(13, '2022_04_22_001538_create_abouts_table', 8),
(14, '2022_04_22_025338_create_faqs_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_news_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_news_id`, `title`, `desc`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 1, 'Building Local Food-Based Security 123', '<p>Food is one of the basic human needs that are needed every day for life. The issue of food is a critical discussion for the dynamics of the nation’s economic and even political development.&nbsp;</p><p>&nbsp;</p><p>As an agrarian and maritime country, it does not necessarily bring Indonesia to be able to achieve food sovereignty. There are many problems that occur related to food availability such as food shortages, soaring food prices in certain seasons, food quality, hunger, poor nutrition, and poisoning.</p><p>Even in certain cases, the food shortages problem can trigger acts of violence, riots, and looting. Even though accidents like those should not occur because the country is obliged to guarantee the food availability for its people.</p><p>&nbsp;</p><p>As stated in the Constitution on Food Point b “that the country is obliged to actualize the availability, affordability and fulfillment of sufficient, safe, quality and nutritionally balanced food consumption, both at the national and regional levels to individuals evenly throughout the territory of the Republic of Indonesia at all times by utilizing resources, institutions and local culture.”</p><p>The food availability challenge is not enough to be overcome only by farming, but a Food Management System is needed. The system is how to create a production system ranging from planning, cultivation, harvesting, post-harvest, distribution to marketing that is environmentally friendly and sustainable.</p><p>For example, planning for planting by considering the condition of the land, season, crop rotation, the availability of plant nutrients, so it does not experience crop failure. In addition to this challenge, another food availability challenge is the food import flow which is very difficult to contain. There are many various imported food products such as rice, sugar, salt, wheat, etc. According to BPS data, the amount of imported rice is 2.2 million tons, while the production of rice in 2018 is 32.42 million tons of rice, with rice consumption for 263 million Indonesians equivalent to 29.57 million tons of rice. This means that there is a surplus of 2.85 million tons of rice. This has always been a question mark for the community, if, in reality, there is a surplus of rice, then why does the country continue to import?</p><p>&nbsp;</p><p>&nbsp;</p><p>This condition is a big scourge for farmers because many rice production results are not absorbed. Ideally, high production is a benefit for farmers, but the opposite is true. A policy to limit food imports is needed so that it is more profitable for farmers so that farmers are more passionate about doing productive business.</p><p>Import restrictions are also very important to be carried out in order to ensure food safety for the community. A simple example is organic products that are produced with lower production costs but are sold at high prices. On the other hand, farmers benefit from this condition. But, on the other side, the high price of organic food makes people prefer imported food that is cheaper, and they believed to be of high quality and prestigious. Though not all imported products have high quality. For this reason, a major effort is needed to raise awareness and trust in the community that local food is more qualified than imported food.</p><p>&nbsp;</p><p>Facing the food availability challenge requires strategic efforts to encourage food security. Food security is a condition of fulfilling the supply of food for the country up to individuals to be able to live healthy, active and productive sustainably. To achieve food security several important points that must be done include first, providing a variety of local food-based food sources. Each region is encouraged to be able to reproduce local food such as sago, sweet potato, corn, and sorghum, instead of uniforming one type of staple food that threatens local food availability and not in accordance with the culture and consumption patterns of the community.</p><p>Second, improve the quality of local food. Food quality is very dependent on the application of cultivation systems. Cultivation systems used today by farmers are generally dominated by the use of synthetic chemical fertilizers and pesticides which have many negative impacts on soil quality and product quality due to the chemical residues left behind. Soil conditions, slowly but surely become unproductive. This also threatens the fulfillment of the quality of local food production and health threats for the people who consume them.</p><p>&nbsp;</p><p>Third, increasing public awareness and trust to love local products more than imported products. The local food products must be guaranteed quality at affordable prices. If this is fulfilled, Indonesia will be able to sovereign food.</p><p>&nbsp;</p><p>Happy National Food Day!</p>', '22042022000435-image.jpg', 1, '2022-04-21 16:03:39', '2022-04-21 16:08:17'),
(3, 3, 'Notes From Mangroves And Indigenous Peoples Online Discussion', '<p>Traditionally, indigenous peoples in the Indonesian archipelago live together with nature. In many places in the coastal region, indigenous peoples and mangrove ecosystems live side by side and support each other. This was illustrated in an online discussion,<i> #NgobrolBarengTimYHB</i> (#ChatWithBFTeam)&nbsp; conducted by Blue Forests.</p><p>&nbsp;</p><p><i>#NgobrolBarengTimYHB</i>&nbsp; is an online discussion series held by Blue Forests during the Covid-19 pandemic. In the series “Mangroves and Indigenous Peoples” held on Tuesday, June 2, 2020, this discussion also presented Paskalis Wakat, a carving artist and traditional community leader from Yepem Village, Asmat, Papua.</p><p>From the Blue Forests Team talk with Paskalis Wakat, it revealed the importance of mangrove ecosystems for the Asmat indigenous people. Mangrove ecosystems that are preserved sustainably provide benefits to indigenous peoples. On the other side, indigenous wisdom practices of indigenous people also help to maintain the sustainability of mangrove ecosystems.</p><p>&nbsp;</p><p>The benefits provided by the mangrove ecosystem are felt by indigenous people in social, economic and ecological aspects. This situation is well represented through the phrase conveyed by Paskalis Wakat, namely “mangrove forests are mothers to Asmat people.” The point is that mangroves have done all the actions as a mother does to her child such as take care, feed, preserve, protect, and to support their lives. All of these things were felt by the Asmat indigenous people in their interactions with the mangrove ecosystem on the southern coast of Papua.</p><p>&nbsp;</p><p>From a social aspect, mangrove forests are a pivotal identity for the Asmat indigenous people. Some locations within the mangrove area are sacred or holy to them. In order to protect the area, the Asmat people set bans or restrictions on utilization activities. “We are implementing what is called <i>pisis</i>, <i>tetre</i>, <i>karu</i>, and <i>teser</i>,” Paskalis explained&nbsp; some of the local wisdoms run by the community to protect the mangrove ecosystems.</p><p><i>Pisis</i> and <i>tetre</i> are traditional conservation actions that are applied in certain locations, for example in the forests that are becoming critical areas. Forests that have been subject to<i> pisis </i>and <i>tetre</i> rituals may not be used for a certain period of time. This restriction is intended to provide an opportunity for nature to grow back or regenerate naturally. The practice of local wisdom is similar to <i>sasi</i>, a custom which is carried out in the Maluku and surrounding areas.</p><p>&nbsp;</p><p>Meanwhile, <i>karu</i> and<i> teser </i>are legal forms in the Asmat indigenous people’s belief system. Sanctions for these two violations of the law are believed to be handed down directly by the ancestors to the offenders. <i>Karu</i> is a violation of the law which is still considered minor. Sanctions can be in the form of reprimand or bad luck, whereas the most serious form of traditional violation is <i>teser</i>. Violation of this law can result in harm or even death. This customary law is very upheld by the Asmat indigenous people, including in managing their natural resources.</p><p>&nbsp;</p><p>Mangrove forests are also a provider of raw materials for the construction of <i>jew </i>traditional houses. <i>Jew</i> is the center of social activity for the Asmat indigenous people. It is also the traditional house in the form of an elongated stage building. Many community activities, ranging from interacting, traditional ritual events, to deliberations on decision-making carried out are held in <i>jew</i>. That is why the Asmat indigenous people protect mangrove forests that much. “If the mangrove (forest) is damaged, where do we want to get materials to build <i>jew</i> from? If it were so, our customs might disappear. Asmat people will definitely disappear too, “said Paskalis.</p><p>&nbsp;</p><p>Sustainable mangrove ecosystems also provide benefits to indigenous peoples from an economic aspect. As we know, healthy mangroves are spawning and foraging for various aquatic biota. The abundant fishery products in the mangrove ecosystem are utilized by indigenous peoples to fulfill their household economies. In Paskalis’ village, for example, most residents work as fishermen who utilize the abundance of natural products around the mangrove ecosystem. Among them are various types of fish, shrimp, shellfish, to <i>karaka</i> or mangrove crabs which are famous as luxury dishes in restaurants in various cities and countries.</p><p>The catches of Asmat traditional fishermen are mostly distributed to markets in the district center to meet the food needs of other communities. The proceeds of the sale are used to meet the daily needs, school fees, and children’s tuition. “In our village, there are already quite a lot of children who continue to study out of town because of the mangrove forest’s results,” Paskalis said with a smile.</p><p>&nbsp;</p><p>The indigenous peoples’ economy that is based on natural resource management has proven to be more resilient even in the current Covid-19 pandemic. When the economy was exhausted because of Covid-19, the recession was hardly felt by indigenous peoples in Asmat. Those who still depend on nature to continue working as usual. In addition to coastal activities as mentioned above, the Asmat indigenous people can also still use the forest to till sago and collect other forest products. Some are gardening by growing vegetables, fruits, and tubers.</p><p>&nbsp;</p><p>Indigenous peoples in Asmat form their own social safety nets through sustainable management of natural resources. With that way, nature provides guaranteed availability of livelihoods that continue to exist. It is sufficient and sustainable.</p><p>Apart from the social and economic aspects, the ecological benefits of the mangrove ecosystem that are still maintained are also felt by the indigenous people. Mangrove trees that live along with the coast function as a soil binder to reduce the risk of abrasion. The function of the mangrove ecosystem green belt is also felt by indigenous people who live in coastal villages. Mangroves become a kind of natural fortress that protects the village from the storm and big waves.</p><p>“At the end of each year, our area faces western winds. At that time the wind and big waves usually threaten us at sea. But because there is a mangrove forest we can live in peace in the village,” Paskalis explained.</p><p>&nbsp;</p><p>&nbsp;</p><p><i><strong>Some Threats</strong></i></p><p>Mangrove ecosystems with traditional use activities that run by indigenous peoples are currently threatened with the potential to disrupt sustainability. Besides being pressured by the inclusion of more modern systems, the biggest threat comes from the land conversion process in the mangrove area. The land conversion is intended to open new settlements, office areas and other infrastructure facilities in the development scheme by the government. In addition, large-scale land clearing also occurred with the entry of large-scale monoculture plantation industries such as oil palm as well as mining activities, both legal and illegal.</p><p>This has begun to be felt by the neighboring districts of Asmat, such as Mimika, Mappi, Boven Digul, and Merauke. Massively changing the function of indigenous peoples’ territories also meant that the social system was transformed for them. The loss of forest causes the erosion of the cultural identity values of indigenous peoples, which used to hunt and gather traditional uses and are now forced to shift to a more modern economic system. Those who do not have enough stock to face these changes will live in very vulnerable conditions.</p><p>&nbsp;</p><p>In order to anticipate the impact of reaching the Asmat villages, the indigenous people began to make efforts to protect the forest at the village level. With the support of various parties, they conducted an action program to improve community-based management. Activities undertaken include mapping of indigenous peoples’ management territories, the forest guard groups formation that involves youth and traditional leaders, the village regulations preparations that adopt customary law or local wisdom that is still carried out by indigenous peoples, and the sustainable livelihoods development.</p><p>Strengthening the community-based forest management system is expected to be a protection when the threat reaches the village. Adopting what has been carried out by indigenous peoples to be adapted into the management system will foster community confidence in managing their territory. When the temptation to change the function of the area came, they already had capital in the awareness form that forests are an important asset for livelihoods. When forests are damaged, life will be threatened.</p><p>&nbsp;</p><p><i><strong>Some Opportunities</strong></i></p><p>The most powerful keyword in efforts to improve the forest area management system is collaboration. Collaborative management (co-management) in a forest area will gather all the strengths and interests of the parties. Management collaboration will reduce sectoral egos and overlap programs and policies. The stakeholders will complement each other in an effort to encourage improved management of forest areas. This is what is being encouraged to be done in Asmat and several other districts in Papua.</p><p>In addition, indigenous peoples with the support of the parties need to welcome policies issued by the government related to the management of customary forests. In 2015 the Constitutional Court determined that Customary Forests had been declared as not State Forests. Moreover, the government has also determined the implementation of the Social Forestry scheme, which includes Customary Forests. This needs to be followed up with an inventory process and the determination of Indigenous Forest areas throughout Indonesia, including in Papua. Determination of Customary Forests is a formal legal effort to secure forest areas that are managed independently by indigenous peoples.</p><p>&nbsp;</p><p>This online discussion can be accessed at YouTube: <a href=\"https://bit.ly/MangroveAsmat\">https://bit.ly/MangroveAsmat</a></p>', '22042022001146-image.jpg', 1, '2022-04-21 16:11:46', '2022-04-21 16:11:46'),
(4, 1, 'A Guide to Carbon Calculation and Offsetting', '<p>Global CO2&nbsp;emissions have increased from 2 billion tons in 1900 to a staggering&nbsp;<a href=\"https://www.statista.com/statistics/264699/worldwide-co2-emissions/\">36.5 billion tons in 2018</a>, equalling 4.07 metric tons CO2&nbsp;for the global average carbon footprint per capita. While it’s easy to read such data and largely stay distant from the issue, it is important to acknowledge that every individual or entity contributes to the 36.5 billion tons.&nbsp;</p><p>To avoid a catastrophic 2OC rise in global temperatures, the average global carbon footprint per year needs to drop to&nbsp;<a href=\"https://www.nature.org/en-us/get-involved/how-to-help/carbon-footprint-calculator/\">under 2 tons by 2050</a>.</p><p>The target, whether on a personal, organisational, regional, or global level, is to set sustainable goals and execute</p><p>&nbsp;</p><p>.&nbsp;</p><p><strong>Global statistics for carbon footprint</strong></p><p>Although the average human releases about 4.07 tons of CO2&nbsp;every year indeed, it should be noted that per capita emissions are far greater among developed countries than in developing countries.&nbsp;</p><p>The EU average is about 13.8 tons CO2&nbsp;per capita, while the same stands at 25 tons CO2&nbsp;per capita for the US.&nbsp;</p><p>While it is true that electric power enterprises are the largest company contributors, playing the blame game does little to offset the impacts of climate change.</p><p>&nbsp;</p><p><strong>Calculating carbon footprint and understanding its impact</strong></p><p>On the individual level, home and office energy usage, travel, meals, and stays in hotel rooms are considered to calculate the carbon footprint.&nbsp;</p><p>For company calculations, the entire value chain of the product or service offered by the organisation must be taken into consideration. Business calculations include office emissions through energy consumption, natural gas, electricity, heating oil, propane, servers, fleet, employee&nbsp;travel, and commute.&nbsp;</p><p><a href=\"https://www.myclimate.org/\">Myclimate.org</a>,&nbsp;<a href=\"https://carbonfund.org/\">carbonfund.org</a>, and&nbsp;<a href=\"http://www3.epa.gov/\">www3.epa.gov</a>&nbsp;are some of the resources available online to help business start their journey towards tackling climate change issues. Having a handle over personal or business-wide data helps us understand our contribution to combating climate change.&nbsp;</p><p>&nbsp;</p><p><strong>How certain business initiatives are contributing to the cause</strong></p><p>In a bid to foster environmental sustainability in the workplace, several companies worldwide, including Microsoft, have undertaken the oath to become carbon-neutral or even carbon-negative. Carbon-neutral companies offset their emissions completely. Carbon-negative companies on the other hand strive to achieve a level of sustainability that positively impacts the environment.&nbsp;</p><p>Carbon offsetting, e.g. by means of purchasing carbon credits or tree planting, is the term used to define contributions towards reversing the emission curve. A carbon credit is a generic term for any tradable certificate or permit representing the right to emit one tonne of carbon dioxide or the equivalent amount of a different greenhouse gas.</p><p>On the question of how to reduce carbon footprint, business firms can undertake several missions, including usage of renewable energy sources, or even simply regulating the office thermostat. But to scale the impact on a broader level, unhindered and constant efforts is the need of the hour.&nbsp;</p><p>&nbsp;</p><p><strong>EcoMatcher to combat carbon offsetting</strong></p><p><a href=\"http://www.ecomatcher.com/\">EcoMatcher</a>&nbsp;understands that businesses may not have all the time and resources to spend on organizing, planning, and sustaining eco-friendly ventures and that using a helping hand in this forte could go a long way. EcoMatcher provides transparent solutions to incorporate corporate tree planting into the business without it necessarily being a one-off campaign that’s held once a year, for the sake of tax rebates. Instead, EcoMatcher connects vetted foundations or NGOs specialized in tree-planting from around the world and companies to work hand in hand on a regular basis in a transparent way.&nbsp;</p><p>Incorporating the strategy for environmental change in rewards and loyalty programs doesn’t just act towards the cause but also increases brand value in the customer’s and employee’s eyes. As part of the value proposition, customers and employees can make virtual visits to all trees planted through a simple web and mobile iOS/Android app. Not only that, each tree planted is also monitored by local communities in order to ensure unhinged success stories.&nbsp;</p><p>EcoMatcher’s radical strategy to improve the participation of larger organisations in the battle against climate change takes the responsibility off the hands of the company through simple outsourcing. EcoMatcher contributes to global reforestation by channelling monetary resources of large organisations into the livelihood of farmers who walk the talk of tree planting on the daily.</p><p>&nbsp;</p><p><strong>The way forward- policies for change</strong></p><p>After the agreed 1997 Kyoto Protocol,&nbsp;<a href=\"https://www.ecomatcher.com/the-paris-agreement-a-refresher/\">the Paris Agreement</a>&nbsp;points to worldwide commitments to climate action in order to keep the 2OC rise in temperature. The G20 is responsible for 80% of emissions and are in the thick of framing policy towards&nbsp;<a href=\"https://www.ecomatcher.com/a-un-sdgs-refresher-and-progress-report/\">United Nations Sustainable Development Goals or UN SDGs</a>. Governments across the globe are increasingly setting up policies that help the causes of the UN and IPCC (Intergovernmental Panel on Climate Change).&nbsp;</p><p>Canada, Europe, and other world leaders already recognise the impetus that small businesses can provide to the UN SDG and are setting up policies that accelerate sustainability innovation. Countries are now looking at revamping entire subsidy systems for the energy and food industries. Carbon tax and the incentivising of carbon farming are Bills on the tables of several parliaments across the globe, ready to be turned into Acts.&nbsp;</p><p>In the light of these policies coming into effect the following decade, EcoMatcher could be a great partner for every company’s CSR policies to take flight. By connecting companies, communities, and consumers through transparent tree-planting, EcoMatcher provides a one-stop solution to the economy of the climate crisis.</p>', '22042022165600-image.jpg', 1, '2022-04-22 08:56:00', '2022-04-22 08:56:00'),
(5, 1, 'Nayaro Forest Resources Sustainability Thread', '<p>After several times of monitoring, the group discovered the fact that the forest area which is a sacred place (Historical Sacred Protection Zone) is still maintained well and has a very high level of biodiversity. This is inversely proportional to areas close to community settlements (Forest Product Utilization Zone) where this area is very easily accessed and is not an area that is sacred by the Nayaro people. Based on the results of monitoring, several important animal species such as cassowaries and wild boar have been very difficult to find, both directly seen, sounds, tracks, dirt and nests. It is allegedly because of the high activity of hunting in this region. Realizing this, the group then initiated the formulation of the Nayaro village regulation on Forest Utilization and Protection to regulate the use of natural resources in Nayaro.&nbsp;</p><p>&nbsp;</p><p>“If we don’t regulate it, it is dangerous. Indeed we, Kamoro community, live from nature by hunting. But if everything from the big to the small ones, the young ones are also taken, after a long time they can run out too,” explained Sam.</p><p>The group’s proposal to formulate village regulations was welcomed by the village government and Nayaro traditional leaders. “This is a good thing. We as the traditional elders are very supportive of the village regulations,” said Paulinus Mapuaripi, Chairperson of Bamuskam and Traditional Council of Nayaro Village.</p><p>&nbsp;</p><p><strong>Starting from Ourselves</strong></p><p>[Photo] Rufus Tumuka, a member of the Nayaro Forest Protection Group, found traces of the KKMB found during monitoring.</p><p>Until now group members continue to carry out the socialization and awareness raising of the conservation importance to the community. Moreover, now the spawn season of Pig Snout Turtles / KKMB (Carettochelys insculpta) is already in season. At times like this, people usually take eggs and KKMB mother as an additional source for the community protein. The group realizes that taking eggs and KKMB broodstock is not limited, it is not impossible, in the future KKMB will become extinct. Although it is not easy, the presence of the group has now been heard by the community. “We are slowly trying to make the community aware. We start with ourselves and our family members. Yesterday Kris Mepere’s father, one of the members of the group netted fish in Kali Kopi, and after being lifted it turned out that there was a KKMB caught in his fishing net. Without long thinking, Kris asked that the KKMB be released, finally he set it free, “said Sam.</p><p>Through a persuasive approach, group members continue to spread the spirit of conservation to the community, especially school-age children. The result is that people are now gradually understanding and caring for the environment. “In the past, those small children when they walked, they all held a slingshot. They shot birds using slingshots. But now because they know that we are a forest protection group, finally they think again if they want to slap a bird, “Sam said.</p><p>It is indeed not easy to carry out conservation advocacy efforts to the community, especially because the community uses natural resources to meet their daily needs. It needs the support of all parties starting from the Customary Elders, the Village Government, the District Government, the Forest Service Branch, BBKSDA, and PTFI as those who have been granted a permit to manage the area by the government. Through the Forest Protection group, natural resources need to be ensured in a wise management based on the values of the local wisdom of the community.</p><p><br>&nbsp;</p>', '22042022165828-image.jpg', 1, '2022-04-22 08:58:28', '2022-04-24 01:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `partnerts`
--

CREATE TABLE `partnerts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partnerts`
--

INSERT INTO `partnerts` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Privy', '21042022225905-logo.jpg', '2022-04-21 14:59:05', '2022-04-21 14:59:05'),
(2, 'Bumi Buddies', '21042022230018-logo.png', '2022-04-21 15:00:18', '2022-04-21 15:00:18'),
(3, 'Wise Steps', '21042022230040-logo.jpg', '2022-04-21 15:00:40', '2022-04-21 15:00:40'),
(4, 'Jejakin', '21042022230054-logo.png', '2022-04-21 15:00:54', '2022-04-21 15:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partnert_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_year` int(11) DEFAULT NULL,
  `end_year` int(11) DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('planning','onprogress','done') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `partnert_id`, `title`, `start_year`, `end_year`, `desc`, `location`, `cover`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'DEVELOPMENT OF PROBOSCIS MONKEYS AND MANGROVE ECOTOURISM', 2018, 2019, '<p>The Blue Forest Foundation is involved in ecological, social and economic assessments for the development of the Bekantan and mangrove ecotourism development training in Samboja. After being involved in the study, YHB also supported the implementation of mangrove ecology training, the Mangrove HHBK Field School, and the ecological mangrove rehabilitation training. The series of activities was supported by ELTI – YALE University and Tropenbos.</p><p>The purpose of this activity is to see the potential of natural resources and develop community capacity for the development of mangrove and proboscis monkey ecotourism on the Sungai Samboja River.</p>', 'Semboja, Kutai Kartanegara Regency, East Kalimantan, Indonesia', '21042022230324-cover.jpg', 'onprogress', 1, '2022-04-21 15:03:24', '2022-04-21 15:15:24'),
(2, 3, 'Development Of Proboscis Monkeys And Mangrove Ecotourism', 2018, 2019, '<p>The Blue Forest Foundation is involved in ecological, social and economic assessments for the development of the Bekantan and mangrove ecotourism development training in Samboja. After being involved in the study, YHB also supported the implementation of mangrove ecology training, the Mangrove HHBK Field School, and the ecological mangrove rehabilitation training. The series of activities was supported by ELTI – YALE University and Tropenbos.</p><p>The purpose of this activity is to see the potential of natural resources and develop community capacity for the development of mangrove and proboscis monkey ecotourism on the Sungai Samboja River.</p>', 'Semboja, Kutai Kartanegara Regency, East Kalimantan, Indonesia', '24042022083833-cover.jpg', 'done', 1, '2022-04-24 00:38:33', '2022-04-24 00:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `desc`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Research and Development', 'Research and Development merupakan layanan kegiatan penelitian dan riset untuk mengenali, memahami, mengimplementasikan, mengelola, dan memanfaatkan potensi alam untuk menjaga keseimbangan lingkungan dan mengembangkan potensi alam.', '20042022195009-icon.png', '2022-04-20 11:50:09', '2022-04-20 11:50:09'),
(2, 'Community Development', 'Community Development merupakan layanan pemberdayaan individu dan komunitas untuk mengaktifkan kegiatan dan kerja-kerja produktif dalam aktifitas keseharian masyarakat guna mendukung kemajuan suatu wilayah.', '20042022195059-icon.png', '2022-04-20 11:50:59', '2022-04-20 11:50:59'),
(3, 'Knowledge Sharing', 'Knowledge Sharing merupakan layanan kegiatan distribusi informasi dan pengetahuan dalam membangun karakter, pola kerja, manajemen dan cara memanfaatkan sumber daya alam.', '20042022195128-icon.png', '2022-04-20 11:51:28', '2022-04-21 12:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ava` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `ava`, `created_at`, `updated_at`) VALUES
(2, 'Marzuki Usman', 'Dewan Pembina', '24042022153206-ava.jpg', '2022-04-20 10:16:15', '2022-04-24 07:32:06'),
(3, 'Ismail Zulkarnain', 'Dewan Pengawas', '24042022152624-ava.jpg', '2022-04-20 11:03:24', '2022-04-24 07:26:24'),
(11, 'Muhammad Nasir', 'Ketua', '24042022152949-ava.jpg', '2022-04-20 11:19:57', '2022-04-24 07:29:49'),
(12, 'Ressy Sandrina', 'Wakil Ketua', '24042022152859-ava.jpg', '2022-04-20 11:23:25', '2022-04-24 07:28:59'),
(13, 'Muslim Andri Setiadi', 'Sekretaris', '24042022153142-ava.jpg', '2022-04-24 07:31:42', '2022-04-24 07:31:42'),
(14, 'Muhammad Kemal Pasha', 'Bendahara', '24042022153329-ava.jpg', '2022-04-24 07:33:29', '2022-04-24 07:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', NULL, '$2y$10$TLRzDNxbcrmtEVXfYavBgOZIl/i/HaIO7MMavBB5s9Fr4KJWfExxe', NULL, '2022-04-19 21:16:40', '2022-04-19 21:16:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_infos`
--
ALTER TABLE `category_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnerts`
--
ALTER TABLE `partnerts`
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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_infos`
--
ALTER TABLE `category_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partnerts`
--
ALTER TABLE `partnerts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
