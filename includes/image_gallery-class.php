<?php 

 // Add scripts

 /**
 * Adds image_gallery widget.
 */
class image_gallery_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {

	  add_action('admin_enqueue_scripts', array($this, 'scripts'));
		parent::__construct(
			'imagegallery_widget', // Base ID
			esc_html__( 'image gallery', 'imagegallery_domain' ), // Name
			array( 'description' => esc_html__( 'widget to display image thumbnail gallery and descriptions.', 'imagegallery_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
	
	


		// Widget content output

		echo 	'<div class="container"> <div class="main-img">'; 
		echo 	'<img src="'.$instance['image'].'" alt="'.$instance['descriptionText'].'" id="currentImage">';
		echo 	'</div>';
		echo 	'<div id="imgTextOuter"><div id="imgText"></div></div>';
		echo 	'<div class="imgs">';
		echo 	'<img src="'.$instance['image'].'" alt="'.$instance['descriptionText'].'" >';
		echo 	'<img src="'.$instance['image2'].'" alt="'.$instance['descriptionText2'].'" >';
		echo 	'<img src="'.$instance['image3'].'" alt="'.$instance['descriptionText3'].'" >';
		echo 	'<img src="'.$instance['image4'].'" alt="'.$instance['descriptionText4'].'" >';
		echo 	'<img src="'.$instance['image5'].'" alt="'.$instance['descriptionText5'].'" >';
		echo 	'<img src="'.$instance['image6'].'" alt="'.$instance['descriptionText6'].'" >';
		echo 	'<img src="'.$instance['image7'].'" alt="'.$instance['descriptionText7'].'" >';
		echo 	'<img src="'.$instance['image8'].'" alt="'.$instance['descriptionText8'].'" >';
		echo  	'</div> </div>';




		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Image Gallery', 'imagegallery_domain
' );  

		$descriptionText = ! empty( $instance['descriptionText'] ) ? $instance['descriptionText'] : esc_html__( 'Image Gallery', 'imagegallery_domain
' );
		$descriptionText2 = ! empty( $instance['descriptionText2'] ) ? $instance['descriptionText2'] : esc_html__( 'Image Gallery', 'imagegallery_domain
' );
		$descriptionText3 = ! empty( $instance['descriptionText3'] ) ? $instance['descriptionText3'] : esc_html__( 'Image Gallery', 'imagegallery_domain
' );
		$descriptionText4 = ! empty( $instance['descriptionText4'] ) ? $instance['descriptionText4'] : esc_html__( 'Image Gallery', 'imagegallery_domain
' );
		$descriptionText5 = ! empty( $instance['descriptionText5'] ) ? $instance['descriptionText5'] : esc_html__( 'Image Gallery', 'imagegallery_domain
' );
		$descriptionText6 = ! empty( $instance['descriptionText6'] ) ? $instance['descriptionText6'] : esc_html__( 'Image Gallery', 'imagegallery_domain
' );
		$descriptionText7 = ! empty( $instance['descriptionText7'] ) ? $instance['descriptionText7'] : esc_html__( 'Image Gallery', 'imagegallery_domain
' );
		$descriptionText8 = ! empty( $instance['descriptionText8'] ) ? $instance['descriptionText8'] : esc_html__( 'Image Gallery', 'imagegallery_domain
' );





		add_action('admin_enqueue_scripts', array($this, 'scripts'));

		 $image = ! empty( $instance['image'] ) ? $instance['image'] : '';
		 $image2 = ! empty( $instance['image2'] ) ? $instance['image2'] : '';
		 $image3 = ! empty( $instance['image3'] ) ? $instance['image3'] : '';
		 $image4 = ! empty( $instance['image4'] ) ? $instance['image4'] : '';
		 $image5 = ! empty( $instance['image5'] ) ? $instance['image5'] : '';
		 $image6 = ! empty( $instance['image6'] ) ? $instance['image6'] : '';
		 $image7 = ! empty( $instance['image7'] ) ? $instance['image7'] : '';
		 $image8 = ! empty( $instance['image8'] ) ? $instance['image8'] : '';
	
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'imagegallery_domain' ); ?></label> 
	
		<input class="widefat" 
		id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
		type="text" 
		value="<?php echo esc_attr( $title ); ?>">
		</p>



<!--Image 1-->
<p>
      <label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'Image thumbnail 1:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="text" value="<?php echo esc_url( $image ); ?>" />
      <button class="upload_image_button button button-primary">Upload Image</button>
   </p>	
 
<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'descriptionText' ) ); ?>"><?php esc_attr_e( 'Image description:', 'imagegallery_domain' ); ?></label> 
	
		<input class="widefat" 
		id="<?php echo esc_attr( $this->get_field_id( 'descriptionText' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'descriptionText' ) ); ?>" 
		type="text"
		maxlength="50"
 		value="<?php echo esc_attr( $descriptionText ); ?>">
</p>



<!--Image 2-->

<p>
      <label for="<?php echo $this->get_field_id( 'image2' ); ?>"><?php _e( 'Image thumbnail 2:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'image2' ); ?>" name="<?php echo $this->get_field_name( 'image2' ); ?>" type="text" value="<?php echo esc_url( $image2 ); ?>" />
      <button class="upload_image_button button button-primary">Upload Image</button>
</p>	

<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'descriptionText2' ) ); ?>"><?php esc_attr_e( 'Image description:', 'imagegallery_domain' ); ?></label> 
	
		<input class="widefat" 
		id="<?php echo esc_attr( $this->get_field_id( 'descriptionText2' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'descriptionText2' ) ); ?>" 
		type="text" 
		maxlength="50"
		value="<?php echo esc_attr( $descriptionText2 ); ?>">
</p>












<!--Image 3 -->

 <p>
      <label for="<?php echo $this->get_field_id( 'image3' ); ?>"><?php _e( 'Image thumbnail 3:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'image3' ); ?>" name="<?php echo $this->get_field_name( 'image3' ); ?>" type="text" value="<?php echo esc_url( $image3 ); ?>" />
      <button class="upload_image_button button button-primary">Upload Image</button>
   </p>	
<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'descriptionText3' ) ); ?>"><?php esc_attr_e( 'Image description:', 'imagegallery_domain' ); ?></label> 
	
		<input class="widefat" 
		id="<?php echo esc_attr( $this->get_field_id( 'descriptionText3' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'descriptionText3' ) ); ?>" 
		type="text" 
		maxlength="50"
		value="<?php echo esc_attr( $descriptionText3 ); ?>">
</p>








<!-- Image 4-->
 <p>
      <label for="<?php echo $this->get_field_id( 'image4' ); ?>"><?php _e( 'Image thumbnail 4:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'image4' ); ?>" name="<?php echo $this->get_field_name( 'image4' ); ?>" type="text" value="<?php echo esc_url( $image4 ); ?>" />
      <button class="upload_image_button button button-primary">Upload Image</button>
   </p>	
<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'descriptionText4' ) ); ?>"><?php esc_attr_e( 'Image description:', 'imagegallery_domain' ); ?></label> 
	
		<input class="widefat" 
		id="<?php echo esc_attr( $this->get_field_id( 'descriptionText4' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'descriptionText4' ) ); ?>" 
		type="text" 
		maxlength="50"
		value="<?php echo esc_attr( $descriptionText4 ); ?>">
</p>






<!-- Image 5-->
 <p>
      <label for="<?php echo $this->get_field_id( 'image5' ); ?>"><?php _e( 'Image thumbnail 5:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'image5' ); ?>" name="<?php echo $this->get_field_name( 'image5' ); ?>" type="text" value="<?php echo esc_url( $image5 ); ?>" />
      <button class="upload_image_button button button-primary">Upload Image</button>
   </p>	
<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'descriptionText5' ) ); ?>"><?php esc_attr_e( 'Image description:', 'imagegallery_domain' ); ?></label> 
	
		<input class="widefat" 
		id="<?php echo esc_attr( $this->get_field_id( 'descriptionText5' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'descriptionText5' ) ); ?>" 
		type="text" 
		maxlength="50"
		value="<?php echo esc_attr( $descriptionText5 ); ?>">
</p>







<!-- Image 6 -->

 <p>
      <label for="<?php echo $this->get_field_id( 'image6' ); ?>"><?php _e( 'Image thumbnail 6:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'image6' ); ?>" name="<?php echo $this->get_field_name( 'image6' ); ?>" type="text" value="<?php echo esc_url( $image6 ); ?>" />
      <button class="upload_image_button button button-primary">Upload Image</button>
   </p>	
<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'descriptionText6' ) ); ?>"><?php esc_attr_e( 'Image description:', 'imagegallery_domain' ); ?></label> 
	
		<input class="widefat" 
		id="<?php echo esc_attr( $this->get_field_id( 'descriptionText6' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'descriptionText6' ) ); ?>" 
		type="text" 
		maxlength="50"
		value="<?php echo esc_attr( $descriptionText6 ); ?>">
</p>







<!-- Image 7 -->

 <p>
      <label for="<?php echo $this->get_field_id( 'image7' ); ?>"><?php _e( 'Image thumbnail 7:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'image7' ); ?>" name="<?php echo $this->get_field_name( 'image7' ); ?>" type="text" value="<?php echo esc_url( $image7 ); ?>" />
      <button class="upload_image_button button button-primary">Upload Image</button>
   </p>	
<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'descriptionText7' ) ); ?>"><?php esc_attr_e( 'Image description:', 'imagegallery_domain' ); ?></label> 
	
		<input class="widefat" 
		id="<?php echo esc_attr( $this->get_field_id( 'descriptionText7' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'descriptionText7' ) ); ?>" 
		type="text" 
		maxlength="50"
		value="<?php echo esc_attr( $descriptionText7 ); ?>">
</p>








<!-- Image 8 -->

 <p>
      <label for="<?php echo $this->get_field_id( 'image8' ); ?>"><?php _e( 'Image thumbnail 8:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'image8' ); ?>" name="<?php echo $this->get_field_name( 'image8' ); ?>" type="text" value="<?php echo esc_url( $image8 ); ?>" />
      <button class="upload_image_button button button-primary">Upload Image</button>
   </p>	
<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'descriptionText8' ) ); ?>"><?php esc_attr_e( 'Image description:', 'imagegallery_domain' ); ?></label> 
	
		<input class="widefat" 
		id="<?php echo esc_attr( $this->get_field_id( 'descriptionText8' ) ); ?>" 
		name="<?php echo esc_attr( $this->get_field_name( 'descriptionText8' ) ); ?>" 
		type="text" 
		maxlength="50"
		value="<?php echo esc_attr( $descriptionText8 ); ?>">
</p>


		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['descriptionText'] = ( ! empty( $new_instance['descriptionText'] ) ) ? sanitize_text_field( $new_instance['descriptionText'] ) : '';

		$instance['descriptionText2'] = ( ! empty( $new_instance['descriptionText2'] ) ) ? sanitize_text_field( $new_instance['descriptionText2'] ) : '';

		$instance['descriptionText3'] = ( ! empty( $new_instance['descriptionText3'] ) ) ? sanitize_text_field( $new_instance['descriptionText3'] ) : '';

		$instance['descriptionText4'] = ( ! empty( $new_instance['descriptionText4'] ) ) ? sanitize_text_field( $new_instance['descriptionText4'] ) : '';

		$instance['descriptionText5'] = ( ! empty( $new_instance['descriptionText5'] ) ) ? sanitize_text_field( $new_instance['descriptionText5'] ) : '';

		$instance['descriptionText6'] = ( ! empty( $new_instance['descriptionText6'] ) ) ? sanitize_text_field( $new_instance['descriptionText6'] ) : '';

		$instance['descriptionText7'] = ( ! empty( $new_instance['descriptionText7'] ) ) ? sanitize_text_field( $new_instance['descriptionText7'] ) : '';

		$instance['descriptionText8'] = ( ! empty( $new_instance['descriptionText8'] ) ) ? sanitize_text_field( $new_instance['descriptionText8'] ) : '';





		 $instance['image'] = ( ! empty( $new_instance['image'] ) ) ? $new_instance['image'] : '';
		 $instance['image2'] = ( ! empty( $new_instance['image2'] ) ) ? $new_instance['image2'] : '';
		 $instance['image3'] = ( ! empty( $new_instance['image3'] ) ) ? $new_instance['image3'] : '';
		 $instance['image4'] = ( ! empty( $new_instance['image4'] ) ) ? $new_instance['image4'] : '';
		 $instance['image5'] = ( ! empty( $new_instance['image5'] ) ) ? $new_instance['image5'] : '';
		 $instance['image6'] = ( ! empty( $new_instance['image6'] ) ) ? $new_instance['image6'] : '';
		 $instance['image7'] = ( ! empty( $new_instance['image7'] ) ) ? $new_instance['image7'] : '';
		 $instance['image8'] = ( ! empty( $new_instance['image8'] ) ) ? $new_instance['image8'] : '';



		return $instance;
	}

public function scripts()
{
   wp_enqueue_script( 'media-upload' );
   wp_enqueue_media();
   wp_enqueue_script('admin', plugins_url(). '/image_gallery/js/admin.js', array('jquery'));
   wp_enqueue_script('admin', plugins_url(). '/image_gallery/js/admin.js', array('jquery'));


}
} 
