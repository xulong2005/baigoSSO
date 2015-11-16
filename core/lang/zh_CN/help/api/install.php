<?php
return "<div class=\"alert alert-warning\">
		<p>
			<span class=\"glyphicon glyphicon-warning-sign\"></span>
			注意：本接口仅在安装 SSO 时有效，安装成功后将自动失效。
		</p>
		<p>
			“数据库设置”必须在第一步调用，“完成安装”必须在最后一步调用，其余部分推荐按照：基本设置 &raquo; 创建数据表 &raquo; 创建管理员 的顺序来调用。
		</p>
	</div>

	<h3>数据库设置</h3>

	<p class=\"text-success\">接口说明</p>
	<p>本接口用于设置数据库，本接口必须在第一步调用。</p>

	<p class=\"text-success\">URL</p>
	<p><span class=\"text-primary\">http://www.domain.com/api/api.php?mod=install</span></p>

	<p class=\"text-success\">HTTP 请求方式</p>
	<p>POST</p>

	<p class=\"text-success\">返回格式</p>
	<p>JSON</p>

	<div class=\"panel panel-default\">
		<div class=\"panel-heading\">接口参数</div>
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"text-nowrap\">名称</th>
						<th class=\"text-nowrap\">类型</th>
						<th class=\"text-nowrap\">必须</th>
						<th>具体描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"text-nowrap\">act_post</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>接口调用动作，值只能为 dbconfig。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">db_host</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>数据库服务器</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">db_port</td>
						<td class=\"text-nowrap\">int</td>
						<td class=\"text-nowrap\">true</td>
						<td>服务器端口</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">db_name</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>数据库名称</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">db_user</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>数据库用户名</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">db_pass</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>数据库密码</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">db_charset</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>数据库字符编码</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">db_table</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>数据表名前缀</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class=\"panel panel-default\">
		<div class=\"panel-heading\">返回结果</div>
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"text-nowrap\">名称</th>
						<th class=\"text-nowrap\">类型</th>
						<th>具体描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"text-nowrap\">alert</td>
						<td class=\"text-nowrap\">string</td>
						<td>返回代码，详情请看 <a href=\"{BG_URL_HELP}ctl.php?mod=api&act_get=alert\">返回代码</a>。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">prd_sso_ver</td>
						<td class=\"text-nowrap\">string</td>
						<td>baigo SSO 版本号。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">prd_sso_pub</td>
						<td class=\"text-nowrap\">string</td>
						<td>baigo SSO 版本发布时间，格式为年月日。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<p>&nbsp;</p>

	<h4>返回结果示例</h4>
	<p>
<pre><code class=\"language-javascript\">{
    &quot;prd_sso_ver&quot;: &quot;1.1.1&quot;, //SSO 版本号
    &quot;prd_sso_pub&quot;: 20150923, //SSO 版本发布时间
    &quot;alert&quot;: &quot;y010102&quot; //返回代码
}</code></pre>
	</p>

	<hr>

	<h3>基本设置</h3>

	<p class=\"text-success\">接口说明</p>
	<p>本接口用于基本设置。</p>

	<p class=\"text-success\">URL</p>
	<p><span class=\"text-primary\">http://www.domain.com/api/api.php?mod=install</span></p>

	<p class=\"text-success\">HTTP 请求方式</p>
	<p>POST</p>

	<p class=\"text-success\">返回格式</p>
	<p>JSON</p>

	<div class=\"panel panel-default\">
		<div class=\"panel-heading\">接口参数</div>
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"text-nowrap\">名称</th>
						<th class=\"text-nowrap\">类型</th>
						<th class=\"text-nowrap\">必须</th>
						<th>具体描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"text-nowrap\">act_post</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>接口调用动作，值只能为 base。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class=\"panel panel-default\">
		<div class=\"panel-heading\">返回结果</div>
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"text-nowrap\">名称</th>
						<th class=\"text-nowrap\">类型</th>
						<th>具体描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"text-nowrap\">alert</td>
						<td class=\"text-nowrap\">string</td>
						<td>返回代码，详情请看 <a href=\"{BG_URL_HELP}ctl.php?mod=api&act_get=alert\">返回代码</a>。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">prd_sso_ver</td>
						<td class=\"text-nowrap\">string</td>
						<td>baigo SSO 版本号。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">prd_sso_pub</td>
						<td class=\"text-nowrap\">string</td>
						<td>baigo SSO 版本发布时间，格式为年月日。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<p>&nbsp;</p>

	<h4>返回结果示例</h4>
	<p>
