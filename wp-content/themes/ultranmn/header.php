<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <title>Form Input</title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- header -->
    <header id="header">
        <div class="inner">
            <h1 class="header-logo">
                <a href="<?php echo home_url('/')?>"><img src="<?php echo get_template_directory_uri()?>/images/logo.svg" alt="ULTRANMN"></a>
            </h1>
            <?php if(!is_page()):?>
                <nav class="header-nav">
                    <ul class="header-list">
                        <li class="header-item"><a href="">先着100名様限定のモニターに参加する</a></li>
                        <li class="header-item"><a href="">お気に入りに登録</a></li>
                    </ul>
                </nav>
            <?php endif;?>
        </div><!-- /inner -->
    </header><!-- /header -->