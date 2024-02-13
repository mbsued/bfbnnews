<?php
declare(strict_types=1);

namespace Bfbnnews\Bfbnnews\UserFunc;

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\Resource\FileCollector;

/**
 * Class AddFilesToPowermail
 */
class AddFilesToPowermail
{

    /**
     * @var ContentObjectRenderer
     */
    public $cObj;

    /**
     * UserFunc configuration TypoScript
     *
     * @var array
     */
    protected $configuration = [];

    /**
     * Value to add
     *
     * @var string
     */
    protected $input = '';
	
	public function addFiles (string $content = '', array $configuration = []): string
    {
        unset($content);
        $this->initialize($configuration);			
		if ($this->getInput() !== null) {
			$return = $this->getFiles();
			return $return;
		};	
        return '';
    }
	 /**
	 * getFiles function
     *
	 * @return void
     */
    protected function getFiles(): string
	
	{
		$referencesForeignTable = 'tx_news_domain_model_news';	
		$referencesFieldName = 'fal_related_files';
		$fileRepository = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Resource\FileRepository::class);
		$fileObjects = $fileRepository->findByRelation($referencesForeignTable, $referencesFieldName, $this->getInput());
				
		$availableFileObjectCount = count($fileObjects);
		
		$content = '';
		if ($availableFileObjectCount > 0) {		
 
			foreach ($fileObjects as $key => $value) {
			  $content .= $value->getPublicUrl() . ',';		  
			}
		}
		
		return $content;
	}
	    /**
     * Init function
     *
     * @param array $configuration
     * @return void
     */
    protected function initialize(array $configuration): void
    {
        $this->configuration = $configuration;
        $this->setInput();
    }

    /**
     * @return ConvertFilenames
     */
    protected function setInput(): AddFilesToPowermail
    {
        $input = $this->cObj->cObjGetSingle($this->configuration['input'], $this->configuration['input.']);
		
		if (!empty($input)) {
            $this->input = $input;
        }
        return $this;
    }
	
	    /**
     * @return string
     */
    public function getInput(): string
    {
        return $this->input;
    }
}