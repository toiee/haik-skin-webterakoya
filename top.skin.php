<head prefix="#{$head_prefix}">
	#{$meta_content_type}
	<title>#{$page_title}</title>
	#{$viewport}
	<meta name="keywords" content="#{$keywords}">
	<meta name="description" content="#{$description}">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="#{$rss_link}">

	#{$bootstrap_css}
	#{$style_css}
	
	#{$head_tag}
	#{$plugin_head}
	#{$user_head}
	
	#{$tracking_script}

</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
#{$body_first}
#{$sr_link}

<header>

	<!-- Navbar
	================================================== -->
	<div id="haik_navbar" class="navbar">
		<div class="container">
			<div class="navbar-brand" id="logo">自分で考える力を育てる ウェブ寺子屋</div>
			<div class="navbar-header navbar-right">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
			
			<nav class="navbar-collapse collapse navbar-right">
				#{$site_navigator}
			</nav>
		</div>
	</div>
	<div id="wt_logo">
  	<div class="container">#{$logo}</div>
  
	</div>
	
	<!-- EyeCatch
	================================================== -->
	<div id="haik_eyecatch">
		#{$eyecatch}
	</div>

</header>

<!-- Body
================================================== -->
<div id="contents">
  #{$body}
</div>

<aside>
	#{$summary}
</aside>

<!-- Footer
================================================== -->
<footer class="wt-footer">
	<div class="container">
		<div class="row">
			#{$site_footer}
		</div>
	</div>
	<div id="license" class="container">
		#{$license_tag}
	</div>
</footer>

#{$admin_nav}
#{$body_last}

<!-- Script
================================================== -->
#{$jquery_script}
#{$bootstrap_script}
#{$common_script}
#{$admin_script}

#{$plugin_script}
#{$user_script}

</body>
</html>