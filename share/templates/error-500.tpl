{extends file="base.tpl"}

{block name=title}Interner Serverfehler{/block}
{block name=description}{$smarty.block.parent}{/block}
{block name=nav}{$smarty.block.parent}{/block}

{block name=additional_scripts}{$smarty.block.parent}{/block}
{block name=additional_stylesheets}{$smarty.block.parent}{/block}

{block name=content}
    <h3 class="{$page_name}">Interner Fehler</h3>
    <p>Bei der Beantwortung ihrer Anfrage ist ein Serverfehler aufgetreten.</p>
{/block}

{block name=sidebar}{$smarty.block.parent}{/block}
{block name=footer}{$smarty.block.parent}{/block}
