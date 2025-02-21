# 🚀 Web357 Test Component - Developer Skills Assessment - Submission

Thanks a lot for the opportunity you gave to show my Joomla! development skills. So here I have implemented the features and functionalities as you have mentioned in the assessment. I am going to write details here as much as possible.

🖼️ Demostration of the entire assessment

Please watch the video using the link, I went through the backend view, listing and add/edit page including with the filter option and to configure the menu assignment to the recipes menu.

As well as I have recorded the frontend for random recipe module and recipe listing and detail page for the difficulty and serving size field updates.

Demo link - https://www.awesomescreenshot.com/video/36866669?key=330b221b7f4ec425c7038d481d8fa595

Backend

## 📝 Added the field for serving size ( serving_size ) for recipe view ✅
    
    - Configured the "serving_size" dropdown field in XML for field registration
    - Added "serving_size" field in SQL install file
    - Rendered the registered field in add/edit recipe page
    - Added language variables and translations for the Serving Size field

## 📝 Added the filter option of the difficulty and serving size ✅

    - Configured the filters in filter XML file for the "serving_size" and "difficulty"
    - Added support for filter of "serving_size" and "difficulty" in recipe listing page
    - Modification of recipe model logic for filter query

Frontend

## 📝 Added the column of serving size and replaced the difficulty values easy, medieum, and hard by the 1 star, 2 star, and 3 star respectively in the recipe listing page. ✅

    - Added the serving size field in recipe listing page
    - Replaced difficulty label with star based on the easy, medium and hard ( 1 star, 2 star and 3 star respectively ) in listing and detail page of the recipe
    - Added title attribute for label ( Easy, Medium and Hard )
    - Updated the languages fields for label translation for serving size for both languages

## 📝 Added the row of serving size and replaced the difficulty values easy, medieum, and hard by the 1 star, 2 star, and 3 star respectively in the recipe detail page. ✅

    - Added the serving size field in recipe listing page
    - Replaced difficulty label with star based on the easy, medium and hard ( 1 star, 2 star and 3 star respectively ) in listing and detail page of the recipe
    - Added title attribute for label ( Easy, Medium and Hard )

Module

## 📝 Developed the custom module to show the random recipe from the list of added recipes ✅

    - Developed the custom module to fetch and show the random recipe
    - Added the configuration file to show how many random recipe to show in module
    - Added support for custom text to show for module to instruct user

📦 Installation related changes ✅

    - Updated the component XML file with module node for installation and uninstallation
    - Added installer file to install module while installation process

📋 Changelog detailing all modifications

    - \administrator\components\com_web357test\forms\recipe.xml
    - \administrator\components\com_web357test\tmpl\recipe\edit.php
    - \administrator\language\en-GB\com_web357test.ini
    - \administrator\components\com_web357test\sql\install.mysql.utf8.sql
    - \administrator\components\com_web357test\forms\filter_recipes.xml
    - \administrator\components\com_web357test\src\Model\RecipesModel.php
    - \administrator\components\com_web357test\web357test.xml
    - \components\com_web357test\src\Model\RecipesModel.php
    - \language\en-GB\com_web357test.ini
    - \components\com_web357test\tmpl\recipes\default.php
    - \components\com_web357test\tmpl\recipe\default.php
    - \modules\mod_web357_random_recipe\*

📦 Tests cases ✅

    - Added the test cases for difficulty cheker 
    - Added the test cases for the random recipe checker 

I have added the tests folder at backend component as well as inside the module it self.

To validate the Test cases 

Install PHPUnit using Composer if it is not installed using the below command

    composer require --dev phpunit/phpunit:^9

To run all the test cases please execute the command below

    ./vendor/bin/phpunit

Alternatively, to run specific tests: Example as below

    ./vendor/bin/phpunit --filter RandomRecipeModuleTest


I have tried my best to explain everything here, I apologies in case I missed anything.

It was really nice to performe the assessment and the important is to follow the everything you have mentioned.

Thanks a lot :)
