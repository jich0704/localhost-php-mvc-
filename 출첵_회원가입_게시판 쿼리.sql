-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 21-05-18 18:47
-- 서버 버전: 8.0.22
-- PHP 버전: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `mvc`
--
CREATE DATABASE IF NOT EXISTS `mvc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mvc`;

-- --------------------------------------------------------

--
-- 테이블 구조 `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `body` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`) VALUES
(5, 3, '안녕하세요', '반가워요12345', '2021-05-15 20:48:47'),
(6, 1, '반갑습니다 저두 ㅎ', '잘부탁해요', '2021-05-15 20:49:31');

-- --------------------------------------------------------

--
-- 테이블 구조 `posts2`
--

CREATE TABLE `posts2` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `body` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `posts2`
--

INSERT INTO `posts2` (`id`, `user_id`, `title`, `body`, `created_at`) VALUES
(6, 3, '오늘도 기분좋게 출석첵!', '출첵', '2021-05-15 20:49:11'),
(7, 1, '저두 출첵합니다!', '출첵', '2021-05-15 20:49:43');

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$3RPloEo62/jxjMDyTD5hvendSSUT0SpPil8GwoSzJWW4roebWRKF6'),
(2, '테스트', 'test@test.com', '$2y$10$mf13YlN1GK0iqJh/QPwk.exrtUUDXI0CmUFvZcm5DjgSBENWe4Xhm'),
(3, '테스트유저', 'test123@test.com', '$2y$10$bujJrDGU9czmWD36Te8T0ObsDqDkGpYj/2KbKw4CmPJxu/bOI7XDO');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `posts2`
--
ALTER TABLE `posts2`
  ADD PRIMARY KEY (`id`);

--

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 테이블의 AUTO_INCREMENT `posts2`
--
ALTER TABLE `posts2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


--
-- 테이블의 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
