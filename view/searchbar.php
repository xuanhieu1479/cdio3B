<form action="/view/timkiem.php" method="get">
    <div class="col-md-2 form-time-w3layouts editContent">
            <label class="editContent"><span class="fa fa-map-marker" aria-hidden="true"></span>Thành Phố</label>
            <select class="form-control" name="City">
                <?php
                    foreach ($result as $city) {
                        echo '<option value="' . $city['thanhpho'] . '">' . $city['thanhpho'] . '</option>';
                    }
                ?>
            </select>
    </div>
    <div class="col-md-2 form-date-w3-agileits editContent">
            <label class="editContent"><span class="fa fa-user" aria-hidden="true"></span> Số Người</label>
            <select class="form-control" name="Quantity">
                <option value="1">1 người</option>
                <option value="2">2 người</option>
                <option value="3">3 người</option>
                <option value="4">4 người</option>
                <option value="5">5 người hoặc hơn</option>
            </select>
    </div>
    <div class="col-md-2 form-date-w3-agileits editContent">
            <label class="editContent"><span class="fa fa-use" aria-hidden="true"></span> Số tiền</label>
            <select class="form-control" name="Price">
                <option value="500-1000">500.000~1.000.000</option>
                <option value="1000-2000">1.000.000~2.000.000</option>
                <option value="2000-3000">2.000.000~3.000.000</option>
                <option value=">3000">Từ 3.000.000 trở lên</option>
            </select>
    </div>
    <div class="col-md-2 form-left-agileits-w3layouts editContent">
            <label class="editContent"><span class="fa fa-bus" aria-hidden="true"></span> Checkin</label>
        <div class="agileits_w3layouts_main_gridl">
            <input class="date has Datepicker" id="datepicker" placeholder="Ngảy Ở" name="StartDate" type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '01/01/2019';}">
        </div>
    </div>
    <div class="col-md-2 form-left-agileits-w3layouts editContent">
            <label class="editContent"><span class="fa fa-bus" aria-hidden="true"></span> Checkout</label>
        <div class="agileits_w3layouts_main_gridl">
            <input class="date has Datepicker" id="datepicker1" placeholder="Ngày Đi" name="EndDate" type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '01/01/2019';}">
        </div>
    </div>
    <div class="col-md-2 form-left-agileits-submit editContent">
            <input type="submit" value="Tìm Kiếm">
    </div>
    <div class="clearfix"></div>
</form>