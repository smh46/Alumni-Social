-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 02:10 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aub_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(11) NOT NULL,
  `title` text,
  `eDesc` text,
  `details` text,
  `eDate` varchar(50) DEFAULT NULL,
  `eLoc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `title`, `eDesc`, `details`, `eDate`, `eLoc`) VALUES
(1, 'Atlanta Chapter Mother\'s Day Family Picnic', 'Spring, graduations, and summer travel plans are all in the air, and Mother\'s Day is just round the corner. This year, your AUB Atlanta Chapter Committee, decided to celebrate mother\'s day with a picnic.', 'Dear AUBites and Friends,\n\nSpring, graduations, and summer travel plans are all in the air, and Mother\'s Day is just round the corner. This year, your AUB Atlanta Chapter Committee, decided to celebrate mother\'s day with a picnic.\n\n\nMason Mill Park is a lovely park that has an open flat recreational area, a 1.2 miles nice walking trail and tennis courts. We have reserved their largest pavilion for our use. The park also has two playgrounds, one for older children that has giant slides and swings and another for younger children that has slides, and toddler swings. The younger children can also ride their tricycles, big wheels, and bikes.\n\n\nSo, grab some games; Checkers, Backgammon, Cards, Soccer balls, Tennis rackets, Toddler bikes, and join us for a fun day and a great way to honor our very special MOMS!!!\nCost:            \n$20 for adults and children older than 12 years\nFREE for children 12 years and younger\nPay at the picnic by CASH or CHECK.\nNO CREDIT CARDS ACCEPTED.\nPlease register ONLINE by May 3rd!\nHOPE TO SEE YOU ALL THERE!!!!!', '5/8/2016, 11:30 AM to 4:00 PM', 'Mason Mill Park\r\n1340 McConnell Drive, Decatur, GA 30033'),
(2, 'Indiana Chapter Gathering', 'The WAAAUB Indiana Chapter is having a gathering on Friday, May 20th at 7:30pm at the St. Joseph Brewery in downtown Indianapolis. Connect over good food in the form of heavy hors d\'oeuvres and good conversation!', 'The WAAAUB Indiana Chapter is having a gathering on Friday, May 20th at 7:30pm at the St. Joseph Brewery in downtown Indianapolis. Connect over good food in the form of heavy hors d\'oeuvres and good conversation!\r\n\r\nThe address is 540 N College Ave, Indianapolis, IN\r\n\r\nThe cost is 40 dollars per person. This includes open buffet and two beers.\r\n\r\nPlease confirm your attendance to aubalumniindiana@gmail.com by Monday, May 9th . Once you confirm your attendance, you will be issued a paypal invoice to pay ahead of the event. \r\n\r\nThank you, and we hope to see all of you there!', '5/20/2016, 7:30 pm', 'St Joseph\'s Brewery\r\n540 N College Ave\r\nIndianapolis, IN 46202'),
(3, 'Legacy Ceremony 2016', 'You are invited to the historic all-generation Legacy Ceremony celebrating AUB\'s 150th Anniversary!', 'Wednesday, September 14th at 6:00pm\r\nBathish Auditorium, West Hall\r\nTo RSVP email us at alumni@aub.edu.lb\r\nor call 01-363445.', '9/14/2016, 6:00 PM', 'Bathish Auditorium\r\nWest Hall, AUB'),
(4, 'Baltimore Chapter Gala Dinner', 'We are celebrating the 150th Anniversary of AUB and we look forward to seeing as many of you as possible to help support this event!', 'We are celebrating the 150th Anniversary of AUB and we look forward to seeing as many of you as possible to help support this event!\r\n\r\nTicket prices:\r\n$100 per person\r\n$60 for students, medical residents, research fellows, & under 21 (age 15 - 21)\r\nCash bar - please bring actual cash - no credit cards accepted at the cash bar\r\nDress code Semi-formal (the Club has a strict no denim/jeans policy)\r\n\r\nPlease note that for those of you interested in reserving a table, we have tables for 8 or 10 guests.  Kindly specify table size needed for reservation. \r\n\r\nWe are happy to present a live DJ for dancing the night away.  It promises to be a fun evening of eating, dancing, and catching up with friends!', '10/1/2016, 7:00 PM', 'Country Club of Maryland\r\n1101 Stevenson Ln\r\nTowson, MD 21286'),
(5, 'Computer Sciences Alumni Chapter Dinner', 'The CMPS Alumni event has been scheduled by the Organizing Committee in Dubai to be on Friday, the 25th of November at the Address Montgomerie Dubai Golf Resort.\r\nSave the Date!', 'The CMPS Alumni event has been scheduled by the Organizing Committee in Dubai to be on Friday, the 25th of November at the Address Montgomerie Dubai Golf Resort.\r\nSave the Date!', '11/25/2016', 'BLISS HALL');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `title` text,
  `subtitle` text,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `title`, `subtitle`, `link`) VALUES
(1, 'The Tech Guy Building Wearables for American Olympians', 'AUB alumnus and the Biomedical Engineer for the U.S. Olympic Committee, Mounir Zok (BS \'97), is more focused on the IoT (internet of things) than the IOC (International Olympic Committee).', 'https://www.bloomberg.com/news/articles/2018-01-22/the-tech-guy-building-wearables-for-america-s-olympians'),
(2, 'Forbes\'s 30 Under 30 - Venture Capital', 'AUB alumnus and cofounder of Blue Cloud Ventures Rami Rahal (BE \'08) has been named one of &#8234;Forbes&#8236;\'s &#8234;30 Under 30&#8236; in the field of venture capital. ', 'http://www.forbes.com/30-under-30-2016/venture-capital/#34e75c652f8d'),
(3, 'Lebanon\'s Top 20: Moodfit - The Design Challenge', 'Tarek Jaroudi (MBA \'15), Mohamed Sabouneh (MBA \'15) and Ghassan Abi Fadel (MBA \'14) created an online interior design program called Moodfit which enables a user to transform a space with the help of top interior designers.', 'http://www.executive-magazine.com/special-report/entrepreneurship-in-lebanon/the-design-challenge'),
(4, 'Is the U.S. Ready for a Lebanese Restaurant Chain?', 'Christine Sfeir (BS \'94), with help of fellow alumni Carine Assouad (BGD 05) and Julien Khabbaz (BE 02), is working to expand her Lebanese food franchise Semsom in the United States.', 'http://www.wsj.com/articles/is-the-u-s-ready-for-a-lebanese-restaurant-chain-1462155371'),
(5, 'This web enabled bottle-opener perfectly encapsulates the internet of things', 'AUB alumnus Karim Choueiri (BS \'05) and his team are behind the world\'s first smart bottle opener, Bottle Opener x.', 'http://nymag.com/selectall/2016/05/this-web-enabled-bottle-opener-perfectly-encapsulates-the-internet-of-things.html?mid=twitter_nymag05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(6) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `degree` varchar(40) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mobile` varchar(16) DEFAULT NULL,
  `occupation` varchar(30) DEFAULT NULL,
  `about` text,
  `Security_Question` varchar(80) NOT NULL,
  `Answer` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `fname`, `lname`, `password`, `email`, `degree`, `address`, `mobile`, `occupation`, `about`, `Security_Question`, `Answer`) VALUES
