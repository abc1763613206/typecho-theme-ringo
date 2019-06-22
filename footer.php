<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

		<!-- </div>end .row -->

<footer id="footer" role="contentinfo">

	&copy; <?php _e($this->options->startYear) ?> - <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
	<br />
	<?php if ($this->options->icpNum):?> <a rel="nofollow" href="http://beian.miit.gov.cn"> <?php $this->options->icpNum(); ?> </a> <?php endif;?>

	<br />

	<?php if ($this->options->EnableBusuanzi == 'able' ): ?>
		<span id="busuanzi_value_site_pv">......</span> visits ·
		<span id="busuanzi_value_site_uv">......</span> visitors 
	<?php endif; ?>
	<?php if ($this->options->EnableBusuanzi == 'able' && $this->options->EnableWordsCounter == 'able' ): ?>
	·
	<?php endif; ?>
	<?php if ($this->options->EnableWordsCounter == 'able' ): ?>
		<span id="words_counter"><?php WordsCounter_Plugin::allOfCharacters(); ?></span> words
	<?php endif; ?>

</footer><!-- end #footer -->

<?php if ($this->options->WhereToDisplaySearch == 'bottom' ): ?>
<div class="site-search">
	<form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
		<label for="s" class="sr-only">搜索关键字</label>
		<input type="text" id="s" name="s" class="text" placeholder="在这里输入关键字哦 ~ (回车搜索)" />
		<!-- <button type="submit" class="submit">搜索</button> -->
	</form>
</div>
<?php endif; ?>
	</div>

</div><!-- end #body -->
<?php if ($this->options->EnableBusuanzi == 'able' ): ?>
<script async src="//busuanzi.ibruce.info/busuanzi/2.3/busuanzi.pure.mini.js"></script>
<?php endif; ?>
<!-- <style>.MathJax:focus {outline: none;}</style>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
	extensions: ["tex2jax.js"],
	jax: ["input/TeX","output/HTML-CSS"],
	"fast-preview": {disabled: true},
	tex2jax: {inlineMath:[ ["$", "$"] ],displayMath:[ ["$$","$$"] ],processEscapes: true},
	"HTML-CSS": { availableFonts: ["TeX"] }
});
</script>
<script type="text/javascript" src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script> -->

<script src="//cdn.jsdelivr.net/npm/highlightjs@9.12.0/highlight.pack.min.js"></script>
<script> hljs.initHighlightingOnLoad(); </script>

<?php if ($this->options->hideStatCode == 'able' ): ?>
	<div style="display:none">
<?php endif; ?>
<?php if ($this->options->statCode) { $this->options->statCode(); }?>
<?php if ($this->options->hideStatCode == 'able'): ?>
	</div>
<?php endif; ?>

<?php $this->footer(); ?>
</body>
</html>