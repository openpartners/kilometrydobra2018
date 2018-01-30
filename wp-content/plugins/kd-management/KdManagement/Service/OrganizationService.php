<?php

namespace KdManagement\Service;

use KdManagement\Entity\OrganizationFormEntity;
use KdManagement\Marshaller\FromOrganizationFormEntity as Marshaller;
use KdManagement\Traits\DatabaseTrait;

class OrganizationService extends AbstractService
{
    use DatabaseTrait;

    public function saveOrganizationForm(OrganizationFormEntity $organizationFormEntity)
    {
        return $this->runInTransaction($this->container['querybuilder']->pdo(), function() use ($organizationFormEntity) {

            /**
             * TODO przenieść marshallery do DI (trochę długawe nazwy...)
             */
            $organizationEntity = (new Marshaller\ToOrganizationEntityMarshaller())
                ->marshal($organizationFormEntity);

            $organizationLanguageEntities = (new Marshaller\ToOrganizationLanguageEntitiesMarshaller())
                ->marshal($organizationFormEntity);

            $emailTemplateLanguageEntities = (new Marshaller\ToEmailTemplateLanguageEntitiesMarshaller())
                ->marshal($organizationFormEntity);


            $this->container['organization.repository']->save($organizationEntity);

            foreach ($organizationLanguageEntities as $organizationLanguageEntity) {
                $this->container['organizationlanguage.repository']->save($organizationLanguageEntity);
            }

            foreach ($emailTemplateLanguageEntities as $emailTemplateLanguageEntity) {
                $this->container['emailtemplatelanguage.repository']->save($emailTemplateLanguageEntity);
            }

            return true;
        });
    }

    public function getOrganizationForm($organizationId)
    {
        $organizationEntity = $this->container['organization.repository']
            ->getFirstByOrganizationId($organizationId);

        $organizationLanguageEntities = $this->container['organizationlanguage.repository']
            ->getByOrganizationId($organizationId);

        $emailTemplateLanguageEntities = $this->container['emailtemplatelanguage.repository']
            ->getByOrganizationId($organizationId);

        $organizationFormData = [];
        if ($organizationEntity) {
            $organizationFormData = $organizationEntity();
        }

        foreach ($organizationLanguageEntities as $organizationLanguageEntity) {
            $organizationFormData['organization_languages'][$organizationLanguageEntity->language_id] = [
                'name'  => $organizationLanguageEntity->name,
                'goal'  => $organizationLanguageEntity->goal
            ];
        }

        foreach ($emailTemplateLanguageEntities as $emailTemplateLanguageEntity) {
            $organizationFormData['email_templates_languages']
                [$emailTemplateLanguageEntity->language_id]
                [$emailTemplateLanguageEntity->email_template_id] = [
                'subject'   => $emailTemplateLanguageEntity->subject,
                'content'   => $emailTemplateLanguageEntity->content
            ];
        }

        return new OrganizationFormEntity($organizationFormData);
    }

    public function getOrganizations($edition, $languageLabel)
    {
        $organizationList = [];

        $donations = $this->container['donation.repository']
            ->getDonations($edition);

        $organizations = $this->container['organization.repository']
            ->getOrganizationList($edition, $languageLabel);

        foreach ($organizations as $key => $organization) {
            $organizations[$key]['money'] = number_format((float) @array_sum(@array_column($donations[$organization['organizationId']], '_price')), 2, '.', '');
        }

        return $organizations;
    }

    public function getOrganizationRanking($edition, $languageLabel)
    {
        $organizationList = [];

        $donations = $this->container['donation.repository']
            ->getDonations($edition);

        $organizations = $this->container['organization.repository']
            ->getOrganizationRanking($edition, $languageLabel);

        foreach ($organizations as $key => $organization) {
            $organizations[$key]['money'] = number_format((float) @array_sum(@array_column($donations[$organization['organizationId']], '_price')), 2, '.', '');
        }

        return $organizations;
    }

    public function getOrganizationtList($edition, $languageLabel)
    {
        $organizationList = [];

        $organizations = $this->container['organization.repository']
            ->getOrganizationList($edition, $languageLabel);

        foreach ($organizations as $organization) {
            $organizationList[$organization['countryId']][] = $organization;
        }

        return $organizationList;
    }

    public function getOrganizationCount($edition)
    {
        $organizations = $this->container['organization.repository']
            ->getOrganizationList($edition);

        return count($organizations);
    }

    public function getOrganization($organizationId, $languageLabel)
    {
        $organization = $this->container['organization.repository']
            ->getFirstOrganizationAggregateByOrganizationId($organizationId, $languageLabel);

        $organization['pageContent'] = $this->container['language.service']
            ->getPostContent($organization['pageContent'], $languageLabel);

        return $organization;
    }
}
