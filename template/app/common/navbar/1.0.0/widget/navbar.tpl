<div class="navbar navbar-inverse navbar-static-top">
	<div class="navbar-inner">
		<div class="container">

			<ul class="nav">
				<li {%if $navActive == "index"%}class="active"{%/if%}><a href="/blog/admin/">首页</a></li>
				<li {%if $navActive == "new"%}class="active"{%/if%}><a href="new.php">新建</a></li>
				<li {%if $navActive == "list"%}class="active"{%/if%}><a href="list.php">列表</a></li>
			</ul>
		
		</div>
	</div>
</div>