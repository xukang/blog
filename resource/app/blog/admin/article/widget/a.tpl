<div>
	widget: {%$title%} {%$name%}
</div>
{%if {%$name%}=="x"%}
	xxx {%require name="app/blog/admin/article:widget/x.js"%}
{%else%}
	yyy 
	{%script%}
		var b = require.async("app/blog/admin/article:widget/b.js", function(b){console.log(b);});
		//console.log(b);
	{%/script%}
{%/if%}