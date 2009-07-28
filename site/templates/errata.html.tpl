<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>{strip}
        {if $language == "de"}
            WRITE ME
        {elseif $language == "nl"}
            WRITE ME
        {else}
            Errata
        {/if}
    {/strip} (Walking Papers)</title>
	<link rel="stylesheet" href="{$base_dir}/style.css" type="text/css" />
    <script type="text/javascript" src="{$base_dir}/script.js"></script>
</head>
<body>

    {include file="navigation.htmlf.tpl"}
    
    <h2>Errata</h2>
    
    <p>
        I have been informed that “Errata” does not mean what I thought it meant:
        <i><a href="http://dictionary.reference.com/search?q=errata">Errata</a> -
        a list of errors and their corrections inserted, usually on a separate
        page or slip of paper, in a book or other publication.</i>
    </p>
   
    <p>
        I thought it was more like a list of random, “erratic” stuff that didn’t fit anyplace
        else. So, this page has <a href="{$base_dir}/zeitgeist.php">moved to “zeitgeist”</a>.
    </p>
    
    {include file="footer.htmlf.tpl"}
    
</body>
</html>