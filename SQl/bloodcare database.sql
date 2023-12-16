-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 07:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `id` int(11) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`id`, `BloodGroup`) VALUES
(1, 'A+'),
(2, 'A-'),
(5, 'AB+'),
(6, 'AB-'),
(3, 'B+'),
(4, 'B-'),
(7, 'O+'),
(8, 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `FullName`, `Gender`, `BloodGroup`, `dob`, `age`, `MobileNumber`, `EmailId`, `city`, `pincode`, `password`) VALUES
(1, 'sanjay parghi', 'Male', 'A+', '2001-01-21', 22, 9658325689, 'bayigo9510@bixolabs.com', 'Rajkot', 360001, '0eca236992893f5fb906fedbe2075720'),
(2, 'Bhavik Barot', 'Male', 'A-', '2000-01-01', 23, 9924006271, 'diksh9510@bixolabs.com', 'Mehsana', 384001, 'Aa22@qwe'),
(3, 'jaydev darodkar', 'Male', 'A+', '2000-01-19', 23, 8200755495, 'lopeva9484@bustayes.com', 'Ahmedabad', 380001, 'vF6X)rj:'),
(5, 'PARAG', 'Male', 'A+', '1995-11-27', 27, 8758207987, 'lopeva9484@bustayes.com', 'Ahmedabad', 380001, '($f)A73B'),
(6, 'Saurabh M Shah', 'Male', 'A+', '2000-11-27', 23, 9978985916, 's3413@boulderback.com', 'Ahmedabad', 320008, 'L2vT#)k+'),
(7, 'Dr Subodh Kr Bishnoi', 'Male', 'B+', '1993-11-27', 33, 9428246129, 'ranala7979@kxgif.com', 'Ahmedabad', 320008, '3e)9+rRa'),
(8, 'Bankim Radadiya', 'Male', 'B+', '2000-11-27', 23, 9898458641, 'sepax73810@kxgif.com', 'Ahmedabad', 320008, '3e)9+rRa'),
(9, 'Shivam Gaur', 'Male', 'B+', '1998-11-26', 25, 7878307613, 'ivan7576@feasthearth.uno', 'Ahmedabad', 320008, '%^rvj5yP'),
(10, 'Vineet', 'Male', 'O+', '2000-11-27', 23, 8733883344, 'happinik13@nedmoh.cloud', 'Ahmedabad', 380003, 'vP3Gtm^J'),
(11, 'POOJA KANADE', 'Female', 'O+', '2002-11-26', 20, 9909985865, 'ivani1992@muahetbienhoa.com', 'Ahmedabad', 380013, 'p6$yt7Ut'),
(12, 'Nilesh chaudhari', 'Male', 'O+', '1998-11-13', 25, 8758554187, 'faxobik754@bixolabs.com', 'Ahmedabad', 380008, 'KAL6c$ad'),
(13, 'Hiranya Vyas', 'Male', 'AB+', '2004-11-20', 19, 9825433104, 'maschasuprunuk@netveplay.com', 'Ahmedabad', 320008, 'u&^6sm$D'),
(14, 'Ajeet Kumar', 'Male', 'AB+', '1999-11-08', 24, 9889009470, 'merlotz@nasser85u983.online', 'Ahmedabad', 380003, '4Z5@5RLd'),
(15, 'Atul Modi', 'Male', 'AB+', '1997-11-06', 26, 8128992878, 'vosip@tonycross.space', 'Ahmedabad', 380008, 'vF6X)rj:'),
(16, 'Rajan Sudhirkumar Mehta', 'Male', 'A-', '1999-11-06', 24, 9825098018, 'karancooldude2005@vaneroln.club', 'Ahmedabad', 380013, 'vG9MR!26'),
(17, 'Rupal Jaydeep Maheta', 'Male', 'A-', '1997-11-15', 26, 7840068770, 'flyerny1@goreng.xyz', 'Ahmedabad', 380008, 'NBkg%SuV12'),
(18, 'Dharmendra Singh Yadav', 'Male', 'B-', '1999-11-08', 24, 9662736644, 'mcgee313@gmailwe.com', 'Ahmedabad', 380003, 'A@*&dJk4'),
(19, 'Gaurang Soni', 'Male', 'B-', '2004-11-10', 19, 9601126263, 'faxobik754@bixolabs.com', 'Ahmedabad', 380003, 'vF6X)rj:'),
(20, 'mustansir a latiwala', 'Male', 'O-', '1999-11-01', 24, 9825557399, 'meisterlark@underwearisoverrated.com', 'Ahmedabad', 380008, 'A@*&dJk4'),
(21, 'Nisha Mihir Nayar', 'Male', 'O-', '1998-11-23', 25, 8849414904, '1jaybird1@jfdesignandweb.com', 'Ahmedabad', 320008, '7rT%6Qy#'),
(22, 'TUSHAR PAREKH', 'Male', 'AB-', '1999-11-01', 24, 9680526652, 'wwffhukilo@carwebtoday.com', 'Ahmedabad', 380013, '%4jZDuvU'),
(23, 'ATUL SHAH', 'Male', 'AB-', '2001-11-01', 22, 9725024511, 'sarvatdinov2011@adhya.xyz', 'Ahmedabad', 380008, '3DKEMPzu'),
(24, 'Anil m parmar', 'Male', 'A+', '1998-11-07', 25, 7861067248, 'faxobik754@bixolabs.com', 'Amreli', 365601, '^TWUMdYK12'),
(25, 'hariyani ketan ghansham bhai', 'Male', 'A+', '1996-11-13', 27, 6355514737, 'andrhall@feasthearth.uno', 'Amreli', 365601, 'r$J**4QV12'),
(26, 'gaurang kanpariya', 'Male', 'A-', '1996-11-01', 27, 9428124154, 'diksh9510@bixolabs.com', 'Amreli', 365601, 'Aa22@qwe'),
(27, 'Amreliya Sagar', 'Male', 'A-', '1999-11-07', 24, 6354978002, 'doral4671@47tiger.site', 'Amreli', 365601, 'Krj9Ff#R'),
(28, 'dipen parmar', 'Male', 'B+', '1999-11-13', 24, 9601159494, 'olgasina@awbleqll.xyz', 'Amreli', 365601, '=q7aGrmY'),
(29, 'CHETAN M CHAUHAN', 'Male', 'B-', '1999-11-09', 24, 9913999919, 'kharzhak@newnew.cloud', 'Amreli', 365601, '9hTHmCvr'),
(30, 'Raju Vaghela', 'Male', 'AB+', '1999-11-02', 24, 9265280572, 'damjanherman@wensenwerk.nl', 'Amreli', 365601, 'kq6LUxVR'),
(31, 'TUSHAR D JOSHI	', 'Male', 'AB-', '1999-11-02', 24, 9426422962, 'apus@jcards.art', 'Amreli', 365601, 'Q#=$4G&N3q@'),
(32, 'Harsukhbhai Sorthiya', 'Male', 'O+', '2000-11-13', 23, 9879247620, 'donsempron@maryland-college.cf', 'Amreli', 365601, '=Q32U%mF'),
(33, 'JAYVEER PRATAPBHAI VALA', 'Male', 'O-', '1998-11-09', 25, 9909746286, 'hhec@abogadosybienesraices.com', 'Amreli', 365601, 'vF6X)rj:'),
(34, 'kaushik karathiya	', 'Male', 'A+', '2000-11-02', 23, 9998256070, 'snoopybg@drakemarketingagency.com', 'Anand', 388001, 'xf4&ndY^'),
(35, 'Nikunjkumar dineshbhai patel', 'Male', 'A-', '2004-11-15', 19, 9427175015, 'lopeva9484@bustayes.com', 'Anand', 388001, 'vF6X)rj:'),
(36, 'Jignesh N Kuchara', 'Male', 'B+', '2002-11-08', 21, 9714152670, 'anaconda76@ezwxwvsf.xyz', 'Anand', 388001, 'J6XXezT2'),
(37, 'Pinkalkumar jayeshbhai Patel', 'Male', 'B-', '1995-11-07', 28, 9998568433, 'anthea0629@newbreedapps.com', 'Anand', 388001, 'vF6X)rj:'),
(38, 'Dilip Haribhai Prajapati', 'Male', 'AB+', '2000-11-08', 23, 7600830990, 'kamau32@hebbousha.online', 'Anand', 388001, 'Yv&yWagq2'),
(39, 'Tejas Modha', 'Male', 'AB-', '2001-11-10', 22, 9998892998, 'faxobik754@bixolabs.com', 'Anand', 388001, '^qE#tyyn1'),
(40, 'Kanwar Lal Suthar', 'Male', 'O+', '2000-11-09', 23, 7976263475, 'letitrid1@fintechistanbul.net', 'Anand', 388001, '^qE#tyyn1'),
(41, 'Nikulsinh j jadav', 'Male', 'O-', '2001-11-16', 22, 9427623648, 'letitrid1@fintechistanbul.net', 'Anand', 388001, 'zJbvta6H1'),
(42, 'Harshad patel', 'Male', 'A+', '2001-11-06', 22, 9427086120, 'uhovertka@joshtucker.net', 'Deesa', 385535, 'aEDg*ZQm1'),
(43, 'Ajay Kumar Bhatli', 'Male', 'A+', '1999-11-08', 25, 9712666709, 'anezlobin@netmon.ir', 'Bharuch', 392001, 'vF6X)rj:'),
(44, 'SUNIL PATEL', 'Male', 'A+', '2000-11-18', 23, 9426210039, 'faxobik754@bixolabs.com', 'Bhavnagar', 364001, 'vF6X)rj:'),
(45, 'PRAGNESH RAJENDRAKUMAR PARMAR', 'Male', 'A+', '1999-11-01', 24, 9428907133, 'spereveignat1987ki@zubairnews.com', 'Dahod', 389151, '2W@*8m*='),
(46, 'Tanvi Chaudhari', 'Female', 'A+', '2000-11-21', 23, 9714298073, 'gricomet@smanual.shop', 'Dahegam', 382305, 'vF6X)rj:'),
(47, 'Amit Kanjia', 'Male', 'A+', '2000-11-22', 23, 9879402898, 'demirdzhiartem@mailpremium.net', 'Jamnagar', 361001, 'vF6X)rj:'),
(48, 'RATHODKAILASH ARVIND BHAI', 'Male', 'A+', '2000-10-31', 23, 6354674313, 'beskiv@sajutadollars.com', 'Junagadh', 388001, 'H9a%z2d%'),
(49, 'RITESH PARSHOTTAMBHAI MAVANI', 'Male', 'A+', '1993-11-13', 30, 9824334785, 'powerluis@kasmabirader.com', 'Bhuj', 370001, 'hXzex#=a12'),
(50, 'patel parth ', 'Male', 'A+', '1998-11-01', 25, 8866556960, 'jhoffman@mlmail.top', 'Kheda', 387411, 'EkCGZx%f1'),
(51, 'KETAN CHAUHAN', 'Male', 'A+', '1997-11-08', 26, 9898143771, 'glyuktik@todtdeke.xyz', 'Mehsana', 384001, 'TRWu&U7Q'),
(52, 'Dipesh Chaudhari', 'Male', 'A+', '2000-11-08', 23, 7285841578, 'doktor987@newbreedapps.com', 'Navsari', 396421, '=8p&g&hT1'),
(53, 'Nirmit Desai', 'Male', 'A+', '1999-11-15', 24, 9824062706, 'thirard94@eglobalexpertise.com', 'Godhra', 389001, 'WP7hSwy61'),
(54, 'Rajesh Parmar', 'Male', 'A+', '1999-10-31', 24, 9427683346, 'andymartone@mymassages.online', 'Patan', 384265, 'F%F9DHZB1@a'),
(55, 'Bharat sondarva', 'Male', 'A+', '2001-11-24', 22, 9879289963, 'ufg8@nedammh.tech', 'Porbandar', 360575, '%!kRkG*h1'),
(56, 'Dipakbhai Kantariya', 'Male', 'A+', '2004-11-05', 19, 9824422000, 'evvdo@vywbltgr.xyz', 'Rajkot', 360001, 'qnVDtfMR1Q'),
(57, 'Mayur Solanki', 'Male', 'A+', '2001-11-08', 22, 9714769150, 'banicutie27@alphadeutsch.com', 'Modasa', 383315, '=wMsKETF1'),
(58, 'Mayur Solanki', 'Male', 'A+', '2001-11-08', 22, 9714769150, 'banicutie27@alphadeutsch.com', 'Modasa', 383315, '=wMsKETF1'),
(59, 'Ganesh Badgujar	', 'Male', 'A+', '2000-11-09', 23, 8780200828, 'homerun69@thresholdpc.com', 'Surat', 335009, 'N*!WQLfN1'),
(60, 'અસરફભઆઈ મહમંદ ભાઈ ચૌહાણ', 'Male', 'A+', '1992-11-09', 31, 9898171442, 'nkumar@maintenances.us', 'Surendranagar', 363001, 'qSNkZ*V81'),
(61, 'Pratikkumar rameshchandra sara', 'Male', 'A+', '1995-11-07', 28, 9904966677, 'emmens44@peluang-vip.com', 'Dang', 394730, 'F@fmXhk6'),
(62, 'Bhavesh Desai', 'Male', 'A+', '1998-11-22', 25, 8424063115, 'namrata@pojokcenter.tech', 'Vadodara', 396001, '2ckGMymz'),
(63, 'Thorat manish Ramanbhai Thorat', 'Male', 'A+', '1996-12-26', 27, 9904340131, 'natashayi@beautyandlookbar.com', 'Valsad', 396001, 'W8%sU$yh1'),
(64, 'sanjay parghi', 'Male', 'A+', '2023-11-27', 18, 7795703014, 'faxobik754@bixolabs.com', 'Ahmedabad', 365601, 'vF6X)rj:'),
(65, 'Rakesh patel', 'Male', 'O-', '2023-12-08', 25, 9825792010, 'annemdcruz@progressive-systems.net', 'Mehsana', 384001, 'jV%Em3+k'),
(66, 'jay panchal', 'Male', 'O-', '2023-12-06', 23, 9737797046, 'stanqwer@jppemail.xyz', 'Mehsana', 384001, 'PXe#4DuJ'),
(67, 'Ajay', 'Male', 'O-', '2023-12-08', 20, 9998221400, 'holiwom568@gearstag.com', 'Deesa', 385535, 'E6Fme&$*b');

