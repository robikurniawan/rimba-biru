-- -------------------------------------------------------------
-- TablePlus 5.8.2(528)
--
-- https://tableplus.com/
--
-- Database: rimbabiru
-- Generation Time: 2024-01-06 19:41:48.6160
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `abouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `profile` text COLLATE utf8mb4_unicode_ci,
  `letter` text COLLATE utf8mb4_unicode_ci,
  `vission` text COLLATE utf8mb4_unicode_ci,
  `mission` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `mobile` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `fax` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `category_infos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `category_news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `questions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `response` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `infos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_info_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `attach` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_news_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `partnerts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `partnert_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_year` int(11) DEFAULT NULL,
  `end_year` int(11) DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('planning','onprogress','done') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `slides` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `teams` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ava` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `abouts` (`id`, `profile`, `letter`, `vission`, `mission`, `address`, `phone`, `mobile`, `email`, `fax`, `created_at`, `updated_at`, `facebook`, `instagram`, `youtube`, `twitter`, `linkedin`) VALUES
(1, '<p>Rimba Biru Nusantara adalah perseroan terbatas yang didirikan untuk mendukung dan berkontribusi pada penyediaan jasa dan barang yang berorientasi lingkungan</p><p>Kami mendampingi anda menuju pencapaian maksimal sebagaimana yang anda harapkan dalam setiap visi baik personal maupun instansi anda dengan memberikan anda solusi dan pandangan yang unik dan tepat untuk mencapai sasaran.<br>Bekerja dengan hati-hati dan penuh dedikasi menjadi ciri khas kami, tidak lain untuk memberikan anda keuntungan dari yang bisa anda capai saat ini.</p>', '<p><strong>“Kami Menjungjung Tinggi Profesionalisme, bekerja dengan kualitas terstandar dengan mengacu pada Aturan yang Berlaku”</strong></p><p>&nbsp;</p><p>Kami memiliki kemampuan Tim dengan berbagai pengalaman dibidangnya, Kami akan mendengarkan dan memahami apa yang anda perlukan dalam mencapai target. Mengidentifikasi masalah, menganalisa dan mendorong berbagai alternatif solusi terbaik dari berbagai prespektif menjadi ciri khas kami dalam bekerja.</p><p>Setiap sasaran memiliki tantangan yang cukup beragam, penguasaan masalah dan penanganan secara profesional dapat membantu anda meningkatkan nilai tambah sekaligus bergerak kedepan menuju sasaran. Kami memiliki tim dengan managerial yang baik dilapangan dalam menganalisis dan berkomunikasi mendorong berbagai langkah tanpa meninggalkan nilai-nilai lokal dan lingkungan</p>', 'Menjadi Perusahaan Berkarakter Lingkungan Nomor Satu di Indonesia', '<ol><li>1000 Kemitraan Lingkungan di Tahun 2030</li><li>Menjadi Konsultan 10 terbaik di Tahun 2030</li><li>Menjadi Perusahaan Rujukan dalam sektor Lingkungan dan Agrokultur</li><li>Menjadi Konsultan dengan pelibatan 100 Profesinal tersertifikat Internasional<br><br><strong>Orientasi pembangunan berbasis lingkungan tidak hanya meningkatkan performa perusahaan dimata publik, tapi juga memperpanjang usia produktivitas usaha”</strong></li></ol>', 'Gedung Wirausaha Lt 1 Unit 104. \r\nJl. Hr Rasuna Said, Jakarta Selatan. Indonesia', '081399452948', '02150096969', 'rimbabirunusantara@gmail.com', NULL, NULL, '2023-08-02 07:01:56', '@rimbabiru', '@rimbabiru', '@rimbabiru', '@rimbabiru', '@rimbabiru');

INSERT INTO `category_infos` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Info 1', '2023-07-28 07:02:57', '2023-07-28 07:02:57'),
(2, 'info 2', '2023-07-28 07:03:00', '2023-07-28 07:03:00');

INSERT INTO `category_news` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kategori 1', '2023-07-28 07:03:09', '2023-07-28 07:03:09'),
(2, 'Kategori 2', '2023-07-28 07:03:12', '2023-07-28 07:03:12');

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_20_164000_create_teams_table', 1),
(6, '2022_04_20_192845_create_services_table', 1),
(7, '2022_04_20_195722_create_category_infos_table', 1),
(8, '2022_04_21_205037_create_infos_table', 1),
(9, '2022_04_21_221809_create_projects_table', 1),
(10, '2022_04_21_222332_create_partnerts_table', 1),
(11, '2022_04_21_232517_create_category_news_table', 1),
(12, '2022_04_21_232533_create_news_table', 1),
(13, '2022_04_22_001538_create_abouts_table', 1),
(14, '2022_04_22_025338_create_faqs_table', 1),
(15, '2023_07_28_070455_create_slides_table', 2);

INSERT INTO `news` (`id`, `category_news_id`, `title`, `desc`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Warna Terumbu Karang Beragam, Ternyata Berikut Penyebabnya', '<p>Warna terumbu karang sangat beragam. Ada begitu banyak warna dari terumbu karang yang indah. Tidak heran jika terumbu karang menjadi salah satu hal yang mempercantik pemandangan bawah laut.</p><p>Indonesia menjadi salah satu negara di dunia yang terdiri dari banyak pulau. Bahkan, julukan NKRI adalah negara maritim terbesar.</p><p><strong>Baca Juga: </strong><a href=\"https://www.harapanrakyat.com/2023/07/fotosintesis-tanaman-hydrilla/\">Fotosintesis Tanaman Hydrilla dan Manfaatnya untuk Lingkungan</a></p><p>Bukan tanpa alasan, Indonesia memiliki wilayah yang luas dan sebagian besar wilayah tersebut adalah perairan. Tentu saja terumbu karang menjadi salah satu tanaman laut adalah terumbu karang.</p><h2><strong>Warna Terumbu Karang yang Beragam</strong></h2><p>Sama seperti di daratan, dunia bawah laut juga memiliki kehidupan. Tidak hanya hewan, ada juga tumbuhan dan berbagai organisme lainnya.</p><p>Terumbu karang adalah tanaman laut yang sangat populer. Selain jumlah terumbu karang yang banyak, tanaman ini juga cenderung memiliki penampilan menarik.</p><p>Kehadiran terumbu karang termasuk ekosistem laut yang rumit, tetapi sangat produktif. Ada begitu banyak jenis, bentuk, lokasi, hingga rona yang berbeda dari terumbu karang ini.</p><p>Fungsi dari terumbu karang yang paling utama adalah sebagai ekosistem yang mampu menghasilkan oksigen untuk para hewan dan biota laut lainnya.</p><p>Selain itu, terumbu karang juga menjadi tempat tinggal beberapa jenis hewan laut.</p><p>Ada empat jenis terumbu karang yang sudah ilmuwan identifikasi, yakni terumbu karang api, penghalang, atol, serta tambalan.</p><p>Selain jenis, terumbu karang terkenal dengan warna-warni tubuhnya. Warna dari tumbuhan laut ini sangat beragam, apa yang jadi penyebab sebenarnya?</p><h4><strong>Kondisi Lingkungan Laut</strong></h4><p>Tentu saja kondisi lingkungan laut itu sangat berpengaruh terhadap warna dari sebuah terumbu karang.</p><p>Misalnya saja terumbu karang hidup di wilayah yang mendapatkan begitu banyak cahaya matahari.</p><p>Sinar matahari tersebut akan membuat rona terumbu karang berbeda daripada terumbu karang yang ada di daerah minim sinar matahari.</p><p>Hal itu bisa terjadi karena sinar ultraviolet yang menyinari terumbu karang bisa merusak bagian karang dari waktu ke waktu.</p><p>Ada beberapa terumbu karang dengan rona berbeda, seperti merah muda, ungu, dan biru. Hal tersebut umumnya terjadi karena lapisan pelindung dari sinar ultraviolet.</p><h4><strong>Keberadaan Mikroorganisme</strong></h4><p>Alasan warna terumbu karang warna-warni dan sangat beragam juga bisa karena pengaruh dari adanya mikroorganisme.</p><p><strong>Baca Juga:</strong> <a href=\"https://www.harapanrakyat.com/2023/05/contoh-tanaman-geragih/\">Contoh Tanaman Geragih, Definisi Serta Proses Terjadinya</a></p><p>Terumbu karang memiliki fungsi salah satunya sebagai tempat tinggal makhluk hidup. Ternyata, ada berbagai mikroorganisme lain yang hidup di terumbu karang.</p><p>Salah satu mikroorganisme penghuni terumbu karang adalah zooxanthellae. Kehadiran mikroorganisme ini ternyata mampu mempengaruhi rona dari terumbu karang tersebut.</p><p>Sebagai informasi, sebenarnya terumbu karang tidak memiliki warna dan hanya transparan. Keberadaan mikroorganisme pada tanaman laut tersebutlah yang menjadi alasan munculnya berbagai warna menarik.</p><p>Tidak perlu khawatir, sebab keberadaan rona pada terumbu karang sebenarnya menjadi tanda kalau tanaman laut tersebut tumbuh dan hidup di dalam keadaan yang sehat.</p><h4><strong>Keadaan Suhu Air</strong></h4><p>Pigmen terumbu karang yang sangat beragam juga bisa terjadi karena pengaruh suhu air. Tentu saja air di bawah laut memiliki suhu yang berbeda-beda.</p><p>Suhu air laut itu tergantung beberapa hal. Ada berbagai faktor yang mempengaruhi suhu air laut, seperti paparan sinar matahari, kedalaman laut, dan lain sebagainya.</p><p>Apabila Anda menemukan terumbu karang yang sudah berubah rona menjadi lebih putih dan tidak lagi warna-warni, itu artinya terpengaruh oleh suhu air laut.</p><p>Terumbu karang yang putih bisa terjadi ketika mereka berada di wilayah laut dengan suhu air di sekitar yang mulai menghangat.</p><p>Hubungan antara warna terumbu karang dengan suhu air sebenarnya terkait dengan mikroorganisme yang ada pada tumbuhan laut tersebut.</p><p>Ketika suhu air menghangat, maka zooxanthellae akan mati atau pergi dari terumbu karang tersebut. Alhasil, terumbu karang akhirnya rusak dan kehilangan warnanya.</p><p><strong>Baca Juga:</strong> <a href=\"https://www.harapanrakyat.com/2023/04/tanaman-yang-tidak-butuh-banyak-air/\">Tanaman yang Tidak Butuh Banyak Air untuk Bertahan Hidup</a></p><p>Karena mikroorganisme zooxanthellae pemberi pigmen warna pada terumbu karang, maka jika tidak ada mereka pasti terumbu karang akan kehilangan ronanya dan menjadi tidak menarik.</p><p>Jadi, sebenarnya terumbu karang yang memiliki banyak warna justru tidak hanya menarik, tetapi juga indikasi bahwa mereka sehat.</p><p>Agar warna terumbu karang terjaga dan mereka tetap sehat, kita perlu menjaga ekosistem laut. Tanpa terumbu karang, maka ekosistem laut akan sangat terganggu. <strong>(R10/HR-Online)</strong></p>', '02082023045906-image.jpg', 1, '2023-08-02 04:59:06', '2023-08-02 04:59:06'),
(2, 2, 'Cuaca Ekstrem Merusak Kualitas Udara dan Laut, dari Kebakaran Sampai Terumbu Karang Memutih', '<p><strong>Liputan6.com, Jakarta -</strong> Kondisi <a href=\"https://www.liputan6.com/tag/cuaca-ekstrem\">cuaca ekstrem</a> dan suhu tinggi&nbsp;yang mematikan, yang sudah menghancurkan berbagai negara bagian di Amerika Serikat (AS), kini menyebar ke wilayah timur sampai ke Timur Laut. Kondisi ini tidak hanya mengancam <a href=\"https://www.liputan6.com/tag/ekosistem-laut\">ekosistem laut</a>, tapi juga memicu <a href=\"https://www.liputan6.com/tag/kebakaran-hutan\">kebakaran hutan</a> besar-besaran yang melepaskan partikel berbahaya.</p><p>Dilansir dari <i>CNN Weather</i>, lebih dari 100 juta individu, mulai dari California sampai Massachusetts, berada dalam waspada panas pada Rabu, 26 Juli 2023 karena suhu ekstrem menjangkiti seluruh negeri. Dalam sepekan mendatang, sekitar 85% dari populasi akan merasakan suhu yang mencapai atau melebihi 32 derajat celcius.</p><p><a href=\"https://enamplus.liputan6.com/lifestyle/read/5351972/video-citayam-fashion-week-hadir-lagi-bonge-dan-ale-ikut-meramaikan\">Enam+</a></p><p><a href=\"https://enamplus.liputan6.com/lifestyle/read/5351972/video-citayam-fashion-week-hadir-lagi-bonge-dan-ale-ikut-meramaikan\">03:56VIDEO: Citayam Fashion Week Hadir Lagi, Bonge dan Ale Ikut Meramaikan</a></p><p>Bagian selatan <a href=\"https://www.liputan6.com/tag/amerika-serikat\">Amerika Serikat</a> telah mengalami suhu tinggi selama beberapa minggu terakhir, dengan kota-kota seperti Phoenix, Miami dan El Paso, Texas, terus memecahkan rekor panas ekstrem pada Selasa, 25 Juli 2023. Situasii terakhir menyebutkan, Midwest, Mid-Atlantic, dan Northeast juga terkena imbasnya.</p><p>Suhu diprediksi mencapai 37 derajat celcius atau lebih di kota-kota seperti Kansas City dan St. Louis sampai Jumat, 28 Juli 2023. Ketika <a href=\"https://www.liputan6.com/tag/gelombang-panas\">gelombang panas</a> mencapai Mid-Atlantic dan Timur Laut pada hari Kamis dan Jumat, suhu yang mencapai 32 derajat celcius bisa mematahkan rekor harian di kota-kota seperti Washington, DC, Philadelphia, dan New York. Kelembapan yang meningkat akan membuat indeks panas di sana naik hingga lebih dari 37 derajat celcius.</p><p>Prediksi suhu yang tinggi telah membuat Gubernur Connecticut memicu protokol penanganan cuaca panas ekstrem pada hari Rabu, yang bertujuan untuk menyediakan fasilitas pendinginan bagi penduduk yang berisiko.</p><p>\"Musim panas sejauh ini telah cukup panas, tetapi diperkirakan suhu akan meningkat secara signifikan pekan ini, termasuk pada malam hari,\" ujar Gubernur Connecticut, Ned Lamont.&nbsp;</p><p><br>&nbsp;</p>', '02082023050005-image.png', 1, '2023-08-02 05:00:05', '2023-08-02 05:00:05'),
(3, 1, 'Konservasi Mangrove di Kaltara Gunakan Teknologi Digital', '<p>TARAKAN, KOMPAS — Konservasi mangrove di Kalimantan Utara mulai dilakukan dengan sistem digital melalui kolaborasi operator telekomunikasi dan berbagai pihak. Nelayan dan petambak dilibatkan menggunakan <i>open source </i>dan <i>internet of things</i> untuk melakukan pemetaan dan memantau kualitas air. Program ini bertujuan meningkatkan produktivitas tambak kecil dan mencegah alih fungsi mangrove yang meluas.</p><p>Untuk tujuan tersebut, Indosat Ooredo Hutchison (Indosat) berkolaborasi dengan Global System for Mobile Communication Association (GSMA). Keduanya membuat program bertajuk ”Digitalisasi Konservasi Mangrove di Kalimantan Utara”. Ini bertujuan meningkatkan ketahanan lingkungan dan ekonomi dengan pengembangan mitigasi berbasis seluler di provinsi yang berbatasan dengan Malaysia tersebut.</p><p>President Director and CEO Indosat Ooredoo Hutchison Vikram Sinha mengatakan, mereka berkomitmen menjadikan kegiatan itu sebagai program berkelanjutan. Program tersebut, kata Vikram, mendapat dukungan dari Kementerian Federal Jerman untuk Kerja Sama Ekonomi dan Pembangunan (BMZ) dan Deutsche Gesellschaft für Internationale Zusammenarbeit (GIZ), Universitas Borneo Tarakan, Pemerintah Provinsi Kalimantan Utara, dan Pemerintah Kecamatan Sebatik Barat.</p><p>”Kolaborasi ini merupakan langkah untuk mengatasi isu perubahan iklim lewat pemanfaatan teknologi digital,” ujar Vikram setelah menandatangani nota kesepahaman dengan Universitas Borneo Tarakan di Kota Tarakan, Kalimantan Utara, Senin (22/5/2023).</p><figure class=\"image\"><img src=\"https://dmm0a91a1r04e.cloudfront.net/SC_SGl0mkBjEXwTQKokSyS2ARW4=/1024x682/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2Fc04a5336-44f6-4848-ae72-7ee862168722_jpeg.jpg\" alt=\"President Director and CEO Indosat Ooredoo Hutchison Vikram Sinha (kanan) dan Wakil Rektor 3 Universitas Borneo Tarakan Muhammad Djaya Bakri berfoto bersama setelah menandatangani nota kesepahaman mengenai Digitalisasi Konservasi Mangrove Kalimantan Utara di Universitas Borneo Tarakan, Kota Tarakan, Kalimantan Utara, Senin (22/5/2023).\" srcset=\"https://dmm0a91a1r04e.cloudfront.net/KS-SUJAY59OuC5iCNHqpmHesn9U=/1280x853/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2Fc04a5336-44f6-4848-ae72-7ee862168722_jpeg.jpg 1280w, https://dmm0a91a1r04e.cloudfront.net/UweIJcKcfM8zlLyD71cQhrZbnG4=/720x480/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2Fc04a5336-44f6-4848-ae72-7ee862168722_jpeg.jpg 720w, https://dmm0a91a1r04e.cloudfront.net/SC_SGl0mkBjEXwTQKokSyS2ARW4=/1024x682/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2Fc04a5336-44f6-4848-ae72-7ee862168722_jpeg.jpg 1024w, https://asset.kgnewsroom.com/photo/pre/2023/05/22/c04a5336-44f6-4848-ae72-7ee862168722_jpeg.jpg 4702w, https://dmm0a91a1r04e.cloudfront.net/rc-Q_JNoJqBhKBaxQVSZgEijjFE=/676x450/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2Fc04a5336-44f6-4848-ae72-7ee862168722_jpeg.jpg 676w, https://dmm0a91a1r04e.cloudfront.net/wpQzKlEU-7iaakI2a7sKFUJa5a8=/160x160/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2Fc04a5336-44f6-4848-ae72-7ee862168722_jpeg.jpg 160w, https://dmm0a91a1r04e.cloudfront.net/ucM-QPzEc0sUopUrI3sFq13w8oU=/300x200/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2Fc04a5336-44f6-4848-ae72-7ee862168722_jpeg.jpg 300w, https://dmm0a91a1r04e.cloudfront.net/WXl2OX5fTXjF_7_w5kUNHSqDWC4=/480x480/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2Fc04a5336-44f6-4848-ae72-7ee862168722_jpeg.jpg 480w\" sizes=\"100vw\" width=\"1024\"></figure><p>KOMPAS/SUCIPTO</p><p>President Director and CEO Indosat Ooredoo Hutchison Vikram Sinha (kanan) dan Wakil Rektor 3 Universitas Borneo Tarakan Muhammad Djaya Bakri berfoto bersama setelah menandatangani nota kesepahaman mengenai Digitalisasi Konservasi Mangrove Kalimantan Utara di Universitas Borneo Tarakan, Kota Tarakan, Kalimantan Utara, Senin (22/5/2023).</p><p>Alih fungsi hutan mangrove di Kalimantan Utara cukup luas. Hal itu bisa terlihat dari pesawat sesaat sebelum mendarat di Kota Tarakan. Petak-petak tambak terlihat di delta hingga pesisir. Dalam Peta Mangrove Nasional 2021, total mangrove di Kaltara yang masih tersedia seluas 178.161 hektar.</p><p>Adapun potensi habitat mangrove di Kaltara seluas 122.049 hektar. Potensi tersebut didominasi tambak seluas 117.912 hektar, dengan 55.049 hektar di antaranya merupakan kawasan hutan produksi.</p><p>Baca juga: <a href=\"https://www.kompas.id/baca/nusantara/2022/11/22/hutan-mangrove-kaltara-banyak-jadi-tambak-brgm-galakkan-silvofishery\">Hutan Mangrove Kaltara Banyak Jadi Tambak, BRGM Galakkan </a>”<a href=\"https://www.kompas.id/baca/nusantara/2022/11/22/hutan-mangrove-kaltara-banyak-jadi-tambak-brgm-galakkan-silvofishery\">Silvofishery</a>”</p><p>Program digitalisasi konservasi mangrove ini akan fokus pada dua hal. Pertama, pemetaan wilayah laut dan pesisir. Warga akan dilibatkan menggunakan aplikasi <i>open-source</i> dan pemetaan geospasial di Desa Setabu, Kecamatan Sebatik Barat, Kabupaten Nunukan. Warga akan dibimbing menggunakan aplikasi Qfiled yang dapat diperbarui secara berkala.</p><p>Dengan aplikasi tersebut, Indosat bersama GSMA, BMZ, dan GIZ akan memberi pelatihan pemetaan. Selain itu, warga juga dilatih membuat peta digital yang bisa digunakan untuk kegiatan selanjutnya. Peta tersebut bisa digunakan petambak atau pelaku usaha lain untuk melindungi tutupan mangrove yang eksis.</p><figure class=\"image\"><img src=\"https://dmm0a91a1r04e.cloudfront.net/7YuUxSe-fy5Z3zld6yPTxdRTaGE=/1024x1504/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2022%2F02%2F25%2F65609c4e-b9a6-4d00-9a87-73d297b56a44_png.png\" alt=\"https://dmm0a91a1r04e.cloudfront.net/7YuUxSe-fy5Z3zld6yPTxdRTaGE=/1024x1504/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2022%2F02%2F25%2F65609c4e-b9a6-4d00-9a87-73d297b56a44_png.png\" srcset=\"https://dmm0a91a1r04e.cloudfront.net/jd6qL9Wjzz-6NymlZa--3LEyKDg=/1280x1880/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2022%2F02%2F25%2F65609c4e-b9a6-4d00-9a87-73d297b56a44_png.png 1280w, https://dmm0a91a1r04e.cloudfront.net/2DBBc5Jwd_6_qWU85XnlnnukBl0=/720x1058/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2022%2F02%2F25%2F65609c4e-b9a6-4d00-9a87-73d297b56a44_png.png 720w, https://dmm0a91a1r04e.cloudfront.net/7YuUxSe-fy5Z3zld6yPTxdRTaGE=/1024x1504/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2022%2F02%2F25%2F65609c4e-b9a6-4d00-9a87-73d297b56a44_png.png 1024w, https://asset.kgnewsroom.com/photo/pre/2022/02/25/65609c4e-b9a6-4d00-9a87-73d297b56a44_png.png 1280w, https://dmm0a91a1r04e.cloudfront.net/jzmHNFj71QTUUN_G861I7skQyHI=/676x993/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2022%2F02%2F25%2F65609c4e-b9a6-4d00-9a87-73d297b56a44_png.png 676w, https://dmm0a91a1r04e.cloudfront.net/niMuC9NegUewGa1YJeO_3vXuwVU=/160x160/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2022%2F02%2F25%2F65609c4e-b9a6-4d00-9a87-73d297b56a44_png.png 160w, https://dmm0a91a1r04e.cloudfront.net/0_LKRTeMRqwDR3_Pw8B1fdfKrOk=/300x441/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2022%2F02%2F25%2F65609c4e-b9a6-4d00-9a87-73d297b56a44_png.png 300w, https://dmm0a91a1r04e.cloudfront.net/Qln1SqyGTGmeo36vGK0RPBV1zsM=/480x480/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2022%2F02%2F25%2F65609c4e-b9a6-4d00-9a87-73d297b56a44_png.png 480w\" sizes=\"100vw\" width=\"1024\"></figure><p>Kedua, petambak akan diperkenalkan dengan <i>internet of things</i> untuk memantau kualitas air di tambak mereka. Dengan demikian, para petambak bisa mengelola mangrove supaya produktivitasnya tetap baik. Sebab, produktivitas udang, kepiting, atau ikan di dalam tambak amat bergantung pada kualitas air.</p><p>Hal tersebut diharapkan membuat petambak tak mesti memperbesar luasan tambaknya untuk mendapat hasil yang maksimal. Para petambak cukup mengontrol kualitas air di tambak yang mereka kelola. Hal ini bisa mengurangi potensi pembukaan hutan mangrove baru.</p><blockquote><p>Warga hanya perlu menjaga tutupan mangrove di sekitar tambak untuk menjaga kadar dan kualitas air.</p></blockquote><p>Wakil Rektor 3 Universitas Borneo Tarakan Muhammad Djaya Bakri mengatakan, kualitas air yang menurun di tambak biasanya disebabkan oleh banyaknya pupuk dan bahan-bahan kimia yang digunakan. Lambat laun hal itu bisa mengurangi salinitas dan kualitas air di tambak. Akibatnya, dari tahun ke tahun hasil tambak menurun.</p><p>Padahal, warga hanya perlu menjaga tutupan mangrove di sekitar tambak untuk menjaga kadar dan kualitas air. Para akademisi dari Universitas Borneo Tarakan, kata Djaya, akan dilibatkan untuk mengedukasi masyarakat petambak dan membuat program dengan mengandalkan teknologi tersebut.</p><figure class=\"image\"><img src=\"https://dmm0a91a1r04e.cloudfront.net/JfwfZP_2BgIjdas_NALfHIo5F98=/1024x768/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2F0d852b6a-f2ab-40fe-a534-1dc5b42930b1_jpg.jpg\" alt=\"Tutupan mangrove di salah satu wilayah pesisir Kota Tarakan, Kalimantan Utara, Minggu (21/5/2023).\" srcset=\"https://dmm0a91a1r04e.cloudfront.net/yiAz45a5IzgsshHBxqpKRtWBeU4=/1280x960/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2F0d852b6a-f2ab-40fe-a534-1dc5b42930b1_jpg.jpg 1280w, https://dmm0a91a1r04e.cloudfront.net/RgDzGkRMAwjBUkaT62jcwXCerT4=/720x540/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2F0d852b6a-f2ab-40fe-a534-1dc5b42930b1_jpg.jpg 720w, https://dmm0a91a1r04e.cloudfront.net/JfwfZP_2BgIjdas_NALfHIo5F98=/1024x768/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2F0d852b6a-f2ab-40fe-a534-1dc5b42930b1_jpg.jpg 1024w, https://asset.kgnewsroom.com/photo/pre/2023/05/22/0d852b6a-f2ab-40fe-a534-1dc5b42930b1_jpg.jpg 4608w, https://dmm0a91a1r04e.cloudfront.net/UT-pz7urzpriyPdx1Z6n0XtDPNU=/676x507/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2F0d852b6a-f2ab-40fe-a534-1dc5b42930b1_jpg.jpg 676w, https://dmm0a91a1r04e.cloudfront.net/PsJ6xmEeVa7hScGFvzIPrSY1Qls=/160x160/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2F0d852b6a-f2ab-40fe-a534-1dc5b42930b1_jpg.jpg 160w, https://dmm0a91a1r04e.cloudfront.net/NCfN5SzY5m1eZId6XgpUz4dHeDg=/300x225/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2F0d852b6a-f2ab-40fe-a534-1dc5b42930b1_jpg.jpg 300w, https://dmm0a91a1r04e.cloudfront.net/ppD9kyeuAVEFLo9garTaXnKltLI=/480x480/https%3A%2F%2Fasset.kgnewsroom.com%2Fphoto%2Fpre%2F2023%2F05%2F22%2F0d852b6a-f2ab-40fe-a534-1dc5b42930b1_jpg.jpg 480w\" sizes=\"100vw\" width=\"1024\"></figure><p>KOMPAS/SUCIPTO</p><p>Tutupan mangrove di salah satu wilayah pesisir Kota Tarakan, Kalimantan Utara, Minggu (21/5/2023).</p><p>”Dengan teknologi yang dikembangkan ini, akan bisa memberi informasi nyata melalui sistem android. Saat ada perubahan kadar air, akhirnya bisa dicari cara bagaimana mempertahankan ekosistem supaya mangrove (di sekitar tambak) tumbuh dengan baik. Ini sekaligus menjadi tantangan bagi akademisi kami,” kata Djaya.</p><p>Sementara itu, Head of Asia Pasific GSA Julian Gorman mengatakan, program ini merupakan komitmen dalam mengatasi tantangan iklim global. Melalui digitalisasi, lanjut dia, diharapkan bisa mempermudah pengawasan dan mitigasi dampak buruk perubahan iklim.</p><p>”Bagaimana seluler dapat berkontribusi penting dalam menghubungkan komunitas melalui solusi digital. Apalagi, konservasi hutan mangrove merupakan kebutuhan global di banyak komunitas pesisir,” katanya.</p>', '02082023050058-image.jpg', 1, '2023-08-02 05:00:58', '2023-08-02 05:00:58');

INSERT INTO `partnerts` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Montree', '02082023044121-logo.png', '2023-08-02 04:41:21', '2023-08-02 04:41:21'),
(2, 'BakauMu', '02082023044128-logo.png', '2023-08-02 04:41:28', '2023-08-02 04:41:28'),
(3, 'PT Multi Bina Kreasi', '02082023044139-logo.png', '2023-08-02 04:41:39', '2023-08-02 04:41:39');

INSERT INTO `projects` (`id`, `partnert_id`, `title`, `start_year`, `end_year`, `desc`, `location`, `cover`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Project A', 2020, 2023, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error repudiandae explicabo cupiditate maiores libero, numquam veritatis at harum quam voluptas incidunt tempore amet deleniti aut animi nulla molestias beatae fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Error repudiandae explicabo cupiditate maiores libero, numquam veritatis at harum quam voluptas incidunt tempore amet deleniti aut animi nulla molestias beatae fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Error repudiandae explicabo cupiditate maiores libero, numquam veritatis at harum quam voluptas incidunt tempore amet deleniti aut animi nulla molestias beatae fuga.</p>', 'Makassar', '02082023044308-cover.jpg', 'done', 1, '2023-08-02 04:43:08', '2023-08-02 04:43:08'),
(2, 2, 'Penanaman Mangrove', 2021, 2023, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error repudiandae explicabo cupiditate maiores libero, numquam veritatis at harum quam voluptas incidunt tempore amet deleniti aut animi nulla molestias beatae fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Error repudiandae explicabo cupiditate maiores libero, numquam veritatis at harum quam voluptas incidunt tempore amet deleniti aut animi nulla molestias beatae fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Error repudiandae explicabo cupiditate maiores libero, numquam veritatis at harum quam voluptas incidunt tempore amet deleniti aut animi nulla molestias beatae fuga.</p>', 'Makassar', '02082023044337-cover.jpg', 'done', 1, '2023-08-02 04:43:37', '2023-08-02 04:43:37'),
(3, 3, 'Pendampingan Penanaman', 2021, 2022, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error repudiandae explicabo cupiditate maiores libero, numquam veritatis at harum quam voluptas incidunt tempore amet deleniti aut animi nulla molestias beatae fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Error repudiandae explicabo cupiditate maiores libero, numquam veritatis at harum quam voluptas incidunt tempore amet deleniti aut animi nulla molestias beatae fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Error repudiandae explicabo cupiditate maiores libero, numquam veritatis at harum quam voluptas incidunt tempore amet deleniti aut animi nulla molestias beatae fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Error repudiandae explicabo cupiditate maiores libero, numquam veritatis at harum quam voluptas incidunt tempore amet deleniti aut animi nulla molestias beatae fuga.</p>', 'Bali', '02082023044417-cover.jpg', 'onprogress', 1, '2023-08-02 04:44:17', '2023-08-02 04:44:17');

INSERT INTO `services` (`id`, `name`, `desc`, `icon`, `bg`, `created_at`, `updated_at`) VALUES
(1, 'Konsultan Lingkungan', 'Pembuatan Berbagai Dokumen Perencanaan', '31072023160533-icon.png', '02082023061026-bg.jpg', '2023-07-28 07:03:43', '2023-08-02 06:10:26'),
(2, 'Dok. Perizinan', 'Pembuatan Dokumen PKKPRL, AMDAL, UKL,UPL', '31072023170858-icon.png', '02082023060813-bg.jpg', '2023-07-31 16:08:14', '2023-08-02 06:08:13'),
(3, 'Agriculture', 'Menyediakan jasa untuk kegiatan Agroculture', '31072023163033-icon.png', '02082023061043-bg.jpg', '2023-07-31 16:30:33', '2023-08-02 06:10:43'),
(4, 'Sistem Digital', 'Melayani pembuatan Berbagai layanan Digital', '02082023060050-icon.png', '02082023060217-bg.jpg', '2023-07-31 16:32:38', '2023-08-02 06:02:17');

INSERT INTO `slides` (`id`, `name`, `images`, `created_at`, `updated_at`) VALUES
(3, 'Ocean', '28072023071532-images.jpg', '2023-07-28 07:15:32', '2023-07-28 07:15:32'),
(4, '-', '28072023072722-images.jpg', '2023-07-28 07:27:22', '2023-07-28 07:27:22'),
(5, 'v', '28072023072728-images.jpg', '2023-07-28 07:27:28', '2023-07-28 07:27:28');

INSERT INTO `teams` (`id`, `name`, `position`, `ava`, `created_at`, `updated_at`) VALUES
(1, 'Sulaeman Natsir', 'Founder & CEO', '02082023054908-ava.png', '2023-07-28 07:11:30', '2023-08-02 05:49:08'),
(2, 'Robi Kurniawan', 'Software Engineer', '02082023054922-ava.png', '2023-08-02 05:49:22', '2023-08-02 05:49:22');

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', NULL, '$2y$10$dNxrJx1SBJtn6K/OF60wb.n0Ja5892LDcsIAUGVEpekBrOX8GWlfq', NULL, NULL, NULL);



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;