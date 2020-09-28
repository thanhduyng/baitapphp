<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\REQUEST;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/phongban', ['as' => 'phongban', 'uses' => 'phongBanController@hienthi']);
Route::get('/them_phongban', 'phongBanController@them');
Route::post('/save_phongban', ['as' => 'save_phongban', 'uses' => 'phongBanController@save']);
Route::post('/save_phongban2', ['as' => 'save_phongban2', 'uses' => 'phongBanController@save2']);
Route::get('/sua_phongban/{id}', 'phongBanController@sua');
Route::get('/xoa_phongban/{id}', 'phongBanController@xoa');

Route::get('/chucdanh', ['as' => 'chucdanh', 'uses' => 'chucDanhController@hienthi']);
Route::get('/them_chucdanh', 'chucDanhController@them');
Route::post('/save_chucdanh', ['as' => 'save_chucdanh', 'uses' => 'chucDanhController@save']);
Route::get('/sua_chucdanh/{id}', 'chucDanhController@sua');
Route::post('/save_chucdanh2', ['as' => 'save_chucdanh2', 'uses' => 'chucDanhController@save2']);
Route::get('/xoa_chucdanh/{id}', 'chucDanhController@xoa');


Route::get('/user', ['as' => 'user', 'uses' => 'userController@hienthi']);
Route::get('/them_user', 'userController@them');
Route::post('/save_user', ['as' => 'save_user', 'uses' => 'userController@save']);
Route::get('/sua_user/{id}', 'userController@sua');
Route::post('/update_user', ['as' => 'update_user', 'uses' => 'userController@update']);
Route::get('/xoa_user/{id}', 'userController@xoa');

Route::get('/donhang', ['as' => 'donhang', 'uses' => 'donhangController@hienthi']);

Route::get('/sach', ['as' => 'sach', 'uses' => 'sachController@hienthi']);
Route::get('/them_sach', 'sachController@them');
Route::post('/save_sach', ['as' => 'save_sach', 'uses' => 'sachController@save']);
Route::get('/sua_sach/{id}', 'sachController@sua');
Route::post('/update_sach', ['as' => 'update_sach', 'uses' => 'sachController@update']);
Route::get('/xoa_sach/{id}', 'sachController@xoa');

Route::get('/phieuthuesach', ['as' => 'phieuthuesach', 'uses' => 'phieuthuesachController@hienthi']);
Route::get('/them_phieuthuesach', 'phieuthuesachController@them');
Route::post('/save_phieuthuesach', ['as' => 'save_phieuthuesach', 'uses' => 'phieuthuesachController@save']);
Route::get('/sua_phieuthuesach/{id}', 'phieuthuesachController@sua');
Route::post('/update_phieuthuesach', ['as' => 'update_phieuthuesach', 'uses' => 'phieuthuesachController@update']);
Route::get('/xoa_phieuthuesach/{id}', 'phieuthuesachController@xoa');

Route::get('/user/list', function () {
    $users = DB::table("users")->get();
    $phongban = DB::table("phong_ban")->pluck("tenPhongBan", "id");
    $chucdanh = DB::table("chuc_danh")->pluck("tenChucDanh", "id");

    return view(
        'hienthi',
        [
            'phongban' => $phongban, 'chucdanh' => $chucdanh, 'users' => $users
        ]
    );
})->name('user.list');

Route::get('/user/edit/{id}', function ($id) {
    $users = DB::table("users")->find($id);
    $phongban = DB::table("phong_ban")->pluck("tenPhongBan", "id");
    $chucdanh = DB::table("chuc_danh")->pluck("tenChucDanh", "id");

    return view(
        'update',
        [
            'phongbanid' => $phongban, 'chucdanhid' => $chucdanh, 'users' => $users
        ]
    );
})->name('user.edit');



