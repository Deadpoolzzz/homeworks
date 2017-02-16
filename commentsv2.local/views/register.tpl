{extends file="layout.tpl"}

{block name="title"}Register page{/block}

{block name="css"}<link rel="stylesheet" href="style.css">{/block}

{block name="h1"}Register page{/block}

{block name="body"}
    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <form class="" method="post" action="" id="register">

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="pass" id="pass"  placeholder="Enter your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button type="submit" id="button" form="register" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                    </div>
                    <a href="index.php?action=login">Login</a>
                </form>
            </div>
        </div>
    </div>
{/block}