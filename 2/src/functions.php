<?php
const NAMEUSER = ['Андрей', 'Кирилл', 'Алексей', 'Юрий', 'Антон'];
function creatUser($countUser)
{
	for ($i=0; $i < $countUser; $i++) { 
		$user[] = [
				'name' => NAMEUSER[array_rand(NAMEUSER)],
				'age' => mt_rand(18, 45)
		];
	}
	return $user;
}