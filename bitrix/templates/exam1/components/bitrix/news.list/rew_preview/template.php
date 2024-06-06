<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="rew-footer-carousel">
<?foreach($arResult["ITEMS"] as $arItem):?>


<?php
	
	$img = SITE_TEMPLATE_PATH . "/img/rew/no_photo_left_block.jpg";
	if(isset($arItem["PREVIEW_PICTURE"]["ID"])) {
		$arImg = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], ["width" => 44, "height" => 44],BX_RESIZE_IMAGE_PROPORTIONAL, true);
		$img = $arImg['src'];
	}
	
 ?>
 
	<div class="item">
		<div class="side-block side-opin">
			<div class="inner-block">
				<div class="title">
					<div class="photo-block">

						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
						<img 
						src="<?=$img?>"
						>
						</a>
	
					</div>
					<div class="name-block"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
					<div class="pos-block"><?=$arItem["PROPERTIES"]['POSITION']['VALUE']?> "<?=$arItem["PROPERTIES"]['COMPANY']['VALUE']?>"</div>
				</div>
				<?
					$text = mb_strcut($arItem["PREVIEW_TEXT"], 0, 150);
				?>
				<div class="text-block">“<?=$text?>...</div>
			</div>
		</div>
	</div>
<?endforeach;?>
</div>