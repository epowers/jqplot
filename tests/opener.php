<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?php echo $title ?></title>
  <!--[if IE]><script language="javascript" type="text/javascript" src="../src/excanvas.min.js"></script><![endif]-->
  <link rel="stylesheet" type="text/css" href="../src/jquery.jqplot.css" />
  
  <!-- BEGIN: load jquery -->
  <script language="javascript" type="text/javascript" src="jquery-1.3.2.min.js"></script>
  <!-- END: load jquery -->
  
  <!-- BEGIN: load extras -->
  <script language="javascript" type="text/javascript" src="jspec/lib/jspec.min.js"></script>
  <script language="javascript" type="text/javascript" src="beautify.min.js" ></script>
  <script language="javascript" type="text/javascript" src="prettify.min.js"></script>
  <link rel="stylesheet" href="jspec/lib/jspec.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="prettify.min.css" type="text/css" rel="stylesheet" />
  <!-- END: load extras -->
  
  <!-- BEGIN: load jqplot -->
  <script language="javascript" type="text/javascript" src="../src/jquery.jqplot.js"></script>
  <script language="javascript" type="text/javascript" src="../src/plugins/jqplot.logAxisRenderer.js"></script>
  <script language="javascript" type="text/javascript" src="../src/plugins/jqplot.categoryAxisRenderer.js"></script>
  <script language="javascript" type="text/javascript" src="../src/plugins/jqplot.dateAxisRenderer.js"></script>
  <script language="javascript" type="text/javascript" src="../src/plugins/jqplot.barRenderer.js"></script>
  <script language="javascript" type="text/javascript" src="../src/plugins/jqplot.canvasAxisTickRenderer.js"></script>
  <script language="javascript" type="text/javascript" src="../src/plugins/jqplot.canvasTextRenderer.js"></script>
  <!-- END: load jqplot -->

  <link rel="stylesheet" type="text/css" href="unittests.css" />
  
    <script language="javascript" type="text/javascript">
    $.jqplot.installPath = "../src";
    $.jqplot.pluginsPath = "../src/plugins";
    var uID = (function() {
      var id = 1;
      return function(){return id++};
    })();
    
    function genplot(o) {
      var nid, n, no;
      nid = uID();
      o = o.replace(/_target_/, 'chart'+nid);
      n = js_beautify(o);
      $('<div class="jqPLot"  id="chart'+nid+'" style="height:380px; width:540px;"></div>').insertBefore('.nav:last');
      $('<pre id="code'+nid+'" class="prettyprint">'+n+'</pre>').insertBefore('.nav:last');
      eval(o);
    }
  </script>