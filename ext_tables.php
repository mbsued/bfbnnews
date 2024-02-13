<?php
defined('TYPO3') || die('Access denied.');

/* orderByNews um beginn_termin erweitern */

$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByNews'] .= ',beginn_termin';
