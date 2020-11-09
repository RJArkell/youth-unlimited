<!DOCTYPE html>
<html class="no-js" lang="en">
  <?php snippet('head') ?>
  <body class="<?= str_replace('/', '-', $page->blueprint()->name()) ?> page-<?= $page->slug() ?>">
    <?php snippet('header') ?>
    <?php snippet($page->blueprint()->name() . '/before_hero') ?>

    <div class="wrap">
      <?php snippet('hero') ?>

      <main class="container">
        <?php
        foreach ($page->blocks()->toBuilderBlocks() as $block) :
          snippet('blocks/' . $block->_key(), ['data' => $block]);
        endforeach;
        ?>
