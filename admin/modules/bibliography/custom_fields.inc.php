<?php
/**
 * Bibliographic custom fields
 *
 * Copyright (C) 2010  Arie Nugraha (dicarve@yahoo.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */

// be sure that this file not accessed directly
if (INDEX_AUTH != 1) {
    die("can not access this file directly");
}

/**
 * Here you can add custom field to SLiMS Bibliographic database
 * The field you define here must also exists in 'biblio_custom' table in database
 * field 'type' can be on of these: 'text', 'longtext', 'numeric', 'dropdown', 'checklist', 'date' or 'choice'
 *
 */

global $dbs;

$_q = $dbs->query("SELECT * FROM mst_custom_field WHERE `primary_table`='biblio'");
if(isset($_q->num_rows)){
	while($_d = $_q->fetch_assoc()){
		$dbfield[] = $_d;
		// check biblio_custom field
		$chkcol = $dbs->query("SELECT * FROM `biblio_custom` LIMIT 1");
		$field = $chkcol->fetch_array();
		// add field if not exist
		if(!isset($field[$_d['dbfield']])){
			$type = $_d['type']=='date'?'date':($_d['type']=='numeric'?'INT(11)':'text');
	  		@$dbs->query("ALTER TABLE `biblio_custom` ADD ".$_d['dbfield']." ".$type." DEFAULT NULL comment 'field for ".$_d['label']."'");
	  	}  	
	  	$biblio_custom_fields = $dbfield;
	}
}


