<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/themer.css" media="screen">

<title>查看用户详情</title>
<style type="text/css">
    #mws-wrapper{
        margin-left:-200px;
    }
</style>
</head>

<body>
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
            <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span>查看用户详情</span>
                    </div>

                    <div class="mws-panel-body no-padding" >
                        <form class="mws-form" action="<?php echo U('User/updatea');?>" method="post" enctype="multipart/form-data" align="center" >
                            <div class="mws-form-inline"  >
                                <div class="mws-form-row" style="margin-left:10px;">
                                    用户昵称:
                                    <input type="text" class="small" name="name" value="<?php echo ($userdetail['name']); ?>">
                                </div>
                                
                                
                                <div class="mws-form-row" style="width:200px;margin-left:420px;">

                                    用户头像：
                                        <div ><img src="/tongmeng/Public/<?php echo ($userdetail['pic']); ?>" alt="" width="100px"></div><br/>
                                        <div style="margin-left:50px;"><input type="file" name="pic"></div>
                                 
                                </div>

                                
                                
                                <div class="mws-form-row" style="margin-left:10px;">
                                       用户性别:   
                                       <?php echo ($userdetail['sex']==1?'<input type="radio" name="sex" value="1" checked>男<input type="radio" name="sex" value="0">女':'<input type="radio" name="sex" value="1">男<input type="radio" name="sex" value="0" checked> 女'); ?>
                                 
                                   
                                </div>
                                <div class="mws-form-row" style="margin-left:10px;">
                                   用户年龄:&nbsp;&nbsp;
                                   <input type="text" name="age" value="<?php echo ($userdetail['age']); ?>" >
                                    
                                </div>

                                <div class="mws-form-row" style="margin-left:10px;">
                                    用户地址:&nbsp;
                                    <input type="text" name="address" value="<?php echo ($userdetail['address']); ?>" >
                                   
                                </div>

                                <div class="mws-form-row" style="margin-left:10px;">
                                    手机号码:&nbsp;
                                    <input type="text" name="tel" value="<?php echo ($userdetail['tel']); ?>" >
                                    
                                </div>
                                <div class="mws-form-row" style="margin-left:10px;">
                                    
                                    用户积分:&nbsp;
                                    <input type="text" name="credits" value="<?php echo ($userdetail['credits']); ?>">
                                    
                                </div>
                                <div class="mws-form-row" style="margin-left:10px;">
                                    账户余额:&nbsp;
                                    <input type="text" name="money" value="<?php echo ($userdetail['money']); ?>">
                                    
                                </div>
                            
                            <div class="mws-button-row" style="text-align:center;">
                                <a href="<?php echo U('User/index');?>" style="margin-left:-100px;">
                                 返回用户列表
                               </a>&nbsp;&nbsp;  
                                <input type="hidden" name="uid" value="<?php echo ($userdetail['uid']); ?>">
                                <input type="hidden" name="pic" value="<?php echo ($userdetail['pic']); ?>" >
                                <input type="submit" value="提交" class="btn btn-danger">
                                <input type="reset" value="重置" class="btn ">
                               
                            </div>
                        </div>
                           
                        </form>
                        </div> 
                        </div>
                    </div>      
                </div>
        
            <!-- Footer -->
          
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/tongmeng/Public/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/tongmeng/Public/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/tongmeng/Public/js/libs/jquery.placeholder.min.js"></script>
    <script src="/tongmeng/Public/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/tongmeng/Public/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/tongmeng/Public/jui/jquery-ui.custom.min.js"></script>
    <script src="/tongmeng/Public/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/tongmeng/Public/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/tongmeng/Public/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/tongmeng/Public/plugins/flot/jquery.flot.min.js"></script>
    <script src="/tongmeng/Public/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/tongmeng/Public/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/tongmeng/Public/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/tongmeng/Public/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/tongmeng/Public/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/tongmeng/Public/plugins/validate/jquery.validate-min.js"></script>
    <script src="/tongmeng/Public/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/tongmeng/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/tongmeng/Public/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/tongmeng/Public/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/tongmeng/Public/js/demo/demo.dashboard.js"></script>
    <!-- 引入js文件 表单验证时样式 -->
    <script type="text/javascript" src="/tongmeng/Public/user/user_add.js"></script>
</body>
</html>