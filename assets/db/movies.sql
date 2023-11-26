-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 03:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `poster_url` varchar(255) DEFAULT NULL,
  `thumbnail_url` varchar(255) DEFAULT NULL,
  `cast1_name` varchar(255) DEFAULT NULL,
  `cast1_img_url` varchar(255) DEFAULT NULL,
  `cast2_name` varchar(255) DEFAULT NULL,
  `cast2_img_url` varchar(255) DEFAULT NULL,
  `cast3_name` varchar(255) DEFAULT NULL,
  `cast3_img_url` varchar(255) DEFAULT NULL,
  `cast4_name` varchar(255) DEFAULT NULL,
  `cast4_img_url` varchar(255) DEFAULT NULL,
  `cast5_name` varchar(255) DEFAULT NULL,
  `cast5_img_url` varchar(255) DEFAULT NULL,
  `cast6_name` varchar(255) DEFAULT NULL,
  `cast6_img_url` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `download_link1` varchar(255) DEFAULT NULL,
  `download_link2` varchar(255) DEFAULT NULL,
  `download_link3` varchar(255) DEFAULT NULL,
  `related1_name` varchar(255) DEFAULT NULL,
  `related1_genre` varchar(255) DEFAULT NULL,
  `related1_img_url` varchar(255) DEFAULT NULL,
  `related1_movie_url` varchar(255) DEFAULT NULL,
  `related2_name` varchar(255) DEFAULT NULL,
  `related2_genre` varchar(255) DEFAULT NULL,
  `related2_img_url` varchar(255) DEFAULT NULL,
  `related2_movie_url` varchar(255) DEFAULT NULL,
  `related3_name` varchar(255) DEFAULT NULL,
  `related3_genre` varchar(255) DEFAULT NULL,
  `related3_img_url` varchar(255) DEFAULT NULL,
  `related3_movie_url` varchar(255) DEFAULT NULL,
  `recommended1_img_url` varchar(255) DEFAULT NULL,
  `recommended1_movie_url` varchar(255) DEFAULT NULL,
  `recommended2_img_url` varchar(255) DEFAULT NULL,
  `recommended2_movie_url` varchar(255) DEFAULT NULL,
  `recommended3_img_url` varchar(255) DEFAULT NULL,
  `recommended3_movie_url` varchar(255) DEFAULT NULL,
  `recommended4_img_url` varchar(255) DEFAULT NULL,
  `recommended4_movie_url` varchar(255) DEFAULT NULL,
  `recommended5_img_url` varchar(255) DEFAULT NULL,
  `recommended5_movie_url` varchar(255) DEFAULT NULL,
  `recommended6_img_url` varchar(255) DEFAULT NULL,
  `recommended6_movie_url` varchar(255) DEFAULT NULL,
  `recommended7_img_url` varchar(255) DEFAULT NULL,
  `recommended7_movie_url` varchar(255) DEFAULT NULL,
  `recommended8_img_url` varchar(255) DEFAULT NULL,
  `recommended8_movie_url` varchar(255) DEFAULT NULL,
  `recommended9_img_url` varchar(255) DEFAULT NULL,
  `recommended9_movie_url` varchar(255) DEFAULT NULL,
  `pathurl` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `description`, `release_date`, `genre`, `director`, `poster_url`, `thumbnail_url`, `cast1_name`, `cast1_img_url`, `cast2_name`, `cast2_img_url`, `cast3_name`, `cast3_img_url`, `cast4_name`, `cast4_img_url`, `cast5_name`, `cast5_img_url`, `cast6_name`, `cast6_img_url`, `video_url`, `download_link1`, `download_link2`, `download_link3`, `related1_name`, `related1_genre`, `related1_img_url`, `related1_movie_url`, `related2_name`, `related2_genre`, `related2_img_url`, `related2_movie_url`, `related3_name`, `related3_genre`, `related3_img_url`, `related3_movie_url`, `recommended1_img_url`, `recommended1_movie_url`, `recommended2_img_url`, `recommended2_movie_url`, `recommended3_img_url`, `recommended3_movie_url`, `recommended4_img_url`, `recommended4_movie_url`, `recommended5_img_url`, `recommended5_movie_url`, `recommended6_img_url`, `recommended6_movie_url`, `recommended7_img_url`, `recommended7_movie_url`, `recommended8_img_url`, `recommended8_movie_url`, `recommended9_img_url`, `recommended9_movie_url`, `pathurl`, `time`) VALUES
