<?php

function getCategories($categories, $parentId = 0, $char = '')
{
    if ($categories) {
        foreach ($categories as $key => $category) {
            if ($category->parent == $parentId) {
                echo '<p>' . $char . $category->name . '</p>';
                unset($categories[$key]);
                getCategories($categories, $category->term_id, $char . '-----| ');
            }
        }
    }
}
