-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 01:49 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `post` text NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `url`, `title`, `post`, `date`) VALUES
(3, '5.jpg', 'http://localhost/admin/pictures/5.jpg', 'mlkmhdlhndhke', 'mhlrjkhljhlejeljgel', 'mrlkjhelkjeljhkelejkl'),
(4, 'cta.png', 'http://localhost/admin/pictures/cta.png', ' ggmslj/lajlnsgskg.', 'njnjk', 'mnsgjhsjkfna.kfhglwfwkhwlgakf'),
(5, '3.jpg', 'http://localhost/admin/pictures/3.jpg', 'Finally: How to Make Your Aggressively Straight Hair Hold a Curl', 'S tress has nowadays become a part of peopleâ€™s lives. To relieve this stress, people have greater ', '10 september 2019'),
(6, '8.jpg', 'http://localhost/admin/pictures/8.jpg', '8 Best Healthy Replacements for Refined Sugar', 'S tress has nowadays become a part of peopleâ€™s lives. To relieve this stress, people have greater than ever expectations from personal care services they get. If you are a Salon & Spa owner and think that your customer is  coming to your place only for a haircut, skin treatment, or just a manicure, you are wrong. People now consider their visit to the Salon & Spa as not just a beautification process but a spiritual getaway. You donâ€™t know which customer entered your Salon & Spa to get a pedicure and their only intent was to uplift their soul and feel good about themselves.  Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.  â€œHospitality is a very wide field to talk about, so in this article Iâ€™ll share few tips, small things that will make a big impact on your customersâ€™ experienceâ€. How your staff greets them, ambience of the waiting room, how well you understand customer requirements, and then precisely delivering what they wanted, everything is an experience.   How your staff greets them? The ambience of your Salon & Spa is crucial in making the first impression. The initial vibes that your customer feels when they enter is what stays with them. Itâ€™s important that you make these vibes as positive as possible as it has a sub-conscious effect on the customer.  Humans not Robots: Train your staff to treat customers like family. Take special care that their interaction with the customer isnâ€™t robotic and the overall interaction is as human as possible.  Remember â€˜The Nameâ€™: Regular customers donâ€™t like to enter a Salon & Spa and explain all their preferences again. Remember what they like, remember their dislikes, and most importantly, remember their name. Itâ€™s time that you build your Salon & Spa like a getaway for your customers whenever they feel stressed in life. Go an extra mile to make your customers feel great about themselves. Give your opinions on what is good for them and whatâ€™s not, but be a good listener.', '10 september 2019'),
(7, '35.jpg', 'http://localhost/admin/pictures/35.jpg', 'GUIDE TO AFFORDABLE, CRUELTY FREE SKINCARE SHOPPING AT WALMART', 'jeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeege', '11 september 2019'),
(8, '06207500_1580200319.jpg', 'http://localhost/admin/pictures/06207500_1580200319.jpg', 'Treatments for sunburn', '10001', 'mrlkjhelkjeljhkelejkl'),
(9, '06207500_1580200319.jpg', 'http://localhost/admin/pictures/06207500_1580200319.jpg', 'Treatments for sunburn', 'Apache also supports a huge range of modules of its own. In addition to the PHP module, the most important for your purposes as a web programmer are the modules that handle security. Other examples are the Rewrite module, which enables the web server to handle a varying range of URL types and rewrite them to its own internal requirements, and the Proxy module, which you can use to serve up often-requested pages from a cache to ease the load on the server. Later in the book, youâ€™ll see how to actually use some of these modules to enhance the features provided by the core technologies we cover. About Open Source Whether or not being open source is the reason these technologies are so popular has often been debated, but PHP, MySQL, and Apache are the three most commonly used tools in their categories. What can be said, though, is that being open source means that they have been developed in the community by teams of programmers writing the features they themselves want and need, with the original code available for all to see and change. Bugs can be found and security breaches can be prevented before they happen. Thereâ€™s another benefit: all these programs are free to use. Thereâ€™s no worrying about having to purchase additional licenses if you have to scale up your website and add more servers. And you donâ€™t need to check the budget before deciding whether to upgrade to the latest versions of these products. Bringing It All Together The real beauty of PHP, MySQL, JavaScript, and CSS is the wonderful way in which they all work together to produce dynamic web content: PHP handles all the main work on the web server, MySQL manages all the data, and the combination of CSS and JavaScript looks after web page presentation. JavaScript can also talk with your PHP code on the web server whenever it needs to update something (either on the server or on the web page). Without using program code, itâ€™s a good idea at this point to summarize the contents of this chapter by looking at the process of combining our core technologies into an everyday Ajax feature that many websites use: checking whether a desired username already exists on the site when a user is signing up for a new account. A good example of this can be seen with Gmail (see Figure 1-3). The steps involved in this Ajax process would be similar to the following:', '10 september 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
