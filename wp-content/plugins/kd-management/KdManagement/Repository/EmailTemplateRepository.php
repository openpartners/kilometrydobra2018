<?php

namespace KdManagement\Repository;

use KdManagement\Entity\EmailTemplateEntity;

class EmailTemplateRepository extends AbstractRepository
{
    protected $table        = 'kdm_email_templates';
    protected $entityClass  = EmailTemplateEntity::class;

    public function get()
    {
        return $this->mapper()->get();
    }
}
