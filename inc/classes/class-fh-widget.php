<?php
/**
 * Clock Widget
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use WP_Widget;

use AQUILA_THEME\Inc\Traits\Singleton;

class Fh_Widget extends WP_Widget {

	use Singleton;

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'fh_widget', // Base ID
			'Frauenhorizonte', // Name
			[ 'description' => __( 'Adress Widget', 'aquila' ),
					'before_supratitle'  => '<h5 class="widget-supratitle">',
     'after_supratitle'   => '</h5>',
			 	'before_title'  => '<h4 class="widgettitle">',
     'after_title'   => '</h4>',
     'before_widget' => '<div class="widget-wrap">',
     'after_widget'  => '</div></div>'
			] // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 *
	 * @see WP_Widget::widget()
	 *
	 */
	public function widget( $args, $instance ) {
		
		extract( $args );

		$title = apply_filters( 'widget_title', $instance['title'] );
		$supratitle = apply_filters( 'widget_supratitle', $instance['supratitle'] );
		
		echo $before_widget;
		if ( ! empty( $supratitle ) ) {
			echo $before_supratitle . $supratitle . $after_supratitle;
		}

		if ( ! empty( $title ) ) {
			echo $before_title . $title . $after_title;
		}
		echo '<div class="textwidget">';
 
  echo esc_html__( $instance['text'], 'text_domain' );
 
  echo '</div>';
	
		echo $after_widget;
	}

	/**
	 * Back-end widget form.
	 *
	 * @param array $instance Previously saved values from database.
	 *
	 * @see WP_Widget::form()
	 *
	 */
	public function form( $instance ) {
		 $supratitle = ! empty( $instance['supratitle'] ) ? $instance['supratitle'] : esc_html__( '', 'text_domain' );
			$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'text_domain' );
   $text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( '', 'text_domain' );
  ?>
		<p>
			<label for="<?php echo $this->get_field_name( 'supratitle' ); ?>"><?php _e( 'Extra-Title:', 'aquila' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'supratitle' ); ?>"
			name="<?php echo $this->get_field_name( 'supratitle' ); ?>" type="text"
			value="<?php echo esc_attr( $supratitle ); ?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:', 'aquila' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
				name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
				value="<?php echo esc_attr( $title ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'Text' ) ); ?>"><?php echo esc_html__( 'Text:', 'text_domain' ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
   </p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 * @see WP_Widget::update()
	 *
	 */
	public function update( $new_instance, $old_instance ) {
		$instance          = [];
		$instance['supratitle'] = ( ! empty( $new_instance['supratitle'] ) ) ? strip_tags( $new_instance['supratitle'] ) : '';
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['text'] = ( !empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';
 

		return $instance;
	}

}