('usr01', 'Frank', 'Wilson', 'pass1', 'usr01@mail.aub.edu', 'Computer Science', 'Hamra, Near ABC Hamra', '+961 45 785621', 'Full-Stack Developer', 'Aliquam tellus aptent condimentum ante himenaeos fermentum feugiat viverra, odio sed commodo bibendum curae maecenas curabitur, ullamcorper aliquet quis integer torquent in fringilla proin cras sed vitae iaculis etiam cursus ultrices.', 'What is your mother\'s maiden name?', 'mama'),
('usr02', 'Billy', 'Worker', 'pass2', 'usr02@mail.aub.edu', 'Business', 'Saida', '+961 555444', 'Accountant', 'Aliquam tellus aptent condimentum ante himenaeos fermentum feugiat viverra, odio sed commodo bibendum curae maecenas curabitur, ullamcorper aliquet quis integer torquent in fringilla proin cras sed vitae iaculis etiam cursus ultrices.', 'What is your favorite animal?', 'bird'),
('usr03', 'Fanan', 'Sorif', 'pass3', 'usr03@mail.aub.edu', 'Business', 'Mar Elias, Fort Helo', ' +961 254874', 'Professional Art Dealer', 'Aliquam tellus aptent condimentum ante himenaeos fermentum feugiat viverra, odio sed commodo bibendum curae maecenas curabitur, ullamcorper aliquet quis integer torquent in fringilla proin cras sed vitae iaculis etiam cursus ultrices.', 'What is your best friend\'s name?', 'Bob'),
('usr04', 'Eli', 'Abdullah', 'pass4', 'usr04@mail.aub.edu', 'Computer Science', 'Jounieh', '+961 254444', 'Assembly Programmer', 'Aliquam tellus aptent condimentum ante himenaeos fermentum feugiat viverra, odio sed commodo bibendum curae maecenas curabitur, ullamcorper aliquet quis integer torquent in fringilla proin cras sed vitae iaculis etiam cursus ultrices.', 'What is your catch phrase?', 'catch phrase'),
('usr05', 'Joseph', 'Toameh', 'pass5', 'usr05@mail.aub.edu', 'Chemistry', 'Jal El Dib', '+457 841254', 'Senior Chemist', 'Aliquam tellus aptent condimentum ante himenaeos fermentum feugiat viverra, odio sed commodo bibendum curae maecenas curabitur, ullamcorper aliquet quis integer torquent in fringilla proin cras sed vitae iaculis etiam cursus ultrices.', 'what middle school did you attend?', 'I forgot'),
('usr06', 'Samer', 'Houry', 'pass6', 'usr06@mail.aub.edu', 'Biology', NULL, '+961 777666', 'Junior Biologist', 'Aliquam tellus aptent condimentum ante himenaeos fermentum feugiat viverra, odio sed commodo bibendum curae maecenas curabitur, ullamcorper aliquet quis integer torquent in fringilla proin cras sed vitae iaculis etiam cursus ultrices.', 'What type of car do you own?', 'Honda'),
('usr07', 'Nader', 'Itani', 'pass7', 'usr07@mail.aub.edu', 'Business', NULL, NULL, 'Marketing Executive', 'Aliquam tellus aptent condimentum ante himenaeos fermentum feugiat viverra, odio sed commodo bibendum curae maecenas curabitur, ullamcorper aliquet quis integer torquent in fringilla proin cras sed vitae iaculis etiam cursus ultrices.', 'What is your favorite hobby?', 'Sports'),
('usr08', 'Ghada', 'Al Najjar', 'pass8', 'usr08@mail.aub.edu', 'Economics', NULL, NULL, NULL, 'Aliquam tellus aptent condimentum ante himenaeos fermentum feugiat viverra, odio sed commodo bibendum curae maecenas curabitur, ullamcorper aliquet quis integer torquent in fringilla proin cras sed vitae iaculis etiam cursus ultrices.', '', ''),
('usr09', 'Maya', 'Itani', 'pass9', 'usr09@mail.aub.edu', 'Mathematics', NULL, NULL, NULL, 'Aliquam tellus aptent condimentum ante himenaeos fermentum feugiat viverra, odio sed commodo bibendum curae maecenas curabitur, ullamcorper aliquet quis integer torquent in fringilla proin cras sed vitae iaculis etiam cursus ultrices.', '', ''),
('usr10', 'John', 'Smith', 'pass10', 'usr10@mail.aub.edu', 'Computer Science', 'Somewhere Else Far Away', '76877778', 'Junior Developer', 'Aliquam tellus aptent condimentum ante himenaeos fermentum feugiat viverra, odio sed commodo bibendum curae maecenas curabitur, ullamcorper aliquet quis integer torquent in fringilla proin cras sed vitae iaculis etiam cursus ultrices.', 'Who\'s your favorite Superhero?', 'Superman'),
('usr11', 'Jane', 'Doe', 'pass11', 'usr11@mail.aub.edu', 'Business', 'Close Nearby', '+961 777666', 'Business Analyst', 'I\'m a simple woman trying to make my way in the universe', 'Whose your Favorite Superhero?', 'batman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
