-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 27 2020 г., 17:10
-- Версия сервера: 10.4.8-MariaDB
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Структура таблицы `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Структура таблицы `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Структура таблицы `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Структура таблицы `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Дамп данных таблицы `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"snap_to_grid\":\"off\",\"angular_direct\":\"direct\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Структура таблицы `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Дамп данных таблицы `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'project2', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"category\",\"currencies\",\"product\",\"productColor\",\"productComplect\",\"related_product\",\"User\"],\"table_structure[]\":[\"category\",\"currencies\",\"product\",\"productColor\",\"productComplect\",\"related_product\",\"User\"],\"table_data[]\":[\"category\",\"currencies\",\"product\",\"productColor\",\"productComplect\",\"related_product\",\"User\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Структура таблицы @TABLE@\",\"latex_structure_continued_caption\":\"Структура таблицы @TABLE@ (продолжение)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Содержимое таблицы @TABLE@\",\"latex_data_continued_caption\":\"Содержимое таблицы @TABLE@ (продолжение)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(2, 'root', 'server', 'SQL', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"phpmyadmin\",\"project2\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Структура таблицы @TABLE@\",\"latex_structure_continued_caption\":\"Структура таблицы @TABLE@ (продолжение)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Содержимое таблицы @TABLE@\",\"latex_data_continued_caption\":\"Содержимое таблицы @TABLE@ (продолжение)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Структура таблицы `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Структура таблицы `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Структура таблицы `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Структура таблицы `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Структура таблицы `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Дамп данных таблицы `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"project2\",\"table\":\"order_product\"},{\"db\":\"project2\",\"table\":\"order_user\"},{\"db\":\"project2\",\"table\":\"User\"},{\"db\":\"project2\",\"table\":\"product\"},{\"db\":\"project2\",\"table\":\"category\"},{\"db\":\"project2\",\"table\":\"currencies\"},{\"db\":\"project2\",\"table\":\"productComplect\"},{\"db\":\"project2\",\"table\":\"complect\"},{\"db\":\"project2\",\"table\":\"mods\"},{\"db\":\"project2\",\"table\":\"mods3\"}]');

-- --------------------------------------------------------

--
-- Структура таблицы `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

