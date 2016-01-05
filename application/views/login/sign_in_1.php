<!DOCTYPE html>
<html lang="id">
    <head>
        <!-- Core Meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Additional Meta -->
        <title>Direktorat Pengembangan Kawasan Permukiman</title>

        <!-- Stylesheet -->
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url() . 'assets/admin/' ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/style-responsive.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/admin/' ?>css/overide.css">

        <!-- Inline Stylesheet -->
        <style type="text/css">
            /*!
             * The MIT License
             * Copyright (c) 2012 Matias Meno <m@tias.me>
             */
            @-webkit-keyframes passing-through{0%{opacity:0;-webkit-transform:translateY(40px);-moz-transform:translateY(40px);-ms-transform:translateY(40px);-o-transform:translateY(40px);transform:translateY(40px)}30%,70%{opacity:1;-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}100%{opacity:0;-webkit-transform:translateY(-40px);-moz-transform:translateY(-40px);-ms-transform:translateY(-40px);-o-transform:translateY(-40px);transform:translateY(-40px)}}@-moz-keyframes passing-through{0%{opacity:0;-webkit-transform:translateY(40px);-moz-transform:translateY(40px);-ms-transform:translateY(40px);-o-transform:translateY(40px);transform:translateY(40px)}30%,70%{opacity:1;-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}100%{opacity:0;-webkit-transform:translateY(-40px);-moz-transform:translateY(-40px);-ms-transform:translateY(-40px);-o-transform:translateY(-40px);transform:translateY(-40px)}}@keyframes passing-through{0%{opacity:0;-webkit-transform:translateY(40px);-moz-transform:translateY(40px);-ms-transform:translateY(40px);-o-transform:translateY(40px);transform:translateY(40px)}30%,70%{opacity:1;-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}100%{opacity:0;-webkit-transform:translateY(-40px);-moz-transform:translateY(-40px);-ms-transform:translateY(-40px);-o-transform:translateY(-40px);transform:translateY(-40px)}}@-webkit-keyframes slide-in{0%{opacity:0;-webkit-transform:translateY(40px);-moz-transform:translateY(40px);-ms-transform:translateY(40px);-o-transform:translateY(40px);transform:translateY(40px)}30%{opacity:1;-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}}@-moz-keyframes slide-in{0%{opacity:0;-webkit-transform:translateY(40px);-moz-transform:translateY(40px);-ms-transform:translateY(40px);-o-transform:translateY(40px);transform:translateY(40px)}30%{opacity:1;-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}}@keyframes slide-in{0%{opacity:0;-webkit-transform:translateY(40px);-moz-transform:translateY(40px);-ms-transform:translateY(40px);-o-transform:translateY(40px);transform:translateY(40px)}30%{opacity:1;-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}}@-webkit-keyframes pulse{0%,20%{-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1)}10%{-webkit-transform:scale(1.1);-moz-transform:scale(1.1);-ms-transform:scale(1.1);-o-transform:scale(1.1);transform:scale(1.1)}}@-moz-keyframes pulse{0%,20%{-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1)}10%{-webkit-transform:scale(1.1);-moz-transform:scale(1.1);-ms-transform:scale(1.1);-o-transform:scale(1.1);transform:scale(1.1)}}@keyframes pulse{0%,20%{-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1)}10%{-webkit-transform:scale(1.1);-moz-transform:scale(1.1);-ms-transform:scale(1.1);-o-transform:scale(1.1);transform:scale(1.1)}}.dropzone,.dropzone *{box-sizing:border-box}.dropzone{min-height:150px;border:2px dashed rgba(0,0,0,.3);border-radius:5px;background:rgba(255,255,255,0);padding:20px}.dropzone.dz-clickable{cursor:pointer}.dropzone.dz-clickable *{cursor:default}.dropzone.dz-clickable .dz-message,.dropzone.dz-clickable .dz-message *{cursor:pointer}.dropzone.dz-started .dz-message{display:none}.dropzone.dz-drag-hover{border-style:solid}.dropzone.dz-drag-hover .dz-message{opacity:.5}.dropzone .dz-preview.dz-file-preview .dz-details,.dropzone .dz-preview:hover .dz-details{opacity:1}.dropzone .dz-message{text-align:center;margin:2em 0}.dropzone .dz-preview{position:relative;display:inline-block;vertical-align:top;margin:16px;min-height:100px}.dropzone .dz-preview:hover{z-index:1000}.dropzone .dz-preview.dz-file-preview .dz-image{border-radius:20px;background:#999;background:linear-gradient(to bottom,#eee,#ddd)}.dropzone .dz-preview.dz-image-preview{background:#fff}.dropzone .dz-preview.dz-image-preview .dz-details{-webkit-transition:opacity .2s linear;-moz-transition:opacity .2s linear;-ms-transition:opacity .2s linear;-o-transition:opacity .2s linear;transition:opacity .2s linear}.dropzone .dz-preview .dz-remove{font-size:14px;text-align:center;display:block;cursor:pointer;border:none}.dropzone .dz-preview .dz-remove:hover{text-decoration:underline}.dropzone .dz-preview .dz-details{z-index:20;position:absolute;top:0;left:0;opacity:0;font-size:13px;min-width:100%;max-width:100%;padding:2em 1em;text-align:center;color:rgba(0,0,0,.9);line-height:150%}.dropzone .dz-preview .dz-details .dz-size{margin-bottom:1em;font-size:16px}.dropzone .dz-preview .dz-details .dz-filename{white-space:nowrap}.dropzone .dz-preview .dz-details .dz-filename:hover span{border:1px solid rgba(200,200,200,.8);background-color:rgba(255,255,255,.8)}.dropzone .dz-preview .dz-details .dz-filename:not(:hover){overflow:hidden;text-overflow:ellipsis}.dropzone .dz-preview .dz-details .dz-filename:not(:hover) span{border:1px solid transparent}.dropzone .dz-preview .dz-details .dz-filename span,.dropzone .dz-preview .dz-details .dz-size span{background-color:rgba(255,255,255,.4);padding:0 .4em;border-radius:3px}.dropzone .dz-preview:hover .dz-image img{-webkit-transform:scale(1.05,1.05);-moz-transform:scale(1.05,1.05);-ms-transform:scale(1.05,1.05);-o-transform:scale(1.05,1.05);transform:scale(1.05,1.05);-webkit-filter:blur(8px);filter:blur(8px)}.dropzone .dz-preview .dz-image{border-radius:20px;overflow:hidden;width:120px;height:120px;position:relative;display:block;z-index:10}.dropzone .dz-preview .dz-image img{display:block}.dropzone .dz-preview.dz-success .dz-success-mark{-webkit-animation:passing-through 3s cubic-bezier(.77,0,.175,1);-moz-animation:passing-through 3s cubic-bezier(.77,0,.175,1);-ms-animation:passing-through 3s cubic-bezier(.77,0,.175,1);-o-animation:passing-through 3s cubic-bezier(.77,0,.175,1);animation:passing-through 3s cubic-bezier(.77,0,.175,1)}.dropzone .dz-preview.dz-error .dz-error-mark{opacity:1;-webkit-animation:slide-in 3s cubic-bezier(.77,0,.175,1);-moz-animation:slide-in 3s cubic-bezier(.77,0,.175,1);-ms-animation:slide-in 3s cubic-bezier(.77,0,.175,1);-o-animation:slide-in 3s cubic-bezier(.77,0,.175,1);animation:slide-in 3s cubic-bezier(.77,0,.175,1)}.dropzone .dz-preview .dz-error-mark,.dropzone .dz-preview .dz-success-mark{pointer-events:none;opacity:0;z-index:500;position:absolute;display:block;top:50%;left:50%;margin-left:-27px;margin-top:-27px}.dropzone .dz-preview .dz-error-mark svg,.dropzone .dz-preview .dz-success-mark svg{display:block;width:54px;height:54px}.dropzone .dz-preview.dz-processing .dz-progress{opacity:1;-webkit-transition:all .2s linear;-moz-transition:all .2s linear;-ms-transition:all .2s linear;-o-transition:all .2s linear;transition:all .2s linear}.dropzone .dz-preview.dz-complete .dz-progress{opacity:0;-webkit-transition:opacity .4s ease-in;-moz-transition:opacity .4s ease-in;-ms-transition:opacity .4s ease-in;-o-transition:opacity .4s ease-in;transition:opacity .4s ease-in}.dropzone .dz-preview:not(.dz-processing) .dz-progress{-webkit-animation:pulse 6s ease infinite;-moz-animation:pulse 6s ease infinite;-ms-animation:pulse 6s ease infinite;-o-animation:pulse 6s ease infinite;animation:pulse 6s ease infinite}.dropzone .dz-preview .dz-progress{opacity:1;z-index:1000;pointer-events:none;position:absolute;height:16px;left:50%;top:50%;margin-top:-8px;width:80px;margin-left:-40px;background:rgba(255,255,255,.9);-webkit-transform:scale(1);border-radius:8px;overflow:hidden}.dropzone .dz-preview .dz-progress .dz-upload{background:#333;background:linear-gradient(to bottom,#666,#444);position:absolute;top:0;left:0;bottom:0;width:0;-webkit-transition:width .3s ease-in-out;-moz-transition:width .3s ease-in-out;-ms-transition:width .3s ease-in-out;-o-transition:width .3s ease-in-out;transition:width .3s ease-in-out}.dropzone .dz-preview.dz-error .dz-error-message{display:block}.dropzone .dz-preview.dz-error:hover .dz-error-message{opacity:1;pointer-events:auto}.dropzone .dz-preview .dz-error-message{pointer-events:none;z-index:1000;position:absolute;display:block;display:none;opacity:0;-webkit-transition:opacity .3s ease;-moz-transition:opacity .3s ease;-ms-transition:opacity .3s ease;-o-transition:opacity .3s ease;transition:opacity .3s ease;border-radius:8px;font-size:13px;top:130px;left:-10px;width:140px;background:#be2626;background:linear-gradient(to bottom,#be2626,#a92222);padding:.5em 1.2em;color:#fff}.dropzone .dz-preview .dz-error-message:after{content:'';position:absolute;top:-6px;left:64px;width:0;height:0;border-left:6px solid transparent;border-right:6px solid transparent;border-bottom:6px solid #be2626}
        </style>
        <style type="text/css">
            .dz-preview.dz-file-preview {
                width: 100%;
                height: 100%;
                margin: 0;
                position: absolute;
                left: 0px;
                top: 0px;
            }
            .dz-preview.dz-file-preview:before {
                font-family: FontAwesome;
                content: "\f1c3";
                width: 128px;
                height: 128px;
                position: absolute;
                top: 37px;
                left: 50%;
                margin-left: -64px;
                color: #909090;
                z-index: 1000;
                font-size: 120px;
                text-align: center;
                line-height: 128px;
            }
            .dz-preview.dz-file-preview .dz-image {
                width: 100% !important;
                height: 100%;
                position:absolute;
                left:0;
                top:0;
                border-radius: 3px !important;
                border-top-right-radius: 3px;
                border-bottom-right-radius: 3px;
            }
            .dz-preview.dz-file-preview .dz-details {
                top:211px;
            }
            .dz-preview.dz-file-preview .dz-progress {
                width:200px;
                margin-left:-100px;
            }
        </style>


        <!-- IE Hack -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="wrapper">
            <div class="login-box">
                <div class="login-logo row">
                    <img src="<?php echo base_url() . 'assets/public/' ?>img/en31.png" width="70px"/>

                    <div class="title">
                        <span><strong>BANGKIM</strong></span>
                        <span>Direktorat Pengembangan <br>Kawasan Permukiman</span>
                    </div>
                </div><!-- /.login-logo -->
                <div class="login-box-body row">
                    <div class="ruler"><span></span><span></span></div>
                    <!-- Error notification wrapper here -->
                    <form action="<?php echo site_url('login/process_login') ?>" method="post" accept-charset="utf-8">
                        <?php
                        if ($this->session->flashdata('message') != ''):echo '<div class="alert alert-block alert-danger fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                        </button>
                        ' . $this->session->flashdata('message') .
                            '</div>';
                        endif;
                        ?>
                        <?php
                        if ($this->session->flashdata('message2') != ''):echo '<div class="alert alert-block alert-success fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                        </button>
                        ' . $this->session->flashdata('message2') .
                            '</div>';
                        endif;
                        ?>
                        <div class="form-group fg-login has-feedback">
                          <!--<input type="text" class="form-control" placeholder="ID Pengguna">-->
                            <input type="text" name="inpUsername" value="" class="form-control" placeholder="ID Pengguna"  />
                            <!--<span class="fa fa-user form-control-feedback"></span>-->
                        </div>
                        <div class="form-group fg-login has-feedback">
                          <!--<input type="password" class="form-control" placeholder="Kata Sandi">-->
                            <input type="password" name="inpPassword" value="" class="form-control" placeholder="Kata Sandi"  />
                            <!--<span class="fa fa-lock form-control-feedback"></span>-->
                        </div>
                        <div class="form-group fg-login has-feedback">
                            <!--<button type="submit" class="btn btn-success btn-block">Masuk</button>-->
                            <button type="submit" class="btn btn-success btn-block" >Masuk</button>
                        </div>
                        Belum memiliki akun ?
                        <a class="" href="<?php echo site_url('login/sign_up') ?>">
                            Buat Akun
                        </a>
                    </form>   
                    <div class="ruler"><span></span><span></span></div>
                </div><!-- /.login-box-body -->
                <div class="login-foot">
                    <div class="credit">
                        <span>
                            <strong>&copy; 2015 <br>Direktorat Pengembangan Kawasan Permukiman.</strong>
                        </span>
                    </div>
                </div><!-- /.login-foot -->
            </div><!-- /.login-box -->  </div>

        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/bootstrap.min.js"></script>
    </body>
</html>