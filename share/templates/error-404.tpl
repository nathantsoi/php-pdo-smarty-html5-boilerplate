{extends file="base.tpl"}

{block name=title}Seite nicht gefunden{/block}
{block name=description}{$smarty.block.parent}{/block}
{block name=nav}{*{$smarty.block.parent}*}{/block}

{block name=additional_scripts}{$smarty.block.parent}{/block}
{block name=additional_stylesheets}{$smarty.block.parent}{/block}

{block name=content}
    <h3 class="{$page_name}">Page not found</h3>
    <p>The requested page could not be found.</p>
{/block}

{block name=sidebar}{*{$smarty.block.parent}*}{/block}
{block name=footer}{*{$smarty.block.parent}*}{/block}
