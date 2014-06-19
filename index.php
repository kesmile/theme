<?php
/**
 *
 */
      get_header(); ?>
<div class="row">
  <div class="large-9 columns">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article>
      <div class="row">
	<div class="large-8 columns">
	  <h3><a href="#"><?php the_title(); ?></a></h3>
	  <div id="metadata">Escrito por: <a href="#">Kelvi</a> Mayo 12, 2014</div>
	    <?php the_content(); ?>
	  <div id="shared">
	    <span class="fi-comment sp"></span> <span class="shared-txt"><a href="#">10 Comentarios</a></span> <a href="#"><span class="fi-social-facebook sp"></span></a>
	    <a href="#"><span class="fi-social-twitter sp"></span></a>
	    <a href="#"><span class="fi-social-google-plus sp"></span></a>
	  </div>
	</div>
	<div class="large-4 columns" id="img">
	  <img src="http://placehold.it/200x200&text=[img]"/>
	</div>
      </div>
    </article>
    <?php endwhile;?>
    <?php else : ?>
    <?php endif; ?>
  </div>
  <div id="sidebar" class="large-3 columns">
    <div>
      <h5 class="buscar title" >Buscar</h5>
      <form>
	<input type="text" placeholder="" />
      </form>
    </div>
    <div>
        <h5 class="cat title" >Categoria</h5>
        <ul>
	  <li><a href="#">Option 1</a> </li>
	  <li><a href="#">Option 2</a> </li>
	  <li><a href="#">Option 3</a> </li>
	  <li><a href="#">Option 4</a> </li>
	</ul>
    </div>
    <div>
        <h5 class="coment title" >Comentarios</h5>
        <ul>
	  <li><a href="#">Post numero 1</a> </li>
	  <li><a href="#">Post numero 2</a> </li>
	  <li><a href="#">Post numero 3</a> </li>
	  <li><a href="#">Post numero 4</a> </li>
	</ul>
    </div>
  </div>
</div>
<div id="paginado" class="row">
  <div class="large-6 large-centered columns">
    <ul class="pagination">
      <li class="arrow unavailable"><a href="">&laquo;</a></li>
      <li class="current"><a href="">1</a></li>
      <li><a href="">2</a></li>
      <li><a href="">3</a></li>
      <li><a href="">4</a></li>
      <li class="unavailable"><a href="">&hellip;</a></li>
      <li><a href="">12</a></li>
      <li><a href="">13</a></li>
      <li class="arrow"><a href="">&raquo;</a></li>
    </ul>
  </div>
</div>
<?php get_footer(); ?>