<?php

use Pimple\Container;
use Pixie\Connection;
use Pixie\QueryBuilder\QueryBuilderHandler;

use KdManagement\Controller;
use KdManagement\Repository;
use KdManagement\Service;
use KdManagement\Marshaller;
use KdManagement\Helper;

global $container;
global $queryBuilder;

$config = [
    'driver'    => 'mysql',
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USER,
    'password'  => DB_PASSWORD,
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci'
];

$connection = new \Pixie\Connection('mysql', $config, 'QB');
$queryBuilder = new QueryBuilderHandler($connection);

$container = new Container();

$container['querybuilder'] = $queryBuilder;
$container['twig'] = function ($c) {

    $loader = new Twig_Loader_Filesystem(plugin_dir_path( __FILE__ ) . 'KdManagement/Resources');
    $twig = new Twig_Environment($loader);

    return $twig;
};

// controllers
$container['main.controller']           = new Controller\MainController();
$container['ajax.controller']           = new Controller\AjaxController();
$container['text.controller']           = new Controller\TextController();
$container['location.controller']       = new Controller\LocationController();
$container['organization.controller']   = new Controller\OrganizationController();
$container['payment.controller']        = new Controller\PaymentController();

// repositories
$container['country.repository']                = new Repository\CountryRepository();
$container['language.repository']               = new Repository\LanguageRepository();
$container['countrylanguage.repository']        = new Repository\CountryLanguageRepository();
$container['city.repository']                   = new Repository\CityRepository();
$container['citylanguage.repository']           = new Repository\CityLanguageRepository();
$container['emailtemplate.repository']          = new Repository\EmailTemplateRepository();
$container['emailtemplatelanguage.repository']  = new Repository\EmailTemplateLanguageRepository();
$container['organization.repository']           = new Repository\OrganizationRepository();
$container['organizationlanguage.repository']   = new Repository\OrganizationLanguageRepository();
$container['text.repository']                   = new Repository\TextRepository();
$container['textlanguage.repository']           = new Repository\TextLanguageRepository();
$container['donation.repository']               = new Repository\DonationRepository();
$container['user.repository']                   = new Repository\UserRepository();

// services
$container['country.service']       = new Service\CountryService();
$container['city.service']          = new Service\CityService();
$container['organization.service']  = new Service\OrganizationService();
$container['mapmarker.service']     = new Service\MapMarkerService();
$container['text.service']          = new Service\TextService();
$container['language.service']      = new Service\LanguageService();
$container['donation.service']      = new Service\DonationService();
$container['user.service']          = new Service\UserService();
$container['email.service']         = new Service\EmailService();

// marshallers
$container['tocountryentity.marshaller']            = new Marshaller\ToCountryEntityMarshaller();
$container['tocountrylanguageentities.marshaller']  = new Marshaller\ToCountryLanguageEntitiesMarshaller();
$container['tocityentity.marshaller']               = new Marshaller\ToCityEntityMarshaller();
$container['tocitylanguageentities.marshaller']     = new Marshaller\ToCityLanguageEntitiesMarshaller();

// helpers
$container['array.helper'] = new Helper\ArrayHelper();


$container['textlanguagesarray'] = $container['text.service']->getTextLanguagesArray();
