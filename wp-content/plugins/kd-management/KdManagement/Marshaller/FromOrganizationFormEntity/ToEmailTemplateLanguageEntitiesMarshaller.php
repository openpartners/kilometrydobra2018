<?php

namespace KdManagement\Marshaller\FromOrganizationFormEntity;

use KdManagement\Marshaller\AbstractMarshaller;
use KdManagement\Entity\OrganizationFormEntity;
use KdManagement\Entity\EmailTemplateLanguageEntity;

class ToEmailTemplateLanguageEntitiesMarshaller extends AbstractMarshaller
{
    /**
     * @param   OrganizationFormEntity $organizationFormEntity
     * @return  EmailTemplateLanguageEntity[]
     */
    public function marshal(OrganizationFormEntity $organizationFormEntity)
    {
        $emailTemplateLanguageEntities = [];

        foreach ($organizationFormEntity->email_templates_languages as $languageId => $emailTemplates) {
            foreach ($emailTemplates as $emailTemplateId => $data) {
                $emailTemplateLanguageEntities[] = new EmailTemplateLanguageEntity([
                    'email_template_id' => $emailTemplateId,
                    'organization_id'   => $organizationFormEntity->organization_id,
                    'language_id'       => $languageId,
                    'subject'           => $data['subject'],
                    'content'           => $data['content']
                ]);
            }
        }

        return $emailTemplateLanguageEntities;
    }
}
