<style type="text/css">
.main .main-right-box {
position: absolute;
top:130px;
right:30px;
left:30px;
bottom:30px;
}
</style>

<div class="main-right-box">
<h5>安装登录扩展</h5>
<div class="blank20"></div>
<div class="box">
<form method="post" action="" name="form1" id="form1" onsubmit="checkform1()">

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">登录方式</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<input type="text" name="ologin_name" id="ologin_name" value="{$data['ologin']['ologin_name']}" class="form-control" />
</div>
</div>
<div class="clearfix blank20"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">登录方式描述</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::textarea('ologin_desc',$data['ologin']['ologin_desc'],'class="textarea"')}
</div>
</div>
<div class="clearfix blank20"></div>

{loop $data['ologin']['ologin_config'] $ologin_config}
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{$ologin_config.label}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<?php if ($ologin_config['type'] == "text") {?> 
<input name="cfg_value[]" type="{$ologin_config.type}" class="form-control" value="{$ologin_config.value}" />
<?php }elseif ($ologin_config['type'] == "textarea") {?> 
<textarea name="cfg_value[]" cols="80" rows="5">{$ologin_config.value}</textarea>
<?php }elseif ($ologin_config['type'] == "select") {?>
{form::select('cfg_value[]', $ologin_config['value'], $ologin_config['range'])}
<?php } ?>  
<input name="cfg_name[]" type="hidden" value="{$ologin_config.name}" />
<input name="cfg_type[]" type="hidden" value="{$ologin_config.type}" />
<input name="cfg_lang[]" type="hidden" value="{$ologin_config.lang}" />
</div>
</div>
<div class="clearfix blank20"></div>
{/loop}




<input type="hidden"  name="ologin_id" value="{$data['ologin']['ologin_id']}" />
<input type="hidden"  name="ologin_code"     value="{$data['ologin']['ologin_code']}" />
<input type="hidden"  name="is_cod" value="{$data['ologin']['is_cod']}" />
<input type="hidden"  name="is_online"    value="{$data['ologin']['is_online']}" />

<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
<input type="submit" name="submit" value=" 提交 " class="btn btn-primary" />

</form>
<div class="blank30"></div>
</div>
</div>
