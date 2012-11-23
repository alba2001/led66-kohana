    <div class="highslide-body" style="width: 200px">
    <?php $fopen_action = URL::site() . 'admin/regions/edit' ?>
    <?php $at_fopen['class'] = 'new_task' ?>
    <?php $at_fopen['id'] = 'edit_region' ?>
    <?php echo Form::open($fopen_action,$at_fopen) ?>
        <?php $at_region_id['id'] = 'region_id' ?>
        <?php $at_region_id['type'] = 'hidden' ?>
        <?php echo Form::input('region_id', isset($region->id) ? $region->id : '', $at_region_id) ?>
        <div class="inner">
            <?php if (isset($errors)): ?>
                <div class="flash_error">При проверке введенных данных были ошибки!
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="content">
                <div class="add_region">
                    <p class="region_num_entry" id="region_num_entry">
                        <?php echo Form::label('region_num', 'Код региона') ?>
                        <?php $at_region_num['id'] = 'region_num' ?>
                        <?php echo Form::input('region_num', isset($region->region_num) ? $region->region_num : '', $at_region_num) ?>
                    </p>
                    <p class="region_nm_entry" id="region_nm_entry">
                        <?php echo Form::label('region_nm', 'Наименование региона') ?>
                        <?php $at_region_nm['id'] = 'region_nm' ?>
                        <?php echo Form::input('region_nm', isset($region->region_nm) ? $region->region_nm : '', $at_region_nm) ?>
                    </p>
            <!--p><label><input id="remember_me" name="remember_me" type="checkbox" value="1" /> Remember me on this computer</label></p-->
                    <p>
                        <?php $attributes['class'] = 'button' ?>
                        <?php echo Form::submit('btnsubmit', 'Сохранить', $attributes) ?>
                    </p>
                </div>
            </div>

            <?php echo Form::close() ?>
        </div>
    </div>
