{extends file="layout.tpl"}

{block name="title"}Login page{/block}

{block name="css"}<link rel="stylesheet" href="style.css">{/block}

{block name="body"}
    {if isset($smarty.session.name)}
        <h1 class="title">Welcome to profile</h1>
    <div class="container">
        <div class="row main">
            <span class="label label-warning">You're logged as: {$smarty.session.name}</span> <br>
            <a href='index.php?action=logout'>Logout</a>
        </div>
    </div>
        {else}
            <div class="container">
                <div class="row main">
                    <span class="label label-danger"> <a href='index.php?action=login'>This page is restricted, please log in</a></span>
                </div>
            </div>
    {/if}

{/block}