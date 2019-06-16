<?php
// Задание 1:
// Дана строка, содержащая полное имя файла (например, 'C:\OpenServer\testsite\www\someFile.txt'). Написать функцию, которая сможет выделить из подобной строки имя файла без расширения.

$str = 'C:\OpenServer\testsite\www\someFile.txt';

function name($string){
	return basename("C:\OpenServer\testsite\www\someFile.txt", ".txt");
}

var_dump(name($str));

// Задание 2:
// Написать функцию - конвертер строки. Возможности (в зависимости от второго аргумента - флаг, который указывает, какую именно операцию следует выполнить): 
// 1) перевод всех символов в верхний регистр, 
// 2) перевод всех символов в нижний регистр, 
// 3) перевод всех символов в нижний регистр и первых символов слов в верхний регистр.

$str = 'Hi, my NaMe is DMiTriy';
$flag = 1;

function change_register($string, $flag){
	switch ($flag) {
		case '1':
			return strtoupper($string);
		case '2':
			return strtolower($string);
		case '3':
			return ucwords(strtolower($string));
		default:
			return $string;
	}	
}

var_dump(change_register($str, $flag));



// Задание 3:
// Создать функцию по преобразованию нотаций: строка вида 'this_is_string' преобразуется в 'thisIsString' (CamelCase-нотация)

$str = 'this_is_string';
function change_string($string){
	$String1=ucwords($string, '_');
	return str_replace('_','',$String1);
};
var_dump(change_string($str));


//-----------------
// Задание 4:
// Сгенерировать 5 массивов из случайных чисел. Вывести массивы и сумму их элементов на экран. Найти массив с максимальной суммой элементов. Вывести его на экран еще раз. Генерация массива и подсчет суммы - разные функции

$array=function(){
	$array=[];
	for ($i=0;$i<5;$i++){
		array_push($array,rand(1,100));
	};
	return $array;
};
function get_arrays($get_array,$sum){
	$result_arr=[];
	for ($i=0;$i<5;$i++){
		$arr=$get_array();
		var_dump($arr);
		array_push($result_arr,$sum($arr));
	
	};
	$max=max($result_arr);
	return [$result_arr,
		$max
	];
};
$sum=function($arr){
	return array_sum($arr);
};
var_dump(get_arrays($array,$sum));