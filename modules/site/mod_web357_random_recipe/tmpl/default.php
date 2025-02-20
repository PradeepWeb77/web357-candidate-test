<?php
defined('_JEXEC') or die;
?>

<div class="random-recipe-module">
    <?php if (!empty($recipes)): ?>
        <div><?php echo $params->get('custom_text',null);?></div>
        <ul>
            <?php foreach ($recipes as $recipe): ?>
                <li>
                    <strong><?php echo $recipe->title; ?></strong><br>
                    <?php echo $recipe->description; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No recipes found.</p>
    <?php endif; ?>
</div>
