<html>
    <head><title>Shale.ai</title></head>
    <body style="font-family: Ruda, sans-serif;font-size: 13px;color: #797979;">
        <div class="container">  
            <div style="background-image: url('<?php echo url('/') ?>/public/img/logo.png');background-position: top center;background-repeat: no-repeat;max-width: 100%;height: 88vh;margin: 0px auto;padding: 20px;padding-bottom: 41px;background-size: contain;">
                <div style="max-width: 660px; margin: 125px auto 0;background: #fff; border-radius: 5px;-webkit-border-radius: 5px;">
                    <h2 style="margin: 0; padding: 25px 20px;text-align: center;background: #f67d00;border-radius: 5px 5px 0 0;-webkit-border-radius: 5px 5px 0 0; color: #fff;font-size: 20px;font-weight: 300;"><b>Shale.ai</b></h2>
                    <div style="padding:20px;background: #4037541f;">
                        <h1 style="text-align: center;">{!! $user !!}</h1>
                        <p style="text-align: center;">Please Reset your Password by Visiting below Link</p>
                        <p style="text-align: center;">
                            <a href="<?php echo url('/').'/reset_password?code='.$password_hashcode.'&mail='.$email; ?>"><?php echo url('/').'/reset_password?code='.$password_hashcode.'&mail='.$email; ?></a>
                        </p>
                    </div>  
                </div>  
            </div>  
        </div>  
    </body>
</html>