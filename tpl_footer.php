<?php
/**
 * Template footer, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** FOOTER ********** -->
<div id="dokuwiki__footer"><div class="pad">
    <?php tpl_license(''); // license text ?>

    <div class="buttons">
        <?php
            tpl_license('button', true, false, false); // license button, no wrapper
            $target = ($conf['target']['extern']) ? 'target="'.$conf['target']['extern'].'"' : '';
        ?>
  <a target="_blank" href="<?php echo DOKU_BASE?>feed.php?content=diff&linkto=current&ns=<?php echo $INFO['namespace'] ?>" title="<?php echo $INFO['namespace'] ?> -- Recent changes RSS feed"><img src="<?php echo DOKU_TPL?>images/button-rss.png" width="80" height="15" alt="<?php echo $INFO['namespace'] ?> Recent changes RSS feed" border="0" /></a>
  <a href="http://dokuwiki.org/" title="Driven by DokuWiki" <?php echo $target?>><img
    src="<?php echo tpl_basedir(); ?>images/button-dw.png" width="80" height="15" alt="Driven by DokuWiki" /></a>
    </div>
</div></div><!-- /footer -->

<?php
tpl_includeFile('footer.html');
