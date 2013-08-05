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
			<h2>新建文章</h2>
			<form action="demo.php" method="post">
				<input type="hidden" name="id" value="{%$id%}">
				<fieldset>
					<label>标题</label>
					<input type="text" name="title" class="span8" value="{%$title%}">
					
					
					<label class="" >分类</label>
					<select name="category" class="span2">
						<option value="0">&nbsp;&nbsp;</option>
						<option value="1" {%if {%$category%} == 1%}selected{%/if%}>HTML</option>
						<option value="2" {%if {%$category%} == 2%}selected{%/if%}>CSS</option>
					</select>
					 
					 <label>正文</label>
					 <textarea name="content" rows="20" class="span8" >{%$content%}</textarea>
					
					 <label>关键字</label>
					 <input type="text" name="keyword" class="span8" value="{%$keyword%}">

					 <div>
						<button type="submit" class="btn btn-primary">保存</button>
						<button type="button" class="btn">取消</button>
					 </div>
				</fieldset>
			</form>
			
		</div>
		</div>
	</div>

	{%* 尾部 *%}
	{%widget name="app/common/footer/1.0.0:widget/footer.tpl"%}
{%/body%}
{%/html%}