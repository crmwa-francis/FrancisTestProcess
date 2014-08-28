<?php
$viewdefs['Contracts'] =
    array(
        'EditView' =>
            array(
                'templateMeta' =>
                    array(
                        'maxColumns' => '2',
                        'widths' =>
                            array(
                                0 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                                1 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                            ),
                        'javascript' => '<script type="text/javascript" language="javascript">
	function setvalue(source)  {ldelim} 
		src= new String(source.value);
		target=new String(source.form.name.value);

		if (target.length == 0)  {ldelim} 
			lastindex=src.lastIndexOf("\\"");
			if (lastindex == -1)  {ldelim} 
				lastindex=src.lastIndexOf("\\\\\\"");
			 {rdelim}  
			if (lastindex == -1)  {ldelim} 
				source.form.name.value=src;
				source.form.escaped_name.value = src;
			 {rdelim}  else  {ldelim} 
				source.form.name.value=src.substr(++lastindex, src.length);
				source.form.escaped_name.value = src.substr(lastindex, src.length);
			 {rdelim} 	
		 {rdelim} 			
	 {rdelim} 

	function set_expiration_notice_values(form)  {ldelim} 
		if (form.expiration_notice_flag.checked)  {ldelim} 
			form.expiration_notice_flag.value = "on";
			form.expiration_notice_date.value = "";
			form.expiration_notice_time.value = "";
			form.expiration_notice_date.readonly = true;
			form.expiration_notice_time.readonly = true;
			if(typeof(form.due_meridiem) != \'undefined\')  {ldelim} 
				form.due_meridiem.disabled = true;
			 {rdelim} 
			
		 {rdelim}  else  {ldelim} 
			form.expiration_notice_flag.value="off";
			form.expiration_notice_date.readOnly = false;
			form.expiration_notice_time.readOnly = false;
			
			if(typeof(form.due_meridiem) != \'undefined\')  {ldelim} 
				form.due_meridiem.disabled = false;
			 {rdelim} 
			
		 {rdelim} 
	 {rdelim} 
</script>',
                        'useTabs' => false,
                        'tabDefs' =>
                            array(
                                'LBL_CONTRACT_INFORMATION' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_PANEL_SALE_DATES' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_PANEL_SETTLEMENT_DETAILS_LAND' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_PANEL_ASSIGNMENT' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                    ),
                'panels' =>
                    array(
                        'lbl_contract_information' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'titles_expected',
                                                'label' => 'LBL_TITLES_EXPECTED',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'name',
                                                'label' => 'LBL_CONTRACT_ID',
                                                'displayParams' =>
                                                    array(
                                                        'readonly' => true,
                                                        'required' => false,
                                                    ),
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'titles_released',
                                                'label' => 'LBL_TITLE_RELEASED',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'sunset_date_extension',
                                                'label' => 'LBL_SUNSET_DATE_EXTENSION',
                                            ),
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'expected_completion',
                                                'label' => 'LBL_EXPECTED_COMPLETION',
                                            ),
                                        1 => '',
                                    ),
                            ),
                        'lbl_panel_sale_dates' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'firb_required',
                                                'studio' => 'visible',
                                                'label' => 'LBL_FIRB_REQUIRED',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'firb_approved',
                                                'label' => 'LBL_FIRB_APPROVED',
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'property_chattels_included',
                                                'studio' => 'visible',
                                                'label' => 'LBL_PROPERTY_CHATTELS_INCLUDED',
                                            ),
                                        1 => '',
                                    ),
                            ),
                        'lbl_panel_settlement_details_land' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'sunset_date',
                                                'label' => 'LBL_SUNSET_DATE',
                                            ),
                                        1 => '',
                                    ),
                            ),
                        'LBL_PANEL_ASSIGNMENT' =>
                            array(
                                0 =>
                                    array(
                                        0 => 'assigned_user_name',
                                        1 =>
                                            array(
                                                'name' => 'team_name',
                                                'displayParams' =>
                                                    array(
                                                        'required' => true,
                                                    ),
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
