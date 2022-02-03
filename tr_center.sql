-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 05:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tr_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `detail`, `image`) VALUES
(1, 'تطبيقات الويب', 'نظراً للتقدم المتسارع في استخدام الحاسوب كوسيلة رئيسية لتداول المعلومات في المجال...', 'image/card1.jpg'),
(2, 'التصميم الجرافيكي', 'تتميز تخصص التصميم الجرافيكي Graphic Design بارتباطه الوثيق بتكنولوجبا المعلومات الحدي...\r\n', 'image/card2.jpg'),
(3, 'تطبيقات الموبايل ', 'تعتبر الهواتف الذكية في الوقت الحالي من الحاجات الأساسية والمقومات اليومية في حياتنا', 'image/card3.jpg'),
(14, 'ssssssssssss', 'ddddddddddddddwa', 'image/ddddddddddddddddddddddd.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `head` varchar(11) NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `head`, `detail`) VALUES
(1, 'اتصل', 'hhhhhhhhhhhhhhhhhhhhhh'),
(2, 'عن المركز', 'يعتبر المركز الفلسطيني للتعليم التقني أحد المؤسسات التي تقدم التعليم المهني الصناعي في محافظات الوطن. يوجد في المركز ثلاث تخصصات رئيسية هي: تطبيقات الويب، تطبيقات الموبايل، التصميم الجرافيكي. والعمل جاري لتوفير دعم وفتح تخصصات جديدة تخدم المحافظات. حرصاً من وزارة التربية والتعليم العالي على تطوير التعليم المهني والتقني في فلسطين، فإنه قد تم تبني استراتيجية وطنية للتعليم والتدريب المهني والتقني ، بحيث يكون هذا النظام كفؤاً، وفعالاً ،ومرناً، ومرتبطاً باحتياجات سوق العمل الفلسطينية حيث يجري العمل على 4 محاور رئيسية هي : تطوير الأنظمة، وتطوير المنهاج، وتطوير الموارد البشرية والمادية . تكون الدراسة في المركز سنتان ، ويكون الدوام 40% نظري و 60% عملي ويشترط في المتقدمين للدراسة ان يكون الطالب ناجحا في الصف العاشر ولا يزيد عمره في أول سنة دراسية عن 20 عاماً وأن يجتاز فحص القبول قي المدرسة . يتقدم الطالب قي نهاية السنة الدراسية الثانية لامتحان شهادة الدراسة الثانوية العامة/الفرع الصناعي. ويحق للطال الالتحاق بالجامعات والمعاهد العليا لأو مزاولة مهنة في سوق العمل...\r\nالمركز الفلسطيني للتعليم التقني');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `image` text NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `detail`, `image`, `data`) VALUES
(5, 'تتتتتتتتتتتتتت', 'ننننننننننن', 'image/istock.jpg', '2022-01-07'),
(6, 'للللللللل', 'نننننننن', 'image/photo.jfif', '2022-01-18'),
(10, 'nnnnnnnn', 'dddddddddda', 'image/hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhloooo.png', '2022-02-22'),
(12, 'ooooo7', ' vvvvvvvvv', 'image/ddddddddddddddddddddddd.png', '2022-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `depnum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `age`, `address`, `phone`, `depnum`) VALUES
(1, 'nebal abu asad ', 'salmaabuasad1229@gmail.com ', 78, 'شارع الاقصى ', 522525, 'الجرافيكي'),
(9, 'jjjjjjjjjjjjjj      ', 'nebalabuasad1229@gmail.com      ', 4, 'jfjjfjjfjf      ', 599810249, 'kkkkkkkkkkc'),
(30, 'نيبال', ' nebalabuasad1229@gmail.com', 45, 'شارع الاقصى', 522525, 'الجرافيكي');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'nebal', '123'),
(2, 'admin', '456'),
(6, 'saja.a', '7896');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
