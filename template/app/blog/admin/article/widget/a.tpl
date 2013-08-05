<div>
	widget: {%$title%} {%$name%}
</div>
{%if {%$name%}=="x"%}
	xxx {%require name="app/blog/admin/article:widget/x.js"%}
{%else%}
	yyy 
	{%require name="app/blog/admin/article:widget/b.js"%}
	
{%/if%}

对于有逻辑的, 反正是控制模板, 是否可以手工指定, 打包呢.

比如打包 widget/x.js 及依赖等等

打包文件目录设置? 打包文件名设置? 手动动态配置?