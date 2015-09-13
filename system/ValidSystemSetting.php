<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.09.2015
 * Time: 12:13
 */
//TODO: ВАЖНО!!!!! ТУТ НЕ СТРУКТУРА, не идея, не то что нужно описавать! а просто как оно должно выгледеть ПРИВОДИ В ПОРЯДОК СОЗАВАЙ,переменовывай, дописывай, предлогай .... НЕ УДАЛЯЙ КОМЕНТИРУЙЙЙЙ
abstract class ValidSystemSetting {
	protected $_ValidData = array();


	public static $builtInValidators = array(
		'required'  => 'requiredClassIncludeValid', // указатель на ПРАВИЛО и какой КЛАСС!
		'filter'    => '',
		'match'     => '',
		'email'     => '',
		'url'       => '',
		'unique'    => '',
		'compare'   => '',
		'length'    => '',
		'in'        => '',
		'numerical' => '',
		'captcha'   => '',
		'type'      => '',
		'file'      => '',
		'default'   => '',
		'exist'     => '',
		'boolean'   => 'BooleanValid',
		'safe'      => '',
		'unsafe'    => '',
		'date'      => '',
	);

	public function rulesExemple() {
		return [
			[ [ 'email', 'password' ], 'required' ],
		];
	}

	public function fieldsExemple() {
		return [
			[ [ '', '' ], 'required' ],
		];
	}


	//TODO: Пример и не несет обезательных реализаций(тут еще надо подумать!!!!)
	function createValidators() {
	}

	function getValidatorList() {
	}

	function getValidators() {
	}

	function getAttributes( $names = null ) {
	}

	function setAttributes( $values, $safeOnly = true ) {
	}

	function getAttributeLabel( $attribute ) {
	}

	function isAttributeRequired( $attribute ) {
	}

	/*
	 * набор можно писать методов типа
	static function _isInteger($int){
		return $this->PrivateFuncChK($int);
	}
	*/
}

class requiredClassIncludeValid extends ValidSystemSetting {


}

//TODO: тут душе разгуляйся, главное РАЗЛЕЛЯЙ и ВЛАСТВУЙ API
class BooleanValid extends ValidSystemSetting {

	//TODO: єто все конечно должно быть в ДЕФОЛТНОМ КАКОМТО ВАЛИДАТОРЕ (НУ ТИПО МЫ И ТАК )
	public function rulesExemple() {
		return [
			[
				// checks if "selected" is either 0 or 1, regardless of data type
				[ 'selected', 'boolean' ],
				// checks if "deleted" is of boolean type, either true or false
				[ 'deleted', 'boolean', 'trueValue' => true, 'falseValue' => false, 'strict' => true ],
			],
		];
	}


}

class DateValid extends ValidSystemSetting {

}

class IntegerValid extends ValidSystemSetting {
}

class FormValid extends ValidSystemSetting {
}

class FieldNameValid extends ValidSystemSetting {
}

class AttrValid extends ValidSystemSetting {
}

class CaptchaValid extends ValidSystemSetting {
}

//TODO: САМОЕ ГЛАВНОЕ - ТУТ МЫСЛИТЬ КАК ПОСТРОИТЬ ВАЛИДАЦИЮ итд....много думать!

/*public function actionSearch( $name, $email ) {
	$model = new DynamicModel( compact( 'name', 'email' ) );
	$model->addRule( [ 'name', 'email' ], 'string', [ 'max' => 128 ] )
	      ->addRule( 'email', 'email' )
	      ->validate();

	if ( $model->hasErrors() ) {
		// validation fails
	} else {
		// validation succeeds
	}
}

public function actionSearch( $name, $email ) {
	$model = DynamicModel::validateData( compact( 'name', 'email' ), [
		[ [ 'name', 'email' ], 'string', 'max' => 128 ],
		[ 'email', 'email' ],
	] );

	if ( $model->hasErrors() ) {
		// validation fails
	} else {
		// validation succeeds
	}
}*/



