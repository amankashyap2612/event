-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 02:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmyshow`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `profile` longtext NOT NULL,
  `born` datetime NOT NULL,
  `address` longtext NOT NULL,
  `about` longtext NOT NULL,
  `carrear` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artid`, `name`, `image`, `profile`, `born`, `address`, `about`, `carrear`, `status`, `createdate`) VALUES
(1, 'Varun Dhawan', '22-07-27-10-05-19photo.jpg', 'Assistant Director • Actor • Special Appearances', '1987-07-24 00:00:00', 'Maharshtra,Mumbai,India', '<p>Varun Dhawan is an Indian actor who is popularly known as the new age&nbsp;<a href=\"https://in.bookmyshow.com/person/govinda/764\" target=\"_blank\">Govinda</a>. He is known for pulling off roles of various genres. Son of well-known director&nbsp;<a href=\"https://in.bookmyshow.com/person/david-dhawan/525\" target=\"_blank\">David Dhawan</a>, the young actor made a promising debut in&nbsp;<a href=\"https://in.bookmyshow.com/person/karan-johar/1147\" target=\"_blank\">Karan Johar</a>`s 2012 film&nbsp;<a href=\"https://in.bookmyshow.com/movies/student-of-the-year/ET00006158\" target=\"_blank\">Student Of The Year</a>&nbsp;along with his contemporaries Alia Bhatt and Sidharth Malhotra. The actor has acted in comedy, tragedy and romantic films, making his mark in the industry, and is best remembered for his performance in the crime-thriller&nbsp;<a href=\"https://in.bookmyshow.com/movies/badlapur/ET00025073\" target=\"_blank\">Badlapur</a>.</p>\r\n', '<p>Varun never wanted to become an actor, it was his mother who wished that he pursue acting. After joining Barry John`s acting school, he learned various aspects of filming. In 2010, while studying at the film school, he acted and worked as a co-director of photography for a short film titled White Mountain, along with Arjun Kapoor. He also wrote the story and screenplay for the same. Later, he assisted Karan Johar on the film My Name Is Khan, where he worked along with&nbsp;<a href=\"https://in.bookmyshow.com/person/sidharth-malhotra/41930\" target=\"_blank\">Sidharth Malhotra</a>. At that time, Sidharth Malhotra, a successful model, was looking for a break in films.</p>\r\n', 1, '2022-07-27 00:00:00'),
(2, 'Kiara Advani', '22-07-27-10-07-57photo.jpg', 'Assistant Director • Actor • Special Appearances', '1991-07-31 00:00:00', 'Maharshtra,Mumbai,India', '<p>An Indian actress in Bollywood, Kiara Advani made her acting debut with the 2014 film<a href=\"https://in.bookmyshow.com/movies/fugly/ET00020334\" target=\"_blank\">&nbsp;Fugly,</a>&nbsp;starring Mohit Marwah, Vijender Singh, and<a href=\"https://in.bookmyshow.com/person/jimmy-shergill/999\" target=\"_blank\">&nbsp;Jimmy Shergill.</a></p>\r\n', '<p>Before venturing in the world of glamor, Kiara took her training in acting from Anupam Kher`s Actor Prepares and Roshan Taneja`s acting institute. In 2014, she got her big Bollywood break in Kabir Sadanand`s drama film Fugly. The small budget film opened to highly positive reviews from the critics with Subhash K. Jha noting, &quot;this film is thoughtful and at times brilliant. Moreover, it possesses a very rare virtue, a conscience.&quot;<br />\r\n&nbsp;</p>\r\n', 1, '2022-07-27 00:00:00'),
(3, 'Anil Kapoor', '22-07-27-10-12-09photo.jpg', 'Actor • Producer • Special Appearances • Voice Cast', '1957-12-24 00:00:00', 'Maharshtra,Mumbai,India', '<p>Winner of multiple awards, including a National Film Award, Anil Kapoor is one of the most celebrated actors of the Indian film industry. He has had a prolific career spanning almost four decades with more than 100 plus films to his credit. With his role in 2008 Academy Award-winning film Slumdog Millionaire and the 8th season of the American television series 24, he placed himself in the International film circle.</p>\r\n', '<p>Anil Kapoor first faced the camera at the age of 14 with Tu Payal Mein Geet. He played the role of a young&nbsp;<a href=\"https://in.bookmyshow.com/person/shashi-kapoor/3267\">Shashi Kapoor</a>, which never saw the light of day. In 1979, he made his debut with a brief role in Hamare Tumhare. The next year he made his Telugu debut in Bapu`s directorial Vamsa Vruksham. He again collaborated with the director for Woh 7 Din (1983), which was his first leading role in Hindi. The same year, he was also seen in&nbsp;<a href=\"https://in.bookmyshow.com/person/mani-ratnam/1351\">Mani Ratnam</a>`s directorial debut Pallavi Anu Pallavi (Kannada). His first breakthrough role was in Yash Chopra`s Mashaal and earned him his first Filmfare Award for the Best Supporting Actor. The year 1985 saw the release of Yudh where he delivered the iconic line `Ek Dum Jhakaas`.</p>\r\n', 1, '2022-07-27 00:00:00'),
(4, 'Kiccha Sudeep', '22-07-27-10-54-36photo.jpg', 'Actor • Director • Writer • Screenplay • Special Appearances', '1973-09-02 00:00:00', 'Mysore, Karnataka, India', '<p>One of the most celebrated stars in the Kannada film industry, Sudeep Sanjeev, better known mononymously as Sudeep, is an actor, director, TV presenter and playback singer. The actor who made his debut on the silver screen with Thayavva in 1997 has been part of several hit film like Sparsha (2000), Huchcha (2001), Kiccha (2003), My Autograph (2006),&nbsp;<a href=\"https://in.bookmyshow.com/movies/veera-madakari/ET00002793\">Veera Madakari</a>&nbsp;(2009),&nbsp;<a href=\"https://in.bookmyshow.com/movies/kempe-gowda/ET00006622\">Kempe Gowda</a>&nbsp;(2011) and&nbsp;<a href=\"https://in.bookmyshow.com/movies/eega-telugu/ET00009858\">Eega</a>&nbsp;(2012) over the years.&nbsp;</p>\r\n', '<p><strong>He won the Filmfare Award for Best Actor &ndash; Kannada for three consecutive years for his films Huchcha, Nandhi and Swathi Muthu</strong>. Since 2013, he has been hosting the television reality show Bigg Boss Kannada. His performance in the 2001 film, Huchcha, earned him the nickname Kiccha Sudeep by his fans.</p>\r\n', 1, '2022-07-27 00:00:00'),
(5, 'Jacqueline Fernandez', '22-07-27-11-01-52photo.jpg', 'Actor • Special Appearances', '1985-08-11 00:00:00', 'Manama, Bahrain', '<p>Jacqueline Fernandez is a Sri Lankan actress and model who primarily works in the Hindi film industry. The winner of the 2006 Miss Universe Sri Lanka pageant, Jacqueline is famous in Bollywood for essaying glamorous roles in films like&nbsp;<a href=\"https://in.bookmyshow.com/movies/housefull-2/ET00007672\" target=\"_blank\">Housefull&nbsp;</a>2,<a href=\"https://in.bookmyshow.com/movies/race-2/ET00007824\" target=\"_blank\">&nbsp;Race 2</a>,<a href=\"https://in.bookmyshow.com/movies/kick/ET00013290\" target=\"_blank\">&nbsp;Kick</a>, and&nbsp;<a href=\"https://in.bookmyshow.com/movies/housefull-3/ET00032169\" target=\"_blank\">Housefull 3.</a></p>\r\n', '<p>Jacqueline Fernandez broke into the industry with Sujoy Ghosh`s fantasy adventure film Aladin in 2009, opposite Riteish Deshmukh. The film which also starred&nbsp;<a href=\"https://in.bookmyshow.com/person/amitabh-bachchan/138\" target=\"_blank\">Amitabh Bachchan</a>&nbsp;and<a href=\"https://in.bookmyshow.com/person/sanjay-dutt/2035\" target=\"_blank\">&nbsp;Sanjay Dutt</a>&nbsp;was a box office disaster both in terms of collection and content. Jacqueline garnered mixed reviews for her portrayal of Princess Jasmine. Her second film&nbsp;<a href=\"https://in.bookmyshow.com/movies/jaane-kahan-se-aayi-hai/ET00004300\" target=\"_blank\">Jaane Kahan Se Aayi h</a>ai, again starring Riteish Deshmukh, was a flop. Jacqueline was criticized heavily for not being able to satisfyingly play the role of an alien.</p>\r\n', 1, '2022-07-27 00:00:00'),
(6, 'Neetha Ashok', '22-07-27-11-06-12photo.jpg', 'Actor', '1997-07-02 00:00:00', 'Karnataka', '<p>Neetha Ashok is an Indian film actress who started her career in the Kannada Television industry by being the main lead in successful TV serials like Yashode, Neelambari, and Naa Ninna Bidalare. She will debut in the sandalwood film industry through Anup Bhandari`s action-adventure movie `Vikrant Rona` starring Kiccha Sudeepa and Nirup Bhandari.</p>\r\n', '<p>Neetha Ashok is an&nbsp;<strong>Indian film Actress, who has worked predominantly in Kannada movie industry</strong>. Neetha made her Sandalwood debut through Anup Bhandari&#39;s action adventure movie Phantom.&nbsp;</p>\r\n', 1, '2022-07-27 00:00:00'),
(7, 'Harsh Gujral', '22-07-28-12-32-35photo.jpg', 'Stand-up-comedian', '1991-12-04 00:00:00', 'Vanaras U.P', '<p>Harsh Gujral is&nbsp;<strong>a renowned standup comedian and social media celebrity</strong>. He is a brand of observable humor that is fresh and contemporary that has struck a chord with audiences across India. He made his mark with a super relatable style of narrative that connects him with the audience instantly.</p>\r\n', '<p>Harsh is a Dabangg guy from Kanpur who cracks jokes on his life experiences. With a strong personality, he also has strong comedy sets to tickle your funny bones.</p>\r\n', 1, '2022-07-28 00:00:00'),
(8, 'Vir Das', '22-07-28-12-49-43photo.jpg', 'Actor • Special Appearances', '1979-05-31 00:00:00', 'Dehradun, Uttarakhand, India', '<p>Often known as the king of stand up comedy in India, Vir Das is a stage and film actor, comedian, host and writer, who predominantly works in the Hindi entertainment industry. He is known for starring in films like&nbsp;<a href=\"https://in.bookmyshow.com/movies/badmaash-company/ET00004461\" target=\"_blank\">Badmaash Company</a>,&nbsp;<a href=\"https://in.bookmyshow.com/movies/go-goa-gone/ET00014172\" target=\"_blank\">Go Goa Gone</a>, and&nbsp;<a href=\"https://in.bookmyshow.com/movies/delhi-belly-enghin/ET00007308\" target=\"_blank\">Delhi Belly</a>.</p>\r\n', '<p>After the completion of his program at Harvard University, Vir Das returned to India at the age of 24, in 2003. He has since then performed in more than 100 comedy shows all over India, emerging as the country`s finest and most sought after stand-up comedian. Some of his famous shows include Who Let the Das Out?, ViRagra, and Son of a Switch. Vir Das is famous for his intelligent humor and is frequently referred to as India`s answer to Jay Leno.</p>\r\n', 1, '2022-07-28 00:00:00'),
(9, 'Hardwell', '22-07-28-01-14-42photo.jpg', 'Actor • Special Appearances', '1979-05-31 00:00:00', 'Moscow', '<p>Music maturity came swiftly for the now seasoned-veteran Robbert van de Corput, better known as Hardwell. At the age of 25, the young Dutch titan capped off a 10 year journey when he was crowned Worlds #1 DJ in the 2013 DJ Mag Top 100 DJs Poll cementing his position as the electronic scenes newest superstar DJ and becoming the youngest ever winner of the coveted Top 100 DJs award.&nbsp;</p>\r\n', '<p>In 2014 the Dutch megastar did it again - being crowned World&#39;s #1 DJ in the 2014 edition of DJ Mags Top 100 DJs Poll for a second consecutive year. Despite relinquishing his crown in 2015, though still taking the highly respectable second-place spot, it&#39;s clear that Hardwell has already created a legacy that would put most of his counterparts to shame.</p>\r\n', 1, '2022-07-28 00:00:00'),
(10, 'Gurleen Pannu', '22-07-28-01-23-29photo.jpg', 'Comedian • Stand-up-comedian', '1979-05-31 00:00:00', 'Chandigarh,Punjab,India', '<p>Gurleen Pannu is a new age stand-up comedian. She is a crazy person to listen to, with her observations, anecdotes and gup-shup right from the enigma of a typical Indian household! The lady with her ethnic roots and her keen sense of humor reaches too close to reality. Gurleen with her words strikes the right chords to make you laugh with her tragic-comedy and everyday stories of a conventional Indian family.&nbsp;</p>\r\n', '<p>This Chandigarh girl holds the expertise in making you have a good laugh with her Punjabi and Hindi centric jokes. She is now not only everyone&#39;s favorite but also making her space in the northern Indian sphere of the Comedy world.</p>\r\n', 1, '2022-07-28 00:00:00'),
(11, 'Anubhav Singh Bassi', '22-07-28-01-31-49photo.jpg', 'Comedian', '1931-01-09 00:00:00', 'Meerut,India', '<p>A lawyer-turned-UPSC aspirant-turned-entrepreneur-turned-comic, Anubhav Bassi is finally doing something productive after many failures because he thinks that his failures are his achievements. A perfect storyteller who makes fun of himself and everything that has come in his way till date. His style of comedy is interestingly natural with the whole act that seems like a casual conversation with hilarious content</p>\r\n', '<p>His style of comedy is interestingly natural with the whole act that seems like a casual conversation with hilarious content. One of the best stand-up comedians of the next gen.</p>\r\n', 1, '2022-07-28 00:00:00'),
(12, 'Gaurav Kapoor', '22-07-28-01-34-39photo.jpg', 'Actor', '1981-04-11 00:00:00', 'New Delhi, Delhi, India', '<p>Gaurav Kapoor sounds like a celebrity name but he is only a short boy from Delhi who is actually a fully grown man. Apart from a day job, the only thing he has going for him is that he is funny. So funny in fact that he has won every open mic competition on the Mumbai circuit including Big Mic, Canvas Laugh Club, Chalta Hai and Buzz Off and has opened for Russell Brand on his India tour.</p>\r\n', '<p>His friends say that the stories he narrates off stage are even funnier but we may never know. Gaurav claims to be a Bachelor of Art in Journalism and is understandably working in the retail sector. Having recently changed his name from Kapur to Kapoor, he is hoping being neurologically correct will add two inches to his height.</p>\r\n', 1, '2022-07-28 00:00:00'),
(13, 'Gaurav Gupta', '22-07-28-01-37-38photo.jpg', 'Comedian • Stand-up-comedian', '1981-04-11 00:00:00', 'New Delhi, Delhi, India', '<p>About the most popular&nbsp;<em><em>baniya</em>&nbsp;</em>of our times, Gaurav Gupta is back with his new solo &#39;&#39;Market Down Hai&#39;&#39; which involves funny incidents and tales about all emotional blackmail lines given by papa log, mummy log, and other relatives.</p>\r\n', '<p>There is a lot more to know about his hilarious experiences and story of himself as a parent, husband, a Delhite and above all a&nbsp;<em>baniya&nbsp;</em>with his Punjabi friends.is extravagant when it comes to delivering jokes. He is a dentist by profession, a husband by possession and a comedian by the recession.</p>\r\n', 1, '2022-07-28 00:00:00'),
(14, 'Aashish Solanki', '22-07-28-01-44-12photo.jpg', 'Comedian • Stand-up-comedian', '1981-04-11 00:00:00', 'New Delhi, Delhi, India', '<p>Simple, unique, hilarious. Aashish tells weird stories, real and imaginary, to make you laugh. His clean humour is his USP. Beware, because some of his observations can make you laugh uncontrollably while you agree with him at every point. He is worth watching live because he doesn&#39;t have any videos.</p>\r\n', '<p>There is a lot more to know about his hilarious experiences and story of himself as a parent, husband, a Delhite and above all a&nbsp;<em>baniya&nbsp;</em>with his Punjabi friends.is extravagant when it comes to delivering jokes. He is a dentist by profession, a husband by possession and a comedian by the recession.</p>\r\n', 1, '2022-07-28 00:00:00'),
(15, 'Justin Bieber', '22-07-28-02-10-51photo.jpg', 'Actor • Special Appearances', '1994-03-01 00:00:00', 'Canada', '<p>The &lsquo;Baby&rsquo; hitmaker, Justin Bieber is a Canadian singer and songwriter. Having achieved fame at a mere age of fourteen, Bieber has released four studio albums and twenty-nine singles. One of the world&rsquo;s best-selling music artists, Bieber has been listed multiple times on Forbes&rsquo; list of &lsquo;Top Ten Most Powerful Celebrities in the World&rsquo;. The three-time Grammy Award-nominated pop star&#39;s fourth studio Purpose sold an estimate of 100 million records, making it his most successful album as of 2016</p>\r\n', '<p>After being signed on by&nbsp;<a href=\"https://in.bookmyshow.com/person/usher/IEIN001350\" target=\"_blank\">Usher</a>&nbsp;and Scooter Braun, Bieber released his first album titled My World in 2009. Immediately shooting to fame, My World ranked at number six on the US Billboard 200 and sold over 137000 copies during its first-week sales. Of the seven songs on the album, &lsquo;One Time&rsquo; went on to become the most popular track. The two-piece project was topped by the second part of his first album titled My World 2.0 in 2010, which debuted at number one at the US Billboard 200 .</p>\r\n', 1, '2022-07-28 00:00:00'),
(16, 'Jaspreet Singh', '22-07-28-02-18-08photo.jpg', 'Comedian', '1969-01-01 00:00:00', 'Canada', '<p>&nbsp;</p>\r\n\r\n<p>Jaspreet is a very innocent looking guy who derives most of his humor from the things happening in his house and around him in the city. He sometimes feel that world is really stupid place to live in and he contributes his bit by making fun of stupidity he observes in the real life.</p>\r\n', '<p>Very straightforward in the way he delivers, watch him share about his observation of life in a metro, things he hates doing and meet his family through his set.</p>\r\n', 1, '2022-07-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `book_id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `eventid` int(11) NOT NULL,
  `eventname` varchar(200) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `seat_name` varchar(200) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`book_id`, `user_name`, `eventid`, `eventname`, `seat_id`, `seat_name`, `total_price`, `status`, `createdate`) VALUES
