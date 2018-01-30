<?php

namespace KdManagement\Repository;

use KdManagement\Entity\EmailTemplateLanguageEntity;

class EmailTemplateLanguageRepository extends AbstractRepository
{
    protected $table        = 'kdm_email_template_languages';
    protected $entityClass  = EmailTemplateLanguageEntity::class;

    public function get()
    {
        return $this->mapper()->get();
    }

    public function save(EmailTemplateLanguageEntity $emailTemplateLanguageEntity)
    {
        return $this->mapper()
            ->onDuplicateKeyUpdate($emailTemplateLanguageEntity())
            ->insert($emailTemplateLanguageEntity());
    }

    public function getByOrganizationId($organizationId)
    {
        $organizationId = (int) $organizationId;

        return $this->mapper()
            ->where('organization_id', $organizationId)
            ->get();
    }

    public function getFirstByOrganizationIdAndEmailTemplateId($organizationId, $emailTemplateId, $languageId)
    {
        return $this->mapper()
            ->where('organization_id', $organizationId)
            ->where('email_template_id', $emailTemplateId)
            ->where('language_id', $languageId)
            ->first();
    }
}