<pre><code class=\"language-javascript\">{
    &quot;prd_sso_ver&quot;: &quot;1.1.1&quot;, //SSO 版本号
    &quot;prd_sso_pub&quot;: 20150923, //SSO 版本发布时间
    &quot;alert&quot;: &quot;y010102&quot; //返回代码
}</code></pre>
	</p>

	<hr>

	<h3>创建数据表</h3>

	<p class=\"text-success\">接口说明</p>
	<p>本接口用于创建数据表。</p>

	<p class=\"text-success\">URL</p>
	<p><span class=\"text-primary\">http://www.domain.com/api/api.php?mod=install</span></p>

	<p class=\"text-success\">HTTP 请求方式</p>
	<p>POST</p>

	<p class=\"text-success\">返回格式</p>
	<p>JSON</p>

	<div class=\"panel panel-default\">
		<div class=\"panel-heading\">接口参数</div>
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"text-nowrap\">名称</th>
						<th class=\"text-nowrap\">类型</th>
						<th class=\"text-nowrap\">必须</th>
						<th>具体描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"text-nowrap\">act_post</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>接口调用动作，值只能为 dbtable。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class=\"panel panel-default\">
		<div class=\"panel-heading\">返回结果</div>
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"text-nowrap\">名称</th>
						<th class=\"text-nowrap\">类型</th>
						<th>具体描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"text-nowrap\">alert</td>
						<td class=\"text-nowrap\">string</td>
						<td>返回代码，详情请看 <a href=\"{BG_URL_HELP}ctl.php?mod=api&act_get=alert\">返回代码</a>。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">prd_sso_ver</td>
						<td class=\"text-nowrap\">string</td>
						<td>baigo SSO 版本号。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">prd_sso_pub</td>
						<td class=\"text-nowrap\">string</td>
						<td>baigo SSO 版本发布时间，格式为年月日。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<p>&nbsp;</p>

	<h4>返回结果示例</h4>
	<p>
<pre><code class=\"language-javascript\">{
    &quot;prd_sso_ver&quot;: &quot;1.1.1&quot;, //SSO 版本号
    &quot;prd_sso_pub&quot;: 20150923, //SSO 版本发布时间
    &quot;alert&quot;: &quot;y010102&quot; //返回代码
}</code></pre>
	</p>

	<hr>

	<h3>创建管理员</h3>

	<p class=\"text-success\">接口说明</p>
	<p>本接口用于创建管理员。</p>

	<p class=\"text-success\">URL</p>
	<p><span class=\"text-primary\">http://www.domain.com/api/api.php?mod=install</span></p>

	<p class=\"text-success\">HTTP 请求方式</p>
	<p>POST</p>

	<p class=\"text-success\">返回格式</p>
	<p>JSON</p>

	<div class=\"panel panel-default\">
		<div class=\"panel-heading\">接口参数</div>
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"text-nowrap\">名称</th>
						<th class=\"text-nowrap\">类型</th>
						<th class=\"text-nowrap\">必须</th>
						<th>具体描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"text-nowrap\">act_post</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>接口调用动作，值只能为 admin。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">admin_name</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>管理员用户名</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">admin_pass</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>密码，必须用 <mark>MD5</mark> 加密后传输。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class=\"panel panel-default\">
		<div class=\"panel-heading\">返回结果</div>
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"text-nowrap\">名称</th>
						<th class=\"text-nowrap\">类型</th>
						<th>具体描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"text-nowrap\">alert</td>
						<td class=\"text-nowrap\">string</td>
						<td>返回代码，详情请看 <a href=\"{BG_URL_HELP}ctl.php?mod=api&act_get=alert\">返回代码</a>。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">admin_id</td>
						<td>int</td>
						<td>管理员 ID</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">prd_sso_ver</td>
						<td class=\"text-nowrap\">string</td>
						<td>baigo SSO 版本号。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">prd_sso_pub</td>
						<td class=\"text-nowrap\">string</td>
						<td>baigo SSO 版本发布时间，格式为年月日。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<p>&nbsp;</p>

	<h4>返回结果示例</h4>
	<p>
