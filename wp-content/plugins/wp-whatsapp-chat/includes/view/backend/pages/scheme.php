<div class="wrap about-wrap full-width-layout qlwrap">
  <form method="post" id="qlwapp_scheme_form">
    <table class="form-table">
      <tbody>
        <tr>
          <th scope="row"><?php esc_html_e('Background', 'wp-whatsapp-chat'); ?></th>
          <td>
            <input class="qlwapp-color-field" type="text" name="brand" value="<?php echo esc_attr($scheme['brand']); ?>" />
          </td>
        </tr>
        <tr>
          <th scope="row"><?php esc_html_e('Color', 'wp-whatsapp-chat'); ?></th>
          <td>
            <input class="qlwapp-color-field" type="text" name="text" value="<?php echo esc_attr($scheme['text']); ?>" />
          </td>
        </tr>      
        <tr class="qlwapp-premium-field">
          <th scope="row"><?php esc_html_e('Link', 'wp-whatsapp-chat'); ?></th>
          <td>
            <input class="qlwapp-color-field" type="link" name="link" value="<?php echo esc_attr($scheme['link']); ?>" />
            <p class="description hidden"><small><?php esc_html_e('This is a premium feature', 'wp-whatsapp-chat'); ?></small></p>        
          </td>
        </tr>      
        <tr class="qlwapp-premium-field">
          <th scope="row"><?php esc_html_e('Message', 'wp-whatsapp-chat'); ?></th>
          <td>
            <input class="qlwapp-color-field" type="link" name="message" value="<?php echo esc_attr($scheme['message']); ?>" />
            <p class="description hidden"><small><?php esc_html_e('This is a premium feature', 'wp-whatsapp-chat'); ?></small></p>      
          </td>
        </tr>      
        <tr class="qlwapp-premium-field">
          <th scope="row"><?php esc_html_e('Label', 'wp-whatsapp-chat'); ?></th>
          <td>
            <input class="qlwapp-color-field" type="link" name="label" value="<?php echo esc_attr($scheme['label']); ?>" />
            <p class="description hidden"><small><?php esc_html_e('This is a premium feature', 'wp-whatsapp-chat'); ?></small></p>      
          </td>
        </tr>      
        <tr class="qlwapp-premium-field">
          <th scope="row"><?php esc_html_e('Name', 'wp-whatsapp-chat'); ?></th>
          <td>
            <input class="qlwapp-color-field" type="link" name="name" value="<?php echo esc_attr($scheme['name']); ?>" />
            <p class="description hidden"><small><?php esc_html_e('This is a premium feature', 'wp-whatsapp-chat'); ?></small></p>
          </td>
        </tr>
      </tbody>
    </table>
    <?php wp_nonce_field('qlwapp_save_scheme', 'qlwapp_scheme_form_nonce'); ?> 
    <p class="submit">
      <?php submit_button(esc_html__('Save', 'wp-whatsapp-chat'), 'primary', 'submit', false); ?>
      <span class="settings-save-status">  
        <span class="saved"><?php esc_html_e('Saved successfully!'); ?></span>
        <span class="spinner" style="float: none"></span>
      </span>
    </p> 
  </form>
</div>        