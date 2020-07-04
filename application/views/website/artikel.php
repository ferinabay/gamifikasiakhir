<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- <link rel="pingback" href="http://jti.polinema.ac.id/xmlrpc.php"> -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assetKu/img/polinema_logo.png">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assetKu/img/polinema_logo.png">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assetKu//fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assetKu/newAssets/dist/css/myStyle.css">
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'> -->
	<?php
	//TIANI-FOREACH
	foreach ($artikel_new as $key) {
		# code...
		// echo $key["judul"];

		?>
		<title><?php echo $key['judul']; ?> – JTI Polinema</title>
		<link rel="dns-prefetch" href="//ajax.googleapis.com">
		<link rel="dns-prefetch" href="//fonts.googleapis.com">
		<link rel="dns-prefetch" href="//s.w.org">
		<link rel="alternate" type="application/rss+xml" title="JTI Polinema » Feed" href="">
		<link rel="alternate" type="application/rss+xml" title="JTI Polinema » Comments Feed" href="">
		<script type="text/javascript">
			window._wpemojiSettings = {
				"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/",
				"ext": ".png",
				"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/",
				"svgExt": ".svg",
				"source": {
					"concatemoji": "http:\/\/jti.polinema.ac.id\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.1"
				}
			};
			! function(a, b, c) {
				function d(a) {
					var b, c, d, e, f = String.fromCharCode;
					if (!k || !k.fillText) return !1;
					switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a) {
						case "flag":
							return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 56826, 8203, 55356, 56819), 0, 0), c = j.toDataURL(), b === c && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447), 0, 0), c = j.toDataURL(), b !== c);
						case "emoji4":
							return k.fillText(f(55358, 56794, 8205, 9794, 65039), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55358, 56794, 8203, 9794, 65039), 0, 0), e = j.toDataURL(), d !== e
					}
					return !1
				}

				function e(a) {
					var c = b.createElement("script");
					c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
				}
				var f, g, h, i, j = b.createElement("canvas"),
					k = j.getContext && j.getContext("2d");
				for (i = Array("flag", "emoji4"), c.supports = {
						everything: !0,
						everythingExceptFlag: !0
					}, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
				c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
					c.DOMReady = !0
				}, c.supports.everything || (g = function() {
					c.readyCallback()
				}, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
					"complete" === b.readyState && c.readyCallback()
				})), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
			}(window, document, window._wpemojiSettings);
		</script>
		<script src="<?= base_url() ?>assetKu/jti/wp-emoji-release.min.js" type="text/javascript" defer=""></script>
		<style type="text/css">
			img.wp-smiley,
			img.emoji {
				display: inline !important;
				border: none !important;
				box-shadow: none !important;
				height: 1em !important;
				width: 1em !important;
				margin: 0 .07em !important;
				vertical-align: -0.1em !important;
				background: none !important;
				padding: 0 !important;
			}
		</style>
		<link rel="stylesheet" id="jti-alumni-css" href="<?= base_url() ?>assetKu/jti/jti-alumni-public.css" type="text/css" media="all">
		<link rel="stylesheet" id="jti-employee-css" href="<?= base_url() ?>assetKu/jti/jti-employee-public.css" type="text/css" media="all">
		<link rel="stylesheet" id="jti-event-css" href="<?= base_url() ?>assetKu/jti/jti-event-public.css" type="text/css" media="all">
		<link rel="stylesheet" id="open-sans-css" href="<?= base_url() ?>assetKu/jti/fonts.googleapis.css" type="text/css" media="all">
		<link rel="stylesheet" id="jti-polinema-style-css" href="<?= base_url() ?>assetKu/jti/style.css" type="text/css" media="all">
		<script type="text/javascript" src="<?= base_url() ?>assetKu/jti/jquery.min.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assetKu/jti/jti-alumni-public.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assetKu/jti/jti-employee-public.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assetKu/jti/jti-event-public.js"></script>
		<link rel="https://api.w.org/" href="<?= base_url() ?>assetKu/jti/wp-json.json">
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?= base_url() ?>assetKu/jti/xmlrpc.php">
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?= base_url() ?>assetKu/jti/wlwmanifest.xml">
		<meta name="generator" content="WordPress 4.8.1">
		<link rel="canonical" href="">
		<link rel="shortlink" href="">
		<link rel="alternate" type="application/json+oembed" href="http://jti.polinema.ac.id/index.php/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fjti.polinema.ac.id%2Findex.php%2F2019%2F06%2F28%2Fshort-write-up-demonstrates-to-you-the-particulars-of-aid-publishing-reports-and-what-you-must-do-immediately%2F">
		<link rel="alternate" type="text/xml+oembed" href="http://jti.polinema.ac.id/index.php/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fjti.polinema.ac.id%2Findex.php%2F2019%2F06%2F28%2Fshort-write-up-demonstrates-to-you-the-particulars-of-aid-publishing-reports-and-what-you-must-do-immediately%2F&amp;format=xml">
		<style>
			#responsive-menu .appendLink,
			#responsive-menu .responsive-menu li a,
			#responsive-menu #responsive-menu-title a,
			#responsive-menu .responsive-menu,
			#responsive-menu div,
			#responsive-menu .responsive-menu li,
			#responsive-menu {
				box-sizing: content-box !important;
				-moz-box-sizing: content-box !important;
				-webkit-box-sizing: content-box !important;
				-o-box-sizing: content-box !important
			}

			.RMPushOpen {
				width: 100% !important;
				overflow-x: hidden !important;
				height: 100% !important
			}

			.RMPushSlide {
				position: relative;
				left: 75%
			}

			#responsive-menu {
				position: absolute;
				width: 75%;
				left: -75%;
				top: 0px;
				background: #43494C;
				z-index: 9999;
				box-shadow: 0px 1px 8px #333333;
				font-size: 13px !important;
				max-width: 999px;
				display: none
			}

			#responsive-menu.admin-bar-showing {
				padding-top: 32px
			}

			#click-menu.admin-bar-showing {
				margin-top: 32px
			}

			#responsive-menu #rm-additional-content {
				padding: 10px 5% !important;
				width: 90% !important;
				color: #FFFFFF
			}

			#responsive-menu .appendLink {
				right: 0px !important;
				position: absolute !important;
				border: 1px solid #3C3C3C !important;
				padding: 12px 10px !important;
				color: #FFFFFF !important;
				background: #43494C !important;
				height: 20px !important;
				line-height: 20px !important;
				border-right: 0px !important
			}

			#responsive-menu .appendLink:hover {
				cursor: pointer;
				background: #3C3C3C !important;
				color: #FFFFFF !important
			}

			#responsive-menu .responsive-menu,
			#responsive-menu div,
			#responsive-menu .responsive-menu li,
			#responsive-menu {
				text-align: left !important
			}

			#responsive-menu .RMImage {
				vertical-align: middle;
				margin-right: 10px;
				display: inline-block
			}

			#responsive-menu.RMOpened {}

			#responsive-menu,
			#responsive-menu input {}

			#responsive-menu #responsive-menu-title {
				width: 95% !important;
				font-size: 14px !important;
				padding: 20px 0px 20px 5% !important;
				margin-left: 0px !important;
				background: #43494C !important;
				white-space: nowrap !important
			}

			#responsive-menu #responsive-menu-title,
			#responsive-menu #responsive-menu-title a {
				color: #FFFFFF !important;
				text-decoration: none !important;
				overflow: hidden !important
			}

			#responsive-menu #responsive-menu-title a:hover {
				color: #FFFFFF !important;
				text-decoration: none !important
			}

			#responsive-menu .appendLink,
			#responsive-menu .responsive-menu li a,
			#responsive-menu #responsive-menu-title a {
				transition: 1s all;
				-webkit-transition: 1s all;
				-moz-transition: 1s all;
				-o-transition: 1s all
			}

			#responsive-menu .responsive-menu {
				width: 100% !important;
				list-style-type: none !important;
				margin: 0px !important
			}

			#responsive-menu .responsive-menu li.current-menu-item>a,
			#responsive-menu .responsive-menu li.current-menu-item>.appendLink,
			#responsive-menu .responsive-menu li.current_page_item>a,
			#responsive-menu .responsive-menu li.current_page_item>.appendLink {
				background: #43494C !important;
				color: #FFFFFF !important
			}

			#responsive-menu .responsive-menu li.current-menu-item>a:hover,
			#responsive-menu .responsive-menu li.current-menu-item>.appendLink:hover,
			#responsive-menu .responsive-menu li.current_page_item>a:hover,
			#responsive-menu .responsive-menu li.current_page_item>.appendLink:hover {
				background: #43494C !important;
				color: #FFFFFF !important
			}

			#responsive-menu.responsive-menu ul {
				margin-left: 0px !important
			}

			#responsive-menu .responsive-menu li {
				list-style-type: none !important;
				position: relative !important
			}

			#responsive-menu .responsive-menu ul li:last-child {
				padding-bottom: 0px !important
			}

			#responsive-menu .responsive-menu li a {
				padding: 12px 0px 12px 5% !important;
				width: 95% !important;
				display: block !important;
				height: 20px !important;
				line-height: 20px !important;
				overflow: hidden !important;
				white-space: nowrap !important;
				color: #FFFFFF !important;
				border-top: 1px solid #3C3C3C !important;
				text-decoration: none !important
			}

			#click-menu {
				text-align: center;
				cursor: pointer;
				font-size: 13px !important;
				display: none;
				position: absolute;
				right: 5%;
				top: 10px;
				color: #FFFFFF;
				background: #000000;
				padding: 5px;
				z-index: 9999
			}

			#responsive-menu #responsiveSearch {
				display: block !important;
				width: 95% !important;
				padding-left: 5% !important;
				border-top: 1px solid #3C3C3C !important;
				clear: both !important;
				padding-top: 10px !important;
				padding-bottom: 10px !important;
				height: 40px !important;
				line-height: 40px !important
			}

			#responsive-menu #responsiveSearchSubmit {
				display: none !important
			}

			#responsive-menu #responsiveSearchInput {
				width: 91% !important;
				padding: 5px 0px 5px 3% !important;
				-webkit-appearance: none !important;
				border-radius: 2px !important;
				border: 1px solid #3C3C3C !important
			}

			#responsive-menu .responsive-menu,
			#responsive-menu div,
			#responsive-menu .responsive-menu li {
				width: 100% !important;
				margin-left: 0px !important;
				padding-left: 0px !important
			}

			#responsive-menu .responsive-menu li li a {
				padding-left: 10% !important;
				width: 90% !important;
				overflow: hidden !important
			}

			#responsive-menu .responsive-menu li li li a {
				padding-left: 15% !important;
				width: 85% !important;
				overflow: hidden !important
			}

			#responsive-menu .responsive-menu li li li li a {
				padding-left: 20% !important;
				width: 80% !important;
				overflow: hidden !important
			}

			#responsive-menu .responsive-menu li li li li li a {
				padding-left: 25% !important;
				width: 75% !important;
				overflow: hidden !important
			}

			#responsive-menu .responsive-menu li a:hover {
				background: #3C3C3C !important;
				color: #FFFFFF !important;
				list-style-type: none !important;
				text-decoration: none !important
			}

			#click-menu #RMX {
				display: none;
				font-size: 24px;
				line-height: 27px !important;
				height: 27px !important;
				color: #FFFFFF !important
			}

			#click-menu .threeLines {
				width: 33px !important;
				height: 27px !important;
				margin: auto !important
			}

			#click-menu .threeLines .line {
				height: 5px !important;
				margin-bottom: 6px !important;
				background: #FFFFFF !important;
				width: 100% !important
			}

			#click-menu .threeLines .line.last {
				margin-bottom: 0px !important
			}

			@media only screen and (min-width : 0px) and (max-width : 992px) {
				#click-menu {
					display: block
				}
			}
		</style><!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
		<style type="text/css">
			#rbs_gallery_5d19bb374d1cf .rbs-img-container {
				-webkit-border-radius: 3px;
				-moz-border-radius: 3px;
				border-radius: 3px;
				-webkit-box-shadow: 0px 0px 0px rgba(34, 25, 25, 0.4);
				-moz-box-shadow: 0px 0px 0px rgba(34, 25, 25, 0.4);
				-o-box-shadow: 0px 0px 0px rgba(34, 25, 25, 0.4);
				-ms-box-shadow: 0px 0px 0px rgba(34, 25, 25, 0.4);
				box-shadow: 0px 0px 0px rgba(34, 25, 25, 0.4);
			}

			#rbs_gallery_5d19bb374d1cf .rbsTitle {
				font-size: 12px;
				line-height: 100%;
				color: rgb(255, 255, 255);
				font-weight: bold;
			}

			#rbs_gallery_5d19bb374d1cf .rbsTitle:hover {
				color: rgb(255, 255, 255);
			}

			#rbs_gallery_5d19bb374d1cf .thumbnail-overlay {
				background: rgba(7, 7, 7, 0.5);
			}

			#rbs_gallery_5d19bb374d1cf .rbsZoomIcon {
				font-size: 16px;
				line-height: 100%;
				color: rgb(255, 255, 255);
				background: rgb(13, 130, 241);
				border: 2px solid rgb(255, 255, 255);
			}

			#rbs_gallery_5d19bb374d1cf .rbsZoomIcon:hover {
				color: rgb(255, 255, 255);
				border: 2px solid rgb(255, 255, 255);
				background: rgb(6, 70, 130);
			}

			#rbs_gallery_5d19bb374d1cf .image-with-dimensions {
				background-color: rgb(255, 255, 255);
			}

			body .mfp-title,
			body .mfp-counter {
				color: rgb(243, 243, 243);
			}
		</style>
	</head>

	<body class="post-template-default single single-post postid-2884 single-format-standard group-blog">

		<div id="content" class="site-content">
			<header class="site-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-4">
							<a href=""><img class="logo" src="http://jti.polinema.ac.id/wp-content/themes/jti-polinema/images/misc/logo.png" alt="Jurusan TI Polinema"></a>
						</div>
						<div class=" hidden-xs hidden-sm col-md-8 text-right">
							<div class="top-nav small">
								<div class="menu-top-menu-container">
									<ul id="top-menu" class="list-inline top-nav">
										<li id="menu-item-160" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-160"><a href="http://lms.jti.polinema.ac.id">E-Learning</a></li>
										<li id="menu-item-161" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-161"><a href="http://jip.polinema.ac.id/">JIP</a></li>
										<li id="menu-item-162" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-162"><a href="http://digilib.jti.polinema.ac.id/">Digilib</a></li>
										<li id="menu-item-157" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-157"><a href="http://repo.jti.polinema.ac.id/">Repo</a></li>
										<li id="menu-item-159" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-159"><a href="http://ujian.jti.polinema.ac.id/">Ujian Online</a></li>
										<li id="menu-item-159" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-159"><a href="<?= site_url() ?>">Konten Mahasiswa</a></li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 pull-right">
									<form role="search" method="get" class="frm-search" action="">
										<div class="input-group input-sm search-input-group">
											<input type="text" class="form-control input-sm search-input-text" placeholder="Search …" value="" name="s" title="Search for:">
											<span class="input-group-addon search-input-addon"><i class="glyphicon glyphicon-search"></i></span>
										</div>
										<input type="submit" class="search-submit hidden" value="Search">
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="row hidden-xs hidden-sm">
						<!-- <div class="col-md-12"> -->
						<div class="menu-main-menu-container">
							<ul id="main-menu" class="list-inline main-nav">
								<li id="menu-item-732" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-732"><a href="<?= site_url() ?>awal_c">Home</a></li>
								<li id="menu-item-1655" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1655"><a href="#">JTI</a>
									<ul class="sub-menu">
										<!-- <li id="menu-item-1656" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1656"><a href="http://jti.polinema.ac.id/index.php/profil-ti/">Profil Jurusan</a></li>
																																	<li id="menu-item-135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-135"><a href="http://jti.polinema.ac.id/index.php/visi-dan-misi/">Visi dan Misi</a></li>
																																	<li id="menu-item-136" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-136"><a href="http://jti.polinema.ac.id/index.php/struktur-organisasi/">Struktur Organisasi</a></li>
																																	<li id="menu-item-138" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-138"><a href="http://jti.polinema.ac.id/index.php/staf-administrasi/">Staf Administrasi</a></li>
																																	<li id="menu-item-1557" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1557"><a href="http://jti.polinema.ac.id/index.php/kegiatan/">Kegiatan</a></li>
																																	<li id="menu-item-1558" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1558"><a href="http://jti.polinema.ac.id/index.php/pengumuman/">Pengumuman</a></li> -->
									</ul>
								</li>
								<li id="menu-item-1657" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1657"><a href="">Manajemen Informatika</a>
									<ul class="sub-menu">
										<!-- <li id="menu-item-139" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-139"><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/">Profil</a></li>
																																	<li id="menu-item-878" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-878"><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/kurikulum/">Kurikulum</a></li>
																																	<li id="menu-item-2045" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2045"><a href="http://jti.polinema.ac.id/index.php/buku-pedoman-akademik-d3/">Buku Pedoman Akademik</a></li>
																																	<li id="menu-item-2374" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2374"><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/staff-pengajar-mi/">Staff Pengajar MI</a></li>
																																	<li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-153"><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/laporan-akhir/">Laporan Akhir</a></li>
																																	<li id="menu-item-1490" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1490"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/praktik-kerja-lapangan/">Praktik Kerja Lapangan</a></li>
																																	<li id="menu-item-1555" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1555"><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/alumni/">Alumni</a></li>
																																	<li id="menu-item-1554" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1554"><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/studi-ekskursi/">Studi Ekskursi</a></li>
																																	<li id="menu-item-1766" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1766"><a href="http://jti.polinema.ac.id/index.php/category/manajemen-informatika/">Berita</a></li> -->
									</ul>
								</li>
								<li id="menu-item-1658" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1658"><a href="">Teknik Informatika</a>
									<ul class="sub-menu">
										<!-- <li id="menu-item-140" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-140"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/">Profil</a></li>
																																	<li id="menu-item-1550" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1550"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/kurikulum/">Kurikulum</a></li>
																																	<li id="menu-item-2044" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2044"><a href="http://jti.polinema.ac.id/index.php/buku-pedoman-akademik-d4/">Buku Pedoman Akademik</a></li>
																																	<li id="menu-item-2140" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2140"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/staff-pengajar-ti/">Staff Pengajar</a></li>
																																	<li id="menu-item-156" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-156"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/skripsi/">Skripsi</a></li>
																																	<li id="menu-item-155" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-155"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/praktik-kerja-lapangan/">Praktik Kerja Lapangan</a></li>
																																	<li id="menu-item-1552" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1552"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/alumni/">Alumni</a></li>
																																	<li id="menu-item-1551" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1551"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/studi-ekskursi/">Studi Ekskursi</a></li>
																																	<li id="menu-item-1765" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1765"><a href="http://jti.polinema.ac.id/index.php/category/teknik-informatika/">Berita</a></li> -->
									</ul>
								</li>
								<li id="menu-item-128" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-128"><a href="#">Sarana &amp; Prasarana</a>
									<ul class="sub-menu">
										<!-- <li id="menu-item-1549" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1549"><a href="http://jti.polinema.ac.id/index.php/sarpras-ruang-perkantoran/">Perkantoran</a></li>
																																	<li id="menu-item-1713" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1713"><a href="http://jti.polinema.ac.id/index.php/laboratorium-jti-polinema/">Laboratorium</a></li>
																																	<li id="menu-item-2238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2238"><a href="http://jti.polinema.ac.id/index.php/ruang-kelas/">Ruang Kelas</a></li>
																																	<li id="menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141"><a href="http://jti.polinema.ac.id/index.php/fasilitas-lain/">Pendukung Lain</a></li> -->
									</ul>
								</li>
								<li id="menu-item-131" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-131"><a href="#">Kerjasama</a>
									<ul class="sub-menu">
										<!-- <li id="menu-item-1541" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1541"><a href="http://jti.polinema.ac.id/index.php/pelatihan/">Pelatihan</a></li>
																																	<li id="menu-item-1540" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1540"><a href="http://jti.polinema.ac.id/index.php/sertifikasi/">Sertifikasi</a></li>
																																	<li id="menu-item-1539" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1539"><a href="http://jti.polinema.ac.id/index.php/ikatan-kerja/">Ikatan Kerja</a></li> -->
									</ul>
								</li>
								<li id="menu-item-132" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-132"><a href="#">Akademik</a>
									<ul class="sub-menu">
										<!-- <li id="menu-item-151" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151"><a href="http://jti.polinema.ac.id/index.php/jadwal-kuliah/">Jadwal Perkuliahan</a></li>
																																	<li id="menu-item-152" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-152"><a href="http://jti.polinema.ac.id/index.php/kalendar-akademik/">Kalender</a></li>
																																	<li id="menu-item-1345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1345"><a href="http://jti.polinema.ac.id/index.php/kode-etik-mahahasiswa/">Tata Tertib</a></li> -->
									</ul>
								</li>
								<li id="menu-item-133" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-133"><a href="#">Kemahasiswaan</a>
									<ul class="sub-menu">
										<!-- <li id="menu-item-1351" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1351"><a href="http://jti.polinema.ac.id/index.php/himpunan-mahasiswa/">Himpunan Mahasiswa</a></li>
																																	<li id="menu-item-1350" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1350"><a href="http://jti.polinema.ac.id/index.php/workshop/">Workshop</a></li>
																																	<li id="menu-item-154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-154"><a href="http://jti.polinema.ac.id/index.php/prestasi-mahasiswa/">Prestasi Mahasiswa</a></li>
																																	<li id="menu-item-1344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1344"><a href="http://jti.polinema.ac.id/index.php/beasiswa/">Beasiswa</a></li> -->
									</ul>
								</li>
								<li id="menu-item-1402" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1402"><a href="">Publikasi</a>
									<ul class="sub-menu">
										<!-- <li id="menu-item-1357" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1357"><a href="http://jti.polinema.ac.id/index.php/jurnal-informatika-polinema-jip/">Jurnal Informatika Polinema (JIP)</a></li>
																																	<li id="menu-item-2306" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2306"><a href="http://jti.polinema.ac.id/index.php/seminar-informatika-aplikatif-siap-2018/">Seminar Informatika Aplikatif (SIAP) – 2018</a></li> -->
									</ul>
								</li>
								<li id="menu-item-517" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-517"><a href="">Galeri Foto</a></li>
							</ul>
						</div> <!-- </div> -->
					</div>
				</div>
			</header>
			<div class="container main-container">
				<div class="row-outer row-space">
					<div class="col-md-8">
						<div class="main-content">
							<!-- TIANI -->
							<?php
							$id_art = $key['id'];

							$session_data = $this->session->userdata('logged_in');

							$data = $session_data['nim_mhs'];
							// var_dump($data);

							$this->db->select('*');
							$this->db->from('rating');
							$this->db->where('id_artikel ', $id_art);
							$this->db->where('id_mhs ', $data);
							// $query = $this->db->get()->result();
							$query = $this->db->get();
							// var_dump($query->result());

							$q = $this->db->select('*');
							$q = $this->db->from('mahasiswa');
							$q = $this->db->where('nim_mhs ', $data);
							// $query = $this->db->get()->result();
							$q = $this->db->get();

							//$cc = $this->db->query('SELECT COUNT(id_mhs) FROM rating WHERE id_artikel = '$id_art'')->get();
							$like = 'LIKE';
							$dislike = 'DISLIKE';

							$cc1 = $this->db->from('rating');
							$cc1 = $this->db->where('id_artikel ', $id_art);
							$cc1 = $this->db->where('rate', $like);
							$cc1 = $this->db->count_all_results();

							$cc2 = $this->db->from('rating');
							$cc2 = $this->db->where('id_artikel ', $id_art);
							$cc2 = $this->db->where('rate', $dislike);
							$cc2 = $this->db->count_all_results();


							$tambah = 1;
							$point_tot = 0;
							$point_mhs = 0;

							foreach ($q->result() as $q_exec) {
								$point_tot = $q_exec->poin_total;
								$point_mhs = $q_exec->poin_mhs;
							}

							$tambah_status1 = $point_tot + $tambah;
							$tambah_status2 = $point_mhs + $tambah;

							foreach ($query->result() as $exec) {
								$iniartikel = $exec->id_artikel;
								$inimhs = $exec->id_mhs;
								$inirate = $exec->rate;
							}

							// $hitungLike = $this->db->query("UPDATE rating SET rate='DISLIKE' WHERE id_artikel= '$id_art' && id_mhs='$data'");

							?>
							<article id="post-2884" class="post-2884 post type-post status-publish format-standard hentry category-berita">
								<header class="page-header">
									<h2 class="main-content-title"><?php echo $key['judul']; ?></h2>
									<div class="entry-meta">
										<span class="posted-on">Posted on <a href="http://jti.polinema.ac.id/index.php/2019/06/28/short-write-up-demonstrates-to-you-the-particulars-of-aid-publishing-reports-and-what-you-must-do-immediately/" rel="bookmark"><time class="entry-date published updated" datetime="2019-06-28T07:05:29+00:00"><?php echo $key['tanggal']; ?></time></a></span><span class="byline"> by <span class="author vcard"><a class="url fn n" href=""><?php echo $key['penulis']; ?></a></span></span> </div><!-- .entry-meta -->
								</header><!-- .entry-header -->

								<div class="entry-content">
									<p><?php echo $key['isi']; ?></p>
								</div><!-- .entry-content -->

								<center>
									LIKE = <?php echo $cc1; ?> &nbsp&nbsp&nbsp&nbsp DISLIKE = <?php echo $cc2; ?> <br>
									<?php
									// var_dump($cc);
									if (!$data) { ?>
										<a href="<?= site_url() ?>loginmhs_c/" target="_blank"> LOGIN </a> untuk melakukan LIKE atau DISLIKE artikel
									<?php
								} else {
									if ($query->num_rows() > 0 || $query->num_rows() == 1) { ?>
											<form action="<?= base_url('awal_c/updateDislike'); ?>" method="POST">
												<?php
												if ($inirate == "LIKE") {

													?>
													<input type="text" value="<?= $id_art; ?>" name="aaa" hidden>
													<input type="text" value="<?= $data; ?>" name="vvv" hidden>
													<button disabled style="background-color: Transparent; border: none;"><i class="fas fa-thumbs-up fa-3x"></i></button> &emsp;

													<button type="submit" name="updateDislike" style="background-color: Transparent; border: none;"><i class="far fa-thumbs-down fa-3x"></i></button>
												<?php
											} else if ($inirate == "DISLIKE") {

												?>

													<input type="text" value="<?= $id_art; ?>" name="aaa" hidden>
													<input type="text" value="<?= $data; ?>" name="vvv" hidden>
													<button type="submit" name="updateLike" style="background-color: Transparent; border: none;"><i class="far fa-thumbs-up fa-3x"></i></button> &emsp;

													<button disabled style="background-color: Transparent; border: none;"><i class="fas fa-thumbs-down fa-3x"></i></button>
												<?php
											} else {
												echo "NOT"; ?>

												<?php
											}
											?>
											</form>

											<?php
											?>
										<?php
									} else if ($query->num_rows() == 0) { ?>

											<form action="<?= base_url('awal_c/updateDislike'); ?>" method="POST">
												<input type="text" value="<?= $id_art; ?>" name="aaa" hidden>
												<input type="text" value="<?= $data; ?>" name="vvv" hidden>
												<button type="submit" name="insertLike" style="background-color: Transparent; border: none;"><i class="far fa-thumbs-up fa-3x"></i></button> &emsp;
												<button type="submit" name="insertDislike" style="background-color: Transparent; border: none;"><i class="far fa-thumbs-down fa-3x"></i></button>
												</i>
											</form>
										<?php
									}
								} ?>

								</center>
								<!-- komentar -->
								<div class="post-footer panel-collapse collapse in" id="collapse3" aria-expanded="true" style="">

									<ul class="comments-list">
										<?php foreach ($komen as $k) : ?>
											<li class="comment">
												<a class="pull-left" href="#">
													<?php
													if ($k->img_profile != null) { ?>
														<img src="<?= base_url() ?>assetKu/uploads/<?= $k->img_profile; ?>" class="avatar DTCR_clonedTableimg-circle" width="40" />
													<?php } else if ($k->jk_mhs == "Laki-laki") { ?>
														<img src="<?= base_url() ?>assetKu/newAssets/dist/img/boy-default.png" class="avatar DTCR_clonedTableimg-circle" width="40" />
													<?php } else { ?>
														<img src="<?= base_url() ?>assetKu/newAssets/dist/img/girl-default.png" class="avatar DTCR_clonedTableimg-circle" width="40" />
													<?php } ?>
												</a>
												<div class="comment-body">
													<div class="comment-heading">
														<h4 class="user"><?= $k->nama_mhs; ?></h4>
														<h5 class="time"><?= $k->time; ?></h5>
													</div>
													<p><?= $k->komentar; ?></p>
													<div class="comment-heading">
														<!-- <h4 class="user" style="color: red;">Like</h4> -->
														<h4 class="time">
															<!-- <?= $k->suka; ?> -->
														</h4>
													</div>
												</div>
											</li>
										<?php endforeach ?>
									</ul>

									<form action="<?= base_url(); ?>awal_c/insKomen" method="post">
										<div class="input-group search-form">
											<input type="text" name="id_mk" value="<?= $key['id']; ?>" hidden>
											<input class="form-control" type="text" name="komentar" required="" placeholder="Tulis Komentar..." <?php if ($data == null) { ?> disabled <?php } ?>>
											<span class="input-group-btn">
												<button class="btn btn-default btn-search" type="submit" <?php if ($data == null) { ?> disabled <?php } ?>><i class="material-icons text-brand">send</i></button>
											</span>
										</div>
									</form>
								</div>
								<!-- end komentar -->
								</br>
								<footer class="entry-footer">
									<span class="cat-links">Posted in <a href="<?= site_url() ?>awal_c/" rel="category tag">Berita</a></span> </footer><!-- .entry-footer -->
							</article><!-- #post-## -->

						<?php } ?>

					</div> <!-- main content -->
				</div> <!-- col-md-8 -->
				<div class="col-md-4">
					<div class="sidebar">
						<div class="box-container-unblock">
							<h3 class="box-title-unblock">Berita Terbaru</h3>
							<div class="box-item-unblock">
								<a href="">The War Through Professional Crafting Support and the way Be successful It</a>
								<div class="small">Monday, 01 July 2019 </div>
							</div>
							<div class="box-item-unblock">
								<a href="">Short Write-up Demonstrates To You the Particulars of Aid Publishing Reports and What You Must Do Immediately</a>
								<div class="small">Friday, 28 June 2019 </div>
							</div>
							<div class="box-item-unblock">
								<a href="">The Final Assist Posting Reports Trick</a>
								<div class="small">Friday, 28 June 2019 </div>
							</div>
							<div class="box-item-unblock">
								<a href="">The Final Assist Posting Reports Trick</a>
								<div class="small">Friday, 28 June 2019 </div>
							</div>
							<div class="box-item-unblock">
								<a href="">Very best Choices of Writing Essay Help out</a>
								<div class="small">Thursday, 27 June 2019 </div>
							</div>
						</div>
						<div class="galeri-box">
							<h3 class="box-title-unblock">Galeri</h3>
							<div style="width:100%;">
								<div> </div>
								<div class="rbs_gallery_button" id="rbs_gallery_5d19bb374d1cffilter"><a class="button button-border-caution  active" style="margin-right:5px;margin-bottom:10px;" href="#" data-filter="*">All</a><a href="#" data-filter=".category714" class="button button-border-caution " style="margin-right:5px;margin-bottom:10px;">Fasilitas</a></div>
								<div id="rbs_gallery_5d19bb374d1cf" data-options="rbs_gallery_5d19bb374d1cf" style="width: 100%; margin-left: -15px; position: relative; height: 218px;" class="robo_gallery rbs-imges-container lazy-load-ready">







									<div class="rbs-imges-grid-sizer" style="width: 105px;"></div>
									<div class="category714 rbs-img rbs-img-loaded" data-wrapper-added="yes" data-set-overlay-for-hover-effect="yes" style="position: absolute; width: 105px; left: 0px; top: 0px;">
										<div class="rbs-img-container" style="margin-left: 15px; margin-bottom: 15px;">
											<div class="rbs-img-image  rbs-lightbox mfp-image" data-popuptrigger="yes" data-mfp-src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_ldk_2014.png" mfp-title="berita_ldk_2014" data-imageconverted="yes" style="width: 90px; height: 46px;">
												<div data-thumbnail="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_ldk_2014-300x155.png" data-width="300" data-height="155" class="rbs-img-thumbnail-container" style="width: 90px; height: 46px;"><img style="margin: auto;" title="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_ldk_2014-300x155.png" src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_ldk_2014-300x155.png" data-dont-wait-for-me="yes"></div>
												<div data-popup="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_ldk_2014.png" title="berita_ldk_2014"></div>
												<div class="thumbnail-overlay" style="height: 100%; display: none;">
													<div class="aligment">
														<div class="aligment">
															<div class="rbsTitle ">berita_ldk_2014</div>
															<div class="rbsIcons"><i class="fa fa-search-plus rbsZoomIcon "></i></div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="category714 rbs-img rbs-img-loaded" data-wrapper-added="yes" data-set-overlay-for-hover-effect="yes" style="position: absolute; width: 105px; left: 105px; top: 0px;">
										<div class="rbs-img-container" style="margin-left: 15px; margin-bottom: 15px;">
											<div class="rbs-img-image  rbs-lightbox mfp-image" data-popuptrigger="yes" data-mfp-src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_penutupan_ldk_2014.jpg" mfp-title="berita_penutupan_ldk_2014" data-imageconverted="yes" style="width: 90px; height: 60px;">
												<div data-thumbnail="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_penutupan_ldk_2014-300x201.jpg" data-width="300" data-height="201" class="rbs-img-thumbnail-container" style="width: 90px; height: 60px;"><img style="margin: auto;" title="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_penutupan_ldk_2014-300x201.jpg" src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_penutupan_ldk_2014-300x201.jpg" data-dont-wait-for-me="yes"></div>
												<div data-popup="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_penutupan_ldk_2014.jpg" title="berita_penutupan_ldk_2014"></div>
												<div class="thumbnail-overlay" style="height: 100%; display: none;">
													<div class="aligment">
														<div class="aligment">
															<div class="rbsTitle ">berita_penutupan_ldk_2014</div>
															<div class="rbsIcons"><i class="fa fa-search-plus rbsZoomIcon "></i></div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="category714 rbs-img rbs-img-loaded" data-wrapper-added="yes" data-set-overlay-for-hover-effect="yes" style="position: absolute; width: 105px; left: 210px; top: 0px;">
										<div class="rbs-img-container" style="margin-left: 15px; margin-bottom: 15px;">
											<div class="rbs-img-image  rbs-lightbox mfp-image" data-popuptrigger="yes" data-mfp-src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_ldk_2.png" mfp-title="berita_ldk_2" data-imageconverted="yes" style="width: 90px; height: 67px;">
												<div data-thumbnail="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_ldk_2-300x224.png" data-width="300" data-height="224" class="rbs-img-thumbnail-container" style="width: 90px; height: 67px;"><img style="margin: auto;" title="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_ldk_2-300x224.png" src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_ldk_2-300x224.png" data-dont-wait-for-me="yes"></div>
												<div data-popup="http://jti.polinema.ac.id/wp-content/uploads/2015/11/berita_ldk_2.png" title="berita_ldk_2"></div>
												<div class="thumbnail-overlay" style="height: 100%; display: none;">
													<div class="aligment">
														<div class="aligment">
															<div class="rbsTitle ">berita_ldk_2</div>
															<div class="rbsIcons"><i class="fa fa-search-plus rbsZoomIcon "></i></div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="category714 rbs-img rbs-img-loaded" data-wrapper-added="yes" data-set-overlay-for-hover-effect="yes" style="position: absolute; width: 105px; left: 0px; top: 61px;">
										<div class="rbs-img-container" style="margin-left: 15px; margin-bottom: 15px;">
											<div class="rbs-img-image  rbs-lightbox mfp-image" data-popuptrigger="yes" data-mfp-src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/ruang_tenis.jpg" mfp-title="ruang_tenis" data-imageconverted="yes" style="width: 90px; height: 60px;">
												<div data-thumbnail="http://jti.polinema.ac.id/wp-content/uploads/2015/11/ruang_tenis-300x200.jpg" data-width="300" data-height="200" class="rbs-img-thumbnail-container" style="width: 90px; height: 60px;"><img style="margin: auto;" title="http://jti.polinema.ac.id/wp-content/uploads/2015/11/ruang_tenis-300x200.jpg" src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/ruang_tenis-300x200.jpg" data-dont-wait-for-me="yes"></div>
												<div data-popup="http://jti.polinema.ac.id/wp-content/uploads/2015/11/ruang_tenis.jpg" title="ruang_tenis"></div>
												<div class="thumbnail-overlay" style="height: 100%; display: none;">
													<div class="aligment">
														<div class="aligment">
															<div class="rbsTitle ">ruang_tenis</div>
															<div class="rbsIcons"><i class="fa fa-search-plus rbsZoomIcon "></i></div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="category714 rbs-img rbs-img-loaded" data-wrapper-added="yes" data-set-overlay-for-hover-effect="yes" style="position: absolute; width: 105px; left: 105px; top: 75px;">
										<div class="rbs-img-container" style="margin-left: 15px; margin-bottom: 15px;">
											<div class="rbs-img-image  rbs-lightbox mfp-image" data-popuptrigger="yes" data-mfp-src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/lab1.jpg" mfp-title="lab1" data-imageconverted="yes" style="width: 90px; height: 46px;">
												<div data-thumbnail="http://jti.polinema.ac.id/wp-content/uploads/2015/11/lab1-300x156.jpg" data-width="300" data-height="156" class="rbs-img-thumbnail-container" style="width: 90px; height: 46px;"><img style="margin: auto;" title="http://jti.polinema.ac.id/wp-content/uploads/2015/11/lab1-300x156.jpg" src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/lab1-300x156.jpg" data-dont-wait-for-me="yes"></div>
												<div data-popup="http://jti.polinema.ac.id/wp-content/uploads/2015/11/lab1.jpg" title="lab1"></div>
												<div class="thumbnail-overlay" style="height: 100%; display: none;">
													<div class="aligment">
														<div class="aligment">
															<div class="rbsTitle ">lab1</div>
															<div class="rbsIcons"><i class="fa fa-search-plus rbsZoomIcon "></i></div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="category714 rbs-img rbs-img-loaded" data-wrapper-added="yes" data-set-overlay-for-hover-effect="yes" style="position: absolute; width: 105px; left: 210px; top: 82px;">
										<div class="rbs-img-container" style="margin-left: 15px; margin-bottom: 15px;">
											<div class="rbs-img-image  rbs-lightbox mfp-image" data-popuptrigger="yes" data-mfp-src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/auditorium.jpg" mfp-title="auditorium" data-imageconverted="yes" style="width: 90px; height: 60px;">
												<div data-thumbnail="http://jti.polinema.ac.id/wp-content/uploads/2015/11/auditorium-300x200.jpg" data-width="300" data-height="200" class="rbs-img-thumbnail-container" style="width: 90px; height: 60px;"><img style="margin: auto;" title="http://jti.polinema.ac.id/wp-content/uploads/2015/11/auditorium-300x200.jpg" src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/auditorium-300x200.jpg" data-dont-wait-for-me="yes"></div>
												<div data-popup="http://jti.polinema.ac.id/wp-content/uploads/2015/11/auditorium.jpg" title="auditorium"></div>
												<div class="thumbnail-overlay" style="height: 100%; display: none;">
													<div class="aligment">
														<div class="aligment">
															<div class="rbsTitle ">auditorium</div>
															<div class="rbsIcons"><i class="fa fa-search-plus rbsZoomIcon "></i></div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="category714 rbs-img rbs-img-loaded" data-wrapper-added="yes" data-set-overlay-for-hover-effect="yes" style="position: absolute; width: 105px; left: 0px; top: 136px;">
										<div class="rbs-img-container" style="margin-left: 15px; margin-bottom: 15px;">
											<div class="rbs-img-image  rbs-lightbox mfp-image" data-popuptrigger="yes" data-mfp-src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/1538427IMG-6356780x390.jpg" mfp-title="Kafe Djakarte" data-imageconverted="yes" style="width: 90px; height: 45px;">
												<div data-thumbnail="http://jti.polinema.ac.id/wp-content/uploads/2015/11/1538427IMG-6356780x390-300x150.jpg" data-width="300" data-height="150" class="rbs-img-thumbnail-container" style="width: 90px; height: 45px;"><img style="margin: auto;" title="http://jti.polinema.ac.id/wp-content/uploads/2015/11/1538427IMG-6356780x390-300x150.jpg" src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/1538427IMG-6356780x390-300x150.jpg" data-dont-wait-for-me="yes"></div>
												<div data-popup="http://jti.polinema.ac.id/wp-content/uploads/2015/11/1538427IMG-6356780x390.jpg" title="Kafe Djakarte"></div>
												<div class="thumbnail-overlay" style="height: 100%; display: none;">
													<div class="aligment">
														<div class="aligment">
															<div class="rbsTitle ">Kafe Djakarte</div>
															<div class="rbsIcons"><i class="fa fa-search-plus rbsZoomIcon "></i></div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="category714 rbs-img rbs-img-loaded" data-wrapper-added="yes" data-set-overlay-for-hover-effect="yes" style="position: absolute; width: 105px; left: 105px; top: 136px;">
										<div class="rbs-img-container" style="margin-left: 15px; margin-bottom: 15px;">
											<div class="rbs-img-image  rbs-lightbox mfp-image" data-popuptrigger="yes" data-mfp-src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/event4.jpg" mfp-title="event4" data-imageconverted="yes" style="width: 90px; height: 67px;">
												<div data-thumbnail="http://jti.polinema.ac.id/wp-content/uploads/2015/11/event4-300x224.jpg" data-width="300" data-height="224" class="rbs-img-thumbnail-container" style="width: 90px; height: 67px;"><img style="margin: auto;" title="http://jti.polinema.ac.id/wp-content/uploads/2015/11/event4-300x224.jpg" src="http://jti.polinema.ac.id/wp-content/uploads/2015/11/event4-300x224.jpg" data-dont-wait-for-me="yes"></div>
												<div data-popup="http://jti.polinema.ac.id/wp-content/uploads/2015/11/event4.jpg" title="event4"></div>
												<div class="thumbnail-overlay" style="height: 100%; display: none;">
													<div class="aligment">
														<div class="aligment">
															<div class="rbsTitle ">event4</div>
															<div class="rbsIcons"><i class="fa fa-search-plus rbsZoomIcon "></i></div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="rbs_gallery_button  rbs_gallery_button_bottom">
									<div class="button button-border-caution rbs-imges-no-more-entries">No More Entries</div>
								</div>
								<div> </div>
							</div>
							<script>
								var rbs_gallery_5d19bb374d1cf = {
										"filterContainer": "#rbs_gallery_5d19bb374d1cffilter",
										"resolutions": [{
											"columnWidth": "auto",
											"columns": 1,
											"maxWidth": 450
										}, {
											"columnWidth": "auto",
											"columns": 2,
											"maxWidth": 650
										}, {
											"columnWidth": "auto",
											"columns": 3,
											"maxWidth": 960
										}],
										"overlayEffect": "direction-aware-fade",
										"boxesToLoadStart": 12,
										"boxesToLoad": 8,
										"lazyLoad": true,
										"waitUntilThumbLoads": true,
										"waitForAllThumbsNoMatterWhat": false,
										"deepLinking": false,
										"LoadingWord": "Loading...",
										"loadMoreWord": "Load More",
										"loadMoreClass": "button-border-caution ",
										"noMoreEntriesWord": "No More Entries",
										"horizontalSpaceBetweenBoxes": 15,
										"verticalSpaceBetweenBoxes": 15
									},
									rbs_gallery_5d19bb374d1cf_css = "#rbs_gallery_5d19bb374d1cf .rbs-img-container{ -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;-webkit-box-shadow:0px 0px 0px rgba(34, 25, 25, 0.4) ;-moz-box-shadow: 	0px 0px 0px rgba(34, 25, 25, 0.4) ;-o-box-shadow: 	0px 0px 0px rgba(34, 25, 25, 0.4) ;-ms-box-shadow: 	0px 0px 0px rgba(34, 25, 25, 0.4) ;box-shadow: 		0px 0px 0px rgba(34, 25, 25, 0.4) ;}#rbs_gallery_5d19bb374d1cf .rbsTitle{ font-size:12px; line-height:100%; color:rgb(255, 255, 255); font-weight:bold;}#rbs_gallery_5d19bb374d1cf .rbsTitle:hover{color:rgb(255, 255, 255);}#rbs_gallery_5d19bb374d1cf .thumbnail-overlay{background: rgba(7, 7, 7, 0.5);}#rbs_gallery_5d19bb374d1cf .rbsZoomIcon{ font-size:16px; line-height:100%; color:rgb(255, 255, 255);background:rgb(13, 130, 241);border:2px solid rgb(255, 255, 255);}#rbs_gallery_5d19bb374d1cf .rbsZoomIcon:hover{color:rgb(255, 255, 255);border:2px solid rgb(255, 255, 255);background:rgb(6, 70, 130);}#rbs_gallery_5d19bb374d1cf .image-with-dimensions{background-color: rgb(255, 255, 255);}body .mfp-title, body .mfp-counter{color: rgb(243, 243, 243);}",
									roboGalleryDelay = 0;
								head = document.head || document.getElementsByTagName("head")[0],
									style = document.createElement("style");
								style.type = "text/css";
								if (style.styleSheet) style.styleSheet.cssText = rbs_gallery_5d19bb374d1cf_css;
								else style.appendChild(document.createTextNode(rbs_gallery_5d19bb374d1cf_css));
								head.appendChild(style);
							</script>
						</div>
					</div>
				</div>
			</div> <!-- row -->
		</div><!-- #content -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-5">
						<h4 class="footer-title">JTI POLINEMA</h4>
						<p class="small">
							Jurusan Teknologi Informatika Politeknik Negeri Malang <br>
							Jl. Soekarno-Hatta No. 9 Malang 65141<br>
							Po.Box 04 Malang<br>
							Telepon : +62 (0341) 404424 – 404425<br>
							Faks : +62 (0341) 404420
						</p>
					</div>
					<div class="col-md-5 col-sm-7">
						<h4 class="footer-title">Tautan Terkait</h4>
						<div class="menu-footer-menu-container">
							<ul id="footer-menu" class="list-inline footer-menu">
								<li id="menu-item-721" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-721"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/praktik-kerja-lapangan/">Praktik Kerja Lapangan</a></li>
								<li id="menu-item-722" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-722"><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/laporan-akhir/">Laporan Akhir</a></li>
								<li id="menu-item-723" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-723"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/skripsi/">Skripsi</a></li>
								<li id="menu-item-724" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-724"><a href="http://jti.polinema.ac.id/index.php/jadwal-kuliah/">Jadwal Kuliah</a></li>
								<li id="menu-item-731" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-731"><a href="http://jti.polinema.ac.id/index.php/daftar-alumni/">Daftar Alumni</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<h4 class="footer-title">Eksternal</h4>
						<div class="menu-footer-menu-right-container">
							<ul id="footer-menu-2" class="list-inline footer-menu">
								<li id="menu-item-1570" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1570"><a href="http://lms.jti.polinema.ac.id">E-Learning</a></li>
								<li id="menu-item-1569" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1569"><a href="http://jip.polinema.ac.id">Jurnal Informatika Polinema</a></li>
								<li id="menu-item-1571" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1571"><a href="http://digilib.jti.polinema.ac.id">Digital Library</a></li>
								<li id="menu-item-1568" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1568"><a href="http://siakad.polinema.ac.id/">Siakad</a></li>

								<li id="menu-item-1572" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1572"><a href="http://polinema.ac.id">Polinema</a></li>
							</ul>
						</div>
					</div>

				</div>
				<div class="row">
					<img src="http://jti.polinema.ac.id/wp-content/themes/jti-polinema/images/partner/partner-microsoft.png" alt="" class="partner-img">
					<img src="http://jti.polinema.ac.id/wp-content/themes/jti-polinema/images/partner/partner-sun.png" alt="" class="partner-img">
					<img src="http://jti.polinema.ac.id/wp-content/themes/jti-polinema/images/partner/partner-cisco.png" alt="" class="partner-img">
					<img src="http://jti.polinema.ac.id/wp-content/themes/jti-polinema/images/partner/partner-oracle.png" alt="" class="partner-img">
				</div>
			</div>
		</footer>
		<!-- Added by Responsive Menu Plugin for WordPress - http://responsive.menu -->

		<div id="responsive-menu" style="height: 2031px; left: -913px; display: none;">


			<div id="responsive-menu-title">



				Jurusan TI Polinema

			</div>

			<div class="menu-main-menu-container">
				<ul id="menu-main-menu" class="responsive-menu">
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-732"><a href="http://jti.polinema.ac.id/">Home</a></li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1655"><span class="appendLink rm-append-inactive">▼</span><a href="#">JTI</a>
						<ul class="sub-menu" style="display: none;">
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1656"><a href="http://jti.polinema.ac.id/index.php/profil-ti/">Profil Jurusan</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-135"><a href="http://jti.polinema.ac.id/index.php/visi-dan-misi/">Visi dan Misi</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-136"><a href="http://jti.polinema.ac.id/index.php/struktur-organisasi/">Struktur Organisasi</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-138"><a href="http://jti.polinema.ac.id/index.php/staf-administrasi/">Staf Administrasi</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1557"><a href="http://jti.polinema.ac.id/index.php/kegiatan/">Kegiatan</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1558"><a href="http://jti.polinema.ac.id/index.php/pengumuman/">Pengumuman</a></li>
						</ul>
					</li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1657"><span class="appendLink rm-append-inactive">▼</span><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/">Manajemen Informatika</a>
						<ul class="sub-menu" style="display: none;">
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-139"><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/">Profil</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-878"><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/kurikulum/">Kurikulum</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2045"><a href="http://jti.polinema.ac.id/index.php/buku-pedoman-akademik-d3/">Buku Pedoman Akademik</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2374"><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/staff-pengajar-mi/">Staff Pengajar MI</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-153"><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/laporan-akhir/">Laporan Akhir</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1490"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/praktik-kerja-lapangan/">Praktik Kerja Lapangan</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1555"><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/alumni/">Alumni</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1554"><a href="http://jti.polinema.ac.id/index.php/manajemen-informatika/studi-ekskursi/">Studi Ekskursi</a></li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1766"><a href="http://jti.polinema.ac.id/index.php/category/manajemen-informatika/">Berita</a></li>
						</ul>
					</li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1658"><span class="appendLink rm-append-inactive">▼</span><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/">Teknik Informatika</a>
						<ul class="sub-menu" style="display: none;">
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-140"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/">Profil</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1550"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/kurikulum/">Kurikulum</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2044"><a href="http://jti.polinema.ac.id/index.php/buku-pedoman-akademik-d4/">Buku Pedoman Akademik</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2140"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/staff-pengajar-ti/">Staff Pengajar</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-156"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/skripsi/">Skripsi</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-155"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/praktik-kerja-lapangan/">Praktik Kerja Lapangan</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1552"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/alumni/">Alumni</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1551"><a href="http://jti.polinema.ac.id/index.php/teknik-informatika/studi-ekskursi/">Studi Ekskursi</a></li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1765"><a href="http://jti.polinema.ac.id/index.php/category/teknik-informatika/">Berita</a></li>
						</ul>
					</li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-128"><span class="appendLink rm-append-inactive">▼</span><a href="#">Sarana &amp; Prasarana</a>
						<ul class="sub-menu" style="display: none;">
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1549"><a href="http://jti.polinema.ac.id/index.php/sarpras-ruang-perkantoran/">Perkantoran</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1713"><a href="http://jti.polinema.ac.id/index.php/laboratorium-jti-polinema/">Laboratorium</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2238"><a href="http://jti.polinema.ac.id/index.php/ruang-kelas/">Ruang Kelas</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141"><a href="http://jti.polinema.ac.id/index.php/fasilitas-lain/">Pendukung Lain</a></li>
						</ul>
					</li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-131"><span class="appendLink rm-append-inactive">▼</span><a href="#">Kerjasama</a>
						<ul class="sub-menu" style="display: none;">
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1541"><a href="http://jti.polinema.ac.id/index.php/pelatihan/">Pelatihan</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1540"><a href="http://jti.polinema.ac.id/index.php/sertifikasi/">Sertifikasi</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1539"><a href="http://jti.polinema.ac.id/index.php/ikatan-kerja/">Ikatan Kerja</a></li>
						</ul>
					</li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-132"><span class="appendLink rm-append-inactive">▼</span><a href="#">Akademik</a>
						<ul class="sub-menu" style="display: none;">
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151"><a href="http://jti.polinema.ac.id/index.php/jadwal-kuliah/">Jadwal Perkuliahan</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-152"><a href="http://jti.polinema.ac.id/index.php/kalendar-akademik/">Kalender</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1345"><a href="http://jti.polinema.ac.id/index.php/kode-etik-mahahasiswa/">Tata Tertib</a></li>
						</ul>
					</li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-133"><span class="appendLink rm-append-inactive">▼</span><a href="#">Kemahasiswaan</a>
						<ul class="sub-menu" style="display: none;">
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1351"><a href="http://jti.polinema.ac.id/index.php/himpunan-mahasiswa/">Himpunan Mahasiswa</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1350"><a href="http://jti.polinema.ac.id/index.php/workshop/">Workshop</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-154"><a href="http://jti.polinema.ac.id/index.php/prestasi-mahasiswa/">Prestasi Mahasiswa</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1344"><a href="http://jti.polinema.ac.id/index.php/beasiswa/">Beasiswa</a></li>
						</ul>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1402"><span class="appendLink rm-append-inactive">▼</span><a href="http://jti.polinema.ac.id/index.php/jurnal-2/">Publikasi</a>
						<ul class="sub-menu" style="display: none;">
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1357"><a href="http://jti.polinema.ac.id/index.php/jurnal-informatika-polinema-jip/">Jurnal Informatika Polinema (JIP)</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2306"><a href="http://jti.polinema.ac.id/index.php/seminar-informatika-aplikatif-siap-2018/">Seminar Informatika Aplikatif (SIAP) – 2018</a></li>
						</ul>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-517"><a href="http://jti.polinema.ac.id/index.php/galeri-foto/">Galeri Foto</a></li>
				</ul>
			</div>
			<form action="http://jti.polinema.ac.id" id="responsiveSearch" method="get" role="search">

				<input type="search" name="s" value="" placeholder="Search" id="responsiveSearchInput">
				<input type="submit" id="responsiveSearchSubmit">

			</form>


		</div><!-- Added by Responsive Menu Plugin for WordPress - http://responsive.menu -->

		<div id="click-menu" class="overlay" role="button" aria-label="Responsive Menu Button">



			<div class="threeLines" id="RM3Lines">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>



		</div>
		<script>
			var $RMjQuery = jQuery.noConflict();
			$RMjQuery(document).ready(function() {
				var isOpen = false;
				$RMjQuery(document).on('click', '#click-menu', function() {
					$RMjQuery('#responsive-menu').css('height', $RMjQuery(document).height());
					!isOpen ? openRM() : closeRM()
				});

				function openRM() {
					$RMjQuery('#responsive-menu').css('display', 'block');
					$RMjQuery('#responsive-menu').addClass('RMOpened');
					$RMjQuery('#click-menu').addClass('click-menu-active');
					$RMjQuery('#responsive-menu').stop().animate({
						left: "0"
					}, 500, 'linear', function() {
						$RMjQuery('#responsive-menu').css('height', $RMjQuery(document).height());
						isOpen = true
					})
				}

				function closeRM() {
					$RMjQuery('#responsive-menu').animate({
						left: -$RMjQuery('#responsive-menu').width()
					}, 500, 'linear', function() {
						$RMjQuery('#responsive-menu').css('display', 'none');
						$RMjQuery('#responsive-menu').removeClass('RMOpened');
						$RMjQuery('#click-menu').removeClass('click-menu-active');
						isOpen = false
					})
				}
				$RMjQuery(window).resize(function() {
					$RMjQuery('#responsive-menu').stop(true, true);
					$RMjQuery('#responsive-menu').css('height', $RMjQuery(document).height());
					if ($RMjQuery(window).width() > 992) {
						if ($RMjQuery('#responsive-menu').css('left') != -$RMjQuery('#responsive-menu').width()) {
							closeRM()
						}
					}
				});
				$RMjQuery('#responsive-menu ul ul').css('display', 'none');
				$RMjQuery('#responsive-menu .current_page_ancestor.menu-item-has-children').children('ul').css('display', 'block');
				$RMjQuery('#responsive-menu .current-menu-ancestor.menu-item-has-children').children('ul').css('display', 'block');
				$RMjQuery('#responsive-menu .current-menu-item.menu-item-has-children').children('ul').css('display', 'block');
				$RMjQuery('#responsive-menu .current_page_ancestor.page_item_has_children').children('ul').css('display', 'block');
				$RMjQuery('#responsive-menu .current-menu-ancestor.page_item_has_children').children('ul').css('display', 'block');
				$RMjQuery('#responsive-menu .current-menu-item.page_item_has_children').children('ul').css('display', 'block');
				var clickLink = '<span class=\"appendLink rm-append-inactive\">▼</span>';
				var clickedLink = '<span class=\"appendLink rm-append-active\">▲</span>';
				$RMjQuery('#responsive-menu .responsive-menu li').each(function() {
					if ($RMjQuery(this).children('ul').length > 0) {
						if ($RMjQuery(this).find('> ul').css('display') == 'none') {
							$RMjQuery(this).prepend(clickLink)
						} else {
							$RMjQuery(this).prepend(clickedLink)
						}
					}
				});
				$RMjQuery('.appendLink').on('click', function() {
					$RMjQuery(this).nextAll('#responsive-menu ul ul').slideToggle();
					$RMjQuery(this).html($RMjQuery(this).hasClass('rm-append-active') ? '▼' : '▲');
					$RMjQuery(this).toggleClass('rm-append-active rm-append-inactive');
					$RMjQuery('#responsive-menu').css('height', $RMjQuery(document).height())
				});
				$RMjQuery('.rm-click-disabled').on('click', function() {
					$RMjQuery(this).nextAll('#responsive-menu ul ul').slideToggle();
					$RMjQuery(this).siblings('.appendLink').html($RMjQuery(this).hasClass('rm-append-active') ? '▼' : '▲');
					$RMjQuery(this).toggleClass('rm-append-active rm-append-inactive');
					$RMjQuery('#responsive-menu').css('height', $RMjQuery(document).height())
				});
				$RMjQuery('.rm-append-inactive').siblings('ul').css('display', 'none')
			});
		</script>
		<link rel="stylesheet" id="robo-gallery-magnific-css" href="<?= base_url() ?>assetKu/jti/magnific.css" type="text/css" media="all">
		<link rel="stylesheet" id="robo-gallery-gallery-css" href="<?= base_url() ?>assetKu/jti/gallery.css" type="text/css" media="all">
		<link rel="stylesheet" id="robo-gallery-utils-css" href="<?= base_url() ?>assetKu/jti/gallery.utils.css" type="text/css" media="all">
		<link rel="stylesheet" id="robo-gallery-rbs-style-css" href="<?= base_url() ?>assetKu/jti/style2.css" type="text/css" media="all">
		<link rel="stylesheet" id="robo-gallery-rbs-button-css" href="<?= base_url() ?>assetKu/jti/buttons.css" type="text/css" media="all">
		<script type="text/javascript" src="<?= base_url() ?>assetKu/jti/navigation.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assetKu/jti/skip-link-focus-fix.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assetKu/jti/wp-embed.min.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assetKu/jti/jquery.evemb.min.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assetKu/jti/jquery.utils.min.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assetKu/jti/jquery.magnific.min.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assetKu/jti/jquery.collagePlus.min.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assetKu/jti/script.js"></script>


	</div>
</body>

</html>