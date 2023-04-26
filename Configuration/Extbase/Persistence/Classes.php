<?php
declare(strict_types = 1);

return [
    \Bfbnnews\Bfbnnews\Domain\Model\News::class => [
        'tableName' => 'tx_news_domain_model_news',        
    ],
];

return [
	\GeorgRinger\News\Domain\Model\News::class => [
		'subclasses' => [
		0 => \Bfbnnews\Bfbnnews\Domain\Model\NewsDefault::class,
		1 => \Bfbnnews\Bfbnnews\Domain\Model\NewsInternal::class,
		2 => \Bfbnnews\Bfbnnews\Domain\Model\NewsExternal::class,
		]
	],
	\Bfbnnews\Bfbnnews\Domain\Model\NewsDefault::class => [
		'tableName' => 'tx_news_domain_model_news',
		'recordType' => 0,
	],
	\Bfbnnews\Bfbnnews\Domain\Model\NewsInternal::class => [
		'tableName' => 'tx_news_domain_model_news',
		'recordType' => 1,
	],
	\Bfbnnews\Bfbnnews\Domain\Model\NewsExternal::class => [
		'tableName' => 'tx_news_domain_model_news',
		'recordType' => 2,
	],	
];
