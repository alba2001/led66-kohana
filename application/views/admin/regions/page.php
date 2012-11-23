<?php defined('SYSPATH') or die('No direct script access.');?>
<script type="text/javascript">
function check_all( n, fldName ) {
  if (!fldName) {
     fldName = 'cb';
  }
	var c = document.getElementById("toggle").checked;
	var n2 = 0;
	for (i=0; i < n; i++) {
		cb = fldName + '' + i ;
                cb_box = document.getElementById(cb);
		if (cb_box) {
			cb_box.checked = c;
			n2++;
		}
	}
	if (c) {
		document.getElementById("boxchecked").value = n2;
	} else {
		document.getElementById("boxchecked").value = 0;
	}
}
function is_checked(isitchecked){
	if (isitchecked == true){
		document.getElementById("boxchecked").value++;
	}
	else {
		document.getElementById("boxchecked").value--;
	}
}
</script>

<div id="tablelist">
<?php $fopen_action = URL::base().'admin/regions/delete'?>
<?php $at_fopen['id'] = 'admin_form_id' ?>
<?php $at_fopen['name'] = 'admin_form' ?>
<?php echo Form::open($fopen_action,$at_fopen) ?>

<table class="tablelist">
    <thead>
        <tr>
            <th width="5%">№</th>
            <th width="5%">
                <?php $at_toggle['type'] = 'checkbox'?>
                <?php $at_toggle['onclick'] = 'check_all('.count( $regions ).')'?>
                <?php $at_toggle['value'] = ''?>
                <?php $at_toggle['id'] = 'toggle'?>
                <?php $at_toggle['name'] = 'toggle'?>
                <?php echo Form::input('toggle', '', $at_toggle) ?>
            </th>
            <th width="24%">Код региона</th>
            <th width="24%">Наименование</th>
        </tr>
    </thead>
    <tbody>
<?php $k = 0; ?>
<?php for ($i=0, $n=count( $regions ); $i < $n; $i++) : ?>
    <?php $region = $regions[$i];?>
    <tr class="<?php echo "row$k"; ?>">
        <td width="5%" ><?php echo $i+1; ?></td>
        <td width="5%" >
                <?php $at_cid['id'] = 'cb'.$i?>
                <?php $at_cid['type'] = 'checkbox'?>
                <?php $at_cid['onclick'] = 'is_checked(this.checked);'?>
                <?php echo Form::input('cid[]', $region['id'], $at_cid) ?>
        </td>
        <td width="24%" class="left"><?php echo $region['region_num']?></td>
        <td width="24%" class="left">
            <a class="highslide" 
               onclick="return hs.htmlExpand(this, { outlineType: 'rounded-white', objectType: 'ajax', headingText: 'Регион:'} )" 
               href="<?=URL::base()?>inners/region/edit/<?=$region['id']?>">
                <?php echo $region['region_nm']?>
            </a>
        </td>
    </tr>
    <?php $k = 1 - $k; ?>
<?php endfor;?>
    </tbody>
    <tfoot>
    </tfoot>
</table>
    <?php echo Form::close() ?>
</div>