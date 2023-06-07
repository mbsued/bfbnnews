<?php
defined('TYPO3_MODE') || die('Access denied.');

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

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
   'TCAdefaults.tx_news_domain_model_news.endtime ='.strtotime('+2 years')
);