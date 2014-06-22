<?php
//Copyright: Byke

if (!defined ('P')) {
	die ('Access Denied.');
}

?>

<article id="article-[[::aID]]">
<h2 class="colorWhite padLeft textL inMiddle shadowGrey">[[::aTitle]]</h2>
<h3 class="colorGrey padLeft textXS inMiddle"><a href="[[::siteURL]]/[[::linkPrefixCategory]]/[[::aCateURLName]]/">[[::aCateDispName]]</a> | [[::aTime, dateFormat, M d Y g:ia]]
<span class="articleShare toRight textS"><a href="[[::siteURL]]/[[::linkPrefixArticle]]/[[::aID]]/#comment-[[::aID]]"><span class="icon-comment" title="[[=page:Comments]]"></span></a> <a href="##"><span class="icon-share" id="share-[[::aID]]" title="[[=page:ShareTo]]"></span></a></span>
</h3>
<div class="shareLayer toRight shadowGrey bgWhite textS asNone" id="share-[[::aID]]-layer">
<span class="shareLayerItem asBlock"><a href="http://www.jiathis.com/send/?webid=weixin&url=[[::siteURL]]/[[::linkPrefixArticle]]/[[::aID]]/&title=[[::aTitle, URLEncode]]"><span class="icon-weixin"></span> [[=page:social:WeChat]]</a></span>
<span class="shareLayerItem asBlock"><a href="http://www.jiathis.com/send/?webid=tsina&url=[[::siteURL]]/[[::linkPrefixArticle]]/[[::aID]]/&title=[[::aTitle, URLEncode]]"><span class="icon-sina-weibo"></span> [[=page:social:Weibo]]</a></span>
<span class="shareLayerItem asBlock"><a href="http://www.jiathis.com/send/?webid=renren&url=[[::siteURL]]/[[::linkPrefixArticle]]/[[::aID]]/&title=[[::aTitle, URLEncode]]"><span class="icon-renren"></span> [[=page:social:Renren]]</a></span>
</div>
<div class="details padLeft padRight textS colorDarkGrey bgWhite shadowGrey inMiddle">
[[::aContent, formatText, full]]
</div>

[[::aTags, hasTags, <h3 class="tagsRow inMiddle"><span class="icon-tag colorGrey"></span>]] [[::aTags, formatTags, <span class="oneTag"><a href="[::siteURL]/[::linkPrefixTag]/[::tagInURL]/">[::tagValue]</a></span>]][[::aTags, hasTags, </h3>]]

</article>


<div id="comment-[[::aID]]" class="bgWhite shadowWhite padLeft padRight comment">
<!-- Duoshuo start -->
<div class="ds-thread" data-thread-key="[[::aID]]" data-title="[[::aTitle]]" data-url="[[::siteURL]]/[[::linkPrefixArticle]]/[[::aID]]/" data-form-position="top" data-order="desc"></div>
<!-- Duoshuo end -->
<!-- Duoshuo JS start -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"[[::duoshuoID]]"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
$("<link>").attr({rel:"stylesheet", type:"text/css", href: "[[::siteURL]]/theme/default/duoshuo.css"}).appendTo("head");
</script>
<!-- Duoshuo JS end -->


</div>
