


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
<h5>站点列表</h5>
<div class="blank20"></div>
<div class="box">


<a href="index.php?case=website&act=addwebsite&admin_dir={get('admin_dir')}&site=default"  class="btn btn-primary">增加站点</a>
<div class="blank30"></div>

<form name="listform" id="listform"  action="<?php echo uri();?>" method="post">

<div class="table-responsive">
<table class="table table-hover">
<thead>
        <tr class="th">
          <th align="center"><!--id-->编号</th>
          <th align="center"><!--name-->站点</th>
          <th align="center"><!--url-->地址</th>
          <th align="center">操作</th>
        </tr>

</thead>
<tbody>
{loop $data $d}
<tr class="s_out" onmouseover="m_over(this)" onmouseout="m_out(this)">

<td align="center" >{$d['id']}</td>
<td align="center" style="padding-left:10px;">{$d['name']}</td>
<td align="left" style="padding-left:10px;">{$d['url']}</td>

<td align="center" class="manage">
<a href="{$d['url']}index.php?case=admin&act=remotelogin&admin_dir={$d['admindir']}&args={$d['args']}&submit=1" target="_blank" title="切换"><i class="glyphicon glyphicon-retweet"></i></a>
<a href="<?php echo modify("act/editwebsite/id/".$d['path']);?>" title="编辑"><i class="glyphicon glyphicon-edit"></i></a>
<a onclick="javascript: return confirm('确实要删除吗?');" href="<?php echo modify("/act/deletewebsite/id/".$d['path']);?>" title="删除"><i class="glyphicon glyphicon-trash"></i></a>
</td>
</tr>
{/loop}


      </tbody>
    </table>



</form>
</div>

<div class="blank30"></div>
</div>
</div>
