<!DOCTYPE HTML>
{%html%}
{%head%}
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
{%/head%}
{%body%}
	{%require name="/static/mod.js"%}
	{%require name="libs/bootstrap/2.3.2:bootstrap.css"%}
	{%require name="libs/bootstrap/2.3.2:bootstrap-responsive-980.css"%}
	
	{%* 头部 *%}
	{%widget name="app/common/navbar/1.0.0:widget/navbar.tpl" navActive="new"%}
	
	{%* 布局 *%}
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>文章列表</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="span1">#</th>
							<th class="span2">分类</th>
							<th>标题</th>
							<th class="span2">操作</th>
						</tr>
					</thead>
					<tbody>
						{%foreach $list as $item%}
						<tr>
							<td>{%$item@index%}</td>
							<td>{%$item.category%}</td>
							<td><a href="detail.php?id={%$item.id%}">{%$item.title%}</a></td>
							<td><a href="delete.php?id={%$item.id%}" class="btn btn-link  btn-small">删除</a></td>
						</tr>
						{%/foreach%}
					</tbody>
				</table>
			</div>
		</div>
	</div>

	{%* 尾部 *%}
	{%widget name="app/common/footer/1.0.0:widget/footer.tpl"%}
{%/body%}
{%/html%}