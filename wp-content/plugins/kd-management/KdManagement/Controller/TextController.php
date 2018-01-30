<?php

namespace KdManagement\Controller;

use KdManagement\Entity\TextsFormEntity;

class TextController extends AbstractController
{
    protected function setupActions()
    {
        add_action('admin_menu', [$this, 'adminMenu']);
    }

    public function adminMenu()
    {
        add_submenu_page(
            'kdm_index',
            'Teksty',
            'Teksty',
            'kdm_admin',
            'kdm_text_form',
            [$this, 'textsForm']
        );

        add_submenu_page(
            'kdm_text_form',
            'Teksty',
            'Teksty',
            'kdm_admin',
            'kdm_text_save',
            [$this, 'saveForm']
        );
    }

    public function textsForm()
    {
        $languages = $this->container['language.repository']->get();
        $texts = $this->container['text.repository']->get();
        $textsFormEntity = $this->container['text.service']
            ->getTextsForm();

        $textsFormData = $this->container['array.helper']
            ->stripSlashes($textsFormEntity());

        $this->container['twig']->display('views/text/form.twig', [
            'languages' => $languages,
            'texts' => $texts,
            'textsFormData' => $textsFormData
        ]);
    }

    public function saveForm()
    {
        if ($postData = $_POST) {
            $this->handleSave($postData);
        }

        $this->redirect(admin_url('admin.php?page=kdm_text_form'));
    }

    private function handleSave($postData)
    {
        $textsFormEntity = new TextsFormEntity($postData['texts_form']);

        $this->container['text.service']->saveTextsForm($textsFormEntity);
    }
}
