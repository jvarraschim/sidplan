<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sidplan
 */
?>

</div>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="newsletter">
        <div class="conteudo-pagina">
            <div class="descricao">
                <h2>Lorem Ipsum</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
            </div>
            <div class="acompanhe">
                <h2>Acompanhe nossas novidades</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinc</p>
                <?php dynamic_sidebar('sidebar-rodape'); ?>
            </div>
        </div>
    </div>
    <div class="site-info">
        <div class="conteudo-pagina">
            <?php wp_nav_menu(array('theme_location' => 'rodape')); ?>

            <div class="telefone">
                <small>(15)</small> 3261-3355
            </div>
        </div>
    </div>
    <div class="criado">
        <div class="conteudo-pagina">
            <span>
                Criado por <a href="http://www.detres.com" target="_blank">Détres Comunicação</a>
            </span>
        </div>
    </div>
</footer>
</div>
<div class="hover-empreendimento"></div>
<?php wp_footer(); ?>
<script src="<?php echo esc_url(home_url('/')); ?>/wp-content/themes/sidplan/js/script.js" type="text/javascript"></script>
</body>
</html>
