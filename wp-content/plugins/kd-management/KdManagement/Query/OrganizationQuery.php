<?php

namespace KdManagement\Query;

use Pixie\QueryBuilder\QueryBuilderHandler;

use KdManagement\ValueObject\OrganizationPostTypeVO;

class OrganizationQuery extends QueryBuilderHandler
{
    /**
     * TODO do przemyślenia jak to można dobrze wykorzystać, na ten moment nie
     * wiadomo co dokładnie trzeba będzie wyciągać, może wyodrębnienie poszczególnych
     * joinów do osobnych metod?
     */
    public function getBaseQuery()
    {
        return $this->table('kdm_organizations')
            ->leftJoin('kdm_organization_languages', 'kdm_organization_languages.organization_id', '=', 'kdm_organizations.organization_id')
            ->leftJoin('kdm_cities', 'kdm_cities.city_id', '=', 'kdm_organizations.city_id')
            ->leftJoin('kdm_city_languages', 'kdm_city_languages.city_id', '=', 'kdm_cities.city_id')
            ->leftJoin('kdm_countries', 'kdm_countries.country_id', '=', 'kdm_cities.country_id')
            ->leftJoin('kdm_country_languages', 'kdm_country_languages.country_id', '=', 'kdm_countries.country_id');
    }

    public function baseQuery($languageLabel)
    {
        return $this->table('kdm_organizations')
            ->select([
                'kdm_organizations.organization_id' => 'organizationId',
                'kdm_organization_languages.name'   => 'organizationName',
                'kdm_organization_languages.goal'   => 'organizationGoal',
                'kdm_organizations.logo_img_url'    => 'organizationLogo',
                'kdm_organizations.website_url'     => 'organizationWebsite',
                'wpkd_posts.guid'                   => 'organizationPage',
                'kdm_organizations.paypal_email'    => 'organizationPaypal',
                'kdm_organizations.bm_service_id'   => 'organizationBmServiceId',
                'kdm_organizations.bm_key'          => 'organizationBmKey',
                'kdm_organizations.city_id'         => 'cityId',
                'kdm_city_languages.name'           => 'cityName',
                'kdm_cities.latitude'               => 'cityLatitude',
                'kdm_cities.longitude'              => 'cityLongitude',
                'kdm_cities.country_id'             => 'countryId',
                'kdm_country_languages.name'        => 'countryName',
                'kdm_countries.latitude'            => 'countryLatitude',
                'kdm_countries.longitude'           => 'countryLongitude',
                'kdm_countries.flag_img_url'        => 'countryFlag',
                'wpkd_posts.post_content'           => 'pageContent',
                'wpkd_posts.post_status'            => 'organizationStatus',
                'wpkd_posts.post_type'              => 'organizationEdition'
            ])
            ->setFetchMode(\PDO::FETCH_ASSOC)
            ->leftJoin('kdm_languages', function($table) use ($languageLabel){
                $table->on('kdm_languages.label', '=', \QB::raw('\''.$languageLabel.'\''));
            })
            ->leftJoin('kdm_cities', 'kdm_cities.city_id', '=', 'kdm_organizations.city_id')
            ->leftJoin('kdm_countries', 'kdm_countries.country_id', '=', 'kdm_cities.country_id')
            ->leftJoin('kdm_organization_languages', function($table){
                $table->on('kdm_organization_languages.organization_id', '=', 'kdm_organizations.organization_id');
                $table->on('kdm_organization_languages.language_id', '=', 'kdm_languages.language_id');
            })
            ->leftJoin('kdm_city_languages', function($table){
                $table->on('kdm_city_languages.city_id', '=', 'kdm_cities.city_id');
                $table->on('kdm_city_languages.language_id', '=', 'kdm_languages.language_id');
            })
            ->leftJoin('kdm_country_languages', function($table){
                $table->on('kdm_country_languages.country_id', '=', 'kdm_countries.country_id');
                $table->on('kdm_country_languages.language_id', '=', 'kdm_languages.language_id');
            })
            ->join('wpkd_posts', 'wpkd_posts.ID', '=', 'kdm_organizations.organization_id');
    }

    private function setLanguage($languageLabel)
    {
        return $this->leftJoin('kdm_languages', function($table) use ($languageLabel){
                $table->on('kdm_languages.label', '=', \QB::raw('\''.$languageLabel.'\''));
            });
    }

    public function setEdition($postType)
    {
        return $this->where('wpkd_posts.post_type', OrganizationPostTypeVO::$editionToPostType[$postType]);
    }

    public function setStatus($status)
    {
        return $this->where('wpkd_posts.post_status', $status);
    }
}
