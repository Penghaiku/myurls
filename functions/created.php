<!DOCTYPE html>
<html class="full" lang="zh">

    <head>
	    <base href="<?php echo $info['URL']; ?>/" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>创建网址 - <?php echo $info['name']; ?></title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">

        <!-- Custom CSS for the Template -->
        <link href="css/style.css" rel="stylesheet">

        <link href="https://fonts.loli.net/css?family=Fjalla+One" rel="stylesheet">
        
        <style>
            a { color: inherit; }
        </style>
        <style>
            <?php echo $info['cstm-style']; ?>
        </style>
    </head>

    <body>

        <?php
            include "functions/menu.php";
        ?>
        <div class="container" style="margin-top: -20px;">
        <div class="row logo">
            <div class="col-lg-12" style="text-align:center">
                <?php 
                    include "functions/logo.php";
                    include "functions/darkmode.php";
                ?>
            </div>
        </div>
        </div>
        <div class="container animated fadeIn">

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1" style="margin-bottom: -25px;">
                    <div class="alert alert-dismissable alert-default text-center">
                        <h4  style="margin-bottom: -4px; color: #707070;"> 网址已成功缩短 </h4> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <input id="urlbox" class="form-control cz-shorten-input" readonly name="url" value="<?php echo $created_link; ?>"  type="text">
                        <span class="input-group-btn">
                            <button class="btn btn-large btn-primary cz-shorten-btn" type="submit" id="copy-button">复制!</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-lg-4 text-center">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title newsize" style="font-weight:bolder;">二维码</h3>
                        </div>
                        <div class="panel-body">
                            <img src="//my.tv.sohu.com/user/a/wvideo/getQRCode.do?width=200&height=200&text=<?php echo $created_link; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 text-center">
                    <div class="row">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title newsize" style="font-weight:bolder;">分享</h3>
                            </div>
                            <div class="panel-body">
                                <a target="_blank"  href="http://www.facebook.com/sharer.php?u=<?php echo $created_link; ?>"><i class="fab fa-facebook-f fa-3x fb anim "></i></a>
                                <a target="_blank"  href="https://twitter.com/share?url=<?php echo $created_link; ?>"><i class="fab fa-twitter fa-3x twit anim "></i></a>
                                <a  target="_blank"  href="https://plus.google.com/share?url=<?php echo $created_link; ?>"> <i class="fab fa-google-plus fa-3x gplus anim"></i></a>
                                <a target="_blank"  href="https://service.weibo.com/share/share.php?url=<?php echo $created_link; ?>"><i class="fab fa-weibo fa-3x pin anim"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row" style="margin-top: -4px;">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title newsize" style="font-weight:bolder;">统计</h3>
                            </div>
                            <div class="panel-body">
                                <a href="<?php echo $info['URL'] . '/stats.php?id=' . $rand1; ?>"> <h3><?php echo $info['URL'] . '/stats.php?id=' . $rand1; ?></h3></a>

                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>

            </div>
        </div>
        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.zclip.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#copy-button").click(function () {
                    $(this).html("复制成功");
                    $("#urlbox").select();
                    document.execCommand("copy");
                });
            });
        </script>
    </body>

</html>
