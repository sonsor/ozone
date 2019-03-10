<?php
/**
 * Created by PhpStorm.
 * User: "wasif"
 * Date: 3/9/19
 * Time: 7:43 PM
 *
 * @var string $before
 * @var string $after
 *
 * @var string $before_title_tag
 * @var string $after_title_tag
 *
 * @var string $before_title
 * @var string $after_title
 *
 * @var string $before_field
 * @var string $after_field
 *
 * @var string $id
 * @var string $title
 * @var string $value
 * @var string $name
 * @var string $classes
 * @var array $options
 * @var string $key
 * @var string $label
 */


echo $before;
?>
    <div class="<?php echo $classes; ?>" id="field-<?php echo $id; ?>">

        <?php echo $before_title_tag; ?>

        <label for="<?php echo $id; ?>">

            <?php echo $before_title; ?>

            <?php echo $title; ?>

            <?php echo $after_title; ?>

        </label>

        <?php echo $after_title_tag; ?>

        <?php echo $before_field; ?>

        <?php foreach ($options as $key => $label) { ?>
        <div class="radio-inline">
            <label for="<?php echo $id . $key; ?>">
                <input
                    name="<?php echo $name; ?>"
                    id="<?php echo $id . $key; ?>"
                    type="radio"
                    value="<?php echo $key; ?>"
                    <?php echo ($key === $value) ? 'checked': ''; ?>
                />
                <i></i>
                <span><?php echo $label; ?></span>
            </label>
        </div>

        <?php } ?>

        <?php echo $after_field; ?>

    </div>
<?php echo $after; ?>