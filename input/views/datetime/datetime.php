<div class="form-inline">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			<?= \yii\helpers\Html::tag('input', null, $options) ?>
		</div>

<? if ($time !== true) { ?>
		<select class="form-control" data-bind="options: <?= $attribute ?>.hours, optionsValue: 'key', optionsText: 'value', optionsCaption: '-', value: <?= $attribute ?>.hour"></select>
<? } ?>

		<div class="input-group">
<? if ($time == true) { ?>
		<select class="form-control" data-bind="options: <?= $attribute ?>.times, optionsCaption: '-', value: <?= $attribute ?>.time"></select>
<? } else { ?>
		<select class="form-control" data-bind="options: <?= $attribute ?>.minutes, optionsValue: 'key', optionsText: 'value', optionsCaption: '-', value: <?= $attribute ?>.minute"></select>
<? } ?>
			<span class="input-group-addon" data-bind="click: <?= $attribute ?>.clear">
				<a href="javascript: false;" class="text-danger" ><i class="fa fa-remove"></i></a>
			</span>
			<span class="input-group-addon" data-bind="click: <?= $attribute ?>.current">
				<a href="javascript: false;" class="text-primary" ><i class="fa fa-clock-o"></i></a>
			</span>
		</div>

</div>