(29, 'Oppenheimer ', 'The story of J. Robert Oppenheimers role in the development of the atomic bomb during World War II.\r\n\r\n', '2023-07-21', 'Drama, History', 'Christopher Nolan', '../img/oppenheimer.jpg', 'https://www.themoviedb.org/t/p/original/rLb2cwF3Pazuxaj0sRXQ037tGI1.jpg', 'Cillian Murphy', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/llkbyWKwpfowZ6C8peBjIV9jj99.jpg', 'Emily Blunt', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/xDc01ud6ZtaJFQWg8YfffFlUBdY.jpg', 'Matt Damon', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/At3JgvaNeEN4Z4ESKlhhes85Xo3.jpg', 'Robert Downey Jr.', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/im9SAqJPZKEbVZGmjXuLI4O7RvM.jpg', 'Florence Pugh', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ogoAeJyLzam5m3JvBFg6vwI8p0I.jpg', 'Josh Hartnett', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/dCfu2EN7FjISACcjilaJu7evwEc.jpg', 'https://vidsrc.to/embed/movie/872585', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'Spiderman: No Way Home', 'action', '../img/popular-movie-1.jpg', 'spiderman.php', 'Spiderman: Across The Spider Verse', 'action', '../img/spiderverse.jpg', 'acrosstheverse.php', 'Trnasformers Rise Of The Beast', 'Action', '../img/transformers.jpg', 'transformers.php', '../img/movie-1.jpg', '../movieplay/jumanji.php', '../img/movie-2.jpg', '../movieplay/hitman.php', '../img/movie-3.jpg', '../movieplay/Shang-chi.php', '../img/movie-4.jpg', '../movieplay/Eternals.php', '../img/crush-christmas.jpg', '../movieplay/a-royal-christmas-crush.php', '../img/tomorrow_job.jpg', '../movieplay/The_Tomorrow_Job.php', '../img/no-hard-feelings.jpg', '../movieplay/nohardfeelings.php', '../img/horriblebosses.jpg', '../movieplay/horriblebosses.php', '../img/specter.jpg', '../movieplay/Spectre.php', 'assets/movieplay/oppenheimer-.php', '3h 0m 22s'),
(30, 'The Hunger Games: The Ballad of Songbirds & Snakes ', '64 years before he becomes the tyrannical president of Panem, Coriolanus Snow sees a chance for a change in fortunes when he mentors Lucy Gray Baird, the female tribute from District 12.', '2023-11-17', 'Action, SC-FI', 'Francis Lawrence', '../img/hunger_games.jpg', 'https://www.themoviedb.org/t/p/original/5a4JdoFwll5DRtKMe7JLuGQ9yJm.jpg', 'Rachel Zegler', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ycseVLFDnnTQ9QubleZjdbrGl4r.jpg', 'Tom Blyth', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/rRG5YxKT1TIl97nONLnyKZZzhRf.jpg', 'Hunter Schafer', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/wcaE0CIHIfS1wD8nFwCD3vxmI7n.jpg', 'Jason Schwartzman', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/gCjMdmW1DiPAClHVl4zHEIffIsE.jpg', 'Peter Dinklage', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/9CAd7wr8QZyIN0E7nm8v1B6WkGn.jpg', 'Viola Davis', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/xDssw6vpYNRjsybvMPRE30e0dPN.jpg', 'https://vidsrc.to/embed/movie/695721', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'Oppenheimer', 'History', '../img/oppenheimer.jpg', 'oppenheimer-.php', 'Spiderman: Across The Spider Verse', 'action', '../img/spiderverse.jpg', 'acrosstheverse.php', 'Trnasformers Rise Of The Beast', 'Action', '../img/transformers.jpg', 'transformers.php', '../img/movie-1.jpg', '../movieplay/jumanji.php', '../img/movie-2.jpg', '../movieplay/hitman.php', '../img/movie-3.jpg', '../movieplay/Shang-chi.php', '../img/movie-4.jpg', '../movieplay/Eternals.php', '../img/crush-christmas.jpg', '../movieplay/a-royal-christmas-crush.php', '../img/tomorrow_job.jpg', '../movieplay/The_Tomorrow_Job.php', '../img/no-hard-feelings.jpg', '../movieplay/nohardfeelings.php', '../img/horriblebosses.jpg', '../movieplay/horriblebosses.php', '../img/specter.jpg', '../movieplay/Spectre.php', 'assets/movieplay/the-hunger-games-the-ballad-of-songbirds-snakes-.php', '2h 28m 34s'),
(31, 'Good Burger 2', 'Dexter Reed is down on his luck after another one of his inventions fails. Ed welcomes Dex back to Good Burger with open arms and gives him his old job back. With a new crew working at Good Burger, Dex devises a plan to get back on his feet but unfortunately puts the fate of Good Burger at risk once again.', '2023-11-22', 'Comedy, Family', 'Heath Seifert', '../img/good_burger2.jpg', 'https://www.themoviedb.org/t/p/original/kKxwzAbrA2mY7ixsO3f9uLF7S6v.jpg', 'Kel Mitchell', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/LKNYjjNtq5EbntZUKQWUHcTVji.jpg', 'Kenan Thompson', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/vHPhDGc1om91TzoIQ4zMscpNmxF.jpg', 'Lil Rel Howery', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/9MDi35Fy6ym7SYbO3B04vf1vBnm.jpg', 'Jillian Bell', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/v3oJlWGjdV3aHNXtGjWea3X1Tov.jpg', 'Kamaia Fairburn', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/tfwLOmrueNAebxRxJEZKX3l46l7.jpg', 'Alex Hibbert', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/nGUjQOlY1pqsJtiWrui2ylzkmBm.jpg', 'https://vidsrc.to/embed/movie/1101582', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'Oppenheimer', 'History', '../img/oppenheimer.jpg', 'oppenheimer-.php', 'Hunger Games: Ballard...', 'SCI-FI', '../img/hunger_games.jpg', 'the-hunger-games-the-ballad-of-songbirds-snakes-.php', 'Trnasformers Rise Of The Beast', 'Action', '../img/transformers.jpg', 'transformers.php', '../img/movie-1.jpg', '../movieplay/jumanji.php', '../img/movie-2.jpg', '../movieplay/hitman.php', '../img/movie-3.jpg', '../movieplay/Shang-chi.php', '../img/movie-4.jpg', '../movieplay/Eternals.php', '../img/crush-christmas.jpg', '../movieplay/a-royal-christmas-crush.php', '../img/tomorrow_job.jpg', '../movieplay/The_Tomorrow_Job.php', '../img/no-hard-feelings.jpg', '../movieplay/nohardfeelings.php', '../img/horriblebosses.jpg', '../movieplay/horriblebosses.php', '../img/specter.jpg', '../movieplay/Spectre.php', 'assets/movieplay/good-burger-2.php', '1h 30m 29s'),
(32, 'Trolls Band Together', 'When Branch’s brother, Floyd, is kidnapped for his musical talents by a pair of nefarious pop-star villains, Branch and Poppy embark on a harrowing and emotional journey to reunite the other brothers and rescue Floyd from a fate even worse than pop-culture obscurity.', '2023-11-17', 'Animation, Family, Music, Fantasy, Comedy', 'Walt Dohrn', '../../posters/trolls_band_together.jpg', 'https://www.themoviedb.org/t/p/original/xgGGinKRL8xeRkaAR9RMbtyk60y.jpg', 'Anna Kendrick', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/yirl6fEmeXY5xcvJw3nTcCNq9Cw.jpg', 'Justin Timberlake', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/6Yk5t9RwkdkAT8Qv45934Eez2CA.jpg', 'Camila Cabello', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/8XJzD4mrxlBvtYjP1wVNTW5K9ya.jpg', 'Eric André', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/e9XlcFnZQiBSQ1vISQVyTOrkIaq.jpg', 'Amy Schumer', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/6u95ZNLrADSlK7CVkgEvC0jLIJh.jpg', 'Andrew Rannells', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ubSoBKHuh7TnMze5qq0CeV3eriK.jpg', 'https://vidsrc.to/embed/movie/901362', 'https://vzbr.vidrock2.store/_v1/12a3c523f8105800ed8c394685aeeb0b952eaf5c01bdf4b715437baea93ece832257df1a4b6125fcfa38c35da05dee86aad28d46d73fc4e9d4e5a13f5377b485619915e3091fb40d12c3/h/afed4/fbc;15a38727ff105845ab8c641acebcee10903ca9445cb8b6b74b456ea4.m3u8', 'https://vzbr.vidrock2.store/_v1/12a3c523f8105800ed8c394685aeeb0b952eaf5c01bdf4b715437baea93ece832257df1a4b6125fcfa38c35da05dee86aad28d46d73fc4e9d4e5a13f5377b485619915e3091fb40d12c3/h/afed4/fbc;15a38727ff105845ab8c641acebcee10903ca9445cb8b6b74b456ea4.m3u8', 'https://vzbr.vidrock2.store/_v1/12a3c523f8105800ed8c394685aeeb0b952eaf5c01bdf4b715437baea93ece832257df1a4b6125fcfa38c35da05dee86aad28d46d73fc4e9d4e5a13f5377b485619915e3091fb40d12c3/h/afed4/fbc;15a38727ff105845ab8c641acebcee10903ca9445cb8b6b74b456ea4.m3u8', 'Oppenheimer', 'History', '../img/oppenheimer.jpg', 'oppenheimer-.php', 'Hunger Games: Ballard...', 'SCI-FI', '../img/hunger_games.jpg', 'the-hunger-games-the-ballad-of-songbirds-snakes-.php', 'Good Burger 2', 'Comedy, Family', '../img/good_burger2.jpg', 'good-burger-2.php', '../img/movie-1.jpg', '../movieplay/jumanji.php', '../img/movie-2.jpg', '../movieplay/hitman.php', '../img/movie-3.jpg', '../movieplay/Shang-chi.php', '../img/movie-4.jpg', '../movieplay/Eternals.php', '../img/crush-christmas.jpg', '../movieplay/a-royal-christmas-crush.php', '../img/tomorrow_job.jpg', '../movieplay/The_Tomorrow_Job.php', '../img/no-hard-feelings.jpg', '../movieplay/nohardfeelings.php', '../img/horriblebosses.jpg', '../movieplay/horriblebosses.php', '../img/specter.jpg', '../movieplay/Spectre.php', 'assets/movieplay/trolls-band-together.php', '1h 31m 28s'),
(33, 'Dashing Through the Snow ', 'Eddie Garrick is a good-hearted man who has lost his belief in the wonder of Christmas. While spending time with his nine-year-old daughter Charlotte on Christmas Eve, he befriends a mysterious man in a red suit named Nick.', '2023-11-17', 'Fantasy, Family, Comedy', 'Scott Rosenberg ', '../../posters/dashing_through_the_snow.jpg', 'https://www.themoviedb.org/t/p/original/zb55epJxheUmtd1jz2jihAaVtUF.jpg', 'Lil Rel Howery', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/9MDi35Fy6ym7SYbO3B04vf1vBnm.jpg', 'Ludacris', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/erkJijujhe48vhJ8iCEtVpNEeVn.jpg', 'Madison Skye Validum', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/kq5swkVj5FTwqgJltbWdn29RJ79.jpg', 'Teyonah Parris', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/k3U24YNgdaINZEQ4PftebnN5cpU.jpg', 'Oscar Nunez', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/UBILHiRphJdlshvsyH920QSAhk.jpg', 'Ravi Patel', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/94GutLAPx72fqxe6XUQ3HWxANxz.jpg', 'https://vidsrc.to/embed/movie/1001884', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'Trolls Band Together', 'music', '../../posters/trolls_band_together.jpg', 'trolls-band-together.php', 'Hunger Games: Ballard...', 'SCI-FI', '../img/hunger_games.jpg', 'the-hunger-games-the-ballad-of-songbirds-snakes-.php', 'Good Burger 2', 'Comedy, Family', '../img/good_burger2.jpg', 'good-burger-2.php', '../img/movie-1.jpg', '../movieplay/jumanji.php', '../img/movie-2.jpg', '../movieplay/hitman.php', '../img/movie-3.jpg', '../movieplay/Shang-chi.php', '../img/movie-4.jpg', '../movieplay/Eternals.php', '../img/crush-christmas.jpg', '../movieplay/a-royal-christmas-crush.php', '../img/tomorrow_job.jpg', '../movieplay/The_Tomorrow_Job.php', '../img/no-hard-feelings.jpg', '../movieplay/nohardfeelings.php', '../img/horriblebosses.jpg', '../movieplay/horriblebosses.php', '../img/specter.jpg', '../movieplay/Spectre.php', 'assets/movieplay/dashing-through-the-snow-.php', '1h 29m 27s'),
(34, 'Mission: Impossible - Dead Reckoning Part One', 'Ethan Hunt and his IMF team embark on their most dangerous mission yet: To track down a terrifying new weapon that threatens all of humanity before it falls into the wrong hands. With control of the future and the worlds fate at stake and dark forces from Ethans past closing in, a deadly race around the globe begins. Confronted by a mysterious, all-powerful enemy, Ethan must consider that nothing can matter more than his mission—not even the lives of those he cares about most.', '2023-12-12', 'Action, Thriller', 'Erik Jendresen', '../../posters/mission_impossible.jpg', 'https://www.themoviedb.org/t/p/original/TFTfzrkX8L7bAKUcch6qLmjpLu.jpg', 'Tom Cruise', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/5sjLDtdwjuVdZNdrnbAwDQdn5W.jpg', 'Hayley Atwell', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/x57wXHexIjD2ywly9cRA4rov7cu.jpg', 'Ving Rhames', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ohAOsD8E4tu35PI2buzZORpn9Ef.jpg', 'Simon Pegg', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/6ftW0kUeYno1kYfuwSTBILOtxjj.jpg', 'Rebecca Ferguson', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/lJloTOheuQSirSLXNA3JHsrMNfH.jpg', 'Vanessa Kirby', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/5fbvIkZ02RdcXfZHUUk4cQ9kILK.jpg', 'https://vidsrc.to/embed/movie/575264', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'Oppenheimer', 'action', '../img/oppenheimer.jpg', 'oppenheimer-.php', 'Hunger Games: Ballard...', 'SCI-FI', '../img/hunger_games.jpg', 'the-hunger-games-the-ballad-of-songbirds-snakes-.php', 'Dashing Through The Snow', 'Fantasy, Family', '../../posters/dashing_through_the_snow.jpg', 'dashing-through-the-snow-.php', '../img/movie-1.jpg', '../movieplay/jumanji.php', '../img/movie-2.jpg', '../movieplay/hitman.php', '../img/movie-3.jpg', '../movieplay/Shang-chi.php', '../img/movie-4.jpg', '../movieplay/Eternals.php', '../img/crush-christmas.jpg', '../movieplay/a-royal-christmas-crush.php', '../img/tomorrow_job.jpg', '../movieplay/The_Tomorrow_Job.php', '../img/no-hard-feelings.jpg', '../movieplay/nohardfeelings.php', '../img/horriblebosses.jpg', '../movieplay/horriblebosses.php', '../img/specter.jpg', '../movieplay/Spectre.php', 'assets/movieplay/mission-impossible-dead-reckoning-part-one.php', '2h 44m'),
(36, 'Retribution', 'When a mysterious caller puts a bomb under his car seat, Matt Turner begins a high-speed chase across the city to complete a specific series of tasks- all with his kids trapped in the back seat.', '2023-08-25', 'Action, Thriller, Crime', 'Chris Salmanpour', '../../posters/retribution.jpg', 'https://www.themoviedb.org/t/p/original/iiXliCeykkzmJ0Eg9RYJ7F2CWSz.jpg', 'Liam Neeson', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/bboldwqSC6tdw2iL6631c98l2Mn.jpg', 'Noma Dumezweni', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/abEWaYTugwH967V8LfptQIMioKQ.jpg', 'Lilly Aspell', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/phfygRDYezltJge7s7UD4M6IMdI.jpg', 'Jack Champion', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/8PXFKzhjFJ0oYP60Bj1kA44XBjY.jpg', 'Arian Moayed', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ApY4Ql2xGnzy8LeWqcntAbEQHiB.jpg', 'Matthew Modine', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/z974QEHL12qUvLyk6hlWGAmDgom.jpg', 'https://vidsrc.to/embed/movie/762430', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'Mission: Impossible - Dead Reck...', 'Action,Thriller', '../../posters/mission_impossible.jpg', 'oppenheimer-.php', 'Hunger Games: Ballard...', 'SCI-FI', '../img/hunger_games.jpg', 'the-hunger-games-the-ballad-of-songbirds-snakes-.php', 'Dashing Through The Snow', 'Fantasy, Family', '../../posters/dashing_through_the_snow.jpg', 'dashing-through-the-snow-.php', '../img/movie-1.jpg', '../movieplay/jumanji.php', '../img/movie-2.jpg', '../movieplay/hitman.php', '../img/movie-3.jpg', '../movieplay/Shang-chi.php', '../img/movie-4.jpg', '../movieplay/Eternals.php', '../img/crush-christmas.jpg', '../movieplay/a-royal-christmas-crush.php', '../img/tomorrow_job.jpg', '../movieplay/The_Tomorrow_Job.php', '../img/no-hard-feelings.jpg', '../movieplay/nohardfeelings.php', '../img/horriblebosses.jpg', '../movieplay/horriblebosses.php', '../img/specter.jpg', '../movieplay/Spectre.php', 'assets/movieplay/retribution.php', '1h 31m'),
(37, 'Last Call for Istanbul', 'A chance meeting at the airport leads two married people to an unforgettable night full of excitement, desire, and temptation in New York City.\r\n\r\n', '2023-11-24', 'Romance, Drama', 'Nuran Evren Şit', './posters/instabul.jpg', 'https://www.themoviedb.org/t/p/original/wEwE7WtkoQSW7ZmlRI8fRz3C0LQ.jpg', 'Beren Saat', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/shY75ZsxGshq1BFh0dl1og9dd73.jpg', 'Kıvanç Tatlıtuğ', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/8k8PAjTvK8UlgUAHq95HMYYOIG6.jpg', 'Senan Kara', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/1W2OYG58iTe1UfZRhjcTLXZYo6q.jpg', 'Zihan Zhao', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/tq4mf826Sfnjg5kIQm5nJUA61l7.jpg', 'Michael Loayza', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/yd0sldIyVn3Yt2SaRN4CQkowgxz.jpg', 'Susan Slatin', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/lOgrPqkTSs0KwSySMC44zy01XGH.jpg', 'https://vidsrc.to/embed/movie/1044302', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'https://streamtape.com/v/brp7mwwlZwuPYoW/The_Transporter_2002_%282002%29_BluRay_720p_%28fzmovies.net%29_ef7403c2e8fe3cdeb7e02991ac32371d.mkv#', 'Mission: Impossible - Dead Reck...', 'Action,Thriller', '../../posters/mission_impossible.jpg', 'oppenheimer-.php', 'Hunger Games: Ballard...', 'SCI-FI', '../img/hunger_games.jpg', 'the-hunger-games-the-ballad-of-songbirds-snakes-.php', 'Dashing Through The Snow', 'Fantasy, Family', '../../posters/dashing_through_the_snow.jpg', 'dashing-through-the-snow-.php', '../img/movie-1.jpg', '../movieplay/jumanji.php', '../img/movie-2.jpg', '../movieplay/hitman.php', '../img/movie-3.jpg', '../movieplay/Shang-chi.php', '../img/movie-4.jpg', '../movieplay/Eternals.php', '../img/crush-christmas.jpg', '../movieplay/a-royal-christmas-crush.php', '../img/tomorrow_job.jpg', '../movieplay/The_Tomorrow_Job.php', '../img/no-hard-feelings.jpg', '../movieplay/nohardfeelings.php', '../img/horriblebosses.jpg', '../movieplay/horriblebosses.php', '../img/specter.jpg', '../movieplay/Spectre.php', 'assets/movieplay/last-call-for-istanbul.php', '1h 31m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
