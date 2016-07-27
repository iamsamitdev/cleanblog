-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2016 at 06:17 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cleanblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(5) NOT NULL,
  `author` varchar(50) NOT NULL,
  `post_date` date NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_name` varchar(150) NOT NULL,
  `post_status` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author`, `post_date`, `post_title`, `post_content`, `post_name`, `post_status`) VALUES
(1, 'anurak@gmail.com', '2016-07-27', 'New groups may be dynamically added during the editor and plugin initialization', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />&nbsp;</p>', 'new-groub-dynamic', 0),
(2, 'anurak@gmail.com', '2016-07-27', 'ข้อกำหนดในการให้บริการของ Google', '<p><span style="color:#b22222"><strong>ยินดีต้อนรับสู่ Google!</strong></span></p>\r\n\r\n<p>ขอขอบคุณที่ใช้ผลิตภัณฑ์และบริการของเรา (&ldquo;บริการ&rdquo;) บริการนี้จัดหาโดย Google Inc. (&ldquo;Google&rdquo;) ซึ่งตั้งอยู่ที่ 1600 Amphitheatre Parkway, Mountain View, CA 94043, United States</p>\r\n\r\n<p>การใช้บริการของเราถือเป็นการยอมรับข้อกำหนดนี้ โปรดอ่านอย่างละเอียด</p>\r\n\r\n<p>บริการของเรามีความหลากหลายมาก ในบางครั้งจึงอาจมีเงื่อนไขหรือข้อกำหนดเพิ่มเติมเฉพาะในส่วนของผลิตภัณฑ์นั้นๆ (รวมทั้งข้อกำหนดเรื่องอายุของผู้ใช้บริการ) โดยเราจะแจ้งข้อกำหนดเพิ่มเติมไปกับบริการที่เกี่ยวข้อง และข้อกำหนดเพิ่มเติมเหล่านั้นถือว่าเป็นส่วนหนึ่งของข้อตกลงระหว่างคุณกับเราหากคุณใช้บริการนั้นๆ</p>\r\n\r\n<p><strong>การใช้บริการของเรา</strong></p>\r\n\r\n<p>คุณต้องปฏิบัติตามนโยบายใดๆ ที่มีต่อคุณภายในบริการนี้</p>\r\n\r\n<p>ห้ามใช้บริการของเราโดยมิชอบ ตัวอย่างเช่น ไม่แทรกแซงบริการของเราหรือพยายามที่จะเข้าถึงโดยใช้วิธีการนอกเหนือไปจากอินเทอร์เฟซและคำแนะนำที่เราให้ไว้ คุณต้องใช้บริการของเราเฉพาะตามที่กฎหมายอนุญาต รวมทั้งกฎหมายและกฎระเบียบในการควบคุมการส่งออกและการส่งออกซ้ำที่บังคับใช้ เราอาจระงับหรือหยุดการให้บริการแก่คุณหากคุณไม่ปฏิบัติตามข้อกำหนดและนโยบายของเรา หรือหากเราตรวจสอบพบพฤติกรรมที่น่าสงสัยว่าไม่ถูกต้อง</p>\r\n\r\n<p>การใช้บริการของเราไม่ได้ทำให้คุณเป็นเจ้าของสิทธิในทรัพย์สินทางปัญญาใดๆ ในบริการหรือเนื้อหาที่คุณเข้าถึง คุณไม่สามารถใช้เนื้อหาในบริการของเรา เว้นแต่ได้รับการอนุญาตจากเจ้าของเนื้อหาดังกล่าว หรือสามารถกระทำได้โดยกฎหมาย ข้อกำหนดนี้มิได้ให้สิทธิแก่คุณในการใช้การสร้างแบรนด์หรือโลโก้ใดๆ ที่ใช้ในบริการของเรา ห้ามนำออก ปิดบัง หรือเปลี่ยนแปลงประกาศทางกฎหมายใดๆ ที่แสดงในหรือกับบริการของเรา</p>\r\n', 'google-policy', 0),
(3, 'anurak@gmail.com', '2016-07-27', 'ถึงเวลาเปลี่ยนมือ บ. King I.T. ยุติการจำหน่ายผลิตภัณฑ์ TP-LINK', '<p>บริษัท คิงส์ ไอ.ที. จำกัด (บริษัท คิงส์ อินเทลลิเจ้นท์ เทคโนโลยี จำกัด) ประกาศยุติการจำหน่ายสินค้าแบรนด์ TP-LINK อย่างเป็นทางการ อ้างอิงจากโพสต์บนหน้าเพจวันนี้ แต่ยังรับผิดชอบการรับประกันแบบ Lifetime ของตนอยู่ครับ</p>\r\n\r\n<p>ในโพสต์เล่าถึงที่มาที่ไปของการเปลี่ยนแปลงองค์กรของ TP-LINK จากจีน ที่มาตั้งสำนักงานในประเทศไทยเองภายหลัง และแต่งตั้งตัวแทนขายเพิ่มนอกเหนือสัญญาในเวลาต่อมา จนเกิดความขัดแย้งกับบริษัทคิงส์ฯ ทั้งด้านนโยบายการรับประกันและการกำหนดราคา จึงต้องยุติการจัดจำหน่ายสินค้าแบรนด์นี้</p>\r\n', 'tp-link-change', 0),
(5, 'anurak@gmail.com', '2016-07-27', 'Facebook โอเพ่นซอร์สกล้อง Surround 360 แล้ว', '<p>Facebook เคยเปิดตัวกล้อง Surround 360 เมื่อช่วงเดือนเมษายนที่ผ่านมา และจะเปิดซอร์สโค้ดให้ผู้ที่สนใจสามารถเข้าไปดาวน์โหลดเพื่อศึกษาวิธีสร้างกล้อง, ติดตั้งและปรับแต่งฮาร์ดแวร์และซอฟต์แวร์ตามความต้องการ</p>\r\n\r\n<p>อุปกรณ์ที่ต้องการของ Surround 360 นี้มีมูลค่าอยู่ที่ประมาณ 3 หมื่นดอลลาร์ ซึ่งมีสิ่งสำคัญคือกล้องจำนวน 17 ตัวที่แตกต่างกัน ตั้งแต่กล้องปกติไปจนถึงกล้องเลนส์ fisheye โดยทาง Facebook ได้สุ่มวิศวกรขึ้นมาคนหนึ่งมาเพื่อสร้างตัวกล้องนี้จากคำแนะนำที่เปิดให้ผู้ใช้ทั่วไป พบว่าใช้เวลาเพียงแค่ประมาณ 4 ชั่วโมงเท่านั้น</p>\r\n\r\n<p>ถ้ามองในมุมผู้ใช้ทั่วไป Surround 360 ของ Facebook นั้นถือว่าค่อนข้างแพงมากเมื่อเทียบกับกล้อง 360Fly หรือ Richo Theta ที่มีราคาประมาณ 400 ดอลลาร์เท่านั้น แต่ฝั่งผู้ใช้ระดับโปรก็มีทางเลือกอื่นนอกจาก Surround 360 คือ Nokia Ozo ราคา 6 หมื่นดอลลาร์, GoPro Odyssey ราคา 15,000 ดอลลาร์ หรือรอ Lytro Immerge</p>\r\n\r\n<p>สำหรับผู้ที่สนใจรายละเอียดของตัวกล้อง Surround 360 สามารถอ่านได้จากข่าวเก่า&nbsp;ส่วนซอร์สโค้ดสามารถดูได้จาก</p>\r\n', 'facebook-surround-360', 0),
(6, 'anurak@gmail.com', '2016-07-27', 'แอพ Twitter บน Android เพิ่ม night mode ปรับสภาพแสงให้เหมาะกับที่มืด', '<p>Twitter ได้เพิ่มฟีเจอร์ใหม่ night mode หรือฟีเจอร์ปรับสภาพตัวแอพให้เข้ากับที่มืดนั่นเอง โดยเมื่อเลือกเปิด night mode แล้ว ตัวแอพ Twitter จะปรับให้ตัวแอพมีสีโทนมืดลง จากโทนสีหลักของแอพที่จะเป็นสีสว่างทำให้ผู้ใช้แสบตาเมื่อมองในที่มืด</p>\r\n\r\n<p>สำหรับฟีเจอร์ night mode นี้สามารถใช้งานได้แล้วบนแอพ Twitter สำหรับ Android โดยวิธีเปิดให้เปิด sidebar ออกมา จากนั้นกดปุ่มเปิด night mode ตัวแอพก็จะเปลี่ยนสีเป็นสีโทนมืดทันที ส่วน Twitter บน iOS ยังไม่สามารถใช้ฟีเจอร์นี้ได้</p>\r\n', 'twitter-inght-mode', 0),
(7, 'anurak@gmail.com', '2016-07-27', 'ไมโครซอฟท์เปิดตัว Focuses Inbox ฟีเจอร์คัดแยกเมลตามความสำคัญของ Outlook', '<p>ไมโครซอฟท์เพิ่มฟีเจอร์ใหม่ให้ Outlook โดยเป็นระบบการกรองอีเมลแยกตามความสำคัญ ใช้ชื่อว่า<strong>Focused Inbox</strong></p>\r\n\r\n<p>Focuses Inbox จะคล้ายกับฟีเจอร์แยกแท็บของ Gmail&nbsp;เพียงแต่ของ Gmail คัดแยกเมลออกเป็น 4 แท็บ (Priority/Social/Promotions/Updates) แต่ของ Outlook จะแยกเป็นแค่ 2 แท็บคือ Focused (สำคัญ) และ Other (ไม่สำคัญ) การทำงานของมันจะเป็นไปโดยอัตโนมัติ และสามารถเรียนรู้จากพฤติกรรมของผู้ใช้ได้</p>\r\n\r\n<p>ฟีเจอร์นี้มาแทน&nbsp;Clutter&nbsp;ฟีเจอร์กรองเมลลงโฟลเดอร์ที่ Outlook เคยมีอยู่แล้ว โดย Focuses Inbox จะไม่แยกเมลลงโฟลเดอร์ให้ แต่แยกเป็นสองแท็บ เพื่อให้เราควบคุมอีเมลของตัวเอง</p>\r\n', 'microsoft-focuses-inbox', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(5) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `picprofile` varchar(50) NOT NULL,
  `dateregis` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `password`, `tel`, `picprofile`, `dateregis`, `status`) VALUES
(1, 'Samit Koyom', 'samit@gmail.com', '25d55ad283aa400af464c76d713c07ad', '025999897989', '', '2016-07-26', 1),
(2, 'Anan', 'anan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '025989789797', '', '2016-07-26', 1),
(3, 'John Doe', 'john@gmail.com', '410a4a51e1516440e25d0af8e3665a61', '025998789', '', '2016-07-26', 1),
(4, 'Samit Koyom', 'samitkoyom@gmail.com', 'd846e38f1196eb61a7b71e1cd7a913e4', '026599899', '', '2016-07-26', 1),
(5, 'Anurak Johee', 'anurak@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0895778987', '', '2016-07-27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
