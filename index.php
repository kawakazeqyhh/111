<?php
require_once './config.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <!-- 基础信息 -->
    <meta charset="utf-8">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="force-rendering" content="webkit" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#424242" />
    <meta name="description" content="<?php echo $site->description; ?>">
    <meta name="keywords" content="<?php echo $site->keywords; ?>">
    <meta name="author" content="<?php echo $site->author; ?>">
    <link rel="shortcut icon" href="<?php echo $site->domain; ?>/favicon.png" sizes="1024x1024" type="image/png">
    <title><?php echo $site->title; ?></title>
    <!-- jQuery -->
    <script src="<?php echo $site->domain; ?>/assets/js/jquery/jquery-3.5.1.min.js"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.geekzu.org/css2?family=Noto+Sans+SC&display=swap" rel="stylesheet">
    <!-- 引入样式 -->
    <link rel="stylesheet" type="text/css" href="https://lf9-cdn-tos.bytecdntp.com/cdn/expire-1-y/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $site->domain; ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $site->domain; ?>/css/mobile.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $site->domain; ?>/css/loading.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $site->domain; ?>/css/animation.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $site->domain; ?>/css/cursor.css">
    <!-- Izitoast -->
    <link rel="stylesheet" href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-y/izitoast/1.4.0/css/iziToast.min.css">
    <script type="text/javascript" src="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-y/izitoast/1.4.0/js/iziToast.min.js">
    </script>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Aplayer -->
    <link rel="stylesheet" href="https://lf9-cdn-tos.bytecdntp.com/cdn/expire-1-y/aplayer/1.10.1/APlayer.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-y/aplayer/1.10.1/APlayer.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo $site->domain; ?>/js/Meting.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- IE Out -->
    <script>
        if ( /*@cc_on!@*/ false || (!!window.MSInputMethodContext && !!document.documentMode)) {
            window.location.href =
                "<?php echo $site->domain; ?>/upgrade-your-browser/index.html?referrer=" + encodeURIComponent(window.location.href)
        };
    </script>
    <!-- PWA -->
    <link rel="manifest" href="<?php echo $site->domain; ?>/manifest.json">
    <!-- 51.LA 统计 -->
    <script src="<?php echo $site->domain; ?>/js/51LA.js"></script>
</head>

