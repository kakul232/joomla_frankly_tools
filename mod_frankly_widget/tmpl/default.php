<?php
defined('_JEXEC') or die;


jimport( 'joomla.application.module.helper' );
$module = JModuleHelper::getModule('mod_frankly_widget');
//print_r($module);
 $frankly_username=$params->get('frankly_username');
 $frankly_widget=$params->get('widget');
 $frankly_w_style=$params->get('widget_style');
 $open_question_url=$params->get('oq_url');

// Askme
if($frankly_widget=='AB'){
	switch($frankly_w_style){
		case 'S':	echo '<iframe frameborder="0" style="width: 80px; height: 40px;" src="https://frankly.me/widgets/askButtonLg/'.$frankly_username.'?flagRedirect=false&amp;url=http://embed.frankly.me/v2/"></iframe>';
			break;
		case 'M':	echo '<iframe frameborder="0" style="width: 120px; height: 40px; margin:auto;" src="https://frankly.me/widgets/askButtonLg/'.$frankly_username.'?flagRedirect=false&amp;url=http://embed.frankly.me/v2/"></iframe>';
			break;
		case 'L':	echo '<iframe frameborder="0" style="width: 300px; height: 40px; margin:auto;" src="https://frankly.me/widgets/askButtonLg/'.$frankly_username.'?flagRedirect=false&amp;url=http://embed.frankly.me/v2/"></iframe>';
			break;
}

}
// Hor Badge
if($frankly_widget=='HB'){
	switch($frankly_w_style){
			case 'S':	echo '<iframe frameborder="0" style="width: 320px; height:  185px; margin:auto;" src="https://frankly.me/widgets/userWidgetLg/'.$frankly_username.'?flagRedirect=false&amp;url=http://embed.frankly.me/v2/"></iframe>';
				break;
			case 'L':	echo '<iframe frameborder="0" style="width: 450px; height:  290px; margin:auto;" src="https://frankly.me/widgets/userWidgetLg/'.$frankly_username.'?flagRedirect=false&amp;url=http://embed.frankly.me/v2/"></iframe>';
				break;
			default:	echo '<iframe frameborder="0" style="width: 300px; height: 40px; margin:auto;" src="https://frankly.me/widgets/userWidgetLg/'.$frankly_username.'?flagRedirect=false&amp;url=http://embed.frankly.me/v2/"></iframe>';
				break;

	}

}
// Side Badge
if($frankly_widget=='SB'){
	switch($frankly_w_style){
				case 'S':	echo '<iframe frameborder="0" style="width: 230px; height:  450px; margin:auto;" src="https://frankly.me/widgets/userWidgetSm/'.$frankly_username.'?flagRedirect=false&amp;url=http://embed.frankly.me/v2/"></iframe>';
					break;
				case 'L':	echo '<iframe frameborder="0" style="width: 250px; height:  470px; margin:auto;" src="https://frankly.me/widgets/userWidgetSm/'.$frankly_username.'?flagRedirect=false&amp;url=http://embed.frankly.me/v2/"></iframe>';
					break;
				default:	echo '<iframe frameborder="0" style="width: 300px; height:  560px; margin:auto;" src="https://frankly.me/widgets/userWidgetSm/'.$frankly_username.'?flagRedirect=false&amp;url=http://embed.frankly.me/v2/"></iframe>';
					break;

		}
}
// Answer Widget
if($frankly_widget=='AW'){
	switch($frankly_w_style){

					default:	echo '<iframe frameborder="0" style="width: 650px; height:  600px; margin:auto;" src="https://frankly.me/widgets/userWidgetBatch/'.$frankly_username.'?flagRedirect=false&amp;url=http://embed.frankly.me/v2/"></iframe>';
						break;

			}

}
// Question Widget
if($frankly_widget=='QW'){
	if(isset($open_question_url)){
		 $find_slug=str_replace("https://frankly.me/widgets/openQuestionPage/","",$open_question_url);
		  $find_slug=explode('/',$find_slug);
		  $user=$find_slug[0];
		  $slug=$find_slug[1];
		echo '<iframe frameborder="0" style="width: 300px; height:  500px; margin:auto;" src="https://frankly.me/widgets/openQuestionWidget/'.$user.'/'.$slug.'?flagRedirect=false&amp;url=http://embed.frankly.me/v2/"></iframe>';

}else{echo 'Open Question URL Missing';}


}
