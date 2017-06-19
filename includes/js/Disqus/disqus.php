<?php $currentlink = SITE_URL . trim($_SERVER['REQUEST_URI'], '/');
$dbconfig = Core::getDBConfig(); ?>
<div id="disqus_thread"></div>
<script data-cfasync="false" type="text/javascript">
	var disqus_shortname = '<?php echo $dbconfig['disqus_user'];?>';
	//noinspection JSUnusedLocalSymbols
    var disqus_identifier = '<?php echo $game['id'];?>';
	//noinspection JSUnusedLocalSymbols
    var disqus_url = '<?php echo $currentlink;?>';
	// 	/* * * DON'T EDIT BELOW THIS LINE * * */
	(function () {
		var dsq = document.createElement('script');
		dsq.type = 'text/javascript';
		dsq.async = true;
		dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="https://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>