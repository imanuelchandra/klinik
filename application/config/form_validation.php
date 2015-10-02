<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
                 'pasreg_baru' => array(
                                    array(
                                            'field' => 'nama',
                                            'label' => 'Nama Pasien',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'tmpt_lahir',
                                            'label' => 'Tempat Lahir Pasien',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'tgl_lahir',
                                            'label' => 'Tanggal Lahir Pasien',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'bln_lahir',
                                            'label' => 'Bulan Lahir Pasien',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'th_lahir',
                                            'label' => 'Tahun Lahir Pasien',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'jns_kelamin',
                                            'label' => 'Jenis Kelamin',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'alamat',
                                            'label' => 'Alamat',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'status',
                                            'label' => 'Status',
                                            'rules' => 'required'
                                         )
                                    ),
                   'email' => array(
                                    array(
                                            'field' => 'emailaddress',
                                            'label' => 'EmailAddress',
                                            'rules' => 'required|valid_email'
                                         ),
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required|alpha'
                                         ),
                                    array(
                                            'field' => 'title',
                                            'label' => 'Title',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'message',
                                            'label' => 'MessageBody',
                                            'rules' => 'required'
                                         )
                                    ),
                 'tmbh_pengguna' => array(
                                           array(
                                                'field' => 'nama',
                                                'label' => 'Nama Pengguna',
                                                'rules' => 'required'
                                               ),
                                           array(
                                                'field' => 'passwd',
                                                'label' => 'Password',
                                                'rules' => 'required|matches[passconf]'
                                                ),
                                           array(
                                                'field' => 'passconf',
                                                'label' => 'Konfirmasi Password',
                                                'rules' => 'required'
                                                )
                                          )
               );