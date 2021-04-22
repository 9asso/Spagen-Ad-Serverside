<?php

	if (isset($_GET['package']))
	{
		if ($_GET['package'] == "spagenpro.oyyydwrulafnpjh.sliceitall")
		{

			$result = array();

			array_push($result,

			array(
				'active_app'				=>		"true",

				'one_signal_app_id'			=>		"9222aa1d-c688-457f-90bc-09480c4fa4e4",
				
				'priorities_natives'			=>		"f,a",
				'priorities_ints'			=>		"f,a,u",

				'ad_admob_id'				=>		"ca-app-pub-3940256099942544~3347511713",
				'ad_admob_native'			=>		"ca-app-pub-3940256099942544/2247696110",
				'ad_admob_int'				=>		"ca-app-pub-3940256099942544/1033173712",
				'ad_admob_int_activate'			=>		"false",

				'guide_spam'				=>		"guide",

				'ad_fan_native'				=>		"290020802712487_290024759378758",
				'ad_fan_int'				=>		"290020802712487_290021532712414",
				'ad_fan_int_activate'			=>		"true",

				'ad_unity_int'				=>		"4089279",
				'ad_unity_placement_id'			=>		"video",
				'ad_unity_int_activate'			=>		"true",

				'ad_in_foreground'			=>		"true",
				'priorite_in_foreground'		=>		"u,f",

				'store_data'				=>		"https://spagen.goootek.com/php/init_get_store.php?developer=teamx"
			));

			echo json_encode(array("result"=>$result));
		}
		else
		{
			echo "Get the fuck out from here !";
		}
	}
	else
	{
		echo "Get the fuck out from here !";
	}

?>
