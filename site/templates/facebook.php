<?php snippet('header') ?>

<div class="row stream">
<?php if ($page->slider() != '') snippet('background',['photos'=>$page->slider()]) ?>

	<div id="fb-root"></div>
		<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.6";
  		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div class="fb-page" data-href="https://www.facebook.com/schillingerundpankratz/" data-tabs="timeline" data-width="1000" data-height="780" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/schillingerundpankratz/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/schillingerundpankratz/">Schillinger &amp; Pankratz</a></blockquote></div>
</div>


<?php snippet('footer') ?>