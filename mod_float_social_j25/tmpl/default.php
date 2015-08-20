<?php
    defined('_JEXEC') or die('Restricted access');
    
    $doc = JFactory::getDocument();
    
    $url_server_name = JURI::base();
    
    $doc->addStyleSheet("modules/mod_float_social/css/mod_float_social.css");
?>
    <div id="ModFloatSocial" style="<?php echo ($position == 'left') ? "left: 10px;" : "right: 25px;"?>text-align:center;">
        <?php
            $google_plus_js = "<script type=\"text/javascript\" src=\"https://apis.google.com/js/plusone.js\">";
            if($google_plus_button_language != 'en-EN')
                $google_plus_js .= "{lang: '$google_plus_button_language'}";
            $google_plus_js .= "</script>";
    echo $google_plus_js;
            $google_plus_button_url = ($google_plus_button_url != '') ? $google_plus_button_url : $url_server_name;
        ?>
        <div style="text-align: center;" class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="60" data-href="<?php echo $google_plus_button_url;?>"></div>
        
        <br /><br />
        
        <?php
            $facebook_button_url = ($facebook_button_url != '') ? $facebook_button_url : $url_server_name;
        ?>
        <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo $facebook_button_url; ?>&width=450&height=65&colorscheme=light&layout=box_count&action=like&show_faces=false&send=<?php echo ($facebook_button_data_send == 'yes') ? "true" : "false"; ?>"
                frameborder="0" width="75" height="<?php echo ($facebook_button_data_send == 'yes') ? "100" : "65"; ?>" scrollbar="no" style="text-align: center;">
        </iframe>
        
        <br /><br />
        
        <?php
            $twitter_button_url = ($twitter_button_url != '') ? $twitter_button_url : $url_server_name;
        ?>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $twitter_button_url; ?>" data-via="<?php echo $twitter_button_via; ?>" data-lang="en" data-related="anywhereTheJavascriptAPI" data-count="vertical">Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        
        <br /><br />
        
        <?php
            $linkedin_button_url = ($linkedin_button_url != '') ? $linkedin_button_url : $url_server_name;
        ?>
        
        <script src="//platform.linkedin.com/in.js" type="text/javascript">lang: <?php echo $linkedin_button_language;?></script>
        <script type="IN/Share" data-url="<?php echo $linkedin_button_url; ?>" data-counter="top"></script>
    </div>