<?
namespace x1\selectivity;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\web\JsExpression;
use yii\web\View;
use yii\helpers\Url;


class Selectivity extends \yii\base\Widget {

    public static $autoIdPrefix  = 'selectivity';


    public static function begin($config = [])
    {
        $w    = parent::begin($config);
        $view = $w->getView();

        // echo Html::beginForm($w->action, $w->method, ArrayHelper::merge(ArrayHelper::getValue($config, 'options', []), ['id' => $w->id, 'method' => 'POST', 'enctype' => 'multipart/form-data']));

        SelectivityAsset::register($view);

        // client side validate on submit
        if ($w->validateOnSubmit) {
            $view->registerJs(sprintf(<<<EOD
$('#%1\$s').submit(function(e) {
    //selectivity code
})
EOD
, $w->id, Json::encode($w->defaults)), View::POS_END);
        }


        return $w;
    }


    public static function end() {
    	$w 		= self::$stack[count(self::$stack) - 1];
        $view 	= $w->getView();

        parent::end();
    }

    public function run() {
        return 'this is a selectivity box';
    }

    public function init() {
        parent::init();

    	// if ($this->action == null)
    	// 	$this->action = Url::current();
    }



}

?>
