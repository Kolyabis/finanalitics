<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.09.2015
 * Time: 12:58
 */
// TODO: ���� ����������� � ����������� ��� ������ ������ � �����(���� �� ������)
class DataBaseSetting extends SystemSetting {
	private static $_instances = array();
	public static function getInstance($db) {
		switch ($db) {
			case 'mysqli':
				if (!array_key_exists ('mysqli', self::$_instances)) {
					try {
						return self::$_instances['mysqli'] = new PDO(self::DSN_MYSQLI, self::USER_MYSQLI, self::PASSWORD_MYSQLI);
					} catch (Exception $error) {
						echo '��� ����������� � mysqli';
					}
				} else {
					return self::$_instances['mysqli'];
				}
				break;
			case 'mysql':
				if (!array_key_exists ('mysql', self::$_instances)) {
					try {
						return self::$_instances['mysql'] = new PDO(self::DSN_MYSQL, self::USER_MYSQL, self::PASSWORD_MYSQL);
					} catch (Exception $error) {
						echo '��� �� ��������� � ����� ����� mysql.';
					}
				} else {
					return self::$_instances['mysql'];
				}
				break;
			default :
				echo '���� �� ��������������';
		}
	}

	private function __construct() {}
	private function __clone() {}
	protected function __wakeup() {}
	protected function __sleep() {}
}

