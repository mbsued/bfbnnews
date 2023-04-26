CREATE TABLE tx_news_domain_model_news (

	termin smallint(5) unsigned DEFAULT '0' NOT NULL,
	betreff varchar(255) DEFAULT '' NOT NULL,
	beginn_termin bigint(20) DEFAULT '0',
	ende_termin bigint(20) DEFAULT '0',	
	veranstaltungsort varchar(255) DEFAULT '' NOT NULL,
	veranstalter varchar(255) DEFAULT '' NOT NULL,
	alarm smallint(5) unsigned DEFAULT '0' NOT NULL,
	erinnerung int(11) DEFAULT '0' NOT NULL

);