//TODO: тут не связаны, безсмысленые куски кода!!!!! но все ободном как должно работать валидация (ЕСТЬ ЧТО ПРОВЕРЯТЬ! ПРАВИЛО ПО КАКОМУ НАДО ПРОВЕРЯТЬ, что и как) ниже изучить, свонить и со мной ДУМАТЬ!!!!
//ПРИМЕР
/*
class ContactForm extends Model
{
	public $name;
	public $email;
	public $subject;
	public $body;

	public function attributeLabels()
	{
		return [
			'name' => 'Your name',
			'email' => 'Your email address',
			'subject' => 'Subject',
			'body' => 'Content',
		];
	}
}
*/
//
//
////ГДЕ-ТО формируем дивы и надо вставлять параметры уже готовые итд......
//echo $model->getAttributeLabel('name');
////ГДЕ-ТО .... и что то
//public function attributeLabels()
//{
//	return [
//		'name' => \LANG::method('app', 'Your name'), --------------------------------А ТУТ КЛАСС ЯЗІКОВОЙ ГДЕ 'Your name' будет хоть на китайском
//		'name' => \ClassNeed::method('app', 'Your name'),
//		'email' => SUKA_MRAZ::sex('app', 'Your email address'),
//		'subject' => \ClassNeed::m('app', 'Subject'),
//		'body' => \ClassNeed::m('app', 'Content'),
//	];
//}
//
////GET
//$model = new User;
//$model->scenario = User::SCENARIO_LOGIN;
////SET
//$model = new User(['scenario' => User::SCENARIO_LOGIN]);
//
//class User extends ActiveRecord
//{
//	const SCENARIO_LOGIN = 'login';
//	const SCENARIO_REGISTER = 'register';
//
//	public function scenarios()
//	{
//		return [
//			self::SCENARIO_LOGIN => ['username', 'password'],
//			self::SCENARIO_REGISTER => ['username', 'email', 'password'],
//		];
//	}
//	public function rules()
//	{
//		return [
//			// username, email and password are all required in "register" scenario
//			[['username', 'email', 'password'], 'required', 'on' => self::SCENARIO_REGISTER],
//
//			// username and password are required in "login" scenario
//			[['username', 'password'], 'required', 'on' => self::SCENARIO_LOGIN],
//		];
//	}
//}
//
///*$model = new path/to/ContactForm;
//$model->attributes = \SuperCoreControlerModel::$conf->request->post('ContactForm');
//if ($model->validate()) {
//} else {
//	// validation failed: $errors is an array containing error messages
//	$errors = $model->errors;
//}*/

// ВОТ ПРИМЕРНО ЧТО-то такое
class MyForm extends Model {
	public $country;
	public $token;

	public function rules() {
		return [
			// an inline validator defined as the model method validateCountry()
			[ 'country', 'validateCountry' ],
			// an inline validator defined as an anonymous function
			[
				'token',
				function ( $attribute, $params ) {
					if ( ! ctype_alnum( $this->$attribute ) ) {
						$this->addError( $attribute, 'The token must contain letters or digits.' );
					}
				}
			],
		];
	}

	public function validateCountry( $attribute, $params ) {
		if ( ! in_array( $this->$attribute, [ 'USA', 'Web' ] ) ) {
			$this->addError( $attribute, 'The country must be either "USA" or "Web".' );
		}
	}
	//===================== RULE =====================
	/*
				[
					['country', 'validateCountry', 'skipOnEmpty' => false, 'skipOnError' => false],
				]
	*/
}

class CountryValidator extends Validator {
	public function validateAttribute( $model, $attribute ) {
		if ( ! in_array( $model->$attribute, [ 'USA', 'Web' ] ) ) {
			$this->addError( $model, $attribute, 'The country must be either "USA" or "Web".' );
		}
	}


}

class EntryForm extends Model {
	public $name;
	public $email;
	public $country;

	public function rules() {
		return [
			[ [ 'name', 'email' ], 'required' ],
			[ 'country', CountryValidator::className() ],
			[ 'email', 'email' ],
		];
	}
}