<?php
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\Installer\Installer;
use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Extension\ExtensionHelper;

require_once __DIR__ . '/src/Helper/RandomRecipeHelper.php';

$limit = $params->get('limit', 1);

$recipes = RandomRecipeHelper::getRandomRecipe($limit);

require ModuleHelper::getLayoutPath('mod_web357_random_recipe');
