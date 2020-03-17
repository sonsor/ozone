<?php
/**
 * Created by PhpStorm.
 * User: imac
 * Date: 2020-03-17
 * Time: 15:02
 */


echo $before;
?>
    <div class="<?php echo $classes; ?>" id="field-<?php echo $id; ?>">

        <?php echo $before_field; ?>

        <input
            name="</php echo $name; ?>"
            id="<?php echo $id; ?>"
            type="hidden"
            value="<?php echo $value; ?>"
        />

        <?php echo $after_field; ?>

    </div>
<?php echo $after; ?>