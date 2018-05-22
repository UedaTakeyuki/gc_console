<?php
require_once("SCRIPT/gc_common/common.php");
define('TITLE', 'GC Console');

show_html_head(TITLE);
?>

<body>

<div data-role="page"> 
	  
<div data-role="header" data-position="fixed">
    <h1><?php echo TITLE; ?></h1>
</div>

<div data-role="content" data-theme="c" class="no-cache">

<div class="row">
	<div class="col-md-10 col-sm-10 col-xs-10">
		<ul data-role="listview">
<!--			<li data-icon="false"><a href="http<?= $_SERVER["HTTPS"] ? "s" : "" ?>://<?= $_SERVER["HTTP_HOST"] ?>:4200">shell in a box</a></li> -->
			<!-- <h2><a href="SCRIPT/BackupPi_2">BackupPi_2</a></h2>
			<h2><a href="SCRIPT/monitor/index.php?serial_id=0000000000000000">monitor</a></h2>
			<h2><a href="SCRIPT/say/say.php">say</a></h2>
			<li><a href="SCRIPT/sdt/dt.php">Set DateTime</a></li> -->
			<li data-icon="false"><a href="SCRIPT/gc13/index.php">Finder</a></li>
			<li data-icon="false"><a href="SCRIPT/gcinfos/index.php">Infos</a></li>
		</ul>
	</div><!-- <div class="col-md-4 col-sm-6 col-xs-12"> -->
	<div class="col-md-2 col-sm-2 col-xs-2">
		<ul data-role="listview">
<!--			<li data-icon="false"><a href="#panel-help-shellinabox" style="text-align: center !important;"><i class="fa fa-question"></i></a></li> -->
			<li data-icon="false"><a href="#panel-help-finder" 	    style="text-align: center !important;"><i class="fa fa-question"></i></a></li>
			<li data-icon="false"><a href="#panel-help-infos"       style="text-align: center !important;"><i class="fa fa-question"></i></a></li>
		</ul>

	</div><!-- <div class="col-md-4 col-sm-6 col-xs-12"> -->
</div><!-- <div class="row"> -->

</div><!-- <div data-role="content" data-theme="c" class="no-cache"> -->

<?php show_html_footer(); ?>

<!--	<div data-role="panel" id="panel-help-shellinabox" data-position="right" data-theme="b">
	  <div class="panel-content">
	    <h3>shell in a box</h3>
	    <p>provides a debug console. You can <b>login</b> to the <b>internal Linux console</b> by this. Please <b>ask</b> appropriate <b>id & pw</b> to the <b>addministrator</b>.</p>
	    <img src="/SCRIPT/pic/shellinabox.png" width="50%" height="50%">
	    <a href="#demo-links" data-rel="close" data-role="button" data-theme="c" data-icon="back" data-inline="true">Back</a>
	  </div>
	</div>--><!-- panel -->

	<div data-role="panel" id="panel-help-finder" data-position="right" data-theme="b">
	  <div class="panel-content">
	    <h3>Finder</h3>
	    <p>provides a <b>Movie streaming</b> feature for <b>Angle setting</b> & <b>Focusing</b> of the <b>USB cameras</b>. The <b>small movie size (160x120)</b> is appropriate for <b>angle setting</b> due to the <b>small delay</b>, <b>big one (640 x 480)</b> is for <b>Focusing</b>.</p>
	    <img src="/SCRIPT/pic/finder.png" width="50%" height="50%">
	    <a href="#demo-links" data-rel="close" data-role="button" data-theme="c" data-icon="back" data-inline="true">Back</a>
	  </div>
	</div><!-- panel -->

	<div data-role="panel" id="panel-help-infos" data-position="right" data-theme="b">
	  <div class="panel-content">
	    <h3>Infos</h3>
	    <p>shows following infos:</p>
	    <ul>
	    	<li>3G dongle infomation.</li>
	    	<li>device infomation.</li>
	    	<li>software infomation.</li>
	    <ul>
	    <img src="/SCRIPT/pic/infos.png" width="50%" height="50%">
	    <a href="#demo-links" data-rel="close" data-role="button" data-theme="c" data-icon="back" data-inline="true">Back</a>
	  </div>
	</div><!-- panel -->

</div><!-- <div data-role="page">  -->
</body>
</html>
