<?
namespace x1\selectivity;

class SelectivityAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/bower/selectivity/dist';
	
	public $js         = [
		'selectivity-full.js' => 'selectivity-full.min.js',
	];

	public $css        = [
		'selectivity-full.css' => 'selectivity-full.min.css',
	];

	public $depends = [
	];
}
?>