<div>
	widget: {$title} {$name}
</div>
{if {$name}=="x"}
	xxx {require name="app/blog/admin/article:widget/x.js"}
{else}
	yyy {require name="app/blog/admin/article:widget/b.js"}
{/if}