--
-- Das Aworns Tool für MYBB
-- --------------------------------------------------------
--
-- Tabellenstruktur für Tabelle `mybb_trophies`
--

CREATE TABLE `mybb_trophies` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `image` varchar(155) NOT NULL,
  `name` varchar(155) NOT NULL,
  `description` varchar(500) NOT NULL,
  `timestamp` varchar(20) NOT NULL,
  `TID` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `mybb_trophies`
--
ALTER TABLE `mybb_trophies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `mybb_trophies`
--
ALTER TABLE `mybb_trophies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
