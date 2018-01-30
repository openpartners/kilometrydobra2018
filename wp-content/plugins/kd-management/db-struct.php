<?php
    die;
?>
CREATE TABLE IF NOT EXISTS kdm_languages (
    `language_id` int(11) NOT NULL AUTO_INCREMENT,
    `label` varchar(255) DEFAULT NULL,
    `name` varchar(255) DEFAULT NULL,
    UNIQUE (`label`),
    PRIMARY KEY (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS kdm_countries (
    `country_id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `latitude` varchar(255) DEFAULT NULL,
    `longitude` varchar(255) DEFAULT NULL,
    `flag_img_url` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS kdm_cities (
    `city_id` int(11) NOT NULL AUTO_INCREMENT,
    `country_id` int(11) NOT NULL,
    `name` varchar(255) NOT NULL,
    `latitude` varchar(255) DEFAULT NULL,
    `longitude` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`city_id`),
    CONSTRAINT `kdm_cities_fk_1` FOREIGN KEY (`country_id`) REFERENCES `kdm_countries` (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS kdm_country_languages (
    `country_language_id` int(11) NOT NULL AUTO_INCREMENT,
    `country_id` int(11) NOT NULL,
    `language_id` int(11) NOT NULL,
    `name` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`country_language_id`),
    UNIQUE (`country_id`, `language_id`),
    CONSTRAINT `kdm_country_languages_fk_1` FOREIGN KEY (`language_id`) REFERENCES `kdm_languages` (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS kdm_city_languages (
    `city_language_id` int(11) NOT NULL AUTO_INCREMENT,
    `city_id` int(11) NOT NULL,
    `language_id` int(11) NOT NULL,
    `name` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`city_language_id`),
    UNIQUE (`city_id`, `language_id`),
    CONSTRAINT `kdm_city_languages_fk_1` FOREIGN KEY (`language_id`) REFERENCES `kdm_languages` (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS kdm_organizations (
    `organization_id` int(11) NOT NULL AUTO_INCREMENT,
    `city_id` int(11) NOT NULL,
    `bm_service_id` int(11) DEFAULT NULL,
    `bm_key` varchar(255) DEFAULT NULL,
    `paypal_email` varchar(75) DEFAULT NULL,
	`logo_img_url` varchar(255) DEFAULT NULL,
    `website_url` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`organization_id`),
    CONSTRAINT `kdm_organizations_fk_1` FOREIGN KEY (`city_id`) REFERENCES `kdm_cities` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS kdm_organization_languages (
    `organization_language_id` int(11) NOT NULL AUTO_INCREMENT,
    `organization_id` int(11) NOT NULL,
    `language_id` int(11) NOT NULL,
    `name` varchar(255) DEFAULT NULL,
    `goal` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`organization_language_id`),
    UNIQUE (`organization_id`, `language_id`),
    CONSTRAINT `kdm_organization_languages_fk_1` FOREIGN KEY (`language_id`) REFERENCES `kdm_languages` (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS kdm_email_templates (
    `email_template_id` int(11) NOT NULL AUTO_INCREMENT,
    `label` varchar(255) NOT NULL,
    `description` varchar(255) NOT NULL,
    UNIQUE (`label`),
    PRIMARY KEY (`email_template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS kdm_email_template_languages (
    `email_template_language_id` int(11) NOT NULL AUTO_INCREMENT,
    `email_template_id` int(11) NOT NULL,
    `organization_id` int(11) NOT NULL,
    `language_id` int(11) NOT NULL,
    `subject` varchar(255) DEFAULT NULL,
    `content` TEXT,
    PRIMARY KEY (`email_template_language_id`),
    UNIQUE (`email_template_id`, `organization_id`, `language_id`),
    CONSTRAINT `kdm_email_template_languages_fk_1` FOREIGN KEY (`language_id`) REFERENCES `kdm_languages` (`language_id`),
    CONSTRAINT `kdm_email_template_languages_fk_2` FOREIGN KEY (`organization_id`) REFERENCES `kdm_organizations` (`organization_id`),
    CONSTRAINT `kdm_email_template_languages_fk_3` FOREIGN KEY (`email_template_id`) REFERENCES `kdm_email_templates` (`email_template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS kdm_texts (
    `text_id` int(11) NOT NULL AUTO_INCREMENT,
    `label` varchar(255) NOT NULL,
    `description` varchar(255) NOT NULL,
    UNIQUE (`label`),
    PRIMARY KEY (`text_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS kdm_text_languages (
    `text_language_id` int(11) NOT NULL AUTO_INCREMENT,
    `text_id` int(11) NOT NULL,
    `language_id` int(11) NOT NULL,
    `text` TEXT,
    PRIMARY KEY (`text_language_id`),
    UNIQUE (`text_id`, `language_id`),
    CONSTRAINT `kdm_text_languages_fk_1` FOREIGN KEY (`language_id`) REFERENCES `kdm_languages` (`language_id`),
    CONSTRAINT `kdm_text_languages_fk_2` FOREIGN KEY (`text_id`) REFERENCES `kdm_texts` (`text_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
