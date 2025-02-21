<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Web357test
 * @author     Web357 Dev <careers@web357.com>
 * @copyright  2025 Web357.com
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

use Joomla\Test\JoomlaTestCase;
use Web357testModelRecipes;

class RecipeFilterTest extends JoomlaTestCase
{
    public function testFilterByDifficulty()
    {
        $recipeModel = new Web357testModelRecipes();
        $difficulty = 'easy';

        $mockRecipes = [
            (object) ['title' => 'Easy Recipe 1', 'difficulty' => 'easy'],
            (object) ['title' => 'Easy Recipe 2', 'difficulty' => 'easy'],
        ];

        $db = $this->getMockBuilder('JDatabaseDriver')
                   ->disableOriginalConstructor()
                   ->getMock();

        $db->method('getQuery')
           ->willReturn($this->createMock('JDatabaseQuery'));
        $db->method('loadObjectList')
           ->willReturn($mockRecipes);
        JFactory::setDbo($db);

        $recipes = $recipeModel->getRecipesByDifficulty($difficulty);

        foreach ($recipes as $recipe) {
            $this->assertEquals('easy', $recipe->difficulty);
        }
    }
}

