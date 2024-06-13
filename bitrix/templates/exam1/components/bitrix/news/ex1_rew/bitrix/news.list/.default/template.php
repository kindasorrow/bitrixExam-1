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

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?

	$img = null;
	
	if(!empty($arItem["PREVIEW_PICTURE"]["ID"])) {
		$img_res = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>68, 'height'=>50), BX_RESIZE_IMAGE_PROPORTIONAL, true);
		$img = $img_res ? $img_res["src"] : null;
	}

?>
<div class="review-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<div class="review-text">
		<div class="review-block-title">
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<span class="review-block-name">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
				</span>
			<?else:?>
				<span class="review-block-name">
					<a>"><?echo $arItem["NAME"]?></a>
				</span>
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			
				<span class="review-block-description"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?>, <?=$arItem["PROPERTIES"]['POSITION']['VALUE']?> <?=$arItem["PROPERTIES"]['COMPANY']['VALUE']?></span>
				
		<?endif;?>
		</div>
		
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
		<div class="review-text-cont">
		<?=$arItem["PREVIEW_TEXT"];?>	
		</div>
		<?endif;?>
	</div>
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<div class="review-img-wrap">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<img 
					src="<?=$img?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					>
					</a>
				</div>
			<?else:?>
				<div class="review-img-wrap">
					<img 
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					>
				</div>
			<?endif;?>
		<?else:?>
				<div class="review-img-wrap">
					<img 
					src="<?=SITE_TEMPLATE_PATH?>/img/rew/no_photo.jpg"
					>
				</div>
			
	<?endif;?>
			
</div>
<?endforeach;?>

