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
$APPLICATION->SetTitle($arResult["NAME"] . ' test', true);
?>
<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?echo $arResult["DETAIL_TEXT"];?>
		</div>
		<div class="review-autor">
			<?=$arResult["NAME"]?>, <?=$arResult["DISPLAY_ACTIVE_FROM"]?>, <?=$arResult["PROPERTIES"]["POSITION"]["VALUE"]?> <?=$arResult["PROPERTIES"]['COMPANY']['VALUE']?>
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
			<img
				class="detail_picture"
				border="0"
				src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
				width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
				height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
				alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
				title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
				/>
			<?else:?>
			<div class="review-img-wrap">
				<img 
				src="<?=SITE_TEMPLATE_PATH?>/img/rew/no_photo.jpg"
				>
			</div>
		<?endif?>
	</div>
</div>
<?if(!empty($arResult['PROPERTIES']["FILE"]["VALUE"])):?>
	<div class="exam-review-doc">
		<p>Документы:</p>
		<?foreach($arResult['PROPERTIES']["FILE"]["VALUE"] as $file):?>
		<?
			$path = CFile::GetPath($file);
			$orFile = CFile::GetByID($file);
			$arrFile = $orFile->Fetch();
		?>		
		<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png"><a href="<?=CFile::GetPath($file);?>" download><?=$arrFile["ORIGINAL_NAME"]?></a></div>
		<?endforeach;?>
	</div>
<?endif;?>
<hr>