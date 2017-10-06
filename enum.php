
            <br />
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-4">
                <div id="display_enum_db_data_form" align="central">
                  <label for="enum_db">转储或枚举数据库:</label>
                  <input type="text" class="form-control" id="enum_db" name="db" placeholder="i.e. database,names,here ">
                  <br />
                </div>

                <div id="display_enum_table_data_form" align="central">
                  <br />
                  <label for="enum_table">转储或枚举表:</label>
                  <input type="text" class="form-control" id="enum_table" name="tbl" placeholder="i.e. table,names,here ">
                  <br />
                </div>

                <div id="display_enum_column_data_form" align="central">
                  <br />
                  <label for="enum_column">转储或枚举列:</label>
                  <input type="text" class="form-control" id="enum_column" name="col" placeholder="i.e. juicy,columns,here ">
                  <br />
                </div>

                <div id="display_enum_not_column_data_form" align="central">
                  <br />
                  <label for="enum_exclude_column">要排除或不枚举的列:</label>
                  <input type="text" class="form-control" id="enum_exclude_column" name="excludeCol" placeholder="i.e. useless,columns,here ">
                  <br />
                </div>

                <div id="display_enum_db_user_data_form" align="central">
                  <br />
                  <label for="enum_db_user">枚举指定的数据库用户:</label>
                  <input type="text" class="form-control" id="enum_db_user" name="user" placeholder="i.e. username ">
                  <br />
                </div>

                <div id="display_enum_where_data_form" align="central">
                  <br />
                  <label for="enum_where">过滤转储结果的条件:</label>
                  <input type="text" class="form-control" id="enum_where" name="dumpWhere" placeholder="i.e. group='admin' ">
                  <br />
                </div>

              </div>
              <div class="col-md-1"></div>
              <div class="col-md-4">
                <label for="select_enum_options">选择要启用的枚举选项:</label>
                <select class="form-control" id="enum_options" name="enum_options[]" size="19" onchange="enumCheck()" multiple>
                  <option value="getAll">枚举所有的信息！</option>
                  <option value="getBanner" selected="selected">版本或Banner信息</option>
                  <option value="extensiveFp">DBMS指纹信息</option>
                  <option value="getHostname">数据库服务器主机名</option>
                  <option value="getCurrentDb">当前活动数据库</option>
                  <option value="getDbs">所有可用的数据库</option>
                  <option value="getCurrentUser">当前数据库用户</option>
                  <option value="getUsers">所有数据库用户</option>
                  <option value="getSchema">转储数据库和表架构</option>
                  <option value="isDba">检查用户是否是DBA</option>
                  <option value="getPasswordHashes">转储数据库用户密码</option>
                  <option value="getPrivileges">检查数据库用户权限</option>
                  <option value="getRoles">检查数据库用户角色</option>
                  <option value="getCount">检索表的条目数</option>
                  <option value="getTables">列举数据库中的所有表</option>
                  <option value="getColumns">列举数据库表中的字段</option>
                  <option value="search">搜索数据库，表或列名</option>
                  <option value="commonTables">暴力猜解常见表名</option>
                  <option value="commonColumns">暴力猜解常见列名</option>
                  <option value="dumpTable">转储表中所有数据</option>
                  <option value="dumpAll">转储数据库中所有表的数据!</option>
                  <option value="excludeSysDbs">排除默认系统数据库</option>


                </select><br />
                <div class="col-md-1"></div>
                <div class="col-md-4">
                  <label for="select_row_start">行开始:</label>
                  <select class="form-control" id="select_row_start" name="limitStart">
                    <option value="" selected="selected"> 禁用 </option>
                    <?php
                      foreach(range(1, 1000) as $number) {
                        echo "                  <option value=\"$number\"> $number </option>";
                      }
                    ?>
                  </select><br />
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                  <label for="select_row_stop">行结束:</label>
                  <select class="form-control" id="select_row_stop" name="limitStop">
                    <option value="" selected="selected"> 禁用 </option>
                    <?php
                      foreach(range(1, 1000) as $number) {
                        echo "                  <option value=\"$number\"> $number </option>";
                      }
                    ?>
                  </select><br />
                </div>
                <div class="col-md-1"></div>

                <div class="col-md-12">
                  <div id="display_enum_sql_query_data_form" align="central">
                    <br />
                    <label for="enum_sql_query">要执行的 SQL 语句:</label>
                    <input type="text" class="form-control" id="enum_sql_query" name="enum_sql_query" placeholder="i.e. SELECT version() ">
                    <br />
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>

