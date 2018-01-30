<?php

namespace KdManagement\Controller;

class LocationController extends AbstractController
{
    protected function setupActions()
    {
        add_action('admin_menu', [$this, 'adminMenu']);
    }

    public function adminMenu()
    {
        add_submenu_page(
            'kdm_index',
            'Państwa',
            'Państwa',
            'kdm_admin',
            'kdm_country_list',
            [$this, 'countryList']
        );

        add_submenu_page(
            'kdm_index',
            'Miasta',
            'Miasta',
            'kdm_admin',
            'kdm_city_list',
            [$this, 'cityList']
        );

        add_submenu_page(
            'kdm_country_list',
            'Dodaj państwo',
            'Dodaj państwo',
            'kdm_admin',
            'kdm_country_add',
            [$this, 'countryAdd']
        );

        add_submenu_page(
            'kdm_country_list',
            'Edytuj państwo',
            'Edytuj państwo',
            'kdm_admin',
            'kdm_country_edit',
            [$this, 'countryEdit']
        );

        add_submenu_page(
            'kdm_city_list',
            'Dodaj miasto',
            'Dodaj miasto',
            'kdm_admin',
            'kdm_city_add',
            [$this, 'cityAdd']
        );

        add_submenu_page(
            'kdm_city_list',
            'Edytuj miasto',
            'Edytuj miasto',
            'kdm_admin',
            'kdm_city_edit',
            [$this, 'cityEdit']
        );
    }

    public function countryList()
    {
        $countries = $this->container['country.repository']->get();

        $this->container['twig']->display('views/country/list.twig', [
            'countries' => $countries
        ]);
    }

    public function cityList()
    {
        $cities = $this->container['city.repository']->get();

        $this->container['twig']->display('views/city/list.twig', [
            'cities' => $cities
        ]);
    }

    public function countryAdd()
    {
        if ($_POST) {
            $this->handleCountrySave($_POST);
        }

        $languages = $this->container['language.repository']->get();

        $this->container['twig']->display('views/country/form.twig', [
            'languages' => $languages
        ]);
    }

    public function countryEdit()
    {
        if ($_POST) {
            $this->handleCountrySave($_POST);
        }

        $countryTextLanguageEntities = $this->container['countrylanguage.repository']
            ->getByCountryId($_GET['country_id']);

        $countryTextLanguages = [];

        foreach ($countryTextLanguageEntities as $countryTextLanguageEntity) {
            $countryTextLanguages[$countryTextLanguageEntity->language_id] = $countryTextLanguageEntity->name;
        }

        $country = $this->container['country.repository']
            ->getFirstByCountryId($_GET['country_id']);

        $languages = $this->container['language.repository']->get();

        $this->container['twig']->display('views/country/form.twig', [
            'languages' => $languages,
            'country' => $country,
            'text_languages' => $countryTextLanguages
        ]);
    }

    private function handleCountrySave($postData)
    {
        $this->container['country.service']
            ->save($postData);

        $this->redirect( admin_url('admin.php?page=kdm_country_list') );
    }

    public function cityAdd()
    {
        if ($_POST) {
            $this->handleCitySave($_POST);
        }

        $languages = $this->container['language.repository']->get();
        $countries = $this->container['country.repository']->get();

        $this->container['twig']->display('views/city/form.twig', [
            'languages' => $languages,
            'countries' => $countries
        ]);
    }

    public function cityEdit()
    {
        if ($_POST) {
            $this->handleCitySave($_POST);
        }

        $cityTextLanguageEntities = $this->container['citylanguage.repository']
            ->getByCityId($_GET['city_id']);
        $cityTextLanguages = [];

        foreach ($cityTextLanguageEntities as $cityTextLanguageEntity) {
            $cityTextLanguages[$cityTextLanguageEntity->language_id] = $cityTextLanguageEntity->name;
        }

        $city = $this->container['city.repository']
            ->getFirstByCityId($_GET['city_id']);

        $languages = $this->container['language.repository']->get();
        $countries = $this->container['country.repository']->get();

        $this->container['twig']->display('views/city/form.twig', [
            'countries' => $countries,
            'languages' => $languages,
            'city' => $city,
            'text_languages' => $cityTextLanguages
        ]);
    }

    private function handleCitySave($postData)
    {
        $this->container['city.service']
            ->save($postData);

        $this->redirect( admin_url('admin.php?page=kdm_city_list') );
    }
}
