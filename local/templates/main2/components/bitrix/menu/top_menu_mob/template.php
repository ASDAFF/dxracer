<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="navbar navbar-default">
  <!-- Контейнер (определяет ширину Navbar) -->
  <div class="container">
    <!-- Заголовок -->
    <div class="navbar-header">
      <!-- Кнопка «Гамбургер» отображается только в мобильном виде (предназначена для открытия основного содержимого Navbar) -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main-mob">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Бренд или название сайта (отображается в левой части меню) -->
    
    </div>
    <!-- Основная часть меню (может содержать ссылки, формы и другие элементы) -->
    <div class="collapse navbar-collapse" id="navbar-main-mob">
     <ul class="nav navbar-nav">
		<li ><a href="javascript:void(0);" data-toggle="dropdown">КАТАЛОГ ЧАСОВ</a>
		<ul class="dropdown-menu dop-menu">
			<?$arFilter = Array('IBLOCK_ID'=>9, 'GLOBAL_ACTIVE'=>'Y');
			$db_list = CIBlockSection::GetList(Array("SORT"=>"­­DESC"), $arFilter, true);
			$db_list->NavStart(20);
			while($ar_result = $db_list->GetNext())
			{
				//echo "<pre>"; print_r($ar_result); echo "</pre>";?>
				<li class='vert'><a href="<?=$ar_result['SECTION_PAGE_URL']?>"><?=$ar_result['NAME']?></a></li>
			<?}?>
          </ul>
		</li>
		<li><a href="javascript:void(0);" data-toggle="dropdown">ДЛЯ ПОКУПАТЕЛЕЙ</a>
			<ul class="dropdown-menu dop-menu">
				<li class='vert'><a href="/about/">О магазине</a></li>
				<li class='vert'><a href="/dostavka/">Доставка</a></li>
				<li class='vert'><a href="/kak-kupit/">Как купить</a></li>
				<li class='vert'><a href="/politika/">Политика возврата</a></li>
				<li class='vert'><a href='/podlinnost-i-garantiya/'>Подлинность и гарантия</a></li>
				<li class='vert'><a href="/contacts/">Контакты</a></li>
			</ul>
		</li>
        <li><a href="/feedbacks/">ОТЗЫВЫ</a></li>
        <li><a href="/catalog/sale.php">ЧАСЫ ПО АКЦИИ</a></li>
        
	  </ul>
	 
    </div>
  </div>
</nav>