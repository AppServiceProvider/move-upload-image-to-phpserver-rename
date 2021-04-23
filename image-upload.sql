-- Database: `imageupload`
--
-- Table structure for table `image_upload`
CREATE TABLE `image_upload` (
  `image_id` int(11) NOT NULL,
  `image_name` text NOT NULL,
  `image_status` varchar(10) NOT NULL DEFAULT 'Enable'
);
-- Dumping data for table `image_upload`
INSERT INTO `image_upload` (`image_id`, `image_name`, `image_status`) VALUES
(1, 'Upload2021-04-2328992.jpg', 'Enable'),

-- Indexes for dumped tables
--
-- Indexes for table `image_upload`
ALTER TABLE `image_upload`
  ADD PRIMARY KEY (`image_id`);