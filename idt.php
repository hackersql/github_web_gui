
            <br />
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <label for="select_request_prefix">自定义注入前缀:</label>
                <select class="form-control" id="select_request_prefix" name="request_prefix">
                  <option value="" selected="selected" onClick="divHideAndSeek('display_prefix_data_form', 1)">禁用</option>
                  <option value="enabled" onClick="divHideAndSeek('display_prefix_data_form', 0)">启用</option>
                </select>
                <div id="display_prefix_data_form" align="central" style="display: none">
                  <br />
                  <label for="request_prefix_str">要使用的自定义注入前缀字符串:</label>
                  <input type="text" class="form-control" id="request_prefix_str" name="prefix" placeholder="i.e. ') ">
                  <br />
                </div><br />

                <label for="select_request_suffix">自定义注入后缀:</label>
                <select class="form-control" id="select_request_suffix" name="request_suffix">
                  <option value="" selected="selected" onClick="divHideAndSeek('display_suffix_data_form', 1)">禁用</option>
                  <option value="enabled" onClick="divHideAndSeek('display_suffix_data_form', 0)">启用</option>
                </select>
                <div id="display_suffix_data_form" align="central" style="display: none">
                  <br />
                  <label for="request_suffix_str">要使用的自定义注入后缀字符串:</label>
                  <input type="text" class="form-control" id="request_suffix_str" name="suffix" placeholder="i.e. AND ('abc'='abc ">
                  <br />
                </div><br />

                <label for="select_request_invalidator">选择用于无效查询的方法:</label>
                <select class="form-control" id="select_request_invalidator" name="request_invalidator">
                  <option value="default" selected="selected">相反值</option>
                  <option value="invalidBignum">大整数</option>
                  <option value="invalidLogical">逻辑运算符</option>
                  <option value="invalidString">随机字符串</option>
                </select><br />

                <label for="select_request_casting">Payload构造机制:</label>
                <select class="form-control" id="select_request_casting" name="noCast">
                  <option value="" selected="selected">启用</option>
                  <option value="true">禁用</option>
                </select><br />

                <label for="select_request_hex">使用DBMS十六进制功能进行数据检索:</label>
                <select class="form-control" id="select_request_hex" name="hexConvert">
                  <option value="true">启用</option>
                  <option value="" selected="selected">禁用</option>
                </select><br />

                <label for="select_request_hpp">使用HTTP参数污染方法:</label>
                <select class="form-control" id="select_request_hpp" name="hpp">
                  <option value="true">启用</option>
                  <option value="" selected="selected">禁用</option>
                </select><br />


                <div id="display_time_based_data_form" align="central" style="display: none">
                  <label for="select_timeSec">(基于时间的攻击)设定延迟注入的时间秒数:</label>
                  <select class="form-control" id="select_timeSec" name="timeSec">
                    <option value="3"> 3 </option>
                    <option value="5" selected="selected"> 5 </option>
                    <option value="8"> 8 </option>
                    <option value="10"> 10 </option>
                    <option value="12"> 12 </option>
                    <option value="15"> 15 </option>
                    <option value="18"> 18 </option>
                    <option value="20"> 20 </option>
                    <option value="25"> 25 </option>
                  </select><br />
                </div>

                <div id="display_union_data_form" align="central" style="display: none">
                  <label for="select_union_col_range">定义Union查询列范围:</label>
                  <select class="form-control" id="select_union_col_range" name="union_col_range">
                    <option value="" selected="selected" onClick="divHideAndSeek('display_union_col_range_data_form', 1)">禁用</option>
                    <option value="enabled" onClick="divHideAndSeek('display_union_col_range_data_form', 0)">启用</option>
                  </select>
                  <div id="display_union_col_range_data_form" align="central" style="display: none">
                    <br />
                    <label for="union_col_min">最小列数:</label>
                    <select class="form-control" id="union_col_min" name="union_col_min">
                      <option value="1" selected="selected"> 1 </option>
                      <?php
                        foreach(range(2, 999) as $number) {
                          echo "                    <option value=\"$number\"> $number </option>";
                        }
                      ?>
                    </select><br />
                    <label for="union_col_max">最大列数:</label>
                    <select class="form-control" id="union_col_max" name="union_col_max">
                      <option value="2" selected="selected"> 2 </option>
                      <?php
                        foreach(range(3, 1000) as $number) {
                          echo "                    <option value=\"$number\"> $number </option>";
                        }
                      ?>
                    </select><br />
                  </div><br />

                  <label for="select_union_char_filter">定义暴力猜解UNION查询列数目使用的字符:</label>
                  <select class="form-control" id="select_union_char_filter" name="union_char_filter">
                    <option value="" selected="selected" onClick="divHideAndSeek('display_union_char_filter_data_form', 1)">禁用</option>
                    <option value="enabled" onClick="divHideAndSeek('display_union_char_filter_data_form', 0)">启用</option>
                  </select>
                  <div id="display_union_char_filter_data_form" align="central" style="display: none">
                    <br />
                    <label for="union_char">设定UNION查询使用的字符:</label>
                    <input type="text" class="form-control" id="union_char" name="uChar" placeholder="i.e. 123 ">
                    <br />
                  </div><br />

                  <label for="select_union_from_filter">为UNION的FROM部分定义表:</label>
                  <select class="form-control" id="select_union_from_filter" name="union_from_filter">
                    <option value="" selected="selected" onClick="divHideAndSeek('display_union_from_filter_data_form', 1)">禁用</option>
                    <option value="enabled" onClick="divHideAndSeek('display_union_from_filter_data_form', 0)">启用</option>
                  </select>
                  <div id="display_union_from_filter_data_form" align="central" style="display: none">
                    <br />
                    <label for="union_from">在UNION查询SQL注入中填充FORM的表格:</label>
                    <input type="text" class="form-control" id="union_from" name="uFrom" placeholder="i.e. users ">
                    <br />
                  </div><br />
                </div><br />






              </div>
              <div class="col-md-1"></div>
              <div class="col-md-4">
                <label for="select_technique">选择要测试的SQLi方法:</label>
                <select class="form-control" id="technique" name="tech[]" size="7" onchange="techCheck()" multiple>
                  <option value="A">测试所有方法!</option>
                  <option value="B" selected="selected">基于布尔的盲注</option>
                  <option value="E">基于错误的盲注</option>
                  <option value="Q">内联查询</option>
                  <option value="S">堆叠查询</option>
                  <option value="T">基于时间的盲注</option>
                  <option value="U">基于Union的查询</option>
                </select><br />

                <div class="col-md-4">
                  <label for="select_scan_level">扫描级别:</label>
                  <select class="form-control" id="select_scan_level" name="level">
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3" selected="selected"> 3 </option>
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                  </select><br />
                </div>
                <div class="col-md-4">
                  <label for="select_scan_risk">风险等级:</label>
                  <select class="form-control" id="select_risk" name="risk">
                    <option value="0"> 空 </option>
                    <option value="1"> 低 </option>
                    <option value="2" selected="selected"> 中 </option>
                    <option value="3"> 高 </option>
                  </select><br />
                </div>
                <div class="col-md-3">
                  <label for="select_thread_count">线程数:</label>
                  <select class="form-control" id="select_thread_count" name="threads">
                    <option value="1" selected="selected"> 1 </option>
                    <?php
                      foreach(range(2, 10) as $number) {
                        echo "                  <option value=\"$number\"> $number </option>";
                      }
                    ?>
                  </select><br />
                </div>

                <label for="select_dbms">选择后端数据库类型:</label>
                <select class="form-control" id="select_dbms" name="dbms">
                  <option value="" selected="selected">未知</option>
                  <option value="DB2">DB2</option>
                  <option value="Firebird">Firebird</option>
                  <option value="Microsoft Access">MS-Access</option>
                  <option value="Microsoft SQL Server">MS-SQL</option>
                  <option value="MySQL">MySQL</option>
                  <option value="Oracle">Oracle</option>
                  <option value="PostgreSQL">PostgreSQL</option>
                  <option value="SAP MaxDB">SAP MaxDB</option>
                  <option value="SQLite">SQLite</option>
                  <option value="Sybase">Sybase</option>
                </select><br />

                <label for="select_os">选择后端操作系统类型:</label>
                <select class="form-control" id="select_os" name="os">
                  <option value="" selected="selected">未知</option>
                  <option value="Linux">Linux</option>
                  <option value="Windows">Windows</option>
                </select><br />

                <label for="select_tamper">选择要使用的篡改脚本:</label>
                <select class="form-control" id="select_tamper" name="tamper[]" size="7" multiple>
                  <option value="" selected="selected">不应用任何篡改脚本!</option>

                  <?php
                    include("./inc/config.php");
                    $tamperScripts = array_diff(glob(SQLMAP_BIN_PATH . "tamper/*.py"), array(".", "..", SQLMAP_BIN_PATH . "tamper/__init__.py"));
                    foreach($tamperScripts as $tscript) {
                      $ts = str_replace(SQLMAP_BIN_PATH . "tamper/", "", $tscript);
                      echo '<option value="tamper/' . $ts . '">' . $ts . '</option>';
                    }
                  ?>

                </select><br />
              </div>
              <div class="col-md-1"></div>
            </div>

