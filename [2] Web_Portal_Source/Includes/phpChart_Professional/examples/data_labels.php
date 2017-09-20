<?php
require_once("../conf.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
		<title>phpChart - Data Labels</title>
    </head>
    <body>

        <div><span> </span><span id="info1b"></span></div>

<?php
    

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Chart 1 Example
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $s1 = array(array('Sony',7), array('Samsumg',13.3), array('LG',14.7), array('Vizio',5.2), array('Insignia', 1.2));


    $pc = new C_PhpChartX(array($s1),'chart1');

    $pc->set_axes_default(array());
    $pc->set_grid(array(
		'drawBorder'=>false,
		'drawGridlines'=>false,
		'background'=>'#ffffff',
		'shadow'=>false));
    $pc->set_series_default(array(
		'renderer'=>'plugin::PieRenderer',
		'rendererOptions'=>array(
			'showDataLabels'=>true,
			'dataLabelPositionFactor'=>0.6,
			'dataLabelNudge'=>0,
			'dataLabels'=>array('Longer', 'B', 'C', 'Longer', 'None'))));
    $pc->set_legend(array('show'=>true,'placement'=>'outside'));

    $pc->draw(300,300);

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Chart 2 Example
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $s1 = array(array('Sony',7), array('Samsumg',13.3), array('LG',14.7), array('Vizio',5.2), array('Insignia', 1.2));

    $pc = new C_PhpChartX(array($s1),'chart2');

    $pc->set_axes_default(array());
    $pc->set_series_default(array(
		'renderer'=>'plugin::PieRenderer',
		'rendererOptions'=>array(
			'showDataLabels'=>true,
			'dataLabelThreshold'=>1,
			'dataLabelFormatString'=>'%.1f%%')));
    $pc->set_legend(array('show'=>true,'placement'=>'outside'));

    $pc->draw(300,300);

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Chart 3 Example
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $s1 = array(array('Sony',7), array('Samsumg',13.3), array('LG',14.7), array('Vizio',5.2), array('Insignia', 1.2));


    $pc = new C_PhpChartX(array($s1),'chart3');
    $pc->set_axes_default(array());
    $pc->set_series_default(array(
		'renderer'=>'plugin::FunnelRenderer', 
		'rendererOptions'=>array('showDataLabels'=>true,'dataLabels'=>'label')));
    
    $pc->draw(300,300);


    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Chart 4 Example
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $s1 = array(array('Sony',7), array('Samsumg',13.3), array('LG',14.7), array('Vizio',5.2), array('Insignia', 1.2));
	
    $pc = new C_PhpChartX(array($s1),'chart4');
    
    $pc->set_axes_default(array());
    $pc->set_series_default(array(
		'renderer'=>'plugin::FunnelRenderer', 
		'rendererOptions'=>array(
			'showDataLabels'=>true,
			'dataLabels'=>array('47 years', '28 years', '22 years', '14 years', '7 years'))));
    $pc->set_legend(array('show'=>true,'placement'=>'outside'));

    $pc->draw(300,300);


    ?>
    </body>
</html>