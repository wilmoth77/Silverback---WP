<?php
/**
* The template used for displaying either a hero or a page header
*
* @package {%= title %}
*/
?>

<div class="main-header">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-tertiary" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
  </div>
</div>
