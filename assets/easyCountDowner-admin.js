/**
 *
 * Work with only one shortcode
 *
 */
jQuery(document).ready(function($) {
  $btn = $('[data-modal-button-id="easycountdowner_shortcode_wrapper"]');
  $btnTxt = $('[data-modal-button-id="easycountdowner_shortcode_wrapper"]').text();


  $btn.html('<i class="mce-ico EasyCountDownerButtonIcon"></i> ' + $btnTxt);

  $btn.removeClass('button-primary');




    $('body').on('click', '.csf-shortcode', function( e ) {

      e.preventDefault();

      var shortcode_id = 'easy_countdowner'; // your shortcode id.

      var $this     = $(this),
          $dialog   = $('#csf-shortcode-dialog'),
          $selector = $dialog.find('.csf-dialog-select'),
          $header   = $dialog.find('.csf-dialog-header');

      $dialog.outerHeight( $dialog.outerHeight() - $header.outerHeight() );
      $header.hide();

      $selector.val( shortcode_id ).trigger( 'change' );

    });



});