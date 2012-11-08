{assign var="noSidebar" value=true}
{include file='header.tpl'}
<link rel="stylesheet" type="text/css" href="{$aTemplateWebPathPlugin.citaty}css/style.css" media="all" />

<div class="citaty-box">
	<h2>{$aLang.plugin.citaty.citaty_list}</h2>
	<ul class="citaty-list">
	{foreach from=$lists item=item}
		<li>{$item['text']}</li>
	{/foreach}
	</ul>
</div>

{include file='footer.tpl'}