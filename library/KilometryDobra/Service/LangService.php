<?php
namespace KilometryDobra\Service;

Class LangService extends AbstractService {

    const LANG_FILE_PATH = './library/KilometryDobra/Assets/langFile.json';
    private $langsArray;

    public function init()
    {
        $this->loadLangFile();
    }

    public function loadLangFile()
    {
        $fileContent = file_get_contents(self::LANG_FILE_PATH);
        $this->langsArray = json_decode($fileContent, true);
    }

    public function getLangByKey($langKey)
    {
        return $this->langsArray[$langKey][LANG];
    }
}
