<header>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="index.php"><i class="icon-home icon-white"></i> Website Controller System</a>
            <ul class="nav user_menu pull-right">
                <li class="hidden-phone hidden-tablet">
                    <div class="nb_boxes clearfix">
                        <a data-toggle="modal" data-backdrop="static" href="#myMail" class="label ttip_b"
                           title="New messages">25 <i class="splashy-mail_light"></i></a>
                        <a data-toggle="modal" data-backdrop="static" href="#myTasks" class="label ttip_b"
                           title="New tasks">10 <i class="splashy-calendar_week"></i></a>
                    </div>
                </li>
                <li class="divider-vertical hidden-phone hidden-tablet"></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle nav_condensed" data-toggle="dropdown"><i class="flag-gb"></i>
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"><i class="flag-de"></i> Deutsch</a></li>
                        <li><a href="javascript:void(0)"><i class="flag-fr"></i> Français</a></li>
                        <li><a href="javascript:void(0)"><i class="flag-es"></i> Español</a></li>
                        <li><a href="javascript:void(0)"><i class="flag-ru"></i> Pусский</a></li>
                    </ul>
                </li>
                <li class="divider-vertical hidden-phone hidden-tablet"></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/user_avatar.png" alt=""
                                                                                    class="user_avatar"/> Johny
                        Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="old_code/user_profile.html">My Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="old_code/login.html">Log Out</a></li>
                    </ul>
                </li>
            </ul>
            <a data-target=".nav-collapse" data-toggle="collapse" class="btn_menu">
                <span class="icon-align-justify icon-white"></span>
            </a>

            <div class="clearfix"></div>
            <nav>
                <div class="nav-collapse">
                    <ul class="nav nav-bgcolor">

                        <li class="dropdown">
                            <a href="index.php"><i
                                    class="icon-list-alt icon-white"></i> Bảng điều khiển<b class="caret"></b></a>
                        </li>


                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i
                                    class="icon-list-alt icon-white"></i> Sản phẩm <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $this->createUrl('product/index')?>"> Danh sách sản phẩm</a></li>
                                <li><a href="#"> Danh sách loại sản phẩm</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i
                                    class="icon-list-alt icon-white"></i> Bài viết <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="danhsach.php"> Danh sách bài viết</a></li>
                                <li><a href="#"> Danh sách loại bài viết</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i
                                    class="icon-wrench icon-white"></i> Công ty<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="danhsach.php"> Danh sách nhà cung cấp</a></li>
                                <li><a href="danhsach.php"> Danh sách nhà sản xuất</a></li>
                                <li><a href="#"> Gửi/Đặt sản phẩm</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i
                                    class="icon-user icon-white"></i> Người dùng<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="danhsach.php"> Danh sách thành viên</a></li>
                                <li><a href="danhsach.php"> Danh sách quản trị</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i
                                    class="icon-user icon-white"></i> Thống kê<b class="caret"></b></a>

                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i
                                    class="icon-user icon-white"></i> Tài nguyên<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery-img.php"> Danh sách ảnh</a></li>
                                <li><a href="gallery-video.php"> Danh sách video</a></li>
                                <li><a href="#"> Danh sách quảng cáo</a></li>

                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="modal hide fade" id="myMail">
    <div class="modal-header">
        <button class="close" data-dismiss="modal">×</button>
        <h3>New messages</h3>
    </div>
    <div class="modal-body">
        <div class="alert alert-info">In this table jquery plugin turns a table row into a clickable link.</div>
        <table class="table table-condensed table-striped" data-provides="rowlink">
            <thead>
            <tr>
                <th>Sender</th>
                <th>Subject</th>
                <th>Date</th>
                <th>Size</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Declan Pamphlett</td>
                <td><a href="javascript:void(0)">Lorem ipsum dolor sit amet</a></td>
                <td>23/05/2012</td>
                <td>25KB</td>
            </tr>
            <tr>
                <td>Erin Church</td>
                <td><a href="javascript:void(0)">Lorem ipsum dolor sit amet</a></td>
                <td>24/05/2012</td>
                <td>15KB</td>
            </tr>
            <tr>
                <td>Koby Auld</td>
                <td><a href="javascript:void(0)">Lorem ipsum dolor sit amet</a></td>
                <td>25/05/2012</td>
                <td>28KB</td>
            </tr>
            <tr>
                <td>Anthony Pound</td>
                <td><a href="javascript:void(0)">Lorem ipsum dolor sit amet</a></td>
                <td>25/05/2012</td>
                <td>33KB</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <a href="javascript:void(0)" class="btn">Go to mailbox</a>
    </div>
</div>
<div class="modal fade" id="myTasks">
    <div class="modal-header">
        <button class="close" data-dismiss="modal">×</button>
        <h3>New Tasks</h3>
    </div>
    <div class="modal-body">
        <div class="alert alert-info">In this table jquery plugin turns a table row into a clickable link.</div>
        <table class="table table-condensed table-striped" data-provides="rowlink">
            <thead>
            <tr>
                <th>id</th>
                <th>Summary</th>
                <th>Updated</th>
                <th>Priority</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>P-23</td>
                <td><a href="javascript:void(0)">Admin should not break if URL&hellip;</a></td>
                <td>23/05/2012</td>
                <td class="tac"><span class="label label-important">High</span></td>
                <td>Open</td>
            </tr>
            <tr>
                <td>P-18</td>
                <td><a href="javascript:void(0)">Displaying submenus in custom&hellip;</a></td>
                <td>22/05/2012</td>
                <td class="tac"><span class="label label-warning">Medium</span></td>
                <td>Reopen</td>
            </tr>
            <tr>
                <td>P-25</td>
                <td><a href="javascript:void(0)">Featured image on post types&hellip;</a></td>
                <td>22/05/2012</td>
                <td class="tac"><span class="label label-success">Low</span></td>
                <td>Updated</td>
            </tr>
            <tr>
                <td>P-10</td>
                <td><a href="javascript:void(0)">Multiple feed fixes and&hellip;</a></td>
                <td>17/05/2012</td>
                <td class="tac"><span class="label label-warning">Medium</span></td>
                <td>Open</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <a href="javascript:void(0)" class="btn">Go to task manager</a>
    </div>
</div>
</header>