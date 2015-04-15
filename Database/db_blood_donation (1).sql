-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2015 at 03:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_request`
--

CREATE TABLE IF NOT EXISTS `donation_request` (
`request_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `area` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `number` varchar(10) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lookup_details`
--

CREATE TABLE IF NOT EXISTS `lookup_details` (
  `lookup_value` varchar(500) NOT NULL,
  `lookup_parent_id` int(11) NOT NULL,
  `lookup_description` varchar(244) DEFAULT NULL,
`lookup_id` int(11) NOT NULL,
  `lookup_type_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=537 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lookup_details`
--

INSERT INTO `lookup_details` (`lookup_value`, `lookup_parent_id`, `lookup_description`, `lookup_id`, `lookup_type_id`) VALUES
('A+', 0, '', 11, 4),
('A-', 0, '', 12, 4),
('B+', 0, '', 13, 4),
('B-', 0, '', 14, 4),
('AB+', 0, '', 15, 4),
('AB-', 0, '', 16, 4),
('O+', 0, '', 17, 4),
('O-', 0, '', 18, 4),
('A1+', 0, '', 19, 4),
('A1-', 0, '', 20, 4),
('A2+', 0, '', 21, 4),
('A2-', 0, '', 22, 4),
('A1B+', 0, '', 23, 4),
('A1B-', 0, '', 24, 4),
('A2B+', 0, '', 25, 4),
('A2B-', 0, '', 26, 4),
('Bombay Blood Group', 0, '', 27, 4),
('Anadaman and Nichobhar Islands', 0, '', 28, 1),
('Andhra Pradesh', 0, '', 29, 1),
('Arunachal Pradesh', 0, '', 30, 1),
('Assam', 0, '', 31, 1),
('Bihar', 0, '', 32, 1),
('Chandigarh', 0, '', 33, 1),
('Chattisgarh', 0, '', 34, 1),
('Dadra and Nagar Haveli', 0, '', 35, 1),
('Daman and Diu', 0, '', 36, 1),
('Delhi', 0, '', 37, 1),
('Goa', 0, '', 38, 1),
('Gujarat', 0, '', 39, 1),
('Haryana', 0, '', 40, 1),
('Himachal Pradesh', 0, '', 41, 1),
('Jammu and Khasmir', 0, '', 42, 1),
('Jharkhand', 0, '', 43, 1),
('Karnataka', 0, '', 44, 1),
('Kerala', 0, '', 45, 1),
('Lakshadeep', 0, '', 46, 1),
('Madhya Pradesh', 0, '', 47, 1),
('Maharashtra', 0, '', 48, 1),
('Manipur', 0, '', 49, 1),
('Meaghalaya', 0, '', 50, 1),
('Mizoram', 0, '', 51, 1),
('Nagaland', 0, '', 52, 1),
('Odissa', 0, '', 53, 1),
('Pondecherry', 0, '', 54, 1),
('Rajasthan', 0, '', 55, 1),
('Sikkim', 0, '', 56, 1),
('Tamil Nadu', 0, '', 57, 1),
('Telangana', 0, '', 58, 1),
('Tripura', 0, '', 59, 1),
('UttarPradesh', 0, '', 60, 1),
('Urraranchal', 0, '', 61, 1),
('West Bengal', 0, '', 62, 1),
('Andaman and Nichobhar', 28, '', 63, 2),
('Port Blair', 28, '', 64, 2),
('Ananthapur', 29, '', 65, 2),
('Chittor', 29, '', 66, 2),
('EastGodavari', 29, '', 67, 2),
('Guntur', 29, '', 68, 2),
('Kadapa', 29, '', 69, 2),
('Krishna', 29, '', 70, 2),
('Kurnool', 29, '', 71, 2),
('Nellore', 29, '', 72, 2),
('Prakhasam', 29, '', 73, 2),
('Srikakulam', 29, '', 74, 2),
('Visakhapatnam', 29, '', 75, 2),
('Vizayanagaram', 29, '', 76, 2),
('West Godavari', 29, '', 77, 2),
('Changlung', 30, '', 78, 2),
('Dibang Valley', 30, '', 79, 2),
('East Kameng', 30, '', 80, 2),
('East Siang', 30, '', 81, 2),
('Lohit', 30, '', 82, 2),
('Lower Dibang Valley', 30, '', 83, 2),
('LowerSubansiri', 30, '', 110, 2),
('Papam pare', 30, '', 111, 2),
('Tawang', 30, '', 112, 2),
('Tirap', 30, '', 113, 2),
('UpperSiang', 30, '', 114, 2),
('UppreSubansiri', 30, '', 115, 2),
('WestSiang', 30, '', 116, 2),
('WestKameng', 30, '', 117, 2),
('Barpeta', 31, '', 118, 2),
('Bongaigaon', 31, '', 119, 2),
('Cachar', 31, '', 120, 2),
('Darvang', 31, '', 121, 2),
('Dhamji', 31, '', 122, 2),
('Dhubri', 31, '', 123, 2),
('Dibrugarh', 31, '', 124, 2),
('Goalpara', 31, '', 125, 2),
('Golaghat', 31, '', 126, 2),
('Hailakandi', 31, '', 127, 2),
('Jorhat', 31, '', 128, 2),
('Kamrup', 31, '', 129, 2),
('KamrupMetro', 31, '', 130, 2),
('KabriAnalog', 31, '', 131, 2),
('Kanimganj', 31, '', 132, 2),
('Kokrajhar', 31, '', 133, 2),
('Lakhimpur', 31, '', 134, 2),
('Morigaon', 31, '', 135, 2),
('NcHills', 31, '', 136, 2),
('Nagaon', 31, '', 137, 2),
('Nalbari', 31, '', 138, 2),
('Sibasagar', 31, '', 139, 2),
('Sontipur', 31, '', 140, 2),
('Tinsukia', 31, '', 141, 2),
('Udalguri', 31, '', 142, 2),
('Araria', 32, '', 143, 2),
('Arwaj', 32, '', 144, 2),
('Aurangabad', 32, '', 145, 2),
('Banka', 32, '', 146, 2),
('Bagusaraj', 32, '', 147, 2),
('Bhagalpur', 32, '', 148, 2),
('Bhojpur', 32, '', 149, 2),
('Buxor', 32, '', 150, 2),
('Dabhanga', 32, '', 151, 2),
('Gaya', 32, '', 152, 2),
('Gopalganj', 32, '', 153, 2),
('Jhabanabad', 32, '', 154, 2),
('Jamui', 32, '', 155, 2),
('Kaimur', 32, '', 156, 2),
('Kathihar', 32, '', 157, 2),
('Khagaria', 32, '', 158, 2),
('Kishanganj', 32, '', 159, 2),
('Lakhisaraj', 32, '', 160, 2),
('Madhipura', 32, '', 161, 2),
('Madhubani', 32, '', 162, 2),
('Munger', 32, '', 163, 2),
('Muzaffapur', 32, '', 164, 2),
('Nalanada', 32, '', 165, 2),
('Nawada', 32, '', 166, 2),
('Patna', 32, '', 167, 2),
('Purnea', 32, '', 168, 2),
('Rohtar', 32, '', 169, 2),
('Saharsa', 32, '', 170, 2),
('Samastipur', 32, '', 171, 2),
('Saran', 32, '', 172, 2),
('Sheikpura', 32, '', 173, 2),
('Sheokhar', 32, '', 174, 2),
('Sitamarhi', 32, '', 175, 2),
('Siwan', 32, '', 176, 2),
('Supaul', 32, '', 177, 2),
('Vaishali', 32, '', 178, 2),
('West Champaran', 32, '', 179, 2),
('Chandigarh', 33, '', 180, 2),
('Bastar', 34, '', 181, 2),
('Bijapur', 34, '', 182, 2),
('Bilapur', 34, '', 183, 2),
('Dantewada', 34, '', 184, 2),
('Dhamtari', 34, '', 185, 2),
('Durg', 34, '', 186, 2),
('Janjgir', 34, '', 187, 2),
('Jhaspur', 34, '', 188, 2),
('Khabirdhan', 34, '', 189, 2),
('Kanker', 34, '', 190, 2),
('Korba', 34, '', 191, 2),
('Korea', 34, '', 192, 2),
('Mahasammd', 34, '', 193, 2),
('Narayanpur', 34, '', 194, 2),
('Raigarh', 34, '', 195, 2),
('Raipur', 34, '', 196, 2),
('Rajnandgaon', 34, '', 197, 2),
('Sarangarh', 34, '', 198, 2),
('Surguja', 34, '', 199, 2),
('Dadra and Nagar Haveli', 35, '', 200, 2),
('Silvas', 35, '', 201, 2),
('Daman and Diu', 36, '', 202, 2),
('Daman', 36, '', 203, 2),
('Central Delhi', 37, '', 204, 2),
('East Delhi', 37, '', 205, 2),
('NewDelhi', 37, '', 206, 2),
('NorthDelhi', 37, '', 207, 2),
('NorthEastDelhi', 37, '', 208, 2),
('NorthWestDelhi', 37, '', 209, 2),
('SouthDelhi', 37, '', 210, 2),
('SouthWestDelhi', 37, '', 211, 2),
('WestDelhi', 37, '', 212, 2),
('Goa', 38, '', 213, 2),
('Panaji', 38, '', 214, 2),
('Ahmedabad', 39, '', 215, 2),
('Amerli', 39, '', 216, 2),
('Anand', 39, '', 217, 2),
('BanasKantha', 39, '', 218, 2),
('Bharuch', 39, '', 219, 2),
('Bhavanagar', 39, '', 220, 2),
('Dohad', 39, '', 221, 2),
('GandhiNager', 39, '', 222, 2),
('Jamnagar', 39, '', 223, 2),
('Juangadh', 39, '', 224, 2),
('Kachchh', 39, '', 225, 2),
('KhedaMahesana', 39, '', 226, 2),
('Narmada', 39, '', 227, 2),
('Navsari', 39, '', 228, 2),
('Panchmahals', 39, '', 229, 2),
('Patan', 39, '', 230, 2),
('Porbandar', 39, '', 231, 2),
('Rajkot', 39, '', 232, 2),
('Sabharkantha', 39, '', 233, 2),
('Thedangs', 39, '', 234, 2),
('Vadodara', 39, '', 235, 2),
('Valsad', 39, '', 236, 2),
('Ambala', 40, '', 237, 2),
('Bhiwari', 40, '', 238, 2),
('Faribad', 40, '', 239, 2),
('Fathebad', 40, '', 240, 2),
('Gurgaon', 40, '', 241, 2),
('Hissar', 40, '', 242, 2),
('Jhajjar', 40, '', 243, 2),
('Jind', 40, '', 244, 2),
('Kaithal', 40, '', 245, 2),
('Karnal', 40, '', 246, 2),
('Kurukshetra', 40, '', 247, 2),
('Mahendragarh', 40, '', 248, 2),
('panchukula', 40, '', 249, 2),
('Panipat', 40, '', 250, 2),
('Rewari', 40, '', 251, 2),
('Rohtak', 40, '', 252, 2),
('Sirsa', 40, '', 253, 2),
('Sonepat', 40, '', 254, 2),
('Yamunanagar', 40, '', 255, 2),
('Bilasur', 41, '', 256, 2),
('Chamba', 41, '', 257, 2),
('Hamirpur', 41, '', 258, 2),
('Kangra', 41, '', 259, 2),
('Kinnpur', 41, '', 260, 2),
('Kullu', 41, '', 261, 2),
('Lahal-Spiti', 41, '', 262, 2),
('Mandi', 41, '', 263, 2),
('Simla', 41, '', 264, 2),
('Sirmour', 41, '', 265, 2),
('Solan', 41, '', 266, 2),
('Una', 41, '', 267, 2),
('Anantnag', 42, '', 268, 2),
('Baramulla', 42, '', 269, 2),
('Buddam', 42, '', 270, 2),
('Doda', 42, '', 271, 2),
('Jammu', 42, '', 272, 2),
('Kargil', 42, '', 273, 2),
('Kathua', 42, '', 274, 2),
('Kupwara', 42, '', 275, 2),
('Leh', 42, '', 276, 2),
('Poonch', 42, '', 277, 2),
('Pulwama', 42, '', 278, 2),
('Rajori', 42, '', 279, 2),
('Srinagar', 42, '', 280, 2),
('Udampur', 42, '', 281, 2),
('Bokaro', 43, '', 282, 2),
('Chatra', 43, '', 283, 2),
('Deoghar', 43, '', 284, 2),
('Dhanbad', 43, '', 285, 2),
('Dumka', 43, '', 286, 2),
('Garhwa', 43, '', 287, 2),
('Godda', 43, '', 288, 2),
('Gridih', 43, '', 289, 2),
('Gumla', 43, '', 290, 2),
('Hazaribag', 43, '', 291, 2),
('Jamtra', 43, '', 292, 2),
('Koderma', 43, '', 293, 2),
('Latehar', 43, '', 294, 2),
('Lohar danga', 43, '', 295, 2),
('Pakur', 43, '', 296, 2),
('Palamu', 43, '', 297, 2),
('Ranchi', 43, '', 298, 2),
('Sahibganj', 43, '', 299, 2),
('Seraikela', 43, '', 300, 2),
('Bagalkot', 44, '', 301, 2),
('Bangalore', 44, '', 302, 2),
('Belganm', 44, '', 303, 2),
('Bellary', 44, '', 304, 2),
('Bidhar', 44, '', 305, 2),
('Bijapur', 44, '', 306, 2),
('Chamranjnagar', 44, '', 307, 2),
('Chikmaglur', 44, '', 308, 2),
('Chitradurga', 44, '', 309, 2),
('Dakshin Kannada', 44, '', 310, 2),
('Davangere', 44, '', 311, 2),
('Dharwad', 44, '', 312, 2),
('Gadag', 44, '', 313, 2),
('Gulbarga', 44, '', 314, 2),
('Hassan', 44, '', 315, 2),
('Haweri', 44, '', 316, 2),
('Kodagm', 44, '', 317, 2),
('Kolar', 44, '', 318, 2),
('koppal', 44, '', 319, 2),
('Mandya', 44, '', 320, 2),
('Musore', 44, '', 321, 2),
('Raichur', 44, '', 322, 2),
('Shimoga', 44, '', 323, 2),
('Tumkur', 44, '', 324, 2),
('Udupi', 44, '', 325, 2),
('UltarKannada', 44, '', 326, 2),
('Alappuzha', 45, '', 327, 2),
('Erankulam', 45, '', 328, 2),
('Idulli', 45, '', 329, 2),
('Kannur', 45, '', 330, 2),
('Kasaragod', 45, '', 331, 2),
('Kollam', 45, '', 332, 2),
('Kottyam', 45, '', 333, 2),
('Kozhikode', 45, '', 334, 2),
('Malappuram', 45, '', 335, 2),
('Palakkd', 45, '', 336, 2),
('Pathanamthitta', 45, '', 337, 2),
('Thiruvanthapuram', 45, '', 338, 2),
('Thirissur', 45, '', 339, 2),
('Wayanad', 45, '', 340, 2),
('Kavaratti', 46, '', 341, 2),
('LakshaDeep', 46, '', 342, 2),
('Badwani', 47, '', 343, 2),
('Balaghat', 47, '', 344, 2),
('Betul', 47, '', 345, 2),
('Bhind', 47, '', 346, 2),
('Bhopal', 47, '', 347, 2),
('Chhatapur', 47, '', 348, 2),
('Chhindwara', 47, '', 349, 2),
('Damoh', 47, '', 350, 2),
('Datie', 47, '', 351, 2),
('Dewas', 47, '', 352, 2),
('Dhar', 47, '', 353, 2),
('Dindori', 47, '', 354, 2),
('Gunna', 47, '', 355, 2),
('Gwailor', 47, '', 356, 2),
('Harda', 47, '', 357, 2),
('Hoshangabad', 47, '', 358, 2),
('Indore', 47, '', 359, 2),
('Jablapur', 47, '', 360, 2),
('Jhabua', 47, '', 361, 2),
('Katni', 47, '', 362, 2),
('Khandwa', 47, '', 363, 2),
('Khargone', 47, '', 364, 2),
('Mandla', 47, '', 365, 2),
('Mandser', 47, '', 366, 2),
('Morena', 47, '', 367, 2),
('Narasimhpur', 47, '', 368, 2),
('Nermuch', 47, '', 369, 2),
('Panna', 47, '', 370, 2),
('Raisen', 47, '', 371, 2),
('Rajgarh', 47, '', 372, 2),
('Ratlon', 47, '', 373, 2),
('Rewa', 47, '', 374, 2),
('Sagar', 47, '', 375, 2),
('Satna', 47, '', 376, 2),
('Sehore', 47, '', 377, 2),
('Seoni', 47, '', 378, 2),
('Shahdol', 47, '', 379, 2),
('Shajapur', 47, '', 380, 2),
('Sheopm', 47, '', 381, 2),
('Shivapmi', 47, '', 382, 2),
('Sidhi', 47, '', 383, 2),
('Tikamgarh', 47, '', 384, 2),
('Ujjain', 47, '', 385, 2),
('Umaria', 47, '', 386, 2),
('Vidisha', 47, '', 387, 2),
('Akola', 48, '', 388, 2),
(' Amravati ', 48, '', 389, 2),
('Buldana', 48, '', 390, 2),
(' Yavatmal ', 48, '', 391, 2),
('Ahmednagar', 48, '', 392, 2),
('Washim', 48, '', 393, 2),
('Aurangabad ', 48, '', 394, 2),
('Beed ', 48, '', 395, 2),
('Hingoli', 48, '', 396, 2),
(' Jalna', 48, '', 397, 2),
(' Latur', 48, '', 398, 2),
(' Nanded', 48, '', 399, 2),
(' Osmanabad', 48, '', 400, 2),
(' Parbhani', 48, '', 401, 2),
('Mumbai', 48, '', 402, 2),
(' Mumbai Suburban District ', 48, '', 403, 2),
('Thane ', 48, '', 404, 2),
('Palghar ', 48, '', 405, 2),
('Raigad ', 48, '', 406, 2),
('Ratnagiri ', 48, '', 407, 2),
('Sindhudurg', 48, '', 408, 2),
('Bhandara ', 48, '', 409, 2),
('Chandrapur', 48, '', 410, 2),
(' Gadchiroli ', 48, '', 411, 2),
('Gondia', 48, '', 412, 2),
(' Nagpur ', 48, '', 413, 2),
('Wardha', 48, '', 414, 2),
('Kolhapur', 48, '', 415, 2),
(' Pune ', 48, '', 416, 2),
('Sangli', 48, '', 417, 2),
(' Satara ', 48, '', 418, 2),
('Solapur', 48, '', 419, 2),
('Dhule ', 48, '', 420, 2),
('Jalgaon', 48, '', 421, 2),
(' Nandurbar', 48, '', 422, 2),
(' Nashik', 48, '', 423, 2),
('Bishmpur', 49, '', 424, 2),
('Chandel', 49, '', 425, 2),
('Churachandpur', 49, '', 426, 2),
('Imphal East', 49, '', 427, 2),
('Imphal West', 49, '', 428, 2),
('Senapati', 49, '', 429, 2),
('Tamenlong', 49, '', 430, 2),
('East Garo Hills', 50, '', 431, 2),
('East Kasi Hills', 50, '', 432, 2),
('Jantia Hills', 50, '', 433, 2),
('South Garo Hills', 50, '', 434, 2),
('Upper Shillong', 50, '', 435, 2),
('West Garo Hills', 50, '', 436, 2),
('West Kasi HILls', 50, '', 437, 2),
('Hyderabad', 58, '', 438, 2),
(' Warangal', 58, '', 439, 2),
('Nizamabad', 58, '', 440, 2),
(' Karimnagar', 58, '', 441, 2),
(' Ramagundam ', 58, '', 442, 2),
('Khammam ', 58, '', 443, 2),
('Mahbubnagar ', 58, '', 444, 2),
('Nalgonda ', 58, '', 445, 2),
('Adilabad ', 58, '', 446, 2),
('Suryapet', 58, '', 447, 2),
(' Miryalaguda', 58, '', 448, 2),
(' A S Rao Nagar', 438, '', 449, 3),
(' Abdullapurmet ', 438, '', 450, 3),
('Abids ', 438, '', 451, 3),
('Adarsh Nagar', 438, '', 452, 3),
(' Adda Gutta', 438, '', 453, 3),
(' Adibatla ', 438, '', 454, 3),
('Adikmet ', 438, '', 455, 3),
('Afzal', 438, '', 456, 3),
(' Gunj', 438, '', 457, 3),
(' Almasguda ', 438, '', 458, 3),
('Alwal', 438, '', 459, 3),
(' Amberpet', 438, '', 460, 3),
(' Ameenpur ', 438, '', 461, 3),
('Ameerpet ', 438, '', 462, 3),
('Anandbagh', 438, '', 463, 3),
(' Appa Junction ', 438, '', 464, 3),
('Attapur ', 438, '', 465, 3),
('Badangpet', 438, '', 466, 3),
(' Bahadurpally ', 438, '', 467, 3),
('Bahadurpura ', 438, '', 468, 3),
('Bala Nagar', 438, '', 469, 3),
(' Balapur', 438, '', 470, 3),
(' Bandlaguda ', 438, '', 471, 3),
('Banjara Hills ', 438, '', 472, 3),
('Basheerbagh', 438, '', 473, 3),
('Beeramguda', 438, '', 474, 3),
(' Begumpet ', 438, '', 475, 3),
('Bhogaram ', 438, '', 476, 3),
('Bhoiguda', 438, '', 477, 3),
(' Bhongir', 438, '', 478, 3),
(' Bibinagar ', 438, '', 479, 3),
('BN Reddy Nagar', 438, '', 480, 3),
(' Boduppal', 438, '', 481, 3),
(' Bolaram ', 438, '', 482, 3),
('Borabanda', 438, '', 483, 3),
(' Bowenpally', 438, '', 484, 3),
(' Bowrampet ', 438, '', 485, 3),
('Burgul', 438, '', 486, 3),
(' Champapet', 438, '', 487, 3),
(' Chanda Nagar ', 438, '', 488, 3),
('Chandrayanagutta ', 438, '', 489, 3),
('Cherlapally ', 438, '', 490, 3),
('Chevalla ', 438, '', 491, 3),
('Chikkadapally ', 438, '', 492, 3),
(' A S Rao Nagar', 438, '', 493, 3),
(' Abdullapurmet ', 438, '', 494, 3),
('Abids ', 438, '', 495, 3),
('Adarsh Nagar', 438, '', 496, 3),
(' Adda Gutta', 438, '', 497, 3),
(' Adibatla ', 438, '', 498, 3),
('Adikmet ', 438, '', 499, 3),
('Afzal', 438, '', 500, 3),
(' Gunj', 438, '', 501, 3),
(' Almasguda ', 438, '', 502, 3),
('Alwal', 438, '', 503, 3),
(' Amberpet', 438, '', 504, 3),
(' Ameenpur ', 438, '', 505, 3),
('Ameerpet ', 438, '', 506, 3),
('Anandbagh', 438, '', 507, 3),
(' Appa Junction ', 438, '', 508, 3),
('Attapur ', 438, '', 509, 3),
('Badangpet', 438, '', 510, 3),
(' Bahadurpally ', 438, '', 511, 3),
('Bahadurpura ', 438, '', 512, 3),
('Bala Nagar', 438, '', 513, 3),
(' Balapur', 438, '', 514, 3),
(' Bandlaguda ', 438, '', 515, 3),
('Banjara Hills ', 438, '', 516, 3),
('Basheerbagh', 438, '', 517, 3),
('Beeramguda', 438, '', 518, 3),
(' Begumpet ', 438, '', 519, 3),
('Bhogaram ', 438, '', 520, 3),
('Bhoiguda', 438, '', 521, 3),
(' Bhongir', 438, '', 522, 3),
(' Bibinagar ', 438, '', 523, 3),
('BN Reddy Nagar', 438, '', 524, 3),
(' Boduppal', 438, '', 525, 3),
(' Bolaram ', 438, '', 526, 3),
('Borabanda', 438, '', 527, 3),
(' Bowenpally', 438, '', 528, 3),
(' Bowrampet ', 438, '', 529, 3),
('Burgul', 438, '', 530, 3),
(' Champapet', 438, '', 531, 3),
(' Chanda Nagar ', 438, '', 532, 3),
('Chandrayanagutta ', 438, '', 533, 3),
('Cherlapally ', 438, '', 534, 3),
('Chevalla ', 438, '', 535, 3),
('Chikkadapally ', 438, '', 536, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
`user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(30) NOT NULL,
  `area` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `password` varchar(10) NOT NULL,
  `confirmation_code` varchar(20) NOT NULL,
  `donation_status` char(1) NOT NULL,
  `blood_group` int(11) NOT NULL,
  `validate_Status` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `name`, `email`, `number`, `area`, `city`, `state`, `district`, `gender`, `address`, `dob`, `password`, `confirmation_code`, `donation_status`, `blood_group`, `validate_Status`) VALUES
