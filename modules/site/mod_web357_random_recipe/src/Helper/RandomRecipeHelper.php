<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;

class RandomRecipeHelper
{
    public static function getRandomRecipe($limit = 1)
    {
        $db = Factory::getContainer()->get('DatabaseDriver');
        $query = $db->getQuery(true)
            ->select('*')
            ->from($db->quoteName('#__web357test_recipes'))
            ->order('RAND()')
            ->setLimit($limit);

        return $db->setQuery($query)->loadObjectList();
    }
}
