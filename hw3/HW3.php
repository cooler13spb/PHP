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
// В ПРОЦЕССЕ
// Задание 4:
// Сгенерировать 5 массивов из случайных чисел. Вывести массивы и сумму их элементов на экран. Найти массив с максимальной суммой элементов. Вывести его на экран еще раз. Генерация массива и подсчет суммы - разные функции

$create_arr = function(){
	$arr = [];
	for ($i=0;$i<10;$i++){
	$arr[$i] = rand(0,10);
	}
	return $arr;
};

function create_arrays($get_array){
	$arrs=[];
	for ($i=0;$i<5;$i++){
		$arr1=$get_array();
		var_dump($arr1);
		array_push($arrs, $get_array);
	}
}

var_dump(create_arrays($create_arr));

// function get_sum($arr){
// 	return array_sum($arr);
// }

// function max_arr($arr){
// 	$arrays = [];
// 	for ($i=0;$i<5;$i++){
// 	array_push($arrays, $arr());
// 	}
// 	return $arrays;
// }

// max_arr($create_arr);