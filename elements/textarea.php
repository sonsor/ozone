<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/9/19
 * Time: 7:42 PM
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

        <textarea
            name="</php echo $name; ?>"
            id="<?php echo $id; ?>"
        >
            <?php echo $value; ?>
        </textarea>


        <?php echo $after_field; ?>

    </div>
<?php echo $after; ?>