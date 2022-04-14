План по созданию интернет-магазина на Laravel
Айбек Токишев

+ - Закончено
- - Не приступил к выполнению
? - В процессе

Планирование:
	+Создание MVC элементов: (1)Создать все по красоте для примера

	+Сохранение нескольких продуктов в базу данных (MySQL): https://classmech.ru/pages/databases/goods/
		+Users: 
			(1)id 			id			:Primary 
			(2)string(25) 	user_name 
			(3)string(50)	!user_email  		->unique
			(4)timestamp 	!email_verified_at  	->nullable
			(5)string(25) 	!user_password 
			(6)				!remember_token 
			(7)timestamp 	!created_at 
			(8)timestamp 	!updated_at	

		+Products: 
			(1)id			id			:Primary 
			(2)string(25)	product_name 
			(3)foreignId	manufacturer_id		:Foreign 
			(4)foreignId	category_id		:Foreign 
			(5)float(6,2)	!product_price
			(6)integer		!product_rating 	->nullable
			(7)longtext		!product_description	->nullable
			(8)timestamp 	!created_at 
			(9)timestamp 	!updated_at

		+Stores: 
			(1)id			id			:Primary 
			(2)string(25)	store_name
			(3)timestamp 	!created_at 
			(4)timestamp 	!updated_at
	
		+Purchases: 
			(1)id			id			:Primary 
			(2)foreignId	users_id		:Foreign 
			(3)foreignId	store_id		:Foreign 
			(4)timestamp	purchase_date
			(5)timestamp 	!created_at 
			(6)timestamp 	!updated_at

		+Purchase_items: 
			(1)foreignId	purchase_id		:Foreign
			(2)foreignId	product_id		:Foreign
			(3)integer		product_count 
			(4)float(6,2)	product_price
			(5)timestamp 	!created_at 
			(6)timestamp 	!updated_at

		+Deliveries: 
			(1)foreignId	product_id		:Foreign 
			(2)foreignId	store_id		:Foreign 
			(3)timestamp	delivery_date 
			(4)integer		product_count
			(5)timestamp 	!created_at 
			(6)timestamp 	!updated_at

		+Price_changes: 
			(1)foreignId	product_id		:Foreign 
			(2)timestamp	date_price_change	
			(3)float(6,2)	new_price
			(4)timestamp 	!created_at 
			(5)timestamp 	!updated_at

		+Categories: 
			(1)id			id			:Primary 
			(2)string(25)	category_name
			(3)timestamp 	!created_at 
			(4)timestamp 	!updated_at

		+Manufacturers: 
			(1)id			id			:Primary 
			(2)string(25)	manufacturer_name
			(7)timestamp 	!created_at 
			(8)timestamp 	!updated_at

	+Импрелементирование стиля интернет-магазина из гайда: https://www.youtube.com/playlist?list=PLjwm_8O3suyM_2Lo9aAIw3HqjOPor8j9g

	+Cоздание шапки и футера: (1)Сделать для шаблона

	-6 Страниц, как отдельных блоков:
		+Домашняя страница: (1)Переделка под шаблон (2)Вывод продуктов из базы
		?Скроллинг продуктов: (1)Переделка под шаблон (2)Вывод продуктов из базы (3)Пагинация (4)Сортировка
		+Страница продукта (1)Передка под шаблон (2)Вывод продуктов из базы (3)Подделка правильного URL
		+Страница информации (1)Написание страницы под шаблон
		+Страница контактов (1)Написание страницы под шаблон
		?Страница корзины (1)Переделка страницы под шаблон (2)Вывод продуктов из локального хранилища
					(3)Сохранение заказа в базе

	?Отдельный блок аккаунта:
		-Страница логина: (1)Переделка под шаблон 
		-Страница регистрации: (1) Написание страницы под шаблон (2) Сохранение данных в базу
		-Основная страница аккаунта: (1)Написание страницы под шаблон (2) Вывод желаемых в базу

	-Элемент с защитой данных:
		+Выяснить как это нахрен делается: (1)Настройка ГитИгнор

	-Отдельный блок замены контента админом:
		-Страница логина (1)Уже будет от аккаунта
		-Страница заказов (1)Написание под шаблон (2)Вывод из базы (3)Функционал под принятие\заказ
		-UI замены контента (1)Написание под отдельный дизаин 
					(2)Написание функционала под ввод\удаление товара в базе
					(3)Написание функционала под ввод\удаление новых аккаунтов
					(4)Написание функционала под настройку вывода товара на страницах

Гайд: https://www.youtube.com/playlist?list=PL5RABzpdpqAlSRJS1KExmJsaPFQc161Dy
	Ч1 - создание route-ов под view-хи
	Ч2 - создание контроллеров \ вывод переменных из URL на страницу
	Ч3 - создание миграций \ создание моделей с выводом объекта (класса) из БД
	Ч4 - создание мастер шаблона \ создание ссылок на routes вместо прямых ссылок в href
	Ч5 - создание функций в роутах \ создание квери билдеров в роутах
	Ч6 - 