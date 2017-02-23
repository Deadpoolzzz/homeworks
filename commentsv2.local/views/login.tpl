{extends file="layout.tpl"}

{block name="title"}Login page{/block}

{block name="css"}<link rel="stylesheet" href="style.css">{/block}
{block name="h1"}Login page{/block}

{block name="body"}

    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <form class="" method="post" action="" id="login">

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"
                                       value="{if isset($email)}{$email}{/if}"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pass" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="pass" id="pass"  placeholder="Enter your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button type="submit" id="button" form="login" class="btn btn-primary btn-lg btn-block login-button">Login</button>
                    </div>
                </form>
                <a href="index.php?action=register">Register</a>
            </div>
            {if isset($error)}
                <span style='margin-left: 44%; color: white' class='label label-danger'>{$error}</span>
            {/if}
        </div>
    </div>

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