(3, 'srikrishna mekal ', 'msrikrishna140@gmail.com', '9959167378', 462, 438, 58, 0, 'M', 'kskj', '2015-03-29', 'srikrishna', 'BdKe', 'Y', 17, 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation_request`
--
ALTER TABLE `donation_request`
 ADD PRIMARY KEY (`request_id`), ADD UNIQUE KEY `donation_request_idx_2` (`request_id`), ADD KEY `donation_request_idx_1` (`area`,`city`,`state`), ADD KEY `fk_CityId1` (`city`), ADD KEY `fk_StateId1` (`state`);

--
-- Indexes for table `lookup_details`
--
ALTER TABLE `lookup_details`
 ADD PRIMARY KEY (`lookup_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `number` (`number`), ADD KEY `user_details_idx_1` (`area`,`city`,`state`), ADD KEY `fk_CityId` (`city`), ADD KEY `fk_StateId` (`state`), ADD KEY `fk_BgrpId` (`blood_group`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation_request`
--
ALTER TABLE `donation_request`
MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lookup_details`
--
ALTER TABLE `lookup_details`
MODIFY `lookup_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=537;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation_request`
--
ALTER TABLE `donation_request`
ADD CONSTRAINT `donation_request_lookup_details` FOREIGN KEY (`area`) REFERENCES `lookup_details` (`lookup_id`),
ADD CONSTRAINT `donation_request_lookup_details_2` FOREIGN KEY (`city`) REFERENCES `lookup_details` (`lookup_id`),
ADD CONSTRAINT `donation_request_lookup_details_3` FOREIGN KEY (`state`) REFERENCES `lookup_details` (`lookup_id`),
ADD CONSTRAINT `fk_AreaId1` FOREIGN KEY (`area`) REFERENCES `lookup_details` (`lookup_id`),
ADD CONSTRAINT `fk_CityId1` FOREIGN KEY (`city`) REFERENCES `lookup_details` (`lookup_id`),
ADD CONSTRAINT `fk_StateId1` FOREIGN KEY (`state`) REFERENCES `lookup_details` (`lookup_id`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
ADD CONSTRAINT `fk_AreaId` FOREIGN KEY (`area`) REFERENCES `lookup_details` (`lookup_id`),
ADD CONSTRAINT `fk_BgrpId` FOREIGN KEY (`blood_group`) REFERENCES `lookup_details` (`lookup_id`),
ADD CONSTRAINT `fk_CityId` FOREIGN KEY (`city`) REFERENCES `lookup_details` (`lookup_id`),
ADD CONSTRAINT `fk_StateId` FOREIGN KEY (`state`) REFERENCES `lookup_details` (`lookup_id`),
ADD CONSTRAINT `user_details_lookup_details` FOREIGN KEY (`area`) REFERENCES `lookup_details` (`lookup_id`),
ADD CONSTRAINT `user_details_lookup_details_2` FOREIGN KEY (`city`) REFERENCES `lookup_details` (`lookup_id`),
ADD CONSTRAINT `user_details_lookup_details_3` FOREIGN KEY (`state`) REFERENCES `lookup_details` (`lookup_id`),
ADD CONSTRAINT `user_details_lookup_details_4` FOREIGN KEY (`blood_group`) REFERENCES `lookup_details` (`lookup_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
