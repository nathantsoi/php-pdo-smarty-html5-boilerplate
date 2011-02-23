<!DOCTYPE html>  
<!--[if lt IE 7 ]> <html lang="de" class="no-js ie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="de" class="no-js ie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="de" class="no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="de" class="no-js ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="de" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{$media_url}stylesheets/all.css?1" media="all">
        {block name=additional_stylesheets}{/block}

        <title>{block name=title}Willkommen!{/block} | {$app_title}</title>
        <meta name="description" content="{block name="description"}Beschreibung{/block}">
        <meta name="author" content="">
 
        <script src="{$media_url}scripts/libs/modernizr/modernizr-1.6.min.js"></script>
    </head>

    <body>
        <div id="page" class="{$page_name}">
            <header>
                <hgroup>
                    <h1><a href="./">{$app_title}</a></h1>
                </hgroup>
                
                {block name=nav}
                <nav>
                    <ul class="group">
                        <li id="index"{if $page_name == 'index'} class="active"{/if}><a href="./">Index</a></li>
                        <li id="my-subpage"{if $page_name == 'my-subpage'} class="active"{/if}><a href="index.php?action=my-subpage">My subpage</a></li>
                    </ul>
                </nav>
                {/block}
            </header>
    
            <div id="main" class="group">
                <div id="content">
                    {block name=content}
                    
                    {/block}
                </div> <!-- end #content -->
                
                <div id="sidebar">                    
                    {block name=sidebar}
                    
                    {/block}
                </div> <!-- end #sidebar -->
            </div> <!-- end #main -->
    
            <footer>
                {block name=footer}
                    <a href="index.php?action=impressum">Impressum</a>
                {/block}
            </footer>
        </div> <!-- end #page -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script> 
        <script>!window.jQuery && document.write(unescape('%3Cscript src="{$media_url}scripts/libs/jquery/jquery-1.4.4.min.js"%3E%3C/script%3E'))</script>
        {block name=additional_scripts}{/block}
        <!--[if lt IE 7 ]>
            <script src="{$media_url}scripts/libs/dd_belatedpng/dd_belatedpng.js"></script>
            <script>DD_belatedPNG.fix('img, .trans-bg');</script>
        <![endif]-->  
    </body>
</html>
