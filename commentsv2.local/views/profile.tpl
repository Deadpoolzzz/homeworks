{extends file="layout.tpl"}

{block name="title"}Login page{/block}

{block name="css"}<link rel="stylesheet" href="style.css">{/block}

{block name="body"}
    {if isset($smarty.session.name)}
        <h1 class="title">Welcome to profile</h1>
    <div class="container">
        <div class="row main">
            <span class="label label-warning">You're logged as: {$smarty.session.name}</span> <br>
        <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <form class="" method="post" action="" id="comment">

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your comment</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-commenting" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="addComment" id="addComment"  placeholder="Enter your comment" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <button type="submit" id="button" form="comment" class="btn btn-primary btn-lg btn-block login-button">Add comment</button>
                    </div>
                    {if isset($error)}
                        {$error}
                    {/if}

            <a href='index.php?action=logout'>Logout</a>
                </form>
        </div>
    </div>
        {else}
            <div class="container">
                <div class="row main">
                    <span class="label label-danger"> <a href='index.php?action=login'>This page is restricted, please log in</a></span>
                </div>
            </div>
    {/if}
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <span class="row">
                    <table class="table table-hover">
                        <thead>
                        <th class="info"><span class="label label-info">Username</span></th>
                        <th class="info"><span class="label label-info">Comment</span></th>
                        <th class="info"><span class="label label-info">Date</span></th>
                        </thead>
                        <tbody>
                        {foreach $array as $key}
                            <tr>
                                <td class="info">{$key['username']}</td>
                                <td class="info">{$key['article']}</td>
                                <td class="info">{$key['date_created']}</td>
                            </tr>
                        {/foreach}
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

{/block}