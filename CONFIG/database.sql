---
--- Projected and made by Bruno Cordioli Machado
--- Please access my website "brunocordioli.tk" to know more about me!
---



--
-- Structure for the table `phpdb`
--

CREATE TABLE `phpdb` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `phpdb`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `phpdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

