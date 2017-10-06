
            <br />
            <div class="row">
              <div class="col-md-6">
                <label for="url">目标网址:</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="http://site.com/vuln.php?id=1">
              </div>
              <div class="col-md-2">
                <label for="select_method">HTTP请求方法:</label>
                <select class="form-control" id="select_method" name="method">
                  <option value="GET" selected="selected" onClick="divHideAndSeek('display_post_data_form', 1)">默认 (GET)</option>
                  <option value="OPTIONS" onClick="divHideAndSeek('display_post_data_form', 1)">OPTIONS</option>
                  <option value="HEAD" onClick="divHideAndSeek('display_post_data_form', 1)">HEAD</option>
                  <option value="POST" onClick="divHideAndSeek('display_post_data_form', 0)">POST</option>
                  <option value="PUT" onClick="divHideAndSeek('display_post_data_form', 0)">PUT</option>
                </select><br />
              </div>
              <div class="col-md-3">
                <label for="select_method">刷新任何现有的会话信息:</label>
                <select class="form-control" id="select_method" name="flushSession">
                  <option value="n" selected="selected">否</option>
                  <option value="y">是</option>
                </select><br />
              </div>
              <div class="col-md-1"></div>
            </div>

            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div id="display_post_data_form" align="central" style="display: none">
                  <label for="post_data">请求数据字符串:</label>
                  <input type="text" class="form-control" id="post_data" name="data" placeholder="i.e. username=foo&password=bar&submit=Submit">
                </div><br />
              </div>
              <div class="col-md-3"></div>
            </div>


            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-2">
                <label class="radio-inline">
                  <input type="radio" name="identifier" value="marker" onClick="divHideAndSeek('display_identifier_data_form', 1); divHideAndSeek('display_skip_data_form', 1);">* 注入标记
                </label>
              </div>
              <div class="col-md-3">
                <label class="radio-inline">
                  <input type="radio" name="identifier" value="parameter" onClick="divHideAndSeek('display_identifier_data_form', 0); divHideAndSeek('display_skip_data_form', 1);">已知易受攻击的参数
                </label>
              </div>
              <div class="col-md-3">
                <label class="radio-inline">
                  <input type="radio" name="identifier" checked="checked" value="fuzz" onClick="divHideAndSeek('display_identifier_data_form', 1); divHideAndSeek('display_skip_data_form', 0);">未知，Fuzz全部参数！
                </label>
              </div>
              <div class="col-md-3">
                <label class="radio-inline">
                  <input type="radio" name="identifier" value="forms" onClick="divHideAndSeek('display_identifier_data_form', 1); divHideAndSeek('display_skip_data_form', 0);">未知，Fuzz页面上的表单
                </label>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-5">
                <br /><br />
                <div id="display_identifier_data_form" align="central" style="display: none">
                  <label for="testParameter">易受攻击的参数名:</label>
                  <input type="text" class="form-control" id="testParameter" name="testParameter" placeholder="i.e. paramName">
                  <br />
                </div>
                <div id="display_skip_data_form" align="central" style="display: block">
                  <label for="vuln_param">要跳过的可选参数名:</label>
                  <input type="text" class="form-control" id="skip_param" name="skip" placeholder="i.e. paramName,to,skip">
                  <br />
                </div>
              </div>
              <div class="col-md-4"></div>
            </div>



