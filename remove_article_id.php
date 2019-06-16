<?php defined('_JEXEC') or die();

/**
 * @package      plg_system_remove_article_id
 * @copyright   Copyright (C) yourname All rights reserved.
 * @license      GNU General Public License version 2 or later; see http://www.gnu.org/licenses/
 **/
class plgSystemRemove_Article_Id extends JPlugin
{

    public function onContentPrepareForm($form, $data)
    {
        // global content configuration form
        if ($form->getName() == 'com_config.component' && JFactory::getApplication()->input->get('component') == 'com_content') {
            JForm::addFormPath(JPATH_PLUGINS . '/system/remove_article_id/');
            $form->loadFile('contentconfig', false);
        }
    }

}