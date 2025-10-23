jQuery(document).ready(function($) {
    // Uploading files
    var file_frame;
    var wp_media_post_id = wp.media.model.settings.post.id; // Store the old id
    var set_to_post_id = 0; // Set this

    $(document).on('click', '.mj-upload-button', function(event) {
        event.preventDefault();
        var button = $(this);
        var field_name = button.data('fieldName');
        var multiple = button.data('multiple');
        set_to_post_id = button.data('postId');

        // If the media frame already exists, reopen it.
        if (file_frame) {
            file_frame.uploader.uploader.param('post_id', set_to_post_id);
            file_frame.open();
            return;
        } else {
            wp.media.model.settings.post.id = set_to_post_id;
        }

        // Create the media frame.
        file_frame = wp.media.frames.file_frame = wp.media({
            title: multiple ? 'Selecione as imagens' : 'Selecione uma imagem',
            button: {
                text: multiple ? 'Usar estas imagens' : 'Usar esta imagem'
            },
            multiple: multiple
        });

        // When an image is selected, run a callback.
        file_frame.on('select', function() {
            var selection = file_frame.state().get('selection');
            var attachment_ids = $(`#${field_name}`).val();
            var gallery_container = $(`#${field_name}_gallery_container`);

            if (!multiple) {
                attachment_ids = '';
                gallery_container.html('');
            }

            selection.map(function(attachment) {
                attachment = attachment.toJSON();
                if (attachment.id) {
                    attachment_ids = attachment_ids ? attachment_ids + "," + attachment.id : attachment.id;
                    var attachment_image = attachment.sizes.thumbnail ? attachment.sizes.thumbnail.url : attachment.url;
                    gallery_container.append('<div class="mj-gallery-thumb"><img src="' + attachment_image + '"/><a href="#" class="mj-remove-image" data-attachment-id="' + attachment.id + '">x</a></div>');
                }
            });

            $(`#${field_name}`).val(attachment_ids);

            if (!multiple) {
                button.hide();
            }
        });

        // Finally, open the modal
        file_frame.open();
    });

    // Restore the main post ID
    wp.media.model.settings.post.id = wp_media_post_id;

    // Remove image
    $(document).on('click', '.mj-remove-image', function(e) {
        e.preventDefault();
        var remove_button = $(this);
        var custom_form_field = remove_button.closest('.custom-form-fields-mj');
        var gallery_container = remove_button.closest('.mj-gallery-container');
        var multiple = gallery_container.data('multiple');
        
        var attachment_id = remove_button.data('attachmentId');
        var field = custom_form_field.find('.mj-gallery-field');
        var field_name = field.attr('id');
        var attachment_ids = $(`#${field_name}`).val();
        var ids_array = attachment_ids.split(',');

        // Remove the id from the array
        var new_ids = [];
        for (var i = 0; i < ids_array.length; i++) {
            if (ids_array[i] != attachment_id) {
                new_ids.push(ids_array[i]);
            }
        }

        $(`#${field_name}`).val(new_ids.join(','));
        remove_button.parent().remove();

        if (!multiple) {
            custom_form_field.find('.mj-upload-button').show();
        }
    });
});