{literal}
    <style>
        input {
            margin: 5px 5px 0px 0px;
        }
        #EditView{
            margin-top:10px;
        }
    </style>
{/literal}

<form name="ConfigureSettings" id="EditView" action="index.php?module=iems_Project&action=savesettings" method="POST">
    <input type="hidden" name="module" value="iems_Project">
    <input type="hidden" name="action" value="savesettings">
    <input type="hidden" name="return_module" value="Administration">
    <input type="hidden" name="return_action" value="index">
    <input type="hidden" name="source_form" value="config">
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
            <td>
                <input title="Save" accesskey="a" class="button primary"  name="button" type="submit"  id="btn_save" value=" Save ">
                <input title="Cancel" accesskey="l" class="button" onclick="this.form.action.value='index'; this.form.module.value='Administration';" type="submit" name="button" value=" Cancel ">
            </td>
            <td align="right" nowrap="">
                <span class="required">*</span> Indicates required field
            </td>
        </tr></tbody>
    </table>
    <div id="EditView_tabs">
        <div>
            <div id="detailpanel_1">
                <table width="100%" border="0" cellspacing="1" id="Default_iems_Project_Subpanel"
                       class="yui3-skin-sam edit view panelContainer">
                    <tbody>
                    <tr>
                        <td valign="top" id="url_label" width="12.5%" scope="col">
                            Wordpress Sync URL
                        </td>
                        <td valign="top" width="37.5%">
                            {if $enable_add == true}
                                <a class="btn btn-mini comment-btn addAnother" type-of-action="wordpress-url" rel="tooltip" title=""
                                   type-of-action="wordpress_url" tabindex="-1">
                                    <i class="icon-plus"></i>
                                </a><br/>
                            {/if}
                            {if !empty($wordpress_url)}
                                {foreach from=$wordpress_url  item=myValue}
                                    <div>
                                        <input type="text" placeholder="www.yourwebsite.com" name="wordpress_url[]" value="{$myValue}" />
                                        {if $enable_add == true}
                                            <a class="btn btn-mini comment-btn"  onclick="removeMe(this);" rel="tooltip" title=""
                                               data-original-title="Comment" tabindex="-1">
                                                <i class="icon-minus"></i>
                                            </a>
                                        {/if}
                                    </div>
                                {/foreach}
                            {else}
                                <div>
                                    <input type="text" placeholder="www.yourwebsite.com" name="wordpress_url[]" />
                                    <a class="btn btn-mini comment-btn"  onclick="removeMe(this);" rel="tooltip" title=""
                                       data-original-title="Comment" tabindex="-1">
                                        <i class="icon-minus"></i>
                                    </a>
                                </div>
                            {/if}
                        </td>
                        <td valign="top" id="url_label" width="12.5%" scope="col">
                            Email Templates
                        </td>
                        <td valign="top" width="37.5%">
                            {if $enable_additional_template == true}
                                <a class="btn btn-mini comment-btn addAnother" rel="tooltip" type-of-action="template-url">
                                    <i class="icon-plus"></i>
                                </a><br/>
                            {/if}
                            {if !empty($email_templates)}
                                {foreach from=$email_templates  key=myKey item=myValue}
                                    <div>
                                        <input type="text" placeholder="template_key_here" value="{$myKey}" name="template_key[]"/>
                                        <input type="text" placeholder="xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" value="{$myValue}" name="template_id[]" />
                                        {if $enable_additional_template == true}
                                            <a class="btn btn-mini comment-btn"  onclick="removeMe(this);" rel="tooltip" title=""
                                               data-original-title="Comment" tabindex="-1">
                                                <i class="icon-minus"></i>
                                            </a>
                                        {/if}
                                    </div>
                                {/foreach}
                            {else}
                                <div>
                                    <input type="text" placeholder="template_key_here" name="template_key[]"/>
                                    <input type="text" placeholder="xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" name="template_id[]" />
                                    {if $enable_additional_template == true}
                                        <a class="btn btn-mini comment-btn"  onclick="removeMe(this);" rel="tooltip" title=""
                                           data-original-title="Comment" tabindex="-1">
                                            <i class="icon-minus"></i>
                                        </a>
                                    {/if}
                                </div>
                            {/if}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
            <td>
                <input title="Save" accesskey="a" class="button primary" onclick="this.form.action.value='savesettings';" type="submit" name="button" id="btn_save" value=" Save ">
                <input title="Cancel" accesskey="l" class="button" onclick="this.form.action.value='index'; this.form.module.value='Administration';" type="submit" name="button" value=" Cancel ">
            </td>
            <td align="right" nowrap="">
                <span class="required">*</span> Indicates required field
            </td>
        </tr></tbody>
    </table>
</form>
{literal}
    <script>
        var newElementSet = '<a class="btn btn-mini comment-btn" onclick="removeMe(this)" rel="tooltip" title="" data-original-title="Comment" tabindex="-1">';
        newElementSet += '<i class="icon-minus"></i> </a></div>';

        $('.addAnother').click(function () {
            if($(this).attr('type-of-action') == 'wordpress-url' ){
                var startElement = '<div>';
                startElement += '<input type="text" placeholder="www.yourwebsite.com" name="wordpress_url[]" />';
                startElement = startElement+newElementSet;
            }else if($(this).attr('type-of-action') == 'template-url' ){
                var startElement = '<div>';
                startElement += '<input type="text" placeholder="template_key_here" name="template_key[]"/>';
                startElement += '<input type="text" placeholder="xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" name="template_id[]" />';
                startElement = startElement+newElementSet;
            }
            $(this).parent('td').append(startElement);
            return false;
        });
        function removeMe(e){
            e.parentNode.parentNode.removeChild(e.parentNode);
            return false;
        }
    </script>
{/literal}