$biblio_custom_fields = array(
	'customfield1' => array(
		'dbfield' => 'asal', // name of field in 'biblio_custom' table in database, make sure you already define it!
		'label' => __('Asal'), // label of field in form
		'type' => 'text', // type of field
		'default' => '', // default value of field
		'max' => '50', // maximum character to enter in 'text' field type
		'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
		'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
		'width' => 50), // width of field in form for 'text' field type, maximum is 100

	'customfield2' => array(
		'dbfield' => 'letak', // name of field in 'biblio_custom' table in database, make sure you already define it!
		'label' => __('Letak'), // label of field in form
		'type' => 'text', // type of field
		'default' => '', // default value of field
		'max' => '50', // maximum character to enter in 'text' field type
		'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
		'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
		'width' => 50), // width of field in form for 'text' field type, maximum is 100

	'customfield3' => array(
		'dbfield' => 'inventaris', // name of field in 'biblio_custom' table in database, make sure you already define it!
		'label' => __('Inventaris'), // label of field in form
		'type' => 'text', // type of field
		'default' => '', // default value of field
		'max' => '50', // maximum character to enter in 'text' field type
		'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
		'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
		'width' => 50), // width of field in form for 'text' field type, maximum is 100	

	'customfield4' => array(
		'dbfield' => 'abstrak', // name of field in 'biblio_custom' table in database, make sure you already define it!
		'label' => __('Abstrak'), // label of field in form
		'type' => 'text', // type of field
		'default' => '', // default value of field
		'max' => '50', // maximum character to enter in 'text' field type
		'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
		'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
		'width' => 50), // width of field in form for 'text' field type, maximum is 100	
	
	'customfield5' => array(
		'dbfield' => 'nomor_kelas', // name of field in 'biblio_custom' table in database, make sure you already define it!
		'label' => __('Nomor Kelas'), // label of field in form
		'type' => 'text', // type of field
		'default' => '', // default value of field
		'max' => '50', // maximum character to enter in 'text' field type
		'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
		'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
		'width' => 50), // width of field in form for 'text' field type, maximum is 100	
	
	'customfield6' => array(
		'dbfield' => 'copy', // name of field in 'biblio_custom' table in database, make sure you already define it!
		'label' => __('Copy'), // label of field in form
		'type' => 'text', // type of field
		'default' => '', // default value of field
		'max' => '50', // maximum character to enter in 'text' field type
		'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
		'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
		'width' => 50), // width of field in form for 'text' field type, maximum is 100	

	'customfield7' => array(
		'dbfield' => 'smt', // name of field in 'biblio_custom' table in database, make sure you already define it!
		'label' => __('Semester'), // label of field in form
		'type' => 'numeric', // type of field
		'default' => '', // default value of field
		'max' => '50', // maximum character to enter in 'text' field type
		'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
		'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
		'width' => 50), // width of field in form for 'text' field type, maximum is 100	

			'customfield8' => array(
				'dbfield' => 'keyword', // name of field in 'biblio_custom' table in database, make sure you already define it!
				'label' => __('Keyword'), // label of field in form
				'type' => 'text', // type of field
				'default' => '', // default value of field
				'max' => '50', // maximum character to enter in 'text' field type
				'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
				'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
				'width' => 50), // width of field in form for 'text' field type, maximum is 100	

				'customfield9' => array(
					'dbfield' => 'subyek', // name of field in 'biblio_custom' table in database, make sure you already define it!
					'label' => __('Subyek'), // label of field in form
					'type' => 'text', // type of field
					'default' => '', // default value of field
					'max' => '50', // maximum character to enter in 'text' field type
					'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
					'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
					'width' => 50), // width of field in form for 'text' field type, maximum is 100	

					'customfield10' => array(
						'dbfield' => 'authors2', // name of field in 'biblio_custom' table in database, make sure you already define it!
						'label' => __('Authors2'), // label of field in form
						'type' => 'text', // type of field
						'default' => '', // default value of field
						'max' => '50', // maximum character to enter in 'text' field type
						'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
						'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
						'width' => 50), // width of field in form for 'text' field type, maximum is 100	

						'customfield11' => array(
							'dbfield' => 'kota_penerbit', // name of field in 'biblio_custom' table in database, make sure you already define it!
							'label' => __('Kota_penerbit'), // label of field in form
							'type' => 'text', // type of field
							'default' => '', // default value of field
							'max' => '50', // maximum character to enter in 'text' field type
							'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
							'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
							'width' => 50), // width of field in form for 'text' field type, maximum is 100	

							'customfield12' => array(
								'dbfield' => 'nim_1', // name of field in 'biblio_custom' table in database, make sure you already define it!
								'label' => __('NIM1'), // label of field in form
								'type' => 'text', // type of field
								'default' => '', // default value of field
								'max' => '50', // maximum character to enter in 'text' field type
								'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
								'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
								'width' => 50), // width of field in form for 'text' field type, maximum is 100	

								'customfield13' => array(
									'dbfield' => 'nim_2', // name of field in 'biblio_custom' table in database, make sure you already define it!
									'label' => __('NIM2'), // label of field in form
									'type' => 'text', // type of field
									'default' => '', // default value of field
									'max' => '50', // maximum character to enter in 'text' field type
									'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
									'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
									'width' => 50), // width of field in form for 'text' field type, maximum is 100	

								'customfield14' => array(
									'dbfield' => 'email', // name of field in 'biblio_custom' table in database, make sure you already define it!
									'label' => __('E-mail'), // label of field in form
									'type' => 'text', // type of field
									'default' => '', // default value of field
									'max' => '50', // maximum character to enter in 'text' field type
									'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
									'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
									'width' => 50), // width of field in form for 'text' field type, maximum is 100	

										'customfield15' => array(
											'dbfield' => 'bimbing_1', // name of field in 'biblio_custom' table in database, make sure you already define it!
											'label' => __('Bimbing1'), // label of field in form
											'type' => 'text', // type of field
											'default' => '', // default value of field
											'max' => '50', // maximum character to enter in 'text' field type
											'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
											'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
											'width' => 50), // width of field in form for 'text' field type, maximum is 100	
											
											'customfield16' => array(
												'dbfield' => 'bimbing_2', // name of field in 'biblio_custom' table in database, make sure you already define it!
												'label' => __('Bimbing2'), // label of field in form
												'type' => 'text', // type of field
												'default' => '', // default value of field
												'max' => '50', // maximum character to enter in 'text' field type
												'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
												'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
												'width' => 50), // width of field in form for 'text' field type, maximum is 100	

												'customfield17' => array(
													'dbfield' => 'status', // name of field in 'biblio_custom' table in database, make sure you already define it!
													'label' => __('Status'), // label of field in form
													'type' => 'text', // type of field
													'default' => '', // default value of field
													'max' => '50', // maximum character to enter in 'text' field type
													'data' => false, // an array of data for 'dropdown', 'checklist' or 'choice'
													'indexed' => true, // NOT APPLICABLE YET, FOR FUTURE RELEASE USE
													'width' => 50), // width of field in form for 'text' field type, maximum is 100	
);
/*
	'customfield2' => array(
		'dbfield' => 'customfield2',
		'label' => __('Custom Field 2'),
		'type' => 'dropdown',
		'default' => 'value2',
		'data' => array(
			array('value1', 'Value #1'),
			array('value2', 'Value #2')
			),
    	'is_public' => true,
		'indexed' => true),

	'customfield3' => array(
		'dbfield' => 'customfield3',
		'label' => __('Custom Field 3'),
		'type' => 'checklist',
		'default' => array('value2', 'value3'),
		'data' => array(
			array('value1', 'Value 1'),
			array('value2', 'Value 2'),
			array('value3', 'Value 3')
			),
    	'is_public' => false,
		'indexed' => true),

	'customfield4' => array(
		'dbfield' => 'customfield4',
		'label' => __('Custom Field 4'),
		'type' => 'choice',
		'default' => 'value2',
		'data' => array(
			array('value1', 'Value 1'),
			array('value2', 'Value 2')
			),
    	'is_public' => false,
		'indexed' => true),

	'customfield5' => array(
		'dbfield' => 'customfield5',
		'label' => __('Custom Field 5'),
		'default' => date('Y-m-d'),
		'type' => 'date')
);
*/
