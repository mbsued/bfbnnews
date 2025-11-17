<?php

use Bfbnnews\Bfbnnews\Backend\FormDataProvider\NewsRowInitializeNew;
use TYPO3\CMS\Backend\Form\FormDataProvider\DatabaseRowInitializeNew;

defined('TYPO3') || die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'bfbnnews';
/**
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)->registerImplementation(\GeorgRinger\News\Domain\Model\News::class, \Bfbnnews\Bfbnnews\Domain\Model\News::class);
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)->registerImplementation(\GeorgRinger\News\Domain\Model\NewsDefault::class, \Bfbnnews\Bfbnnews\Domain\Model\News::class);
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)->registerImplementation(\GeorgRinger\News\Domain\Model\NewsInternal::class, \Bfbnnews\Bfbnnews\Domain\Model\News::class);
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)->registerImplementation(\GeorgRinger\News\Domain\Model\NewsExternal::class, \Bfbnnews\Bfbnnews\Domain\Model\News::class);
*/

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\GeorgRinger\News\Domain\Repository\NewsRepository::class] = [
'className' => \Bfbnnews\Bfbnnews\Domain\Repository\NewsRepository::class
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][NewsRowInitializeNew::class] = [
	'depends' => [
		DatabaseRowInitializeNew::class,
	],
];