Route::get('manhinhthemmoi', function () {
    // echo "Đây là màn hình thêm mới";

    // lấy toàn bộ data trong table
    $userArr = DB::table("users")->get();
    // dd($userArr);
    // foreach($userArr as $item){
    //     echo $item->name;

    // }

    //lấy dòng đầu tiên của dữ liệu
    $user = DB::table("users")->first();
    // dd($user->name)

    //Lấy có where
    $userArr = DB::table("users")
        ->where("email", "=", "thanh@gmail.com")
        ->where("id", "=", 1)
        ->get();
    //dd($userArr);

    //phần điều kiện <,>,<><=<like,@@

    //Lấy, một dữ liệu theo cột(thường dùng khi cần lấy cấu hình, check quyền)
    //$name = DB::table("users")
    //->where("email","=","thanh@gmail.com")
    //->where("id","=",1)
    //->value("name");

    //Lấy dữ liệu theo id
    //    $user = DB::table("users")
    //     ->find(2);
    //     dd($user);


    // Lấy một mảng theo cột
    $userIdArr = DB::table("users")
        ->pluck("id");
    //    foreach($userIdArr as $user){
    //      echo $user->id;
    //    }
    // dd($userIdArr);

    // Lấy một mảng theo cột và có key & value, để đổ vào combobox
    //$userIdNameArr = DB::table("users")
    //->pluck("name","id"); // value,key

    // dd($userIdNameArr);

    // bổ sung chucdanhid, phongbanid cho bảng user.
    //Viết màn hình cập nhập user(phân vào chức danh và phòng ban)

    // đếm số lượng record
    // $countUser = DB::table("users")->where("id",2)->count();
    // echo $countUser;exit;

    //group by

    // $max = DB::table("migrations")->max("batch");
    // $sum = DB::table("migrations")->sum("batch");
    // $avg = DB::table("migrations")->avg("batch");
    // $maminx = DB::table("migrations")->min("batch");
    // echo $max;exit;

    // kiểm tra tồn tại
    // $exists = DB::table("migrations")->where("batch",5)->exists();
    // kiểm tra không tồn tại
    // $exists = DB::table("migrations")->where("batch",5)->doesntExist();
    // echo $exists?"tồn tại":"không tồn tại";exit;

    // Tạo bảng đơn hàng gồm(id, tên hàng, số lượng, đơn giá, thành tiền)
    // Viết chức năng in danh sách theo ngày
    // Viết chức năng in ra số tiền bán trong ngày, số đơn hàng bán trong ngày

    // $d = "20/12/2020";
    // $d = implode("-",(array_reverse(explode("/",$d))));

    // query tĩnh
    // $r = DB::select("select * from users where id ?",[4]);
    // dd($r);




})
    // ->middleware("Ghilog")
    // ->middleware('Authecation')
    ->name('manhinhthemmoi');

Route::get('/khongcoquyen', function () {
    echo "Không có quyền";
})->name('khongcoquyen');


//middleware saferequest kiểm tra dữ liệu nhập lên
// tìm post hoặc get có dấu /\ hay không,
//nếu có thì bỏ uqa request đó
// foreach $_REQUEST theo key value

// Tạo các entity chức năng( ít nhất có field routename), 
// entity chucnang_user (2 field chính id_user, id_chucnang)

//thực hiện viết middlware authenticartion
// để kiểm tra quyền truy cập của một người dùng đến một router

// bổ sung entity nhomnguoidung, nguoidung_nhom, nhom_chucnang
// Một người dùng thuộc nhiều nhóm
// Một nhóm có nhiều chức năng
// Kiểm tra quyền: gồm quyền ở bảng nguoidungchucnang và nhom_chucnang

Route::get('/GoiController', 'MyController@XinChao');
Route::get('/Thamso/{ten}', 'MyController@KhoaHoc');

// Viết chức năng quản lí thư viện gồm
// Danh sách sách
// Danh sách phiếu thuê sách
// chi tiết phiếu thuê sách
// lập báo cáo như sau:
//----báo cáo theo ngày gồm các cột dữ liệu
//--------Ngày thuê, số lượng phiếu, số lượng sách
//----Báo cáo theo tháng
//--------Tháng thuê, số lượng phiếu, số lượng sách
//----Báo cáo sách
//--------Tháng thuê, tên sách, số lượng được thuê
//--------Sắp xếp theo số lượng được thuê giảm dần

Route::get('/sach/list', function () {
    $sachs = DB::table("sachs")->get();
    return view(
        "listsachs",
        compact([
            "sachs"
        ])
    );
})->name("sachs.list");

Route::get('/phieuthuesach/list', function () {
    $phieuthuesach = DB::table("phieuthuesach")->get();
    return view(
        "listphieuthuesach",
        compact([
            "phieuthuesach"
        ])
    );
})->name("phieuthuesach.list");

Route::get('/phieuthuechitiet/list', function () {
    $sachs = DB::table("sachs")
        ->pluck("tensach", "id");

    $phieuthuesach = DB::table("phieuthuesach")
        ->pluck("tenphieuthue", "id");

    $chitietphieuthue = DB::table("chitietphieuthue")->get();
    return view(
        "listchitietphieuthue",
        compact([
            "chitietphieuthue", "sachs", "phieuthuesach"
        ])
    );
})->name("chitietphieuthue.list");

Route::get('/thongke/ngay', function () {
    $thongkengay = DB::select(
        'SELECT
            pt.ngaythue
            ,count(distinct pt.id) as soluongphieu
            ,count(ptct.sachid) as soluongsach
        FROM phieuthuesach pt 
            LEFT JOIN chitietphieuthue ptct ON pt.id = ptct.phieuthuesachid
        GROUP BY pt.ngaythue'
    );
    return view("thongkesachtheongay", ["thongkengay" => $thongkengay]);
})->name("thongke.ngay");

Route::get('/thongke/thang', function () {
    $thongkethang = DB::select(
        'SELECT
            EXTRACT(month from pt.ngaythue) as thangthue
            ,count(distinct pt.id) as soluongphieu
            ,count(ptct.sachid) as soluongsach
        FROM phieuthuesach pt 
            LEFT JOIN chitietphieuthue ptct ON pt.id = ptct.phieuthuesachid
        GROUP BY thangthue'
    );
    return view("thongkesachtheothang", ["thongkethang" => $thongkethang]);
})->name("thongke.thang");

Route::get('chucnang/them',"ChucnangController@them");