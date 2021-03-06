<?php $cfg = array(
    "title"          => $this->consoleMod["app"]["main"]["title"],
    "menu_active"    => "app",
    "sub_active"     => "list",
    "baigoCheckall"  => "true",
    "baigoValidator" => "true",
    "baigoSubmit"    => "true",
    "pathInclude"    => BG_PATH_TPLSYS . "console/default/include/",
    "str_url"        => BG_URL_CONSOLE . "index.php?mod=app&act=list&" . $this->tplData["query"],
); ?>

<?php include($cfg["pathInclude"] . "console_head.php"); ?>

    <div class="form-group clearfix">
        <div class="pull-left">
            <ul class="nav nav-pills bg-nav-pills">
                <li>
                    <a href="<?php echo BG_URL_CONSOLE; ?>index.php?mod=app&act=form">
                        <span class="glyphicon glyphicon-plus"></span>
                        <?php echo $this->lang["href"]["add"]; ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BG_URL_HELP; ?>index.php?mod=console&act=app" target="_blank">
                        <span class="glyphicon glyphicon-question-sign"></span>
                        <?php echo $this->lang["href"]["help"]; ?>
                    </a>
                </li>
            </ul>
        </div>
        <div class="pull-right">
            <form name="app_search" id="app_search" action="<?php echo BG_URL_CONSOLE; ?>index.php" method="get" class="form-inline">
                <input type="hidden" name="mod" value="app">
                <input type="hidden" name="act" value="list">
                <div class="form-group hidden-sm hidden-xs">
                    <select name="status" class="form-control input-sm">
                        <option value=""><?php echo $this->lang["option"]["allStatus"]; ?></option>
                        <?php foreach ($this->status["app"] as $key=>$value) { ?>
                            <option <?php if ($this->tplData["search"]["status"] == $key) { ?>selected<?php } ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="key" value="<?php echo $this->tplData["search"]["key"]; ?>" placeholder="<?php echo $this->lang["label"]["key"]; ?>" class="form-control input-sm">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <form name="app_list" id="app_list" class="form-inline">
        <input type="hidden" name="<?php echo $this->common["tokenRow"]["name_session"]; ?>" value="<?php echo $this->common["tokenRow"]["token"]; ?>">

        <div class="panel panel-default">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-nowrap bg-td-xs">
                                <label for="chk_all" class="checkbox-inline">
                                    <input type="checkbox" name="chk_all" id="chk_all" data-parent="first">
                                    <?php echo $this->lang["label"]["all"]; ?>
                                </label>
                            </th>
                            <th class="text-nowrap bg-td-xs"><?php echo $this->lang["label"]["id"]; ?></th>
                            <th><?php echo $this->lang["label"]["appName"]; ?></th>
                            <th class="text-nowrap bg-td-md"><?php echo $this->lang["label"]["status"]; ?> / <?php echo $this->lang["label"]["note"]; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->tplData["appRows"] as $key=>$value) {
                            if ($value["app_status"] == "enable") {
                                $css_status = "success";
                            } else {
                                $css_status = "default";
                            } ?>
                            <tr>
                                <td class="text-nowrap bg-td-xs"><input type="checkbox" name="app_ids[]" value="<?php echo $value["app_id"]; ?>" id="app_id_<?php echo $value["app_id"]; ?>" data-validate="app_id" data-parent="chk_all"></td>
                                <td class="text-nowrap bg-td-xs"><?php echo $value["app_id"]; ?></td>
                                <td>
                                    <ul class="list-unstyled">
                                        <li><?php echo $value["app_name"]; ?></li>
                                        <li>
                                            <ul class="bg-nav-line">
                                                <li>
                                                    <a href="<?php echo BG_URL_CONSOLE; ?>index.php?mod=app&act=show&app_id=<?php echo $value["app_id"]; ?>"><?php echo $this->lang["href"]["show"]; ?></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo BG_URL_CONSOLE; ?>index.php?mod=app&act=form&app_id=<?php echo $value["app_id"]; ?>"><?php echo $this->lang["href"]["edit"]; ?></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo BG_URL_CONSOLE; ?>index.php?mod=app&act=belong&app_id=<?php echo $value["app_id"]; ?>"><?php echo $this->lang["href"]["belong"]; ?></a>
                                                </li>
                                                <li>
                                                    <a href="#app_modal" data-toggle="modal" data-id="<?php echo $value["app_id"]; ?>"><?php echo $this->lang["href"]["notifyTest"]; ?></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                                <td class="text-nowrap bg-td-md">
                                    <ul class="list-unstyled">
                                        <li>
                                            <span class="label label-<?php echo $css_status; ?> bg-label"><?php echo $this->status["app"][$value["app_status"]]; ?></span>
                                        </li>
                                        <li><?php echo $value["app_note"]; ?></li>
                                    </ul>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"><span id="msg_app_id"></span></td>
                            <td colspan="2">
                                <div class="bg-submit-box bg-submit-box-list"></div>
                                <div class="form-group">
                                    <div id="group_act">
                                        <select name="act" id="act" data-validate class="form-control input-sm">
                                            <option value=""><?php echo $this->lang["option"]["batch"]; ?></option>
                                            <?php foreach ($this->status["app"] as $key=>$value) { ?>
                                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                            <?php } ?>
                                            <option value="del"><?php echo $this->lang["option"]["del"]; ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm btn-primary bg-submit"><?php echo $this->lang["btn"]["submit"]; ?></button>
                                </div>
                                <div class="form-group">
                                    <span id="msg_act"></span>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </form>

    <div class="text-right">
        <?php include($cfg["pathInclude"] . "page.php"); ?>
    </div>

    <div class="modal fade" id="app_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <?php echo $this->lang["label"]["notifyTest"]; ?>
                </div>
                <div class="modal-body">
                    <form id="app_notify">
                        <input type="hidden" name="act" value="notify">
                        <input type="hidden" name="app_id_notify" id="app_id_notify">
                        <div class="bg-submit-box bg-submit-box-modal"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><?php echo $this->lang["btn"]["close"]; ?></button>
                </div>
            </div>
        </div>
    </div>


<?php include($cfg["pathInclude"] . "console_foot.php"); ?>

    <script type="text/javascript">
    var opts_validator_list = {
        app_id: {
            len: { min: 1, max: 0 },
            validate: { selector: "[data-validate='app_id']", type: "checkbox" },
            msg: { selector: "#msg_app_id", too_few: "<?php echo $this->rcode["x030202"]; ?>" }
        },
        act: {
            len: { min: 1, max: 0 },
            validate: { type: "select", group: "#group_act" },
            msg: { selector: "#msg_act", too_few: "<?php echo $this->rcode["x030203"]; ?>" }
        }
    };

    var opts_submit_list = {
        ajax_url: "<?php echo BG_URL_CONSOLE; ?>request.php?mod=app",
        confirm: {
            selector: "#act",
            val: "del",
            msg: "<?php echo $this->lang["confirm"]["del"]; ?>",
        },
        box: {
            selector: ".bg-submit-box-list"
        },
        msg_text: {
            submitting: "<?php echo $this->lang["label"]["submitting"]; ?>"
        }
    };

    var opts_submit_notify = {
        ajax_url: "<?php echo BG_URL_CONSOLE; ?>request.php?mod=app",
        box: {
            selector: ".bg-submit-box-modal",
            delay: 50000
        },
        selector: {
            submit_btn: ".bg-submit-modal"
        },
        msg_text: {
            submitting: "<?php echo $this->lang["label"]["submitting"]; ?>"
        }
    };

    $(document).ready(function(){
        var obj_notify = $("#app_notify").baigoSubmit(opts_submit_notify);

        $("#app_modal").on("show.bs.modal",function(event){
            var _obj_button = $(event.relatedTarget);
            var _id         = _obj_button.data("id");
            $("#app_id_notify").val(_id);
            obj_notify.formSubmit();
        });

        var obj_validator_list    = $("#app_list").baigoValidator(opts_validator_list);
        var obj_submit_list       = $("#app_list").baigoSubmit(opts_submit_list);
        $(".bg-submit").click(function(){
            if (obj_validator_list.verify()) {
                obj_submit_list.formSubmit();
            }
        });
        $("#app_list").baigoCheckall();
    });
    </script>

<?php include($cfg["pathInclude"] . "html_foot.php"); ?>