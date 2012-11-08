{include file='header.tpl' menu='blog'}
<link rel="stylesheet" type="text/css" href="{$aTemplateWebPathPlugin.citaty}css/style.css" media="all" />

<div class="citaty-box">
	<h2>{$aLang.plugin.citaty.citaty_list}</h2>
	<ul class="citaty-list">
	{foreach from=$lists item=item}
		<li>{$item['text']} <a href="{router page='citaty'}delete/?cit_id={$item['id']}&security_ls_key={$LIVESTREET_SECURITY_KEY}">[x]</a></li>
	{/foreach}
	</ul>
	<a href="{router page='citaty'}truncate/?security_ls_key={$LIVESTREET_SECURITY_KEY}">{$aLang.plugin.citaty.truncate_list}</a>
	<br/>
	<a href="{router page='citaty'}export/?from=shortiki&security_ls_key={$LIVESTREET_SECURITY_KEY}">{$aLang.plugin.citaty.export_shortiki}</a>
	<form action="{router page='citaty'}add" method="POST">
		<fieldset>
			<legend>{$aLang.plugin.citaty.citaty_add}</legend>
			<textarea name="text"></textarea>
			<br/><br/>
			<input type="hidden" name="security_ls_key" value="{$LIVESTREET_SECURITY_KEY}">
			<button type="submit" class="button">{$aLang.plugin.citaty.add}</button>
		</fieldset>
	</form
</div>

{include file='footer.tpl'}