<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use DB;
use App\Models\VMatch;
use App\Models\MatchDetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage()
    {
        $v_matches = DB::select("SELECT * FROM `v_matches` WHERE date_start > CURRENT_TIME");
        return view('UserHome.HomePage.index', compact('v_matches'));
    }

    public function detailsPage($id)
    {
        $matchDetails = DB::select("SELECT *, t2.id as 'IdMatchDetail'  FROM `v_matches` as t1 INNER JOIN match_details as t2 ON t1.id = t2.id_match WHERE t1.id = $id");

        return view('UserHome.Cart.cart', compact('matchDetails'));
    }

    /**
     * @author ThanhVV
     * order ticket
     */
    public function orderTicket(Request $request)
    {
        // check valid
        if ($request->kh_numOfChairA > $request->so_ghe_trong_a || $request->kh_numOfChairB > $request->so_ghe_trong_b || ( $request->kh_numOfChairB < 1 &&  $request->kh_numOfChairA  < 1 )  ) {
            // echo "<script>";
            // echo "alert('Số lượng vé bạn đặt lớn hơn số lượng vé hiện tại hoặc bạn đặt không đúng');";
            // echo "</script>"; 
            return back()->with('fail', 'Số lượng vé bạn đặt lớn hơn số lượng vé hiện tại hoặc bạn đặt không đúng');     
        } else{
              // updated match SLVDB SLGT và lựa lại trong db của bảng v_match details 
        $value_ghe_trong_a = $request->so_ghe_trong_a - $request->kh_numOfChairA;
        $value_ghe_trong_b = $request->so_ghe_trong_b - $request->kh_numOfChairB ;
        $value_ghe_da_mua_a = $request->so_ghe_da_mua_a + $request->kh_numOfChairA;
        $value_ghe_da_mua_b = $request->so_ghe_da_mua_b + $request->kh_numOfChairB;
        $v_matches = DB::select("UPDATE `match_details`
                                SET
                                    `A_number_of_empty_seats` = '$value_ghe_trong_a',
                                    `A_number_of_seats_purchased` = '$value_ghe_da_mua_a',
                                    `B_number_of_empty_seats` = '$value_ghe_trong_b',
                                    `B_number_of_seats_purchased` = '$value_ghe_da_mua_b' 
                                WHERE `match_details`.`id` = $request->id_chi_tiet;");

        // insert DB của bảng order
            $totalMoneyA = $request->kh_numOfChairA * $request->gia_a;
            $totalMoneyB = $request->kh_numOfChairB * $request->gia_b;
            $totalMoney = $totalMoneyA + $totalMoneyB;
            $created_at = gmdate('Y-m-d h:i:s \G\M\T');
            $inserOrder = DB::select("INSERT INTO `orders` (`status`, `full_name`, `address1`, `address2`,  `phone`, `email`, `created_at`, `updated_at`, `id_match`, `numOfChairA`, `numOfChairB`, `totalMoneyChairA`, `totalMoneyChairB`, `totalPrice`) 
                                    VALUES ( '0', '$request->full_name', '$request->address1', '$request->address2',  '$request->phone', '$request->email', '$created_at', '', '$request->id_tran_dau', '$request->kh_numOfChairA', '$request->kh_numOfChairB', '$totalMoneyA', '$totalMoneyB', '$totalMoney')");

        // send mail
            $details = [
                'title' => 'Thông báo bạn đã đặt hàng thành công',
                'body' => [
                    'tenTranDau' =>  $request->ten_tran_dau,
                    'ngayThiDau' => $request->ngay_thi_dau,
                    'soGheKhanDaiA' => $request->kh_numOfChairA,
                    'soGheKhanDaiB' => $request->kh_numOfChairB,
                    'tongTienKDA' => $request->$totalMoneyA,
                    'tongTienKDB' =>  $request->totalMoneyB ,
                    'ngayDat' => $request->created_at,
                ]
            ];


            Mail::to("$request->email")->send(new TestMail("Đơn hàng của bạn đã xác nhận vụi lòng dùng SDT để xem chi tiết trên hệ thống"));

            return back()->with('success', 'Bạn đã đặt vé thành công !');     

        }

       
    }
}
