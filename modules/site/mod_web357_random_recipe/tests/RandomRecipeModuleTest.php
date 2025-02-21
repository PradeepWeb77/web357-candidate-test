<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Web357test
 * @author     Web357 Dev <careers@web357.com>
 * @copyright  2025 Web357.com
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

use Joomla\Test\JoomlaTestCase;

class RandomRecipeModuleTest extends JoomlaTestCase
{
    public function testRandomRecipeFetch()
    {
        $moduleHelper = new ModWeb357RandomRecipeHelper();
        $randomRecipe = $moduleHelper::getRandomRecipe();
        $this->assertIsObject($randomRecipe);
        $this->assertNotNull($randomRecipe->title);
    }
}


