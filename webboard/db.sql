CREATE TABLE `reply` (
  `ReplyID` int(5) unsigned zerofill NOT NULL auto_increment,
  `QuestionID` int(5) unsigned zerofill NOT NULL,
  `CreateDate` datetime NOT NULL,
  `Details` text NOT NULL,
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY  (`ReplyID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `reply`
-- 

INSERT INTO `reply` VALUES (00001, 00016, '2012-03-22 16:13:18', 'Please visit www.thaicreate.com', 'plakrim');
INSERT INTO `reply` VALUES (00002, 00016, '2012-03-22 16:14:56', 'Thanks. www.thaicreate.com is great web for the php and mysql.', 'mr.win');

-- --------------------------------------------------------

-- 
-- Table structure for table `webboard`
-- 

CREATE TABLE `webboard` (
  `QuestionID` int(5) unsigned zerofill NOT NULL auto_increment,
  `CreateDate` datetime NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Details` text NOT NULL,
  `Name` varchar(50) NOT NULL,
  `View` int(5) NOT NULL,
  `Reply` int(5) NOT NULL,
  PRIMARY KEY  (`QuestionID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `webboard`
-- 

INSERT INTO `webboard` VALUES (00001, '2012-03-22 15:37:54', 'Help me here. I love it. But out of this.', 'Detail for : Help me here. I love it. But out of this.', 'cook chicken', 4, 1);
INSERT INTO `webboard` VALUES (00002, '2012-03-22 15:37:54', 'Why compare the data in the sql language. But if the numbers.	', 'Detail for : Why compare the data in the sql language. But if the numbers.	', 'koo_service', 0, 0);
INSERT INTO `webboard` VALUES (00003, '2012-03-22 15:37:54', 'The values ??in the Text box to use when removed from the List Box.', 'Detail for : The values ??in the Text box to use when removed from the List Box.	', 'Bee.', 0, 0);
INSERT INTO `webboard` VALUES (00004, '2012-03-22 15:37:54', 'Ask me how I have used it to my PHPExcel.', 'Detail for : Ask me how I have used it to my PHPExcel.	', 'PlaKriM.	', 0, 0);
INSERT INTO `webboard` VALUES (00005, '2012-03-22 15:37:54', 'You know me ... textbox code number is entered at the stem and then a textbox to another textbox and press tab to another.', 'Detail for : You know me ... textbox code number is entered at the stem and then a textbox to another textbox and press tab to another.	', 'mr.win', 0, 0);
INSERT INTO `webboard` VALUES (00006, '2012-03-22 15:37:54', 'How to convert date from year to year, then evaluate the current age.	', 'Detail for : How to convert date from year to year, then evaluate the current age.	', 'Jae', 0, 0);
INSERT INTO `webboard` VALUES (00007, '2012-03-22 15:37:54', 'I do asp.net but I have a question about my file. Why does the archive folder. Existing file, a single thread.', 'Detail for : I do asp.net but I have a question about my file. Why does the archive folder. Existing file, a single thread.	', 'pat.', 0, 0);
INSERT INTO `webboard` VALUES (00008, '2012-03-22 15:37:54', 'Thanks for the advice. I write code to search from the main square with the sell_id', 'Detail for : Thanks for the advice. I write code to search from the main square with the sell_id', 'sodong.', 0, 0);
INSERT INTO `webboard` VALUES (00009, '2012-03-22 15:37:54', 'I ask my friends. The wrapping. I want to separate words	', 'Detail for : I ask my friends. The wrapping. I want to separate words', 'noy', 0, 0);
INSERT INTO `webboard` VALUES (00010, '2012-03-22 15:37:54', 'I used to. Focus () the cursor to the last scene of the text in the textbox	', 'Detail for : I used to. Focus () the cursor to the last scene of the text in the textbox	', 'oasiis', 0, 0);
INSERT INTO `webboard` VALUES (00011, '2012-03-22 15:37:54', 'Help write the story to me in my OOP database postgresql	', 'Detail for : Help write the story to me in my OOP database postgresql	', 'minutes', 0, 0);
INSERT INTO `webboard` VALUES (00012, '2012-03-22 15:37:54', 'Config file that loads the message id, message value to a system call to load the config of this post.	', 'Detail for : Config file that loads the message id, message value to a system call to load the config of this post.	', 'ago', 0, 0);
INSERT INTO `webboard` VALUES (00013, '2012-03-22 15:37:54', 'Hope to see the Code during my search. Asp	', 'Detail for : Hope to see the Code during my search. Asp	', 'A', 0, 0);
INSERT INTO `webboard` VALUES (00014, '2012-03-22 15:37:54', 'The value in the textbox value from db where the textbox is in the dropdown to change the value from the db as well	', 'Detail for : The value in the textbox value from db where the textbox is in the dropdown to change the value from the db as well	', 'jum', 0, 0);
INSERT INTO `webboard` VALUES (00015, '2012-03-22 15:37:54', 'jquery ui datepicker calendar. Assistance in the form of redundancy	', 'Detail for : jquery ui datepicker calendar. Assistance in the form of redundancy	', 'Prairie', 0, 0);
INSERT INTO `webboard` VALUES (00016, '2012-03-22 16:12:24', 'How to use php and mysql database', 'Dear all,\r\nI am need to connect php to mysql database please suggest source code to tutorial.', 'mr.win', 4, 2);