--
-- Дамп данных таблицы `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('project2', 'project2.order_user', 'id', 'project2', 'project2.order_product', 'id');

-- --------------------------------------------------------

--
-- Структура таблицы `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Структура таблицы `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Структура таблицы `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Структура таблицы `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Структура таблицы `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Структура таблицы `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Дамп данных таблицы `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2020-03-27 16:09:40', '{\"lang\":\"ru\",\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Структура таблицы `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Структура таблицы `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Индексы таблицы `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Индексы таблицы `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Индексы таблицы `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Индексы таблицы `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Индексы таблицы `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Индексы таблицы `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Индексы таблицы `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Индексы таблицы `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Индексы таблицы `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Индексы таблицы `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Индексы таблицы `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Индексы таблицы `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Индексы таблицы `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Индексы таблицы `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Индексы таблицы `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Индексы таблицы `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Индексы таблицы `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- База данных: `project2`
--
CREATE DATABASE IF NOT EXISTS `project2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `project2`;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `alias`, `parent_id`, `keywords`, `description`) VALUES
(1, 'Telephone', 'telephone', 0, 'Telephone', 'Telephone'),
(2, 'Iphone', 'iphone', 1, 'Iphone', 'Iphone'),
(3, 'Samsung', 'samsung', 1, 'Samsung', 'Samsung'),
(4, 'Xiaomi', 'xiaomi', 1, 'Xiaomi', 'Xiaomi'),
(5, 'Nokia', 'nokia', 1, 'Nokia', 'Nokia');

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `Symbol_left` varchar(10) NOT NULL,
  `Symbol_right` varchar(10) NOT NULL,
  `value` float NOT NULL,
  `base` smallint(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `currencies`
--

INSERT INTO `currencies` (`id`, `title`, `code`, `Symbol_left`, `Symbol_right`, `value`, `base`) VALUES
(1, 'Доллар', 'USD', '', '$', 1, 1),
(2, 'ЕВРО', 'EUR', 'E', '', 0.8, 0),
(3, 'Рубль', 'RUB', '', 'руб', 65, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) NOT NULL,
  `order_id` int(10) DEFAULT NULL,
  `product_id` int(10) DEFAULT NULL,
  `complect` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `complect`, `color`, `price`, `qty`) VALUES
(6, 50, 1, 'Minimum', 'Black', 840, 7),
(7, 50, 2, 'Minimum', 'Black', 584, 6),
(8, 51, 1, 'Minimum', 'Black', 840, 7),
(9, 51, 2, 'Minimum', 'Black', 584, 6),
(10, 52, 1, 'Minimum', 'Black', 840, 7),
(11, 52, 2, 'Minimum', 'Black', 584, 6),
(12, 53, 1, 'Minimum', 'Black', 840, 7),
(13, 53, 2, 'Minimum', 'Black', 584, 6),
(14, 54, 1, 'Minimum', 'Black', 840, 7),
(15, 54, 2, 'Minimum', 'Black', 584, 6),
(16, 55, 1, 'Minimum', 'Black', 840, 7),
(17, 55, 2, 'Minimum', 'Black', 584, 6),
(18, 56, 1, 'Minimum', 'Black', 840, 7),
(19, 56, 2, 'Minimum', 'Black', 584, 6),
(20, 57, 1, 'Minimum', 'Black', 840, 7),
(21, 57, 2, 'Minimum', 'Black', 584, 6),
(22, 58, 1, 'Minimum', 'Black', 840, 7),
(23, 58, 2, 'Minimum', 'Black', 584, 6),
(24, 59, 1, 'Minimum', 'Black', 840, 7),
(25, 59, 2, 'Minimum', 'Black', 584, 6),
(26, 60, 1, 'Minimum', 'Black', 840, 7),
(27, 60, 2, 'Minimum', 'Black', 584, 6),
(28, 61, 1, 'Minimum', 'Black', 840, 7),
(29, 61, 2, 'Minimum', 'Black', 584, 6),
(30, 62, 1, 'Minimum', 'Black', 840, 7),
(31, 62, 2, 'Minimum', 'Black', 584, 6),
(32, 63, 1, 'Minimum', 'Black', 840, 7),
(33, 63, 2, 'Minimum', 'Black', 584, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `order_user`
--

CREATE TABLE `order_user` (
  `id` int(10) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT 1,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `update_at` int(10) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_user`
--

INSERT INTO `order_user` (`id`, `user_name`, `status`, `date`, `update_at`, `currency`, `note`) VALUES
(1, 'maksim', 1, '2020-03-23 15:30:25', NULL, 'USD', 'Доставить до дома'),
(2, 'maksim', 1, '2020-03-23 15:31:24', NULL, 'USD', 'Провести оптом'),
(3, 'maksim', 1, '2020-03-23 15:31:45', NULL, 'USD', ''),
(4, 'maksim', 1, '2020-03-23 15:32:18', NULL, 'RUB', ''),
(5, 'maksim', 1, '2020-03-23 16:59:31', NULL, 'USD', ''),
(6, 'maksim', 1, '2020-03-24 10:00:08', NULL, 'USD', 'wrerer'),
(7, 'maksim', 1, '2020-03-24 10:13:18', NULL, 'USD', 'lastInsertID'),
(8, 'maksim', 1, '2020-03-24 10:35:19', NULL, 'USD', 'Первый полный заказ'),
(9, 'maksim', 1, '2020-03-24 10:36:10', NULL, 'USD', ''),
(10, 'maksim', 1, '2020-03-24 10:36:56', NULL, 'USD', 'Заказ полный'),
(34, 'maksim', 1, '2020-03-24 14:37:30', NULL, 'USD', ''),
(35, 'maksim', 1, '2020-03-24 14:45:52', NULL, 'USD', ''),
(36, 'maksim', 1, '2020-03-24 14:46:17', NULL, 'USD', ''),
(37, 'maksim', 1, '2020-03-24 14:51:13', NULL, 'USD', ''),
(38, 'maksim', 1, '2020-03-24 14:51:28', NULL, 'USD', ''),
(39, 'maksim', 1, '2020-03-24 14:51:53', NULL, 'USD', ''),
(40, 'maksim', 1, '2020-03-24 14:56:31', NULL, 'USD', ''),
(41, 'maksim', 1, '2020-03-24 15:04:11', NULL, 'USD', ''),
(42, 'maksim', 1, '2020-03-24 15:07:25', NULL, 'USD', ''),
(43, 'maksim', 1, '2020-03-24 15:27:06', NULL, 'USD', 'yuyuyu'),
(44, 'maksim', 1, '2020-03-24 15:29:04', NULL, 'USD', ''),
(45, 'maksim', 1, '2020-03-24 15:38:32', NULL, 'USD', ''),
(46, 'maksim', 1, '2020-03-24 15:39:57', NULL, 'USD', ''),
(47, 'maksim', 1, '2020-03-24 15:41:32', NULL, 'USD', ''),
(48, 'maksim', 1, '2020-03-24 15:44:18', NULL, 'USD', ''),
(49, 'maksim', 1, '2020-03-24 15:46:34', NULL, 'USD', ''),
(50, 'maksim', 1, '2020-03-24 15:47:37', NULL, 'USD', ''),
(51, 'maksim', 1, '2020-03-24 16:04:41', NULL, 'USD', 'dhfkjhfdj'),
(52, 'maksim', 1, '2020-03-24 16:07:18', NULL, 'USD', ''),
(53, 'maksim', 1, '2020-03-24 16:12:45', NULL, 'USD', ''),
(54, 'maksim', 1, '2020-03-24 16:12:56', NULL, 'USD', ''),
(55, 'maksim', 1, '2020-03-24 16:13:40', NULL, 'USD', ''),
(56, 'maksim', 1, '2020-03-24 16:14:11', NULL, 'USD', ''),
(57, 'maksim', 1, '2020-03-24 16:14:36', NULL, 'USD', ''),
(58, 'maksim', 1, '2020-03-24 16:18:55', NULL, 'USD', ''),
(59, 'maksim', 1, '2020-03-24 16:19:42', NULL, 'USD', ''),
(60, 'maksim', 1, '2020-03-24 16:20:22', NULL, 'USD', ''),
(61, 'maksim', 1, '2020-03-24 16:21:13', NULL, 'USD', ''),
(62, 'maksim', 1, '2020-03-24 16:21:24', NULL, 'USD', ''),
(63, 'maksim', 1, '2020-03-24 16:21:41', NULL, 'USD', '');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` tinyint(3) UNSIGNED NOT NULL,
  `brand_id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `price` float DEFAULT 0,
  `old_price` float NOT NULL DEFAULT 0,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'no_img.jpg',
  `hit` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `brand_id`, `title`, `alias`, `content`, `price`, `old_price`, `status`, `keywords`, `description`, `img`, `hit`) VALUES
