-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2019 at 08:00 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_quickpay`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

CREATE TABLE `tbl_admin_login` (
  `admin_id` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `last_login` datetime NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_login`
--

INSERT INTO `tbl_admin_login` (`admin_id`, `email`, `password`, `last_login`, `path`) VALUES
(1, 'quickpay123@gmail.com', '123456789', '2019-04-16 10:09:57', 'public/Admin_assets/profile/photo_0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `banner_id` int(100) NOT NULL,
  `path` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`banner_id`, `path`) VALUES
(1, 'public/Admin_assets/banner/photo_0.jpg'),
(4, 'public/Admin_assets/banner/photo_3.jpg'),
(6, 'public/Admin_assets/banner/photo_4.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(5) NOT NULL,
  `register_id` int(5) NOT NULL,
  `time_id` int(5) NOT NULL,
  `no_of_seat` int(5) NOT NULL,
  `seat_no` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `register_id`, `time_id`, `no_of_seat`, `seat_no`, `status`, `date`) VALUES
(2, 1, 4, 3, 'A9,A10,A11', 1, '2019-04-08'),
(3, 1, 128, 8, 'A1,A2,C5,C4,M17,M18,M19,M20', 1, '2019-04-07'),
(4, 1, 16, 3, 'C7,C8,C9', 1, '2019-04-12'),
(5, 4, 51, 5, 'A4,A3,A2,C8,C9', 1, '2019-04-16'),
(6, 4, 135, 6, 'L1,L2,L3,G1,G2,G3', 1, '2019-04-16'),
(7, 1, 144, 8, 'A1,A2,A3,D5,D6,D7,H8,H9', 1, '2019-04-16'),
(8, 4, 219, 10, 'K6,J6,I6,H6,G6,G5,H5,I5,J5,K5', 1, '2019-04-16'),
(9, 4, 4, 2, 'E9,E10', 1, '2019-04-14'),
(10, 1, 4, 10, 'C14,C15,C16,C17,C18,D18,D17,D16,D15,D14', 1, '2019-04-14'),
(11, 6, 4, 2, 'B8,B9', 1, '2019-04-14'),
(12, 8, 51, 10, 'A16,A17,A18,A19,A20,A21,A22,A23,A24,A25', 1, '2019-04-16'),
(13, 1, 132, 2, 'A16,A17', 1, '2019-04-16'),
(14, 1, 510, 2, 'C12,C13', 1, '2019-04-16'),
(15, 1, 219, 1, 'A9', 1, '2019-04-16'),
(20, 1, 304, 1, 'A28', 1, '2019-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_caste`
--

CREATE TABLE `tbl_caste` (
  `cast_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `type_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_caste`
--

INSERT INTO `tbl_caste` (`cast_id`, `name`, `profile`, `description`, `type_id`) VALUES
(1, 'John Abraham', 'public/Admin_assets/cast/photo_0.jpeg', '<p><em>John Abraham</em>&nbsp;(born 17 December 1972) is an Indian film actor, producer and former model who appears in Hindi films.</p>\r\n', '1'),
(2, 'Robby Grewal', 'public/Admin_assets/cast/photo_1.jpeg', '<p><em>Robbie Grewal</em>. Director | Writer | Producer. + Add or change photo on IMDbPro &raquo;. Contribute to IMDb. Add a bio, trivia, and more. Update information for Robbie&nbsp;...</p>\r\n', '2'),
(3, 'Varun Dhawan', 'public/Admin_assets/cast/photo_2.jpg', '<p><em>Varun Dhawan</em>&nbsp;(born 24 April 1987) is an Indian actor. One of the country&#39;s highest-paid celebrities, he has featured in Forbes India&#39;s Celebrity 100 list since 2014.</p>\r\n', '1'),
(4, 'Tiger Shroff', 'public/Admin_assets/cast/photo_3.jpg', '<p><em>Tiger Shroff</em>&nbsp;(born Jai Hemant&nbsp;<em>Shroff</em>&nbsp;on 2 March 1990) is an Indian film actor, martial artist. and stunt performer, who works in Hindi films.</p>\r\n', '1'),
(5, 'Akshaty Kumar', 'public/Admin_assets/cast/photo_4.jpeg', '<p>Rajiv Hari Om Bhatia (born 9 September 1967), known professionally as&nbsp;<em>Akshay Kumar</em>, is an Indian born Canadian actor, producer, television personality,&nbsp;...</p>\r\n', '1'),
(6, 'Abhishek Varman', 'public/Admin_assets/cast/photo_5.jpg', '<p><em>Abhishek Varman</em>&nbsp;is an Indian film director. His directorial debut was the romantic drama 2 States (2014), for which he received a nomination Filmfare Award for&nbsp;...</p>\r\n', '2'),
(7, 'Punit Malhotra', 'public/Admin_assets/cast/photo_6.jpeg', '<p>&nbsp;</p>\r\n\r\n<p><em>Punit Malhotra</em>&nbsp;(born 13 May 1982) is an Indian film director who works in Hindi cinema. His first film, I Hate Luv Storys, released on 2 July 2010. He is the nephew of famous Indian designer, Manish&nbsp;<em>Malhotra</em>.</p>\r\n', '2'),
(8, 'Sajid Khan', 'public/Admin_assets/cast/photo_7.jpeg', '<p><em>Sajid Kamran Khan</em>&nbsp;(born 23 November 1971) is an Indian filmmaker, scriptwriter, talk show host, presenter and actor.</p>\r\n', '2'),
(9, 'Mouni Roy', 'public/Admin_assets/cast/photo_8.jpeg', '<p><em>Mouni Roy</em>&nbsp;(born 28 September 1985) is an Indian film and television actress.&nbsp;</p>\r\n', '4'),
(10, 'Vivek Bhatnagar', 'public/Admin_assets/cast/photo_9.jpeg', '<p><em>Vivek Bhatnagar</em>&nbsp;is a producer and actor, known for Romeo Akbar Walter (2019), Break Ke Baad (2010) and Kolaiyuthir Kaalam (2019).</p>\r\n', '3'),
(11, 'Alia Bhatt', 'public/Admin_assets/cast/photo_10.jpeg', '<p><em>Alia Bhatt</em>&nbsp;(born 15 March 1993) is an actress and singer of Indian origin and British citizenship, who works in Hindi films.</p>\r\n', '4'),
(12, 'Tara Sutaria', 'public/Admin_assets/cast/photo_11.jpeg', '<p><em>Tara Sutaria</em>&nbsp;(born 19 November 1995) is an Indian actress, singer and dancer. She started her career as a video jockey in 2010 with Disney India&#39;s Big Bada Boom.</p>\r\n', '4'),
(13, 'Karan Johar', 'public/Admin_assets/cast/photo_12.jpg', '<p><strong>Karan Kumar Johar</strong>&nbsp;(born&nbsp;<strong>Rahul Kumar Johar</strong>, 25 May 1972),often informally referred to as KJo,&nbsp;is an Indian film director, producer, screenwriter, costume designer, actor</p>\r\n', '3'),
(14, 'Kriti Sanon', 'public/Admin_assets/cast/photo_13.jpeg', '<p><em>Kriti Sanon</em>&nbsp;(born 27 July 1990) is an Indian actress who appears predominantly in Hindi films. Born and raised in New Delhi, she pursued an engineering&nbsp;...</p>\r\n', '4'),
(15, 'Raghav Juyal', 'public/Admin_assets/cast/photo_14.jpg', '<p><em>Raghav Juyal</em>&nbsp;(born 10 July 1991) is an Indian dancer, choreographer and actor. He is renowned as the&nbsp;<em>King of Slow Motion</em>&nbsp;for his surreal dance moves in slow motion style and for his reinvention of the Slow Motion Walk.</p>\r\n', '5'),
(16, 'Shakti Mohan', 'public/Admin_assets/cast/photo_15.jpg', '<p>Shakti Mohan is an Indian dancer. She is the winner of Zee TV&#39;s dance reality show Dance India Dance Season 2 and has been a captain in Dance Plus since 2015.</p>\r\n', '5'),
(17, 'Punit Patahk', 'public/Admin_assets/cast/photo_16.jpeg', '<p><em>Punit</em>&nbsp;J&nbsp;<em>Pathak</em>&nbsp;is an Indian choreographer and film actor. He made his career as a dancer in the dance reality show Dance India Dance (season 2).&nbsp;</p>\r\n', '5'),
(18, 'Sajid Nadiadwala', 'public/Admin_assets/cast/photo_17.jpeg', '<p><em>Sajid Nadiadwala</em>&nbsp;(born 18 February 1966) is an Indian film producer, storywriter, director, and owner of Nadiadwala Grandson Entertainment.&nbsp;</p>\r\n', '3'),
(19, 'Tapan Tushar Basu', 'public/Admin_assets/cast/photo_18.jpg', '<p>Tapan was born in Kolkata, India. His schooling in St. Paul&#39;s School, situated in the quaint Himalayan hill town of Darjeeling, left a profound impact on him.&nbsp;</p>\r\n', '6'),
(20, 'Anurag Singh', 'public/Admin_assets/cast/photo_19.jpeg', '<p>Anurag Singh is an Indian film director. He is a Mumbai-based film director and writer known for Kesari which is the biggest blockbuster of 2019 in the Bollywood industry as well as for Punjab 1984</p>\r\n', '2'),
(21, 'Parineeti Chopra', 'public/Admin_assets/cast/photo_20.jpeg', '<p><em>Parineeti Chopra</em>&nbsp;( born 22 October 1988) is an Indian actress and singer who appears in Hindi films.</p>\r\n', '4'),
(22, 'Robert Downey Jr', 'public/Admin_assets/cast/photo_21.jpg', '<p><em>Robert</em>&nbsp;John&nbsp;<em>Downey</em>&nbsp;Jr. (born April 4, 1965) is an American actor and singer. His career has included critical and popular success in his youth.</p>\r\n', '1'),
(23, 'Brie Larson', 'public/Admin_assets/cast/photo_22.jpg', '<p>Brianne Sidonie Desaulniers, known professionally as Brie Larson, is an American actress and filmmaker.</p>\r\n', '4'),
(24, 'Anthony Russo', 'public/Admin_assets/cast/photo_23.jpg', '<p><em>Anthony Russo</em>&nbsp;may refer to:&nbsp;<em>Anthony Russo</em>&nbsp;(director) (born 1970), film and television director-producer</p>\r\n', '2'),
(25, 'Kevin Feige', 'public/Admin_assets/cast/photo_24.jpg', '<p>Kevin Feige is an American film producer who has been the president of Marvel Studios since 2007.</p>\r\n', '3'),
(26, 'Lee Pace', 'public/Admin_assets/cast/photo_25.jpg', '<p><em>Lee Grinner Pace (March 25, 1979) is an American actor. He starred as Thranduil the Elvenking in The Hobbit trilogy, and as the protagonist Joe MacMillan for four seasons in AMC&#39;s television drama Halt and Catch Fire.</em></p>\r\n', '1'),
(27, 'Ryan Fleck', 'public/Admin_assets/cast/photo_26.jpg', '<p><em>Ryan Fleck</em>&nbsp;is an American film director, cinematographer, editor, and screenwriter best known for directing and writing the 2006 film Half Nelson and the 2008 film Sugar.</p>\r\n', '2'),
(28, 'Milla Jovovich', 'public/Admin_assets/cast/photo_27.jpg', '<p>Milica Bogdanovna &quot;<em>Milla</em>&quot;&nbsp;<em>Jovovich</em>&nbsp;is an American actress, model and musician. Her starring roles in numerous science fiction and action films led the music&nbsp;...</p>\r\n', '4'),
(29, 'David Harbour', 'public/Admin_assets/cast/photo_28.jpg', '<p>Harbour began acting professionally on Broadway in 1999, in the revival of The Rainmaker. He then made his television debut that same year in an episode of Law &amp; Order, playing a waiter.</p>\r\n', '1'),
(30, 'Guillermo del Toro', 'public/Admin_assets/cast/photo_29.jpeg', '<p>Guillermo del Toro G&oacute;mez is a Mexican filmmaker, author, actor, and former special effects makeup artist. He is best known for the Academy Award-winning fantasy films Pan&#39;s Labyrinth and The Shape of Water.</p>\r\n', '2'),
(31, ' Lloyd Levin', 'public/Admin_assets/cast/photo_30.jpg', '<p><em>Lloyd Levin</em>&nbsp;has been the prime mover on more than a few big comic book adaptations; the two Hellboy films and Watchmen are big marks on his resume.</p>\r\n', '3'),
(32, 'Vijaya Gurunatha Sethupathi', 'public/Admin_assets/cast/photo_31.jpg', '<p>Vijaya Gurunatha &quot;Vijay&quot; Sethupathi, is an Indian film actor, producer, lyricist, and dialogue writer who works in Tamil films.</p>\r\n', '1'),
(33, 'Thiagarajan Kumararaja', 'public/Admin_assets/cast/photo_32.jpg', '<p>Thiagarajan Kumararaja is an Indian film director and screenwriter. He made his feature film debut with the critically acclaimed gangster film Aaranya Kaandam .</p>\r\n', '2'),
(34, 'Kalaiarasan Harikrishnan', 'public/Admin_assets/cast/photo_33.jpg', '<p>Kalaiyarasan Harikrishnan &nbsp;is an Indian actor, who works in the Tamil film industry.&nbsp;</p>\r\n', '1'),
(35, 'Sarjun KM', 'public/Admin_assets/cast/photo_34.jpeg', '<p><em>Sarjun</em>&nbsp;KM is an south Indian director who is works in Tamil cinema industry. His directorial debut movie Echcharikkai, is a suspense crime thriller and he also did a short film titled &#39;Maa&#39;.</p>\r\n', '2'),
(36, 'Tyler Durden', 'public/Admin_assets/cast/photo_35.jpeg', '<p>Tyler Durden is The Narrator&#39;s split personality. He was created by the perfect storm of the Narrator&#39;s insomnia-induced insanity and his frustration with a hollow life of wage-slavery and consumerism.</p>\r\n', '3'),
(37, 'Nayanthara', 'public/Admin_assets/cast/photo_36.jpeg', '<p><em>Nayanthara</em>&nbsp;(Diana Mariam Kuriyan), is an Indian film actress who primarily appears in Tamil cinema.&nbsp;<em>Nayanthara</em>&nbsp;made her acting debut in the 2003 Malayalam&nbsp;...</p>\r\n', '4'),
(38, 'Kotapadi J Rajesh', 'public/Admin_assets/cast/photo_37.jpeg', '<p><em>Kotapadi J</em>.&nbsp;<em>Rajesh</em>. Producer. + Add or change photo on IMDbPro &raquo;. Contribute to IMDb. Add a bio, trivia, and more. Update information for&nbsp;<em>Kotapadi J</em>.&nbsp;<em>Rajesh</em></p>\r\n', '3'),
(39, 'Samantha Ruth Prabhu', 'public/Admin_assets/cast/photo_38.jpeg', '<p>Samantha Akkineni(n&eacute;e Ruth Prabhu) born on 28 April 1987 is an Indian actress and model. She has established a career in the Telugu and Tamil film industries, and is a recipient of several awards including four Filmfare Awards.&nbsp;</p>\r\n', '4'),
(40, 'Vivek Oberoi', 'public/Admin_assets/cast/photo_39.jpg', '<p><em>Vivek Oberoi</em>&nbsp;is an Indian film actor. He predominantly appears in Hindi films. He has portrayed a variety of characters and has won many awards, including two&nbsp;...</p>\r\n', '1'),
(41, 'Barkha Sengupta', 'public/Admin_assets/cast/photo_40.jpg', '<p><em>Barkha Bisht</em>&nbsp;Sengupta (born 28 December 1979) commonly known by as&nbsp;<em>Barkha Bisht</em>&nbsp;is an Indian Television and Film Actress.&nbsp;</p>\r\n', '4'),
(42, 'Omung Kumar', 'public/Admin_assets/cast/photo_41.JPG', '<p><em>Omung Kumar</em>&nbsp;is an Indian film director, and production designer, known for his works in Hindi cinema.He had hosted on of the famous show Ek Minute on Zee&nbsp;...</p>\r\n', '2'),
(43, 'Vidyut Jammwal', 'public/Admin_assets/cast/photo_42.jpg', '<p>Vidyut Jammwal (born 10 December 1980 in kanpur, uttar pradesh) is an Indian film actor, martial artist, and stunt performer, who predominantly works in Hindi films.</p>\r\n', '1'),
(44, 'Charles Russell', 'public/Admin_assets/cast/photo_43.jpeg', '<p>Charles &quot;Chuck&quot; Russell (born May 9, 1958) is an American film director, producer, screenwriter and actor,known for his work on several genre films.</p>\r\n', '2'),
(45, 'Vineet Kumar Jain ', 'public/Admin_assets/cast/photo_44.jpeg', '<p>Vineet Kumar Jain is the Managing director and Director of Bennett, Coleman &amp; Co. Ltd. (B.C.C.L.),commonly known as The Times Group, India&#39;s largest media group.He runs B.C.C.L along with his brother Samir Jain who is vice-chairman.</p>\r\n', '3'),
(46, 'Pooja Sawant', 'public/Admin_assets/cast/photo_45.jpeg', '<p>Pooja Sawant (born 25 January 1990) is an Indian film actress who appears in Marathi movies. She made her debut in Sachit Patil&#39;s multistarer film Kshanbhar Vishranti in 2010.</p>\r\n', '4'),
(47, 'Yash Soni', 'public/Admin_assets/cast/photo_46.jpeg', '<p><em>ash Soni</em>. 71671 likes &middot; 953 talking about this. This is an official page of&nbsp;<em>Yash Soni</em>, a well-known theatre and film actor.&nbsp;</p>\r\n', '1'),
(48, 'Vipul Mehta', 'public/Admin_assets/cast/photo_47.jpeg', '<p><em>Vipul Mehta</em>&nbsp;(born 1990) is an Indian playback singer, originating from Amritsar, Punjab, India. He won the title of Indian Idol in season 6 of the show i.e. on 1 September 2012.&nbsp;<em>Mehta</em>&nbsp;learned classical singing since he was 8 years old.</p>\r\n', '2'),
(49, 'Rashmin Majithia', 'public/Admin_assets/cast/photo_48.jpeg', '<p><em>Rashmin Majithia</em>. Producer. + Add or change photo on IMDbPro &raquo;. Contribute to IMDb. Add a bio, trivia, and more.</p>\r\n', '3'),
(50, 'Aarohi Patel', 'public/Admin_assets/cast/photo_49.jpg', '<p>Aarohi Patel is a Gujarati film actress. After making her acting debut as a child artist in Saandeep Patel&#39;s Moti Na Chowk Re Sapna Ma Ditha</p>\r\n', '4'),
(51, 'Emraan Hashmi', 'public/Admin_assets/cast/photo_50.jpg', '<p>Syed&nbsp;<em>Emraan</em>&nbsp;Anwar&nbsp;<em>Hashmi</em>&nbsp;is an Indian film actor who appears in Hindi films. Through his career,&nbsp;<em>Hashmi</em>&nbsp;has received three Filmfare Award nominations.</p>\r\n', '1'),
(52, ' Soumik Sen', 'public/Admin_assets/cast/photo_51.jpeg', '<p>Soumik Sen is an Indian screenwriter and film director. He has written the screenplay for films such as Anthony Kaun Hai?, Ru Ba Ru and Meerabai Not Out and Hum Tum Aur Ghost.</p>\r\n', '2'),
(53, 'Sunny Deol', 'public/Admin_assets/cast/photo_52.jpg', '<p>Sunny Deol, is an Indian film actor, director and producer known for his work in Hindi cinema. In a film career spanning over thirty five years and over hundred films, Deol has won two National Film Awardsand two Filmfare Awards.</p>\r\n', '1'),
(54, ' Behzad Khambata', 'public/Admin_assets/cast/photo_53.jpg', '<p>Get movies, songs, photos, biography, filmography and latest news for&nbsp;<em>Behzad Khambata</em>. Watch videos of&nbsp;<em>Behzad Khambata</em>, browse photos of Behzad&nbsp;<em>Khambata.</em></p>\r\n', '2'),
(55, 'Nishant Pitti', 'public/Admin_assets/cast/photo_54.png', '<p><em>Nishant Pitti&#39;s</em>&nbsp;profile on LinkedIn, the world&#39;s largest professional community. Nishant has 1 job listed on their profile. See the complete profile on LinkedIn&nbsp;...</p>\r\n', '3'),
(56, 'Bhushan Kumar', 'public/Admin_assets/cast/photo_55.jpeg', '<p>Bhushan Kumar Dua is an Indian film producer, music producer and composer.Bhushan Kumar Dua (born 27 November 1977) is an Indian film producer, music producer and composer.</p>\r\n', '3'),
(57, 'Ajay Devgn ', 'public/Admin_assets/cast/photo_56.jpg', '<p>Ajay Devgn, is an Indian film actor, director and producer. He is widely considered as one of the most popular and influential actors of Hindi cinema,</p>\r\n', '1'),
(58, 'Tabu', 'public/Admin_assets/cast/photo_57.jpg', '<p>Tabu, is an Indian film actress. She has primarily acted in Hindi films, in addition to English, Tamil, Telugu, Malayalam, Marathi and Bengali language films.</p>\r\n', '4'),
(59, 'Akiv Ali', 'public/Admin_assets/cast/photo_58.jpg', '<p>Akiv Ali is an Indian film editor who works in Bollywood.&nbsp;Check out the filmography of actor&nbsp;<em>Akiv Ali</em>&nbsp;and get a complete list of all of his upcoming movies releasing in the coming months.</p>\r\n', '2'),
(60, 'Bhushan Kumar', 'public/Admin_assets/cast/photo_59.jpg', '<p>Bhushan Kumar Dua (born 27 November 1977) is an Indian film producer, music producer and composer.</p>\r\n', '3'),
(61, 'Sudhir K Chaudhary', 'public/Admin_assets/cast/photo_60.jpg', '<p>Filmography &amp; biography of&nbsp;<em>Sudhir K</em>.&nbsp;<em>Chaudhary</em>&nbsp;. Checkout the movie list, birth date, latest news, videos &amp; photos on BookMyShow.</p>\r\n', '6'),
(62, 'Darshan', 'public/Admin_assets/cast/photo_61.jpeg', '<p>Darshan (born 16 February 1977), also known as Darshan Thoogudeepa, is an Indian film actor, producer and distributor who works predominantly in the Kannada film industry.</p>\r\n', '1'),
(63, 'Pon Kumaran', 'public/Admin_assets/cast/photo_62.jpeg', '<p>V. Harikrishna (born 5 November 1974) is an Indian film score and soundtrack composer, playback singer and film producer.</p>\r\n', '2'),
(64, 'Shylaja Nag', 'public/Admin_assets/cast/photo_63.jpeg', '<p>Shylaja Nagaraj (also known as Shylaja Nag) is an Indian film actor and producer known for her works in Kannada cinema.</p>\r\n', '3'),
(65, ' Rashmika Mandanna', 'public/Admin_assets/cast/photo_64.jpeg', '<p>Rashmika Mandanna is an Indian film actress and model who predominantly appears in Kannada films.</p>\r\n', '4'),
(66, 'Zachary Levi', 'public/Admin_assets/cast/photo_65.jpg', '<p><em>Zachary Levi</em>&nbsp;(born&nbsp;<em>Zachary Levi Pugh</em>; September 29, 1980) is an American actor and singer. He received critical acclaim for starring as Chuck Bartowski in the series Chuck, and as the title character in Warner Bros.</p>\r\n', '1'),
(67, 'Grace Fulton', 'public/Admin_assets/cast/photo_66.jpg', '<p><em>Grace</em>&nbsp;Caroline&nbsp;<em>Fulton</em>&nbsp;(born July 17, 1996) is an American actress and dancer, best known for playing Young Melinda Gordon on Ghost Whisperer, Haley Farrell&nbsp;...</p>\r\n', '4'),
(68, 'David Sandberg', 'public/Admin_assets/cast/photo_67.jpg', '<p><em>David F</em>.&nbsp;<em>Sandberg</em>&nbsp;(born 21 January 1981) is a Swedish filmmaker. He is best known for his collective no-budget horror short films under the online pseudonym&nbsp;...</p>\r\n', '2'),
(69, 'Peter Safran', 'public/Admin_assets/cast/photo_68.jpg', '<p><em>Peter Safran</em>&nbsp;(born 22 November 1965) is an American film producer and manager. Contents. 1 Biography.</p>\r\n', '3'),
(70, 'Will Smith', 'public/Admin_assets/cast/photo_69.jpeg', '<p>Willard Carroll Smith II is an American actor, rapper and media personality. In April 2007, Newsweek called him &quot;the most powerful actor in Hollywood&quot;. Smith has been nominated for five Golden Globe Awards and two Academy Awardss.</p>\r\n', '1'),
(71, 'Naomi Scott', 'public/Admin_assets/cast/photo_70.jpg', '<p><em>Naomi Scott</em>&nbsp;(born 6 May 1993) is a British actress and singer. She is known for starring as Kimberly Hart, the Pink Ranger, in the 2017 Power Rangers film and co-starring as Maddy Shannon in the science-fiction drama series Terra Nova.</p>\r\n', '4'),
(72, 'Dan Lin', 'public/Admin_assets/cast/photo_71.jpg', '<p>Dan Lin is an American film producer. The founder and CEO of Rideback, a film and television production company that he formed in 2008 and is based at Warner Bros, Lin produced The Lego Movie.</p>\r\n', '3'),
(73, 'Guy Ritchie', 'public/Admin_assets/cast/photo_72.jpeg', '<p><em>Guy</em>&nbsp;Stuart&nbsp;<em>Ritchie</em>&nbsp;(born 10 September 1968) is an English filmmaker and businessman, known for his crime films. He left secondary school and got entry-level jobs in the film industry in the mid-1990s.&nbsp;</p>\r\n', '2'),
(74, 'Nasim Pedrad', 'public/Admin_assets/cast/photo_73.jpeg', '<p><em>Nasim Pedrad</em>&nbsp;( born November 18, 1981) is an American actress and comedian best known for her five seasons as a cast member on Saturday Night Live from 2009 to 2014. She has since gone on to co-star in sitcoms such as Mulaney.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1'),
(75, 'Prabhas', 'public/Admin_assets/cast/photo_74.jpg', '<p>Prabhas is an Indian film actor associated with Telugu Cinema.<em>Prabhas</em>&nbsp;(also known as &quot;<em>Prabhas Raju</em>&quot; born 23 October 1979) is an Indian film actor associated with Telugu Cinema.</p>\r\n', '1'),
(76, 'Shraddha Kapoor', 'public/Admin_assets/cast/photo_75.jpeg', '<p>Shraddha Kapoor is an Indian actress and singer who works in Hindi films. The daughter of actor Shakti Kapoor, she began her acting career with a brief role in the 2010 heist film Teen Patti.</p>\r\n', '4'),
(77, 'Neil Nitin Mukesh View Info Jackie Shroff', 'public/Admin_assets/cast/photo_76.jpg', '<p>Neil Nitin Mukesh is an actor who made his debut with the critically acclaimed thriller Johnny Gaddar. His performance in films like New York and 7 Khoon Maaf further earned him critical acclaim, several nominations and awards.</p>\r\n', '1'),
(78, 'Jackie Shroff', 'public/Admin_assets/cast/photo_77.jpg', '<p>Born in Latur, Maharashtra, Jackie Shroff is a popular Indian actor. With a career spanning over three decades, he has appeared in more than 220 films in eleven languages.&nbsp;</p>\r\n', '1'),
(79, 'Mandira Bedi', 'public/Admin_assets/cast/photo_78.jpg', '<p>Mandira Bedi is a popular host, fashion designer, television &amp; film actor. She made her Bollywood debut with the iconic Yash Raj movie Dilwale Dulhania Le Jayenge.&nbsp;</p>\r\n', '4'),
(80, 'V Vamsi Krishna Reddy Pramod Uppalapati', 'public/Admin_assets/cast/photo_79.jpg', '<p>Produced by&nbsp;<em>V</em>.&nbsp;<em>Vamsi Krishna Reddy</em>&nbsp;and&nbsp;<em>Pramod Uppalapati</em>&nbsp;under their production company UV Creations,<em>V</em>.&nbsp;<em>Vamsi Krishna Reddy</em>&nbsp;is an Indian film producer, who primarily works in the Telugu film industry.&nbsp;</p>\r\n', '3'),
(81, 'James McAvoy', 'public/Admin_assets/cast/photo_80.jpeg', '<p><em>James McAvoy</em>&nbsp;is a Scottish actor. He made his acting debut as a teen in The Near Room (1995) and made mostly television appearances until 2003.</p>\r\n', '1'),
(82, 'Jennifer Lawrence', 'public/Admin_assets/cast/photo_81.jpeg', '<p><em>Jennifer</em>&nbsp;Shrader&nbsp;<em>Lawrence</em>&nbsp;(born August 15, 1990) is an American actress. Her films have grossed over $5.7 billion worldwide,&nbsp;</p>\r\n', '4'),
(83, 'Simon Kinberg', 'public/Admin_assets/cast/photo_82.jpeg', '<p>Simon David Kinberg is a British-born American screenwriter, film producer and television producer. He is best known for his work on the X-Men film franchise, and has also written such films as Mr. &amp; Mrs. Smith and Sherlock Holmes.</p>\r\n', '2'),
(84, 'Simon Kinberg', 'public/Admin_assets/cast/photo_83.jpeg', '<p>Simon David Kinberg is a British-born American screenwriter, film producer and television producer. He is best known for his work on the X-Men film franchise,</p>\r\n', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cast_type`
--

CREATE TABLE `tbl_cast_type` (
  `cast_type_id` int(5) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cast_type`
--

INSERT INTO `tbl_cast_type` (`cast_type_id`, `type`) VALUES
(1, 'Actor'),
(2, 'Director'),
(3, 'Producer'),
(4, 'Actress'),
(5, 'Dancers'),
(6, 'Choreographer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE `tbl_contactus` (
  `contact_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contactus`
--

INSERT INTO `tbl_contactus` (`contact_id`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(9, 'Mohit', 'mohit@gmail.com', '8200568996', 'MobileReachrge', 'Recharage'),
(10, 'Sagar Variya', 'sagarvariya123@gmail.com', '9685741232', 'DTHReachrge', 'DTH Recharge'),
(11, 'Ankit Ramani', 'ankitramani456@gmail.com', '7744112255', 'GesBill', 'Gas Bill Isuue'),
(12, 'Nishant Thummar', 'nishant12@gmail.com', '8855223366', 'Electricity', 'electricity supply issue'),
(13, 'Jaydeep Thummar', 'jaydeepthummar1756@gmail.com', '7788554411', 'Other', 'bill amount issue'),
(14, 'Nikunj Vachhani', 'nikunj123@gmail.com', '7412589630', 'MobileReachrge', 'refund issue'),
(15, 'Alpesh Thakare', 'alpeshthakre789@gmail.com', '8574961230', 'DTHReachrge', 'DTH Connection error'),
(16, 'Vishal Savani', 'vishalsavani33@gmail.com', '8495623212', 'GesBill', 'Gas bill amount issue'),
(17, 'Parth Vataliya', 'parthvatliya123@gmail.com', '9874563210', 'Electricity', 'payment isuue'),
(18, 'Harish Soparkar', 'harish234@gmail.com', '8574960230', 'Other', 'payment related issue'),
(19, 'Darshan Sutariya', 'darshan78@gmail.com', '8574966655', 'DTHReachrge', 'DTH Recharge'),
(20, 'Harshad Nariya', 'harshadnariya23@gmail.com', '8528528520', 'GesBill', 'Gas bill isssue'),
(21, 'Yagnik Radadiya', 'yagnikradadiya21@gmail.com', '9913037397', 'Electricity', 'elecctriccity '),
(22, 'Jaldeep Vasani', 'jaldeepvasani85@gmail.com', '9685743210', 'MobileReachrge', 'mobile recharge'),
(23, 'Sharad Hirpara', 'hirparasharad45@gmail.com', '8585747412', 'Electricity', 'electricity amount issue');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_subscriber`
--

CREATE TABLE `tbl_email_subscriber` (
  `subscriber_id` int(5) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email_subscriber`
--

INSERT INTO `tbl_email_subscriber` (`subscriber_id`, `email`) VALUES
(1, 'harshad@gmail.com'),
(2, 'mohit@gmail.com'),
(3, 'raju@gmail.com'),
(4, 'raju1@gmail.com'),
(5, 'Sutex@gmail.com'),
(6, 'test@gmail.com'),
(7, 'hello123@gmail.com'),
(8, 'ishita@gmail.com'),
(9, 'gopal@gmail.com'),
(10, 'harsh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `name`, `message`) VALUES
(1, 'Sunil Malhotara', 'Easy To Use  And Also Easy To Understood.'),
(2, 'Shubham Trivedi', 'WE LOVE IT! IT’S SO GREAT! AMAZING! INCREDIBLE!'),
(3, 'Arjun Gaaytundey', 'quick pay is an easy payment site that  i found from various payment methods'),
(4, 'Nick Jones', 'One of the best payment site that i have ever visite '),
(5, 'Hafeez Saeed', 'I Prefer this site becuase it provied us such an attractive offer for to use this site '),
(6, 'Manohar Parikar', 'Really Unique from the other sites lovely!'),
(7, 'Prince Panday', 'It Provies a good security LOVE IT! '),
(8, 'Virat Kohli', 'Love THIS ONE! Extraimely Wonderfull '),
(9, 'Jaimin Shukhla', 'Far better than any other site compare to this one!'),
(10, 'Sagar Variya', 'Very usefull for online recharges and movie booking system.'),
(11, 'Ankit Ramani', 'it provides secure payment facilities in this site.'),
(12, 'Jaydeep Thummar', 'easy to use and attractive for any user to use it'),
(13, 'Nikunj Vasani', 'excellent  experiance of using it.'),
(14, 'Mohit Nimavat', 'Nice experiance using this site.'),
(15, 'Nishant Thummar', 'Lovely !  Very  verstile site that i expeariance of using this.'),
(16, 'Harsh', 'very good');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `location_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `parent_id` int(5) NOT NULL,
  `label` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`location_id`, `name`, `parent_id`, `label`) VALUES
(1, 'Gujarat', 0, 'state'),
(2, 'Panjab', 0, 'state'),
(3, 'Surat', 1, 'city'),
(4, 'Maharashtra', 0, 'state'),
(5, 'Vadodara', 1, 'city'),
(6, 'Ahmedabad', 1, 'city'),
(7, 'Rajkot', 1, 'city'),
(8, 'Bhavnagar', 1, 'city'),
(9, 'Amreli', 1, 'city'),
(10, 'Jamnagar', 1, 'city'),
(11, 'Amritsar', 2, 'city'),
(12, 'Patiala', 2, 'city'),
(13, 'Bathinda', 2, 'city'),
(14, 'Mumbai', 4, 'city'),
(15, 'Nagpur', 4, 'city'),
(16, 'Pune', 4, 'city');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movie`
--

CREATE TABLE `tbl_movie` (
  `movie_id` int(5) NOT NULL,
  `type_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cast_type_id` varchar(100) NOT NULL,
  `cast_id` varchar(100) NOT NULL,
  `relese_date` date NOT NULL,
  `duration` varchar(100) NOT NULL,
  `trailer` varchar(100) NOT NULL,
  `overview` varchar(2000) NOT NULL,
  `poster` varchar(1000) NOT NULL,
  `songs` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movie`
--

INSERT INTO `tbl_movie` (`movie_id`, `type_id`, `name`, `cast_type_id`, `cast_id`, `relese_date`, `duration`, `trailer`, `overview`, `poster`, `songs`, `status`) VALUES
(1, 4, 'Romeo Akbar Walter', '1,2,3,4,5,6', '1|2|10|9|15|19', '2019-04-05', '2 Hour 30 Minute', 'HSHjC8VdzCM', '<p>Romeo Akbar Walter (RAW) is a spy thriller that is set against the backdrop of the Indo-Pakistani War of 1971. The film, which is inspired by true events, is directed by Robby Grewal.</p>\r\n', 'public/Admin_assets/movie/Romeo Akbar Walter0.jpg', 'https://www.youtube.com/embed/-YdT_7C0PgI,https://www.youtube.com/embed/_mO3IHzeUzM', 0),
(2, 4, 'Kesari', '1,2,3,4,5', '5|20|13|21|17', '2019-03-21', '2 Hour 40 Minute', 'JFP24D15_XM', '<p>KESARI is based on the true story of one of the bravest battles that India ever fought &ndash; the Battle of Saragarhi.&nbsp;</p>\r\n', 'public/Admin_assets/movie/Kesari0.jpg', 'https://www.youtube.com/embed/wF_B_aagLfI,https://www.youtube.com/embed/j6muwUGdvXw', 0),
(3, 4, 'Kalank', '1,2,3,4,5', '3|6|13|11|16', '2019-04-17', '2 Hour 45 Minute', 'p4Z_ueeT_XQ', '<p>Kalank, a period film, set in pre-independent India is a story about an elite family and many of its hidden truths that begin to unfold as communal tensions rise and partition nears.</p>\r\n', 'public/Admin_assets/movie/Kalank0.jpeg', 'https://www.youtube.com/embed/Fdk3brbEkPw,https://www.youtube.com/embed/p3HR9QDMj18', 0),
(4, 7, 'Avengers Endgame', '1,2,3,4', '22|24|25|23', '2019-04-24', '3 Hour 2 Minute', 'TcMBFSGVi1c', '<p>Student of the Year 2 is an upcoming Indian romantic comedy drama film directed by Punit Malhotra.&nbsp;</p>\r\n', 'public/Admin_assets/movie/Avengers Endgame0.jpg,public/Admin_assets/movie/Avengers Endgame1.jpeg', 'https://www.youtube.com/embed/TcMBFSGVi1c', 0),
(5, 7, 'Captain Marvel', '1,2,3,4', '26|27|25|23', '2019-04-08', '2 Hour 5 Minute', 'Z1BCujX3pw8', '<p>Captain Marvel is an extraterrestrial Kree warrior who finds herself caught in the middle of an intergalactic battle between her people and the Skrulls.&nbsp;</p>\r\n', 'public/Admin_assets/movie/ceptai.png', 'https://www.youtube.com/embed/I8Nr7Iqmv8A,https://www.youtube.com/embed/JViYDKVmIJU', 0),
(6, 9, 'Hellboy', '1,2,3,4', '29|30|31|28', '2019-04-10', '2 Hour 28 Minute', 'dt5g5_1cKVk', '<p>Based on the graphic novels by Mike Mignola, Hellboy, caught between the worlds of the supernatural and human, battles an ancient sorceress bent on revenge.</p>\r\n', 'public/Admin_assets/movie/Hellboy.jpg', 'https://www.youtube.com/embed/dt5g5_1cKVk', 0),
(7, 10, 'Airaa', '1,2,3,4,5', '34|35|38|37|17', '2019-03-28', '2 Hour 22 minute ', 'V0JBOhkml14', '<p><em><strong>Airaa</strong></em>&nbsp;(transl.&thinsp;The beginning) is a 2019 Indian&nbsp;<a href=\"https://en.wikipedia.org/wiki/Tamil-language\">Tamil</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Horror_film\">horror film</a>&nbsp;written and directed by KM Sarjun.</p>\r\n', 'public/Admin_assets/movie/Airaa.jpg', 'https://www.youtube.com/embed/CWjR0ddXUDo', 0),
(8, 11, 'Super Deluxe', '1,2,3,4', '32|33|36|39', '2019-03-29', '2 Hour 30 Minute', '3-Xq_Zz3nPA', '<p><em><strong>Super Deluxe</strong></em>&nbsp;is a 2019&nbsp;<a href=\"https://en.wikipedia.org/wiki/Tamil_language\">Tamil language</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Black_comedy\">black comedy</a>&nbsp;film co-written and directed by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Thiagarajan_Kumararaja\">Thiagarajan Kumararaja</a>. It features&nbsp;<a href=\"https://en.wikipedia.org/wiki/Vijay_Sethupathi\">Vijay Sethupathi</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Fahadh_Faasil\">Fahadh Faasil</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Samantha_Akkineni\">Samantha Akkineni</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Ramya_Krishnan\">Ramya Krishnan</a>,&nbsp;</p>\r\n', 'public/Admin_assets/movie/Super Deluxe0.jpeg', 'https://www.youtube.com/embed/8NCq6qS7KMk', 0),
(9, 4, 'PM Narendra Modi', '1,2,4,5', '40|42|41|17', '2019-04-12', '2 Hour 20 Minute ', 'X6sjQG6lp8s', '<p>The film showcases Modi&#39;s remarkable courage, wisdom, patience, dedication to his people, his acumen as a political strategist, his leadership that inspired a thousand social changes in Gujarat and later India. It traces his childhood in the 1950s to his meteoric rise in the corridors of politics</p>\r\n', 'public/Admin_assets/movie/PM Narendra Modi0.jpg', 'https://www.youtube.com/embed/mJ0U7uwCq9U,https://www.youtube.com/embed/4oAWl0up_Tg', 0),
(10, 4, 'Junglee', '1,2,3,4', '43|44|45|46', '2019-03-29', '1 Hours 55 minute', 'tcsJ-3GLDE4', '<p><em><strong>Junglee</strong></em>&nbsp;(transl.&thinsp;Wild) is a 2019 Indian&nbsp;<a href=\"https://en.wikipedia.org/wiki/Hindi-language\">Hindi-language</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Action_film\">action</a>-<a href=\"https://en.wikipedia.org/wiki/Adventure_film\">adventure film</a><a href=\"https://en.wikipedia.org/wiki/Junglee_(2019_film)#cite_note-BBFC-2\">[2]</a>&nbsp;directed by American filmmaker&nbsp;<a href=\"https://en.wikipedia.org/wiki/Chuck_Russell\">Chuck Russell</a>and produced by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Junglee_Pictures\">Junglee Pictures</a>.Starring&nbsp;<a href=\"https://en.wikipedia.org/wiki/Vidyut_Jammwal\">Vidyut Jammwal</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pooja_Sawant\">Pooja Sawant</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Asha_Bhat\">Asha Bhat</a>&nbsp;in the lead roles, the film revolves around a veterinary doctor, who upon returning to his father&rsquo;s elephant reserve, encounters and fights against an international poacher&#39;s racket.</p>\r\n', 'public/Admin_assets/movie/Junglee-Banner.jpg', 'https://www.youtube.com/embed/PX1Qqz7VsHs,https://www.youtube.com/embed/TfQrDEilHaI,https://www.youtube.com/embed/JpN1siQ8yms', 0),
(12, 4, 'Why Cheat India', '1,2,3', '51|52|56', '2019-01-18', '2 hours 20 minutes', '2B6vjua8aK4', '<p>Focuses on existing malpractices in country&#39;s education system, the whole concept of buying your way through education, jobs and earnings.</p>\r\n', 'public/Admin_assets/movie/Why Cheat India0.jpg', 'https://www.youtube.com/embed/VXVmtHcf2Dg,https://www.youtube.com/embed/Isb9OMP9TzY', 0),
(13, 5, 'De De Pyaar De', '1,2,3,4,5,6', '57|59|60|58|17|61', '2019-05-17', '2 Hour 20 Minute', 'EJUD2PptXrk', '<p><em><strong>De De Pyaar De</strong></em>&nbsp;(transl.&nbsp;Give me your love) is an upcoming Indian&nbsp;<a href=\"https://en.wikipedia.org/wiki/Romantic_comedy\">romantic comedy</a>&nbsp;film written and co-produced by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Luv_Ranjan\">Luv Ranjan</a>&nbsp;and directed by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Akiv_Ali\">Akiv Ali</a>&nbsp;which marks his directorial debut.</p>\r\n', 'public/Admin_assets/movie/De De Pyaar De0.jpg,public/Admin_assets/movie/De De Pyaar De1.jpeg', 'https://www.youtube.com/embed/LqiqVnpUoGQ,https://www.youtube.com/embed/EmO3-Hz8ilw', 0),
(14, 10, 'Yajamana', '1,2,3,4', '62|63|64|65', '2019-03-01', '2 Hour 42 minute', 'A65l7LrbAQg', '<p><em><strong>Yajamana</strong></em>&nbsp;is a 2019 Indian&nbsp;<a href=\"https://en.wikipedia.org/wiki/Kannada_language\">Kannada language</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Action_drama\">action drama</a>&nbsp;film written and directed by&nbsp;<a href=\"https://en.wikipedia.org/wiki/V._Harikrishna\">V. Harikrishna</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pon_Kumaran\">Pon Kumaran</a>and produced by Shylaja Nag and B. Suresh. It stars&nbsp;<a href=\"https://en.wikipedia.org/wiki/Darshan_(actor)\">Darshan</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Rashmika_Mandanna\">Rashmika Mandanna</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Tanya_Hope\">Tanya Hope</a>&nbsp;in lead roles.</p>\r\n', 'public/Admin_assets/movie/Yajamana0.jpeg,public/Admin_assets/movie/Yajamana1.jpg', 'https://www.youtube.com/embed/k5Y-WwpS6BU,https://www.youtube.com/embed/A65l7LrbAQg,https://www.youtube.com/embed/iBes9CgiO5M', 0),
(15, 7, 'Shazami', '1,2,3,4', '66|68|69|67', '2019-04-04', '2 Hour 12 Minute', 'uilJZZ_iVwY', '<p><em>Shazam</em>! is a 2019 American superhero film based on the DC Comics character of the same name. Produced by New Line Cinema and distributed by Warner Bros</p>\r\n', 'public/Admin_assets/movie/Shazami0.jpg,public/Admin_assets/movie/Shazami1.jpg,public/Admin_assets/movie/Shazami2.jpg', 'https://www.youtube.com/embed/JdWPEBMh3NQ', 0),
(16, 8, 'Aladdin', '1,2,3,4', '70|74|73|72|71', '2019-05-24', '2 Hour 30 Minute', 'foyufD52aog', '<p><em>Aladdin</em>&nbsp;is an upcoming American&nbsp;<a href=\"https://en.wikipedia.org/wiki/Musical_film\">musical</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Fantasy_film\">fantasy</a>&nbsp;film directed by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Guy_Ritchie\">Guy Ritchie</a>,</p>\r\n', 'public/Admin_assets/movie/Aladdin0.jpg', 'https://www.youtube.com/embed/foyufD52aog', 0),
(17, 7, 'X Men Dark Phoenix', '1,2,3,4', '81|83|84|82', '2019-06-07', '2 Hour 25 Minute', '1-q8C_c-nlM', '<p>The X-Men face their most formidable and powerful foe when one of their own, Jean Grey, starts to spiral out of control. During a rescue mission in outer space, Jean is nearly killed when she&#39;s hit by a mysterious cosmic force.&nbsp;</p>\r\n', 'public/Admin_assets/movie/X Men Dark Phoenix0.jpeg,public/Admin_assets/movie/X Men Dark Phoenix1.jpeg,public/Admin_assets/movie/X Men Dark Phoenix2.jpg', 'https://www.youtube.com/embed/IqflOkaT5bI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movie_time`
--

CREATE TABLE `tbl_movie_time` (
  `time_id` int(5) NOT NULL,
  `theater_id` int(5) NOT NULL,
  `screen_id` int(5) NOT NULL,
  `movie_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movie_time`
--

INSERT INTO `tbl_movie_time` (`time_id`, `theater_id`, `screen_id`, `movie_id`, `date`, `time`, `price`) VALUES
(1, 2, 1, 2, '2019-04-13', '10:00:00', 85),
(2, 2, 6, 2, '2019-04-13', '12:05:00', 120),
(3, 2, 9, 2, '2019-04-13', '14:05:00', 150),
(4, 5, 5, 2, '2019-04-14', '07:05:00', 85),
(6, 5, 7, 2, '2019-05-14', '10:05:00', 120),
(7, 5, 8, 2, '2019-04-14', '12:00:00', 150),
(9, 5, 5, 2, '2019-04-15', '07:05:00', 100),
(10, 5, 7, 2, '2019-04-15', '10:05:00', 120),
(11, 5, 8, 2, '2019-04-15', '12:05:00', 150),
(12, 5, 5, 2, '2019-04-15', '14:05:00', 160),
(13, 5, 5, 2, '2019-04-16', '07:05:00', 120),
(14, 5, 7, 2, '2019-04-16', '15:05:00', 150),
(15, 5, 5, 2, '2019-04-16', '17:05:00', 190),
(16, 4, 4, 1, '2019-04-16', '07:05:00', 100),
(17, 4, 10, 1, '2019-04-16', '10:05:00', 150),
(18, 4, 11, 1, '2019-04-16', '12:30:00', 180),
(19, 4, 4, 1, '2019-04-16', '14:20:00', 210),
(21, 4, 4, 1, '2019-04-17', '08:30:00', 100),
(22, 4, 10, 1, '2019-04-17', '10:30:00', 120),
(23, 4, 11, 1, '2019-04-17', '12:30:00', 150),
(24, 4, 10, 1, '2019-04-17', '15:30:00', 180),
(25, 4, 4, 1, '2019-04-18', '07:30:00', 100),
(26, 4, 10, 1, '2019-04-18', '10:30:00', 120),
(27, 4, 11, 1, '2019-04-17', '14:35:00', 150),
(28, 4, 4, 1, '2019-04-18', '15:30:00', 180),
(30, 4, 10, 1, '2019-04-19', '12:30:00', 120),
(31, 4, 11, 1, '2019-04-19', '17:05:00', 190),
(32, 4, 4, 1, '2019-04-20', '09:30:00', 100),
(33, 4, 10, 1, '2019-04-20', '11:30:00', 120),
(34, 4, 11, 1, '2019-04-20', '14:30:00', 150),
(35, 5, 5, 1, '2019-04-16', '08:30:00', 100),
(36, 5, 7, 1, '2019-04-16', '11:30:00', 120),
(37, 5, 8, 1, '2019-04-16', '14:30:00', 150),
(38, 5, 5, 1, '2019-04-16', '16:30:00', 190),
(39, 5, 5, 1, '2019-04-17', '10:30:00', 100),
(40, 5, 7, 1, '2019-04-17', '14:30:00', 150),
(41, 5, 8, 1, '2019-04-17', '15:30:00', 160),
(42, 5, 5, 1, '2019-04-18', '07:30:00', 100),
(43, 5, 7, 1, '2019-04-18', '11:30:00', 120),
(44, 5, 8, 1, '2019-04-18', '14:30:00', 150),
(45, 5, 5, 1, '2019-04-19', '09:30:00', 120),
(46, 5, 7, 1, '2019-04-19', '09:30:00', 150),
(47, 5, 8, 1, '2019-04-19', '14:30:00', 180),
(48, 5, 5, 1, '2019-04-20', '08:30:00', 100),
(49, 5, 7, 1, '2019-04-20', '11:30:00', 160),
(50, 5, 8, 1, '2019-04-20', '14:30:00', 170),
(51, 2, 1, 1, '2019-04-16', '10:30:00', 150),
(52, 2, 6, 1, '2019-04-16', '12:30:00', 180),
(53, 2, 9, 1, '2019-04-16', '15:30:00', 380),
(54, 2, 1, 1, '2019-04-17', '11:30:00', 150),
(55, 2, 6, 1, '2019-04-17', '15:30:00', 180),
(56, 2, 9, 1, '2019-04-17', '17:30:00', 190),
(57, 2, 1, 1, '2019-04-18', '09:30:00', 150),
(58, 2, 9, 1, '2019-04-18', '22:30:00', 380),
(59, 2, 6, 1, '2019-04-18', '23:00:00', 480),
(60, 2, 1, 1, '2019-04-19', '07:30:00', 120),
(64, 2, 9, 1, '2019-04-20', '15:30:00', 180),
(65, 2, 9, 1, '2019-04-20', '16:30:00', 170),
(66, 2, 6, 1, '2019-04-20', '18:30:00', 320),
(67, 2, 1, 2, '2019-04-16', '07:30:00', 120),
(68, 2, 6, 2, '2019-04-06', '10:30:00', 150),
(69, 2, 9, 2, '2019-04-16', '12:30:00', 220),
(70, 2, 9, 2, '2019-04-16', '15:30:00', 320),
(71, 2, 1, 2, '2019-04-17', '07:30:00', 120),
(72, 2, 6, 2, '2019-04-17', '10:30:00', 150),
(73, 2, 9, 2, '2019-04-17', '14:30:00', 180),
(74, 2, 1, 2, '2019-04-18', '08:30:00', 150),
(75, 2, 6, 2, '2019-04-18', '12:05:00', 190),
(76, 2, 9, 1, '2019-04-18', '15:30:00', 220),
(77, 2, 1, 1, '2019-04-19', '08:30:00', 120),
(80, 2, 1, 2, '2019-04-20', '09:30:00', 120),
(81, 2, 6, 2, '2019-04-20', '11:30:00', 150),
(82, 2, 9, 1, '2019-04-20', '15:30:00', 250),
(83, 5, 5, 2, '2019-04-17', '07:30:00', 120),
(84, 5, 7, 1, '2019-04-17', '11:30:00', 150),
(85, 5, 8, 2, '2019-04-17', '16:30:00', 180),
(86, 5, 8, 2, '2019-04-17', '20:30:00', 190),
(87, 5, 5, 2, '2019-04-18', '09:30:00', 150),
(88, 5, 7, 2, '2019-04-18', '14:30:00', 190),
(89, 2, 9, 1, '2019-04-18', '16:30:00', 320),
(90, 5, 8, 1, '2019-04-18', '16:30:00', 320),
(91, 2, 1, 1, '2019-04-19', '19:30:00', 120),
(92, 2, 6, 1, '2019-04-19', '10:30:00', 150),
(93, 2, 9, 1, '2019-04-19', '14:30:00', 350),
(94, 2, 1, 1, '2019-04-20', '08:30:00', 120),
(95, 2, 6, 1, '2019-04-20', '14:30:00', 250),
(97, 2, 9, 1, '2019-04-20', '17:30:00', 420),
(98, 5, 5, 2, '2019-04-19', '09:30:00', 120),
(99, 5, 7, 1, '2019-04-19', '11:30:00', 220),
(100, 5, 8, 2, '2019-04-19', '15:30:00', 320),
(101, 5, 5, 1, '2019-04-20', '11:30:00', 120),
(102, 5, 7, 2, '2019-04-20', '14:30:00', 220),
(103, 5, 8, 2, '2019-04-20', '15:30:00', 320),
(104, 4, 4, 1, '2019-04-16', '10:30:00', 120),
(105, 4, 10, 2, '2019-04-16', '12:30:00', 220),
(106, 4, 11, 2, '2019-04-16', '15:30:00', 320),
(107, 4, 4, 2, '2019-04-16', '11:30:00', 120),
(108, 4, 4, 2, '2019-04-17', '08:30:00', 120),
(110, 4, 10, 2, '2019-04-17', '11:30:00', 220),
(111, 4, 11, 2, '2019-04-17', '14:30:00', 320),
(112, 4, 4, 2, '2019-04-18', '08:30:00', 120),
(113, 4, 10, 2, '2019-04-18', '11:30:00', 220),
(114, 4, 11, 2, '2019-04-18', '04:30:00', 320),
(115, 4, 4, 2, '2019-04-19', '09:30:00', 120),
(116, 4, 10, 2, '2019-04-19', '12:30:00', 220),
(117, 4, 11, 2, '2019-04-19', '16:30:00', 320),
(118, 4, 4, 2, '2019-04-20', '10:30:00', 120),
(119, 4, 10, 2, '2019-04-20', '12:30:00', 220),
(120, 4, 11, 2, '2019-04-20', '17:30:00', 320),
(121, 2, 9, 2, '2019-04-18', '17:30:00', 320),
(122, 5, 8, 2, '2019-04-18', '17:30:00', 320),
(123, 5, 8, 2, '2019-04-19', '18:30:00', 320),
(124, 5, 7, 2, '2019-04-19', '20:30:00', 420),
(125, 5, 8, 2, '2019-04-20', '18:30:00', 320),
(126, 2, 9, 2, '2019-04-19', '18:30:00', 420),
(127, 2, 9, 2, '2019-04-20', '20:30:00', 320),
(128, 2, 1, 5, '2019-04-16', '08:30:00', 120),
(129, 2, 6, 5, '2019-04-16', '10:30:00', 220),
(130, 2, 9, 5, '2019-04-16', '13:30:00', 320),
(131, 2, 9, 5, '2019-04-16', '15:30:00', 420),
(132, 2, 1, 5, '2019-04-16', '17:30:00', 520),
(133, 4, 4, 5, '2019-04-16', '08:30:00', 100),
(134, 4, 10, 5, '2019-04-16', '10:30:00', 220),
(135, 4, 11, 5, '2019-04-16', '13:30:00', 255),
(137, 4, 4, 5, '2019-04-16', '15:30:00', 320),
(138, 4, 10, 5, '2019-04-16', '17:30:00', 420),
(139, 5, 5, 5, '2019-04-16', '07:30:00', 120),
(140, 5, 7, 5, '2019-04-16', '10:30:00', 220),
(141, 5, 8, 5, '2019-04-16', '13:30:00', 320),
(143, 5, 5, 5, '2019-04-16', '15:30:00', 420),
(144, 5, 7, 5, '2019-04-16', '17:30:00', 420),
(146, 2, 6, 5, '2019-04-17', '11:30:00', 120),
(147, 2, 6, 5, '2019-04-17', '14:30:00', 220),
(148, 2, 9, 5, '2019-04-17', '16:30:00', 320),
(149, 2, 1, 5, '2019-04-17', '18:30:00', 420),
(150, 2, 6, 5, '2019-04-17', '20:30:00', 520),
(151, 4, 4, 5, '2019-04-17', '08:30:00', 120),
(152, 4, 10, 5, '2019-04-17', '10:30:00', 220),
(153, 4, 11, 5, '2019-04-17', '13:00:00', 320),
(154, 4, 4, 5, '2019-04-17', '15:30:00', 420),
(155, 4, 10, 5, '2019-04-17', '18:30:00', 520),
(156, 5, 5, 5, '2019-04-17', '10:30:00', 120),
(157, 5, 7, 5, '2019-04-17', '12:30:00', 220),
(158, 5, 8, 5, '2019-04-17', '15:30:00', 320),
(159, 5, 5, 5, '2019-04-17', '18:30:00', 420),
(160, 5, 7, 5, '2019-04-17', '20:30:00', 520),
(161, 2, 1, 5, '2019-04-18', '10:30:00', 100),
(162, 2, 6, 5, '2019-04-18', '12:30:00', 200),
(163, 2, 9, 5, '2019-04-18', '14:30:00', 300),
(164, 2, 1, 5, '2019-04-18', '16:30:00', 400),
(165, 2, 6, 5, '2019-04-18', '18:30:00', 500),
(166, 4, 4, 5, '2019-04-18', '10:30:00', 100),
(167, 4, 10, 5, '2019-04-18', '13:00:00', 200),
(168, 4, 11, 5, '2019-04-18', '15:00:00', 300),
(169, 4, 10, 5, '2019-04-18', '17:00:00', 500),
(170, 4, 11, 5, '2019-04-18', '19:00:00', 550),
(171, 5, 5, 5, '2019-04-18', '07:00:00', 100),
(172, 5, 7, 5, '2019-04-18', '09:30:00', 200),
(173, 5, 8, 5, '2019-04-18', '13:00:00', 300),
(174, 5, 5, 5, '2019-04-18', '15:00:00', 400),
(175, 5, 7, 5, '2019-04-18', '17:00:00', 500),
(176, 2, 1, 5, '2019-04-19', '08:30:00', 100),
(177, 2, 6, 5, '2019-04-19', '10:05:00', 200),
(178, 2, 9, 5, '2019-04-19', '13:00:00', 300),
(179, 2, 1, 5, '2019-04-19', '15:00:00', 400),
(180, 2, 6, 5, '2019-04-19', '17:00:00', 500),
(181, 2, 1, 5, '2019-04-19', '10:00:00', 100),
(182, 4, 4, 5, '2019-10-19', '13:00:00', 120),
(183, 4, 10, 5, '2019-04-19', '15:00:00', 200),
(184, 4, 11, 5, '2019-04-19', '17:00:00', 300),
(185, 4, 4, 5, '2019-04-19', '19:00:00', 400),
(186, 4, 10, 5, '2019-04-19', '21:10:00', 500),
(187, 5, 5, 5, '2019-04-20', '07:00:00', 100),
(188, 5, 7, 5, '2019-04-20', '10:00:00', 200),
(189, 5, 8, 5, '2019-04-20', '13:10:00', 300),
(190, 5, 5, 5, '2019-04-20', '15:00:00', 400),
(191, 5, 7, 5, '2019-04-20', '19:00:00', 600),
(192, 5, 5, 5, '2019-04-19', '19:00:00', 100),
(193, 5, 7, 5, '2019-04-19', '10:00:00', 200),
(194, 5, 8, 5, '2019-04-19', '13:00:00', 300),
(195, 5, 5, 5, '2018-04-19', '15:00:00', 400),
(196, 5, 7, 5, '2019-04-19', '17:00:00', 500),
(197, 2, 1, 5, '2019-04-20', '07:00:00', 120),
(198, 2, 6, 5, '2019-04-20', '10:00:00', 200),
(199, 5, 8, 5, '2019-04-20', '13:00:00', 300),
(200, 2, 9, 5, '2019-04-20', '15:00:00', 300),
(201, 2, 1, 5, '2019-01-20', '20:30:00', 400),
(202, 2, 6, 5, '2019-04-20', '20:30:00', 500),
(203, 4, 4, 5, '2019-04-20', '07:00:00', 100),
(204, 4, 10, 5, '2019-04-20', '10:00:00', 200),
(205, 4, 11, 5, '2019-04-20', '14:00:00', 300),
(207, 4, 4, 5, '2019-04-20', '18:00:00', 400),
(208, 4, 10, 5, '2019-04-20', '23:00:00', 550),
(209, 5, 5, 6, '2019-04-16', '07:30:00', 100),
(210, 5, 7, 6, '2019-04-16', '10:30:00', 200),
(211, 5, 8, 6, '2019-04-16', '12:30:00', 300),
(212, 5, 5, 6, '2019-04-16', '14:30:00', 400),
(213, 5, 7, 6, '2019-04-16', '16:30:00', 500),
(214, 4, 4, 6, '2019-04-16', '10:30:00', 120),
(215, 4, 10, 6, '2019-04-16', '14:30:00', 180),
(216, 4, 11, 6, '2019-04-16', '16:30:00', 190),
(217, 4, 4, 6, '2019-04-16', '18:30:00', 210),
(218, 4, 10, 6, '2019-04-16', '20:30:00', 250),
(219, 2, 1, 6, '2019-04-16', '08:30:00', 120),
(220, 2, 6, 6, '2019-04-16', '10:30:00', 220),
(221, 2, 9, 17, '2019-04-16', '12:30:00', 320),
(222, 2, 1, 6, '2019-04-16', '14:30:00', 420),
(223, 2, 6, 6, '2019-04-16', '15:20:00', 520),
(224, 2, 9, 6, '2019-04-16', '18:30:00', 520),
(225, 5, 5, 6, '2019-04-17', '08:00:00', 100),
(226, 5, 5, 6, '2019-04-17', '10:00:00', 200),
(227, 5, 8, 6, '2019-04-17', '13:00:00', 320),
(228, 5, 5, 6, '2019-04-17', '15:00:00', 420),
(229, 5, 7, 6, '2019-04-17', '17:00:00', 520),
(230, 4, 4, 6, '2019-04-17', '08:30:00', 120),
(231, 4, 10, 6, '2019-04-17', '12:30:00', 210),
(232, 4, 11, 6, '2019-04-17', '14:30:00', 310),
(233, 4, 11, 6, '2019-04-17', '16:30:00', 310),
(234, 4, 4, 6, '2019-04-17', '18:30:00', 510),
(235, 2, 1, 6, '2019-04-17', '10:30:00', 100),
(236, 2, 6, 6, '2019-04-17', '12:30:00', 210),
(237, 2, 9, 6, '2019-04-17', '14:30:00', 310),
(238, 2, 1, 6, '2019-04-17', '16:30:00', 410),
(239, 2, 6, 6, '2019-04-17', '18:30:00', 510),
(240, 5, 5, 6, '2019-04-18', '10:30:00', 100),
(241, 5, 7, 6, '2019-04-18', '12:30:00', 210),
(242, 5, 8, 6, '2019-04-18', '15:30:00', 310),
(243, 5, 5, 6, '2019-04-18', '17:30:00', 410),
(244, 5, 7, 6, '2019-04-18', '19:30:00', 510),
(245, 4, 4, 6, '2019-04-18', '11:30:00', 110),
(246, 4, 10, 6, '2018-04-18', '14:30:00', 210),
(247, 4, 10, 6, '2019-04-18', '14:30:00', 210),
(248, 4, 11, 6, '2019-04-18', '16:30:00', 310),
(249, 4, 4, 6, '2019-04-18', '18:30:00', 410),
(250, 4, 10, 6, '2019-04-18', '20:30:00', 510),
(251, 2, 1, 6, '2019-04-18', '10:30:00', 110),
(252, 2, 6, 6, '2019-04-18', '12:30:00', 210),
(253, 2, 9, 6, '2019-04-18', '14:30:00', 310),
(254, 2, 1, 6, '2019-04-18', '16:30:00', 410),
(255, 2, 6, 6, '2019-04-18', '22:30:00', 510),
(256, 5, 5, 6, '2019-04-19', '07:30:00', 110),
(257, 5, 7, 6, '2019-04-19', '10:30:00', 210),
(258, 5, 8, 6, '2019-04-19', '14:30:00', 310),
(259, 5, 5, 6, '2019-04-19', '16:30:00', 410),
(260, 5, 7, 6, '2019-04-19', '18:30:00', 510),
(261, 4, 4, 6, '2019-04-19', '07:30:00', 100),
(262, 4, 10, 6, '2019-04-19', '10:30:00', 200),
(263, 4, 11, 6, '2019-04-19', '14:30:00', 300),
(264, 4, 4, 6, '2019-04-19', '16:30:00', 400),
(265, 4, 10, 6, '2019-04-19', '18:30:00', 500),
(266, 2, 1, 6, '2019-04-19', '19:30:00', 100),
(267, 2, 6, 6, '2019-04-19', '22:30:00', 200),
(268, 2, 9, 6, '2019-04-19', '12:30:00', 300),
(269, 2, 9, 6, '2019-04-19', '15:30:00', 300),
(270, 2, 6, 6, '2019-04-19', '23:30:00', 500),
(271, 5, 5, 6, '2019-04-20', '08:00:00', 100),
(272, 5, 7, 6, '2019-04-20', '10:00:00', 200),
(273, 5, 8, 6, '2019-04-20', '14:30:00', 300),
(274, 5, 5, 6, '2019-04-20', '15:30:00', 440),
(275, 5, 7, 6, '2019-04-20', '17:30:00', 500),
(276, 4, 4, 6, '2019-04-20', '07:30:00', 100),
(277, 4, 10, 6, '2019-04-20', '11:00:00', 200),
(278, 4, 11, 6, '2019-04-20', '14:30:00', 300),
(279, 4, 4, 6, '2019-04-20', '15:30:00', 400),
(280, 4, 10, 6, '2019-04-20', '18:00:00', 500),
(281, 2, 1, 6, '2019-04-20', '07:30:00', 100),
(282, 2, 6, 6, '2019-04-20', '10:30:00', 200),
(283, 2, 9, 6, '2019-04-20', '02:30:00', 300),
(284, 2, 1, 6, '2019-04-20', '15:30:00', 400),
(285, 2, 6, 6, '2019-04-20', '18:30:00', 500),
(286, 2, 1, 1, '2019-04-16', '17:30:00', 410),
(287, 2, 6, 1, '2019-04-16', '19:30:00', 500),
(288, 5, 7, 1, '2019-04-16', '18:30:00', 500),
(290, 2, 1, 1, '2019-04-17', '19:00:00', 400),
(291, 2, 6, 1, '2019-04-17', '22:00:00', 500),
(292, 5, 7, 1, '2019-04-17', '17:30:00', 500),
(293, 4, 4, 1, '2019-04-18', '17:30:00', 400),
(294, 4, 10, 1, '2019-04-18', '19:30:00', 500),
(295, 5, 7, 1, '2019-04-18', '18:30:00', 500),
(296, 4, 11, 1, '2019-04-19', '19:30:00', 300),
(297, 4, 4, 1, '2019-04-19', '07:30:00', 400),
(298, 4, 10, 1, '2019-04-19', '13:00:00', 500),
(299, 5, 7, 1, '2019-04-19', '17:30:00', 500),
(300, 2, 1, 2, '2019-04-16', '17:30:00', 400),
(301, 4, 4, 2, '2019-04-16', '18:30:00', 400),
(302, 2, 6, 2, '2019-04-16', '19:30:00', 500),
(303, 4, 10, 2, '2019-04-16', '21:30:00', 500),
(304, 5, 5, 2, '2019-04-16', '19:00:00', 400),
(305, 5, 7, 2, '2019-04-16', '22:00:00', 500),
(306, 2, 1, 2, '2019-04-17', '16:30:00', 400),
(307, 2, 6, 2, '2019-04-17', '18:30:00', 500),
(308, 4, 4, 2, '2019-04-17', '16:30:00', 400),
(309, 4, 10, 2, '2019-04-17', '20:30:00', 500),
(310, 5, 5, 2, '2019-04-17', '22:00:00', 400),
(311, 5, 7, 2, '2019-04-17', '23:00:00', 500),
(312, 2, 1, 2, '2019-04-18', '19:30:00', 400),
(313, 2, 6, 2, '2019-04-18', '21:30:00', 500),
(314, 4, 4, 2, '2019-04-18', '22:00:00', 400),
(315, 4, 10, 2, '2019-04-18', '23:30:00', 500),
(316, 5, 5, 2, '2019-04-18', '22:00:00', 400),
(317, 5, 7, 2, '2019-04-18', '23:30:00', 500),
(318, 2, 6, 2, '2019-04-19', '22:00:00', 200),
(319, 2, 9, 2, '2019-04-19', '10:00:00', 300),
(320, 2, 1, 2, '2019-04-19', '23:00:00', 400),
(321, 2, 6, 2, '2019-04-19', '23:30:00', 500),
(322, 4, 4, 2, '2019-04-19', '18:30:00', 400),
(323, 4, 10, 2, '2019-04-19', '20:30:00', 500),
(324, 5, 7, 2, '2019-04-19', '22:30:00', 500),
(325, 5, 7, 5, '2019-04-19', '23:30:00', 500),
(326, 4, 10, 5, '2019-04-19', '23:30:00', 500),
(327, 5, 5, 7, '2019-04-16', '07:30:00', 100),
(328, 5, 7, 7, '2019-04-16', '11:30:00', 200),
(329, 5, 8, 7, '2019-04-19', '15:30:00', 300),
(330, 5, 5, 7, '2019-04-16', '17:30:00', 400),
(331, 5, 7, 7, '2019-04-16', '19:30:00', 500),
(332, 5, 8, 7, '2019-04-16', '23:30:00', 600),
(333, 4, 4, 7, '2019-04-16', '07:30:00', 100),
(334, 4, 10, 7, '2019-04-16', '11:30:00', 200),
(335, 4, 11, 7, '2019-04-16', '14:30:00', 300),
(336, 4, 4, 7, '2019-04-16', '17:30:00', 400),
(337, 4, 10, 7, '2019-04-16', '23:30:00', 500),
(338, 2, 1, 7, '2019-04-16', '08:30:00', 100),
(339, 2, 6, 7, '2019-04-16', '10:00:00', 200),
(340, 2, 9, 7, '2019-04-16', '12:05:00', 300),
(341, 2, 1, 7, '2019-04-16', '19:00:00', 400),
(342, 2, 6, 7, '2019-04-16', '22:00:00', 500),
(343, 5, 5, 7, '2019-04-17', '10:00:00', 100),
(344, 5, 7, 7, '2019-04-17', '12:05:00', 200),
(345, 5, 8, 7, '2019-04-17', '15:30:00', 300),
(346, 5, 5, 7, '2019-04-17', '17:30:00', 400),
(347, 5, 7, 7, '2019-04-17', '18:30:00', 500),
(348, 4, 4, 7, '2019-04-17', '10:00:00', 100),
(349, 4, 10, 7, '2019-04-17', '12:05:00', 200),
(350, 4, 11, 7, '2019-04-17', '15:30:00', 300),
(351, 4, 4, 7, '2019-04-17', '20:30:00', 400),
(352, 4, 10, 7, '2019-04-17', '22:30:00', 500),
(353, 2, 1, 7, '2019-04-17', '10:00:00', 100),
(354, 2, 6, 7, '2019-04-17', '12:05:00', 200),
(355, 2, 9, 7, '2019-04-17', '14:30:00', 300),
(356, 2, 1, 7, '2019-04-17', '15:30:00', 400),
(357, 2, 6, 7, '2019-04-17', '20:30:00', 5000),
(358, 5, 5, 7, '2019-04-18', '10:00:00', 100),
(360, 5, 7, 7, '2019-04-18', '12:05:00', 200),
(361, 5, 8, 7, '2019-04-18', '15:30:00', 300),
(362, 5, 8, 7, '2019-04-18', '17:30:00', 300),
(363, 5, 7, 7, '2019-04-18', '19:30:00', 500),
(364, 4, 4, 7, '2019-04-18', '07:30:00', 100),
(365, 4, 10, 7, '2019-04-18', '11:00:00', 200),
(366, 4, 11, 7, '2019-04-18', '15:30:00', 300),
(367, 4, 4, 7, '2019-04-18', '17:30:00', 400),
(368, 4, 10, 7, '2019-04-18', '22:00:00', 500),
(369, 2, 1, 7, '2019-04-18', '10:00:00', 100),
(370, 2, 6, 7, '2019-04-18', '12:05:00', 200),
(371, 2, 9, 7, '2019-04-18', '15:30:00', 300),
(372, 2, 1, 7, '2019-04-18', '18:30:00', 400),
(373, 2, 6, 7, '2019-04-18', '22:00:00', 500),
(374, 5, 5, 7, '2019-04-19', '10:00:00', 100),
(375, 5, 7, 7, '2019-04-19', '13:05:00', 200),
(376, 5, 5, 7, '2019-04-19', '17:30:00', 400),
(377, 5, 7, 7, '2019-04-19', '22:00:00', 500),
(378, 4, 4, 7, '2019-04-19', '10:00:00', 100),
(379, 4, 10, 7, '2019-04-19', '12:05:00', 200),
(380, 4, 11, 7, '2019-04-19', '15:30:00', 300),
(381, 4, 4, 7, '2019-04-19', '17:30:00', 400),
(382, 4, 10, 7, '2019-04-19', '22:00:00', 500),
(383, 2, 1, 7, '2019-04-19', '07:00:00', 100),
(384, 2, 6, 7, '2019-04-19', '15:30:00', 200),
(385, 2, 9, 7, '2019-04-19', '17:30:00', 300),
(386, 2, 1, 7, '2019-04-19', '21:30:00', 400),
(387, 2, 6, 7, '2019-04-19', '23:00:00', 500),
(388, 5, 5, 7, '2019-04-20', '10:00:00', 100),
(389, 5, 7, 7, '2019-04-20', '12:05:00', 200),
(390, 5, 8, 7, '2019-04-20', '17:30:00', 300),
(391, 5, 5, 7, '2019-04-20', '19:30:00', 400),
(392, 5, 7, 7, '2019-04-20', '22:00:00', 500),
(393, 4, 4, 7, '2019-04-20', '10:00:00', 100),
(394, 4, 10, 7, '2019-04-20', '12:05:00', 200),
(395, 4, 11, 7, '2019-04-20', '15:00:00', 300),
(396, 4, 4, 7, '2019-04-20', '17:30:00', 400),
(397, 4, 10, 7, '2019-04-20', '22:00:00', 500),
(398, 2, 1, 7, '2019-04-20', '10:00:00', 100),
(399, 2, 6, 7, '2019-04-20', '13:00:00', 200),
(400, 2, 9, 7, '2019-04-20', '15:30:00', 300),
(401, 2, 1, 7, '2019-04-20', '17:30:00', 400),
(402, 2, 6, 7, '2019-04-20', '23:30:00', 500),
(403, 5, 5, 8, '2019-04-16', '10:00:00', 100),
(404, 5, 7, 8, '2019-04-16', '13:00:00', 200),
(406, 5, 8, 8, '2019-04-16', '15:00:00', 300),
(407, 5, 5, 8, '2019-04-16', '17:00:00', 400),
(408, 5, 7, 8, '2019-04-16', '19:00:00', 500),
(409, 4, 4, 8, '2019-04-16', '19:00:00', 100),
(410, 4, 10, 8, '2019-04-16', '21:00:00', 200),
(411, 4, 11, 8, '2019-04-16', '15:00:00', 300),
(412, 4, 4, 8, '2019-04-16', '10:00:00', 100),
(413, 4, 10, 8, '2019-04-16', '23:00:00', 500),
(414, 2, 1, 8, '2019-04-16', '10:00:00', 100),
(415, 2, 1, 8, '2019-04-16', '14:00:00', 200),
(416, 2, 9, 8, '2019-04-16', '16:00:00', 300),
(417, 2, 1, 8, '2019-04-16', '18:00:00', 400),
(418, 2, 6, 8, '2019-04-16', '23:30:00', 500),
(419, 5, 5, 8, '2019-04-16', '10:00:00', 100),
(420, 5, 5, 8, '2019-04-17', '10:00:00', 100),
(421, 5, 7, 8, '2019-04-17', '13:00:00', 200),
(422, 5, 8, 8, '2019-04-17', '15:00:00', 300),
(423, 5, 5, 8, '2019-04-17', '17:00:00', 400),
(424, 5, 7, 8, '2019-04-17', '11:00:00', 500),
(425, 4, 4, 8, '2019-04-17', '10:00:00', 100),
(426, 4, 10, 8, '2019-04-17', '13:00:00', 200),
(427, 4, 11, 8, '2019-04-17', '15:00:00', 300),
(428, 4, 4, 8, '2019-04-17', '17:00:00', 400),
(429, 4, 10, 8, '2019-04-17', '19:00:00', 500),
(430, 2, 1, 8, '2019-04-17', '10:00:00', 100),
(431, 2, 6, 8, '2019-04-17', '14:00:00', 200),
(432, 2, 9, 8, '2019-04-16', '18:00:00', 300),
(433, 2, 9, 8, '2019-04-17', '16:00:00', 300),
(434, 2, 1, 8, '2019-04-17', '18:00:00', 400),
(435, 2, 6, 8, '2019-04-17', '18:05:00', 500),
(436, 5, 5, 8, '2019-04-18', '10:00:00', 100),
(437, 5, 7, 8, '2019-04-19', '12:05:00', 200),
(438, 5, 7, 8, '2019-04-18', '12:05:00', 200),
(439, 5, 8, 8, '2019-04-18', '14:30:00', 300),
(440, 5, 7, 8, '2019-04-18', '16:30:00', 400),
(441, 5, 7, 8, '2019-04-17', '18:30:00', 500),
(442, 5, 7, 8, '2019-04-19', '22:00:00', 500),
(443, 5, 7, 8, '2019-04-18', '22:00:00', 500),
(444, 4, 4, 8, '2019-04-18', '10:00:00', 100),
(445, 4, 10, 8, '2019-04-18', '14:00:00', 200),
(446, 4, 11, 8, '2019-04-18', '16:30:00', 300),
(447, 4, 4, 8, '2019-04-18', '18:00:00', 400),
(448, 4, 10, 8, '2019-04-18', '20:30:00', 500),
(449, 2, 1, 8, '2019-04-18', '10:00:00', 100),
(450, 2, 6, 8, '2019-04-18', '14:30:00', 200),
(451, 2, 9, 8, '2019-04-18', '16:30:00', 300),
(452, 2, 1, 8, '2019-04-18', '18:30:00', 400),
(453, 2, 6, 5, '2019-04-18', '20:30:00', 500),
(454, 2, 6, 8, '2019-04-18', '20:30:00', 500),
(455, 5, 5, 8, '2019-04-19', '10:00:00', 100),
(457, 5, 5, 8, '2019-04-19', '14:30:00', 400),
(458, 5, 7, 8, '2019-04-19', '23:00:00', 500),
(459, 4, 4, 8, '2019-04-19', '10:00:00', 100),
(460, 4, 10, 8, '2019-04-19', '14:30:00', 200),
(461, 4, 11, 8, '2019-04-19', '16:30:00', 300),
(462, 4, 4, 8, '2019-04-19', '18:30:00', 400),
(463, 4, 10, 8, '2019-04-19', '20:30:00', 500),
(464, 2, 1, 8, '2019-04-19', '08:00:00', 100),
(465, 2, 6, 8, '2019-04-19', '10:00:00', 200),
(466, 2, 9, 8, '2019-04-19', '14:30:00', 300),
(467, 2, 1, 8, '2019-04-19', '16:30:00', 400),
(468, 2, 6, 8, '2019-04-19', '22:00:00', 500),
(469, 5, 5, 8, '2019-04-20', '22:30:00', 100),
(470, 5, 7, 8, '2019-04-20', '08:20:00', 200),
(471, 5, 8, 5, '2019-04-20', '14:30:00', 400),
(472, 5, 5, 8, '2019-04-20', '23:20:00', 600),
(473, 4, 4, 8, '2019-04-20', '10:00:00', 100),
(474, 4, 10, 8, '2019-04-20', '14:30:00', 200),
(475, 4, 11, 8, '2019-04-20', '16:30:00', 300),
(476, 4, 4, 8, '2019-03-07', '20:30:00', 400),
(477, 4, 10, 8, '2019-04-20', '22:00:00', 500),
(478, 2, 1, 8, '2019-04-20', '10:00:00', 100),
(479, 2, 6, 8, '2019-04-20', '14:30:00', 200),
(480, 2, 9, 8, '2019-04-20', '16:30:00', 300),
(481, 2, 1, 8, '2019-04-20', '18:30:00', 100),
(482, 2, 6, 8, '2019-04-20', '20:30:00', 500),
(483, 4, 4, 1, '2019-04-20', '16:30:00', 400),
(484, 4, 10, 1, '2019-04-20', '20:30:00', 500),
(485, 5, 7, 1, '2019-04-20', '22:30:00', 500),
(486, 5, 5, 2, '2019-04-20', '21:30:00', 400),
(487, 5, 7, 2, '2019-04-20', '23:30:00', 500),
(488, 4, 4, 2, '2019-04-20', '19:30:00', 400),
(489, 4, 10, 2, '2019-04-20', '21:30:00', 500),
(490, 2, 1, 2, '2019-04-20', '22:30:00', 400),
(491, 2, 6, 2, '2019-04-20', '12:30:00', 500),
(493, 2, 6, 5, '2019-04-20', '22:30:00', 500),
(494, 5, 5, 8, '2019-04-20', '23:45:00', 400),
(495, 5, 7, 8, '2019-04-20', '12:05:00', 500),
(496, 4, 10, 8, '2019-04-20', '23:30:00', 500),
(497, 5, 5, 9, '2019-04-16', '10:30:00', 100),
(498, 5, 7, 9, '2019-04-16', '14:30:00', 200),
(499, 5, 8, 9, '2019-04-16', '16:30:00', 300),
(500, 5, 5, 9, '2019-04-16', '18:30:00', 400),
(501, 4, 10, 9, '2019-04-16', '22:30:00', 500),
(502, 5, 7, 9, '2019-04-16', '22:30:00', 500),
(503, 4, 4, 9, '2019-04-16', '10:30:00', 100),
(504, 4, 10, 9, '2019-04-16', '14:30:00', 200),
(505, 4, 11, 9, '2019-04-16', '16:30:00', 300),
(506, 4, 4, 9, '2019-04-16', '18:30:00', 500),
(507, 2, 1, 9, '2019-04-16', '10:30:00', 100),
(508, 2, 6, 9, '2019-04-16', '14:00:00', 200),
(509, 2, 9, 9, '2019-04-16', '16:30:00', 300),
(510, 2, 1, 9, '2019-04-16', '22:30:00', 400),
(512, 2, 6, 9, '2019-04-16', '23:30:00', 500),
(513, 5, 5, 9, '2019-04-17', '10:30:00', 100),
(514, 5, 7, 9, '2019-04-17', '14:30:00', 200),
(515, 5, 8, 9, '2018-04-17', '16:30:00', 300),
(516, 5, 8, 9, '2019-04-17', '16:30:00', 300),
(517, 5, 5, 9, '2019-04-17', '18:30:00', 400),
(518, 4, 10, 9, '2019-04-17', '20:30:00', 500),
(519, 5, 7, 9, '2019-04-17', '20:30:00', 500),
(520, 4, 4, 9, '2019-04-17', '10:30:00', 100),
(521, 4, 10, 9, '2019-04-17', '14:30:00', 200),
(522, 2, 9, 9, '2019-04-17', '16:30:00', 300),
(523, 4, 11, 9, '2019-04-17', '16:30:00', 300),
(524, 4, 10, 9, '2019-04-17', '18:30:00', 500),
(525, 2, 1, 9, '2019-04-17', '10:30:00', 100),
(526, 2, 6, 9, '2019-04-17', '14:30:00', 200),
(527, 2, 6, 9, '2019-04-17', '18:30:00', 500),
(528, 4, 11, 9, '2019-04-17', '22:30:00', 550),
(529, 2, 9, 9, '2019-04-17', '20:30:00', 550),
(530, 5, 5, 9, '2019-04-18', '10:30:00', 100),
(531, 5, 7, 9, '2019-04-18', '14:30:00', 200),
(532, 5, 8, 9, '2019-04-18', '16:30:00', 300),
(533, 5, 5, 9, '2019-04-18', '18:30:00', 400),
(534, 5, 7, 9, '2019-04-18', '22:30:00', 500),
(535, 4, 4, 9, '2019-04-18', '10:30:00', 100),
(536, 4, 10, 9, '2019-04-18', '14:30:00', 200),
(537, 4, 11, 9, '2019-04-18', '16:30:00', 300),
(538, 4, 4, 9, '2019-04-18', '18:30:00', 400),
(539, 4, 10, 9, '2019-04-10', '22:30:00', 500),
(540, 4, 10, 9, '2019-04-18', '20:30:00', 500),
(541, 2, 1, 9, '2019-04-18', '10:30:00', 100),
(542, 2, 6, 9, '2019-04-18', '14:30:00', 200),
(543, 2, 9, 9, '2019-04-18', '16:30:00', 300),
(544, 2, 1, 9, '2019-04-18', '22:30:00', 400),
(545, 2, 6, 9, '2019-04-18', '23:30:00', 500),
(546, 5, 5, 9, '2019-04-19', '10:30:00', 100),
(547, 5, 7, 9, '2019-04-19', '14:30:00', 200),
(548, 4, 11, 9, '2019-04-19', '16:30:00', 300),
(549, 5, 8, 9, '2019-04-19', '16:30:00', 300),
(550, 4, 4, 9, '2019-04-19', '18:30:00', 400),
(551, 5, 5, 9, '2019-04-19', '22:30:00', 400),
(552, 5, 7, 9, '2019-04-19', '23:30:00', 500),
(553, 4, 4, 9, '2019-04-19', '10:30:00', 100),
(554, 4, 10, 9, '2019-04-19', '20:30:00', 500),
(555, 4, 10, 9, '2019-04-19', '22:30:00', 500),
(556, 2, 1, 9, '2019-04-19', '22:30:00', 100),
(557, 2, 6, 9, '2019-04-19', '14:30:00', 200),
(559, 2, 1, 9, '2019-04-19', '22:30:00', 400),
(560, 2, 6, 9, '2019-04-19', '23:30:00', 500),
(561, 2, 1, 9, '2019-04-19', '10:30:00', 100),
(562, 5, 5, 9, '2019-04-20', '10:30:00', 100),
(563, 5, 7, 9, '2019-04-20', '14:30:00', 200),
(564, 5, 8, 9, '2019-04-20', '16:30:00', 300),
(565, 5, 5, 9, '2019-04-20', '20:30:00', 400),
(566, 5, 7, 9, '2019-04-20', '22:30:00', 500),
(567, 4, 4, 9, '2019-04-20', '10:30:00', 100),
(568, 4, 10, 9, '2019-04-20', '14:30:00', 200),
(569, 4, 11, 9, '2019-04-20', '16:30:00', 300),
(570, 4, 4, 9, '2019-04-20', '20:30:00', 400),
(571, 4, 10, 9, '2019-04-20', '22:30:00', 500),
(572, 2, 1, 9, '2019-04-20', '10:30:00', 100),
(573, 2, 6, 9, '2019-04-20', '14:30:00', 200),
(574, 2, 9, 9, '2019-04-20', '16:30:00', 300),
(575, 2, 1, 9, '2019-04-20', '20:30:00', 400),
(576, 2, 6, 9, '2019-04-20', '22:30:00', 500),
(577, 5, 5, 10, '2019-04-16', '10:30:00', 100),
(580, 5, 7, 10, '2019-04-16', '14:30:00', 200),
(581, 5, 8, 10, '2019-04-16', '16:30:00', 300),
(582, 5, 5, 10, '2019-04-16', '18:30:00', 400),
(583, 5, 7, 10, '2019-04-16', '22:30:00', 500),
(584, 4, 4, 10, '2019-04-16', '10:30:00', 100),
(585, 4, 10, 10, '2019-04-16', '14:30:00', 200),
(586, 4, 11, 10, '2019-04-16', '16:30:00', 300),
(587, 4, 4, 10, '2019-04-16', '06:30:00', 400),
(588, 4, 10, 10, '2019-04-16', '22:30:00', 500),
(589, 2, 1, 10, '2019-04-16', '10:30:00', 100),
(590, 2, 6, 10, '2019-04-16', '14:30:00', 200),
(591, 2, 9, 10, '2019-04-16', '16:30:00', 300),
(592, 2, 1, 10, '2019-04-16', '18:30:00', 400),
(593, 2, 6, 10, '2019-04-16', '20:30:00', 500),
(595, 5, 7, 10, '2019-04-17', '14:30:00', 200),
(597, 5, 5, 10, '2019-04-17', '10:30:00', 100),
(598, 5, 8, 10, '2019-04-17', '16:30:00', 300),
(600, 5, 5, 10, '2019-04-17', '18:30:00', 400),
(601, 5, 7, 10, '2019-04-17', '22:30:00', 500),
(602, 4, 4, 10, '2019-04-17', '10:30:00', 100),
(603, 4, 10, 10, '2019-04-17', '14:30:00', 200),
(604, 4, 11, 10, '2019-04-17', '16:30:00', 300),
(605, 4, 4, 10, '2019-04-17', '18:30:00', 400),
(606, 4, 10, 10, '2019-04-17', '20:30:00', 500),
(607, 2, 1, 10, '2019-04-17', '10:30:00', 100),
(608, 2, 6, 10, '2019-04-17', '14:30:00', 200),
(609, 2, 9, 10, '2019-04-17', '16:30:00', 300),
(610, 2, 1, 10, '2019-04-17', '18:30:00', 400),
(611, 2, 6, 10, '2019-04-17', '22:30:00', 500),
(612, 5, 5, 10, '2019-04-18', '10:30:00', 100),
(613, 5, 7, 10, '2019-04-18', '13:00:00', 200),
(614, 5, 8, 10, '2019-04-18', '16:30:00', 300),
(615, 5, 5, 10, '2019-04-18', '18:30:00', 400),
(616, 5, 7, 10, '2018-04-18', '20:30:00', 500),
(617, 5, 7, 10, '2019-04-18', '22:30:00', 500),
(619, 4, 4, 10, '2019-04-18', '22:30:00', 100),
(620, 4, 10, 10, '2019-04-18', '14:30:00', 200),
(621, 4, 11, 10, '2019-04-18', '16:30:00', 300),
(622, 4, 4, 10, '2019-04-18', '10:30:00', 80),
(623, 4, 10, 10, '2019-04-18', '23:30:00', 500),
(624, 2, 1, 10, '2019-04-18', '10:30:00', 100),
(625, 2, 6, 10, '2019-04-18', '14:30:00', 200),
(626, 2, 9, 10, '2019-04-18', '16:30:00', 300),
(627, 2, 1, 10, '2019-04-18', '18:30:00', 400),
(628, 2, 6, 10, '2019-04-18', '22:30:00', 500),
(629, 5, 5, 10, '2019-04-19', '10:30:00', 100),
(630, 5, 7, 10, '2019-04-19', '14:30:00', 200),
(631, 5, 8, 10, '2019-04-19', '16:30:00', 300),
(632, 5, 5, 10, '2019-04-19', '18:30:00', 400),
(633, 5, 7, 10, '2019-04-19', '22:30:00', 500),
(634, 4, 4, 10, '2019-04-19', '10:30:00', 100),
(635, 4, 10, 10, '2019-04-19', '14:30:00', 200),
(636, 4, 11, 10, '2019-04-19', '16:30:00', 300),
(637, 4, 10, 10, '2019-04-19', '18:30:00', 500),
(638, 4, 11, 10, '2019-04-19', '22:30:00', 510),
(639, 2, 1, 10, '2019-04-19', '10:30:00', 100),
(640, 2, 6, 10, '2019-04-19', '14:30:00', 200),
(641, 2, 9, 10, '2019-04-19', '16:30:00', 300),
(642, 2, 1, 10, '2019-04-19', '18:30:00', 400),
(643, 2, 6, 10, '2019-04-19', '22:30:00', 500),
(644, 5, 5, 10, '2019-04-20', '11:30:00', 100),
(645, 5, 7, 10, '2019-04-20', '14:30:00', 200),
(646, 5, 8, 10, '2019-04-20', '15:30:00', 300),
(647, 5, 5, 10, '2019-04-20', '19:30:00', 400),
(648, 5, 7, 10, '2019-04-20', '22:30:00', 500),
(649, 4, 4, 10, '2019-04-20', '22:30:00', 100),
(650, 4, 10, 10, '2019-04-20', '14:30:00', 200),
(651, 4, 11, 10, '2019-04-20', '18:30:00', 300),
(652, 4, 4, 10, '2019-04-20', '23:30:00', 400),
(653, 4, 11, 10, '2019-04-20', '08:30:00', 80),
(654, 5, 5, 10, '2019-04-20', '10:30:00', 100),
(655, 4, 4, 10, '2019-04-20', '22:30:00', 100),
(656, 2, 1, 10, '2019-04-20', '10:30:00', 100),
(657, 2, 6, 10, '2019-04-20', '14:30:00', 200),
(658, 2, 9, 10, '2019-04-20', '16:30:00', 300),
(659, 2, 1, 10, '2019-04-20', '18:30:00', 400),
(660, 2, 6, 10, '2019-04-20', '22:30:00', 500),
(661, 2, 9, 10, '2019-04-20', '23:45:00', 550),
(662, 5, 5, 12, '2019-04-16', '10:30:00', 100),
(663, 5, 7, 12, '2019-04-16', '14:30:00', 200),
(664, 5, 8, 12, '2019-04-16', '16:30:00', 300),
(668, 5, 5, 12, '2019-04-16', '18:30:00', 400),
(669, 5, 7, 12, '2019-04-16', '20:30:00', 500),
(670, 4, 4, 12, '2019-04-16', '10:30:00', 100),
(672, 4, 10, 12, '2019-04-16', '14:30:00', 200),
(673, 4, 11, 12, '2019-04-16', '16:30:00', 300),
(674, 4, 4, 12, '2019-04-16', '18:30:00', 400),
(675, 4, 10, 12, '2019-04-16', '22:30:00', 500),
(677, 2, 1, 12, '2019-04-16', '10:30:00', 100),
(678, 2, 6, 12, '2019-04-16', '14:30:00', 200),
(679, 2, 9, 12, '2019-04-16', '16:30:00', 300),
(680, 2, 1, 12, '2019-04-16', '18:30:00', 400),
(681, 2, 6, 12, '2019-04-16', '20:30:00', 500),
(682, 4, 4, 12, '2019-04-17', '10:30:00', 100),
(683, 4, 10, 12, '2019-04-17', '14:30:00', 200),
(685, 4, 11, 12, '2019-04-17', '16:30:00', 300),
(686, 4, 4, 12, '2019-04-17', '18:30:00', 400),
(687, 4, 10, 12, '2019-04-17', '20:30:00', 500),
(688, 5, 5, 12, '2019-04-17', '10:30:00', 100),
(689, 5, 7, 12, '2019-04-17', '14:30:00', 200),
(690, 5, 8, 12, '2019-04-17', '16:30:00', 300),
(691, 5, 5, 12, '2019-04-17', '18:30:00', 400),
(692, 5, 7, 12, '2019-04-17', '22:30:00', 500),
(693, 2, 1, 12, '2019-04-17', '10:30:00', 100),
(694, 2, 6, 12, '2019-04-17', '14:30:00', 200),
(695, 2, 9, 12, '2019-04-17', '16:30:00', 300),
(696, 2, 1, 12, '2019-04-17', '18:30:00', 400),
(697, 2, 6, 12, '2019-04-17', '22:30:00', 500),
(698, 5, 5, 12, '2019-04-18', '10:30:00', 100),
(699, 5, 7, 12, '2019-04-18', '14:30:00', 200),
(700, 5, 8, 12, '2019-04-18', '16:30:00', 300),
(701, 5, 5, 12, '2019-04-18', '18:30:00', 400),
(702, 5, 7, 12, '2019-04-18', '22:30:00', 500),
(703, 4, 4, 12, '2019-04-18', '10:30:00', 100),
(704, 4, 10, 12, '2019-04-18', '14:30:00', 200),
(705, 4, 11, 12, '2019-04-18', '16:30:00', 300),
(706, 4, 4, 12, '2019-04-18', '20:30:00', 400),
(708, 4, 10, 12, '2019-04-18', '22:30:00', 500),
(709, 2, 1, 12, '2019-04-18', '19:30:00', 100),
(710, 2, 1, 12, '2019-04-18', '10:30:00', 80),
(711, 2, 9, 12, '2019-04-18', '14:30:00', 300),
(712, 2, 1, 12, '2019-04-18', '16:30:00', 350),
(713, 2, 6, 12, '2019-04-18', '22:30:00', 500),
(714, 5, 5, 12, '2019-04-19', '10:30:00', 100),
(715, 5, 7, 12, '2019-04-19', '14:30:00', 200),
(716, 5, 8, 12, '2019-04-19', '16:30:00', 300),
(717, 5, 5, 12, '2019-04-19', '18:30:00', 400),
(718, 5, 7, 12, '2019-04-19', '22:30:00', 500),
(719, 4, 4, 12, '2019-04-19', '10:30:00', 100),
(720, 4, 10, 12, '2019-04-19', '14:30:00', 200),
(721, 4, 11, 12, '2019-04-19', '16:30:00', 300),
(722, 4, 4, 12, '2019-04-19', '22:30:00', 400),
(723, 4, 10, 12, '2019-04-19', '23:45:00', 200),
(725, 2, 1, 12, '2019-04-19', '10:30:00', 100),
(726, 2, 6, 12, '2019-04-19', '14:30:00', 200),
(727, 2, 9, 12, '2019-04-19', '16:30:00', 300),
(728, 2, 1, 12, '2019-04-19', '19:30:00', 400),
(729, 2, 6, 12, '2019-04-19', '22:30:00', 500),
(730, 5, 5, 12, '2019-04-20', '07:30:00', 100),
(731, 5, 7, 12, '2019-04-20', '11:45:00', 200),
(732, 5, 8, 12, '2019-04-20', '17:03:00', 300),
(733, 5, 5, 12, '2019-04-20', '19:30:00', 400),
(734, 5, 7, 12, '2019-04-20', '23:30:00', 500),
(735, 4, 4, 12, '2019-04-20', '22:30:00', 100),
(736, 4, 10, 12, '2019-04-20', '14:30:00', 200),
(737, 4, 11, 12, '2019-04-20', '16:30:00', 300),
(738, 4, 4, 12, '2019-04-20', '18:30:00', 400),
(739, 4, 10, 12, '2019-04-20', '23:45:00', 500),
(740, 2, 1, 12, '2019-04-20', '10:30:00', 100),
(741, 2, 6, 12, '2019-04-20', '14:30:00', 200),
(742, 2, 9, 12, '2019-04-20', '16:30:00', 300),
(743, 2, 1, 12, '2019-04-20', '19:30:00', 400),
(744, 2, 6, 12, '2019-04-20', '22:30:00', 500),
(745, 5, 5, 14, '2019-04-16', '10:30:00', 100),
(746, 5, 7, 14, '2019-04-16', '14:30:00', 200),
(747, 5, 8, 14, '2019-04-16', '16:30:00', 300),
(748, 5, 5, 14, '2019-04-16', '18:30:00', 400),
(749, 5, 7, 14, '2019-04-16', '22:30:00', 500),
(750, 4, 4, 14, '2019-04-16', '10:30:00', 100),
(751, 4, 10, 14, '2019-04-16', '14:30:00', 200),
(752, 4, 11, 14, '2019-04-16', '16:30:00', 300),
(753, 4, 4, 14, '2019-04-16', '18:30:00', 400),
(754, 4, 10, 14, '2019-04-16', '20:30:00', 500),
(755, 2, 1, 14, '2019-04-16', '10:30:00', 100),
(757, 2, 6, 14, '2019-04-16', '14:30:00', 200),
(758, 2, 9, 14, '2019-04-16', '16:30:00', 300),
(759, 2, 1, 14, '2019-04-16', '18:30:00', 400),
(760, 2, 6, 14, '2019-04-16', '22:30:00', 500),
(761, 5, 5, 14, '2019-04-17', '10:30:00', 100),
(762, 5, 7, 14, '2019-04-17', '14:30:00', 200),
(763, 5, 8, 14, '2019-04-17', '16:30:00', 300),
(764, 5, 5, 14, '2019-04-17', '18:30:00', 100),
(765, 5, 7, 14, '2019-04-17', '20:30:00', 500),
(766, 4, 4, 14, '2019-04-17', '10:30:00', 100),
(767, 4, 10, 14, '2019-04-17', '14:30:00', 200),
(768, 4, 11, 14, '2019-04-17', '16:30:00', 300),
(769, 4, 4, 14, '2019-04-17', '18:30:00', 400),
(770, 4, 10, 14, '2019-04-17', '22:30:00', 500),
(771, 2, 1, 14, '2019-04-17', '10:30:00', 100),
(772, 2, 6, 14, '2019-04-17', '14:30:00', 200),
(773, 2, 9, 14, '2019-04-17', '16:30:00', 300),
(774, 2, 1, 14, '2019-04-17', '18:30:00', 400),
(775, 2, 6, 14, '2019-04-17', '20:30:00', 500),
(776, 5, 5, 14, '2019-04-18', '10:30:00', 100),
(777, 5, 7, 14, '2019-04-18', '14:30:00', 200),
(778, 5, 8, 14, '2019-04-18', '16:30:00', 300),
(780, 5, 5, 14, '2019-04-18', '18:30:00', 400),
(783, 5, 7, 14, '2019-04-18', '20:30:00', 500),
(784, 4, 4, 14, '2019-04-18', '07:30:00', 100),
(785, 4, 10, 14, '2019-04-18', '12:30:00', 200),
(786, 4, 11, 14, '2019-04-18', '15:30:00', 300),
(787, 4, 4, 14, '2019-04-18', '17:30:00', 400),
(788, 4, 10, 14, '2019-04-18', '22:30:00', 500),
(789, 2, 1, 14, '2019-04-18', '09:30:00', 100),
(790, 2, 6, 14, '2019-04-18', '14:30:00', 200),
(791, 2, 9, 14, '2019-04-18', '16:30:00', 300),
(792, 2, 1, 14, '2019-04-18', '18:30:00', 400),
(793, 2, 6, 14, '2019-04-18', '22:30:00', 500),
(794, 5, 5, 14, '2019-04-19', '10:30:00', 100),
(795, 5, 7, 14, '2019-04-19', '14:30:00', 200),
(796, 5, 8, 14, '2019-04-19', '16:30:00', 300),
(797, 5, 7, 14, '2019-04-19', '20:30:00', 500),
(800, 5, 5, 14, '2019-04-19', '18:30:00', 400),
(801, 4, 4, 14, '2019-04-19', '10:30:00', 100),
(803, 4, 11, 14, '2019-04-19', '16:30:00', 300),
(804, 4, 4, 14, '2019-04-19', '18:30:00', 400),
(805, 4, 10, 14, '2019-04-19', '22:30:00', 500),
(806, 4, 10, 14, '2019-04-19', '14:30:00', 200),
(807, 2, 1, 14, '2019-04-19', '10:30:00', 100),
(808, 2, 6, 14, '2019-04-19', '14:30:00', 200),
(809, 2, 9, 14, '2019-04-19', '16:30:00', 300),
(810, 2, 1, 14, '2019-04-19', '18:30:00', 400),
(811, 2, 6, 14, '2019-04-19', '22:30:00', 500),
(812, 5, 5, 14, '2019-04-20', '10:30:00', 100),
(813, 5, 7, 14, '2019-04-20', '14:30:00', 200),
(814, 5, 8, 14, '2019-04-20', '16:30:00', 300),
(815, 2, 1, 14, '2019-04-20', '18:30:00', 400),
(816, 5, 5, 14, '2019-04-20', '18:30:00', 400),
(817, 5, 7, 14, '2019-04-20', '20:30:00', 500),
(818, 2, 1, 14, '2019-04-20', '10:30:00', 100),
(819, 2, 6, 14, '2019-04-20', '15:00:00', 200),
(820, 2, 9, 14, '2019-04-20', '17:00:00', 300),
(821, 2, 6, 14, '2019-04-20', '22:30:00', 500),
(822, 4, 4, 14, '2019-04-20', '10:30:00', 100),
(824, 4, 10, 14, '2019-04-20', '14:30:00', 200),
(825, 4, 11, 14, '2019-04-20', '16:30:00', 300),
(826, 4, 4, 14, '2019-04-20', '18:30:00', 400),
(827, 4, 10, 14, '2019-04-20', '22:30:00', 500),
(828, 5, 5, 15, '2019-04-16', '10:30:00', 100),
(829, 5, 7, 15, '2019-04-16', '14:30:00', 200),
(830, 5, 8, 15, '2019-04-16', '16:30:00', 300),
(831, 5, 5, 15, '2019-04-16', '18:30:00', 400),
(832, 5, 7, 15, '2019-04-16', '20:30:00', 500),
(833, 4, 4, 15, '2019-04-16', '10:30:00', 100),
(834, 4, 10, 15, '2019-04-16', '14:30:00', 200),
(835, 4, 11, 15, '2019-04-16', '16:30:00', 300),
(836, 4, 4, 15, '2019-04-16', '18:30:00', 400),
(837, 4, 10, 15, '2019-04-16', '20:30:00', 500),
(838, 2, 1, 15, '2019-04-16', '10:30:00', 100),
(839, 2, 6, 15, '2019-04-16', '14:30:00', 200),
(840, 2, 9, 15, '2019-04-16', '16:30:00', 300),
(841, 2, 1, 15, '2019-04-16', '18:30:00', 400),
(842, 2, 6, 15, '2019-04-16', '22:59:00', 500),
(843, 5, 5, 15, '2019-04-17', '10:30:00', 100),
(844, 5, 7, 15, '2019-04-17', '14:30:00', 200),
(846, 5, 8, 15, '2019-04-17', '16:30:00', 300),
(847, 5, 5, 15, '2019-04-17', '18:30:00', 400),
(848, 5, 7, 15, '2019-04-17', '22:30:00', 500),
(849, 4, 4, 15, '2019-04-17', '10:30:00', 100),
(850, 4, 10, 15, '2019-04-17', '14:30:00', 200),
(851, 4, 11, 15, '2019-04-17', '16:30:00', 300),
(852, 4, 4, 15, '2019-04-17', '20:30:00', 400),
(853, 4, 10, 15, '2019-04-17', '22:30:00', 500),
(854, 2, 1, 15, '2019-04-17', '10:20:00', 100),
(855, 2, 6, 15, '2019-04-17', '14:30:00', 200),
(856, 2, 9, 15, '2019-04-17', '16:30:00', 300),
(857, 2, 1, 15, '2019-04-17', '18:30:00', 400),
(858, 2, 6, 15, '2019-04-17', '22:30:00', 500),
(859, 5, 5, 15, '2019-04-18', '10:30:00', 100),
(861, 5, 7, 15, '2019-04-18', '14:30:00', 200),
(862, 5, 8, 15, '2019-04-18', '16:30:00', 300),
(863, 5, 5, 15, '2019-04-18', '18:30:00', 400),
(864, 5, 7, 15, '2019-04-18', '20:30:00', 500),
(865, 4, 4, 15, '2019-04-18', '10:30:00', 100),
(866, 4, 10, 15, '2019-04-18', '14:30:00', 200),
(867, 4, 11, 15, '2019-04-18', '16:30:00', 300),
(868, 4, 4, 15, '2019-04-18', '18:30:00', 400),
(869, 4, 10, 15, '2019-04-18', '22:30:00', 500),
(870, 2, 1, 15, '2019-04-18', '10:30:00', 100),
(871, 2, 6, 15, '2019-04-18', '14:30:00', 200),
(872, 2, 9, 15, '2019-04-18', '16:30:00', 300),
(873, 2, 1, 15, '2019-04-18', '22:30:00', 400),
(874, 2, 6, 15, '2019-04-18', '23:45:00', 500),
(875, 5, 5, 15, '2019-04-19', '10:30:00', 100),
(876, 5, 7, 15, '2019-04-19', '14:30:00', 200),
(877, 5, 8, 15, '2019-04-19', '16:30:00', 300),
(878, 5, 5, 15, '2019-04-19', '18:30:00', 400),
(879, 5, 7, 15, '2019-04-19', '20:30:00', 500),
(880, 4, 4, 15, '2019-04-19', '10:30:00', 100),
(881, 4, 10, 15, '2019-04-19', '14:30:00', 200),
(882, 4, 11, 15, '2019-04-19', '16:30:00', 300),
(883, 4, 4, 15, '2019-04-19', '18:30:00', 400),
(884, 4, 10, 15, '2019-04-19', '08:30:00', 500),
(885, 2, 1, 15, '2019-04-19', '10:30:00', 100),
(886, 2, 6, 15, '2019-04-19', '14:30:00', 200),
(887, 2, 9, 15, '2019-04-19', '16:30:00', 300),
(888, 2, 1, 15, '2019-04-19', '18:30:00', 400),
(890, 2, 6, 15, '2019-04-19', '22:30:00', 500),
(891, 5, 5, 15, '2019-04-20', '10:30:00', 100),
(892, 5, 7, 15, '2019-04-19', '14:30:00', 200),
(893, 5, 7, 15, '2019-04-20', '14:30:00', 200),
(894, 5, 8, 15, '2019-04-20', '16:30:00', 300),
(895, 5, 5, 15, '2019-04-20', '18:30:00', 400),
(896, 5, 7, 15, '2019-04-20', '22:30:00', 500),
(897, 4, 4, 15, '2019-04-20', '10:30:00', 100),
(898, 4, 10, 15, '2019-04-20', '14:30:00', 200),
(899, 4, 11, 15, '2019-04-20', '16:30:00', 300),
(900, 4, 4, 15, '2019-04-20', '18:30:00', 400),
(901, 4, 10, 15, '2019-04-20', '22:30:00', 500),
(902, 2, 1, 15, '2019-04-20', '10:30:00', 100),
(903, 2, 6, 15, '2019-04-20', '14:30:00', 200),
(904, 2, 9, 15, '2019-04-20', '16:30:00', 300),
(905, 2, 1, 15, '2019-04-20', '18:30:00', 400),
(906, 2, 6, 15, '2019-04-20', '22:30:00', 500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movie_type`
--

CREATE TABLE `tbl_movie_type` (
  `type_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `parent_id` int(5) NOT NULL,
  `label` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movie_type`
--

INSERT INTO `tbl_movie_type` (`type_id`, `name`, `parent_id`, `label`) VALUES
(1, 'Bollywood', 0, 'main'),
(2, 'Hollywood', 0, 'main'),
(3, 'Tollywood', 0, 'main'),
(4, 'Action', 1, 'sub'),
(5, 'Comedy', 1, 'sub'),
(6, 'Horror', 1, 'sub'),
(7, 'Action', 2, 'sub'),
(8, 'Comedy', 2, 'sub'),
(9, 'Horror', 2, 'sub'),
(10, 'Action', 3, 'sub'),
(11, 'Comedy', 3, 'sub'),
(12, 'Horror', 3, 'sub');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promocode`
--

CREATE TABLE `tbl_promocode` (
  `promocode_id` int(100) NOT NULL,
  `code` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `minimum` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_promocode`
--

INSERT INTO `tbl_promocode` (`promocode_id`, `code`, `price`, `minimum`, `status`) VALUES
(1, 'BILL30', '30', '250', '1'),
(2, 'New75', '75', '500', '1'),
(3, 'BILL50', '50', '300', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recharge_transaction`
--

CREATE TABLE `tbl_recharge_transaction` (
  `transaction_id` int(100) NOT NULL,
  `register_id` int(100) NOT NULL,
  `pay_id` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `number` varchar(12) NOT NULL,
  `operator` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_recharge_transaction`
--

INSERT INTO `tbl_recharge_transaction` (`transaction_id`, `register_id`, `pay_id`, `date`, `time`, `number`, `operator`, `amount`, `type`, `status`) VALUES
(1, 1, '13315395', '2019-04-11', '04:30:08', '9913406896', '2', '35', 'mobile', 'success'),
(4, 1, '13454105', '2019-04-15', '10:33:59', '9725686981', '2', '35', 'mobile', 'success'),
(5, 1, '13462994', '2019-04-16', '11:05:33', '7878183278', '2', '35', 'mobile', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `register_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `path` varchar(100) NOT NULL,
  `location_id` int(8) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `last_login` datetime NOT NULL,
  `status` int(10) NOT NULL,
  `register_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`register_id`, `name`, `email`, `contact_no`, `gender`, `path`, `location_id`, `password`, `dob`, `last_login`, `status`, `register_date`) VALUES
(1, 'Mohit', 'mohitn54321@gmail.com', '', '', 'public/assets/userprofile/photo_0.jpg', 0, 'mohit123456', '1999-07-17', '2019-04-16 10:31:05', 1, '2019-03-19 11:51:29'),
(2, '', 'ravisorathiya123@gmail.com', '7573060271', '', '', 0, '123456789', '0000-00-00', '0000-00-00 00:00:00', 1, '2005-04-19 12:53:34'),
(3, '', 'ravisorathiya123@gmail.com', '7573060271', '', '', 0, '123456789', '0000-00-00', '0000-00-00 00:00:00', 1, '2005-04-19 12:55:42'),
(4, 'Sagar Variya', 'variyasagar2@gmail.com', '8264941363', 'male', 'public/assets/userprofile/photo_3.jpg', 0, 'mohit12345', '1999-08-27', '0000-00-00 00:00:00', 1, '2019-04-05 01:29:38'),
(5, '', 'harsh@gmail.com', '', '', 'public/assets/userprofile/photo_4.jpg', 0, 'harshad123456', '0000-00-00', '2019-04-15 01:45:51', 1, '2019-04-14 06:26:23'),
(6, '', 'test@gmail.com', '9876543215', '', '', 0, '123456789', '0000-00-00', '0000-00-00 00:00:00', 1, '2019-04-14 06:55:11'),
(7, 'Rohit', 'rohit@gmail.com', '', '', '', 0, '58286654', '0000-00-00', '2019-04-15 04:42:09', 1, '2019-04-15 04:41:14'),
(8, 'Raju', 'harshadnariya99@gmail.com', '', '', '', 0, '1234567890', '0000-00-00', '2019-04-16 10:29:55', 1, '2019-04-15 04:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_screen`
--

CREATE TABLE `tbl_screen` (
  `screen_id` int(5) NOT NULL,
  `theater_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `no_of_seat` int(5) NOT NULL,
  `pattern` varchar(2000) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `screen_diamention` varchar(100) NOT NULL,
  `sound` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_screen`
--

INSERT INTO `tbl_screen` (`screen_id`, `theater_id`, `name`, `no_of_seat`, `pattern`, `picture`, `screen_diamention`, `sound`, `status`) VALUES
(1, 2, 'Diamond', 256, '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2', 'public/Admin_assets/moviepicture/photo_1.jpg', '550 × 250', 'Dolby', 1),
(2, 1, '1', 370, '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1', 'public/Admin_assets/moviepicture/photo_2.jpg', '500 × 250', 'Dolby', 1),
(3, 3, 'I', 370, '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1', 'public/Admin_assets/moviepicture/photo_3.jpg', '550 × 300', 'Dolby', 1),
(4, 4, 'one', 256, '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2', 'public/Admin_assets/moviepicture/photo_4.jpg', '550 × 300', 'Dolby', 1),
(5, 5, 'A', 373, '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,1,1,1', 'public/Admin_assets/moviepicture/photo_5.jpg', '550 × 350', 'Dolby', 1),
(6, 2, 'Ruby', 267, '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,2,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,2,0,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1', 'public/Admin_assets/moviepicture/photo_6.jpg', '550 × 267 ', 'Dolby', 1),
(7, 5, 'B', 300, '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1', 'public/Admin_assets/moviepicture/photo_7.jpg', '450 × 250', 'Dolby', 1),
(8, 5, 'C', 350, '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,0,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,0,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,0,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,0,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,0,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,0,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,0,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,0,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,0,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,0,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,0,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,0,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,0,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1', 'public/Admin_assets/moviepicture/photo_8.jpg', '600 × 300', 'Dolby', 1),
(9, 2, 'Red Diamond', 235, '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,1,0,1,1,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,1,0,1,1,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,1,0,1,1,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,1,0,1,1,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,1,0,1,1,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,1,1,1,0,1,1,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,0,1,1,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,0,1,1,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,0,1,1,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,0,1,1,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,0,1,1,1,1,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2', 'public/Admin_assets/moviepicture/photo_9.jpeg', '550 × 390', 'Dolby', 1),
(10, 4, 'two', 370, '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,2,2,2,2,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1', 'public/Admin_assets/moviepicture/photo_10.jpeg', '450 × 250', 'Dolby', 1),
(11, 4, 'three', 256, '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2', 'public/Admin_assets/moviepicture/photo_11.jpg', '550 × 250', 'Dolby', 1),
(12, 1, '2', 300, '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,2,2,2,2,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,2,2,2,2,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,2,2,2,2,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,2,2,2,2,1,1,1,1,2,2,2,2,1,1,1,1,1,1,0,1,1,1,1,1,1,2,2,2,2,1,1,1,1,2,2,2,2,1,1,1,1,2,2,2,2,1,1,1,1,1,1', 'public/Admin_assets/moviepicture/photo_12.jpg', '500  ×300', 'Dobly', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theater`
--

CREATE TABLE `tbl_theater` (
  `theater_id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `location_id` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `map` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_theater`
--

INSERT INTO `tbl_theater` (`theater_id`, `name`, `location_id`, `email`, `address`, `contact`, `logo`, `map`) VALUES
(1, 'Rajhans Entertainment', 3, 'rajhansentertainment123@gmail.com', 'Pal Road, Hazira Rd, opp Rajhans Multiplex, Adajan Gam, Adajan, Surat, Gujarat 395009', '8574963210', 'public/Admin_assets/theater/photo_20.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29761.677367873584!2d72.76875783955076!3d21.1838282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04dc8abda538d%3A0xfe0a951ff81d7647!2sRajhans+Entertainment!5e0!3m2!1sen!2sin!4v1554271487925!5m2!1sen!2sin'),
(2, 'VR Surat', 40, 'vrsurat@gmail.com', '3rd Floor VR Mall, Dumas Rd, Magdalla, Gujarat 395007', '2616795100', 'public/Admin_assets/theater/photo_1.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.1729364132766!2d72.75490201493457!3d21.145514985935254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0527ffdb1ef5f%3A0xa61b53697533a4be!2sINOX!5e0!3m2!1sen!2sin!4v1554273108762!5m2!1sen!2sin'),
(3, 'Valentine Multiplex', 3, 'valentinemultiplex@gmail.com', 'Surat - Dumas Rd, Opposite Central Mall, New Magdalla, Surat, Gujarat 395007', '2612727981', 'public/Admin_assets/theater/photo_2.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.926697009284!2d72.76216761493474!3d21.15531528593004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d848a512cf7%3A0x662ea2b43185a5b4!2sValentine+Multiplex!5e0!3m2!1sen!2sin!4v1554443583997!5m2!1sen!2sin'),
(4, 'PVR', 3, 'pvr@gmail.com', 'Dumas Rd, Piplod, Surat, Gujarat 395007', '9099407086', 'public/Admin_assets/theater/photo_3.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.9363322491026!2d72.76473261493484!3d21.154931885930115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04dddab8b7bcd%3A0x421a37c7c73c370a!2sPVR!5e0!3m2!1sen!2sin!4v1554443781511!5m2!1sen!2sin'),
(5, 'City Plus', 3, 'cityplus@gmail.com', 'Surat - Dumas Rd, Magdalla, Gujarat 395007', '2613042555', 'public/Admin_assets/theater/photo_4.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.414396645508!2d72.7497502149344!3d21.13590068594045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e513aa9c71d%3A0x8156be8df9a058c6!2sCity+Plus!5e0!3m2!1sen!2sin!4v1554444033981!5m2!1sen!2sin'),
(6, 'Maratha Mandir', 14, 'mahavirmandir45@gmail.com', '22, M M Marg, RBI Staff Colony, Mumbai Central, Mumbai, Maharashtra 400008', '2223070119', 'public/Admin_assets/theater/photo_5.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241502.65607072366!2d72.83789902523324!3d18.95444159830112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce694d62aba7%3A0x831faca7af68d803!2sMaratha+Mandir!5e0!3m2!1sen!2sin!4v1554429747406!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(7, 'Cinepolis', 3, 'citipolis@gmail.com', 'Imperial Mall, Hazira Rd, Guru Ram Pavan Bhumi, Adajan Gam, Adajan, Surat, Gujarat 395009', '7043215167', 'public/Admin_assets/theater/photo_6.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29761.150149929043!2d72.77563053955079!3d21.186447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04dd03b0b1973%3A0x8989b0e1884ad358!2sCinepolis!5e0!3m2!1sen!2sin!4v1554430204368!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(8, 'DR World', 3, 'drworld123@gmail.com', 'Aai Mata Rd, Amidhara Society, Bhagyoday Industrial Estate, Parvat Patiya, Surat, Gujarat 395010', '8080211111', 'public/Admin_assets/theater/photo_7.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.911139111765!2d72.85749931493547!3d21.195688685908234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04faedd9733e7%3A0x5c13b0c9633b8d62!2sInox+DR+World+Multiplex+Cinema!5e0!3m2!1sen!2sin!4v1554450325248!5m2!1sen!2sin'),
(9, 'New Super Cinema', 3, 'newsupercinema42@gmail.com', 'Station Road, Near Electric Compound, Station Road, Zampa Bazaar, Begampura, Surat, Gujarat 395003', '2612427147', 'public/Admin_assets/theater/photo_8.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29758.87491900056!2d72.81495673955077!3d21.197744999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e5f22f17205%3A0x2fb78ec4b27e7c2f!2sNew+Super+Cinema!5e0!3m2!1sen!2sin!4v1554430434712!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(10, 'Nilkanth Multiplex Cinema', 3, 'nilkanthcinema74@gmail.com', ' No. 69, Ashwini Kumar Rd, Vishnu Nagar, Hirabaugh, Surat, Gujarat 395006', '7888769339', 'public/Admin_assets/theater/photo_9.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.291784596832!2d72.84782011493598!3d21.220275085894905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04ee194a71751%3A0x42d7653e899b0a53!2sNilkanth+Multiplex+Cinema!5e0!3m2!1sen!2sin!4v1554431010464!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(11, 'Bajrang Cinema', 3, 'bajrangcinema456@gmail.com', ' 72-78, Ved Rd, Fatakdawadi, Pandol, Industrial Area, Katargam, Surat, Gujarat 395004', '9537166334', 'public/Admin_assets/theater/photo_10.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.452878526911!2d72.8196928149358!3d21.21388278589836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e917d2a1053%3A0xa5ab11865dc21065!2sBajrang+Cinema!5e0!3m2!1sen!2sin!4v1554431106509!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(12, 'Harmony Cinema', 3, 'harmonycinema56@gmail.com', 'F2, Trade Center, S2, Bhatar Char Rasta, Bhatar, Althan, Surat, Gujarat 395017', '7574848757', 'public/Admin_assets/theater/photo_11.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.75777178705!2d72.8098573149349!3d21.162035985926344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e5197ec0001%3A0xed369a04213d6878!2sHarmony+Cinema!5e0!3m2!1sen!2sin!4v1554431416351!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(13, 'Black Jack Cinema', 3, 'blackjackcinema8910@gmail.com', 'Ghod Dod Road Opp. Rangila, Bhatar Char Rasta, Surat, Gujarat 395001', '9712955666', 'public/Admin_assets/theater/photo_12.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.419933781364!2d72.80369241493511!3d21.175470785919075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e753f84ca5f%3A0xea1b24fb6729de34!2sBlack+Jack+Cinema!5e0!3m2!1sen!2sin!4v1554431606148!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(14, 'Wonder Prime Cinema', 3, 'wonderprime456@gmail.com', ' Rangeela Park Dindoli Kharwasa, Main Road, Parvat Gam, Surat, Gujarat 394210', '6352325616', 'public/Admin_assets/theater/photo_13.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14884.464043592974!2d72.875569!3d21.147781!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb0ac07f50409c14!2sWonder+Prime+Cinema!5e0!3m2!1sen!2sin!4v1554431771377!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(15, 'Time Cinema', 3, 'timecinema78@gmail.com', 'New RTO-PAL Lake Road Near Galaxy Circle Fortune The Shopping Island, Surat, Gujarat 394510', '2614890022', 'public/Admin_assets/theater/photo_14.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.019835326373!2d72.77681231493534!3d21.191370985910524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04db5a054a54f%3A0x7221778317419db7!2sTime+Cinema!5e0!3m2!1sen!2sin!4v1554432177359!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(16, 'Cinemarc  Akota', 5, 'cinemarcakota456@gmail.com', '3rd Floor Galleria Mall Akota Road Beside Sir Sayajirao Nagar Gruh, Ajit Nagar Society, Akota, Vadodara, Gujarat 390020', '9537771000', 'public/Admin_assets/theater/photo_15.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.4007245777907!2d73.16705101495462!3d22.30067968532347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8a6342f819d%3A0x1a79b98f5f5bc72a!2sCINEMARC+AKOTA!5e0!3m2!1sen!2sin!4v1554432388891!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(17, 'Cinemarc Vihar', 5, 'cinemarcvihar48@gmail.com', '9/10, Pratap Nagar Rd, Pratapnagar, Bhatia Chawl, Moghul Wada, Vadodara, Gujarat 390004', '2652422626', 'public/Admin_assets/theater/photo_17.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6999005428615!2d73.20748021495457!3d22.28935498532912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc5926eef964d%3A0x3986c29da371964a!2sCINEMARC+VIHAR!5e0!3m2!1sen!2sin!4v1554432580281!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(18, 'Miraj Cinemas', 5, 'mirajcinemas67@gmail.com', 'A-44, Sun Pharma Rd, Swaminarayan Nagar, Soudagar Park, Pratham Upvan, Vadodara, Gujarat 390012', '8469966501', 'public/Admin_assets/theater/photo_17.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d118141.63024640015!2d73.07914485820312!3d22.280794900000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc63a52bab1c5%3A0x12ca620951b27ee0!2sMiraj+Cinemas!5e0!3m2!1sen!2sin!4v1554432788036!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(19, 'CINEMERA Multiplex Joy Of Movies', 5, 'cinemearmultiplex56@gmail.com', '2nd Floor Vrundavan Mall Ring Road Above Sales India, Gujarat 390019', '8155020055', 'public/Admin_assets/theater/photo_19.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.5641562956635!2d73.23583131495458!3d22.29449398532661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc5712c4ef1c7%3A0x456376ca165c1e5c!2sCINEMERA+Multiplex+-+Joy+Of+Movies!5e0!3m2!1sen!2sin!4v1554432994023!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(20, 'Sunset Drive In Cinema', 6, 'sunsetdrivein33@gmail.com', ' Drive In Road, Ahmedabad, Gujarat 380052', '7927454600', 'public/Admin_assets/theater/photo_19.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.3551716030056!2d72.52552541496821!3d23.04743688494048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84aef6a71b95%3A0xea3ce494f68ab0bb!2sSunset+Drive+In+Cinema!5e0!3m2!1sen!2sin!4v1554433479331!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_caste`
--
ALTER TABLE `tbl_caste`
  ADD PRIMARY KEY (`cast_id`);

--
-- Indexes for table `tbl_cast_type`
--
ALTER TABLE `tbl_cast_type`
  ADD PRIMARY KEY (`cast_type_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_email_subscriber`
--
ALTER TABLE `tbl_email_subscriber`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `tbl_movie`
--
ALTER TABLE `tbl_movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `tbl_movie_time`
--
ALTER TABLE `tbl_movie_time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `tbl_movie_type`
--
ALTER TABLE `tbl_movie_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tbl_promocode`
--
ALTER TABLE `tbl_promocode`
  ADD PRIMARY KEY (`promocode_id`);

--
-- Indexes for table `tbl_recharge_transaction`
--
ALTER TABLE `tbl_recharge_transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `tbl_screen`
--
ALTER TABLE `tbl_screen`
  ADD PRIMARY KEY (`screen_id`);

--
-- Indexes for table `tbl_theater`
--
ALTER TABLE `tbl_theater`
  ADD PRIMARY KEY (`theater_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `banner_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_caste`
--
ALTER TABLE `tbl_caste`
  MODIFY `cast_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `tbl_cast_type`
--
ALTER TABLE `tbl_cast_type`
  MODIFY `cast_type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  MODIFY `contact_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_email_subscriber`
--
ALTER TABLE `tbl_email_subscriber`
  MODIFY `subscriber_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `location_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_movie`
--
ALTER TABLE `tbl_movie`
  MODIFY `movie_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_movie_time`
--
ALTER TABLE `tbl_movie_time`
  MODIFY `time_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=907;

--
-- AUTO_INCREMENT for table `tbl_movie_type`
--
ALTER TABLE `tbl_movie_type`
  MODIFY `type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_promocode`
--
ALTER TABLE `tbl_promocode`
  MODIFY `promocode_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_recharge_transaction`
--
ALTER TABLE `tbl_recharge_transaction`
  MODIFY `transaction_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `register_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_screen`
--
ALTER TABLE `tbl_screen`
  MODIFY `screen_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_theater`
--
ALTER TABLE `tbl_theater`
  MODIFY `theater_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
