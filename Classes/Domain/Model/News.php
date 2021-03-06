<?php

namespace GeorgRinger\NewsImporticsxml\Domain\Model;

/**
 * This file is part of the "news_importicsxml" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */
class News extends \GeorgRinger\News\Domain\Model\News
{

    /** @var string */
    protected $newsImportData;

    /**
     * @return string
     */
    public function getNewsImportData()
    {
        return $this->newsImportData;
    }

    /**
     * @param string $newsImportData
     */
    public function setNewsImportData($newsImportData)
    {
        $this->newsImportData = $newsImportData;
    }
}