(1, 3, 1, 'Samsung galaxy s10', 'samsung-galaxy-s10', 'Характеристики: 1000gb', 1050, 1150, '1', 'Sumsung galaxy 10', 'lorem', 'samsung_galaxy_s10.jpeg', '0'),
(2, 3, 1, 'Samsung galaxy s9', 'samsung-galaxy-s9', NULL, 730, 0, '1', NULL, '', 'samsung_galaxy_s9.png', '0'),
(3, 3, 1, 'Samsung galaxy s8', 'samsung-galaxy-s8', NULL, 250, 320, '1', NULL, NULL, 'samsung_galaxy_s8.jpeg', '0'),
(4, 2, 2, 'Iphone 8 plus', 'iphone-8-plus', NULL, 720, 800, '0', NULL, NULL, 'iphone_8_plus.jpeg', '0'),
(5, 2, 2, 'Iphone XS', 'iphone-xs', NULL, 1100, 1440, '1', NULL, NULL, 'iphone_xs.jpeg', '0'),
(6, 2, 2, 'Iphone X', 'iphone-x', NULL, 1110, 0, '1', NULL, NULL, 'iphone_x.png', '0'),
(7, 4, 3, 'Xiaomi Mi 9T Pro', 'xiaomi-mi-9t-pro', NULL, 410, 500, '1', NULL, NULL, 'xiaomi_mi_9t_pro.jpeg', '0'),
(8, 4, 3, 'Xiaomi Mi 9', 'xiaomi-mi-9', NULL, 480, 0, '1', NULL, NULL, 'xiaomi_mi_9.jpeg', '0'),
(9, 4, 3, 'Xiaomi Mi 8', 'xiaomi-mi-8', NULL, 350, 440, '0', NULL, NULL, 'xiaomi_mi_8.png', '0'),
(10, 5, 4, 'Nokia 9 PureView', 'nokia-9-pureview', NULL, 610, 0, '1', NULL, NULL, 'nokia_9_pureview.png', '0'),
(11, 5, 4, 'Nokia 8.1', 'nokia-8.1', NULL, 410, 600, '1', NULL, NULL, 'nokia_8.1.jpeg', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `productColor`
--

CREATE TABLE `productColor` (
  `id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `coefficient` float(11,6) DEFAULT 1.000000,
  `status` int(1) DEFAULT 1,
  `order` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `productColor`
--

INSERT INTO `productColor` (`id`, `product_id`, `color`, `coefficient`, `status`, `order`) VALUES
(1, 1, 'Black', 1.000000, 1, 0),
(2, 1, 'Red', 1.100000, 1, 2),
(3, 1, 'Silver', 0.950000, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `productComplect`
--

CREATE TABLE `productComplect` (
  `id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `complect` varchar(255) DEFAULT NULL,
  `coefficient` float(11,6) DEFAULT 1.000000,
  `status` int(1) DEFAULT 1,
  `order` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `productComplect`
--

INSERT INTO `productComplect` (`id`, `product_id`, `complect`, `coefficient`, `status`, `order`) VALUES
(1, 1, 'Minimum', 0.800000, 1, 1),
(2, 1, 'Standart', 1.000000, 1, 0),
(3, 1, 'Maximum', 1.200000, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `related_product`
--

CREATE TABLE `related_product` (
  `product_id` int(11) NOT NULL,
  `related_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `related_product`
--

INSERT INTO `related_product` (`product_id`, `related_id`) VALUES
(1, '6,7,10'),
(2, '5,8'),
(3, '4,9,11'),
(4, '3,9,11'),
(5, '2,8'),
(6, '1,7,10'),
(7, '1,6,10'),
(8, '2,5'),
(9, '3,4,11'),
(10, '1,6,7'),
(11, '3,4,9');

-- --------------------------------------------------------

--
-- Структура таблицы `telephone_attribut`
--

CREATE TABLE `telephone_attribut` (
  `id` int(10) NOT NULL,
  `product_id` int(10) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `screen` float(2,1) DEFAULT NULL,
  `RAM` int(2) DEFAULT NULL,
  `ROM` int(10) DEFAULT NULL,
  `display_resolution` varchar(255) DEFAULT NULL,
  `OS` varchar(255) DEFAULT NULL,
  `Camera` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `telephone_attribut`
--

INSERT INTO `telephone_attribut` (`id`, `product_id`, `brand`, `screen`, `RAM`, `ROM`, `display_resolution`, `OS`, `Camera`) VALUES
(1, 1, 'Samsung', 6.5, 8, 128, '3040x1440', 'Android', 16),
(2, 2, 'Samsung', 5.8, 4, 64, '2960x1440', 'Android', 12),
(3, 3, 'Samsung', 5.8, 4, 64, '2960x1440', 'Android', 12),
(4, 4, 'Iphone', 5.5, 3, 64, '1920x1080', 'iOS', 12),
(5, 5, 'Iphone', 5.8, 4, 64, '2436x1125', 'iOS', 12),
(6, 6, 'Iphone', 5.8, 3, 64, '2436x1125', 'iOS', 12),
(7, 7, 'Xiaomi', 6.4, 6, 128, '2340x1080', 'Android', 48),
(8, 8, 'Xiaomi', 6.4, 6, 64, '2340x1080', 'Android', 48),
(9, 9, 'Xiaomi', 6.2, 6, 64, '2248x1080', 'Andriod', 12),
(10, 10, 'Nokia', 6.0, 6, 128, '2960x1440', 'Android', 16),
(11, 11, 'Nokia', 6.2, 4, 64, '2280x1080', 'Android', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `User`
--

INSERT INTO `User` (`id`, `login`, `email`, `password`, `telephone`, `address`, `role`) VALUES
(16, 'maks', 'makszona@mail.ru', '$2y$10$FmJE/jsvnTyzYTpC85wp.OraOzauJLxhTYYZSdRLQYFFoeVnKqXQK', '89202773392', 'town Schekino', 'user'),
(17, 'maksim', 'maksim@mail.ru', '$2y$10$FpvtJK5g.BkHhUcs57ClOuXj8VguiJ7cRZni9Z18dYe7Q7mJcIW.6', '89207654455', 'town Tula', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_user`
--
ALTER TABLE `order_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Индексы таблицы `productColor`
--
ALTER TABLE `productColor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productColor_order_uindex` (`order`);

--
-- Индексы таблицы `productComplect`
--
ALTER TABLE `productComplect`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productComplect_order_uindex` (`order`);

--
-- Индексы таблицы `related_product`
--
ALTER TABLE `related_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `telephone_attribut`
--
ALTER TABLE `telephone_attribut`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `User_email_uindex` (`email`),
  ADD UNIQUE KEY `User_login_uindex` (`login`),
  ADD UNIQUE KEY `User_telephone_uindex` (`telephone`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `productColor`
--
ALTER TABLE `productColor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `productComplect`
--
ALTER TABLE `productComplect`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `telephone_attribut`
--
ALTER TABLE `telephone_attribut`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- База данных: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
