<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(count($arResult["ITEMS"])>0):?>

<div class="review-block">
	<div class="review-text">
	
		<div class="review-block-title"><span class="review-block-name"><a href="#">Сергей Родионов</a></span><span class="review-block-description">12 мая 2020 г., Генеральный директор, CTC-Медиа</span></div>
		
		<div class="review-text-cont">
			Вы сможете организовать внутри компании коллективную работу над проектами в рабочих группах, вести учет и планирование времени и событий, обмениваться сообщениями и почтой через портал, проводить внутри компании видеоконференции и делать многое другое.
		</div>
	</div>
	<div class="review-img-wrap"><a href="#"><img src="img/rew/photo_1.jpg" alt="img"></a></div>
</div>
<div class="review-block">
	<div class="review-text">
		<div class="review-block-title"><span class="review-block-name"><a href="#">Анна Андреева</a></span><span class="review-block-description">12 мая 2020 г., Маркетолог, RK-Telecom</span></div>
		<div class="review-text-cont">
			Вы сможете организовать внутри компании коллективную работу над проектами в рабочих группах, вести учет и планирование времени и событий, обмениваться сообщениями и почтой через портал, проводить внутри компании видеоконференции и делать многое другое.
		</div>
	</div>
	<div class="review-img-wrap"><img src="img/rew/photo_2.jpg" alt="img"></div>
</div>
<div class="review-block">
	<div class="review-text">
		<div class="review-block-title"><span class="review-block-name"><a href="#">Дмитрия Пялов</a></span><span class="review-block-description">12 мая 2020 г., Программист, .NET-dev</span></div>
		<div class="review-text-cont">
			Можете сразу перейти с «младшей», базовой редакции на «Бизнес-процессы». После такого перехода ваш портал можно будет интегрировать с внешним сайтом, на портале добавятся возможности визуального проектирования бизнес-процессов и управления списками, включая списки в рабочих группах. Кроме того, вы сможете анализировать посещаемость своего портала
		</div>
	</div>
	<div class="review-img-wrap"><img src="img/rew/photo_3.jpg" alt="img"></div>
</div>

	<div class="news-list">
		<b><?=$arResult["NAME"]?></b>
		<ul>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<li><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></li>
		<?endforeach;?>
		</ul>
	</div>
<?endif?>
