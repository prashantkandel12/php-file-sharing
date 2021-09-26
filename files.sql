
CREATE TABLE `files` (
  `id` int(10) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `date_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `files`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