<pre><code class=\"language-javascript\">{
    &quot;prd_sso_ver&quot;: &quot;1.1.1&quot;, //SSO 版本号
    &quot;prd_sso_pub&quot;: 20150923, //SSO 版本发布时间
    &quot;admin_id&quot;: &quot;MTA=&quot;, //管理员 ID
    &quot;alert&quot;: &quot;y010102&quot; //返回代码
}</code></pre>
	</p>

	<hr>

	<h3>完成安装</h3>

	<p class=\"text-success\">接口说明</p>
	<p>本接口用于通知系统安装已完成，本接口必须在最后一步调用，本接口调用成功后，安装接口将全部失效。</p>

	<p class=\"text-success\">URL</p>
	<p><span class=\"text-primary\">http://www.domain.com/api/api.php?mod=install</span></p>

	<p class=\"text-success\">HTTP 请求方式</p>
	<p>POST</p>

	<p class=\"text-success\">返回格式</p>
	<p>JSON</p>

	<div class=\"panel panel-default\">
		<div class=\"panel-heading\">接口参数</div>
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"text-nowrap\">名称</th>
						<th class=\"text-nowrap\">类型</th>
						<th class=\"text-nowrap\">必须</th>
						<th>具体描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"text-nowrap\">act_post</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>接口调用动作，值只能为 over。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">app_name</td>
						<td class=\"text-nowrap\">string</td>
						<td class=\"text-nowrap\">true</td>
						<td>应用名称。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class=\"panel panel-default\">
		<div class=\"panel-heading\">返回结果</div>
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"text-nowrap\">名称</th>
						<th class=\"text-nowrap\">类型</th>
						<th>具体描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"text-nowrap\">alert</td>
						<td class=\"text-nowrap\">string</td>
						<td>返回代码，详情请看 <a href=\"{BG_URL_HELP}ctl.php?mod=api&act_get=alert\">返回代码</a>。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">sso_url</td>
						<td class=\"text-nowrap\">string</td>
						<td>SSO API 接口的 URL。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">app_id</td>
						<td class=\"text-nowrap\">int</td>
						<td>调用 API 接口所需的 APP ID。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">app_key</td>
						<td class=\"text-nowrap\">int</td>
						<td>调用 API 接口所需的 APP KEY。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">prd_sso_ver</td>
						<td class=\"text-nowrap\">string</td>
						<td>baigo SSO 版本号。</td>
					</tr>
					<tr>
						<td class=\"text-nowrap\">prd_sso_pub</td>
						<td class=\"text-nowrap\">string</td>
						<td>baigo SSO 版本发布时间，格式为年月日。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<p>&nbsp;</p>

	<h4>返回结果示例</h4>
	<p>
<pre><code class=\"language-javascript\">{
    &quot;prd_sso_ver&quot;: &quot;1.1.1&quot;, //SSO 版本号
    &quot;prd_sso_pub&quot;: 20150923, //SSO 版本发布时间
    &quot;app_id&quot;: &quot;MTA=&quot;, //应用 APP ID
    &quot;app_key&quot;: &quot;sfewrw8084382h2r9fdsw9ey5whfDISORwegds&quot;, //应用 APP KEY
    &quot;alert&quot;: &quot;y010102&quot; //返回代码
}</code></pre>
	</p>";