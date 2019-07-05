---
--- Projected and made by Bruno Cordioli Machado
--- Please access my website "brunocordioli.tk" to know more about me!
---



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Estrutura para tabela `finalproject`
--

CREATE TABLE `finalproject` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `finalproject`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `finalproject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

