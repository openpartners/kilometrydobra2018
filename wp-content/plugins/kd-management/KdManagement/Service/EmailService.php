<?php

namespace KdManagement\Service;

use KdManagement\ValueObject\EmailTemplateVO;

class EmailService extends AbstractService
{
    public function sendEmail($organizationId, $emailTemplateId, $languageLabel, $to)
    {
        $languageEntity = $this->container['language.repository']
            ->getFirstByLabel($languageLabel);
        $emailTemplateLanguageEntity = $this->container['emailtemplatelanguage.repository']
            ->getFirstByOrganizationIdAndEmailTemplateId($organizationId, $emailTemplateId, $languageEntity->language_id);

        $emailTemplateFile = EmailTemplateVO::$emailTemplateToFile[$emailTemplateId];


        $headers = array('Content-Type: text/html; charset=UTF-8');


        if ($to) {
            $content = do_shortcode(nl2br($emailTemplateLanguageEntity->content));

            $message = getTemplate($emailTemplateFile, ['content' => $content]);

            if ($emailTemplateLanguageEntity->subject) {
                $subject = $emailTemplateLanguageEntity->subject;
            } else {
                $subject = 'Dziękujemy!';
            }

            wp_mail( $to, $subject, $message, $headers );
        }
    }
}
