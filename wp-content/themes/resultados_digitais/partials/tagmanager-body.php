<?php
    $gtm_id = get_option('tag_manager');
    if($gtm_id) { ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?php echo $gtm_id; ?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) --> <?php
    }
