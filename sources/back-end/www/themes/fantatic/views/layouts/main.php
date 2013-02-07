<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <?php include'basic-style.php'?>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<?php include 'style-switcher.php' ?>

<div id="maincontainer" class="clearfix">
    <!-- header -->
    <?php include 'header.php'?>

    <!-- main content -->
    <div id="contentwrapper">
        <a class="sidebar_switch ttip_r on_switch" href="javascript:void(0)" oldtitle="Hide Sidebar"
           aria-describedby="ui-tooltip-3">Sidebar switch</a>

        <div class="main_content">
            <?php include'breadcumb.php'?>
            <div class="row-fluid">
                <div class="span5">
                    <h3 class="heading">Các chủ đề bài viết
                        <small>tuần qua</small>
                    </h3>
                    <div id="fl_2" style="height:200px;width:80%;margin:50px auto 0"></div>
                </div>
                <div class="span7">
                    <div class="heading clearfix">
                        <h3 class="pull-left">Lượt truy cập</h3>
                        <span class="pull-right label label-info ttip_t"
                              title="Here is a sample info tooltip">Info</span>
                    </div>
                    <div id="fl_1" style="height:270px;width:100%;margin:15px auto 0"></div>
                </div>
            </div>
            <div class="row-fluid">
                <h3 class="heading">Bài viết mới nhất</h3>
                <a href="#" class="btn delete_rows_dt" data-tableid="dt_gal"><i class="icon-trash"></i> Delete all</a>
                <!--delete all button --->

                <table class="table table-bordered table-striped table_vam" id="dt_gal">
                    <thead>
                    <tr>
                        <th class="table_checkbox"><input type="checkbox" name="select_rows" class="select_rows"
                                                          data-tableid="dt_gal"/>
                        </th>

                        <th>Số thứ tự</th>
                        <th>Mã</th>
                        <th>Loại bài viết</th>
                        <th>Tiêu đề</th>
                        <th>Hình ảnh</th>
                        <th>Tác giả</th>
                        <th>Ngày đăng</th>
                        <th>Thao tác</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name="row_sel" class="row_sel"/></td>
                        <td>1</td>
                        <td>135</td>
                        <td>Laptop</td>
                        <td>Laptop giá rẻ Lenovo G480 299$</td>
                        <td style="width:60px">
                            <a href="gallery/Image10.jpg" title="Image 10" class="cbox_single thumbnail">
                                <img alt="" src="gallery/Image10_tn.jpg" style="height:50px;width:50px">
                            </a>
                        </td>
                        <td>cristazn</td>
                        <td>20/12/2013</td>
                        <td>
                            <a href="#" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
                            <a href="#" class="sepV_a" title="View"><i class="icon-eye-open"></i></a>
                            <a href="#" title="Delete"><i class="icon-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="row_sel" class="row_sel"/></td>
                        <td>1</td>
                        <td>134</td>
                        <td>Laptop</td>
                        <td>Laptop giá rẻ Lenovo G480 299$</td>
                        <td style="width:60px">
                            <a href="gallery/Image10.jpg" title="Image 10" class="cbox_single thumbnail">
                                <img alt="" src="gallery/Image10_tn.jpg" style="height:50px;width:50px">
                            </a>
                        </td>
                        <td>cristazn</td>
                        <td>20/12/2013</td>
                        <td>
                            <a href="#" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
                            <a href="#" class="sepV_a" title="View"><i class="icon-eye-open"></i></a>
                            <a href="#" title="Delete"><i class="icon-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="row_sel" class="row_sel"/></td>
                        <td>1</td>
                        <td>134</td>
                        <td>Laptop</td>
                        <td>Laptop giá rẻ Lenovo G480 299$</td>
                        <td style="width:60px">
                            <a href="gallery/Image10.jpg" title="Image 10" class="cbox_single thumbnail">
                                <img alt="" src="gallery/Image10_tn.jpg" style="height:50px;width:50px">
                            </a>
                        </td>
                        <td>cristazn</td>
                        <td>20/12/2013</td>
                        <td>
                            <a href="#" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
                            <a href="#" class="sepV_a" title="View"><i class="icon-eye-open"></i></a>
                            <a href="#" title="Delete"><i class="icon-trash"></i></a>
                        </td>
                    </tr>

                    </tbody>
                </table>

                <!-- hide elements (for later use) -->
                <div class="hide">

                    <!-- confirmation box -->
                    <div id="confirm_dialog" class="cbox_content">
                        <div class="sepH_c tac"><strong>Bạn có muốn xóa các dòng dữ liệu này không ?</strong></div>
                        <div class="tac">
                            <a href="#" class="btn btn-gebo confirm_yes">Có</a>
                            <a href="#" class="btn confirm_no">Không</a>
                        </div>
                    </div>
                </div>


            </div>


            <!-- sidebar -->
            <?php include 'sidebar.php'?>
            <?php include 'basic-script.php' ?>

            <!--external script--->
            <?php
                if($this->getUniqueId()=='site') {
                    include 'custom-scripts/dashboard.php';
                }

            ?>



        </div>
    </div>
</div>
</body>
</html>
