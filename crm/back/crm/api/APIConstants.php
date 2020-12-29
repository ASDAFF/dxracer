<?php

/**
 * Created by PhpStorm.
 * User: Семья
 * Date: 23.02.2015
 * Time: 1:16
 */
class APIConstants
{
//Результат запроса - параметр в JSON ответе
	public static $RESULT_CODE = "resultCode";

	//Ответ - используется как параметр в главном JSON ответе в apiEngine
	public static $RESPONSE = "response";

	//Нет ошибок
	public static $ERROR_NO_ERRORS = 0;

	//Ошибка в переданных параметрах
	public static $ERROR_PARAMS = 1;

	//Ошибка в подготовке SQL запроса к базе
	public static $ERROR_STMP = 2;

	//Ошибка запись не найдена
	public static $ERROR_RECORD_NOT_FOUND = 3;

	//Ошибка в параметрах запроса к серверу. Не путать с ошибкой переданных параметров в метод
	public static $ERROR_ENGINE_PARAMS = 100;

	//Ошибка zip архива
	public static $ERROR_ENSO_ZIP_ARCHIVE = 1001;

}