-- --------------------------------------------------------

--
-- Table structure for table `quickmessage`
--

CREATE TABLE `quickmessage` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `MobailNo` bigint(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quickmessage`
--

INSERT INTO `quickmessage` (`id`, `name`, `MobailNo`, `Email`, `Message`) VALUES
(1, 'Arth', 9658325689, 'lopeva9484@bustayes.com', 'Can I donate blood if I have recently had a vaccination?'),
(2, 'tony', 9316018998, 'bayigo9510@bixolabs.com', 'ek bar me kitna blood donate hota hai'),
(3, 'Meet', 7795703014, 'faobik754@bixolabs.com', 'How long does the donation process take?'),
(4, 'Raj', 9658325689, 'tohofat752@inkiny.com', 'What should I do before donating blood?'),
(5, 'Roshan Harish', 2655536720, 'diksh9510@bixolabs.com', 'Can I donate if I\'m on medications?'),
(6, 'Reena Amrit', 7792198256, 'diksh9510@bixolabs.com', 'Can I donate if I have a cold or flu?'),
(7, 'Archana Seema', 8646890727, 'diksh9510@bixolabs.com', 'Will I feel weak or dizzy after donating?'),
(8, 'Arti Ramana', 7076259859, 'diksh9510@bixolabs.com', 'How is donated blood used?'),
(9, 'Anile Sharma', 7795703014, 's3413@boulderback.com', 'What tests are performed on donated blood?'),
(10, 'Rajesh Purohit', 9658325689, 's3413@superhouse.vn', ' How is donated blood used?'),
(11, 'Ninad', 6378570280, 'lopeva@bustayes.com', 'ek bar me kitna blood donate hota hai'),
(12, 'ramesh', 9079555558, 'halkk999@sgetrhg6.shop', 'Can I donate blood if I have recently had a vaccination?'),
(13, 'Tony', 7795703014, 'yedabe9737@miqlab.com', 'Can I donate blood if I have recently had a vaccination?'),
(14, 'azad', 7795703014, 'holiwom568@gearstag.com', 'Can I donate blood if I have recently had a vaccination?');

-- --------------------------------------------------------

--
-- Table structure for table `recipient`
--

CREATE TABLE `recipient` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipient`
--

INSERT INTO `recipient` (`id`, `FullName`, `Gender`, `BloodGroup`, `age`, `MobileNumber`, `email`, `city`, `pincode`, `password`) VALUES
(1, 'rajesh khattar', 'Male', 'O-', 36, 9120844228, 'faxobik754@bixolabs.com', 'Botad', 364710, 'vF6X)rj:'),
(6, 'Sneha Gill', 'Female', 'B-', 18, 2086213307, 'faobik754@bixolabs.com', 'Ahmedabad', 320008, '?pdr3Cu6'),
(8, 'Kalpana Badami', 'Female', 'AB+', 26, 7795703014, 'aga66na@gulizce.com', 'Porbandar', 360575, '!GsgL9K*'),
(9, 'Manish Shenoy', 'Male', 'AB+', 25, 8979555558, 'wolkxiryrg@truesoldiershop.com', 'Patan', 384265, '55T#Pmy7'),
(10, 'Indira Ben', 'Female', 'B-', 20, 8200755495, 'moctez@fabtours.live', 'Dahod', 389151, '*WSvG7^B12'),
(11, 'Nileshji J Thakor chekhala kankarej', 'Male', 'A+', 27, 9316018998, 'lenz2010@1000rebates.stream', 'Deesa', 385535, 'D2#w7K7Tf');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `MobileNumber` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `MobileNumber`) VALUES
(1, 'Jigar Yadav', 8124825148),
(2, 'Harshal Nagori', 9066177907),
(3, 'Ramesh Limbachiya', 9065170128),
(4, 'Ujjwal Vaghela', 9827431167),
(5, 'Jiwan Godhania', 9316478189);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`) VALUES
(1, 'Admin', 'admin', 9016018998, 'admin@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`BloodGroup`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bgroupfk` (`BloodGroup`);

--
-- Indexes for table `quickmessage`
--
ALTER TABLE `quickmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipient`
--
ALTER TABLE `recipient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `BloodGroup_fk` (`BloodGroup`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `quickmessage`
--
ALTER TABLE `quickmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `recipient`
--
ALTER TABLE `recipient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `bgroupfk` FOREIGN KEY (`BloodGroup`) REFERENCES `bloodgroup` (`BloodGroup`);

--
-- Constraints for table `recipient`
--
ALTER TABLE `recipient`
  ADD CONSTRAINT `BloodGroup_fk` FOREIGN KEY (`BloodGroup`) REFERENCES `bloodgroup` (`BloodGroup`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
