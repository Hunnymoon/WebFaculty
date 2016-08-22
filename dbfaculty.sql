-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- เวอร์ชั่นของเซิร์ฟเวอร์: 5.6.12-log
-- รุ่นของ PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `dbfaculty`
--
CREATE DATABASE IF NOT EXISTS `dbfaculty` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbfaculty`;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbabout`
--

CREATE TABLE IF NOT EXISTS `tbabout` (
  `aboutId` int(11) NOT NULL AUTO_INCREMENT,
  `aboutDetail` text NOT NULL,
  PRIMARY KEY (`aboutId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- dump ตาราง `tbabout`
--

INSERT INTO `tbabout` (`aboutId`, `aboutDetail`) VALUES
(4, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:24:"<p>test About edit</p>\r\n";}'),
(3, 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:68:"<p>ทดสอบ เกี่ยวกับ แก้ไข</p>\r\n";}');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbacademic`
--

CREATE TABLE IF NOT EXISTS `tbacademic` (
  `academicId` int(11) NOT NULL AUTO_INCREMENT,
  `facultyId` int(11) NOT NULL,
  `academic` text NOT NULL,
  `academicTeacher` text NOT NULL,
  `academicDetail` text NOT NULL,
  PRIMARY KEY (`academicId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- dump ตาราง `tbacademic`
--

INSERT INTO `tbacademic` (`academicId`, `facultyId`, `academic`, `academicTeacher`, `academicDetail`) VALUES
(2, 1, 'Hospitality and Tourism', 'a:2:{s:7:"english";s:42:"<p>Hospitality and Tourism  Teacher</p>\r\n";s:8:"thailand";s:77:"<p>แก้ไข อาจารย์ ท่องเที่ยว</p>\r\n";}', 'a:2:{s:7:"english";s:37:"<p>edit Hospitality and Tourism</p>\r\n";s:8:"thailand";s:55:"<p>แก้ไข ท่องเที่ยว</p>\r\n";}'),
(3, 1, 'Business Administration', 'a:2:{s:8:"thailand";s:49:"<p>อาจารย์ บริหาร</p>\r\n";s:7:"english";s:47:"<p>Teacher&nbsp;<strong>business</strong></p>\r\n";}', 'a:2:{s:8:"thailand";s:45:"<p>บริหารธุรกิจ</p>\r\n";s:7:"english";s:19:"<p>business11</p>\r\n";}'),
(1, 1, 'Engineering', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:18:"<p>dgdfbhfgb</p>\r\n";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:31:"<p>&nbsp;Engineeringbbbbb</p>\r\n";}'),
(4, 1, 'Certificate Program', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:28:"<p>Certificate Teacher</p>\r\n";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:28:"<p>Certificate Program</p>\r\n";}');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbfaculty`
--

CREATE TABLE IF NOT EXISTS `tbfaculty` (
  `facultyId` int(11) NOT NULL AUTO_INCREMENT,
  `facultyName` text NOT NULL,
  `facultyAbout` text NOT NULL,
  PRIMARY KEY (`facultyId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- dump ตาราง `tbfaculty`
--

INSERT INTO `tbfaculty` (`facultyId`, `facultyName`, `facultyAbout`) VALUES
(1, 'International', '2222'),
(2, 'Business', '');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbnews`
--

CREATE TABLE IF NOT EXISTS `tbnews` (
  `newsId` int(11) NOT NULL AUTO_INCREMENT,
  `newsTitle` text NOT NULL,
  `newsDetail` text NOT NULL,
  `newsDate` text NOT NULL,
  `newsFile` text NOT NULL,
  PRIMARY KEY (`newsId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=75 ;

--
-- dump ตาราง `tbnews`
--

INSERT INTO `tbnews` (`newsId`, `newsTitle`, `newsDetail`, `newsDate`, `newsFile`) VALUES
(74, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:6:"dfbdfb";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:17:"<p>sbdfbdsf</p>\r\n";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:12:"03-July-2016";}', 'Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbnewsfile`
--

CREATE TABLE IF NOT EXISTS `tbnewsfile` (
  `newsfileExt` text NOT NULL,
  `newsfileFullpath` text NOT NULL,
  `newsfileId` int(11) NOT NULL AUTO_INCREMENT,
  `newsfileName` text NOT NULL,
  `newsfileSize` text NOT NULL,
  `newsId` int(11) NOT NULL,
  PRIMARY KEY (`newsfileId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- dump ตาราง `tbnewsfile`
--

INSERT INTO `tbnewsfile` (`newsfileExt`, `newsfileFullpath`, `newsfileId`, `newsfileName`, `newsfileSize`, `newsId`) VALUES
('.jpg', 'D:/wamp/www/test.com/International/upload/news/Chrysanthemum1.jpg', 43, 'Chrysanthemum1.jpg', '858.78', 74),
('.jpg', 'D:/wamp/www/test.com/International/upload/news/Hydrangeas.jpg', 44, 'Hydrangeas.jpg', '581.33', 74);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbproject`
--

CREATE TABLE IF NOT EXISTS `tbproject` (
  `projectId` int(11) NOT NULL AUTO_INCREMENT,
  `projectName` text NOT NULL,
  `projectDate` text NOT NULL,
  `projectTeacher` text NOT NULL,
  `projectType` text NOT NULL,
  PRIMARY KEY (`projectId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- dump ตาราง `tbproject`
--

INSERT INTO `tbproject` (`projectId`, `projectName`, `projectDate`, `projectTeacher`, `projectType`) VALUES
(15, 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:37:"พะ้พะ้พ แก้ไข";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:11:"30-May-2016";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:40:"หพเพะ้พะ แก้ไข";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:39:"บริการวิชาการ";}'),
(14, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:4:"tttt";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:11:"30-May-2016";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:3:"ttt";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:28:"Knowledge Management Project";}'),
(24, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:12:"test Project";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:12:"26-June-2016";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:12:"test Teacher";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:24:"Arts and Culture Project";}'),
(13, 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:15:"หกเหก";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:11:"30-May-2016";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:18:"หกดหกเ";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:75:"ทำนุบำรุงศิลปะและวัฒนธรรม";}'),
(25, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:12:"test Project";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:12:"26-June-2016";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:12:"test Teacher";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:24:"Arts and Culture Project";}'),
(10, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:2:"PJ";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:11:"30-May-2016";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:10:"Teacher PJ";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:24:"Arts and Culture Project";}'),
(11, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:3:"PJ1";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:11:"30-May-2016";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:3:"pj1";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:16:"Academic Project";}'),
(18, 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:21:"หกเกดเก";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:11:"31-May-2016";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:30:"เืดเืดเืืื";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:75:"ทำนุบำรุงศิลปะและวัฒนธรรม";}'),
(17, 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:22:"dfgdfg แก้ไข";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:11:"31-May-2016";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:23:"fdgdfgd แก้ไข";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:48:"การจัดการความรู้";}'),
(26, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:15:"test Project333";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:12:"26-June-2016";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:15:"test Teacher333";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:24:"Arts and Culture Project";}'),
(28, 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:30:"โครงการคณะ";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:12:"26-June-2016";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:33:"ชื่ออาจารย์";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:48:"การจัดการความรู้";}');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbprojectfile`
--

CREATE TABLE IF NOT EXISTS `tbprojectfile` (
  `projectfileId` int(11) NOT NULL AUTO_INCREMENT,
  `projectfileExt` text NOT NULL,
  `projectfileFullpath` text NOT NULL,
  `projectfileName` text NOT NULL,
  `projectfileSize` text NOT NULL,
  `projectId` int(11) NOT NULL,
  PRIMARY KEY (`projectfileId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- dump ตาราง `tbprojectfile`
--

INSERT INTO `tbprojectfile` (`projectfileId`, `projectfileExt`, `projectfileFullpath`, `projectfileName`, `projectfileSize`, `projectId`) VALUES
(1, '.xlsx', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/job_Description_phung5.xlsx', 'job_Description_phung.xlsx', '284.08', 9),
(2, '.docx', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/Academic-ncu2.docx', 'Academic-ncu.docx', '16.39', 10),
(3, '.docx', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/Academic-ncu3.docx', 'Academic-ncu.docx', '16.39', 11),
(4, '.docx', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/Academic-ncu4.docx', 'Academic-ncu.docx', '16.39', 12),
(5, '.xlsx', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/job_Description_phung6.xlsx', 'job_Description_phung.xlsx', '284.08', 13),
(6, '.docx', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/Academic-ncu5.docx', 'Academic-ncu.docx', '16.39', 14),
(7, '.docx', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/Academic-ncu6.docx', 'Academic-ncu.docx', '16.39', 15),
(8, '.docx', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/Academic-ncu7.docx', 'Academic-ncu.docx', '16.39', 16),
(9, '.docx', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/Academic-ncu8.docx', 'Academic-ncu.docx', '16.39', 17),
(10, '.docx', 'D:/wamp/www/test.com/International/upload/project/Academic-ncu.docx', 'Academic-ncu.docx', '16.39', 18),
(11, '.pdf', 'D:/wamp/www/test.com/International/upload/project/BBA-Prospectus.pdf', 'BBA-Prospectus.pdf', '557.44', 25),
(12, '.pdf', 'D:/wamp/www/test.com/International/upload/project/BBA-Prospectus1.pdf', 'BBA-Prospectus.pdf', '557.44', 26),
(13, '.pdf', 'D:/wamp/www/test.com/International/upload/project/BBA-Prospectus2.pdf', 'BBA-Prospectus.pdf', '557.44', 27),
(14, '.pdf', 'D:/wamp/www/test.com/International/upload/project/BBA-Prospectus3.pdf', 'BBA-Prospectus.pdf', '557.44', 28),
(15, '.pdf', 'D:/wamp/www/test.com/International/upload/project/Engineering.pdf', 'Engineering.pdf', '392.4', 28);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbresearch`
--

CREATE TABLE IF NOT EXISTS `tbresearch` (
  `researchId` int(11) NOT NULL AUTO_INCREMENT,
  `researchName` text NOT NULL,
  `researchTeacher` text NOT NULL,
  `researchDate` text NOT NULL,
  `researchType` text NOT NULL,
  PRIMARY KEY (`researchId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- dump ตาราง `tbresearch`
--

INSERT INTO `tbresearch` (`researchId`, `researchName`, `researchTeacher`, `researchDate`, `researchType`) VALUES
(29, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:22:"Name Research Academic";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:7:"Teacher";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:11:"19-May-2016";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:17:"ResearchSynthesis";}'),
(32, 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:27:"เชียงใหม่";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:27:"เชียงใหม่";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:11:"19-May-2016";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:69:"การสังเคราะห์ผลงานวิจัย";}'),
(35, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:22:"Name Research Academic";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:7:"Teacher";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:11:"23-May-2016";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:13:"ResearchClass";}'),
(48, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:3:"555";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:3:"555";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:12:"26-June-2016";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:13:"ResearchClass";}'),
(46, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:3:"333";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:3:"333";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:12:"26-June-2016";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:17:"ResearchSynthesis";}'),
(44, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:4:"test";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:4:"test";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:12:"26-June-2016";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:16:"ResearchAcademic";}'),
(42, 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:63:"ผลงานวิจัยในชั้นเรียน";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:67:"ผลงานวิจัยในชั้นเรียน2222";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:11:"27-May-2016";}', 'a:2:{s:7:"english";s:0:"";s:8:"thailand";s:63:"ผลงานวิจัยในชั้นเรียน";}'),
(43, 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:5:"dfdhd";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:25:"test Research Academic   ";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:12:"06-June-2016";}', 'a:2:{s:8:"thailand";s:0:"";s:7:"english";s:17:"ResearchSynthesis";}');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbresearchflie`
--

CREATE TABLE IF NOT EXISTS `tbresearchflie` (
  `researchflieId` int(11) NOT NULL AUTO_INCREMENT,
  `researchId` int(11) NOT NULL,
  `researchflieName` text NOT NULL,
  `researchflieSize` text NOT NULL,
  `researchflieExt` text NOT NULL,
  `researchflieFullpath` text NOT NULL,
  PRIMARY KEY (`researchflieId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- dump ตาราง `tbresearchflie`
--

INSERT INTO `tbresearchflie` (`researchflieId`, `researchId`, `researchflieName`, `researchflieSize`, `researchflieExt`, `researchflieFullpath`) VALUES
(23, 46, 'BBA-Prospectus.pdf', '557.44', '.pdf', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/BBA-Prospectus2.pdf'),
(11, 29, 'thailand.pdf', '95.61', '.pdf', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/thailand6.pdf'),
(22, 45, 'BBA-Prospectus.pdf', '557.44', '.pdf', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/BBA-Prospectus1.pdf'),
(15, 32, 'dsc_9626.jpg', '111.1', '.jpg', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/dsc_96261.jpg'),
(19, 42, 'Academic-ncu.docx', '16.39', '.docx', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/Academic-ncu1.docx'),
(20, 43, 'Academic-ncu.docx', '16.39', '.docx', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/Academic-ncu9.docx'),
(21, 44, 'BBA-Prospectus.pdf', '557.44', '.pdf', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/BBA-Prospectus.pdf'),
(18, 35, 'thailand.pdf', '95.61', '.pdf', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/thailand7.pdf'),
(24, 47, 'BBA-Prospectus.pdf', '557.44', '.pdf', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/BBA-Prospectus3.pdf'),
(25, 47, 'Engineering.pdf', '392.4', '.pdf', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/Engineering.pdf'),
(26, 48, 'Engineering.pdf', '392.4', '.pdf', 'D:/wamp/www/test.com/International/upload/ResearchAcademic/Engineering1.pdf');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbslide`
--

CREATE TABLE IF NOT EXISTS `tbslide` (
  `slideId` int(11) NOT NULL AUTO_INCREMENT,
  `slideName` text NOT NULL,
  `slideFile` text NOT NULL,
  `slidePath` text NOT NULL,
  `slideStatus` text NOT NULL,
  PRIMARY KEY (`slideId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- dump ตาราง `tbslide`
--

INSERT INTO `tbslide` (`slideId`, `slideName`, `slideFile`, `slidePath`, `slideStatus`) VALUES
(1, 'test1', 'Disney-Family_WTP_Party-1024x683.jpg', '', 'show'),
(2, 'test2', 'WTP_Buffet-Cards_Clothespins-1024x683.jpg', '', 'show'),
(4, 'ttt', 'Disney-Family_Hunny-Pots-e1448956248363-1200x1200-1133685697802.jpg', 'D:/wamp/www/test.com/International/upload/slide/Disney-Family_Hunny-Pots-e1448956248363-1200x1200-1133685697802.jpg', 'show'),
(5, 'sdgsg', 'fordPooh.jpg', 'D:/wamp/www/test.com/International/upload/slide/fordPooh.jpg', 'show'),
(6, '0', '', '', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
