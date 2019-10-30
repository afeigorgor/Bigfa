<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php if ($this->is('index')) : ?>
   <footer class="layoutSingleColumn layoutSingleColumn--wide footer" role="contentinfo"> 
    <div class="site-info JiEun">
     <p><?php $this->options->siteDescript(); ?>&nbsp;&nbsp;&nbsp;&nbsp;Theme <a href="https://github.com/jozhn/Bigfa" target="_blank">Bigfa</a>
		by <a href="https://jozhn.com/" target="_blank"><span class="cute">Jozhn</span></a>.
		&nbsp;&nbsp;&nbsp;&nbsp; 
		<a href="http://www.miitbeian.gov.cn"  target="_blank"><?php echo $this->options->beian;?></a>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="https://console.upyun.com/register/?invite=rJoBowTv-" target="_blank" style="vertical-align:top"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IuWbvuWxgl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0aD0iMTExcHgiIGhlaWdodD0iMzhweCIgdmlld0JveD0iMCAwIDExMSAzOCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMTExIDM4IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEpIj4KCTxwYXRoIGZpbGw9IiMwMEEwRkYiIGQ9Ik0zMC44LDQuMUwzMC44LDQuMUwzMC44LDQuMUwzMC44LDQuMUwzMC44LDQuMWMtMC43LTAuNS0xLjQtMS0yLjItMS40QzI4LjEsMi40LDI3LjQsMi41LDI3LDNsLTQuNyw2LjIKCQlMMjIsOS42Yy0wLjUsMC43LTEuMywxLTIuMSwxSDE5Yy0yLjMsMC4xLTQuNiwxLjMtNi4xLDMuM2MtMS4yLDEuNi0xLjgsMy41LTEuNyw1LjRjMCwwLjMsMC4yLDAuNjAxLDAuNSwwLjgKCQlDMTIuMywyMC40LDEyLjgsMjEsMTMsMjEuN2MwLjIsMS4xLTAuNSwyLjEtMS41LDIuMzk5QzEwLjMsMjQuNSw5LDIzLjcsOC43LDIyLjVjLTAuMi0wLjcsMC0xLjMsMC40LTEuOGMwLjItMC4zLDAuMy0wLjYwMSwwLjMtMQoJCWMtMC4yLTIuNCwwLjQtNC45LDItN2MyLTIuNiw1LTQsOC4xLTRjMC42LDAsMS4xLTAuMywxLjUtMC44bDQuMy01LjdjMC4zLTAuNCwwLjEtMS4xLTAuNC0xLjJDMTcuNy0xLDkuNywxLjQsNC44LDcuNwoJCWMtNi4yLDguMS00LjcsMTkuOCwzLjQsMjYuMUM5LDM0LjQsOS43LDM0LjksMTAuNiwzNS40YzAuNSwwLjMsMS4yLDAuMTk5LDEuNi0wLjMwMWw0LjctNi4xOTlsMC4zLTAuNGMwLjUtMC43LDEuMy0xLDIuMS0xaDAuOQoJCWMyLjMtMC4xLDQuNi0xLjMsNi4xLTMuM2MxLjItMS42MDEsMS44LTMuNSwxLjctNS40YzAtMC4zLTAuMi0wLjYtMC41LTAuOGMtMC42LTAuMy0xLjEtMC45LTEuMy0xLjZjLTAuMi0xLjEsMC41LTIuMSwxLjUtMi40CgkJYzEuMi0wLjQsMi41LDAuNCwyLjgsMS42YzAuMiwwLjcsMCwxLjMtMC40LDEuOGMtMC4yLDAuMy0wLjMsMC42LTAuMywxYzAuMiwyLjQtMC40LDQuOS0yLDdjLTIsMi42LTUsNC04LjEsNAoJCWMtMC42LDAtMS4xLDAuMy0xLjUsMC44TDE0LDM1LjZjLTAuMywwLjQtMC4xLDEuMTAxLDAuNCwxLjJjNy4yLDIuMTAxLDE1LjMtMC4zLDIwLjEtNi43QzQwLjcsMjIsMzksMTAuMywzMC44LDQuMXoiLz4KCTxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQzIDgpIj4KCQk8cGF0aCBmaWxsPSIjMDBBMEZGIiBkPSJNMTguNiwyVjEuNkMxOC42LDEuMiwxOC4zLDEsMTgsMUgzLjVDMy4yLDEsMi45LDEuMywyLjksMS42djAuOWMwLDAuMywwLjMsMC42LDAuNiwwLjZoMTIuMwoJCQljMC40LDAsMC42MDEsMC4zLDAuNjAxLDAuN0MxNi4xLDYuMSwxNSwxMC40LDExLjYsMTQuNWMtMC4yLDAuMy0wLjcsMC4zLTAuOSwwQzcuOSwxMC45LDcsNy4yLDYuOCw1LjhDNi43LDUuNSw2LjUsNS4zLDYuMiw1LjMKCQkJSDUuN0g1LjNDNSw1LjMsNC43LDUuNiw0LjgsNmMwLjMsMS42LDEuMyw1LjksNC43LDEwYzAuMiwwLjIsMC4yLDAuNiwwLDAuOGMtNCwzLjctNy43LDQuNS05LDQuN2MtMC4zLDAtMC41LDAuMy0wLjUsMC42VjIzCgkJCWMwLDAuMywwLjMsMC42LDAuNiwwLjZjMS41LTAuMTk5LDUuNy0xLjEsMTAuMi01LjNjMC4yLTAuMiwwLjYtMC4yLDAuOCwwYzIuMiwyLDUsNCw4LjgsNS4yYzAuMywwLjEsMC42LTAuMSwwLjY5OS0wLjRsMC4zMDEtMC44CgkJCWMwLjEtMC4zLTAuMTAxLTAuNi0wLjQtMC43Yy0zLjUtMS4xLTYtMi44OTktOC00LjY5OWMtMC4yLTAuMi0wLjItMC42MDEsMC0wLjgwMUMxOC41LDkuNCwxOC42LDIuMywxOC42LDJ6Ii8+CgkJPHBhdGggZmlsbD0iIzAwQTBGRiIgZD0iTTI4LjYsMC4xSDI3LjdjLTAuMywwLTAuNjAxLDAuMy0wLjYwMSwwLjZ2My4xYzAsMC4zLTAuMywwLjYtMC42LDAuNmgtMi4xQzI0LjEsNC40LDIzLjgsNC43LDIzLjgsNXYwLjkKCQkJYzAsMC4zLDAuMywwLjYsMC42MDEsMC42aDIuMWMwLjMsMCwwLjYsMC4zLDAuNiwwLjZ2NC41YzAsMC4zMDEtMC4zLDAuNjAxLTAuNiwwLjYwMWgtMi4xYy0wLjMwMSwwLTAuNjAxLDAuMy0wLjYwMSwwLjZ2MC45CgkJCWMwLDAuMywwLjMsMC42LDAuNjAxLDAuNmgyLjFjMC4zLDAsMC42LDAuMywwLjYsMC42MDF2NC4zYzAsMC44OTktMC4zOTksMi4zOTktMi42OTksMi42Yy0wLjMwMSwwLTAuNSwwLjMtMC41LDAuNjAxVjIzCgkJCWMwLDAuMywwLjMsMC42LDAuNiwwLjZjMi4zLTAuMTk5LDQuNy0xLjUsNC43LTQuNjk5VjE0LjZjMC0wLjMsMC4zLTAuNiwwLjYtMC42aDEuOWMwLjMsMCwwLjYtMC4zLDAuNi0wLjZ2LTAuOQoJCQljMC0wLjMtMC4zLTAuNi0wLjYtMC42aC0xLjljLTAuMywwLTAuNi0wLjMwMS0wLjYtMC42MDFWNi44YzAtMC4zLDAuMy0wLjYsMC42LTAuNmgxLjljMC4zLDAsMC42LTAuMywwLjYtMC42VjQuNwoJCQljMC0wLjMtMC4zLTAuNi0wLjYtMC42aC0xLjljLTAuMywwLTAuNi0wLjMtMC42LTAuNlYwLjZDMjkuMiwwLjMsMjksMC4xLDI4LjYsMC4xeiIvPgoJCTxwYXRoIGZpbGw9IiMwMEEwRkYiIGQ9Ik0zMy4yLDIyLjhjMCwwLjMsMC4zLDAuNjAxLDAuNiwwLjYwMWg2LjVjMi45LDAsNS4yLTIuMiw1LjItNVY0LjdjMC0wLjMtMC4zLTAuNi0wLjYtMC42SDMzLjgKCQkJYy0wLjMsMC0wLjYsMC4zLTAuNiwwLjZWMjIuOHogTTQwLjQsMjEuNGgtNC41QzM1LjYsMjEuNCwzNS4zLDIxLjEsMzUuMywyMC44di02LjJjMC0wLjMsMC4zLTAuNiwwLjYwMS0wLjZINDMKCQkJYzAuMywwLDAuNiwwLjMsMC42LDAuNlYxOC40QzQzLjYsMjAuMSw0Mi4xLDIxLjQsNDAuNCwyMS40eiBNNDMuNiw2Ljd2NC43YzAsMC4zLTAuMywwLjYtMC42LDAuNmgtNy4xCgkJCUMzNS42LDEyLDM1LjMsMTEuNywzNS4zLDExLjRWNi43YzAtMC4zLDAuMy0wLjYsMC42MDEtMC42SDQzQzQzLjMsNi4yLDQzLjYsNi40LDQzLjYsNi43eiIvPgoJCTxwYXRoIGZpbGw9IiMwMEEwRkYiIGQ9Ik00Mi4xLDBoLTUuOGMtMC4zLDAtMC42LDAuMy0wLjYsMC42djAuOWMwLDAuMywwLjMsMC42LDAuNiwwLjZoNS44QzQyLjQsMi4xLDQyLjcsMS44LDQyLjcsMS41VjAuNgoJCQlDNDIuNywwLjMsNDIuNSwwLDQyLjEsMHoiLz4KCQk8cGF0aCBmaWxsPSIjMDBBMEZGIiBkPSJNNjQuMiwwLjloLTEyYy0wLjMsMC0wLjYwMSwwLjMtMC42MDEsMC42djAuOUM1MS42LDIuNyw1MS45LDMsNTIuMiwzaDEyYzAuMywwLDAuNi0wLjMsMC42LTAuNlYxLjUKCQkJQzY0LjgsMS4yLDY0LjUsMC45LDY0LjIsMC45eiIvPgoJCTxwYXRoIGZpbGw9IiMwMEEwRkYiIGQ9Ik01OS4xLDExLjJoOC40YzAuMywwLDAuNi0wLjMsMC42LTAuNlY5LjdjMC0wLjMtMC4zLTAuNi0wLjYtMC42SDQ4LjlDNDguNiw5LjEsNDguMyw5LjQsNDguMyw5Ljd2MC45CgkJCWMwLDAuMywwLjMsMC42LDAuNjAxLDAuNkg1NC42YzAuNSwwLDAuNywwLjUsMC41LDAuODk5TDUxLjMsMTljLTAuMSwwLjItMC4yLDAuMy0wLjIsMC41Yy0wLjMsMC45LTAuMTk5LDEuOSwwLjQsMi43CgkJCXMxLjYsMS4zOTksMi43LDEuMzk5SDY0LjZjMC41LDAsMC45LTAuMTk5LDEuMTAxLTAuNnMwLjMtMC45LDAuMS0xLjNMNjMuNCwxN2MtMC4xMDEtMC4zLTAuNS0wLjQtMC44MDEtMC4ybC0wLjgsMC40CgkJCWMtMC4zLDAuMS0wLjM5OSwwLjUtMC4yLDAuOGwxLjQsMi44YzAuMiwwLjQtMC4xLDAuOC0wLjUsMC44aC04LjNjLTAuNCwwLTAuOC0wLjE5OS0xLTAuNUM1My4xLDIxLDUyLjksMjAuNyw1MywyMC4zCgkJCWMwLTAuMSwwLTAuMSwwLjEtMC4yTDU3LjcsMTJDNTgsMTEuNSw1OC41LDExLjIsNTkuMSwxMS4yeiIvPgoJPC9nPgo8L2c+Cjwvc3ZnPgoK" width="50px" height="25px" style="vertical-align:top"></a></p>
    </div>
   </footer> 
<?php else: ?>
<footer class="footer--empty"></footer>
<?php endif; ?>
  </div> <!-- 对应site-main surface-container -->
<div class="loadingBar"></div>
<?php $this->footer(); ?>
	<?php if ($this->options->highlightjs == 'able'):?>
	<script type="text/javascript" src="https://cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js" data-no-instant></script>
	<?php endif; ?>
    <script>
		//ajax加载文章
		var current_page = 1;
		function load_more_post(){
			current_page ++;
			var load_post_url = window.location.href + "page/" + current_page + "/?load_type=ajax";
			$.get(load_post_url,function(html){
				console.log('加载：'+load_post_url);
				$('#blockGroup').append($(html));
			})
		}
		//highlightjs
		<?php if ($this->options->highlightjs == 'able'):?>
		$("pre code").each(function(i, block) {hljs.highlightBlock(block);});
		<?php endif; ?>
    </script>
</body>
</html>
