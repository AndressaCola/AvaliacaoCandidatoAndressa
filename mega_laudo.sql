-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Set-2020 às 00:37
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mega_laudo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID_Cliente` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `Telefone` varchar(16) DEFAULT NULL,
  `Endereco` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ID_Cliente`, `Nome`, `CPF`, `Telefone`, `Endereco`) VALUES
(1, 'Mario Jorge da Silva', '2147483647', '11', 'Rua dos Vingadores'),
(2, 'Maria Joana Andrade', '2147483647', '1194578', 'Avenida Glória'),
(3, 'Fernando Silva', '2147483647', '1196578', 'Rua dos autonomistas'),
(4, 'Juliana Torres', '2147483647', '1195533', 'Avenida dos caçadores'),
(5, 'Eliana Rocha', '2147483647', '1196593', 'Avenida Esperança'),
(10, 'Andressa', '158.733.255-55', '(11) 96665-822', 'Rua dos bobos numero 0'),
(11, 'Claudio', '658.256.445-45', '(11) 99611-111', 'Rua Jesus'),
(12, 'Elizabeth', '151.515.444-45', '(11) 96151-5151', 'Rua Impar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `ID_Servico` int(11) NOT NULL,
  `ID_Veiculo` int(11) DEFAULT NULL,
  `ID_Cliente` int(11) DEFAULT NULL,
  `Nome` varchar(200) NOT NULL,
  `Descricao` text NOT NULL,
  `Valor` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`ID_Servico`, `ID_Veiculo`, `ID_Cliente`, `Nome`, `Descricao`, `Valor`) VALUES
(1, 4, 4, 'Jorge', 'Vistoria agendada para amanhã', 200.00),
(2, 3, 1, 'Julia', 'Laudo Cautelar realizado com sucesso', 350.00),
(3, 9, 4, 'Jorge', 'Vistoria Finalizada e paga a vista', 180.00),
(10, NULL, NULL, 'Francisco', 'Tentando 123', 101.10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `ID_Veiculo` int(11) NOT NULL,
  `Placa` varchar(7) NOT NULL,
  `Marca` varchar(100) NOT NULL,
  `Modelo` varchar(100) NOT NULL,
  `AnoModelo` year(4) NOT NULL,
  `AnoFabricacao` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`ID_Veiculo`, `Placa`, `Marca`, `Modelo`, `AnoModelo`, `AnoFabricacao`) VALUES
(1, 'MOG5959', 'SSANGYONG', 'Korando 2.0 16V T.Diesel AWD Mec.', 2011, 2010),
(2, 'MWY7678', 'Isuzu', 'Amigo 2.3 4x2/4x4', 1992, 1991),
(3, 'MOQ5918', 'BRM', 'Buggy/M-8/M-8 Long 1.6', 1985, 1985),
(4, 'NEP1407', 'Jeep', 'Renegade Sport 1.8 4x2 Flex 16V Aut.', 2016, 2015),
(5, 'MED4404', 'Saab', '9000 CD 2.3 Turbo', 1992, 1991),
(6, 'NEI8808', 'Lotus', 'Elan S-2 1.6 16V', 1995, 1994),
(7, 'KJI7178', 'Mercedes-Benz', 'E-200 Classic 2.0', 1993, 1992),
(8, 'HSA0483', 'Miura', 'Picape BG-Truck CD Turbo Diesel', 1993, 1992),
(9, 'MPR7261', 'Audi', 'A4 Launch Edition 2.0 TFSI 190cv S troni', 2016, 2015),
(10, 'GLK4787', 'JPX', 'Jipe Montez 4x4 CD Teto R', 1994, 1993),
(13, 'IIH-523', 'VW', 'Fusca', 1985, 1985),
(14, 'OKM-852', 'Chevrolet', 'ONIX LT 1.4', 2020, 2020),
(15, 'JSS-555', 'Fiat', 'Mobi Like 1.0', 2014, 2015);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`ID_Servico`),
  ADD KEY `ID_Veiculo` (`ID_Veiculo`),
  ADD KEY `ID_Cliente` (`ID_Cliente`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`ID_Veiculo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `ID_Servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `ID_Veiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`ID_Veiculo`) REFERENCES `veiculo` (`ID_Veiculo`),
  ADD CONSTRAINT `servico_ibfk_2` FOREIGN KEY (`ID_Cliente`) REFERENCES `cliente` (`ID_Cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
