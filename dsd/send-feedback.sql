SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `userfeedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




INSERT INTO `userfeedback` (`id`, `name`, `email`, `description`) VALUES
(1, 'Shamim', 'shamim@gmail.com', 'any description');


ALTER TABLE `userfeedback`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `userfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;  