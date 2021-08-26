<?php get_header(); ?>

<!------remplacer contenu par les articls--->
<?php while (have_posts()) : the_post(); ?>

<article class="topcontent">
<a href="http://localhost/wordpress-5.8/wordpress/">  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>home</a>
 <header>
   <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?> </a>
 </header>
 
 <!------afiche les imge--->
 <?php the_post_thumbnail('full'); ?>

 <content><!---affiche le contenu--->
    <p>  <?php the_content('...read the full article');?> </p>
    
  </content>
  <br>
  <hr>
  <!---commentaire dans l'article---->
  <?php comments_template(); ?>
</article>      
<?php endwhile; ?>

</div>

<?php get_footer(); ?>
