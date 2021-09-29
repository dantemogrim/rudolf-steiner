<!-- Aktuellt. -->
<?php get_header(); ?>

<?php if(have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>


    <div class="flex flex-col bg-white rounded-lg p-4 m-4 w-5/6">
    <a href="<?php the_permalink(); ?>">
			<div class="">
            <?php if (has_post_thumbnail()) {
        the_post_thumbnail('medium');
    } ?>
            </div>

			<div class="flex flex-col items-start mt-4">
            <h1 class="text-xl font-bold"><?php the_title(); ?></h1>
            </a>
				<p class=""><?php the_excerpt(); ?></p>

                <?php $blogPageUrl = get_permalink(get_option('page_for_posts')); ?>

                <a href="<?php the_permalink(); ?>" class="p-2 leading-none rounded font-medium mt-3 bg-gray-300 text-xs uppercase">Läs mer</a>

                <p class="text-indigo-500"><?php the_date(); ?></p>
			</div>
		</div>

        <?php endwhile;
    else : ?>
        <article>
            <p>Ingenting att visa i nuläget.</p>
        </article>
    <?php endif; ?>

<?php get_footer(); ?>
