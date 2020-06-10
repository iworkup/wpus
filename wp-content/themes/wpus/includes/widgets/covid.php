<?php

register_widget('Covid');

class Covid extends WP_Widget
{
    // class constructor
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'covid',
            'description' => 'Данные COVID-19',
        );
        parent::__construct('covid', 'COVID-19', $widget_ops);
    }

    // output the option form field in admin Widgets screen
    public function form($instance)
    {
        $total = !empty($instance['total']) ? $instance['total'] : '';
        $total_trend = !empty($instance['total_trend']) ? $instance['total_trend'] : '';
        $recovery = !empty($instance['recovery']) ? $instance['recovery'] : '';
        $recovery_trend = !empty($instance['recovery_trend']) ? $instance['recovery_trend'] : '';
        $dead = !empty($instance['dead']) ? $instance['dead'] : '';
        $dead_trend = !empty($instance['dead_trend']) ? $instance['dead_trend'] : '';

        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('total')); ?>">
                <?php echo 'Всего случаев:'; ?>
            </label>

            <input
                    class="widefat"
                    style="margin-top: 0.4rem;"
                    id="<?php echo esc_attr($this->get_field_id('total')); ?>"
                    name="<?php echo esc_attr($this->get_field_name('total')); ?>"
                    type="number"
                    value="<?php echo esc_attr($total); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('total_trend')); ?>">
                <?php echo 'Случаев за сутки:'; ?>
            </label>

            <input
                    class="widefat"
                    style="margin-top: 0.4rem;"
                    id="<?php echo esc_attr($this->get_field_id('total_trend')); ?>"
                    name="<?php echo esc_attr($this->get_field_name('total_trend')); ?>"
                    type="number"
                    value="<?php echo esc_attr($total_trend); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('recovery')); ?>">
                <?php echo 'Всего вызоровлений:'; ?>
            </label>

            <input
                    class="widefat"
                    style="margin-top: 0.4rem;"
                    id="<?php echo esc_attr($this->get_field_id('recovery')); ?>"
                    name="<?php echo esc_attr($this->get_field_name('recovery')); ?>"
                    type="number"
                    value="<?php echo esc_attr($recovery); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('recovery_trend')); ?>">
                <?php echo 'Вызоровлений за сутки:'; ?>
            </label>

            <input
                    class="widefat"
                    style="margin-top: 0.4rem;"
                    id="<?php echo esc_attr($this->get_field_id('recovery_trend')); ?>"
                    name="<?php echo esc_attr($this->get_field_name('recovery_trend')); ?>"
                    type="number"
                    value="<?php echo esc_attr($recovery_trend); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('dead')); ?>">
                <?php echo 'Всего умерло:'; ?>
            </label>

            <input
                    class="widefat"
                    style="margin-top: 0.4rem;"
                    id="<?php echo esc_attr($this->get_field_id('dead')); ?>"
                    name="<?php echo esc_attr($this->get_field_name('dead')); ?>"
                    type="number"
                    value="<?php echo esc_attr($dead); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('dead_trend')); ?>">
                <?php echo 'Умерло за сутки:'; ?>
            </label>

            <input
                    class="widefat"
                    style="margin-top: 0.4rem;"
                    id="<?php echo esc_attr($this->get_field_id('dead_trend')); ?>"
                    name="<?php echo esc_attr($this->get_field_name('dead_trend')); ?>"
                    type="number"
                    value="<?php echo esc_attr($dead_trend); ?>">
        </p>

        <?php
    }

    // output the widget content on the front-end
    public function widget($args, $instance)
    {

        if ( ! empty( $instance['total'] ) ) {
            echo $instance['total'];
            echo '<br>';
        }
        if ( ! empty( $instance['total_trend'] ) ) {
            echo $instance['total_trend'];
            echo '<br>';
        }
        if ( ! empty( $instance['recovery'] ) ) {
            echo $instance['recovery'];
            echo '<br>';
        }
        if ( ! empty( $instance['recovery_trend'] ) ) {
            echo $instance['recovery_trend'];
            echo '<br>';
        }
        if ( ! empty( $instance['dead'] ) ) {
            echo $instance['dead'];
            echo '<br>';
        }
        if ( ! empty( $instance['dead_trend'] ) ) {
            echo $instance['dead_trend'];
            echo '<br>';
        }

    }

    // save options
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['total'] = ( ! empty( $new_instance['total'] ) ) ? strip_tags( $new_instance['total'] ) : '';
        $instance['total_trend'] = ( ! empty( $new_instance['total_trend'] ) ) ? strip_tags( $new_instance['total_trend'] ) : '';
        $instance['recovery'] = ( ! empty( $new_instance['recovery'] ) ) ? strip_tags( $new_instance['recovery'] ) : '';
        $instance['recovery_trend'] = ( ! empty( $new_instance['recovery_trend'] ) ) ? strip_tags( $new_instance['recovery_trend'] ) : '';
        $instance['dead'] = ( ! empty( $new_instance['dead'] ) ) ? strip_tags( $new_instance['dead'] ) : '';
        $instance['dead_trend'] = ( ! empty( $new_instance['dead_trend'] ) ) ? strip_tags( $new_instance['dead_trend'] ) : '';

        return $instance;
    }
}