<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_truyentranh extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'truyentranh_id' => array(
                                'type' => 'INT',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'truyentranh_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'truyentranh_content' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('truyentranh_id', TRUE);
                $this->dbforge->create_table('truyentranh');
        }

        public function down()
        {
               
        }
}
