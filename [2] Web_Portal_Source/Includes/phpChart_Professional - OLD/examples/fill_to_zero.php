<?php
require_once("../conf.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
	<style type="text/css">
	  div.jqplot {
	    margin: 40px;
	  }
	</style>
	       
    </head>
    <body>
        <div><span> </span><span id="info1b"></span></div>

<?php
    
    $line0a = array(array(-8.69, -5),array(465.234, 48));
    $line0 = array(-4, -7, 9, 16, 3, 5, -2, 1, -6, -3, -2, 8);
    $line1 = array(4, -7, 9, 16);
    $line2 = array(3, -3, 6.25, 3.125);
    $line3 = array(8, -5, 6, 22);
    $line4 = array(12, 5, 8, 15);		  
    $line5 = array(4, 3, 9, 16);
    $line6 = array(3, 7, 6.25, 3.125);
    $line7 = array(8, 5, 6, 22);

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Chart 1 Example
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $pc = new C_PhpChartX(array($line0),'chart1');    
    
    $pc->set_legend(array('show'=>false,'location'=>'nw'));
    $pc->set_series_default(array('fill'=>true,'fillToZero'=>true,'showMarker'=>false));
    $pc->add_series(array('label'=>'Traps Division'));
    $pc->set_axes(array(
        'xaxis'=>array(
			'renderer'=>'plugin::CategoryAxisRenderer',
			'ticks'=>array(1900,1910,1920,1930,1940,1950,1960,1970,1980,1990,2000,2010),
			'tickOptions'=>array('showGridline'=>false,'formatString'=>'%d')),
        'yaxis'=>array('autoscale'=>true)
    ));
    $pc->draw(420,320);

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Chart 1b Example
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $pc = new C_PhpChartX(array($line0a),'chart1b');

    $pc->set_legend(array('show'=>false,'location'=>'nw'));
    $pc->set_series_default(array('fill'=>true,'fillToZero'=>true,'showMarker'=>false));
    $pc->add_series(array('label'=>'Traps Division'));
    $pc->set_axes(array(
        'xaxis'=>array('autoscale'=>true,'pad'=>1.4),
        'yaxis'=>array('autoscale'=>true,'pad'=>1.1,'tickOptions'=>array('formatString'=>'%.2f'))
    ));
    $pc->draw(420,320);
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Chart 2 Example
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $pc = new C_PhpChartX(array($line1,$line2),'chart2');
    
    $pc->set_legend(array('show'=>false,'location'=>'nw'));
    $pc->set_series_default(array('fill'=>true,'fillToZero'=>true,'showMarker'=>false,'renderer'=>'plugin::BarRenderer'));
    $pc->add_series(array('label'=>'Traps Division'));
    $pc->add_series(array('label'=>'Decoy Division'));
    $pc->set_axes(array(
        'xaxis'=>array('renderer'=>'plugin::CategoryAxisRenderer','ticks'=>array(2006,2007,2008,2009),'tickOptions'=>array('formatString'=>'%d')),
        'yaxis'=>array('autoscale'=>true)
    ));
    $pc->draw(420,320);
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Chart 3 Example
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $pc = new C_PhpChartX(array($line5,$line6,$line7),'chart3');

    $pc->set_stack_series(true);
    $pc->set_legend(array('show'=>true,'location'=>'nw'));
    $pc->set_series_default(array('fill'=>true,'showMarker'=>false,'renderer'=>'plugin::BarRenderer','rendererOptions'=>array('barMargin'=>30)));
    $pc->add_series(array('label'=>'Traps Division'));
    $pc->add_series(array('label'=>'Decoy Division'));
    $pc->add_series(array('label'=>'Bonuses','disableStack'=>true,'fill'=>false));
    $pc->set_axes(array(
        'xaxis'=>array(
			'renderer'=>'plugin::CategoryAxisRenderer',
			'ticks'=>array(2006,2007,2008,2009),
			'tickOptions'=>array('formatString'=>'%d')),
        'yaxis'=>array('autoscale'=>true)
    ));
    $pc->draw(420,320);
    ?>

    </body>
</html>