<!-- Shows a single post as a page. Works in "Årskurser" for example. -->
<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <div class="singleContainer">

            <div class="singlePostCard">

                <div class="thumbnailHeadingWrapper">

                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', array('class' => 'singlePostThumbnail'));
                    } ?>
                    <h1 class="singlePostHeading"><?php the_title(); ?></h1>

                    <svg class="singlePostBlob" width="100%" height="100%" viewBox="0 0 376 258" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                        <g transform="matrix(1,0,0,1,-20.7179,-58.8565)">
                            <path d="M170.945,315.533C76.738,312.471 -0.408,261.744 25.945,180.533C50.445,105.033 81.935,104.141 226.528,65.906C371.121,27.672 403.562,153.756 395.427,232.501C386.661,317.355 265.151,318.596 170.945,315.533Z" style="" />

                        </g>
                    </svg>

                </div>

                <div class="content"><?php the_content(); ?></div>

                <a href="#">
                    <div class="singleArrowTextWrapper">
                        <svg class="singleArrow" width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8664 0.43973C13.1008 0.158171 13.4187 0 13.7502 0C14.0816 0 14.3995 0.158171 14.6339 0.43973L19.634 6.44724C19.8684 6.72888 20 7.11082 20 7.50907C20 7.90731 19.8684 8.28925 19.634 8.57089L14.6339 14.5784C14.3982 14.852 14.0824 15.0034 13.7547 14.9999C13.4269 14.9965 13.1134 14.8386 12.8816 14.5601C12.6499 14.2816 12.5184 13.905 12.5156 13.5112C12.5127 13.1174 12.6387 12.738 12.8664 12.4548L15.7327 9.01094H1.25002C0.918492 9.01094 0.600545 8.85271 0.366121 8.57105C0.131698 8.2894 0 7.90739 0 7.50907C0 7.11074 0.131698 6.72874 0.366121 6.44708C0.600545 6.16542 0.918492 6.00719 1.25002 6.00719H15.7327L12.8664 2.56338C12.6321 2.28174 12.5004 1.8998 12.5004 1.50156C12.5004 1.10331 12.6321 0.721373 12.8664 0.43973Z" fill="" />
                        </svg>

                        <p class="goBack">Tillbaka</p>
                    </div>
                </a>
            </div>
        </div>
    <?php endwhile;
else : ?>
    <article>
        <p>Inget innehåll att visa i nuläget.</p>
    </article>
<?php endif; ?>



<?php get_footer(); ?>
