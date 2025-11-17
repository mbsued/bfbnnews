<?php

/*
 * This file is part of the "bfbn" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Bfbnnews\Bfbnnews\Backend\FormDataProvider;

use TYPO3\CMS\Backend\Form\FormDataProviderInterface;
use TYPO3\CMS\Core\Context\Context;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Fill the news records with default values
 */
class NewsRowInitializeNew implements FormDataProviderInterface
{

    public function addData(array $result): array
    {
        if ($result['tableName'] !== 'tx_news_domain_model_news') {
            return $result;
        }

        if ($result['command'] === 'new') {
            $result = $this->fillDateField($result);
        }

        return $result;
    }

    protected function fillDateField(array $result): array
    {

        if (isset($result['pageTsConfig']['tx_news.']['predefine.'])
            && is_array($result['pageTsConfig']['tx_news.']['predefine.'])
        ) {
            if (isset($result['pageTsConfig']['tx_news.']['predefine.']['endtime'])) {
                $calculatedTime = strtotime($result['pageTsConfig']['tx_news.']['predefine.']['endtime']);

                if ($calculatedTime !== false) {
                    $result['databaseRow']['endtime'] = $calculatedTime;
                }
            }
        }

        return $result;
    }
}