(1, 'Thor', 7, 'Hardwell - Rebels Never Die', 0, 'A4,A5,A6,A7,A495,A496,A497,A498,A499,A500,', 1000, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `createddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `createddate`) VALUES
(1, 'Movies', '22-07-27-09-02-29photo.jpg', '2022-07-27 00:00:00'),
(2, 'Stream', '22-07-27-09-08-02photo.jpg', '2022-07-27 00:00:00'),
(3, 'Events', '22-07-27-09-09-37photo.jpg', '2022-07-27 00:00:00'),
(4, 'Plays', '22-07-27-09-11-51photo.jpg', '2022-07-27 00:00:00'),
(5, 'Sports', '22-07-27-09-14-31photo.jpg', '2022-07-27 00:00:00'),
(6, 'Activities', '22-07-27-09-16-03photo.jpg', '2022-07-27 00:00:00'),
(7, 'Buzz', '22-07-27-09-17-14photo.jpg', '2022-07-27 00:00:00'),
(8, 'ListYourSHow', '22-07-27-09-18-41photo.jpg', '2022-07-27 00:00:00'),
(9, 'corporates', '22-07-27-09-20-26photo.jpg', '2022-07-27 00:00:00'),
(10, 'Offers', '22-07-27-09-21-46photo.jpg', '2022-07-27 00:00:00'),
(11, 'Gift card', '22-07-27-09-22-33photo.jpg', '2022-07-27 00:00:00'),
(12, 'Workshop', '22-07-27-09-24-19photo.jpg', '2022-07-27 00:00:00'),
(13, 'StayFit', '22-07-27-09-25-50photo.jpg', '2022-07-27 00:00:00'),
(14, 'Kids', '22-07-27-09-26-08photo.jpg', '2022-07-27 00:00:00'),
(15, 'Comedy', '22-07-27-09-27-57photo.jpg', '2022-07-27 00:00:00'),
(16, 'Music', '22-07-27-09-28-12photo.jpg', '2022-07-27 00:00:00'),
(17, 'Esport', '22-07-27-09-28-32photo.jpg', '2022-07-27 00:00:00'),
(18, 'Upskill', '22-07-27-09-30-17photo.jpg', '2022-07-27 00:00:00'),
(19, 'Food', '22-07-27-09-30-33photo.jpg', '2022-07-27 00:00:00'),
(20, 'Games', '22-07-27-09-31-03photo.jpg', '2022-07-27 00:00:00'),
(21, 'Arts', '22-07-27-09-31-16photo.jpg', '2022-07-27 00:00:00'),
(22, 'Theatre', '22-07-27-09-32-19photo.jpg', '2022-07-27 00:00:00'),
(23, 'Advanture', '22-07-27-09-32-35photo.jpg', '2022-07-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(11) NOT NULL,
  `eventname` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `feature` longtext NOT NULL,
  `shortimage` varchar(250) NOT NULL,
  `largeimage` varchar(250) NOT NULL,
  `openingdate` date NOT NULL,
  `closingdate` date NOT NULL,
  `seat` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createddate` datetime NOT NULL,
  `cat_id` int(11) NOT NULL,
  `art_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `eventname`, `description`, `feature`, `shortimage`, `largeimage`, `openingdate`, `closingdate`, `seat`, `price`, `status`, `createddate`, `cat_id`, `art_id`) VALUES
(1, 'JugJugg Jeeyo', '<p>A marriage. A re-marriage. A pending divorce. JugJugg Jeeyo is a story set in the heart of Patiala and much like the city, it`s full of love and laughter, colour and drama. It`s been five years since Kukoo and Nainaa got married after knowing each other practically all their lives, and now they need to break it to their family that they want a divorce. Kukoo`s parents, Bheem and Geeta, a couple that everyone looks up to, have no plans of making Kukoo and Naina`s lives easier. They have their own plans and set of surprises in store for the young couple; all this in the middle of Kukoo`s sister`s wedding. It`s about family and its values, unresolved yearnings and unexpected reconciliations</p>\r\n', '<p>2h 30m&bull;<a href=\"https://in.bookmyshow.com/explore/comedy-movies-national-capital-region-ncr\">Comedy</a>,<a href=\"https://in.bookmyshow.com/explore/drama-movies-national-capital-region-ncr\">Drama</a>,<a href=\"https://in.bookmyshow.com/explore/family-movies-national-capital-region-ncr\">Family</a>&bull;UA&bull;24 Jun, 2022</p>\r\n\r\n<p>&nbsp;</p>\r\n', '22-07-27-10-49-29photo.jpg', '18008dphoto.jpg', '2022-06-27', '2022-07-27', 200, 400, 1, '2022-07-27 14:18:00', 1, '1,3,2'),
(2, 'Vikrant Rona', '<p>Almost half a century ago, a remote village in the middle of a tropical rainforest starts witnessing a series of unexplainable events which they attribute to the supernatural. This coincides with the arrival of an eccentric police officer, Vikrant Rona. A mysterious game unfolds where everyone in the village is a potential victim and everyone is a suspect.</p>\r\n', '<p><a href=\"https://in.bookmyshow.com/explore/mystery-movies-national-capital-region-ncr\">Mystery</a>,<a href=\"https://in.bookmyshow.com/explore/thriller-movies-national-capital-region-ncr\">Thriller</a>&bull;UA</p>\r\n\r\n<p><a href=\"https://in.bookmyshow.com/explore/kannada-movies-national-capital-region-ncr\">Kannada</a>,<a href=\"https://in.bookmyshow.com/explore/malayalam-movies-national-capital-region-ncr\">Malayalam</a>,<a href=\"https://in.bookmyshow.com/explore/hindi-movies-national-capital-region-ncr\">Hindi</a>,<a href=\"https://in.bookmyshow.com/explore/telugu-movies-national-capital-region-ncr\">Telugu</a>,<a href=\"https://in.bookmyshow.com/explore/tamil-movies-national-capital-region-ncr\">Tamil</a>,<a href=\"https://in.bookmyshow.com/explore/english-movies-national-capital-region-ncr\">English</a></p>\r\n', '22-07-27-11-11-59photo.jpg', '99360dphoto.jpg', '2022-07-27', '2022-08-27', 500, 499, 1, '2022-07-27 14:40:00', 1, '4,5,6'),
(4, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', '<p>It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.</p>\r\n\r\n<p>He has been known to find humour in some of the most regular life situations. He has average north Indian looks and height but he believes that the phrase tall dark and handsome was coined only for him.</p>\r\n\r\n<p>His style of comedy is spontaneous mixed with great crowd work.</p>\r\n\r\n<p>Harsh will leave you in splits with his typical rough demeanour and leave you craving for more</p>\r\n', '<p>Comedy Shows | Hindi, English | 16yrs + | 1hr 30mins</p>\r\n', '22-07-28-12-37-10photo.jpg', '35909dphoto.jpg', '2022-07-30', '2022-08-28', 500, 699, 1, '2022-07-28 16:03:00', 3, '7'),
(5, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', '<p>It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.</p>\r\n\r\n<p>He has been known to find humour in some of the most regular life situations. He has average north Indian looks and height but he believes that the phrase tall dark and handsome was coined only for him.</p>\r\n\r\n<p>His style of comedy is spontaneous mixed with great crowd work.</p>\r\n\r\n<p>Harsh will leave you in splits with his typical rough demeanour and leave you craving for more</p>\r\n', '<p>Comedy Shows | Hindi, English | 16yrs + | 1hr 30mins</p>\r\n', '22-07-28-12-43-59photo.jpg', '1971dphoto.jpg', '2022-07-28', '2022-08-02', 500, 799, 1, '2022-07-28 16:03:00', 3, '7'),
(6, 'Vir Das` Wanted Tour 2022 - Delhi', '<p>India&rsquo;s highest selling English stand-up comedian Vir Das, is bringing his brand new show THE WANTED TOUR to India! The tour has travelled across 15 cities with 20 shows and is now ready to go across India this summer.</p>\r\n', '<p>Comedy | English | 18yrs + | 1hr 40mins</p>\r\n', '22-07-28-12-52-13photo.jpg', '60441dphoto.jpg', '2022-07-29', '2022-07-29', 500, 750, 1, '2022-07-28 16:03:00', 3, '8'),
(7, 'Hardwell - Rebels Never Die', '<p>HARDWELL IS BACK - the world&rsquo;s no. 1 DJ is coming back after announcing his retirement in 2018 with a massive world tour - REBELS NEVER DIE.&nbsp;</p>\r\n\r\n<p>He will be performing in India for one show only as a part of his world tour on 11th December 2022 in Delhi NCR.&nbsp;</p>\r\n', '<p>EDM | English | 5hrs</p>\r\n', '22-07-28-13-14-58photo.jpg', '70621dphoto.jpg', '2022-12-11', '2022-12-11', 500, 1000, 1, '2022-07-28 16:03:00', 3, '9'),
(8, 'Pannu Yaar! ft.Gurleen Pannu', '<p>&lsquo;Pannu Yaar&rsquo; is a stand-up comedy show, which will be your one-way ticket into the Pannu-Verse. Her friendly attitude, observational humour, and personal anecdotes will get you in a fit of breathless laughter. Life is full of stories, and Pannu picks the best, presenting them in a manner which reeks of humor and hilarity. Being the centre of attention was always her favourite hobby, and her stories bloom from analysing and observing her surroundings. One may never know, kya pata agla anecdote aapke baare main ho?</p>\r\n', '<p>Comedy Shows | Hindi, English | 16yrs + | 1hr 15mins</p>\r\n', '22-07-28-13-23-54photo.jpg', '9026dphoto.jpg', '2022-07-29', '2022-08-08', 500, 499, 1, '2022-07-28 16:03:00', 3, '10'),
(9, 'The Big Lineup', '<p>A unique gathering of performers from all reaches of comedy entertainment, oriole entertainment will host a stellar lineup of acclaimed comedians and entertainers at the big lineup.</p>\r\n', '<p>Comedy Shows | Hindi, English | 16yrs + | 5hr</p>\r\n', '22-07-28-13-38-22photo.jpg', '57886dphoto.jpg', '2022-07-29', '2022-08-08', 500, 499, 1, '2022-07-28 16:03:00', 3, '7,11,12,13'),
(10, 'Good Boy Better Show ft.Aashish Solanki', '', '<p>Comedy Shows | Hindi, English | 16yrs + | 1hr 15mins</p>\r\n', '22-07-28-13-44-27photo.jpg', '59430dphoto.jpg', '2022-07-29', '2022-08-06', 500, 499, 1, '2022-07-28 16:03:00', 3, '14'),
(11, 'Bas Kar Bassi feat.Anubhav Singh Bassi', '<p>As this show is being recorded for an online release, buying this ticket is your consent to participate in the recording and some footage may have audience reactions.</p>\r\n', '<p>Comedy Shows | Hindi| 16yrs + | 1hr 15mins</p>\r\n', '22-07-28-13-50-05photo.jpg', '32242dphoto.jpg', '2022-08-30', '2022-08-31', 500, 799, 1, '2022-07-28 16:03:00', 3, '11'),
(12, 'Bas Kar Bassi feat.Anubhav Singh Bassi', '<p>As this show is being recorded for an online release, buying this ticket is your consent to participate in the recording and some footage may have audience reactions.</p>\r\n', '<p>Comedy Shows | Hindi| 16yrs + | 1hr 15mins</p>\r\n', '22-07-28-13-52-02photo.jpg', '45225dphoto.jpg', '2022-08-30', '2022-08-31', 500, 499, 1, '2022-07-28 16:03:00', 3, '11'),
(13, 'Gaurav Kapoor Live', '<p>The views expressed by the individual artists and performers (&quot;Artist(s)&quot;), either in course of their performance, or on their social media channels, or any third party channels and platforms, online or offline or otherwise (collectively, &quot;Channels&quot;), are solely their own and neither do they represent those of BookMyShow nor are they endorsed in any manner by BookMyShow, its associates and affiliates.</p>\r\n', '<p>Comedy Shows | Hindi, English | 16yrs + | 1hr</p>\r\n', '22-07-28-13-59-23photo.jpg', '18694dphoto.jpg', '2022-08-14', '2022-08-15', 100, 499, 1, '2022-07-28 16:03:00', 3, '12'),
(14, 'Gaurav Gupta Live', '<p>Gaurav Gupta is a baniya who is extravagant when it comes to delivering jokes, he is a dentist by profession and a comic by recession, his comedy involves keen observations of daily life, people and funny encounters with them, he has won several open mic competitions like 94.3 FM Radio One LOL contest, Piano Man Tongue in Cheek in Delhi and Chalta Hai Comedy in Mumbai and has performed at Canvas Laugh Club, Mumbai and Delhi.</p>\r\n', '<p>Comedy Shows | Hindi, English | 16yrs + | 1hr 30min</p>\r\n', '22-07-28-14-02-54photo.jpg', '54475dphoto.jpg', '2022-07-29', '2022-08-22', 100, 499, 1, '2022-07-28 16:03:00', 3, '13'),
(15, 'Justin Bieber Justice World Tour', '<p>We&rsquo;ve caught the&nbsp;<strong>#BieberFever</strong>&nbsp;and how! Buckle up, Beliebers, for this is one concert you CANNOT afford to miss. With global hits like &lsquo;Lonely&rsquo;, &lsquo;Peaches&rsquo;, and more breaking all sorts of international records, this pop-sensation is coming to India!&nbsp;</p>\r\n', '<p>Pop | English | 6hrs</p>\r\n', '22-07-28-14-11-16photo.jpg', '73070dphoto.jpg', '2022-10-18', '2022-10-18', 100, 499, 1, '2022-07-28 16:03:00', 3, '15'),
(16, 'With love, Jaspreet! - A standup solo', '<p>After 100 millions views on youtube and an Amazon Prime Comedy special, back with a new show. Happy, cheerful, Lively as always!</p>\r\n', '<p>Comedy Shows | 1hr 30mins</p>\r\n', '22-07-28-14-20-40photo.jpg', '50378dphoto.jpg', '2022-08-19', '2022-08-19', 100, 699, 1, '2022-07-28 16:03:00', 3, '16'),
(17, 'With Love, Jaspreet. A standup comedy show.', '<p>After 100 millions views on youtube and an Amazon Prime Comedy special, back with a new show. Happy, cheerful, Lively as always!</p>\r\n', '<p>Comedy Shows | 1hr 30mins</p>\r\n', '22-07-28-14-22-49photo.jpg', '27167dphoto.jpg', '2022-08-06', '2022-08-13', 100, 699, 1, '2022-07-28 16:03:00', 3, '16'),
(18, 'Gaurav Kapoor Live', '<p>Gaurav Kapoor, the funny one from Delhi is back in action with his first ever online comedy show. His razor-sharp wit and candid humour lead him to win almost every open-mic he has ever participated in. Gaurav is a regular featured act at comedy clubs across the country</p>\r\n', '<p>Comedy Shows | 1hr 30mins</p>\r\n', '22-07-28-14-29-09photo.jpg', '38752dphoto.jpg', '2022-08-13', '2022-08-13', 100, 799, 1, '2022-07-28 16:03:00', 3, '12'),
(19, 'Gaurav Kapoor Live', '', '<p>Comedy Shows | Hindi, English | 16yrs + | 1hr</p>\r\n', '22-07-28-14-33-08photo.jpg', '10996dphoto.jpg', '2022-08-04', '2022-08-04', 100, 499, 1, '2022-07-28 16:03:00', 3, '12'),
(20, 'Gaurav Gupta Live - Stand Up comedy Show', '<p>The views expressed by the individual artists and performers (&quot;Artist(s)&quot;), either in course of their performance, or on their social media channels, or any third party channels and platforms, online or offline or otherwise (collectively, &quot;Channels&quot;), are solely their own and neither do they represent those of BookMyShow nor are they endorsed in any manner by BookMyShow, its associates and affiliates.&nbsp;</p>\r\n', '<p>Comedy Shows | Hindi, English | 16yrs + | 1hr</p>\r\n', '22-07-28-14-39-51photo.jpg', '2477dphoto.jpg', '2022-08-05', '2022-09-04', 100, 499, 1, '2022-07-28 16:03:00', 3, '13');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `seatbook` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `eventid`, `seatbook`, `status`, `createddate`) VALUES
(1, 7, 'A1,A2,A3,A4,A5,A6,A7,A4,A5,A6,A7,A495,A496,A497,A498,A499,A500,', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `email`, `password`, `photo`, `address`) VALUES
(1, 'Captain America', 8565984574, 'captain@gmail.com', 'captain', '22-07-27-08-43-58photo.jpg', 'New York'),
(2, 'Thor', 8565984574, 'thor@gmail.com', 'thor', '22-07-27-08-45-53photo.jpg', 'Asgard New York'),
(3, 'Lee Jung', 9898989898, 'squidgame@gmail.com', 'squidgame', '22-07-27-08-47-34photo.jpg', 'Korea'),
(4, 'Sudeep', 9878456515, 'sudeep@gmail.com', 'sudeep', '22-07-27-13-56-07photo.jpg', 'Karnataka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artid`);

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
