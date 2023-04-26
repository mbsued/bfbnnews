<?php
declare(strict_types=1);

namespace Bfbnnews\Bfbnnews\Domain\Model;


/***
 *
 * This file is part of the "BFBN News" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 BFBN-Team <mbsued.ma4@augsburg.de>, BFBN
 *
 ***/
/**
 * Erweiterung der Tabelle tx_news_domain_model_news um Terminfelder
 */
class News extends \GeorgRinger\News\Domain\Model\News
{

    /**
     * Termin
     * 
     * @var bool
     */
    protected $termin = false;

    /**
     * Betreff des Termins
     * 
     * @var string
     */
    protected $betreff = '';

    /**
     * Beginndatum des Termins
     * 
     * @var \DateTime
     */
    protected $beginnTermin = 0;

    /**
     * Endedatum des Termins
     * 
     * @var \DateTime
     */
    protected $endeTermin = 0;

    /**
     * Veranstaltungsort
     * 
     * @var string
     */
    protected $veranstaltungsort = '';

    /**
     * Veranstalter
     * 
     * @var string
     */
    protected $veranstalter = '';

    /**
     * Alarm
     * 
     * @var bool
     */
    protected $alarm = false;

    /**
     * Erinnerung
     * 
     * @var int
     */
    protected $erinnerung = 0;

    /**
     * Returns the termin
     * 
     * @return bool $termin
     */
    public function getTermin()
    {
        return $this->termin;
    }

    /**
     * Sets the termin
     * 
     * @param bool $termin
     * @return void
     */
    public function setTermin($termin)
    {
        $this->termin = $termin;
    }

    /**
     * Returns the boolean state of termin
     * 
     * @return bool
     */
    public function isTermin()
    {
        return $this->termin;
    }

    /**
     * Returns the betreff
     * 
     * @return string $betreff
     */
    public function getBetreff()
    {
        return $this->betreff;
    }

    /**
     * Sets the betreff
     * 
     * @param string $betreff
     * @return void
     */
    public function setBetreff($betreff)
    {
        $this->betreff = $betreff;
    }

    /**
     * Returns the beginntermin
     * 
     * @return \DateTime $beginnTermin
     */
    public function getBeginnTermin()
    {
        return $this->beginnTermin;
    }

    /**
     * Sets the beginntermin
     * 
     * @param \DateTime $beginnTermin
     * @return void
     */
    public function setBeginnTermin($beginnTermin)
    {
        $this->beginnTermin = $beginnTermin;
    }


    /**
     * Returns the endetermin
     * 
     * @return \DateTime $endeTermin
     */
    public function getEndeTermin()
    {
        return $this->endeTermin;
    }

    /**
     * Sets the endetermin
     * 
     * @param \DateTime $endeTermin
     * @return void
     */
    public function setEndeTermin($endeTermin)
    {
        $this->endeTermin = $endeTermin;
    }

    /**
     * Returns the veranstaltungsort
     * 
     * @return string $veranstaltungsort
     */
    public function getVeranstaltungsort()
    {
        return $this->veranstaltungsort;
    }

    /**
     * Sets the veranstaltungsort
     * 
     * @param string $veranstaltungsort
     * @return void
     */
    public function setVeranstaltungsort($veranstaltungsort)
    {
        $this->veranstaltungsort = $veranstaltungsort;
    }

    /**
     * Returns the veranstalter
     * 
     * @return string $veranstalter
     */
    public function getVeranstalter()
    {
        return $this->veranstalter;
    }

    /**
     * Sets the veranstalter
     * 
     * @param string $veranstalter
     * @return void
     */
    public function setVeranstalter($veranstalter)
    {
        $this->veranstalter = $veranstalter;
    }

    /**
     * Returns the alarm
     * 
     * @return bool $alarm
     */
    public function getAlarm()
    {
        return $this->alarm;
    }

    /**
     * Sets the alarm
     * 
     * @param bool $alarm
     * @return void
     */
    public function setAlarm($alarm)
    {
        $this->alarm = $alarm;
    }

    /**
     * Returns the boolean state of alarm
     * 
     * @return bool
     */
    public function isAlarm()
    {
        return $this->alarm;
    }

    /**
     * Returns the erinnerung
     * 
     * @return int $erinnerung
     */
    public function getErinnerung()
    {
        return $this->erinnerung;
    }

    /**
     * Sets the erinnerung
     * 
     * @param int $erinnerung
     * @return void
     */
    public function setErinnerung($erinnerung)
    {
        $this->erinnerung = $erinnerung;
    }
}