<body>
    <!--加载动画-->
    <div id="loading-box">
        <div class="loading-left-bg"></div>
        <div class="loading-right-bg"></div>
        <div class="spinner-box">
            <div class="loader">
                <div class="inner one"></div>
                <div class="inner two"></div>
                <div class="inner three"></div>
            </div>
            <div class="loading-word">
                <p class="loading-title" id="loading-title"><?php echo $site->title; ?></p>
                <span id="loading-text">加载中</span>
            </div>
        </div>
    </div>
    <section id="section" class="section">
        <!-- 背景图片 -->
        <div class="bg-all">
            <img id="bg" onerror="this.classList.add('error');"></img>
            <div class="cover"></div>
        </div>
        <!--主体内容-->
        <main id="main" class="main">
            <div class="container" id="container">
                <div class="row" id="row">
                    <div class="col left">
                        <!--基本信息-->
                        <div class="main-left">
                            <!--Logo-->
                            <div class="main-img">
                                <img id="logo-img" src="<?php echo $site->domain . $site->logo_path; ?>" alt="logo">
                                <div class="img-title">
                                    <span class="img-title-big" id="logo-text-1"><?php echo $site->logo_text[0]; ?></span>
                                    <span class="img-text" id="logo-text-2"><?php echo '.' . $site->logo_text[1]; ?></span>
                                </div>
                            </div>
                            <!--介绍信息-->
                            <div class="message cards" id="switchmore">
                                <div class="des" id="des">
                                    <i class="fa-solid fa-quote-left"></i>
                                    <div class="des-title">
                                        <span id="change"><?php echo $site->des_title[0]; ?></span><br />
                                        <span id="change1"><?php echo $site->des_title[1]; ?></span>
                                    </div>
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                            </div>
                            <!--社交链接-->
                            <div class="social" id="social">
                                <a href="<?php echo $site->social_contact['github']; ?>" class="link" id="github" style="margin-left: 4px" target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="<?php echo $site->social_contact['qq']; ?>" class="link" id="qq" target="_blank">
                                    <i class="fa-brands fa-qq"></i>
                                </a>
                                <a href="<?php echo $site->social_contact['email']; ?>" class="link" id="email">
                                    <i class="fa-solid fa-envelope"></i>
                                </a>
                                <a href="<?php echo $site->social_contact['telegram']; ?>" class="link" id="telegram" target="_blank">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                                <a href="<?php echo $site->social_contact['twitter']; ?>" class="link" id="twitter" target="_blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a id="link-text">通过这里联系我</a>
                            </div>
                        </div>
                    </div>
                    <!--第二屏 Logo-->
                    <div class="logo cards" style="display: none" id="changemore">
                        <a class="logo-text" id="logo-text-small"><?php echo $site->logo_text[0] . '.' . $site->logo_text[1]; ?></a>
                    </div>
                    <div class="col right">
                        <div class="main-right">
                            <!--功能区-->
                            <div class="row rightone" id="rightone">
                                <div class="col hitokotos">
                                    <!--一言-->
                                    <div class="hitokoto cards" id="hitokoto">
                                        <!--切换音乐-->
                                        <div class="open-music fixed-top" id="open-music">
                                            <i class="fa-solid fa-compact-disc"></i>
                                            <span>&nbsp;打开音乐播放器</span>
                                        </div>
                                        <!--切换音乐结束-->
                                        <div class="hitokoto-all">
                                            <div class="hitokoto-text"><span id="hitokoto_text">强力的卡片总是伴随着风险</span>
                                            </div>
                                            <div class="hitokoto-from">-「&nbsp;<span id="from_text">凯撒</span>&nbsp;」
                                            </div>
                                        </div>
                                    </div>
                                    <!--音乐-->
                                    <div class="music" id="music">
                                        <div class="music-all">
                                            <div class="music-button">
                                                <div id="music-open">音乐列表</div>
                                                <div id="music-close">回到一言</div>
                                            </div>
                                            <div class="music-control">
                                                <i class="fa-solid fa-backward-step" id="last"></i>
                                                <div id="play">
                                                    <i class="fa-solid fa-play"></i>
                                                </div>
                                                <i class="fa-solid fa-forward-step" id="next"></i>
                                            </div>
                                            <div class="music-menu">
                                                <div class="music-text">
                                                    <span id="music-name">未播放音乐</span>
                                                </div>
                                                <div class="music-volume" style="display: none;">
                                                    <div id="volume-ico">
                                                        <i class="fa-solid fa-volume-low"></i>
                                                    </div>
                                                    <input type="range" min="0" max="1" step="0.01" id="volume">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col times">
                                    <!--时间-->
                                    <div class="time cards">
                                        <div class="timeshow" id="time">
                                            1919&nbsp;年&nbsp;8&nbsp;月&nbsp;10&nbsp;日&nbsp;<span class="weekday">星期日</span><br><span class="time-text">11:45:14</span>
                                        </div>
                                        <div class="weather">
                                            <span id="city_text">天气</span>&nbsp;
                                            <span id="wea_text">加载失败</span>&nbsp;
                                            <span id="tem_night"></span>°C~
                                            <span id="tem_day"></span>°C&nbsp;
                                            <span id="win_text"></span>
                                            <span id="win_speed"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--分隔线-->
                            <div class="line">
                                <i class="fa-solid fa-link"></i>
                                <span class="line-text">网站列表</span>
                            </div>
                            <!--网站链接-->
                            <div class="link">
                                <!--第一组-->
                                <div class="row">
                                    <div class="col">
                                        <a id="link-url-1" href="<?php echo $site->get_kv('link_list', 0, 'url'); ?>" target="_blank">
                                            <div class="link-card cards">
                                                <i id="link-icon-1" class="<?php echo $site->get_kv('link_list', 0, 'icon'); ?>"></i>
                                                <span class="link-name" id="link-name-1"><?php echo $site->get_kv('link_list', 0, 'name'); ?></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col 2">
                                        <a id="link-url-2" href="<?php echo $site->get_kv('link_list', 1, 'url'); ?>" target="_blank">
                                            <div class="link-card cards">
                                                <i id="link-icon-2" class="<?php echo $site->get_kv('link_list', 1, 'icon'); ?>"></i>
                                                <span class="link-name" id="link-name-2"><?php echo $site->get_kv('link_list', 1, 'name'); ?></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a id="link-url-3" href="<?php echo $site->get_kv('link_list', 2, 'url'); ?>" target="_blank">
                                            <div class="link-card cards">
                                                <i id="link-icon-3" class="<?php echo $site->get_kv('link_list', 2, 'icon'); ?>"></i>
                                                <span class="link-name" id="link-name-3"><?php echo $site->get_kv('link_list', 2, 'name'); ?></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!--第二组-->
                                <div class="row" style="margin-top: 1.5rem;">
                                    <div class="col">
                                        <a id="link-url-4" href="<?php echo $site->get_kv('link_list', 3, 'url'); ?>" target="_blank">
                                            <div class="link-card cards">
                                                <i id="link-icon-4" class="<?php echo $site->get_kv('link_list', 3, 'icon'); ?>"></i>
                                                <span class="link-name" id="link-name-4"><?php echo $site->get_kv('link_list', 3, 'name'); ?></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col 2">
                                        <a id="link-url-5" href="<?php echo $site->get_kv('link_list', 4, 'url'); ?>" target="_blank">
                                            <div class="link-card cards">
                                                <i id="link-icon-5" class="<?php echo $site->get_kv('link_list', 4, 'icon'); ?>"></i>
                                                <span class="link-name" id="link-name-5"><?php echo $site->get_kv('link_list', 4, 'name'); ?></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a id="link-url-6" href="<?php echo $site->get_kv('link_list', 5, 'url'); ?>" target="_blank">
                                            <div class="link-card cards">
                                                <i id="link-icon-6" class="<?php echo $site->get_kv('link_list', 5, 'icon'); ?>"></i>
                                                <span class="link-name" id="link-name-6"><?php echo $site->get_kv('link_list', 5, 'name'); ?></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--展开菜单按钮-->
                <div class="menu" id="switchmenu">
                    <a class="munu-button cards" id="menu">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
                <!--更多内容-->
                <div class="more" id="more">
                    <!--关闭按钮-->
                    <div class="close fixed-top" id="close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                    <div class="line" style="margin-top: 1rem;">
                        <i class="fa-solid fa-angle-left"></i>
                        <span class="line-text">时间胶囊</span>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="date" id="date">
                        <div class="item" id="dayProgress">
                            <div class="date-text" style="margin-top: 0rem;">今日已经度过了&nbsp;<span></span>&nbsp;小时</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                        <div class="item" id="weekProgress">
                            <div class="date-text">本周已经度过了&nbsp;<span></span>&nbsp;天</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                        <div class="item" id="monthProgress">
                            <div class="date-text">本月已经度过了&nbsp;<span></span>&nbsp;天</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                        <div class="item" id="yearProgress">
                            <div class="date-text">今年已经度过了&nbsp;<span></span>&nbsp;个月</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="line">
                        <i class="fa-solid fa-angle-left"></i>
                        <span class="line-text">杂七杂八</span>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <!--网站链接-->
                    <div class="row">
                        <div class="col">
                            <a href="<?php echo $site->get_kv('z7z8', 0, 'url'); ?>" target="_blank">
                                <div class="link-card cards">
                                    <span class="link-name"><?php echo $site->get_kv('z7z8', 0, 'name'); ?></span>
                                </div>
                            </a>
                        </div>
                        <div class="col 2">
                            <a href="<?php echo $site->get_kv('z7z8', 1, 'url'); ?>" target="_blank">
                                <div class="link-card cards">
                                    <span class="link-name"><?php echo $site->get_kv('z7z8', 1, 'name'); ?></span>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="<?php echo $site->get_kv('z7z8', 2, 'url'); ?>" target="_blank">
                                <div class="link-card cards">
                                    <span class="link-name"><?php echo $site->get_kv('z7z8', 2, 'name'); ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 1.5rem;">
                        <div class="col">
                            <a href="<?php echo $site->get_kv('z7z8', 3, 'url'); ?>" target="_blank">
                                <div class="link-card cards">
                                    <span class="link-name"><?php echo $site->get_kv('z7z8', 3, 'name'); ?></span>
                                </div>
                            </a>
                        </div>
                        <div class="col 2">
                            <a href="<?php echo $site->get_kv('z7z8', 4, 'url'); ?>" target="_blank">
                                <div class="link-card cards">
                                    <span class="link-name"><?php echo $site->get_kv('z7z8', 4, 'name'); ?></span>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a id="openmore">
                                <div class="link-card cards">
                                    <span class="link-name">更多</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--更多页面-->
                <div class="box" id="box" style="display: none">
                    <div class="box-wrapper">
                        <!--关闭按钮-->
                        <div class="closebox fixed-top" id="closemore">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                        <!--左侧内容-->
                        <div class="box-left">
                            <div class="img-title">
                                <span class="img-title-big" id="logo-title-other">imsyy</span>
                                <span class="img-text" id="logo-title-other-small">.top</span><br />
                                <span class="img-text">&nbsp;v&nbsp;3.0</span>
                                <a href="https://github.com/imsyy/home" target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                            <!--更多内容-->
                            <div class="accordion" id="accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            壁纸设置
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <div class="set">
                                                <div class="wallpaper" id="wallpaper">
                                                    <div class="form-radio">
                                                        <input type="radio" class="set-wallpaper" style="display: none;" id="radio1" value="1" name="wallpaper-type">
                                                        <label for="radio1">默认壁纸</label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <input type="radio" class="set-wallpaper" style="display: none;" id="radio2" value="2" name="wallpaper-type">
                                                        <label for="radio2" id="wallpaper_text1"><?php echo $site->get_kv('wallpaper_api', 0, 'name'); ?></label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <input type="radio" class="set-wallpaper" style="display: none;" id="radio3" value="3" name="wallpaper-type">
                                                        <label for="radio3" id="wallpaper_text2"><?php echo $site->get_kv('wallpaper_api', 1, 'name'); ?></label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <input type="radio" class="set-wallpaper" style="display: none;" id="radio4" value="4" name="wallpaper-type">
                                                        <label for="radio4" id="wallpaper_text3"><?php echo $site->get_kv('wallpaper_api', 2, 'name'); ?></label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <input type="radio" class="set-wallpaper" style="display: none;" id="radio5" value="5" name="wallpaper-type">
                                                        <label for="radio5" id="wallpaper_text4"><?php echo $site->get_kv('wallpaper_api', 3, 'name'); ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--更新日志-->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            更新日志
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <div class="upnote">
                                                <span class="uptext">
                                                    <i class="fa-solid fa-circle-plus"></i>&nbsp;音乐歌单支持快速自定义
                                                </span>
                                                <span class="uptext">
                                                    <i class="fa-solid fa-circle-plus"></i>&nbsp;壁纸支持个性化设置
                                                </span>
                                                <span class="uptext">
                                                    <i class="fa-solid fa-circle-plus"></i>&nbsp;音乐播放器支持音量控制
                                                </span>
                                                <span class="uptext">
                                                    <i class="fa-solid fa-screwdriver-wrench"></i>&nbsp;时光胶囊显示错误</span>
                                                <span class="uptext">
                                                    <i class="fa-solid fa-screwdriver-wrench"></i>&nbsp;移动端动画及细节</span>
                                                <span class="uptext">
                                                    <i class="fa-solid fa-screwdriver-wrench"></i>&nbsp;图标更换为 FontAwesome</span>
                                                <span class="uptext">
                                                    <i class="fa-solid fa-rotate-left"></i>
                                                    <a href="<?php echo $site->domain; ?>/" style="color:#efefef">返回旧版站点(X)</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Aplayer-->
                        <div class="box-right">
                            <div id="aplayer">
                                <span>音乐播放器加载失败</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- 版权信息 -->
        <footer id="footer" class="fixed-bottom footer">
            <div class="power">Copyright&nbsp;&copy;&nbsp;
                <span id="power-year"><?php echo $site->copyright[0] . '&nbsp;-&nbsp;' . date('Y');; ?></span>
                <a href="<?php echo $site->domain; ?>" id="power-text"><?php echo $site->copyright[1]; ?></a>&nbsp;&amp;&nbsp;
                <!-- 以下信息请不要修改哦 -->
                Made&nbsp;by&nbsp;<a href="https://github.com/imsyy/home" target="_blank">imsyy</a>
            </div>
            <!-- 歌词显示 -->
            <div id="lrc"></div>
        </footer>
    </section>
    <!-- sw.js -->
    <script>
        if ("serviceWorker" in navigator) {
            window.addEventListener("load", function() {
                navigator.serviceWorker.register("sw.js");
            });
        }
    </script>
    <!-- noscript -->
    <noscript>
        <div class="noscript fixed-top">请开启 JavaScript</div>
    </noscript>
    <!-- JS -->
    <script type="text/javascript" src="<?php echo $site->domain; ?>/js/main.js"></script>
    <!-- <script type="text/javascript" src="/js/set.js"></script> -->
    <script type="text/javascript" src="<?php echo $site->domain; ?>/js/time.js"></script>
    <script type="text/javascript" src="<?php echo $site->domain; ?>/js/js.cookie.js"></script>
    <script type="text/javascript" src="<?php echo $site->domain; ?>/js/cursor.js"></script>
    <script type="text/javascript" src="https://lf9-cdn-tos.bytecdntp.com/cdn/expire-1-y/bootstrap/5.1.0/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        /* 补充 localStorage 部分 */
        localStorage.setItem('des_tip', '<?php echo $site->des_title[0]; ?>');
        localStorage.setItem('des_title', '<?php echo $site->des_title[1]; ?>');
        localStorage.setItem('des_tip_change', '<?php echo $site->des_title_change[0]; ?>');
        localStorage.setItem('des_title_change', '<?php echo $site->des_title_change[1]; ?>');
        /* 天气 API */
        localStorage.setItem('weather_api', '<?php echo $site->weather_api; ?>');
        /* 壁纸 API */
        localStorage.setItem('wallpaper_api_1', '<?php echo $site->get_kv('wallpaper_api', 0, 'url'); ?>');
        localStorage.setItem('wallpaper_api_2', '<?php echo $site->get_kv('wallpaper_api', 1, 'url'); ?>');
        localStorage.setItem('wallpaper_api_3', '<?php echo $site->get_kv('wallpaper_api', 2, 'url'); ?>');
        localStorage.setItem('wallpaper_api_4', '<?php echo $site->get_kv('wallpaper_api', 3, 'url'); ?>');

        /* 添加了一个壁纸 API, 其他未改变 */

        // 背景图片 Cookies 
        function setBgImg(bg_img) {
            if (bg_img) {
                Cookies.set('bg_img', bg_img, {
                    expires: 36500
                });
                return true;
            }
            return false;
        };

        // 获取背景图片 Cookies
        function getBgImg() {
            var bg_img_local = Cookies.get('bg_img');
            if (bg_img_local && bg_img_local !== "{}") {
                return JSON.parse(bg_img_local);
            } else {
                setBgImg(bg_img_preinstall);
                return bg_img_preinstall;
            }
        }

        var bg_img_preinstall = {
            "type": "1", // default,YGO,Bing,scenery,comic
        };

        // 更改背景图片
        function setBgImgInit() {
            var bg_img = getBgImg();
            $("input[name='wallpaper-type'][value=" + bg_img["type"] + "]").click();

            switch (bg_img["type"]) {
                case "1":
                    var pictures = new Array();
                    pictures[0] = './img/background1.webp';
                    pictures[1] = './img/background2.webp';
                    pictures[2] = './img/background3.webp';
                    pictures[3] = './img/background4.webp';
                    pictures[4] = './img/background5.webp';
                    pictures[5] = './img/background6.webp';
                    pictures[6] = './img/background7.webp';
                    pictures[7] = './img/background8.webp';
                    pictures[8] = './img/background9.webp';
                    pictures[9] = './img/background10.webp';
                    var rd = Math.floor(Math.random() * 10);
                    $('#bg').attr('src', pictures[rd]) // 随机默认壁纸
                    break;
                case "2":
                    $('#bg').attr('src', localStorage.getItem('wallpaper_api_1')); // YGO
                    break;
                case "3":
                    $('#bg').attr('src', localStorage.getItem('wallpaper_api_2')); // Bing
                    break;
                case "4":
                    $('#bg').attr('src', localStorage.getItem('wallpaper_api_3')); // 随机风景
                    break;
                case "5":
                    $('#bg').attr('src', localStorage.getItem('wallpaper_api_4')); // 随机动漫
                    break;
            }
        };

        $(document).ready(function() {
            // 壁纸数据加载
            setBgImgInit();
            // 设置背景图片
            $("#wallpaper").on("click", ".set-wallpaper", function() {
                var type = $(this).val();
                var bg_img = getBgImg();
                bg_img["type"] = type;

                if (type === "1") {
                    setBgImg(bg_img);
                    var pictures = new Array();
                    pictures[0] = './img/background1.webp';
                    pictures[1] = './img/background2.webp';
                    pictures[2] = './img/background3.webp';
                    pictures[3] = './img/background4.webp';
                    pictures[4] = './img/background5.webp';
                    pictures[5] = './img/background6.webp';
                    pictures[6] = './img/background7.webp';
                    pictures[7] = './img/background8.webp';
                    pictures[8] = './img/background9.webp';
                    pictures[9] = './img/background10.webp';
                    var rd = Math.floor(Math.random() * 10);
                    $('#bg').attr('src', pictures[rd]) //随机默认壁纸
                    iziToast.show({
                        icon: "fa-solid fa-image",
                        timeout: 2500,
                        message: '壁纸设置成功',
                    });
                };

                if (type === "2") {
                    setBgImg(bg_img);
                    $('#bg').attr('src', localStorage.getItem('wallpaper_api_1'));
                    iziToast.show({
                        icon: "fa-solid fa-image",
                        timeout: 2500,
                        message: '壁纸设置成功',
                    });
                };

                if (type === "3") {
                    setBgImg(bg_img);
                    $('#bg').attr('src', localStorage.getItem('wallpaper_api_2'));
                    iziToast.show({
                        icon: "fa-solid fa-image",
                        timeout: 2500,
                        message: '壁纸设置成功',
                    });
                };

                if (type === "4") {
                    setBgImg(bg_img);
                    $('#bg').attr('src', localStorage.getItem('wallpaper_api_3'));
                    iziToast.show({
                        icon: "fa-solid fa-image",
                        timeout: 2500,
                        message: '壁纸设置成功',
                    });
                };

                if (type === "5") {
                    setBgImg(bg_img);
                    $('#bg').attr('src', localStorage.getItem('wallpaper_api_4'));
                    iziToast.show({
                        icon: "fa-solid fa-image",
                        timeout: 2500,
                        message: '壁纸设置成功',
                    });
                };
            });
        });
    </script>
</body>

</html>