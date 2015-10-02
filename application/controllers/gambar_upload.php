<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gambar_upload extends CI_Controller {
    
  function go() {
    if(isset($_POST['go'])) {
      /* Create the config for upload library */
      /* (pretty self-explanatory) */
      $config['upload_path'] = './assets/upload/'; /* NB! create this dir! */
      $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
      $config['max_size']  = '0';
      $config['max_width']  = '0';
      $config['max_height']  = '0';
      /* Load the upload library */
      $this->load->library('upload', $config);

      /* Create the config for image library */
      /* (pretty self-explanatory) */
      $configThumb = array();
      $configThumb['image_library'] = 'gd2';
      $configThumb['source_image'] = '';
      $configThumb['create_thumb'] = TRUE;
      $configThumb['maintain_ratio'] = TRUE;
      /* Set the height and width or thumbs */
      /* Do not worry - CI is pretty smart in resizing */
      /* It will create the largest thumb that can fit in those dimensions */
      /* Thumbs will be saved in same upload dir but with a _thumb suffix */
      /* e.g. 'image.jpg' thumb would be called 'image_thumb.jpg' */
      $configThumb['width'] = 140;
      $configThumb['height'] = 210;
      /* Load the image library */
      $this->load->library('image_lib');

      /* We have 5 files to upload
       * If you want more - change the 6 below as needed
       */
      for($i = 1; $i < 6; $i++) {
        /* Handle the file upload */
        $upload = $this->upload->do_upload('image'.$i);
        /* File failed to upload - continue */
        if($upload === FALSE) continue;
        /* Get the data about the file */
        $data = $this->upload->data();

        $uploadedFiles[$i] = $data;
        /* If the file is an image - create a thumbnail */
        if($data['is_image'] == 1) {
          $configThumb['source_image'] = $data['full_path'];
          $this->image_lib->initialize($configThumb);
          $this->image_lib->resize();
        }
      }
    }
    /* And display the form again */
    $this->load->view('upload_form');
  }
}