<?php

namespace KdManagement\Service;

class LanguageService extends AbstractService
{
    public function getPostContent($postContent, $languageLabel)
    {
        preg_match('/\['.$languageLabel.'\](.*)\[\/'.$languageLabel.'\]/s', $postContent, $match);

        if (isset($match[1])) {
            $postContent = str_replace("\n", "<br>", $match[1]);
        } else {
            $postContent = '';
        }

        return $postContent;
    }
}
